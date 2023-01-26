<?php
$title = $args['title'];

?>

<div class="w-screen h-screen grid grid-cols-12 grid-rows-1">
    <canvas data-spline="https://prod.spline.design/Zfbr8lgrjsq57VFo/scene.splinecode" class="col-start-1 col-span-12 row-start-1 row-span-1"></canvas>
    <div class="flex items-end p-20 col-start-1 col-span-6 row-start-1 row-span-1 pointer-events-none">
        <h1 class="font-oi text-4xl lg:text-7xl"><?= $title ?></h1>
    </div>
</div>