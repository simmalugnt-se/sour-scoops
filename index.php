<?php get_header(); ?>

<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post();
        print_a($post);
    endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>