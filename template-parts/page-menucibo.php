<?php
	/*
	Template Name: Menu Cibo
	*/
	get_header();?>
	<div class="container">
	<?php get_template_part('template-parts/menucibo/cibo','selettore');?>
	<hr class="featurette-divider">
	<?php get_template_part('template-parts/menucibo/area','bun');?>
	<hr class="featurette-divider">
	<?php get_template_part('template-parts/menucibo/area','piadina');?>
	<hr class="featurette-divider">
	<?php get_template_part('template-parts/menucibo/area','crepe');?>
	<hr class="featurette-divider">
	<?php get_template_part('template-parts/menucibo/area','dolci');?>
	<hr class="featurette-divider">

	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous"></script>
	<?php /* <script async src="<?php echo get_stylesheet_directory_uri(); ?>/js/lazyload.js"></script> */ ;?>
	<script async src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.colorbox-min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
	<script defer src="<?php echo get_stylesheet_directory_uri(); ?>/js/lazyload.js"></script>
	<script>window.addEventListener("load", function (event) {lazyload();});</script>
	<script>
	    $(document).ready(function(){
	        //Examples of how to assign the Colorbox event to elements
	        $(".ajax").colorbox();
	        $(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
            $('[data-toggle="tooltip"]').tooltip();
	    });
	</script>
	</div>
<?php get_footer();?>