<?php

/**
 * Transport - Metaboxes (Post & category) 
 *
 * @package     TransportTheme.inc.metabox
 * @since       transport 1.0.0
 */

class TransportMetabox {

    public function __construct() {
        //add metabox
        add_filter("ot_post_formats", '__return_true');
        $this->loadMetabox();
        add_action("admin_init", array(&$this, 'registerMeta'));
        
        //ot format audio
        add_filter('ot_meta_box_post_format_audio', array(&$this, 'audio_format'));
        add_filter('ot_meta_box_post_format_quote', array(&$this, 'quote_format'));
        
    }

    /**
     * Register Metabox
     */
    function registerMeta() {
        $args = apply_filters("transport_post_register", array());

        if (count($args) > 0):
            foreach ($args as $arg):
                ot_register_meta_box($arg);
            endforeach;
        endif;
    }

    function loadMetabox() {
        transport_inclusion('inc/metabox/testimonial.php');
        transport_inclusion('inc/metabox/common-page.php');
        transport_inclusion('inc/metabox/location.php');
        transport_inclusion('inc/metabox/contact.php');
        transport_inclusion('inc/metabox/team.php');
        transport_inclusion('inc/metabox/achivement.php');
        transport_inclusion('inc/metabox/services.php');
    }
    /**
     * Transport - Audio Format
     * 
     * @param array $args
     * @return array $args
     */
    function audio_format($args) {
        $args['fields'] = array();
        $args['fields'][]= array(
        'id'      => '_format_audio_mp3',
        'label'   => '',
        'desc'    => sprintf( __( 'Upload .mp3 File.', 'transport' )),
        'std'     => '',
        'type'    => 'upload'
      );
        $args['fields'][]= array(
        'id'      => '_format_audio_ogg',
        'label'   => '',
        'desc'    => sprintf( __( 'Upload .ogg File.', 'transport' )),
        'std'     => '',
        'type'    => 'upload'
      );
        $args['fields'][]= array(
        'id'      => '_format_audio_wav',
        'label'   => '',
        'desc'    => sprintf( __( 'Upload .wav File.', 'transport' )),
        'std'     => '',
        'type'    => 'upload'
      );
        return $args;
    }

    /**
     * Transport - Quote Format
     *  
     * @param array $args
     * @return array $args
     */

    function quote_format($args) {
        return array(
            'id' => 'ot-post-format-quote',
            'title' => __('Quote', 'transport'),
            'desc' => '',
            'pages' => 'post',
            'context' => 'side',
            'priority' => 'low',
            'fields' => array(
                array(
                    'id' => '_format_quote',
                    'label' => '',
                    'desc' => __('Quote', 'transport'),
                    'std' => '',
                    'type' => 'textarea'
                ),
            )
        );
    }

}

new TransportMetabox();
