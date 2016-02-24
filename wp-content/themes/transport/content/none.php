<?php
/**
 * Transport - content none
 * The template for displaying a "No posts found" message
 * 
 * @package transport
 * @subpackage transport.content
 * @since transport 1.0.0 
 */
?>
<header class="page-header">
	<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'transport' ); ?></h1>
</header>
<div class="page-content">
	<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

	<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'transport' ), admin_url( 'post-new.php' ) ); ?></p>

	<?php elseif ( is_search() ) : ?>

	<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with different keywords.', 'transport' ); ?></p>
	<?php //get_search_form(); ?>

	<?php else : ?>

	<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'transport' ); ?></p>
	<?php //get_search_form(); ?>

	<?php endif; ?>
</div><!-- .page-content -->
<?php  