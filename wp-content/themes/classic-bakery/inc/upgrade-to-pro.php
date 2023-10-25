<?php
/**
 * Upgrade to pro options
 */
function classic_bakery_upgrade_pro_options( $wp_customize ) {

	$wp_customize->add_section(
		'upgrade_premium',
		array(
			'title'    => __( 'About Classic Bakery', 'classic-bakery' ),
			'priority' => 1,
		)
	);

	class Classic_Bakery_Pro_Button_Customize_Control extends WP_Customize_Control {
		public $type = 'upgrade_premium';

		function render_content() {
			?>
			<div class="pro_info">
				<ul>
					<li><a class="upgrade-to-pro" href="<?php echo esc_url( CLASSIC_BAKERY_THEME_PAGE ); ?>" target="_blank"><i class="dashicons dashicons-admin-appearance"></i><?php esc_html_e( 'Theme Page', 'classic-bakery' ); ?> </a></li>

					<li><a class="upgrade-to-pro" href="<?php echo esc_url( CLASSIC_BAKERY_SUPPORT ); ?>' ); ?>" target="_blank"><i class="dashicons dashicons-lightbulb"></i><?php esc_html_e( 'Support Forum', 'classic-bakery' ); ?> </a></li>

					<li><a class="upgrade-to-pro" href="<?php echo esc_url( CLASSIC_BAKERY_REVIEW ); ?>' ); ?>" target="_blank"><i class="dashicons dashicons-star-filled"></i><?php esc_html_e( 'Rate Us', 'classic-bakery' ); ?> </a></li>

					<li><a class="upgrade-to-pro" href="<?php echo esc_url( CLASSIC_BAKERY_PRO_DEMO ); ?>' ); ?>" target="_blank"><i class="dashicons dashicons-awards"></i><?php esc_html_e( 'Premium Demo', 'classic-bakery' ); ?> </a></li>

					<li><a class="upgrade-to-pro" href="<?php echo esc_url( CLASSIC_BAKERY_PREMIUM_PAGE ); ?>" target="_blank"><i class="dashicons dashicons-cart"></i><?php esc_html_e( 'Upgrade Pro', 'classic-bakery' ); ?> </a></li>

					<li><a class="upgrade-to-pro" href="<?php echo esc_url( CLASSIC_BAKERY_THEME_DOCUMENTATION ); ?>' ); ?>" target="_blank"><i class="dashicons dashicons-visibility"></i><?php esc_html_e( 'Theme Documentation', 'classic-bakery' ); ?> </a></li>

				</ul>
			</div>
			<?php
		}
	}

	$wp_customize->add_setting(
		'pro_info_buttons',
		array(
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'classic_bakery_sanitize_text',
		)
	);

	$wp_customize->add_control(
		new Classic_Bakery_Pro_Button_Customize_Control(
			$wp_customize,
			'pro_info_buttons',
			array(
				'section' => 'upgrade_premium',
			)
		)
	);
}
add_action( 'customize_register', 'classic_bakery_upgrade_pro_options' );
