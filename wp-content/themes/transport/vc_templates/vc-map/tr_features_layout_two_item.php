<?php

/**
 * Transport - tr_features_layout_two_item
 * 
 * This template is use by js composer plugin 
 * 
 * @package transport
 * @subpackage transport.vc_templates.vc-map
 * @since transport 1.0.0
 */
add_action( 'vc_before_init', 'tr_features_layout_two_item' );

function tr_features_layout_two_item(){
vc_map(array( 
    "name" => __("Transport Features Layout Two Item", 'transport'),
    "base" => "tr_features_layout_two_item",
    "class" => "",
    "icon" => "icon-wpb-vc_extend",
    "as_child" => array('except' => 'tr_features_layout_two_wrap'), 
    "category" => 'Content',
    "description" => __("Transport Features Section.", "transport"), 
    "params" => array(
        array(
            "type" => "attach_images",
            "class" => "",
            "heading" => __("Feature Icon", 'transport'),
            "param_name" => "feature_one_icon",
            "value" => '',
            "description" => __("Feature Icon.", 'transport')
        ),
        array(
            "type" => "textfield",
            "class" => "",
            "heading" => __("Feature Title", 'transport'),
            "param_name" => "feature_one_title",
            "value" => '',
            "description" => __("Feature Title.", 'transport')
        ),
        array(
            "type" => "textarea",
            "class" => "",
            "heading" => __("Feature Content", 'transport'),
            "param_name" => "feature_one_content",
            "value" => '',
            "description" => __("Feature Content.", 'transport')
        ),
    )
));
}
class WPBakeryShortCode_tr_features_layout_two_item extends WPBakeryShortCode { } 