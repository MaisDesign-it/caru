<?php global $post;
	$passaggiocantina = get_post_meta( $post->ID, 'gruppo_cantina', true );
	$format           = $passaggiocantina;
	if (!empty($format['avanzate'])){
		$avanzate         = $format['avanzate'];
	echo '<div class="col-12"><h4>Situazione in cantina</h4></div><hr>';
	foreach ( $avanzate as $avanzi ) {
		echo '<div class="row">';
//		print_r(array_keys($avanzi));
		echo '<div class="col">Formato: '.$avanzi['et2018-formato_birra'].'</div>';
		echo '<div class="col">Costo: '.$avanzi['et2018-prezzo_birra'].'€</div>';
		echo '<div class="col">Annata: '.$avanzi['et2018-annata_birra'].'</div>';
		echo '<div class="col">Disponibili: '.$avanzi['et2018-quantita_birra'].'</div>';
		/* foreach ( $avanzi as $avant ) {
				echo '<div class="col">'.$avant.'</div>';
		} */
		echo '</div><hr>';
	};}

	?>

