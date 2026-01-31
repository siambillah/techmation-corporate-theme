<?php


// ৪. হোমপেজ কাস্টমাইজার সেটিংস
function techmation_customize_register( $wp_customize ) {

    // --- Hero Section ---
    $wp_customize->add_section( 'hero_section_settings', array(
        'title'    => 'Home: Hero Banner',
        'priority' => 30,
    ) );

    $wp_customize->add_setting( 'hero_title', array( 'default' => 'Welcome to Techmation Engineering', 'transport' => 'refresh' ) );
    $wp_customize->add_control( 'hero_title', array( 'label' => 'Main Heading', 'section' => 'hero_section_settings', 'type' => 'text' ) );

    $wp_customize->add_setting( 'hero_desc', array( 'default' => 'We provide the best Engineering & Digital Marketing solutions.', 'transport' => 'refresh' ) );
    $wp_customize->add_control( 'hero_desc', array( 'label' => 'Short Description', 'section' => 'hero_section_settings', 'type' => 'textarea' ) );

    $wp_customize->add_setting( 'hero_btn_text', array( 'default' => 'Our Services', 'transport' => 'refresh' ) );
    $wp_customize->add_control( 'hero_btn_text', array( 'label' => 'Button Label', 'section' => 'hero_section_settings', 'type' => 'text' ) );

    $wp_customize->add_setting( 'hero_btn_link', array( 'default' => '#', 'transport' => 'refresh' ) );
    $wp_customize->add_control( 'hero_btn_link', array( 'label' => 'Button Link', 'section' => 'hero_section_settings', 'type' => 'url' ) );

    // --- Services Section ---
    $wp_customize->add_section( 'service_section_settings', array(
        'title'    => 'Home: Services Area',
        'priority' => 35,
    ) );

    // Box 1
    $wp_customize->add_setting( 'service1_title', array( 'default' => 'Digital Marketing', 'transport' => 'refresh' ) );
    $wp_customize->add_control( 'service1_title', array( 'label' => 'Box 1 Title', 'section' => 'service_section_settings', 'type' => 'text' ) );
    $wp_customize->add_setting( 'service1_desc', array( 'default' => 'Expert SEO and Brand promotion.', 'transport' => 'refresh' ) );
    $wp_customize->add_control( 'service1_desc', array( 'label' => 'Box 1 Description', 'section' => 'service_section_settings', 'type' => 'textarea' ) );

    // Box 2
    $wp_customize->add_setting( 'service2_title', array( 'default' => 'Software Solution', 'transport' => 'refresh' ) );
    $wp_customize->add_control( 'service2_title', array( 'label' => 'Box 2 Title', 'section' => 'service_section_settings', 'type' => 'text' ) );
    $wp_customize->add_setting( 'service2_desc', array( 'default' => 'Custom software development.', 'transport' => 'refresh' ) );
    $wp_customize->add_control( 'service2_desc', array( 'label' => 'Box 2 Description', 'section' => 'service_section_settings', 'type' => 'textarea' ) );

    // Box 3
    $wp_customize->add_setting( 'service3_title', array( 'default' => 'Engineering', 'transport' => 'refresh' ) );
    $wp_customize->add_control( 'service3_title', array( 'label' => 'Box 3 Title', 'section' => 'service_section_settings', 'type' => 'text' ) );
    $wp_customize->add_setting( 'service3_desc', array( 'default' => 'Industrial solutions consultancy.', 'transport' => 'refresh' ) );
    $wp_customize->add_control( 'service3_desc', array( 'label' => 'Box 3 Description', 'section' => 'service_section_settings', 'type' => 'textarea' ) );
}
add_action( 'customize_register', 'techmation_customize_register' );
