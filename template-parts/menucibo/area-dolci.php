<?php
	// Get the ID of a given category
	$category_id = get_cat_ID( 'Dolci' );
	// Get the URL of this category
	$category_link = get_category_link( $category_id );
	$category = get_category($category_id);
	/*echo '<ul>';
	foreach ($category as $catitem){
		echo '<li>'.$catitem.'</li>';
	}
	echo '</ul>';*/
	$catname = $category->name;
	$catslug = $category->slug;
	$catdesc = $category->description;

	/** @var Numero post nella categoria $count */
	$count = $category->category_count;
?>
<div id="<?php echo $catslug;?>" class="<?php echo $catslug;?> sezmenu">
	<!-- Print a link to this category -->
	<div class="row">
		<div class="col"><h3 class="text-info text-center"><a class="align-middle align-content-center" data-toggle="tooltip" data-placement="top" style="color:#666;text-transform: uppercase;" href="<?php echo esc_url( $category_link ); ?>" title="Prova le nostre <?php echo $catslug;?>"><?php echo $catname;?></a></h3></div>
		<div class="col"><h4><?php echo $catdesc;?></h4></div>
	</div>
	<hr class="style14">
	<?php $catquery = new WP_Query( 'category_name='.$catslug.'&&posts_per_page=-1&&nopaging=true'); $et_npb = 0;?>
	<?php if ($catquery->have_posts() ) : while($catquery->have_posts()) : $catquery->the_post();?>
	<?php if (($et_npb === 0) || ($et_npb %2 == 0)){;?><div class="row"><?php };?>
		<div <?php if (($et_npb != 0) && ($et_npb %2 != 0)){echo'class="col-6 leftpadding"';}else{echo'class="col-6 divverticale"';};?>>
			<div class="row">
				<div class="list__item list__item_ajax">
					<a style="text-transform: uppercase;color:#555;" href="<?php echo esc_url( add_query_arg( 'access_method', 'iframe', get_permalink() ) );?>" class="iframe" title="<?php the_title();?>" data-toggle="tooltip" data-placement="top">
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
	</div>