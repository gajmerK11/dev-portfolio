<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="site-header" style="background:#111; color:#fff; padding:15px 0;">
        <div class="container" style="max-width:1200px; margin:0 auto; display:flex; justify-content:space-between; align-items:center; padding:0 20px;">

        <!-- Logo / Site Title -->
        <div class="logo">
            <a href="<?php echo esc_url(home_url('/')); ?>" style="text-decoration:none; color:#fff; font-size:24px; font-weight:bold;">
                <?php bloginfo('name'); ?>
            </a>
        </div>

        <!-- Navigation Menu -->
        <nav class="main-navigation">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary_menu',
                'container' => false,
                'menu_class' => 'nav-menu',
                'fallback_cb' => false 
            ));
            ?>
            </nav>
        </div>
        </header>

