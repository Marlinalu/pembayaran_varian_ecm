<?php
/**
 * The sidebar containing the main widget area
 * @package Packers Movers Company
 */

$packers_movers_company_default = packers_movers_company_get_default_theme_options();

$packers_movers_company_post_sidebar = esc_html( get_post_meta( $post->ID, 'packers_movers_company_post_sidebar_option', true ) );
$packers_movers_company_sidebar_column_class = 'column-order-2';

if (empty($packers_movers_company_post_sidebar)) {
    $global_sidebar_layout = esc_html( get_theme_mod( 'global_sidebar_layout',$packers_movers_company_default['global_sidebar_layout'] ) );
} else {
    $global_sidebar_layout = $packers_movers_company_post_sidebar;
}
if ( ! is_active_sidebar( 'sidebar-1' ) || $global_sidebar_layout == 'no-sidebar' ) {
    return;
}

if ($global_sidebar_layout == 'left-sidebar') {
    $packers_movers_company_sidebar_column_class = 'column-order-1';
}
 ?>

<aside id="secondary" class="widget-area <?php echo $packers_movers_company_sidebar_column_class; ?>">
    <div class="widget-area-wrapper">
        <?php dynamic_sidebar( 'sidebar-1' ); ?>
    </div>
</aside>
