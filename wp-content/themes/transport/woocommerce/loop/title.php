<?php
/**
 * Product loop title
 *
 * @package Transport
 * @since transport 2.4.0
 * 
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
?>
<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
