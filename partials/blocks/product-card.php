<?php
$id = $args['id'] ?: 'copy';
$images = [
    "https://prod.spline.design/4UEHB9Sh1rGUkvXW/scene.splinecode",
    "https://prod.spline.design/C3Gfwb38TTg9Ucgb/scene.splinecode",
    "https://prod.spline.design/Vs-h0AQxoZHFmAsv/scene.splinecode",
    "https://prod.spline.design/5bGlJ-Ww4-ncU7Xl/scene.splinecode",
];
// Get random from $images
$randomImage = $images[array_rand($images)];
?>

<div class="flex flex-col gap-6">
    <div class="rounded-xl border border-brown overflow-hidden aspect-square">
        <canvas class="w-full h-full" data-spline="<?= $randomImage; ?>"></canvas>
    </div>
    <div class="rounded-xl bg-blue py-4 border border-brown">
        <h3 class="text-3xl lg:text-4xl font-oi mb-12 px-5">Ice</h3>
        <a class="block border-t border-brown px-5 pt-3" href="">Read more 👉</a>
    </div>
</div>