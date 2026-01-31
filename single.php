<?php get_header(); ?>

<div class="site-content">
    
    <div class="content-area">
        <main>
            <?php
            while ( have_posts() ) : the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="margin-bottom: 40px;">
                    
                    <h1 class="entry-title" style="margin-bottom: 20px;"><?php the_title(); ?></h1>
                    
                    <div class="entry-meta" style="color: #888; margin-bottom: 20px; font-size: 14px;">
                        Posted on <?php echo get_the_date(); ?> | 
                        Category: <?php the_category(', '); ?>
                    </div>

                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="post-thumbnail" style="margin-bottom: 30px;">
                            <?php the_post_thumbnail( 'large', array('style' => 'width: 100%; height: auto; border-radius: 5px;') ); ?>
                        </div>
                    <?php endif; ?>

                    <div class="entry-content" style="line-height: 1.8; font-size: 16px;">
                        <?php the_content(); ?>
                    </div>

                </article>

                <div class="comments-area" style="margin-top: 50px; border-top: 1px solid #eee; padding-top: 30px;">
                    <?php
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;
                    ?>
                </div>

            <?php endwhile; ?>
        </main>
    </div>

    <?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>