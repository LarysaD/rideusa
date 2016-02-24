<?php
/**
 * Transport - Blog Layout 
 * 
 * This page has layout functionality
 *  
 * @package transport
 * @subpackage transport.inc
 * @since transport 1.0.0
 */

namespace Transport\Layout\Blog;

/**
 * Transport  - action: transport_post_meta
 * @since transport 1.0.0
 */
function post_meta() {
    ?>
    <ul class="post-meta">
        <?php
        $author = get_user_by('id', get_post_field('post_author', get_the_ID()));
        if ($author):
            ?>
            <li>
                <i class="fa fa-user"></i><a href="<?php echo esc_url(get_author_posts_url($author->ID)); ?>"><?php echo esc_html_e('by :', 'transport'); ?> <?php echo esc_attr($author->display_name); ?></a>
            </li>
            <?php
        endif;
        $date_time = get_the_date('M j- Y');
        if ($date_time):
            ?>
            <li>
                <i class="fa fa-clock-o"></i><a href="<?php echo get_month_link(get_the_time('Y'), get_the_time('m')); ?>"><?php echo esc_attr($date_time); ?></a>
            </li>
            <?php
        endif;
        $comments_count = wp_count_comments(get_the_ID());
        if ($comments_count):
            ?>
            <li>
                <i class="fa fa-comment-o flip-text"></i><a href="<?php echo ($comments_count->approved < 1) ? esc_url(get_permalink() . '#respond') : esc_url(comments_link()); ?>"><?php echo esc_attr($comments_count->approved); ?> <?php echo ($comments_count->approved <= 1) ? esc_html__('comment', 'transport') : esc_html__('comments', 'transport'); ?></a>
            </li>
        <?php endif; ?>
    </ul>
    <?php
}

add_action('transport_post_meta', __NAMESPACE__ . '\\post_meta');

/**
 * Transport  - action: the_content_more_link
 * @since transport 1.0.0
 */
function the_content_more_link() {
    return '<a class="button services-link button-hover inner-more" href="' . get_permalink() . '">' . esc_html__('read more', 'transport') . '</a>';
}

add_filter('the_content_more_link', __NAMESPACE__ . '\\the_content_more_link');
add_filter('excerpt_more', __NAMESPACE__ . '\\the_content_more_link');

/**
 * Transport  - action: transport_banner
 * @since transport 1.0.0
 */
function banner($title='', $echo = true) {
    $buttonLabel = (get_post_meta(get_the_ID(), 'transport_banner_button_label', true) != '') ? get_post_meta(get_the_ID(), 'transport_banner_button_label', true) : ot_get_option('transport_banner_button_label');
    $buttonLink = (get_post_meta(get_the_ID(), 'transport_banner_button_link', true) != '') ? get_post_meta(get_the_ID(), 'transport_banner_button_link', true) : ot_get_option('transport_banner_button_link');
    $bannerTitle = (get_post_meta(get_the_ID(), 'transport_banner_title', true) != '') ? get_post_meta(get_the_ID(), 'transport_banner_title', true) : '';
    $bannerImage = (get_post_meta(get_the_ID(), 'transport_banner_image', true) != '') ? get_post_meta(get_the_ID(), 'transport_banner_image', true) : ot_get_option('transport_banner_image');
    if (empty($bannerTitle)) {
        if (is_archive()) {
            $bannerTitle = get_the_archive_title();
        } else if (is_search()) {
            $bannerTitle = sprintf(__('Search Results for: %s', 'transport'), get_search_query());
        } else if (is_category()) {
            $bannerTitle = sprintf(__('Category Archives: %s', 'transport'), single_cat_title('', false));
        } else if (is_tag()) {
            $bannerTitle = sprintf(__('Tag Archives: %s', 'transport'), single_tag_title('', false));
        }
    }
    if (in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))):
        if (is_shop()) {
            $shop_title = ot_get_option('transport_shop_banner_title');
            $bannerTitle = (!empty($shop_title)) ? $shop_title : esc_html__('Shop', 'transport');
        }
        if (is_cart()) {
            $cart_title = ot_get_option('transport_cart_banner_title');
            $bannerTitle = (!empty($cart_title)) ? $cart_title : esc_html__('Cart', 'transport');
        }
        if (is_product()) {
            $bannerTitle = get_the_title();
        }
        if (is_checkout()) {
            $checkout_title = ot_get_option('transport_checkout_banner_title');
            $bannerTitle = (!empty($checkout_title)) ? $checkout_title : esc_html__('Checkout', 'transport');
        }
        if (is_account_page()) {
            $account_title = ot_get_option('transport_account_banner_title');
            $bannerTitle = (!empty($account_title)) ? $account_title : esc_html__('Account', 'transport');
        }
        if (is_product_category() || is_product_tag()) {
            $bannerTitle = woocommerce_page_title(false);
        }

    endif;
    if (!empty($bannerImage)):
        
        $bannerTitle = (!empty($title)) ? $title :  $bannerTitle;
        
        ?>

        <div class="banner service-banner spacetop">
            <div style="background-image: url(<?php echo esc_url($bannerImage); ?>);" class="banner-image-plane parallax">
            </div>
            <div class="banner-text">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <?php  if (!empty($buttonLink) && !empty($buttonLabel) && $echo ): ?>
                                <a href="<?php echo esc_url($buttonLink); ?>" class="shipping"><?php echo esc_html($buttonLabel); ?></a>
                            <?php endif;  ?>
                            <h1><?php echo wp_kses($bannerTitle, wp_kses_allowed_html( 'post' )); ?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    endif;
}

