<?php
/**
 * Dashboard
 * 
 * @package wptm.admin
 * @since wptm 1.0.0
 */
?><h2>&nbsp;</h2>
<div id="wptm-impoter" class="wptm-container">
    <div class="wptm-head">
        <div class="wptm-row ">
            <div class="wptm-col left">
                <h2><span class="dashicons dashicons-admin-plugins"></span> WP Theem'on Importer</h2>
            </div>
            <div class="wptm-col right">
                <!--ul class="nav">
                    <li class="wptm-site-link">
                        <span class="dashicons dashicons-info site"></span>
                        <!--span class=" charity-globe"></span-- >
                        <ul class="sub">
                            <li><a href="">Home</a></li>
                            <li><a href="">Support</a></li>
                            <li><a href="">Buy</a></li>
                            <li class="last"><a href="">Blog</a></li>
                        </ul>
                    </li>
                </ul-->
            </div>
        </div>    
    </div>
    <div class="wptm-body">
        <div class="wptm-row wptm-clear">
            <div class="wptm-col">
                <div class="wizard-steps">
                    
                    <div <?php do_action("wptm_step_menu_class", 1); ?> ><a href="admin.php?page=theemon-importer<?php //do_action("wptm_step_menu", 1); ?>"><span>1</span>DASHBOARD</a></div>
                    <div <?php do_action("wptm_step_menu_class", 2); ?>><a href="admin.php?page=theemon-importer&step=2<?php //do_action("wptm_step_menu", 2); ?>"><span>2</span>SYSTEM INFORMATION</a></div>
                    <div <?php do_action("wptm_step_menu_class", 3); ?>><a href="<?php do_action("wptm_step_menu", 3); ?>"><span>3</span>PLUGIN ACTIVATION</a></div>
                    <div <?php do_action("wptm_step_menu_class", 4); ?>><a href="<?php do_action("wptm_step_menu", 4); ?>"><span>4</span>DEMO DATA IMPORT</a></div>
                  <?php /*  <div <?php do_action("wptm_step_menu_class", 5); ?>> <a href="<?php do_action("wptm_step_menu", 5); ?>"><span>5</span>DATA EXPORT</a></div>*/ ?>
                </div>
            </div>
        </div>    
        <div class="wptm-row wptm-clear">
            <div class="wptm-col">
                <?php do_action('wptm_step_switcher'); ?>
            </div>
        </div>
    </div>
    <div class="wptm-footer">
        <div class="wptm-row ">
            <div class="wptm-col">
                &copy; Theem&DiacriticalGrave;on 
            </div>
        </div>
    </div>
</div>
<?php  
