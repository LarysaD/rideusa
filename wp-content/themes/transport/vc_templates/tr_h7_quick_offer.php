<?php
/**
 * Transport - tr_h7_quick_offer
 * 
 * This template is use by js composer plugin 
 * 
 * @package transport
 * @subpackage transport.vc_templates
 * @since transport 1.0.0
 */
extract(shortcode_atts(array(
    'main_title' => '',
    'buttion_text' => '',
    'buttion_link' => '',
    'image' => '',
                ), $atts));

$background_image = wp_get_attachment_image_src($image, 'full');
?>

<div class="transport-page-settings-seven">    
    <div class="features parallax" style="background-image: url(<?php echo esc_url($background_image[0]); ?>)" >
        <div class="container">

            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="tab">

                        <div class="features-text" id="tab-block">
                            <div class="heading">
                                <span><?php echo esc_html($main_title); ?></span>
                            </div>
                        </div>
                        <?php
                        
                        if(isset($atts['quick'])):
        	                $quicks = vc_param_group_parse_atts($atts['quick']);
    	                    if(is_array($quicks)):
		                        foreach ($quicks as $key => $quick):
		                        
		                            ?>
		                            <div class="features-text" id="tab-block<?php echo esc_attr($key); ?>">
		                                <div class="heading">
		                                    <span><?php if(isset($quick['title'])){ echo esc_html($quick['title']); } ?></span>
		                                    <h3><?php if(isset($quick['sub_title'])) { echo esc_html($quick['sub_title']); } ?></h3>
		                                </div>
		                                <p><?php if(isset($quick['description'])) { echo esc_html($quick['description']); } ?></p>
		                                <a href="<?php if(isset($quick['buttion_link'])) { echo esc_attr($quick['buttion_link']); } ?>" class="services-link button button-hover"><?php if(isset($quick['buttion_text'])) { echo esc_html($quick['buttion_text']); } ?></a>
		                            </div>
		                        <?php 
		                        endforeach;
	                        endif;
                        endif;
                         ?>

                    </div>
                </div>

                <div class="col-xs-12 col-sm-5 col-sm-offset-1  col-md-5 col-md-offset-1">

                    <ul class="bxslider">
                        <?php
                        if(isset($atts['quick'])):
                        $quickTabs = vc_param_group_parse_atts($atts['quick']);

                        if(is_array($quickTabs)):
	                        foreach ($quickTabs as $keyTab => $quickTab):
	                        	$quick_title= (isset($quickTab['title'])) ? $quickTab['title'] : "";
	                            ?>
	                            <li>
	                                <div class="features-tab" data-filter="tab-block<?php echo esc_attr($keyTab); ?>">
	                                    <?php
	                                    $image_details = wp_get_attachment_image_src($quickTab['section_icon'], 'full');
	                                    if (!empty($image_details) && is_array($image_details)):
	                                        if ($image_details[1] > 58): // if icon width > 58 px
	                                            ?>
	                                            <i class="icon-ship"><img src="<?php echo apply_filters('transport_image_resize', $image_details[0], '58', '60'); ?>" alt="<?php echo esc_html($quick_title);  ?>" /></i>
	                                        <?php else:
	                                            ?>
	                                            <i class="icon-ship"><img src="<?php echo esc_url($image_details[0]); ?>" alt="<?php echo esc_html($quick_title);  ?>"  /></i>
	                                        <?php
	                                        endif;
	                                    endif;
	                                    ?>
	                                    <h5><?php echo esc_html($quick_title);  ?></h5>
	                                    <div class="tab-text">
	                                        <p><?php if($quickTab['description']){ echo esc_html($quickTab['description']); } ?></p>
	                                    </div>
	                                </div>
	                            </li>
	                        <?php 
                        	endforeach; 
                        endif;
                      endif;
                      ?>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>


<?php
echo $this->endBlockComment('tr_h7_quick_offer');
