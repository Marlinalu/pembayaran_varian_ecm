<?php
/**
* Header Banner Options.
*
* @package Packers Movers Company
*/

$packers_movers_company_default = packers_movers_company_get_default_theme_options();
$packers_movers_company_post_category_list = packers_movers_company_post_category_list();

$wp_customize->add_section( 'header_banner_setting',
    array(
    'title'      => esc_html__( 'Slider Settings', 'packers-movers-company' ),
    'priority'   => 10,
    'capability' => 'edit_theme_options',
    'panel'      => 'theme_home_pannel',
    )
);

$wp_customize->add_setting('packers_movers_company_header_banner',
    array(
        'default' => $packers_movers_company_default['packers_movers_company_header_banner'],
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'packers_movers_company_sanitize_checkbox',
    )
);
$wp_customize->add_control('packers_movers_company_header_banner',
    array(
        'label' => esc_html__('Enable Slider', 'packers-movers-company'),
        'section' => 'header_banner_setting',
        'type' => 'checkbox',
    )
);

$wp_customize->add_setting( 'packers_movers_company_header_banner_cat',
    array(
    'default'           => '',
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'packers_movers_company_sanitize_select',
    )
);
$wp_customize->add_control( 'packers_movers_company_header_banner_cat',
    array(
    'label'       => esc_html__( 'Slider Post Category', 'packers-movers-company' ),
    'section'     => 'header_banner_setting',
    'type'        => 'select',
    'choices'     => $packers_movers_company_post_category_list,
    )
);

$wp_customize->add_section( 'header_category_setting',
    array(
    'title'      => esc_html__( 'Our Services Settings', 'packers-movers-company' ),
    'priority'   => 10,
    'capability' => 'edit_theme_options',
    'panel'      => 'theme_home_pannel',
    )
);

$wp_customize->add_setting('packers_movers_company_services',
    array(
        'default' => $packers_movers_company_default['packers_movers_company_services'],
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'packers_movers_company_sanitize_checkbox',
    )
);
$wp_customize->add_control('packers_movers_company_services',
    array(
        'label' => esc_html__('Enable Category Section', 'packers-movers-company'),
        'section' => 'header_category_setting',
        'type' => 'checkbox',
    )
);

$wp_customize->add_setting( 'packers_movers_company_services_section_title',
    array(
    'default'           => $packers_movers_company_default['packers_movers_company_services_section_title'],
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control( 'packers_movers_company_services_section_title',
    array(
    'label'    => esc_html__( 'Main Title', 'packers-movers-company' ),
    'section'  => 'header_category_setting',
    'type'     => 'text',
    )
);

$wp_customize->add_setting( 'packers_movers_company_services_section_short_title',
    array(
    'default'           => $packers_movers_company_default['packers_movers_company_services_section_short_title'],
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control( 'packers_movers_company_services_section_short_title',
    array(
    'label'    => esc_html__( 'Short Title', 'packers-movers-company' ),
    'section'  => 'header_category_setting',
    'type'     => 'text',
    )
);

$wp_customize->add_setting( 'packers_movers_company_services_cat',
    array(
    'default'           => '',
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'packers_movers_company_sanitize_select',
    )
);
$wp_customize->add_control( 'packers_movers_company_services_cat',
    array(
    'label'       => esc_html__( 'Services Post Category', 'packers-movers-company' ),
    'section'     => 'header_category_setting',
    'type'        => 'select',
    'choices'     => $packers_movers_company_post_category_list,
    )
);
