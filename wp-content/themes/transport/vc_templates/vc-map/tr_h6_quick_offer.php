<?php

/**
 * Transport - tr_h6_quick_offer
 * 
 * This template is use by js composer plugin 
 * 
 * @package transport
 * @subpackage transport.vc_templates.vc-map
 * @since transport 1.0.0
 */
add_action('vc_before_init', 'tr_h6_quick_offer');

function tr_h6_quick_offer() {
    vc_map(array(
        "name" => __("Transport Quick Offer h6", 'transport'),
        "base" => "tr_h6_quick_offer",
        "class" => "",
        "icon" => "icon-wpb-vc_extend",
        "category" => 'Content',
        "description" => __("Transport Services h4", "transport"),
        "params" => array(
            array(
                "type" => "textfield",
                "holder" => "",
                "class" => "",
                "heading" => __("Enter Main Title", 'transport'),
                "param_name" => "main_title",
                "value" => '',
                "description" => __("Section main title.", 'transport')
            ),
            array(
                "type" => "textfield",
                "holder" => "",
                "class" => "",
                "heading" => __("Enter Sub Title", 'transport'),
                "param_name" => "sub_title",
                "value" => '',
                "description" => __("Section sub title.", 'transport')
            ),
            array(
                "type" => "textfield",
                "holder" => "",
                "class" => "",
                "heading" => __("Description Text", 'transport'),
                "param_name" => "description",
                "value" => '',
                "description" => '',
            ),
            array(
                'type' => 'param_group',
                'value' => '',
                'param_name' => 'quick',
                "params" => array(
                    array(
                        "type" => "attach_image",
                        "holder" => "",
                        "class" => "",
                        "heading" => __("Image", 'transport'),
                        "param_name" => "image",
                        "value" => '',
                        "description" => '',
                    ),
                    array(
                        "type" => "textfield",
                        "holder" => "",
                        "class" => "",
                        "heading" => __("Enter Title", 'transport'),
                        "param_name" => "title",
                        "value" => '',
                        "std" => '',
                        "description" => __("Enter Title here.", 'transport')
                    ),
                    array(
                        "type" => "textfield",
                        "holder" => "",
                        "class" => "",
                        "heading" => __("Enter Description", 'transport'),
                        "param_name" => "description",
                        "value" => '',
                        "std" => '',
                        "description" => __("Enter Description here.", 'transport')
                    ),
                )
            )
        )
    ));
}

class WPBakeryShortCode_tr_h6_quick_offer extends WPBakeryShortCode {
    
}
