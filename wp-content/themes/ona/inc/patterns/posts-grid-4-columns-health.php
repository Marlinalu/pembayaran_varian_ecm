<?php
/**
 * Posts: grid 4 columns health
 */
return array(
	'title'      => __( 'Posts grid 4 columns health', 'ona' ),
	'categories' => array( 'ona-posts' ),
	'content'    => '
		<!-- wp:group {"style":{"spacing":{"padding":{"top":"110px","bottom":"100px","right":"24px","left":"24px"}}},"className":"is-style-no-spacing","layout":{"inherit":false,"contentSize":"1170px"}} -->
		<div class="wp-block-group is-style-no-spacing" style="padding-top:110px;padding-right:24px;padding-bottom:100px;padding-left:24px"><!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"48px"}},"typography":{"fontSize":"2.5rem","textTransform":"uppercase","letterSpacing":"0.07em"}}} -->
		<h2 class="has-text-align-center" style="font-size:2.5rem;text-transform:uppercase;letter-spacing:0.07em;margin-bottom:48px">' . __( 'Trending Articles', 'ona' ) . '</h2>
		<!-- /wp:heading -->

		<!-- wp:query {"queryId":1,"query":{"perPage":"4","pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":4},"align":"wide","layout":{"inherit":false}} -->
		<div class="wp-block-query alignwide"><!-- wp:post-template {"className":"is-style-ona-post-grid-gap-30"} -->
		<!-- wp:group {"tagName":"article"} -->
		<article class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"width":"","height":"","className":"hover-scale"} /-->

		<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}}} -->
		<div class="wp-block-group"><!-- wp:post-terms {"term":"category","className":"ona-text-letter-spacing"} /-->

		<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"16px"}}}} -->
		<div class="wp-block-group" style="margin-bottom:16px"><!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"1.125rem"}},"fontFamily":"base"} /--></div>
		<!-- /wp:group -->

		<!-- wp:post-date /--></div>
		<!-- /wp:group --></article>
		<!-- /wp:group -->
		<!-- /wp:post-template --></div>
		<!-- /wp:query --></div>
		<!-- /wp:group -->',
);



