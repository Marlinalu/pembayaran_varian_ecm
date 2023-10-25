<?php
/**
 * Header Layout
 * @package Packers Movers Company
 */

$packers_movers_company_defaults = packers_movers_company_get_default_theme_options();

$header_layout_topbar_text = esc_html( get_theme_mod( 'packers_movers_company_header_layout_topbar_text',
$packers_movers_company_defaults['packers_movers_company_header_layout_topbar_text'] ) );

$header_layout_social_facebook_link = esc_html( get_theme_mod( 'packers_movers_company_header_layout_social_facebook_link',
$packers_movers_company_defaults['packers_movers_company_header_layout_social_facebook_link'] ) );

$header_layout_social_twitter_link = esc_html( get_theme_mod( 'packers_movers_company_header_layout_social_twitter_link',
$packers_movers_company_defaults['packers_movers_company_header_layout_social_twitter_link'] ) );

$header_layout_social_instagram_link = esc_html( get_theme_mod( 'packers_movers_company_header_layout_social_instagram_link',
$packers_movers_company_defaults['packers_movers_company_header_layout_social_instagram_link'] ) );

$header_layout_social_linkdin_link = esc_html( get_theme_mod( 'packers_movers_company_header_layout_social_linkdin_link',
$packers_movers_company_defaults['packers_movers_company_header_layout_social_linkdin_link'] ) );

$header_layout_social_watsapp_link = esc_html( get_theme_mod( 'packers_movers_company_header_layout_social_watsapp_link',
$packers_movers_company_defaults['packers_movers_company_header_layout_social_watsapp_link'] ) );

$header_layout_button_text = esc_html( get_theme_mod( 'packers_movers_company_header_layout_button_text',
$packers_movers_company_defaults['packers_movers_company_header_layout_button_text'] ) );

$header_layout_button_link = esc_html( get_theme_mod( 'packers_movers_company_header_layout_button_link',
$packers_movers_company_defaults['packers_movers_company_header_layout_button_link'] ) );

$header_layout_email_address_text = esc_html( get_theme_mod( 'packers_movers_company_header_layout_email_address_text',
$packers_movers_company_defaults['packers_movers_company_header_layout_email_address_text'] ) );

$header_layout_email_address = esc_html( get_theme_mod( 'packers_movers_company_header_layout_email_address',
$packers_movers_company_defaults['packers_movers_company_header_layout_email_address'] ) );

$header_layout_location_address_text = esc_html( get_theme_mod( 'packers_movers_company_header_layout_location_address_text',
$packers_movers_company_defaults['packers_movers_company_header_layout_location_address_text'] ) );

$header_layout_location_address = esc_html( get_theme_mod( 'packers_movers_company_header_layout_location_address',
$packers_movers_company_defaults['packers_movers_company_header_layout_location_address'] ) );

$header_layout_working_hour_text = esc_html( get_theme_mod( 'packers_movers_company_header_layout_working_hour_text',
$packers_movers_company_defaults['packers_movers_company_header_layout_working_hour_text'] ) );

$header_layout_working_hour = esc_html( get_theme_mod( 'packers_movers_company_header_layout_working_hour',
$packers_movers_company_defaults['packers_movers_company_header_layout_working_hour'] ) );

$header_layout_phone_number_text = esc_html( get_theme_mod( 'packers_movers_company_header_layout_phone_number_text',
$packers_movers_company_defaults['packers_movers_company_header_layout_phone_number_text'] ) );

$header_layout_phone_number = esc_html( get_theme_mod( 'packers_movers_company_header_layout_phone_number',
$packers_movers_company_defaults['packers_movers_company_header_layout_phone_number'] ) );

?>

<section id="top-header">
    <div class="wrapper header-wrapper">
        <div class="theme-header-areas header-areas-left">
            <?php if( $header_layout_topbar_text ){ ?>
                <p><?php echo esc_html( $header_layout_topbar_text ); ?></p>
            <?php } ?>
        </div>
        <div class="theme-header-areas header-areas-right">
            <?php if( $header_layout_social_facebook_link ){ ?>
                <a href="<?php echo esc_url( $header_layout_social_facebook_link ); ?>"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 320 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/></svg></a>
            <?php } ?>
            <?php if( $header_layout_social_twitter_link ){ ?>
                <a href="<?php echo esc_url( $header_layout_social_twitter_link ); ?>"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/></svg></a>
            <?php } ?>
            <?php if( $header_layout_social_instagram_link ){ ?>
                <a href="<?php echo esc_url( $header_layout_social_instagram_link ); ?>"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg></a>
            <?php } ?>
            <?php if( $header_layout_social_linkdin_link ){ ?>
                <a href="<?php echo esc_url( $header_layout_social_linkdin_link ); ?>"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"/></svg></a>
            <?php } ?>
            <?php if( $header_layout_social_watsapp_link ){ ?>
                <a href="<?php echo esc_url( $header_layout_social_watsapp_link ); ?>"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/></svg></a>
            <?php } ?>
        </div>
    </div>
