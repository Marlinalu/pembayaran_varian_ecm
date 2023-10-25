<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div class="container">
 *
 * @package Classic Bakery
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php if ( function_exists( 'wp_body_open' ) ) {
  wp_body_open();
} else {
  do_action( 'wp_body_open' );
} ?>

<?php if ( get_theme_mod('classic_bakery_preloader',true) != "") { ?>
  <div id="preloader">
    <div id="status">&nbsp;</div>
  </div>
<?php }?>

<a class="screen-reader-text skip-link" href="#content"><?php esc_html_e( 'Skip to content', 'classic-bakery' ); ?></a>

<div class="row m-0">
  <div class="col-lg-12 col-md-12 bg-color">
    <div class="header">
      <div class="row m-0">
        <div class="col-12 p-0">
          <div class="logo text-center py-4 py-md-5">
            <?php classic_bakery_the_custom_logo(); ?>
            <?php $classic_bakery_blog_info = get_bloginfo( 'name' ); ?>
            <?php if ( ! empty( $classic_bakery_blog_info ) ) : ?>
              <?php if ( get_theme_mod('classic_bakery_title_enable',true) != "") { ?>
                <?php if ( is_front_page() && is_home() ) : ?>
                  <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
                  <?php else : ?>
                    <p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></p>
                  <?php endif; ?>
                <?php } ?>
              <?php endif; ?>
              <?php $classic_bakery_description = get_bloginfo( 'description', 'display' );
              if ( $classic_bakery_description || is_customize_preview() ) : ?>
                <?php if ( get_theme_mod('classic_bakery_tagline_enable',false) != "") { ?>
                <span class="site-description"><?php echo esc_html( $classic_bakery_description ); ?></span>
                <?php } ?>
              <?php endif; ?>
          </div>
        </div>
        <?php if(class_exists('woocommerce')){ ?>
          <div class="col-lg-12 col-md-4 col-12 p-0 search-cart mb-4 align-self-center">
            <span class="header-search"><?php get_search_form(); ?></span>
          </div>
        <?php }?>
        <div class="col-lg-12 col-md-2 col-5 align-self-center">
          <div class="toggle-nav text-right text-md-right">
            <?php if(has_nav_menu('primary')){ ?>
              <button role="tab"><?php esc_html_e('MENU','classic-bakery'); ?></button>
            <?php }?>
          </div>
        </div>
        <div id="mySidenav" class="nav sidenav text-center align-self-center">
          <nav id="site-navigation" class="main-nav my-2" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu','classic-bakery' ); ?>">
            <?php 
              wp_nav_menu( array(
                'theme_location' => 'primary',
                'container_class' => 'main-menu clearfix' ,
                'menu_class' => 'clearfix',
                'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
                'fallback_cb' => 'wp_page_menu',
              ) );
             ?>
            <a href="javascript:void(0)" class="close-button"><?php esc_html_e('CLOSE','classic-bakery'); ?></a>
          </nav>
        </div>
        <?php if ( get_theme_mod('classic_bakery_shop_link') != "" || get_theme_mod('classic_bakery_shop_text') != "") { ?>
        <div class="col-lg-12 col-md-2 col-7 p-0 align-self-center">
          <div class="rsvp_button my-lg-4 my-md-0 text-center">
            <div class="rsvp_inner d-inline-block"><a href="<?php echo esc_url(get_theme_mod( 'classic_bakery_shop_link','') ); ?>"><?php echo esc_html(get_theme_mod( 'classic_bakery_shop_text','') ); ?></a></div>
          </div>
        </div>
        <?php }?>
        <div class="col-lg-12 col-md-4 col-12 social-icons text-center my-3 align-self-center">
          <?php if ( get_theme_mod('classic_bakery_fb_link') != "") { ?>
            <a title="<?php echo esc_attr('facebook', 'classic-bakery'); ?>" target="_blank" href="<?php echo esc_url(get_theme_mod('classic_bakery_fb_link')); ?>"><i class="fab fa-facebook-f"></i></a>
          <?php } ?>
          <?php if ( get_theme_mod('classic_bakery_twitt_link') != "") { ?>
            <a title="<?php echo esc_attr('twitter', 'classic-bakery'); ?>" target="_blank" href="<?php echo esc_url(get_theme_mod('classic_bakery_twitt_link')); ?>"><i class="fab fa-twitter"></i></a>
          <?php } ?>
          <?php if ( get_theme_mod('classic_bakery_insta_link') != "") { ?>
            <a title="<?php echo esc_attr('instagram', 'classic-bakery'); ?>" target="_blank" href="<?php echo esc_url(get_theme_mod('classic_bakery_insta_link')); ?>"><i class="fab fa-instagram"></i></a>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
  <div class="outer-area">
    <div class="scroll-box">
