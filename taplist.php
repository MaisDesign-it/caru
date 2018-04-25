<?php get_header();?>
<?php if ( wp_is_mobile() ) {echo '<hr class="featurette-divider">';}?>
<?php get_template_part('template-parts/taplist/spine','loop');?>
	<?php get_template_part('template-parts/taplist/bgb');?>
<?php get_footer();?>
