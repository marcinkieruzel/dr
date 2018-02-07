<?php get_header(); ?>
<section id="zakres">
    <div class="container">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <!-- post -->
            <div class="contents">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
                        <?php the_content(); ?>
                    </div>

                </div>

            </div>
                <?php $zakres = get_field('zakres');
                if($zakres) {
                    $spans = '<div class="spans">
                    <span>•</span><span>•</span><span>•</span></div>';
                    $out = '';
                    foreach ($zakres as $z) {
                        # code...
                        $out .= '<div class="row pads">';
                        $out .= '<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">';
                            $out .= '<figure>';

                                $out .= '<img class="img-rounded img-responsive" src="' . $z['image']['url']. '" alt="' . $z['image']['alt']. '" />';

                            $out .= '</figure>';
                        $out .= '</div>';
                        $out .= '<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">';
                            $out .= '<h2>' . $z['title'] . $spans . '</h2>';
                            $out .= $z['text'];
                        $out .= '</div>';
                        $out .= '</div>';
                    }

                    echo $out;
                }
                ?>
                <div class="row">
                    <div id="cennik" class="col-lg-9 col-lg-offset-3 col-md-9 col-md-offset-3 col-sm-12 col-xs-12">
                        <?php the_field('cennik'); ?>

                    </div>

                </div>
        <?php endwhile; ?>
            <!-- post navigation -->
        <?php else: ?>
            <!-- no posts found -->
        <?php endif; ?>
    </div>
</section>
<?php get_footer(); ?>
