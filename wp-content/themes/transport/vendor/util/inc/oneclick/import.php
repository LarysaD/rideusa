<?php
/**
 * OneClick Installation action
 * 
 * @package wptm.inc.oneclick
 * @since wptm 1.0.0
 */

class WPTM_OneClick_import {

    private $theme_xml_data; // '/data/theme-name.xml';
    private $wigets_json_data;
    private $option_json_data;
    private $mailchimp_json_data;
    private $remote_url;
    private $user_json_data;
    private $rvslider_loc, $rvslider_zip;
    private $woocommerce_json_data;

    public function __construct() {
        $this->theme_xml_data = WPTM_DIR . '/data/wp-theme.xml';
        $this->wigets_json_data = WPTM_DIR . '/data/widgets.json';
        $this->option_json_data = WPTM_DIR . '/data/theme-option.json';
        $this->mailchimp_json_data = WPTM_DIR . '/data/mailchimp-option.json';
        $this->remote_url= WPTM_REMOTE_URL;
        $this->user_json_data=WPTM_DIR . '/data/user-meta.json';
        $this->rvslider_loc=WPTM_DIR . '/data/rvslider/';
        $this->rvslider_zip=array("home_slider1.zip", "home_slider2.zip", "home_slider3.zip", "homeslider4.zip","homeslider5.zip", "homeslider6.zip", "homeslider7.zip", "homeslider8.zip");
        $this->woocommerce_json_data=WPTM_DIR . '/data/woocommerce.json';
       
        $this->theme_xml_import();
    }
    

    function theme_xml_import() {
        
        if (!class_exists('WPTM_Import')) :
            $class_wptm_import = WPTM_DIR . "/inc/wp-importer/wptm-import.php";
            if (file_exists($class_wptm_import)) :
                
                require_once( $class_wptm_import );

                $wptm_import = new WPTM_Import();
                $wptm_import->fetch_attachments = true;
                $wptm_import->import($this->theme_xml_data);
                $wptm_import->check();
                
                $this->other_options();
                $this-> success();
            endif;
        endif;
    }
    
    function other_options(){
        //Theme Option
        $this->theme_option();
        
        //Widgets
        $this->widgets();
        
        //mailchimp
         $this->mailChimp_option();
        
        //User Meta
        $this->user_meta();
        
        
        //WooCommerce
        $this->woocommerce();
        
        //RVSlider --> import last
        $this->rvslider();
        
        $this->setMenu();
    }
    function mailChimp_option(){
		 if (!class_exists('WPTM_MailChimp_Options')):
            $class_theme_options = WPTM_DIR . "/inc/options/mailchimp-options.php";
            if (file_exists($class_theme_options)) :
                require_once( $class_theme_options );
                    WPTM_MailChimp_Options::mailChimpOptionImport($this->mailchimp_json_data, $this->remote_url );
             endif;
         endif;
	}
    
    
    function setMenu(){
		//SET HOME PAGE
		update_option("show_on_front", "page");
		update_option('page_on_front', 8);

		
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
		
	}
    
    function widgets(){
         if (!class_exists('Theemon_Widget_Data')):
            $class_widget_data = WPTM_DIR . "/inc/widget-importer/class-widget-data.php";
            if (file_exists($class_widget_data)) :
                require_once( $class_widget_data );
                    Theemon_Widget_Data::ajax_import_widget_data($this->wigets_json_data);
             endif;
         endif;
    }
    
    function theme_option(){
         if (!class_exists('WPTM_Theme_Options')):
            $class_theme_options = WPTM_DIR . "/inc/options/theme-options.php";
            if (file_exists($class_theme_options)) :
                require_once( $class_theme_options );
                    WPTM_Theme_Options::demoContentImport($this->option_json_data, $this->remote_url );
             endif;
         endif;
        
    }
    
    function user_meta(){
         if (!class_exists('WPTM_User_Meta')):
            $class_user_meta = WPTM_DIR . "/inc/options/user-meta.php";
            if (file_exists($class_user_meta)) :
                require_once( $class_user_meta );
                    WPTM_User_Meta::import_meta($this->user_json_data );
             endif;
         endif;
        
    }
    
    function rvslider(){
    	if (class_exists('RevSlider')) {
    		$rvSlider = new RevSlider();
                foreach($this->rvslider_zip as $zip){
                    $response = $rvSlider->importSliderFromPost(true, true, $this->rvslider_loc.$zip);
                }
    	}
        
    }
    
    function woocommerce(){
         if (!class_exists('WPTM_Woocommerce')):
            $class_woocommerce_import = WPTM_DIR . "/inc/options/woocommerce.php";
            if (file_exists($class_woocommerce_import)) :
                require_once( $class_woocommerce_import );    	
                    WPTM_Woocommerce::import($this->woocommerce_json_data );
             endif;
         endif;
        
    }
    
            
    function success(){
        update_option("wptm_import_success", "oneclick");
    }

}

function wptm_oneclick_import() {
   $wptmOneClickImport= new WPTM_OneClick_import();
    die;
}

add_action("wp_ajax_wptm_oneclick_import", "wptm_oneclick_import");
