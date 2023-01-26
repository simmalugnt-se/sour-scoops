<?php
$title = $args['title'] ?: 'Bestsellers';
?>

<div class="grid grid-cols-1 lg:grid-cols-4 gap-4 py-20 px-8 max-w-7xl mx-auto">
    <div class="col-span-full flex flex-col md:flex-row justify-between items-center mb-6">
        <h2 class="text-5xl lg:text-6xl font-oi"><?= $title; ?></h2>
        <a class="bg-white border border-brown rounded-lg py-2 px-5 inline-block mt-4" href="/products">Check out our flavors 👉</a>
    </div>
    <?php
    // Repeat a function 4 times
    for ($i = 0; $i < 4; $i++) :
        get_template_part('partials/blocks/product-card', 'product-card', array());
    endfor;
    ?>
</div>