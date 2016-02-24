<?php
/**
 * Template Name: Locations
 * 
 * This is locations page template layout
 * 
 * @package transport
 * @since transport 1.0.0
 */
get_header();
?>
<div class="common-page">
    <?php
    do_action("transport_banner");
    if (have_posts()):
        while (have_posts()):
            the_post();
            ?>
            <section id="section">
                <div class="section shop-section">
                    <div class="our-location ">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="heading">
                                        <span><?php echo esc_html(get_post_meta(get_the_ID(), 'transport_sub_title', true)); ?></span>
                                        <h3><?php the_title(); ?></h3>
                                    </div>
                                    <?php do_action("transport_location_list"); //get_template_part('content/locations'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php
        endwhile;
    endif;
    do_action('transport_query_section');
    ?> 
</div>
<?php
get_footer();
