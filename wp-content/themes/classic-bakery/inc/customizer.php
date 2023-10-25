<?php
/**
 * Classic Bakery Theme Customizer
 *
 * @package Classic Bakery
 */

get_template_part('/inc/select/category-dropdown-custom-control');

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function classic_bakery_customize_register( $wp_customize ) {

	function classic_bakery_sanitize_dropdown_pages( $page_id, $setting ) {
  		$page_id = absint( $page_id );
  		return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
	}

	function classic_bakery_sanitize_checkbox( $checked ) {
		// Boolean check.
		return ( ( isset( $checked ) && true == $checked ) ? true : false );
	}

	wp_enqueue_style('classic-bakery-customize-controls', trailingslashit(esc_url(get_template_directory_uri())).'/css/customize-controls.css');

	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';

	//Logo
    $wp_customize->add_setting('classic_bakery_logo_width',array(
		'default'=> '',
		'transport' => 'refresh',
		'sanitize_callback' => 'classic_bakery_sanitize_integer'
	));
	$wp_customize->add_control(new Classic_Bakery_Slider_Custom_Control( $wp_customize, 'classic_bakery_logo_width',array(
		'label'	=> esc_html__('Logo Width','classic-bakery'),
		'section'=> 'title_tagline',
		'settings'=>'classic_bakery_logo_width',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 100,
        ),
	)));

	$wp_customize->add_setting('classic_bakery_title_enable',array(
		'default' => true,
		'sanitize_callback' => 'classic_bakery_sanitize_checkbox',
	));
	$wp_customize->add_control( 'classic_bakery_title_enable', array(
	   'settings' => 'classic_bakery_title_enable',
	   'section'   => 'title_tagline',
	   'label'     => __('Enable Site Title','classic-bakery'),
	   'type'      => 'checkbox'
	));

	// site title color
	$wp_customize->add_setting('classic_bakery_sitetitle_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'classic_bakery_sitetitle_color', array(
	   'settings' => 'classic_bakery_sitetitle_color',
	   'section'   => 'title_tagline',
	   'label' => __('Site Title Color', 'classic-bakery'),
	   'type'      => 'color'
	));

	$wp_customize->add_setting('classic_bakery_tagline_enable',array(
		'default' => false,
		'sanitize_callback' => 'classic_bakery_sanitize_checkbox',
	));
	$wp_customize->add_control( 'classic_bakery_tagline_enable', array(
	   'settings' => 'classic_bakery_tagline_enable',
	   'section'   => 'title_tagline',
	   'label'     => __('Enable Site Tagline','classic-bakery'),
	   'type'      => 'checkbox'
	));

	// site tagline color
	$wp_customize->add_setting('classic_bakery_sitetagline_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'classic_bakery_sitetagline_color', array(
	   'settings' => 'classic_bakery_sitetagline_color',
	   'section'   => 'title_tagline',
	   'label' => __('Site Tagline Color', 'classic-bakery'),
	   'type'      => 'color'
	));

	//Theme Options
	$wp_customize->add_panel( 'classic_bakery_panel_area', array(
		'priority' => 10,
		'capability' => 'edit_theme_options',
		'title' => __( 'Theme Options Panel', 'classic-bakery' ),
	) );

	// Header Section
	$wp_customize->add_section('classic_bakery_header_section', array(
        'title' => __('Manage Header Section', 'classic-bakery'),
		'description' => __('<p class="sec-title">Manage Header Section</p>','classic-bakery'),
        'priority' => null,
		'panel' => 'classic_bakery_panel_area',
 	));

	$wp_customize->add_setting('classic_bakery_preloader',array(
		'default' => true,
		'sanitize_callback' => 'classic_bakery_sanitize_checkbox',
	));

	$wp_customize->add_control( 'classic_bakery_preloader', array(
	   'section'   => 'classic_bakery_header_section',
	   'label'	=> __('Check to Show preloader','classic-bakery'),
	   'type'      => 'checkbox'
 	));

	$wp_customize->add_setting('classic_bakery_shop_text',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'classic_bakery_shop_text', array(
	   'settings' => 'classic_bakery_shop_text',
	   'section'   => 'classic_bakery_header_section',
	   'label' => __('Button Text', 'classic-bakery'),
	   'type'      => 'text'
	));

	$wp_customize->add_setting('classic_bakery_shop_link',array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'classic_bakery_shop_link', array(
	   'settings' => 'classic_bakery_shop_link',
	   'section'   => 'classic_bakery_header_section',
	   'label' => __('Button Link', 'classic-bakery'),
	   'type'      => 'url'
	));

	// Header button color
	$wp_customize->add_setting('classic_bakery_header_button_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'classic_bakery_header_button_color', array(
	   'settings' => 'classic_bakery_header_button_color',
	   'section'   => 'classic_bakery_header_section',
	   'label' => __(' Button Color', 'classic-bakery'),
	   'type'      => 'color'
	));

	// Header buttonborder color
	$wp_customize->add_setting('classic_bakery_header_buttonborder_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'classic_bakery_header_buttonborder_color', array(
	   'settings' => 'classic_bakery_header_buttonborder_color',
	   'section'   => 'classic_bakery_header_section',
	   'label' => __(' Button Border Color', 'classic-bakery'),
	   'type'      => 'color'
	));

	// Header buttontext color
	$wp_customize->add_setting('classic_bakery_header_buttontext_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'classic_bakery_header_buttontext_color', array(
	   'settings' => 'classic_bakery_header_buttontext_color',
	   'section'   => 'classic_bakery_header_section',
	   'label' => __(' Button Text Color', 'classic-bakery'),
	   'type'      => 'color'
	));

	// Header buttonhover color
	$wp_customize->add_setting('classic_bakery_header_buttonhover_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'classic_bakery_header_buttonhover_color', array(
	   'settings' => 'classic_bakery_header_buttonhover_color',
	   'section'   => 'classic_bakery_header_section',
	   'label' => __(' Button Hover Color', 'classic-bakery'),
	   'type'      => 'color'
	));

	// Header icon color
	$wp_customize->add_setting('classic_bakery_header_icon_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'classic_bakery_header_icon_color', array(
	   'settings' => 'classic_bakery_header_icon_color',
	   'section'   => 'classic_bakery_header_section',
	   'label' => __(' Icon Color', 'classic-bakery'),
	   'type'      => 'color'
	));

	// Header iconborder color
	$wp_customize->add_setting('classic_bakery_header_iconborder_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'classic_bakery_header_iconborder_color', array(
	   'settings' => 'classic_bakery_header_iconborder_color',
	   'section'   => 'classic_bakery_header_section',
	   'label' => __(' Icon Border Color', 'classic-bakery'),
	   'type'      => 'color'
	));

	// Header iconhover color
	$wp_customize->add_setting('classic_bakery_header_iconhover_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'classic_bakery_header_iconhover_color', array(
	   'settings' => 'classic_bakery_header_iconhover_color',
	   'section'   => 'classic_bakery_header_section',
	   'label' => __(' Icon Hover Color', 'classic-bakery'),
	   'type'      => 'color'
	));

	// Header iconhoverbg color
	$wp_customize->add_setting('classic_bakery_header_iconhoverbg_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'classic_bakery_header_iconhoverbg_color', array(
	   'settings' => 'classic_bakery_header_iconhoverbg_color',
	   'section'   => 'classic_bakery_header_section',
	   'label' => __(' Icon Hover BG Color', 'classic-bakery'),
	   'type'      => 'color'
	));

	// Header iconhoverbg color
	$wp_customize->add_setting('classic_bakery_header_iconhoverbg_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'classic_bakery_header_iconhoverbg_color', array(
	   'settings' => 'classic_bakery_header_iconhoverbg_color',
	   'section'   => 'classic_bakery_header_section',
	   'label' => __(' Icon Hover BG Color', 'classic-bakery'),
	   'type'      => 'color'
	));

	// Header menus color
	$wp_customize->add_setting('classic_bakery_header_menus_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'classic_bakery_header_menus_color', array(
	   'settings' => 'classic_bakery_header_menus_color',
	   'section'   => 'classic_bakery_header_section',
	   'label' => __(' Menus Color', 'classic-bakery'),
	   'type'      => 'color'
	));

	// Header menushover color
	$wp_customize->add_setting('classic_bakery_header_menushover_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'classic_bakery_header_menushover_color', array(
	   'settings' => 'classic_bakery_header_menushover_color',
	   'section'   => 'classic_bakery_header_section',
	   'label' => __(' Menus Hover Color', 'classic-bakery'),
	   'type'      => 'color'
	));

	// Header submenus color
	$wp_customize->add_setting('classic_bakery_header_submenus_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'classic_bakery_header_submenus_color', array(
	   'settings' => 'classic_bakery_header_submenus_color',
	   'section'   => 'classic_bakery_header_section',
	   'label' => __(' SubMenus Color', 'classic-bakery'),
	   'type'      => 'color'
	));

	// Header submenushover color
	$wp_customize->add_setting('classic_bakery_header_submenushover_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'classic_bakery_header_submenushover_color', array(
	   'settings' => 'classic_bakery_header_submenushover_color',
	   'section'   => 'classic_bakery_header_section',
	   'label' => __(' SubMenus Hover Color', 'classic-bakery'),
	   'type'      => 'color'
	));

	// Header submenusbg color
	$wp_customize->add_setting('classic_bakery_header_submenusbg_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'classic_bakery_header_submenusbg_color', array(
	   'settings' => 'classic_bakery_header_submenusbg_color',
	   'section'   => 'classic_bakery_header_section',
	   'label' => __(' SubMenus BG Color', 'classic-bakery'),
	   'type'      => 'color'
	));

	// Header submenusborder color
	$wp_customize->add_setting('classic_bakery_header_submenusborder_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'classic_bakery_header_submenusborder_color', array(
	   'settings' => 'classic_bakery_header_submenusborder_color',
	   'section'   => 'classic_bakery_header_section',
	   'label' => __(' SubMenus Border Color', 'classic-bakery'),
	   'type'      => 'color'
	));

	// Header searchborder color
	$wp_customize->add_setting('classic_bakery_header_searchborder_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'classic_bakery_header_searchborder_color', array(
	   'settings' => 'classic_bakery_header_searchborder_color',
	   'section'   => 'classic_bakery_header_section',
	   'label' => __(' Search Border Color', 'classic-bakery'),
	   'type'      => 'color'
	));

	// Header scrollborder color
	$wp_customize->add_setting('classic_bakery_header_scrollborder_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'classic_bakery_header_scrollborder_color', array(
	   'settings' => 'classic_bakery_header_scrollborder_color',
	   'section'   => 'classic_bakery_header_section',
	   'label' => __(' Scroll Border Color', 'classic-bakery'),
	   'type'      => 'color'
	));

	// Social media Section
	$wp_customize->add_section('classic_bakery_links_section', array(
        'title' => __('Manage Social media Section', 'classic-bakery'),
		'description' => __('<p class="sec-title">Manage Social media Section</p>','classic-bakery'),
        'priority' => null,
		'panel' => 'classic_bakery_panel_area',
 	));

	$wp_customize->add_setting('classic_bakery_fb_link',array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'classic_bakery_fb_link', array(
	   'settings' => 'classic_bakery_fb_link',
	   'section'   => 'classic_bakery_links_section',
	   'label' => __('Facebook Link', 'classic-bakery'),
	   'type'      => 'url'
	));

	$wp_customize->add_setting('classic_bakery_twitt_link',array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'classic_bakery_twitt_link', array(
	   'settings' => 'classic_bakery_twitt_link',
	   'section'   => 'classic_bakery_links_section',
	   'label' => __('Twitter Link', 'classic-bakery'),
	   'type'      => 'url'
	));

	$wp_customize->add_setting('classic_bakery_insta_link',array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'classic_bakery_insta_link', array(
	   'settings' => 'classic_bakery_insta_link',
	   'section'   => 'classic_bakery_links_section',
	   'label' => __('Instagram Link', 'classic-bakery'),
	   'type'      => 'url'
	));

	// Home Category Dropdown Section
	$wp_customize->add_section('classic_bakery_one_cols_section',array(
		'title'	=> __('Manage Slider Section','classic-bakery'),
		'description'	=> __('<p class="sec-title">Manage Slider Section</p> Select Category from the Dropdowns for slider, Also use the given image dimension (1200 x 450).','classic-bakery'),
		'priority'	=> null,
		'panel' => 'classic_bakery_panel_area'
	));

	$wp_customize->add_setting( 'classic_bakery_slidersection', array(
		'default'	=> '0',
		'sanitize_callback'	=> 'absint'
	) );
	$wp_customize->add_control( new Classic_Bakery_Category_Dropdown_Custom_Control( $wp_customize, 'classic_bakery_slidersection', array(
		'section' => 'classic_bakery_one_cols_section',
		'label' => __('Select the post category to show slider', 'classic-bakery'),
		'settings'   => 'classic_bakery_slidersection',
	) ) );

	$wp_customize->add_setting('classic_bakery_hide_categorysec',array(
		'default' => false,
		'sanitize_callback' => 'classic_bakery_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'classic_bakery_hide_categorysec', array(
	   'settings' => 'classic_bakery_hide_categorysec',
	   'section'   => 'classic_bakery_one_cols_section',
	   'label'     => __('Check To Enable This Section','classic-bakery'),
	   'type'      => 'checkbox'
	));


	$wp_customize->add_setting('classic_bakery_button_text',array(
		'default' => 'Shop',
		'sanitize_callback' => 'sanitize_text_field',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'classic_bakery_button_text', array(
	   'settings' => 'classic_bakery_button_text',
	   'section'   => 'classic_bakery_one_cols_section',
	   'label' => __('Add Button Text', 'classic-bakery'),
	   'type'      => 'text'
	));

	// slider button color
	$wp_customize->add_setting('classic_bakery_slider_button_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'classic_bakery_slider_button_color', array(
	   'settings' => 'classic_bakery_slider_button_color',
	   'section'   => 'classic_bakery_one_cols_section',
	   'label' => __(' Button Color', 'classic-bakery'),
	   'type'      => 'color'
	));

	// slider buttontext color
	$wp_customize->add_setting('classic_bakery_slider_buttontext_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'classic_bakery_slider_buttontext_color', array(
	   'settings' => 'classic_bakery_slider_buttontext_color',
	   'section'   => 'classic_bakery_one_cols_section',
	   'label' => __(' Button Text Color', 'classic-bakery'),
	   'type'      => 'color'
	));

	// slider buttonhover color
	$wp_customize->add_setting('classic_bakery_slider_buttonhover_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'classic_bakery_slider_buttonhover_color', array(
	   'settings' => 'classic_bakery_slider_buttonhover_color',
	   'section'   => 'classic_bakery_one_cols_section',
	   'label' => __(' Button Hover Color', 'classic-bakery'),
	   'type'      => 'color'
	));

	// slider title color
	$wp_customize->add_setting('classic_bakery_slider_title_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'classic_bakery_slider_title_color', array(
	   'settings' => 'classic_bakery_slider_title_color',
	   'section'   => 'classic_bakery_one_cols_section',
	   'label' => __(' Title Color', 'classic-bakery'),
	   'type'      => 'color'
	));

	// slider description color
	$wp_customize->add_setting('classic_bakery_slider_description_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'classic_bakery_slider_description_color', array(
	   'settings' => 'classic_bakery_slider_description_color',
	   'section'   => 'classic_bakery_one_cols_section',
	   'label' => __(' Description Color', 'classic-bakery'),
	   'type'      => 'color'
	));

	// slider arrow color
	$wp_customize->add_setting('classic_bakery_slider_arrow_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'classic_bakery_slider_arrow_color', array(
	   'settings' => 'classic_bakery_slider_arrow_color',
	   'section'   => 'classic_bakery_one_cols_section',
	   'label' => __(' Arrow Color', 'classic-bakery'),
	   'type'      => 'color'
	));

	// slider arrowhover color
	$wp_customize->add_setting('classic_bakery_slider_arrowhover_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'classic_bakery_slider_arrowhover_color', array(
	   'settings' => 'classic_bakery_slider_arrowhover_color',
	   'section'   => 'classic_bakery_one_cols_section',
	   'label' => __(' Arrow Hover Color', 'classic-bakery'),
	   'type'      => 'color'
	));

	// slider opacity
	$wp_customize->add_setting('classic_bakery_slider_opacity',array(
		'default' => '0.3',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'classic_bakery_slider_opacity', array(
	   'settings' => 'classic_bakery_slider_opacity',
	   'section'   => 'classic_bakery_one_cols_section',
	   'label' => __('Opacity', 'classic-bakery'),
	   'type'      => 'range',
	   'input_attrs' => array(
	            'min' => 0,
	            'max' => 1,
	            'step' => 0.1,
	        ),
	));


	// slider opacity color
	$wp_customize->add_setting('classic_bakery_slider_opacity_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'classic_bakery_slider_opacity_color', array(
	   'settings' => 'classic_bakery_slider_opacity_color',
	   'section'   => 'classic_bakery_one_cols_section',
	   'label' => __(' Opacity Color', 'classic-bakery'),
	   'type'      => 'color'
	));

	// category Section
	$wp_customize->add_section('classic_bakery_category', array(
		'title'	=> __('Manage Category Section','classic-bakery'),
		'description'	=> __('<p class="sec-title">Manage Category Section</p>','classic-bakery'),
		'priority'	=> null,
		'panel' => 'classic_bakery_panel_area',
	));

	// category title color
	$wp_customize->add_setting('classic_bakery_category_title_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'classic_bakery_category_title_color', array(
	   'settings' => 'classic_bakery_category_title_color',
	   'section'   => 'classic_bakery_category',
	   'label' => __(' Title  Color', 'classic-bakery'),
	   'type'      => 'color'
	));

	// category box color
	$wp_customize->add_setting('classic_bakery_category_box_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'classic_bakery_category_box_color', array(
	   'settings' => 'classic_bakery_category_box_color',
	   'section'   => 'classic_bakery_category',
	   'label' => __(' Box Color', 'classic-bakery'),
	   'type'      => 'color'
	));


	// category boxoutline color
	$wp_customize->add_setting('classic_bakery_category_boxoutline_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'classic_bakery_category_boxoutline_color', array(
	   'settings' => 'classic_bakery_category_boxoutline_color',
	   'section'   => 'classic_bakery_category',
	   'label' => __(' Box Outline  Color', 'classic-bakery'),
	   'type'      => 'color'
	));

	//Blog post
	$wp_customize->add_section('classic_bakery_blog_post_settings',array(
        'title' => __('Manage Post Section', 'classic-bakery'),
        'priority' => null,
        'panel' => 'classic_bakery_panel_area'
    ) );

   // Add Settings and Controls for Post Layout
	$wp_customize->add_setting('classic_bakery_sidebar_post_layout',array(
     'default' => 'right',
     'sanitize_callback' => 'classic_bakery_sanitize_choices'
	));
	$wp_customize->add_control('classic_bakery_sidebar_post_layout',array(
     'type' => 'radio',
     'label'     => __('Theme Post Sidebar Position', 'classic-bakery'),
     'description'   => __('This option work for blog page, blog single page, archive page and search page.', 'classic-bakery'),
     'section' => 'classic_bakery_blog_post_settings',
     'choices' => array(
         'full' => __('Full','classic-bakery'),
         'left' => __('Left','classic-bakery'),
         'right' => __('Right','classic-bakery'),
         'three-column' => __('Three Columns','classic-bakery'),
         'four-column' => __('Four Columns','classic-bakery'),
         'grid' => __('Grid Layout','classic-bakery')
     ),
	) );

	$wp_customize->add_setting('classic_bakery_blog_post_description_option',array(
    	'default'   => 'Excerpt Content', 
        'sanitize_callback' => 'classic_bakery_sanitize_choices'
	));
	$wp_customize->add_control('classic_bakery_blog_post_description_option',array(
        'type' => 'radio',
        'label' => __('Post Description Length','classic-bakery'),
        'section' => 'classic_bakery_blog_post_settings',
        'choices' => array(
            'No Content' => __('No Content','classic-bakery'),
            'Excerpt Content' => __('Excerpt Content','classic-bakery'),
            'Full Content' => __('Full Content','classic-bakery'),
        ),
	) );

	// Footer Section
	$wp_customize->add_section('classic_bakery_footer', array(
		'title'	=> __('Manage Footer Section','classic-bakery'),
		'description'	=> __('<p class="sec-title">Manage Footer Section</p>','classic-bakery'),
		'priority'	=> null,
		'panel' => 'classic_bakery_panel_area',
	));

	$wp_customize->add_setting('classic_bakery_copyright_line',array(
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control( 'classic_bakery_copyright_line', array(
	   'section' 	=> 'classic_bakery_footer',
	   'label'	 	=> __('Copyright Line','classic-bakery'),
	   'type'    	=> 'text',
	   'priority' 	=> null,
    ));

	// footer copyright text color
	$wp_customize->add_setting('classic_bakery_footer_copyrighttext_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'classic_bakery_footer_copyrighttext_color', array(
	   'settings' => 'classic_bakery_footer_copyrighttext_color',
	   'section'   => 'classic_bakery_footer',
	   'label' => __(' Copyright Text Color', 'classic-bakery'),
	   'type'      => 'color'
	));

	// footer bg color
	$wp_customize->add_setting('classic_bakery_footer_bg_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'classic_bakery_footer_bg_color', array(
	   'settings' => 'classic_bakery_footer_bg_color',
	   'section'   => 'classic_bakery_footer',
	   'label' => __(' BG Color', 'classic-bakery'),
	   'type'      => 'color'
	));

	// footer icon color
	$wp_customize->add_setting('classic_bakery_footer_icon_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'classic_bakery_footer_icon_color', array(
	   'settings' => 'classic_bakery_footer_icon_color',
	   'section'   => 'classic_bakery_footer',
	   'label' => __(' Icon Color', 'classic-bakery'),
	   'type'      => 'color'
	));

	// footer iconborder color
	$wp_customize->add_setting('classic_bakery_footer_iconborder_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'classic_bakery_footer_iconborder_color', array(
	   'settings' => 'classic_bakery_footer_iconborder_color',
	   'section'   => 'classic_bakery_footer',
	   'label' => __(' Icon Border Color', 'classic-bakery'),
	   'type'      => 'color'
	));

	// footer iconhover color
	$wp_customize->add_setting('classic_bakery_footer_iconhover_color',array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'classic_bakery_footer_iconhover_color', array(
	   'settings' => 'classic_bakery_footer_iconhover_color',
	   'section'   => 'classic_bakery_footer',
	   'label' => __(' Icon Hover Color', 'classic-bakery'),
	   'type'      => 'color'
	));

	$wp_customize->add_setting('classic_bakery_scroll_hide', array(
        'default' => false,
        'sanitize_callback' => 'classic_bakery_sanitize_checkbox'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'classic_bakery_scroll_hide',array(
        'label'          => __( 'Check To Show Scroll To Top', 'classic-bakery' ),
        'section'        => 'classic_bakery_footer',
        'settings'       => 'classic_bakery_scroll_hide',
        'type'           => 'checkbox',
    )));

	// Color
    $wp_customize->add_setting('classic_bakery_color_scheme_one',array(
		'default' => ' ',
		'sanitize_callback' => 'sanitize_hex_color',
	));
    $wp_customize->add_control(
	    new WP_Customize_Color_Control(
	    $wp_customize,
	    'classic_bakery_color_scheme_one',
	    array(
	        'label'      => __( 'Color Scheme', 'classic-bakery' ),
	        'section'    => 'colors',
	        'settings'   => 'classic_bakery_color_scheme_one',
	    ) )
	);

    // Google Fonts
    $wp_customize->add_section( 'classic_bakery_google_fonts_section', array(
		'title'       => __( 'Google Fonts', 'classic-bakery' ),
		'priority'       => 24,
	) );

	$font_choices = array(
		'' => 'select',
		'Arvo:400,700,400italic,700italic' => 'Arvo',
		'Abril Fatface' => 'Abril Fatface',
		'Acme' => 'Acme',
		'Anton' => 'Anton',
		'Arimo:400,700,400italic,700italic' => 'Arimo',
		'Architects Daughter' => 'Architects Daughter',
		'Arsenal' => 'Arsenal',
		'Alegreya' => 'Alegreya',
		'Alfa Slab One' => 'Alfa Slab One',
		'Averia Serif Libre' => 'Averia Serif Libre',
		'Bitter:400,700,400italic' => 'Bitter',
		'Bangers' => 'Bangers',
		'Boogaloo' => 'Boogaloo',
		'Bad Script' => 'Bad Script',
		'Bree Serif' => 'Bree Serif',
		'BenchNine' => 'BenchNine',
		'Cabin:400,700,400italic' => 'Cabin',
		'Cardo' => 'Cardo',
		'Courgette' => 'Courgette',
		'Cherry Swash' => 'Cherry Swash',
		'Cormorant Garamond' => 'Cormorant Garamond',
		'Crimson Text' => 'Crimson Text',
		'Cuprum' => 'Cuprum',
		'Cookie' => 'Cookie',
		'Chewy' => 'Chewy',
		'Droid Serif:400,700,400italic,700italic' => 'Droid Serif',
		'Droid Sans:400,700' => 'Droid Sans',
		'Days One' => 'Days One',
		'Dosis' => 'Dosis',
		'Emilys Candy:' => 'Emilys Candy',
		'Economica' => 'Economica',
		'Fjalla One:400' => 'Fjalla One',
		'Francois One:400' => 'Francois One',
		'Fredoka One' => 'Fredoka One',
		'Frank Ruhl Libre' => 'Frank Ruhl Libre',
		'Gloria Hallelujah' => 'Gloria Hallelujah',
		'Great Vibes' => 'Great Vibes',
		'Josefin Sans:400,300,600,700' => 'Josefin Sans',
		'Libre Baskerville:400,400italic,700' => 'Libre Baskerville',
		'Lora:400,700,400italic,700italic' => 'Lora',
		'Lato:400,700,400italic,700italic' => 'Lato',
		'Merriweather:400,300italic,300,400italic,700,700italic' => 'Merriweather',
		'Montserrat:400,700' => 'Montserrat',
		'Oxygen:400,300,700' => 'Oxygen',
		'Open Sans Condensed:700,300italic,300' => 'Open Sans Condensed',
		'Open Sans:400italic,700italic,400,700' => 'Open Sans',
		'Oswald:400,700' => 'Oswald',
		'PT Serif:400,700' => 'PT Serif',
		'PT Sans:400,700,400italic,700italic' => 'PT Sans',
		'PT Sans Narrow:400,700' => 'PT Sans Narrow',
		'Playfair Display:400,700,400italic' => 'Playfair Display',
		'Poppins:0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900' => 'Poppins',
		'Roboto:400,400italic,700,700italic' => 'Roboto',
		'Roboto Condensed:400italic,700italic,400,700' => 'Roboto Condensed',
		'Roboto Slab:400,700' => 'Roboto Slab',
		'Rokkitt:400' => 'Rokkitt',
		'Raleway:400,700' => 'Raleway',
		'Source Sans Pro:400,700,400italic,700italic' => 'Source Sans Pro',
		'Ubuntu:400,700,400italic,700italic' => 'Ubuntu',
		'Yanone Kaffeesatz:400,700' => 'Yanone Kaffeesatz',
	);

	$wp_customize->add_setting( 'classic_bakery_headings_fonts', array(
		'sanitize_callback' => 'classic_bakery_sanitize_fonts',
	));
	$wp_customize->add_control( 'classic_bakery_headings_fonts', array(
		'type' => 'select',
		'description' => __('Select your desired font for the headings.', 'classic-bakery'),
		'section' => 'classic_bakery_google_fonts_section',
		'choices' => $font_choices
	));

	$wp_customize->add_setting( 'classic_bakery_body_fonts', array(
		'sanitize_callback' => 'classic_bakery_sanitize_fonts'
	));
	$wp_customize->add_control( 'classic_bakery_body_fonts', array(
		'type' => 'select',
		'description' => __( 'Select your desired font for the body.', 'classic-bakery' ),
		'section' => 'classic_bakery_google_fonts_section',
		'choices' => $font_choices
	));
}
add_action( 'customize_register', 'classic_bakery_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function classic_bakery_customize_preview_js() {
	wp_enqueue_script( 'classic_bakery_customizer', esc_url(get_template_directory_uri()) . '/js/customize-preview.js', array( 'customize-preview' ), '20161510', true );
}
add_action( 'customize_preview_init', 'classic_bakery_customize_preview_js' );
