<?php
/**
* Layouts Settings.
*
* @package Packers Movers Company
*/

$packers_movers_company_default = packers_movers_company_get_default_theme_options();

// Layout Section.
$wp_customize->add_section( 'layout_setting',
	array(
	'title'      => esc_html__( 'Global Layout Settings', 'packers-movers-company' ),
	'priority'   => 20,
	'capability' => 'edit_theme_options',
	'panel'      => 'theme_option_panel',
	)
);

$wp_customize->add_setting( 'global_sidebar_layout',
    array(
    'default'           => $packers_movers_company_default['global_sidebar_layout'],
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'packers_movers_company_sanitize_sidebar_option',
    )
);
$wp_customize->add_control( 'global_sidebar_layout',
    array(
    'label'       => esc_html__( 'Global Sidebar Layout', 'packers-movers-company' ),
    'section'     => 'layout_setting',
    'type'        => 'select',
    'choices'     => array(
        'right-sidebar' => esc_html__( 'Right Sidebar', 'packers-movers-company' ),
        'left-sidebar'  => esc_html__( 'Left Sidebar', 'packers-movers-company' ),
        'no-sidebar'    => esc_html__( 'No Sidebar', 'packers-movers-company' ),
        ),
    )
);
