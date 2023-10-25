<?php
/**
 * Custom Functions.
 *
 * @package Packers Movers Company
 */

if( !function_exists( 'packers_movers_company_fonts_url' ) ) :

    //Google Fonts URL
    function packers_movers_company_fonts_url(){

        $font_families = array(
            'Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900',
        );

        $fonts_url = add_query_arg( array(
            'family' => implode( '&family=', $font_families ),
            'display' => 'swap',
        ), 'https://fonts.googleapis.com/css2' );

        return esc_url_raw($fonts_url);

    }

endif;

if ( ! function_exists( 'packers_movers_company_sub_menu_toggle_button' ) ) :

    function packers_movers_company_sub_menu_toggle_button( $args, $item, $depth ) {

        // Add sub menu toggles to the main menu with toggles
        if ( $args->theme_location == 'packers-movers-company-primary-menu' && isset( $args->show_toggles ) ) {
            
            // Wrap the menu item link contents in a div, used for positioning
            $args->before = '<div class="submenu-wrapper">';
            $args->after  = '';

            // Add a toggle to items with children
            if ( in_array( 'menu-item-has-children', $item->classes ) ) {

                $toggle_target_string = '.menu-item.menu-item-' . $item->ID . ' > .sub-menu';

                // Add the sub menu toggle
                $args->after .= '<button type="button" class="theme-aria-button submenu-toggle" data-toggle-target="' . $toggle_target_string . '" data-toggle-type="slidetoggle" data-toggle-duration="250" aria-expanded="false"><span class="btn__content" tabindex="-1"><span class="screen-reader-text">' . esc_html__( 'Show sub menu', 'packers-movers-company' ) . '</span>' . packers_movers_company_get_theme_svg( 'chevron-down' ) . '</span></button>';

            }

            // Close the wrapper
            $args->after .= '</div><!-- .submenu-wrapper -->';
            // Add sub menu icons to the main menu without toggles (the fallback menu)

        }elseif( $args->theme_location == 'packers-movers-company-primary-menu' ) {

            if ( in_array( 'menu-item-has-children', $item->classes ) ) {

                $args->before = '<div class="link-icon-wrapper">';
                $args->after  = packers_movers_company_get_theme_svg( 'chevron-down' ) . '</div>';

            } else {

                $args->before = '';
                $args->after  = '';

            }

        }

        return $args;

    }

endif;

add_filter( 'nav_menu_item_args', 'packers_movers_company_sub_menu_toggle_button', 10, 3 );

if ( ! function_exists( 'packers_movers_company_the_theme_svg' ) ):
    
    function packers_movers_company_the_theme_svg( $svg_name, $return = false ) {

        if( $return ){

            return packers_movers_company_get_theme_svg( $svg_name ); //phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Escaped in packers_movers_company_get_theme_svg();.

        }else{

            echo packers_movers_company_get_theme_svg( $svg_name ); //phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Escaped in packers_movers_company_get_theme_svg();.

        }
    }

endif;

if ( ! function_exists( 'packers_movers_company_get_theme_svg' ) ):

    function packers_movers_company_get_theme_svg( $svg_name ) {

        // Make sure that only our allowed tags and attributes are included.
        $svg = wp_kses(
            Packers_Movers_Company_SVG_Icons::get_svg( $svg_name ),
            array(
                'svg'     => array(
                    'class'       => true,
                    'xmlns'       => true,
                    'width'       => true,
                    'height'      => true,
                    'viewbox'     => true,
                    'aria-hidden' => true,
                    'role'        => true,
                    'focusable'   => true,
                ),
                'path'    => array(
                    'fill'      => true,
                    'fill-rule' => true,
                    'd'         => true,
                    'transform' => true,
                ),
                'polygon' => array(
                    'fill'      => true,
                    'fill-rule' => true,
                    'points'    => true,
                    'transform' => true,
                    'focusable' => true,
                ),
                'polyline' => array(
                    'fill'      => true,
                    'points'    => true,
                ),
                'line' => array(
                    'fill'      => true,
                    'x1'      => true,
                    'x2' => true,
                    'y1'    => true,
                    'y2' => true,
                ),
            )
        );
        if ( ! $svg ) {
            return false;
        }
        return $svg;

    }

endif;

