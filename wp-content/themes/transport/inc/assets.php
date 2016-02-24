<?php

/**
 * Transport - Theme Assets
 * It has theme assets functionality
 *  
 * @package transport
 * @subpackage transport.inc
 * @since transport 1.0.0
 */

namespace Transport\Assets;


/**
 * Transport - eneque scripts
 * 
 * @since transport 1.0.0
 */
function enqueue_script_style() {
    $transport_assets_url = get_template_directory_uri()."/assets";
    //STYLE
    wp_register_style('transport.font.karla', add_query_arg(array("family" => "Karla:400,700,400italic,700italic%7cRaleway:400,800,700,600,300,200"), '//fonts.googleapis.com/css'), array(), null, 'all');
    wp_register_style('transport.style', get_stylesheet_uri(), array(), null, 'all');
    wp_register_style('transport.font.awesome', $transport_assets_url. '/css/font-awesome.min.css', array(), null, 'all');
    wp_register_style('transport.bootstrap', $transport_assets_url . '/css/bootstrap.css', array(), null, 'all');
    wp_register_style('transport.dropdown', $transport_assets_url . '/css/dropdown.css', array(), null, 'all');
    wp_register_style('transport.owl.carousel', $transport_assets_url . '/css/owl.carousel.css', array(), null, 'all');
    wp_register_style('transport.bx.slider', $transport_assets_url . '/css/jquery.bxslider.css', array(), null, 'all');
    wp_register_style('transport.global', $transport_assets_url . '/css/global.css', array(), null, 'all');
    wp_register_style('transport.audioplayer', $transport_assets_url . '/css/audioplayer.css', array(), null, 'all');
    wp_register_style('transport.custom', $transport_assets_url. '/css/custom.css', array(), null, 'all');
    wp_register_style('transport.responsive', $transport_assets_url . '/css/responsive.css', array(), null, 'all');
    wp_register_style('transport.support', $transport_assets_url . '/css/support.css', array(), null, 'all');
    
    wp_enqueue_style('transport.font.karla');
    wp_enqueue_style('transport.style');
    wp_enqueue_style('transport.font.awesome');
    wp_enqueue_style('transport.bootstrap');
    wp_enqueue_style('transport.dropdown');
    wp_enqueue_style('transport.owl.carousel');
    wp_enqueue_style('transport.bx.slider');
    wp_enqueue_style('transport.audioplayer');
    wp_enqueue_style('transport.global');
    wp_enqueue_style('transport.custom');
    wp_enqueue_style('transport.responsive');
    wp_enqueue_style('transport.support');
    
    //add custom css
    $custom_css = ot_get_option('transport_custom_css');
    wp_add_inline_style( 'transport.custom', $custom_css );
    

    //SCRIPT
    wp_register_script('transport.owl.carousel', $transport_assets_url. '/js/owl.carousel.js', array('jquery'), null, true);
    wp_register_script('transport.bx.slider', $transport_assets_url. '/js/jquery.bxslider.js', array('jquery'), null, true);
    wp_register_script('transport.selectbox', $transport_assets_url. '/js/jquery.selectbox-0.2.min.js', array('jquery'), null, true);
    
    wp_register_script('transport.plugin', $transport_assets_url. '/js/jquery.plugin.js', array('jquery'), null, true);
    wp_register_script('transport.countdown', $transport_assets_url. '/js/jquery.countdown.min.js', array('jquery', 'transport.plugin'), null, true);
    wp_register_script('transport.count-down', $transport_assets_url. '/js/count-down.js', array('jquery', 'transport.countdown'), null, true);
    
    wp_register_script('transport.google.map.api',  add_query_arg(array("sensor" => "false"), '//maps.googleapis.com/maps/api/js'),  array('jquery'), null, true);
    wp_register_script('transport.typeahead', $transport_assets_url. '/js/typeahead.js', array('jquery'), null, true);
    wp_register_script('transport.custom.map', $transport_assets_url. '/js/custom-mapscript.js', array('jquery', 'transport.google.map.api', 'transport.typeahead'), null, true);
    wp_register_script('transport.gmap', $transport_assets_url. '/js/gmap.js', array('jquery', 'transport.google.map.api'), null, true);
    
    wp_register_script('transport.parallax', $transport_assets_url. '/js/parallax.js', array('jquery'), null, true);
    wp_register_script('transport.masonry', $transport_assets_url. '/js/masonry.pkgd.min.js', array('jquery'), null, true);
    wp_register_script('transport.flexslider', $transport_assets_url. '/js/jquery.flexslider.js', array('jquery'), null, true);
    wp_register_script('transport.audioplayer', $transport_assets_url. '/js/audioplayer.js', array('jquery'), null, true);
    wp_register_script('transport.less', $transport_assets_url. '/js/less.js', array('jquery'), null, true);
    wp_register_script('transport.switcher', $transport_assets_url. '/switcher/switcher.js', array('jquery'), null, true);
    wp_register_script('transport.script', $transport_assets_url. '/js/script.js', array('jquery'), null, true);
    wp_register_script('transport.site', $transport_assets_url. '/js/site.js', array('jquery'), null, true);
    wp_register_script('transport.custom', $transport_assets_url. '/js/custom-transport.js', array('jquery'), null, true);
    
    wp_enqueue_script('transport.owl.carousel');
    wp_enqueue_script('transport.bx.slider');
    wp_enqueue_script('transport.selectbox');
    
    wp_enqueue_script('transport.parallax');
    wp_enqueue_script('transport.masonry');
    wp_enqueue_script('transport.flexslider');
    wp_enqueue_script('transport.audioplayer');
    wp_enqueue_script('transport.less');
    wp_enqueue_script('transport.switcher');
    wp_enqueue_script('transport.script');
    wp_enqueue_script('transport.site');
    wp_enqueue_script('transport.custom');
    
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
    

    //transport.switcher
    $theme_options = array(
        'url' => TRANSPORT_THEME_URL,
        'color' => (ot_get_option('transport_color_main') != "")? ot_get_option('transport_color_main') : "#50b9ce",//
        'font' => (ot_get_option('transport_theme_font') != "")? ot_get_option('transport_theme_font') : "karla",//
        'heading_font' => (ot_get_option('transport_headings_font') != "")? ot_get_option('transport_headings_font') : "karla",//
        'header' => (ot_get_option('transport_stickey_header') != "")? ot_get_option('transport_stickey_header') : "normal",//
        'layout' => (ot_get_option('transport_theme_layout') != "")? ot_get_option('transport_theme_layout') : "full-width",//
        //'effect' => (ot_get_option('transport_theme_effect') != "")? ot_get_option('transport_theme_effect') : "normal",//
    );
    wp_localize_script('transport.switcher', 'TRANSPORT_OPTION', $theme_options);
    
    //transport.site
    $theme_data = array(
        'theme_url' => TRANSPORT_THEME_URL,
        'latitude' => ot_get_option('transport_latitude'),
        'longitude' => ot_get_option('transport_longitude'),
    );
    wp_localize_script('transport.site', 'TRANSPORT_DATA', $theme_data);
    
    $coming_soon_data = array(
        'coming_soon_date' => date("Y, n, j", strtotime(ot_get_option('coming_soon_date'))),
    );
    wp_localize_script('transport.count-down', 'TRANSPORT_COMING_SOON', $coming_soon_data);
    
    
}

