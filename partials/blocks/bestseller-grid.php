<?php
$title = $args['title'] ?: 'Bestsellers';
?>

<div class="grid grid-cols-1 lg:grid-cols-4 gap-4 py-20">
    <h2 class="text-3xl col-span-full lg:text-4xl font-oi mb-12"><?= $title; ?></h2>
    <?php
    // Repeat a function 4 times
    for ($i = 0; $i < 4; $i++) :
        get_template_part('partials/blocks/product-card', 'product-card', array('title' => "Bestsellers", 'id' => "icecream-$i"));
    endfor;
    ?>
</div>