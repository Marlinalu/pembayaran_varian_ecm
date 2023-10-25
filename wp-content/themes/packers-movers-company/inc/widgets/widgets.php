<?php
/**
* Widget Functions.
*
* @package Packers Movers Company
*/

function packers_movers_company_widgets_init(){

	register_sidebar(array(
	    'name' => esc_html__('Main Sidebar', 'packers-movers-company'),
	    'id' => 'sidebar-1',
	    'description' => esc_html__('Add widgets here.', 'packers-movers-company'),
	    'before_widget' => '<div id="%1$s" class="widget %2$s">',
	    'after_widget' => '</div>',
	    'before_title' => '<h3 class="widget-title"><span>',
	    'after_title' => '</span></h3>',
	));


    $packers_movers_company_default = packers_movers_company_get_default_theme_options();
    $footer_column_layout = absint( get_theme_mod( 'footer_column_layout',$packers_movers_company_default['footer_column_layout'] ) );

    for( $i = 0; $i < $footer_column_layout; $i++ ){
    	
    	if( $i == 0 ){ $count = esc_html__('One','packers-movers-company'); }
    	if( $i == 1 ){ $count = esc_html__('Two','packers-movers-company'); }
    	if( $i == 2 ){ $count = esc_html__('Three','packers-movers-company'); }

	    register_sidebar( array(
	        'name' => esc_html__('Footer Widget ', 'packers-movers-company').$count,
	        'id' => 'packers-movers-company-footer-widget-'.$i,
	        'description' => esc_html__('Add widgets here.', 'packers-movers-company'),
	        'before_widget' => '<div id="%1$s" class="widget %2$s">',
	        'after_widget' => '</div>',
	        'before_title' => '<h2 class="widget-title">',
	        'after_title' => '</h2>',
	    ));
	}

}

add_action('widgets_init', 'packers_movers_company_widgets_init');