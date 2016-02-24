<?php

/**
 * Transport - Blog Layout
 *
 * @package transport
 * @subpackage transport.inc.options.field
 * @since transport 1.0
 */
return array(
    array(
        'id' => 'transport_blog_layout',
        'label' => __('Blog Layout', 'transport'),
        'desc' => __('Select Blog Layout', 'transport'),
        'std' => '',
        'type' => 'radio-image',
        'section' => 'transport_blog_layout',
        'rows' => '',
        'post_type' => '',
        'taxonomy' => '',
        'min_max_step' => '',
        'class' => '',
        'condition' => '',
        'operator' => 'and',
        'choices' => array(
            array(
                'value' => 'blog_1',
                'label' => __('Home One', 'transport'),
                'src' => get_template_directory_uri() . '/assets/images/blog-layout/blog-1.jpg'
            ),
            array(
                'value' => 'blog_2',
                'label' => __('Home Two', 'transport'),
                'src' => get_template_directory_uri() . '/assets/images/blog-layout/blog-2.jpg'
            ),
        ),
    )
);
