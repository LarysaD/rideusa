<?php
/**
 * Transport - tr_have_a_question
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
    ), $atts));
?>
<div class="query">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-10">
                <?php if(!empty($main_title)): ?>
                <h5><?php echo esc_html($main_title); ?></h5>
                <?php endif; ?>
                <p><?php echo esc_html($sub_title); ?></p>
            </div>
            <div class="col-xs-12 col-sm-2">
                <a href="<?php echo esc_url($link); ?>" class="contact-us button"><?php echo esc_html(($link_label != '')? $link_label : __('contact us', 'transport')); ?></a>
            </div>
        </div>
    </div>
</div>
<?php
echo $this->endBlockComment('tr_have_a_question');