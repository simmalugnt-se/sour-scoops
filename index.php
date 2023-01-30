<?php get_header(); ?>


<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>
        <pre>
            <code>
                <?php print_r($post()); ?>
            </code>
        </pre>
    <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>