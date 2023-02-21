<?php
// Load Tailwind from CDN
// https://tailwindcss.com/docs/installation/play-cdn
function load_tailwind()
{
    wp_enqueue_script('tailwind', 'https://cdn.tailwindcss.com', array(), null, false);
    // Load tailwind.config.js after tailwind has been loaded
    wp_enqueue_script('tailwind-config', get_template_directory_uri() . '/tailwind.config.js', array('tailwind'), null, false);
}
add_action('wp_enqueue_scripts', 'load_tailwind');

function editor_enqueue()
{
    wp_enqueue_script('tailwind', 'https://cdn.tailwindcss.com', array(), null, false);
    // Load tailwind.config.js after tailwind has been loaded
    wp_enqueue_script('tailwind-config', get_template_directory_uri() . '/tailwind.config.js', array('tailwind'), null, false);
}
add_action('enqueue_block_editor_assets', 'editor_enqueue');

// Register Vue for import from CDN
function register_theme_scripts()
{
    wp_register_script('vue', 'https://cdn.jsdelivr.net/npm/vue@2.7.14', array(), null, false);
}
add_action('wp_enqueue_scripts', 'register_theme_scripts');

// Register theme support
add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('menus');
    add_theme_support('wp-block-styles');
    add_editor_style('editor-style.css');
});

// Register theme menu(s)
// https://developer.wordpress.org/themes/functionality/navigation-menus/
function register_theme_menus()
{
    register_nav_menus(array(
        'primary-menu' => __('Primary Menu'),
    ));
}
add_action('init', 'register_theme_menus');

// Register Custom Post Type "Ice Cream"
// https://developer.wordpress.org/themes/functionality/custom-post-types/
function create_post_type()
{
    register_post_type('ice-cream', array(
        'labels' => array(
            'name' => __('Ice Cream'),
            'singular_name' => __('Ice Cream'),
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'ice-cream'),
        'menu_icon' => 'dashicons-smiley'
    ));
}
add_action('init', 'create_post_type');

// Register Custom Post Type "Vendor"
// https://developer.wordpress.org/reference/functions/register_post_type/
function create_vendor_post_type()
{
    register_post_type('vendor', array(
        'labels' => array(
            'name' => __('Vendors'),
            'singular_name' => __('Vendor')
        ),
        'publicly_queryable' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'vendors'),
        'menu_icon' => 'dashicons-store',
    ));
}
add_action('init', 'create_vendor_post_type');

function register_acf_blocks()
{
    register_block_type(__DIR__ . '/blocks/hero');
}
add_action('init', 'register_acf_blocks');
