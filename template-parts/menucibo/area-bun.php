<div id="bun" class="bun sezmenu">
	<?php $catquery = new WP_Query( 'category_name=bun&&posts_per_page=-1&&nopaging=true'); $et_npb = 0;$id = 37;$category = get_category($id);$count = $category->category_count;?>
	<?php if ($catquery->have_posts() ) : while($catquery->have_posts()) : $catquery->the_post();?>
	<?php if (($et_npb === 0) || ($et_npb %4 == 0)){;?><div class="row"><?php };?>
		<div class="col-3">
			<div class="list__item list__item_ajax">
				<a href="<?php echo esc_url( add_query_arg( 'access_method', 'iframe', get_permalink() ) );?>" class="iframe" title="<?php the_title();?>"">
					<?php /*
                         <img class="lazyload rounded-circle"
					     src="<?php echo get_stylesheet_directory_uri(); ?>/img/bn/bun.png"
					     data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/bun.png"
					     height="128" width="128"
					     alt="<?php the_title();?>" />
 */;?>
				<?php
					if ( has_post_thumbnail() ) {
						the_post_thumbnail( 'etimue2018-cantina-size' );
					}
				?>
				</a>
			</div><!-- list__item list__item_ajax -->
		</div>
		<?php ++$et_npb; if ( ($et_npb %4 == 0) ||  ($et_npb === $count)){echo '</div><hr class="style14">';};
			endwhile;endif;?>
	</div><!-- .sezmenu -->
