<?php
// Enqueue Mapbox GL JS
function load_mapbox()
{
    wp_enqueue_script('mapbox', 'https://api.mapbox.com/mapbox-gl-js/v2.12.0/mapbox-gl.js', array(), null, false);
    wp_enqueue_style('mapbox', 'https://api.mapbox.com/mapbox-gl-js/v2.12.0/mapbox-gl.css', array(), null, false);
    wp_enqueue_script('vendor-map', get_template_directory_uri() . '/src/js/vendor-map.js', array('mapbox', 'vue'), null, true);
    wp_localize_script('vendor-map', 'vendorMapData', array('templateUrl' => get_template_directory_uri()));
}
add_action('wp_enqueue_scripts', 'load_mapbox');
?>
<?php get_header(); ?>
<!-- This is where the map will be rendered -->
<div id="map" style='height: 90vh;'></div>
<?php if (have_posts()) : ?>
    <h1>Vendors</h1>
    <?php while (have_posts()) : the_post(); ?>

        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

        <?php the_excerpt(); ?>

    <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>