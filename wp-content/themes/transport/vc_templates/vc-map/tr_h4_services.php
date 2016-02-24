<?php

/**
 * Transport - tr_h4_services
 * 
 * This template is use by js composer plugin 
 * 
 * @package transport
 * @subpackage transport.vc_templates.vc-map
 * @since transport 1.0.0
 */
add_action('vc_before_init', 'tr_h4_services');

function transport_contact_forms(){
    $forms  = get_posts(array('post_type' => 'wpcf7_contact_form', 'posts_per_page' => '-1'));
    $forms_titles = array();
    foreach ($forms as $form) {
        $forms_titles[$form->post_title] = $form->ID;
    }
    return $forms_titles;
}
function tr_h4_services() {
    vc_map(array(
        "name" => __("Transport Services h4", 'transport'),
        "base" => "tr_h4_services",
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
                'type' => 'param_group',
                'value' => '',
                'param_name' => 'services',
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
            ),
            array(
                "type" => "textfield",
                "holder" => "",
                "class" => "",
                "heading" => __("Enter Section Two Main Title", 'transport'),
                "param_name" => "main_title2",
                "value" => '',
                "description" => __("Section Two  main title.", 'transport')
            ),
            array(
                "type" => "textfield",
                "holder" => "",
                "class" => "",
                "heading" => __("Enter Section Two Sub Title", 'transport'),
                "param_name" => "sub_title2",
                "value" => '',
                "description" => __("Section Two sub title.", 'transport')
            ),
            array(
                "type" => "attach_image",
                "holder" => "",
                "class" => "",
                "heading" => __("Section Two Image", 'transport'),
                "param_name" => "image2",
                "value" => '',
                "description" => '',
            ),
            array(
                "type" => "textfield",
                "holder" => "",
                "class" => "",
                "heading" => __("Enter Section Two Description", 'transport'),
                "param_name" => "description2",
                "value" => '',
                "std" => '',
                "description" => __("Section Two Description here.", 'transport')
            ),
            array(
                "type" => "textfield",
                "holder" => "",
                "class" => "",
                "heading" => __("Enter Section Three Main Title", 'transport'),
                "param_name" => "main_title3",
                "value" => '',
                "description" => __("Section Three  main title.", 'transport')
            ),
            array(
                "type" => "textfield",
                "holder" => "",
                "class" => "",
                "heading" => __("Enter Section Three Sub Title", 'transport'),
                "param_name" => "sub_title3",
                "value" => '',
                "description" => __("Section Three sub title.", 'transport')
            ),
            array(
                "type" => "dropdown",
                "heading" => __("Select Contact Form", 'transport'),
                "param_name" => "contact_form",
                "value" => transport_contact_forms(),
                "description" => __("Select Contact Form.", 'transport')
            ),
            
        )
            )
    );
}

class WPBakeryShortCode_tr_h4_services extends WPBakeryShortCode {
    
}
