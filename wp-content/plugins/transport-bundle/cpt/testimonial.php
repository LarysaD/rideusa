<?php
/**
 * Transport - testimonial
 * 
 * @package transport-bundle
 * @subpackage transport-bundle.cpt
 * @since transport_bundle 1.0.0 
 */

add_action( 'init', 'register_cpt_testimonial' );

function register_cpt_testimonial() {

    $labels = array( 
        'name' => _x( 'Testimonials', 'transport' ),
        'singular_name' => _x( 'Testimonial', 'transport' ),
        'add_new' => _x( 'Add New', 'transport' ),
        'add_new_item' => _x( 'Add New Testimonial', 'transport' ),
        'edit_item' => _x( 'Edit Testimonial', 'transport' ),
        'new_item' => _x( 'New Testimonial', 'transport' ),
        'view_item' => _x( 'View Testimonial', 'transport' ),
        'search_items' => _x( 'Search Testimonials', 'transport' ),
        'not_found' => _x( 'No testimonials found', 'transport' ),
        'not_found_in_trash' => _x( 'No testimonials found in Trash', 'transport' ),
        'parent_item_colon' => _x( 'Parent Testimonial:', 'transport' ),
        'menu_name' => _x( 'Testimonials', 'transport' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        
        'supports' => array( 'title', 'editor', 'thumbnail' ),
        
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        
        'menu_icon' => 'dashicons-format-quote',
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'testimonial', $args );
}