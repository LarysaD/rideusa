<?php
/**
 * Transport - tr_simple_content
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
    'sub_title' => '',
    'section_content' => '',
    'link_label' => '',
    'link' => '',
), $atts));
?>
<div class="amazing-features ">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 simple-content">
                <?php $image = esc_url(apply_filters('transport_image_resize', wp_get_attachment_url($content_image), '360', '415')); 
                    if(!empty($image)):
                ?>
                <img class="content-image" src="<?php echo esc_url($image); ?>" alt="" />
                <?php endif; ?>
                <div class="amazing-text">
                    <div class="heading">
                        <?php if($sub_title != ''): ?>
                        <span><?php echo esc_html($sub_title); ?></span>
                        <?php endif ?>
                        <h3><?php echo esc_html(($main_title != '')? $main_title : __('ABOUT TRANSPORT KING','transport')) ?></h3>
                    </div>
                    <p><?php echo esc_html($section_content); ?></p>
                    <?php if($link_label != '') { ?>
                    <a href="<?php echo esc_url($link); ?>" class="button contact-us"><?php echo esc_html($link_label); ?></a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
echo $this->endBlockComment('tr_simple_content');