<footer class="fullfooter">
  <div class="footercontainer">
      	<div class="socialicons">
      		<div class="facebookicon">
				<a href="#" target="new"><img src="<?php echo get_template_directory_uri() . '/img/facebook.png' ?>"  alt="facebook"></a>
    	  	</div> <!-- /.facebookicon -->

    	  	<div class="twittericon">
    			<a href="#" target="new"><img src="<?php echo get_template_directory_uri() . '/img/twitter.png' ?>"  alt="twitter">
    			</a>
    	  	</div> <!-- /.twittericon -->

    		<div class="instagramicon">
    			<a href="#" target="new"><img src="<?php echo get_template_directory_uri() . '/img/instagram.png' ?>"  alt="instagram"></a>
    		</div> <!-- /.instagramicon -->
      	</div> <!-- /.socialicons -->
      	<p class="customfooter">&copy; <?php echo date('Y'); ?> <a class="copyright" href="http://www.emiliadallman.com/" target="new">Emilia Dallman</a> and <a class="copyright" href="http://www.phrichards.ca/" target="new">Phil Richards </a></p>
  </div> <!-- /.footercontainer -->
</footer>

<script>
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));

</script>

<?php wp_footer(); ?>
</body>
</html>