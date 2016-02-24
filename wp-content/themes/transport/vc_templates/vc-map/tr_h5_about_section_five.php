<?php

/**
 * Transport - tr_h5_about_section_five
 * 
 * This template is use by js composer plugin 
 * 
 * @package transport
 * @subpackage transport.vc_templates.vc-map
 * @since transport 1.0.0
 */

add_action( 'vc_before_init', 'tr_h5_about_section_five' );

function tr_h5_about_section_five(){
vc_map(array( 
    "name" => __("Transport About Layout Five", 'transport'),
    "base" => "tr_h5_about_section_five",
    "class" => "",
    "icon" => "icon-wpb-vc_extend",
    "category" => 'Content',
    "description" => __("Transport about section", "transport"),
    "params" => array(
        array(
            "type" => "attach_images",
            "holder" => "",
            "class" => "",
            "heading" => __("Section Image", 'transport'),
            "param_name" => "sec_image",
            "value" => '',
            "description" => __("Section image.", 'transport')
        ),
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
            "heading" => __("Content", 'transport'),
            "param_name" => "main_content",
            "value" => '',
            "description" => __("Enter Section Content.", 'transport')
        ),
        array(
            "type" => "textfield",
            "holder" => "",
            "class" => "",
            "heading" => __("Enter Button Link", 'transport'),
            "param_name" => "button_link",
            "value" => '',
            "description" => __("Button Link.", 'transport')
        ),
        array(
            "type" => "textfield",
            "holder" => "",
            "class" => "",
            "heading" => __("Button Label", 'transport'),
            "param_name" => "button_label",
            "value" => '',
            "description" => __("Button Label.", 'transport')
        ),
    )
));
}
class WPBakeryShortCode_tr_h5_about_section_five extends WPBakeryShortCode { }