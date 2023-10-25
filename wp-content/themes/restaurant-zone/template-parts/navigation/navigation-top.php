<?php
/**
 * Displays top navigation
 *
 * @package Restaurant Zone
 */
?>

<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-9 col-9 align-self-center">
            <div class="navbar-brand">
                <?php if ( has_custom_logo() ) : ?>
                    <div class="site-logo"><?php the_custom_logo(); ?></div>
                <?php endif; ?>
                <?php $restaurant_zone_blog_info = get_bloginfo( 'name' ); ?>
                    <?php if ( ! empty( $restaurant_zone_blog_info ) ) : ?>
                        <?php if ( is_front_page() && is_home() ) : ?>
                          <?php if( get_theme_mod('restaurant_zone_logo_title_text',true) != ''){ ?>
                            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                          <?php } ?>
                        <?php else : ?>
                          <?php if( get_theme_mod('restaurant_zone_logo_title_text',true) != ''){ ?>
                            <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                          <?php } ?>
                        <?php endif; ?>
                    <?php endif; ?>
                    <?php
                        $restaurant_zone_description = get_bloginfo( 'description', 'display' );
                        if ( $restaurant_zone_description || is_customize_preview() ) :
                    ?>
                  <?php if( get_theme_mod('restaurant_zone_theme_description',false) != ''){ ?>
                    <p class="site-description"><?php echo esc_html($restaurant_zone_description); ?></p>
                  <?php } ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="col-lg-8 col-md-3 col-3 align-self-center">
            <div class="toggle-nav mobile-menu">
                <button onclick="restaurant_zone_openNav()"><i class="fas fa-th"></i></button>
            </div>
            <div id="mySidenav" class="nav sidenav">
                <nav id="site-navigation" class="main-navigation navbar navbar-expand-xl" aria-label="<?php esc_attr_e( 'Top Menu', 'restaurant-zone' ); ?>">
                    <?php 
                        wp_nav_menu(
                            array(
                                'theme_location' => 'primary',
                                'menu_class'     => 'menu',
                                'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                            )
                        );
                    ?>
                </nav>
                <a href="javascript:void(0)" class="closebtn mobile-menu" onclick="restaurant_zone_closeNav()"><i class="far fa-times-circle"></i></a>
            </div>
        </div>
    </div>
</div>
