<?php
register_nav_menus(array(
    'primary' => __('Primary Menu', 'primary'),
));

wp_enqueue_scripts();
wp_enqueue_script("main", get_theme_file_uri("assets/main.js"), [], "1.0.0", true);
wp_enqueue_script("fontawesome", "https://kit.fontawesome.com/b16ccc83e9.js", [], null, false);
wp_enqueue_style("tailwindcss", get_theme_file_uri("assets/main.css"), [], "1.0.0", "all");
