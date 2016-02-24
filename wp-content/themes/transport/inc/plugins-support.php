<?php

/**
 * Transport - Plugin Support
 *  
 * @package transport
 * @subpackage transport.inc
 * @since transport 1.0.0
 */

namespace Transport\PluginsSupport;

/**
 * Transport - plugin support
 * @since transport 1.0.0 
 */
function plugins_support() {
     \add_theme_support( 'bbpress' );
}
add_action( 'after_setup_theme', __NAMESPACE__ . '\\plugins_support' );


/**
 * Transport - Visual composer
 * @since transport 1.0.0 
 */
\add_action( 'vc_before_init', __NAMESPACE__.'\\trasport_vc_set_as_theme' );
function trasport_vc_set_as_theme() {
   \vc_set_as_theme();
}

//redirect welcome stop
\delete_transient( '_vc_page_welcome_redirect' );


/**
 * Transport - RevoSlider
 * @since transport 1.0.0 
 */

if(function_exists('rev_slider_shortcode')) {
    \add_action('admin_init', __NAMESPACE__.'\\transport_disable_revslider_notice');
}

/* Disable revslider notice */
function transport_disable_revslider_notice() {
    if( \get_option('revslider-valid', 'false') == 'false' ||  \get_option('revslider-valid-notice', 'true') == 'true') {
        \update_option('revslider-valid', 'true');
        \update_option('revslider-valid-notice', 'false');
    }
}
