<?php
/**
 * Footer health
 */
return array(
	'title'      => __( 'Footer health', 'ona' ),
	'categories' => array( 'ona-footers' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '
			<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}}} -->
			<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"right":"1.5rem","left":"1.5rem","top":"48px","bottom":"60px"}}},"backgroundColor":"secondary","layout":{"contentSize":"1170px"}} -->
			<div class="wp-block-group has-secondary-background-color has-background" style="padding-top:48px;padding-right:1.5rem;padding-bottom:60px;padding-left:1.5rem"><!-- wp:group {"style":{"spacing":{"blockGap":"32px"}},"layout":{"inherit":false}} -->
			<div class="wp-block-group">
			
			<!-- wp:navigation {"textColor":"foreground","overlayMenu":"never","layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"},"style":{"typography":{"fontSize":"1rem"},"spacing":{"blockGap":"44px"}}} -->
				<!-- wp:navigation-link {"label":"' . esc_html__( 'Home', 'ona' ) . '","url":"#","kind":"custom","isTopLevelLink":false} /-->
				<!-- wp:navigation-link {"label":"' . esc_html__( 'About', 'ona' ) . '","url":"#","kind":"custom","isTopLevelLink":false} /-->
				<!-- wp:navigation-link {"label":"' . esc_html__( 'Contact', 'ona' ) . '","url":"#","kind":"custom","isTopLevelLink":false} /-->
			<!-- /wp:navigation -->

			<!-- wp:social-links {"iconColor":"foreground","iconColorValue":"#000000","size":"has-small-icon-size","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":{"top":"16px","left":"16px"}}}} -->
			<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

			<!-- wp:social-link {"url":"#","service":"twitter"} /-->
			<!-- wp:social-link {"url":"#","service":"pinterest"} /-->
			<!-- wp:social-link {"url":"#","service":"instagram"} /-->
			<!-- wp:social-link {"url":"#","service":"youtube"} /--></ul>
			<!-- /wp:social-links --></div>
			<!-- /wp:group --></div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"padding":{"top":"24px","bottom":"24px"}}},"layout":{"inherit":false}} -->
			<div class="wp-block-group" style="padding-top:24px;padding-bottom:24px">			
			
			<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center","verticalAlignment":"top"}} -->
			<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|text-light"}}}},"textColor":"text-light","className":"mb-1 ona-copyright","fontSize":"tiny"} -->
			<p class="has-text-align-center mb-1 ona-copyright has-text-light-color has-text-color has-link-color has-tiny-font-size">' . sprintf( __( '© %d Powered by ', 'ona' ), date_i18n("Y")) . '<a href="https://deothemes.com/wordpress-themes/ona-full-site-editing-wordpress-theme/" style="color:inherit">' . esc_html__( 'Ona WordPress theme', 'ona' ) . '</a></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|text-light"}}}},"textColor":"text-light","className":"mb-1 ona-copyright","fontSize":"tiny"} -->
			<p class="has-text-align-center mb-1 ona-copyright has-text-light-color has-text-color has-link-color has-tiny-font-size"> | </p>
			<!-- /wp:paragraph -->

			<!-- wp:navigation {"textColor":"text-light","overlayMenu":"never","style":{"spacing":{"blockGap":"16px"}},"fontSize":"tiny"} -->
				<!-- wp:navigation-link {"label":"' . esc_html__( 'Privacy Policy', 'ona' ) . '","url":"#","kind":"custom","isTopLevelLink":false} /-->
				<!-- wp:navigation-link {"label":"' . esc_html__( 'Terms & Conditions', 'ona' ) . '","url":"#","kind":"custom","isTopLevelLink":false} /-->
			<!-- /wp:navigation -->
			
			</div>
			<!-- /wp:group --></div>
			<!-- /wp:group --></div>
			<!-- /wp:group -->
			',
);



