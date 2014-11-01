<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<div class="main">
  <div class="container">
    <div class="content clearfix">
    	<?php if(have_posts()) while(have_posts()): the_post(); ?>
    	<article>
    		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>	
    		<span class="image image-full"><?php the_post_thumbnail('full'); ?></span>
    		<?php the_content(); ?>
    	</article>
    	<?php endwhile; ?>
    </div> <!--/.content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>