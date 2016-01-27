<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package Wedge
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function wedge_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
		'render'    => 'wedge_render_infinite_posts',
		'type'      => 'click'
	) );
}
add_action( 'after_setup_theme', 'wedge_jetpack_setup' );

/* Render infinite posts by using template parts */
function wedge_render_infinite_posts() {
	while ( have_posts() ) {
		the_post();

		get_template_part( 'content', get_post_format() );
	}
}