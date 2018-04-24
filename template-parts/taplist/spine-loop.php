<?php for ($mul = 1; $mul <= 10; ++$mul) {;?>
	<?php if ($mul ===1 || $mul === 6){echo '<div class="row taplist">';};?>
		<div class="col spina<?php echo $mul;?>">
			<?php $catquery = new WP_Query( 'category_name=spina-'.$mul.'&posts_per_page=1' ); ?>
			<?php if ($catquery->have_posts() ) : while($catquery->have_posts()) : $catquery->the_post(); ?>
			<div class="row"><!-- Inizio row birrificio -->
				<div class="col numerospina">
					<?php if ($mul !=10){echo'<p>0'.$mul;}else{echo '<p>'.$mul;};?>)</p>
				</div><!-- .numerospina -->
				<?php get_template_part('template-parts/taplist/via','piena');
				endwhile;
				else:?>
				<div class="row"><!-- Inizio row birrificio -->
					<div class="col numerospina"><?php if ($mul !=10){echo'0'.$mul;}else{echo $mul;};?>)</div><!-- .numerospina -->
					<?php get_template_part('template-parts/taplist/via','vuota');endif;wp_reset_postdata();?>
			</div><!-- .row birrificio -->
	<?php if ($mul ===5 || $mul === 10){echo '</div><!-- .taplist -->';};?>
<?php }/*Fine FOR */;?>