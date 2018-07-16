<?php
/**
 * Displays footer site info
 *
 * @package WordPress
 * @subpackage hey-kami
 * @since 1.0
 * @version 1.0
 */

?>
<div class="site-info">
	<small><?php echo get_copylight_credit() ?></small><br><!-- Theme hey-kami by GP Themes https://gpthemes.com -->
	<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'hey-kami' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'hey-kami' ), 'WordPress' ); ?></a>
</div><!-- .site-info -->
