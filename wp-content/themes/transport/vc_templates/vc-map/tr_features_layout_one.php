<?php

/**
 * Transport - tr_features_layout_one
 * 
 * This template is use by js composer plugin 
 * 
 * @package transport
 * @subpackage transport.vc_templates.vc-map
 * @since transport 1.0.0
 */

add_action( 'vc_before_init', 'tr_features_layout_one' );

function tr_features_layout_one(){
vc_map(array( 
    "name" => __("Transport Features Section", 'transport'),
    "base" => "tr_features_layout_one",
    "class" => "",
    "icon" => "icon-wpb-vc_extend",
    "category" => 'Content',
    "description" => __("Transport Features Section.", "transport"), 
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
        array(
            "type" => "attach_images",
            "holder" => "",
            "class" => "",
            "heading" => __("Feature One Icon", 'transport'),
            "param_name" => "feature_one_icon",
            "value" => '',
            "description" => __("Feature One Icon.", 'transport')
        ),
        array(
            "type" => "textfield",
            "holder" => "",
            "class" => "",
            "heading" => __("Feature One Title", 'transport'),
            "param_name" => "feature_one_title",
            "value" => '',
            "description" => __("Feature One Title.", 'transport')
        ),
        array(
            "type" => "textarea",
            "holder" => "",
            "class" => "",
            "heading" => __("Feature One Content", 'transport'),
            "param_name" => "feature_one_content",
            "value" => '',
            "description" => __("Feature One Content.", 'transport')
        ),
        array(
            "type" => "attach_images",
            "holder" => "",
            "class" => "",
            "heading" => __("Feature Two Icon", 'transport'),
            "param_name" => "feature_two_icon",
            "value" => '',
            "description" => __("Feature Two Icon.", 'transport')
        ),
        array(
            "type" => "textfield",
            "holder" => "",
            "class" => "",
            "heading" => __("Feature Two Title", 'transport'),
            "param_name" => "feature_two_title",
            "value" => '',
            "description" => __("Feature Two Title.", 'transport')
        ),
        array(
            "type" => "textarea",
            "holder" => "",
            "class" => "",
            "heading" => __("Feature Two Content", 'transport'),
            "param_name" => "feature_two_content",
            "value" => '',
            "description" => __("Feature Two Content.", 'transport')
        ),
        array(
            "type" => "attach_images",
            "holder" => "",
            "class" => "",
            "heading" => __("Feature Three Icon", 'transport'),
            "param_name" => "feature_three_icon",
            "value" => '',
            "description" => __("Feature Three Icon.", 'transport')
        ),
        array(
            "type" => "textfield",
            "holder" => "",
            "class" => "",
            "heading" => __("Feature Three Title", 'transport'),
            "param_name" => "feature_three_title",
            "value" => '',
            "description" => __("Feature Three Title.", 'transport')
        ),
        array(
            "type" => "textarea",
            "holder" => "",
            "class" => "",
            "heading" => __("Feature Three Content", 'transport'),
            "param_name" => "feature_three_content",
            "value" => '',
            "description" => __("Feature Three Content.", 'transport')
        ),
        array(
            "type" => "attach_images",
            "holder" => "",
            "class" => "",
            "heading" => __("Feature Four Icon", 'transport'),
            "param_name" => "feature_four_icon",
            "value" => '',
            "description" => __("Feature Four Icon.", 'transport')
        ),
        array(
            "type" => "textfield",
            "holder" => "",
            "class" => "",
            "heading" => __("Feature Four Title", 'transport'),
            "param_name" => "feature_four_title",
            "value" => '',
            "description" => __("Feature Four Title.", 'transport')
        ),
        array(
            "type" => "textarea",
            "holder" => "",
            "class" => "",
            "heading" => __("Feature Four Content", 'transport'),
            "param_name" => "feature_four_content",
            "value" => '',
            "description" => __("Feature Four Content.", 'transport')
        ),
    )
));
}
class WPBakeryShortCode_tr_features_layout_one extends WPBakeryShortCode { } 