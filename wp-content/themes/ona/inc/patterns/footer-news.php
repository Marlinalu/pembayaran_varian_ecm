<?php
/**
 * Footer news
 */
$form = ona_get_mailchimp_forms( 'style-3' );

return array(
	'title'      => __( 'Footer news', 'ona' ),
	'categories' => array( 'ona-footers' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"56px"}}},"backgroundColor":"dark"} -->
			<div class="wp-block-group has-dark-background-color has-background" style="padding-top:56px"><!-- wp:group {"layout":{"inherit":false,"contentSize":"1170px","type":"constrained"}} -->
			<div class="wp-block-group"><!-- wp:columns -->
			<div class="wp-block-columns"><!-- wp:column {"width":"25%","style":{"spacing":{"padding":{"bottom":"40px"}}}} -->
			<div class="wp-block-column" style="padding-bottom:40px;flex-basis:25%"><!-- wp:image {"id":424,"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="' . esc_url( get_theme_file_uri( 'assets/img/news/ona_news_logo_white.svg' ) ) . '" alt="" class="wp-image-424"/></figure>
			<!-- /wp:image -->

			<!-- wp:paragraph {"textColor":"text-light"} -->
			<p class="has-text-light-color has-text-color">' . esc_html__( 'Ona News is a modern magazine WordPress theme. The balance between design and code.', 'ona' ) . '</p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"25%","style":{"spacing":{"padding":{"bottom":"40px"}}}} -->
			<div class="wp-block-column" style="padding-bottom:40px;flex-basis:25%"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"uppercase"}},"textColor":"light","fontSize":"base"} -->
			<h3 class="wp-block-heading has-light-color has-text-color has-base-font-size" style="font-style:normal;font-weight:600;text-transform:uppercase">' . esc_html__( 'Trending News', 'ona' ) . '</h3>
			<!-- /wp:heading -->

			<!-- wp:query {"queryId":1,"query":{"perPage":"2","pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","layout":{"inherit":false}} -->
			<div class="wp-block-query alignwide"><!-- wp:post-template {"className":"is-style-ona-post-grid-gap-40","layout":{"type":"grid","columnCount":1}} -->
			<!-- wp:group {"tagName":"article","style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
			<article class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","width":"88px","height":"68px","style":{"layout":{"selfStretch":"fixed","flexSize":"88px"}},"className":"hover-scale no-shrink"} /-->

			<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}}} -->
			<div class="wp-block-group"><!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light"}}}},"fontSize":"base"} /-->

			<!-- wp:post-date /--></div>
			<!-- /wp:group --></article>
			<!-- /wp:group -->
			<!-- /wp:post-template --></div>
			<!-- /wp:query --></div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"25%","style":{"spacing":{"padding":{"bottom":"40px"}}}} -->
			<div class="wp-block-column" style="padding-bottom:40px;flex-basis:25%"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"uppercase"}},"textColor":"light","fontSize":"base"} -->
			<h3 class="wp-block-heading has-light-color has-text-color has-base-font-size" style="font-style:normal;font-weight:600;text-transform:uppercase">' . esc_html__( 'Useful Links', 'ona' ) . '</h3>
			<!-- /wp:heading -->

			<!-- wp:navigation {"textColor":"light","overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"},"style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
				<!-- wp:navigation-link {"label":"' . esc_html__( 'About', 'ona' ) . '","url":"#","kind":"custom","isTopLevelLink":false} /-->
				<!-- wp:navigation-link {"label":"' . esc_html__( 'Contact', 'ona' ) . '","url":"#","kind":"custom","isTopLevelLink":false} /-->
				<!-- wp:navigation-link {"label":"' . esc_html__( 'Cookies Settings', 'ona' ) . '","url":"#","kind":"custom","isTopLevelLink":false} /-->
				<!-- wp:navigation-link {"label":"' . esc_html__( 'We are hiring', 'ona' ) . '","url":"#","kind":"custom","isTopLevelLink":false} /-->
				<!-- wp:navigation-link {"label":"' . esc_html__( 'Advertise', 'ona' ) . '","url":"#","kind":"custom","isTopLevelLink":false} /-->
			<!-- /wp:navigation -->
			
			</div><!-- /wp:column -->

			<!-- wp:column {"width":"25%","style":{"spacing":{"blockGap":"1rem"}}} -->
			<div class="wp-block-column" style="flex-basis:25%"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"uppercase"}},"textColor":"light","fontSize":"base"} -->
			<h3 class="wp-block-heading has-light-color has-text-color has-base-font-size" style="font-style:normal;font-weight:600;text-transform:uppercase">' . esc_html__( 'Stay updated', 'ona' ) . '</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.94rem"}},"textColor":"text-light"} -->
			<p class="has-text-light-color has-text-color" style="font-size:0.94rem">' . esc_html__( 'Subscribe to our mailing list to receives daily updates direct to your inbox!', 'ona' ) . '</p>
			<!-- /wp:paragraph -->

			' . $form . '

			</div><!-- /wp:column --></div>
			<!-- /wp:columns --></div>
			<!-- /wp:group --></div>
			<!-- /wp:group -->


			<!-- wp:group {"backgroundColor":"dark","layout":{"contentSize":"1170px","type":"constrained"}} -->
			<div class="wp-block-group has-dark-background-color has-background"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"margin":{"top":"0.7rem","bottom":"0.5rem"},"blockGap":"10px"}}} -->
			<div class="wp-block-columns are-vertically-aligned-center" style="margin-top:0.7rem;margin-bottom:0.5rem"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"0"}}} -->
			<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|text-light"}}}},"textColor":"text-light","className":"mb-1 ona-copyright","fontSize":"small"} -->
			<p class="mb-1 ona-copyright has-text-light-color has-text-color has-link-color has-small-font-size">' . sprintf( __( '© %d Powered by ', 'ona' ), date_i18n("Y")) . '<a href="https://deothemes.com/wordpress-themes/ona-full-site-editing-wordpress-theme/" style="color:inherit">' . esc_html__( 'Ona WordPress theme', 'ona' ) . '</a></p>
			<!-- /wp:paragraph -->

			<!-- wp:navigation {"textColor":"text-light","overlayMenu":"never","layout":{"type":"flex"},"style":{"spacing":{"blockGap":"24px"}},"fontSize":"small"} -->
				<!-- wp:navigation-link {"label":"' . esc_html__( 'Privacy Policy', 'ona' ) . '","url":"#","kind":"custom","isTopLevelLink":true} /-->
				<!-- wp:navigation-link {"label":"' . esc_html__( 'Terms \u0026amp; Conditions', 'ona' ) . '","url":"#","kind":"custom","isTopLevelLink":true} /-->
			<!-- /wp:navigation -->

			</div><!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center"} -->
			<div class="wp-block-column is-vertically-aligned-center"><!-- wp:social-links {"iconColor":"light","iconColorValue":"#fefefe","size":"has-small-icon-size","style":{"spacing":{"blockGap":"16px"}},"className":"is-style-logos-only is-style-ona-tablet-justify-start","layout":{"type":"flex","justifyContent":"right"}} -->
			<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only is-style-ona-tablet-justify-start">			
			<!-- wp:social-link {"url":"#","service":"twitter"} /-->
			<!-- wp:social-link {"url":"#","service":"facebook"} /-->
			<!-- wp:social-link {"url":"#","service":"instagram"} /-->
			<!-- wp:social-link {"url":"#","service":"pinterest"} /-->
			<!-- wp:social-link {"url":"#","service":"youtube"} /--></ul>
			<!-- /wp:social-links --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns --></div>
			<!-- /wp:group -->',
);



