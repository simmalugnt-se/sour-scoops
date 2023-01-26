<?php
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
</div>