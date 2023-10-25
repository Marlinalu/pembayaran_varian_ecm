<?php
/*
 * @package Classic Bakery
 */

function classic_bakery_admin_enqueue_scripts() {
	wp_enqueue_style( 'classic-bakery-admin-style', esc_url( get_template_directory_uri() ).'/css/addon.css' );
}
add_action( 'admin_enqueue_scripts', 'classic_bakery_admin_enqueue_scripts' );

add_action('after_switch_theme', 'classic_bakery_options');

function classic_bakery_options () {
	global $pagenow;
	if( is_admin() && 'themes.php' == $pagenow && isset( $_GET['activated'] ) && current_user_can( 'manage_options' ) ) {
		wp_redirect( admin_url( 'themes.php?page=classic-bakery' ) );
		exit;
	}
}

function classic_bakery_theme_info_menu_link() {

	$classic_bakery_theme = wp_get_theme();
	add_theme_page(
		sprintf( esc_html__( 'Welcome to %1$s %2$s', 'classic-bakery' ), $classic_bakery_theme->display( 'Name' ), $classic_bakery_theme->display( 'Version' ) ),
		esc_html__( 'Theme Info', 'classic-bakery' ),'edit_theme_options','classic-bakery','classic_bakery_theme_info_page'
	);
}
add_action( 'admin_menu', 'classic_bakery_theme_info_menu_link' );

function classic_bakery_theme_info_page() {

	$classic_bakery_theme = wp_get_theme();
	?>
<div class="wrap theme-info-wrap">
	<h1><?php printf( esc_html__( 'Welcome to %1$s %2$s', 'classic-bakery' ), esc_html($classic_bakery_theme->display( 'Name', 'classic-bakery'  )),esc_html($classic_bakery_theme->display( 'Version', 'classic-bakery' ))); ?>
	</h1>
	<p class="theme-description">
	<?php esc_html_e( 'Do you want to configure this theme? Look no further, our easy-to-follow theme documentation will walk you through it.', 'classic-bakery' ); ?>
	</p>
	<hr>
	<div class="important-links clearfix">
		<p><strong><?php esc_html_e( 'Theme Links', 'classic-bakery' ); ?>:</strong>
			<a href="<?php echo esc_url( CLASSIC_BAKERY_THEME_PAGE ); ?>" target="_blank"><?php esc_html_e( 'Theme Page', 'classic-bakery' ); ?></a>
			<a href="<?php echo esc_url( CLASSIC_BAKERY_SUPPORT ); ?>" target="_blank"><?php esc_html_e( 'Contact Us', 'classic-bakery' ); ?></a>
			<a href="<?php echo esc_url( CLASSIC_BAKERY_REVIEW ); ?>" target="_blank"><?php esc_html_e( 'Rate This Theme', 'classic-bakery' ); ?></a>
			<a href="<?php echo esc_url( CLASSIC_BAKERY_PRO_DEMO ); ?>" target="_blank"><?php esc_html_e( 'Premium Demo', 'classic-bakery' ); ?></a>
			<a href="<?php echo esc_url( CLASSIC_BAKERY_PREMIUM_PAGE ); ?>" target="_blank"><?php esc_html_e( 'Go To Premium', 'classic-bakery' ); ?></a>
			<a href="<?php echo esc_url( CLASSIC_BAKERY_THEME_DOCUMENTATION ); ?>" target="_blank"><?php esc_html_e( 'Documentation', 'classic-bakery' ); ?></a>
		</p>
	</div>
	<hr>
	<div id="getting-started">
		<h3><?php printf( esc_html__( 'Getting started with %s', 'classic-bakery' ),
		esc_html($classic_bakery_theme->display( 'Name', 'classic-bakery' ))); ?></h3>
		<div class="columns-wrapper clearfix">
			<div class="column column-half clearfix">
				<div class="section">
					<h4><?php esc_html_e( 'Theme Description', 'classic-bakery' ); ?></h4>
					<div class="theme-description-1"><?php echo esc_html($classic_bakery_theme->display( 'Description' )); ?></div>
				</div>
			</div>
			<div class="column column-half clearfix">
				<img src="<?php echo esc_url( $classic_bakery_theme->get_screenshot() ); ?>" alt=""/>
				<div class="section">
					<h4><?php esc_html_e( 'Theme Options', 'classic-bakery' ); ?></h4>
					<p class="about">
					<?php printf( esc_html__( '%s makes use of the Customizer for all theme settings. Click on "Customize Theme" to open the Customizer now.', 'classic-bakery' ),esc_html($classic_bakery_theme->display( 'Name', 'classic-bakery' ))); ?></p>
					<p>
					<a target="_blank" href="<?php echo esc_url( wp_customize_url() ); ?>" class="button button-primary"><?php esc_html_e( 'Customize Theme', 'classic-bakery' ); ?></a>
					<a href="<?php echo esc_url( CLASSIC_BAKERY_PREMIUM_PAGE ); ?>" target="_blank" class="button button-secondary premium-btn"><?php esc_html_e( 'Checkout Premium', 'classic-bakery' ); ?></a></p>
				</div>
			</div>
		</div>
	</div>
	<hr>
	<div id="theme-author">
	  <p><?php
		printf( esc_html__( '%1$s is proudly brought to you by %2$s. If you like this theme, %3$s :)', 'classic-bakery' ),
			esc_html($classic_bakery_theme->display( 'Name', 'classic-bakery' )),
			'<a target="_blank" href="' . esc_url( 'https://www.theclassictemplates.com/', 'classic-bakery' ) . '">classictemplate</a>',
			'<a target="_blank" href="' . esc_url( CLASSIC_BAKERY_REVIEW ) . '" title="' . esc_attr__( 'Rate it', 'classic-bakery' ) . '">' . esc_html_x( 'rate it', 'If you like this theme, rate it', 'classic-bakery' ) . '</a>'
		)
		?></p>
	</div>
</div>
<?php
}
