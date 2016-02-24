<?php
/**
 * Transport - 404 page layout
 * 
 * @package transport
 * @since transport 1.0.0
 */
get_header();
?>
<section id="section" class="spacetop">
    <!--Section box starts Here -->
    <div class="section">
        <div class="error-box ">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 center">
                        <?php
                        
                        $image = ot_get_option('404_image');
                        if (!empty($image)):
                            ?><img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_html('404 page image', 'transport'); ?>" /><?php
                        endif;

                        $title = ot_get_option('transport_404_page_title');
                        if (!empty($title)):
                            ?><h1><?php echo esc_html($title); ?></h1><?php
                        endif;


                        $subTitle = ot_get_option('transport_404_page_sub_title');
                        if (!empty($subTitle)):
                            ?>
                            <span><?php echo esc_html($subTitle); ?></span>
                        <?php endif; ?>

                        <a href="<?php echo esc_url(home_url("/")); ?>" class="button home-link"><?php esc_html_e('back to home page', 'transport'); ?></a>
                    </div>
                </div>
            </div>
        </div>
        <?php do_action('transport_query_section'); ?> 
    </div>
    <!--Section box ends Here -->

</section>

<?php
get_footer();
