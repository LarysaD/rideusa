<?php
/**
 * Manual Admin UI
 * 
 * @package wptm.inc.manual
 * @since wptm 1.0.0
 */
?><div class="wptm-dashboard-info">
    <table class="wptm-status-table">
        <thead>
            <tr>
                <th>MANUAL INSTALLATION</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <ul style="list-style: square">
                        <li>Install one by one datas (theme.xml, widgets.json, option.json etc). </li>
                        <li>Your machine must be connected to Internet.</li>
                        <li>Posts, Pages, Media, Comments, widgets, Menus, Custom Post Types or any other data will get imported.</li>
                        <li>Images will be downloaded from our server, these images use for demo only .</li>
                        <li>Existing posts, pages, categories, images, custom post types or any other data will be deleted or modified .</li>
                        <li>WordPress settings will be modified after demo content import successfully. you can edit/modified theme according to your requirement</li>
                        <li>Please click import only once and wait, it can take a couple of minutes</li>
                    </ul>                
                    <p><a hr<?php ?>ef="admin.php?page=theemon-importer&step=4" class="button button-secondary">Back</a></p>
                </td>
            </tr>
        </tbody>
    </table>
    <table class="wptm-status-table">
        <thead>
            <tr>
                <th>IMPORT TYPE</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $wptm_theme_data=get_option("wptm_manual_action");
            
            if(empty($wptm_theme_data["theme-xml"])):
                ?>
            <tr>
                <td>Theme Data (theme.xml)</td>
                <td><a href="?page=theemon-importer&step=4&install=manual&wptm-type=theme-data" class="button button-secondary"> start</a></td>
            </tr>
            <?php endif; ?>
            <?php if(empty($wptm_theme_data["options-data"])): ?>
            <tr>
                <td>Theme Options (options.json)</td>
                <td><a href="?page=theemon-importer&step=4&install=manual&wptm-type=options-data" class="button button-secondary"> start </a></td>
            </tr>
            <?php endif; ?>
            <?php if(empty($wptm_theme_data["widget-data"])): ?>
            <tr>
                <td>Widgets (widgets.json)</td>
                <td><a href="?page=theemon-importer&step=4&install=manual&wptm-type=widget-data" class="button button-secondary"> start</a></td>
            </tr>
            <?php endif; ?>
            <?php if(empty($wptm_theme_data["mailchimp-data"])): ?>
            <tr>
                <td>Mailchimp (builder.json, form.json etc.)</td>
                <td><a href="?page=theemon-importer&step=4&install=manual&wptm-type=mailchimp-data" class="button button-secondary"> start</a></td>
            </tr>
            <?php endif; ?>
            
            <?php /*if(empty($wptm_theme_data["users-data"])): ?>
            <tr>
                <td>User Custom Meta (users.json)</td>
                <td><a href="?page=theemon-importer&step=4&install=manual&wptm-type=users-data" class="button button-secondary"> start</a></td>
            </tr>
            <?php endif;*/ ?>
            <?php if(empty($wptm_theme_data["woocommerce-data"])): ?>
            <tr>
                <td>WooCommerce (woocommerce.json)</td>
                <td><a href="?page=theemon-importer&step=4&install=manual&wptm-type=woocommerce-data" class="button button-secondary"> start</a></td>
            </tr>
            <?php endif; ?>
            <?php if(empty($wptm_theme_data["rvslider-data"])): ?>
            <tr>
                <td>Revaluation Slider (sliders1.zip,sliders2.zip etc)</td>
                <td><a href="?page=theemon-importer&step=4&install=manual&wptm-type=rvslider-data" class="button button-secondary"> start</a></td>
            </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
