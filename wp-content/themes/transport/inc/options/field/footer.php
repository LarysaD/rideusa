<?php

/**
 * Transport - Footer
 *
 * @package transport
 * @subpackage transport.inc.options.field
 * @since transport 1.0
 */

return array(
    array(
        'id' => 'transport_copyright',
        'label' => __('Transport Copyright', 'transport'),
        'desc' => __('Transport Copyright', 'transport'),
        'std' => '',
        'type' => 'textarea-simple',
        'section' => 'transport_footer_section',
        'rows' => '5',
    ),
    array(
        'id' => 'transport_footer_background',
        'label' => __('Transport footer background', 'transport'),
        'desc' => __('Transport footer background', 'transport'),
        'std' => '',
        'type' => 'background',
        'section' => 'transport_footer_section',
    ),
);
