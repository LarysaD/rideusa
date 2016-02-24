<?php
/**
 * Transport - tr_features_layout_two
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
    'main_content' => '',
    'feature_one_icon' => '',
    'feature_one_title' => '',
    'feature_one_content' => '',
    'feature_two_icon' => '',
    'feature_two_title' => '',
    'feature_two_content' => '',
    'feature_three_icon' => '',
    'feature_three_title' => '',
    'feature_three_content' => '',
    'feature_four_icon' => '',
    'feature_four_title' => '',
    'feature_four_content' => '',
                ), $atts));
?>
<div class="transport-page-settings-two">
<div class="features">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="features-text">
                    <div class="heading">
                        <?php if (!empty($sub_title)): ?>
                            <span><?php echo esc_html($sub_title); ?></span>
                        <?php endif; ?>
                        <?php if (!empty($main_title)): ?>
                            <h3><?php echo esc_html($main_title); ?></h3>
                        <?php endif; ?>
                    </div>
                    <p><?php echo wp_kses($main_content, wp_kses_allowed_html( 'post' )); ?></p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6">
                <div class="features-tab bottom-border">
                <i class="icon-ship"><img src="<?php echo apply_filters('transport_image_resize', wp_get_attachment_url($feature_one_icon), '58', '70'); ?>" alt="" title="" /></i>
                <div class="tab-text">
                    <h5><?php echo esc_html($feature_one_title); ?></h5>
                    <p><?php echo wp_kses($feature_one_content, wp_kses_allowed_html( 'post' )); ?></p>
                </div>
                </div>
                <div class="features-tab">
                    <i class="icon-ship"><img src="<?php echo apply_filters('transport_image_resize', wp_get_attachment_url($feature_two_icon), '58', '70'); ?>" alt="" title="" /></i>
                    <div class="tab-text">
                        <h5><?php echo esc_html($feature_two_title); ?></h5>
                        <p><?php echo wp_kses($feature_two_content, wp_kses_allowed_html( 'post' )); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6">
                <div class="features-tab bottom-border">
                    <i class="icon-ship"><img src="<?php echo apply_filters('transport_image_resize', wp_get_attachment_url($feature_three_icon), '58', '70'); ?>" alt="" title="" /></i>
                    <div class="tab-text">
                        <h5><?php echo esc_html($feature_three_title); ?></h5>
                        <p><?php echo wp_kses($feature_three_content, wp_kses_allowed_html( 'post' )); ?></p>
                    </div>
                </div>
                <div class="features-tab">
                    <i class="icon-ship"><img src="<?php echo apply_filters('transport_image_resize', wp_get_attachment_url($feature_four_icon), '58', '70'); ?>" alt="" title="" /></i>
                    <div class="tab-text">
                        <h5><?php echo esc_html($feature_four_title); ?></h5>
                        <p><?php echo wp_kses($feature_four_content, wp_kses_allowed_html( 'post' )); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php
echo $this->endBlockComment('tr_features_layout_two');