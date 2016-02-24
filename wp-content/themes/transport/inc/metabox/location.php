<?php

/**
 * Transport - testimonial Metabox
 *
 * @package     transport.inc.metabox
 * @version     transport 1.0.0
 */
class TransportLocationMeta {

    public function __construct() {
        $this->action();
    }

    function action() {
        add_filter("transport_post_register", array(&$this, "locationMeta"));
    }

    /**
     * Transport Metabox
     * @param type $args
     * @return string
     */
    function locationMeta($args) {
        $args[] = array(
            'id' => 'location_boxes',
            'title' => __('Location meta box', 'transport'),
            'desc' => '',
            'pages' => array('location'),
            'context' => 'normal',
            'priority' => 'high',
            'fields' => array(
                array(
                    'id' => 'longitude',
                    'label' => __('Location longitude', 'transport'),
                    'desc' => __('Location longitude.', 'transport'),
                    'type' => 'text',
                    'class' => '',
                ),
                array(
                    'id' => 'latitude',
                    'label' => __('Location latitude', 'transport'),
                    'desc' => __('Location latitude.', 'transport'),
                    'type' => 'text',
                    'class' => '',
                ),
                array(
                    'id' => 'email',
                    'label' => __('Email', 'transport'),
                    'desc' => __('Email.', 'transport'),
                    'type' => 'text',
                    'class' => '',
                ),
                array(
                    'id' => 'phone',
                    'label' => __('Phone', 'transport'),
                    'desc' => __('Phone.', 'transport'),
                    'type' => 'text',
                    'class' => '',
                ),
            	
            )
        );
        return $args;
    }

}

new TransportLocationMeta();