<?php

/**
 * Transport Child functions 
 * @package transport
 * @version     v.1.0
 * 
 */

/**
 * Load the parent style.css file
 */
function transport_child_enqueue_parent_theme_style() {
    wp_enqueue_style( 'transport-parent-style', get_template_directory_uri().'/style.css' );
}
add_action( 'wp_enqueue_scripts', 'transport_child_enqueue_parent_theme_style' );


