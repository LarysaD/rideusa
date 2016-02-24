<?php
/**
 * offline core ui
 * 
 * @package wptm.inc.offline
 * @since wptm 1.0.0
 */
?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" >
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <?php echo '<tit' . 'le>Theemon Offline Import</tit' . 'le>' ?>
        <style type="text/css">
            html{background:#f1f1f1}
            body{background:#fff;color:#444;font-family:"Open Sans",sans-serif;margin:2em auto;padding:1em 2em;max-width:700px;-webkit-box-shadow:0 1px 3px rgba(0,0,0,.13);box-shadow:0 1px 3px rgba(0,0,0,.13)}h1{border-bottom:1px solid #dadada;clear:both;color:#666;font:24px "Open Sans",sans-serif;margin:30px 0 0;padding:0 0 7px}
            #error-page{margin-top:50px}
            #error-page p{font-size:14px;line-height:1.5;margin:25px 0 20px}
            #error-page code{font-family:Consolas,Monaco,monospace}
            ul li{margin-bottom:10px;font-size:14px}
            a{color:#21759B;text-decoration:none}
            a:hover{color:#D54E21}            
        </style>
    </head>
    <body id="error-page">

        <h1>Please wait ..</h1>
        <ul>
            <li>Don't click on back button</li>
            <li>Don't refresh page.</li>
        </ul>
        <?php
        //echo dirname(__FILE__);
        if (!empty($_GET['wptm_import']) && $_GET['wptm_import'] == "offline"):

            require_once( dirname(__FILE__) . '/sql-import.php' );
            $wptmOfflineImporter = new WPTM_Offline_SQL_Import();  //importer class

            if ($_GET['wptm_action'] == "sql_import"):
                $import = $wptmOfflineImporter->import();
                if (isset($import) && count($import) == 0):
                    
                    $wptm_offline_query_sql = array(
                        "wptm_import" => "offline",
                        "wptm_action" => "search_replace",
                        "wptm_durl" => $_GET['wptm_durl'],
                        "wptm_dbn" => $_GET['wptm_dbn'],
                        "wptm_dbu" => $_GET['wptm_dbu'],
                        "wptm_dbp" => $_GET['wptm_dbp'],
                        "wptm_dbh" => $_GET['wptm_dbh'],
                        "wptm_pfix" => $_GET['wptm_pfix'],
                    );

                    $wptm_offline_query_string = http_build_query($wptm_offline_query_sql, '', '&');
                    $wptm_offline_replace_url = $_SERVER["PHP_SELF"] . "?" . $wptm_offline_query_string;
                    ?>
                    <script> window.location.href = '<?php echo $wptm_offline_replace_url; ?>';</script>
                <?php else: ?>
                    <p>Sorry import not work. Please conatct on Theemon support support@theemon.com</p>
                <?php
                endif;
            endif;

             if ($_GET['wptm_action'] == "search_replace"):
                $replace = $wptmOfflineImporter->replace();
                if (isset($replace['change']) && $replace['change'] == 0):
                    ?><p>Sorry search & replace not work. Please conatct on Theemon support support@theemon.com</p><?php
                else:
                    ?><script> window.location.href = '<?php echo $_GET['wptm_durl'] . "?wptm_offline_signon=true"; ?>';</script><?php
                endif;
            endif;
        endif;
        ?>
    </body>
</html>
<?php 