<?php
/**
 * The main template file
 * @package Packers Movers Company
 * @since 1.0.0
 */

get_header();
$packers_movers_company_default = packers_movers_company_get_default_theme_options();
$global_sidebar_layout = esc_html( get_theme_mod( 'global_sidebar_layout',$packers_movers_company_default['global_sidebar_layout'] ) );
$packers_movers_company_sidebar_column_class = 'column-order-2';
if ($global_sidebar_layout == 'right-sidebar') {
    $packers_movers_company_sidebar_column_class = 'column-order-1';
}

global $packers_movers_company_archive_first_class; ?>
    <div class="archive-main-block">
        <div class="wrapper">
            <div class="column-row">

                <div id="primary" class="content-area <?php echo $packers_movers_company_sidebar_column_class; ?>">
                    <main id="site-content" role="main">

                        <?php

                        if( !is_front_page() ) {
                            packers_movers_company_breadcrumb();
                        }

                        if( have_posts() ): ?>

                            <div class="article-wraper article-wraper-archive">
                                <?php
                                while( have_posts() ):
                                    the_post();

                                    get_template_part( 'template-parts/content', get_post_format() );

                                endwhile; ?>
                            </div>

                            <?php
                            if( is_search() ){
                                the_posts_pagination();
                            }else{
                                do_action('packers_movers_company_archive_pagination');
                            }

                        else :

                            get_template_part('template-parts/content', 'none');

                        endif; ?>
                    </main>
                </div>
                <?php get_sidebar();?>
            </div>
        </div>
    </div>
<?php
get_footer();
