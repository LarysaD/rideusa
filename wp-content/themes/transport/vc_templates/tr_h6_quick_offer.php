<?php
/**
 * Transport - tr_h6_quick_offer
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
        'description' => '',

    ), $atts));
?>
        
                <!-- Features Section starts here -->
        <div class="transport-page-settings-six">
        <div class="features-section">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="features-text">
                            <div class="heading">
                                <span><?php echo esc_html($sub_title);?></span>
                                <h3><?php echo esc_html($main_title);?></h3>
                            </div>

                            <p><?php echo esc_html($description);?></p>
                        </div>
                    </div>
                    <?php
					
                    if(isset($atts['quick'])):
                    $quicks = vc_param_group_parse_atts($atts['quick']);

                    	if(is_array($quicks)):
							foreach($quicks as $quick):
								$quick_title = (isset($quick['title'])) ? $quick['title'] : "";
						    	 ?>
			                    <div class="col-xs-12 col-sm-6">
			                        <div class="features-tab">
			                            <span class="wrap-icon">
			                                <?php
			                                $image_details = wp_get_attachment_image_src($quick['image'], 'full');
			                                if (!empty($image_details) && is_array($image_details)):
			                                    if ($image_details[1] > 58): //if image width > 58px
			                                        ?>
			                                        <i class="icon-ship"><img src="<?php echo apply_filters('transport_image_resize', $image_details[0], '58', '60'); ?>" alt="<?php echo esc_html($quick_title); ?>"  /></i>
			                                    <?php else: ?>
			                                        <i class="icon-ship"><img src="<?php echo esc_url($image_details[0]); ?>" alt="<?php echo esc_html($quick_title); ?>" /></i>
			                                    <?php
			                                    endif;
			                                endif;
			                                ?>
			                            </span>
			                            <div class="tab-text">
			                                <h5><?php echo esc_html($quick_title); ?></h5>
			                                <p><?php echo esc_html($quick['description']); ?></p>
			                            </div>
			                        </div>
			                    </div>
			                    <?php 
                    		endforeach; 
                    	endif;
                    endif;
                    ?> 
  
               
                </div>
            </div>
        </div>
        </div>
        <!-- Features Section starts here -->
        
<?php
echo $this->endBlockComment('tr_h6_quick_offer');
