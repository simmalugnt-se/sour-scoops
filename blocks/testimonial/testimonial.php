<?php

/**
 * Testimonial Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during backend preview render.
 * @param   int $post_id The post ID the block is rendering content against.
 *          This is either the post ID currently being displayed inside a query loop,
 *          or the post ID of the post hosting this block.
 * @param   array $context The context provided to the block by the post or it's parent block.
 */

// Support custom "anchor" values.
$anchor = '';
if (!empty($block['anchor'])) {
    $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'testimonial-block border bg-pink-100 p-10 grid grid-cols-4 gap-4';
if (!empty($block['className'])) {
    $class_name .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $class_name .= ' align' . $block['align'];
}

// Load values and assign defaults.
$text             = get_field('quote') ?: 'Your testimonial here...';
$author           = get_field('author') ?: 'Author name';
$author_role      = get_field('role') ?: 'Author role';
$image            = get_field('image') ?: 295;
$background_color = get_field('background_color');
$text_color       = get_field('text_color');

// Build a valid style attribute for background and text colors.
$styles = array('background-color: ' . $background_color, 'color: ' . $text_color);
$style  = implode('; ', $styles);

?>
<div <?php echo $anchor; ?>class="<?php echo esc_attr($class_name); ?>" style="<?php echo esc_attr($style); ?>">
    <div class="col-span-full lg:col-span-1">

    </div>
    <div class="col-span-full lg: col-span-3">
        <blockquote class="testimonial-blockquote">
            <span class="testimonial-text"><?php echo esc_html($text); ?></span>
            <span class="testimonial-author"><?php echo esc_html($author); ?></span>
            <span class="testimonial-role"><?php echo esc_html($author_role); ?></span>
        </blockquote>
        <div class="testimonial-image">
            <?php echo wp_get_attachment_image($image, 'full'); ?>
        </div>
    </div>

</div>

<!-- <?php
        $title = $args['title'];
        $bg = $args['bg'] ?: 'bg-beige';
        ?>

<div class="py-20 px-8 bg-<?= $bg; ?> border-y border-brown">
    <div class="max-w-7xl mx-auto grid grid-cols-12 grid-rows-1 ">
        <div class="col-span-full md:col-span-5 md:pr-16">
            <img class="w-full h-auto aspect-square border-2 border-brown object-cover rounded-full" src="<?= get_template_directory_uri(); ?>/src/images/icecream.png" alt="Ice Cream">
        </div>
        <div class="col-span-full mt-12 md:mt-0 md:col-span-7 md:col-start-6 flex flex-col justify-center">
            <q class="text-3xl lg:text-5xl font-oi mb-6 md:mb-12"><?= $title; ?></q>
            <span class="uppercase">- Name Namesson</span>
        </div>
    </div>
</div> -->