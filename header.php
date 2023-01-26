<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="importmap">
        {
        "imports": {
          "@splinetool/runtime": "https://unpkg.com/@splinetool/runtime@0.9.198/build/runtime.js"
        }
      }
    </script>
    <?php wp_head(); ?>
    <!-- Remove this when import maps will be widely supported -->
    <script async src=" https://unpkg.com/es-module-shims@1.3.6/dist/es-module-shims.js"></script>
    <script type="module" src="<?= get_template_directory_uri(); ?>/src/js/spline-loader.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Mono:wght@500&family=DM+Sans:wght@500&family=Oi&display=swap" rel="stylesheet">
</head>

<body <?php body_class("bg-pink-light text-brown"); ?>>
    <?php wp_body_open(); ?>
    <?php $menuItems = wp_get_nav_menu_items('primary-menu'); ?>

    <nav class="font-mono border-b-2 border-brown text-lg">
        <div class="max-w-7xl mx-auto grid grid-cols-12">
            <div class="col-span-5 py-5 flex gap-10 items-center">
                <?php $currentPageId = get_queried_object_id();
                if ($menuItems) foreach ($menuItems as $item) : ?>
                    <a title="<?= $item->title; ?>" class="<?= $currentPageId == $item->object_id ? 'text-brown' : 'text-brown' ?> >" href="<?= $item->url; ?>">
                        <?= $item->title; ?>
                    </a>
                <?php endforeach; ?>
            </div>
            <div class="col-span-2 flex justify-center items-center py-3">
                <a href="<?= site_url(); ?>"><img class="h-16 w-auto" src="<?= get_template_directory_uri(); ?>/src/images/sour-scoops-logo.svg" />
                </a>
            </div>
            <div class="col-span-5 flex justify-end items-center py-5">
                <span>Get one now 👉</span>
            </div>
        </div>
    </nav>