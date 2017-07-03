<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fauverism
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'fauverism' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'fauverism' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'fauverism' ), 'fauverism', '<a href="https://automattic.com/" rel="designer">Robert Fauver</a>' ); ?>
			<span class="sep"> | </span>
			<a href="mailto:robertfauver@gmail.com">robertfauver@gmail.com</a>
    </div><!-- .site-info -->
    <!-- TODO: hardcode top nav -->
	</footer><!-- #colophon -->
</div><!-- #page -->
<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
<script src="http://robertfauver.com/wp-content/themes/fauverism/js/fauverism.js"></script>

<?php wp_footer(); ?>

</body>
</html>
