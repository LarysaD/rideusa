<?php

/**
 * Transport - tr_h5_service_tabbing
 * 
 * This template is use by js composer plugin 
 * 
 * @package transport
 * @subpackage transport.vc_templates.vc-map
 * @since transport 1.0.0
 */

add_action( 'vc_before_init', 'tr_h5_service_tabbing' );

function tr_h5_service_tabbing(){
vc_map(array( 
    "name" => __("Transport Service Tabbing", 'transport'),
    "base" => "tr_h5_service_tabbing",
    "class" => "",
    "icon" => "icon-wpb-vc_extend",
    "category" => 'Content',
    "description" => __("Transport Service Tabbing", "transport"),
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
            "type" => "param_group",
            "heading" => __("Tabs", 'transport'),
            "param_name" => "service_tabs",
            "description" => __("Service Tabs.", 'transport'),
            "params" => array(
                array(
                    "type" => "attach_images",
                    "heading" => __("Tab Icon", 'transport'),
                    "param_name" => "tab_icon",
                    "description" => __("Tab Icon.", 'transport')
                ),
                array(
                    "type" => "textfield",
                    "heading" => __("Tab Name", 'transport'),
                    "param_name" => "tab_heading",
                    "description" => __("Name of the tab.", 'transport')
                ),
                array(
                    "type" => "textfield",
                    "heading" => __("Title", 'transport'),
                    "param_name" => "tab_title",
                    "description" => __("Title of the tab.", 'transport')
                ),
                array(
                    "type" => "textarea",
                    "heading" => __("Description", 'transport'),
                    "param_name" => "tab_description",
                    "description" => __("Description of the tab.", 'transport')
                ),
                array(
                    "type" => "textfield",
                    "heading" => __("Button Lable", 'transport'),
                    "param_name" => "tab_button_lable",
                    "description" => __("Button Lable.", 'transport')
                ),
                array(
                    "type" => "textfield",
                    "heading" => __("Button Link", 'transport'),
                    "param_name" => "tab_button_link",
                    "description" => __("Button Link.", 'transport')
                ),
            ),
            
        ),
        
    )
));
}
class WPBakeryShortCode_tr_h5_service_tabbing extends WPBakeryShortCode { }