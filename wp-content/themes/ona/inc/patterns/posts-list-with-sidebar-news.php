<?php
/**
 * Posts: list with sidebar news
 */
return array(
	'title'      => __( 'Posts list with sidebar news', 'ona' ),
	'categories' => array( 'ona-posts' ),
	'content'    => '
		<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"40px","bottom":"40px"}}},"layout":{"type":"constrained","contentSize":"1170px"}} -->
		<div class="wp-block-group" style="padding-top:40px;padding-right:var(--wp--preset--spacing--50);padding-bottom:40px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"3rem"}}}} -->
		<div class="wp-block-columns"><!-- wp:column {"width":"68.65%"} -->
		<div class="wp-block-column" style="flex-basis:68.65%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group"><!-- wp:heading {"fontSize":"medium"} -->
		<h2 class="wp-block-heading has-medium-font-size">' . esc_html__( 'Highlighted News', 'ona' ) . '</h2>
		<!-- /wp:heading -->

		<!-- wp:separator {"className":"is-style-wide"} -->
		<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
		<!-- /wp:separator --></div>
		<!-- /wp:group -->

		<!-- wp:query {"queryId":10,"query":{"perPage":"4","pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"category":[]}}} -->
		<div class="wp-block-query"><!-- wp:post-template {"className":"ona-post-list","layout":{"type":"default"}} -->
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0px"}}} -->
		<div class="wp-block-group alignwide"><!-- wp:columns {"align":"wide","className":"collapse-md-down"} -->
		<div class="wp-block-columns alignwide collapse-md-down"><!-- wp:column {"width":"48%"} -->
		<div class="wp-block-column" style="flex-basis:48%"><!-- wp:cover {"useFeaturedImage":true,"dimRatio":0,"minHeight":234,"minHeightUnit":"px","contentPosition":"bottom left","isDark":false,"className":"hover-scale","layout":{"type":"constrained"}} -->
		<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left hover-scale" style="min-height:234px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:read-more {"content":"","className":"is-style-ona-read-more-cover"} /-->

		<!-- wp:post-terms {"term":"category","separator":"","style":{"elements":{"link":{"color":{"text":"var:preset|color|light"}}}},"className":"is-style-ona-post-terms-pill-shape is-style-ona-relative"} /--></div></div>
		<!-- /wp:cover --></div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"52%","backgroundColor":"background","className":"is-style-no-spacing"} -->
		<div class="wp-block-column is-style-no-spacing has-background-background-color has-background" style="flex-basis:52%"><!-- wp:group {"style":{"spacing":{"blockGap":"10px"}}} -->
		<div class="wp-block-group"><!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"bottom":"12px"}},"typography":{"fontSize":"1.31rem"}}} /-->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"bottom":"var:preset|spacing|50"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)"><!-- wp:post-author-name {"isLink":true,"fontSize":"small"} /-->

		<!-- wp:post-date /--></div>
		<!-- /wp:group -->

		<!-- wp:post-excerpt {"showMoreOnNewLine":false,"excerptLength":24} /--></div>
		<!-- /wp:group --></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns --></div>
		<!-- /wp:group -->
		<!-- /wp:post-template --></div>
		<!-- /wp:query --></div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"31.4%","style":{"spacing":{"blockGap":"40px"}}} -->
		<div class="wp-block-column" style="flex-basis:31.4%"><!-- wp:group {"layout":{"type":"default"}} -->
		<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group"><!-- wp:heading {"fontSize":"medium"} -->
		<h2 class="wp-block-heading has-medium-font-size">' . esc_html__( 'Top Stories', 'ona' ) . '</h2>
		<!-- /wp:heading -->

		<!-- wp:separator {"className":"is-style-wide"} -->
		<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
		<!-- /wp:separator --></div>
		<!-- /wp:group -->

		<!-- wp:query {"queryId":1,"query":{"perPage":"3","pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false,"taxQuery":{"category":[12,15]}},"align":"wide","layout":{"inherit":false}} -->
		<div class="wp-block-query alignwide"><!-- wp:post-template {"className":"is-style-ona-post-grid-gap-40","layout":{"type":"grid","columnCount":1}} -->
		<!-- wp:group {"tagName":"article","style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
		<article class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","width":"120px","height":"92px","style":{"layout":{"selfStretch":"fixed","flexSize":"120px"}},"className":"hover-scale no-shrink"} /-->

		<!-- wp:group {"style":{"spacing":{"blockGap":"10px","padding":{"top":"var:preset|spacing|30"}}}} -->
		<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--30)"><!-- wp:post-title {"isLink":true,"fontSize":"base"} /-->

		<!-- wp:post-date /--></div>
		<!-- /wp:group --></article>
		<!-- /wp:group -->
		<!-- /wp:post-template --></div>
		<!-- /wp:query --></div>
		<!-- /wp:group -->

		<!-- wp:group {"layout":{"type":"default"}} -->
		<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group"><!-- wp:heading {"fontSize":"medium"} -->
		<h2 class="wp-block-heading has-medium-font-size">' . esc_html__( 'Categories', 'ona' ) . '</h2>
		<!-- /wp:heading -->

		<!-- wp:separator {"className":"is-style-wide"} -->
		<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
		<!-- /wp:separator --></div>
		<!-- /wp:group -->

		<!-- wp:categories {"showPostCounts":true} /--></div>
		<!-- /wp:group --></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns --></div>
		<!-- /wp:group -->',
);



