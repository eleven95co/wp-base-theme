<head>
    <meta name="viewport" content="width=device-width">
    <title><?php echo get_bloginfo("title") ?></title>
    <meta name="description" content="<?php echo get_bloginfo("description") ?>"/>
    <?php wp_head() ?>
</head>
<body <?php body_class('flex flex-col w-full h-full') ?>>
<?php wp_body_open(); ?>
<header class="flex flex-col bg-gray-900 text-white lg:flex-row">
    <div class="px-8 py-4 flex-1 flex items-center justify-between">
        <span><?php echo get_bloginfo('title') ?></span>
        <button id="header-nav-button" class="lg:hidden" aria-label="Navigation button"><i class="fas fa-bars"></i></button>
    </div>
    <div class="relative">
        <div class="px-8 py-4 hidden absolute bg-gray-900 w-full lg:block lg:static lg:w-auto" id="header-menu"><?php echo wp_nav_menu('primary') ?></div>
    </div>
</header>