if( !function_exists( 'packers_movers_company_post_category_list' ) ) :

    // Post Category List.
    function packers_movers_company_post_category_list( $select_cat = true ){

        $post_cat_lists = get_categories(
            array(
                'hide_empty' => '0',
                'exclude' => '1',
            )
        );

        $post_cat_cat_array = array();
        if( $select_cat ){

            $post_cat_cat_array[''] = esc_html__( '-- Select Category --','packers-movers-company' );

        }

        foreach ( $post_cat_lists as $post_cat_list ) {

            $post_cat_cat_array[$post_cat_list->slug] = $post_cat_list->name;

        }

        return $post_cat_cat_array;
    }

endif;

if( !function_exists('packers_movers_company_single_post_navigation') ):

    function packers_movers_company_single_post_navigation(){

        $packers_movers_company_default = packers_movers_company_get_default_theme_options();
        $twp_navigation_type = esc_attr( get_post_meta( get_the_ID(), 'twp_disable_ajax_load_next_post', true ) );
        $current_id = '';
        $article_wrap_class = '';
        global $post;
        $current_id = $post->ID;
        if( $twp_navigation_type == '' || $twp_navigation_type == 'global-layout' ){
            $twp_navigation_type = get_theme_mod('twp_navigation_type', $packers_movers_company_default['twp_navigation_type']);
        }

        if( $twp_navigation_type != 'no-navigation' && 'post' === get_post_type() ){

            if( $twp_navigation_type == 'theme-normal-navigation' ){ ?>

                <div class="navigation-wrapper">
                    <?php
                    // Previous/next post navigation.
                    the_post_navigation(array(
                        'prev_text' => '<span class="arrow" aria-hidden="true">' . packers_movers_company_the_theme_svg('arrow-left',$return = true ) . '</span><span class="screen-reader-text">' . esc_html__('Previous post:', 'packers-movers-company') . '</span><span class="post-title">%title</span>',
                        'next_text' => '<span class="arrow" aria-hidden="true">' . packers_movers_company_the_theme_svg('arrow-right',$return = true ) . '</span><span class="screen-reader-text">' . esc_html__('Next post:', 'packers-movers-company') . '</span><span class="post-title">%title</span>',
                    )); ?>
                </div>
                <?php

            }else{

                $next_post = get_next_post();
                if( isset( $next_post->ID ) ){

                    $next_post_id = $next_post->ID;
                    echo '<div loop-count="1" next-post="' . absint( $next_post_id ) . '" class="twp-single-infinity"></div>';

                }
            }

        }

    }

endif;

add_action( 'packers_movers_company_navigation_action','packers_movers_company_single_post_navigation',30 );

if( !function_exists('packers_movers_company_content_offcanvas') ):

    // Offcanvas Contents
    function packers_movers_company_content_offcanvas(){ ?>

        <div id="offcanvas-menu">
            <div class="offcanvas-wraper">
                <div class="close-offcanvas-menu">
                    <div class="offcanvas-close">
                        <a href="javascript:void(0)" class="skip-link-menu-start"></a>
                        <button type="button" class="button-offcanvas-close">
                            <span class="offcanvas-close-label">
                                <?php echo esc_html__('Close', 'packers-movers-company'); ?>
                            </span>
                        </button>
                    </div>
                </div>
                <div id="primary-nav-offcanvas" class="offcanvas-item offcanvas-main-navigation">
                    <nav class="primary-menu-wrapper" aria-label="<?php esc_attr_e('Horizontal', 'packers-movers-company'); ?>" role="navigation">
                        <ul class="primary-menu theme-menu">
                            <?php
                            if (has_nav_menu('packers-movers-company-primary-menu')) {
                                wp_nav_menu(
                                    array(
                                        'container' => '',
                                        'items_wrap' => '%3$s',
                                        'theme_location' => 'packers-movers-company-primary-menu',
                                        'show_toggles' => true,
                                    )
                                );
                            }else{

                                wp_list_pages(
                                    array(
                                        'match_menu_classes' => true,
                                        'show_sub_menu_icons' => true,
                                        'title_li' => false,
                                        'show_toggles' => true,
                                        'walker' => new Packers_Movers_Company_Walker_Page(),
                                    )
                                );
                            }
                            ?>
                        </ul>
                    </nav><!-- .primary-menu-wrapper -->
                </div>
                <a href="javascript:void(0)" class="skip-link-menu-end"></a>
            </div>
        </div>

    <?php
    }

endif;

add_action( 'packers_movers_company_before_footer_content_action','packers_movers_company_content_offcanvas',30 );

