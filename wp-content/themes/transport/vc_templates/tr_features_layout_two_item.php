<?php
/**
 * Transport - fetr_features_layout_two_item
 * 
 * This template is use by js composer plugin 
 * 
 * @package transport
 * @subpackage transport.vc_templates
 * @since transport 1.0.0
 */
extract(shortcode_atts(array(
    'feature_one_icon' => '',
    'feature_one_title' => '',
    'feature_one_content' => '',
                ), $atts));
?>
<div class="col-xs-12 col-sm-6">
    <div class="features-tab bottom-border">
        <?php
        $image_details = wp_get_attachment_image_src($feature_one_icon, 'full');
        if (!empty($image_details) && is_array($image_details)):
            if ($image_details[1] > 58):
                ?>
                <i class="icon-train"><img src="<?php echo esc_url(apply_filters('transport_image_resize', $image_details[0], '58', '70')); ?>" alt="" title="" /></i>
            <?php else:
                ?>
                <i class="icon-train"><img src="<?php echo esc_url($image_details[0]); ?>" alt="" title="" /></i>
            <?php
            endif;
        endif;
        ?>
        <div class="tab-text">
            <h5><?php echo esc_html($feature_one_title); ?></h5>
            <p><?php echo wp_kses($feature_one_content, wp_kses_allowed_html( 'post' )); ?></p>
        </div>
    </div>
</div>
<?php
echo $this->endBlockComment('tr_features_layout_two_item');