<?php

/**
 * Transport - tr_features_layout_extended
 * 
 * This template is use by js composer plugin 
 * 
 * @package transport
 * @subpackage transport.vc_templates.vc-map
 * @since transport 1.0.0
 */

add_action( 'vc_before_init', 'tr_features_layout_extended' );

function tr_features_layout_extended(){
vc_map(array( 
    "name" => __("Transport Features Section Extended", 'transport'),
    "base" => "tr_features_layout_extended",
    "class" => "",
    "icon" => "icon-wpb-vc_extend",
    "category" => 'Content',
    "as_parent" => array('only' => 'tr_features'),
    "description" => __("Features Section Extended.", "transport"), 
    "js_view" => 'VcColumnView',
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
            "type" => "textarea",
            "holder" => "",
            "class" => "",
            "heading" => __("Enter Main content", 'transport'),
            "param_name" => "main_content",
            "value" => '',
            "description" => __("Section Main content.", 'transport')
        ),
        array(
            "type" => "textfield",
            "holder" => "",
            "class" => "",
            "heading" => __("Enter link label", 'transport'),
            "param_name" => "link_label",
            "value" => '',
            "description" => __("link label.", 'transport')
        ),
        array(
            "type" => "textfield",
            "holder" => "",
            "class" => "",
            "heading" => __("Enter link", 'transport'),
            "param_name" => "link",
            "value" => '',
            "description" => __("Link.", 'transport')
        ),
    )
));
}
class WPBakeryShortCode_tr_features_layout_extended extends WPBakeryShortCodesContainer { } 