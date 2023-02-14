<?php
get_header();
$latest_news = new WP_Query(
    array(
        'post_type' => 'post',
        'posts_per_page' => 3,
        'orderby' => 'date',
        'order' => 'DESC'
    )
);
?>


<?php get_template_part('partials/blocks/hero', 'hero', array('title' => "Icecreams so sour, they'll make your lips pucker")); ?>
<?php get_template_part('partials/blocks/copy', 'copy', array('title' => "Welcome to Sour Scoops, where unique and daring flavors reign supreme", "bg" => "blue-dark")); ?>
<?php get_template_part('partials/blocks/bestseller-grid', 'bestseller-grid', array('title' => "Bestsellers")); ?>
<?php get_template_part('partials/blocks/locations-highlight', 'locations-highlight', array('title' => "Bestsellers")); ?>
<?php if ($latest_news->have_posts()) : ?>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 p-8 max-w-7xl mx-auto">
        <div class="col-span-full flex flex-col md:flex-row justify-between items-center mb-6">
            <h2 class="text-5xl lg:text-6xl font-oi">Latest News</h2>
            <a class="bg-white border border-brown rounded-lg py-2 px-5 inline-block mt-4" href="<?= get_permalink(get_option('page_for_posts')); ?>">Read more news 👉</a>
        </div>
        <?php while ($latest_news->have_posts()) : $latest_news->the_post();
            get_template_part('partials/blocks/post-card', 'post-card', array());
        endwhile; ?>
    </div>
<?php endif; ?>

<?php get_footer(); ?>