<?php
/**
 * TGM integration
 *
 * @package wptm.inc.tgm
 * @since wptm 1.0.0
 */

transport_inclusion( 'vendor/util/inc/tgm/tgm-plugin.php' );

/**
 * Register TGM Plugins
 */
function wptm_register_required_plugins() {
    define("WPTM_PLUGIN_DIR", WPTM_DIR.'/data/plugins/');
    
    //lists of plugins
    $plugins = transport_inclusion( 'vendor/util/inc/tgm/config.php', false, false, true );

    $config = array(
        'id' => 'tgmpa', 
        'default_path' => '', 
        'menu' => 'theemon-importer', 
        'parent_slug' => 'admin.php', 
        'capability' => 'edit_theme_options', 
        'has_notices' => true, 
        'dismissable' => true, 
        'dismiss_msg' => '', 
        'is_automatic' => false, 
        'message' => '', 
    );

    tgmpa($plugins, $config);
}
add_action('tgmpa_register', 'wptm_register_required_plugins');
