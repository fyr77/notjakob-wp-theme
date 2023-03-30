<?php get_header(); ?>
<?php
// Start the loop.
while (have_posts()):
    the_post(); ?>

    <div class="postmeta">
        <h1>
            <?php the_title(); ?>
        </h1>
        <p>by
            <?php the_author(); ?> in
            <?php the_category(",", "multiple"); ?>.
            <?php the_tags(); ?>
        </p>
    </div>

    <?php the_content(); ?>

    <?php
    // Previous/next post navigation.
    the_post_navigation(
        array(
            'prev_text' => __('previous post: %title'),
            'next_text' => __('next post: %title'),
            'in_same_term' => true,
            'taxonomy' => __('post_tag'),
            'screen_reader_text' => __('Continue Reading'),
        )
    );

    // If comments are open or we have at least one comment, load up the comment template.
    if (comments_open() || get_comments_number()):
        comments_template();
    endif;
    // End the loop.
endwhile;
?>
<?php get_footer(); ?>