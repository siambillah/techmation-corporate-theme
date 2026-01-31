<?php get_header(); ?>

<div class="site-content"> <div class="content-area">
        <main>
            <?php
            if ( have_posts() ) : 
                while ( have_posts() ) : the_post(); ?>
                    
                    <article style="margin-bottom: 30px; padding-bottom: 20px; border-bottom: 1px solid #eee;">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div class="post-thumbnail">
                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium' ); ?></a>
                            </div>
                        <?php endif; ?>

                        <h2><a href="<?php the_permalink(); ?>" style="text-decoration: none; color: #333;"><?php the_title(); ?></a></h2>
                        <p><?php the_excerpt(); ?></p>
                        <a href="<?php the_permalink(); ?>" style="color: blue; font-weight: bold;">Read More &rarr;</a>
                    </article>

                <?php endwhile; 
            else :
                echo '<p>No content found</p>';
            endif; 
            ?>
        </main>
    </div>

    <?php get_sidebar(); ?>

</div> <?php get_footer(); ?>