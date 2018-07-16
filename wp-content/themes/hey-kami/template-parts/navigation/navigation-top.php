<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage hey-kami
 * @since 1.0
 * @version 1.2
 */

?>
<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'hey-kami' ); ?>">
	<button class="menu-toggle" aria-controls="top-menu" aria-expanded="false">
		<?php
		echo hey_kami_get_svg( array( 'icon' => 'bars' ) );
		echo hey_kami_get_svg( array( 'icon' => 'close' ) );
		_e( 'Menu', 'hey-kami' );
		?>
	</button>

	<?php wp_nav_menu( array(
		'theme_location' => 'top',
		'menu_id'        => 'top-menu',
	) ); ?>

</nav><!-- #site-navigation -->
