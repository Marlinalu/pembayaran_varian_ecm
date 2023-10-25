<?php
/**
 * Default news
 */
return array(
	'title'      => __( 'Header news', 'ona' ),
	'categories' => array( 'ona-headers' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"1.5rem","right":"1.5rem"}}},"backgroundColor":"dark","layout":{"type":"constrained","contentSize":"1170px"}} -->
			<div class="wp-block-group has-dark-background-color has-background" style="padding-top:var(--wp--preset--spacing--20);padding-right:1.5rem;padding-bottom:var(--wp--preset--spacing--20);padding-left:1.5rem"><!-- wp:columns -->
			<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center"} -->
			<div class="wp-block-column is-vertically-aligned-center">
			
			<!-- wp:navigation {"textColor":"light","overlayMenu":"never","className":"is-style-ona-tablet-justify-center","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"fontSize":"small"} -->
				<!-- wp:navigation-link {"label":"' . esc_html__( 'News', 'ona' ) . '","url":"' . esc_url( get_site_url() ) . '","kind":"custom","isTopLevelLink":false} /-->
				<!-- wp:navigation-link {"label":"' . esc_html__( 'Lifestyle', 'ona' ) . '","url":"' . esc_url( get_site_url() ) . '","kind":"custom","isTopLevelLink":false} /-->
				<!-- wp:navigation-link {"label":"' . esc_html__( 'Advertise', 'ona' ) . '","url":"' . esc_url( get_site_url() ) . '","kind":"custom","isTopLevelLink":false} /-->
				<!-- wp:navigation-link {"label":"' . esc_html__( 'Contact', 'ona' ) . '","url":"' . esc_url( get_site_url() ) . '","kind":"custom","isTopLevelLink":false} /-->
			<!-- /wp:navigation -->
			
			</div><!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center"} -->
			<div class="wp-block-column is-vertically-aligned-center"><!-- wp:social-links {"iconColor":"light","iconColorValue":"#fefefe","size":"has-small-icon-size","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}},"className":"is-style-logos-only is-style-ona-tablet-justify-center","layout":{"type":"flex","justifyContent":"right"}} -->
			<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only is-style-ona-tablet-justify-center"><!-- wp:social-link {"url":"#","service":"twitter"} /-->
			<!-- wp:social-link {"url":"#","service":"facebook"} /-->
			<!-- wp:social-link {"url":"#","service":"youtube"} /--></ul>
			<!-- /wp:social-links --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns --></div>
			<!-- /wp:group -->


			<!-- wp:group {"style":{"spacing":{"padding":{"top":"1.25rem","bottom":"0.63rem","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"1170px"}} -->
			<div class="wp-block-group" style="padding-top:1.25rem;padding-right:var(--wp--preset--spacing--50);padding-bottom:0.63rem;padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"1.5rem"}}},"className":"is-style-no-spacing"} -->
			<div class="wp-block-columns are-vertically-aligned-center is-style-no-spacing"><!-- wp:column {"verticalAlignment":"center","width":"30%","style":{"spacing":{"blockGap":"0px"}}} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%"><!-- wp:site-logo {"width":229,"shouldSyncIcon":false,"className":"ona-md-down-text-align-center"} /--></div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center","width":"70%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:70%"><!-- wp:image {"align":"right","id":8,"sizeSlug":"full","linkDestination":"custom","className":"is-style-no-spacing"} -->
			<figure class="wp-block-image alignright size-full is-style-no-spacing"><a href="#"><img src="' . esc_url( get_theme_file_uri( 'assets/img/news/ona_news_header_banner.jpg' ) ) . '" alt="" class="wp-image-8"/></a></figure>
			<!-- /wp:image --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns --></div>
			<!-- /wp:group -->



			<!-- wp:group {"style":{"spacing":{"padding":{"top":"0.63rem","bottom":"1.25rem","left":"1.25rem","right":"1.25rem"}},"position":{"type":""},"border":{"bottom":{"color":"var:preset|color|stroke","width":"1px"}}},"layout":{"type":"constrained","contentSize":"1170px"}} -->
			<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--stroke);border-bottom-width:1px;padding-top:0.63rem;padding-right:1.25rem;padding-bottom:1.25rem;padding-left:1.25rem"><!-- wp:columns {"verticalAlignment":"center"} -->
			<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"70%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:70%">
			
			<!-- wp:navigation {"textColor":"headings","className":"is-style-ona-tablet-justify-center","layout":{"type":"flex","justifyContent":"left","orientation":"horizontal"},"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"}},"fontSize":"small"} -->
				<!-- wp:navigation-link {"label":"' . esc_html__( 'Home', 'ona' ) . '","url":"' . esc_url( get_site_url() ) . '","kind":"custom","isTopLevelLink":false} /-->
				<!-- wp:navigation-link {"label":"' . esc_html__( 'News', 'ona' ) . '","url":"' . esc_url( get_site_url() ) . '/news","kind":"custom","isTopLevelLink":false} /-->
				<!-- wp:navigation-link {"label":"' . esc_html__( 'About', 'ona' ) . '","url":"' . esc_url( get_site_url() ) . '/about","kind":"custom","isTopLevelLink":false} /-->
				<!-- wp:navigation-link {"label":"' . esc_html__( 'Contact', 'ona' ) . '","url":"' . esc_url( get_site_url() ) . '/contact","kind":"custom","isTopLevelLink":false} /-->
			<!-- /wp:navigation -->

			</div><!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center"} -->
			<div class="wp-block-column is-vertically-aligned-center"><!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search","buttonText":"Search","buttonUseIcon":true,"style":{"border":{"radius":"4px"}},"backgroundColor":"dark","className":"is-style-ona-search-button-no-space"} /--></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns --></div>
			<!-- /wp:group -->',
);



