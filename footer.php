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

	</div><!-- #content -->

	<?php get_sidebar( 'footer' ); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-footer__wrap">
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
			<div class="site-info">
				<div><a href="<?php echo esc_url( __( 'https://wordpress.org/', 'team12theme' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'Team-git 12' ), 'WordPress' ); ?></a></div>
				<div><?php printf( esc_html__( 'Team-12 theme' ), 'team12theme', '<a href="https://github.com/BeauWilliams97/cp3402-2021-site-cp3402-project-team12.git" rel="designer">CP3402 team12</a>' ); ?></div>
			</div><!-- .site-info -->
		</div><!-- .site-footer__wrap -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
