<?php
/**
* Custom Functions.
*
* @package Packers Movers Company
*/

if( !function_exists( 'packers_movers_company_sanitize_sidebar_option' ) ) :

    // Sidebar Option Sanitize.
    function packers_movers_company_sanitize_sidebar_option( $packers_movers_company_input ){

        $packers_movers_company_metabox_options = array( 'global-sidebar','left-sidebar','right-sidebar','no-sidebar' );
        if( in_array( $packers_movers_company_input,$packers_movers_company_metabox_options ) ){

            return $packers_movers_company_input;

        }

        return;

    }

endif;

if ( ! function_exists( 'packers_movers_company_sanitize_checkbox' ) ) :

	/**
	 * Sanitize checkbox.
	 */
	function packers_movers_company_sanitize_checkbox( $packers_movers_company_checked ) {

		return ( ( isset( $packers_movers_company_checked ) && true === $packers_movers_company_checked ) ? true : false );

	}

endif;


if ( ! function_exists( 'packers_movers_company_sanitize_select' ) ) :

    /**
     * Sanitize select.
     */
    function packers_movers_company_sanitize_select( $packers_movers_company_input, $packers_movers_company_setting ) {
        $packers_movers_company_input = sanitize_text_field( $packers_movers_company_input );
        $choices = $packers_movers_company_setting->manager->get_control( $packers_movers_company_setting->id )->choices;
        return ( array_key_exists( $packers_movers_company_input, $choices ) ? $packers_movers_company_input : $packers_movers_company_setting->default );
    }

endif;