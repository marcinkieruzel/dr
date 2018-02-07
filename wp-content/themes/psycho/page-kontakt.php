<?php get_header(); ?>

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <!-- post -->
            <section id="kontakt" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
                <div class="container">
                    <?php the_content(); ?>
                </div>
            </section>
        <?php endwhile; ?>
            <!-- post navigation -->
        <?php else: ?>
            <!-- no posts found -->
        <?php endif; ?>


<?php get_footer(); ?>
