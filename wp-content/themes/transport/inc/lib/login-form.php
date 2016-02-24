<?php
/**
 * Transport - login form
 * 
 * @package transport
 * @subpackage transport.inc 
 * @since transport 1.0.0
 */

//logo
function transport_login_logo() {
    $site_logo = (ot_get_option('transport_logo') !="") ? ot_get_option('transport_logo') : TRANSPORT_THEME_URL . "/assets/images/logo.png";
    $color = (ot_get_option('transport_color_main') != "")? ot_get_option('transport_color_main') : "#50b9ce";
    echo "<style type='text/css'>
       body.login div#login h1 a{ background-image: url('" . esc_url($site_logo) . "') !important; }
        body.login{ background-color: " . esc_attr($color) . "!important; }
    </style>";
}
add_action('login_head', 'transport_login_logo');


//stylesheet
function transport_login_stylesheet() {
    wp_enqueue_style( 'industrial-login', get_template_directory_uri() . '/assets/admin/login-style.css', array(), null, 'all' );
    
}
add_action( 'login_enqueue_scripts', 'transport_login_stylesheet' );

//url
function transport_wp_login_url() {
    return site_url('/');
}
add_filter('login_headerurl', 'transport_wp_login_url');


//title
function transport_wp_login_title() {
    return get_option('blogname');
}
add_filter('login_headertitle', 'transport_wp_login_title');

