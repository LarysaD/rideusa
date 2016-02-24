<?php
/**
 * Transport - tr_news_layout_two
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
        'no_slides' => '3',
    ), $atts));
?>
<div class="transport-page-settings-two">
<div class="news">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 center">
                        <div class="heading">
                            <?php if($sub_title != ''): ?>
                            <span><?php echo esc_html($sub_title); ?></span>
                            <h2><?php echo esc_html(($main_title != '')? $main_title : __('LATEST NEWS','transport')) ?></h2>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="news-section">
                        <?php
                        $news_query = new WP_Query(array('post_type' => 'post', 'ignore_sticky_posts' => 1, 'post_status' => 'publish', 'posts_per_page' => $no_slides));
                        if ( $news_query->have_posts() ) :
                        while ( $news_query->have_posts() ) :
                        $news_query->the_post();
                        ?>
                        <div class="col-xs-12 col-sm-4">
                            <div class="slides-tab zoom">
                                 <?php $thumbnail_id = get_post_thumbnail_id(); ?>
                                <?php if($thumbnail_id): ?>
                                <figure>
                                    <a href="<?php the_permalink(); ?>"><img src="<?php echo apply_filters('transport_image_resize', wp_get_attachment_url($thumbnail_id), '359', '230'); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" /></a>
                                    <div class="date">
                                        <small><?php echo get_the_date('M'); ?></small><span><?php echo get_the_date('j'); ?></span>
                                    </div>
                                </figure>
                            <?php endif; ?>
                                <div class="slides-text">
                                    <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                                    <p><?php echo wp_trim_words( get_the_excerpt(), 18, $more = '' ); ?></p>
                                    <?php $author = get_user_by( 'id', get_post_field( 'post_author', get_the_ID() ) ); ?>
                                    <a href="<?php echo get_author_posts_url( $author->ID ); ?>" class="doe"><?php echo esc_html($author->display_name); ?></a>
                                    <?php $comments_count = wp_count_comments(get_the_ID()); ?>
                                    <a href="<?php echo ($comments_count->approved < 1)? esc_url(get_permalink() . '#respond') : esc_url(comments_link()); ?>" class="comments"><?php echo esc_html($comments_count->approved); ?> <?php echo ($comments_count->approved <= 1)? esc_html__('comment', 'transport') : esc_html__('comments', 'transport'); ?></a>
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
</div>
<?php
echo $this->endBlockComment('tr_news_layout_two');