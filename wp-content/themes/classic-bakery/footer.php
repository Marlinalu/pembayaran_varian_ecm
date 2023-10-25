<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Classic Bakery
 */
?>       
    <div class="clear"></div>
    <div id="footer">
    	<div class="container">
        <div class="logo text-center pt-5 pt-md-5">
          <?php classic_bakery_the_custom_logo(); ?>
          <?php $classic_bakery_blog_info = get_bloginfo( 'name' ); ?>
          <?php if ( ! empty( $classic_bakery_blog_info ) ) : ?>
            <p class="site-title mt-3"><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></p>
            <?php $classic_bakery_description = get_bloginfo( 'description', 'display' );
            if ( $classic_bakery_description || is_customize_preview() ) : ?>
              <span class="site-description"><?php echo esc_html( $classic_bakery_description ); ?></span>
            <?php endif; ?>
          <?php endif; ?>
        </div>
        <div class="social-icons text-center my-3">
          <?php if ( get_theme_mod('classic_bakery_fb_link') != "") { ?>
            <a title="<?php esc_attr('facebook', 'classic-bakery'); ?>" target="_blank" href="<?php echo esc_url(get_theme_mod('classic_bakery_fb_link')); ?>"><i class="fab fa-facebook-f"></i></a> 
          <?php } ?>
          <?php if ( get_theme_mod('classic_bakery_twitt_link') != "") { ?>
            <a title="<?php esc_attr('twitter', 'classic-bakery'); ?>" target="_blank" href="<?php echo esc_url(get_theme_mod('classic_bakery_twitt_link')); ?>"><i class="fab fa-twitter"></i></a>
          <?php } ?>
          <?php if ( get_theme_mod('classic_bakery_insta_link') != "") { ?>
            <a title="<?php esc_attr('instagram', 'classic-bakery'); ?>" target="_blank" href="<?php echo esc_url(get_theme_mod('classic_bakery_insta_link')); ?>"><i class="fab fa-instagram"></i></a>
          <?php } ?>
        </div>
        <div class="copywrap text-center">
          <p><a href="<?php echo esc_url(CLASSIC_BAKERY_FOOTER_LINK); ?>" target="_blank"><?php echo esc_html(get_theme_mod('classic_bakery_copyright_line',__('Bakery WordPress Theme','classic-bakery'))); ?></a> <?php echo esc_html('By Classic Templates','classic-bakery'); ?></p>
        </div>
        <div class="clear"></div>
      </div>      
    </div>
  </div>
</div>

<?php if(get_theme_mod('classic_bakery_scroll_hide',false)){ ?>
 <a id="button"><?php esc_html_e('TOP', 'classic-bakery'); ?></a>
<?php } ?>

<?php wp_footer(); ?>
</body>
</html>