<?php

/**
 * Transport - General
 *
 * @package transport
 * @subpackage transport.inc.options.field
 * @since transport 1.0
 */
return array(
    array(
        'id' => 'transport_logo',
        'label' => __('Site Header Logo', 'transport'),
        'desc' => __('Enter Site header Logo Here', 'transport'),
        'std' => '',
        'type' => 'upload',
        'section' => 'transport_general_section',
        'rows' => '',
        'post_type' => '',
        'taxonomy' => '',
        'min_max_step' => '',
        'class' => '',
        'condition' => '',
        'operator' => 'and'
    ),
    array(
        'id' => 'transport_favicon',
        'label' => __('Favicon', 'transport'),
        'desc' => __('Please Select a favicon for the theme', 'transport'),
        'std' => '',
        'type' => 'upload',
        'section' => 'transport_general_section',
        'rows' => '',
        'post_type' => '',
        'taxonomy' => '',
        'min_max_step' => '',
        'class' => '',
        'condition' => '',
        'operator' => 'and',
        'choices' => ''
    ),
    array(
        'id' => 'transport_stickey_header',
        'label' => __('Stickey Header', 'transport'),
        'desc' => __('Select Stickey Header', 'transport'),
        'std' => '',
        'type' => 'select',
        'section' => 'transport_general_section',
        'rows' => '',
        'post_type' => '',
        'taxonomy' => '',
        'min_max_step' => '',
        'class' => '',
        'condition' => '',
        'operator' => 'and',
        'choices' => array(
            array(
                'value' => 'normal',
                'label' => __('Normal', 'transport'),
                'src' => ''
            ),
            array(
                'value' => 'fix',
                'label' => __('Fixed', 'transport'),
                'src' => ''
            ),
            array(
                'value' => 'intelligent',
                'label' => __('Intelligent', 'transport'),
                'src' => ''
            )
        )
    ),
    array(
        'id' => 'transport_theme_layout',
        'label' => __('Theme Layout', 'transport'),
        'desc' => __('Select Theme Layout', 'transport'),
        'std' => '',
        'type' => 'select',
        'section' => 'transport_general_section',
        'rows' => '',
        'post_type' => '',
        'taxonomy' => '',
        'min_max_step' => '',
        'class' => '',
        'condition' => '',
        'operator' => 'and',
        'choices' => array(
            array(
                'value' => 'full-width',
                'label' => __('Full Width', 'transport'),
                'src' => ''
            ),
            array(
                'value' => 'boxed',
                'label' => __('Boxed', 'transport'),
                'src' => ''
            )
        )
    ),
);
