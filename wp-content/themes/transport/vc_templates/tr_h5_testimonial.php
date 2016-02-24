<?php
/**
 * Transport - tr_h5_testimonial
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
                ), $atts));
?>
<div class="transport-page-settings-five">
    <div class="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="heading">
                        <?php if ($sub_title != ''): ?>
                            <span><?php echo esc_html($sub_title); ?></span>
                        <?php endif ?>
                        <h2><?php echo esc_html(($main_title != '') ? $main_title : __('ABOUT TRANSPORT KING', 'transport')) ?></h2>
                    </div>
                </div>
            </div>

            <div class="feedback-5">
                <?php
                $testimonial_args = array(
                		'post_type' => 'testimonial', 
                		'post_status' => 'publish'
                );
                
                $testimonial_query = new WP_Query($testimonial_args);
                
                if ($testimonial_query->have_posts()) :
                    while ($testimonial_query->have_posts()) :
                        $testimonial_query->the_post();
                        ?>
                        <div class="feedback clearfix">
                            <div class="feebback-person">
                                <figure>
                                    <a href="javascript: void(0);">
                                        <?php
                                        $url = wp_get_attachment_url(get_post_thumbnail_id());
                                        if (!empty($url)):
                                            ?>
                                            <img class="img-circle" src="<?php echo apply_filters('transport_image_resize', esc_url($url), '93', '93'); ?>" alt="<?php the_title(); ?>" />
                                        <?php endif; ?>
                                    </a>
                                </figure>
                            </div>
                            <div class="feedback-text">
                                <blockquote class="custom-quote">
                                    <span class="fa fa-quote-left custom-fa"></span>
                                    <p><?php echo wp_trim_words(get_the_content(), 32, $more = ''); ?></p>
                                    <footer>
                                        <h6><?php the_title(); ?><span><?php echo get_post_meta(get_the_ID(), 'testimonial_author_position', true); ?></span></h6>
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
<?php
echo $this->endBlockComment('tr_h5_testimonial');