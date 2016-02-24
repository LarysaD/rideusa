<?php
/**
 * WPTM importer with WP Importer
 *  
 * @package wptm.inc.wp-importer
 * @since wptm 1.0.0
 */

/**
 * LOAD WORDPRESS IMPOTER CLASS
 */
//define 
if (!defined('WP_LOAD_IMPORTERS')) {
    define('WP_LOAD_IMPORTERS', true);
}

//init wp importer
$wp_admin_import_path = ABSPATH . 'wp-admin/includes/import.php';
require_once( $wp_admin_import_path );
if (!class_exists('WP_Importer')) {
    $class_wp_importer = ABSPATH . 'wp-admin/includes/class-wp-importer.php';
    if (file_exists($class_wp_importer)) {
        @require_once( $class_wp_importer );
    }
}

//wp import class
if (!class_exists('WP_Import')) {
    $class_wp_importer = WPTM_DIR . "/inc/wp-importer/wordpress-importer.php";

    if (file_exists($class_wp_importer)) {
        @require_once( $class_wp_importer );
    }
}


class WPTM_Import extends WP_Import {

    function check() {
        $locations = array(); //get_theme_mod('nav_menu_locations'); 
        $menus = wp_get_nav_menus();
        if ($menus) {
            foreach ($menus as $menu) {
                $locations[str_replace("-", "_", $menu->slug)] = $menu->term_id;
            }
        }

        set_theme_mod('nav_menu_locations', $locations); // set menus to locations    
        
    }

    /*function deleteOldData() {
        global $wpdb;
        wp_delete_post(1);
        wp_delete_post(2);

        $wpdb->delete($wpdb->posts, array('post_type' => 'nav_menu_item'));
    }*/
    
}