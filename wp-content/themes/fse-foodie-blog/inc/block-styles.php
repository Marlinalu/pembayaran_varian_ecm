<?php
/**
 * Block Styles
 *
 * @package fse_foodie_blog
 * @since 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	function fse_foodie_blog_register_block_styles() {

		//Wp Block Padding Zero
		register_block_style(
			'core/group',
			array(
				'name'  => 'fse-foodie-blog-padding-0',
				'label' => esc_html__( 'No Padding', 'fse-foodie-blog' ),
			)
		);

		//Wp Block Post Author Style
		register_block_style(
			'core/post-author',
			array(
				'name'  => 'fse-foodie-blog-post-author-card',
				'label' => esc_html__( 'Theme Style', 'fse-foodie-blog' ),
			)
		);

		//Wp Block Button Style
		register_block_style(
			'core/button',
			array(
				'name'         => 'fse-foodie-blog-button',
				'label'        => esc_html__( 'Plain', 'fse-foodie-blog' ),
			)
		);

		//Post Comments Style
		register_block_style(
			'core/post-comments',
			array(
				'name'         => 'fse-foodie-blog-post-comments',
				'label'        => esc_html__( 'Theme Style', 'fse-foodie-blog' ),
			)
		);

		//Latest Comments Style
		register_block_style(
			'core/latest-comments',
			array(
				'name'         => 'fse-foodie-blog-latest-comments',
				'label'        => esc_html__( 'Theme Style', 'fse-foodie-blog' ),
			)
		);


		//Wp Block Table Style
		register_block_style(
			'core/table',
			array(
				'name'         => 'fse-foodie-blog-wp-table',
				'label'        => esc_html__( 'Theme Style', 'fse-foodie-blog' ),
			)
		);


		//Wp Block Pre Style
		register_block_style(
			'core/preformatted',
			array(
				'name'         => 'fse-foodie-blog-wp-preformatted',
				'label'        => esc_html__( 'Theme Style', 'fse-foodie-blog' ),
			)
		);

		//Wp Block Verse Style
		register_block_style(
			'core/verse',
			array(
				'name'         => 'fse-foodie-blog-wp-verse',
				'label'        => esc_html__( 'Theme Style', 'fse-foodie-blog' ),
			)
		);
	}
	add_action( 'init', 'fse_foodie_blog_register_block_styles' );
}
