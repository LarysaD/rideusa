<?php
/**
 * Transport - tr_about_section_layout_two
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
    'link_label' => '',
    'link' => '',
    'main_content' => '',
                ), $atts));
?>
<div class="powerful-solution">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-10">
                <div class="heading">
                    <?php if(!empty($sub_title)): ?>
                    <span><?php echo esc_html($sub_title); ?></span>
                    <?php endif; ?>
                    <?php if (!empty($main_title)): ?>
                        <h2><?php echo esc_html($main_title); ?></h2>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-xs-12 col-sm-2 custom-zero-padding"> 
                <a class="about-transport button" href="<?php echo esc_url($link); ?>"><?php echo ($link_label != '') ? $link_label : __('contact us', 'transport'); ?></a>
            </div>
            <div class="col-xs-12">
                <p><?php echo wp_kses($main_content, wp_kses_allowed_html( 'post' )); ?></p>
            </div>
        </div>
    </div>
</div>
<?php
echo $this->endBlockComment('tr_about_section_layout_two');