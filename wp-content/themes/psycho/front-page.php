<?php get_header(); ?>

<section id="home">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <!-- post -->
    <!-- <div class="banner" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">

    </div> -->
    <img class="img-responsive" src="<?php the_post_thumbnail_url(); ?>" alt="Karolina Tokarek">
<?php endwhile; ?>
    <!-- post navigation -->
<?php else: ?>
    <!-- no posts found -->
<?php endif; ?>
</section>

<?php get_footer(); ?>
