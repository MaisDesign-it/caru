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
<div class="row sottocantina">
	<?php
		$taxonomy = 'category';

		// ID Gets which assign post
		$post_terms = wp_get_object_terms( $post->ID, $taxonomy, array( 'fields' => 'ids' ) );
		$post_terms_specific = array (1);
		$result_post=array_diff($post_terms, $post_terms_specific);

		// Links seprator.
		$separator = ', ';

		if ( !empty( $result_post ) && !is_wp_error( $result_post ) ) {

			$term_ids = implode( ',' , $result_post);
			$terms = wp_list_categories( 'title_li=&style=none&echo=0&taxonomy=' . $taxonomy . '&include=' . $term_ids );
			$terms = rtrim( trim( str_replace( '', $separator, $terms ) ), $separator );

			// show category post.
			echo $terms;

		}
	?>
</div>
<?php et2018_subcats_from_parentcat_by_NAME('cantina');?>
<?php function et2018_subcats_from_parentcat_by_NAMES($parent_cat_NAME) {

		$IDbyNAME = get_term_by('name', $parent_cat_NAME, 'category');

		$product_cat_ID = $IDbyNAME->term_id;

		$args = array(

			'hierarchical' => 1,

			'show_option_none' => '',

			'hide_empty' => 0,

			'parent' => $product_cat_ID,

			'taxonomy' => 'category'

		);

		$subcats = get_categories($args);

		echo '<ul class="wooc_sclist">';

		foreach ($subcats as $sc) {

			$link = get_term_link( $sc->slug, $sc->taxonomy );

			echo '<li><a href="'. $link .'">'.$sc->name.'</a></li>';
			$catquery = new WP_Query( 'category_name='.$sc->name.'&&posts_per_page=-1&&nopaging=true&&orderby=title&&order=asc'); $et_npb = 0;
			if ($catquery->have_posts() ) : while($catquery->have_posts()) : $catquery->the_post();
				/*
				 * Caricamento Variabili
				 */
				global $post;
				$passaggiocantina = get_post_meta($post->ID, 'gruppo_cantina', true);
				if (isset($passaggiocantina['et2018-disponibilita'])) {

					if ( isset( $passaggiocantina['et2018-nome_birra'] ) ) {
						$birra = $passaggiocantina['et2018-nome_birra'];
					};
					if ( isset( $passaggiocantina['et2018-nome_birrificio'] ) ) {
						$birrificio = $passaggiocantina['et2018-nome_birrificio'];
					};
					if ( isset( $passaggiocantina['et2018-gradazione'] ) ) {
						$gradazione = $passaggiocantina['et2018-gradazione'];
					};
					if ( isset( $passaggiocantina['et2018-stile_birra'] ) ) {
						$stile = $passaggiocantina['et2018-stile_birra'];
					};
					if ( isset( $passaggiocantina['et2018-gusto_prevalente'] ) ) {
						$gusto = $passaggiocantina['et2018-gusto_prevalente'];
					};
					if ( isset( $passaggiocantina['et2018-gusto_descrittori'] ) ) {
						$descrittori = $passaggiocantina['et2018-gusto_descrittori'];
					};
					if ( isset( $passaggiocantina['et2018-prezzo_birra'] ) ) {
						$prezzo = $passaggiocantina['et2018-prezzo_birra'];
					};
					if ( isset( $passaggiocantina['et2018-formato_birra'] ) ) {
						$formato = $passaggiocantina['et2018-formato_birra'];
					};
					if ( isset( $passaggiocantina['et2018-quantita_birra'] ) ) {
						$quantita = $passaggiocantina['et2018-formato_birra'];
					};
					if ( isset( $passaggiocantina['et2018-img_low_res'] ) ) {
						$imglow = $passaggiocantina['et2018-img_low_res'];
					};
					if ( isset( $passaggiocantina['et2018-img_high_res'] ) ) {
						$imghigh = $passaggiocantina['et2018-img_high_res'];
					};
					if ( isset( $passaggiocantina['et2018-descrizione'] ) ) {
						$descrizione = $passaggiocantina['et2018-descrizione'];
					};
					/*
			        * Fine variabili if disponibile escluso
			        */
					etimue2018_edit_link();
					if ( isset ( $birra ) ) {
						echo "Nome:" . $birra;
					} else {
						echo 'Non hai registrato il nome';
					};
				};/* se disponbile setta le variabili e mostra il post */
				wp_reset_postdata();
			endwhile;
			endif;
		}

		echo '</ul>';

	};?>
<?php //et2018_subcats_from_parentcat_by_NAMES('cantina');?>
