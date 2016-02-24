<?php
/**
 * Transport - tr_h4_testimonial
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
           <!-- Testimonial section starts here -->
        <div class="transport-page-settings-four">
        <div class="testimonial">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="heading">
                            <span><?php echo esc_html($sub_title); ?></span>
                            <h2><?php echo esc_html($main_title); ?></h2>
                        </div>
                    </div>
                </div>

                <div class="feedback-slider">
					 <?php
						
					 	$news_args=array(
					 			'post_type' => 'testimonial', 
					 			'ignore_sticky_posts' => 1, 
					 			'post_status' => 'publish', 
					 			'posts_per_page' => $no_slides
					 	);
					 	
                        $news_query = new WP_Query($news_args);
                        
                        if ( $news_query->have_posts() ) :
                        
	                        while ( $news_query->have_posts() ) :
	                        	$news_query->the_post();
		                        ?>
			                    <div class="feedback clearfix">
									<div class="feebback-person">
									<?php 
									if (has_post_thumbnail(get_the_ID())) :
										$src = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()), 'full');
										?>
			                            <figure><a href="javascript:;"><img class="img-circle" src="<?php echo esc_url($src); ?>" alt="<?php the_title(); ?>" /></a></figure>
			                        <?php endif; ?>
			                        </div>
			                        <div class="feedback-text">
			                            <blockquote class="custom-quote">
			                                <span class="fa fa-quote-left custom-fa"></span>
			                                <p><?php echo wp_trim_words( get_the_content(), 30, $more = '' ); ?></p>
			                                <footer>
			                                    <h6> <?php the_title(); ?><span><?php echo get_post_meta(get_the_ID(), 'testimonial_author_position', true); ?></span></h6>
			                                </footer>
			                            </blockquote>
			                        </div>
			                    </div>
			                    <?php
                            endwhile;
                          endif;
                          wp_reset_postdata();
                        ?>         
          
                </div>

            </div>
        </div>
        </div>
        <!-- Testimonial section ends here -->
<?php
echo $this->endBlockComment('tr_h4_testimonial');
