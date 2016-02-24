<?php

/**
 * Transport - common page metabox
 *
 * @package     transport.inc.metabox
 * @version     transport 1.0.0
 */
class TransportCommonPageMeta {

    public function __construct() {
        $this->action();
    }

    function action() {
        add_filter("transport_post_register", array(&$this, "common_page_Meta"));
    }

    /**
     * Transport Metabox
     * @param type $args
     * @return string
     */
    function common_page_Meta($args) {
        $args[] = array(
            'id' => 'common_page_boxes',
            'title' => __('Common Page Settings', 'transport'),
            'desc' => '',
            'pages' => array('page'),
            'context' => 'normal',
            'priority' => 'high',
            'fields' => array(
                array(
                    'id' => 'transport_sub_title',
                    'label' => __('Sub Title.', 'transport'),
                    'desc' => __('Page Sub Title.', 'transport'),
                    'std' => '',
                    'type' => 'text',
                ),
                array(
                    'id' => 'transport_banner_button_label',
                    'label' => __('Banner Button Label.', 'transport'),
                    'desc' => __('Banner Button Label.', 'transport'),
                    'std' => '',
                    'type' => 'text',
                ),
                array(
                    'id' => 'transport_banner_button_link',
                    'label' => __('Banner Button Link.', 'transport'),
                    'desc' => __('Banner Button Link.', 'transport'),
                    'std' => '',
                    'type' => 'text',
                ),
                array(
                    'id' => 'transport_banner_title',
                    'label' => __('Banner Title.', 'transport'),
                    'desc' => __('Banner Title.', 'transport'),
                    'std' => '',
                    'type' => 'text',
                ),
                array(
                    'id' => 'transport_banner_image',
                    'label' => __('Banner Image', 'transport'),
                    'desc' => __('Upload Banner Image Here.', 'transport'),
                    'std' => '',
                    'type' => 'upload',
                ),
            )
        );
        return $args;
    }

}

new TransportCommonPageMeta();