if( !function_exists('packers_movers_company_footer_content_widget') ):

    function packers_movers_company_footer_content_widget(){

        $packers_movers_company_default = packers_movers_company_get_default_theme_options();
        if (is_active_sidebar('packers-movers-company-footer-widget-0') ||
            is_active_sidebar('packers-movers-company-footer-widget-1') ||
            is_active_sidebar('packers-movers-company-footer-widget-2')):
            $x = 1;
            $footer_sidebar = 0;
            do {
                if ($x == 3 && is_active_sidebar('packers-movers-company-footer-widget-2')) {
                    $footer_sidebar++;
                }
                if ($x == 2 && is_active_sidebar('packers-movers-company-footer-widget-1')) {
                    $footer_sidebar++;
                }
                if ($x == 1 && is_active_sidebar('packers-movers-company-footer-widget-0')) {
                    $footer_sidebar++;
                }
                $x++;
            } while ($x <= 3);
            if ($footer_sidebar == 1) {
                $footer_sidebar_class = 12;
            } elseif ($footer_sidebar == 2) {
                $footer_sidebar_class = 6;
            } else {
                $footer_sidebar_class = 4;
            }
            $footer_column_layout = absint(get_theme_mod('footer_column_layout', $packers_movers_company_default['footer_column_layout'])); ?>

            <div class="footer-widgetarea">
                <div class="wrapper">
                    <div class="column-row">

                        <?php if (is_active_sidebar('packers-movers-company-footer-widget-0')): ?>
                            <div class="column <?php echo 'column-' . absint($footer_sidebar_class); ?> column-sm-12">
                                <?php dynamic_sidebar('packers-movers-company-footer-widget-0'); ?>
                            </div>
                        <?php endif; ?>

                        <?php if (is_active_sidebar('packers-movers-company-footer-widget-1')): ?>
                            <div class="column <?php echo 'column-' . absint($footer_sidebar_class); ?> column-sm-12">
                                <?php dynamic_sidebar('packers-movers-company-footer-widget-1'); ?>
                            </div>
                        <?php endif; ?>

                        <?php if (is_active_sidebar('packers-movers-company-footer-widget-2')): ?>
                            <div class="column <?php echo 'column-' . absint($footer_sidebar_class); ?> column-sm-12">
                                <?php dynamic_sidebar('packers-movers-company-footer-widget-2'); ?>
                            </div>
                        <?php endif; ?>

                    </div>
                </div>
            </div>

        <?php
        endif;

    }

endif;

add_action( 'packers_movers_company_footer_content_action','packers_movers_company_footer_content_widget',10 );

if( !function_exists('packers_movers_company_footer_content_info') ):

    /**
     * Footer Copyright Area
    **/
    function packers_movers_company_footer_content_info(){

        $packers_movers_company_default = packers_movers_company_get_default_theme_options(); ?>
        <div class="site-info">
            <div class="wrapper">
                <div class="column-row">

                    <div class="column column-9">
                        <div class="footer-credits">

                            <div class="footer-copyright">

                                <?php
                                $footer_copyright_text = wp_kses_post( get_theme_mod( 'footer_copyright_text', $packers_movers_company_default['footer_copyright_text'] ) );
                                    echo esc_html( $footer_copyright_text );
                                    echo '<br>';
                                    echo esc_html__('Theme: Packers Movers Company ', 'packers-movers-company') . esc_html__('By ', 'packers-movers-company') . '  <span>' . esc_html__('OMEGA ', 'packers-movers-company') . '</span>';
                                    echo esc_html__('Powered by ', 'packers-movers-company') . '<a href="' . esc_url('https://wordpress.org') . '" title="' . esc_attr__('WordPress', 'packers-movers-company') . '" target="_blank"><span>' . esc_html__('WordPress.', 'packers-movers-company') . '</span></a>';
                                 ?>

                            </div>
                        </div>
                    </div>


                    <div class="column column-3 align-text-right">
                        <a class="to-the-top" href="#site-header">
                            <span class="to-the-top-long">
                                <?php
                                printf( esc_html__( 'To the Top %s', 'packers-movers-company' ), '<span class="arrow" aria-hidden="true">&uarr;</span>' );
                                ?>
                            </span>
                            <span class="to-the-top-short">
                                <?php
                                printf( esc_html__( 'Up %s', 'packers-movers-company' ), '<span class="arrow" aria-hidden="true">&uarr;</span>' );
                                ?>
                            </span>
                        </a>

                    </div>
                </div>
            </div>
        </div>

    <?php
    }

endif;

add_action( 'packers_movers_company_footer_content_action','packers_movers_company_footer_content_info',20 );


