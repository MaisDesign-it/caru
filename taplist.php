<?php get_header();?>
<?php if ( wp_is_mobile() ) {echo '<hr class="featurette-divider">';}?>
	<h1>TapList aggiornata Etimuè Pub Acireale</h1>
<?php get_template_part('template-parts/taplist/spine','loop');?>
	<?php get_template_part('template-parts/taplist/bgb');?>
<?php get_footer();?>
