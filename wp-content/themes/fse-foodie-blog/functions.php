<?php
/**
 * FSE Foodie Blog functions and definitions
 *
 * @package fse_foodie_blog
 * @since 1.0
 */

if ( ! function_exists( 'fse_foodie_blog_support' ) ) :
	function fse_foodie_blog_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}
endif;

add_action( 'after_setup_theme', 'fse_foodie_blog_support' );

if ( ! function_exists( 'fse_foodie_blog_styles' ) ) :
	function fse_foodie_blog_styles() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_enqueue_style(
			'fse-foodie-blog-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);
	}
endif;

add_action( 'wp_enqueue_scripts', 'fse_foodie_blog_styles' );

/* Theme Credit link */
define('FSE_FOODIE_BLOG_BUY_NOW',__('https://cretathemes.com/gutenberg/foodie-wordpress-theme/','fse-foodie-blog'));
define('FSE_FOODIE_BLOG_PRO_DEMO',__('https://cretathemes.com/preview/fse-foodie-blog/','fse-foodie-blog'));
define('FSE_FOODIE_BLOG_THEME_DOC',__('https://cretathemes.com/pro-guide/fse-foodie-blog/','fse-foodie-blog'));
define('FSE_FOODIE_BLOG_SUPPORT',__('https://wordpress.org/support/theme/fse-foodie-blog/','fse-foodie-blog'));
define('FSE_FOODIE_BLOG_REVIEW',__('https://wordpress.org/support/theme/fse-foodie-blog/reviews/#new-post','fse-foodie-blog'));

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';

// Add block styles
require get_template_directory() . '/inc/block-styles.php';

// Block Filters
require get_template_directory() . '/inc/block-filters.php';

// Svg icons
require get_template_directory() . '/inc/icon-function.php';

// Get Started
require get_template_directory() . '/inc/get-started/get-started.php';