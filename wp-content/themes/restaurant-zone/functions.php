<?php
/**
 * Restaurant Zone functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Restaurant Zone
 */

include get_theme_file_path( 'vendor/wptrt/autoload/src/Restaurant_Zone_Loader.php' );

$restaurant_zone_loader = new \WPTRT\Autoload\Restaurant_Zone_Loader();

$restaurant_zone_loader->restaurant_zone_add( 'WPTRT\\Customize\\Section', get_theme_file_path( 'vendor/wptrt/customize-section-button/src' ) );

$restaurant_zone_loader->restaurant_zone_register();

if ( ! function_exists( 'restaurant_zone_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function restaurant_zone_setup() {

		add_theme_support( 'responsive-embeds' );

		add_theme_support( 'woocommerce' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

        add_image_size('restaurant-zone-featured-header-image', 2000, 660, true);

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus( array(
            'primary' => esc_html__( 'Primary','restaurant-zone' ),
	        'footer'=> esc_html__( 'Footer Menu','restaurant-zone' ),
        ) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'restaurant_zone_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 50,
			'width'       => 50,
			'flex-width'  => true,
		) );

		add_editor_style( array( '/editor-style.css' ) );

		add_theme_support( 'wp-block-styles' );

		add_theme_support( 'align-wide' );
	}
endif;
add_action( 'after_setup_theme', 'restaurant_zone_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function restaurant_zone_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'restaurant_zone_content_width', 1170 );
}
add_action( 'after_setup_theme', 'restaurant_zone_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function restaurant_zone_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'restaurant-zone' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'restaurant-zone' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Woocommerce Shop Page Sidebar', 'restaurant-zone' ),
		'id'            => 'woocommerce-shop-page-sidebar',
		'description'   => '',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Woocommerce Single Product Page Sidebar', 'restaurant-zone' ),
		'id'            => 'woocommerce-single-product-page-sidebar',
		'description'   => '',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 1', 'restaurant-zone' ),
		'id'            => 'restaurant-zone-footer1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5 class="footer-column-widget-title">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 2', 'restaurant-zone' ),
		'id'            => 'restaurant-zone-footer2',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5 class="footer-column-widget-title">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 3', 'restaurant-zone' ),
		'id'            => 'restaurant-zone-footer3',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5 class="footer-column-widget-title">',
		'after_title'   => '</h5>',
	) );
}
add_action( 'widgets_init', 'restaurant_zone_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function restaurant_zone_scripts() {

	require_once get_theme_file_path( 'inc/wptt-webfont-loader.php' );

	wp_enqueue_style(
		'lato',
		wptt_get_webfont_url( 'https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap' ),
		array(),
		'1.0'
	);

	wp_enqueue_style(
		'cookie',
		wptt_get_webfont_url( 'https://fonts.googleapis.com/css2?family=Cookie&display=swap' ),
		array(),
		'1.0'
	);

	wp_enqueue_style(
		'lora',
		wptt_get_webfont_url( 'https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap' ),
		array(),
		'1.0'
	);

	wp_enqueue_style( 'restaurant-zone-block-editor-style', get_theme_file_uri('/assets/css/block-editor-style.css') );

	// load bootstrap css
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.css');

	wp_enqueue_style( 'restaurant-zone-style', get_stylesheet_uri() );
	require get_parent_theme_file_path( '/custom-option.php' );
	wp_add_inline_style( 'restaurant-zone-style',$restaurant_zone_theme_css );

	wp_style_add_data('restaurant-zone-basic-style', 'rtl', 'replace');

	// fontawesome
	wp_enqueue_style( 'fontawesome-css', get_template_directory_uri().'/assets/css/fontawesome/css/all.css' );

	wp_enqueue_style( 'owl.carousel-css', get_template_directory_uri().'/assets/css/owl.carousel.css' );

    wp_enqueue_script('owl.carousel-js', get_template_directory_uri() . '/assets/js/owl.carousel.js', array('jquery'), '', true );

    wp_enqueue_script('restaurant-zone-theme-js', get_template_directory_uri() . '/assets/js/theme-script.js', array('jquery'), '', true );

    wp_enqueue_script('restaurant-zone-skip-link-focus-fix', esc_url(get_template_directory_uri()) . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'restaurant_zone_scripts' );

/**
 * Enqueue theme color style.
 */
function restaurant_zone_theme_color() {

    $restaurant_zone_theme_color_css = '';
    $restaurant_zone_theme_color = get_theme_mod('restaurant_zone_theme_color');
    $restaurant_zone_theme_color_2 = get_theme_mod('restaurant_zone_theme_color_2');
    $restaurant_zone_preloader_bg_color = get_theme_mod('restaurant_zone_preloader_bg_color');
    $restaurant_zone_preloader_dot_1_color = get_theme_mod('restaurant_zone_preloader_dot_1_color');
    $restaurant_zone_preloader_dot_2_color = get_theme_mod('restaurant_zone_preloader_dot_2_color');
    $restaurant_zone_logo_max_height = get_theme_mod('restaurant_zone_logo_max_height');

		if(get_theme_mod('restaurant_zone_logo_max_height') == '') {
			$restaurant_zone_logo_max_height = '50';
		}
    	if(get_theme_mod('restaurant_zone_preloader_bg_color') == '') {
			$restaurant_zone_preloader_bg_color = '';
		}
		if(get_theme_mod('restaurant_zone_preloader_dot_1_color') == '') {
			$restaurant_zone_preloader_dot_1_color = '';
		}
		if(get_theme_mod('restaurant_zone_preloader_dot_2_color') == '') {
			$restaurant_zone_preloader_dot_2_color = '';
		}

	$restaurant_zone_theme_color_css = '
	    .custom-logo-link img{
			max-height: '.esc_attr($restaurant_zone_logo_max_height).'px;
		 }
		.sticky .entry-title::before,.main-navigation .menu > li > a:hover,.main-navigation .sub-menu,#button,.sidebar input[type="submit"],.comment-respond input#submit,.post-navigation .nav-previous a:hover, .post-navigation .nav-next a:hover, .posts-navigation .nav-previous a:hover, .posts-navigation .nav-next a:hover,.woocommerce .woocommerce-ordering select,.woocommerce ul.products li.product .onsale, .woocommerce span.onsale,.pro-button a, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,.wp-block-button__link,.woocommerce-account .woocommerce-MyAccount-navigation ul li,.btn-primary,.reservation-btn a,.slide-btn a:hover,.toggle-nav button,.sidebar .tagcloud a:hover,a.added_to_cart.wc-forward {
			background: '.esc_attr($restaurant_zone_theme_color).';
		}
		@media screen and (max-width:1000px){
	         .sidenav #site-navigation {
	        background: '.esc_attr($restaurant_zone_theme_color).';
	 		}
		}
		.sidebar a:hover,#colophon a:hover, #colophon a:focus,p.price, .woocommerce ul.products li.product .price, .woocommerce div.product p.price, .woocommerce div.product span.price,.woocommerce-message::before, .woocommerce-info::before,.navbar-brand p,.sidebar p a, .entry-content a, .entry-summary a, .comment-content a,.top-info i,.slider-inner-box h2,#items-section h3,a {
			color: '.esc_attr($restaurant_zone_theme_color).';
		}
		.woocommerce-message, .woocommerce-info,.wp-block-pullquote,.wp-block-quote, .wp-block-quote:not(.is-large):not(.is-style-large), .wp-block-pullquote,.btn-primary,.slide-btn a:hover,.post-navigation .nav-previous a:hover, .post-navigation .nav-next a:hover, .posts-navigation .nav-previous a:hover, .posts-navigation .nav-next a:hover{
			border-color: '.esc_attr($restaurant_zone_theme_color).';
		}
		#button:hover,.socialmedia,.slider-box,.item-image,.main-navigation .sub-menu > li > a:hover,.main-navigation .sub-menu > li > a:focus,#colophon,.sidebar h5,.woocommerce a.button:hover,.pro-button a:hover,.woocommerce #respond input#submit:hover,.woocommerce a.button:hover,.woocommerce button.button:hover,.woocommerce input.button:hover,.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover,a.added_to_cart.wc-forward:hover{
			background: '.esc_attr($restaurant_zone_theme_color_2).';
		}
		h1,h2,h3,h4,h5,h6,.woocommerce .star-rating span:hover{
			color: '.esc_attr($restaurant_zone_theme_color_2).';
		}
		.woocommerce .quantity .qty{
			border-color: '.esc_attr($restaurant_zone_theme_color_2).';
		}
		.loading{
			background-color: '.esc_attr($restaurant_zone_preloader_bg_color).';
		 }
		 @keyframes loading {
		  0%,
		  100% {
		  	transform: translatey(-2.5rem);
		    background-color: '.esc_attr($restaurant_zone_preloader_dot_1_color).';
		  }
		  50% {
		  	transform: translatey(2.5rem);
		    background-color: '.esc_attr($restaurant_zone_preloader_dot_2_color).';
		  }
		}
	';
    wp_add_inline_style( 'restaurant-zone-style',$restaurant_zone_theme_color_css );

}
add_action( 'wp_enqueue_scripts', 'restaurant_zone_theme_color' );

