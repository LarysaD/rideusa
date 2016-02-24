<?php
/**
 * Plugin Active Tab
 * 
 * @package wptm.admin
 * @since wptm 1.0.0
 */
global $wptm_plugin_active_error;
$wptm_plugin_active_error=0;
?><div class="wptm-dashboard-info">
    <table class="wptm-status-table">
        <thead>
            <tr>
                <th colspan="3">Active Plugins (<?php echo count((array) get_option('active_plugins')); ?>)</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $active_plugins = (array) get_option('active_plugins', array());

            if (is_multisite()) {
                $active_plugins = array_merge($active_plugins, get_site_option('active_sitewide_plugins', array()));
            }

            foreach ($active_plugins as $plugin) {

                $plugin_data = @get_plugin_data(WP_PLUGIN_DIR . '/' . $plugin);
                $dirname = dirname($plugin);

                if (!empty($plugin_data['Name'])) {

                    // link the plugin name to the plugin url if available
                    $plugin_name = esc_html($plugin_data['Name']);

                    if (!empty($plugin_data['PluginURI'])) {
                        $plugin_name = '<a href="' . esc_url($plugin_data['PluginURI']) . '" title="' . __('Visit plugin homepage', 'transport') . '" target="_blank">' . $plugin_name . '</a>';
                    }
                    ?>
                    <tr>
                        <td><?php echo $plugin_name; ?></td>
                        <td class="help">&nbsp;</td>
                        <td><?php echo sprintf(_x('by %s', 'by author', 'transport'), $plugin_data['Author']) . ' &ndash; ' . esc_html($plugin_data['Version']); ?></td>
                    </tr>
                    <?php
                }
            }
            ?>
        </tbody>
    </table>
    <?php
    if (class_exists('TGM_Plugin_Activation')) {

        $tgmPluginActivation = new TGM_Plugin_Activation();
        $tgmPluginActivation->install_plugins_page();
    } else {
        echo "TGM ERROR";
    }
    ?>
      <p>&nbsp;</p>
    <p>
        <?php  if($wptm_plugin_active_error > 0) :  ?>
            <a hr<?php ?>ef="admin.php?page=theemon-importer&step=4" class="button button-primary">Ok, Go to import section </a>
        <?php  else :  ?>
            <a href="javascript:;" class="button button-primary"> Not active required plugins.  </a>
        <?php  endif;  ?>
        
    </p>

</div>
<?php 
