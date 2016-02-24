<?php

/**
 * Theme Option
 * 
 * put this data in file "theme-option.json"
 * 
 * @package wptm.inc.export
 * @since wptm 1.0.0
 */
if (isset($_REQUEST['wptm_export']) && $_REQUEST['wptm_export'] == "theme-option.json"):
    $sitename = sanitize_key(get_bloginfo('name'));
    if (!empty($sitename))
        $sitename .= '.';
    $filename = $sitename . 'themeoption.' . date('Y-m-d') . '.json';


    $vpt_options = get_option("industrial_data");

    header('Content-Description: File Transfer');
    header('Content-Disposition: attachment; filename=' . $filename);
    header('Content-Type: text/json; charset=' . get_option('blog_charset'), true);
    echo "[" . json_encode($vpt_options) . "]";
    die;

endif;
