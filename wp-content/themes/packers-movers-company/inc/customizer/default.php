<?php
/**
 * Default Values.
 *
 * @package Packers Movers Company
 */

if ( ! function_exists( 'packers_movers_company_get_default_theme_options' ) ) :
	function packers_movers_company_get_default_theme_options() {

		$packers_movers_company_defaults = array();
		
		// Options.
        $packers_movers_company_defaults['logo_width_range']                                  = 300;
		$packers_movers_company_defaults['global_sidebar_layout']					            = 'right-sidebar';

        $packers_movers_company_defaults['packers_movers_company_header_layout_topbar_text']      = esc_html__( 'We are US based top Moving Company, expreienced work focused on quality.', 'packers-movers-company' );

        $packers_movers_company_defaults['packers_movers_company_header_layout_social_facebook_link']    = esc_url( 'https://www.facebook.com/', 'packers-movers-company' );
        $packers_movers_company_defaults['packers_movers_company_header_layout_social_twitter_link']      = esc_url( 'https://twitter.com/', 'packers-movers-company' );
        $packers_movers_company_defaults['packers_movers_company_header_layout_social_instagram_link']  = esc_url( 'https://www.instagram.com/', 'packers-movers-company' );
        $packers_movers_company_defaults['packers_movers_company_header_layout_social_linkdin_link']      = esc_url( 'https://linkedin.com/', 'packers-movers-company' );
        $packers_movers_company_defaults['packers_movers_company_header_layout_social_watsapp_link']      = esc_url( 'https://www.whatsapp.com/', 'packers-movers-company' );

        $packers_movers_company_defaults['packers_movers_company_header_layout_button_text']      = esc_html__( 'GET QUOTE', 'packers-movers-company' );
        $packers_movers_company_defaults['packers_movers_company_header_layout_button_link']    = esc_url( 'https://www.google.com/', 'packers-movers-company' );

        $packers_movers_company_defaults['packers_movers_company_header_layout_location_address_text']      = esc_html__( 'Location', 'packers-movers-company' );
        $packers_movers_company_defaults['packers_movers_company_header_layout_location_address']      = esc_html__( '246, Old York Rd, NY 08080', 'packers-movers-company' );

        $packers_movers_company_defaults['packers_movers_company_header_layout_email_address_text']      = esc_html__( 'Email', 'packers-movers-company' );
        $packers_movers_company_defaults['packers_movers_company_header_layout_email_address']       = 'support@example.com';

        $packers_movers_company_defaults['packers_movers_company_header_layout_working_hour_text']      = esc_html__( 'Working Hours', 'packers-movers-company' );
        $packers_movers_company_defaults['packers_movers_company_header_layout_working_hour']       = '09:00 AM to 07:00 PM ( Mon - Sat )';

        $packers_movers_company_defaults['packers_movers_company_header_layout_phone_number_text']      = esc_html__( 'Phone Number', 'packers-movers-company' );
        $packers_movers_company_defaults['packers_movers_company_header_layout_phone_number']       = '+11 231 456 7890';

        $packers_movers_company_defaults['packers_movers_company_pagination_layout']         = 'numeric';
		$packers_movers_company_defaults['footer_column_layout'] 						 = 3;
		$packers_movers_company_defaults['footer_copyright_text'] 				     = esc_html__( 'All rights reserved.', 'packers-movers-company' );
        $packers_movers_company_defaults['twp_navigation_type']              			 = 'theme-normal-navigation';
        $packers_movers_company_defaults['packers_movers_company_post_author']                		= 1;
        $packers_movers_company_defaults['packers_movers_company_post_date']                		= 1;
        $packers_movers_company_defaults['packers_movers_company_post_category']                	= 1;
        $packers_movers_company_defaults['packers_movers_company_post_tags']                		= 1;
        $packers_movers_company_defaults['packers_movers_company_floating_next_previous_nav']       = 1;
        $packers_movers_company_defaults['packers_movers_company_header_banner']               		= 0;
        $packers_movers_company_defaults['packers_movers_company_services']               	        = 0;
        $packers_movers_company_defaults['packers_movers_company_services_section_title']           = esc_html__('We Work In Partnership With All The Major','packers-movers-company');
        $packers_movers_company_defaults['packers_movers_company_services_section_short_title']     = esc_html__('OUR SERVICES','packers-movers-company');
       
        $packers_movers_company_defaults['packers_movers_company_background_color']               	= '#fff';

		// Pass through filter.
		$packers_movers_company_defaults = apply_filters( 'packers_movers_company_filter_default_theme_options', $packers_movers_company_defaults );

		return $packers_movers_company_defaults;
	}
endif;
