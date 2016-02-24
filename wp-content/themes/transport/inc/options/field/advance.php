<?php

/**
 * Transport - Advance Layout
 *
 * @package transport
 * @subpackage transport.inc.options.field
 * @since transport 1.0
 */

return array(
    array(
        'id' => 'transport_site_loader',
        'label' => __('Site Loader Enable', 'transport'),
        'desc' => __('Site loader enable / disable', 'transport'),
        'std' => '',
        'type' => 'on_off',
        'section' => 'transport_advance_section',
        'rows' => '',
        'post_type' => '',
        'taxonomy' => '',
        'min_max_step' => '',
        'class' => '',
        'condition' => '',
        'operator' => 'and'
    ),
    array(
        'id' => 'transport_custom_css',
        'label' => __('Custom CSS', 'transport'),
        'desc' => __('custom css', 'transport'),
        'std' => '',
        'type' => 'css',
        'section' => 'transport_advance_section',
        'rows' => '',
        'post_type' => '',
        'taxonomy' => '',
        'min_max_step' => '',
        'class' => '',
        'condition' => '',
        'operator' => 'and'
    ),
);