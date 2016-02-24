<?php

/**
 * Transport - Comment 
 *
 * @package transport
 * @subpackage transport.inc.options.field
 * @since transport 1.0
 */
return array(
    array(
        'id' => 'transport_page_comment',
        'label' => __('Page Comment Enable', 'transport'),
        'desc' => __('Page Comment Enable/Disable', 'transport'),
        'std' => '',
        'type' => 'on_off',
        'section' => 'transport_comment_section',
        'rows' => '',
        'post_type' => '',
        'taxonomy' => '',
        'min_max_step' => '',
        'class' => '',
        'condition' => '',
        'operator' => 'and'
    ),
    array(
        'id' => 'transport_comment_url_field_enable',
        'label' => __('Comment Website Field Enable', 'transport'),
        'desc' => __('Comment Website Field Enable/Disable', 'transport'),
        'std' => '',
        'type' => 'on_off',
        'section' => 'transport_comment_section',
        'rows' => '',
        'post_type' => '',
        'taxonomy' => '',
        'min_max_step' => '',
        'class' => '',
        'condition' => '',
        'operator' => 'and'
    ),
);
