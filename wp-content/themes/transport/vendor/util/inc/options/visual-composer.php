<?php
/**
 * Visual Composer settings
 * 
 * @package wptm.inc.options
 * @since wptm 1.0.0
 */

class WPTM_Visual_Composer {

    function import() {

        $oldoption = get_option("wpb_js_import_option");

        if (empty($oldoption)) {
            $data_file = CHY_THEME_URL . '/vendor/data/visual-options-import.json';
            $get_data = wptm_get_contents($data_file);

            if (is_wp_error($get_data))
                return false;

            $rawdata = isset($get_data['body']) ? $get_data['body'] : '';
            $options = json_decode($rawdata, true);

            if (!empty($options[0])) {

                foreach ($options[0] as $key => $value) {
                    update_option($key, $value);
                }
                //$newOption = str_replace('http://theemon.com/c/charity-wp/PlaceHolder', site_url(), $options[0]);
                //update_option("easypay_options", $newOption);
            }
            update_option("wpb_js_import_option", true);
        }
    }

    function export() {
        $arr = array();
        $arr["wpb_js_content_types"] = get_option("wpb_js_content_types", true);
        $arr["wpb_js_groups_access_rules"] = get_option("wpb_js_groups_access_rules", true);
        $arr["wpb_js_not_responsive_css"] = get_option("wpb_js_not_responsive_css", true);
        $arr["wpb_js_google_fonts_subsets"] = get_option("wpb_js_google_fonts_subsets", true);
        $arr["wpb_js_composer_license_activation_notified"] = get_option("wpb_js_composer_license_activation_notified", true);

       return json_encode($arr);
    }

}
