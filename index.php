<?php get_header(); ?>
<div class="pure-g">
    <?php if (have_posts()):
        while (have_posts()):
            the_post(); ?>
            <div class="pure-u-1 pure-u-md-1-3">
                <div class="container_proj">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <?php the_excerpt(); ?>
                </div>
            </div>
        <?php endwhile; else: ?>
        <p>
            <?php _e('No Posts To Display.'); ?>
        </p>
    <?php endif; ?>
</div>
<?php get_footer(); ?>