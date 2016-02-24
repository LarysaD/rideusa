<?php
/**
 * Transport - tr_h8_about
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
    'midle_image' => '',
    'queto_description' => '',
    'buttion_title' => '',
    'buttion_url' => '',
                ), $atts));
?>

<div class="transport-page-settings-eight">   
    <div class="about">

        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="transport-king">
                        <div class="about-us">
                            <div class="heading">
                                <span><?php echo esc_html($sub_title); ?></span>
                                <h3><?php echo esc_html($main_title); ?></h3>
                            </div>
                            <p><?php echo esc_html($description); ?></p>
                            <?php if (!empty($buttion_title)): ?><a href="<?php echo esc_html($buttion_url); ?>" class="services-link"><?php echo esc_html($buttion_title); ?></a><?php endif; ?>
                        </div>

                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="img-wrap clearfix">
                        <?php
                        if (!empty($left_image)):
                            $left_thumb = wp_get_attachment_url($left_image);
                            ?>
                            <img src="<?php echo apply_filters('transport_image_resize', $left_thumb, '293', '301'); ?>" alt=""/>
                        <?php endif; ?>
                        <?php
                        if (!empty($right_image)):
                            $right_thumb = wp_get_attachment_url($right_image);
                            ?>
                            <img src="<?php echo apply_filters('transport_image_resize', $right_thumb, '260', '302'); ?>" alt=""/>
                        <?php endif; ?>
                        <div class="img-cont">
                            <?php
                            if (!empty($midle_image)):
                                $midle_thumb = wp_get_attachment_url($midle_image);
                                ?>
                                <img src="<?php echo apply_filters('transport_image_resize', $midle_thumb, '293', '381'); ?>" alt=""/>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 

<?php
echo $this->endBlockComment('tr_h8_about');
