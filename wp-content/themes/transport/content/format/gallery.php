<?php
/**
 * Transport - gallery format
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
        <?php endif; ?>
        <div class="blog-text">
            <div class="user-blog">
                <?php
                $gallery = get_post_meta(get_the_ID(), '_format_gallery', true);
                if (!is_search()):
                    if (!empty($gallery)):
                        ?>
                        <div class="blog-banner ">
                            <?php echo do_shortcode($gallery); ?>
                        </div>
                        <?php
                    endif;
                endif;
                ?>
                <h5 class="blog-two-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                <?php do_action('transport_post_meta'); ?>
                <div class="post-content">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
<?php else: ?>
    <div <?php post_class('blog-text'); ?>>
        <div class="user-blog ">
            <?php
            $gallery = get_post_meta(get_the_ID(), '_format_gallery', true);
            if (!is_search()):
                if (!empty($gallery)):
                    ?>
                    <div class="blog-banner ">
                        <?php echo do_shortcode($gallery); ?>
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
                endif;
                ?>
            </div>
        </div>
    </div> 
<?php endif;