if( !function_exists( 'packers_movers_company_main_slider' ) ) :

    function packers_movers_company_main_slider(){

        $packers_movers_company_defaults = packers_movers_company_get_default_theme_options();
        $packers_movers_company_header_banner = get_theme_mod( 'packers_movers_company_header_banner', $packers_movers_company_defaults['packers_movers_company_header_banner'] );
        $packers_movers_company_header_banner_cat = get_theme_mod( 'packers_movers_company_header_banner_cat' );

        if( $packers_movers_company_header_banner ){

            $packers_movers_company_rtl = '';
            if( is_rtl() ){
                $packers_movers_company_rtl = 'dir="rtl"';
            }

          $banner_query = new WP_Query( array('post_type' => 'post', 'posts_per_page' => 4,'post__not_in' => get_option("sticky_posts"), 'category_name' => esc_html( $packers_movers_company_header_banner_cat ) ) );

          if( $banner_query->have_posts() ): ?>

            <div class="theme-custom-block theme-banner-block">
                <div class="swiper-container theme-main-carousel swiper-container" <?php echo $packers_movers_company_rtl; ?>>

                    <div class="swiper-wrapper">

                      <?php
                      while( $banner_query->have_posts() ):
                        $banner_query->the_post();
                        $featured_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
                        $featured_image = isset( $featured_image[0] ) ? $featured_image[0] : ''; ?>

                          <div class="swiper-slide main-carousel-item">
                             
                                  <div class="theme-article-post">
                                  <div class="entry-thumbnail">
                                      <div class="data-bg data-bg-large" data-background="<?php echo esc_url($featured_image); ?>">
                                          <a href="<?php the_permalink(); ?>" class="theme-image-responsive" tabindex="0"></a>
                                      </div>
                                      <?php packers_movers_company_post_format_icon(); ?>
                                  </div>
                            
                                  <div class="main-carousel-caption">
                                        <div class="post-content ">

                                          <header class="entry-header">
                                                <h2 class="entry-title entry-title-big">
                                                    <a href="<?php the_permalink(); ?>" rel="bookmark"><span><?php the_title(); ?></span></a>
                                                </h2>
                                          </header>


                                          <div class="entry-content">
                                              <?php
                                              if (has_excerpt()) {

                                                  the_excerpt();

                                              } else {

                                                  echo esc_html(wp_trim_words(get_the_content(), 25, '...'));

                                              } ?>
                                          </div>

                                          <a href="<?php the_permalink(); ?>" class="btn-fancy btn-fancy-primary" tabindex="0">
                                              <?php echo esc_html__('Know More', 'packers-movers-company'); ?>
                                          </a>

                                      </div>
                                  </div>
                                  </div>


                          </div>

                      <?php endwhile; ?>

                    </div>

                    <div class="swiper-pagination"></div>                  

                </div>
            </div>

          <?php
          wp_reset_postdata();
          endif;

        }

    }

endif;

if (!function_exists('packers_movers_company_post_format_icon')):

    // Post Format Icon.
    function packers_movers_company_post_format_icon() {

        $format = get_post_format(get_the_ID()) ?: 'standard';
        $icon = '';
        $title = '';
        if( $format == 'video' ){
            $icon = packers_movers_company_get_theme_svg( 'video' );
            $title = esc_html__('Video','packers-movers-company');
        }elseif( $format == 'audio' ){
            $icon = packers_movers_company_get_theme_svg( 'audio' );
            $title = esc_html__('Audio','packers-movers-company');
        }elseif( $format == 'gallery' ){
            $icon = packers_movers_company_get_theme_svg( 'gallery' );
            $title = esc_html__('Gallery','packers-movers-company');
        }elseif( $format == 'quote' ){
            $icon = packers_movers_company_get_theme_svg( 'quote' );
            $title = esc_html__('Quote','packers-movers-company');
        }elseif( $format == 'image' ){
            $icon = packers_movers_company_get_theme_svg( 'image' );
            $title = esc_html__('Image','packers-movers-company');
        }
        
        if (!empty($icon)) { ?>
            <div class="theme-post-format">
                <span class="post-format-icom"><?php echo packers_movers_company_svg_escape($icon); ?></span>
                <?php if( $title ){ echo '<span class="post-format-label">'.esc_html( $title ).'</span>'; } ?>
            </div>
        <?php }
    }

endif;

