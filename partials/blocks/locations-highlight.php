<?php
?>

<div class="grid grid-cols-1 lg:grid-cols-12 gap-4 py-20 max-w-7xl mx-auto bg-pink-dark">
    <div class="col-span-full lg:col-span-10 lg:col-start-2">
        <div class="flex gap-4 items-center mb-6">
            <div class="flex-grow border-b border-brown h-0"></div>
            <div>Logo</div>
            <div class="flex-grow border-b border-brown h-0"></div>
        </div>
        <div class="grid lg:grid-cols-2 items-center mb-6 items-center">
            <div>
                <h2 class="text-4xl lg:text-6xl font-oi mb-6">Available at 900 locations near you!</h2>
                <p>Find your local retailer that sells our products.</p>
            </div>
            <div class="flex flex-col items-center">
                <img src="<?= get_template_directory_uri(); ?>/src/images/map-marker.svg" />
                <a class="bg-white border border-brown rounded-lg py-2 px-5 inline-block mt-4" href="/products">Check out our flavors 👉</a>
            </div>
        </div>
    </div>
</div>