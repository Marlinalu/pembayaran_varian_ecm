<?php
/**
 * Displays top navigation
 *
 * @package Restaurant Zone
 */
?>

<div class="container">
	<div class="row">
		<div class="col-lg-5 col-md-5 col-sm-12 col-12 align-self-center">
			<div class="top-info">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6 col-12 align-self-center">
						<?php if(get_theme_mod('restaurant_zone_phone_number_info') != ''){ ?>
							<p class="m-0"><i class="<?php echo esc_html( get_theme_mod('restaurant_zone_phone_number_icon') ); ?>"></i><a href="tel:<?php echo esc_html(get_theme_mod('restaurant_zone_phone_number_info','')); ?>"><?php echo esc_html(get_theme_mod('restaurant_zone_phone_number_info','')); ?></a></p>
						<?php }?>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-12 align-self-center">
						<?php if(get_theme_mod('restaurant_zone_email_info') != ''){ ?>
							<p class="m-0"><i class="<?php echo esc_html( get_theme_mod('restaurant_zone_emails_icon') ); ?>"></i><a href="mailto:<?php echo esc_html(get_theme_mod('restaurant_zone_email_info','')); ?>"><?php echo esc_html(get_theme_mod('restaurant_zone_email_info','')); ?></a></p>
						<?php }?>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-7 col-md-7 col-sm-12 col-12 align-self-center">
			<div class="row">
			  	<div class="col-lg-9 col-md-8 col-sm-8 col-12 align-self-center">
			  		<div class="social-link">
				  		<?php if(get_theme_mod('restaurant_zone_facebook_url') != ''){ ?>
							<a href="<?php echo esc_url(get_theme_mod('restaurant_zone_facebook_url','')); ?>"><i class="<?php echo esc_html( get_theme_mod('restaurant_zone_facebook_icon') ); ?>"></i></a>
						<?php }?>
						<?php if(get_theme_mod('restaurant_zone_twitter_url') != ''){ ?>
							<a href="<?php echo esc_url(get_theme_mod('restaurant_zone_twitter_url','')); ?>"><i class="<?php echo esc_html( get_theme_mod('restaurant_zone_twitter_icon') ); ?>"></i></a>
						<?php }?>
						<?php if(get_theme_mod('restaurant_zone_intagram_url') != ''){ ?>
							<a href="<?php echo esc_url(get_theme_mod('restaurant_zone_intagram_url','')); ?>"><i class="<?php echo esc_html( get_theme_mod('restaurant_zone_intagram_icon') ); ?>"></i></a>
						<?php }?>
						<?php if(get_theme_mod('restaurant_zone_linkedin_url') != ''){ ?>
							<a href="<?php echo esc_url(get_theme_mod('restaurant_zone_linkedin_url','')); ?>"><i class="<?php echo esc_html( get_theme_mod('restaurant_zone_linkedin_icon') ); ?>"></i></a>
						<?php }?>
						<?php if(get_theme_mod('restaurant_zone_pintrest_url') != ''){ ?>
							<a href="<?php echo esc_url(get_theme_mod('restaurant_zone_pintrest_url','')); ?>"><i class="<?php echo esc_html( get_theme_mod('restaurant_zone_pintrest_icon') ); ?>"></i></a>
						<?php }?>
						<?php if(class_exists('woocommerce')){ ?>
				        	<?php global $woocommerce; ?>
				        	<a class="cart-customlocation" href="<?php echo esc_url(wc_get_cart_url()); ?>" title="<?php esc_attr_e( 'shopping cart','restaurant-zone' ); ?>"><i class="fas fa-cart-arrow-down"></i></a>
				        <?php }?>
					</div>
			  	</div>
			  	<div class="col-lg-3 col-md-4 col-sm-4 col-12 reservation-btn align-self-center">
					<?php if(get_theme_mod('restaurant_zone_reservation_button') != ''){ ?>
    					<a href="<?php echo esc_url(get_theme_mod('restaurant_zone_reservation_button','')); ?>"><?php esc_html_e('Reservation','restaurant-zone'); ?></a>
					<?php }?>
				</div>
			</div>
		</div>
	</div>
</div>