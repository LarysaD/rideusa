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
        'id' => 'transport_3header',
        'label' => __('Header Layout', 'transport'),
        'desc' => __('Select Header Layout', 'transport'),
        'std' => '',
        'type' => 'radio-image',
        'section' => 'transport_header_layout',
        'rows' => '',
        'post_type' => '',
        'taxonomy' => '',
        'min_max_step' => '',
        'class' => '',
        'condition' => '',
        'operator' => 'and',
        'choices' => array(
            array(
                'value' => 'header_1',
                'label' => __('Header One', 'transport'),
                'src' => get_template_directory_uri().'/assets/images/header-layout/header-one.jpg'
            ),
            array(
                'value' => 'header_2',
                'label' => __('Header Two', 'transport'),
                'src' => get_template_directory_uri().'/assets/images/header-layout/header-two.jpg'
            ),
             array(
                'value' => 'header_3',
                'label' => __('Header Three', 'transport'),
                'src' => get_template_directory_uri().'/assets/images/header-layout/header-three.jpg'
            ),
             array(
                'value' => 'header_4',
                'label' => __('Header Four', 'transport'),
                'src' => get_template_directory_uri().'/assets/images/header-layout/header-four.jpg'
            ),
             array(
                'value' => 'header_5',
                'label' => __('Header Five', 'transport'),
                'src' => get_template_directory_uri().'/assets/images/header-layout/header-five.jpg'
            ),
             array(
                'value' => 'header_6',
                'label' => __('Header Six', 'transport'),
                'src' => get_template_directory_uri().'/assets/images/header-layout/header-six.jpg'
            ),
             array(
                'value' => 'header_7',
                'label' => __('Header Seven', 'transport'),
                'src' => get_template_directory_uri().'/assets/images/header-layout/header-seven.jpg'
            ),
        )
    )
);
