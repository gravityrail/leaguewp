<?php
/**
 * Jetpack Compatibility File.
 *
 * @link http://jetpack.me/
 *
 * @package LeagueWP
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function leaguewp_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'leaguewp_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function leaguewp_jetpack_setup
add_action( 'after_setup_theme', 'leaguewp_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function leaguewp_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'page-templates/content', get_post_format() );
	}
} // end function leaguewp_infinite_scroll_render
