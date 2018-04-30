<?php if (wp_is_mobile()){;?>
	<?php /*
<div class="container marketing">
	<!-- Three columns of text below the carousel -->
	<div class="row">
		<div class="col">
			<img class="lazyload rounded-circle" style="margin-left: 25%"
			     src="<?php echo get_stylesheet_directory_uri(); ?>/img/selettore/mobile/bn/tagliere.png"
			     data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/selettore/mobile/tagliere.png"
			     height="128" width="128"
			     alt="Prova i nostri salumi emiliani!"
			/>
			<h2>Tagliere</h2>
			<p>Salumi dall'Emilia Romagna e formaggi siciliani.</p>
			<p><a class="btn btn-outline-info btn-block" href="#tagliere" role="button">Scopri di più &raquo;</a></p>
		</div><!-- /.col -->
		<div class="col">
			<img class="lazyload rounded-circle" style="margin-left: 25%"
			     src="<?php echo get_stylesheet_directory_uri(); ?>/img/selettore/mobile/bn/antipasti.png"
			     data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/selettore/mobile/antipasti.png"
			     height="128" width="128"
			     alt="Non solo fritture ma anche bruschette."
			/>
			<h2>Antipasti</h2>
			<p>Non solo fritture ma anche bruschette.</p>
			<p><a class="btn btn-outline-info btn-block" href="#antipasti" role="button">Scopri di più &raquo;</a></p>
		</div><!-- /.col -->
		<div class="col">
			<img class="lazyload rounded-circle" style="margin-left: 25%"
			     src="<?php echo get_stylesheet_directory_uri(); ?>/img/selettore/mobile/bn/bun.png"
			     data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/selettore/mobile/bun.png"
			     height="128" width="128"
			     alt="Panini e Bun ad Acireale" />
			<h2>Hamburger e panini</h2>
			<p>Alcuni classici intramontabili, altri innovativi.</p>
			<p><a class="btn btn-outline-info btn-block" href="#bun" role="button">Scopri di più &raquo;</a></p>
		</div><!-- /.col -->
		<div class="col">
			<img class="lazyload rounded-circle" style="margin-left: 25%"
			     src="<?php echo get_stylesheet_directory_uri(); ?>/img/selettore/mobile/bn/piadina.png"
			     data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/selettore/mobile/piadina.png"
			     height="128" width="128"
			     alt="Hamburger artigianali Acireale"
			/>
			<h2>Piadina artigianale</h2>
			<p>Le nostre piadine realizzate a mano.</p>
			<p><a class="btn btn-outline-info btn-block" href="#piadina" role="button">Scopri di più &raquo;</a></p>
		</div><!-- /.col -->
	</div><div class="row">
		<div class="col">
			<img class="lazyload rounded-circle" style="margin-left: 25%"
			     src="<?php echo get_stylesheet_directory_uri(); ?>/img/selettore/mobile/bn/crepe.png"
			     data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/selettore/mobile/crepe.png"
			     height="128" width="128"
			     alt="Crêpes salate ad Acireale"
			/>
			<h2>Crêpes salate</h2>
			<p>Sperimenta un mix di gusto insolito.</p>
			<p><a class="btn btn-outline-info btn-block" href="#crepe" role="button">Scopri di più &raquo;</a></p>
		</div><!-- /.col -->
		<div class="col">
			<img class="lazyload rounded-circle" style="margin-left: 25%"
			     src="<?php echo get_stylesheet_directory_uri(); ?>/img/selettore/mobile/bn/insalate.png"
			     data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/selettore/mobile/insalate.png"
			     height="128" width="128"
			     alt="Chi ha detto che le insalate sono noiose?"
			/>
			<h2>Insalate</h2>
			<p>Chi ha detto che le insalate sono noiose?</p>
			<p><a class="btn btn-outline-info btn-block" href="#crepe" role="button">Scopri di più &raquo;</a></p>
		</div><!-- /.col -->
		<div class="col">
			<img class="lazyload rounded-circle" style="margin-left: 25%"
			     src="<?php echo get_stylesheet_directory_uri(); ?>/img/selettore/mobile/bn/dolci.png"
			     data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/selettore/mobile/dolci.png"
			     height="128" width="128"
			     alt="Che ne dici di un bel dolce?"
			/>
			<h2>Dolci</h2>
			<p>Prova la nostra cheesecake o il birramisù.</p>
			<p><a class="btn btn-outline-info btn-block" href="#dolci" role="button">Scopri di più &raquo;</a></p>
		</div><!-- /.col -->
	</div><!-- /.row -->
</div><!-- .marketing -->
 */;?>
	<?php get_template_part('template-parts/menucibo/selettore/selettore','mobile');?>
<?php }else{;?>
	<?php get_template_part('template-parts/menucibo/selettore/selettore','desktop');?>
<?php };?>