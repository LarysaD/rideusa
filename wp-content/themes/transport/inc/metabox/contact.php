<?php

/**
 * Transport - contact page metabox
 *
 * @package     transport.inc.metabox
 * @version     transport 1.0.0
 */
class TransportContactPageMeta {

    public function __construct() {
        $this->action();
    }

    function action() {
        add_filter("transport_post_register", array(&$this, "contact_page_Meta"));
    }

    /**
     * Transport Metabox
     * @param type $args
     * @return string
     */
    function contact_page_Meta($args) {
        $args[] = array(
            'id' => 'contact_page_boxes',
            'title' => __('Contact Settings', 'transport'),
            'desc' => '',
            'pages' => array('page'),
            'context' => 'normal',
            'priority' => 'high',
            'fields' => array(
                array(
                    'id'          => 'contact_form',
                    'label'       => __( 'Select Contact Form', 'transport' ),
                    'desc'        =>  __( 'Select Contact Form.', 'transport' ),
                    'std'         => '',
                    'type'        => 'custom-post-type-select',
                    'rows'        => '',
                    'post_type'   => 'wpcf7_contact_form',
                    'taxonomy'    => '',
                    'min_max_step'=> '',
                    'class'       => '',
                    'condition'   => '',
                    'operator'    => 'and'
               ),
                array(
                    'id' => 'location_sub_title',
                    'label' => __('Location Section Sub Title.', 'transport'),
                    'desc' => __('Location Section Sub Title.', 'transport'),
                    'std' => '',
                    'type' => 'text',
                ),
                array(
                    'id' => 'location_title',
                    'label' => __('Location Section Title.', 'transport'),
                    'desc' => __('Location Section Title.', 'transport'),
                    'std' => '',
                    'type' => 'text',
                ),
            )
        );
        return $args;
    }

}

new TransportContactPageMeta();



