<?php
/**
    Template Name: Home Page
 */

// Custom Fields
$prelaunch_price          = get_post_meta( 7, 'prelaunch_price', true ); 
$launch_price             = get_post_meta( 7, 'launch_price', true ); 
$final_price              = get_post_meta( 7, 'final_price', true );
$course_url               = get_post_meta( 7, 'course_url', true );
$button_text              = get_post_meta( 7, 'button_text', true );
$optin_text               = get_post_meta( 7, 'optin_text', true );
$optin_button_text        = get_post_meta( 7, 'optin_button_text', true );

// Advanced Custom Fields
$income_featured_image  = get_field('income_featured_image');
$income_section_title   = get_field('income_section_title');
$income_section_desc    = get_field('income_section_description');
$reason_1_title         = get_field('reason_1_title');
$reason_1_desc          = get_field('reason_1_description');
$reason_2_title         = get_field('reason_2_title');
$reason_2_desc          = get_field('reason_2_description');

$who_featured_image = get_field('who_featured_image');
$who_section_title = get_field('who_section_title');
$who_section_body = get_field('who_section_body');

$features_section_image = get_field('features_section_image');
$features_section_title = get_field('features_section_title');
$features_section_body = get_field('features_section_body');


get_header(); ?>

<!-- HERO
  ============================================= -->
  <section id="hero" data-type="background" data-speed="10">
    <article>
      <div class="container clearfix">
        <div class="row">

          <div class="col-sm-5">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo-badge.png" alt="WordPress Bootstrap" class="logo">
          </div><!-- col -->

          <div class="col-sm-7 hero-text">
            <h1><?php bloginfo('name'); ?></h1>
            <p class="lead"><?php bloginfo('description'); ?></p>

            <div id="price-timeline">
              <div class="price active">
                <h4>Pre-<br>Launch <br>Price <small>Ends soon!</small></small></h4>

                <span><?php echo $prelaunch_price; ?></span>
              </div><!-- price -->
              <div class="price">
                <h4>Launch Price <small>Coming soon!</small></small></h4>

                <span><?php echo $launch_price; ?></span>
              </div><!-- price -->
              <div class="price">
                <h4>Final Price <small>Coming soon!</small></small></h4>

                <span><?php echo $final_price; ?></span>
              </div><!-- price -->
            </div><!-- price-timeline-->

            <p><a class="btn btn-lg btn-danger" href="<?php echo $course_url; ?>" role="button"><?php echo $button_text; ?></a></p>

          </div><!-- col -->

        </div><!-- row -->
      </div><!-- container -->
    </article>
  </section><!-- hero -->

  <!-- OPT IN SECTION
  ============================================= -->
  <section id="optin">
    <div class="container">
      <div class="row">

        <div class="col-sm-8">
          <p class="lead"><?php echo $optin_text ?></p>
        </div><!-- col -->

        <div class="col-sm-4">
          <button class="btn btn-lg btn-success btn-block" data-toggle="modal" data-target="#myModal">
            <?php echo $optin_button_text ?>
          </button>
        </div><!-- col -->

      </div><!-- row -->
    </div><!-- container -->
  </section><!-- optin -->

  <!-- BOOST YOUR INCOME
  ============================================= -->
  <section id="boost-income">
    <div class="container">

      <div class="section-header">

        <!-- If user uploaded an image -->
        <?php if( !empty($income_featured_image) ) : ?>

          <img src="<?php echo $income_featured_image['url']; ?>" alt="<?php echo $income_featured_image['alt']; ?>">

        <?php endif; ?>
        
        <h2><?php echo $income_section_title ?></h2>
      </div><!-- section-header -->

      <p class="lead"><?php echo $income_section_desc ?></p>

      <div class="row">
        <div class="col-sm-6">
          <h3><?php echo $reason_1_title ?></h3>
          <p><?php echo $reason_1_desc ?></p>
        </div><!-- col -->
        <div class="col-sm-6">
        <h3><?php echo $reason_2_title ?></h3>
          <p><?php echo $reason_2_desc ?></p>
        </div><!-- col -->
      </div><!-- row -->

    </div><!-- container -->
  </section><!-- boost-income -->

  <!-- WHO BENEFITS
  ============================================= -->
  <section id="who-benefits">
    <div class="container">

      <div class="section-header">
        <!-- If user uploaded an image -->
        <?php if( !empty($who_featured_image) ) : ?>

          <img src="<?php echo $who_featured_image['url']; ?>" alt="<?php echo $who_featured_image['alt']; ?>">

        <?php endif; ?>
        <h2><?php echo $who_section_title ?></h2>
      </div><!-- section header -->

      <div class="row">
        <div class="col-sm-8 col-sm-offset-2">

          <?php echo $who_section_body ?>

        </div><!-- col -->
      </div><!-- row -->

    </div>
  </section><!-- who-benefits -->

  <!-- COURSE FEATURES
  ============================================= -->
  <section id="course-features">
    <div class="container">

      <div class="section-header">
        
        <!-- If user uploaded an image -->
        <?php if( !empty($features_section_image) ) : ?>

          <img src="<?php echo $features_section_image['url']; ?>" alt="<?php echo $features_section_image['alt']; ?>">

        <?php endif; ?>

        <h2><?php echo $features_section_title ?></h2>

        <!-- If user added body text -->
        <?php if( !empty($features_section_body) ) : ?>

          <p class="lead"><?php echo $features_section_body ?></p>

        <?php endif; ?>

      </div><!-- section-header -->

      <div class="row">

        <?php $loop = new WP_Query( array( 'post_type' => 'course_feature', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

        <?php while( $loop->have_posts() ) : $loop->the_post(); ?>

          <div class="col-sm-2">
            <i class="<?php the_field('course_feature_icon'); ?>"></i>
            <h4><?php the_title(); ?></h4>
          </div><!-- end col -->

        <?php endwhile; ?>

      </div><!-- row -->

    </div><!-- container -->
  </section><!-- course-features -->

  <!-- PROJECT FEATURES
  ============================================= -->
  <section id="project-features">
    <div class="container">

      <h2>Final Project Features</h2>
      <p class="lead">Throughout this entire course, you work towards building an incredible beautiful website. Want to
        see the website <strong>you</strong> are going to build <em>You're looking at it!</em> The website you're using
        right now is the website you will have built entirely by yourself, by the end of this course.</p>

      <div class="row">
        <div class="col-sm-4">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-design.png" alt="Design">
          <h3>Sexy &amp; Modern Design</h3>
          <p>You get to work with a modern, professional quality design &amp; layout.</p>
        </div><!-- end col -->
        <div class="col-sm-4">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-code.png" alt="Code">
          <h3>Quality HTML5 &amp; CSS3</h3>
          <p>You'll learn how hand-craft a stunning website with valid, semantic and beautiful HTML5 &amp; CSS3.</p>
        </div><!-- end col -->
        <div class="col-sm-4">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-cms.png" alt="CMS">
          <h3>Easy-to-use CMS</h3>
          <p>Allow your clients to easily update their websites by converting your static websites to dynamic websites,
            using WordPress.</p>
        </div><!-- end col -->
      </div><!-- row -->

    </div><!-- container -->
  </section><!-- project-features -->

  <!-- VIDEO FEATURETTE
  ============================================= -->
  <section id="featurette">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
          <h2>Watch the Freelance Introduction</h2>
          <iframe width="100%" height="415" src="https://www.youtube.com/embed/g2CEmewuugo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
        </div><!-- end col -->
      </div><!-- row -->
    </div><!-- container -->
  </section><!-- featurette -->

  <!-- INSTRUCTOR
  ============================================= -->
  <section id="instructor">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-6">
          <div class="row">
            <div class="col-lg-8">
              <h2>Your Instructor <small>John Doe</small></h2>
            </div><!-- end col -->
            <div class="col-lg-4">
              <a href="https://twitter.com" target="_blank" class="badge social twitter"><i class="fab fa-twitter"></i></a>
              <a href="https://facebook.com" target="_blank" class="badge social facebook"><i class="fab fa-facebook-f"></i></a>
              <a href="https://plus.google.com" target="_blank" class="badge social gplus"><i class="fab fa-google-plus-g"></i></a>
            </div><!-- end col-->
          </div><!-- row -->

          <p class="lead">A highly skilled professional, John Doe is a passionate and experienced web designer,
            developer, blogger and digital entrepreneur.</p>

          <p>Hailing from North Of The Wall (Yellowknife, Canada), John made the trek to the Wet Coast (Vancouver,
            Canada) to educate and equip himself with the necessary skills to become a spearhead in his trade of
            solving problems on the web, crafting design solutions, and speaking in code.</p>

          <p>John's determination and love for what he does has landed him in some pretty interesting places with some
            neat people. He's had the privilege of working with, and providing solutions for, numerous businesses, big
            &amp; small, across the Americas.</p>

          <p>John builds custom websites, and provides design solutions for a wide-array of clientele at his company,
            Doe Studios. He regularly blogs about passive income, living your life to the fullest, and provides premium
            quality web design tutorials and courses for tens of thousands of amazing people desiring to master their
            craft.</p>

          <hr>

          <h3>The Numbers <small>They Don't Lie</small></h3>

          <div class="row">
            <div class="col-xs-4">
              <div class="num">
                <div class="num-content">
                  61,000+ <span>students</span>
                </div><!-- num-content -->
              </div><!-- num -->
            </div><!-- end col -->

            <div class="col-xs-4">
              <div class="num">
                <div class="num-content">
                  550 <span>reviews</span>
                </div><!-- num-content -->
              </div><!-- num -->
            </div><!-- end col -->

            <div class="col-xs-4">
              <div class="num">
                <div class="num-content">
                  12 <span>courses</span>
                </div><!-- num-content -->
              </div><!-- num -->
            </div><!-- end col -->
          </div><!-- row -->

        </div><!-- end col -->
      </div><!-- row -->
    </div><!-- container -->
  </section><!-- instructor -->

  <!-- TESTIMONIALS
  ============================================= -->
  <section id="kudos">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-sm-offset-2">

          <h2>What People Are Saying About John</h2>

          <!-- TESTIMONIAL -->
          <div class="row testimonial">
            <div class="col-sm-4">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/aj.png" alt="Illustration of a man with a beard">
            </div><!-- end col -->
            <div class="col-sm-8">
              <blockquote>
                These videos are well created, concise, fast-paced, easy to follow, and just funny enough to keep you
                chuckling as you're slamming out lines of code. I've taken 3 courses from this instructor. Whenever I
                have questions he is right there with a simple solution or a helpful suggestion to keep me going
                forward with the course work.
                <cite>&mdash; Brennan, graduate of all John's courses</cite>
              </blockquote>
            </div><!-- end col -->
          </div><!-- row -->

          <!-- TESTIMONIAL -->
          <div class="row testimonial">
            <div class="col-sm-4">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/ben.png" alt="Illustration of a man with a moustache">
            </div><!-- end col -->
            <div class="col-sm-8">
              <blockquote>
                I found John to be a great teacher, and a very inspiring person. It's clear he is very passionate about
                helping designers learn to code, and I look forward to more courses from him!
                <cite>&mdash; Ben, graduate of Build a Website from Scratch with HTML &amp; CSS</cite>
              </blockquote>
            </div><!-- end col -->
          </div><!-- row -->

          <!-- TESTIMONIAL -->
          <div class="row testimonial">
            <div class="col-sm-4">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/aj.png" alt="Illustration of a man with a beard">
            </div><!-- end col -->
            <div class="col-sm-8">
              <blockquote>
                John iz amazing and I honestly think he's the best tutor of all the courses I have taken on Udemy. Will
                definitely be following him in the future. Thanks Brad!
                <cite>&mdash; AJ, graduate of Code a Responsive Website with Bootstrap 3</cite>
              </blockquote>
            </div><!-- end col -->
          </div><!-- row -->

          <!-- TESTIMONIAL -->
          <div class="row testimonial">
            <div class="col-sm-4">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/ernest.png" alt="Illustration of a man with a goatee">
            </div><!-- end col -->
            <div class="col-sm-8">
              <blockquote>
                John is an excellent instructor. His content is super high quality, and you can see the love and care
                put into every section. The tutorials are the perfect length, and you feel like your doing something
                right out the gate! I really can't believe this is free. I highly recommend taking advantage of this
                course.
                <cite>&mdash; Ernest, graduate of Code Dynamic Websites with PHP</cite>
              </blockquote>
            </div><!-- end col -->
          </div><!-- row -->

        </div><!-- end col -->
      </div><!-- row -->
    </div><!-- container -->
  </section><!-- kudos -->


<?php get_footer();
