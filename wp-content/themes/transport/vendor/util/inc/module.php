<?php
/**
 * Load Module
 * 
 * Plugin installation using TGM
 * Import demo data using ONECLIK/MANUAL/OFFLINE
 * Export demo data of theme, options
 * 
 * @package wptm.inc
 * @since wptm 1.0.0
 */


transport_inclusion( 'vendor/util/inc/tgm/tgm.php' );
transport_inclusion( 'vendor/util/inc/oneclick/import.php' );
transport_inclusion( 'vendor/util/inc/manual/import.php' );
transport_inclusion( 'vendor/util/inc/offline/signon.php' );
transport_inclusion( 'vendor/util/inc/export/export.php' );

