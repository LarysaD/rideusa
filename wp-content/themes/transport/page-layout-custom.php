<?php
/**
 * Template Name: Page Layout Custom
 * 
 * This is page layout two design
 * 
 * @package transport
 * @since transport 1.0.0
 */
get_header();
?>
<div class="common-page page-layout-two comment-drop-box">
    <?php do_action("transport_banner"); ?>
    <!--Section area starts Here -->
    <section id="section"> 
        <!--Section box starts Here -->
        <div class="section  team-wrap air-fright">
            <div class="team">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12  col-xs-12 p age-layout-two-content">
                            <?php
                            if (have_posts()):
                                while (have_posts()):
                                    the_post();
                                    ?>
                                    <div class="heading">
                                        <span><?php echo esc_html(get_post_meta(get_the_ID(), 'transport_sub_title', true)); ?></span>
                                        <h2 class="h3"><?php the_title(); ?></h2>
                                    </div>
                                    <div class="air-fright-img-part">
                                        <?php
                                        $sec_image = get_post_thumbnail_id();
                                        if (!empty($sec_image)):
                                            ?>
                                            <img src="<?php echo apply_filters('transport_image_resize', wp_get_attachment_url($sec_image), '848', '357'); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" />
                                            <?php
                                        endif;
                                        the_content();
                                        ?>
                                    </div>
                                    <?php
                                endwhile;
                            endif;
                            ?>
                        </div>
                     
                    </div>
                </div>
            </div>
        </div>
        <!--Section box ends Here --> 
    </section>
</div>
<?php
get_footer();
