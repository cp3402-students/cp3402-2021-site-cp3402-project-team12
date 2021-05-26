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
		<div class="site-footer-main-div">
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
			<div class="footer-social-menu">
				<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
				<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous">
				</script>
				<ul>
					<li><a href="#"><i class="fab fa-facebook-f icon"></i></a></li>
					<li><a href="#"><i class="fab fa-twitter icon"></i></a></li>
					<li><a href="#"><i class="fab fa-linkedin-in icon"></i></a></li>
					<li><a href="#"><i class="fab fa-google-plus-g icon"></i></a></li>
				</ul>
			</div>
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
