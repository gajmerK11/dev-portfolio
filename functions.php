<?php
// ========================
// THEME SETUP
// ========================
function dev_portfolio_theme_setup() {
    // Enable featured images and dynamic title tag
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');

    // Register navigation menu locations (each entry represents menu locations)
    register_nav_menus(array(
        // __('text', 'text-domain') means “translate this text if a translation exists.”
        'primary_menu' => __('Primary Menu', 'dev-portfolio'),

    ));
}
add_action('after_setup_theme', 'dev_portfolio_theme_setup');

// =====================
// ENQUEUE STYLES & SCRIPTS
// =====================
function dev_portfolio_enqueue_scripts() {
    // Load main stylesheet
    // This line tells WordPress to include this tag automatically in your site’s <head> (<link rel="stylesheet" href="https://your-site.com/wp-content/themes/my-portfolio/style.css">)
    wp_enqueue_style('dev-portfolio-style', get_stylesheet_uri());

    // Optionally load a custom script file later
    // wp_enqueue_script('dev-portfolio-script', get_template_directory_uri() . '/js/main.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'dev_portfolio_enqueue_scripts');