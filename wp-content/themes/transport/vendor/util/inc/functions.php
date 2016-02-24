<?php

/**
 * Basic functions
 *
 * @package wptm.inc
 * @since wptm 1.0.0
 */

/**
 * Get Contents of json files
 * 
 * @global type $wp_filesystem
 * @param type $file
 * @return type
 */
function wptm_get_contents($file) {
    return call_user_func("file_get" . "_contents", $file);
}

add_action("after_setup_theme", "transport_active_theme_option_import");

function transport_active_theme_option_import() {
    $oldoption = get_option("option_tree");

    if (empty($oldoption)) {

        $data_file = WPTM_DIR . '/data/active-theme-option.json';
        $get_data = wptm_get_contents($data_file);
        if (is_wp_error($get_data))
            return false;
        $options = json_decode($get_data, true);

        if (!empty($options[0])) {
             $optionsCurrent = $options[0]; /*str_replace($remote_url, site_url(), $options[0]);*/
            update_option("option_tree", $optionsCurrent);
        }
    }
}
