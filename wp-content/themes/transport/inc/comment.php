<?php
/**
 * Transport - Comment
 * 
 * This page has comment list callback functionality
 *  
 * @package transport
 * @subpackage transport.inc
 * @since transport 1.0.0
 */


function transport_comment($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;
    switch ($comment->comment_type) :
        case 'pingback' :
        case 'trackback' :
            // Display trackbacks differently than normal comments.
            ?>
            <li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
                <p><?php _e('Pingback:', 'transport'); ?> <?php comment_author_link(); ?> <?php edit_comment_link(__('(Edit)', 'transport'), '<span class="edit-link">', '</span>'); ?></p>
                <?php
                break;
            default :
                // Proceed with normal comments.
                global $post;
                ?>

            <li <?php comment_class(''); ?> id="comment-<?php comment_ID(); ?>">
                <div class="comment-box-wrapper clearfix">
                    <a href="javascript: void(0);" class="blog-user"><?php echo get_avatar($comment, 89); ?></a>
                    <div class="comment-wrap">
                        <div class="user-name">
                            <span class="name"><?php comment_author(); ?></span><span class="posted-date"><?php echo get_comment_date(); ?></span>
                        </div>

                        <?php if ('0' == $comment->comment_approved) : ?>
                            <p class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.', 'transport'); ?></p>
                        <?php endif; ?>
                        <section class="comment-content">
                            <?php comment_text(); ?>
                            <span class="edit-reply-link reply-btn">
                                <?php edit_comment_link(__('Edit', 'transport')); ?>
                                <?php comment_reply_link(array_merge($args, array('reply_text' => __('Reply', 'transport'), 'after' => ' <span>&darr;</span>', 'depth' => $depth, 'max_depth' => $args['max_depth']))); ?>
                            </span>
                        </section><!-- .comment-content -->
                    </div>
                    <div class="clear">&nbsp;</div>
                </div>
                <?php
                break;
        endswitch; // end comment_type check
    }
    