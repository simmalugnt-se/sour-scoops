<?php
$title = $args['title'];

?>

<div class="w-screen h-screen grid grid-cols-12 grid-rows-1">
    <canvas data-spline="https://prod.spline.design/pSltKjPMNRN5TeCm/scene.splinecode" class="col-start-1 col-span-12 row-start-1 row-span-1"></canvas>
    <div class="flex items-end p-20 col-start-5 col-span-6 row-start-1 row-span-1 pointer-events-none">
        <h1 class="font-oi text-4xl lg:text-7xl"><?= $title ?></h1>
    </div>
</div>

<!-- Remove this when import maps will be widely supported -->
<script async src=" https://unpkg.com/es-module-shims@1.3.6/dist/es-module-shims.js"></script>
<script type="module" src="<?= get_template_directory_uri(); ?>/src/js/blocks/hero.js"></script>