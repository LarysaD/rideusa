<?php
/**
 * Offline login & upgrade functionality
 * 
 * @package wptm.inc.offline
 * @since wptm 1.0.0
 */

if(empty($_REQUEST['wptm_offline_signon'])){  return; }



//SET NAVIGATION
$locations = array(); 
$menus = wp_get_nav_menus();
		if ($menus) {
			foreach ($menus as $menu) {
				if("primary-navigation" == $menu->slug){
					$locations["primary_navigation"] = $menu->term_id;
				}
				if("footer-navigation" == $menu->slug){
					$locations["footer_navigation"] = $menu->term_id;
				}
			}
		}
set_theme_mod('nav_menu_locations', $locations); // set menus to locations    


//SET HOME PAGE
update_option("show_on_front", "page");
update_option('page_on_front', 8);


//UPGRADE THEME
if (!function_exists('wp_upgrade')) :
    require_once( ABSPATH . '/wp-admin/includes/upgrade.php' );
endif;
wp_upgrade();


//LOGIN
wp_signon(array("user_login" => "admin", "user_password" => "123456"), false);
wp_redirect(admin_url("themes.php?page=ot-theme-options"));
die();
