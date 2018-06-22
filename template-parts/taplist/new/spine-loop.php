<hr>
<?php for ( $mul = 1; $mul <= 10; ++ $mul ) {
	; ?>
	<div class="col tap<?php echo $mul; ?>">
	<div class="row stap">
		<?php $catquery = new WP_Query( 'category_name=spina-' . $mul . '&posts_per_page=1' ); ?>
		<?php if ( $catquery->have_posts() ) : while ( $catquery->have_posts() ) :
			$catquery->the_post(); ?>
			<?php if ( $mul != 10 ) {
			echo '<p><strong>0' . $mul;
		} else {
			echo '<p><strong>' . $mul;
		}; ?>)</strong></p>
			<?php get_template_part( 'template-parts/taplist/new/via', 'piena' );
		endwhile;
			wp_reset_postdata();
		else: ?>
			<?php if ( $mul != 10 ) {
				echo '<strong>0' . $mul;
			} else {
				echo '<strong>'.$mul;
			}; ?>)</strong>

			<?php get_template_part( 'template-parts/taplist/new/via', 'vuota' ); endif;
			wp_reset_postdata(); ?>
	</div><!-- stap -->
	</div><!-- col spina -->
	<hr>
<?php }/*Fine FOR */; ?>