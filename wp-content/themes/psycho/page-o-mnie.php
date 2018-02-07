<?php get_header(); ?>
<section id="pageAbout">
    <div class="container">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <!-- post -->
          <?php
          $about = get_field("about");
          if($about) {
              $out = '';
              $cntr = 0;
              foreach ($about as $a) {
                  $out .= '<div class="row row-eq-height">';
                  # code...
                  $cntr ++;
                  $spans = '<div class="spans">
                  <span>•</span><span>•</span><span>•</span></div>';
                  if($cntr % 2 != 0) {

                  $out .= '<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">';
                    $out .= '<figure>';
                        $out .= '<img class="thumbImg" src="' . esc_url($a['foto']['url']). '" alt="' . $a['foto']['alt']. '" />';
                    $out .= '</figure>';
                  $out .= '</div>';
                  $out .= '<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">';
                  $out .= '<div class="arts"><div class="artsInner">' . $a['text'] . $spans . '</div></div>';
                  $out .= '</div>';
              } else {
                  $out .= '<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">';
                  $out .= '<div class="arts"><div class="artsInner">' . $a['text'] . $spans .'</div></div>';
                  $out .= '</div>';
                  $out .= '<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">';
                    $out .= '<figure>';
                        $out .= '<img class="thumbImg" src="' . esc_url($a['foto']['url']). '" alt="' . $a['foto']['alt']. '" />';
                    $out .= '</figure>';
                  $out .= '</div>';
              }
              $out .= '</div>';
              }
              $cntr = 0;
              echo $out;
          } ?>
    <?php endwhile; ?>
      <!-- post navigation -->
    <?php else: ?>
      <!-- no posts found -->
    <?php endif; ?>
    </div>
</section>
<?php get_footer(); ?>
