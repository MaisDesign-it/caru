<?php $args = array( 'post_type' => 'post', 'cat' => '28' );
	query_posts( $args );
	if (have_posts()) :
		while (have_posts()) : the_post(); ?>
			<?php if ( has_post_thumbnail() ) {;?>
				<img src="<?php the_post_thumbnail_url('etimue2018-cantina-size');?>" alt="<?php the_title();?>" witdth="64px" height="64px"/>
			<?php };?>
<a title="<?php the_title(); ?>" href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
			<?php the_excerpt(); ?>
		<?php endwhile;endif; ?>