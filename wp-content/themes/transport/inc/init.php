<?php
/**
 * Transport - init
 * It has init all features / functionality of theme
 *  
 * @package transport
 * @subpackage transport.inc
 * @since transport 1.0.0
 */

//after setup theme hook
add_action('after_setup_theme', 'Transport\\ThemeSetup\\basic_setup');
add_action('after_setup_theme', 'Transport\\ThemeSetup\\advance_setup');

//Theme fallback
if (version_compare($GLOBALS['wp_version'], '4.0', '<=')) {
    add_action('after_switch_theme', 'Transport\\ThemeSetup\\switch_theme');
    add_action('template_redirect', 'Transport\\ThemeSetup\\preview_warning');
}


//assets : eneque script
add_action('wp_enqueue_scripts', 'Transport\\Assets\\enqueue_script_style');
add_action('admin_enqueue_scripts', 'Transport\\Assets\\admin_assets', 100);
add_action('wp_head', 'Transport\\Assets\\transport_less_css');

