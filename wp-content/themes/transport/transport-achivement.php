<?php
/**
 * Template Name: Achivement
 * 
 * This is achivement page layout
 * 
 * @package transport
 * @since transport 1.0.0
 * 
 */
get_header();
?>
<div class="common-page">
    <?php
    do_action("transport_banner");
    if (have_posts()) {
        while (have_posts()) {

            the_post();
            get_template_part('content/achivement');
        }
    }
    do_action('transport_query_section');
    ?>
</div>
<?php
get_footer();
