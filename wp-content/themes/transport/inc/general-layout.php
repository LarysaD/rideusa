<?php
/**
 * Transport - General Layout 
 * 
 * This page has layout functionality
 *  
 * @package transport
 * @subpackage transport.inc
 * @since transport 1.0.0
 */

namespace Transport\Layout\General;

/**
 * Transport  - action: transport_header
 * @since transport 1.0.0
 */
function get_header() {
    $layout = ot_get_option("transport_3header");
    $part = "content/header/header";
    switch ($layout) {
	case "header_2":
	    get_template_part($part, 'two');
	    break;
	case "header_3":
	    get_template_part($part, 'three');
	    break;
	case "header_4":
	    get_template_part($part, 'four');
	    break;
	case "header_5":
	    get_template_part($part, 'five');
	    break;
	case "header_6":
	    get_template_part($part, 'six');
	    break;
	case "header_7":
	    get_template_part($part, 'seven');
	    break;
	default:
	    get_template_part($part, 'one');
	    break;
    }
}

add_action('transport_header', __NAMESPACE__ . '\\get_header');

/**
 * Transport  - action: transport_footer
 * @since transport 1.0.0
 */
function get_footer() {
    $layout = ot_get_option('transport_2footer');
    $part = "content/footer/footer";
    switch ($layout) {
	case "footer_2":
	    get_template_part($part, 'two');
	    break;
	case "footer_3":
	    get_template_part($part, 'three');
	    break;
	case "footer_4":
	    get_template_part($part, 'four');
	    break;
	case "footer_5":
	    get_template_part($part, 'five');
	    break;
	default:
	    get_template_part($part, 'one');
	    break;
    }
}

add_action('transport_footer', __NAMESPACE__ . '\\get_footer');

/**
 * Transport  - action: transport_nav_menu
 * @since transport 1.0.0
 */
function nav_menu() {
    $locations = get_theme_mod('nav_menu_locations');
    if (empty($locations)) {
	echo '<nav class="tr_customize_view">';
	wp_nav_menu(array(
	    'container' => 'nav',
	    'container_id' => 'cssmenu',
	    'menu_class' => 'navigation',
	));
	echo '</nav>';
    } else {
	if (isset($locations['primary_navigation']) && $locations['primary_navigation'] == 0) :
	    wp_nav_menu(array(
		'container' => 'nav',
		'container_id' => 'cssmenu',
		'menu_class' => 'navigation',
	    ));
	else:
	    wp_nav_menu(array(
		'theme_location' => 'primary_navigation',
		'container' => 'nav',
		'container_id' => 'cssmenu',
		'menu_class' => 'navigation',
	    ));
	endif;
    }
}

add_action('transport_nav_menu', __NAMESPACE__ . '\\nav_menu');

/**
 * Transport - home layout
 * @since transport 1.0.0
 */
function home_layout() {
    $layout = \ot_get_option("transport_home_layout");
    $coming_soon_mod = \ot_get_option("transport_coming_soon_mod");

    if ($coming_soon_mod != "on"):

	$page_id = "";
	switch ($layout) {
	    case "home_1":
		$page_id = \ot_get_option('transport_select_home_one');
		break;
	    case "home_2":
		$page_id = \ot_get_option('transport_select_home_two');
		break;
	    case "home_3":
		$page_id = \ot_get_option('transport_select_home_three');
		break;
	    case "home_4":
		$page_id = \ot_get_option('transport_select_home_four');
		break;
	    case "home_5":
		$page_id = \ot_get_option('transport_select_home_five');
		break;
	    case "home_6":
		$page_id = \ot_get_option('transport_select_home_six');
		break;
	    case "home_7":
		$page_id = \ot_get_option('transport_select_home_seven');
		break;
	    case "home_8":
		$page_id = \ot_get_option('transport_select_home_eight');
		break;
	}
	if ($page_id != ""):
	    \update_option("show_on_front", "page");
	    \update_option('page_on_front', $page_id);
	endif;
    else:
	$front_page_id = \ot_get_option("transport_select_coming_soon_page");
	if ($front_page_id != "") :
	    \update_option("show_on_front", "page");
	    \update_option('page_on_front', $front_page_id);
	endif;
    endif;
}

add_action('ot_after_theme_options_save', __NAMESPACE__ . '\\home_layout');

/**
 * Transport - Coming Soon Mod
 * @since transport 1.0.0
 */
function coming_soon_mod() {
    $coming_soon_mod = \ot_get_option("transport_coming_soon_mod");

    if ($coming_soon_mod == "on"):
	$message = __('Transport Theme running in comig soon mod', 'transport');
	printf('<div class="error"><p> <b><span class="dashicons dashicons-sos"></span></b> %s</p></div>', $message);
    endif;
}

add_action('admin_notices', __NAMESPACE__ . '\\coming_soon_mod');

/**
 * Transport - site loader
 * @since transport 1.0.0
 */
function site_loader() {
    if (\ot_get_option('transport_site_loader') != 'off'):
	?>
	<div class="loader-block">
	    <div class="transport-loader">
	<?php esc_html_e("Loading...", "transport"); ?>
	    </div>
	</div>
	<?php
    endif;
}

add_action("wp_footer", __NAMESPACE__ . "\\site_loader");

/**
 * Transport - Disbale Website url in comment form
 * @since  transport 1.0.0
 */
if (\ot_get_option('transport_comment_url_field_enable') == 'off'):

    function comment_url($fields) {
	unset($fields['url']);
	return $fields;
    }

    add_filter('comment_form_default_fields', __NAMESPACE__ . '\\comment_url');
endif;

