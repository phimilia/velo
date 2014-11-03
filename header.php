<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <?php // Load our CSS ?>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  <?php wp_head(); ?>
</head>

<header class="goawayheader">
  <div class="container clearfix">
    <div class="logocontainer clearfix">
      <a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"> 
      <img class= "navlogo" src="<?php echo get_template_directory_uri() . '/img/VELO.png' ?>"  alt="VELO">
      </a>
    </div> <!-- /.logocontainer -->

    <?php wp_nav_menu( array(
      'container' => 'nav',
      'container_id' => 'nav',
      'menu' => 'header',
      'theme_location' => 'primary'
    )); ?>
  </div> <!-- /.container -->
</header><!--/.header-->

