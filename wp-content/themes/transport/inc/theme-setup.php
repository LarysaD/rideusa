<?php

/**
 * Transport - Theme setup
 * It has theme setup functionality
 *  
 * @package transport
 * @subpackage transport.inc
 * @since transport 1.0.1
 */

namespace Transport\ThemeSetup;

/**
 * Transport - basic setup 
 * @since transport 1.0.0
 */
function basic_setup() {

    //translation  
    load_theme_textdomain('transport', get_template_directory() . '/languages');

    //feed link
    add_theme_support('automatic-feed-links');

    //title tag
    add_theme_support('title-tag');

    //faetured images
    add_theme_support('post-thumbnails');

    //post formats
    add_theme_support('post-formats', array('gallery', 'image', 'quote', 'video', 'audio'));

    //comment form html5
    add_theme_support('html5', array('caption', 'comment-form', 'comment-list'));

    //register navigation menu 
    register_nav_menus(array(
        'primary_navigation' => __('Primary Navigation', 'transport'),
        'footer_navigation' => __('Footer Navigation', 'transport')
    ));
}

/**
 * Transport - advance setup 
 * @since transport 1.0.0
 */
function advance_setup() {

    //hide revslider update error
    update_option('revslider-valid', 'true');

    //content width
    $GLOBALS['content_width'] = $content_width = 474;

    //exceptions
    add_theme_support('custom-header');
    remove_theme_support('custom-header');

    add_theme_support('custom-background');
    remove_theme_support('custom-background');

    add_editor_style();
    remove_editor_styles();
    
}

/* ---------------------------------------------------
 * 
 *        TRANSPORT THEME FALLBACK : WP >= 4.0
 * 
 * --------------------------------------------------- */

/**
 * Transport - switch theme
 * @since transport 1.0.0
 */
function switch_theme() {
    \switch_theme(WP_DEFAULT_THEME, WP_DEFAULT_THEME);
    unset($_GET['activated']);
    add_action('admin_notices', __NAMESPACE__ . '\\upgrade_notice');
}

/**
 * Transport - upgrade notice
 * @since transport 1.0.0
 */
function upgrade_notice() {
    $message = sprintf(__('Transport requires at least WordPress version 3.9 You are running version %s. Please upgrade and try again.', 'transport'), $GLOBALS['wp_version']);
    printf('<div class="error"><p>%s</p></div>', $message);
}

/**
 * Transport - theme redirect
 * @since transport 1.0.0
 */
function preview_warning() {
    if (isset($_GET['preview'])) {
        wp_die(sprintf(__('Transport requires at least WordPress version 3.9 You are running version %s. Please upgrade and try again.', 'transport'), $GLOBALS['wp_version']));
    }
}



if (version_compare($GLOBALS['wp_version'], '4.1', '<')) :

    /**
     * Filters wp_title to print a neat <title> tag based on what is being viewed.
     *
     * @param string $title Default title text for current view.
     * @param string $sep Optional separator.
     * @return string The filtered title.
     */
    function transport_wp_title($title, $sep) {
        if (is_feed()) {
            return $title;
        }

        global $page, $paged;

        // Add the blog name.
        $title .= get_bloginfo('name', 'display');

        // Add the blog description for the home/front page.
        $site_description = get_bloginfo('description', 'display');
        if ($site_description && ( is_home() || is_front_page() )) {
            $title .= " $sep $site_description";
        }

        // Add a page number if necessary.
        if (( $paged >= 2 || $page >= 2 ) && !is_404()) {
            $title .= " $sep " . sprintf(esc_html__('Page %s', 'transport'), max($paged, $page));
        }

        return $title;
    }

    add_filter('wp_title', 'transport_wp_title', 10, 2);

    /**
     * Title shim for sites older than WordPress 4.1.
     *
     * @link https://make.wordpress.org/core/2014/10/29/title-tags-in-4-1/
     * @todo Remove this function when WordPress 4.3 is released.
     */
    function transport_render_title() {
        ?>
        <title><?php wp_title('|', true, 'right'); ?></title>
        <?php
    }

    add_action('wp_head', 'transport_render_title');
endif;

//Hide mailchimp admin notice
\update_option("mc4wp_usage_tracking_nag_shown", "1");

function transport_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}

\add_filter('upload_mimes', __NAMESPACE__ . '\\transport_mime_types');
\add_filter('mime_types', __NAMESPACE__ . '\\transport_mime_types');