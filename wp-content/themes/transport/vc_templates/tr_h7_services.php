<?php
/**
 * Transport - tr_h7_services
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
        'services_title' => '',
        'image' => '',
        'description' => '',
        'buttion_title' => '',
        'buttion_link' => '',
    ), $atts));
?>
    <div class="transport-page-settings-seven">   
        <div class="services">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="heading">
                            <span><?php echo esc_html($sub_title);?></span>
                            <h2><?php echo esc_html($main_title);?></h2>
                        </div>
                    </div>
                    <?php if(!empty($image)): $thumb = wp_get_attachment_url($image);?>
                    <div class="col-md-6 col-sm-6">
                        <img src="<?php echo apply_filters('transport_image_resize', esc_url($thumb), '547', '349'); ?>" alt="<?php echo esc_attr($main_title);?>" />
                    </div>
                    <?php endif; ?>
                    <div class="col-md-6 col-sm-6">
                        <h5><?php echo esc_html($services_title);?></h5>
                        <p><?php echo esc_html($description);?></p>
                        <ul class="cargo-cont clearfix">
							<?php 
							if(isset($atts['services'])):
								$services = vc_param_group_parse_atts($atts['services']);
								if(is_array($services)):
									foreach($services as $service): 
									?>
		                            <li><?php if(isset($service['title'])) { echo esc_html($service['title']); } ?></li>
		                           <?php
		                            endforeach;
	                           	endif;
                           	endif;
                            ?>
                        </ul>
                        <a href="<?php echo esc_html($buttion_link);?>"><?php echo esc_html($buttion_title);?> <i class="fa fa-angle-right"></i> </a>

                    </div>

                </div>
            </div>
        </div>
         </div>     
             
<?php
echo $this->endBlockComment('tr_h7_services');
