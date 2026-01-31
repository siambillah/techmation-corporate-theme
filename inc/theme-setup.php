<?php

// ১. স্টাইল এবং স্ক্রিপ্ট লোড করার ফাংশন
function techmation_theme_scripts() {
    // ১. Google Fonts
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Poppins:wght@500;700&display=swap', array(), null );

    // ২. FontAwesome (আইকনের জন্য)
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css', array(), null );

    // ৩. মেইন স্টাইল শিট (একবারই লোড হবে)
    wp_enqueue_style( 'main-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'techmation_theme_scripts' );


// ২. থিম সেটআপ (মেনু, লোগো, টাইটেল)
function techmation_theme_setup() {
    register_nav_menus( array(
        'primary_menu' => 'Main Header Menu',
        'footer_menu'  => 'Footer Menu',
    ) );

    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ) );
}
add_action( 'after_setup_theme', 'techmation_theme_setup' );