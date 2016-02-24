<?php

/**
 * Theme Option
 * 
 * put this data in file "theme-option.json"
 * 
 * @package wptm.inc.export
 * @since wptm 1.0.0
 */
if (isset($_REQUEST['wptm_export']) && $_REQUEST['wptm_export'] == "widgets.json"):
    $wptm_get_sidebars = wp_get_sidebars_widgets();
    $posted_array=array();
    foreach ($wptm_get_sidebars as $sidebar_name => $widget_list) :
        if (empty($widget_list))
            continue;
        foreach ($widget_list as $widget) :
            $posted_array[$widget]=true;
        endforeach;
    endforeach;
    //print_r($arr);
    $sitename = sanitize_key(get_bloginfo('name'));
    if (!empty($sitename))
        $sitename .= '.';
    $filename = $sitename . 'widgets.' . date('Y-m-d') . '.json';


    $sidebars_array = get_option('sidebars_widgets');
    $sidebar_export = array();
    foreach ($sidebars_array as $sidebar => $widgets) {
        if (!empty($widgets) && is_array($widgets)) {
            foreach ($widgets as $sidebar_widget) {
                if (in_array($sidebar_widget, array_keys($posted_array))) {
                    $sidebar_export[$sidebar][] = $sidebar_widget;
                }
            }
        }
    }
    $widgets = array();
    foreach ($posted_array as $k => $v) {
        $widget = array();
        $widget['type'] = trim(substr($k, 0, strrpos($k, '-')));
        $widget['type-index'] = trim(substr($k, strrpos($k, '-') + 1));
        $widget['export_flag'] = ($v == 'on') ? true : false;
        $widgets[] = $widget;
    }
    $widgets_array = array();
    foreach ($widgets as $widget) {
        $widget_val = get_option('widget_' . $widget['type']);
        $widget_val = apply_filters('widget_data_export', $widget_val, $widget['type']);
        $multiwidget_val = $widget_val['_multiwidget'];
        $widgets_array[$widget['type']][$widget['type-index']] = $widget_val[$widget['type-index']];
        if (isset($widgets_array[$widget['type']]['_multiwidget']))
            unset($widgets_array[$widget['type']]['_multiwidget']);

        $widgets_array[$widget['type']]['_multiwidget'] = $multiwidget_val;
    }
    unset($widgets_array['export']);
    $export_array = array($sidebar_export, $widgets_array);
    $wptm_widgets_options = json_encode($export_array);


    header('Content-Description: File Transfer');
    header('Content-Disposition: attachment; filename=' . $filename);
    header('Content-Type: text/json; charset=' . get_option('blog_charset'), true);
    echo "[" . json_encode($wptm_widgets_options) . "]";
    die;

endif;

