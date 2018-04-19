<?php if ( is_page_template( 'et2018.php' ) ) { get_template_part('basichome2018');}
	else {get_header(); ?>
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
				<?php // Show the selected frontpage content.
					if ( have_posts() ) :
						while ( have_posts() ) : the_post();
							get_template_part( 'template-parts/page/content', 'front-page' );
						endwhile;
					else : // I'm not sure it's possible to have no posts when this page is shown, but WTH.
						get_template_part( 'template-parts/post/content', 'none' );
					endif; ?>
				<?php
					// Get each of our panels and show the post data.
					if ( 0 !== etimue2018_panel_count() || is_customize_preview() ) : // If we have pages to show.
						/**
						 * Filter number of front page sections in Etimue 2018.
						 *
						 * @since Etimue 2018 1.0
						 *
						 * @param int $num_sections Number of front page sections.
						 */
						$num_sections = apply_filters( 'etimue2018_front_page_sections', 4 );
						global $etimue2018counter;
						// Create a setting and control for each of the sections available in the theme.
						for ( $i = 1; $i < ( 1 + $num_sections ); $i++ ) {
							$etimue2018counter = $i;
							etimue2018_front_page_section( null, $i );
						}
					endif; // The if ( 0 !== etimue2018_panel_count() ) ends here. ?>
			</main><!-- #main -->
		</div><!-- #primary -->
		<?php get_footer();};?>