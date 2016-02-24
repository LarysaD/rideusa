<?php
/**
 * Template Name: Contact
 * 
 * This is contact page template layout
 * 
 * @package transport
 * @since transport 1.0.0
 */
get_header();
?>
<!--banner Section starts Here -->
<div class="common-page">
    <?php
    do_action("transport_banner");
    if (have_posts()):
        wp_enqueue_script('transport.gmap');
        while (have_posts()):
            the_post();
            ?>
            <section id="section"> 
                <div class="section">
                    <?php
                    get_template_part('content/contactform', 'map');
                    // get_template_part('content/location', 'slider');
                    ?> 
                </div>
            </section>
            <?php
        endwhile;
    endif;
    // do_action('transport_query_section');
    ?>
</div>
<?php
get_footer();
