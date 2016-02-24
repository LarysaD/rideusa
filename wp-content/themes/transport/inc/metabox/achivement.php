<?php

/**
 * Transport - achivement page metabox
 *
 * @package     transport.inc.metabox
 * @version     transport 1.0.0
 */
class TransportAchivementPageMeta {

    public function __construct() {
        $this->action();
    }

    function action() {
        add_filter("transport_post_register", array(&$this, "achivements_page_Meta"));
    }

    /**
     * Transport Metabox
     * @param type $args
     * @return string
     */
    function achivements_page_Meta($args) {
        $args[] = array(
            'id' => 'achivements_page_boxes',
            'title' => __('Achivements Settings', 'transport'),
            'desc' => '',
            'pages' => array('page'),
            'context' => 'normal',
            'priority' => 'high',
            'fields' => array(
                array(
                    'id' => 'tree_head',
                    'label' => __('Achivements Tree top text.', 'transport'),
                    'desc' => __('Achivements Tree top text.', 'transport'),
                    'std' => '',
                    'type' => 'text',
                ),
                array(
                    'id' => 'tree_foot',
                    'label' => __('Achivements Tree bottom text.', 'transport'),
                    'desc' => __('Achivements Tree bottom text.', 'transport'),
                    'std' => '',
                    'type' => 'text',
                ),
                array(
                    'id' => 'tree_item',
                    'label' => __('Achivements Tree Item', 'transport'),
                    'desc' => __('Achivements Tree Item.', 'transport'),
                    'std' => '',
                    'type' => 'list-item',
                    'operator' => 'and',
                    'settings' => array(
                        array(
                            'id' => 'date',
                            'label' => __('Date', 'transport'),
                            'desc' => '',
                            'std' => '',
                            'type' => 'text',
                            'operator' => 'and'
                        ),
                        array(
                            'id' => 'image',
                            'label' => __('Achivement Image', 'transport'),
                            'desc' => '',
                            'std' => '',
                            'type' => 'upload',
                            'operator' => 'and'
                        ),
                        array(
                            'id' => 'content',
                            'label' => __('Achivement Content', 'transport'),
                            'desc' => '',
                            'std' => '',
                            'type' => 'textarea',
                            'operator' => 'and'
                        )
                    )
                ),
            )
        );
        return $args;
    }

}

new TransportAchivementPageMeta();