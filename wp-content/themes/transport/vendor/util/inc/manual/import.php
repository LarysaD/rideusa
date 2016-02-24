<?php
/**
 * Manual installation actions
 * 
 * @package wptm.inc.manual
 * @since wptm 1.0.0
 */

class WPTM_Manual {

    private $theme_xml_data; // '/data/theme-name.xml';
    private $wigets_json_data;
    private $option_json_data;
    private $mailchimp_json_data;
    private $remote_url;
    private $user_json_data;
    private $rvslider_loc, $rvslider_zip;
    private $woocommerce_json_data;
    private $manual_option;

    public function __construct() {
        $this->theme_xml_data = WPTM_DIR . '/data/wp-theme.xml';
        $this->wigets_json_data = WPTM_DIR . '/data/widgets.json';
        $this->option_json_data = WPTM_DIR . '/data/theme-option.json';
        $this->mailchimp_json_data = WPTM_DIR . '/data/mailchimp-option.json';
        $this->remote_url = WPTM_REMOTE_URL;
        $this->user_json_data = WPTM_DIR . '/data/user-meta.json';
        $this->rvslider_loc = WPTM_DIR . '/data/rvslider/';
        $this->rvslider_zip=array("home_slider1.zip", "home_slider2.zip", "home_slider3.zip", "homeslider4.zip","homeslider5.zip", "homeslider6.zip", "homeslider7.zip", "homeslider8.zip");
        $this->woocommerce_json_data = WPTM_DIR . '/data/woocommerce.json';
        $this->manual_option = get_option("wptm_manual_action");
    }

    function theme_xml() {
        if (!class_exists('WPTM_Import')) :
            $class_wptm_import = WPTM_DIR . "/inc/wp-importer/wptm-import.php";
            if (file_exists($class_wptm_import)) :

                require_once( $class_wptm_import );

                $wptm_import = new WPTM_Import();
                $wptm_import->fetch_attachments = true;
                $wptm_import->import($this->theme_xml_data);
                $wptm_import->check();

                $this->set_option('theme-xml');
                $this->setMenu();
                
                
            endif;
        endif;
    }

    function set_option($key) {
        $this->manual_option[$key] = true;
        update_option("wptm_manual_action", $this->manual_option);
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

    function widgets() {
        if (!class_exists('Theemon_Widget_Data')):
            $class_widget_data = WPTM_DIR . "/inc/widget-importer/class-widget-data.php";
            if (file_exists($class_widget_data)) :
                require_once( $class_widget_data );
                Theemon_Widget_Data::ajax_import_widget_data($this->wigets_json_data);

                $this->set_option('widget-data');
            endif;
        endif;
    }

    function theme_option() {
        if (!class_exists('WPTM_Theme_Options')):
            $class_theme_options = WPTM_DIR . "/inc/options/theme-options.php";
            if (file_exists($class_theme_options)) :
                require_once( $class_theme_options );
                WPTM_Theme_Options::demoContentImport($this->option_json_data, $this->remote_url);

                $this->set_option('options-data');

            endif;
        endif;
    }
    
     function mailChimp_option(){
		 if (!class_exists('WPTM_MailChimp_Options')):
            $class_theme_options = WPTM_DIR . "/inc/options/mailchimp-options.php";
            if (file_exists($class_theme_options)) :
                require_once( $class_theme_options );
                    WPTM_MailChimp_Options::mailChimpOptionImport($this->mailchimp_json_data, $this->remote_url );
                     $this->set_option('mailchimp-data');
             endif;
         endif;
	}

    function user_meta() {
        if (!class_exists('WPTM_User_Meta')):
            $class_user_meta = WPTM_DIR . "/inc/options/user-meta.php";
            if (file_exists($class_user_meta)) :
                require_once( $class_user_meta );
                WPTM_User_Meta::import_meta($this->user_json_data);

                $this->set_option('users-data');

            endif;
        endif;
    }


    function woocommerce() {
        if (!class_exists('WPTM_Woocommerce')):
            $class_woocommerce_import = WPTM_DIR . "/inc/options/woocommerce.php";
            if (file_exists($class_woocommerce_import)) :
                require_once( $class_woocommerce_import );
                WPTM_Woocommerce::import($this->woocommerce_json_data);
                $this->set_option('woocommerce-data');
            endif;
        endif;
    }

    function rvslider() {
        if (class_exists('RevSlider')) {
            $rvSlider = new RevSlider();
            foreach ($this->rvslider_zip as $zip) {
                $response = $rvSlider->importSliderFromPost(true, true, $this->rvslider_loc . $zip);
            }
            $this->set_option('rvslider-data');
        }
    }
}

if (!empty($_REQUEST['wptm-type'])) {
    add_action("admin_init", "wptm_manual_install");
}

function wptm_manual_install() {
    $wptmManualImport = new WPTM_Manual();
    ob_start();

    switch ($_REQUEST['wptm-type']) {
        
        case "theme-data": $wptmManualImport->theme_xml(); break;
        case "widget-data": $wptmManualImport->widgets(); break;
        case "options-data": $wptmManualImport->theme_option(); break;
        case "mailchimp-data": $wptmManualImport->mailChimp_option(); break;
        case "users-data": $wptmManualImport->user_meta(); break;
        case "woocommerce-data": $wptmManualImport->woocommerce(); break;
        case "rvslider-data": $wptmManualImport->rvslider(); break;
        
        //events
        //visual composer
    }
    
    ob_get_clean();
    wp_redirect("admin.php?page=theemon-importer&step=4&install=manual");
    exit;
}
