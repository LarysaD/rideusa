<?php
/**
 * Transport - Pagination 
 *
 * @package transport
 * @subpackage transport.inc.lib
 * @since transport 1.0
 */

function transport_pagenavi($wp_query = false) {
    if (empty($wp_query)) {
        global $wp_query;
    }
    
    $effect_class = "transport-paging-effect";
    $total = $wp_query->max_num_pages;
    // only bother with the rest if we have more than 1 page!
    if ($total > 1) {
        // get the current page
        if (!$current_page = get_query_var('paged'))
            $current_page = 1;
        // structure of "format" depends on whether we're using pretty permalinks
        if (get_option('permalink_structure')) {
            $format = '/page/%#%/';
        } else {
            $format = '/%#%/';
        }
        $big = 999999999;
        echo "<div class='paginations-box'><div class='clearfix active-pager'>";
        echo transport_paginate_links(array(
            'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))), //get_pagenum_link(1) . '%_%',
            'format' => $format,
            'current' => $current_page,
            'total' => $total,
            'mid_size' => 2,
            'end_size' => 1,
            'effect_class' => $effect_class
        ));
        echo '</div></div>';
    }
}

/**
 * Retrieve paginated link for archive post pages.
 *
 * @link wp-includes/general-template.php
 * @global type $wp_query
 * @global type $wp_rewrite
 * @param type $args
 * @return string
 */
function transport_paginate_links($args = '') {
    global $wp_query, $wp_rewrite;

    $total = ( isset($wp_query->max_num_pages) ) ? $wp_query->max_num_pages : 1;
    $current = ( get_query_var('paged') ) ? intval(get_query_var('paged')) : 1;
    $pagenum_link = html_entity_decode(get_pagenum_link());
    $query_args = array();
    $url_parts = explode('?', $pagenum_link);

    if (isset($url_parts[1])) {
        wp_parse_str($url_parts[1], $query_args);
    }

    $pagenum_link = remove_query_arg(array_keys($query_args), esc_url($pagenum_link));
    $pagenum_link = trailingslashit($pagenum_link) . '%_%';

    $format = $wp_rewrite->using_index_permalinks() && !strpos($pagenum_link, 'index.php') ? 'index.php/' : '';
    $format .= $wp_rewrite->using_permalinks() ? user_trailingslashit($wp_rewrite->pagination_base . '/%#%', 'paged') : '?paged=%#%';

    $defaults = array(
        'base' => $pagenum_link, // http://example.com/all_posts.php%_% : %_% is replaced by format (below)
        'format' => $format, // ?page=%#% : %#% is replaced by the page number
        'total' => $total,
        'current' => $current,
        'show_all' => false,
        'prev_next' => true,
        'prev_text' => __('&laquo; Previous', "transport"),
        'next_text' => __('Next &raquo;', "transport"),
        'end_size' => 1,
        'mid_size' => 2,
        'type' => 'plain',
        'add_args' => false, // array of query args to add
        'add_fragment' => '',
        'before_page_number' => '',
        'after_page_number' => '',
        'effect_class' => '',
    );

    $args = wp_parse_args($args, $defaults);

    // Who knows what else people pass in $args
    $total = (int) $args['total'];
    if ($total < 2) {
        return;
    }
    $current = (int) $args['current'];
    $end_size = (int) $args['end_size']; // Out of bounds?  Make it the default.
    if ($end_size < 1) {
        $end_size = 1;
    }
    $mid_size = (int) $args['mid_size'];
    if ($mid_size < 0) {
        $mid_size = 2;
    }
    $add_args = is_array($args['add_args']) ? $args['add_args'] : false;
    $r = '';
    $page_links = array();
    $dots = false;
    $right_links=array();
    if ($args['prev_next'] && $current && 1 < $current) :
        $link = str_replace('%_%', 2 == $current ? '' : $args['format'], $args['base']);
        $link = str_replace('%#%', $current - 1, $link);
        if ($add_args)
            $link = add_query_arg($add_args, esc_url($link));
        $link .= $args['add_fragment'];
        
        $page_links[] = '<li  class="active"><a class="pagination-prev" aria-label="Previous" href="' . esc_url(apply_filters('paginate_links', $link)) . '"><span aria-hidden="true">'.__("Previous", "transport").'</span></a></li>';
        $right_links[] = '<li><a href="' . esc_url(apply_filters('paginate_links', $link)) . '" class="fa fa-angle-left"></a></li>';
    else:
        $page_links[] = '';
    endif;
    for ($n = 1; $n <= $total; $n++) :
        if ($n == $current) :
            $page_links[] = "<li  class='active'><a href='#'>" . number_format_i18n($n) . "</a></li>";
            $dots = true;
        else :
            if ($args['show_all'] || ( $n <= $end_size || ( $current && $n >= $current - $mid_size && $n <= $current + $mid_size ) || $n > $total - $end_size )) :
                $link = str_replace('%_%', 1 == $n ? '' : $args['format'], $args['base']);
                $link = str_replace('%#%', $n, $link);
                if ($add_args)
                    $link = add_query_arg($add_args, esc_url($link));
                $link .= $args['add_fragment'];

                /** This filter is documented in wp-includes/general-template.php *///"  $args['before_page_number'] . number_format_i18n($n) . $args['after_page_number'] . "
                $page_links[] = "<li><a  href='" . esc_url(apply_filters('paginate_links', $link)) . "'>" . number_format_i18n($n) . "</a></li>";
                $dots = true;
            elseif ($dots && !$args['show_all']) :
                $page_links[] = '<li class="dot"><a href="#">' . __('&hellip;', "transport") . '</a></li>';
                $dots = false;
            endif;
        endif;
    endfor;
    if ($args['prev_next'] && $current && ( $current < $total || -1 == $total )) :
        $link = str_replace('%_%', $args['format'], $args['base']);
        $link = str_replace('%#%', $current + 1, $link);
        if ($add_args)
            $link = add_query_arg($add_args, esc_url($link));
        $link .= $args['add_fragment'];

        /** This filter is documented in wp-includes/general-template.php */
        $page_links[] = '<li  class="active"><a class="pagination-next" aria-label="Next" href="' . esc_url(apply_filters('paginate_links', $link)) . '" ><span aria-hidden="true">'.__("Next","transport").'</span></a></li>';
        $right_links[] = '<li ><a href="' . esc_url(apply_filters('paginate_links', $link)) . '" class="fa fa-angle-right"></a></li>';
    else:
        $page_links[] = '';

    endif;
    $r .= "<nav class='left-paging'><ul class='pagination custom-pagination '>";
    $r .= join("", $page_links);
    $r .= "</ul></nav>";
    /*$r.="<nav class='right-paging'><ul class='pager'>";
    $r .= join("", $right_links);
    $r .= "</ul></nav>";*/
    return $r;
}
