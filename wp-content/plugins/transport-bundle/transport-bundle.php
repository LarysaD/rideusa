<?php
/**
 * Plugin Name: Transport Bundle
 * Plugin URI: http://theemon.com/
 * Description: Transport Theme bundle having CPT and Shortcode
 * Author: Theemon WordPress Team
 * Version:   1.0.0
 * Author URI: http://theemon.com/
 * @since transport_bundle 1.0.0 
 */

include_once 'shortcode/gallery.php';
include_once 'shortcode/general.php';


include_once 'cpt/services.php';
include_once 'cpt/testimonial.php';
include_once 'cpt/locations.php';
include_once 'cpt/team.php';
include_once 'cpt/faq.php';


add_action("admin_head", "transport_cpt_icon_color");
function transport_cpt_icon_color() {
    if(!function_exists('ot_get_option')) { return; }
 $color = (ot_get_option('transport_color_main') != "")? ot_get_option('transport_color_main') : "#50b9ce";
 
        ?>
        <style>
            #adminmenu .menu-icon-service div.wp-menu-image:before ,
            #adminmenu .menu-icon-testimonial div.wp-menu-image:before ,
            #adminmenu .menu-icon-location div.wp-menu-image:before ,
            #adminmenu .menu-icon-team_member div.wp-menu-image:before,
            #adminmenu .menu-icon-faq div.wp-menu-image:before{  color: <?php print($color); ?>; }

        </style>
        <?php
}
