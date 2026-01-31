<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    // বর্তমান পেজের আইডি নেওয়া
    $post_id = get_the_ID();
    
    // সেভ করা এসইও ডেটা আনা
    $custom_title = get_post_meta( $post_id, '_techmation_seo_title', true );
    $custom_desc  = get_post_meta( $post_id, '_techmation_seo_desc', true );
    ?>

    <title>
        <?php 
        if ( !empty($custom_title) ) {
            echo esc_html( $custom_title ); // যদি কাস্টম টাইটেল থাকে
        } else {
            bloginfo('name'); echo ' | '; wp_title(); // না থাকলে ডিফল্ট
        }
        ?>
    </title>

    <?php if ( !empty($custom_desc) ) : ?>
        <meta name="description" content="<?php echo esc_attr( $custom_desc ); ?>">
    <?php endif; ?>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <header class="site-header">
        
        <div class="logo-area">
            <?php
            if ( has_custom_logo() ) {
                the_custom_logo();
            } else {
                echo '<h1><a href="' . home_url() . '" style="color: white; text-decoration: none;">' . get_bloginfo( 'name' ) . '</a></h1>';
            }
            ?>
        </div>

        <button id="mobile-menu-btn">
            <i class="fa-solid fa-bars"></i>
        </button>

        <nav id="site-navigation" class="main-navigation">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'primary_menu',
                'container_class' => 'my-custom-menu', 
            ) );
            ?>
        </nav>
    </header>