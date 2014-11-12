<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <?php wp_head(); ?>
  <?php // Load our CSS ?>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
</head>

<header class="homeheader">
  <div class="container clearfix">
    <?php echo do_shortcode('[videojs mp4="wp-content/themes/velo/img/bikevid.mp4" preload="auto" autoplay="true" loop="true" controls="false" muted="true" width="1400" height="500" id="header-video"]'); ?>
    <div class="logocontainer clearfix">
      <a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"> 
      <img class="navlogo" src="<?php echo get_template_directory_uri() . '/img/VELO.png' ?>"  alt="VELO">
      </a>
    </div> <!-- /.logocontainer -->

    <div class="biglogocontainer clearfix">
      <img class="biglogo" src="<?php echo get_template_directory_uri() . '/img/VELO-white.png' ?>"  alt="VELO">
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

