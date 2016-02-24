<?php

/**
 * Transport - testimonial Metabox
 *
 * @package     transport.inc.metabox
 * @version     transport 1.0.0
 */
class TransportTestimonialMeta {

    public function __construct() {
        $this->action();
    }

    function action() {
        add_filter("transport_post_register", array(&$this, "testimonialMeta"));
    }

    /**
     * Transport Metabox
     * @param type $args
     * @return string
     */
    function testimonialMeta($args) {
        $args[] = array(
            'id' => 'testimonial_boxes',
            'title' => __('Testimonial', 'transport'),
            'desc' => '',
            'pages' => array('testimonial'),
            'context' => 'normal',
            'priority' => 'high',
            'fields' => array(
                array(
                    'id' => 'testimonial_author_position',
                    'label' => __('Enter author position', 'transport'),
                    'desc' => __('Testimonial author position.', 'transport'),
                    'type' => 'text',
                    'class' => '',
                ),
                array(
                    'id' => 'testimonial_author_url',
                    'label' => __('Enter author URL', 'transport'),
                    'desc' => __('Testimonial author URL.', 'transport'),
                    'type' => 'text',
                    'class' => '',
                ),
            	
            )
        );
        return $args;
    }

}

new TransportTestimonialMeta();