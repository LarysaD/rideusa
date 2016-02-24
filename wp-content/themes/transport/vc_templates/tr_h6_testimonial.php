<?php
/**
 * Transport - tr_h6_testimonial
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
        'no_slides' => '4',
    ), $atts));
?>              
        
               <!-- Testimonial section starts here -->
        <div class="transport-page-settings-six">
        <div class="testimonial">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 center">
                        <div class="heading">
                             <span><?php echo esc_html($sub_title); ?></span>
                            <h2><?php echo esc_html($main_title); ?></h2>
                        </div>
                        <div class="design-line">
                            <span class="design"></span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-tabbing clearfix">
                    <ul class="testimonial-tabbing-list">
		             <?php
                         $flag = 0;
                        $testimonial_args =  array(
                        		'post_type' => 'testimonial', 
                        		'ignore_sticky_posts' => 1, 
                        		'post_status' => 'publish', 
                        		'posts_per_page' => $no_slides
                        );
                        
                        $news_query = new WP_Query($testimonial_args);
                        
                        if ( $news_query->have_posts() ) :
                        while ( $news_query->have_posts() ) :
                        $news_query->the_post();
                        
                        $class = '';
                        if($flag == 0) {
                            $class = 'active-tab';
                            $flag = 1;
                        } 
                        ?>	
                        
                        <li class="<?php echo esc_attr($class); ?>">
                            <div class="tab-wrap">
								<?php if (has_post_thumbnail($news_query->ID)) :
						           $src = wp_get_attachment_url(get_post_thumbnail_id($news_query->ID), 'full');
						        ?>
                                <img src="<?php echo apply_filters('transport_image_resize', $src, '166', '156'); ?>" alt="<?php the_title(); ?>" />
                                <?php endif; ?>
                            </div>
                            <div class="slide-wrap">
                                <div id="testimonial-tabbing-slides" class="testimonial-tabbing-slides">
                                    <div class="slides-tab">
                                        <blockquote class="custom-quote">
                                            <span class="fa fa-quote-left custom-fa"></span>
                                            <p><?php echo wp_trim_words( get_the_content(), 30, $more = '' ); ?></p>
                                            <footer>
                                                <h6> <?php the_title(); ?> <span><?php echo get_post_meta(get_the_ID(), 'testimonial_author_position', true); ?></span></h6>
                                            </footer>
                                        </blockquote>
                                    </div>

                                </div>
                            </div>
                        </li>
                        <?php
                            endwhile;
                             endif;
                             wp_reset_postdata();
                        ?>          
                    </ul>
                </div>
            </div>
        </div>
        </div>
        <!-- Testimonial section ends here -->

<?php
echo $this->endBlockComment('tr_h6_testimonial');
