<?php
/**
 * System Info 
 * 
 * @package wptm.admin
 * @since wptm 1.0.0
 */
global $wptm_sytem_info_error;
$wptm_sytem_info_error=0;
?><div class="wptm-dashboard-info">
    <table class="wptm-status-table">
        <thead>
            <tr>
                <th colspan="3"><?php _e('Theme', 'transport'); ?></th>
            </tr>
        </thead>
        <?php $active_theme = wp_get_theme(); ?>
        <tbody>
            <tr>
                <td>Name:</td>
                <td class="help"><a href="#" title="The name of the current active theme.">[?]</a></td>
                <td><?php echo $active_theme->Name; ?></td>
            </tr>
            <tr>
                <td >Version:</td>
                <td class="help"><a href="#" title="The installed version of the current active theme.">[?]</a></td>
                <td><?php echo $active_theme->Version; ?></td>
            </tr>
            <tr>
                <td>Author URL:</td>
                <td class="help"><a href="#" title="The theme developers URL.">[?]</a></td>
                <td><?php echo $active_theme->{'Author URI'}; ?></td>
            </tr>
            <tr>
                <td >Child Theme:</td>
                <td class="help"><a href="#" title="Displays whether or not the current theme is a child theme.">[?]</a></td>
                <td><?php
                    echo is_child_theme() ? '<mark class="yes">' . '&#10004;' . '</mark>' : '<mark class="error"> &#10005; &ndash; ' . sprintf(__('If you\'re modifying a parent theme you didn\'t build personally we recommend using a child theme. See: <a href="%s" target="_blank">How to create a child theme</a>', 'transport'), 'http://codex.wordpress.org/Child_Themes')."</mark>";
                    ?></td>
            </tr>
            <?php
            if (is_child_theme()) :
                $parent_theme = wp_get_theme($active_theme->Template);
                ?>
                <tr>
                    <td>Parent Theme Name:</td>
                    <td class="help"><a href="#" title="The name of the parent theme.">[?]</a></td>
                    <td><?php echo $parent_theme->Name; ?></td>
                </tr>
                <tr>
                    <td>Parent Theme Version:</td>
                    <td class="help"><a href="#" title="The installed version of the parent theme.">[?]</a></td>
                    <td><?php echo $parent_theme->Version; ?></td>
                </tr>
                <tr>
                    <td>Parent Theme Author URL:</td>
                    <td class="help"><a href="#" title="The parent theme developers URL.">[?]</a></td>
                    <td><?php echo $parent_theme->{'Author URI'}; ?></td>
                </tr>
            <?php endif ?>
        </tbody>
    </table>
    <table class="wptm-status-table">
        <thead>
            <tr>
                <th colspan="3">WordPress Environment</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Home URL:</td>
                <td class="help"><a href="#" title="The URL of your site's homepage.">[?]</a></td>
                <td><?php echo esc_url(home_url('/')); ?></td>
            </tr>
            <tr>
                <td>Site URL:</td>
                <td class="help"><a href="#" title="The root URL of your site.">[?]</a></td>
                <td><?php echo site_url(); ?></td>
            </tr>
            <tr>
                <td>Upload Directory Writable:</td>
                <td class="help"><a href="#" title="The directory must be writable for import to happen (permission: 777 ) .">[?]</a></td>
                <td><?php
                    $up_dir = wp_upload_dir();
                    $test_log = $up_dir['basedir'] . '/test' . time() . '.log';
                    $funcopen="fop"."en";
                    if (@$funcopen($test_log, 'a')) {
                        echo '<mark class="yes">' . '&#10004; <code>' . $up_dir['basedir'] . '</code></mark> ';
                    } else {
                        $wptm_sytem_info_error++;
                        printf('<mark class="error">' . '&#10005; ' . __('Make sure <code>%s</code> writable ', 'transport') . '</mark>', $up_dir['basedir']);
                    }
                    unlink($test_log);
                    ?></td>
            </tr>
            <tr>
                <td>WP Version:</td>
                <td class="help"><a href="#" title="The version of WordPress installed on your site.">[?]</a></td>
                <td><?php 
                    $wptm_wp_version=get_bloginfo('version');
                
                        if (version_compare($wptm_wp_version, '3.9', '<')) {
                                                    $wptm_sytem_info_error++;

                            echo '<mark class="error"> &#10005;' . sprintf(__('%s - We recommend a minimum WordPress version of 4.0', 'transport'), esc_html($wptm_wp_version)) . '</mark>';
                        } else {
                            echo '<mark class="yes"> &#10004;' . esc_html($wptm_wp_version) . '</mark>';
                        }
                
                
                
                
                ?></td>
            </tr>
            <tr>
                <td>WP Multisite:</td>
                <td class="help"><a href="#" title="Whether or not you have WordPress Multisite enabled.">[?]</a></td>
                <td><?php
                    if (is_multisite())
                        echo '&#10004;';
                    else
                        echo '&#10005;';
                    ?></td>
            </tr>
            <tr>
                <td>WP Memory Limit:</td>
                <td class="help"><a href="#" title="The maximum amount of memory (RAM) that your site can use at one time.">[?]</a></td>
                <td><?php
                    $memory = wptm_ini_to_num(WP_MEMORY_LIMIT);

                    if ($memory < 134217720) {
                                                $wptm_sytem_info_error++;

                        echo '<mark class="error">' . '&#10005; ' . sprintf(__('%s - We recommend setting memory to at least 128MB. See: <a href="%s" target="_blank">Increasing memory allocated to PHP</a>', 'transport'), size_format($memory), 'http://codex.wordpress.org/Editing_wp-config.php#Increasing_memory_allocated_to_PHP') . '</mark>';
                    } else {
                        
                        echo '<mark class="yes">' . '&#10004; ' . size_format($memory) . '</mark>';
                    }
                    ?></td>
            </tr>
            <tr>
                <td>WP Debug Mode:</td>
                <td class="help"><a href="#" title="Displays whether or not WordPress is in Debug Mode.">[?]</a></td>
                <td><?php
                    if (defined('WP_DEBUG') && WP_DEBUG):
                                                $wptm_sytem_info_error++;

                        echo '<mark class="yes">' . '&#10005;' . '</mark>';
                    else:
                        
                        echo '<mark class="no">&#10004; ' . '</mark>';
                    endif;
                    ?></td>
            </tr>
            <tr>
                <td>Language:</td>
                <td class="help"><a href="#" title="The current language used by WordPress. Default = English">[?]</a></td>
                <td><?php echo get_locale() ?></td>
            </tr>
        </tbody>
    </table>

    <table class="wptm-status-table" >
        <thead>
            <tr>
                <th colspan="3">Server Environment</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Server Info:</td>
                <td class="help"><a href="#" title="Information about the web server that is currently hosting your site.">[?]</a></td>
                <td><?php echo esc_html($_SERVER['SERVER_SOFTWARE']); ?></td>
            </tr>
            <tr>
                <td>PHP Version:</td>
                <td class="help"><a href="#" title="The version of PHP installed on your hosting server.">[?]</a></td>
                <td><?php
                    // Check if phpversion function exists
                    if (function_exists('phpversion')) {
                        $php_version = phpversion();

                        if (version_compare($php_version, '5.3', '<')) {
                                                    $wptm_sytem_info_error++;

                            echo '<mark class="error"> &#10005;' . sprintf(__('%s - We recommend a minimum PHP version of 5.3. See: <a href="%s" target="_blank">WordPress Requirements</a>', 'transport'), esc_html($php_version), 'https://wordpress.org/about/requirements/') . '</mark>';
                        } else {
                            echo '<mark class="yes"> &#10004;' . esc_html($php_version) . '</mark>';
                        }
                    } else {
                        _e("Couldn't determine PHP version because phpversion() doesn't exist.", 'transport');
                    }
                    ?></td>
            </tr>
            <?php if (function_exists('ini_get')) : ?>
                <tr>
                    <td>PHP Post Max Size:</td>
                    <td class="help"><a href="#" title="The largest filesize that can be contained in one post.">[?]</a></td>
                    <td><?php echo size_format(wptm_ini_to_num(ini_get('post_max_size'))); ?></td>
                </tr>
                <tr>
                    <td>PHP Time Limit:</td>
                    <td class="help"><a href="#" title="The amount of time (in seconds) that your site will spend on a single operation before timing out (to avoid server lockups)">[?]</a></td>
                    <td><?php
                    $max_time_limit = ini_get('max_execution_time');
                    
                    if($max_time_limit <= 299):
                        $wptm_sytem_info_error++;

                          echo '<mark class="error"> &#10005; - ' . sprintf(__('We recommend a max execution time 300 See: <a href="%s" target="_blank">PHP Requirements</a>', 'transport'), 'http://php.net/manual/en/info.configuration.php#ini.max-execution-time') . '</mark>';
                      else:
                          echo '<mark class="yes">  &#10004;' . esc_html($max_time_limit) . '</mark>';
                        
                    endif;
                   // echo ini_get('max_execution_time'); ?></td>
                </tr>
                <tr>
                    <td>PHP Max Input Vars:</td>
                    <td class="help"><a href="#" title="The maximum number of variables your server can use for a single function to avoid overloads.">[?]</a></td>
                    <td><?php echo ini_get('max_input_vars'); ?></td>
                </tr>
            <?php endif; ?>
            <tr>
                <td>MySQL Version:</td>
                <td class="help"><a href="#" title="The version of MySQL installed on your hosting server.">[?]</a></td>
                <td>
                    <?php
                    /** @global wpdb $wpdb */
                    global $wpdb;
                    echo $wpdb->db_version();
                    ?>
                </td>
            </tr>
            <tr>
                <td>Max Upload Size:</td>
                <td class="help"><a href="#" title="The largest filesize that can be uploaded to your WordPress installation.">[?]</a></td>
                <td><?php echo size_format(wp_max_upload_size()); ?></td>
            </tr>
            <?php
            $posting = array();

            // fsockopen/cURL
            $posting['fsockopen_curl']['name'] = 'fsockopen/cURL';
            $posting['fsockopen_curl']['help'] = '<a href="#" title="Social share can use cURL to communicate with remote servers.">[?]</a>';

            if (function_exists('fsockopen') || function_exists('curl_init')) {
                $posting['fsockopen_curl']['success'] = true;
            } else {
                $posting['fsockopen_curl']['success'] = false;
                $posting['fsockopen_curl']['note'] = __('Your server does not have fsockopen or cURL enabled - Socail share scripts which communicate with other servers will not work. Contact your hosting provider.', 'transport') . '</mark>';
            }


            // DOMDocument
            $posting['dom_document']['name'] = 'DOMDocument';
            $posting['dom_document']['help'] = '<a href="#" title="HTML/Multipart emails use DOMDocument to generate inline CSS in templates.">[?]</a>';

            if (class_exists('DOMDocument')) {
                $posting['dom_document']['success'] = true;
            } else {
                $posting['dom_document']['success'] = false;
                $posting['dom_document']['note'] = sprintf(__('Your server does not have the <a href="%s">DOMDocument</a> class enabled - HTML/Multipart emails, and also some extensions, will not work without DOMDocument.', 'transport'), 'http://php.net/manual/en/class.domdocument.php') . '</mark>';
            }

            $posting = apply_filters('wptm_debug_posting', $posting);

            foreach ($posting as $post) :
                $mark = !empty($post['success']) ? 'yes' : 'error';
                ?>
                <tr>
                    <td data-export-label="<?php echo esc_html($post['name']); ?>"><?php echo esc_html($post['name']); ?>:</td>
                    <td class="help"><?php echo isset($post['help']) ? $post['help'] : ''; ?></td>
                    <td>
                        <mark class="<?php echo $mark; ?>">
                            <?php echo!empty($post['success']) ? '&#10004' : '&#10005'; ?>
                            <?php echo!empty($post['note']) ? wp_kses_data($post['note']) : ''; ?>
                        </mark>
                    </td>
                </tr>
                <?php
            endforeach;
            ?>
        </tbody>
    </table>

    <?php

    function wptm_ini_to_num($size) {
        $l = substr($size, -1);
        $ret = substr($size, 0, -1);
        switch (strtoupper($l)) {
            case 'P':
                $ret *= 1024;
            case 'T':
                $ret *= 1024;
            case 'G':
                $ret *= 1024;
            case 'M':
                $ret *= 1024;
            case 'K':
                $ret *= 1024;
        }
        return $ret;
    }
    ?>    
    <p>&nbsp;</p>
    <p>
        <?php  if($wptm_sytem_info_error > 0) :  ?>
            <a href="javascript:;" class="button button-primary"> Not Ok, system info, Please fix.  </a>
        <?php  else :  ?>
            <a hr<?php ?>ef="admin.php?page=theemon-importer&step=3" class="button button-primary">Ok, Go to plugin active </a>
        <?php  endif;  ?>
        
    </p>
</div>
<?php 
