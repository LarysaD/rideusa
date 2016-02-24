<?php
/**
 * Transport - quote format
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
                $quote = get_post_meta(get_the_ID(), '_format_quote', true);
                if (!is_search()):
                    if (!empty($quote)):
                        ?>
                        <div class="quote-block">
                            <i class="fa fa-quote-left fa-quote-x "></i>
                            <blockquote class="user-quote ">
                                <p><?php echo wp_kses($quote, wp_kses_allowed_html( 'post' )); ?></p>
                            </blockquote>
                        </div>
                        <?php
                    endif;
                endif;
                ?>
                <h5 class="blog-two-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                <?php
                do_action('transport_post_meta');
                the_content();
                ?>
            </div>
        </div>
    </div>
<?php else: ?>
    <div <?php post_class('blog-text'); ?>>
        <div class="user-blog ">
            <?php
            $quote = get_post_meta(get_the_ID(), '_format_quote', true);
            if (!is_search()):
                if (!empty($quote)):
                    ?>
                    <div class="blog-banner ">
                        <blockquote class="user-quote ">
                            <span><i class="fa fa-quote-left custom-fa"></i></span>
                            <p><?php echo wp_kses($quote, wp_kses_allowed_html( 'post' )); ?></p>
                        </blockquote>
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
                    if (is_page() || is_single()):
                        the_content();
                    endif;
                    ?>
                <?php endif; ?>
            </div>
        </div>
    </div> 
<?php endif; 