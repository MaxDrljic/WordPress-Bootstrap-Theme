<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress_Bootstrap
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bootstrap2wordpress' ); ?></a>

	<!-- HEADER
  ============================================= -->
  <header class="site-header" role="banner">

    <!-- NAVBAR
    ============================================= -->
    <div class="navbar-wrapper">

      <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">

        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"><img src="assets/img/logo.png" alt="WordPress Bootstrap"></a>
          </div><!-- navbar-header -->

					<?php 
						wp_nav_menu( array(

							'theme_location' 	=> 'primary',
							'container' 		 	=> 'nav',
							'container_class' => 'navbar-collapse collapse',
							'menu_class'			=> 'nav navbar-nav navbar-right'

						) );
					?>

        </div><!-- container-->

      </div><!-- navbar -->

    </div><!-- navbar-wrapper-->

  </header>

	<div id="content" class="site-content">
