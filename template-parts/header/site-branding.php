<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Etimue_2018
 * @since 1.0
 * @version 1.0
 */

?>
<?php if (wp_is_mobile()){;?>

<div class="site-branding">
		<div class="wrap row">
			<div class="col-6" id="etlogo"><?php the_custom_logo(); ?></div>

			<div class="col-6">
			<div class="site-branding-text">
				<?php if ( is_front_page() ) : ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php else : ?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php endif; ?>

				<?php
					$description = get_bloginfo( 'description', 'display' );

					if ( $description || is_customize_preview() ) :
						?>
						<p class="site-description"><?php echo $description; ?></p>
					<?php endif; ?>
			</div><!-- .site-branding-text -->

			<?php if ( ( etimue2018_is_frontpage() || ( is_home() && is_front_page() ) ) && ! has_nav_menu( 'top' ) ) : ?>
				<a href="#content" class="menu-scroll-down"><?php echo etimue2018_get_svg( array( 'icon' => 'arrow-right' ) ); ?><span class="screen-reader-text"><?php _e( 'Scroll down to content', 'etimue2018' ); ?></span></a>
			<?php endif; ?>
			</div><!-- .col-6 -->
		</div><!-- .wrap -->
	</div><!-- .site-branding -->

<?php }else{ ;?>
	<div class="site-branding">
		<div class="wrap">

			<?php the_custom_logo(); ?>

			<div class="site-branding-text">
				<?php if ( is_front_page() ) : ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php else : ?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php endif; ?>

				<?php
					$description = get_bloginfo( 'description', 'display' );

					if ( $description || is_customize_preview() ) :
						?>
						<p class="site-description"><?php echo $description; ?></p>
					<?php endif; ?>
			</div><!-- .site-branding-text -->

			<?php if ( ( etimue2018_is_frontpage() || ( is_home() && is_front_page() ) ) && ! has_nav_menu( 'top' ) ) : ?>
				<a href="#content" class="menu-scroll-down"><?php echo etimue2018_get_svg( array( 'icon' => 'arrow-right' ) ); ?><span class="screen-reader-text"><?php _e( 'Scroll down to content', 'etimue2018' ); ?></span></a>
			<?php endif; ?>

		</div><!-- .wrap -->
	</div><!-- .site-branding -->
<?php } ;?>
