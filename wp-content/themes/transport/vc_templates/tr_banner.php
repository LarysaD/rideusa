<?php
/**
 * Transport - tr_banner 
 * 
 * This template is use by js composer plugin 
 * 
 * @package transport
 * @subpackage transport.vc_templates
 * @since transport 1.0.0
 */

extract(shortcode_atts(array(
    'content_image' => '',
    'main_title' => '',
    'link_label' => '',
    'link' => '',
), $atts));
?>
<div class="common-page">
    <div class="banner service-banner spacetop">
        <div style="background-image: url(<?php echo wp_get_attachment_url($content_image) ?>);" class="banner-image-plane parallax">
        </div>
        <div class="banner-text">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <?php if(!empty($link_label) && !empty($link)): ?>
                        <a href="<?php echo esc_url($link); ?>" class="shipping"><?php echo esc_html($link_label); ?></a>
                        <?php endif; ?>
                        <h1><?php echo esc_html($main_title); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    echo $this->endBlockComment('tr_banner');