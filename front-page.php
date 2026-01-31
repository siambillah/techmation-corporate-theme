<?php get_header(); ?>

<div class="hero-section">
    <div class="hero-content">
        
        <h1><?php echo get_theme_mod( 'hero_title', 'Welcome to Techmation' ); ?></h1>
        
        <p><?php echo get_theme_mod( 'hero_desc', 'Best Engineering Solutions' ); ?></p>
        
        <a href="<?php echo get_theme_mod( 'hero_btn_link', '#' ); ?>" class="btn-primary">
            <?php echo get_theme_mod( 'hero_btn_text', 'Learn More' ); ?>
        </a>

    </div>
</div>

<div class="services-section">
    <div class="container">
        <h2 class="section-title">What We Do</h2>
        
        <div class="services-grid">
            
            <div class="service-box">
                <h3><?php echo get_theme_mod( 'service1_title', 'Digital Marketing' ); ?></h3>
                <p><?php echo get_theme_mod( 'service1_desc', 'Expert SEO and Brand promotion.' ); ?></p>
            </div>

            <div class="service-box">
                <h3><?php echo get_theme_mod( 'service2_title', 'Software Solution' ); ?></h3>
                <p><?php echo get_theme_mod( 'service2_desc', 'Custom software development.' ); ?></p>
            </div>

            <div class="service-box">
                <h3><?php echo get_theme_mod( 'service3_title', 'Engineering' ); ?></h3>
                <p><?php echo get_theme_mod( 'service3_desc', 'Industrial solutions.' ); ?></p>
            </div>

        </div>
    </div>
</div>

<div class="dynamic-content-section" style="padding: 60px 20px; background: white;">
    <div class="container">
        <?php
        // ওয়ার্ডপ্রেসের ডিফল্ট লুপ
        if ( have_posts() ) : 
            while ( have_posts() ) : the_post();
                
                // এই ফাংশনটি এডিটরের সব কন্টেন্ট আউটপুট দেয়
                the_content(); 

            endwhile; 
        endif; 
        ?>
    </div>
</div>

<?php get_footer(); ?>