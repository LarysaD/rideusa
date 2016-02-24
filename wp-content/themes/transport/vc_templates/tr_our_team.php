<?php
/**
 * Transport - tr_our_team
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
<div class="about-us-page about">
<div class="team">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="heading">
                            <?php if($sub_title != ''): ?>
                            <span><?php echo esc_html($sub_title); ?></span>
                            <?php endif; ?>
                            <h2><?php echo esc_html(($main_title != '')? $main_title : __('testimonials','transport')) ?></h2>
                        </div>
                    </div>
                    <?php
                        $news_query = new WP_Query(array('post_type' => 'team_member', 'posts_per_page' => $no_slides));
                        if ( $news_query->have_posts() ) :
                        while ( $news_query->have_posts() ) :
                        $news_query->the_post();
                        ?>
                    <div class="col-xs-12 col-sm-6 col-md-4 custom-margin-bottom">
                        <div class="members zoom clearfix">
                            <div class="figure-wrap">
                                <?php $url = esc_url(wp_get_attachment_url( get_post_thumbnail_id())); ?>
                                <figure>
                                    <img src="<?php echo apply_filters('transport_image_resize', $url, 165, 175); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" />
                                </figure>
                                <div class="figure-overlay">
                                    <?php $socialLinks = get_post_meta(get_the_id(), 'member_social_links', true);
                                    if(!empty($socialLinks)):
                                    ?>
                                    <ul>
                                        <?php foreach ($socialLinks as $social): ?>
                                        <li>
                                            <a href="<?php echo esc_url($social['link']); ?>" title="<?php echo esc_html($social['title']); ?>"><span class="fa <?php echo esc_html($social['class']); ?>"></span></a>
                                        </li>
                                        <?php endforeach; ?>
                                    </ul>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="members-text">
                                <h6><?php the_title(); ?></h6>
                                <p><?php echo wp_trim_words( get_the_content(), 12, $more = '' ); ?></p>
                            </div>
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
echo $this->endBlockComment('tr_our_team');