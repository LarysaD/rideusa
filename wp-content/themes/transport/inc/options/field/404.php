<?php

/**
 * Transport -404
 *
 * @package transport
 * @subpackage transport.inc.options.field
 * @since transport 1.0
 */
return array(
    array(
        'id' => '404_image',
        'label' => __('404 Page Image', 'transport'),
        'desc' => __('Upload 404 Page Here.', 'transport'),
        'std' => '',
        'type' => 'upload',
        'section' => 'transport_404_section',
    ),
    array(
        'id' => 'transport_404_page_title',
        'label' => __('404 Page Title', 'transport'),
        'desc' => __('404 Page Title', 'transport'),
        'std' => '',
        'type' => 'text',
        'section' => 'transport_404_section',
    ),
    array(
        'id' => 'transport_404_page_sub_title',
        'label' => __('404 Page Sub Title', 'transport'),
        'desc' => __('404 Page Sub Title', 'transport'),
        'std' => '',
        'type' => 'text',
        'section' => 'transport_404_section',
    ),
);
