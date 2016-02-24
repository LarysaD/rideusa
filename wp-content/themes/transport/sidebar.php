<?php 
/**
 * Transport - sidebar layout
 * This template contain widgets/sidebar
 * 
 * @package transport
 * @since transport 1.0.0
 */
 ?>
<div class="aside">
    <?php
    if (is_active_sidebar('sidebar-primary')) {
        dynamic_sidebar('sidebar-primary');
    }
    ?>
</div>
<?php 