<?php
/**
 * OneClick Admin UI
 * 
 * @package wptm.inc.oneclick
 * @since wptm 1.0.0
 */
?>
<?php if (!empty($_GET['status'])): ?>
    <div class="wptm-dashboard-info">
        <table class="wptm-status-table">
            <thead>
                <tr>
                    <th>ONE CLICK INSTALLATION - success </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <p><a hr<?php ?>ef="themes.php?page=ot-theme-options" class="button button-primary">GO to, Theme Option </a></p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <?php return;
endif; ?>


<div class="wptm-dashboard-info">
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
                        <li>Images will be downloaded from our server, these images use for demo only .</li>
                        <li>Existing posts, pages, categories, images, custom post types or any other data will be deleted or modified .</li>
                        <li>WordPress settings will be modified after demo content import successfully. you can edit/modified theme according to your requirement</li>
                        <li>Please click import only once and wait, it can take a couple of minutes</li>
                    </ul>
                    <p class="help"> Are you want to import demo content ?  </p>
                    <p>
                        <a hr<?php ?>ef="admin.php?page=theemon-importer&step=4" class="button button-secondary">Back</a>
                        <a href="javascript:;" id="wptm-button-install-oneclick" class="button button-primary">Start Installation </a>
                    </p>
                </td>
            </tr>
        </tbody>
    </table>

    <table class="wptm-status-table ">
        <thead>
            <tr>
                <th>ONE CLICK INSTALLATION PROGRESS</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <div class="progress wptm-progressbar">
                        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                            <span class="sr-only value">0%</span>
                        </div>
                    </div>                
                </td>
            </tr>
            <tr>
                <td>
                    <b id="wptm-progress-label"></b>
                </td>
            </tr>
        </tbody>
    </table>
    
</div>
<?php 
