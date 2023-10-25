<?php
/**
* Header Options.
*
* @package Packers Movers Company
*/

$packers_movers_company_default = packers_movers_company_get_default_theme_options();

// Header Section.
$wp_customize->add_section( 'button_header_setting',
	array(
	'title'      => esc_html__( 'Header Settings', 'packers-movers-company' ),
	'priority'   => 10,
	'capability' => 'edit_theme_options',
	'panel'      => 'theme_option_panel',
	)
);

$wp_customize->add_setting( 'packers_movers_company_header_layout_topbar_text',
    array(
    'default'           => $packers_movers_company_default['packers_movers_company_header_layout_topbar_text'],
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control( 'packers_movers_company_header_layout_topbar_text',
    array(
    'label'    => esc_html__( 'Header Text', 'packers-movers-company' ),
    'section'  => 'button_header_setting',
    'type'     => 'text',
    )
);


$wp_customize->add_setting( 'packers_movers_company_header_layout_button_text',
    array(
    'default'           => $packers_movers_company_default['packers_movers_company_header_layout_button_text'],
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control( 'packers_movers_company_header_layout_button_text',
    array(
    'label'    => esc_html__( 'Header Button Text', 'packers-movers-company' ),
    'section'  => 'button_header_setting',
    'type'     => 'text',
    )
);

$wp_customize->add_setting( 'packers_movers_company_header_layout_button_link',
    array(
    'default'           => $packers_movers_company_default['packers_movers_company_header_layout_button_link'],
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'esc_url_raw',
    )
);
$wp_customize->add_control( 'packers_movers_company_header_layout_button_link',
    array(
    'label'    => esc_html__( 'Header Button Link', 'packers-movers-company' ),
    'section'  => 'button_header_setting',
    'type'     => 'url',
    )
);

$wp_customize->add_setting( 'packers_movers_company_header_layout_location_address_text',
    array(
    'default'           => $packers_movers_company_default['packers_movers_company_header_layout_location_address_text'],
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control( 'packers_movers_company_header_layout_location_address_text',
    array(
    'label'    => esc_html__( 'Header Location Text', 'packers-movers-company' ),
    'section'  => 'button_header_setting',
    'type'     => 'text',
    )
);

$wp_customize->add_setting( 'packers_movers_company_header_layout_location_address',
    array(
    'default'           => $packers_movers_company_default['packers_movers_company_header_layout_location_address'],
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control( 'packers_movers_company_header_layout_location_address',
    array(
    'label'    => esc_html__( 'Header Location', 'packers-movers-company' ),
    'section'  => 'button_header_setting',
    'type'     => 'text',
    )
);

$wp_customize->add_setting( 'packers_movers_company_header_layout_email_address_text',
    array(
    'default'           => $packers_movers_company_default['packers_movers_company_header_layout_email_address_text'],
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control( 'packers_movers_company_header_layout_email_address_text',
    array(
    'label'    => esc_html__( 'Header Email Text', 'packers-movers-company' ),
    'section'  => 'button_header_setting',
    'type'     => 'text',
    )
);

$wp_customize->add_setting( 'packers_movers_company_header_layout_email_address',
    array(
    'default'           => $packers_movers_company_default['packers_movers_company_header_layout_email_address'],
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control( 'packers_movers_company_header_layout_email_address',
    array(
    'label'    => esc_html__( 'Header Email Address', 'packers-movers-company' ),
    'section'  => 'button_header_setting',
    'type'     => 'text',
    )
);

$wp_customize->add_setting( 'packers_movers_company_header_layout_working_hour_text',
    array(
    'default'           => $packers_movers_company_default['packers_movers_company_header_layout_working_hour_text'],
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control( 'packers_movers_company_header_layout_working_hour_text',
    array(
    'label'    => esc_html__( 'Header Working Hr Text', 'packers-movers-company' ),
    'section'  => 'button_header_setting',
    'type'     => 'text',
    )
);

$wp_customize->add_setting( 'packers_movers_company_header_layout_working_hour',
    array(
    'default'           => $packers_movers_company_default['packers_movers_company_header_layout_working_hour'],
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control( 'packers_movers_company_header_layout_working_hour',
    array(
    'label'    => esc_html__( 'Header Working Hr Text', 'packers-movers-company' ),
    'section'  => 'button_header_setting',
    'type'     => 'text',
    )
);

$wp_customize->add_setting( 'packers_movers_company_header_layout_phone_number_text',
    array(
    'default'           => $packers_movers_company_default['packers_movers_company_header_layout_phone_number_text'],
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control( 'packers_movers_company_header_layout_phone_number_text',
    array(
    'label'    => esc_html__( 'Header Phone Number Text', 'packers-movers-company' ),
    'section'  => 'button_header_setting',
    'type'     => 'text',
    )
);

$wp_customize->add_setting( 'packers_movers_company_header_layout_phone_number',
    array(
    'default'           => $packers_movers_company_default['packers_movers_company_header_layout_phone_number'],
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control( 'packers_movers_company_header_layout_phone_number',
    array(
    'label'    => esc_html__( 'Header Phone Number', 'packers-movers-company' ),
    'section'  => 'button_header_setting',
    'type'     => 'text',
    )
);