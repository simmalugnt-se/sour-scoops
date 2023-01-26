<?php get_header(); ?>

<?php get_template_part('partials/blocks/hero', 'hero', array('title' => "Icecreams so sour, they'll make your lips pucker")); ?>

<div class="max-w-7xl mx-auto">
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php the_content(); ?>
</div>


<?php get_footer(); ?>