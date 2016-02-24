<?php

/**
 * Transport - team Metabox
 *
 * @package     transport.inc.metabox
 * @version     transport 1.0.0
 */
class TransportTeamMeta {

    public function __construct() {
        $this->action();
    }

    function action() {
        add_filter("transport_post_register", array(&$this, "teamMeta"));
    }

    /**
     * Transport Metabox
     * @param type $args
     * @return string
     */
    function teamMeta($args) {
        $args[] = array(
            'id' => 'team_boxes',
            'title' => __('Team', 'transport'),
            'desc' => '',
            'pages' => array('team_member'),
            'context' => 'normal',
            'priority' => 'high',
            'fields' => array(
                array(
                    'id' => 'member_position',
                    'label' => __('Enter member position', 'transport'),
                    'desc' => __('Team member position.', 'transport'),
                    'type' => 'text',
                    'class' => '',
                ),
                array(
                    'id' => 'member_description',
                    'label' => __('Enter member description', 'transport'),
                    'desc' => __('Team member description.', 'transport'),
                    'type' => 'text',
                    'class' => '',
                ),
                array(
                    'id' => 'member_social_links',
                    'label' => __('Member Social Links', 'transport'),
                    'desc' => __('Member Social Links.', 'transport'),
                    'std' => '',
                    'type' => 'list-item',
                    'section' => 'transport_general_section',
                    'rows' => '',
                    'post_type' => '',
                    'taxonomy' => '',
                    'min_max_step' => '',
                    'class' => '',
                    'condition' => '',
                    'operator' => 'and',
                    'settings' => array(
                        array(
                            'id' => 'class',
                            'label' => __('Icon Class', 'transport'),
                            'desc' => '',
                            'std' => '',
                            'type' => 'text',
                            'operator' => 'and'
                        ),
                        array(
                            'id' => 'link',
                            'label' => __('Link', 'transport'),
                            'desc' => '',
                            'std' => '',
                            'type' => 'text',
                            'operator' => 'and'
                        )
                    )
                ),
            )
        );
        return $args;
    }

}

new TransportTeamMeta();