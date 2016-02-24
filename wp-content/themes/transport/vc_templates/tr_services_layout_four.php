<?php
/**
 * Transport - tr_services_layout_four
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
    <div class="other-services ">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 clearfix">
                    <div class="heading">
                        <span><?php echo esc_html($sub_title); ?></span>
                        <h3><?php echo esc_html(($main_title != '') ? $main_title : __('SERVICES', 'transport')) ?></h3>
                    </div>
                </div>
                <div class="col-xs-12 service-category">
                    <?php $count = 0; ?>
                    <?php foreach ($servicesIDs as $service): ?>
                        <?php
                        if (!empty($service) && is_numeric($service)):
                            $count++;
                            if ($count == 2):
                                $class = 'pos-t';
                            else:
                                $class = '';
                            endif;
                            ?>
                            <div class="service-tab zoom">
                                <?php
                                $thumbnail_id = get_post_thumbnail_id($service);
                                $img_src = apply_filters('transport_image_resize', wp_get_attachment_url($thumbnail_id), '390', '276');
                                ?>
                                <?php if ($thumbnail_id): ?>
                                    <figure class="<?php echo esc_attr($class); ?>">
                                        <a href="<?php echo esc_url(get_permalink($service)); ?>"> <img src="<?php echo esc_url($img_src); ?>" alt="" /> </a>
                                    </figure>
                                <?php endif; ?>
                                <div class="service-text">
                                    <h5><?php echo get_the_title($service); ?></h5>
                                    <p>
                                        <?php echo wp_trim_words(get_post_field('post_content', $service), 18, $more = ''); ?>
                                    </p>
                                    <a class="services-link button button-hover" href="<?php echo esc_url(get_permalink($service)); ?> "><?php esc_html_e('read more', 'transport'); ?></a>
                                </div>
                            </div>

                            <?php
                        endif;
                    endforeach;
                    ?>

                </div>
            </div>
        </div>
    </div>
</div>


<?php
echo $this->endBlockComment('tr_services_layout_four');