<?php
/**
 * Transport - team_member
 * 
 * @package transport-bundle
 * @subpackage transport-bundle.cpt
 * @since transport_bundle 1.0.0 
 */

add_action( 'init', 'register_cpt_team_member' );

function register_cpt_team_member() {

    $labels = array( 
        'name' => _x( 'Team', 'transport' ),
        'singular_name' => _x( 'Team Member', 'transport' ),
        'add_new' => _x( 'Add New Member', 'transport' ),
        'add_new_item' => _x( 'Add New Member', 'transport' ),
        'edit_item' => _x( 'Edit Member', 'transport' ),
        'new_item' => _x( 'New Member', 'transport' ),
        'view_item' => _x( 'View Member', 'transport' ),
        'search_items' => _x( 'Search Member', 'transport' ),
        'not_found' => _x( 'No member found', 'transport' ),
        'not_found_in_trash' => _x( 'No member found in Trash', 'transport' ),
        'parent_item_colon' => _x( 'Parent Team Member:', 'transport' ),
        'menu_name' => _x( 'Team', 'transport' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        
        'supports' => array( 'title', 'editor', 'thumbnail' ),
        
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        
        'menu_icon' => 'dashicons-groups',
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'team_member', $args );
}