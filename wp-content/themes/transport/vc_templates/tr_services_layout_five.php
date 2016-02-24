<?php
/**
 * Transport - tr_services_layout_five
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
    'desc' => '',
    'post_id_one' => '',
    'post_id_two' => '',
    'post_id_three' => '',
                ), $atts));
$servicesIDs = array();

$arr = explode('-{', $post_id_one);
$servicesIDs[] = (trim(end($arr), '}'));

$arr = explode('-{', $post_id_two);
$servicesIDs[] = (trim(end($arr), '}'));

$arr = explode('-{', $post_id_three);
$servicesIDs[] = (trim(end($arr), '}'));
?>

<div class="service-page">
    <div class="more-services ">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-3">
                    <div class="heading">
                        <span><?php echo esc_html($sub_title); ?></span>
                        <h3><?php echo esc_html(($main_title != '') ? $main_title : __('SERVICES', 'transport')) ?></h3>
                        <p><?php echo wp_kses($desc, wp_kses_allowed_html( 'post' )); ?></p>
                    </div>
                </div>
                <?php foreach ($servicesIDs as $service): ?>
                    <?php if (!empty($service) && is_numeric($service)): ?>
                        <div class="col-xs-12 col-sm-3 more-slides">
                            <div class="more-tab zoom">
                                <?php
                                $thumbnail_id = get_post_thumbnail_id($service);
                                $img_src = apply_filters('transport_image_resize', wp_get_attachment_url($thumbnail_id), '262', '186');
                                ?>
                                <?php if ($thumbnail_id): ?>
                                    <figure>
                                        <a href="<?php echo esc_url(get_permalink($service)); ?>"> <img src="<?php echo esc_url($img_src); ?>" alt="" /> </a>
                                    </figure>
                                <?php endif; ?>
                                <div class="more-text">
                                    <h6><a href="<?php echo esc_url(get_permalink($service)); ?>"><?php echo get_the_title($service); ?></a></h6>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<?php
echo $this->endBlockComment('tr_services_layout_five');