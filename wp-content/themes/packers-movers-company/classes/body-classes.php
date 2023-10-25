<?php
/**
* Body Classes.
* @package Packers Movers Company
*/
 
 if (!function_exists('packers_movers_company_body_classes')) :

    function packers_movers_company_body_classes($classes) {

        $packers_movers_company_default = packers_movers_company_get_default_theme_options();
        global $post;
        // Adds a class of hfeed to non-singular pages.
        if ( !is_singular() ) {
            $classes[] = 'hfeed';
        }

        // Adds a class of no-sidebar when there is no sidebar present.
        if ( !is_active_sidebar( 'sidebar-1' ) ) {
            $classes[] = 'no-sidebar';
        }

        $global_sidebar_layout = esc_html( get_theme_mod( 'global_sidebar_layout',$packers_movers_company_default['global_sidebar_layout'] ) );

        if ( is_active_sidebar( 'sidebar-1' ) ) {
            if( is_single() || is_page() ){
                $packers_movers_company_post_sidebar = esc_html( get_post_meta( $post->ID, 'packers_movers_company_post_sidebar_option', true ) );
                if (empty($packers_movers_company_post_sidebar) || ($packers_movers_company_post_sidebar == 'global-sidebar')) {
                    $classes[] = esc_attr( $global_sidebar_layout );
                } else{
                    $classes[] = esc_attr( $packers_movers_company_post_sidebar );
                }
            }else{
                $classes[] = esc_attr( $global_sidebar_layout );
            }
            
        }
        
        return $classes;
    }

endif;

add_filter('body_class', 'packers_movers_company_body_classes');