<?php

/**
 * Transport - Header Layout
 *
 * @package transport
 * @subpackage transport.inc.options.field
 * @since transport 1.0
 */

return array(
    array(
        'id' => 'transport_2footer',
        'label' => __('Footer Layout', 'transport'),
        'desc' => __('Select Footer Layout', 'transport'),
        'std' => '',
        'type' => 'radio-image',
        'section' => 'transport_footer_layout',
        'rows' => '',
        'post_type' => '',
        'taxonomy' => '',
        'min_max_step' => '',
        'class' => '',
        'condition' => '',
        'operator' => 'and',
        'choices' => array(
            array(
                'value' => 'footer_1',
                'label' => __('Footer One', 'transport'),
                'src' => get_template_directory_uri().'/assets/images/footer-layout/footer-one.jpg'
            ),
            array(
                'value' => 'footer_2',
                'label' => __('Footer Two', 'transport'),
                'src' => get_template_directory_uri().'/assets/images/footer-layout/footer-two.jpg'
            ),
            array(
                'value' => 'footer_3',
                'label' => __('Footer Three', 'transport'),
                'src' => get_template_directory_uri().'/assets/images/footer-layout/footer-three.jpg'
            ),
            array(
                'value' => 'footer_4',
                'label' => __('Footer Four', 'transport'),
                'src' => get_template_directory_uri().'/assets/images/footer-layout/footer-four.jpg'
            ),
            array(
                'value' => 'footer_5',
                'label' => __('Footer Five', 'transport'),
                'src' => get_template_directory_uri().'/assets/images/footer-layout/footer-five.jpg'
            ),
        )
    )
);