/**
 * Transport - Less & favicon
 * 
 * @since transport 1.0.0
 */
function transport_less_css() {
        $transport_assets_url = get_template_directory_uri();

    ?>
    <link href="<?php echo esc_url($transport_assets_url.'/assets/css/skin.less'); ?>" rel="stylesheet/less" />
    <?php
}


/**
 * Transport -  Admin enqueue script
 * @since transport 1.0.0
 */
function admin_assets() {
    wp_register_style('transport.ot.ui', get_template_directory_uri(). '/assets/admin/option-tree-ui.css', array(), null, 'all');
    wp_register_script('transport.metabox', get_template_directory_uri(). '/assets/admin/transport-metabox.js',array('jquery'), null, true);
    wp_enqueue_style('transport.ot.ui');
    wp_enqueue_script('transport.metabox');
}


function transport_google_font_families() {
    $fonts = array();

    $ot_fonts = \ot_get_option('transport_google_fonts'); 
    $ot_google_font_list = \ot_recognized_google_font_families('transport_google_fonts');
    if (!empty($ot_fonts) && count($ot_fonts) > 0) {
        foreach ($ot_fonts as $ot_font) {
            if (!empty($ot_font['family']) && !empty($ot_google_font_list[$ot_font['family']])) {
                $fonts[] = array(
                    'value' => $ot_google_font_list[$ot_font['family']],
                    'label' => $ot_google_font_list[$ot_font['family']],
                    'src' => ''
                );
            }
        }
    }
     
    return $fonts;
}


/**
 * Add Favicon
 */
if (!function_exists('has_site_icon') || !has_site_icon()) {

    function transport_favicon() {
        $transport_theme_url = get_template_directory_uri();
        $favicon_url = ot_get_option('transport_favicon');
        $favicon = (!empty($favicon_url)) ? $favicon_url : $transport_theme_url . '/favicon.ico';
        echo '<link rel="shortcut icon" type="image/x-icon" href="' . esc_url($favicon) . '"  />';
    }

    add_action("wp_head", __NAMESPACE__."\\transport_favicon");
}