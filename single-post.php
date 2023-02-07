<?php get_header(); ?>


<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>

        <div class="max-w-7xl mx-auto pt-14 grid grid-cols-12 p-8">
            <div class="col-span-12 border border-brown rounded-xl overflow-hidden h-[520px] relative">
                <?php the_post_thumbnail('large', array('class' => 'object-cover w-full h-full')); ?>
                <date class="absolute left-12 bottom-12 bg-white p-2 border border-brown rounded-lg"><?php echo get_the_date(); ?></date>
            </div>
            <div class="col-span-10 col-start-2 py-20">
                <h2 class="text-4xl lg:text-6xl font-oi mb-6"><?php the_title(); ?></h2>
                <div class="columns-2">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>

    <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>