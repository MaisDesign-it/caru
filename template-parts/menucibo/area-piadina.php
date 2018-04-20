<div id="piadina" class="piadina sezmenu">
	<?php $catquery = new WP_Query( 'category_name=piadine&&posts_per_page=-1&&nopaging=true'); $et_npb = 0;$id = 39;$category = get_category($id);$count = $category->category_count;?>
	<?php if ($catquery->have_posts() ) : while($catquery->have_posts()) : $catquery->the_post();?>
	<?php if (($et_npb === 0) || ($et_npb %2 == 0)){;?><div class="row"><?php };?>
		<div class="col-6" <?php if (($et_npb != 0) && ($et_npb %2 != 0)){echo'style="padding-left:25px"';}else{echo'style="border-right: 1px solid #5f656d; width: 1px; height: 100%;"';};?>>
			<div class="row">
			<div class="list__item list__item_ajax">
				<a href="<?php echo esc_url( add_query_arg( 'access_method', 'iframe', get_permalink() ) );?>" class="iframe" title="<?php the_title();?>">
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
