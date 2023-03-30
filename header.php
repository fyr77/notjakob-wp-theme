<!DOCTYPE html>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="Description" content="<?php bloginfo('description'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?php wp_title('|', true, 'right'); ?>
        <?php echo get_bloginfo('name') ?>
    </title>
    <link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_uri()); ?>" type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css">
    <?php wp_head(); ?>
</head>

<body>
    <div class="header">
        <a href="<?php echo esc_url(home_url('/')); ?>">
            <h2 class="logo">
                <?php bloginfo('name'); ?>
            </h2>
        </a>
        <nav>
            <?php wp_nav_menu(array('menu' => 'primary', 'theme_location' => 'header-menu', 'fallback_cb' => false)); ?>
        </nav>
    </div>
    <div id="card" class="card">
        <div class="inner_container">