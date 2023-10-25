<?php
/**
 * Packers Movers Company Dynamic Styles
 *
 * @package Packers Movers Company
 */

function packers_movers_company_dynamic_css(){

    $packers_movers_company_default = packers_movers_company_get_default_theme_options();
    $packers_movers_company_default_text_color = get_theme_mod('packers_movers_company_default_text_color');
    $logo_width_range = get_theme_mod('logo_width_range', $packers_movers_company_default['logo_width_range']);
    $packers_movers_company_border_color = get_theme_mod('packers_movers_company_border_color');
    $background_color = get_theme_mod('background_color', $packers_movers_company_default['packers_movers_company_background_color']);
    $background_color = '#' . str_replace("#", "", $background_color);


    echo "<style type='text/css' media='all'>"; ?>

    body,
    .offcanvas-wraper,
    .header-searchbar-inner{
    background-color: <?php echo esc_attr($background_color); ?>;
    }

    a:not(:hover):not(:focus):not(.btn-fancy),
    body, button, input, select, optgroup, textarea{
    color: <?php echo esc_attr($packers_movers_company_default_text_color); ?>;
    }

    .site-topbar,.site-navigation,
    .offcanvas-main-navigation li,
    .offcanvas-main-navigation .sub-menu,
    .offcanvas-main-navigation .submenu-wrapper .submenu-toggle,
    .post-navigation,
    .widget .tab-head .twp-nav-tabs,
    .widget-area-wrapper .widget,
    .footer-widgetarea,
    .site-info,
    .right-sidebar .widget-area-wrapper,
    .left-sidebar .widget-area-wrapper,
    .widget-title,
    .widget_block .wp-block-group > .wp-block-group__inner-container > h2,
    input[type="text"],
    input[type="password"],
    input[type="email"],
    input[type="url"],
    input[type="date"],
    input[type="month"],
    input[type="time"],
    input[type="datetime"],
    input[type="datetime-local"],
    input[type="week"],
    input[type="number"],
    input[type="search"],
    input[type="tel"],
    input[type="color"],
    textarea{
    border-color: <?php echo esc_attr($packers_movers_company_border_color); ?>;
    }

    .site-logo .custom-logo-link{
    max-width:  <?php echo esc_attr($logo_width_range); ?>px;
    }

    <?php echo "</style>";
}

add_action('wp_head', 'packers_movers_company_dynamic_css', 100);