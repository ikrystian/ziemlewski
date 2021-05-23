<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package klinika
 */

?>

	<footer id="colophon" class="section site-footer">
		<div class="site-footer__brand">
			<?php the_custom_logo(); ?>
		</div>
		<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
 
 <?php dynamic_sidebar( 'sidebar-2' ); ?>

<?php endif; ?>
		<div class="site-info">
			<span class="sep"> | </span>
				Copyright © <?php echo date('Y');?> Kliniki Ziemlewski.<br> 
				Wszelkie prawa zastrzeżone
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
