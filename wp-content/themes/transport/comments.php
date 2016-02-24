<?php
/**
 * Transport - Comment layout
 * 
 * @package transport
 * @since transport 1.0.0
 */

if (post_password_required()){
    return;
}
?>
<div id="comments" class="comments-area">
    <?php if (have_comments()) : ?>
        <div class="heading">
            <h5><?php esc_html_e('comments', 'transport'); ?></h5>
        </div>
        <ul class="commentlist user-comment-list">
            <?php wp_list_comments(array('callback' => 'transport_comment', 'style' => 'ul')); ?>
        </ul><!-- .commentlist -->
        <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : // are there comments to navigate through  ?>
            <nav id="comment-nav-below" class="navigation" role="navigation">
                <h1 class="assistive-text section-heading"><?php _e('Comment navigation', 'transport'); ?></h1>
                <div class="nav-previous"><?php previous_comments_link(__('&larr; Older Comments', 'transport')); ?></div>
                <div class="nav-next"><?php next_comments_link(__('Newer Comments &rarr;', 'transport')); ?></div>
            </nav>
        <?php endif; // check for comment navigation  ?>
        <?php
        /* If there are no comments and comments are closed, let's leave a note.
         * But we only want the note on posts and pages that had comments in the first place.
         */
        if (!comments_open() && get_comments_number()) :
            ?>
            <p class="nocomments"><?php _e('Comments are closed.', 'transport'); ?></p>
        <?php endif; ?>

    <?php endif; // have_comments() ?>


    <?php
    global $aria_req;
    $args = array(
        'id_form' => 'commentform',
        'id_submit' => 'submit-comment',
        'title_reply' => __('Leave comment', 'transport'),
        'title_reply_to' => __('Leave a Reply to %s', 'transport'),
        'cancel_reply_link' => __('Cancel Reply', 'transport'),
        'label_submit' => __('SUBMIT', 'transport'),
        'comment_field' => __('', 'transport') .
        '<textarea id="comment" name="comment" placeholder="Comment*" rows="3" cols="1" aria-required="true"></textarea>',
        'must_log_in' => '<p class="must-log-in">' .
        sprintf(
                __('You must be <a href="%s">logged in</a> to post a comment.', 'transport'), wp_login_url(apply_filters('the_permalink', get_permalink()))
        ) . '</p>',
        'logged_in_as' => '<p class="logged-in-as">' .
        sprintf(
                __('Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>', 'transport'), admin_url('profile.php'), $user_identity, wp_logout_url(apply_filters('the_permalink', get_permalink()))
        ) . '</p>',
        'comment_notes_before' => '',
        'comment_notes_after' => '',
        'fields' => apply_filters('comment_form_default_fields', array(
            'author' =>
            ' <input id="author" name="author" placeholder="name*" type="text"  value="' . (esc_attr($commenter['comment_author'] ? $commenter['comment_author'] : '' )) . '" size="30"' . $aria_req . ' />',
            'email' =>
            '<input id = "email" name = "email" placeholder="email*" type = "text" value = "' . esc_attr($commenter['comment_author_email'] ? $commenter['comment_author_email'] : '' ) . '" size = "30"' . $aria_req . ' />',
            'url' =>
            '<input type="url" placeholder="website" size="30" value="" name="url" id="url">',
                )
        ),
    );
    ?>
    <div class="comment-drop-box ">
          <?php comment_form($args); ?>
    </div>
</div><!-- #comments .comments-area -->
<?php 