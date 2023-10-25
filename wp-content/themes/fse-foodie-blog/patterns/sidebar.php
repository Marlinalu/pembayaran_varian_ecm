<?php
 /**
  * Title: Sidebar
  * Slug: fse-foodie-blog/sidebar
  */
?>
<!-- wp:group {"className":"wp-block-widget-area wp-block-sidebar"} -->
<div class="wp-block-group wp-block-widget-area wp-block-sidebar"><!-- wp:group {"className":"wp-block-widget"} -->
<div class="wp-block-group wp-block-widget"><!-- wp:heading {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"20px","left":"0px"}}}} -->
<h2 class="wp-block-heading" id="about" style="margin-top:0px;margin-right:0px;margin-bottom:20px;margin-left:0px"><?php esc_html_e('About','fse-foodie-blog'); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e('Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.','fse-foodie-blog'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e('Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.','fse-foodie-blog'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"wp-block-widget"} -->
<div class="wp-block-group wp-block-widget">
<!-- wp:heading {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"20px","left":"0px"}}}} -->
<h2 id="categories" style="margin-top:0px;margin-right:0px;margin-bottom:20px;margin-left:0px"><?php esc_html_e('Categories','fse-foodie-blog'); ?></h2>
<!-- /wp:heading -->
<!-- wp:categories /-->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"wp-block-widget"} -->
<div class="wp-block-group wp-block-widget">
<!-- wp:heading {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"20px","left":"0px"}}}} -->
<h2 id="recent-post" style="margin-top:0px;margin-right:0px;margin-bottom:20px;margin-left:0px"><?php esc_html_e('Recent Post','fse-foodie-blog'); ?></h2>
<!-- /wp:heading -->
<!-- wp:latest-posts {"displayPostDate":true,"displayFeaturedImage":true,"featuredImageAlign":"left","featuredImageSizeWidth":75,"featuredImageSizeHeight":75,"addLinkToFeaturedImage":true} /-->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"wp-block-widget"} -->
<div class="wp-block-group wp-block-widget">
<!-- wp:heading {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"20px","left":"0px"}}}} -->
<h2 id="tags" style="margin-top:0px;margin-right:0px;margin-bottom:20px;margin-left:0px"><?php esc_html_e('Tags','fse-foodie-blog'); ?></h2>
<!-- /wp:heading -->
<!-- wp:tag-cloud {"numberOfTags":15} /-->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
