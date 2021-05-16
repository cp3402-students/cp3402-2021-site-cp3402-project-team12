<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package joemama
 */

?>

<footer id="colophon" class="site-footer">
	<div class="site-info">
		<?php
		printf( 'Townsville Jazz Club 2021 ©');
		?>
		<span class="sep"> | </span>
		<?php
		printf('Privacy Policy');
		?>
		<span class="sep"> | </span>
		<?php
		printf( 'Terms of Use');
		?>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
