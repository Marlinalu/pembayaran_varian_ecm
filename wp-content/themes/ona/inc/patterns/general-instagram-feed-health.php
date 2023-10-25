<?php
/**
 * General instagram feed health
 */
return array(
	'title'      => __( 'Instagram feed health', 'ona' ),
	'categories' => array( 'ona-general' ),
	'content'    => '
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"100px","right":"0px","left":"0px","bottom":"0px"}}},"backgroundColor":"secondary","className":"is-style-default"} -->
			<div class="wp-block-group is-style-default has-secondary-background-color has-background" style="padding-top:100px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"34px"},"blockGap":"10px"}},"layout":{"contentSize":"460px"}} -->
			<div class="wp-block-group" style="margin-bottom:34px"><!-- wp:heading {"textAlign":"center","className":"is-style-ona-alt-font"} -->
			<h2 class="has-text-align-center is-style-ona-alt-font">' . __( 'Instagram', 'ona' ) . '</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center","textColor":"foreground","fontSize":"medium"} -->
			<p class="has-text-align-center has-foreground-color has-text-color has-medium-font-size">' . __( '@onatheme', 'ona' ) . '</p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"is-style-default","layout":{"contentSize":""}} -->
			<div class="wp-block-group is-style-default"><!-- wp:sbi/sbi-feed-block {"noNewChanges":true,"shortcodeSettings":"[instagram-feed feed=1]"} /--></div>
			<!-- /wp:group --></div>
			<!-- /wp:group -->',
);



