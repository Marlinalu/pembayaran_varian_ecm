<?php
/**
 * Header health
 */
return array(
	'title'      => __( 'Header health', 'ona' ),
	'categories' => array( 'ona-headers' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '
			<!-- wp:group {"style":{"spacing":{"padding":{"right":"4%","left":"4%","top":"44px","bottom":"44px"}}},"layout":{"inherit":false,"contentSize":"1170px"}} -->
			<div class="wp-block-group" style="padding-top:44px;padding-right:4%;padding-bottom:44px;padding-left:4%"><!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":false,"style":{"spacing":{"blockGap":"0px"}},"className":"is-style-no-spacing"} -->
			<div class="wp-block-columns are-vertically-aligned-center is-not-stacked-on-mobile is-style-no-spacing"><!-- wp:column {"verticalAlignment":"center","width":"25%","style":{"spacing":{"blockGap":"0px"}}} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:25%">
			<!-- wp:site-title {"className":"ona-site-title","fontSize":"medium-large","fontFamily":"headings"} /-->

			<!-- wp:site-tagline {"style":{"typography":{"fontSize":"12px"}}} /--></div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
			<!-- wp:navigation {"textColor":"foreground","className":"ona-sm-down-justify-content-end is-style-ona-tablet-justify-center","layout":{"type":"flex","justifyContent":"left","orientation":"horizontal"}} -->
				<!-- wp:navigation-link {"label":"' . esc_html__( 'Home', 'ona' ) . '","url":"' . esc_url( get_site_url() ) . '","kind":"custom","isTopLevelLink":false} /-->
				<!-- wp:navigation-link {"label":"' . esc_html__( 'About', 'ona' ) . '","url":"' . esc_url( get_site_url() ) . '/about","kind":"custom","isTopLevelLink":false} /-->
				<!-- wp:navigation-link {"label":"' . esc_html__( 'Contact', 'ona' ) . '","url":"' . esc_url( get_site_url() ) . '/contact","kind":"custom","isTopLevelLink":false} /-->
				<!-- wp:navigation-link {"label":"' . esc_html__( 'News', 'ona' ) . '","url":"' . esc_url( get_site_url() ) . '/news","kind":"custom","isTopLevelItem":false} /-->
			<!-- /wp:navigation -->

			</div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center","width":"25%","className":"is-style-ona-hide-on-mobile"} -->
			<div class="wp-block-column is-vertically-aligned-center is-style-ona-hide-on-mobile" style="flex-basis:25%">
			
			<!-- wp:social-links {"iconBackgroundColor":"dark","iconBackgroundColorValue":"#010101","style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","justifyContent":"right"}} -->
			<ul class="wp-block-social-links has-icon-background-color"><!-- wp:social-link {"url":"#","service":"twitter"} /-->

			<!-- wp:social-link {"url":"#","service":"facebook"} /-->

			<!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
			<!-- /wp:social-links --></div>

			<!-- /wp:column --></div>
			<!-- /wp:columns --></div>
			<!-- /wp:group -->',
);



