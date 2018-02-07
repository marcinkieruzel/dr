<?php get_header(); ?>
<section id="blog">
    <div class="row">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <!-- post -->
            <div class="col-lg-12 col-xs-12 col-sx-12 col-xs-12">
                <?php the_post_thumbnail('full', array('class' => 'img-responsive img-full')); ?>
                <h3><?php the_title(); ?></h3>
                <?php the_date(); ?>
                <?php the_content(); ?>

            </div>
        <?php endwhile; ?>
            <!-- post navigation -->
        <?php else: ?>
            <!-- no posts found -->
        <?php endif; ?>

    </div>

</section>
<?php get_footer(); ?>
