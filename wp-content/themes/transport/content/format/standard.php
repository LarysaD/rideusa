<?php
/**
 * Transport - standard format
 * 
 * @package transport
 * @subpackage transport.content.format
 * @since transport 1.0.0
 */
$blog = ot_get_option('transport_blog_layout');
if ($blog == 'blog_2' && is_page_template('transport-blog.php')):
    ?>
<div <?php post_class('col-sm-4 pad-bottom blog-items'); ?>>
        <?php if (is_sticky()): ?>
            <span class="stick-pin"> <i class="fa fa-thumb-tack "></i> </span>
            <?php
        endif;
        
        $url = wp_get_attachment_url(get_post_thumbnail_id());
        if (esc_url($url)):
            ?>
            <figure> <a href="<?php the_permalink(); ?>"> <img src="<?php echo apply_filters('transport_image_resize', $url, '360', '335'); ?>" alt="<?php the_title(); ?>"> </a> </figure>
        <?php endif; ?>
        <div class="blog-text">
            <div class="user-blog">
                <h5 class="blog-two-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                <?php
                do_action('transport_post_meta');
                the_content();
                wp_link_pages();
                $flagTag=false;
                if($flagTag):
                    the_tags();
                endif;
                
                ?>
            </div>
        </div>
    </div>
<?php else: ?>
    <div <?php post_class('blog-text'); ?>>
        <div class="user-blog ">
            <?php
            
            $url = wp_get_attachment_url(get_post_thumbnail_id());
            if (esc_url($url)):
                if (!is_search()):
                    ?>
                    <div class="blog-banner ">
                        <img alt="" src="<?php echo apply_filters('transport_image_resize', $url, '848', '335'); ?>">
                    </div>
                    <?php
                endif;
            endif;
            ?>
            <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
            <?php
            
            if (!is_search()):
                do_action('transport_post_meta');
            endif;
            ?>
            <div class="post-content">
                <?php
                
                if (is_search()):
                    the_excerpt();
                else:
                    the_content();
                    wp_link_pages();
                endif;
                ?>
            </div>
        </div>
    </div>
<?php endif; 