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
<?php
	/* Start the Loop */
	while ( have_posts() ) : the_post();?>
		<div class="row">
			<div class="col-10 offset-1">
				<?php the_post_thumbnail( 'etimue2018-featured-image',array( 'class' => 'img-fluid w-100' ) )?>
			</div>
			<hr class="col-12 style14">
			<div class="ingredienti col-10 offset-1">
				<p class="text-center text-info">Quali ingredienti usiamo?</p>
			</div>
			<div class="col-10 offset-1">
				<?php $posttags = get_the_tags();
					if ($posttags) {
					foreach($posttags as $tag) {
						$term_link = get_term_link($tag);
					echo '<a href="'.esc_url( $term_link ).'" title="'.$tag->description.'" data-toggle="tooltip" data-placement="top"><button class="btn-outline-info marginale" >'. $tag->name . '</button></a> ';
					};
				};?>
			</div>
			<hr class="col-12 style14">
			<div class="col-10 offset-1"><?php $content = get_the_content('Read more');
					print $content;;?></div>
		</div>
	<?php endwhile;?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>

</body>
</html>