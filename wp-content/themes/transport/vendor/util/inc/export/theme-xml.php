<?php
/**
 * Theme XML
 * 
 * put this data in file "wp-theme.xml"
 * 
 * @package wptm.inc.export
 * @since wptm 1.0.0
 */

if (isset($_REQUEST['wptm_export']) && $_REQUEST['wptm_export']== "wp-theme.xml"):
    if (!function_exists('export_wp')) {
        require_once( ABSPATH . 'wp-admin/includes/export.php' );
    }
    export_wp();
    die;
endif;