/**
 * Enqueue S Header.
 */
function restaurant_zone_sticky_header() {

  $restaurant_zone_sticky_header = get_theme_mod('restaurant_zone_sticky_header');

  $restaurant_zone_custom_style= "";

  if($restaurant_zone_sticky_header != true){

    $restaurant_zone_custom_style .='.stick_header{';

      $restaurant_zone_custom_style .='position: static !important;';

    $restaurant_zone_custom_style .='}';
  }

  wp_add_inline_style( 'restaurant-zone-style',$restaurant_zone_custom_style );

}
add_action( 'wp_enqueue_scripts', 'restaurant_zone_sticky_header' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/*dropdown page sanitization*/
function restaurant_zone_sanitize_dropdown_pages( $page_id, $setting ) {
	// Ensure $input is an absolute integer.
	$page_id = absint( $page_id );
	// If $page_id is an ID of a published page, return it; otherwise, return the default.
	return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}

function restaurant_zone_sanitize_number_absint( $number, $setting ) {
	// Ensure $number is an absolute integer (whole number, zero or greater).
	$number = absint( $number );

	// If the input is an absolute integer, return it; otherwise, return the default
	return ( $number ? $number : $setting->default );
}

/*radio button sanitization*/
function restaurant_zone_sanitize_choices( $input, $setting ) {
    global $wp_customize;
    $control = $wp_customize->get_control( $setting->id );
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

function restaurant_zone_sanitize_phone_number( $phone ) {
	return preg_replace( '/[^\d+]/', '', $phone );
}

function restaurant_zone_string_limit_words($string, $word_limit) {
	$words = explode(' ', $string, ($word_limit + 1));
	if(count($words) > $word_limit)
	array_pop($words);
	return implode(' ', $words);
}

//Float
function restaurant_zone_sanitize_float( $input ) {
    return filter_var($input, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
}

//Restaurant Zone
function restaurant_zone_sanitize_select( $input, $setting ){
    $input = sanitize_key($input);
    $choices = $setting->manager->get_control( $setting->id )->choices;
    return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
}

/**
 * Fix skip link focus in IE11.
 *
 * This does not enqueue the script because it is tiny and because it is only for IE11,
 * thus it does not warrant having an entire dedicated blocking script being loaded.
 *
 * @link https://git.io/vWdr2
 */
function restaurant_zone_skip_link_focus_fix() {
	?>
	<script>
	/(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1);
	</script>
	<?php
}
add_action( 'wp_print_footer_scripts', 'restaurant_zone_skip_link_focus_fix' );

function restaurant_zone_sanitize_checkbox( $input ) {
  // Boolean check
  return ( ( isset( $input ) && true == $input ) ? true : false );
}

/**
 * Get CSS
 */

function restaurant_zone_getpage_css($hook) {
	if ( 'appearance_page_restaurant-zone-info' != $hook ) {
		return;
	}
	wp_enqueue_style( 'restaurant-zone-demo-style', get_template_directory_uri() . '/assets/css/demo.css' );
}
add_action( 'admin_enqueue_scripts', 'restaurant_zone_getpage_css' );

function restaurant_zone_page_redirection() {
	if (is_child_theme()) {
        return;
    }
	global $pagenow;
		if (isset($_GET['activated']) && ('themes.php' == $pagenow) && is_admin()) {
		wp_safe_redirect(admin_url("themes.php?page=restaurant-zone-info.php"));
	}
}
add_action('after_setup_theme', 'restaurant_zone_page_redirection');

if ( ! defined( 'RESTAURANT_ZONE_CONTACT_SUPPORT' ) ) {
	define('RESTAURANT_ZONE_CONTACT_SUPPORT',__('https://wordpress.org/support/theme/restaurant-zone','restaurant-zone'));
}
if ( ! defined( 'RESTAURANT_ZONE_REVIEW' ) ) {
	define('RESTAURANT_ZONE_REVIEW',__('https://wordpress.org/support/theme/restaurant-zone/reviews/#new-post','restaurant-zone'));
}
if ( ! defined( 'RESTAURANT_ZONE_LIVE_DEMO' ) ) {
define('RESTAURANT_ZONE_LIVE_DEMO',__('https://themagnifico.net/demo/restaurant-zone/','restaurant-zone'));
}
if ( ! defined( 'RESTAURANT_ZONE_GET_PREMIUM_PRO' ) ) {
define('RESTAURANT_ZONE_GET_PREMIUM_PRO',__('https://www.themagnifico.net/themes/restaurant-wordpress-theme/','restaurant-zone'));
}
if ( ! defined( 'RESTAURANT_ZONE_PRO_DOC' ) ) {
define('RESTAURANT_ZONE_PRO_DOC',__('https://www.themagnifico.net/eard/wathiqa/restaurant-pro-doc/','restaurant-zone'));
}

add_action('admin_menu', 'restaurant_zone_themepage');
function restaurant_zone_themepage(){
	$restaurant_zone_theme_info = add_theme_page( __('Theme Options','restaurant-zone'), __('Theme Options','restaurant-zone'), 'manage_options', 'restaurant-zone-info.php', 'restaurant_zone_info_page' );
}

function restaurant_zone_info_page() {
	$restaurant_zone_user = wp_get_current_user();
	$restaurant_zone_theme = wp_get_theme();
	?>
	<div class="wrap about-wrap restaurant-zone-add-css">
		<div>
			<h1>
				<?php esc_html_e('Welcome To ','restaurant-zone'); ?><?php echo esc_html( $restaurant_zone_theme ); ?>
			</h1>
			<div class="feature-section three-col">
				<div class="col">
					<div class="widgets-holder-wrap">
						<h3><?php esc_html_e("Contact Support", "restaurant-zone"); ?></h3>
						<p><?php esc_html_e("Thank you for trying Restaurant Zone Zone , feel free to contact us for any support regarding our theme.", "restaurant-zone"); ?></p>
						<p><a target="_blank" href="<?php echo esc_url( RESTAURANT_ZONE_CONTACT_SUPPORT ); ?>" class="button button-primary get">
							<?php esc_html_e("Contact Support", "restaurant-zone"); ?>
						</a></p>
					</div>
				</div>
				<div class="col">
					<div class="widgets-holder-wrap">
						<h3><?php esc_html_e("Checkout Premium", "restaurant-zone"); ?></h3>
						<p><?php esc_html_e("Our premium theme comes with extended features like demo content import , responsive layouts etc.", "restaurant-zone"); ?></p>
						<p><a target="_blank" href="<?php echo esc_url( RESTAURANT_ZONE_GET_PREMIUM_PRO ); ?>" class="button button-primary get">
							<?php esc_html_e("Get Premium", "restaurant-zone"); ?>
						</a></p>
					</div>
				</div>
				<div class="col">
					<div class="widgets-holder-wrap">
						<h3><?php esc_html_e("Review", "restaurant-zone"); ?></h3>
						<p><?php esc_html_e("If You love Restaurant Zone Zone theme then we would appreciate your review about our theme.", "restaurant-zone"); ?></p>
						<p><a target="_blank" href="<?php echo esc_url( RESTAURANT_ZONE_REVIEW ); ?>" class="button button-primary get">
							<?php esc_html_e("Review", "restaurant-zone"); ?>
						</a></p>
					</div>
				</div>
			</div>
		</div>
		<hr>

		<h2><?php esc_html_e("Free Vs Premium","restaurant-zone"); ?></h2>
		<div class="restaurant-zone-button-container">
			<a target="_blank" href="<?php echo esc_url( RESTAURANT_ZONE_PRO_DOC ); ?>" class="button button-primary get">
				<?php esc_html_e("Checkout Documentation", "restaurant-zone"); ?>
			</a>
			<a target="_blank" href="<?php echo esc_url( RESTAURANT_ZONE_LIVE_DEMO ); ?>" class="button button-primary get">
				<?php esc_html_e("View Theme Demo", "restaurant-zone"); ?>
			</a>
		</div>


		<table class="wp-list-table widefat">
			<thead class="table-book">
				<tr>
					<th><strong><?php esc_html_e("Theme Feature", "restaurant-zone"); ?></strong></th>
					<th><strong><?php esc_html_e("Basic Version", "restaurant-zone"); ?></strong></th>
					<th><strong><?php esc_html_e("Premium Version", "restaurant-zone"); ?></strong></th>
				</tr>
			</thead>

			<tbody>
				<tr>
					<td><?php esc_html_e("Header Background Color", "restaurant-zone"); ?></td>
					<td><span class="tick"><span class="dashicons dashicons-yes-alt"></span></span></td>
					<td><span class="tick"><span class="dashicons dashicons-yes-alt"></span></span></td>
				</tr>
				<tr>
					<td><?php esc_html_e("Custom Navigation Logo Or Text", "restaurant-zone"); ?></td>
					<td><span class="tick"><span class="dashicons dashicons-yes-alt"></span></span></td>
					<td><span class="tick"><span class="dashicons dashicons-yes-alt"></span></span></td>
				</tr>
				<tr>
					<td><?php esc_html_e("Hide Logo Text", "restaurant-zone"); ?></td>
					<td><span class="tick"><span class="dashicons dashicons-yes-alt"></span></span></td>
					<td><span class="tick"><span class="dashicons dashicons-yes-alt"></span></span></td>
				</tr>

				<tr>
					<td><?php esc_html_e("Premium Support", "restaurant-zone"); ?></td>
					<td><span class="cross"><span class="dashicons dashicons-dismiss"></span></span></td>
					<td><span class="tick"><span class="dashicons dashicons-yes-alt"></span></span></td>
				</tr>
				<tr>
					<td><?php esc_html_e("Fully SEO Optimized", "restaurant-zone"); ?></td>
					<td><span class="cross"><span class="dashicons dashicons-dismiss"></span></span></td>
					<td><span class="tick"><span class="dashicons dashicons-yes-alt"></span></span></td>
				</tr>
				<tr>
					<td><?php esc_html_e("Recent Posts Widget", "restaurant-zone"); ?></td>
					<td><span class="cross"><span class="dashicons dashicons-dismiss"></span></span></td>
					<td><span class="tick"><span class="dashicons dashicons-yes-alt"></span></span></td>
				</tr>

				<tr>
					<td><?php esc_html_e("Easy Google Fonts", "restaurant-zone"); ?></td>
					<td><span class="cross"><span class="dashicons dashicons-dismiss"></span></span></td>
					<td><span class="tick"><span class="dashicons dashicons-yes-alt"></span></span></td>
				</tr>
				<tr>
					<td><?php esc_html_e("Pagespeed Plugin", "restaurant-zone"); ?></td>
					<td><span class="cross"><span class="dashicons dashicons-dismiss"></span></span></td>
					<td><span class="tick"><span class="dashicons dashicons-yes-alt"></span></span></td>
				</tr>
				<tr>
					<td><?php esc_html_e("Only Show Header Image On Front Page", "restaurant-zone"); ?></td>
					<td><span class="cross"><span class="dashicons dashicons-dismiss"></span></span></td>
					<td><span class="tick"><span class="dashicons dashicons-yes-alt"></span></td>
				</tr>
				<tr>
					<td><?php esc_html_e("Show Header Everywhere", "restaurant-zone"); ?></td>
					<td><span class="cross"><span class="dashicons dashicons-dismiss"></span></span></td>
					<td><span class="tick"><span class="dashicons dashicons-yes-alt"></span></span></td>
				</tr>
				<tr>
					<td><?php esc_html_e("Custom Text On Header Image", "restaurant-zone"); ?></td>
					<td><span class="cross"><span class="dashicons dashicons-dismiss"></span></span></td>
					<td><span class="tick"><span class="dashicons dashicons-yes-alt"></span></span></td>
				</tr>
				<tr>
					<td><?php esc_html_e("Full Width (Hide Sidebar)", "restaurant-zone"); ?></td>
					<td><span class="cross"><span class="dashicons dashicons-dismiss"></span></span></td>
					<td><span class="tick"><span class="dashicons dashicons-yes-alt"></span></span></td>
				</tr>
				<tr>
					<td><?php esc_html_e("Only Show Upper Widgets On Front Page", "restaurant-zone"); ?></td>
					<td><span class="cross"><span class="dashicons dashicons-dismiss"></span></span></td>
					<td><span class="tick"><span class="dashicons dashicons-yes-alt"></span></td>
				</tr>
				<tr>
					<td><?php esc_html_e("Replace Copyright Text", "restaurant-zone"); ?></td>
					<td><span class="cross"><span class="dashicons dashicons-dismiss"></span></span></td>
					<td><span class="tick"><span class="dashicons dashicons-yes-alt"></span></span></td>
				</tr>
				<tr>
					<td><?php esc_html_e("Customize Upper Widgets Colors", "restaurant-zone"); ?></td>
					<td><span class="cross"><span class="dashicons dashicons-dismiss"></span></span></td>
					<td><span class="tick"><span class="dashicons dashicons-yes-alt"></span></span></td>
				</tr>
				<tr>
					<td><?php esc_html_e("Customize Navigation Color", "restaurant-zone"); ?></td>
					<td><span class="cross"><span class="dashicons dashicons-dismiss"></span></span></td>
					<td><span class="tick"><span class="dashicons dashicons-yes-alt"></span></span></td>
				</tr>
				<tr>
					<td><?php esc_html_e("Customize Post/Page Color", "restaurant-zone"); ?></td>
					<td><span class="cross"><span class="dashicons dashicons-dismiss"></span></span></td>
					<td><span class="tick"><span class="dashicons dashicons-yes-alt"></span></span></td>
				</tr>
				<tr>
					<td><?php esc_html_e("Customize Blog Feed Color", "restaurant-zone"); ?></td>
					<td><span class="cross"><span class="dashicons dashicons-dismiss"></span></span></td>
					<td><span class="tick"><span class="dashicons dashicons-yes-alt"></span></span></td>
				</tr>
				<tr>
					<td><?php esc_html_e("Customize Footer Color", "restaurant-zone"); ?></td>
					<td><span class="cross"><span class="dashicons dashicons-dismiss"></span></span></td>
					<td><span class="tick"><span class="dashicons dashicons-yes-alt"></span></span></td>
				</tr>
				<tr>
					<td><?php esc_html_e("Customize Sidebar Color", "restaurant-zone"); ?></td>
					<td><span class="cross"><span class="dashicons dashicons-dismiss"></span></span></td>
					<td><span class="tick"><span class="dashicons dashicons-yes-alt"></span></span></td>
				</tr>
				<tr>
					<td><?php esc_html_e("Customize Background Color", "restaurant-zone"); ?></td>
					<td><span class="cross"><span class="dashicons dashicons-dismiss"></span></span></td>
					<td><span class="tick"><span class="dashicons dashicons-yes-alt"></span></span></td>
				</tr>
				<tr>
					<td><?php esc_html_e("Importable Demo Content	", "restaurant-zone"); ?></td>
					<td><span class="cross"><span class="dashicons dashicons-dismiss"></span></span></td>
					<td><span class="tick"><span class="dashicons dashicons-yes-alt"></span></span></td>
				</tr>
			</tbody>
		</table>
		<div class="restaurant-zone-button-container">
			<a target="_blank" href="<?php echo esc_url( RESTAURANT_ZONE_GET_PREMIUM_PRO ); ?>" class="button button-primary get">
				<?php esc_html_e("Go Premium", "restaurant-zone"); ?>
			</a>
		</div>
	</div>
	<?php
}
// Change number or products per row to 3
add_filter('loop_shop_columns', 'restaurant_zone_loop_columns');
if (!function_exists('restaurant_zone_loop_columns')) {
	function restaurant_zone_loop_columns() {
		$columns = get_theme_mod( 'restaurant_zone_products_per_row', 3 );
		return $columns; // 3 products per row
	}
}

//Change number of products that are displayed per page (shop page)
add_filter( 'loop_shop_per_page', 'restaurant_zone_shop_per_page', 9 );
function restaurant_zone_shop_per_page( $cols ) {
  	$cols = get_theme_mod( 'restaurant_zone_product_per_page', 9 );
	return $cols;
}

