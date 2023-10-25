<?php
/**
 * Posts: grid 4 columns news
 */
return array(
	'title'      => __( 'Posts grid 4 columns news', 'ona' ),
	'categories' => array( 'ona-posts' ),
	'content'    => '
		<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"20px","bottom":"20px"}}},"layout":{"type":"constrained","contentSize":"1170px"}} -->
		<div class="wp-block-group" style="padding-top:20px;padding-right:var(--wp--preset--spacing--50);padding-bottom:20px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"40px"}}},"layout":{"type":"default"}} -->
		<div class="wp-block-group" style="margin-top:40px"><!-- wp:heading {"fontSize":"medium"} -->
		<h2 class="wp-block-heading has-medium-font-size">' . esc_html__( 'Editor’s Picks', 'ona' ) . '</h2>
		<!-- /wp:heading -->

		<!-- wp:separator {"className":"is-style-wide"} -->
		<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
		<!-- /wp:separator --></div>
		<!-- /wp:group -->

		<!-- wp:query {"queryId":1,"query":{"perPage":"4","pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","layout":{"inherit":false}} -->
		<div class="wp-block-query alignwide"><!-- wp:post-template {"style":{"spacing":{"blockGap":"1.25rem"}},"layout":{"type":"grid","columnCount":4}} -->
		<!-- wp:group {"tagName":"article","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
		<article class="wp-block-group"><!-- wp:cover {"useFeaturedImage":true,"dimRatio":0,"minHeight":174,"minHeightUnit":"px","contentPosition":"bottom left","isDark":false,"className":"hover-scale","layout":{"type":"constrained"}} -->
		<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left hover-scale" style="min-height:174px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:read-more {"content":"","className":"is-style-ona-read-more-cover"} /-->

		<!-- wp:post-terms {"term":"category","separator":"","style":{"elements":{"link":{"color":{"text":"var:preset|color|light"}}}},"className":"is-style-ona-post-terms-pill-shape is-style-ona-relative"} /--></div></div>
		<!-- /wp:cover -->

		<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"bottom":"12px"}},"typography":{"fontSize":"1rem"}}} /--></article>
		<!-- /wp:group -->
		<!-- /wp:post-template --></div>
		<!-- /wp:query --></div>
		<!-- /wp:group -->',
);



