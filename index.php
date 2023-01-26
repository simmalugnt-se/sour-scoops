<?php get_header(); ?>


<?php get_template_part('partials/blocks/hero', 'hero', array('title' => "Icecreams so sour, they'll make your lips pucker")); ?>
<?php get_template_part('partials/blocks/copy', 'copy', array('title' => "Welcome to Sour Scoops, where unique and daring flavors reign supreme", "bg" => "blue-200")); ?>
<?php get_template_part('partials/blocks/bestseller-grid', 'bestseller-grid', array('title' => "Bestsellers")); ?>
<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>

        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

        <?php the_excerpt(); ?>

    <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>