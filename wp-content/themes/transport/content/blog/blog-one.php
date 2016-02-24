<?php
/**
 * Transport - blog one template part
 * 
 * @package transport
 * @subpackage transport.content.blog
 * @since transport 1.0.0
 * 
 */
?><div class="col-xs-12">
    <div class="heading ">
        <span><?php echo esc_html(get_post_meta(get_the_ID(), 'transport_sub_title', true)); ?></span>
        <h3><?php the_title(); ?></h3>
    </div>
</div>
<div class="col-xs-12 col-sm-9">
    <?php
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
        ?><div class="blog-text"><?php transport_pagenavi($blog_query); ?></div><?php
    else :
        get_template_part('content/none');
    endif;
    wp_reset_postdata();
    
    ?>
</div>
<div class="col-xs-12 col-sm-3">
<?php get_sidebar(); ?>
</div>
<?php  