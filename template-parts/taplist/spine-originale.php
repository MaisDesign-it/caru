<div class="row taplist">
	<div class="col spinauno">
		<?php $catquery = new WP_Query( 'category_name=spina-1&posts_per_page=1' ); ?>
		<?php if ($catquery->have_posts() ) : while($catquery->have_posts()) : $catquery->the_post(); ?>
		<div class="row"><!-- Inizio row birrificio -->
			<div class="col-2 col-sm-1 numerospina">01)</div><!-- .numerospina -->
			<?php $et_spina_mille = get_post_meta($post->ID, 'et2018-nome_birrificio', true);
				if ( ! empty ( $et_spina_mille ) ){ get_template_part('template-parts/taplist/via','piena');}else{get_template_part('template-parts/taplist/via','vuota');};?>
			<?php endwhile;else:?>
			<div class="row"><!-- Inizio row birrificio -->
				<div class="col-2 col-sm-1 numerospina">01)</div><!-- .numerospina -->
				<?php get_template_part('template-parts/taplist/via','vuota');?>
				<?php endif;wp_reset_postdata();?>
			</div>
			<div class="col spinadue">
				<?php $catquery = new WP_Query( 'category_name=spina-1&posts_per_page=1' ); ?>
				<?php if ($catquery->have_posts() ) : while($catquery->have_posts()) : $catquery->the_post(); ?>
				<div class="row"><!-- Inizio row birrificio -->
					<div class="col-2 col-sm-1 numerospina">01)</div><!-- .numerospina -->
					<?php $et_spina_mille = get_post_meta($post->ID, 'et2018-nome_birrificio', true);
						if ( ! empty ( $et_spina_mille ) ){ get_template_part('template-parts/taplist/via','piena');}else{get_template_part('template-parts/taplist/via','vuota');};?>
					<?php endwhile;else:?>
					<div class="row"><!-- Inizio row birrificio -->
						<div class="col-2 col-sm-1 numerospina">01)</div><!-- .numerospina -->
						<?php get_template_part('template-parts/taplist/via','vuota');?>
						<?php endif;wp_reset_postdata();?>
					</div>
					<div class="col spinatre">
						<?php $catquery = new WP_Query( 'category_name=spina-3&posts_per_page=1' ); ?>
						<?php if ($catquery->have_posts() ) : while($catquery->have_posts()) : $catquery->the_post(); ?>
						<div class="row"><!-- Inizio row birrificio -->
							<div class="col-3 col-sm-3 numerospina">03)</div><!-- .numerospina -->
							<?php $et_spina_mille = get_post_meta($post->ID, 'et2018-nome_birrificio', true);
								if ( ! empty ( $et_spina_mille ) ){ get_template_part('template-parts/taplist/via','piena');}else{get_template_part('template-parts/taplist/via','vuota');};?>
							<?php endwhile;else:?>
							<div class="row"><!-- Inizio row birrificio -->
								<div class="col-3 col-sm-3 numerospina">03)</div><!-- .numerospina -->
								<?php get_template_part('template-parts/taplist/via','vuota');?>
								<?php endif;wp_reset_postdata();?>
							</div>
							<div class="col spinaquattro">
								<?php $catquery = new WP_Query( 'category_name=spina-4&posts_per_page=1' ); ?>
								<?php if ($catquery->have_posts() ) : while($catquery->have_posts()) : $catquery->the_post(); ?>
								<div class="row"><!-- Inizio row birrificio -->
									<div class="col-4 col-sm-4 numerospina">04)</div><!-- .numerospina -->
									<?php $et_spina_mille = get_post_meta($post->ID, 'Birrificio', true);
										if ( ! empty ( $et_spina_mille ) ){ get_template_part('template-parts/taplist/via','piena');}else{get_template_part('template-parts/taplist/via','vuota');};?>
									<?php endwhile;else:?>
									<div class="row"><!-- Inizio row birrificio -->
										<div class="col-4 col-sm-4 numerospina">04)</div><!-- .numerospina -->
										<?php get_template_part('template-parts/taplist/via','vuota');?>
										<?php endif;wp_reset_postdata();?>
									</div>
									<div class="col spinacinque">
										<?php $catquery = new WP_Query( 'category_name=spina-5&posts_per_page=1' ); ?>
										<?php if ($catquery->have_posts() ) : while($catquery->have_posts()) : $catquery->the_post(); ?>
										<div class="row"><!-- Inizio row birrificio -->
											<div class="col-5 col-sm-5 numerospina">05)</div><!-- .numerospina -->
											<?php $et_spina_mille = get_post_meta($post->ID, 'Birrificio', true);
												if ( ! empty ( $et_spina_mille ) ){ get_template_part('template-parts/taplist/via','piena');}else{get_template_part('template-parts/taplist/via','vuota');};?>
											<?php endwhile;else:?>
											<div class="row"><!-- Inizio row birrificio -->
												<div class="col-5 col-sm-5 numerospina">05)</div><!-- .numerospina -->
												<?php get_template_part('template-parts/taplist/via','vuota');?>
												<?php endif;wp_reset_postdata();?>
											</div>
										</div><!-- .row prime 5 spine -->
										<div class="row taplist">
											<div class="col spinasei">
												<?php $catquery = new WP_Query( 'category_name=spina-6&posts_per_page=1' ); ?>
												<?php if ($catquery->have_posts() ) : while($catquery->have_posts()) : $catquery->the_post(); ?>
												<div class="row"><!-- Inizio row birrificio -->
													<div class="col-6 col-sm-6 numerospina">06)</div><!-- .numerospina -->
													<?php $et_spina_mille = get_post_meta($post->ID, 'Birrificio', true);
														if ( ! empty ( $et_spina_mille ) ){ get_template_part('template-parts/taplist/via','piena');}else{get_template_part('template-parts/taplist/via','vuota');};?>
													<?php endwhile;else:?>
													<div class="row"><!-- Inizio row birrificio -->
														<div class="col-6 col-sm-6 numerospina">06)</div><!-- .numerospina -->
														<?php get_template_part('template-parts/taplist/via','vuota');?>
														<?php endif;wp_reset_postdata();?>
													</div>
													<div class="col spinasette">
														<?php $catquery = new WP_Query( 'category_name=spina-7&posts_per_page=1' ); ?>
														<?php if ($catquery->have_posts() ) : while($catquery->have_posts()) : $catquery->the_post(); ?>
														<div class="row"><!-- Inizio row birrificio -->
															<div class="col-7 col-sm-7 numerospina">07)</div><!-- .numerospina -->
															<?php $et_spina_mille = get_post_meta($post->ID, 'Birrificio', true);
																if ( ! empty ( $et_spina_mille ) ){ get_template_part('template-parts/taplist/via','piena');}else{get_template_part('template-parts/taplist/via','vuota');};?>
															<?php endwhile;else:?>
															<div class="row"><!-- Inizio row birrificio -->
																<div class="col-7 col-sm-7 numerospina">07)</div><!-- .numerospina -->
																<?php get_template_part('template-parts/taplist/via','vuota');?>
																<?php endif;wp_reset_postdata();?>
															</div><!-- spinasette -->
															<div class="col spinaotto">
																<?php $catquery = new WP_Query( 'category_name=spina-8&posts_per_page=1' ); ?>
																<?php if ($catquery->have_posts() ) : while($catquery->have_posts()) : $catquery->the_post(); ?>
																<div class="row"><!-- Inizio row birrificio -->
																	<div class="col-8 col-sm-8 numerospina">08)</div><!-- .numerospina -->
																	<?php $et_spina_mille = get_post_meta($post->ID, 'Birrificio', true);
																		if ( ! empty ( $et_spina_mille ) ){ get_template_part('template-parts/taplist/via','piena');}else{get_template_part('template-parts/taplist/via','vuota');};?>
																	<?php endwhile;else:?>
																	<div class="row"><!-- Inizio row birrificio -->
																		<div class="col-8 col-sm-8 numerospina">08)</div><!-- .numerospina -->
																		<?php get_template_part('template-parts/taplist/via','vuota');?>
																		<?php endif;wp_reset_postdata();?>
																	</div><!-- .spinaotto -->
																	<div class="col spinanove">
																		<?php $catquery = new WP_Query( 'category_name=spina-9&posts_per_page=1' ); ?>
																		<?php if ($catquery->have_posts() ) : while($catquery->have_posts()) : $catquery->the_post(); ?>
																		<div class="row"><!-- Inizio row birrificio -->
																			<div class="col-9 col-sm-9 numerospina">09)</div><!-- .numerospina -->
																			<?php $et_spina_mille = get_post_meta($post->ID, 'Birrificio', true);
																				if ( ! empty ( $et_spina_mille ) ){ get_template_part('template-parts/taplist/via','piena');}else{get_template_part('template-parts/taplist/via','vuota');};?>
																			<?php endwhile;else:?>
																			<div class="row"><!-- Inizio row birrificio -->
																				<div class="col-9 col-sm-9 numerospina">09)</div><!-- .numerospina -->
																				<?php get_template_part('template-parts/taplist/via','vuota');?>
																				<?php endif;wp_reset_postdata();?>
																			</div><!-- .spinanove -->
																			<div class="col spinadieci">
																				<?php $catquery = new WP_Query( 'category_name=spina-10&posts_per_page=1' ); ?>
																				<?php if ($catquery->have_posts() ) : while($catquery->have_posts()) : $catquery->the_post(); ?>
																				<div class="row"><!-- Inizio row birrificio -->
																					<div class="col-10 col-sm-10 numerospina">010)</div><!-- .numerospina -->
																					<?php $et_spina_mille = get_post_meta($post->ID, 'Birrificio', true);
																						if ( ! empty ( $et_spina_mille ) ){ get_template_part('template-parts/taplist/via','piena');}else{get_template_part('template-parts/taplist/via','vuota');};?>
																					<?php endwhile;else:?>
																					<div class="row"><!-- Inizio row birrificio -->
																						<div class="col-10 col-sm-10 numerospina">010)</div><!-- .numerospina -->
																						<?php get_template_part('template-parts/taplist/via','vuota');?>
																						<?php endif;wp_reset_postdata();?>
																					</div><!-- .spinadieci -->
																				</div><!-- .taplist -->