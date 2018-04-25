<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<!-- <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/css/bootstrap.css';?>" /> -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/css/utility.css';?>" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

</head>
<body class="container">
<?php /* TODO sistemare CSS */
	/* Start the Loop */
	while ( have_posts() ) : the_post();?>
		<div class="row">
			<div class="col">
				<?php
					$panini = get_post_meta($post->ID, 'gruppo_panini', true);
					if (isset($panini['et2018-img_low_res'])){
						$imglow = $panini['et2018-img_low_res'];
					}
					if (isset($panini['et2018-img_high_res'])){
						$imghigh = $panini['et2018-img_high_res'];
					}
				;?>
				<?php $imglinkl = wp_get_attachment_url( $imglow );
					$imglinkh = wp_get_attachment_url( $imghigh );?>
				<img class="lazyload rounded-circle col-sm-12" src="<?php echo $imglinkl; ?>" data-src="<?php echo $imglinkh; ?>" height="512" width="512" alt="Solo birra di qualit&agrave; ad Acireale" />
			</div>
		</div>
		<div class="row">
			<hr class="col-12 style14">
			<div class="ingredienti col-10 offset-1">
				<p class="text-center text-info">Quali ingredienti usiamo?</p>
			</div><!-- .ingredienti -->
			<div class="col-10 offset-1">
				<?php $posttags = get_the_tags();
					if ($posttags) {
					foreach($posttags as $tag) {
						$term_link = get_term_link($tag);
					echo '<a href="'.esc_url( $term_link ).'" title="'.$tag->description.'" data-toggle="tooltip" data-placement="top"><button class="btn-outline-info marginale" >'. $tag->name . '</button></a> ';
					};
				};?>
			</div><!-- col-10 offset-1 -->
		</div><!-- .row -->
		<div class="row">
			<hr class="col-12 style14">
			<div class="col-10 offset-1 row">
				<p class="col"><?php if (isset ($panini['et2018-descrizione'])){$descrizione = $panini['et2018-descrizione'];}; echo $descrizione; ?></p>
				<?php if (isset ($panini['et2018-link_youtube'])){;?>
				<div class="col">
					<iframe width="100%" height="auto" src="<?php if (isset ($panini['et2018-link_youtube'])){$youtube = $panini['et2018-link_youtube'];}; echo $youtube; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
				</div><!-- .col-4 -->
				<?php };?>
			</div><!-- col-10 offset-1 -->
			<hr class="col-12 style14">

		</div><!-- .row -->
	<?php endwhile;?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/lazyload.js"></script>
<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
    window.addEventListener("load", function (event) {lazyload();});
</script>

</body>
</html>