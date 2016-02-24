<?php

/**
 * Transport - Social
 *
 * @package transport
 * @subpackage transport.inc.options.field
 * @since transport 1.0
 */

return array(
     array(
        'id'          => 'transport_social_icons',
        'label'       => __( 'Social Icons', 'transport' ),
        'desc'        => __( 'Social Icons', 'transport' ),
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'transport_social_section',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'settings'    => array( 
          array(
            'id'          => 'class',
            'label'       => __( 'Icon Class', 'transport' ),
            'desc'        => '',
            'std'         => '',
            'type'        => 'text',
            'operator'    => 'and'
          ),
          array(
            'id'          => 'link',
            'label'       => __( 'Link', 'transport' ),
            'desc'        => '',
            'std'         => '',
            'type'        => 'text',
            'operator'    => 'and'
          )
        )
      ),
);