if ( ! function_exists( 'packers_movers_company_svg_escape' ) ):

    /**
     * Get information about the SVG icon.
     *
     * @param string $svg_name The name of the icon.
     * @param string $group The group the icon belongs to.
     * @param string $color Color code.
     */
    function packers_movers_company_svg_escape( $input ) {

        // Make sure that only our allowed tags and attributes are included.
        $svg = wp_kses(
            $input,
            array(
                'svg'     => array(
                    'class'       => true,
                    'xmlns'       => true,
                    'width'       => true,
                    'height'      => true,
                    'viewbox'     => true,
                    'aria-hidden' => true,
                    'role'        => true,
                    'focusable'   => true,
                ),
                'path'    => array(
                    'fill'      => true,
                    'fill-rule' => true,
                    'd'         => true,
                    'transform' => true,
                ),
                'polygon' => array(
                    'fill'      => true,
                    'fill-rule' => true,
                    'points'    => true,
                    'transform' => true,
                    'focusable' => true,
                ),
            )
        );

        if ( ! $svg ) {
            return false;
        }

        return $svg;

    }

endif;

if( !function_exists( 'packers_movers_company_sanitize_sidebar_option_meta' ) ) :

    // Sidebar Option Sanitize.
    function packers_movers_company_sanitize_sidebar_option_meta( $input ){

        $metabox_options = array( 'global-sidebar','left-sidebar','right-sidebar','no-sidebar' );
        if( in_array( $input,$metabox_options ) ){

            return $input;

        }else{

            return '';

        }
    }

endif;

if( !function_exists( 'packers_movers_company_services_slider' ) ) :

    function packers_movers_company_services_slider(){

        $packers_movers_company_defaults = packers_movers_company_get_default_theme_options();
        $packers_movers_company_services = get_theme_mod( 'packers_movers_company_services', $packers_movers_company_defaults['packers_movers_company_services'] );
        $packers_movers_company_services_cat = get_theme_mod( 'packers_movers_company_services_cat' );

        $packers_movers_company_services_section_title = esc_html( get_theme_mod( 'packers_movers_company_services_section_title',
        $packers_movers_company_defaults['packers_movers_company_services_section_title'] ) );

        $packers_movers_company_services_section_short_title = esc_html( get_theme_mod( 'packers_movers_company_services_section_short_title',
        $packers_movers_company_defaults['packers_movers_company_services_section_short_title'] ) );

        if( $packers_movers_company_services ){

            $packers_movers_company_rtl = '';
            if( is_rtl() ){
                $packers_movers_company_rtl = 'dir="rtl"';
            }

          $services_query = new WP_Query( array('post_type' => 'post', 'posts_per_page' => 4,'post__not_in' => get_option("sticky_posts"), 'category_name' => esc_html( $packers_movers_company_services_cat ) ) );

          if( $services_query->have_posts() ): ?>

            <div class="theme-custom-block theme-services-block">
                <div class="wrapper">

                    <?php if( $packers_movers_company_services_section_short_title ){ ?>
                        <h6><?php echo esc_html( $packers_movers_company_services_section_short_title ); ?></h6>
                    <?php } ?>

                    <?php if( $packers_movers_company_services_section_title ){ ?>
                        <h2><?php echo esc_html( $packers_movers_company_services_section_title ); ?></h2>
                    <?php } ?>                    

                    <div class="swiper-container theme-services-carousel swiper-container" <?php echo $packers_movers_company_rtl; ?>>
                        <div class="swiper-wrapper">
                            <?php
                            while( $services_query->have_posts() ):
                            $services_query->the_post();
                            $services_featured_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
                            $services_featured_image = isset( $services_featured_image[0] ) ? $services_featured_image[0] : ''; ?>
                                <div class="swiper-slide main-carousel-item">
                                    <div class="theme-services-post">
                                        <div class="entry-thumbnail">
                                            <div class="data-bg data-bg-large" data-background="<?php echo esc_url($services_featured_image); ?>">
                                                <a href="<?php the_permalink(); ?>" class="theme-image-responsive" tabindex="0"></a>
                                            </div>
                                            <?php packers_movers_company_post_format_icon(); ?>
                                        </div>
                                        <div class="post-content">
                                            <header class="entry-header">
                                                <h3 class="entry-title entry-title-big">
                                                    <a href="<?php the_permalink(); ?>" rel="bookmark"><span><?php the_title(); ?></span></a>
                                                </h3>
                                            </header>

                                            <div class="entry-content">
                                                <?php
                                                if (has_excerpt()) {
                                                    the_excerpt();
                                                } else {
                                                    echo esc_html(wp_trim_words(get_the_content(), 25, '...'));
                                                } ?>
                                            </div>                                            
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>

          <?php
          wp_reset_postdata();
          endif;

        }

    }

endif;