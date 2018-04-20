<?php
	// Get the ID of a given category
	$category_id = get_cat_ID( 'bun' );
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
		<div class="col"><h3 class="text-info text-center"><a class="align-middle align-content-center" data-toggle="tooltip" data-placement="top" style="color:#666;text-transform: uppercase;" href="<?php echo esc_url( $category_link ); ?>" title="Prova i nostri <?php echo $catslug;?>"><?php echo $catname;?></a></h3></div>
		<div class="col"><h4><?php echo $catdesc;?></h4></div>
	</div>
	<hr class="style14">
	<?php $catquery = new WP_Query( 'category_name='.$catslug.'&&posts_per_page=-1&&nopaging=true'); $et_npb = 0;?>
	<?php if ($catquery->have_posts() ) : while($catquery->have_posts()) : $catquery->the_post();?>
	<?php if (($et_npb === 0) || ($et_npb %4 == 0)){;?><div class="row"><?php };?>
		<div class="col-3">
			<div class="list__item list__item_ajax">
				<a href="<?php echo esc_url( add_query_arg( 'access_method', 'iframe', get_permalink() ) );?>" class="iframe" title="<?php the_title();?>" data-toggle="tooltip" data-placement="right"">
					<?php /*
                         <img class="lazyload rounded-circle"
					     src="<?php echo get_stylesheet_directory_uri(); ?>/img/bn/bun.png"
					     data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/bun.png"
					     height="128" width="128"
					     alt="<?php the_title();?>" />
                    */;?>
				<?php
					if ( has_post_thumbnail() ) {
						the_post_thumbnail( 'etimue2018-cantina-size' );
					}
				?>
				</a>
			</div><!-- list__item list__item_ajax -->
		</div>
		<?php ++$et_npb; if ( ($et_npb %4 == 0) ||  ($et_npb === $count)){echo '</div><hr class="style14">';};
			endwhile;endif;?>
	</div><!-- .sezmenu -->
