<?php
/**
 * Transport - location
 * 
 * @package transport-bundle
 * @subpackage transport-bundle.cpt
 * @since transport_bundle 1.0.0 
 */

add_action( 'init', 'register_cpt_location' );

function register_cpt_location() {

    $labels = array( 
        'name' => _x( 'Locations', 'transport' ),
        'singular_name' => _x( 'Location', 'transport' ),
        'add_new' => _x( 'Add New', 'transport' ),
        'add_new_item' => _x( 'Add New Location', 'transport' ),
        'edit_item' => _x( 'Edit Location', 'transport' ),
        'new_item' => _x( 'New Location', 'transport' ),
        'view_item' => _x( 'View Location', 'transport' ),
        'search_items' => _x( 'Search Locations', 'transport' ),
        'not_found' => _x( 'No location found', 'transport' ),
        'not_found_in_trash' => _x( 'No location found in Trash', 'transport' ),
        'parent_item_colon' => _x( 'Parent Location:', 'transport' ),
        'menu_name' => _x( 'Locations', 'transport' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        
        'supports' => array( 'title', 'editor' ),
        
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        
        'menu_icon' => 'dashicons-location',
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'location', $args );
}