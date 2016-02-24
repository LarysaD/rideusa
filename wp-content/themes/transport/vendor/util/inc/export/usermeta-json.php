<?php

/**
 * User Meta JSON
 * 
 * put this data in file "user-meta.json"
 * 
 * @package wptm.inc.export
 * @since wptm 1.0.0
 */
if (isset($_REQUEST['wptm_export']) && $_REQUEST['wptm_export'] == "user-meta.json"):
    $sitename = sanitize_key(get_bloginfo('name'));
    if (!empty($sitename))
        $sitename .= '.';
    $filename = $sitename . 'usermeta.' . date('Y-m-d') . '.json';

    header('Content-Description: File Transfer');
    header('Content-Disposition: attachment; filename=' . $filename);
    header('Content-Type: text/json; charset=' . get_option('blog_charset'), true);
    WPTM_EXPORT_User_Meta::export_meta();
    die;

endif;

class WPTM_EXPORT_User_Meta {

    static function export_meta() {
        $args = array(
            'orderby' => 'ID',
            'order' => 'ASC',
            'count_total' => false,
            'fields' => 'all',
            'who' => '',
        );


        $teams = get_users($args);
        $authors = array();
        foreach ($teams as $team):
            $authors[$team->user_login] = self::get_user_meta($team->ID);
        endforeach;

        echo "[".json_encode($authors)."]";
    }

    static function get_user_meta($team_id) {
        $args = array(
            'image' => '',
            'image_thumb' => '',
            'image_medium' => '',
            'image' => '',
            'facebook' => '',
            'twitter' => '',
            'dribbble' => '',
            'pinterest' => '',
            'instagram' => '',
            'google_plus' => ''
        );

        $metas = array();

        foreach ($args as $key => $val):
            $metas[$key] = get_the_author_meta($key, $team_id);
        endforeach;

        return $metas;
    }

}
