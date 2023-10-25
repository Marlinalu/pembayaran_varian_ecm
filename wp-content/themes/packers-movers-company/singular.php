<?php
/**
 * The template for displaying single posts and pages.
 * @package Packers Movers Company
 * @since 1.0.0
 */
get_header();

    $packers_movers_company_default = packers_movers_company_get_default_theme_options();
    $global_sidebar_layout = esc_html( get_theme_mod( 'global_sidebar_layout',$packers_movers_company_default['global_sidebar_layout'] ) );
    $packers_movers_company_post_sidebar = esc_html( get_post_meta( $post->ID, 'packers_movers_company_post_sidebar_option', true ) );
    $packers_movers_company_sidebar_column_class = 'column-order-1';

    if (!empty($packers_movers_company_post_sidebar)) {
        $global_sidebar_layout = $packers_movers_company_post_sidebar;
    }

    if ($global_sidebar_layout == 'left-sidebar') {
        $packers_movers_company_sidebar_column_class = 'column-order-2';
    } ?>

    <div class="singular-main-block">
        <div class="wrapper">
            <div class="column-row">

                <div id="primary" class="content-area <?php echo $packers_movers_company_sidebar_column_class; ?>">
                    <main id="site-content" class="" role="main">

                        <?php
                            packers_movers_company_breadcrumb();

                        if( have_posts() ): ?>

                            <div class="article-wraper">

                                <?php while (have_posts()) :
                                    the_post();

                                    get_template_part('template-parts/content', 'single');

                                    if ( ( is_single() || is_page() ) && ( comments_open() || get_comments_number() ) && !post_password_required() ) { ?>

                                        <div class="comments-wrapper">
                                            <?php comments_template(); ?>
                                        </div>

                                    <?php
                                    }

                                endwhile; ?>

                            </div>

                        <?php
                        else :

                            get_template_part('template-parts/content', 'none');

                        endif;

                        /**
                         * Navigation
                         * 
                         * @hooked packers_movers_company_related_posts - 20  
                         * @hooked packers_movers_company_single_post_navigation - 30  
                        */

                        do_action('packers_movers_company_navigation_action'); ?>

                    </main>
                </div>
                <?php get_sidebar();?>
            </div>
        </div>
    </div>

<?php
get_footer();
