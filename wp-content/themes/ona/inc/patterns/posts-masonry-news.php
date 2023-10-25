<?php
/**
 * Posts: masonry news
 */
return array(
	'title'      => __( 'Posts masonry news', 'ona' ),
	'categories' => array( 'ona-posts' ),
	'content'    => '
		<!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","bottom":"20px","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"1170px"}} -->
		<div class="wp-block-group" style="padding-top:40px;padding-right:var(--wp--preset--spacing--50);padding-bottom:20px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0","left":"0.5rem"}}}} -->
		<div class="wp-block-columns"><!-- wp:column -->
		<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"0.5rem"}}}} -->
		<div class="wp-block-group" style="margin-bottom:0.5rem"><!-- wp:query {"queryId":25,"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
		<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":1}} -->
		<!-- wp:cover {"useFeaturedImage":true,"dimRatio":70,"customGradient":"linear-gradient(0deg,rgb(0,0,0) 0%,rgba(255,255,255,0.03) 100%)","contentPosition":"bottom left","style":{"spacing":{"padding":{"top":"1.25rem","bottom":"1.25rem","left":"1.25rem","right":"1.25rem"}}},"className":"hover-scale","layout":{"type":"constrained"}} -->
		<div class="wp-block-cover has-custom-content-position is-position-bottom-left hover-scale" style="padding-top:1.25rem;padding-right:1.25rem;padding-bottom:1.25rem;padding-left:1.25rem"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-70 has-background-dim has-background-gradient" style="background:linear-gradient(0deg,rgb(0,0,0) 0%,rgba(255,255,255,0.03) 100%)"></span><div class="wp-block-cover__inner-container"><!-- wp:read-more {"content":"","className":"is-style-ona-read-more-cover"} /-->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"className":"is-style-ona-relative","layout":{"type":"default"}} -->
		<div class="wp-block-group is-style-ona-relative"><!-- wp:post-terms {"term":"category","separator":"","style":{"elements":{"link":{"color":{"text":"var:preset|color|light"}}}},"className":"is-style-ona-post-terms-pill-shape"} /-->

		<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"1rem"}},"elements":{"link":{"color":{"text":"var:preset|color|light"}}}},"fontSize":"medium-large"} /-->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group"><!-- wp:post-author-name {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light"}}}},"fontSize":"small"} /-->

		<!-- wp:post-date {"textColor":"light"} /--></div>
		<!-- /wp:group --></div>
		<!-- /wp:group --></div></div>
		<!-- /wp:cover -->
		<!-- /wp:post-template --></div>
		<!-- /wp:query --></div>
		<!-- /wp:group --></div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"},"position":{"type":""}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
		<div class="wp-block-group"><!-- wp:query {"queryId":25,"query":{"perPage":"1","pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
		<div class="wp-block-query"><!-- wp:post-template {"className":"is-style-no-spacing","layout":{"type":"grid","columnCount":1}} -->
		<!-- wp:cover {"useFeaturedImage":true,"dimRatio":70,"minHeight":211,"minHeightUnit":"px","customGradient":"linear-gradient(0deg,rgb(0,0,0) 0%,rgba(255,255,255,0.03) 100%)","contentPosition":"bottom left","isDark":false,"style":{"spacing":{"padding":{"top":"1.25rem","bottom":"1.25rem","left":"1.25rem","right":"1.25rem"}}},"className":"hover-scale","layout":{"type":"constrained","contentSize":"100%"}} -->
		<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left hover-scale" style="padding-top:1.25rem;padding-right:1.25rem;padding-bottom:1.25rem;padding-left:1.25rem;min-height:211px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-70 has-background-dim has-background-gradient" style="background:linear-gradient(0deg,rgb(0,0,0) 0%,rgba(255,255,255,0.03) 100%)"></span><div class="wp-block-cover__inner-container"><!-- wp:read-more {"content":"","className":"is-style-ona-read-more-cover"} /-->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"className":"is-style-ona-relative","layout":{"type":"default"}} -->
		<div class="wp-block-group is-style-ona-relative"><!-- wp:post-terms {"term":"category","separator":"","style":{"elements":{"link":{"color":{"text":"var:preset|color|light"}}}},"className":"is-style-ona-post-terms-pill-shape"} /-->

		<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"1rem"}},"elements":{"link":{"color":{"text":"var:preset|color|light"}}},"typography":{"fontSize":"1.25rem"}}} /-->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group"><!-- wp:post-author-name {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light"}}}},"fontSize":"small"} /-->

		<!-- wp:post-date {"textColor":"light"} /--></div>
		<!-- /wp:group --></div>
		<!-- /wp:group --></div></div>
		<!-- /wp:cover -->
		<!-- /wp:post-template --></div>
		<!-- /wp:query -->

		<!-- wp:query {"queryId":25,"query":{"perPage":"2","pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
		<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"grid","columnCount":2}} -->
		<!-- wp:cover {"useFeaturedImage":true,"dimRatio":70,"minHeight":211,"minHeightUnit":"px","customGradient":"linear-gradient(0deg,rgb(0,0,0) 0%,rgba(255,255,255,0.03) 100%)","contentPosition":"bottom left","isDark":false,"style":{"spacing":{"padding":{"top":"1.25rem","bottom":"1.25rem","left":"1.25rem","right":"1.25rem"}}},"className":"hover-scale","layout":{"type":"constrained"}} -->
		<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left hover-scale" style="padding-top:1.25rem;padding-right:1.25rem;padding-bottom:1.25rem;padding-left:1.25rem;min-height:211px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-70 has-background-dim has-background-gradient" style="background:linear-gradient(0deg,rgb(0,0,0) 0%,rgba(255,255,255,0.03) 100%)"></span><div class="wp-block-cover__inner-container"><!-- wp:read-more {"content":"","className":"is-style-ona-read-more-cover"} /-->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"className":"is-style-ona-relative","layout":{"type":"default"}} -->
		<div class="wp-block-group is-style-ona-relative"><!-- wp:post-terms {"term":"category","separator":"","style":{"spacing":{"padding":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|light"}}}},"className":"is-style-ona-post-terms-pill-shape"} /-->

		<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"1rem"}},"elements":{"link":{"color":{"text":"var:preset|color|light"}}}},"fontSize":"base"} /-->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group"><!-- wp:post-author-name {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light"}}}},"fontSize":"small"} /-->

		<!-- wp:post-date {"textColor":"light"} /--></div>
		<!-- /wp:group --></div>
		<!-- /wp:group --></div></div>
		<!-- /wp:cover -->
		<!-- /wp:post-template --></div>
		<!-- /wp:query --></div>
		<!-- /wp:group --></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns --></div>
		<!-- /wp:group -->',
);



