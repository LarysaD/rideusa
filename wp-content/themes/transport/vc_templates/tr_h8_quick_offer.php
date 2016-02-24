<?php
/**
 * Transport - tr_h8_quick_offer
 * 
 * This template is use by js composer plugin 
 * 
 * @package transport
 * @subpackage transport.vc_templates
 * @since transport 1.0.0
 */
extract(shortcode_atts(array(
    	'image' => '',
    ), $atts));
?>

<div class="transport-page-settings-eight">    
    <div class="features">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <?php if (!empty($image)):
                        $thumb  = wp_get_attachment_url($image);
                        ?>
                        <img src="<?php echo apply_filters('transport_image_resize', $thumb, '553', '414');  ?>" alt="" />
                    <?php endif; ?>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="features-text-wrap">
                        <?php
                        
                        if($atts['quick']):
	                        $quicks = vc_param_group_parse_atts($atts['quick']);
	                        if(is_array($quicks)):
		                        foreach ($quicks as $key => $quick):
		                            ?>	
		                            <div class="features-text" id="tab<?php echo esc_attr($key); ?>">
		                                <div class="features-text-info"> 
		
		                                    <div class="heading">
		                                        <span><?php if(isset($quick['sub_title'])) { echo esc_html($quick['sub_title']); } ?></span>
		                                        <h3><?php if(isset($quick['main_title'])) { echo esc_html($quick['main_title']); } ?></h3>
		                                    </div>
		
		                                    <p><?php if(isset($quick['description'])) { echo esc_html($quick['description']); } ?></p>
		                                </div>
		                            </div>
		                        <?php 
		                        endforeach;
							endif;
						endif;
                        	
                        ?>
                    </div>

                    <div class="tab-content">
                        <ul class="features-icon clearfix">
                            <?php
                            $flag = 0;
                            if(isset($atts['quick'])):
                            $quickTabs = vc_param_group_parse_atts($atts['quick']);
	                            if(is_array($quickTabs)) :
		                            foreach ($quickTabs as $keyTab => $quickTab):
		                                $class = '';
		                            	if($flag == 0) {
		                                    $class = 'active';
		                                    $flag = 1;
		                                }
		                                
		                                ?>	
		                                <li class="<?php echo esc_attr($class); ?>">
		                                    <h5><?php if(isset($quickTab['title'])) { echo esc_html($quickTab['title']); } ?></h5>
		                                    <i class="fa <?php if(isset($quickTab['buttion_text'])) { echo esc_attr($quickTab['buttion_text']); } ?>" data-filter="tab<?php echo esc_attr($keyTab); ?>"></i>
		                                </li>
		                            <?php 
		                            endforeach; 
	                            endif; 
                            endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
echo $this->endBlockComment('tr_h8_quick_offer');
