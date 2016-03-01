<?php
/**
 *  * Template Name: - Custom Carrers Form
 * 
 * @package transport
 * @package transport
 * @since transport 1.0.0
 */
get_header();

?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri (); ?>/content/careersform.css">

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
                    get_template_part('content/careers', 'carreersForm');
                    
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
