<?php
/**
 * Transport - tr_h7_about
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
        'left_image' => '', 
        'right_image' => '', 
        'queto_description' => '', 
        'queto_main_title' => '',
        'queto_sub_title' => '',
    ), $atts));

?>
       <div class="transport-page-settings-seven">    
        <div class="about">

            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="transport-king">
                            <div class="about-us">
                                <div class="heading">
                                    <span><?php echo esc_html($sub_title);?></span>
                                    <h3><?php echo esc_html($main_title);?></h3>
                                </div>

                                <p><?php echo esc_html($description);?></p>
                            </div>
                            <div class="testimonial-section">
                                <blockquote class="custom-blockquote">
                                    <div class="spanish">
                                        <p><?php echo esc_html($queto_description);?></p>
                                    </div>
                                    <footer class="mission">
                                        <h5><?php echo esc_html($queto_main_title);?></h5>
                                        <span><?php echo esc_html($queto_sub_title);?></span>
                                    </footer>
                                </blockquote>
                            </div>

                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-5 col-md-offset-1">
                        <div class="img-wrap">
							<?php
							 if(!empty($right_image)): 
							  $right_thumb = wp_get_attachment_url($right_image);
							?>
                            <img src="<?php echo apply_filters('transport_image_resize', esc_url($right_thumb), '363', '519'); ?>" alt=""/>
                            <?php endif;?>
                            <div class="img-cont">
							<?php
							 if(!empty($left_image)): 
							  $left_thumb = wp_get_attachment_url($left_image);
							?>
                                <img src="<?php echo apply_filters('transport_image_resize', esc_url($left_thumb), '245', '351'); ?>" alt=""/>
                           <?php endif;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         </div>
        
<?php
echo $this->endBlockComment('tr_h7_about');
