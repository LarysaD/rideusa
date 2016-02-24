<?php

/**
 * Transport - Banner
 *
 * @package transport
 * @subpackage transport.inc.options
 * @since transport 1.0
 */
return array(
    array(
        'id' => 'transport_banner_button_label',
        'label' => __('Button Label', 'transport'),
        'desc' => __('Button Label', 'transport'),
        'std' => '',
        'type' => 'text',
        'section' => 'transport_banner_section',
    ),
    array(
        'id' => 'transport_banner_button_link',
        'label' => __('Button Link', 'transport'),
        'desc' => __('Button Link', 'transport'),
        'std' => '',
        'type' => 'text',
        'section' => 'transport_banner_section',
    ),
    array(
        'id' => 'transport_banner_image',
        'label' => __('Banner Image', 'transport'),
        'desc' => __('Upload Banner Image Here.', 'transport'),
        'std' => '',
        'type' => 'upload',
        'section' => 'transport_banner_section',
    ),
);
