<?php
/**
 * Transport - tr_h5_about_section_five
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
        'button_link' => '',
        'button_label' => '',
    ), $atts));

?>

<div class="transport-page-settings-five">
        <div class="about-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 left-spacer">
                        <div class="about-figure">
                            <figure class="fig-design">
                                <a href="javascript: void(0);"> <img alt="" src="<?php echo apply_filters('transport_image_resize', wp_get_attachment_url($sec_image), '360', '316'); ?>" alt="" title="" /> </a>
                            </figure>
                        </div>
                    </div>
                    <div class="col-sm-8 left-manage">
                        <div class="about-blog">
                            <div class="heading">
                            <?php if($sub_title != ''): ?>
                            <span><?php echo esc_html($sub_title); ?></span>
                            <?php endif ?>
                            <h3><?php echo esc_html(($main_title != '')? $main_title : __('ABOUT TRANSPORT KING','transport')) ?></h3>
                        </div>
                            <p><?php echo wp_kses($main_content, wp_kses_allowed_html( 'post' )); ?></p>
                            <a class="services-link" href="<?php echo esc_url($button_link); ?>"><?php echo ($button_label != '') ? esc_html($button_label) : esc_html__('read more', 'transport'); ?> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
<?php
echo $this->endBlockComment('tr_h5_about_section_five');