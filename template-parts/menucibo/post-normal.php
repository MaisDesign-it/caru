<?php get_header();?>
	<div class="wrap">
		<div id="primary" class="content-area">
			<main id="main" class="site-main page-one-column" role="main">
				<?php
					/* Start the Loop */
					while ( have_posts() ) : the_post();?>
						<div class="row">
							<hr class="col-12 style14">
							<div class="ingredienti col-10 offset-1">
								<p class="text-center text-info">Quali ingredienti usiamo?</p>
							</div><!-- .ingredienti -->
							<div class="col-10 offset-1">
								<?php $posttags = get_the_tags();
									if ($posttags) {
										foreach($posttags as $tag) {
											$term_link = get_term_link($tag);
											echo '<a href="'.esc_url( $term_link ).'" title="'.$tag->description.'" data-toggle="tooltip" data-placement="top"><button class="btn-outline-info marginale" >'. $tag->name . '</button></a> ';
										};
									};?>
							</div><!-- col-10 offset-1 -->
						</div>
						<hr class="col-12 style14">
						<?php get_template_part( 'template-parts/post/content', get_post_format() );

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