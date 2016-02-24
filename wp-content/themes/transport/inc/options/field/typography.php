<?php

/**
 * Transport - Typography
 *
 * @package transport
 * @subpackage transport.inc.options.field
 * @since transport 1.0
 */

return array(
    array(
        'id' => 'transport_color_main',
        'label' => __('Theme Color', 'transport'),
        'desc' => __('Please Select a color Scheme for the theme', 'transport'),
        'std' => '',
        'type' => 'colorpicker',
        'section' => 'transport_typography_section',
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
        'id' => 'transport_theme_font',
        'label' => __('Theme Fonts', 'transport'),
        'desc' => __('Pleaes select a font style ', 'transport'),
        'std' => '',
        'type' => 'select',
        'section' => 'transport_typography_section',
        'rows' => '',
        'post_type' => '',
        'taxonomy' => '',
        'min_max_step' => '',
        'class' => '',
        'condition' => '',
        'operator' => 'and',
        'choices' => Transport\Assets\transport_google_font_families(), 
    ),
    array(
        'id' => 'transport_headings_font',
        'label' => __('Theme Headings Fonts', 'transport'),
        'desc' => __('Please select a font style for theme headings ', 'transport'),
        'std' => '',
        'type' => 'select',
        'section' => 'transport_typography_section',
        'rows' => '',
        'post_type' => '',
        'taxonomy' => '',
        'min_max_step' => '',
        'class' => '',
        'condition' => '',
        'operator' => 'and',
        'choices' => Transport\Assets\transport_google_font_families(), 
    ),
       /*array(
        'id' => 'transport_theme_effect',
        'label' => __('Theme Effect', 'transport'),
        'desc' => __('Select Theme Effect.', 'transport'),
        'std' => '',
        'type' => 'select',
        'section' => 'transport_typography_section',
        'rows' => '',
        'post_type' => '',
        'taxonomy' => '',
        'min_max_step' => '',
        'class' => '',
        'condition' => '',
        'operator' => 'and',
        'choices' => array(
            array(
                'value' => 'no',
                'label' => __('Normal', 'transport'),
                'src' => ''
            ),
            array(
                'value' => 'yes',
                'label' => __('Transition', 'transport'),
                'src' => ''
            )
        )
    )*/
);
