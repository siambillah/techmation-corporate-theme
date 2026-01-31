<?php
/*
Template Name: Contact Page
*/
get_header(); ?>

<div class="contact-page-wrapper" style="padding: 60px 20px; background: #f4f4f4;">
    <div class="container" style="max-width: 1100px; margin: 0 auto; display: flex; gap: 40px; flex-wrap: wrap;">

        <div class="contact-form-area" style="flex: 2; background: white; padding: 40px; border-radius: 8px; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
            <h2 style="margin-bottom: 20px; color: #333;">Send us a Message</h2>
            
            <?php
            // এখানে পেজের এডিটরে দেওয়া শর্টকোডটি লোড হবে
            while ( have_posts() ) : the_post();
                the_content();
            endwhile;
            ?>
        </div>

        <div class="contact-info-area" style="flex: 1; background: #2c3e50; color: white; padding: 40px; border-radius: 8px;">
            <h3 style="color: #ff9900; border-bottom: 2px solid #fff; padding-bottom: 10px; margin-bottom: 20px;">Contact Info</h3>
            
            <p><i class="fa-solid fa-location-dot"></i> <strong>Head Office:</strong><br>
            Tribute to Tejgaon, 60 Kazi Nazrul Islam Avenue,<br>
            Tejturi Bazar, Farmgate, Dhaka – 1215</p>

            <p><i class="fa-solid fa-phone"></i> <strong>Phone:</strong><br>
            +880 9643 23 4501<br>
            <span style="font-size: 14px; color: #ccc;">Support: +880 1738 769 134</span></p>

            <p><i class="fa-solid fa-envelope"></i> <strong>Email:</strong><br>
            info@techmationbd.com</p>
            
            <div style="margin-top: 30px;">
                <h4 style="color: #ff9900;">Opening Hours</h4>
                <p>Sat - Thu: 9:00 AM - 6:00 PM<br>Friday: Closed</p>
            </div>
        </div>

    </div>
</div>

<?php get_footer(); ?>