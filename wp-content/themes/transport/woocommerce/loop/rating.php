<?php
/**
 * Loop Rating
 *
 * @package Transport
 * @since transport 1.6.4
 * 
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

global $product;

if (get_option('woocommerce_enable_review_rating') === 'no')
    return;
?>

<?php if ($rating_html = $product->get_rating_html()) : ?>
    <span class="rating"><?php echo $rating_html; ?></span>
<?php endif; ?>
