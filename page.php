<?php get_header(); ?>

<div class="site-content">

    <div class="content-area">
        <main>
            <?php
            while ( have_posts() ) : the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    
                    <h1 class="entry-title" style="margin-bottom: 30px; border-bottom: 2px solid #eee; padding-bottom: 15px;">
                        <?php the_title(); ?>
                    </h1>

                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>

                </article>

            <?php endwhile; ?>
        </main>
    </div>

    <?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>