<?php
	/*
	* Template Name: Menu Cibo
	* TODO Aggiungere pagine iFrame per piadine, crepe, piatti unici e dolci.
	 * TODO Allegerire pagina da CSS e JS
	*/
	get_header();?>
	<div class="container">
	<?php get_template_part('template-parts/menucibo/cibo','selettore');?>
	<hr class="featurette-divider">
	<?php get_template_part('template-parts/menucibo/area','antipasti');?>
	<hr class="featurette-divider">
	<?php get_template_part('template-parts/menucibo/area','tagliere');?>
	<hr class="featurette-divider">
	<?php get_template_part('template-parts/menucibo/area','bun');?>
	<hr class="featurette-divider">
	<?php get_template_part('template-parts/menucibo/area','piadina');?>
	<hr class="featurette-divider">
	<?php get_template_part('template-parts/menucibo/area','crepe');?>
	<hr class="featurette-divider">
	<?php get_template_part('template-parts/menucibo/area','piattiunici');?>
	<hr class="featurette-divider">
	<?php get_template_part('template-parts/menucibo/area','insalate');?>
	<hr class="featurette-divider">
	<?php get_template_part('template-parts/menucibo/area','dolci');?>
	<hr class="featurette-divider">
	</div>
<?php get_footer();?>