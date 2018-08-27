<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package Write
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function write_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'type'      => 'click',
		'footer'    => false,
	) );
}
add_action( 'after_setup_theme', 'write_jetpack_setup' );
