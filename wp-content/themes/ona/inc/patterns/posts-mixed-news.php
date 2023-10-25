<?php
/**
 * Posts: mixed news
 */
return array(
	'title'      => __( 'Posts mixed news', 'ona' ),
	'categories' => array( 'ona-posts' ),
	'content'    => '
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group"><!-- wp:heading {"fontSize":"medium"} -->
		<h2 class="wp-block-heading has-medium-font-size">' . esc_html__( 'Latest Articles', 'ona' ) . '</h2>
		<!-- /wp:heading -->

		<!-- wp:separator {"className":"is-style-wide"} -->
		<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
		<!-- /wp:separator --></div>
		<!-- /wp:group -->

		<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"1.88rem"}}}} -->
		<div class="wp-block-columns"><!-- wp:column {"width":"50%"} -->
		<div class="wp-block-column" style="flex-basis:50%"><!-- wp:query {"queryId":1,"query":{"perPage":"1","pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","layout":{"inherit":false}} -->
		<div class="wp-block-query alignwide"><!-- wp:post-template {"layout":{"type":"grid","columnCount":1}} -->
		<!-- wp:group {"tagName":"article","style":{"spacing":{"blockGap":"1.5rem"}}} -->
		<article class="wp-block-group"><!-- wp:cover {"useFeaturedImage":true,"dimRatio":0,"minHeight":234,"minHeightUnit":"px","contentPosition":"bottom left","isDark":false,"className":"hover-scale","layout":{"type":"constrained"}} -->
		<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left hover-scale" style="min-height:234px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:read-more {"content":"","className":"is-style-ona-read-more-cover"} /-->

		<!-- wp:post-terms {"term":"category","separator":"","style":{"elements":{"link":{"color":{"text":"var:preset|color|light"}}}},"className":"is-style-ona-post-terms-pill-shape is-style-ona-relative"} /--></div></div>
		<!-- /wp:cover -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}}} -->
		<div class="wp-block-group"><!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"bottom":"12px"}},"typography":{"fontSize":"1.31rem"}}} /-->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"bottom":"var:preset|spacing|50"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)"><!-- wp:post-author-name {"isLink":true,"fontSize":"small"} /-->

		<!-- wp:post-date /--></div>
		<!-- /wp:group -->

		<!-- wp:post-excerpt {"showMoreOnNewLine":false,"excerptLength":24} /--></div>
		<!-- /wp:group --></article>
		<!-- /wp:group -->
		<!-- /wp:post-template --></div>
		<!-- /wp:query --></div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"50%"} -->
		<div class="wp-block-column" style="flex-basis:50%"><!-- wp:query {"queryId":1,"query":{"perPage":"4","pages":0,"offset":"0","postType":"post","order":"asc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","layout":{"inherit":false}} -->
		<div class="wp-block-query alignwide"><!-- wp:post-template {"className":"is-style-ona-post-grid-gap-40","layout":{"type":"grid","columnCount":1}} -->
		<!-- wp:group {"tagName":"article","style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
		<article class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","width":"120px","height":"92px","style":{"layout":{"selfStretch":"fixed","flexSize":"120px"}},"className":"hover-scale no-shrink"} /-->

		<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}}} -->
		<div class="wp-block-group"><!-- wp:post-title {"isLink":true,"fontSize":"base"} /-->

		<!-- wp:post-date /--></div>
		<!-- /wp:group --></article>
		<!-- /wp:group -->
		<!-- /wp:post-template --></div>
		<!-- /wp:query --></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"40px"}}},"layout":{"type":"default"}} -->
		<div class="wp-block-group" style="margin-top:40px"><!-- wp:heading {"fontSize":"medium"} -->
		<h2 class="wp-block-heading has-medium-font-size">' . esc_html__( 'Tech News', 'ona' ) . '</h2>
		<!-- /wp:heading -->

		<!-- wp:separator {"className":"is-style-wide"} -->
		<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
		<!-- /wp:separator --></div>
		<!-- /wp:group -->

		<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"1.88rem"}}}} -->
		<div class="wp-block-columns"><!-- wp:column {"width":"50%"} -->
		<div class="wp-block-column" style="flex-basis:50%"><!-- wp:query {"queryId":1,"query":{"perPage":"1","pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","layout":{"inherit":false}} -->
		<div class="wp-block-query alignwide"><!-- wp:post-template {"layout":{"type":"grid","columnCount":1}} -->
		<!-- wp:group {"tagName":"article","style":{"spacing":{"blockGap":"1.5rem"}}} -->
		<article class="wp-block-group"><!-- wp:cover {"useFeaturedImage":true,"dimRatio":0,"minHeight":234,"minHeightUnit":"px","contentPosition":"bottom left","isDark":false,"className":"hover-scale","layout":{"type":"constrained"}} -->
		<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left hover-scale" style="min-height:234px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:read-more {"content":"","className":"is-style-ona-read-more-cover"} /-->

		<!-- wp:post-terms {"term":"category","separator":"","style":{"elements":{"link":{"color":{"text":"var:preset|color|light"}}}},"className":"is-style-ona-post-terms-pill-shape is-style-ona-relative"} /--></div></div>
		<!-- /wp:cover -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}}} -->
		<div class="wp-block-group"><!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"bottom":"12px"}},"typography":{"fontSize":"1.31rem"}}} /-->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"bottom":"var:preset|spacing|50"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)"><!-- wp:post-author-name {"isLink":true,"fontSize":"small"} /-->

		<!-- wp:post-date /--></div>
		<!-- /wp:group -->

		<!-- wp:post-excerpt {"showMoreOnNewLine":false,"excerptLength":24} /--></div>
		<!-- /wp:group --></article>
		<!-- /wp:group -->
		<!-- /wp:post-template --></div>
		<!-- /wp:query -->

		<!-- wp:query {"queryId":1,"query":{"perPage":"2","pages":0,"offset":"0","postType":"post","order":"asc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","layout":{"inherit":false}} -->
		<div class="wp-block-query alignwide"><!-- wp:post-template {"className":"is-style-ona-post-grid-gap-40","layout":{"type":"grid","columnCount":1}} -->
		<!-- wp:group {"tagName":"article","style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
		<article class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","width":"120px","height":"92px","style":{"layout":{"selfStretch":"fixed","flexSize":"120px"}},"className":"hover-scale no-shrink"} /-->

		<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}}} -->
		<div class="wp-block-group"><!-- wp:post-title {"isLink":true,"fontSize":"base"} /-->

		<!-- wp:post-date /--></div>
		<!-- /wp:group --></article>
		<!-- /wp:group -->
		<!-- /wp:post-template --></div>
		<!-- /wp:query --></div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"50%"} -->
		<div class="wp-block-column" style="flex-basis:50%"><!-- wp:query {"queryId":1,"query":{"perPage":"1","pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","layout":{"inherit":false}} -->
		<div class="wp-block-query alignwide"><!-- wp:post-template {"layout":{"type":"grid","columnCount":1}} -->
		<!-- wp:group {"tagName":"article","style":{"spacing":{"blockGap":"1.5rem"}}} -->
		<article class="wp-block-group"><!-- wp:cover {"useFeaturedImage":true,"dimRatio":0,"minHeight":234,"minHeightUnit":"px","contentPosition":"bottom left","className":"hover-scale","layout":{"type":"constrained"}} -->
		<div class="wp-block-cover has-custom-content-position is-position-bottom-left hover-scale" style="min-height:234px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:read-more {"content":"","className":"is-style-ona-read-more-cover"} /-->

		<!-- wp:post-terms {"term":"category","separator":"","style":{"elements":{"link":{"color":{"text":"var:preset|color|light"}}}},"className":"is-style-ona-post-terms-pill-shape is-style-ona-relative"} /--></div></div>
		<!-- /wp:cover -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}}} -->
		<div class="wp-block-group"><!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"bottom":"12px"}},"typography":{"fontSize":"1.31rem"}}} /-->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"bottom":"var:preset|spacing|50"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)"><!-- wp:post-author-name {"isLink":true,"fontSize":"small"} /-->

		<!-- wp:post-date /--></div>
		<!-- /wp:group -->

		<!-- wp:post-excerpt {"showMoreOnNewLine":false,"excerptLength":24} /--></div>
		<!-- /wp:group --></article>
		<!-- /wp:group -->
		<!-- /wp:post-template --></div>
		<!-- /wp:query -->

		<!-- wp:query {"queryId":1,"query":{"perPage":"2","pages":0,"offset":"0","postType":"post","order":"asc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","layout":{"inherit":false}} -->
		<div class="wp-block-query alignwide"><!-- wp:post-template {"className":"is-style-ona-post-grid-gap-40","layout":{"type":"grid","columnCount":1}} -->
		<!-- wp:group {"tagName":"article","style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
		<article class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","width":"120px","height":"92px","style":{"layout":{"selfStretch":"fixed","flexSize":"120px"}},"className":"hover-scale no-shrink"} /-->

		<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}}} -->
		<div class="wp-block-group"><!-- wp:post-title {"isLink":true,"fontSize":"base"} /-->

		<!-- wp:post-date /--></div>
		<!-- /wp:group --></article>
		<!-- /wp:group -->
		<!-- /wp:post-template --></div>
		<!-- /wp:query --></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns -->',
);



