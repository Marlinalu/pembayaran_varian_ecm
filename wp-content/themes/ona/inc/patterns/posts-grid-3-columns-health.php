<?php
/**
 * Posts: grid 3 columns health
 */
return array(
	'title'      => __( 'Posts grid 3 columns health', 'ona' ),
	'categories' => array( 'ona-posts' ),
	'content'    => '
		<!-- wp:group {"style":{"spacing":{"padding":{"top":"100px","bottom":"100px","right":"1.5rem","left":"1.5rem"}}},"className":"is-style-default","layout":{"contentSize":"1170px"}} -->
		<div class="wp-block-group is-style-default" style="padding-top:100px;padding-right:1.5rem;padding-bottom:100px;padding-left:1.5rem"><!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"48px"}},"typography":{"fontSize":"2.5rem","textTransform":"uppercase","letterSpacing":"0.07em"}}} -->
		<h2 class="has-text-align-center" style="font-size:2.5rem;text-transform:uppercase;letter-spacing:0.07em;margin-bottom:48px">' . __( "Editor's Choice", 'ona' ) . '</h2>
		<!-- /wp:heading -->

		<!-- wp:columns {"style":{"spacing":{"blockGap":"30px"}}} -->
		<div class="wp-block-columns"><!-- wp:column {"width":"100%"} -->
		<div class="wp-block-column" style="flex-basis:100%"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"24px"}}}} -->
		<div class="wp-block-group" style="margin-bottom:24px"><!-- wp:query {"queryId":10,"query":{"perPage":"1","pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list","columns":2}} -->
		<div class="wp-block-query"><!-- wp:post-template {"className":"is-style-ona-post-grid-gap-30"} -->
		<!-- wp:group {"tagName":"article"} -->
		<article class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"width":"","height":"","className":"hover-scale"} /-->

		<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}}} -->
		<div class="wp-block-group"><!-- wp:post-terms {"term":"category","className":"ona-text-letter-spacing"} /-->

		<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"16px"}}}} -->
		<div class="wp-block-group" style="margin-bottom:16px"><!-- wp:post-title {"isLink":true,"fontSize":"medium","fontFamily":"base"} /--></div>
		<!-- /wp:group -->

		<!-- wp:post-date /--></div>
		<!-- /wp:group --></article>
		<!-- /wp:group -->
		<!-- /wp:post-template --></div>
		<!-- /wp:query --></div>
		<!-- /wp:group --></div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"100%"} -->
		<div class="wp-block-column" style="flex-basis:100%"><!-- wp:query {"queryId":10,"query":{"perPage":"2","pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":2}} -->
		<div class="wp-block-query"><!-- wp:columns -->
		<div class="wp-block-columns"><!-- wp:column {"width":"100%"} -->
		<div class="wp-block-column" style="flex-basis:100%"><!-- wp:group -->
		<div class="wp-block-group"><!-- wp:post-template {"className":"is-style-ona-post-grid-gap-30"} -->
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
		<!-- /wp:group --></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns --></div>
		<!-- /wp:query --></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-ona-button-arrow-icon"} -->
		<div class="wp-block-button is-style-ona-button-arrow-icon"><a class="wp-block-button__link" href="#">' . __( 'More Posts', 'ona' ) . '</a></div>
		<!-- /wp:button --></div>
		<!-- /wp:buttons --></div>
		<!-- /wp:group -->',
);



