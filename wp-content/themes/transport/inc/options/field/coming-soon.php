<?php

/**
 * Transport - Coming Soon
 *
 * @package transport
 * @subpackage transport.inc.options.field
 * @since transport 1.0
 */

return array(
        array(
        'id' => 'transport_select_coming_soon_page',
        'label' => __('Coming Soon Page', 'transport'),
        'desc' => __('Select Coming Soon page', 'transport'),
        'std' => '',
        'type' => 'custom-post-type-select',
        'section' => 'transport_coming_soon_section',
        'rows' => '',
        'post_type' => 'page',
        'taxonomy' => '',
        'min_max_step' => '',
        'class' => '',
        'condition' => '',
        'operator' => 'and'   
    ),
    array(
        'id' => 'transport_coming_soon_mod',
        'label' => __('Coming Soon Enable', 'transport'),
        'desc' => __('Coming Soon Enable/Disable', 'transport'),
        'std' => '',
        'type' => 'on_off',
        'section' => 'transport_coming_soon_section',
        'rows' => '',
        'post_type' => '',
        'taxonomy' => '',
        'min_max_step' => '',
        'class' => '',
        'condition' => '',
        'operator' => 'and'
    ),
    
    array(
        'id' => 'coming_soon_background',
        'label' => __('Coming Soon Background Image', 'transport'),
        'desc' => __('Upload Coming Soon Background Image', 'transport'),
        'std' => '',
        'type' => 'upload',
        'section' => 'transport_coming_soon_section',
    ),
     array(
        'id' => 'coming_soon_logo',
        'label' => __('Coming Soon Logo', 'transport'),
        'desc' => __('Coming Soon Logo', 'transport'),
        'std' => '',
        'type' => 'upload',
        'section' => 'transport_coming_soon_section',
    ),
    array(
        'id' => 'coming_soon_title',
        'label' => __('Title', 'transport'),
        'desc' => __('Title', 'transport'),
        'std' => '',
        'type' => 'text',
        'section' => 'transport_coming_soon_section',
    ),
    array(
        'id' => 'coming_soon_description', 
        'label' => __('Description', 'transport'),
        'desc' => __('Description', 'transport'),
        'std' => '',
        'type' => 'text',
        'section' => 'transport_coming_soon_section',
    ),
    array(
        'id' => 'coming_soon_date',
        'label' => __('Date', 'transport'),
        'desc' => __('Date', 'transport'),
        'std' => '',
        'type' => 'date-picker',
        'section' => 'transport_coming_soon_section', 
    ),
    array(
        'id' => 'coming_soon_email',
        'label' => __('Email', 'transport'),
        'desc' => __('Eamil', 'transport'),
        'std' => '',
        'type' => 'text',
        'section' => 'transport_coming_soon_section',
    ),
    array(
        'id' => 'coming_soon_phone',
        'label' => __('Phone Number', 'transport'),
        'desc' => __('Phone Number', 'transport'),
        'std' => '',
        'type' => 'text',
        'section' => 'transport_coming_soon_section',
    ),
);
