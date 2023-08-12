<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <link rel="preload" href="<?php echo get_template_directory_uri() ?>/fonts/NeoSansPro-Regular.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="<?php echo get_template_directory_uri() ?>/fonts/NeoSansPro-Medium.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="<?php echo get_template_directory_uri() ?>/fonts/NeoSansPro-Bold.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="<?php echo get_template_directory_uri() ?>/fonts/NeoSansPro-Ultra.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
</head>
<body style="background-image: url(<?php echo get_template_directory_uri() ?>/img/background.jpg)">
    <header>
        <div class="header-block">
            <div class="header-logo">
                <a href="/">
                    <img class="header-logo-img" src="http://casinosbewertung-de.local/wp-content/uploads/2021/01/logo-casinosbewertung.png">
                </a>
            </div>
            <div class="header-menu">
                <?php wp_nav_menu(); ?>
            </div>
            <div class="menu-mobile-button">
                <div class="mobile-button-ikon">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
        <div class="modal">
            <div class="mobile-menu">
                <div class="mobile-menu-content">
                    <div class="mobile-menu-logo">
                    <a href="/" class="menu-content-logo">
                        <img class="header-logo-img" src="http://casinosbewertung-de.local/wp-content/uploads/2021/01/logo-casinosbewertung.png">
                    </a>
                    </div>
                    <div class="menu-content-items">
                        <?php wp_nav_menu(); ?>
                    </div>
                </div>
            </div>
        </div>
    </header>
