<?php
$title = $args['title'];
// https://prod.spline.design/Zfbr8lgrjsq57VFo/scene.splinecode
?>
<div class="w-full h-screen grid grid-cols-12 grid-rows-1 bg-pink">
    <div class="col-start-1 col-span-full row-start-1 row-span-1 aspect-square border relative">
        <canvas class="mx-auto absolute object-contain max-w-[100vw] max-h-[100vw] md:max-w-[90vw] md:max-w-[90vw] lg:max-w-[70vw] lg:max-h-[70vw] h-full w-full inset-0" data-spline="https://prod.spline.design/pSltKjPMNRN5TeCm/scene.splinecode"></canvas>
    </div>
    <div class="flex items-center lg:items-end p-4 lg:p-20 col-start-1 col-span-6 row-start-1 row-span-1 pointer-events-none">
        <h1 class="font-oi text-4xl lg:text-7xl mb-20 relative z-10"><?= $title ?></h1>
    </div>
</div>