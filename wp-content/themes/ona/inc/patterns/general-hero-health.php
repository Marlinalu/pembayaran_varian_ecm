<?php
/**
 * General hero health
 */
return array(
	'title'      => __( 'Hero health', 'ona' ),
	'categories' => array( 'ona-general' ),
	'content'    => '		
		<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"backgroundColor":"background-light","layout":{"contentSize":""}} -->
		<div class="wp-block-group has-background-light-background-color has-background" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:columns -->
		<div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"padding":{"bottom":"8%","left":"8%","top":"8%","right":"8%"}}},"backgroundColor":"primary","className":"is-style-default"} -->
		<div class="wp-block-column is-style-default has-primary-background-color has-background" style="padding-top:8%;padding-right:8%;padding-bottom:8%;padding-left:8%"><!-- wp:group {"style":{"border":{"width":"10px"}},"borderColor":"background"} -->
		<div class="wp-block-group has-border-color has-background-border-color" style="border-width:10px"><!-- wp:image {"id":429,"sizeSlug":"full","linkDestination":"none"} -->
		<figure class="wp-block-image size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/health/ona_health_hero.jpg" alt="ona_health_hero" class="wp-image-429"/></figure>
		<!-- /wp:image --></div>
		<!-- /wp:group --></div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"8%","right":"8%","bottom":"8%","left":"8%"}}}} -->
		<div class="wp-block-column is-vertically-aligned-center" style="padding-top:8%;padding-right:8%;padding-bottom:8%;padding-left:8%">

		<!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"2.25rem"},"spacing":{"margin":{"top":"16px","bottom":"16px"}}},"textColor":"primary","className":"is-style-ona-alt-font"} -->
		<h1 class="wp-block-heading is-style-ona-alt-font has-primary-color has-text-color" id="i-am-a-lifestyle-and-fashion-blogger-a-person-who-enjoys-travel" style="margin-top:16px;margin-bottom:16px;font-size:2.25rem">' . esc_html__( 'Mindful Intentions', 'ona' ) . '</h1>
		<!-- /wp:heading -->

		<!-- wp:heading {"level":1,"style":{"typography":{"letterSpacing":"0.03em"}},"fontSize":"x-large"} -->
		<h1 class="wp-block-heading has-x-large-font-size" id="i-am-a-lifestyle-and-fashion-blogger-a-person-who-enjoys-travel" style="letter-spacing:0.03em">' . esc_html__( 'A Simple Way to Program Yourself For Happiness', 'ona' ) . '</h1>
		<!-- /wp:heading --></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns --></div>
		<!-- /wp:group -->',
);



