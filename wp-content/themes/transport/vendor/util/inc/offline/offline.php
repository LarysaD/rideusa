<?php
/**
 * Offline admin ui
 * 
 * @package wptm.inc.offline
 * @since wptm 1.0.0
 */
?><div class="wptm-dashboard-info">
    <table class="wptm-status-table">
        <thead>
            <tr>
                <th>OFFLINE INSTALLATION</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <ul style="list-style: square">
                        <li>No need of Internet connectivity in you machine </li>
                        <li>Posts, Pages, Media, Comments, widgets, Menus, Custom Post Types or any other data will get imported.</li>
                        <li>You can put all provide upload  data in upload folder.</li>
                        <li>Existing posts, pages, categories, images, custom post types or any other data will be deleted.</li>
                        <li>WordPress settings will be deleted after demo content import successfully. you can edit/modified settings  according to your requirement</li>
                        <li>Please click import only once and wait, it can take a couple of seconds</li>
                    </ul>

                    <p>offline installation follow below steps :</p>
                    <ul>
                        <li>STEP 1: Put all demo uploads  files in  uploads directory </li>
                        <li>STEP 2: Insert data using direct sql query</li>
                        <li>STEP 3: Search & Replace in database</li>
                        <li>STEP 4: Repair database  </li>
                        <li>STEP 5: Sign on using credentials username: admin / password: 123456</li>
                    </ul>
                    <p class="help"> Are you want to import demo content ? </p>
                    <?php
                    global $wpdb;
                    
                    $wptm_offline_query_data=array(
                        "wptm_import" => "offline",
                        "wptm_action" => "sql_import",
                        "wptm_durl" => site_url(),
                        "wptm_dbn" => DB_NAME,
                        "wptm_dbu" => DB_USER,
                        "wptm_dbp" => DB_PASSWORD,
                        "wptm_dbh" => DB_HOST,
                        "wptm_pfix" => $wpdb->prefix,
                    );
                    
                    $wptm_offline_query_string=http_build_query($wptm_offline_query_data, '', '&amp;');
                    $wptm_offline_replace_url = WPTM_URL . "/inc/offline/replace.php?" . $wptm_offline_query_string;
                    ?>

                    <p>
                        <a hr<?php ?>ef="admin.php?page=theemon-importer&step=4" class="button button-secondary">Back</a>
                        <a href="<?php echo $wptm_offline_replace_url; ?>" id="wptm-button-install-offline" class="button button-primary">Start Installation </a>
                    </p>
                </td>
            </tr>
        </tbody>
    </table>
</div>
