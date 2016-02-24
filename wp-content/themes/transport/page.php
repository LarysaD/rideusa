<?php
/**
 * Transport - page layout
 * This page contain page content 
 *
 * @package transport
 * @since transport 1.0.0
 */

get_header(); 
?>
<!--banner Section starts Here -->
<div class="common-page comment-drop-box">
    <?php do_action("transport_banner", '', true); ?>

    <!--banner Section ends Here -->
    <!--Section area starts Here -->
    <section id="section">
        <!--Section box starts Here -->
        <div class="section">
            <div class="blog">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-9">
                            <?php
                            if (have_posts()) :
                                while (have_posts()) : the_post();
                                    $format = 'standard';
                                    get_template_part('content/format/' . $format);
                                endwhile;

                                /**
                                 * Transport - Comment section
                                 * @since transport 1.0.0
                                 */
                                if (ot_get_option('transport_page_comment') != 'off'):
                                    if (comments_open() || get_comments_number()) :
                                        comments_template();
                                    endif;
                                endif;
                            else :
                                get_template_part('content/none');
                            endif;
                            ?>
                        </div>
                        <div class="col-xs-12 col-sm-3">
                            <?php get_sidebar(); ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php do_action('transport_query_section'); ?> 
        </div>
        <!--Section box ends Here -->
    </section>
    <!--Section area ends Here -->
</div>
<?php get_footer();
