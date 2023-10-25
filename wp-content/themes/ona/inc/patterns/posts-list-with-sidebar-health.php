<?php
/**
 * Posts: list with sidebar health
 */
$form = ona_get_mailchimp_forms();

return array(
	'title'      => __( 'Posts list with sidebar health', 'ona' ),
	'categories' => array( 'ona-posts' ),
	'content'    => '
		<!-- wp:group {"style":{"spacing":{"padding":{"top":"100px","bottom":"100px"}}},"className":"ona-container is-style-no-spacing","layout":{"contentSize":""}} -->
		<div class="wp-block-group ona-container is-style-no-spacing" style="padding-top:100px;padding-bottom:100px"><!-- wp:group {"layout":{"contentSize":"1170px"}} -->
		<div class="wp-block-group"><!-- wp:columns {"style":{"spacing":{"blockGap":"48px"}}} -->
		<div class="wp-block-columns"><!-- wp:column {"width":"67.7%"} -->
		<div class="wp-block-column" style="flex-basis:67.7%"><!-- wp:query {"queryId":10,"query":{"perPage":"2","pages":0,"offset":"","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"category":[]}},"displayLayout":{"type":"list"}} -->
		<div class="wp-block-query"><!-- wp:post-template {"className":"ona-post-list"} -->
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0px"}}} -->
		<div class="wp-block-group alignwide"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"0px"}},"className":"collapse-md-down"} -->
		<div class="wp-block-columns alignwide collapse-md-down"><!-- wp:column {"width":"48%"} -->
		<div class="wp-block-column" style="flex-basis:48%"><!-- wp:post-featured-image {"isLink":true,"width":"","height":"364px","className":"hover-scale","style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} /--></div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"52%","backgroundColor":"background","className":"is-style-no-spacing"} -->
		<div class="wp-block-column is-style-no-spacing has-background-background-color has-background" style="flex-basis:52%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","right":"30px","left":"30px"}}}} -->
		<div class="wp-block-group" style="padding-top:30px;padding-right:30px;padding-left:30px"><!-- wp:post-terms {"term":"category","className":"ona-text-letter-spacing"} /-->

		<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"1rem","bottom":"0.81rem"}},"typography":{"fontSize":"1.75rem"}},"fontFamily":"base"} /-->

		<!-- wp:post-date /-->

		<!-- wp:post-excerpt {"moreText":"","style":{"typography":{"fontSize":"1rem"}}} /--></div>
		<!-- /wp:group --></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns -->

		<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"40px","top":"40px"}}}} -->
		<div class="wp-block-group" style="margin-top:40px;margin-bottom:40px"><!-- wp:separator {"className":"is-style-wide"} -->
		<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
		<!-- /wp:separator --></div>
		<!-- /wp:group --></div>
		<!-- /wp:group -->
		<!-- /wp:post-template --></div>
		<!-- /wp:query --></div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"32.3%"} -->
		<div class="wp-block-column" style="flex-basis:32.3%"><!-- wp:group {"style":{"spacing":{"blockGap":"68px"}}} -->
		<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"48px","bottom":"48px","right":"48px","left":"48px"}}},"backgroundColor":"secondary","layout":{"inherit":false,"contentSize":"1170px"}} -->
		<div class="wp-block-group has-secondary-background-color has-background" style="padding-top:48px;padding-right:48px;padding-bottom:48px;padding-left:48px"><!-- wp:paragraph {"align":"center","textColor":"foreground","className":"ona-text-letter-spacing","fontSize":"tiny"} -->
		<p class="has-text-align-center ona-text-letter-spacing has-foreground-color has-text-color has-tiny-font-size">' . __( 'SUBSCRIBE NOW', 'ona' ) . '</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph -->
		<p>' . __( 'Join the newsletter to get the daily tips, latest articles and free stuffs delivered directly to your inbox.', 'ona' ) . '</p>
		<!-- /wp:paragraph -->

		' . $form . '
		
		</div><!-- /wp:group -->

		<!-- wp:group -->
		<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase","letterSpacing":"2px"}},"textColor":"foreground","fontSize":"tiny"} -->
		<p class="has-text-align-center has-foreground-color has-text-color has-tiny-font-size" style="text-transform:uppercase;letter-spacing:2px">Popular Posts</p>
		<!-- /wp:paragraph -->

		<!-- wp:latest-posts {"postsToShow":3,"displayPostDate":true,"displayFeaturedImage":true,"featuredImageAlign":"left","featuredImageSizeWidth":100,"featuredImageSizeHeight":100,"addLinkToFeaturedImage":true} /--></div>
		<!-- /wp:group --></div>
		<!-- /wp:group --></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns --></div>
		<!-- /wp:group --></div>
		<!-- /wp:group -->',
);



