<?php
/**
 * Header environmental
 */
return array(
	'title'      => __( 'Header environmental', 'ona' ),
	'categories' => array( 'ona-headers' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '			
			<!-- wp:group {"style":{"spacing":{"padding":{"right":"4%","left":"4%","top":"44px","bottom":"14px"}}},"backgroundColor":"dark","layout":{"inherit":false,"contentSize":"1170px","type":"constrained"}} -->
			<div class="wp-block-group has-dark-background-color has-background" style="padding-top:44px;padding-right:4%;padding-bottom:14px;padding-left:4%"><!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":false,"style":{"spacing":{"blockGap":"0px"}},"className":"is-style-no-spacing"} -->
			<div class="wp-block-columns are-vertically-aligned-center is-not-stacked-on-mobile is-style-no-spacing"><!-- wp:column {"verticalAlignment":"center","width":"40%","className":"ona-sm-down-order-2 "} -->
			<div class="wp-block-column is-vertically-aligned-center ona-sm-down-order-2" style="flex-basis:40%"><!-- wp:social-links {"iconColor":"dark","iconColorValue":"#010101","iconBackgroundColor":"light","iconBackgroundColorValue":"#fefefe","style":{"spacing":{"blockGap":{"top":"8px","left":"8px"}}},"className":"ona-sm-down-justify-content-end"} -->
			<ul class="wp-block-social-links has-icon-color has-icon-background-color ona-sm-down-justify-content-end"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

			<!-- wp:social-link {"url":"#","service":"twitter"} /-->

			<!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
			<!-- /wp:social-links --></div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center","width":"20%","style":{"spacing":{"blockGap":"0px"}}} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:20%"><!-- wp:site-logo {"width":128,"shouldSyncIcon":false,"align":"center","className":"ona-sm-down-text-align-left"} /--></div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center","width":"40%","textColor":"background","className":"is-style-ona-hide-on-mobile"} -->
			<div class="wp-block-column is-vertically-aligned-center is-style-ona-hide-on-mobile has-background-color has-text-color" style="flex-basis:40%"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
			<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"light","textColor":"dark"} -->
			<div class="wp-block-button"><a class="wp-block-button__link has-dark-color has-light-background-color has-text-color has-background wp-element-button" href="#newsletter">Subscribe Now</a></div>
			<!-- /wp:button --></div>
			<!-- /wp:buttons --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns -->

			<!-- wp:group {"style":{"spacing":{"padding":{"top":"14px","bottom":"14px"}}},"className":"is-style-ona-sm-down-mt-2"} -->
			<div class="wp-block-group is-style-ona-sm-down-mt-2" style="padding-top:14px;padding-bottom:14px"><!-- wp:separator {"style":{"color":{"background":"#8a8a8a38"}},"className":"is-style-wide"} -->
			<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:#8a8a8a38;color:#8a8a8a38"/>
			<!-- /wp:separator --></div>
			<!-- /wp:group -->

			<!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":false,"style":{"spacing":{"blockGap":"0px"}},"className":"is-style-no-spacing"} -->
			<div class="wp-block-columns are-vertically-aligned-center is-not-stacked-on-mobile is-style-no-spacing"><!-- wp:column {"verticalAlignment":"center","width":"50%","className":"ona-sm-down-order-2"} -->
			<div class="wp-block-column is-vertically-aligned-center ona-sm-down-order-2" style="flex-basis:50%">
			
			<!-- wp:navigation {"textColor":"light","className":"ona-sm-down-justify-content-center","layout":{"type":"flex","justifyContent":"left","orientation":"horizontal"},"style":{"spacing":{"blockGap":"46px"}}} -->
				<!-- wp:navigation-link {"label":"' . esc_html__( 'Home', 'ona' ) . '","url":"' . esc_url( get_site_url() ) . '","kind":"custom","isTopLevelLink":false} /-->
				<!-- wp:navigation-link {"label":"' . esc_html__( 'News', 'ona' ) . '","url":"' . esc_url( get_site_url() ) . '/news","kind":"custom","isTopLevelLink":false} /-->
				<!-- wp:navigation-link {"label":"' . esc_html__( 'About', 'ona' ) . '","url":"' . esc_url( get_site_url() ) . '/about","kind":"custom","isTopLevelLink":false} /-->
				<!-- wp:navigation-link {"label":"' . esc_html__( 'Contact', 'ona' ) . '","url":"' . esc_url( get_site_url() ) . '/contact","kind":"custom","isTopLevelLink":false} /-->
			<!-- /wp:navigation -->
			
			</div><!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center","width":"50%","textColor":"light","className":"is-style-ona-hide-on-mobile"} -->
			<div class="wp-block-column is-vertically-aligned-center is-style-ona-hide-on-mobile has-light-color has-text-color" style="flex-basis:50%"><!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search","width":100,"widthUnit":"%","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"align":"right","style":{"border":{"color":"#8a8a8a38"}}} /--></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns --></div>
			<!-- /wp:group -->',
);




