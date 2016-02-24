<?php

/**
 * Transport - tr_services_layout_four
 * 
 * This template is use by js composer plugin 
 * 
 * @package transport
 * @subpackage transport.vc_templates.vc-map
 * @since transport 1.0.0
 */

add_action('vc_before_init', 'tr_services_layout_four');

function tr_services_layout_four() {

    $args = array(
        'posts_per_page' => -1,
        'post_type' => 'service',
        'post_status' => 'publish',
    );
    $posts = get_posts($args);
    $posts_array[] = 'Select Post';
    foreach ($posts as $post) {
        $posts_array[] = $post->post_title . ' -{' . $post->ID . '}';
    }

    vc_map(array(
        "name" => __("Transport Services Layout Four", 'transport'),
        "base" => "tr_services_layout_four",
        "class" => "",
        "icon" => "icon-wpb-vc_extend",
        "category" => 'Content',
        "description" => __("Transport Services Layout Four", "transport"),
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
                "type" => "dropdown",
                "holder" => "",
                "class" => "",
                "heading" => __("Select Post", 'transport'),
                "param_name" => "post_id_one",
                "value" => $posts_array,
                "std" => '',
                "description" => __("Select Post One.", 'transport')
            ),
            array(
                "type" => "dropdown",
                "holder" => "",
                "class" => "",
                "heading" => __("Select Post", 'transport'),
                "param_name" => "post_id_two",
                "value" => $posts_array,
                "std" => '',
                "description" => __("Select Post Two.", 'transport')
            ),
            array(
                "type" => "dropdown",
                "holder" => "",
                "class" => "",
                "heading" => __("Select Post", 'transport'),
                "param_name" => "post_id_three",
                "value" => $posts_array,
                "std" => '',
                "description" => __("Select Post Three.", 'transport')
            ),
        )
    ));
}

class WPBakeryShortCode_tr_services_layout_four extends WPBakeryShortCode {
    
}

