<?php
/**
 * Transport - tr_h7_shipping
 * 
 * This template is use by js composer plugin 
 * 
 * @package transport
 * @subpackage transport.vc_templates
 * @since transport 1.0.0
 */

    extract(shortcode_atts(array(), $atts));
    
    if(isset($atts['shipping'])):
    
    $shippings = vc_param_group_parse_atts($atts['shipping']);
    
    if(is_array($shippings)):
		?>
        <div class="transport-page-settings-seven">
        <div class="container">
            <div class="wrap shipping-types-warp">
                <ul class="shipping-type clearfix">
                    <?php foreach($shippings as $shipping):?>
                    <li>
                        <?php if(!empty($shipping['icon'])):  ?>
                        <i class="fa <?php echo esc_attr($shipping['icon']) ; ?>"></i>
                        <?php endif; ?>
                        <h5><?php if(isset($shipping['title'])) { echo esc_html($shipping['title']); } ?></h5>
                        <p><?php if(isset($shipping['description'])) { echo esc_html($shipping['description']); } ?></p>
                        <a href="<?php if(isset($shipping['buttion_url'])) {  echo esc_url($shipping['buttion_url']); } ?>"><?php if(isset($shipping['buttion_text'])) { echo esc_html($shipping['buttion_text']); } ?> <i class="fa fa-angle-right"></i> </a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        </div>   
		<?php
		endif;
	endif;
echo $this->endBlockComment('tr_h7_shipping');
