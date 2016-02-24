<?php
/**
 * Transport - tr_about_section_layout_one
 *  
 * This template is use by js composer plugin 
 * 
 * @package transport
 * @subpackage transport.vc_templates
 * @since transport 1.0.0
 */

    extract(shortcode_atts(array(
        'sec_image' => '',
        'main_title' => '',
        'sub_title' => '',
        'main_content' => '',
        'secondary_content' => '',
        'sub_heading' => '',
        'sub_heading_desc' => '',
    ), $atts));
?>
<div class="about">
    <div style="background-image: url(<?php echo apply_filters('transport_image_resize', wp_get_attachment_url($sec_image), '1900', '976'); ?>);" class="figure parallax">

            </div>
            <div class="transport-king">
                <div class="about-us">
                    <div class="description">
                        <div class="heading">
                            <?php if($sub_title != ''): ?>
                            <span><?php echo esc_html($sub_title); ?></span>
                            <?php endif ?>
                            <h3><?php echo esc_html(($main_title != '')? $main_title : __('ABOUT TRANSPORT KING','transport')) ?></h3>
                        </div>
                        <p><?php echo wp_kses($main_content, wp_kses_allowed_html( 'post' )); ?></p>
                    </div>
                </div>
                <div class="testimonial-section">
                    <blockquote class="custom-blockquote">
                        <div class="spanish">
                            <p><?php echo wp_kses($secondary_content, wp_kses_allowed_html( 'post' )); ?></p>
                        </div>
                        <footer class="mission">
                            <?php if(!empty($sub_heading)): ?>
                            <h5><?php echo esc_html($sub_heading); ?></h5>
                            <?php endif; ?>
                            <?php if(!empty($sub_heading_desc)): ?>
                            <span><?php echo esc_html($sub_heading_desc); ?></span>
                            <?php endif; ?>
                        </footer>
                    </blockquote>
                </div>

            </div>
        </div>
<?php
echo $this->endBlockComment('tr_about_section_layout_one');