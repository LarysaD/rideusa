<?php
/**
 * Template Name: Faq
 * 
 * This is FAQ page layout template
 * 
 * @package transport
 * @since transport 1.0.0
 */
get_header();
?>
<div class="common-page">
    <?php do_action("transport_banner"); ?>
    <!--Section area starts Here -->
    <section id="section"> 
        <!--Section box starts Here -->
        <div class="section">
            <div class="services faq">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="heading"> 
                                <span><?php echo esc_html(get_post_meta(get_the_ID(), 'transport_sub_title', true)); ?></span>
                                <h3><?php the_title(); ?></h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                        $args = array(
                            'post_type' => 'faq',
                            'post_status' => 'publish',
                            'paged' => $paged,
                            'posts_per_page' => 12
                        );
                        
                        $faq_query = new WP_Query($args);

                        if ($faq_query->have_posts()) :
                            while ($faq_query->have_posts()) :

                                $faq_query->the_post();
                                ?>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="head-wrap">
                                        <div class="head">
                                            <strong class="question"><?php esc_html_e('Q', 'transport'); ?></strong>
                                            <h2 class="h5"><?php the_title(); ?></h2>
                                        </div>
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                                <?php
                            endwhile;
                             ?><div class="blog-text"><?php transport_pagenavi($faq_query); ?></div><?php
                        endif;
                        wp_reset_postdata();
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <!--Section box ends Here --> 
    </section>
</div>
<?php
get_footer();
