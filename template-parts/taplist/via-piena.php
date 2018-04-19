<div class="col-10 col-sm-9 offset-1 birrificio"><a target="_blank" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php echo get_post_meta($post->ID, 'et2018-nome_birrificio', true); ?></a></div><!--.birrificio-->
</div><!-- .row Birrificio-->
<div class="row">
	<div class="col-2 col-sm-1 gradazione"><strong><?php echo get_post_meta($post->ID, 'et2018-gradazione', true); ?>%</strong></div>
	<div class="col-10 col-sm-9 offset-1 birra"><?php echo get_post_meta($post->ID, 'et2018-nome_birra', true); ?></div>
</div><!-- .row Birra -->
<div class="row">
	<div class="col-12 stile">
	<?php echo get_post_meta($post->ID, 'et2018-stile_birra', true); ?>
	</div><!-- .stile -->
</div><!-- .row stile-->
