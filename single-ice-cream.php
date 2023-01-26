<?php get_header(); ?>


<div class="w-screen grid grid-cols-12 gap-6 grid-rows-1 max-w-7xl mx-auto py-8">
    <div class="col-span-6 border border-brown rounded-xl overflow-hidden bg-blue-200 aspect-square">
        <canvas data-spline="https://prod.spline.design/4UEHB9Sh1rGUkvXW/scene.splinecode" class="w-full h-full border"></canvas>
    </div>
    <div class="col-span-6 flex flex-col gap-6 justify-center text-center px-6">
        <h1 class="font-oi text-4xl lg:text-7xl"><?php the_title(); ?></h1>
        <p>A pungent and off-putting flavor that is made with real garbage and spoiled milk. A truly unique and disgusting flavor that is sure to shock your taste buds.</p>
        <ul>
            <li>
                1 PACK 350 ML
            </li>
            <li>
                *CONSUME AT YOUR OWN PERIL
            </li>
        </ul>
    </div>
</div>
<?php get_template_part('partials/blocks/copy', 'copy', array('title' => "This flavor is not for the faint of heart", "bg" => "blue-200")); ?>
<?php get_template_part('partials/blocks/bestseller-grid', 'bestseller-grid', array('title' => "Similar goodies")); ?>

<?php get_footer(); ?>