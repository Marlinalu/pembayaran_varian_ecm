<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Restaurant Zone
 */

$restaurant_zone_post_page_title =  get_theme_mod( 'restaurant_zone_post_page_title', 1 );
$restaurant_zone_post_page_meta =  get_theme_mod( 'restaurant_zone_post_page_meta', 1 );
$restaurant_zone_post_page_thumb = get_theme_mod( 'restaurant_zone_post_page_thumb', 1 );

?>

<div class="col-lg-6 col-md-6 col-sm-6">
    <article id="post-<?php the_ID(); ?>" <?php post_class('article-box'); ?>>
        <header class="entry-header">
            <?php if ($restaurant_zone_post_page_title == 1 ) {?>
                <?php the_title('<h3 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h3>');?>
                <hr>
            <?php }?>
            <?php if ('post' === get_post_type()) : ?>
                <?php if ($restaurant_zone_post_page_meta == 1 ) {?>
                    
                    <div class="entry-meta">
                        <?php
                        restaurant_zone_posted_on();
                        ?>
                    </div>
                    <hr>
                <?php }?>
            <?php endif; ?>
            
        </header>
        <?php if ($restaurant_zone_post_page_thumb == 1 ) {?>
            <?php if ( has_post_thumbnail() ) { ?>
                <?php restaurant_zone_post_thumbnail(); ?>
            <?php }?>
        <?php }?>
        <div class="entry-summary">
            <?php
                the_excerpt();

                wp_link_pages(array(
                    'before' => '<div class="page-links">' . esc_html__('Pages:', 'restaurant-zone'),
                    'after' => '</div>',
                ));
            ?>
        </div>
        <footer class="entry-footer">
            <?php restaurant_zone_entry_footer(); ?>
        </footer>
    </article>
</div>