<?php

/**
 * Transport - Home Layout
 *
 * @package transport
 * @subpackage transport.inc.options.field
 * @since transport 1.0
 */
return array(
        array(
        'id' => 'transport_select_home_one',
        'label' => __('Home - 1 ', 'transport'),
        'desc' => __('Select home one', 'transport'),
        'std' => '',
        'type' => 'custom-post-type-select',
        'section' => 'transport_home_layout',
        'rows' => '',
        'post_type' => 'page',
        'taxonomy' => '',
        'min_max_step' => '',
        'class' => '',
        'condition' => '',
        'operator' => 'and'   
    ),
    array(
        'id' => 'transport_select_home_two',
        'label' => __('Home - 2 ', 'transport'),
        'desc' => __('Select home two', 'transport'),
        'std' => '',
        'type' => 'custom-post-type-select',
        'section' => 'transport_home_layout',
        'rows' => '',
        'post_type' => 'page',
        'taxonomy' => '',
        'min_max_step' => '',
        'class' => '',
        'condition' => '',
        'operator' => 'and'   
    ),
    array(
        'id' => 'transport_select_home_three',
        'label' => __('Home - 3 ', 'transport'),
        'desc' => __('Select home three', 'transport'),
        'type' => 'custom-post-type-select',
        'section' => 'transport_home_layout',
        'post_type' => 'page',
    ),
    array(
        'id' => 'transport_select_home_four',
        'label' => __('Home - 4 ', 'transport'),
        'desc' => __('Select home four', 'transport'),
        'type' => 'custom-post-type-select',
        'section' => 'transport_home_layout',
        'post_type' => 'page',
    ),
    array(
        'id' => 'transport_select_home_five',
        'label' => __('Home - 5 ', 'transport'),
        'desc' => __('Select home five', 'transport'),
        'type' => 'custom-post-type-select',
        'section' => 'transport_home_layout',
        'post_type' => 'page',
    ),
    array(
        'id' => 'transport_select_home_six',
        'label' => __('Home - 6 ', 'transport'),
        'desc' => __('Select home six', 'transport'),
        'type' => 'custom-post-type-select',
        'section' => 'transport_home_layout',
        'post_type' => 'page',
    ),
    array(
        'id' => 'transport_select_home_seven',
        'label' => __('Home - 7 ', 'transport'),
        'desc' => __('Select home seven', 'transport'),
        'type' => 'custom-post-type-select',
        'section' => 'transport_home_layout',
        'post_type' => 'page',
    ),
    array(
        'id' => 'transport_select_home_eight',
        'label' => __('Home - 8 ', 'transport'),
        'desc' => __('Select home eight', 'transport'),
        'type' => 'custom-post-type-select',
        'section' => 'transport_home_layout',
        'post_type' => 'page',
    ),
    array(
        'id' => 'transport_home_layout',
        'label' => __('Home Layout', 'transport'),
        'desc' => __('Select Home layout', 'transport'),
        'std' => '',
        'type' => 'radio-image',
        'section' => 'transport_home_layout',
        'rows' => '',
        'post_type' => '',
        'taxonomy' => '',
        'min_max_step' => '',
        'class' => '',
        'condition' => '',
        'operator' => 'and',
        'choices' => array(
            array(
                'value' => 'home_1',
                'label' => __('Home One', 'transport'),
                'src' => get_template_directory_uri() . '/assets/images/home-layout/home-1.jpg'
            ),
            array(
                'value' => 'home_2',
                'label' => __('Home Two', 'transport'),
                'src' => get_template_directory_uri() . '/assets/images/home-layout/home-2.jpg'
            ),
            array(
                'value' => 'home_3',
                'label' => __('Home Three', 'transport'),
                'src' => get_template_directory_uri() . '/assets/images/home-layout/home-3.jpg'
            ),
            array(
                'value' => 'home_4',
                'label' => __('Home Four', 'transport'),
                'src' => get_template_directory_uri() . '/assets/images/home-layout/home-4.jpg'
            ),
            array(
                'value' => 'home_5',
                'label' => __('Home Five', 'transport'),
                'src' => get_template_directory_uri() . '/assets/images/home-layout/home-5.jpg'
            ),
            array(
                'value' => 'home_6',
                'label' => __('Home Six', 'transport'),
                'src' => get_template_directory_uri() . '/assets/images/home-layout/home-6.jpg'
            ),
            array(
                'value' => 'home_7',
                'label' => __('Home Seven', 'transport'),
                'src' => get_template_directory_uri() . '/assets/images/home-layout/home-7.jpg'
            ),
            array(
                'value' => 'home_8',
                'label' => __('Home Eight', 'transport'),
                'src' => get_template_directory_uri() . '/assets/images/home-layout/home-8.jpg'
            ),
        ),
    )
);
