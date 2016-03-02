<?php
/**
 *  * Template Name: - Custom Carrers Form
 * 
 * @package transport
 * @package transport
 * @since transport 1.0.0
 */
function careersFormScripts() {
    wp_enqueue_style( 'careers-form', get_template_directory_uri ()."/content/careersform.css" );
    wp_enqueue_script( 'jqueryValidatioCareers', 'http://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js', array(), '', true );
    wp_enqueue_script( 'jqueryValidatioCustom', get_template_directory_uri ()."/content/careersValidate.js", array(), '', true );
}
add_action( 'wp_enqueue_scripts', 'careersFormScripts' );

get_header();

?>

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
