<?php 
/**
 * Transport - shop sidebar
 * This template contain woocommerce shop widgets 
 * 
 * @package transport
 * @since transport 1.0.0
 */
 ?>
<div class="aside shop-sidebar">
    <?php
    if (is_active_sidebar('sidebar-shop')) {
        dynamic_sidebar('sidebar-shop');
    }
    ?>
</div>
<?php 