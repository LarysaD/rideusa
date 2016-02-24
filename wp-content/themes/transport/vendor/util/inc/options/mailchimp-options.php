<?php
/**
 * Chimp option 
 * 
 * @package wptm.inc.options
 * @since wptm 1.0.0
 */

/**
 * mailchimp options
 */
class WPTM_MailChimp_Options {

    public static function mailChimpOptionImport($data_file = "", $remote_url = "") {
        if ($data_file == "" && $remote_url == "")
            return;

        $rawdata = wptm_get_contents($data_file);
        
        $options = json_decode($rawdata, true);
		
        //if (!empty($options)) {
            $optionsCurrent = str_replace($remote_url, site_url(), $options);
           update_option("mc4wp_lite_form", $optionsCurrent[0]);
        //}
    }

    public function optionExport() {
        $options = get_option("mc4wp_lite_form");
        return json_encode($options);
    }

}
