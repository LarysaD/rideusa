<?php
/**
 * Transport - tr_h6_about
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
        'image' => '',
        'description' => '',
    ), $atts));
    
?>
      <!-- About Section Starts here -->
        <div class="transport-page-settings-six">
        <div class="about-section">
            <div class="container">
                <div class="row">
                    <div class="col-s-12 about-wrap">
                        <div class="about-figure">
							<?php
							if(!empty($image)): 
							$thumb = wp_get_attachment_url($image);
							?>
                            <figure class="fig-design">
                                <a href="javascript: void(0);">
                                    <img src="<?php echo apply_filters('transport_image_resize', esc_url($thumb), '555', '469'); ?>" alt="<?php echo esc_attr($sub_title);?>">
                                </a>
                            </figure>
                            <?php endif; ?>
                        </div>
                        <div class="about-text">
                            <div class="heading">
                                <span><?php echo esc_html($sub_title);?></span>
                                <h3><?php echo esc_html($main_title);?></h3>
                            </div>
                            <p><?php echo esc_html($description);?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- About Section Ends here -->
        
<?php
echo $this->endBlockComment('tr_h6_about');
