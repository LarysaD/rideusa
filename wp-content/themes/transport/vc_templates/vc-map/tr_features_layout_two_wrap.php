<?php

/**
 * Transport - tr_features_layout_two_wrap
 * 
 * This template is use by js composer plugin 
 * 
 * @package transport
 * @subpackage transport.vc_templates.vc-map
 * @since transport 1.0.0
 */

add_action( 'vc_before_init', 'tr_features_layout_two_wrap' );

function tr_features_layout_two_wrap(){
vc_map(array( 
    "name" => __("Transport Features Layout Two Wrap", 'transport'),
    "base" => "tr_features_layout_two_wrap",
    "class" => "",
    "icon" => "icon-wpb-vc_extend", 
    "category" => 'Content',
    "content_element" => true,
    "show_settings_on_create" => false,
    "as_parent" => array('only' => 'tr_features_layout_two_item'),
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
    )
));
}
class WPBakeryShortCode_tr_features_layout_two_wrap extends WPBakeryShortCodesContainer { } 