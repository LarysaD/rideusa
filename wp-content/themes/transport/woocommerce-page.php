<?php
/**
 * Template Name: Woocommerce Page
 * 
 * This is woocommerce page template
 *
 * @package transport
 * @since transport 1.0.0
 */

get_header(); 
?>
<div class="common-page">
    <?php do_action("transport_banner"); ?>
<!--Section area starts Here -->
<section id="section">
    <!--Section box starts Here -->
    <div class="section">
        <div class="blog">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-3">
                        <?php get_sidebar('shop'); ?>
                    </div>
                    <div class="col-xs-12 col-sm-9">
                   <?php 
                    if (have_posts()) :
                        while (have_posts()) : 
                        
                        the_post();
                                $format = 'standard';
                                get_template_part('content/format/' . $format); 
                        endwhile;
			
                        if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
                    else :
                        get_template_part('content/none'); 
                    endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <?php do_action('transport_query_section'); ?> 
    </div>
    <!--Section box ends Here -->
</section>
<!--Section area ends Here -->
</div>
<?php get_footer(); 
