<?php

// Add Theme Support
add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_theme_support('post-formats', [
    'aside',
    'gallery',
    'link',
    'image',
    'quote',
    'status',
    'video',
    'audio',
    'chat',
]);
add_theme_support('html5');
add_theme_support('automatic-feed-links');
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('custom-logo');
add_theme_support('customize-selective-refresh-widgets');
add_theme_support('starter-content');

// Load style.css
function vittoriaferrarelli_enqueue_styles() {
    wp_enqueue_style('style-css', get_stylesheet_directory_uri() . '/style.css', [], time(), 'all');
    wp_enqueue_style('main-css', get_stylesheet_directory_uri() . '/assets/css/main.css', ['style-css'], time(), 'all');

}
add_action('wp_enqueue_scripts', 'vittoriaferrarelli_enqueue_styles');

// Register Menu Locations
register_nav_menus([
    'main-menu' => esc_html__('Main Menu', 'vittoriaferrarelli'),
]);

/**
 * Add built-in function create_post_type() 
 * adding the different custom post type
 */
function create_post_type() {

    register_post_type('Quadri', [
        'labels' => [
            'name' => __('Quadri'),
            'singular_name' => __('Quadro')
        ],
        'public' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'quadri'],
        'show_in_rest' => true,
        'supports' => ['title', 'editor', 'thumbnail']
    ]);

}

add_action('init', 'create_post_type');

// Setup Widget Area
function vittoriaferrarelli_widgets_init() {
    register_sidebar([
        'name' => esc_html__('Main Sidebar', 'vittoriaferrarelli'),
        'id' => 'main-sidebar',
        'description' => esc_html__('Add widgets for main sidebar here', 'vittoriaferrarelli'),
        'before_widget' => '<section class="widget">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget__title">',
        'after_title' => '</h2>',
    ]);
}

add_action('widgets_init', 'vittoriaferrarelli_widgets_init');

?>