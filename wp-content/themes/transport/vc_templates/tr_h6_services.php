<?php
/**
 * Transport - tr_h6_services
 * 
 * This template is use by js composer plugin 
 * 
 * @package transport
 * @subpackage transport.vc_templates
 * @since transport 1.0.0
 */

    extract(shortcode_atts(array(
        'main_title' => '',
        'sub_title' => '',
        'no_slides' => get_option('posts_per_page'),
    ), $atts));
?>
        
                <!-- Services section starts here -->

        <div class="transport-page-settings-six">
            <div class="services">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="heading">
                                <span><?php echo esc_html($sub_title); ?></span>
                                <h2><?php echo esc_html(($main_title != '')? $main_title : __('OUR SERVICES','transport')) ?></h2>
                            </div>
                        </div>
                    </div>
                    <div class="services-slider services-slides-6">
					 <?php
					 $services_args = array(
					 		'post_type' => 'service', 
					 		'posts_per_page' => $no_slides, 
					 		'post_status' => 'publish'
					 );
					 
                        $services_query = new WP_Query($services_args);

                        if ( $services_query->have_posts() ) :
	                        while ( $services_query->have_posts() ) :
	                        $services_query->the_post();
		                      ?>
		                        <div class="slides-tab zoom clearfix">
								<?php $thumbnail_id = get_post_thumbnail_id(); 
								      if($thumbnail_id): ?>
		                            <figure>
		                                <a href="<?php the_permalink(); ?>"><img src="<?php echo apply_filters('transport_image_resize', wp_get_attachment_url($thumbnail_id), '276', '230'); ?>" alt="<?php the_title(); ?>" /></a>
		                            </figure>
		                       <?php endif; ?>
		                            <div class="slides-text">
		                                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
		                                <p><?php echo wp_trim_words( get_the_content(), 18, $more = '' ); ?></p>
		                                <a href="<?php the_permalink(); ?>" class="read-more"><?php esc_html_e('read more', 'transport'); ?> <span>></span></a>
		                            </div>
		                        </div>
		                    <?php
	                     endwhile;;
	                    endif;
	                    wp_reset_postdata();
	                    ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services section ends here -->
<?php
echo $this->endBlockComment('tr_h6_services');
