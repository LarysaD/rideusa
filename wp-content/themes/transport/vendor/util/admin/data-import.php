<?php
/**
 * Import Tab 
 * 
 * @package wptm.admin
 * @since wptm 1.0.0
 */
?><div class="wptm-dashboard-info">

    <p id="wptm-message" class="updated"> <b><span class="dashicons dashicons-hammer"></span> Choose any one installation. </b> </p>
    <table class="wptm-status-table">
        <thead>
            <tr>
                <th>ONE CLICK INSTALLATION</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <ul style="list-style: square">
                        <li>Your machine must be connected to Internet.</li>
                        <li>Posts, Pages, Media, Comments, widgets, Menus, Custom Post Types or any other data will get imported.</li>
                        <li>Images will be downloaded from our server, these images are for demo purpose only.</li>
                        <li>Existing posts, pages, categories, images, custom post types or any other data will be deleted or modified .</li>
                        <li>WordPress settings will be modified after the demo content is imported successfully.</li>
                        <li>Please click import only once and wait, it can take a couple of minutes</li>
                    </ul>
                    <p><a hr<?php ?>ef="admin.php?page=theemon-importer&step=4&install=oneclick" class="button button-primary">START ONE CLICK INSTALLATION </a></p>
                </td>
            </tr>
        </tbody>
    </table>
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
                        <li>Install one data(theme.xml, widgets.json, option.json etc ) at a time. </li>
                        <li>Your machine must be connected to Internet.</li>
                        <li>Posts, Pages, Media, Comments, widgets, Menus, Custom Post Types or any other data will get imported.</li>
                        <li>Images will be downloaded from our server, these images are for demo purpose only.</li>
                        <li>Existing posts, pages, categories, images, custom post types or any other data will be deleted or modified .</li>
                        <li>WordPress settings will be modified after the demo content is imported successfully.</li>
                        <li>Please click import only once and wait, it can take a couple of minutes</li>
                    </ul>                
                    <p><a hr<?php ?>ef="admin.php?page=theemon-importer&step=4&install=manual" class="button button-primary">START MANUAL INSTALLATION </a></p>
                </td>
            </tr>
        </tbody>
    </table>
    <table class="wptm-status-table">
        <thead>
            <tr>
                <th>OFFLINE INSTALLATION</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <ul style="list-style: square">
                        <li>No need of Internet connectivity in your machine.</li>
                        <li>Posts, Pages, Media, Comments, widgets, Menus, Custom Post Types or any other data will get imported.</li>
                        <li>You can put all the data to be uploaded in uploads folder.</li>
                        <li>Existing posts, pages, categories, images, custom post types or any other data will be deleted.</li>
                        <li>WordPress settings will be modified after the demo content is imported successfully.</li>
                        <li>Please click import only once and wait, it can take a couple of seconds</li>
                    </ul>                
                    <p><a hr<?php ?>ef="admin.php?page=theemon-importer&step=4&install=offline" class="button button-primary">START OFFLINE INSTALLATION </a></p>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<?php 
