<?php
/**
 * Restaurant Zone Theme Customizer
 *
 * @link: https://developer.wordpress.org/themes/customize-api/customizer-objects/
 *
 * @package Restaurant Zone
 */


if ( ! defined( 'RESTAURANT_ZONE_URL' ) ) {
    define( 'RESTAURANT_ZONE_URL', esc_url( 'https://www.themagnifico.net/themes/restaurant-wordpress-theme/', 'restaurant-zone') );
}
if ( ! defined( 'RESTAURANT_ZONE_TEXT' ) ) {
    define( 'RESTAURANT_ZONE_TEXT', __( 'Restaurant Zone Pro','restaurant-zone' ));
}
if ( ! defined( 'FRESTAURANT_ZONE_BUY_TEXT' ) ) {
    define( 'FRESTAURANT_ZONE_BUY_TEXT', __( 'Buy Restaurant Zone Pro','restaurant-zone' ));
}

use WPTRT\Customize\Section\Restaurant_Zone_Button;

add_action( 'customize_register', function( $manager ) {

    $manager->register_section_type( Restaurant_Zone_Button::class );

    $manager->add_section(
        new Restaurant_Zone_Button( $manager, 'restaurant_zone_pro', [
            'title'       => esc_html( RESTAURANT_ZONE_TEXT,'restaurant-zone' ),
            'priority'    => 0,
            'button_text' => __( 'GET PREMIUM', 'restaurant-zone' ),
            'button_url'  => esc_url( RESTAURANT_ZONE_URL )
        ] )
    );

} );

