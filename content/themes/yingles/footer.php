<?php
/**
 * The template for displaying the footer.
 *
 * @package boiler
 */
?>

	<footer id="globalFooter" class="site_footer">
		<div class="container">
			<div class="logo_area">
				<h4 class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h4>
				<div class="social_icons"></div><!-- end social_icons -->
			</div>
			
			<nav class="footer_nav" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'menu_class' => 'header_menu' ) ); // remember to assign a menu in the admin to remove the container div ?>
			</nav>
		</div>
	</footer>

<?php wp_footer(); ?>

</body>
</html>