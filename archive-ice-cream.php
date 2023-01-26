<?php get_header(); ?>

<div class="grid grid-cols-1 lg:grid-cols-4 gap-4 py-20 max-w-7xl mx-auto">
    <?php if (have_posts()) : ?>

        <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part('partials/blocks/product-card', 'product-card', array()); ?>
        <?php endwhile; ?>

    <?php endif; ?>
</div>

<?php get_footer(); ?>