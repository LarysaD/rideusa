<?php
/**
 * Transport - tr_testimonial_layout_two
 * 
 * This template is use by js composer plugin 
 * 
 * @package transport
 * @subpackage transport.vc_templates
 * @since transport 1.0.0
 */
extract(shortcode_atts(array(
    'main_title' => '',
    'sub_title' => '',
    'background_image' => '',
    'no_slides' => get_option('posts_per_page'),
                ), $atts));
?>
<div class="transport-page-settings-two">
    <?php $style = ($background_image)? 'style="background-image: url('.wp_get_attachment_url($background_image).')"':''; ?>
    <div class="about parallax" <?php print($style); ?>>
    <div id="about-slides" class="about-slides">
        <?php
            $news_query = new WP_Query(array('post_type' => 'testimonial', 'ignore_sticky_posts' => 1, 'post_status' => 'publish', 'posts_per_page' => $no_slides));
            if ($news_query->have_posts()) :
                while ($news_query->have_posts()) :
                    $news_query->the_post();
                    ?>
        <div class="about-content">
            <div class="about-text">
                <div class="heading">
                    <?php if ($sub_title != ''): ?>
                        <span><?php echo esc_html($sub_title); ?></span>
                    <?php endif; ?>
                    <h2><?php echo esc_html(($main_title != '') ? $main_title : __('what people say about transport', 'transport')) ?></h2>
                    
                    <p><?php echo wp_trim_words(get_the_content(), 30, $more = ''); ?></p>
                    <strong><?php the_title(); ?></strong>
                    <?php $url =  get_post_meta(get_the_ID(), 'testimonial_author_url', true); ?>
                    <?php if(!empty($url)): ?>
                    <a href="<?php echo esc_url($url); ?>"><?php echo esc_html($url); ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <?php
                endwhile;
            endif;
            wp_reset_postdata();
            ?>
    </div>
</div>
</div>
<?php
echo $this->endBlockComment('tr_testimonial_layout_two');