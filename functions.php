<?php
// Theme setup
function invoice_360_setup()
{
    // Add theme support for full-site editing features
    add_theme_support('block-templates');
    add_theme_support('editor-styles');
    add_theme_support('post-thumbnails');

    // Add editor styles
    add_editor_style('style.css');
}
add_action('after_setup_theme', 'invoice_360_setup');

// Enqueue theme assets
function invoice_360_assets()
{
    wp_enqueue_style('invoice-360-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'invoice_360_assets');

function enqueue_assets()
{
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css', [], '5.3.0-alpha3');
    wp_enqueue_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css', [], '1.0.0.0');
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js', [], '5.3.0-alpha3', true);
}
add_action('wp_enqueue_scripts', 'enqueue_assets');

function register_block_theme_menus()
{
    register_nav_menus(array(
        'header-menu' => __('Header Menu', 'invoice-360-vonome'),
        'footer-menu' => __('Footer Menu', 'invoice-360-vonome'),
    ));
}
add_action('init', 'register_block_theme_menus');
