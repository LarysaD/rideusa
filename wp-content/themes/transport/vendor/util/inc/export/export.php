<?php

/**
 * Export modual
 * 
 * theme.xml, usermeta.json ..etc
 * 
 * @package wptm.inc.export
 * @since wptm 1.0.0
 */
if (!isset($_REQUEST['wptm_export']))
    return;


transport_inclusion( 'vendor/util/inc/export/theme-xml.php');
transport_inclusion('vendor/util/inc/export/usermeta-json.php');
transport_inclusion( 'vendor/util/inc/export/themeoption-json.php');
transport_inclusion( 'vendor/util/inc/export/widgets-json.php');
