<?php
/**
 * WooCommerce Settings 
 * 
 * @package wptm.inc.options
 * @since wptm 1.0.0
 */

class WPTM_Woocommerce {

   public static function import($data_file = "") {

        if($data_file == "") return;
        
        $get_data = wptm_get_contents($data_file);

        if (is_wp_error($get_data))
            return false;

        $rawdata = isset($get_data['body']) ? $get_data['body'] : '';
        $options = json_decode($rawdata, true);

        if (isset($options[0])):
            foreach ($options[0] as $key => $val):
                update_option($key, $val);
            endforeach;
        endif;
    }

    function export() {
        /* settings import */
        global $wpdb;
        $woooption = $wpdb->get_results($wpdb->prepare("SELECT * FROM  wp_options WHERE option_name LIKE %s "), "'%woocommerce%'");

        $myargs = array();
        if (count($woooption) > 0) {
            foreach ($woooption as $woo) {
                $data = @unserialize($woo->option_value);
                $myargs[$woo->option_name] = ($data !== false) ? $data : $woo->option_value;
            }
        }

        $woojson = json_encode($myargs);
    }

}
