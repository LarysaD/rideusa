<?php
/**
 * Transport - team template part
 * 
 * @package transport
 * @subpackage transport.content
 * @since transport 1.0.0
 */
?><div class="row"><?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$args = array(
    'post_type' => 'team_member',
    'paged' => $paged,
    "post_status" => "publish",
    'posts_per_page' => 8
);

$team_query = new WP_Query($args);

if ($team_query->have_posts()) :
    while ($team_query->have_posts()) :

        $team_query->the_post();
        ?>
            <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="team-member">
                    <?php $url = esc_url(wp_get_attachment_url(get_post_thumbnail_id())); ?>
                    <img src="<?php echo apply_filters('transport_image_resize', $url, 263, 277); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" />
                    <h3 class="h5"><?php the_title(); ?></h3>
                    <span class="member-profile"><?php echo esc_html(get_post_meta(get_the_id(), 'member_position', true)); ?></span>
                    <p class="head-info"><?php echo esc_html(get_post_meta(get_the_id(), 'member_description', true)); ?></p>
                </div>
            </div>
            <?php
        endwhile;
        ?><div class="blog-text"><?php transport_pagenavi($team_query); ?></div><?php
    endif;
    ?>
</div>
<?php
wp_reset_postdata();
