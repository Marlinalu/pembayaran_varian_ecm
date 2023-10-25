<?php
/**
 * Sidebar: news
 */
$form = ona_get_mailchimp_forms( 'style-3' );

return array(
	'title'      => __( 'Sidebar News', 'ona' ),
	'categories' => array( 'ona-sidebars' ),
	'blockTypes' => array( 'core/template-part/sidebar' ),
	'content'    => '
		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group"><!-- wp:heading {"fontSize":"medium"} -->
		<h2 class="wp-block-heading has-medium-font-size">' . esc_html__( 'Let’s Hang Out On Social', 'ona' ) . '</h2>
		<!-- /wp:heading -->

		<!-- wp:separator {"className":"is-style-wide"} -->
		<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
		<!-- /wp:separator --></div>
		<!-- /wp:group --></div>
		<!-- /wp:group -->

		<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
		<div class="wp-block-group"><!-- wp:social-links {"iconColor":"headings","iconColorValue":"#020202","iconBackgroundColor":"background-light","iconBackgroundColorValue":"#F5F8FA","showLabels":true,"size":"has-normal-icon-size","style":{"spacing":{"blockGap":{"top":"1.25rem"}},"layout":{"selfStretch":"fill","flexSize":null}},"className":"is-style-pill-shape","layout":{"type":"flex","justifyContent":"stretch","orientation":"vertical"}} -->
		<ul class="wp-block-social-links has-normal-icon-size has-visible-labels has-icon-color has-icon-background-color is-style-pill-shape">
		<!-- wp:social-link {"url":"#","service":"twitter","className":"is-style-ona-social-link-padding"} /-->
		<!-- wp:social-link {"url":"#","service":"tiktok","className":"is-style-ona-social-link-padding"} /-->
		<!-- wp:social-link {"url":"#","service":"pinterest","className":"is-style-ona-social-link-padding"} /--></ul>
		<!-- /wp:social-links -->

		<!-- wp:social-links {"iconColor":"headings","iconColorValue":"#020202","iconBackgroundColor":"background-light","iconBackgroundColorValue":"#F5F8FA","showLabels":true,"size":"has-normal-icon-size","style":{"spacing":{"blockGap":{"top":"1.25rem"}},"layout":{"selfStretch":"fill","flexSize":null}},"className":"is-style-pill-shape","layout":{"type":"flex","justifyContent":"stretch","orientation":"vertical"}} -->
		<ul class="wp-block-social-links has-normal-icon-size has-visible-labels has-icon-color has-icon-background-color is-style-pill-shape">
		<!-- wp:social-link {"url":"#","service":"facebook","className":"is-style-ona-social-link-padding"} /-->
		<!-- wp:social-link {"url":"#","service":"instagram","className":"is-style-ona-social-link-padding"} /-->
		<!-- wp:social-link {"url":"#","service":"linkedin","className":"is-style-ona-social-link-padding"} /--></ul>
		<!-- /wp:social-links --></div>
		<!-- /wp:group --></div>
		<!-- /wp:group -->

		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group"><!-- wp:image {"align":"center","id":348,"sizeSlug":"full","linkDestination":"custom"} -->
		<figure class="wp-block-image aligncenter size-full"><a href="#"><img src="' . esc_url( get_theme_file_uri( 'assets/img/news/ona_news_banner_sidebar.jpg' ) ) . '" alt="" class="wp-image-348"/></a></figure>
		<!-- /wp:image --></div>
		<!-- /wp:group -->

		<!-- wp:group {"layout":{"type":"default"}} -->
		<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group"><!-- wp:heading {"fontSize":"medium"} -->
		<h2 class="wp-block-heading has-medium-font-size">' . esc_html__( 'Most Popular', 'ona' ) . '</h2>
		<!-- /wp:heading -->

		<!-- wp:separator {"className":"is-style-wide"} -->
		<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
		<!-- /wp:separator --></div>
		<!-- /wp:group -->

		<!-- wp:query {"queryId":1,"query":{"perPage":"4","pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","layout":{"inherit":false}} -->
		<div class="wp-block-query alignwide"><!-- wp:post-template {"style":{"spacing":{"blockGap":"1.25rem"}},"layout":{"type":"grid","columnCount":2}} -->
		<!-- wp:group {"tagName":"article","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
		<article class="wp-block-group"><!-- wp:cover {"useFeaturedImage":true,"dimRatio":0,"minHeight":128,"minHeightUnit":"px","contentPosition":"bottom left","isDark":false,"className":"hover-scale","layout":{"type":"constrained"}} -->
		<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left hover-scale" style="min-height:128px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:read-more {"content":"","className":"is-style-ona-read-more-cover"} /-->

		<!-- wp:post-terms {"term":"category","separator":"","style":{"elements":{"link":{"color":{"text":"var:preset|color|light"}}}},"className":"is-style-ona-post-terms-pill-shape is-style-ona-relative"} /--></div></div>
		<!-- /wp:cover -->

		<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"bottom":"12px"}},"typography":{"fontSize":"1rem"}}} /--></article>
		<!-- /wp:group -->
		<!-- /wp:post-template --></div>
		<!-- /wp:query --></div>
		<!-- /wp:group -->

		<!-- wp:group -->
		<div class="wp-block-group"><!-- wp:heading {"fontSize":"medium"} -->
		<h2 class="wp-block-heading has-medium-font-size">' . esc_html__( 'Subscribe', 'ona' ) . '</h2>
		<!-- /wp:heading -->
		
		' . $form . '
		
		</div><!-- /wp:group -->',
);



