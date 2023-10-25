<?php
/**
 * Block Patterns
 *
 * @package fse_foodie_blog
 * @since 1.0
 */

function fse_foodie_blog_register_block_patterns() {
	$block_pattern_categories = array(
		'fse-foodie-blog' => array( 'label' => esc_html__( 'FSE Foodie Blog', 'fse-foodie-blog' ) ),
		'pages' => array( 'label' => esc_html__( 'Pages', 'fse-foodie-blog' ) ),
	);

	$block_pattern_categories = apply_filters( 'fse_foodie_blog_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'fse_foodie_blog_register_block_patterns', 9 );