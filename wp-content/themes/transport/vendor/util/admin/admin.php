<?php

/**
 * WP Theem`on Importer
 * 
 * Admin UI
 * 
 * @subpackage inc
 * @since wptm 1.0.0
 * 
 */
class WPTM_Admin {

    private $menu_title;
    private $page_title;

    function __construct() {
        $this->page_title = $this->menu_title = __("Theem'on Importer", "transport");
    }

    public function action() {

        add_action('admin_enqueue_scripts', array(&$this, 'enqueue_scripts'));
        add_action("admin_menu", array(&$this, "add_submenu"));
        add_action("wptm_step_menu", array(&$this, 'step_menu'));
        add_action("wptm_step_menu_class", array(&$this, 'step_class'));
        add_action("wptm_step_switcher", array(&$this, "step_switchers"));
    }
    
    public function add_submenu(){
        call_user_func( "add_submenu"."_page", 'themes.php', $this->page_title, $this->menu_title, 'edit_theme_options', 'theemon-importer', array(&$this, 'admin_ui'));
    }

    function enqueue_scripts($hook) {
        if ('appearance_page_theemon-importer' == $hook) {

            wp_enqueue_style('wptm.dashboard', WPTM_URL . '/admin/assets/css/dashboard.css', false, null);
            wp_enqueue_style('wptm.stepmenu', WPTM_URL . '/admin/assets/css/step-menu.css', false, null);
            wp_enqueue_script('wptm.oneclick.import', WPTM_URL . '/inc/oneclick/import.js', array("jquery"), null, true);
            
            $import_status=array(
                '5'=>__("Import Start", "transport"),
                '10'=>__("Author Mapping", "transport"),
                '20'=>__("Categories Process", "transport"),
                '35'=>__("Media Process", "transport"),
                '60'=>__("Posts Process", "transport"),
                '80'=>__("Posts Mapping", "transport"),
                '90'=>__("Attachment Mapping", "transport"),
                '95'=>__("Featured Images Mapping", "transport"),
                '100'=>__("Import Finished", "transport"),
            );

            $oneClick = array("url" => admin_url("admin-ajax.php"), "sucess" => admin_url('admin.php?page=theemon-importer&step=4&install=oneclick&status=true'), 'status'=> $import_status);


            wp_localize_script('wptm.oneclick.import', 'WPTM_LOCAL', $oneClick);
        }
    }

    function admin_ui() {
        transport_inclusion( "vendor/util/admin/dashboard.php");
    }

    function step_menu($no) {

        if (!empty($_GET['step'])) {
            if ($no == 1) {
                $href = "admin.php?page=theemon-importer";
            } elseif ($_GET['step'] >= $no) {
                $href = "admin.php?page=theemon-importer&step=" . $no;
            } else {
                $href = "javascript:;";
            }
        } else {
            $href = ($no == 1 ) ? "admin.php?page=theemon-importer" : "javascript:;";
        }

        echo $href;
    }

    function step_class($no) {
        $class = array();
        if (!empty($_GET['step'])) {
            $step = $_GET['step'];
            if ($step == $no) {
                $class[] = "active-step";
            }
            if ($step > $no) {
                $class[] = "completed-step";
            }
            if ($step < $no) {
                $class[] = "upcoming-step";
            }
        } else {
            $class[] = ($no == 1 ) ? "active-step" : "upcoming-step";
        }

        echo 'class="' . @implode(" ", $class) . '"';
    }

    function step_switchers() {
        $path = "admin/dashboard-info.php";
        if (!empty($_GET['step'])) {
            switch ($_GET['step']) {
                case 2: $path =  "admin/system-info.php";
                    break;
                case 3: $path = "admin/plugin-active.php";
                    break;
                case 4: $path = $this->install_step("admin/data-import.php");
                    break;
                case 5: $path = "admin/data-export.php";

                    break;
            }
        }
        transport_inclusion( "vendor/util/". $path);
    }

    function install_step($path) {
        if (!empty($_REQUEST['install'])) {
            switch ($_REQUEST['install']) {
                case "oneclick" : $path =  "inc/oneclick/oneclick.php";
                    break;
                case "offline" : $path = "inc/offline/offline.php";
                    break;
                case "manual" : $path = "inc/manual/manual.php";
                    break;
            }
        }
        return $path;
    }

}
