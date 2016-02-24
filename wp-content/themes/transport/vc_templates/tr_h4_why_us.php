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
    'image' => '',
    'buttion_text' => '',
    'buttion_url' => '',
                ), $atts));

$thumb = wp_get_attachment_url($image);
?>
<!-- Features starts here -->
<div class="transport-page-settings-four">
    <div class="features clearfix">
        <?php if (!empty($thumb)): ?>
            <div class="figure" style="background: url('<?php echo esc_url($thumb); ?>') no-repeat;"></div>
        <?php else: ?>
            <div class="figure"></div>
        <?php endif; ?>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-4">
                    <div class="trucking">
                        <div class="heading">
                            <span><?php echo esc_html($sub_title); ?></span>
                            <h3><?php echo esc_html($main_title); ?></h3>
                        </div>
                        <div class="features-wrap">
                            <?php
                            if (isset($atts['why_us'])):
                                $i = 1;
                                $why_us = vc_param_group_parse_atts($atts['why_us']);
                                if (is_array($why_us)):
                                    foreach ($why_us as $why):
                                        if ($i % 2 != 0) {
                                            $class = 'right-spacer';
                                        } else {
                                            $class = '';
                                        }
                                        $i++;
                                        $why_us_title = (isset($why['title'])) ? $why['title'] : '';
                                        ?>
                                        <div class="features-tab bottom-spacer <?php echo esc_attr($class); ?>">
                                            <?php if (isset($why['tab_icon'])): ?>
                                                <?php $image_info = wp_get_attachment_image_src($why['tab_icon'], 'full'); ?>
                                                <?php if ($image_info[1] > 46): //image resize when width > 46 px ?>
                                                    <i class="icon-ship"><img src="<?php echo apply_filters('transport_image_resize', wp_get_attachment_url($why['tab_icon']), '46', '50'); ?>" alt="<?php echo esc_html($why_us_title); ?>"/></i>
                                                <?php else: ?>
                                                    <i class="icon-ship"><img src="<?php echo esc_url(wp_get_attachment_url($why['tab_icon'])); ?>" alt="<?php echo esc_html($why_us_title); ?>" /></i>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                            <div class="tab-text">
                                                <div class="heading">
                                                    <h5><?php echo esc_html($why_us_title); ?></h5>
                                                </div>
                                                <p><?php
                                                    if (isset($why['description'])) {
                                                        echo wp_trim_words($why['description'], 30, $more = '');
                                                    }
                                                    ?></p>
                                            </div>
                                        </div>
                                        <?php
                                    endforeach;
                                endif;
                            endif;
                            ?>

                            <a class="services-link" href="<?php echo esc_attr($buttion_url); ?>"><?php echo esc_html($buttion_text); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features ends here -->
<?php
echo $this->endBlockComment('tr_h4_services');
