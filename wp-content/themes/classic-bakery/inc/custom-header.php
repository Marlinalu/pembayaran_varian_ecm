<?php
/**
 * @package Classic Bakery
 * Setup the WordPress core custom header feature.
 *
 * @uses classic_bakery_header_style()
 */
function classic_bakery_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'classic_bakery_custom_header_args', array(		
		'default-text-color'     => 'fff',
		'width'                  => 300,
		'height'                 => 2000,
		'wp-head-callback'       => 'classic_bakery_header_style',		
	) ) );
}
add_action( 'after_setup_theme', 'classic_bakery_custom_header_setup' );

if ( ! function_exists( 'classic_bakery_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see classic_bakery_custom_header_setup().
 */
function classic_bakery_header_style() {
	$header_text_color = get_header_textcolor();
	?>
	<style type="text/css">
	<?php
		//Check if user has defined any header image.
		if ( get_header_image() || get_header_textcolor() ) :
	?>
		.header {
			background: url(<?php echo esc_url( get_header_image() ); ?>) no-repeat;
			background-position: center top;
		}
	<?php endif; ?>	


	p.site-title a,  h1.site-title a , #footer h1.site-title a, #footer p.site-title a{
		color: <?php echo esc_attr(get_theme_mod('classic_bakery_sitetitle_color')); ?>;
	}

	span.site-description, #footer span.site-description {
		color: <?php echo esc_attr(get_theme_mod('classic_bakery_sitetagline_color')); ?>;
	}




	.header .rsvp_button a {
		background: <?php echo esc_attr(get_theme_mod('classic_bakery_header_button_color')); ?>;
	}

	.header .rsvp_button a {
		outline-color: <?php echo esc_attr(get_theme_mod('classic_bakery_header_buttonborder_color')); ?>;
	}

	.header .rsvp_button a {
		color: <?php echo esc_attr(get_theme_mod('classic_bakery_header_buttontext_color')); ?>;
	}

	.header .rsvp_button a:hover {
		background: <?php echo esc_attr(get_theme_mod('classic_bakery_header_buttonhover_color')); ?>;
	}

	.social-icons i {
		color: <?php echo esc_attr(get_theme_mod('classic_bakery_header_icon_color')); ?>;
	}

	.social-icons i {
		border-color: <?php echo esc_attr(get_theme_mod('classic_bakery_header_iconborder_color')); ?>;
	}

	.social-icons i:hover {
		color: <?php echo esc_attr(get_theme_mod('classic_bakery_header_iconhover_color')); ?>;
	}

	.social-icons i:hover {
		background: <?php echo esc_attr(get_theme_mod('classic_bakery_header_iconhoverbg_color')); ?>;
	}

	.main-nav a {
		color: <?php echo esc_attr(get_theme_mod('classic_bakery_header_menus_color')); ?>;
	}

	.main-nav a:hover {
		color: <?php echo esc_attr(get_theme_mod('classic_bakery_header_menushover_color')); ?>;
	}

	.main-nav ul ul a {
		color: <?php echo esc_attr(get_theme_mod('classic_bakery_header_submenus_color')); ?>;
	}

	.main-nav ul ul a:hover {
		color: <?php echo esc_attr(get_theme_mod('classic_bakery_header_submenushover_color')); ?>;
	}

	.main-nav ul ul {
		background: <?php echo esc_attr(get_theme_mod('classic_bakery_header_submenusbg_color')); ?>;
	}

	.main-nav ul ul li {
		border-color: <?php echo esc_attr(get_theme_mod('classic_bakery_header_submenusborder_color')); ?>;
	}

	.search-cart form input, .search-cart {
		border-color: <?php echo esc_attr(get_theme_mod('classic_bakery_header_searchborder_color')); ?>;
	}

	span.cartbox i {
		color: <?php echo esc_attr(get_theme_mod('classic_bakery_header_cart_color')); ?>;
	}

	span.cartcount {
		color: <?php echo esc_attr(get_theme_mod('classic_bakery_header_cartnumber_color')); ?>;
	}

	span.cartcount {
		background: <?php echo esc_attr(get_theme_mod('classic_bakery_header_cartnumberbg_color')); ?>;
	}

	.header::-webkit-scrollbar-thumb {
		background: <?php echo esc_attr(get_theme_mod('classic_bakery_header_scrollborder_color')); ?>;
	}





	#catsliderarea .rsvp_button a {
		background: <?php echo esc_attr(get_theme_mod('classic_bakery_slider_button_color')); ?>;
	}

	#catsliderarea .rsvp_button a {
		color: <?php echo esc_attr(get_theme_mod('classic_bakery_slider_buttontext_color')); ?>;
	}

	#catsliderarea .rsvp_button a:hover {
		background: <?php echo esc_attr(get_theme_mod('classic_bakery_slider_buttonhover_color')); ?>;
	}

	.slider-box h1 {
		color: <?php echo esc_attr(get_theme_mod('classic_bakery_slider_title_color')); ?>;
	}

	.slider-box p {
		color: <?php echo esc_attr(get_theme_mod('classic_bakery_slider_description_color')); ?>;
	}

	.catwrapslider .owl-prev, .catwrapslider .owl-next {
		color: <?php echo esc_attr(get_theme_mod('classic_bakery_slider_arrow_color')); ?>;
		border-color: <?php echo esc_attr(get_theme_mod('classic_bakery_slider_arrow_color')); ?>;
	}

	.catwrapslider .owl-prev:hover, .catwrapslider .owl-next:hover {
		background: <?php echo esc_attr(get_theme_mod('classic_bakery_slider_arrowhover_color')); ?>;
	}

	.slidesection img {
		opacity: <?php echo esc_attr(get_theme_mod('classic_bakery_slider_opacity')); ?>;
	}

	.slidesection {
		background: <?php echo esc_attr(get_theme_mod('classic_bakery_slider_opacity_color')); ?>;
	}





	.product_cat_box h2 {
		color: <?php echo esc_attr(get_theme_mod('classic_bakery_category_title_color')); ?>;
	}

	.product_cat_box {
		background: <?php echo esc_attr(get_theme_mod('classic_bakery_category_box_color')); ?>;
	}

	.product_cat_box {
		outline-color: <?php echo esc_attr(get_theme_mod('classic_bakery_category_boxoutline_color')); ?>;
	}





	.copywrap a {
		color: <?php echo esc_attr(get_theme_mod('classic_bakery_footer_copyrighttext_color')); ?>;
	}

	#footer {
		background: <?php echo esc_attr(get_theme_mod('classic_bakery_footer_bg_color')); ?>;
	}

	#footer .social-icons i {
		color: <?php echo esc_attr(get_theme_mod('classic_bakery_footer_icon_color')); ?>;

	}

	#footer .social-icons i {
		border-color: <?php echo esc_attr(get_theme_mod('classic_bakery_footer_iconborder_color')); ?>;

	}

	#footer .social-icons i:hover {
		background: <?php echo esc_attr(get_theme_mod('classic_bakery_footer_iconhover_color')); ?>;
	}







	</style>
	<?php 
}
endif;