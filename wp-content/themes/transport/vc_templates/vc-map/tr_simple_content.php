<?php

/**
 * Transport - tr_simple_content
 * 
 * This template is use by js composer plugin 
 * 
 * @package transport
 * @subpackage transport.vc_templates.vc-map
 * @since transport 1.0.0
 */

add_action( 'vc_before_init', 'tr_simple_content' );
function tr_simple_content(){
vc_map(array( 
    "name" => __("Transport Simple Content", 'transport'),
    "base" => "tr_simple_content",
    "class" => "",
    "icon" => "icon-wpb-vc_extend",
    "category" => 'Content',
    "description" => __("Transport Simple Content.", "transport"),
    "params" => array(
        array(
            "type" => "attach_images",
            "holder" => "",
            "class" => "",
            "heading" => __("Section Image", 'transport'),
            "param_name" => "content_image",
            "value" => "",
            "description" => __("Section image.", 'transport')
        ),
         array(
            "type" => "textfield",
            "holder" => "",
            "class" => "",
            "heading" => __("Enter Main Title", 'transport'),
            "param_name" => "main_title",
            "value" => "",
            "description" => __("Section main title.", 'transport')
        ),
        array(
            "type" => "textfield",
            "holder" => "",
            "class" => "",
            "heading" => __("Enter Sub Title", 'transport'),
            "param_name" => "sub_title",
            "value" => "",
            "description" => __("Section sub title.", 'transport')
        ),
        array(
            "type" => "textarea_html",
            "holder" => "",
            "class" => "",
            "heading" => __("Content", 'transport'),
            "param_name" => "section_content",
            "value" => '',
            "description" => __("Enter Section Content.", 'transport')
        ),
        array(
            "type" => "textfield",
            "holder" => "",
            "class" => "",
            "heading" => __("Enter button label", 'transport'),
            "param_name" => "link_label",
            "value" => "",
            "description" => __("Button label.", 'transport')
        ),
        array(
            "type" => "textfield",
            "holder" => "",
            "class" => "",
            "heading" => __("Enter button link", 'transport'),
            "param_name" => "link",
            "value" => "",
            "description" => __("Button Link.", 'transport')
        ),
    )
));
}
class WPBakeryShortCode_tr_simple_content extends WPBakeryShortCode { }