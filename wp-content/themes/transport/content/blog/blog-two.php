<?php
/**
 * Transport - blog two template part
 * 
 * @package transport
 * @subpackage transport.content.blog
 * @since transport 1.0.0
 * 
 */
?><div class="masonry-section"><?php
$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'paged' => $paged
);

$blog_query = new WP_Query($args);

if ($blog_query->have_posts()) :

    while ($blog_query->have_posts()) : $blog_query->the_post();
        $format = (get_post_format()) ? get_post_format() : 'standard';
        get_template_part('content/format/' . $format);
    endwhile;
    ?><div class="col-sm-12 pad-bottom blog-items"><?php transport_pagenavi($blog_query); ?></div><?php
    else :
        get_template_part('content/none');
    endif;
    wp_reset_postdata();
    ?>
</div><?php  