<?php
/**
 * The Template for displaying all single products.
 *
 * Override this template by copying it to yourtheme/woocommerce/single-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>
<div class="common-page">
    <?php do_action("transport_banner"); ?>
    <section id="section"> 
        <div class="section">
            <div class="blog">
                <div class="container">
                    <div class="row">
	<?php
		/**
		 * woocommerce_before_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>
<div class="col-xs-12 col-sm-3">
                            <?php
                            /**
                             * woocommerce_sidebar hook
                             *
                             * @hooked woocommerce_get_sidebar - 10
                             */
                            do_action('woocommerce_sidebar');
                            ?>
                        </div>
                        <div class="col-xs-12 col-sm-9 shop">
                            <div class="row">
		<?php while ( have_posts() ) : the_post(); ?>

			<?php wc_get_template_part( 'content', 'single-product' ); ?>

		<?php endwhile; // end of the loop. ?>
</div>
                                
                            </div>
	<?php
		/**
		 * woocommerce_after_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>

	
</div>
                </div>
            </div>
            <?php do_action('transport_query_section'); ?> 
        </div>
    </section>
</div>
<?php get_footer( 'shop' ); ?>
