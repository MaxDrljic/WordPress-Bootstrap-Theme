<?php 
$video_featurette_title = get_field('video_featurette_title');
$video_featurette       = get_field('video_featurette');
?>

<!-- VIDEO FEATURETTE
============================================= -->
<section id="featurette">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
        <h2><?php echo $video_featurette_title ?></h2>
        <?php echo $video_featurette ?>
      </div><!-- end col -->
    </div><!-- row -->
  </div><!-- container -->
</section><!-- featurette -->