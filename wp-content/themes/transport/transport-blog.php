<?php
/**
 * Template Name: Blog
 * 
 * This is blog layout page. 
 * 
 * @package transport
 * @since transport 1.0.0
 */
get_header();
?>
<div class="common-page">
    <?php do_action("transport_banner"); ?>
    <section id="section">
        <!--Section box starts Here -->
        <div class="section">
            <div class="blog">
                <div class="container">
                    <div class="row">
                        <?php
                        if (have_posts()):
                            while (have_posts()):
                                the_post();

                                $blog = ot_get_option('transport_blog_layout');
                                if ($blog == 'blog_2') {
                                    get_template_part('content/blog/blog', 'two');
                                } else {
                                    get_template_part('content/blog/blog', 'one');
                                }
                                
                            endwhile;
                        endif;
                        ?>
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
