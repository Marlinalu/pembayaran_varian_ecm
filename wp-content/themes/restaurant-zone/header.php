<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Restaurant Zone
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php if ( function_exists( 'wp_body_open' ) ) { wp_body_open();} else { do_action( 'wp_body_open' ); }
    $restaurant_zone_sticky_header = get_theme_mod('restaurant_zone_sticky_header');
    $restaurant_zone_data_sticky = "false";
    if ($restaurant_zone_sticky_header) {
        $restaurant_zone_data_sticky = "true";
    }
?>
    <?php if(get_theme_mod('restaurant_zone_preloader_hide','')){ ?>
        <div class="loading">
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>
    <?php } ?>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#skip-content"><?php esc_html_e('Skip to content', 'restaurant-zone'); ?></a>
    <header id="masthead" class="site-header fixed-top shadow-sm navbar-dark bg-primary">
        <?php if(get_theme_mod('restaurant_zone_top_header_setting') != ''){ ?>
            <div class="socialmedia">
                <?php get_template_part('template-parts/topheader/topheader', 'social'); ?>
            </div>
        <?php }?>
        <div class="head-menu" data-sticky="<?php echo esc_attr($restaurant_zone_data_sticky); ?>">
            <?php get_template_part('template-parts/navigation/navigation', 'top'); ?>
        </div>
    </header>
