<?php

function lightning_sonica_theme_setup() {
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'lightning_sonica_theme_setup');

function lightning_sonica_enqueue_assets() {
    wp_enqueue_style(
        'lightning-sonica-style',
        get_stylesheet_uri(),
        [],
        '1.0'
    );
}
add_action('wp_enqueue_scripts', 'lightning_sonica_enqueue_assets');

function lightning_sonica_menus() {
    register_nav_menus([
        'main' => 'Main Navigation'
    ]);
}
add_action('init', 'lightning_sonica_menus');


function enqueue_custom_bundle() {
    wp_enqueue_script(
        'custom-bundle',
        get_template_directory_uri() . '/dist/bundle.js',
        array(),
        '1.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'enqueue_custom_bundle');
