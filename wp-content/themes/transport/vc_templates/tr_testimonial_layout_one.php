<?php
/**
 * Transport - tr_testimonial_layout_one
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
<div class="testimonial">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 center">
                        <div class="heading">
                            <?php if($sub_title != ''): ?>
                            <span><?php echo esc_html($sub_title); ?></span>
                            <?php endif; ?>
                            <h2><?php echo esc_html(($main_title != '')? $main_title : __('testimonials','transport')) ?></h2>
                        </div>

                        <div class="design-line">
                            <span class="design"></span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-text" id="testimonial-text">
                     <?php
                        $news_query = new WP_Query(array('post_type' => 'testimonial', 'ignore_sticky_posts' => 1, 'post_status' => 'publish', 'posts_per_page' => $no_slides));
                        if ( $news_query->have_posts() ) :
                        while ( $news_query->have_posts() ) :
                        $news_query->the_post();
                        ?>
                    <div class="feedback">
                        <blockquote class="custom-quote">
                            <span class="fa fa-quote-left"></span>
                            <p><?php echo wp_trim_words( get_the_content(), 30, $more = '' ); ?></p>
                            <footer>
                                <h6><?php the_title(); ?> <span><?php echo get_post_meta(get_the_ID(), 'testimonial_author_position', true); ?></span></h6>
                            </footer>
                        </blockquote>
                    </div>
                    <?php
                            endwhile;
                             endif;
                             wp_reset_postdata();
                        ?>
                </div>

            </div>
        </div>
<?php
echo $this->endBlockComment('tr_testimonial_layout_one');