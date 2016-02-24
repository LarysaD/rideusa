<?php
/**
 * Transport - tag apge layout
 * This template contain tag posts
 * 
 * @package transport
 * @since transport 1.0.0
 */
get_header();
?>
<div class="common-page">
    <?php do_action("transport_banner", '', false); ?>
    <!--Section area starts Here -->
    <section id="section">
        <!--Section box starts Here -->
        <div class="section">
            <div class="blog">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="heading ">
                                <h3><?php printf(__('Tag Archives: %s', 'transport'), single_tag_title('', false)); ?></h3>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-9">
                            <?php
                            if (have_posts()) :
                                while (have_posts()) :

                                    the_post();
                                    $format = (get_post_format()) ? get_post_format() : 'standard';
                                    get_template_part('content/format/' . $format);
                                endwhile;
                                ?><div class="blog-text"><?php transport_pagenavi(); ?></div><?php
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
<?php
get_footer();
