<form role="search" method="get" class="woocommerce-product-search" action="<?php echo esc_url( home_url( '/'  ) ); ?>">
	<label class="screen-reader-text" for="s"><?php _e( 'Search for:', 'transport' ); ?></label>
	<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search Products&hellip;', 'placeholder', 'transport' ); ?>" value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label', 'transport' ); ?>" />
	<input type="submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'transport' ); ?>" />
	<input type="hidden" name="post_type" value="product" />
</form>
