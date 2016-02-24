<?php

/**
 * Transport - Theme Options
 *
 * @package transport
 * @subpackage transport.inc.options.field
 * @since transport 1.0
 */

add_filter("ot_theme_options_sections", "transport_options_section");

function transport_options_section($sections) {
    $sections = transport_inclusion('inc/options/options-section.php', false, false, true);
    if (in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))) {
        $sections[] = array(
            'id' => 'transport_woocommerce_section',
            'icon' => 'shopping-cart',
            'title' => __('Shop Settings', 'transport')
        );
    }
    return $sections;
}

add_filter("ot_theme_options_settings", 'transport_options_settings');

function transport_options_settings($settings=array()) {

    $options = array(
        "general",
        "typography",
        "header-layout",
        "footer-layout",
        "home-layout",
        "blog-layout",
        "google-font",
        "social",
        "banner",
        "contact",
        "comment",
        "coming-soon",
        "footer",
        "404",
        "advance"
    );
     if (in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))) {
        $options[] = 'woocommerce';
    }

    foreach ($options as $option) {
       $args = transport_inclusion('inc/options/field/' . $option . '.php', false, false, true);
       
      
       foreach ($args as $arg) {
        $settings[]=$arg;  
       }
    }



    return $settings;
}

