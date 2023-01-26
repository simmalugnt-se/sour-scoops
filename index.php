<?php get_header(); ?>


<div class="grid grid-cols-2 gap-4 p-8 max-w-7xl mx-auto">
    <?php if (have_posts()) : ?>

        <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part('partials/blocks/post-card', 'post-card', array()); ?>
        <?php endwhile; ?>

    <?php endif; ?>
</div>
<?php get_footer(); ?>