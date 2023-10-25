<?php
/**
 * Template Name: Custom Front Page
 */

get_header(); ?>

<main id="skip-content">
  <section id="top-slider">
    <?php if(get_theme_mod('restaurant_zone_slider_setting') != ''){ ?>
    <?php $restaurant_zone_slide_pages = array();
      for ( $restaurant_zone_count = 1; $restaurant_zone_count <= 3; $restaurant_zone_count++ ) {
        $restaurant_zone_mod = intval( get_theme_mod( 'restaurant_zone_top_slider_page' . $restaurant_zone_count ));
        if ( 'page-none-selected' != $restaurant_zone_mod ) {
          $restaurant_zone_slide_pages[] = $restaurant_zone_mod;
        }
      }
      if( !empty($restaurant_zone_slide_pages) ) :
        $restaurant_zone_args = array(
          'post_type' => 'page',
          'post__in' => $restaurant_zone_slide_pages,
          'orderby' => 'post__in'
        );
        $restaurant_zone_query = new WP_Query( $restaurant_zone_args );
        if ( $restaurant_zone_query->have_posts() ) :
          $i = 1;
    ?>
    <div class="owl-carousel" role="listbox">
      <?php  while ( $restaurant_zone_query->have_posts() ) : $restaurant_zone_query->the_post(); ?>
        <div class="slider-box">
          <img src="<?php the_post_thumbnail_url('full'); ?>"/>
          <div class="slider-inner-box">
            <h2><?php the_title(); ?></h2>
            <p class="pb-4"><?php echo esc_html( wp_trim_words( get_the_content(), 30 )); ?><p>
            <div class="slide-btn"><a href="<?php the_permalink(); ?>"><?php esc_html_e('VIEW MORE','restaurant-zone'); ?></a></div>
          </div>
        </div>
      <?php $i++; endwhile;
      wp_reset_postdata();?>
    </div>
    <?php else : ?>
      <div class="no-postfound"></div>
    <?php endif;
    endif;?>
    <?php }?>
  </section>

  <?php if(get_theme_mod('barbecue_cafeteria_popular_setting') != ''){ ?>
  <section id="items-section">
    <div class="container">
      <?php if(get_theme_mod('barbecue_cafeteria_title') != ''){ ?>
        <h3><?php echo esc_html(get_theme_mod('barbecue_cafeteria_title','')); ?></h3>
      <?php }?>
      <div class="row">
        <div class="col-lg-6 col-md-6">
          <?php $restaurant_zone_image_page = array();
            $restaurant_zone_mod = intval( get_theme_mod( 'barbecue_cafeteria_image_page' ));
            if ( 'page-none-selected' != $restaurant_zone_mod ) {
              $restaurant_zone_image_page[] = $restaurant_zone_mod;
            }
            if( !empty($restaurant_zone_image_page) ) :
              $restaurant_zone_args = array(
                'post_type' => 'page',
                'post__in' => $restaurant_zone_image_page,
                'orderby' => 'post__in'
              );
              $restaurant_zone_query = new WP_Query( $restaurant_zone_args );
              if ( $restaurant_zone_query->have_posts() ) :
          ?>
          <?php  while ( $restaurant_zone_query->have_posts() ) : $restaurant_zone_query->the_post(); ?>
            <div class="item-image">
              <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url('full'); ?>"/></a>
            </div>
          <?php $i++; endwhile;
          wp_reset_postdata();?>
          <?php else : ?>
            <div class="no-postfound"></div>
          <?php endif;
          endif;?>
        </div>
        <div class="col-lg-6 col-md-6">
          <?php if(get_theme_mod('barbecue_cafeteria_home_product') != ''){ ?>
            <div class="item-list">
              <?php
                if ( class_exists( 'WooCommerce' ) ) {
                  $barbecue_cafeteria_args = array(
                    'post_type' => 'product',
                    'posts_per_page' => get_theme_mod('barbecue_cafeteria_home_product_per_page', 4),
                    'product_cat' => get_theme_mod('barbecue_cafeteria_home_product'),
                    'order' => 'ASC'
                  );
                  $loop = new WP_Query( $barbecue_cafeteria_args );
                  while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
                    <div class="serv-box row">
                      <div class="col-lg-3 col-md-12 col-sm-12 col-12">
                        <div class="product-image">
                          <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.esc_url(woocommerce_placeholder_img_src()).'" />'; ?>
                       </div>
                      </div>
                      <div class="col-lg-9 col-md-12 col-sm-12 col-12">
                        <div class="product-content text-left">
                          <h4><a href="<?php echo esc_url(get_permalink( $loop->post->ID )); ?>"><?php the_title(); ?></a></h4>
                          <span class="<?php echo esc_attr( apply_filters( 'woocommerce_product_price_class', 'price' ) ); ?> m-0"><?php echo $product->get_price_html(); ?></span>
                          <p class="content mt-3 mb-2"><?php echo esc_html( wp_trim_words( get_the_content(), 20 )); ?><p>
                          <p class="cart-btn mr-1 text-left"><?php if( $product->is_type( 'simple' ) ){ woocommerce_template_loop_add_to_cart( $loop->post, $product ); } ?></p>
                        </div>
                      </div>
                    </div>
                <?php endwhile; wp_reset_query(); ?>
              <?php } ?>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </section>
<?php }?>
</main>

<?php get_footer(); ?>
