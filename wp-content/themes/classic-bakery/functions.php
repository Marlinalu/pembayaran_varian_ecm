<?php
/**
 * Classic Bakery functions and definitions
 *
 * @package Classic Bakery
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */

if ( ! function_exists( 'classic_bakery_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function classic_bakery_setup() {
	global $classic_bakery_content_width;
	if ( ! isset( $classic_bakery_content_width ) )
		$classic_bakery_content_width = 680;

	load_theme_textdomain( 'classic-bakery', get_template_directory() . '/languages' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'wp-block-styles');
	add_theme_support( 'align-wide' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-header', array(
		'default-text-color' => false,
		'header-text' => false,
	) );
	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 100,
		'flex-height' => true,
	) );
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'classic-bakery' ),
	) );
	add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff'
	) );
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
	/*
	 * Enable support for Post Formats.
	 */
	add_theme_support( 'post-formats', array('image','video','gallery','audio',) );
	
	add_editor_style( 'editor-style.css' );
}
endif; // classic_bakery_setup
add_action( 'after_setup_theme', 'classic_bakery_setup' );

function classic_bakery_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'classic-bakery' ),
		'description'   => __( 'Appears on blog page sidebar', 'classic-bakery' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'classic-bakery' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Add widgets here to appear in your sidebar on pages.', 'classic-bakery' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar 3', 'classic-bakery' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'classic-bakery' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'classic_bakery_widgets_init' );

function classic_bakery_scripts() {
	wp_enqueue_style( 'bootstrap-css', esc_url(get_template_directory_uri())."/css/bootstrap.css" );
	wp_enqueue_style( 'owl.carousel-css', esc_url(get_template_directory_uri())."/css/owl.carousel.css" );
	wp_enqueue_style( 'classic-bakery-basic-style', get_stylesheet_uri() );
	wp_style_add_data('classic-bakery-basic-style', 'rtl', 'replace');
	wp_enqueue_style( 'classic-bakery-responsive', esc_url(get_template_directory_uri())."/css/responsive.css" );
	wp_enqueue_style( 'classic-bakery-default', esc_url(get_template_directory_uri())."/css/default.css" );
	wp_enqueue_script( 'owl.carousel-js', esc_url(get_template_directory_uri()). '/js/owl.carousel.js', array('jquery') );
	wp_enqueue_script( 'bootstrap-js', esc_url(get_template_directory_uri()). '/js/bootstrap.js', array('jquery') );
	wp_enqueue_script( 'classic-bakery-theme', esc_url(get_template_directory_uri()) . '/js/theme.js' );
	
	wp_enqueue_style( 'font-awesome-css', esc_url(get_template_directory_uri())."/css/fontawesome-all.css" );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	require_once get_theme_file_path( 'inc/wptt-webfont-loader.php' );

	require get_parent_theme_file_path( '/inc/color-scheme/custom-color-control.php' );
	wp_add_inline_style( 'classic-bakery-basic-style',$classic_bakery_color_scheme_css );
	wp_add_inline_style( 'classic-bakery-default',$classic_bakery_color_scheme_css );

	$classic_bakery_headings_font = esc_html(get_theme_mod('classic_bakery_headings_fonts'));
	$classic_bakery_body_font = esc_html(get_theme_mod('classic_bakery_body_fonts'));

	if( $classic_bakery_headings_font ) {
		wp_enqueue_style( 'classic-bakery-headings-fonts', '//fonts.googleapis.com/css?family='. $classic_bakery_headings_font );
	} else {
		wp_enqueue_style( 'emilys', '//fonts.googleapis.com/css?family=Emilys+Candy');
	}
	if( $classic_bakery_body_font ) {
		wp_enqueue_style( 'poppins', '//fonts.googleapis.com/css?family='. $classic_bakery_body_font );
	} else {
		wp_enqueue_style( 'classic-bakery-source-body', '//fonts.googleapis.com/css?family=Poppins:0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900');
	}
}
add_action( 'wp_enqueue_scripts', 'classic_bakery_scripts' );

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/upgrade-to-pro.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load TGM.
 */
require get_template_directory() . '/inc/tgm/tgm.php';

/**
 * Theme Info Page.
 */
require get_template_directory() . '/inc/addon.php';

/**
 * Google Fonts
 */
require get_template_directory() . '/inc/gfonts.php';


// Footer Link
define('CLASSIC_BAKERY_FOOTER_LINK',__('https://theclassictemplates.com/themes/free-bakery-wordpress-theme/','classic-bakery'));


if ( ! defined( 'CLASSIC_BAKERY_THEME_PAGE' ) ) {
define('CLASSIC_BAKERY_THEME_PAGE',__('https://www.theclassictemplates.com/themes/','classic-bakery'));
}
if ( ! defined( 'CLASSIC_BAKERY_SUPPORT' ) ) {
define('CLASSIC_BAKERY_SUPPORT',__('https://wordpress.org/support/theme/classic-bakery','classic-bakery'));
}
if ( ! defined( 'CLASSIC_BAKERY_REVIEW' ) ) {
define('CLASSIC_BAKERY_REVIEW',__('https://wordpress.org/support/theme/classic-bakery/reviews/#new-post','classic-bakery'));
}
if ( ! defined( 'CLASSIC_BAKERY_PRO_DEMO' ) ) {
define('CLASSIC_BAKERY_PRO_DEMO',__('https://www.theclassictemplates.com/demo/classic-bakery/','classic-bakery'));
}
if ( ! defined( 'CLASSIC_BAKERY_PREMIUM_PAGE' ) ) {
define('CLASSIC_BAKERY_PREMIUM_PAGE',__('https://www.theclassictemplates.com/wp-themes/bakery-wordpress-theme/','classic-bakery'));
}
if ( ! defined( 'CLASSIC_BAKERY_THEME_DOCUMENTATION' ) ) {
define('CLASSIC_BAKERY_THEME_DOCUMENTATION',__('http://theclassictemplates.com/documentation/classic-bakery-free/','classic-bakery'));
}


if ( ! function_exists( 'classic_bakery_the_custom_logo' ) ) :
/**
 * Displays the optional custom logo.
 *
 * Does nothing if the custom logo is not available.
 *
 */
function classic_bakery_the_custom_logo() {
	if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
	}
}
endif;


if ( ! function_exists( 'classic_bakery_sanitize_integer' ) ) {
	function classic_bakery_sanitize_integer( $input ) {
		return (int) $input;
	}
}

/*radio button sanitization*/
function classic_bakery_sanitize_choices( $input, $setting ) {
    global $wp_customize;
    $control = $wp_customize->get_control( $setting->id );
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

