<?php
/**
 * Transport - tr_h5_service_tabbing
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
        'service_tabs' => '',
    ), $atts));

?>
<div class="transport-page-settings-five">
    <?php $tabs = vc_param_group_parse_atts($service_tabs); ?>
        <div class="features-section">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="heading">
                            <?php if($sub_title != ''): ?>
                            <span><?php echo esc_html($sub_title); ?></span>
                            <?php endif ?>
                            <h3><?php echo esc_html(($main_title != '')? $main_title : __('ABOUT TRANSPORT KING','transport')) ?></h3>
                        </div>
                        <ul class="features-tabing clearfix">
                            <?php
                            $flag = 0;
                            if(is_array($tabs)):
                            foreach ($tabs as $tab): ?>
                            <li class="<?php if($flag == 0) { echo esc_attr('active'); $flag ++; } ?>">
                                <div class="tab-wrap">
                                    <?php if(isset($tab['tab_icon'])): ?>
                                        <?php $image_info = wp_get_attachment_image_src( $tab['tab_icon'], 'full' ); ?>
                                        <?php if($image_info[1] > 46): ?>
                                            <i class="icon-clock"><img src="<?php echo apply_filters('transport_image_resize', wp_get_attachment_url($tab['tab_icon']), '46', '50'); ?>" alt="" title="" /></i>
                                        <?php else: ?>
                                            <i class="icon-clock"><img src="<?php echo esc_url(wp_get_attachment_url($tab['tab_icon'])); ?>" alt="" title="" /></i>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                    <div class="heading">
                                        <?php if(isset($tab['tab_heading']) && !empty($tab['tab_heading'])): ?>
                                        <h5><?php echo esc_html($tab['tab_heading']); ?></h5>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="tab-content active-tab">
                                    <div class="heading">
                                        <?php if(isset($tab['tab_title']) && !empty($tab['tab_title'])): ?>
                                        <h5><?php echo esc_html($tab['tab_title']); ?></h5>
                                        <?php endif; ?>
                                    </div>
                                    <?php if(isset($tab['tab_description']) && !empty($tab['tab_description'])): ?>
                                        <p><?php echo wp_kses($tab['tab_description'], wp_kses_allowed_html( 'post' )); ?></p>
                                    <?php endif; ?>
                                        
                                    <?php if(isset($tab['tab_button_lable']) && isset($tab['tab_button_link'])): ?>
                                        <a class="services-link" href="<?php echo esc_url($tab['tab_button_link']); ?>"><?php echo esc_html($tab['tab_button_lable']); ?></a>
                                    <?php endif; ?>
                                    
                                </div>
                            </li>
                            <?php endforeach;
							endif;
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        </div>
<?php
echo $this->endBlockComment('tr_h5_service_tabbing');