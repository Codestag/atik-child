<?php
/**
 * Atik Child Theme
 *
 * Place any custom functionality/code snippets here.
 *
 * @since Atik Child 1.0
 */

/**
 * Include child theme styles.
 *
 * @return void
 */
function atik_child_styles() {
	$theme = wp_get_theme();
	wp_enqueue_style( 'atik-style', get_template_directory_uri() . '/style.css', array(), $theme->parent()->get( 'Version' ) );
	wp_enqueue_style( 'atik-child-style', get_stylesheet_uri(), array( 'atik-style' ), $theme->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'atik_child_styles' );
