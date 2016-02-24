<?php
/**
 * Transport - Image Resize 
 *
 * @package transport
 * @subpackage transport.inc.lib
 * @since transport 1.0
 */

function transport_image_resize_func($url, $width, $height) {
    
    if(!isset($url) || $url == "") return $url;
    
    $siteURL = site_url("/");
    
    
    $upload_dir = wp_upload_dir();
    $upload_dir['baseurl'];
    $start = strpos($url, "/uploads/")+strlen("/uploads/");
    $uploadImage= $upload_dir['baseurl']."/".substr($url, $start, strlen($url)-1);
    
    $full = str_replace($siteURL, ABSPATH, $uploadImage);
    
    
    $thumbURL = "";
    $pathinfo = pathinfo($full);
    
    if (isset($pathinfo['dirname'])) {
        $imageDir = $pathinfo['dirname'];
        $filename = $pathinfo['filename'];
        $extension = $pathinfo['extension'];

        $thumbPath = $imageDir . "/" . $filename . "-{$width}X{$height}." . $extension;

        $thumb = wp_get_image_editor($full);

        if (!is_wp_error($thumb)) {
            $thumb->resize($width, $height, true);
            $thumb->save($thumbPath);
        }

        $thumbURL = str_replace(ABSPATH, $siteURL, $thumbPath);
    }
    return ($thumbURL !="")? $thumbURL : $url;
}

add_filter('transport_image_resize', 'transport_image_resize_func',10,3);
