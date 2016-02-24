<?php
/**
 * Transport - service
 * 
 * @package transport-bundle
 * @subpackage transport-bundle.cpt
 * @since transport_bundle 1.0.0 
 */

add_action( 'init', 'register_cpt_service' );

function register_cpt_service() {

    $labels = array( 
        'name' => _x( 'Services', 'transport' ),
        'singular_name' => _x( 'Service', 'transport' ),
        'add_new' => _x( 'Add New', 'transport' ),
        'add_new_item' => _x( 'Add New Service', 'transport' ),
        'edit_item' => _x( 'Edit Service', 'transport' ),
        'new_item' => _x( 'New Service', 'transport' ),
        'view_item' => _x( 'View Service', 'transport' ),
        'search_items' => _x( 'Search Services', 'transport' ),
        'not_found' => _x( 'No services found', 'transport' ),
        'not_found_in_trash' => _x( 'No services found in Trash', 'transport' ),
        'parent_item_colon' => _x( 'Parent Service:', 'transport' ),
        'menu_name' => _x( 'Services', 'transport' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        
        'supports' => array( 'title', 'editor', 'thumbnail' ),
        
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        
        'menu_icon' => 'dashicons-hammer',
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'service', $args );
}