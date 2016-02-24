<?php

/**
 * Transport - core functionality
 * 
 * @package transport
 * @since transport 1.0.0
 */
/**
 * Transport - define constant
 * @since transport 1.0.0
 */
define('TRANSPORT_THEME_DIR', get_template_directory());
define('TRANSPORT_THEME_URL', get_template_directory_uri());

/**
 * Transport - listing of core files
 * @since transport 1.0.0 
 */
$transport_loading = array(
    'inc/init.php',
    'vendor/vendor.php', 
    'inc/theme-setup.php',
    'inc/widgets/widgets.php',
    'inc/lib/pagination.php',
    'inc/lib/image-resize.php',
    'inc/assets.php',
    'inc/general-layout.php',
    'inc/blog-layout.php',
    'inc/lib/login-form.php',
    'inc/comment.php',
    'inc/metabox/metabox.php',
    'inc/location-filter.php',
    'inc/woocommerce-support.php',
    'inc/plugins-support.php',
);
transport_loader($transport_loading);

/**
 * Transport - Visual Composer
 * @since transport 1.0.0
 */
if (defined('WPB_VC_VERSION')) {
	transport_inclusion('vc_templates/vc-map/vc-map.php');
}

/**
 * Transport - loader file
 * 
 * @param array $files
 * @return void
 * @since transport 1.0.0 
 */
function transport_loader($files) {
    foreach ($files as $file) {
    	transport_inclusion($file);
    }
}

/**
 * Transport - file inclusion
 *  
 * @param string $path
 * @param boolean $include_once
 * @return void
 * 
 * @since transport 1.0.0
 */

function transport_inclusion($path, $require = true, $once = true, $return=false){
	
	//default: require_once
	if($once){
		if($require){
			require_once trailingslashit( get_template_directory() ).$path;
		}
		else{
			include_once trailingslashit( get_template_directory() ).$path;
		}
	}
	else{
		if($require){
			require trailingslashit( get_template_directory() ).$path;
		}
		else{
			if($return){
				return include trailingslashit( get_template_directory() ).$path;
							
			}
			else{
				include trailingslashit( get_template_directory() ).$path;
			}
			
		}
	}
	
}

