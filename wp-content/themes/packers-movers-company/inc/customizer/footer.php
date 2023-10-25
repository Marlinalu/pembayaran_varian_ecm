<?php
/**
* Footer Settings.
*
* @package Packers Movers Company
*/

$packers_movers_company_default = packers_movers_company_get_default_theme_options();

$wp_customize->add_section( 'footer_widget_area',
	array(
	'title'      => esc_html__( 'Footer Setting', 'packers-movers-company' ),
	'priority'   => 200,
	'capability' => 'edit_theme_options',
	'panel'      => 'theme_option_panel',
	)
);

$wp_customize->add_setting( 'footer_column_layout',
	array(
	'default'           => $packers_movers_company_default['footer_column_layout'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_hex_color',
	)
);
$wp_customize->add_control( 'footer_column_layout',
	array(
	'label'       => esc_html__( 'Top Footer Column Layout', 'packers-movers-company' ),
	'section'     => 'footer_widget_area',
	'type'        => 'select',
	'choices'               => array(
		'1' => esc_html__( 'One Column', 'packers-movers-company' ),
		'2' => esc_html__( 'Two Column', 'packers-movers-company' ),
		'3' => esc_html__( 'Three Column', 'packers-movers-company' ),
	    ),
	)
);

$wp_customize->add_setting( 'footer_copyright_text',
	array(
	'default'           => $packers_movers_company_default['footer_copyright_text'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',
	)
);
$wp_customize->add_control( 'footer_copyright_text',
	array(
	'label'    => esc_html__( 'Footer Copyright Text', 'packers-movers-company' ),
	'section'  => 'footer_widget_area',
	'type'     => 'text',
	)
);