<?php
/**
 * Posts: mixed with sidebar
 */
return array(
	'title'      => __( 'Posts mixed with sidebar', 'ona' ),
	'categories' => array( 'ona-posts' ),
	'content'    => '
		<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"20px","bottom":"19px"}}},"layout":{"contentSize":"1170px","type":"constrained"}} -->
		<div class="wp-block-group" style="padding-top:20px;padding-right:var(--wp--preset--spacing--50);padding-bottom:19px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"3rem"}}}} -->
		<div class="wp-block-columns">

		<!-- wp:column {"width":"68.65%","style":{"spacing":{"blockGap":"1.5rem"}}} -->
		<div class="wp-block-column" style="flex-basis:68.65%">
  		<!-- wp:pattern {"slug":"ona/posts-mixed-news"} /-->
		</div><!-- /wp:column -->

		<!-- wp:column {"width":"31.4%","style":{"spacing":{"blockGap":"40px"}}} -->
		<div class="wp-block-column" style="flex-basis:31.4%">
  		<!-- wp:pattern {"slug":"ona/sidebar-news"} /-->
		</div><!-- /wp:column -->

		</div><!-- /wp:columns -->
		</div><!-- /wp:group -->',
);



