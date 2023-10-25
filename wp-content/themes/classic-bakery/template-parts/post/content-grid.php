<?php
/**
 * @package Classic Bakery
 */
?>

<div class="col-lg-4 col-md-4 postsec-list">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="listarticle">
        <?php if (has_post_thumbnail() ){ ?>
            <div class="post-thumb">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
            </div>
        <?php } ?>
        <header class="entry-header">
            <h2 class="single_title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
            <?php if ( 'post' == get_post_type() ) : ?>
                <div class="postmeta">
                    <div class="post-date"><i class="fas fa-calendar-alt"></i> &nbsp; <?php the_date(); ?></div>
                    <div class="post-comment">&nbsp; &nbsp; <i class="fa fa-comment"></i> &nbsp;  <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a></div>
                </div>
            <?php endif; ?>
        </header>
            <div class="entry-summary">
                <?php if(get_theme_mod('classic_bakery_blog_post_description_option') == 'Full Content'){ ?>
                    <div class="entry-content"><?php
                        $content = get_the_content(); ?>
                        <p><?php echo wpautop($content); ?></p>  
                    </div>
                 <?php }
                if(get_theme_mod('classic_bakery_blog_post_description_option', 'Excerpt Content') == 'Excerpt Content'){ ?>
                    <?php if(get_the_excerpt()) { ?>
                        <div class="entry-content"> 
                            <p><?php $excerpt = get_the_excerpt(); echo esc_html($excerpt); ?></p>
                        </div>
                    <?php }?>
                <?php }?> 
                <div class="rsvp_button my-4">
                    <div class="rsvp_inner d-inline-block"><a href="<?php the_permalink(); ?>"><?php esc_html_e('Read More','classic-bakery'); ?></a></div>
                </div>
            </div>
        <div class="clearfix"></div>
    </div>
</article>
</div>
