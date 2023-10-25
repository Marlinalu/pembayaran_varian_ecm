<?php
/**
* Color Settings.
* @package Packers Movers Company
*/

$packers_movers_company_default = packers_movers_company_get_default_theme_options();

$wp_customize->add_setting( 'packers_movers_company_default_text_color',
    array(
    'default'           => '',
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_hex_color',
    )
);
$wp_customize->add_control( 
    new WP_Customize_Color_Control( 
    $wp_customize, 
    'packers_movers_company_default_text_color',
    array(
        'label'      => esc_html__( 'Text Color', 'packers-movers-company' ),
        'section'    => 'colors',
        'settings'   => 'packers_movers_company_default_text_color',
    ) ) 
);

$wp_customize->add_setting( 'packers_movers_company_border_color',
    array(
    'default'           => '',
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_hex_color',
    )
);
$wp_customize->add_control( 
    new WP_Customize_Color_Control( 
    $wp_customize, 
    'packers_movers_company_border_color',
    array(
        'label'      => esc_html__( 'Border Color', 'packers-movers-company' ),
        'section'    => 'colors',
        'settings'   => 'packers_movers_company_border_color',
    ) ) 
);