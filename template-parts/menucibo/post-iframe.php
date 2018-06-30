<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<?php $panini = get_post_meta($post->ID, 'gruppo_panini', true);
		if (isset($panini['et2018-img_high_res'])){
			$imghigh = $panini['et2018-img_high_res'];
		}else{$imghigh = 0;};?>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<!-- <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/css/bootstrap.css';?>" /> -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/css/utility.css';?>" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
<!-- Meta Vari -->
	<meta name="title" content="<?php the_title();?>">
	<meta name="description" content="<?php if (isset ($panini['et2018-descrizione'])){$descrizione = $panini['et2018-descrizione'];}; if (isset ($descrizione)){ echo $descrizione;}; ?>">
	<meta name="keywords" content="piadina, piadina romagnola, piadina artigianale, hamburger, hamburger americani, bun, birra, birra artigianale, birra artigianale italian, acireale, catania, provincia di catania, piadineria, hamburgeria, birreria">
	<meta name="robots" content="index, follow">
	<meta name="language" content="Italian">
	<meta name="revisit-after" content="7">
	<meta name="author" content="Etimuè pub">
	<title><?php the_title();?></title>
	<meta name="google-site-verification" content="h32cUFD6gnkJOxLsO_xY9E_5n_TvnaVZGQg4YmvdAFk" />
	<meta name="msvalidate.01" content="8A1B887846DC86A089999C214AF25456" />
	<!-- Facebook Open Graph -->
	<meta property="og:type" content="restaurant.restaurant">
	<meta property="og:title" content="Etimuè Pub Birreria Acireale">
	<meta property="og:url" content="etimue.it">
	<meta property="og:description" content="<?php if (isset ($panini['et2018-descrizione'])){$descrizione = $panini['et2018-descrizione'];}; if (isset ($descrizione)){ echo $descrizione;}; ?>">
	<meta property="og:image" content="<?php echo wp_get_attachment_image_url($imghigh);?>">
	<meta property="restaurant:menu" content="https://etimue.it/menucibo/">
	<meta property="restaurant:contact_info:website" content="etimue.it">
	<meta property="restaurant:contact_info:street_address" content="via monsignor genuardi 28">
	<meta property="restaurant:contact_info:locality" content="Acireale">
	<meta property="restaurant:contact_info:region" content="CT">
	<meta property="restaurant:contact_info:postal_code" content="95024">
	<meta property="restaurant:contact_info:country_name" content="Italy">
	<meta property="restaurant:contact_info:email" content="info@etimue.it">
	<meta property="restaurant:contact_info:phone_number" content="0958363554">
	<!-- Twitter Card -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@etimue">
	<meta name="twitter:title" content="<?php the_title();?>">
	<meta name="twitter:description" content="<?php if (isset ($panini['et2018-descrizione'])){$descrizione = $panini['et2018-descrizione'];}; if (isset ($descrizione)){ echo $descrizione;}; ?>">

	<meta name="twitter:image" content="<?php echo wp_get_attachment_image_url($imghigh);?>">
</head>
<body class="container">
<?php /* TODO sistemare CSS */
	/* Start the Loop */
	while ( have_posts() ) : the_post();?>
		<div class="row">
			<div class="col">
				<?php
					if (isset($panini['et2018-img_low_res'])){
						$imglow = $panini['et2018-img_low_res'];
					}
					if (isset($panini['et2018-img_high_res'])){
						$imghigh = $panini['et2018-img_high_res'];
					};
				    /*if (isset ($imglow)){$imglinkl = wp_get_attachment_url( $imglow );};
					if (isset ($imghigh)){$imglinkh = wp_get_attachment_url( $imghigh );}*/

					if (isset ($imglow)){$imglinkl = wp_get_attachment_image_src( $imglow ,'etimue2018-single-bun');};
					if (isset ($imghigh)){$imglinkh = wp_get_attachment_image_src( $imghigh ,'etimue2018-single-bun');}

					if ((isset($imglinkh))||(isset($imglinkl))){;?>
						<img style="max-width:500px" class="lazyload rounded-circle offset-xs-0 col-sm-1 offset-md-2 offset-lg-3 offset-xl-3 buninframe" src="<?php echo $imglinkl[0]; ?>" data-src="<?php echo $imglinkh[0]; ?>" alt="<?php the_title();?>" />
				<?php };?>
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
				<p class="col"><?php if (isset ($panini['et2018-descrizione'])){$descrizione = $panini['et2018-descrizione'];}; if (isset ($descrizione)){ echo $descrizione;}; ?></p>
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