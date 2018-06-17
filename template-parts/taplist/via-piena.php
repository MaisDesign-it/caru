<div class="col bollospina"><?php echo get_the_post_thumbnail('','etimue2018-thumbnail-avatar');?></div>
<div class="col birrificio">
	<?php
		$passaggio = get_post_meta($post->ID, 'gruppo_birra', true);
		if (isset($passaggio['et2018-nome_birra'])){
			$birra = $passaggio['et2018-nome_birra'];
		}
		if (isset($passaggio['et2018-nome_birrificio'])){
			$birrificio = $passaggio['et2018-nome_birrificio'];
		};
		if (isset($passaggio['et2018-gradazione'])){
			$gradazione = $passaggio['et2018-gradazione'];
		};
		if(isset($passaggio['et2018-stile_birra'])){
			$stile = $passaggio['et2018-stile_birra'];
		};
		if (isset($passaggio['et2018-gusto_prevalente'])){
			$macrogusto = $passaggio['et2018-gusto_prevalente'];
		};
		if (isset($passaggio['et2018-gusto_descrittori'])){
			$descrittori = $passaggio['et2018-gusto_descrittori'];
		};
		if (isset($passaggio['et2018-prezzo_birra'])){
			$prezzo = $passaggio['et2018-prezzo_birra'];
		};
		if (isset ($passaggio['et2018-disponibilita'])){
			$disponibilita = $passaggio['et2018-disponibilita'];
		};
		if (isset ($passaggio['et2018-formato_birra'])){
			$formato = $passaggio['et2018-formato_birra'];
		};
		if (isset ($passaggio['et2018-quantita_birra'])){
			$quantita = $passaggio['et2018-quantita_birra'];
		};
		if (isset ($passaggio['et2018-annata_birra'])){
			$annata = $passaggio['et2018-annata_birra'];
		};
	?>
	<a target="_blank" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
		<?php echo $birrificio; ?>
	</a>
</div><!--.birrificio-->
</div> <?php /* TODO RISCRIVERE COMPLETAMENTE LA TAPLIST */ ;?>
<div class="row">
	<div class="col gradazione">
		<strong><?php echo $gradazione; ?>%</strong>
	</div>
	<div class="col birra">
		<?php echo $birra; ?>
	</div>
</div><!-- .row Birra -->
<div class="row">
	<div class="col-12 stile">
		<p><strong>Stile : </strong><?php echo $stile; ?></p>
	</div><!-- .stile -->
</div><!-- .row stile-->
