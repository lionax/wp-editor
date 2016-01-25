<?php
/**
 * The template for displaying the Searchform.
 *
 * @package Editor
 */
?>

<div class="widget widget_search">
	<form role="search" method="get" class="search-form" action="<?php echo home_url() ; ?>/">
		<label>
			<input class="search-field" placeholder="<?php _e( 'Search...', 'editor' ); ?>" value="" name="s" title="<?php _e( 'Search for:', 'editor'); ?>" type="search">
		</label>
		<input class="search-submit" value="&#xf061;" type="submit">
	</form>
</div>							