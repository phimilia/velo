<?php get_header('front'); ?>

<div class="main">
  <div class="container">
    <div class="content-full-page clearfix" id="content">
    	<?php if(have_posts()) while(have_posts()): the_post(); ?>
    	<article>
    		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>	
    		<span class="image image-full"><?php the_post_thumbnail('full'); ?></span>
    		<?php the_content(); ?>
    	</article>
    	<?php endwhile; ?>
    </div> <!--/.content -->



  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>