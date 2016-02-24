<?php
/**
 * Template Name: Visual Composer Template
 * 
 * This is Visual composer page template layout
 * 
 * @package transport
 * @since transport 1.0.0
 */
 
get_header();
?>
<section id="section">
    <div class="section">
        <?php
        if (have_posts()):
            while (have_posts()):
            
                the_post();
                the_content();
            
            endwhile;
        endif;
        ?>
    </div>
</section>
<?php get_footer(); 