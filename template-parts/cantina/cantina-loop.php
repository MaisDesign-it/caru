<?php
	// Get the ID of a given category
	$category_id = get_cat_ID( 'cantina' );
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
		<div class="col">
			<h3 class="text-info text-center">
				<a class="align-middle align-content-center" data-toggle="tooltip" data-placement="top" style="color:#666;text-transform: uppercase;" href="<?php echo esc_url( $category_link ); ?>" title="Da un'occhiata alla nostra <?php echo $catslug;?>">
					<?php echo $catname;?>
				</a>
			</h3>
		</div><!-- .col -->
		<div class="col">
			<h4>
				<?php echo $catdesc;?>
			</h4>
		</div><!-- .col -->
	</div><!-- .row -->
	<hr class="style14">
</div><!-- .sezmenu -->