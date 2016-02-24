<?php

/**
 * Transport - Google Font
 *
 * @package transport
 * @subpackage transport.inc.options.field
 * @since transport 1.0
 */


return array(
    array(
        'id' => 'transport_google_fonts',
        'label' => __('Google Fonts', 'transport'),
        'desc' => __('Select Multiple Google Web Fonts', "transport") ,
        'std' => array(
            array(
                'family' => 'karla', 
                'variants' => array('400','400italic','700','700italic'), 
                'subsets' => array('latin') 
            ),
            array(
                'family' => 'exo',
                'variants' => array('400',"300","300italic","500","400italic","500italic","600","600italic","700","700italic"),
                'subsets' => array('latin')
            ),
           array(
                'family' => 'raleway',
                'variants' => array('300', '300italic', 'regular', '600', '700'),
                'subsets' => array('latin')
            ),
            array(
                'family' => 'opensans',
                'variants' => array('300', '300italic', 'regular', 'italic', '600', '600italic'),
                'subsets' => array('latin')
            ),
            array(
                'family' => 'montserrat',
                'variants' => array("400",'700'),
                'subsets' => array('latin')
            ),
            array(
                'family' => 'lato',
                'variants' => array("400","900","700italic","700","400italic","300italic","300","100italic","900italic","100"),
                'subsets' => array('latin')
            ),
        ),
        'type' => 'google-fonts',
        'section' => 'transport_google_font_section',
        'rows' => '',
        'post_type' => '',
        'taxonomy' => '',
        'min_max_step' => '',
        'class' => '',
        'condition' => '',
        'operator' => 'and'
    ),
    
);
