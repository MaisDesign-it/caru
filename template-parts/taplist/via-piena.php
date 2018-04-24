<div class="col birrificio">
	<a target="_blank" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
		<?php echo get_post_meta($post->ID, 'et2018-nome_birrificio', true); ?>
	</a>
</div><!--.birrificio-->
</div>
<div class="row">
	<div class="col gradazione">
		<strong><?php echo get_post_meta($post->ID, 'et2018-gradazione', true); ?>%</strong>
	</div>
	<div class="col birra">
		<?php echo get_post_meta($post->ID, 'et2018-nome_birra', true); ?>
	</div>
</div><!-- .row Birra -->
<div class="row">
	<div class="col-12 stile">
		<p><strong>Stile : </strong><?php echo get_post_meta($post->ID, 'et2018-stile_birra', true); ?></p>
	</div><!-- .stile -->
</div><!-- .row stile-->
