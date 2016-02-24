<?php

/**
 * Transport - services Metabox
 *
 * @package     transport.inc.metabox
 * @version     transport 1.0.0
 */
class TransportServiceMeta {

    public function __construct() {
        $this->action();
    }

    function action() {
        add_filter("transport_post_register", array(&$this, "serviceMeta"));
    }

    /**
     * Transport Metabox
     * @param type $args
     * @return string
     */
    function serviceMeta($args) {
        $args[] = array(
            'id' => 'service_boxes',
            'title' => __('Service', 'transport'),
            'desc' => '',
            'pages' => array('service'),
            'context' => 'normal',
            'priority' => 'high',
            'fields' => array(
                array(
                    'id' => 'services_slider_title',
                    'label' => __('Enter Services Slider Title', 'transport'),
                    'desc' => __('Services Slider Title.', 'transport'),
                    'type' => 'text',
                    'class' => '',
                ),
                array(
                    'id' => 'services_slider_sub_title',
                    'label' => __('Enter Services Slider Sub Title', 'transport'),
                    'desc' => __('Services Slider Sub Title.', 'transport'),
                    'type' => 'text',
                    'class' => '',
                ),
                array(
                    'id' => 'services_slider_description',
                    'label' => __('Enter Services Slider Description', 'transport'),
                    'desc' => __('Services Slider Description.', 'transport'),
                    'type' => 'textarea',
                    'class' => '',
                ),
            )
        );
        return $args;
    }

}

new TransportServiceMeta();