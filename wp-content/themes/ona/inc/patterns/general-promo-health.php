<?php
/**
 * General promo health
 */
return array(
	'title'      => __( 'Promo health', 'ona' ),
	'categories' => array( 'ona-general' ),
	'content'    => '
			<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"20px"}}},"backgroundColor":"primary","layout":{"contentSize":"1170px"}} -->
			<div class="wp-block-group has-primary-background-color has-background" style="padding-bottom:20px"><!-- wp:columns {"style":{"spacing":{"blockGap":"60px"}}} -->
			<div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"padding":{"top":"100px","bottom":"80px"}}}} -->
			<div class="wp-block-column" style="padding-top:100px;padding-bottom:80px"><!-- wp:heading {"style":{"typography":{"fontSize":"2.5rem"}},"textColor":"background"} -->
			<h2 class="has-background-color has-text-color" style="font-size:2.5rem">' . esc_html__( 'Best Stretching Exercises for Better Flexibility', 'ona' ) . '</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"background","fontSize":"medium"} -->
			<p class="has-background-color has-text-color has-medium-font-size">' . esc_html__( 'Some blogs focus more on fashion advice, featuring how-to articles for the lay reader.', 'ona' ) . '</p>
			<!-- /wp:paragraph -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"40px"}}} -->
			<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontSize":"1.125rem"}},"textColor":"background"} -->
			<p class="has-background-color has-text-color" style="font-size:1.125rem">' . esc_html__( 'Some blogs focus more on fashion advice, featuring how-to articles for the lay reader. Articles discuss clothing fit, the matching and complementing of colors, and other information on clothes wearing and care along with prescriptive advice.' , 'ona' ) . '</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"style":{"typography":{"fontSize":"2.125rem"}},"textColor":"background","className":"is-style-ona-alt-font"} -->
			<h2 class="is-style-ona-alt-font has-background-color has-text-color" style="font-size:2.125rem">' . esc_html__( 'Joeby Ragpa', 'ona' ) . '</h2>
			<!-- /wp:heading --></div>
			<!-- /wp:group --></div>
			<!-- /wp:column -->

			<!-- wp:column {"className":"is-style-ona-negative-offset-top"} -->
			<div class="wp-block-column is-style-ona-negative-offset-top"><!-- wp:group {"style":{"border":{"width":"10px"}},"borderColor":"background"} -->
			<div class="wp-block-group has-border-color has-background-border-color" style="border-width:10px"><!-- wp:image {"id":480,"sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
			<figure class="wp-block-image size-full is-style-default"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/img/health/ona_health_promo.jpg" alt="ona_health_promo" class="wp-image-480"/></figure>
			<!-- /wp:image --></div>
			<!-- /wp:group --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns --></div>
			<!-- /wp:group -->',
);



