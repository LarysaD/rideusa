<?php
/**
 * Transport - faq
 * 
 * @package transport-bundle
 * @subpackage transport-bundle.cpt
 * @since transport_bundle 1.0.0 
 */

add_action( 'init', 'register_cpt_faq' );

function register_cpt_faq() {

    $labels = array( 
        'name' => _x( 'FAQs', 'transport' ),
        'singular_name' => _x( 'FAQ', 'transport' ),
        'add_new' => _x( 'Add New', 'transport' ),
        'add_new_item' => _x( 'Add New FAQ', 'transport' ),
        'edit_item' => _x( 'Edit FAQ', 'transport' ),
        'new_item' => _x( 'New FAQ', 'transport' ),
        'view_item' => _x( 'View FAQ', 'transport' ),
        'search_items' => _x( 'Search FAQs', 'transport' ),
        'not_found' => _x( 'No faqs found', 'transport' ),
        'not_found_in_trash' => _x( 'No faqs found in Trash', 'transport' ),
        'parent_item_colon' => _x( 'Parent FAQ:', 'transport' ),
        'menu_name' => _x( 'FAQs', 'transport' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        
        'supports' => array( 'title', 'editor' ),
        
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        
        'menu_icon' => 'dashicons-format-status',
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'faq', $args );
}