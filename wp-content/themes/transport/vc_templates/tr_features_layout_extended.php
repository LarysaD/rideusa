<?php
/**
 * Transport - tr_features_layout_extended 
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
    'link_label' => '',
    'link' => '',
), $atts));
?>
<div class="features">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-4">
                <div class="features-text">
                    <div class="heading">
                        <?php if(!empty($sub_title)): ?>
                        <span><?php echo esc_html($sub_title); ?></span>
                        <?php endif; ?>
                        <?php if(!empty($main_title)): ?>
                        <h3><?php echo esc_html($main_title); ?></h3>
                        <?php endif; ?>
                    </div>

                    <p><?php echo wp_kses($main_content, wp_kses_allowed_html( 'post' )); ?></p>
                    <a href="<?php echo esc_url($link); ?>" class="services-link button"><?php echo esc_html(($link_label != '')? $link_label : __('our services','transport')); ?></a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-8 custom-padding">
                <div class="row">
                    <?php echo do_shortcode($content); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
echo $this->endBlockComment('tr_features_layout_extended');