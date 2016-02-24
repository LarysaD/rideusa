<?php
/*
  Plugin Name: WordPress Theemon Importer 
  Plugin URI: http://theemon.com/
  Description: Import demo data with offline, oneclick & manual .
  Author: WordPress Theemon Team
  Author URI: http://theemon.com/
  Version: 1.0.0
  Text Domain: wptm
  License: 
 */

define("WPTM_DIR", __DIR__);
define("WPTM_URL", get_template_directory_uri()."/vendor/util");
define("WPTM_REMOTE_URL", "http://theemon.com/t/transport-wp/PlaceHolder");

/**
 * @TGM Version 2.5.2
 * @WP Importer Version 0.6.1
 * @Wiget Data - Setting Import/Export Plugin Version 1.5.0
 */

transport_inclusion('vendor/util/inc/functions.php');
transport_inclusion('vendor/util/inc/module.php');
transport_inclusion('vendor/util/admin/admin.php');

$wptm_admin=new WPTM_Admin();
$wptm_admin->action();