</section>

<header id="site-header" class="site-header-layout header-layout" role="banner">
    <div class="header-navbar">
        <div class="wrapper header-wrapper">
            <div class="theme-header-areas header-areas-left">
                <div class="header-titles">
                    <?php
                    packers_movers_company_site_logo();
                    packers_movers_company_site_description();
                    ?>
                </div>
            </div>
            <div class="theme-header-areas header-areas-right">
                <div class="site-navigation">
                    <nav class="primary-menu-wrapper" aria-label="<?php esc_attr_e('Horizontal', 'packers-movers-company'); ?>" role="navigation">
                        <ul class="primary-menu theme-menu">
                            <?php
                            if (has_nav_menu('packers-movers-company-primary-menu')) {
                                wp_nav_menu(
                                    array(
                                        'container' => '',
                                        'items_wrap' => '%3$s',
                                        'theme_location' => 'packers-movers-company-primary-menu',
                                    )
                                );
                            } else {
                                wp_list_pages(
                                    array(
                                        'match_menu_classes' => true,
                                        'show_sub_menu_icons' => true,
                                        'title_li' => false,
                                        'walker' => new Packers_Movers_Company_Walker_Page(),
                                    )
                                );
                            } ?>
                        </ul>
                    </nav>
                </div>
                <div class="navbar-controls twp-hide-js">
                    <button type="button" class="navbar-control navbar-control-offcanvas">
                        <span class="navbar-control-trigger" tabindex="-1">
                            <?php packers_movers_company_the_theme_svg('menu'); ?>
                        </span>
                    </button>
                </div>
            </div>
            <div class="theme-header-areas header-areas-right">
                <?php if( $header_layout_button_text ){ ?>
                    <p class="header_layout_button"><a href="<?php echo esc_url( $header_layout_button_link ); ?>"><?php echo esc_html( $header_layout_button_text ); ?></a></p>
                <?php } ?>
            </div>
        </div>
    </div>
</header>

<section id="info-header">
    <div class="wrapper header-wrapper">
        <div class="theme-header-areas header-areas-left">
            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"/></svg>
            <div class="header-areas-box">
                <?php if( $header_layout_location_address_text ){ ?>
                    <h6><?php echo esc_html( $header_layout_location_address_text ); ?></h6>
                <?php } ?>
                <?php if( $header_layout_location_address ){ ?>
                    <p><?php echo esc_html( $header_layout_location_address ); ?></p>
                <?php } ?>
            </div>
        </div>
        <div class="theme-header-areas header-areas-left">
            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z"/></svg>
            <div class="header-areas-box">
                <?php if( $header_layout_email_address_text ){ ?>
                    <h6><?php echo esc_html( $header_layout_email_address_text ); ?></h6>
                <?php } ?>
                <?php if( $header_layout_email_address ){ ?>
                    <p><?php echo esc_html( $header_layout_email_address ); ?></p>
                <?php } ?>
            </div>
        </div>
        <div class="theme-header-areas header-areas-right">
            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z"/></svg>
            <div class="header-areas-box">
                <?php if( $header_layout_working_hour_text ){ ?>
                    <h6><?php echo esc_html( $header_layout_working_hour_text ); ?></h6>
                <?php } ?>
                <?php if( $header_layout_working_hour ){ ?>
                    <p><?php echo esc_html( $header_layout_working_hour ); ?></p>
                <?php } ?>
            </div>
        </div>
        <div class="theme-header-areas header-areas-right">
            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z"/></svg>
            <div class="header-areas-box">
                <?php if( $header_layout_phone_number_text ){ ?>
                    <h6><?php echo esc_html( $header_layout_phone_number_text ); ?></h6>
                <?php } ?>
                <?php if( $header_layout_phone_number ){ ?>
                    <p><?php echo esc_html( $header_layout_phone_number ); ?></p>
                <?php } ?>
            </div>
        </div>
    </div>
</section>