<?php
/**
 * Template Name: Team
 * 
 * This is team page layout template
 * 
 * @package transport
 * @since transport 1.0
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
            <!--Section area starts Here -->
            <section id="section"> 
                <!--Section box starts Here -->
                <div class="section  team-wrap">
                    <div class="team">
                        <div class="container">
                            <?php get_template_part('content/content', 'team'); ?>
                            <?php get_template_part('content/team'); ?>
                        </div>
                    </div>
                </div>
                    <!--Section box ends Here --> 
            </section>
            <!--Section area ends Here --> 
            <?php
        endwhile;
    endif;
    ?>

</div>
<?php
get_footer();

