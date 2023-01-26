<?php
$title = $args['title'];
$bg = $args['bg'] ?: 'bg-gray-100';
?>

<div class="grid grid-cols-12 grid-rows-1 py-20 px-8 bg-<?= $bg; ?> border-y border-brown">
    <div class="col-span-full md:col-span-8 md:col-start-3">
        <h2 class="text-3xl lg:text-4xl font-oi text-center mb-12"><?= $title; ?></h2>
        <div class="columns-1 md:columns-2 flex flex-col items-center md:block">
            <p>From "Rotting Garbage" to "Sour Lips" and "Gummy Worms and Ashes" our ice cream will tantalize your taste buds. Come taste the sourness for yourself and satisfy your cravings with our one-of-a-kind flavors.</p>
            <p>Scoops so sour, they'll make your lips pucker. Tasty fun, try it yourself. Welcome!</p>
            <a class="bg-white border border-brown rounded-lg py-2 px-5 inline-block mt-4" href="/products">Check out our flavors 👉</a>
        </div>
    </div>
</div>