<?php wp_footer(); ?>

<div class="w-full bg-white">
    <div style="background-image: url(<?= get_template_directory_uri(); ?>/src/images/icemelt.svg);" class="w-full bg-contain bg-repeat-x h-48">
    </div>
    <div class="max-w-7xl mx-auto px-8 col-span-1 grid grid-cols-12 gap-y-10 gap-x-8 font-mono py-8">
        <div class="col-span-6">
            <img src="<?= get_template_directory_uri(); ?>/src/images/sour-scoops-logo.svg" />
        </div>
        <div class="col-span-6">
            <ul>
                <li class="p-1 text-xl"><a href="">Products</a></li>
                <li class="p-1 text-xl"><a href="">Our Story</a></li>
                <li class="p-1 text-xl"><a href="">Blog</a></li>
            </ul>
        </div>
        <div class="col-span-6 text-xs">
            © 2023 SOUR SCOOPS, CONSUME AT YOUR OWN PERIL
        </div>
        <div class="col-span-5 text-xs">
            <a href="">INSTAGRAM</a> / <a href="">FACEBOOK</a>
        </div>
        <div class="col-span-1 flex justify-end">👆</div>
    </div>
</div>
</div>

</body>

</html>