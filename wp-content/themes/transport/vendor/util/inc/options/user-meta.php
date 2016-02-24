<?php
/**
 * User Meta 
 * 
 * @package wptm.inc.options
 * @since wptm 1.0.0
 */

class WPTM_User_Meta {

    public static function import_meta($data_file = "") {
        if ($data_file == "")
            return;

        // $data_file = CHY_THEME_URL . '/vendor/data/charity-usermeta.json';
        $get_data = wptm_get_contents($data_file);

        if (is_wp_error($get_data))
            return false;

        //$rawdata = isset($get_data['body']) ? $get_data['body'] : '';
        $options = json_decode($get_data, true);

        $args = array(
            'orderby' => 'ID',
            'order' => 'ASC',
            'count_total' => false,
            'fields' => 'all',
            'who' => '',
        );

        $teams = get_users($args);
        //$authors = array();
        $flag = true;
        foreach ($teams as $team):

           /* if ($flag):
                self::first_last_name($team->ID);
                $flag = false;
            endif;*/
            self::set_user_meta($options, $team);
        endforeach;
    }

    public static function set_user_meta($options, $team) {
        if (isset($options[0][$team->user_login])):
            foreach ($options[0][$team->user_login] as $key => $val):
                update_user_meta($team->ID, $key, $val);
            endforeach;
        endif;
    }

    public static function first_last_name($user_id) {
        $firstname = get_user_meta($user_id, 'first_name', true);
        if ($firstname == "") {
            update_user_meta($user_id, 'first_name', 'Jhony');
            update_user_meta($user_id, 'last_name', 'Waker');
        }
    }
    
    public static function user_export() {
        $args = array(
            'orderby' => 'ID',
            'order' => 'ASC',
            'count_total' => false,
            'fields' => 'all',
            'who' => '',
        );

        $teams = get_users($args);
        $metas = array();
        foreach ($teams as $team):
            $metas[$team->user_login]['description'] = get_user_meta($team->ID, 'description', true);
        endforeach;
        return $metas;
    }
    


}
