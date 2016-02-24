<?php
/**
 * Transport - tr_services_layout_banner
 * 
 * This template is use by js composer plugin 
 * 
 * @package transport
 * @subpackage transport.vc_templates
 * @since transport 1.0.0
 */
extract(shortcode_atts(array(
    'banner_img' => '',
    'title' => '',
    'desc' => '',
    'btn_text' => '',
    'btn_link' => '',
                ), $atts));
?>

<div class="service-page">
    <?php $banner_img_url = wp_get_attachment_image_src($banner_img, "full"); ?>
    <div class="parallax-window3 custom-window" data-parallax="scroll" data-image-src="<?php echo esc_url($banner_img_url[0]); ?>">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="more-services-text ">
                        <h3><?php echo esc_html(($title != '') ? $title : __('more services', 'transport')); ?></h3>
                        <p><?php echo wp_kses($desc, wp_kses_allowed_html( 'post' )); ?></p>
                        <a class="services-link button button-hover" href="<?php echo esc_url($btn_link); ?>"><?php echo esc_html($btn_text); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>    

<?php
echo $this->endBlockComment('tr_services_layout_banner');