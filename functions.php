<?php
// Load Tailwind from CDN
// https://tailwindcss.com/docs/installation/play-cdn
add_action(
    'wp_enqueue_scripts',
    function () {
        wp_enqueue_script('tailwind', 'https://cdn.tailwindcss.com', array(), null, false);
        // Load tailwind.config.js after tailwind has been loaded
        wp_enqueue_script('tailwind-config', get_template_directory_uri() . '/tailwind.config.js', array('tailwind'), null, false);
    }
);

function print_a($data)
{
?>
    <pre class="block p-6 m-6 border border-brown rounded-xl text-xs overflow-hidden"><code><?php print_r($data); ?></code></pre>
<?php
}

// Register theme support
add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('menus');
});

// Register theme menu(s)
// https://developer.wordpress.org/themes/functionality/navigation-menus/
add_action(
    'init',
    function () {
        register_nav_menus(array(
            'primary-menu' => __('Primary Menu'),
            'footer-menu' => __('Footer Menu'),
            'secondary-menu' => __('Secondary Menu'),
        ));
    }
);
