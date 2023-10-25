<?php
/**
 * General: ad banner news
 */
return array(
	'title'      => __( 'Ad banner news', 'ona' ),
	'categories' => array( 'ona-general' ),
	'content'    => '
			<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:image {"align":"center","id":8,"sizeSlug":"full","linkDestination":"custom","className":"is-style-no-spacing"} -->
			<figure class="wp-block-image aligncenter size-full is-style-no-spacing"><a href="#"><img src="' . esc_url( get_theme_file_uri( 'assets/img/news/ona_news_header_banner.jpg' ) ) . '" alt="" class="wp-image-8"/></a></figure>
			<!-- /wp:image --></div>
			<!-- /wp:group -->',
);



