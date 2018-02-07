<?php get_header(); ?>
<section id="blog">
    <div class="container">


    <div class="row">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <!-- post -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <?php the_post_thumbnail('full', array('class' => 'img-responsive img-full')); ?>
            </div>
            <div class="col-lg-11 col-lg-offset-1 col-md-11 col-md-offset-1 col-sx-12 col-xs-12">
                <h3><?php the_title(); ?></h3>
                <p class="date">
                    <?php the_date(); ?>
                </p>
                <?php the_excerpt(); ?>
                <a class="more" href="<?php esc_url(the_permalink()); ?>">Więcej ></a>
                <div class="spans">
                <span>•</span><span>•</span><span>•</span></div>
            </div>
        <?php endwhile; ?>
            <!-- post navigation -->
        <?php else: ?>
            <!-- no posts found -->
        <?php endif; ?>

    </div>
    </div>

</section>
<?php get_footer(); ?>
