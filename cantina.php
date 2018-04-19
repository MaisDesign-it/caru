<?php
	/*
	Template Name: Cantina
	*/
	wp_head();
	?>
<html>
<body class="container">
<header class="row">
	<div class="col">
		<img class="lazyload featurette-image img-fluid mx-auto"
		     src="<?php echo get_stylesheet_directory_uri(); ?>/img/bn/botti-min-bn.jpg"
		     data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/botti-min.jpg"
		     height="295" width="784"
		     alt="Cosa abbiamo ad invecchiare nella nostra cantina?"/>
	</div>
</header>
<article>
	<?php get_template_part('template-parts/cantina/cantina','loop');?>
</article>
<!--Accordion wrapper-->

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
<?php $args = array( 'post_type' => 'post', 'cat' => '28' );
	query_posts( $args );
	if (have_posts()) :;?>
			<div id="<?php echo get_cat_name(28);?>">
				<div class="list-group panel">
					<a href="#<?php echo get_cat_name(28);?>1" class="list-group-item list-group-item" data-toggle="collapse" data-parent="#<?php echo get_cat_name(28);?>"><?php echo get_cat_name(28);?></a>
					<div class="collapse" id="<?php echo get_cat_name(28);?>1">
						<?php while (have_posts()) : the_post(); ?>
							<div class="list-group-item row">
							<?php if ( has_post_thumbnail() ) {;?>
								<img class="col-2 cantinacollapse" src="<?php the_post_thumbnail_url('etimue2018-cantina-size');?>" alt="<?php the_title();?>" witdth="64px" height="64px"/>
							<?php };?>
						<a class="col-10" title="<?php the_title(); ?>" href="<?php echo get_permalink(); ?>"><?php the_title();?></a>
								<a href="#Sub<?php echo get_cat_name(28);?>1" class="list-group-item" data-toggle="collapse" data-parent="#Sub<?php echo get_cat_name(28);?>1">Scopri di più <i class="fa fa-caret-down"></i></a>
								<div class="collapse list-group-submenu list-group-submenu-1" id="Sub<?php echo get_cat_name(28);?>1">
									<a href="#" class="list-group-item" data-parent="#Sub<?php echo get_cat_name(28);?>1"><?php the_excerpt();?></a>
								</div><!-- .list-group-submenu-1 -->
							</div><!-- list-group-item row -->
						<?php endwhile;endif; ?>
					</div><!-- <?php echo get_cat_name(28);?>1 -->
				</div><!-- .list-group .panel -->
			</div><!-- #MainMenu -->
		</div><!-- .col-md-2 -->
	</div><!-- .row -->
</div><!-- .container-fluid -->

<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/lazyload.js"></script>
<script>window.addEventListener("load", function (event) {lazyload();});</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha256-5+02zu5UULQkO7w1GIr6vftCgMfFdZcAHeDtFnKZsBs=" crossorigin="anonymous"></script>
</body>
</html>
