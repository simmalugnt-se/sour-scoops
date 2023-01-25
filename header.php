<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <?php $menuItems = wp_get_nav_menu_items('primary-menu'); ?>

    <nav class="font-sans flex flex-col text-center sm:flex-row sm:text-left sm:justify-between py-4 px-6 bg-white shadow sm:items-baseline w-full">
        <div class="mb-2 sm:mb-0">
            <a href="<?= site_url(); ?>" title="Home" class="text-2xl no-underline text-grey-darkest hover:text-blue-dark"><?php bloginfo('name'); ?></a>
        </div>
        <div>
            <?php $currentPageId = get_queried_object_id();
            if ($menuItems) foreach ($menuItems as $item) : ?>
                <a title="<?= $item->title; ?>" class="hover:text-pink-500 px-3 py-2 <?= $currentPageId == $item->object_id ? 'text-pink-500' : 'text-gray-400' ?> >" href="<?= $item->url; ?>">
                    <?= $item->title; ?>
                </a>
            <?php endforeach; ?>
        </div>
    </nav>