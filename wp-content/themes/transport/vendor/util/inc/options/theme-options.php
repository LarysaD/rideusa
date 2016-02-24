<?php
/**
 * Theme option 
 * 
 * @package wptm.inc.options
 * @since wptm 1.0.0
 */

/**
 * vafpress options
 */
class WPTM_Theme_Options {

    public static function demoContentImport($data_file = "", $remote_url = "") {
        if ($data_file == "" && $remote_url == "")
            return;

        $rawdata = wptm_get_contents($data_file);
        
        $options = json_decode($rawdata, true);

        if (!empty($options)) {
           $optionsCurrent = str_replace($remote_url, site_url(), $options[0]);
            update_option("option_tree", $optionsCurrent);
        }
        //self::layoutSetUp();
    }


    public static function themeActiveImport($data_file = "") {
      $oldoption = get_option("option_tree");

        if (empty($oldoption)) {
			
            $get_data = wptm_get_contents($data_file);
            if (is_wp_error($get_data))
                return false;
			$options = json_decode($get_data, true);

            if (!empty($options[0])) {
		      $optionsCurrent = str_replace($remote_url, site_url(), $options[0]);
              update_option("option_tree", $optionsCurrent);
            }
        }
    	
    }

    public function optionExport() {

        $options = get_option("option_tree");

        return json_encode($options);
    }

}
