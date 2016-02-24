<?php
/**
 * Export Tab 
 * 
 * @package wptm.admin
 * @since wptm 1.0.0
 */
?><div class="wptm-dashboard-info">
    <table class="wptm-status-table">
        <thead>
            <tr>
                <th>DATA EXPORT</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Theme Data (wp-theme.xml)</td>
                <td><a href="?page=theemon-importer&step=5&wptm_export=wp-theme.xml" class="button button-secondary"> start</a></td>
            </tr>
            <tr>
                <td>User Meta(user-meta.json)</td>
                <td><a href="?page=theemon-importer&step=5&wptm_export=user-meta.json" class="button button-secondary"> start</a></td>
            </tr>
            <tr>
                <td>Theme Option (theme-option.json)</td>
                <td><a href="?page=theemon-importer&step=5&wptm_export=theme-option.json" class="button button-secondary"> start</a></td>
            </tr>
            <tr>
                <td>Widget (widgets.json)</td>
                <td><a href="?page=theemon-importer&step=5&wptm_export=widgets.json" class="button button-secondary"> start</a></td>
            </tr>
        </tbody>
    </table>
</div>
<?php 