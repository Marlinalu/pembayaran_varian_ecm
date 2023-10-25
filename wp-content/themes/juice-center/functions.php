<?php
/**
 * Juice Center functions and definitions
 *
 * @package Juice Center
 */

if ( ! function_exists( 'juice_center_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function juice_center_setup() {
	global $juice_center_content_width;
	if ( ! isset( $juice_center_content_width ) )
		$juice_center_content_width = 680;

	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'wp-block-styles');
	add_theme_support( 'align-wide' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 100,
		'flex-height' => true,
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
	add_editor_style( 'editor-style.css' );
}
endif; 
add_action( 'after_setup_theme', 'juice_center_setup' );

function juice_center_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'juice-center' ),
		'description'   => __( 'Appears on blog page sidebar', 'juice-center' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'juice-center' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Add widgets here to appear in your sidebar on pages.', 'juice-center' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar 3', 'juice-center' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'juice-center' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'juice_center_widgets_init' );

function juice_center_enqueue_styles() {
    $parenthandle = 'juice-center-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
    $theme = wp_get_theme();
    wp_enqueue_style( $parenthandle, esc_url(get_template_directory_uri()) . '/style.css',
        array(),  // if the parent theme code has a dependency, copy it to here
        $theme->parent()->get('Version')
    );
    wp_enqueue_style( 'juice-center-child-style', get_stylesheet_uri(),
        array( $parenthandle ),
        $theme->get('Version') // this only works if you have Version in the style header
    );
}
add_action( 'wp_enqueue_scripts', 'juice_center_enqueue_styles' );

function juice_center_sanitize_select( $input, $setting ){
        //input must be a slug: lowercase alphanumeric characters, dashes and underscores are allowed only
        $input = sanitize_key($input);
        //get the list of possible select options
        $choices = $setting->manager->get_control( $setting->id )->choices;
        //return input if valid or return default option
        return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
    }

// customizer css
function juice_center_enqueue_customizer_css() {
    wp_enqueue_style( 'juice_center-customizer-css', get_stylesheet_directory_uri() . '/css/customize-controls.css' );
}
add_action( 'customize_controls_print_styles', 'juice_center_enqueue_customizer_css' );

function juice_center_scripts() {
	// Style handle of parent theme.
    	wp_enqueue_style( 'bootstrap-style', get_template_directory_uri().'/css/bootstrap.css' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// font-family
	$juice_center_headings_font = esc_html(get_theme_mod('juice_center_headings_fonts'));
	$juice_center_body_font = esc_html(get_theme_mod('juice_center_body_fonts'));

	if( $juice_center_headings_font ) {
		wp_enqueue_style( 'juice-center-headings-fonts', '//fonts.googleapis.com/css?family='. $juice_center_headings_font );
	} else {
		wp_enqueue_style( 'emilys+candy', '//fonts.googleapis.com/css?family=Emilys+Candy');
	}
	if( $juice_center_body_font ) {
		wp_enqueue_style( 'poppins', '//fonts.googleapis.com/css?family='. $juice_center_body_font );
	} else {
		wp_enqueue_style( 'juice-center-source-body', '//fonts.googleapis.com/css?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900');
	}
}
add_action( 'wp_enqueue_scripts', 'juice_center_scripts' );

add_action( 'customize_register', 'juice_center_customize_register', 11 );
function juice_center_customize_register() {
	global $wp_customize;

	$wp_customize->remove_setting( 'classic_bakery_color_scheme_one' );
	$wp_customize->remove_control( 'classic_bakery_color_scheme_one' );

	$wp_customize->remove_section( 'classic_bakery_category' );

	// upgrade to pro
	$wp_customize->add_setting(
		'pro_info_buttons',
		array(
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'juice_center_sanitize_text',
		)
	);
	$wp_customize->add_control(
		new Juice_Center_Pro_Button_Customize_Control(
			$wp_customize,
			'pro_info_buttons',
			array(
				'section' => 'web_upgrade_premium',
			)
		)
	);

}

function juice_center_remove_my_action() {
    remove_action( 'admin_menu','classic_bakery_theme_info_menu_link' );
    remove_action( 'after_switch_theme','classic_bakery_options' );
}
add_action( 'init', 'juice_center_remove_my_action');

// upgrade to pro
function juice_center_upgrade_pro_options( $wp_customize ) {

	$wp_customize->add_section(
		'web_upgrade_premium',
		array(
			'title'    => __( 'About Juice Center', 'juice-center' ),
			'priority' => 1,
		)
	);

	class Juice_Center_Pro_Button_Customize_Control extends WP_Customize_Control {
		public $type = 'upgrade_premium';

		function render_content() {
			?>
			<div class="pro_info">
				<ul>
					<li><a class="upgrade-to-pro" href="<?php echo esc_url( JUICE_CENTER_PREMIUM_PAGE ); ?>" target="_blank"><i class="dashicons dashicons-cart"></i><?php esc_html_e( 'Upgrade Pro', 'juice-center' ); ?> </a></li>
				</ul>
			</div>
			<?php
		}
	}

}
add_action( 'customize_register', 'juice_center_upgrade_pro_options' );


if ( ! defined( 'JUICE_CENTER_PREMIUM_PAGE' ) ) {
	define('JUICE_CENTER_PREMIUM_PAGE',__('https://www.theclassictemplates.com/wp-themes/juice-center-wordpress-theme/','juice-center'));
}

// Customizer Section
function juice_center_customizer ( $wp_customize ) {

	// Hot Products Category Section
	$wp_customize->add_section('juice_center_two_cols_section',array(
		'title'	=> __('Manage Products Category Section','juice-center'),
		'description' => __('<p class="sec-title">Manage Products Category Section</p>','juice-center'),
		'priority'	=> null,
		'panel' => 'classic_bakery_panel_area'
	));

	$wp_customize->add_setting('juice_center_product_title',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'juice_center_product_title', array(
	   'settings' => 'juice_center_product_title',
	   'section'   => 'juice_center_two_cols_section',
	   'label' => __('Add Section Title', 'juice-center'),
	   'type'      => 'text'
	));

	$wp_customize->add_setting('juice_center_product_text',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'juice_center_product_text', array(
	   'settings' => 'juice_center_product_text',
	   'section'   => 'juice_center_two_cols_section',
	   'label' => __('Add Section Text', 'juice-center'),
	   'type'      => 'text'
	));

	$args = array(
       	'type'                     => 'product',
        'child_of'                 => 0,
        'parent'                   => '',
        'orderby'                  => 'term_group',
        'order'                    => 'ASC',
        'hide_empty'               => false,
        'hierarchical'             => 1,
        'number'                   => '',
        'taxonomy'                 => 'product_cat',
        'pad_counts'               => false
    );
	$categories = get_categories($args);
	$cat_posts = array();
	$m = 0;
	$cat_posts[]='Select';
	foreach($categories as $category){
		if($m==0){
			$default = $category->slug;
			$m++;
		}
		$cat_posts[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('juice_center_hot_products_cat',array(
		'default'	=> 'select',
		'sanitize_callback' => 'juice_center_sanitize_select',
	));
	$wp_customize->add_control('juice_center_hot_products_cat',array(
		'type'    => 'select',
		'choices' => $cat_posts,
		'label' => __('Select category to display products ','juice-center'),
		'section' => 'juice_center_two_cols_section',
	));

}
add_action( 'customize_register', 'juice_center_customizer' );