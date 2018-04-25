<?php $catquery = new WP_Query( 'category_name=bgb&posts_per_page=-1' ); ?>
	<div class="row bgbzone"><!-- Inizio row birrificio -->
<?php if ($catquery->have_posts() ) : echo '<div class="row"><div class="col-12"><h3>Disponibili in Bag in Box: </h3></div></div>';while($catquery->have_posts()) : $catquery->the_post(); ?>
		<div class="col singbgb">
			<?php $passaggio = get_post_meta($post->ID, 'gruppo_birra', true);
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
				if (isset($passaggio['et2018-gusto_prevalente'])){
					$annate = $passaggio['et2018-annata_birra'];
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
				echo '<a href="'.get_the_permalink().'" title="'.get_the_title().'"><p>Birra: '.$birra.'</p></a>';
				echo '<p>Birrificio: '.$birrificio.'</p>';
				echo '<p>Gradazione: '.$gradazione.'%</p>';
				echo '<p>Stile: '.$stile.'</p>';
				echo '<p>Macro descrittore: '.$macrogusto.'</p>';
				echo 'Annate disponibili: <ul>';
					foreach ($annata as $anno){echo '<li>'.$anno.'</li>';};
				echo '</ul>';
				echo 'Costo: <ul>';
				foreach ($prezzo as $prezzi){echo '<li>'.$prezzi.'</li>';};
				echo '</ul>';

				$panini = get_post_meta($post->ID, 'gruppo_panini', true);
				if (isset($panini['et2018-img_low_res'])){
					$imglow = $panini['et2018-img_low_res'];
				};?>
			<?php $imglink = wp_get_attachment_url( $imglow ); ?>
			<img src="<?php echo $imglink;?>" >
			<?php // TODO Dare stile decente ?>

		</div><!-- .singbgb -->
<?php endwhile;
	endif;wp_reset_postdata();?>
	</div><!-- .bgbzone -->
