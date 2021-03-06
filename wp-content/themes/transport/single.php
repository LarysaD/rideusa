<?php
/**
 * Transport - single page layout
 * This page contain single post 
 *
 * @package transport
 * @since transport 1.0.0
 */
get_header();
?>
<div class="common-page comment-drop-box">
   <?php do_action("transport_banner", get_the_title(), false); ?>
    <!--Section area starts Here -->
    <section id="section">
        <!--Section box starts Here -->
        <div class="section">
            <div class="blog">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-9 main-single-page">
                            <div class="background-holder">
                            <?php
                            if (have_posts()) :
                                while (have_posts()) :

                                    the_post();
                                    $format = (get_post_format()) ? get_post_format() : 'standard';
                                    get_template_part('content/format/' . $format);
                                    ?>
                                    <div class="author single-post-author-section">
                                            <span><i class="fa fa-user"></i></span>
                                            <div class="author-text">
                                                    <h6><?php esc_html_e('Author', 'transport'); ?></h6>
                                                    <p><strong><?php echo get_the_author_meta( 'display_name' );  ?> : </strong> <?php echo get_the_author_meta( 'description' );  ?>   </p>
                                            </div>
                                    </div>    
                                    <?php
                                endwhile; 
                                if (comments_open() || get_comments_number()) :
                                    comments_template();
                                endif;
                            else:
                                get_template_part('content/none');
                            endif;
                            ?>
                        </div>
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
