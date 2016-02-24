<?php
/**
 * Transport - WooCommerce Support
 * 
 * This page has woocommerce support functionality
 *  
 * @package transport
 * @subpackage transport.inc
 * @since transport 1.0.0
 */

/**
 * Woocommerce plugin is active
 * @since transport 1.0.0 
 */
if (!in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))) {
    return;
}

delete_transient( '_wc_activation_redirect' );

function woocommerce_support() {
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'woocommerce_support');

function remove_meta() {

    if (is_shop() || is_product_category() || is_product_tag() || is_product() || is_product_taxonomy() || is_cart() || is_checkout() || is_account_page()) {
        remove_action('transport_post_meta', 'Transport\\Layout\\Blog\\post_meta', 10);
    }
}

add_action('wp', 'remove_meta');

remove_action('woocommerce_pagination', 'woocommerce_pagination', 10);

function woocommerce_pagination() {
    global $wp_query;
    if ( $wp_query->max_num_pages <= 1 ) {
            return;
    }
    ?><div class="col-xs-12 col-sm-12 col-md-12"><div class="blog-text"><?php transport_pagenavi($wp_query); ?></div></div><?php
}
add_action( 'woocommerce_pagination', 'woocommerce_pagination', 10);




remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail');
add_action('woocommerce_before_shop_loop_item_title', 'transport_template_loop_product_thumbnail');
function transport_template_loop_product_thumbnail() {
    $product_image_url = esc_url(wp_get_attachment_url( get_post_thumbnail_id() ));
    if(!empty($product_image_url)):
    ?>
    <figure>
    <a href="<?php the_permalink(); ?>" class="zoom"><img src="<?php echo apply_filters('transport_image_resize', $product_image_url, 260, 298);  ?>" alt="" /></a>
    <div class="cart-button">
          <?php woocommerce_template_loop_add_to_cart(); ?>
    </div> 
    </figure>
   <?php endif;
}

remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating',5);
add_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 12 );

remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );


add_filter('get_product_search_form', 'transport_product_search');
function transport_product_search(){
    ob_start();?>
    <form role="search" method="get" class="woocommerce-product-search search-box" action="<?php echo esc_url( home_url( '/'  ) ); ?>">
	<input id="search" type="text" class="search-field" placeholder="<?php echo esc_attr_x( 'Search Products&hellip;', 'placeholder', 'transport' ); ?>" value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label', 'transport' ); ?>" />
	<input type="submit" value="" />
	<input type="hidden" name="post_type" value="product" />
    </form>
    <?php
    $contents = ob_get_contents();
    ob_end_clean();
    return $contents;
}

add_filter( 'woocommerce_breadcrumb_defaults', 'transport_woocommerce_breadcrumbs' );
function transport_woocommerce_breadcrumbs() {
    return array(
        'delimiter'   => ' &#47; ',
        'wrap_before' => '<div class="col-xs-12 col-sm-12 col-md-12"><nav class="woocommerce-breadcrumb" itemprop="breadcrumb">',
        'wrap_after'  => '</nav></div>',
        'before'      => '',
        'after'       => '',
        'home'        => _x( 'Home', 'breadcrumb', 'transport' ),
    );
}

add_action('woocommerce_before_shop_loop','transport_content_warp_start', 1);
function transport_content_warp_start(){
    echo '<div class="col-xs-12 col-sm-12 col-md-12">';
}

add_action('woocommerce_before_shop_loop','transport_content_warp_ends', 999);
function transport_content_warp_ends(){
    echo '</div>';
}

//setup wizard hide notice
$notices = array_diff( get_option( 'woocommerce_admin_notices', array() ), array( 'install' ) );
update_option( 'woocommerce_admin_notices', $notices );

