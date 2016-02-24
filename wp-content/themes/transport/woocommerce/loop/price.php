<?php
/**
 * Loop Price
 *
 * @package Transport
 * @since transport 1.6.4
 * 
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

global $product;
?>

<?php if ($price_html = $product->get_price_html()) : ?>
    <span class="pricing"><?php echo $price_html; ?></span>
<?php endif; ?>
