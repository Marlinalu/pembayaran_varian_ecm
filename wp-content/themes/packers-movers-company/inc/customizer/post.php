<?php
/**
* Posts Settings.
*
* @package Packers Movers Company
*/

$packers_movers_company_default = packers_movers_company_get_default_theme_options();

// Single Post Section.
$wp_customize->add_section( 'posts_settings',
	array(
	'title'      => esc_html__( 'Metainformation Settings', 'packers-movers-company' ),
	'priority'   => 35,
	'capability' => 'edit_theme_options',
	'panel'      => 'theme_option_panel',
	)
);

$wp_customize->add_setting('packers_movers_company_post_author',
    array(
        'default' => $packers_movers_company_default['packers_movers_company_post_author'],
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'packers_movers_company_sanitize_checkbox',
    )
);
$wp_customize->add_control('packers_movers_company_post_author',
    array(
        'label' => esc_html__('Enable Posts Author', 'packers-movers-company'),
        'section' => 'posts_settings',
        'type' => 'checkbox',
    )
);

$wp_customize->add_setting('packers_movers_company_post_date',
    array(
        'default' => $packers_movers_company_default['packers_movers_company_post_date'],
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'packers_movers_company_sanitize_checkbox',
    )
);
$wp_customize->add_control('packers_movers_company_post_date',
    array(
        'label' => esc_html__('Enable Posts Date', 'packers-movers-company'),
        'section' => 'posts_settings',
        'type' => 'checkbox',
    )
);

$wp_customize->add_setting('packers_movers_company_post_category',
    array(
        'default' => $packers_movers_company_default['packers_movers_company_post_category'],
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'packers_movers_company_sanitize_checkbox',
    )
);
$wp_customize->add_control('packers_movers_company_post_category',
    array(
        'label' => esc_html__('Enable Posts Category', 'packers-movers-company'),
        'section' => 'posts_settings',
        'type' => 'checkbox',
    )
);

$wp_customize->add_setting('packers_movers_company_post_tags',
    array(
        'default' => $packers_movers_company_default['packers_movers_company_post_tags'],
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'packers_movers_company_sanitize_checkbox',
    )
);
$wp_customize->add_control('packers_movers_company_post_tags',
    array(
        'label' => esc_html__('Enable Posts Tags', 'packers-movers-company'),
        'section' => 'posts_settings',
        'type' => 'checkbox',
    )
);