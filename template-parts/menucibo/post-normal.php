<?php get_header();?>
	<div class="wrap">
		<div id="primary" class="content-area">
			<main id="main" class="site-main page-one-column" role="main">
				<?php
					/* Start the Loop */
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/post/content', get_post_format() );

						the_post_navigation( array(
							'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'etimue2018' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Previous', 'etimue2018' ) . '</span> <span class="nav-title"><span class="nav-title-icon-wrapper">' . etimue2018_get_svg( array( 'icon' => 'arrow-left' ) ) . '</span>%title</span>',
							'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'etimue2018' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Next', 'etimue2018' ) . '</span> <span class="nav-title">%title<span class="nav-title-icon-wrapper">' . etimue2018_get_svg( array( 'icon' => 'arrow-right' ) ) . '</span></span>',
						) );

					endwhile; // End of the loop.
				?>

			</main><!-- #main -->
		</div><!-- #primary -->
		<?php get_sidebar(); ?>
	</div><!-- .wrap -->

<?php get_footer();?>