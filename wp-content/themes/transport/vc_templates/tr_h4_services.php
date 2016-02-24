<?php
/**
 * Transport - tr_services_layout_one
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
    'main_title2' => '',
    'sub_title2' => '',
    'image2' => '',
    'description2' => '',
    'main_title3' => '',
    'sub_title3' => '',
    'contact_form' => '',
                ), $atts));

$thumb2 = wp_get_attachment_url($image2);
?>
<div class="transport-page-settings-four">
    <div class="our-info">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4 custom-border">
                    <div class="services top-spacer">
                        <div class="heading">
                            <span><?php echo esc_html($sub_title); ?></span>
                            <h3><?php echo esc_html($main_title); ?></h3>
                        </div>
                        <?php 
						if(isset($atts['services'])):
	                        $services = vc_param_group_parse_atts($atts['services']); 
							if(is_array($services)):
								?>
		                        <ul>
		                            <?php
		                            foreach ($services as $service):
		                                $thumb = wp_get_attachment_url($service['image']);
			                            $service_title=(isset($service['title'])) ? $service['title'] : "";
		                                ?>
		                                <li>
		                                    <span class="img-wrap"><img src="<?php echo apply_filters('transport_image_resize', $thumb, '71', '71'); ?>" alt="<?php echo esc_html($service_title); ?>" /></span>
		                                    <div class="service-text">
		                                        <h5><?php echo esc_html($service_title); ?></h5>
		                                        <p><?php if(isset($service['description'])){ echo esc_html($service['description']); } ?></p>
		                                    </div>
		                                </li>
		                            <?php endforeach; ?>
		                        </ul>
		                        <?php 
                        	endif;
                         endif; 
                         ?>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-4 custom-border">
                    <div class="location top-spacer">
                        <div class="heading">
                            <span><?php echo esc_html($sub_title2); ?></span>
                            <h3><?php echo esc_html($main_title2); ?></h3>
                        </div>
                        <div class="map-wrap">
                            <img src="<?php echo apply_filters('transport_image_resize', $thumb2, '323', '169'); ?>" alt="<?php echo esc_html($sub_title2); ?>" />
                        </div>
                        <p><?php echo esc_html($description2); ?></p>
                    </div>
                </div>


                <div class="col-xs-12 col-sm-4">
                    <div class="request-quote top-spacer">
                        <div class="heading">
                            <span><?php echo esc_html($sub_title3); ?></span>
                            <h3><?php echo esc_html($main_title3); ?></h3>
                        </div>
                        <?php
                            if(!empty($contact_form)):
                               echo do_shortcode('[contact-form-7 id="'.$contact_form.'" title="'.get_the_title($contact_form).'"]'); 
                            endif;
                         ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<?php
echo $this->endBlockComment('tr_h4_services');
