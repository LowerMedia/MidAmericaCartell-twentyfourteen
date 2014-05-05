<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
</div><!-- #page -->

<footer id="colophon" role="contentinfo" class="colophon">
	<div class='site-copy green'>
		<p>
			&copy; <?php echo date("Y") ?> MidAmericaCartell
		</p>
	</div>
	<div class="site-info white">
		<p>
			Website Designed and Created by <a class="white" href="<?php echo esc_url( __( 'http://kelseyhuebner.com/') ); ?>" title="<?php esc_attr_e( 'Tales of car culture from the midwest.' ); ?>">Kelsey Huebner</a> in Association with <a class="white" href="<?php echo esc_url( __( 'http://lowermedia.net/') ); ?>" title="<?php esc_attr_e( 'Tales of car culture from the midwest.' ); ?>">LowerMedia</a>
		</p>
	</div><!-- .site-info -->
</footer><!-- #colophon -->

<?php wp_footer(); ?>
</body>
</html>