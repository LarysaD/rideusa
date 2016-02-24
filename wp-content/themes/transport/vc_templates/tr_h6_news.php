<?php
/**
 * Transport - tr_h6_news
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
        
                <!-- News Section Starts here -->
        <div class="transport-page-settings-six">
        <div class="news">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 center">
                        <div class="heading">
                            <span><?php echo esc_html(($sub_title != '')? $sub_title : __('FROM OUR BLOG','transport')) ?></span>
                            <h2><?php echo esc_html(($main_title != '')? $main_title : __('LATEST NEWS','transport')) ?></h2>
                        </div>
                        <div class="design-line">
                            <span class="design"></span>
                        </div>
                    </div>
                    <div class="news-section">
						 <?php
						$news_args = array(
								'post_type' => 'post', 
								'ignore_sticky_posts' => 1,
								'post_status' => 'publish', 
								'posts_per_page' => $no_slides
						); 
						
                        $news_query = new WP_Query($news_args);
                        
                        if ( $news_query->have_posts() ) : //This is large section ui
                        $news_query->the_post();
                        ?>
                        <div class="col-xs-12 col-sm-6">
                            <div class="cargo zoom clearfix">
								 <?php $thumbnail_id = get_post_thumbnail_id();  
								       if($thumbnail_id): ?>
                                <figure>
                                    <a href="<?php the_permalink(); ?>"><img alt="<?php the_title(); ?>" src="<?php echo apply_filters('transport_image_resize', wp_get_attachment_url($thumbnail_id), '554', '230'); ?>"></a>
                                    <div class="date">
                                        <small><?php echo get_the_date('M'); ?></small><span><?php echo get_the_date('j'); ?></span>
                                    </div>
                                </figure>
                                <?php endif; ?>
                                <div class="slides-text">
                                    <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                                    <p><?php echo wp_trim_words( get_the_excerpt(), 22, $more = '' ); ?></p>
                                    <?php $author = get_user_by( 'id', get_post_field( 'post_author', get_the_ID() ) ); ?>
                                    <a class="doe" href="<?php echo get_author_posts_url( $author->ID ); ?>"><?php echo esc_html($author->display_name); ?></a>
                                   <?php $comments_count = wp_count_comments(get_the_ID()); ?>
                                    <a href="<?php echo ($comments_count->approved < 1)? esc_url(get_permalink() . '#respond') : esc_url(comments_link()); ?>" class="comments"><?php echo esc_html($comments_count->approved); ?> <?php echo ($comments_count->approved <= 1)? esc_html__('comment', 'transport') : esc_html__('comments', 'transport'); ?></a>
                                </div>
                            </div>
                        </div>
                      <?php endif; ?>
                        <?php  if ( $news_query->have_posts() ) : ?>
                        <div class="col-xs-12 col-sm-6">
                            <div class="shipping-type">
                                <?php 
								  //This is small section ui
									while ( $news_query->have_posts() ) :
									$news_query->the_post();
                                ?>
                                <div class="shipping-text zoom clearfix">
									 <?php $thumbnail_id = get_post_thumbnail_id(); 
									       if($thumbnail_id): ?>
                                    <figure>
                                        <a href="<?php the_permalink(); ?>"><img alt="<?php the_title(); ?>" src="<?php echo apply_filters('transport_image_resize', wp_get_attachment_url($thumbnail_id), '262', '214'); ?>"></a>
                                        <div class="date">
                                            <small><?php echo get_the_date('M'); ?></small><span><?php echo get_the_date('j'); ?></span>
                                        </div>
                                    </figure>
                                    <?php endif; ?>
                                    <div class="slides-text">
                                        <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                                        <p><?php echo wp_trim_words( get_the_excerpt(), 12, $more = '' ); ?></p>
                                        <?php $author = get_user_by( 'id', get_post_field( 'post_author', get_the_ID() ) ); ?>
                                        <a class="doe" href="<?php echo get_author_posts_url( $author->ID ); ?>"><?php echo esc_html($author->display_name); ?></a>
                                       <?php $comments_count = wp_count_comments(get_the_ID()); ?>
                                       <a href="<?php echo ($comments_count->approved < 1)? esc_url(get_permalink() . '#respond') : esc_url(comments_link()); ?>" class="comments"><?php echo esc_html($comments_count->approved); ?> <?php echo ($comments_count->approved <= 1)? esc_html__('comment', 'transport') : esc_html__('comments', 'transport'); ?></a>
                                    </div>
                                </div>
                                <?php  endwhile; ?>
                            </div>
                        </div>
                     <?php endif; wp_reset_postdata();  ?>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- News Section Ends here -->
<?php
echo $this->endBlockComment('tr_h6_news');
