<?php for ( $mul = 1; $mul <= 10; ++ $mul ) {
	; ?>
	<hr>
	<div class="row tap<?php echo $mul;?>">
	<?php $catquery = new WP_Query( 'category_name=spina-' . $mul . '&posts_per_page=1' ); ?>
	<?php if ( $catquery->have_posts() ) {;?>

		<?php while ( $catquery->have_posts() ) :
			$catquery->the_post();?>
			<div class="row stap offset-1">

					<div class="col-2">
			<?php if ( $mul === 10 ) {
				; ?>
				<p><strong><?php echo $mul; ?>)</strong></p>
			<?php } else {
				; ?>
				<p><strong>0<?php echo $mul; ?>)</strong></p>
			<?php }
		;
			?></div><!-- .col-2 -->
			<?php get_template_part( 'template-parts/taplist/new/via', 'piena' ); ?>

			</div><!-- .row .stap -->
			<div class="row riassunto offset-1">
			<div class="col-12">
			<p><?php the_excerpt(); ?></p>
			</div><!-- .col -->
		</div><!-- .riassunto -->

			<?php wp_reset_postdata();
		endwhile;
	} else {;?>
		<div class="row stap">
			<div class="col">
		<?php if ( $mul === 10 ) {
			; ?>
			<p><strong><?php echo $mul; ?>)</strong></p>
		<?php } else {
			; ?>
			<p><strong>0<?php echo $mul; ?>)</strong></p>
		<?php };

		get_template_part( 'template-parts/taplist/new/via', 'vuota' );?>
			</div><!-- .col -->
		</div><!-- .row .stap -->
	<?php }; ?>

	<?php wp_reset_postdata(); ?>
	</div><!-- .row .tap<?php echo $mul;?> -->
<?php }/*Fine FOR */; ?>
<hr>
