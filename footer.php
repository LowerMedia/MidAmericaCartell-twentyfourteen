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

<footer id="colophon" role="contentinfo">
	<div class='site-copy'>
		&copy; <?php echo date("Y") ?> MidAmericaCartell
	</div>
	<div class="site-info">
		Website Designed and Created by <a href="<?php echo esc_url( __( 'http://kelseyhuebner.com/') ); ?>" title="<?php esc_attr_e( 'Tales of car culture from the midwest.' ); ?>">Kelsey Huebner</a> in Association with <a href="<?php echo esc_url( __( 'http://lowermedia.net/') ); ?>" title="<?php esc_attr_e( 'Tales of car culture from the midwest.' ); ?>">LowerMedia</a>
	</div><!-- .site-info -->
</footer><!-- #colophon -->

<?php wp_footer(); ?>
</body>
</html>