add_action('transport_banner', __NAMESPACE__ . '\\banner',10, 2);

/**
 * Transport  - action: transport_query_section
 * @since transport 1.0.0
 */
function query_section() {
    if (ot_get_option('transport_query_section_enable') == "off") {
        return;
    }

    $QueryLabel = (ot_get_option('transport_query_button_label') != '') ? ot_get_option('transport_query_button_label') : esc_html__('contact us', 'transport');
    $QueryLink = (ot_get_option('transport_query_button_link') != '') ? esc_url(ot_get_option('transport_query_button_link')) : '#';
    $QueryTitle = (ot_get_option('transport_query_title') != '') ? ot_get_option('transport_query_title') : esc_html__('DO YOU STILL HAVE A QUESTION REGARING OUR SERVICES?', 'transport');
    $QueryDescription = (ot_get_option('transport_query_description') != '') ? ot_get_option('transport_query_description') : '';
    ?>
    <div class="query">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-10">
                    <h5><?php echo esc_html($QueryTitle); ?></h5>
                    <p><?php echo esc_html($QueryDescription); ?></p>
                </div>
                <div class="col-xs-12 col-sm-2">
                    <a href="<?php echo esc_url($QueryLink); ?>" class="button contact-us"><?php echo esc_html($QueryLabel); ?></a>
                </div>
            </div>
        </div>
    </div>
    <?php
}

add_action('transport_query_section', __NAMESPACE__ . '\\query_section');

/**
 * Transport  - action: transport_body_calss
 * @since transport 1.0.0
 */
function transport_body_class($classes) {
    global $is_lynx, $is_gecko, $is_IE, $is_opera, $is_NS4, $is_safari, $is_chrome, $is_iphone;
    $browser_version = array();
    if ($is_lynx)
        $classes[] = 'lynx';
    elseif ($is_gecko)
        $classes[] = 'gecko';
    elseif ($is_opera)
        $classes[] = 'opera';
    elseif ($is_NS4)
        $classes[] = 'ns4';
    elseif ($is_safari)
        $classes[] = 'safari';
    elseif ($is_chrome)
        $classes[] = 'chrome';
    elseif ($is_IE) {
        $classes[] = 'ie';
        if (preg_match('/MSIE ([0-9]+)([a-zA-Z0-9.]+)/', $_SERVER['HTTP_USER_AGENT'], $browser_version))
            $classes[] = 'ie' . $browser_version[1];
    }
    else
        $classes[] = 'unknown';
    if ($is_iphone)
        $classes[] = 'iphone';
    if (stristr($_SERVER['HTTP_USER_AGENT'], "mac")) {
        $classes[] = 'osx';
    } elseif (stristr($_SERVER['HTTP_USER_AGENT'], "linux")) {
        $classes[] = 'linux';
    } elseif (stristr($_SERVER['HTTP_USER_AGENT'], "windows")) {
        $classes[] = 'windows';
    }
    if (ot_get_option('transport_blog_layout') != 'blog_2') {
        $classes[] = 'transport-blog-layout-one';
    } else {
        $classes[] = 'transport-blog-layout-two';
    }
    if (ot_get_option("transport_3header") == 'header_2') {
        $classes[] = 'transport-header-layout-two';
    } elseif(ot_get_option("transport_3header") == 'header_3') {
        $classes[] = 'transport-header-layout-three';
    } elseif(ot_get_option("transport_3header") == 'header_4') {
        $classes[] = 'transport-header-layout-four';
   
    } elseif(ot_get_option("transport_3header") == 'header_5') {
        $classes[] = 'transport-header-layout-five';
    
    } elseif(ot_get_option("transport_3header") == 'header_6') {
        $classes[] = 'transport-header-layout-six';
    } elseif(ot_get_option("transport_3header") == 'header_7') {
        $classes[] = 'transport-header-layout-seven';
    }
    else {
        $classes[] = 'transport-header-layout-one';
    }
    
    if (ot_get_option("transport_2footer") == 'footer_2') {
        $classes[] = 'transport-footer-layout-two';
    }
    else if(ot_get_option("transport_2footer") == 'footer_3'){
        $classes[] = 'transport-footer-layout-three';
    }
    else if(ot_get_option("transport_2footer") == 'footer_4'){
        $classes[] = 'transport-footer-layout-four';
    }
    else if(ot_get_option("transport_2footer") == 'footer_5'){
        $classes[] = 'transport-footer-layout-five';
    }
    else {
        $classes[] = 'transport-footer-layout-one';
    }

    return $classes;
}

add_filter('body_class', __NAMESPACE__ . '\\transport_body_class');

function transport_customize_register( $wp_customize ) {
    add_filter("body_class", __NAMESPACE__ ."\\transport_customizer_view_body");
    
}
add_action( 'customize_register', __NAMESPACE__ . '\\transport_customize_register' );
function transport_customizer_view_body($class){
    $theme = wp_get_theme(); // gets the current theme
    if ('transport' != $theme->name) {
       $class[] = 'not-active'; 
    }
    $class[]='tr_customize_view ';
    return $class;
}
