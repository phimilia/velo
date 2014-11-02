<?php

/*
	Template Name: Full Page, No Sidebar
*/

get_header();  ?>
<div class="main">
  <div class="container">
  	<div class="content">
	  <p>this is page full</p>
	    <?php // Start the loop ?>
	    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	      <h2 class="blogtitle"><?php the_title(); ?></h2>
	      <?php the_content(); ?>

	    <?php endwhile; // end the loop?>
	</div> <!-- /.content -->
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>