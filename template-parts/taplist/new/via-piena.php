<?php /* Dichiariamo le variabili */
	$passaggio = get_post_meta( $post->ID, 'gruppo_birra', true );
	if ( isset( $passaggio['et2018-nome_birra'] ) ) {
		$birra = $passaggio['et2018-nome_birra'];
	}
	if ( isset( $passaggio['et2018-nome_birrificio'] ) ) {
		$birrificio = $passaggio['et2018-nome_birrificio'];
	};
	if ( isset( $passaggio['et2018-gradazione'] ) ) {
		$gradazione = $passaggio['et2018-gradazione'];
	};
	if ( isset( $passaggio['et2018-stile_birra'] ) ) {
		$stile = $passaggio['et2018-stile_birra'];
	};
	if ( isset( $passaggio['et2018-gusto_prevalente'] ) ) {
		$macrogusto = $passaggio['et2018-gusto_prevalente'];
	};
	if ( isset( $passaggio['et2018-gusto_descrittori'] ) ) {
		$descrittori = $passaggio['et2018-gusto_descrittori'];
	};
	if ( isset( $passaggio['et2018-prezzo_birra'] ) ) {
		$prezzo = $passaggio['et2018-prezzo_birra'];
	};
	if ( isset ( $passaggio['et2018-disponibilita'] ) ) {
		$disponibilita = $passaggio['et2018-disponibilita'];
	};
	if ( isset ( $passaggio['et2018-formato_birra'] ) ) {
		$formato = $passaggio['et2018-formato_birra'];
	};
	if ( isset ( $passaggio['et2018-quantita_birra'] ) ) {
		$quantita = $passaggio['et2018-quantita_birra'];
	};
	if ( isset ( $passaggio['et2018-annata_birra'] ) ) {
		$annata = $passaggio['et2018-annata_birra'];
	};
?>
<div class="col bollo">
	<?php echo get_the_post_thumbnail( '', 'etimue2018-thumbnail-avatar', '' ); ?>
</div><!-- .col .bollo-->
<div class="col birri">
	<p><strong>Birrificio: </strong></p>
	<a target="_blank" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
		<?php echo $birrificio; ?>
	</a>
</div><!-- .col .birri -->
<div class="col gradazione">
	<p><strong>Gradazione: </strong></p>
	<?php echo $gradazione; ?>%
</div><!-- .col .gradazione -->
<div class="col nome">
	<p><strong>Nome : </strong><?php echo $birra; ?></p>
</div><!-- .col .nome -->
<div class="col stile">
	<p><strong>Stile : </strong><?php echo $stile; ?></p>
</div><!-- .col .stile -->
<div class="col descrittori">
	<p><strong>Descrittori:</strong></p>
	<ul >
	<?php foreach ($descrittori as $sentore){
		echo '<li>'.$sentore.'</li>';
	};?>
	</ul>
</div>