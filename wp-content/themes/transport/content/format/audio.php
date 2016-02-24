<?php
/**
 * Transport - audio format
 * 
 * @package transport
 * @subpackage transport.content.format
 * @since transport 1.0.0
 */

$audio = array();
$audio[] = get_post_meta(get_the_ID(), '_format_audio_mp3', true);
$audio[] = get_post_meta(get_the_ID(), '_format_audio_ogg', true);
$audio[] = get_post_meta(get_the_ID(), '_format_audio_wav', true);
$audios = array_filter($audio);

$blog = ot_get_option('transport_blog_layout');
if ($blog == 'blog_2' && is_page_template('transport-blog.php')):
    ?>
    <div <?php post_class('col-sm-4 pad-bottom blog-items'); ?>>
        <?php if (is_sticky()): ?>
            <span class="stick-pin"> <i class="fa fa-thumb-tack "></i> </span>
        <?php endif; ?>
        <div class="blog-text">
            <div class="user-blog">
                <?php if (!empty($audios)): ?>
                    <div class="blog-banner ">
                        <audio class="audio" preload="auto" controls>
                            <?php foreach ($audios as $audiofile): ?>
                                <source src="<?php echo esc_url($audiofile); ?>">
                            <?php endforeach; ?>
                        </audio>
                    </div>
                <?php endif; ?>
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
            if (!is_search()):
                if (!empty($audios)):
                    ?>
                    <div class="blog-banner ">
                        <audio class="audio" preload="auto" controls>
                            <?php foreach ($audios as $audiofile): ?>
                                <source src="<?php echo esc_url($audiofile); ?>">
                            <?php endforeach; ?>
                        </audio>
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