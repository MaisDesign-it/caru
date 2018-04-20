<div id="piadina" class="piadina sezmenu">
	<?php
		// Get the ID of a given category
		$category_id = get_cat_ID( 'piadine' );

		// Get the URL of this category
		$category_link = get_category_link( $category_id );
	?>

	<!-- Print a link to this category -->
	<h3 class="text-info text-center"><a style="color:#666" href="<?php echo esc_url( $category_link ); ?>" title="Piadine artigianali in provincia di Catania">PIADINE</a></h3>
	<?php
		/*
		* TODO dare stile al titolo
		*/;?>
	<?php $catquery = new WP_Query( 'category_name=piadine&&posts_per_page=-1&&nopaging=true'); $et_npb = 0;$id = 39;$category = get_category($id);$count = $category->category_count;?>
	<?php if ($catquery->have_posts() ) : while($catquery->have_posts()) : $catquery->the_post();?>
	<?php if (($et_npb === 0) || ($et_npb %2 == 0)){;?><div class="row"><?php };?>
		<div class="col-6" <?php if (($et_npb != 0) && ($et_npb %2 != 0)){echo'style="padding-left:25px"';}else{echo'style="border-width: 3px 3px 3px 0;border-style: solid;-webkit-border-image:-webkit-gradient(linear, 0 0, 100% 0, from(black), to(rgba(0, 0, 0, 0))) 1 100%;-webkit-border-image:-webkit-linear-gradient(left, black, rgba(0, 0, 0, 0)) 1 100%;-moz-border-image:-moz-linear-gradient(left, black, rgba(0, 0, 0, 0)) 1 100%;-o-border-image:-o-linear-gradient(left, black, rgba(0, 0, 0, 0)) 1 100%;border-image:linear-gradient(to left, black, rgba(0, 0, 0, 0)) 1 100%;"';};?>>
			<div class="row">
			<div class="list__item list__item_ajax">
				<a style="text-transform: uppercase;color:#555;" href="<?php echo esc_url( add_query_arg( 'access_method', 'iframe', get_permalink() ) );?>" class="iframe" title="<?php the_title();?>">
				<?php the_title();?>
				</a>
			</div><!-- list__item list__item_ajax -->
			</div><!-- .row -->
			<div class="row">
				<?php $posttags = get_the_tags();
					if ($posttags) {
						foreach($posttags as $tag) {
							$term_link = get_term_link($tag);
							echo '<a href="'.esc_url( $term_link ).'" title="'.$tag->description.'" data-toggle="tooltip" data-placement="top"><button class="btn-outline-info marginale" >'. $tag->name . '</button></a> ';
						};
					};?>
			</div>
		</div>
		<?php ++$et_npb; if ( ($et_npb %2 == 0) ||  ($et_npb === $count)){echo '</div><hr class="style14">';};
			endwhile;endif;?>
	</div><!-- .sezmenu -->