// Load the JS and CSS.
add_action( 'customize_controls_enqueue_scripts', function() {

    $version = wp_get_theme()->get( 'Version' );

    wp_enqueue_script(
        'restaurant-zone-customize-section-button',
        get_theme_file_uri( 'vendor/wptrt/customize-section-button/public/js/customize-controls.js' ),
        [ 'customize-controls' ],
        $version,
        true
    );

    wp_enqueue_style(
        'restaurant-zone-customize-section-button',
        get_theme_file_uri( 'vendor/wptrt/customize-section-button/public/css/customize-controls.css' ),
        [ 'customize-controls' ],
        $version
    );

} );

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function restaurant_zone_customize_register($wp_customize){

    // Pro Version
    class Restaurant_Zone_Customize_Pro_Version extends WP_Customize_Control {
        public $type = 'pro_options';

        public function render_content() {
            echo '<span>For More <strong>'. esc_html( $this->label ) .'</strong>?</span>';
            echo '<a href="'. esc_url($this->description) .'" target="_blank">';
                echo '<span class="dashicons dashicons-info"></span>';
                echo '<strong> '. esc_html( FRESTAURANT_ZONE_BUY_TEXT,'restaurant-zone' ) .'<strong></a>';
            echo '</a>';
        }
    }

    // Custom Controls
    function Restaurant_Zone_sanitize_custom_control( $input ) {
        return $input;
    }

  $wp_customize->add_setting('restaurant_zone_logo_title_text', array(
        'default' => true,
        'sanitize_callback' => 'restaurant_zone_sanitize_checkbox'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'restaurant_zone_logo_title_text',array(
        'label'          => __( 'Enable Disable Title', 'restaurant-zone' ),
        'section'        => 'title_tagline',
        'settings'       => 'restaurant_zone_logo_title_text',
        'type'           => 'checkbox',
    )));

     //Logo
    $wp_customize->add_setting('restaurant_zone_logo_max_height',array(
        'default'   => '',
        'sanitize_callback' => 'restaurant_zone_sanitize_number_absint'
    ));
    $wp_customize->add_control('restaurant_zone_logo_max_height',array(
        'label' => esc_html__('Logo Width','restaurant-zone'),
        'section'   => 'title_tagline',
        'type'      => 'number'
    ));

    $wp_customize->add_setting('restaurant_zone_theme_description', array(
        'default' => false,
        'sanitize_callback' => 'restaurant_zone_sanitize_checkbox'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'restaurant_zone_theme_description',array(
        'label'          => __( 'Enable Disable Tagline', 'restaurant-zone' ),
        'section'        => 'title_tagline',
        'settings'       => 'restaurant_zone_theme_description',
        'type'           => 'checkbox',
    )));

    // Theme Color
    $wp_customize->add_section('restaurant_zone_color_option',array(
        'title' => esc_html__('Theme Color','restaurant-zone'),
    ));

    $wp_customize->add_setting( 'restaurant_zone_theme_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'restaurant_zone_theme_color', array(
        'label' => esc_html__('First Color Option','restaurant-zone'),
        'section' => 'restaurant_zone_color_option',
        'settings' => 'restaurant_zone_theme_color'
    )));

    $wp_customize->add_setting( 'restaurant_zone_theme_color_2', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'restaurant_zone_theme_color_2', array(
        'label' => esc_html__('Second Color Option','restaurant-zone'),
        'section' => 'restaurant_zone_color_option',
        'settings' => 'restaurant_zone_theme_color_2'
    )));

    // Pro Version
    $wp_customize->add_setting( 'pro_version_theme_color', array(
        'sanitize_callback' => 'Restaurant_Zone_sanitize_custom_control'
    ));
    $wp_customize->add_control( new Restaurant_Zone_Customize_Pro_Version ( $wp_customize,'pro_version_theme_color', array(
        'section'     => 'restaurant_zone_color_option',
        'type'        => 'pro_options',
        'label'       => esc_html__( 'Customizer Options', 'restaurant-zone' ),
        'description' => esc_url( RESTAURANT_ZONE_URL ),
        'priority'    => 100
    )));

    // Top Header
    $wp_customize->add_section('restaurant_zone_top_header',array(
        'title' => esc_html__('Top Header','restaurant-zone'),
    ));

    $wp_customize->add_setting('restaurant_zone_top_header_setting', array(
        'default' => false,
        'sanitize_callback' => 'restaurant_zone_sanitize_checkbox'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'restaurant_zone_top_header_setting',array(
        'label'          => __( 'Enable Disable Topheader', 'restaurant-zone' ),
        'section'        => 'restaurant_zone_top_header',
        'settings'       => 'restaurant_zone_top_header_setting',
        'type'           => 'checkbox',
    )));

    $wp_customize->add_setting('restaurant_zone_phone_number_icon',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('restaurant_zone_phone_number_icon',array(
        'label' => esc_html__('Add Phone Number Icon','restaurant-zone'),
        'section' => 'restaurant_zone_top_header',
        'setting' => 'restaurant_zone_phone_number_icon',
        'type'  => 'text',
        'default' => 'fas fa-phone',
        'description' =>  __('Select font awesome icons <a target="_blank" href="https://fontawesome.com/v5/search?m=free">Click Here</a> for select icon. for eg:-fas fa-phone','restaurant-zone')
    ));

    $wp_customize->add_setting('restaurant_zone_phone_number_info',array(
        'default' => '',
        'sanitize_callback' => 'restaurant_zone_sanitize_phone_number'
    ));
    $wp_customize->add_control('restaurant_zone_phone_number_info',array(
        'label' => esc_html__('Phone Number','restaurant-zone'),
        'section' => 'restaurant_zone_top_header',
        'setting' => 'restaurant_zone_phone_number_info',
        'type'  => 'text'
    ));

    $wp_customize->add_setting('restaurant_zone_emails_icon',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('restaurant_zone_emails_icon',array(
        'label' => esc_html__('Email Icon','restaurant-zone'),
        'section' => 'restaurant_zone_top_header',
        'setting' => 'restaurant_zone_emails_icon',
        'type'  => 'text',
        'default' => 'fas fa-envelope',
        'description' =>  __('Select font awesome icons <a target="_blank" href="https://fontawesome.com/v5/search?m=free">Click Here</a> for select icon. for eg:-fas fa-envelope','restaurant-zone')
    ));

    $wp_customize->add_setting('restaurant_zone_email_info',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_email'
    ));
    $wp_customize->add_control('restaurant_zone_email_info',array(
        'label' => esc_html__('Email Address','restaurant-zone'),
        'section' => 'restaurant_zone_top_header',
        'setting' => 'restaurant_zone_email_info',
        'type'  => 'text'
    ));

    $wp_customize->add_setting('restaurant_zone_reservation_button',array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('restaurant_zone_reservation_button',array(
        'label' => esc_html__('Reservation Page Link','restaurant-zone'),
        'section' => 'restaurant_zone_top_header',
        'setting' => 'restaurant_zone_reservation_button',
        'type'  => 'url'
    ));

    // Pro Version
    $wp_customize->add_setting( 'pro_version_top_header_setting', array(
        'sanitize_callback' => 'Restaurant_Zone_sanitize_custom_control'
    ));
    $wp_customize->add_control( new Restaurant_Zone_Customize_Pro_Version ( $wp_customize,'pro_version_top_header_setting', array(
        'section'     => 'restaurant_zone_top_header',
        'type'        => 'pro_options',
        'label'       => esc_html__( 'Customizer Options', 'restaurant-zone' ),
        'description' => esc_url( RESTAURANT_ZONE_URL ),
        'priority'    => 100
    )));

    // General Settings
     $wp_customize->add_section('restaurant_zone_general_settings',array(
        'title' => esc_html__('General Settings','restaurant-zone'),
        'priority'   => 30,
    ));

    $wp_customize->add_setting('restaurant_zone_preloader_hide', array(
        'default' => false,
        'sanitize_callback' => 'restaurant_zone_sanitize_checkbox'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'restaurant_zone_preloader_hide',array(
        'label'          => __( 'Show Theme Preloader', 'restaurant-zone' ),
        'section'        => 'restaurant_zone_general_settings',
        'settings'       => 'restaurant_zone_preloader_hide',
        'type'           => 'checkbox',
    )));

    $wp_customize->add_setting( 'restaurant_zone_preloader_bg_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'restaurant_zone_preloader_bg_color', array(
        'label' => esc_html__('Preloader Background Color','restaurant-zone'),
        'section' => 'restaurant_zone_general_settings',
        'settings' => 'restaurant_zone_preloader_bg_color'
    )));

    $wp_customize->add_setting( 'restaurant_zone_preloader_dot_1_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'restaurant_zone_preloader_dot_1_color', array(
        'label' => esc_html__('Preloader First Dot Color','restaurant-zone'),
        'section' => 'restaurant_zone_general_settings',
        'settings' => 'restaurant_zone_preloader_dot_1_color'
    )));

    $wp_customize->add_setting( 'restaurant_zone_preloader_dot_2_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'restaurant_zone_preloader_dot_2_color', array(
        'label' => esc_html__('Preloader Second Dot Color','restaurant-zone'),
        'section' => 'restaurant_zone_general_settings',
        'settings' => 'restaurant_zone_preloader_dot_2_color'
    )));

    $wp_customize->add_setting('restaurant_zone_sticky_header', array(
        'default' => false,
        'sanitize_callback' => 'restaurant_zone_sanitize_checkbox'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'restaurant_zone_sticky_header',array(
        'label'          => __( 'Show Sticky Header', 'restaurant-zone' ),
        'section'        => 'restaurant_zone_general_settings',
        'settings'       => 'restaurant_zone_sticky_header',
        'type'           => 'checkbox',
    )));

    $wp_customize->add_setting('restaurant_zone_scroll_hide', array(
        'default' => false,
        'sanitize_callback' => 'restaurant_zone_sanitize_checkbox'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'restaurant_zone_scroll_hide',array(
        'label'          => __( 'Show Theme Scroll To Top', 'restaurant-zone' ),
        'section'        => 'restaurant_zone_general_settings',
        'settings'       => 'restaurant_zone_scroll_hide',
        'type'           => 'checkbox',
    )));

    $wp_customize->add_setting('restaurant_zone_scroll_top_position',array(
        'default' => 'Right',
        'sanitize_callback' => 'restaurant_zone_sanitize_choices'
    ));
    $wp_customize->add_control('restaurant_zone_scroll_top_position',array(
        'type' => 'radio',
        'section' => 'restaurant_zone_general_settings',
        'choices' => array(
            'Right' => __('Right','restaurant-zone'),
            'Left' => __('Left','restaurant-zone'),
            'Center' => __('Center','restaurant-zone')
        ),
    ) );

     // Product Columns
    $wp_customize->add_setting( 'restaurant_zone_products_per_row' , array(
        'default'           => '3',
        'transport'         => 'refresh',
        'sanitize_callback' => 'restaurant_zone_sanitize_select',
    ) );

    $wp_customize->add_control('restaurant_zone_products_per_row', array(
        'label' => __( 'Product per row', 'restaurant-zone' ),
        'section'  => 'restaurant_zone_general_settings',
        'type'     => 'select',
        'choices'  => array(
            '2' => '2',
            '3' => '3',
            '4' => '4',
        ),
    ) );

    $wp_customize->add_setting('restaurant_zone_product_per_page',array(
        'default'   => '9',
        'sanitize_callback' => 'restaurant_zone_sanitize_float'
    ));
    $wp_customize->add_control('restaurant_zone_product_per_page',array(
        'label' => __('Product per page','restaurant-zone'),
        'section'   => 'restaurant_zone_general_settings',
        'type'      => 'number'
    ));

    //Woocommerce shop page Sidebar
    $wp_customize->add_setting('restaurant_zone_woocommerce_shop_page_sidebar', array(
        'default' => true,
        'sanitize_callback' => 'restaurant_zone_sanitize_checkbox'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'restaurant_zone_woocommerce_shop_page_sidebar',array(
        'label'          => __( 'Hide Shop Page Sidebar', 'restaurant-zone' ),
        'section'        => 'restaurant_zone_general_settings',
        'settings'       => 'restaurant_zone_woocommerce_shop_page_sidebar',
        'type'           => 'checkbox',
    )));

    $wp_customize->add_setting('restaurant_zone_shop_page_sidebar_layout',array(
        'default' => 'Right Sidebar',
        'sanitize_callback' => 'restaurant_zone_sanitize_choices'
    ));
    $wp_customize->add_control('restaurant_zone_shop_page_sidebar_layout',array(
        'type' => 'select',
        'label' => __('Woocommerce Shop Page Sidebar','restaurant-zone'),
        'section' => 'restaurant_zone_general_settings',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','restaurant-zone'),
            'Right Sidebar' => __('Right Sidebar','restaurant-zone'),
        ),
    ) );

    //Woocommerce Single Product page Sidebar
    $wp_customize->add_setting('restaurant_zone_woocommerce_single_product_page_sidebar', array(
        'default' => true,
        'sanitize_callback' => 'restaurant_zone_sanitize_checkbox'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'restaurant_zone_woocommerce_single_product_page_sidebar',array(
        'label'          => __( 'Hide Single Product Page Sidebar', 'restaurant-zone' ),
        'section'        => 'restaurant_zone_general_settings',
        'settings'       => 'restaurant_zone_woocommerce_single_product_page_sidebar',
        'type'           => 'checkbox',
    )));

    $wp_customize->add_setting('restaurant_zone_single_product_sidebar_layout',array(
        'default' => 'Right Sidebar',
        'sanitize_callback' => 'restaurant_zone_sanitize_choices'
    ));
    $wp_customize->add_control('restaurant_zone_single_product_sidebar_layout',array(
        'type' => 'select',
        'label' => __('Woocommerce Single Product Page Sidebar','restaurant-zone'),
        'section' => 'restaurant_zone_general_settings',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','restaurant-zone'),
            'Right Sidebar' => __('Right Sidebar','restaurant-zone'),
        ),
    ) );

    // Pro Version
    $wp_customize->add_setting( 'pro_version_general_setting', array(
        'sanitize_callback' => 'Restaurant_Zone_sanitize_custom_control'
    ));
    $wp_customize->add_control( new Restaurant_Zone_Customize_Pro_Version ( $wp_customize,'pro_version_general_setting', array(
        'section'     => 'restaurant_zone_general_settings',
        'type'        => 'pro_options',
        'label'       => esc_html__( 'Customizer Options', 'restaurant-zone' ),
        'description' => esc_url( RESTAURANT_ZONE_URL ),
        'priority'    => 100
    )));

     // Post Settings
     $wp_customize->add_section('restaurant_zone_post_settings',array(
        'title' => esc_html__('Post Settings','restaurant-zone'),
        'priority'   =>40,
    ));

    $wp_customize->add_setting('restaurant_zone_post_page_title',array(
        'sanitize_callback' => 'restaurant_zone_sanitize_checkbox',
        'default'           => 1,
    ));
    $wp_customize->add_control('restaurant_zone_post_page_title',array(
        'type'        => 'checkbox',
        'label'       => esc_html__('Enable Post Page Title', 'restaurant-zone'),
        'section'     => 'restaurant_zone_post_settings',
        'description' => esc_html__('Check this box to enable title on post page.', 'restaurant-zone'),
    ));

    $wp_customize->add_setting('restaurant_zone_post_page_meta',array(
        'sanitize_callback' => 'restaurant_zone_sanitize_checkbox',
        'default'           => 1,
    ));
    $wp_customize->add_control('restaurant_zone_post_page_meta',array(
        'type'        => 'checkbox',
        'label'       => esc_html__('Enable Post Page Meta', 'restaurant-zone'),
        'section'     => 'restaurant_zone_post_settings',
        'description' => esc_html__('Check this box to enable meta on post page.', 'restaurant-zone'),
    ));

    $wp_customize->add_setting('restaurant_zone_post_page_thumb',array(
        'sanitize_callback' => 'restaurant_zone_sanitize_checkbox',
        'default'           => 1,
    ));
    $wp_customize->add_control('restaurant_zone_post_page_thumb',array(
        'type'        => 'checkbox',
        'label'       => esc_html__('Enable Post Page Thumbnail', 'restaurant-zone'),
        'section'     => 'restaurant_zone_post_settings',
        'description' => esc_html__('Check this box to enable thumbnail on post page.', 'restaurant-zone'),
    ));

    $wp_customize->add_setting('restaurant_zone_single_post_thumb',array(
        'sanitize_callback' => 'restaurant_zone_sanitize_checkbox',
        'default'           => 1,
    ));
    $wp_customize->add_control('restaurant_zone_single_post_thumb',array(
        'type'        => 'checkbox',
        'label'       => esc_html__('Enable Single Post Thumbnail', 'restaurant-zone'),
        'section'     => 'restaurant_zone_post_settings',
        'description' => esc_html__('Check this box to enable post thumbnail on single post.', 'restaurant-zone'),
    ));

    $wp_customize->add_setting('restaurant_zone_single_post_meta',array(
        'sanitize_callback' => 'restaurant_zone_sanitize_checkbox',
        'default'           => 1,
    ));
    $wp_customize->add_control('restaurant_zone_single_post_meta',array(
        'type'        => 'checkbox',
        'label'       => esc_html__('Enable Single Post Meta', 'restaurant-zone'),
        'section'     => 'restaurant_zone_post_settings',
        'description' => esc_html__('Check this box to enable single post meta such as post date, author, category, comment etc.', 'restaurant-zone'),
    ));

    $wp_customize->add_setting('restaurant_zone_single_post_title',array(
            'sanitize_callback' => 'restaurant_zone_sanitize_checkbox',
            'default'           => 1,
    ));
    $wp_customize->add_control('restaurant_zone_single_post_title',array(
        'type'        => 'checkbox',
        'label'       => esc_html__('Enable Single Post Title', 'restaurant-zone'),
        'section'     => 'restaurant_zone_post_settings',
        'description' => esc_html__('Check this box to enable title on single post.', 'restaurant-zone'),
    ));

    // Page Settings
    $wp_customize->add_section('restaurant_zone_page_settings',array(
        'title' => esc_html__('Page Settings','restaurant-zone'),
        'priority'   =>50,
    ));

    $wp_customize->add_setting('restaurant_zone_single_page_title',array(
            'sanitize_callback' => 'restaurant_zone_sanitize_checkbox',
            'default'           => 1,
    ));
    $wp_customize->add_control('restaurant_zone_single_page_title',array(
        'type'        => 'checkbox',
        'label'       => esc_html__('Enable Single Page Title', 'restaurant-zone'),
        'section'     => 'restaurant_zone_page_settings',
        'description' => esc_html__('Check this box to enable title on single page.', 'restaurant-zone'),
    ));

    $wp_customize->add_setting('restaurant_zone_single_page_thumb',array(
        'sanitize_callback' => 'restaurant_zone_sanitize_checkbox',
        'default'           => 1,
    ));
    $wp_customize->add_control('restaurant_zone_single_page_thumb',array(
        'type'        => 'checkbox',
        'label'       => esc_html__('Enable Single Page Thumbnail', 'restaurant-zone'),
        'section'     => 'restaurant_zone_page_settings',
        'description' => esc_html__('Check this box to enable page thumbnail on single page.', 'restaurant-zone'),
    ));    

    // Social Link
    $wp_customize->add_section('restaurant_zone_social_link',array(
        'title' => esc_html__('Social Links','restaurant-zone'),
    ));

    $wp_customize->add_setting('restaurant_zone_facebook_icon',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('restaurant_zone_facebook_icon',array(
        'label' => esc_html__('Add Facebook Icon','restaurant-zone'),
        'section' => 'restaurant_zone_social_link',
        'setting' => 'restaurant_zone_facebook_icon',
        'type'  => 'text',
        'default' => 'fab fa-facebook-f',
        'description' =>  __('Select font awesome icons <a target="_blank" href="https://fontawesome.com/v5/search?m=free">Click Here</a> for select icon. for eg:-fab fa-facebook-f','restaurant-zone')
    ));

    $wp_customize->add_setting('restaurant_zone_facebook_url',array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('restaurant_zone_facebook_url',array(
        'label' => esc_html__('Facebook Link','restaurant-zone'),
        'section' => 'restaurant_zone_social_link',
        'setting' => 'restaurant_zone_facebook_url',
        'type'  => 'url'
    ));

    $wp_customize->add_setting('restaurant_zone_twitter_icon',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('restaurant_zone_twitter_icon',array(
        'label' => esc_html__('Add Twitter Icon','restaurant-zone'),
        'section' => 'restaurant_zone_social_link',
        'setting' => 'restaurant_zone_twitter_icon',
        'type'  => 'text',
        'default' => 'fab fa-twitter',
        'description' =>  __('Select font awesome icons <a target="_blank" href="https://fontawesome.com/v5/search?m=free">Click Here</a> for select icon. for eg:-fab fa-twitter','restaurant-zone')
    ));

    $wp_customize->add_setting('restaurant_zone_twitter_url',array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('restaurant_zone_twitter_url',array(
        'label' => esc_html__('Twitter Link','restaurant-zone'),
        'section' => 'restaurant_zone_social_link',
        'setting' => 'restaurant_zone_twitter_url',
        'type'  => 'url'
    ));

    $wp_customize->add_setting('restaurant_zone_intagram_icon',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('restaurant_zone_intagram_icon',array(
        'label' => esc_html__('Add Intagram Icon','restaurant-zone'),
        'section' => 'restaurant_zone_social_link',
        'setting' => 'restaurant_zone_intagram_icon',
        'type'  => 'text',
        'default' => 'fab fa-instagram',
        'description' =>  __('Select font awesome icons <a target="_blank" href="https://fontawesome.com/v5/search?m=free">Click Here</a> for select icon. for eg:-fab fa-instagram','restaurant-zone')
    ));


    $wp_customize->add_setting('restaurant_zone_intagram_url',array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('restaurant_zone_intagram_url',array(
        'label' => esc_html__('Intagram Link','restaurant-zone'),
        'section' => 'restaurant_zone_social_link',
        'setting' => 'restaurant_zone_intagram_url',
        'type'  => 'url'
    ));

    $wp_customize->add_setting('restaurant_zone_linkedin_icon',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('restaurant_zone_linkedin_icon',array(
        'label' => esc_html__('Add Linkedin Icon','restaurant-zone'),
        'section' => 'restaurant_zone_social_link',
        'setting' => 'restaurant_zone_linkedin_icon',
        'type'  => 'text',
        'default' => 'fab fa-linkedin-in',
        'description' =>  __('Select font awesome icons <a target="_blank" href="https://fontawesome.com/v5/search?m=free">Click Here</a> for select icon. for eg:-fab fa-linkedin-in','restaurant-zone')
    ));

    $wp_customize->add_setting('restaurant_zone_linkedin_url',array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('restaurant_zone_linkedin_url',array(
        'label' => esc_html__('Linkedin Link','restaurant-zone'),
        'section' => 'restaurant_zone_social_link',
        'setting' => 'restaurant_zone_linkedin_url',
        'type'  => 'url'
    ));

    $wp_customize->add_setting('restaurant_zone_pintrest_icon',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('restaurant_zone_pintrest_icon',array(
        'label' => esc_html__('Add Pinterest Icon','restaurant-zone'),
        'section' => 'restaurant_zone_social_link',
        'setting' => 'restaurant_zone_pintrest_icon',
        'type'  => 'text',
        'default' => 'fab fa-pinterest-p',
        'description' =>  __('Select font awesome icons <a target="_blank" href="https://fontawesome.com/v5/search?m=free">Click Here</a> for select icon. for eg:-fab fa-pinterest-p','restaurant-zone')
    ));

    $wp_customize->add_setting('restaurant_zone_pintrest_url',array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('restaurant_zone_pintrest_url',array(
        'label' => esc_html__('Pinterest Link','restaurant-zone'),
        'section' => 'restaurant_zone_social_link',
        'setting' => 'restaurant_zone_pintrest_url',
        'type'  => 'url'
    ));

     // Pro Version
    $wp_customize->add_setting( 'pro_version_social_setting', array(
        'sanitize_callback' => 'Restaurant_Zone_sanitize_custom_control'
    ));
    $wp_customize->add_control( new Restaurant_Zone_Customize_Pro_Version ( $wp_customize,'pro_version_social_setting', array(
        'section'     => 'restaurant_zone_social_link',
        'type'        => 'pro_options',
        'label'       => esc_html__( 'Customizer Options', 'restaurant-zone' ),
        'description' => esc_url( RESTAURANT_ZONE_URL ),
        'priority'    => 100
    )));

    //Slider
    $wp_customize->add_section('restaurant_zone_top_slider',array(
        'title' => esc_html__('Slider Settings','restaurant-zone'),
        'description' => esc_html__('Here you have to add 3 different pages in below dropdown. Note: Image Dimensions 1200 x 550 px','restaurant-zone')
    ));

    $wp_customize->add_setting('restaurant_zone_slider_setting', array(
        'default' => false,
        'sanitize_callback' => 'restaurant_zone_sanitize_checkbox'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'restaurant_zone_slider_setting',array(
        'label'          => __( 'Enable Disable Slider', 'restaurant-zone' ),
        'section'        => 'restaurant_zone_top_slider',
        'settings'       => 'restaurant_zone_slider_setting',
        'type'           => 'checkbox',
    )));

    for ( $restaurant_zone_count = 1; $restaurant_zone_count <= 3; $restaurant_zone_count++ ) {

        $wp_customize->add_setting( 'restaurant_zone_top_slider_page' . $restaurant_zone_count, array(
            'default'           => '',
            'sanitize_callback' => 'restaurant_zone_sanitize_dropdown_pages'
        ) );
        $wp_customize->add_control( 'restaurant_zone_top_slider_page' . $restaurant_zone_count, array(
            'label'    => __( 'Select Slide Page', 'restaurant-zone' ),
            'section'  => 'restaurant_zone_top_slider',
            'type'     => 'dropdown-pages'
        ) );
    }

    //Slider Image Opacity
    $wp_customize->add_setting('restaurant_zone_slider_opacity_color',array(
      'default' => '',
      'sanitize_callback' => 'restaurant_zone_sanitize_choices'
    ));

    $wp_customize->add_control( 'restaurant_zone_slider_opacity_color', array(
    'label'       => esc_html__( 'Slider Image Opacity','restaurant-zone' ),
    'section'     => 'restaurant_zone_top_slider',
    'type'        => 'select',
    'choices' => array(
      '0' =>  esc_attr('0','restaurant-zone'),
      '0.1' =>  esc_attr('0.1','restaurant-zone'),
      '0.2' =>  esc_attr('0.2','restaurant-zone'),
      '0.3' =>  esc_attr('0.3','restaurant-zone'),
      '0.4' =>  esc_attr('0.4','restaurant-zone'),
      '0.5' =>  esc_attr('0.5','restaurant-zone'),
      '0.6' =>  esc_attr('0.6','restaurant-zone'),
      '0.7' =>  esc_attr('0.7','restaurant-zone'),
      '0.8' =>  esc_attr('0.8','restaurant-zone'),
      '0.9' =>  esc_attr('0.9','restaurant-zone')
    ),
    ));

    // Pro Version
    $wp_customize->add_setting( 'pro_version_slider_setting', array(
        'sanitize_callback' => 'Restaurant_Zone_sanitize_custom_control'
    ));
    $wp_customize->add_control( new Restaurant_Zone_Customize_Pro_Version ( $wp_customize,'pro_version_slider_setting', array(
        'section'     => 'restaurant_zone_top_slider',
        'type'        => 'pro_options',
        'label'       => esc_html__( 'Customizer Options', 'restaurant-zone' ),
        'description' => esc_url( RESTAURANT_ZONE_URL ),
        'priority'    => 100
    )));


    //Menu Items Section
    $wp_customize->add_section( 'restaurant_zone_menu_items_section' , array(
        'title'      => __( 'Popular item Settings ', 'restaurant-zone' ),
        'priority'   => null
    ) );

    $wp_customize->add_setting('restaurant_zone_popular_setting', array(
        'default' => false,
        'sanitize_callback' => 'restaurant_zone_sanitize_checkbox'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'restaurant_zone_popular_setting',array(
        'label'          => __( 'Enable Disable Popular', 'restaurant-zone' ),
        'section'        => 'restaurant_zone_menu_items_section',
        'settings'       => 'restaurant_zone_popular_setting',
        'type'           => 'checkbox',
    )));

    $wp_customize->add_setting('restaurant_zone_title', array(
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('restaurant_zone_title', array(
        'label' => __('Title', 'restaurant-zone'),
        'section' => 'restaurant_zone_menu_items_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting( 'restaurant_zone_image_page', array(
        'default'           => '',
        'sanitize_callback' => 'restaurant_zone_sanitize_dropdown_pages'
    ) );
    $wp_customize->add_control( 'restaurant_zone_image_page', array(
        'label'    => __( 'Select Page', 'restaurant-zone' ),
        'description' => __('Image Size 575 x 415','restaurant-zone'),
        'section'  => 'restaurant_zone_menu_items_section',
        'type'     => 'dropdown-pages'
    ) );

    $categories = get_categories();
    $cat_post = array();
    $cat_post[]= 'select';
    $i = 0;
    foreach($categories as $category){
        if($i==0){
            $default = $category->slug;
            $i++;
        }
        $cat_post[$category->slug] = $category->name;
    }

    $wp_customize->add_setting('restaurant_zone_menu_items',array(
        'default'   => 'select',
        'sanitize_callback' => 'restaurant_zone_sanitize_choices',
    ));
    $wp_customize->add_control('restaurant_zone_menu_items',array(
        'type'    => 'select',
        'choices' => $cat_post,
        'label' => __('Select Category to display Popular Item','restaurant-zone'),
        'description' => __('Image Size 110 x 110','restaurant-zone'),
        'section' => 'restaurant_zone_menu_items_section',
    ));

    // Pro Version
    $wp_customize->add_setting( 'pro_version_services_setting', array(
        'sanitize_callback' => 'Restaurant_Zone_sanitize_custom_control'
    ));
    $wp_customize->add_control( new Restaurant_Zone_Customize_Pro_Version ( $wp_customize,'pro_version_services_setting', array(
        'section'     => 'restaurant_zone_menu_items_section',
        'type'        => 'pro_options',
        'label'       => esc_html__( 'Customizer Options', 'restaurant-zone' ),
        'description' => esc_url( RESTAURANT_ZONE_URL ),
        'priority'    => 100
    )));


    // Footer
    $wp_customize->add_section('restaurant_zone_site_footer_section', array(
        'title' => esc_html__('Footer', 'restaurant-zone'),
    ));

    $wp_customize->add_setting('restaurant_zone_footer_text_setting', array(
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('restaurant_zone_footer_text_setting', array(
        'label' => __('Replace the footer text', 'restaurant-zone'),
        'section' => 'restaurant_zone_site_footer_section',
        'priority' => 1,
        'type' => 'text',
    ));

    $wp_customize->add_setting('restaurant_zone_show_hide_copyright',array(
        'default' => true,
        'sanitize_callback' => 'restaurant_zone_sanitize_checkbox'
    ));
    $wp_customize->add_control('restaurant_zone_show_hide_copyright',array(
        'type' => 'checkbox',
        'label' => __('Show / Hide Copyright','restaurant-zone'),
        'section' => 'restaurant_zone_site_footer_section',
    ));

     // Pro Version
    $wp_customize->add_setting( 'pro_version_footer_setting', array(
        'sanitize_callback' => 'Restaurant_Zone_sanitize_custom_control'
    ));
    $wp_customize->add_control( new Restaurant_Zone_Customize_Pro_Version ( $wp_customize,'pro_version_footer_setting', array(
        'section'     => 'restaurant_zone_site_footer_section',
        'type'        => 'pro_options',
        'label'       => esc_html__( 'Customizer Options', 'restaurant-zone' ),
        'description' => esc_url( RESTAURANT_ZONE_URL ),
        'priority'    => 100
    )));
}
add_action('customize_register', 'restaurant_zone_customize_register');

/*
** Load dynamic logic for the customizer controls area.
*/
function restaurant_zone_panels_js() {
    wp_enqueue_style( 'restaurant-zone-customizer-layout-css', get_theme_file_uri( '/assets/css/customizer-layout.css' ) );
    wp_enqueue_script( 'restaurant-zone-customize-layout', get_theme_file_uri( '/assets/js/customize-layout.js' ), array(), '1.2', true );
}
add_action( 'customize_controls_enqueue_scripts', 'restaurant_zone_panels_js' );
