<?php
/**
 * General hero cover
 */
return array(
	'title'      => __( 'Hero cover', 'ona' ),
	'categories' => array( 'ona-general' ),
	'content'    => '			
			<!-- wp:cover {"url":"' . esc_url( get_template_directory_uri() ) . '/assets/img/ona_hero_cover.jpg","id":10,"hasParallax":true,"dimRatio":30,"customOverlayColor":"#111111","minHeight":67,"minHeightUnit":"vh","contentPosition":"center center","isDark":false,"style":{"color":[]},"className":"ona-hero"} -->
			<div class="wp-block-cover is-light has-parallax ona-hero" style="min-height:67vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-30 has-background-dim" style="background-color:#111111">
			</span><div role="img" class="wp-block-cover__image-background wp-image-10 has-parallax" style="background-position:50% 50%;background-image:url(' . esc_url( get_template_directory_uri() ) . '/assets/img/ona_hero_cover.jpg' . ')"></div><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"inherit":false,"contentSize":"720px","type":"constrained"}} -->
			<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":1,"textColor":"light","fontSize":"x-large"} -->
			<h1 class="wp-block-heading has-text-align-center has-light-color has-text-color has-x-large-font-size" id="hello-i-m-ona-and-this-is-my-personal-travel-journal">' . esc_html__( 'Hello, I\'m Ona. And this is my personal travel journal', 'ona' ) . '</h1>
			<!-- /wp:heading --></div>
			<!-- /wp:group --></div></div>
			<!-- /wp:cover -->
			',
);



