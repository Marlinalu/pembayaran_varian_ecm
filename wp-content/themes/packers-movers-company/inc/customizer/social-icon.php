<?php
/**
* Social Options.
*
* @package Packers Movers Company
*/

$packers_movers_company_default = packers_movers_company_get_default_theme_options();

// Social Section.
$wp_customize->add_section( 'social_icon_setting',
	array(
	'title'      => esc_html__( 'Social Settings', 'packers-movers-company' ),
	'priority'   => 10,
	'capability' => 'edit_theme_options',
	'panel'      => 'theme_option_panel',
	)
);

$wp_customize->add_setting( 'packers_movers_company_header_layout_social_facebook_link',
    array(
    'default'           => $packers_movers_company_default['packers_movers_company_header_layout_social_facebook_link'],
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'esc_url_raw',
    )
);
$wp_customize->add_control( 'packers_movers_company_header_layout_social_facebook_link',
    array(
    'label'    => esc_html__( 'Facebook Link', 'packers-movers-company' ),
    'section'  => 'social_icon_setting',
    'type'     => 'url',
    )
);

$wp_customize->add_setting( 'packers_movers_company_header_layout_social_twitter_link',
    array(
    'default'           => $packers_movers_company_default['packers_movers_company_header_layout_social_twitter_link'],
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'esc_url_raw',
    )
);
$wp_customize->add_control( 'packers_movers_company_header_layout_social_twitter_link',
    array(
    'label'    => esc_html__( 'Twitter Link', 'packers-movers-company' ),
    'section'  => 'social_icon_setting',
    'type'     => 'url',
    )
);

$wp_customize->add_setting( 'packers_movers_company_header_layout_social_instagram_link',
    array(
    'default'           => $packers_movers_company_default['packers_movers_company_header_layout_social_instagram_link'],
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'esc_url_raw',
    )
);
$wp_customize->add_control( 'packers_movers_company_header_layout_social_instagram_link',
    array(
    'label'    => esc_html__( 'Instagram Link', 'packers-movers-company' ),
    'section'  => 'social_icon_setting',
    'type'     => 'url',
    )
);

$wp_customize->add_setting( 'packers_movers_company_header_layout_social_linkdin_link',
    array(
    'default'           => $packers_movers_company_default['packers_movers_company_header_layout_social_linkdin_link'],
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'esc_url_raw',
    )
);
$wp_customize->add_control( 'packers_movers_company_header_layout_social_linkdin_link',
    array(
    'label'    => esc_html__( 'Linkedin Link', 'packers-movers-company' ),
    'section'  => 'social_icon_setting',
    'type'     => 'url',
    )
);

$wp_customize->add_setting( 'packers_movers_company_header_layout_social_watsapp_link',
    array(
    'default'           => $packers_movers_company_default['packers_movers_company_header_layout_social_watsapp_link'],
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'esc_url_raw',
    )
);
$wp_customize->add_control( 'packers_movers_company_header_layout_social_watsapp_link',
    array(
    'label'    => esc_html__( 'Watsapp Link', 'packers-movers-company' ),
    'section'  => 'social_icon_setting',
    'type'     => 'url',
    )
);