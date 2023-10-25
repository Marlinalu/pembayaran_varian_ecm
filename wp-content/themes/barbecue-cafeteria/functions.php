<?php
/**
 * Barbecue Cafeteria functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Barbecue Cafeteria
 */

if ( ! defined( 'RESTAURANT_ZONE_URL' ) ) {
    define( 'RESTAURANT_ZONE_URL', esc_url( 'https://www.themagnifico.net/themes/barbecue-wordpress-theme/', 'barbecue-cafeteria') );
}
if ( ! defined( 'RESTAURANT_ZONE_TEXT' ) ) {
    define( 'RESTAURANT_ZONE_TEXT', __( 'Barbecue Cafeteria Pro','barbecue-cafeteria' ));
}

function barbecue_cafeteria_enqueue_styles() {
    // load bootstrap css
    wp_enqueue_style( 'bootstrap-css',get_template_directory_uri() . '/assets/css/bootstrap.css');
    $parentcss = 'restaurant-zone-style';
    $theme = wp_get_theme(); wp_enqueue_style( $parentcss, get_template_directory_uri() . '/style.css', array(), $theme->parent()->get('Version'));
    wp_enqueue_style( 'barbecue-cafeteria-style', get_stylesheet_uri(), array( $parentcss ), $theme->get('Version'));

    wp_enqueue_script( 'comment-reply', '/wp-includes/js/comment-reply.min.js', array(), false, true );
}


add_action( 'wp_enqueue_scripts', 'barbecue_cafeteria_enqueue_styles' );

function barbecue_cafeteria_customize_register($wp_customize){

    //Popular item Settings
    $wp_customize->add_section('barbecue_cafeteria_product_section',array(
        'title' => esc_html__('Popular item Settings','barbecue-cafeteria'),
        'priority'    => null
    ));

    $wp_customize->add_setting('barbecue_cafeteria_popular_setting', array(
        'default' => false,
        'sanitize_callback' => 'restaurant_zone_sanitize_checkbox'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'barbecue_cafeteria_popular_setting',array(
        'label'          => __( 'Enable Disable Popular', 'barbecue-cafeteria' ),
        'section'        => 'barbecue_cafeteria_product_section',
        'settings'       => 'barbecue_cafeteria_popular_setting',
        'type'           => 'checkbox',
    )));

    $wp_customize->add_setting('barbecue_cafeteria_title', array(
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('barbecue_cafeteria_title', array(
        'label' => __('Title', 'barbecue-cafeteria'),
        'section' => 'barbecue_cafeteria_product_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting( 'barbecue_cafeteria_image_page', array(
        'default'           => '',
        'sanitize_callback' => 'restaurant_zone_sanitize_dropdown_pages'
    ) );
    $wp_customize->add_control( 'barbecue_cafeteria_image_page', array(
        'label'    => __( 'Select Page', 'barbecue-cafeteria' ),
        'description' => __('Image Size 575 x 415','barbecue-cafeteria'),
        'section'  => 'barbecue_cafeteria_product_section',
        'type'     => 'dropdown-pages'
    ) );

    if(class_exists('woocommerce')){
        $wp_customize->add_setting('barbecue_cafeteria_home_product_per_page',array(
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field'
        ));
        $wp_customize->add_control('barbecue_cafeteria_home_product_per_page',array(
            'label' => esc_html__('No Of Products','barbecue-cafeteria'),
            'section' => 'barbecue_cafeteria_product_section',
            'setting' => 'barbecue_cafeteria_home_product_per_page',
            'type'  => 'number'
        ));
        
        $royal_jewellery_args = array(
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
        $categories = get_categories( $royal_jewellery_args );
        $cats = array();
        $i = 0;
        foreach($categories as $category){
            if($i==0){
                $default = $category->slug;
                $i++;
            }
            $cats[$category->slug] = $category->name;
        }
        $wp_customize->add_setting('barbecue_cafeteria_home_product',array(
            'sanitize_callback' => 'restaurant_zone_sanitize_select',
        ));
        $wp_customize->add_control('barbecue_cafeteria_home_product',array(
            'type'    => 'select',
            'choices' => $cats,
            'label' => __('Select Product Category','barbecue-cafeteria'),
            'section' => 'barbecue_cafeteria_product_section',
        ));
    }
}
add_action('customize_register', 'barbecue_cafeteria_customize_register');

if ( ! function_exists( 'barbecue_cafeteria_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function barbecue_cafeteria_setup() {

        add_theme_support( 'responsive-embeds' );

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

        add_image_size('barbecue-cafeteria-featured-header-image', 2000, 660, true);

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
            'default-color' => '',
            'default-image' => '',
        ) ) );

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

        add_theme_support( 'align-wide' );

        add_theme_support( 'wp-block-styles' );
    }
endif;
add_action( 'after_setup_theme', 'barbecue_cafeteria_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function barbecue_cafeteria_widgets_init() {
        register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'barbecue-cafeteria' ),
        'id'            => 'sidebar',
        'description'   => esc_html__( 'Add widgets here.', 'barbecue-cafeteria' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h5 class="widget-title">',
        'after_title'   => '</h5>',
    ) );
}
add_action( 'widgets_init', 'barbecue_cafeteria_widgets_init' );

function barbecue_cafeteria_remove_customize_register() {
    global $wp_customize;
    $wp_customize->remove_section( 'restaurant_zone_color_option' );
    $wp_customize->remove_section( 'restaurant_zone_general_settings' );
    $wp_customize->remove_section( 'restaurant_zone_menu_items_section' );

    $wp_customize->remove_section( 'restaurant_zone_post_settings' );
    $wp_customize->remove_section( 'restaurant_zone_page_settings' );

    $wp_customize->remove_setting( 'pro_version_footer_setting' );
    $wp_customize->remove_control( 'pro_version_footer_setting' );

    $wp_customize->remove_setting( 'pro_version_top_header_setting' );
    $wp_customize->remove_control( 'pro_version_top_header_setting' );

    $wp_customize->remove_setting( 'pro_version_social_setting' );
    $wp_customize->remove_control( 'pro_version_social_setting' );

    $wp_customize->remove_setting( 'pro_version_slider_setting' );
    $wp_customize->remove_control( 'pro_version_slider_setting' );
    
}
add_action( 'customize_register', 'barbecue_cafeteria_remove_customize_register', 11 );


function barbecue_cafeteria_remove_my_action() {
    remove_action( 'admin_menu','restaurant_zone_themepage' );
}
add_action( 'init', 'barbecue_cafeteria_remove_my_action');