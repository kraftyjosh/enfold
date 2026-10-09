<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
    </div>
    
	<footer id="colophon" role="contentinfo">
		<div class="site-info">
			<div class="social"><a href="https://www.facebook.com/pages/Eagle-Construction-Building-Inc/481958431871881" class="fb" target="_blank">&nbsp;</a></div>

        	<?php dynamic_sidebar( 'footer-left' ); ?>
            
            <?php dynamic_sidebar( 'footer-menu' ); ?>
            
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-45027137-1', 'eagleconstructionandbuilding.com');
  ga('send', 'pageview');

</script>
</body>
</html>