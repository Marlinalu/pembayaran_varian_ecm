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
            <p><?php $restaurant_zone_excerpt = get_the_excerpt(); echo esc_html( restaurant_zone_string_limit_words( $restaurant_zone_excerpt, 15 ) ); ?></p>
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
  <?php if(get_theme_mod('restaurant_zone_popular_setting') != ''){ ?>
  <section id="items-section">
    <div class="container">
      <?php if(get_theme_mod('restaurant_zone_title') != ''){ ?>
        <h3><?php echo esc_html(get_theme_mod('restaurant_zone_title','')); ?></h3>
      <?php }?>
      <div class="row">
        <div class="col-lg-6 col-md-6">
          <?php $restaurant_zone_image_page = array();
            $restaurant_zone_mod = intval( get_theme_mod( 'restaurant_zone_image_page' ));
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
          <div class="item-list">
            <?php
            $restaurant_zone_catData = get_theme_mod('restaurant_zone_menu_items','');
            if($restaurant_zone_catData){
              $restaurant_zone_page_query = new WP_Query(array( 'category_name' => esc_html($restaurant_zone_catData,'restaurant-zone')));
              while( $restaurant_zone_page_query->have_posts() ) : $restaurant_zone_page_query->the_post(); ?>
                <div class="serv-box row">
                  <div class="col-lg-3 col-md-4">
                    <?php the_post_thumbnail(); ?>
                  </div>
                  <div class="col-lg-9 col-md-8">
                    <h4><?php the_title(); ?></h4>
                    <p><?php $restaurant_zone_excerpt = get_the_excerpt(); echo esc_html( restaurant_zone_string_limit_words( $restaurant_zone_excerpt, 16 ) ); ?></p>
                    <a href="<?php the_permalink(); ?>"><?php esc_html_e('VIEW MORE','restaurant-zone'); ?></a>
                  </div>
                </div>
              <?php endwhile;
              wp_reset_postdata();
            } ?>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php }?>
</main>

<?php get_footer(); ?>
