<?php
/**
 * Offline sql import functionality
 * 
 * @package wptm.inc.offline
 * @since wptm 1.0.0
 */

class WPTM_Offline_SQL_Import {

    private $dbname, $uname, $dbpass, $host;
    private $siteurl, $prefix;
    private $tbl_prefix, $sql_file, $search;

    public function __construct() {
        $this->dbname = $_GET['wptm_dbn'];
        $this->uname = $_GET['wptm_dbu'];
        $this->dbpass = $_GET['wptm_dbp'];
        $this->host = $_GET['wptm_dbh'];

        $this->siteurl = $_GET['wptm_durl'];
        $this->prefix = $_GET['wptm_pfix'];

        $this->tbl_prefix = '{{charity_}}';
        $this->sql_file = __DIR__ . '/theme-sql.txt';
        $this->search = 'http://theemon.com/t/transport-wp/PlaceHolder';
    }

    public function connection() {
        @ set_time_limit(60 * 10);
        //@ ini_set('memory_limit', '1024M');
        @call_user_func("ini_set", 'memory_limit', '1024M');

        $connection = @mysql_connect($this->host, $this->uname, $this->dbpass);
        @mysql_select_db($this->dbname, $connection);

        return $connection;
    }

    public function import() {

        $connection = $this->connection();
        $lines = file($this->sql_file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        
        $this->truncateTable($connection); //trancate all table
        
        $import = $this->sqlImport($lines, $this->prefix, $connection);
        if (isset($connection) && $connection) {
            mysql_close($connection);
        }
        return $import;
    }

    public function sqlImport($lines, $prefix, $connection) {
        $error = array();
        $buffer = '';
        foreach ($lines as $line) {
            // Skip lines containing EOL only
            if (($line = trim($line)) == '') {
                continue;
            }

            // skipping SQL comments
            if (substr(ltrim($line), 0, 2) == '--')
                continue;

            // An SQL statement could span over multiple lines ...
            if (substr($line, -1) != ';') {
                // Add to buffer
                $buffer .= $line;
                // Next line
                continue;
            } else
            if ($buffer) {
                $line = $buffer . $line;
                // Ok, reset the buffer
                $buffer = '';
            }
            // strip the trailing ;
            $line = substr($line, 0, -1);
            // Write the data
            $result = mysql_query(str_replace($this->tbl_prefix, $prefix, $line), $connection);
            
           // if (!$result) {
            //    $error[] = "<b>Error (mysql_query): " . mysql_error() . "</b>";
                //return;
           // } 
           $error = array();        
        }

        return $error;
    }

    public function replace() {
        $connection = $this->connection();

        $tables = $this->arrTable($connection);

        $this->updateMeta($connection);
        $report = $this->replacer($connection, $this->search, $this->siteurl, $tables);

        if (isset($connection) && $connection) {
            mysql_close($connection);
        }
        return $report;
    }

    function arrTable($connection) {

        $all_tables_mysql = @mysql_query('SHOW TABLES', $connection);
        $tables = array();
        if ($all_tables_mysql) {
            while ($table = mysql_fetch_array($all_tables_mysql)) {
                $tables[] = $table[0];
            }
        }

        return $tables;
    }

    function truncateTable($connection){
        $all_tables_mysql = @mysql_query('SHOW TABLES', $connection);
        if ($all_tables_mysql) {
            while ($table = mysql_fetch_array($all_tables_mysql)) {
                $result = mysql_query('TRUNCATE TABLE `'.$table[0].'`', $connection);
            }
        }
    }
    
      function updateMeta($connection){
        $result =mysql_query("UPDATE `".$this->tbl_prefix."usermeta` SET meta_key = REPLACE(meta_key,'wp_','".$this->tbl_prefix."')", $connection);
        $result2 =mysql_query("UPDATE `".$this->tbl_prefix."options` SET option_name = REPLACE(option_name,'wp_','".$this->tbl_prefix."')", $connection);

    }  
    
    public function replacer($connection, $search = '', $replace = '', $tables = array()) {

        $report = array('tables' => 0,
            'rows' => 0,
            'change' => 0,
            'updates' => 0,
            'start' => microtime(),
            'end' => microtime(),
            'errors' => array(),
        );

        if (is_array($tables) && !empty($tables)) {
            foreach ($tables as $table) {
                $report['tables'] ++;

                $columns = array();

                // Get a list of columns in this table
                $fields = mysql_query('DESCRIBE ' . $table, $connection);
                while ($column = mysql_fetch_array($fields))
                    $columns[$column['Field']] = $column['Key'] == 'PRI' ? true : false;

                // Count the number of rows we have in the table if large we'll split into blocks, This is a mod from Simon Wheatley
                $row_count = mysql_query('SELECT COUNT(*) FROM ' . $table, $connection);
                $rows_result = mysql_fetch_array($row_count);
                $row_count = $rows_result[0];
                if ($row_count == 0)
                    continue;

                $page_size = 50000;
                $pages = ceil($row_count / $page_size);

                for ($page = 0; $page < $pages; $page++) {

                    $current_row = 0;
                    $start = $page * $page_size;
                    $end = $start + $page_size;
                    // Grab the content of the table
                    $data = mysql_query(sprintf('SELECT * FROM %s LIMIT %d, %d', $table, $start, $end), $connection);

                    if (!$data)
                        $report['errors'][] = mysql_error();

                    while ($row = mysql_fetch_array($data)) {

                        $report['rows'] ++; // Increment the row counter
                        $current_row++;

                        $update_sql = array();
                        $where_sql = array();
                        $upd = false;

                        foreach ($columns as $column => $primary_key) {
                            ///??if ($guid == 1 && in_array($column, $exclude_cols))
                            ///?? continue;

                            $edited_data = $data_to_fix = $row[$column];

                            // Run a search replace on the data that'll respect the serialisation.
                            $edited_data = $this->recursive_unserialize_replace($search, $replace, $data_to_fix);

                            // Something was changed
                            if ($edited_data != $data_to_fix) {
                                $report['change'] ++;
                                $update_sql[] = $column . ' = "' . mysql_real_escape_string($edited_data) . '"';
                                $upd = true;
                            }

                            if ($primary_key)
                                $where_sql[] = $column . ' = "' . mysql_real_escape_string($data_to_fix) . '"';
                        }

                        if ($upd && !empty($where_sql)) {
                            $sql = 'UPDATE ' . $table . ' SET ' . implode(', ', $update_sql) . ' WHERE ' . implode(' AND ', array_filter($where_sql));
                            $result = mysql_query($sql, $connection);
                            if (!$result)
                                $report['errors'][] = mysql_error();
                            else
                                $report['updates'] ++;
                        } elseif ($upd) {
                            $report['errors'][] = sprintf('"%s" has no primary key, manual change needed on row %s.', $table, $current_row);
                        }
                    }
                }
            }
        }
        $report['end'] = microtime();
        return $report;
    }

    public function recursive_unserialize_replace($from = '', $to = '', $data = '', $serialised = false) {

        // some unseriliased data cannot be re-serialised eg. SimpleXMLElements
        try {

            if (is_string($data) && ( $unserialized = @unserialize($data) ) !== false) {
                $data = $this->recursive_unserialize_replace($from, $to, $unserialized, true);
            } elseif (is_array($data)) {
                $_tmp = array();
                foreach ($data as $key => $value) {
                    $_tmp[$key] = $this->recursive_unserialize_replace($from, $to, $value, false);
                }

                $data = $_tmp;
                unset($_tmp);
            } else {
                if (is_string($data))
                    $data = str_replace($from, $to, $data);
            }

            if ($serialised)
                return serialize($data);
        } catch (Exception $error) {
            
        }

        return $data;
    }

}
