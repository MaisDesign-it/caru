<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage Etimue_2018
 * @since 1.0
 * @version 1.2
 */

?>
<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'etimue2018' ); ?>">
	<button class="menu-toggle" aria-controls="top-menu" aria-expanded="false">
		<?php
		echo etimue2018_get_svg( array( 'icon' => 'bars' ) );
		echo etimue2018_get_svg( array( 'icon' => 'close' ) );
		_e( 'Menu', 'etimue2018' );
		?>
	</button>

	<?php wp_nav_menu( [
		'theme_location' => 'top',
		'menu_id'        => 'top-menu',
	] ); ?>

	<?php if ( ( etimue2018_is_frontpage() || ( is_home() && is_front_page() ) ) && has_custom_header() ) : ?>
		<a href="#content" class="menu-scroll-down"><?php echo etimue2018_get_svg( array( 'icon' => 'arrow-right' ) ); ?><span class="screen-reader-text"><?php _e( 'Scroll down to content', 'etimue2018' ); ?></span></a>
	<?php endif; ?>
</nav><!-- #site-navigation -->
