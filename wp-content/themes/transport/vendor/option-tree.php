<?php

/**
 * Transport - Option Lib
 *
 * @package transport
 * @subpackage transport.vendor
 * @since transport 1.0.0
 */

define('OT_THEME_VERSION', '2.5.5');

transport_inclusion('vendor/option-tree/ot-loader.php');

add_filter('ot_theme_mode', '__return_true');
add_filter('ot_show_pages', '__return_false');
add_filter("ot_header_logo_link", "transport_option_tree_logo", 1, 2);
function transport_option_tree_logo($link, $id){
    $link=__('Transport', "transport");
    return $link;
}

add_filter("ot_header_version_text", "transport_option_tree_version");

function transport_option_tree_version($link){
    $link="";
    return $link;
}

//Theme Options
transport_inclusion("inc/options/theme-options.php");


//transport_ot_head_background_color
add_action("admin_head", "transport_ot_head_background_color");
function transport_ot_head_background_color(){
     $color = (ot_get_option('transport_color_main') != "")? ot_get_option('transport_color_main') : "#50b9ce";
    ?>
<style>
    #page-ot_theme_options #option-tree-header li{
        background-color: <?php  print($color); ?>;
    }  
</style>
<?php
}

/**
 * Option Tree Function Setup
 *
 *  */
if (!function_exists('ot_get_option')) {

    function ot_get_option($option_id, $default = '') {

        /* get the saved options */
        $options = get_option('option_tree');

        /* look for the saved value */
        if (isset($options[$option_id]) && '' != $options[$option_id]) {

            return ot_wpml_filter($options, $option_id);
        }

        return $default;
    }

}

/**
 * Filter the return values through WPML
 */
if (!function_exists('ot_wpml_filter')) {

    function ot_wpml_filter($options, $option_id) {

        // Return translated strings using WMPL
        if (function_exists('icl_t')) {

            $settings = get_option('option_tree_settings');

            if (isset($settings['settings'])) {

                foreach ($settings['settings'] as $setting) {

                    // List Item & Slider
                    if ($option_id == $setting['id'] && in_array($setting['type'], array('list-item', 'slider'))) {

                        foreach ($options[$option_id] as $key => $value) {

                            foreach ($value as $ckey => $cvalue) {

                                $id = $option_id . '_' . $ckey . '_' . $key;
                                $_string = icl_t('Theme Options', $id, $cvalue);

                                if (!empty($_string)) {

                                    $options[$option_id][$key][$ckey] = $_string;
                                }
                            }
                        }

                        // All other acceptable option types
                    } else if ($option_id == $setting['id'] && in_array($setting['type'], apply_filters('ot_wpml_option_types', array('text', 'textarea', 'textarea-simple')))) {

                        $_string = icl_t('Theme Options', $option_id, $options[$option_id]);

                        if (!empty($_string)) {

                            $options[$option_id] = $_string;
                        }
                    }
                }
            }
        }

        return $options[$option_id];
    }

}


