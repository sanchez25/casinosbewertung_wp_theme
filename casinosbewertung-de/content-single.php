<?php

/* Template Name: Casinos */
/* Template Post Type: post */

get_header();?>

<section class="page-content">
	<div class="head-row">
		<div class="page-block-content">
			<div class="breadcrumps">
				<?php true_breadcrumbs(); ?>
			</div>
			<div class="landing-brend-bonus">
				<div class="page-left casino">
					<div class="landing-bonus-card">
						<div class="brend-casinos-top-card">
							<div class="brend-card-bonus-image casino">
								<?php echo get_the_post_thumbnail($item->ID); ?>
							</div>
							<div class="brend-card-bonus-info">
								<div class="landing-bonus-info">
									<h1 class="title-bonus-h1"><?php the_title(); ?></h1>
                				</div>
								<div class="landing-casinos-count">
									<div class="landing-casinos-count-title">
										<span><?php echo get_field('text_brend'); ?></span>
									</div>
									<div class="tc-apply casinos">
										<div class="tc-apply-title">
										<div class="tc-apply-ikon" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/question.svg);"></div>
										<span class="tc-apply-text casino">T&C’s Apply</span>
										</div>
										<div id="tcapply" class="page-tcapply"><?php echo get_field('hover_text'); ?></div>
									</div>
								</div>
								<div class="landing-casinos-buttons">
									<a href="<?php echo get_field('link_brend'); ?>" class="flex-btn casinos">
										<div class="btn-ikon" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/play.svg);"></div>
										<span>Jetzt spielen</span>
									</a>
								</div>
              				</div>
							<div class="brend-card-casinos-rating">
								<div class="casinos-landing-rating"><?php echo get_field('rating_brend'); ?></div>
								<span class="casinos-text-rating">Reputations</span>
								<span class="casinos-text-rating">bewertung</span>
							</div>
							<div class="reputation-casino">
								<div class="rep-ikon" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/star-single.svg);"></div>
								<div class="rep-text">
									<span class="title-rep">Gute</span>
									<span class="after-text-rep">Reputation</span>
								</div>
							</div>
						</div>
						<?php
							$lizenz = get_field('lizenz');
							$grundungsjahr = get_field('grundungsjahr');
							$mindesteinzahlung = get_field('mindesteinzahlung');
							$hersteller = get_field('hersteller');
							$slots = get_field('slots');
							$zahlung = get_field('zahlung');
							$gebuhren = get_field('gebuhren');
						?>
						<div class="brend-bonus-bottom-card">
							<div class="bonus-bottom-card-left casino">
								<?php
								 if ($lizenz) {?>
									<div class="bottom-card-item">
										<div class="bottom-card-item-title casino">
											<div class="ikon-advantage casino" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/check.svg);"></div>
											<span class="bonus-card-item-text">Lizenz:</span>
										</div>
										<div class="bottom-card-item-title casino">
											<span class="bonus-card-item-text result"><?php echo $lizenz; ?></span>
										</div>
									</div>
								<?php } ?>
								<?php
								 if ($grundungsjahr) {?>
									<div class="bottom-card-item">
										<div class="bottom-card-item-title casino">
											<div class="ikon-advantage casino" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/check.svg);"></div>
											<span class="bonus-card-item-text">Gründungsjahr:</span>
										</div>
										<div class="bottom-card-item-title casino">
											<span class="bonus-card-item-text result"><?php echo $grundungsjahr; ?></span>
										</div>
									</div>
								<?php } ?>
								<?php
								 if ($mindesteinzahlung) {?>
									<div class="bottom-card-item">
										<div class="bottom-card-item-title casino">
											<div class="ikon-advantage casino" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/check.svg);"></div>
											<span class="bonus-card-item-text">Min dep:</span>
										</div>
										<div class="bottom-card-item-title casino">
											<span class="bonus-card-item-text result"><?php echo $mindesteinzahlung; ?></span>
										</div>
									</div>
								<?php } ?>
								<?php
								 if ($hersteller) {?>
									<div class="bottom-card-item">
										<div class="bottom-card-item-title casino">
											<div class="ikon-advantage casino" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/check.svg);"></div>
											<span class="bonus-card-item-text">Hersteller:</span>
										</div>
										<div class="bottom-card-item-title casino">
											<span class="bonus-card-item-text result"><?php echo $hersteller; ?></span>
										</div>
									</div>
								<?php } ?>
								<?php
								 if ($slots) {?>
									<div class="bottom-card-item">
										<div class="bottom-card-item-title casino">
											<div class="ikon-advantage casino" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/check.svg);"></div>
											<span class="bonus-card-item-text">Slots:</span>
										</div>
										<div class="bottom-card-item-title casino">
											<span class="bonus-card-item-text result"><?php echo $slots; ?></span>
										</div>
									</div>
								<?php } ?>
								<?php
								 if ($zahlung) {?>
									<div class="bottom-card-item">
										<div class="bottom-card-item-title casino">
											<div class="ikon-advantage casino" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/check.svg);"></div>
											<span class="bonus-card-item-text">Zahlung:</span>
										</div>
										<div class="bottom-card-item-title casino">
											<span class="bonus-card-item-text result"><?php echo $zahlung; ?></span>
										</div>
									</div>
								<?php } ?>
								<?php
								 if ($gebuhren) {?>
									<div class="bottom-card-item">
										<div class="bottom-card-item-title casino">
											<div class="ikon-advantage casino" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/check.svg);"></div>
											<span class="bonus-card-item-text">Gebühren:</span>
										</div>
										<div class="bottom-card-item-title casino">
											<span class="bonus-card-item-text result"><?php echo $gebuhren; ?></span>
										</div>
									</div>
								<?php } ?>
							</div>
							<div class="bonus-bottom-card-right casino">
								<div class="card-page-others casino">
									<?php
										$cur_terms = get_the_terms( $post->ID, 'providers' );
										if( is_array( $cur_terms ) ) {
											echo '<div class="card-page-games casino">';
												echo '<div class="card-page-games-title">';
													echo '<span>Anbieterliste</span>';
												echo '</div>';
												echo '<div class="card-page-games-content">';
													foreach ( $cur_terms as $cur_term ) {
														echo '<div class="page-games-item casino">';
															echo '<a href="'. get_term_link( $cur_term->term_id, $cur_term->taxonomy ) .'">';
																echo '<img src="'.z_taxonomy_image_url($cur_term->term_id, 'pay_cards').'" />';
															echo '</a>';
														echo '</div>';
													}
												echo '</div>';
											echo '</div>';
										}
									?>
									<?php
										$cur_terms = get_the_terms( $post->ID, 'pay' );
										if( is_array( $cur_terms ) ) {
											echo '<div class="card-page-games casino">';
												echo '<div class="card-page-games-title">';
													echo '<span>Währungen</span>';
												echo '</div>';
												echo '<div class="card-page-games-content">';
													foreach ( $cur_terms as $cur_term ) {
														echo '<div class="page-games-item casino">';
															echo '<a href="'. get_term_link( $cur_term->term_id, $cur_term->taxonomy ) .'">';
																echo '<img src="'.z_taxonomy_image_url($cur_term->term_id, 'pay_cards').'" />';
															echo '</a>';
														echo '</div>';
													}
												echo '</div>';
											echo '</div>';
										} 
									?>
									<?php
										$cur_terms = get_the_terms( $post->ID, 'country' );
										if( is_array( $cur_terms ) ) {
											echo '<div class="card-page-games casino">';
												echo '<div class="card-page-games-title">';
													echo '<span>Länder</span>';
												echo '</div>';
												echo '<div class="card-page-games-content">';
													foreach ( $cur_terms as $cur_term ) {
														echo '<div class="page-games-item casino">';
															echo '<a href="'. get_term_link( $cur_term->term_id, $cur_term->taxonomy ) .'">';
																echo '<img src="'.z_taxonomy_image_url($cur_term->term_id, 'pay_cards').'" />';
															echo '</a>';
														echo '</div>';
													}
												echo '</div>';
											echo '</div>';
										} 
									?>
									<?php
										$cur_terms = get_the_terms( $post->ID, 'currency' );
										if( is_array( $cur_terms ) ) {
											echo '<div class="card-page-games casino">';
												echo '<div class="card-page-games-title">';
													echo '<span>Währungen</span>';
												echo '</div>';
												echo '<div class="card-page-games-content">';
													foreach ( $cur_terms as $cur_term ) {
														echo '<div class="page-games-item casino currency">';
															echo '<a href="'. get_term_link( $cur_term->term_id, $cur_term->taxonomy ) .'">';
																echo '<div class="currancy-name">'.$cur_term->name.'</div>';
															echo '</a>';
														echo '</div>';
													}
												echo '</div>';
											echo '</div>';
										} 
									?>
									<div class="card-page-games casino">
										<div class="card-page-games-title">
											<span>Unterstützte Plattformen</span>
										</div>
										<div class="card-page-games-content">
											<div class="page-games-item-devices">
												<svg version="1.1" class="icon-devices <?php echo get_field('delete_android'); ?>" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
													x="0px" y="0px" viewBox="0 0 512.12 512.12" width="30" height="30" style="enable-background:new 0 0 512.12 512.12;" xml:space="preserve">
													<g>
														<path d="M74.727,170.787c-17.673,0-32,14.327-32,32V352.12c0,17.673,14.327,32,32,32s32-14.327,32-32
															 V202.787C106.727,185.114,92.4,170.787,74.727,170.787z">
														</path>
														<path d="M437.393,170.787c-17.673,0-32,14.327-32,32V352.12c0,17.673,14.327,32,32,32s32-14.327,32-32
															V202.787C469.393,185.114,455.067,170.787,437.393,170.787z">
														</path>
														<path d="M373.393,170.787H138.727c-5.891,0-10.667,4.776-10.667,10.667V352.12
															c-0.005,25.348,17.831,47.197,42.667,52.267v75.733c0,17.673,14.327,32,32,32s32-14.327,32-32v-74.667h42.667v74.667
															c0,17.673,14.327,32,32,32s32-14.327,32-32v-75.733c24.836-5.07,42.672-26.919,42.667-52.267V181.454
															C384.06,175.563,379.284,170.787,373.393,170.787z">
														</path>
														<path d="M333.607,44.323l26.005-25.984c4.237-4.093,4.354-10.845,0.262-15.083
															c-4.093-4.237-10.845-4.354-15.083-0.262c-0.089,0.086-0.176,0.173-0.262,0.262L314.236,33.55
															c-37.102-16.117-79.229-16.117-116.331,0L167.612,3.235c-4.237-4.093-10.99-3.975-15.083,0.262c-3.992,4.134-3.992,10.687,0,14.82
															l25.984,26.005c-31.677,20.96-50.649,56.481-50.453,94.464c0,5.891,4.776,10.667,10.667,10.667h234.667
															 c5.891,0,10.667-4.776,10.667-10.667C384.256,100.804,365.284,65.283,333.607,44.323z">
														</path>
													</g>
													<g>
														<circle style="fill:#FAFAFA;" cx="202.727" cy="96.12" r="10.667"></circle>
														<circle style="fill:#FAFAFA;" cx="309.393" cy="96.12" r="10.667"></circle>
													</g>
												</svg>
												<div class="page-jackpots-img-ikon <?php echo get_field('delete_android'); ?>">
												</div>
											</div>
											<div class="page-games-item-devices">
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="icon-devices <?php echo get_field('delete_apple'); ?>" version="1.1" id="Capa_1" x="0px" y="0px" 
													viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="30" height="30">
													<g>
														<path d="M185.255,512c-76.201-0.439-139.233-155.991-139.233-235.21c0-129.404,97.075-157.734,134.487-157.734   
															c16.86,0,34.863,6.621,50.742,12.48c11.104,4.087,22.588,8.306,28.975,8.306c3.823,0,12.832-3.589,20.786-6.738   
															c16.963-6.753,38.071-15.146,62.651-15.146c0.044,0,0.103,0,0.146,0c18.354,0,74.004,4.028,107.461,54.272l7.837,11.777   
															l-11.279,8.511c-16.113,12.158-45.513,34.336-45.513,78.267c0,52.031,33.296,72.041,49.292,81.665   
															c7.061,4.248,14.37,8.628,14.37,18.208c0,6.255-49.922,140.566-122.417,140.566c-17.739,0-30.278-5.332-41.338-10.034   
															c-11.191-4.761-20.845-8.862-36.797-8.862c-8.086,0-18.311,3.823-29.136,7.881C221.496,505.73,204.752,512,185.753,512H185.255z"/>
														<path d="M351.343,0c1.888,68.076-46.797,115.304-95.425,112.342C247.905,58.015,304.54,0,351.343,0z"/>
													</g>
												</svg>
												<div class="page-jackpots-img-ikon <?php echo get_field('delete_apple'); ?>">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="more-details-card open-card">
							<div class="detail-btn-card">
								<div class="more-detail-ikon-card" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/up-card.svg);"></div>
							</div>
						</div>
						<div class="more-details-card close-card">
							<div class="detail-btn-card">
								<div class="more-detail-ikon-card close" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/up-card.svg);"></div>
							</div>
						</div>
					</div>
					<div class="landing-bonus-text casino">
						<div class="second-text bonus casino">
							<?php echo the_content(); ?>
						</div>
						<div class="more-details-block open-btn">
							<div class="detail-btn">
								<div class="more-detail-ikon" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/down.svg);"></div>
								<span>Mehr details</span>
							</div>
						</div>
						<div class="more-details-block close-btn">
							<div class="detail-btn">
								<div class="more-detail-ikon close" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/down.svg);"></div>
								<span>Ausblenden</span>
							</div>
						</div>
					</div>
					<?php
						$pluses_content = get_field('pluses_content');
						if ($pluses_content) {
							echo '<div class="card-page-jackpots casino">';
								echo '<div class="card-page-title-pluses">';
									echo '<span>Positives</span>';
								echo '</div>';
								echo '<div class="card-page-pluses-content">';
									echo $pluses_content;
								echo '</div>';
							echo '</div>';
						} 
					?>
					<?php
						$minuses_content = get_field('minuses_content');
						if ($minuses_content) {
							echo '<div class="card-page-jackpots casino">';
								echo '<div class="card-page-title-pluses">';
									echo '<span>Negatives</span>';
								echo '</div>';
								echo '<div class="card-page-pluses-content minuses">';
									echo $minuses_content;
								echo '</div>';
							echo '</div>';
						} 
					?>		
					<?php
						$bonus_posts = get_posts(array('post_type'=>'bonuses', 'post_parent'=>$post->ID, 'posts_per_page'=>-1, 'orderby'=>'post_title', 'order'=>'ASC'));
						if($bonus_posts) {
							foreach ($bonus_posts as $post) {
								$card_bonus = get_field('card_bonus', $post->ID);
								$link_brend = get_field('link_brend', $post->ID);
								$hover_text = get_field('hover_text', $post->ID);
								$link_сard_casino = get_field('link_сard_casino', $post->ID);

								echo '<div class="page-bonus-items">';
									echo '<div class="page-bonus-left">';
										echo '<div class="page-bonus-left-list">';
											echo '<a class="page-bonus-list-link" href="'.get_permalink($post->ID).'">';
												echo '<div class="page-bonus-title">';
													echo '<h3 class="bonus-title">'.$post->post_title.'</h3>';
												echo '</div>';
												echo '<div class="page-bonus-info">';
													echo '<span>'.$card_bonus.'</span>';
												echo '</div>';
												$category = get_the_category($post->ID); 
												if ($category) {
													echo '<div class="page-bonus-category-block">';
														echo '<div class="ikon-bonus-category" style="background-image: url('.get_template_directory_uri().'/img/diamond.svg);"></div>';
														echo '<span class="page-bonus-category">'.$category[0]->name.'</span>';
													echo '</div>';
												} 
											echo '</a>';
											$type = get_field('text_type', $post->ID);
											if ($type) {
												echo '<div class="item-page-bonus-advantage">';
													echo '<svg class="bonus-item-ikon" height="20" viewBox="0 0 128 128" width="20" xmlns="http://www.w3.org/2000/svg">';
														echo '<g>';
															echo '<path d="m19.742 67.3a7.7 7.7 0 1 0 7.7 7.7 7.706 7.706 0 0 0 -7.7-7.7zm0 11.893a4.2 4.2 0 1 1 4.2-4.2 4.2 4.2 0 0 1 -4.2 4.197z"/>';
															echo '<path d="m53.01 67.3a7.7 7.7 0 1 0 7.7 7.7 7.706 7.706 0 0 0 -7.7-7.7zm0 11.893a4.2 4.2 0 1 1 4.2-4.2 4.2 4.2 0 0 1 -4.2 4.197z"/>';
															echo '<path d="m36.376 83.932a7.7 7.7 0 1 0 7.7 7.7 7.705 7.705 0 0 0 -7.7-7.7zm0 11.893a4.2 4.2 0 1 1 4.2-4.2 4.2 4.2 0 0 1 -4.2 4.2z"/>';
															echo '<path d="m53.01 100.565a7.7 7.7 0 1 0 7.7 7.7 7.707 7.707 0 0 0 -7.7-7.7zm0 11.894a4.2 4.2 0 1 1 4.2-4.2 4.2 4.2 0 0 1 -4.2 4.2z"/>';
															echo '<path d="m19.742 100.565a7.7 7.7 0 1 0 7.7 7.7 7.707 7.707 0 0 0 -7.7-7.7zm0 11.894a4.2 4.2 0 1 1 4.2-4.2 4.2 4.2 0 0 1 -4.2 4.2z"/>';
															echo '<path d="m53.847 34.829a7.7 7.7 0 1 0 10.514 2.818 7.707 7.707 0 0 0 -10.514-2.818zm5.947 10.3a4.2 4.2 0 1 1 1.536-5.729 4.2 4.2 0 0 1 -1.536 5.73z"/>';
															echo '<path d="m82.41 40.149a7.7 7.7 0 0 0 -3.983 14.87 7.768 7.768 0 0 0 2 .265 7.7 7.7 0 0 0 1.983-15.135zm.107 11.07a4.2 4.2 0 1 1 -2.1-7.834 4.258 4.258 0 0 1 1.093.145 4.2 4.2 0 0 1 1.012 7.689z"/>';
															echo '<path d="m105.133 46.237a7.7 7.7 0 0 0 -3.984 14.87 7.7 7.7 0 0 0 3.984-14.87zm2.062 8.522a4.2 4.2 0 1 1 -4.06-5.285 4.249 4.249 0 0 1 1.092.144 4.2 4.2 0 0 1 2.968 5.141z"/>';
															echo '<path d="m127.228 55.917-30.628-53.041a5.748 5.748 0 0 0 -7.85-2.105l-53.042 30.629a5.75 5.75 0 0 0 -2.1 7.854l9.24 16h-37.097a5.757 5.757 0 0 0 -5.751 5.746v61.25a5.757 5.757 
																0 0 0 5.751 5.75h61.249a5.756 5.756 0 0 0 5.75-5.75v-28.239l52.375-30.239a5.749 5.749 0 0 0 2.1-7.855zm-57.98 66.333a2.253 2.253 0 0 1 -2.248 2.25h-61.249a2.253 2.253 0 0 1 -2.25-2.25v-61.25a2.253 
																2.253 0 0 1 2.25-2.25h61.249a2.253 2.253 0 0 1 2.248 2.25zm55.174-62.876a2.232 2.232 0 0 1 -1.049 1.366l-50.625 29.23v-28.97a5.756 5.756 0 0 0 -5.748-5.747h-20.115l-10.25-17.753a2.249 
																2.249 0 0 1 .823-3.073l53.042-30.627a2.248 2.248 0 0 1 3.073.824l30.627 53.043a2.231 2.231 0 0 1 .222 1.707z"/>';
														echo '</g>';
													echo '</svg>';
													echo '<span class="bonus-item-text">Type</span>';
													echo '<span class="bonus-item-text result">'.$type.'</span>';
												echo '</div>';
											} 
											$min = get_field('text_minimum_deposit', $post->ID);
											if ($min) {
												echo '<div class="item-page-bonus-advantage">';
													echo '<svg class="bonus-item-ikon" width="20" height="20" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
														viewBox="0 0 512.001 512.001" style="enable-background:new 0 0 512.001 512.001;" xml:space="preserve">';
														echo '<g>';
															echo '<g>';
																echo '<path d="M489.502,218.492h-7.496v-22.504v-80c0-26.192-21.309-47.501-47.5-47.501H228.527L89.564,28.783
																		c-0.04-0.011-0.081-0.017-0.121-0.028c-0.041-0.011-0.08-0.027-0.121-0.037c-0.084-0.021-0.167-0.031-0.25-0.049
																		c-0.129-0.027-0.258-0.055-0.387-0.076c-0.117-0.019-0.232-0.031-0.349-0.045c-0.136-0.016-0.271-0.03-0.406-0.038
																		c-0.11-0.006-0.219-0.007-0.329-0.009c-0.14-0.002-0.279-0.003-0.418,0.003c-0.103,0.004-0.206,0.014-0.308,0.022
																		c-0.143,0.012-0.286,0.025-0.427,0.046c-0.096,0.014-0.191,0.032-0.286,0.049c-0.146,0.026-0.29,0.054-0.433,0.089
																		c-0.089,0.022-0.176,0.047-0.264,0.072c-0.146,0.042-0.29,0.085-0.434,0.135c-0.081,0.029-0.161,0.06-0.242,0.092
																		c-0.145,0.056-0.289,0.115-0.43,0.18c-0.075,0.035-0.148,0.073-0.222,0.11c-0.141,0.071-0.28,0.143-0.416,0.224
																		c-0.071,0.041-0.139,0.085-0.209,0.129c-0.134,0.084-0.266,0.17-0.394,0.263c-0.067,0.048-0.132,0.1-0.198,0.151
																		c-0.123,0.095-0.245,0.192-0.362,0.295c-0.066,0.058-0.129,0.119-0.193,0.179c-0.11,0.104-0.219,0.208-0.323,0.318
																		c-0.065,0.069-0.126,0.141-0.189,0.213c-0.095,0.109-0.189,0.219-0.278,0.334c-0.064,0.083-0.124,0.168-0.185,0.253
																		c-0.079,0.111-0.157,0.223-0.229,0.338c-0.062,0.098-0.119,0.2-0.176,0.301c-0.063,0.111-0.126,0.223-0.183,0.338
																		c-0.056,0.112-0.106,0.227-0.157,0.342c-0.05,0.113-0.099,0.226-0.143,0.342c-0.046,0.122-0.086,0.247-0.127,0.373
																		c-0.026,0.081-0.058,0.157-0.082,0.239c-0.012,0.041-0.017,0.081-0.028,0.121c-0.011,0.041-0.027,0.08-0.037,0.121l-8.576,34.312
																		H47.505c-26.139,0-47.411,21.223-47.497,47.343C0.007,115.882,0,115.933,0,115.986v260c0,4.14,3.37,7.5,7.5,7.5
																		c4.14,0,7.5-3.36,7.5-7.5V150.579c8.504,7.996,19.938,12.91,32.505,12.91h387.001c0.009,0,0.017-0.001,0.026-0.001
																		c17.908,0.014,32.474,14.588,32.474,32.501v52.504h-82.512c-0.005,0-0.009,0.001-0.014,0.001c-0.217,0-0.433,0.013-0.648,0.032
																		c-0.239,0.021-0.475,0.055-0.707,0.098c-0.035,0.006-0.069,0.009-0.104,0.016c-0.196,0.039-0.388,0.091-0.579,0.145
																		c-0.042,0.012-0.085,0.02-0.126,0.033c-0.17,0.052-0.335,0.114-0.5,0.177c-0.063,0.024-0.127,0.044-0.19,0.07
																		c-0.138,0.057-0.271,0.124-0.404,0.189c-0.088,0.042-0.177,0.081-0.263,0.126c-0.104,0.055-0.202,0.118-0.302,0.178
																		c-0.111,0.066-0.224,0.13-0.332,0.202c-0.073,0.048-0.14,0.103-0.21,0.154c-0.128,0.092-0.257,0.183-0.379,0.284
																		c-0.053,0.044-0.102,0.093-0.153,0.138c-0.131,0.114-0.262,0.227-0.386,0.351c-0.073,0.073-0.139,0.153-0.208,0.229
																		c-0.097,0.105-0.197,0.208-0.289,0.32c-0.155,0.189-0.3,0.385-0.436,0.588c-0.003,0.003-0.006,0.007-0.008,0.011l-39.998,60.001
																		c-0.279,0.418-0.515,0.861-0.702,1.322c-0.071,0.172-0.128,0.347-0.185,0.521c-0.017,0.053-0.039,0.104-0.055,0.157
																		c-0.056,0.185-0.099,0.372-0.14,0.558c-0.011,0.049-0.025,0.097-0.035,0.146c-0.033,0.168-0.055,0.337-0.076,0.506
																		c-0.009,0.072-0.023,0.144-0.03,0.217c-0.014,0.139-0.017,0.277-0.022,0.416c-0.005,0.106-0.014,0.212-0.014,0.319
																		c0,0.103,0.009,0.206,0.013,0.309c0.005,0.142,0.009,0.285,0.023,0.427c0.007,0.069,0.02,0.138,0.029,0.207
																		c0.022,0.172,0.044,0.344,0.078,0.515c0.009,0.047,0.023,0.093,0.034,0.14c0.041,0.188,0.085,0.376,0.141,0.563
																		c0.016,0.053,0.038,0.104,0.055,0.158c0.057,0.174,0.114,0.349,0.185,0.521c0.188,0.46,0.424,0.904,0.704,1.323l39.997,59.992
																		c0.002,0.003,0.004,0.005,0.006,0.008c0.161,0.239,0.337,0.467,0.523,0.686c0.061,0.072,0.126,0.139,0.189,0.207
																		c0.127,0.139,0.259,0.273,0.396,0.402c0.081,0.076,0.161,0.15,0.243,0.221c0.146,0.125,0.297,0.242,0.452,0.356
																		c0.07,0.051,0.137,0.107,0.208,0.155c0.225,0.153,0.458,0.294,0.699,0.422c0.061,0.032,0.124,0.059,0.185,0.089
																		c0.192,0.096,0.388,0.185,0.589,0.264c0.078,0.031,0.156,0.059,0.235,0.087c0.191,0.068,0.385,0.128,0.583,0.181
																		c0.081,0.021,0.161,0.043,0.243,0.063c0.203,0.047,0.409,0.083,0.618,0.113c0.076,0.011,0.151,0.026,0.227,0.035
																		c0.258,0.029,0.52,0.045,0.786,0.047c0.021,0,0.042,0.004,0.064,0.004c0.004,0,0.009-0.001,0.014-0.001h82.491V436
																		c0,17.922-14.58,32.502-32.5,32.502h-387c-17.92,0-32.5-14.58-32.5-32.502c0-0.039-0.005-0.077-0.006-0.116V405.99
																		c0-4.13-3.36-7.5-7.5-7.5c-4.13,0-7.5,3.37-7.5,7.5V436c0,0.078,0.009,0.154,0.012,0.231c0.125,26.086,21.38,47.271,47.494,47.271
																		h387c26.189,0,47.496-21.305,47.5-47.494c0-0.001,0-0.002,0-0.004v-52.512h7.496c12.404,0,22.496-10.092,22.496-22.496V240.988
																		C511.998,228.584,501.906,218.492,489.502,218.492z M92.9,45.336l132.339,37.813c0.006,0.002,0.013,0.003,0.019,0.005
																		l88.696,25.342H77.114L92.9,45.336z M467.005,161.394c-8.503-7.994-19.935-12.907-32.499-12.907c-0.013,0-0.025,0.002-0.039,0.002
																		H47.505c-17.921,0-32.501-14.58-32.501-32.501c0-17.921,14.58-32.501,32.501-32.501h20.398l-6.25,25.009H47.507
																		c-4.142,0-7.5,3.358-7.5,7.5c0,4.142,3.358,7.5,7.5,7.5h19.976c0.01,0,0.021,0.002,0.032,0.002c0.008,0,0.016-0.002,0.023-0.002
																		h299.941c0.01,0,0.019,0.002,0.028,0.002c0.008,0,0.016-0.002,0.024-0.002h56.966c4.142,0,7.5-3.358,7.5-7.5
																		c0-4.142-3.358-7.5-7.5-7.5h-55.943l-87.529-25.009h153.48c17.92,0,32.5,14.58,32.5,32.501V161.394z M496.998,360.992
																		L496.998,360.992c0,4.133-3.363,7.496-7.496,7.496H388.508l-34.999-52.494l34.999-52.502h100.994c0.105,0,0.207-0.012,0.311-0.016
																		c2.516-0.035,4.932-0.483,7.185-1.281V360.992z M489.502,248.484c-0.052,0-0.103,0.007-0.155,0.008h-7.341v-15h7.496
																		c4.133,0,7.496,3.363,7.496,7.496S493.635,248.484,489.502,248.484z"/>';
															echo '</g>';
														echo '</g>';
														echo '<g>';
															echo '<g>';
																echo '<path d="M414.499,288.493c-15.164,0-27.5,12.337-27.5,27.501s12.336,27.5,27.5,27.5s27.5-12.336,27.5-27.5
																	C441.999,300.83,429.663,288.493,414.499,288.493z M414.499,328.494c-6.893,0-12.5-5.607-12.5-12.5s5.607-12.501,12.5-12.501
																	s12.5,5.608,12.5,12.501S421.392,328.494,414.499,328.494z"/>';
															echo '</g>';
														echo '</g>';
													echo '</svg>';
													echo '<span class="bonus-item-text">Minimum Deposit</span>';
													echo '<span class="bonus-item-text result">'.$min.'</span>';
												echo '</div>';
											} 
											$require = get_field('wagering_requirements', $post->ID);
											if ($require) {
												echo '<div class="item-page-bonus-advantage">';
													echo '<svg id="Layer_3" class="bonus-item-ikon" enable-background="new 0 0 64 64" height="20" viewBox="0 0 64 64" width="20" xmlns="http://www.w3.org/2000/svg">';
														echo '<g>';
															echo '<path d="m28 49c-5.963 0-12 1.718-12 5v4c0 3.282 6.037 5 12 5s12-1.718 12-5v-4c0-3.282-6.037-5-12-5zm0 12c-6.012 0-10-1.806-10-3v-1.119c2.265 1.396 6.143 2.119 10 2.119s7.735-.723 
																10-2.119v1.119c0 1.194-3.988 3-10 3zm0-4c-6.012 0-10-1.806-10-3s3.988-3 10-3 10 1.806 10 3-3.988 3-10 3z"/>';
															echo '<path d="m51 41c-5.963 0-12 1.718-12 5v4c0 3.282 6.037 5 12 5s12-1.718 12-5v-4c0-3.282-6.037-5-12-5zm0 2c6.012 0 10 1.806 10 3s-3.988 3-10 3-10-1.806-10-3 3.988-3 10-3zm0 10c-6.012 
																0-10-1.806-10-3v-1.119c2.265 1.396 6.143 2.119 10 2.119s7.735-.723 10-2.119v1.119c0 1.194-3.988 3-10 3z"/>';
															echo '<path d="m25 45v-30c0-3.282-6.037-5-12-5s-12 1.718-12 5v30c0 3.282 6.037 5 12 5s12-1.718 12-5zm-12-33c6.012 0 10 1.806 10 3s-3.988 3-10 3-10-1.806-10-3 3.988-3 10-3zm-10 5.881c2.265 
																1.396 6.143 2.119 10 2.119s7.735-.723 10-2.119v3.119c0 1.194-3.988 3-10 3s-10-1.806-10-3zm0 6c2.265 1.396 6.143 2.119 10 2.119s7.735-.723 10-2.119v3.119c0 1.194-3.988 3-10 3s-10-1.806-10-3zm0 
																6c2.265 1.396 6.143 2.119 10 2.119s7.735-.723 10-2.119v3.119c0 1.194-3.988 3-10 3s-10-1.806-10-3zm0 6c2.265 1.396 6.143 2.119 10 2.119s7.735-.723 10-2.119v3.119c0 1.194-3.988 3-10 
																3s-10-1.806-10-3zm10 12.119c-6.012 0-10-1.806-10-3v-3.119c2.265 1.396 6.143 2.119 10 2.119s7.735-.723 10-2.119v3.119c0 1.194-3.988 3-10 3z"/>';
															echo '<path d="m39 41c5.963 0 12-1.718 12-5v-30c0-3.282-6.037-5-12-5s-12 1.718-12 5v30c0 3.282 6.037 5 12 5zm0-2c-6.012 0-10-1.806-10-3v-3.119c2.265 1.396 6.143 2.119 10 2.119s7.735-.723 
																10-2.119v3.119c0 1.194-3.988 3-10 3zm0-36c6.012 0 10 1.806 10 3s-3.988 3-10 3-10-1.806-10-3 3.988-3 10-3zm-10 5.881c2.265 1.396 6.143 2.119 10 2.119s7.735-.723 10-2.119v3.119c0 1.194-3.988 
																3-10 3s-10-1.806-10-3zm0 6c2.265 1.396 6.143 2.119 10 2.119s7.735-.723 10-2.119v3.119c0 1.194-3.988 3-10 3s-10-1.806-10-3zm0 6c2.265 1.396 6.143 2.119 10 2.119s7.735-.723 10-2.119v3.119c0 1.194-3.988 
																3-10 3s-10-1.806-10-3zm0 6c2.265 1.396 6.143 2.119 10 2.119s7.735-.723 10-2.119v3.119c0 1.194-3.988 3-10 3s-10-1.806-10-3z"/>';
														echo '</g>';
													echo '</svg>';
													echo '<span class="bonus-item-text">Wagering requirements</span>';
													echo '<span class="bonus-item-text result">'.$require.'</span>';
												echo '</div>';
											} 
											$max = get_field('maximum_bonus_amount', $post->ID);
											if ($max) {
												echo '<div class="item-page-bonus-advantage">';
													echo '<svg id="Layer_3" class="bonus-item-ikon" enable-background="new 0 0 64 64" height="20" viewBox="0 0 64 64" width="20" xmlns="http://www.w3.org/2000/svg">';
														echo '<g>';
															echo '<path d="m18 31c-6.065 0-11 4.935-11 11s4.935 11 11 11 11-4.935 11-11-4.935-11-11-11zm0 20c-4.963 0-9-4.037-9-9s4.037-9 9-9 9 4.037 9 9-4.037 9-9 9z"/>';
															echo '<path d="m19 36.051v-2.051h-2v2.051c-1.692.245-3 1.691-3 3.449 0 1.93 1.57 3.5 3.5 3.5h1c.827 0 1.5.673 1.5 1.5s-.673 1.5-1.5 1.5h-1c-.827 0-1.5-.673-1.5-1.5h-2c0 
																1.758 1.308 3.204 3 3.449v2.051h2v-2.051c1.692-.245 3-1.691 3-3.449 0-1.93-1.57-3.5-3.5-3.5h-1c-.827 0-1.5-.673-1.5-1.5s.673-1.5 1.5-1.5h1c.827 0 1.5.673 1.5 1.5v.5h2v-.5c0-1.758-1.308-3.204-3-3.449z"/>';
															echo '<path d="m63 23.003c.001-.267-.104-.521-.293-.71l-18-18c-.391-.391-1.023-.391-1.414 0l-4.293 4.293v-6.586c0-.553-.447-1-1-1h-26c-.553 0-1 .447-1 1v19h-9c-.553 0-1 .447-1 1v40c0 
																.553.447 1 1 1h42c.081 0 .162-.01.242-.03l4-1c.446-.112.758-.511.758-.97v-13h1c.553 0 1-.447 1-1v-10c0-.468-.327-.842-.76-.952l12.463-12.337c.19-.188.296-.442.297-.708zm-50-20.003h24v18h-2.051c-.504-5.046-4.773-9-9.949-9s-9.446 
																3.954-9.949 9h-2.051zm19.931 18h-15.862c.495-3.94 3.859-7 7.931-7s7.436 3.06 7.931 7zm-29.931 2h40v13h-4c-3.309 0-6 2.691-6 6s2.691 6 6 6h4v13h-40zm44 13h-2v-12.719l2 .5zm0 24.219-2 
																.5v-12.719h2zm2-14.219h-10c-2.206 0-4-1.794-4-4s1.794-4 4-4h10zm0-11.538v-11.462c0-.459-.312-.858-.758-.97l-4-1c-.08-.021-.161-.005-.242-.005v-.025h-5v-9.586l5-5 16.582 16.582z"/>';
															echo '<path d="m17 6h5v-2h-6c-.553 0-1 .447-1 1v6h2z"/>';
															echo '<path d="m36 42c0 1.654 1.346 3 3 3s3-1.346 3-3-1.346-3-3-3-3 1.346-3 3zm4 0c0 .552-.448 1-1 1s-1-.448-1-1 .448-1 1-1 1 .448 1 1z"/>';
														echo '</g>';
													echo '</svg>';
													echo '<span class="bonus-item-text">Maximum Bonus Amount</span>';
													echo '<span class="bonus-item-text result">'.$max.'</span>';
												echo '</div>';
											} 
											$val = get_field('bonus_value', $post->ID);
											if ($val) {
												echo '<div class="item-page-bonus-advantage">';
													echo '<svg id="Capa_1" class="bonus-item-ikon" enable-background="new 0 0 510.179 510.179" height="20" viewBox="0 0 510.179 510.179" width="20" xmlns="http://www.w3.org/2000/svg">';
														echo '<g>';
															echo '<g>';
																echo '<path d="m251.264 295.409c-3.457-2.26-8.091-1.292-10.351 2.165-2.261 3.456-1.292 8.09 2.164 10.351 9.378 6.134 15.794 7.983 24.047 8.461v7.828c0 4.13 3.348 7.478 7.478 7.478s7.478-3.347 
																	7.478-7.478v-8.427c16.489-3.282 26.119-16.901 28.258-29.622 2.756-16.396-5.82-30.651-21.847-36.317-2.107-.745-4.261-1.525-6.411-2.337v-34.51c5.345 1.317 8.527 4.016 8.81 4.264 3.038 2.751 
																	7.731 2.543 10.515-.474 2.8-3.036 2.61-7.767-.427-10.566-.418-.386-7.424-6.7-18.898-8.456v-6.989c0-4.13-3.348-7.478-7.478-7.478s-7.478 3.347-7.478 7.478v7.561c-1.062.236-2.138.506-3.239.837-10.56 
																	3.181-18.451 12.217-20.593 23.581-1.954 10.367 1.369 20.366 8.675 26.096 3.844 3.015 8.622 5.777 15.157 8.69v43.862c-5.586-.429-9.49-1.832-15.86-5.998zm9.933-58.323c-2.894-2.27-4.124-6.699-3.207-11.557.814-4.316 
																	3.638-9.499 9.135-11.657v27.022c-2.228-1.218-4.244-2.486-5.928-3.808zm22.308 26.862c13.49 4.768 12.659 16.312 12.083 19.737-1.116 6.641-5.716 13.677-13.509 16.544v-36.791c.476.17.939.338 1.426.51z"/>';
																echo '<path d="m504.181 385.763c-9.93-15.377-29.268-21.318-46.097-14.212l-20.094 6.636v-10.102c0-14.184-11.539-25.723-25.723-25.723-3.369 
																	0-6.11-2.741-6.11-6.11v-136.914c0-27.627-14.28-52.972-38.199-67.798l-44.551-27.616v-24.344c7.598-5.281 23.625-19.445 32.789-49.492 2.031-6.661.823-13.687-3.316-19.277-4.124-5.567-10.461-8.761-17.39-8.761h-120.46c-6.929 
																	0-13.266 3.194-17.39 8.761-4.139 5.59-5.347 12.616-3.316 19.277 9.163 30.047 25.191 44.211 32.789 49.492v24.344l-44.551 27.616c-23.919 14.826-38.199 40.171-38.199 67.798v33.958c0 4.13 3.347 7.478 7.478 7.478s7.478-3.348 
																	7.478-7.478v-33.958c0-22.414 11.635-43.006 31.123-55.086l46.192-28.634h77.254l46.192 28.634c19.488 12.079 31.123 32.672 31.123 55.086v136.916c0 11.616 9.449 21.065 21.065 21.065 5.937 0 10.767 4.83 10.767 
																	10.767v15.041l-77.545 25.61c.244-1.025.439-2.072.581-3.138 1.106-8.295-1.085-16.523-6.167-23.17-5.034-6.582-12.307-10.833-20.502-11.989 0 0-123.439-24.396-129.046-24.02-14.619.937-26.849 9.796-37.64 17.612-1.286.932-2.549 
																	1.847-3.791 2.727-7.033 4.991-14.099 7.921-21.438 9.248v-7.921c0-5.937 4.831-10.767 10.767-10.767 11.616 0 21.065-9.449 21.065-21.065v-68.449c0-4.13-3.347-7.478-7.478-7.478s-7.478 3.348-7.478 7.478v68.449c0 3.369-2.741 
																	6.11-6.111 6.11-14.183 0-25.722 11.539-25.722 25.723v8.575c-8.055-.618-16.568-2.624-25.809-5.535v-5.801c0-12.591-10.243-22.834-22.834-22.834h-41.052c-12.591-.001-22.835 10.242-22.835 22.833v119.97c0 12.591 10.244 22.834 
																	22.835 22.834h41.052c12.591 0 22.834-10.243 22.834-22.834v-9.496l53.26-3.11c.066-.004.133-.009.2-.015 11.596-.989 23.499.612 34.422 4.636 56.983 20.989 57.694 21.25 57.694 21.25 11.695 4.308 22.988 6.043 33.981 6.043 
																	23.373 0 45.373-7.852 66.869-15.525 4.892-1.746 9.949-3.551 14.937-5.232 19.764-6.658 39.809-12.687 58.647-18.292 3.958-1.177 6.213-5.342 5.035-9.3-1.177-3.958-5.338-6.208-9.3-5.035-18.968 5.643-39.16 11.716-59.158 
																	18.453-5.115 1.723-10.236 3.552-15.189 5.319-30.437 10.864-59.184 21.124-90.659 9.532-.328-.121-57.69-21.25-57.69-21.25-12.935-4.763-27.031-6.67-40.763-5.511l-52.288 3.053v-74.033c21.92 6.477 46.426 9.51 70.859-7.828 
																	1.279-.907 2.581-1.851 3.907-2.812 9.149-6.627 19.52-14.138 29.824-14.799 4.728-.315 32.156 5.328 42.483 7.447 3.008.616 82.931 16.365 82.931 16.365.151.029.304.054.456.075 4.335.577 8.185 2.808 10.841 6.282s3.801 7.774 
																	3.223 12.109c-1.193 8.947-9.436 15.26-18.391 14.063-.066-.009-.132-.017-.2-.023l-66.044-7.005c-4.097-.436-7.789 2.54-8.225 6.647s2.54 7.789 6.647 8.225l65.953 6.996c4.514.588 8.93.169 13.031-1.068.417-.062 139.058-45.802 
																	139.058-45.802.212-.07.422-.15.627-.239 10.166-4.402 21.907-.844 27.915 8.462 3.486 5.398 4.505 12.047 2.794 18.242-1.671 6.053-5.801 11.142-11.366 14.025-13.726 4.735-28.555 9.479-47.989 15.355-3.953 1.195-6.189 5.368-4.993 
																	9.322.977 3.232 3.945 5.315 7.155 5.315.717 0 1.446-.104 2.167-.322 19.851-6.002 34.971-10.843 49.021-15.698.297-.102.587-.224.868-.363 9.582-4.73 16.709-13.352 19.553-23.653 2.848-10.303 
																	1.154-21.36-4.643-30.337zm-195.729-285.1h-66.384v-17.754h66.384zm5.462-32.71h-77.305c-1.833-1.178-5.392-3.752-9.501-8.219-5.532-6.014-13.23-16.797-18.479-34.009-.635-2.081-.259-4.273 1.03-6.014 1.274-1.719 3.231-2.706 
																	5.371-2.706h120.46c2.14 0 4.097.986 5.371 2.706 1.289 1.741 1.665 3.934 1.03 6.014-5.249 17.212-12.947 27.994-18.479 34.009-4.121 4.479-7.689 7.056-9.498 8.219zm-242.149 417.342c0 4.344-3.534 7.878-7.878 7.878h-41.052c-4.345 
																	0-7.879-3.534-7.879-7.878v-119.97c0-4.344 3.534-7.878 7.879-7.878h41.052c4.344 0 7.878 3.534 7.878 7.878z"/>';
															echo '</g>';
														echo '</g>';
													echo '</svg>';
													echo '<span class="bonus-item-text">Bonus Value</span>';
													echo '<span class="bonus-item-text result">'.$val.'</span>';
												echo '</div>';
											} 
										echo '</div>';
									echo '</div>';
									echo '<div class="page-bonus-right">';
										echo '<div class="page-bonus-right-list">';
											echo '<a href="'.get_permalink($post->ID).'">';
												echo '<div class="page-bonus-image">';
													echo get_the_post_thumbnail($post->ID);
												echo '</div>';
											echo '</a>';
											echo '<div class="page-bonus-button">';
												echo '<a class="flex-btn bonus-page" href="'.$link_brend.'">';
													echo '<span>Holen Sie sich diesen Bonus</span>';
													echo '<div class="btn-ikon-bonus" style="background-image: url('.get_template_directory_uri().'/img/right-arrow.svg);"></div>';
												echo '</a>';
											echo '</div>';
											echo '<div class="tc-apply">';
												echo '<div class="tc-apply-title">';
													echo '<div class="tc-apply-ikon" style="background-image: url('.get_template_directory_uri().'/img/question.svg);"></div>';
													echo '<span class="tc-apply-text">T&C’s Apply</span>';
												echo '</div>';
												echo '<div id="tcapply" class="page-tcapply">'.$hover_text.'</div>';
											echo '</div>';
											echo '<div class="page-bonus-casino-link">';
												echo '<a class="link-overview page bonus" href="'.$link_сard_casino.'">';
													echo '<span>Casino-Bewertung lesen</span>';
													echo '<img src="'.get_template_directory_uri().'/img/view.svg" class="overview-ikon page bonus img-svg">';
												echo '</a>';
											echo '</div>';
										echo '</div>';
									echo '</div>';
								echo '</div>';
							}
							wp_reset_postdata();
						}
					?>
					<div class="card-page-jackpots casino">
						<div class="card-page-games-title casino">
							<h3>Verfügbare Spiele</h3>
						</div>
						<div class="card-page-games-content casino">
							<div class="page-games-item brend">
								<svg class="page-games-ikon-casino <?php echo get_field('delete_blackjack'); ?>" id="Layer_5" enable-background="new 0 0 64 64" height="64" viewBox="0 0 64 64" width="64" xmlns="http://www.w3.org/2000/svg">
									<g>
										<path d="m33.615 39.799-3.615 3.615-7.465-7.465c-.99-.99-1.535-2.306-1.535-3.706 0-2.891 2.352-5.243 5.242-5.243 1.401 0 2.718.545 3.708 1.536l.05.05.051-.051c.808-.808 1.837-1.3 2.949-1.461v-10.074h-15c-.552 0-1 .449-1 1v19.363c5.724 1.36 10 6.503 10 12.637 0 1.034-.134 2.035-.363 3h15.363c.552 0 1-.448 1-1v-11h-7c-.977 0-1.837-.476-2.385-1.201zm-14.615-20.799h6v2h-4v4h-2zm20 26h2v6h-6v-2h4z"></path>
										<path d="m16 49h-1v-1c0-.552-.448-1-1-1s-1 .448-1 1v1h-1c-.552 0-1 .448-1 1s.448 1 1 1 1-.448 1-1h2c0 .552.448 1 1 1s1-.448 1-1-.448-1-1-1z"></path>
										<path d="m6.966 58.448c1.667 1.391 3.751 2.294 6.034 2.501v-2.008c-1.733-.193-3.316-.88-4.611-1.916z"></path>
										<path d="m54.75 15-1.75-2.333-1.75 2.333 1.75 2.333z"></path>
										<path d="m15 58.941v2.008c2.283-.207 4.366-1.111 6.034-2.501l-1.423-1.423c-1.295 1.036-2.878 1.723-4.611 1.916z"></path>
										<path d="m21 50c0-3.859-3.141-7-7-7s-7 3.141-7 7 3.141 7 7 7 7-3.141 7-7zm-5 3c-.352 0-.686-.067-1-.179v2.179h-2v-2.179c-.314.112-.648.179-1 .179-1.654 0-3-1.346-3-3 
											0-1.352.898-2.497 2.129-2.871.374-1.231 1.519-2.129 2.871-2.129s2.497.898 2.871 2.129c1.231.374 2.129 1.519 2.129 2.871 0 1.654-1.346 3-3 3z"></path>
										<path d="m21.025 44.389c1.036 1.295 1.723 2.878 1.916 4.611h2.008c-.207-2.283-1.111-4.366-2.501-6.034z"></path>
										<path d="m21.025 55.611 1.423 1.423c1.391-1.667 2.294-3.751 2.501-6.034h-2.008c-.193 1.733-.88 3.316-1.916 4.611z"></path>
										<path d="m28.535 29.95c-.612-.613-1.426-.95-2.293-.95-1.788 0-3.242 1.455-3.242 3.243 0 .854.346 1.689.949 2.292l6.051 6.051 3-3v-8.487c-.576.137-1.106.422-1.534.85l-1.466 1.465z"></path>
										<path d="m21.034 41.552c-1.667-1.391-3.751-2.294-6.034-2.501v2.008c1.733.193 3.316.88 4.611 1.916z"></path>
										<path d="m54.75 27-1.75-2.333-1.75 2.333 1.75 2.333z"></path>
										<path d="m13 41.059v-2.008c-2.283.207-4.366 1.111-6.034 2.501l1.423 1.423c1.295-1.036 2.878-1.723 4.611-1.916z"></path>
										<path d="m60 3h-24c-.552 0-1 .449-1 1v34c0 .552.448 1 1 1h24c.552 0 1-.448 1-1v-34c0-.551-.448-1-1-1zm-7 6.333 4.25 5.667-4.25 5.667-4.25-5.667zm-16-4.333h6v2h-4v4h-2zm6 
											27.667-4.25-5.667 4.25-5.667 4.25 5.667zm0-12-4.25-5.667 4.25-5.667 4.25 5.667zm10 .666 4.25 5.667-4.25 5.667-4.25-5.667zm6 15.667h-6v-2h4v-4h2z"></path>
										<path d="m6.975 44.389-1.423-1.423c-1.391 1.668-2.294 3.751-2.501 6.034h2.008c.193-1.733.88-3.316 1.916-4.611z"></path>
										<path d="m41.25 27 1.75 2.333 1.75-2.333-1.75-2.333z"></path>
										<path d="m5.059 51h-2.008c.207 2.283 1.111 4.366 2.501 6.034l1.423-1.423c-1.036-1.295-1.723-2.878-1.916-4.611z"></path>
										<path d="m41.25 15 1.75 2.333 1.75-2.333-1.75-2.333z"></path>
									</g>
								</svg>
								<span class="page-games-text casino <?php echo get_field('delete_blackjack'); ?>">Blackjack</span>
							</div>
							<div class="page-games-item brend">
								<svg class="page-games-ikon-casino <?php echo get_field('delete_slots'); ?>" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="64" height="64" 
									viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
									<g>
										<g>
											<path d="M130,452c-5.52,0-10,4.48-10,10c0,5.52,4.48,10,10,10s10-4.48,10-10C140,456.48,135.52,452,130,452z"></path>
										</g>
									</g>
									<g>
										<g>
											<path d="M98.112,270.153C96.233,267.545,93.214,266,90,266H50c-5.523,0-10,4.478-10,10c0,5.522,4.477,10,10,10h26.126
														l-15.613,46.838c-1.747,5.239,1.085,10.902,6.325,12.649c1.049,0.35,2.115,0.516,3.164,0.516c4.187,0,8.089-2.65,9.485-6.841
														l20-60C100.504,276.113,99.992,272.761,98.112,270.153z"></path></g></g><g><g><path d="M218.112,270.153C216.233,267.545,213.214,266,210,266h-40c-5.523,0-10,4.478-10,10c0,5.522,4.477,10,10,10h26.126
														l-15.613,46.838c-1.747,5.239,1.085,10.902,6.325,12.649c1.049,0.35,2.115,0.516,3.164,0.516c4.187,0,8.089-2.65,9.485-6.841
														l20-60C220.504,276.113,219.992,272.761,218.112,270.153z"></path></g></g><g><g><path d="M338.112,270.153C336.233,267.545,333.214,266,330,266h-40c-5.523,0-10,4.478-10,10c0,5.522,4.477,10,10,10h26.126
														l-15.613,46.838c-1.747,5.239,1.085,10.902,6.325,12.649c1.049,0.35,2.115,0.516,3.164,0.516c4.187,0,8.089-2.65,9.485-6.841
														l20-60C340.503,276.113,339.992,272.761,338.112,270.153z"></path></g></g><g><g><path d="M250,452h-80c-5.523,0-10,4.478-10,10c0,5.522,4.477,10,10,10h80c5.523,0,10-4.478,10-10C260,456.478,255.523,452,250,452
											z"></path></g></g><g><g><path d="M462,166c-27.57,0-50,22.43-50,50c0,15.78,7.543,30.604,20,39.98V369h-52V233v-43C380,85.233,294.766,0,190,0
														S0,85.233,0,190v43v249c0,16.542,13.458,30,30,30h60h200h60c16.542,0,30-13.458,30-30v-30h62c27.57,0,50-22.43,50-50V255.98
														c12.457-9.376,20-24.2,20-39.98C512,188.43,489.57,166,462,166z M20,243h100v126H20V243z M280,492H100v-60h180V492z M360,442v40
														c0,5.514-4.486,10-10,10h-50v-70c0-5.522-4.477-10-10-10H90c-5.523,0-10,4.478-10,10v70H30c-5.514,0-10-4.486-10-10v-93h110h120
														h110V442z M140,369V243h100v126H140z M360,369H260V243h100V369z M360,223H20v-33C20,96.262,96.262,20,190,20s170,76.262,170,170
														V223z M432,432h-52v-43h52V432z M472,402c0,13.036-8.361,24.152-20,28.28V379v-73h20V402z M472,286h-20v-21.017
														c3.28,0.669,6.63,1.017,10,1.017s6.72-0.348,10-1.017V286z M477.001,241.989C472.455,244.613,467.268,246,462,246
														s-10.455-1.387-15.001-4.011C437.747,236.632,432,226.674,432,216c0-16.542,13.458-30,30-30s30,13.458,30,30
														C492,226.678,486.249,236.639,477.001,241.989z"></path></g></g><g><g><path d="M190,40c-82.71,0-150,67.29-150,150c0,5.522,4.477,10,10,10h100h180c5.523,0,10-4.478,10-10C340,107.29,272.71,40,190,40z
														M150,180H60.381C65.504,112.972,121.682,60,190,60s124.496,52.973,129.619,120H150z"></path></g></g><g><g> <path d="M190,80c-5.523,0-10,4.478-10,10v40c0,5.522,4.477,10,10,10s10-4.478,10-10V90C200,84.478,195.523,80,190,80z"></path></g></g><g><g><path d="M154.641,140.499l-28.28-28.28c-3.905-3.903-10.237-3.904-14.142,0c-3.905,3.905-3.906,10.237,0,14.143l28.28,28.28
														c1.953,1.952,4.512,2.929,7.071,2.929s5.119-0.977,7.071-2.929C158.546,150.737,158.547,144.405,154.641,140.499z"></path></g></g><g><g><path d="M267.781,112.218c-3.905-3.904-10.237-3.904-14.142,0l-28.28,28.28c-3.905,3.905-3.905,10.237,0,14.143
														c1.953,1.953,4.512,2.929,7.071,2.929c2.559,0,5.119-0.977,7.071-2.929l28.28-28.28
														C271.686,122.456,271.686,116.124,267.781,112.218z"></path></g></g> 
								</svg>
								<span class="page-games-text casino <?php echo get_field('delete_slots'); ?>">Slots</span>
							</div>
							<div class="page-games-item brend">
								<svg class="page-games-ikon-casino <?php echo get_field('delete_bingo'); ?>" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="64" height="64" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><g><g><path d="M276,106c-5.52,0-10,4.48-10,10s4.48,10,10,10c5.52,0,10-4.48,10-10S281.52,106,276,106z"></path></g></g><g><g><path d="M270,180c-5.52,0-10,4.48-10,10s4.48,10,10,10c5.52,0,10-4.48,10-10S275.52,180,270,180z"></path></g></g><g><g><path d="M110,100c-5.52,0-10,4.48-10,10s4.48,10,10,10s10-4.48,10-10S115.52,100,110,100z"></path></g></g><g><g><path d="M110,180c-5.52,0-10,4.48-10,10s4.48,10,10,10s10-4.48,10-10S115.52,180,110,180z"></path></g></g><g><g><path d="M110,340c-5.52,0-10,4.48-10,10c0,5.52,4.48,10,10,10s10-4.48,10-10C120,344.48,115.52,340,110,340z"></path></g></g><g><g><path d="M442,412h-10v-30c0-5.523-4.477-10-10-10s-10,4.477-10,10v30h-33.82l32.764-65.528c2.47-4.94,0.468-10.947-4.472-13.417
														c-4.939-2.47-10.947-0.468-13.417,4.472l-40,80c-1.55,3.1-1.384,6.781,0.438,9.729c1.822,2.948,5.041,4.743,8.506,4.743h50v30
														c0,5.523,4.477,10,10,10s10-4.477,10-10v-30h10c5.523,0,10-4.477,10-10S447.523,412,442,412z"></path></g></g><g><g><path d="M402,292c-7.432,0-14.79,0.742-22,2.205V30c0-16.542-13.458-30-30-30H30C13.458,0,0,13.458,0,30v400
													c0,16.542,13.458,30,30,30h278.531c20.015,32.22,55.276,52,93.469,52c60.654,0,110-49.346,110-110S462.654,292,402,292z
														M300,360.799c-2.516,6.22-4.452,12.645-5.781,19.201H240v-60h60V360.799z M300,300h-60v-60h60V300z M300,220h-60v-60h60V220z
														M70,140c-5.523,0-10,4.477-10,10v240c0,5.523,4.477,10,10,10h222.03c-0.012,0.667-0.03,1.334-0.03,2
													c0,12.992,2.322,25.887,6.768,38H30c-5.514,0-10-4.486-10-10V30c0-5.514,4.486-10,10-10h320c5.514,0,10,4.486,10,10v270.309
													c-15.39,6.359-29.037,16.103-40,28.362V150c0-5.523-4.477-10-10-10H70z M160,300v-60h60v60H160z M220,320v60h-60v-60H220z
														M160,220v-60h60v60H160z M80,300v-60h60v60H80z M140,320v60H80v-60H140z M80,220v-60h60v60H80z M402,492
													c-54.147,0-95.773-47.325-89.359-100.75c3.959-33.591,27.092-63.283,60.614-74.571c9.241-3.105,18.913-4.68,28.745-4.68
													c49.626,0,90,40.374,90,90C492,451.625,451.626,492,402,492z"></path></g></g><g><g><path d="M310,60H70c-5.523,0-10,4.477-10,10s4.477,10,10,10h240c5.523,0,10-4.477,10-10S315.523,60,310,60z"></path></g></g><g><g><path d="M230,100h-80c-5.523,0-10,4.477-10,10s4.477,10,10,10h80c5.523,0,10-4.477,10-10S235.523,100,230,100z"></path></g></g>
								</svg>
								<span class="page-games-text casino <?php echo get_field('delete_bingo'); ?>">Bingo</span>
							</div>
							<div class="page-games-item brend">
								<svg class="page-games-ikon-casino <?php echo get_field('delete_roulette'); ?>" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="64" height="64" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><g><g><path d="M326,126c-5.52,0-10,4.48-10,10s4.48,10,10,10c5.52,0,10-4.48,10-10S331.52,126,326,126z"></path></g></g><g><g><path d="M256,0C117.577,0,0,118.261,0,256c0,138.227,118.062,256,256,256c91.709,0,174.606-52.029,219.907-127.578
														C499.519,345.035,512,300.628,512,256C512,117.629,393.793,0,256,0z M491.765,246.001h-43.063V246
														c-1.475-27.167-8.937-53.906-21.863-78.35l36.792-21.245C480.575,177.491,490.199,211.563,491.765,246.001z M453.319,129.263
														l-36.722,21.205c-14.524-21.754-33.312-40.542-55.065-55.065l21.205-36.722C410.757,77.114,434.887,101.243,453.319,129.263z
															M266,20.235c34.439,1.566,68.512,11.19,99.596,28.134l-21.245,36.793C319.907,72.235,293.168,64.774,266,63.298V20.235z
															M246,20.235v43.063c-27.168,1.475-53.907,8.937-78.351,21.863L146.404,48.37C177.489,31.425,211.561,21.801,246,20.235z
															M129.263,58.681l21.205,36.722c-21.753,14.523-40.541,33.312-55.065,55.065l-36.722-21.205
														C77.114,101.243,101.244,77.113,129.263,58.681z M48.369,146.404l36.792,21.245C72.235,192.094,64.774,218.833,63.298,246H20.235
														C21.801,211.562,31.426,177.49,48.369,146.404z M20.235,266h43.063c1.475,27.167,8.937,53.906,21.863,78.35l-36.792,21.246
														C31.425,334.51,21.801,300.438,20.235,266z M58.681,382.737l36.723-21.205c14.524,21.754,33.312,40.542,55.065,55.065
														l-21.205,36.722C101.243,434.886,77.113,410.757,58.681,382.737z M246,491.764c-34.439-1.566-68.512-11.19-99.596-28.134
														l21.245-36.792c24.444,12.926,51.183,20.388,78.351,21.863V491.764z M83,256c0-94.073,79.671-173,173-173
														c94.153,0,173,79.854,173,173c0,93.768-79.309,173-173,173C162.221,429,83,349.678,83,256z M266,491.766v-43.064
														c27.167-1.475,53.907-8.937,78.351-21.863l21.245,36.792C334.511,480.576,300.439,490.2,266,491.766z M382.737,453.319
														l-21.205-36.722c21.752-14.522,40.539-33.309,55.063-55.061l36.725,21.202C434.886,410.758,410.756,434.887,382.737,453.319z
															M463.63,365.597l-36.794-21.242c12.928-24.446,20.39-51.287,21.866-78.455h43.063
														C490.199,300.339,480.574,334.511,463.63,365.597z"></path></g></g><g><g><path d="M399.762,213.137c-6.635-22.203-18.589-42.913-34.57-59.892c-3.785-4.021-10.114-4.214-14.136-0.427
														c-4.021,3.785-4.213,10.113-0.428,14.136c13.859,14.723,24.223,32.673,29.971,51.909c1.579,5.281,7.14,8.302,12.445,6.718
														C398.336,224,401.343,218.429,399.762,213.137z"></path></g></g><g><g><path d="M356,226c-13.036,0-24.152,8.361-28.28,20h-22.726c-3.987-19.563-19.431-35.007-38.994-38.994V184.28
														c11.639-4.128,20-15.243,20-28.28c0-16.542-13.458-30-30-30s-30,13.458-30,30c0,13.036,8.361,24.152,20,28.28v22.726
														c-19.563,3.987-35.007,19.431-38.994,38.994H184.28c-4.128-11.639-15.243-20-28.28-20c-16.542,0-30,13.458-30,30s13.458,30,30,30
														c13.036,0,24.152-8.361,28.28-20h22.726c3.987,19.563,19.431,35.007,38.994,38.994v22.726c-11.639,4.128-20,15.243-20,28.28
														c0,16.542,13.458,30,30,30s30-13.458,30-30c0-13.036-8.361-24.152-20-28.28v-22.726c19.563-3.987,35.007-19.431,38.994-38.994
														h22.726c4.128,11.639,15.243,20,28.28,20c16.542,0,30-13.458,30-30S372.542,226,356,226z M156,266c-5.514,0-10-4.486-10-10
														c0-5.514,4.486-10,10-10c5.514,0,10,4.486,10,10C166,261.514,161.514,266,156,266z M256,146c5.514,0,10,4.486,10,10
														c0,5.514-4.486,10-10,10c-5.514,0-10-4.486-10-10C246,150.486,250.486,146,256,146z M256,366c-5.514,0-10-4.486-10-10
														c0-5.514,4.486-10,10-10c5.514,0,10,4.486,10,10C266,361.514,261.514,366,256,366z M256,286c-16.542,0-30-13.458-30-30
														s13.458-30,30-30s30,13.458,30,30S272.542,286,256,286z M356,266c-5.514,0-10-4.486-10-10c0-5.514,4.486-10,10-10
														c5.514,0,10,4.486,10,10C366,261.514,361.514,266,356,266z"></path></g></g>
								</svg>
								<span class="page-games-text casino <?php echo get_field('delete_roulette'); ?>">Roulette</span>
							</div>
							<div class="page-games-item brend">
								<svg class="page-games-ikon-casino <?php echo get_field('delete_baccarat'); ?>" height="64" viewBox="0 0 64 64" width="64" xmlns="http://www.w3.org/2000/svg"><path d="m61 11h-13a1 1 0 0 0 -.707.293l-1.707 1.707h-27.172l-1.707-1.707a1 1 0 0 0 -.707-.293h-13a1 1 0 0 0 -1 1v40a1 1 0 0 0 1 1h58a1 1 0 0 0 1-1v-40a1 1 0 0 0 -1-1zm-22 4h4.586l-2 2h-2.586zm-4 0h2v2h-2zm-4 0h2v2h-2zm-4 0h2v2h-2zm-2 0v2h-2.586l-2-2zm35 36h-56v-38h11.586l5.707 5.707a1 1 0 0 0 .707.293h20a1 1 0 0 0 .707-.293l5.707-5.707h11.586z"></path><path d="m43 21h-22v8h22zm-2 6h-18v-4h18z"></path><path d="m31 31h2v5h-2z"></path><path d="m55.906 23h-9a1 1 0 0 0 -1 1 13.933 13.933 0 0 1 -2.316 7.7 14.1 14.1 0 0 1 -6.928 5.448 13.53 13.53 0 0 1 -9.413 0 14.105 14.105 0 0 1 -6.93-5.449 13.93 13.93 0 0 1 -2.319-7.699 1 1 0 0 0 -1-1h-9a1 1 0 0 0 -1 1 25 25 0 0 0 24.888 25h.13a25 25 0 0 0 22.244-13.812 24.733 24.733 0 0 0 2.644-11.188 1 1 0 0 0 -1-1zm-46.885 2h7.01a15.906 15.906 0 0 0 1.916 6.643l-6.87 1.908a22.7 22.7 0 0 1 -2.056-8.551zm2.987 10.369 7.058-1.96a16.153 16.153 0 0 0 6.08 5.031l-5.166 5.165a22.979 22.979 0 0 1 -7.972-8.236zm18.9 11.6a23.01 23.01 0 0 1 -9.1-2.359l5.372-5.372a15.984 15.984 0 0 0 3.733.718zm2.094 0v-7.01a15.984 15.984 0 0 0 3.733-.718l5.372 5.372a23.01 23.01 0 0 1 -9.107 2.359zm10.926-3.367-5.167-5.162a16.15 16.15 0 0 0 6.079-5.031l7.058 1.96a22.962 22.962 0 0 1 -7.972 8.236zm8.9-10.054-6.87-1.908a15.914 15.914 0 0 0 1.917-6.64h7.01a22.7 22.7 0 0 1 -2.056 8.551z"></path><path d="m12 28h2v2h-2z"></path><path d="m17 37h2v2h-2z"></path><path d="m27 42h2v2h-2z"></path><path d="m35 42h2v2h-2z"></path><path d="m44 37h2v2h-2z"></path><path d="m50 28h2v2h-2z"></path><path d="m8 17h4v-2h-6v6h2z"></path><path d="m56 21h2v-6h-6v2h4z"></path>
								</svg>
								<span class="page-games-text casino <?php echo get_field('delete_baccarat'); ?>">Baccarat</span>
							</div>
							<div class="page-games-item brend">
								<svg class="page-games-ikon-casino <?php echo get_field('delete_poker'); ?>" id="Layer_3" enable-background="new 0 0 64 64" height="64" viewBox="0 0 64 64" width="64" xmlns="http://www.w3.org/2000/svg"><g><path d="m18 5h8v2h-8z"></path><path d="m17 40c0 4.962 4.037 9 9 9s9-4.038 9-9-4.037-9-9-9-9 4.038-9 
													9zm10-6.92v2.021c-.323-.066-.658-.101-1-.101s-.677.035-1 .101v-2.021c.328-.047.66-.08 1-.08s.672.033 1 
													.08zm6 6.92c0 .34-.033.672-.08 1h-2.021c.066-.323.101-.658.101-1s-.035-.677-.101-1h2.021c.047.328.08.66.08 
													1zm-14 0c0-.34.033-.672.08-1h2.021c-.066.323-.101.658-.101 1s.035.677.101 1h-2.021c-.047-.328-.08-.66-.08-1zm4 
													0c0-1.654 1.346-3 3-3s3 1.346 3 3-1.346 3-3 3-3-1.346-3-3zm0-6.315v2.34c-.369.279-.695.606-.974.974h-2.34c.691-1.449 
													1.864-2.622 3.314-3.314zm-3.315 9.315h2.34c.279.369.606.695.974.974v2.34c-1.449-.691-2.622-1.864-3.314-3.314zm5.315 
													3.92v-2.021c.323.066.658.101 1 .101s.677-.035 1-.101v2.021c-.328.047-.66.08-1 .08s-.672-.033-1-.08zm4-.605v-2.34c.369-.279.695-.606.974-.974h2.34c-.691 
													1.449-1.864 2.622-3.314 3.314zm3.315-9.315h-2.34c-.279-.369-.606-.695-.974-.974v-2.34c1.449.691 2.622 1.864 3.314 3.314z"></path><path d="m47 22c0-4.624-3.507-8.442-8-8.941v-6.059c0-3.309-2.691-6-6-6h-22c-3.309 0-6 2.691-6 6v50c0 3.309 2.691 6 6 
													6h22c3.309 0 6-2.691 6-6v-26.059c4.493-.499 8-4.317 8-8.941zm-2 0c0 .34-.033.672-.08 
													1h-2.021c.066-.323.101-.658.101-1s-.035-.677-.101-1h2.021c.047.328.08.66.08 1zm-13.315 
													3h2.34c.279.369.606.695.974.974v2.34c-1.449-.691-2.622-1.864-3.314-3.314zm9.315-3c0 1.654-1.346 3-3 3s-3-1.346-3-3 1.346-3 
													3-3 3 1.346 3 3zm-6.974-3h-2.34c.692-1.45 1.865-2.623 3.315-3.315v2.34c-.37.28-.696.606-.975.975zm-3.026 
													3c0-.34.033-.672.08-1h2.021c-.066.323-.101.658-.101 1s.035.677.101 1h-2.021c-.047-.328-.08-.66-.08-1zm6 
													4.899c.323.066.658.101 1 .101s.677-.035 1-.101v2.021c-.328.047-.66.08-1 .08s-.672-.033-1-.08zm1-9.899c-.342 0-.677.035-1 
													.101v-2.021c.328-.047.66-.08 1-.08s.672.033 1 .08v2.021c-.323-.066-.658-.101-1-.101zm-9 5c0 4.624 3.507 8.442 8 
													8.941v20.059h-30v-40h30v2.059c-4.493.499-8 4.317-8 8.941zm12 6.315v-2.34c.369-.279.695-.606.974-.974h2.34c-.691 
													1.449-1.864 2.622-3.314 3.314zm3.315-9.315h-2.34c-.279-.369-.606-.695-.974-.974v-2.34c1.449.691 2.622 1.864 3.314 
													3.314zm-33.315-16h22c2.206 0 4 1.794 4 4v2h-30v-2c0-2.206 1.794-4 4-4zm22 58h-22c-2.206 0-4-1.794-4-4v-4h30v4c0 2.206-1.794 
													4-4 4z"></path><path d="m50 31c-4.963 0-9 4.038-9 9s4.037 9 9 9 9-4.038 9-9-4.037-9-9-9zm6.315 6h-2.34c-.279-.369-.606-.695-.974-.974v-2.34c1.449.691 
													2.622 1.864 3.314 3.314zm.685 3c0 .34-.033.672-.08 1h-2.021c.066-.323.101-.658.101-1s-.035-.677-.101-1h2.021c.047.328.08.66.08 
													1zm-14 0c0-.34.033-.672.08-1h2.021c-.066.323-.101.658-.101 1s.035.677.101 1h-2.021c-.047-.328-.08-.66-.08-1zm4 0c0-1.654 
													1.346-3 3-3s3 1.346 3 3-1.346 3-3 3-3-1.346-3-3zm4-6.92v2.021c-.323-.066-.658-.101-1-.101s-.677.035-1 .101v-2.021c.328-.047.66-.08 
													1-.08s.672.033 1 .08zm-4 .605v2.34c-.369.279-.695.606-.974.974h-2.34c.691-1.449 1.864-2.622 3.314-3.314zm-3.315 
													9.315h2.34c.279.369.606.695.974.974v2.34c-1.449-.691-2.622-1.864-3.314-3.314zm5.315 3.92v-2.021c.323.066.658.101 1 
													.101s.677-.035 1-.101v2.021c-.328.047-.66.08-1 .08s-.672-.033-1-.08zm4-.605v-2.34c.369-.279.695-.606.974-.974h2.34c-.691 
													1.449-1.864 2.622-3.314 3.314z"></path><circle cx="22" cy="57" r="2"></circle></g>
								</svg>
								<span class="page-games-text casino <?php echo get_field('delete_poker'); ?>">Video-Poker</span>
							</div>
							<div class="page-games-item brend">
								<svg class="page-games-ikon-casino <?php echo get_field('delete_rubbellose'); ?>" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="64" height="64" viewBox="0 0 480 480" style="enable-background:new 0 0 480 480;" xml:space="preserve"><g><g><path d="M472,72H8c-4.418,0-8,3.582-8,8v320c0,4.418,3.582,8,8,8h464c4.418,0,8-3.582,8-8V80C480,75.582,476.418,72,472,72z
														M464,392H16V88h448V392z"></path></g></g><g><g><path d="M440,104H168c-4.418,0-8,3.582-8,8v256c0,4.418,3.582,8,8,8h272c4.418,0,8-3.582,8-8V112C448,107.582,444.418,104,440,104
														z M432,360H176V120h256V360z"></path></g></g><g><g><path d="M272,232c-4.418,0-8-3.582-8-8s3.582-8,8-8s8,3.582,8,8h16c-0.042-10.134-6.445-19.15-16-22.528V192h-16v9.472
													c-12.473,4.393-19.023,18.066-14.629,30.539c3.38,9.596,12.455,16.009,22.629,15.989c4.418,0,8,3.582,8,8s-3.582,8-8,8
													s-8-3.582-8-8h-16c0.042,10.134,6.445,19.15,16,22.528V288h16v-9.472c12.473-4.393,19.023-18.066,14.63-30.539
													C291.249,238.393,282.174,231.981,272,232z"></path></g></g><g><g><path d="M336,232c-4.418,0-8-3.582-8-8s3.582-8,8-8s8,3.582,8,8h16c-0.042-10.134-6.445-19.15-16-22.528V192h-16v9.472
													c-12.473,4.393-19.023,18.066-14.629,30.539c3.38,9.596,12.455,16.009,22.629,15.989c4.418,0,8,3.582,8,8s-3.582,8-8,8
													s-8-3.582-8-8h-16c0.042,10.134,6.445,19.15,16,22.528V288h16v-9.472c12.473-4.393,19.023-18.066,14.63-30.539
													C355.249,238.393,346.174,231.981,336,232z"></path></g></g><g><g><path d="M136,200h-2.808c1.825-3.739,2.785-7.84,2.808-12c0.021-15.442-12.48-27.977-27.922-27.998
													c-7.562-0.01-14.805,3.042-20.078,8.462c-10.681-11.103-28.341-11.444-39.444-0.763c-8.713,8.383-11.034,21.424-5.748,32.299H40
													c-4.418,0-8,3.582-8,8v96c0,4.418,3.582,8,8,8h96c4.418,0,8-3.582,8-8v-96C144,203.582,140.418,200,136,200z M64,296H48v-80h16
													V296z M56,188c0-6.627,5.373-12,12-12s12,5.373,12,12v12H68C61.373,200,56,194.627,56,188z M96,296H80v-80h16V296z M96,200v-12
													c0-6.627,5.373-12,12-12s12,5.373,12,12c0,6.627-5.373,12-12,12H96z M128,296h-16v-80h16V296z"></path></g></g><g><g><path d="M407.037,232.982c-2.156-2.156-4.622-3.979-7.317-5.406v0c11.539-12.299,10.922-31.624-1.377-43.162
													c-0.832-0.781-1.708-1.515-2.623-2.198c8.559-14.593,3.668-33.361-10.924-41.92c-11.989-7.032-27.21-5.111-37.076,4.68
													l-7.296,7.296c-7.922-14.938-26.454-20.625-41.392-12.702c-2.693,1.428-5.157,3.25-7.312,5.406l-7.296,7.296
													c-7.922-14.938-26.454-20.625-41.392-12.702c-2.693,1.428-5.157,3.25-7.312,5.406l-34.752,34.744
													c-11.958,11.955-11.96,31.34-0.005,43.298c2.152,2.152,4.613,3.972,7.301,5.398l-7.296,7.304
													c-11.958,11.955-11.96,31.34-0.005,43.298c2.152,2.152,4.613,3.972,7.301,5.398l-7.296,7.304c-11.96,11.96-11.96,31.352,0,43.312
													c11.96,11.96,31.352,11.96,43.312,0l2.528-2.52c10.506,13.175,29.703,15.339,42.879,4.834c0.908-0.724,1.774-1.499,2.593-2.322
													l7.296-7.296c7.922,14.938,26.454,20.625,41.392,12.702c2.693-1.428,5.157-3.25,7.312-5.406l58.752-58.744
													C418.99,264.325,418.992,244.94,407.037,232.982z M395.736,264.976h-0.016l-58.752,58.744c-5.709,5.713-14.968,5.717-20.681,0.009
													c-2.704-2.702-4.242-6.354-4.287-10.177c0-0.192,0.12-1.024,0.128-1.216c0.204-3.318-1.665-6.417-4.696-7.784
													c-1.035-0.462-2.155-0.702-3.288-0.704c-2.122,0-4.156,0.844-5.656,2.344L280.96,323.72c-2.749,2.73-6.462,4.267-10.336,4.28
													c-6.608-0.03-12.371-4.497-14.048-10.888c-1.131-4.271-5.51-6.817-9.781-5.686c-1.366,0.362-2.612,1.079-3.611,2.078
													l-10.216,10.216c-5.72,5.708-14.984,5.699-20.693-0.021c-2.737-2.742-4.274-6.457-4.275-10.331
													c-0.01-3.881,1.531-7.605,4.28-10.344l17.528-17.52c3.126-3.123,3.128-8.188,0.006-11.314c-1.639-1.641-3.909-2.489-6.222-2.326
													L222.624,272c-8.081-0.003-14.63-6.556-14.627-14.637c0.001-3.878,1.542-7.597,4.283-10.339l17.528-17.52
													c3.102-3.146,3.066-8.211-0.08-11.313c-1.625-1.603-3.858-2.435-6.136-2.287L222.624,216c-8.081-0.003-14.63-6.556-14.627-14.637
													c0.001-3.878,1.542-7.597,4.283-10.339l34.752-34.744c5.709-5.713,14.968-5.717,20.681-0.008
													c2.704,2.702,4.243,6.354,4.287,10.177c0,0.192-0.12,1.024-0.128,1.216c-0.268,4.41,3.09,8.202,7.5,8.47
													c2.285,0.139,4.52-0.708,6.14-2.326l17.528-17.528c5.713-5.709,14.972-5.706,20.681,0.007c2.697,2.699,4.232,6.345,4.279,10.161
													c0,0.192-0.12,1.024-0.128,1.216c-0.268,4.41,3.09,8.202,7.5,8.47c2.285,0.139,4.52-0.708,6.14-2.326l17.528-17.528
													c5.724-5.704,14.989-5.688,20.693,0.037c2.73,2.739,4.264,6.448,4.267,10.315c0.011,3.875-1.527,7.593-4.272,10.328l-2.224,2.208
													c-3.129,3.119-3.138,8.184-0.019,11.314c1,1.004,2.249,1.724,3.619,2.086c7.785,2.03,12.451,9.986,10.422,17.772
													c-0.655,2.512-1.969,4.803-3.806,6.636l-9.528,9.52c-3.126,3.123-3.128,8.188-0.006,11.314c1.639,1.641,3.909,2.489,6.222,2.326
													L385.6,240c8.08,0.117,14.536,6.762,14.419,14.842C399.964,258.648,398.428,262.284,395.736,264.976z"></path></g></g>
								</svg>
								<span class="page-games-text casino <?php echo get_field('delete_rubbellose'); ?>">Rubbellose</span>
							</div>
							<div class="page-games-item brend">
								<svg class="page-games-ikon-casino <?php echo get_field('delete_keno'); ?>" id="Layer_3" enable-background="new 0 0 64 64" height="64" viewBox="0 0 64 64" width="64" xmlns="http://www.w3.org/2000/svg"><g><path d="m15 11c1.103 0 2 .897 2 2v2h2v-2c0-1.2-.542-2.266-1.382-3 .84-.734 1.382-1.8 1.382-3v-2h-2v2c0 1.103-.897 2-2 2v-4h-2v10h2z"></path><path d="m22 15h4v-2h-3v-2h3v-2h-3v-2h3v-2h-4c-.552 0-1 .448-1 1v8c0 .552.448 1 1 1z"></path><path d="m30 9.487 3.152 5.043c.186.298.51.47.848.47.092 0 .185-.013.276-.039.429-.123.724-.515.724-.961v-9h-2v5.513l-3.152-5.043c-.236-.379-.696-.553-1.124-.432-.429.124-.724.516-.724.962v9h2z"></path><path d="m41 15c2.206 0 4-1.794 4-4v-2c0-2.206-1.794-4-4-4s-4 1.794-4 4v2c0 2.206 1.794 4 4 4zm-2-6c0-1.103.897-2 2-2s2 .897 2 2v2c0 1.103-.897 2-2 2s-2-.897-2-2z"></path><path d="m12 21h-6c-.552 0-1 .448-1 1v6c0 .552.448 1 1 1h6c.552 0 1-.448 1-1v-6c0-.552-.448-1-1-1zm-1 6h-4v-4h4z"></path><path d="m22 21h-6c-.552 0-1 .448-1 1v6c0 .552.448 1 1 1h6c.552 0 1-.448 1-1v-6c0-.552-.448-1-1-1zm-1 6h-4v-4h4z"></path><path d="m26 29h6c.552 0 1-.448 1-1v-6c0-.552-.448-1-1-1h-6c-.552 0-1 .448-1 1v6c0 .552.448 1 1 1zm1-6h4v4h-4z"></path><path d="m36 29h6c.552 0 1-.448 1-1v-6c0-.552-.448-1-1-1h-6c-.552 0-1 .448-1 1v6c0 .552.448 1 1 1zm1-6h4v4h-4z"></path><path d="m26 39h6c.552 0 1-.447 1-1v-6c0-.552-.448-1-1-1h-6c-.552 0-1 .448-1 1v6c0 .553.448 1 1 1zm1-6h4v4h-4z"></path><path d="m22 31h-6c-.552 0-1 .448-1 1v6c0 .553.448 1 1 1h6c.552 0 1-.447 1-1v-6c0-.552-.448-1-1-1zm-1 6h-4v-4h4z"></path><path d="m12 31h-6c-.552 0-1 .448-1 1v6c0 .553.448 1 1 1h6c.552 0 1-.447 1-1v-6c0-.552-.448-1-1-1zm-1 6h-4v-4h4z"></path><path d="m12 41h-6c-.552 0-1 .447-1 1v6c0 .553.448 1 1 1h6c.552 0 1-.447 1-1v-6c0-.553-.448-1-1-1zm-1 6h-4v-4h4z"></path><path d="m22 41h-6c-.552 0-1 .447-1 1v6c0 .553.448 1 1 1h6c.552 0 1-.447 1-1v-6c0-.553-.448-1-1-1zm-1 6h-4v-4h4z"></path><path d="m52 41h-6c-.552 0-1 .447-1 1v6c0 .553.448 1 1 1h6c.552 0 1-.447 1-1v-6c0-.553-.448-1-1-1zm-1 6h-4v-4h4z"></path><path d="m12 51h-6c-.552 0-1 .447-1 1v6c0 .553.448 1 1 1h6c.552 0 1-.447 1-1v-6c0-.553-.448-1-1-1zm-1 6h-4v-4h4z"></path><path d="m22 51h-6c-.552 0-1 .447-1 1v6c0 .553.448 1 1 1h6c.552 0 1-.447 1-1v-6c0-.553-.448-1-1-1zm-1 6h-4v-4h4z"></path><path d="m31 57h-4v-3.009h-2v4.009c0 .553.448 1 1 1h6c.552 0 1-.447 1-1v-6h-2z"></path><path d="m42 51h-6c-.552 0-1 .447-1 1v6c0 .553.448 1 1 1h6c.552 0 1-.447 1-1v-6c0-.553-.448-1-1-1zm-1 6h-4v-4h4z"></path><path d="m52 51h-6c-.552 0-1 .447-1 1v6c0 .553.448 1 1 1h6c.552 0 1-.447 1-1v-6c0-.553-.448-1-1-1zm-1 6h-4v-4h4z"></path><path d="m62.707 19.293-4-4c-.391-.391-1.023-.391-1.414 0l-.293.293v-13.586c0-.552-.448-1-1-1h-54c-.552 0-1 .448-1 
												1v60c0 .553.448 1 1 1h54c.552 0 1-.447 1-1v-35.586l5.707-5.707c.391-.391.391-1.023 0-1.414zm-7.707-16.293v14h-52v-14zm0 
												58h-52v-42h50.586l-2 2h-5.586c-.552 0-1 .448-1 1v5.586l-3.414 3.414h-5.586c-.552 0-1 .448-1 1v5.586l-3.414 3.414h-5.586c-.552 
												0-1 .447-1 1v6c0 .553.448 1 1 1h.382l-1.276 2.553c-.192.385-.117.85.188 1.154.191.192.447.293.706.293.151 0 .305-.034.447-.105l8-4c.096-.048.184-.111.26-.188l.363-.363c.141.382.5.656.93.656h6c.552 
												0 1-.447 1-1v-6c0-.43-.275-.789-.655-.931l2.725-2.725c.141.382.5.656.93.656h6c.552 0 1-.447 1-1v-6c0-.43-.275-.789-.656-.93l2.656-2.656zm-5.414-38-2.586 
												2.586v-2.586zm-10 10-2.586 2.586v-2.586zm-12.204 14h-.382v-4h2.586l-.293.293c-.076.076-.139.164-.188.26zm13.032-4h.586v4h-4v-.586zm10-10h.586v4h-4v-.586zm-17.006 
												14.178-5.172 2.586 2.586-5.171 27.178-27.179 2.586 2.586z"></path></g>
								</svg>
								<span class="page-games-text casino <?php echo get_field('delete_keno'); ?>">Keno</span>
							</div>
							<div class="page-games-item brend">
								<svg class="page-games-ikon-casino <?php echo get_field('delete_craps'); ?>" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="mdi-dice-multiple" width="64" height="64" viewBox="0 0 24 24"><path d="M19.78,3H11.22C10.55,3 10,3.55 10,4.22V8H16V14H19.78C20.45,14 21,13.45 21,12.78V4.22C21,3.55 
											20.45,3 19.78,3M12.44,6.67C11.76,6.67 11.21,6.12 11.21,5.44C11.21,4.76 11.76,4.21 12.44,4.21A1.23,1.23 0 0,1 
											13.67,5.44C13.67,6.12 13.12,6.67 12.44,6.67M18.56,12.78C17.88,12.79 17.33,12.24 17.32,11.56C17.31,10.88 17.86,10.33 
											18.54,10.32C19.22,10.31 19.77,10.86 19.78,11.56C19.77,12.23 19.23,12.77 18.56,12.78M18.56,6.67C17.88,6.68 17.33,6.13 
											17.32,5.45C17.31,4.77 17.86,4.22 18.54,4.21C19.22,4.2 19.77,4.75 19.78,5.44C19.78,6.12 19.24,6.66 
											18.56,6.67M4.22,10H12.78A1.22,1.22 0 0,1 14,11.22V19.78C14,20.45 13.45,21 12.78,21H4.22C3.55,21 3,20.45 
											3,19.78V11.22C3,10.55 3.55,10 4.22,10M8.5,14.28C7.83,14.28 7.28,14.83 7.28,15.5C7.28,16.17 7.83,16.72 8.5,16.72C9.17,16.72 
											9.72,16.17 9.72,15.5A1.22,1.22 0 0,0 8.5,14.28M5.44,11.22C4.77,11.22 4.22,11.77 4.22,12.44A1.22,1.22 0 0,0 
											5.44,13.66C6.11,13.66 6.66,13.11 6.66,12.44V12.44C6.66,11.77 6.11,11.22 5.44,11.22M11.55,17.33C10.88,17.33 10.33,17.88 
											10.33,18.55C10.33,19.22 10.88,19.77 11.55,19.77A1.22,1.22 0 0,0 12.77,18.55H12.77C12.77,17.88 12.23,17.34 11.56,17.33H11.55Z"></path>
								</svg>
								<span class="page-games-text casino <?php echo get_field('delete_craps'); ?>">Craps</span>
							</div>
						</div>
					</div>
					<div class="card-page-jackpots casino">
						<div class="card-page-games-title casino">
							<h3>Verfügbare Jackpots</h3>
						</div>
						<div class="card-page-games-content casino jackpots">
							<div class="page-jackpots-item brend">
								<div class="page-jackpots-image">
									<svg class="page-jackpots-ikon-casino <?php echo get_field('delete_casino'); ?>" id="Layer_1" enable-background="new 0 0 512 512" height="64" viewBox="0 0 512 512" width="64" xmlns="http://www.w3.org/2000/svg"><path d="m36.5 353.3c11.3 25.5 27 48.8 46.3 68.9l65.2-65.2c-10.9-11.6-19.8-24.9-26.4-39.3z"></path><path d="m256 176.1c2.9 0 5.2-2.3 5.2-5.2s-2.3-5.2-5.2-5.2-5.2 2.3-5.2 5.2 2.3 5.2 5.2 5.2z"></path><path d="m117.3 204.5-85.3-35c-10 26-15.4 53.6-15.9 81.5h92.1c.5-15.9 3.6-31.6 9.1-46.5z"></path><path d="m117.7 308.4c-5.8-15.2-9-31.2-9.5-47.4h-92.1c.5 28.4 6.1 56.6 16.5 83z"></path><path d="m251 403.8c-15.9-.5-31.6-3.6-46.5-9.1l-35 85.3c26 10 53.6 15.4 81.5 15.9z"></path><path d="m169.4 262.8c2.9 0 5.2-2.3 5.2-5.2s-2.3-5.2-5.2-5.2-5.2 2.3-5.2 5.2c0 2.8 2.3 5.1 5.2 5.2z"></path><path d="m342.5 32c-26-10-53.6-15.4-81.5-15.9v92.1c15.9.5 31.6 3.6 46.5 9.1z"></path><path d="m403.8 251h92.1c-.5-28.4-6.1-56.6-16.5-83l-85.1 35.6c5.8 15.1 9 31.2 9.5 47.4z"></path><path d="m356.9 148 65.2-65.2c-20.5-19.7-44.3-35.7-70.4-47l-35 85.3c14.8 6.7 28.4 15.8 40.2 26.9z"></path><path d="m390.4 194.3 85.1-35.6c-11.3-25.5-27-48.8-46.3-68.9l-65.2 65.3c10.9 11.6 19.8 24.8 26.4 39.2z"></path><path d="m148 155.1-65.2-65.2c-19.7 20.5-35.7 44.3-47 70.4l85.3 35c6.7-14.8 15.8-28.4 26.9-40.2z"></path><path d="m251 108.2v-92.1c-28.4.5-56.6 6.1-83 16.5l35.6 85.1c15.1-5.8 31.2-9 47.4-9.5z"></path><path d="m194.3 121.6-35.6-85.1c-25.5 11.3-48.8 27-68.9 46.3l65.2 65.2c11.7-10.9 24.9-19.8 39.3-26.4z"></path><path d="m195.3 390.9c-14.8-6.7-28.4-15.8-40.2-26.9l-65.2 65.2c20.5 19.7 44.3 35.7 70.4 47z"></path><circle cx="368.2" cy="422.7" r="15.4"></circle><path d="m261 403.8v92.1c28.4-.5 56.6-6.1 83-16.5l-35.6-85.1c-15.1 5.8-31.2 9-47.4 9.5z"></path><path d="m422.1 429.2-65.2-65.2c-11.6 10.9-24.9 19.8-39.3 26.4l35.6 85.1c25.5-11.3 48.8-27 
													68.9-46.3zm-79.3-6.5c0-14 11.4-25.4 25.4-25.4s25.4 11.4 25.4 25.4-11.4 25.4-25.4 25.4c-14 0-25.4-11.4-25.4-25.4z"></path><path d="m476.2 351.7-85.3-35c-6.7 14.8-15.8 28.4-26.9 40.2l65.2 65.2c19.7-20.5 35.7-44.3 47-70.4z"></path><path d="m118.1 256c0 76 61.9 137.9 137.9 137.9s137.9-61.9 137.9-137.9-61.9-137.9-137.9-137.9-137.9 61.9-137.9 
													137.9zm51.3-13.7c6.5 0 12.2 4.1 14.3 10.2h36.8c1.6-16.4 14.2-29.5 30.5-31.8v-35.5c-7.9-2.8-12.1-11.4-9.4-19.4s11.4-12.1 
													19.4-9.4 12.1 11.4 9.4 19.4c-1.5 4.4-5 7.8-9.4 9.4v35.5c16.3 2.3 28.8 15.5 30.5 31.8h36.8c2.8-7.9 11.4-12.1 19.4-9.4 
													7.9 2.8 12.1 11.4 9.4 19.4s-11.4 12.1-19.4 9.4c-4.4-1.5-7.8-5-9.4-9.4h-37.3c-2.8 15-14.9 26.6-30 28.7v38.5c7.9 2.8 12.1 
													11.4 9.4 19.4-2.8 7.9-11.4 12.1-19.4 9.4s-12.1-11.4-9.4-19.4c1.5-4.4 5-7.8 9.4-9.4v-38.5c-15.1-2.2-27.2-13.7-30-28.7h-37.3c-2.8 
													7.9-11.4 12.1-19.4 9.3-7.9-2.8-12.1-11.4-9.3-19.4 2.2-6 7.9-10.1 14.4-10.1z"></path><circle cx="256" cy="344.2" r="5.2"></circle><path d="m495.9 261h-92.1c-.5 15.9-3.6 31.6-9.1 46.5l85.3 35c10-26.1 15.4-53.6 15.9-81.5z"></path><circle cx="256" cy="256" r="4"></circle><path d="m256 281.6c14.2 0 25.6-11.5 25.6-25.6 0-14.2-11.5-25.6-25.6-25.6-14.2 0-25.6 11.5-25.6 25.6s11.5 
													25.6 25.6 25.6zm0-39.6c7.7 0 14 6.3 14 14s-6.3 14-14 14-14-6.3-14-14 6.3-14 14-14z"></path><path d="m342.6 262.8c2.9 0 5.2-2.3 5.2-5.2s-2.3-5.2-5.2-5.2-5.2 2.3-5.2 5.2c0 2.8 2.3 5.1 5.2 5.2z"></path>
									</svg>
									<span class="page-jackpots-title casino <?php echo get_field('delete_casino'); ?>">Casino</span>
								</div>
								<div class="page-jackpots-img-ikon <?php echo get_field('delete_casino'); ?>">
								</div>
							</div>
							<div class="page-jackpots-item brend">
								<div class="page-jackpots-image">
									<svg class="page-jackpots-ikon-casino <?php echo get_field('delete_sports'); ?>" height="64" viewBox="0 0 480 480" width="64" xmlns="http://www.w3.org/2000/svg"><path d="m240 0c-132.546875 0-240 107.453125-240 240s107.453125 240 240 240 240-107.453125 
													240-240c-.148438-132.484375-107.515625-239.851562-240-240zm8.566406 69.191406 83.433594-33.351562c9.46875 
													4.285156 18.628906 9.222656 27.414062 14.777344l.21875.136718c8.632813 5.46875 16.882813 11.519532 24.695313 
													18.109375l.671875.585938c3.503906 2.984375 6.910156 6.074219 10.222656 9.261719.417969.410156.855469.800781 1.273438 
													1.21875 3.472656 3.390624 6.835937 6.886718 10.089844 10.484374.269531.304688.527343.625.796874.929688 2.855469 3.199219 
													5.601563 6.511719 8.265626 9.878906.640624.800782 1.28125 1.601563 1.902343 2.402344 2.890625 3.742188 5.6875 7.550781 
													8.328125 11.480469l-16.632812 70.703125-81.832032 27.28125-78.828124-63.074219zm-186.125 34.480469c.621094-.800781 
													1.253906-1.601563 1.894532-2.398437 2.632812-3.339844 5.355468-6.597657 8.167968-9.777344.304688-.335938.585938-.679688.886719-1.015625 
													3.234375-3.605469 6.582031-7.097657 10.050781-10.480469.398438-.390625.796875-.800781 1.214844-1.160156 3.285156-3.167969 
													6.664062-6.238282 10.136719-9.207032l.800781-.671874c7.742188-6.542969 15.914062-12.554688 
													24.460938-18l.3125-.199219c8.734374-5.542969 17.835937-10.472657 27.25-14.761719l83.816406 33.191406v80.800782l-78.832032 
													63.0625-81.832031-27.230469-16.632812-70.703125c2.664062-3.921875 5.429687-7.722656 8.304687-11.449219zm-9.640625 
													259.089844c-2.351562-3.585938-4.601562-7.238281-6.746093-10.960938l-.519532-.898437c-2.132812-3.703125-4.152344-7.46875-6.054687-11.292969l-.066407-.121094c-4.007812-8.046875-7.527343-16.328125-10.535156-24.800781v-.078125c-1.421875-4-2.71875-8.097656-3.917968-12.21875l-.433594-1.519531c-1.097656-3.871094-2.09375-7.785156-2.984375-11.742188-.078125-.386718-.175781-.753906-.253907-1.136718-1.964843-8.9375-3.375-17.984376-4.226562-27.097657l48.839844-58.605469 
													81.265625 27.085938 23.585937 94.335938-38.753906 51.5625zm240.472657 94.78125c-4 .992187-8.105469 1.847656-12.210938 
													2.617187-.574219.113282-1.160156.207032-1.734375.3125-3.496094.625-7.03125 1.160156-10.574219 
													1.597656-.945312.121094-1.882812.25-2.824218.363282-3.289063.382812-6.609376.671875-9.9375.910156-1.046876.070312-2.082032.175781-3.128907.242188-4.253906.261718-8.542969.414062-12.863281.414062-3.957031 
													0-7.890625-.105469-11.800781-.3125-.472657 0-.925781-.078125-1.398438-.113281-3.480469-.199219-6.945312-.460938-10.402343-.796875l-.398438-.074219c-7.574219-.820313-15.105469-2.023437-22.558594-3.597656l-47.320312-74.089844 
													38.144531-50.863281h111.46875l38.769531 51.199218zm165.496093-169.542969c-.082031.382812-.175781.753906-.257812 1.136719-.894531 
													3.953125-1.890625 7.867187-2.984375 11.742187l-.429688 1.519532c-1.203125 4.121093-2.496094 8.203124-3.921875 
													12.21875v.078124c-3.007812 8.472657-6.523437 16.753907-10.535156 24.800782l-.066406.121094c-1.914063 3.828124-3.929688 
													7.59375-6.054688 11.292968l-.519531.898438c-2.132812 3.734375-4.378906 7.378906-6.734375 10.945312l-78.929687 
													12.445313-39.023438-51.519531 23.574219-94.3125 81.265625-27.085938 48.839844 58.605469c-.847657 9.117187-2.257813 
													18.171875-4.222657 27.113281zm0 0"></path>
									</svg>
									<span class="page-jackpots-title casino <?php echo get_field('delete_sports'); ?>">Sports</span>
								</div>
								<div class="page-jackpots-img-ikon <?php echo get_field('delete_sports'); ?>">
								</div>
							</div>
							<div class="page-jackpots-item brend">
								<div class="page-jackpots-image">
									<svg class="page-jackpots-ikon-casino <?php echo get_field('delete_live'); ?>" id="Layer_5" enable-background="new 0 0 64 64" height="64" viewBox="0 0 64 64" width="64" xmlns="http://www.w3.org/2000/svg"><g><circle cx="20" cy="15" r="1"></circle><circle cx="26" cy="15" r="1"></circle><path d="m26.789 19.658.105-.211-1.789-.895-.105.212c-.381.762-1.147 1.236-2 
														1.236s-1.619-.474-2-1.236l-.105-.211-1.789.895.105.211c.722 1.444 2.174 2.341 3.789 2.341s3.067-.897 3.789-2.342z"></path><path d="m50 27c7.168 0 13-5.832 13-13s-5.832-13-13-13-13 5.832-13 13 5.832 13 13 13zm0-20c3.859 0 7 3.141 7 7s-3.141 7-7 
														7-7-3.141-7-7 3.141-7 7-7zm-5.611 14.025c1.295 1.036 2.878 1.723 4.611 1.916v2.008c-2.283-.207-4.366-1.111-6.034-2.501zm6.611 
														1.916c1.733-.193 3.316-.88 4.611-1.916l1.423 1.423c-1.667 1.391-3.751 2.294-6.034 2.501zm6.025-3.33c1.036-1.295 1.723-2.878 
														1.916-4.611h2.008c-.207 2.283-1.111 4.366-2.501 6.034zm1.916-6.611c-.193-1.733-.88-3.316-1.916-4.611l1.423-1.423c1.391 1.667 
														2.294 3.751 2.501 6.034zm-3.33-6.025c-1.295-1.036-2.878-1.723-4.611-1.916v-2.008c2.283.207 4.366 1.111 
														6.034 2.501zm-6.611-1.916c-1.733.193-3.316.88-4.611 1.916l-1.423-1.423c1.668-1.391 3.751-2.294 6.034-2.501zm-6.025 
														3.33c-1.036 1.295-1.723 2.878-1.916 4.611h-2.008c.207-2.283 1.111-4.366 2.501-6.034zm-1.916 6.611c.193 1.733.88 3.316 
														1.916 4.611l-1.423 1.423c-1.391-1.667-2.294-3.751-2.501-6.034z"></path><path d="m54.25 14-4.25-5.667-4.25 5.667 4.25 5.667zm-4.25-2.333 1.75 2.333-1.75 2.333-1.75-2.333z"></path><path d="m56 37h-8c-1.302 0-2.402.839-2.816 2h-4.184v-2.732c0-2.374-.925-4.606-2.604-6.285-1.245-1.245-2.816-2.086-4.543-2.432l-6.853-1.371v-1.262c1.828-1.061 
														3.195-2.823 3.737-4.918h.263c2.206 0 4-1.794 4-4 0-.791-.238-1.524-.635-2.145.415-1.64.635-3.325.635-5.017v-1.559l-2.441-.813 
														1.957-2.937-2.534-1.014c-2.514-1.005-5.162-1.515-7.87-1.515h-3.064c-2.191 0-4.314.643-6.139 1.858-2.448 1.633-3.909 
														4.364-3.909 7.305 0 1.209.268 2.413.752 3.519-.469.656-.752 1.452-.752 2.318 0 2.206 1.794 4 4 4h.263c.542 2.095 1.909 3.856 
														3.737 4.918v1.262l-6.854 1.371c-1.727.346-3.298 1.187-4.543 2.432-1.678 1.678-2.603 3.911-2.603 6.285v2.732h-4v24h62v-24h-4.184c-.414-1.161-1.514-2-2.816-2zm1 
														15c0 .552-.448 1-1 1h-8c-.552 0-1-.448-1-1s.448-1 1-1h8c.552 0 1 .448 1 1zm0-8c0 .552-.448 1-1 1h-8c-.552 0-1-.448-1-1s.448-1 
														1-1h8c.552 0 1 .448 1 1zm0 4c0 .552-.448 1-1 1h-8c-.552 0-1-.448-1-1s.448-1 1-1h8c.552 0 1 .448 1 1zm-9-9h8c.552 0 1 .448 1 
														1s-.448 1-1 1h-8c-.552 0-1-.448-1-1s.448-1 1-1zm-17-21v-4c1.103 0 2 .897 2 2s-.897 2-2 2zm-18-2c0-1.103.897-2 2-2v4c-1.103 
														0-2-.897-2-2zm2-6v2c-.581 0-1.13.131-1.629.355-.241-.705-.371-1.448-.371-2.192 0-2.271 1.129-4.38 3.019-5.641 1.494-.996 
														3.233-1.522 5.029-1.522h3.064c2.452 0 4.85.462 7.126 1.373l.246.098-2.043 3.063 3.559 1.187v.117c0 1.186-.12 2.368-.346 
														3.53-.506-.231-1.063-.368-1.654-.368v-2h-1.395c-2.16 0-4.253-.634-6.051-1.832l-.554-.37-.555.37c-1.798 1.198-3.89 1.832-6.05 
														1.832zm2 8v-6.014c2.123-.099 4.175-.716 6-1.805 1.825 1.089 3.877 1.706 6 1.805v6.014c0 3.309-2.691 6-6 6s-6-2.691-6-6zm6 
														8c.692 0 1.359-.097 2-.263v1.263c0 1.103-.897 2-2 2s-2-.897-2-2v-1.263c.641.166 1.308.263 2 .263zm-16 10.268c0-1.84.717-3.57 
														2.018-4.871.965-.965 2.183-1.617 3.521-1.885l6.659-1.332c.507 1.628 2.009 2.82 3.802 2.82s3.295-1.192 3.802-2.82l6.659 
														1.332c1.339.268 2.557.92 3.521 1.885 1.301 1.3 2.018 3.031 2.018 4.871v5.732c0 1.654-1.346 3-3 3h-3v-4c1.103 0 2-.897 
														2-2v-4h-2v4h-4v-3c0-1.654-1.346-3-3-3h-6c-1.654 0-3 1.346-3 3v3h-4v-4h-2v4c0 1.103.897 2 2 2v4h-3c-1.654 0-3-1.346-3-3zm14 
														4.732c1.103 0 2 .897 2 2s-.897 2-2 2h-1-5v-4zm0-2h-2v-3c0-.552.448-1 1-1h6c.552 0 1 .448 1 1v9h-2.556c.344-.591.556-1.268.556-2 0-2.206-1.794-4-4-4zm8 2h2v4h-2zm-26 20v-2h58v2zm58-4h-58v-16h2v1c0 2.757 2.243 5 5 5h10 1 15c2.757 
														0 5-2.243 5-5v-1h4.184c.133.374.335.711.596 1-.48.532-.78 1.229-.78 2s.301 1.468.78 2c-.48.532-.78 1.229-.78 2s.301 1.468.78 2c-.48.532-.78 1.229-.78 2 0 1.654 1.346 3 3 3h8c1.654 0 3-1.346 3-3 0-.771-.301-1.468-.78-2 
														.48-.532.78-1.229.78-2s-.301-1.468-.78-2c.48-.532.78-1.229.78-2s-.301-1.468-.78-2c.26-.289.463-.626.596-1h2.184z"></path></g>
									</svg>
									<span class="page-jackpots-title casino <?php echo get_field('delete_live'); ?>">Live casino</span>
								</div>
								<div class="page-jackpots-img-ikon <?php echo get_field('delete_live'); ?>">
								</div>
							</div>
							<div class="page-jackpots-item brend">
								<div class="page-jackpots-image">
									<svg class="page-jackpots-ikon-casino <?php echo get_field('delete_pok'); ?>" id="Layer_1" height="64" viewBox="0 0 512 512" width="64" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1"><path d="m127.205 97.001h17.546l-8.773-30.959z"></path><path d="m243.823 357.214a66.7 66.7 0 0 1 24.354 0l-12.177-28.153z"></path><path d="m409.125 5h-306.25a36.667 36.667 0 0 0 -36.625 36.625v428.75a36.667 36.667 0 0 0 36.625 36.625h306.25a36.667 36.667 0 0 0 36.625-36.625v-428.75a36.667 36.667 0 0 0 -36.625-36.625zm-284.643 102.286-3.832 13.414c-.5 
													1.917-2.219 2.623-4.437 2.623-3.53 0-8.27-2.219-8.27-5.446a5.781 5.781 0 0 1 .2-1.008l19.463-63.431c.907-3.025 4.639-4.436 8.37-4.436 3.832 0 7.563 1.411 8.47 4.436l19.463 63.431a4.431 4.431 0 0 1 .2 1.008c0 
													3.126-4.74 5.446-8.269 5.446-2.219 0-3.933-.706-4.438-2.623l-3.831-13.412zm218.6 208.245a64.66 64.66 0 0 1 -74.621 12.105l15.776 36.473a6 6 0 0 1 -7.735 7.953 54.95 54.95 0 0 0 -41 0 6 6 0 0 1 -7.735-7.953l15.433-35.681a64.623 
													64.623 0 0 1 -74.27-103.658l82.747-83.485a6 6 0 0 1 4.248-1.776h.014a6 6 0 0 1 4.242 1.757l82.9 82.889a64.695 64.695 0 0 1 -.002 91.376z"></path><path d="m255.957 154.013-78.525 79.224a52.612 52.612 0 1 0 74.385 74.425 6 6 0 0 1 4.483-1.753l.538.022a6 6 0 0 1 3.939 1.69 52.61 52.61 0 0 0 73.815-74.98z"></path>
									</svg>
									<span class="page-jackpots-title casino <?php echo get_field('delete_pok'); ?>">Poker</span>
								</div>
								<div class="page-jackpots-img-ikon <?php echo get_field('delete_pok'); ?>">
								</div>
							</div>
							<div class="page-jackpots-item brend">
								<div class="page-jackpots-image">
									<svg class="page-jackpots-ikon-casino <?php echo get_field('delete_bookmaker'); ?>" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="64" height="64" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;" xml:space="preserve"><g><g><path d="M438.09,273.32h-39.596c4.036,11.05,6.241,22.975,6.241,35.404v149.65c0,5.182-0.902,10.156-2.543,14.782h65.461
															c24.453,0,44.346-19.894,44.346-44.346v-81.581C512,306.476,478.844,273.32,438.09,273.32z"></path></g></g><g><g><path d="M107.265,308.725c0-12.43,2.205-24.354,6.241-35.404H73.91c-40.754,0-73.91,33.156-73.91,73.91v81.581
															c0,24.452,19.893,44.346,44.346,44.346h65.462c-1.641-4.628-2.543-9.601-2.543-14.783V308.725z"></path></g></g><g><g><path d="M301.261,234.815h-90.522c-40.754,0-73.91,33.156-73.91,73.91v149.65c0,8.163,6.618,14.782,14.782,14.782h208.778
															c8.164,0,14.782-6.618,14.782-14.782v-149.65C375.171,267.971,342.015,234.815,301.261,234.815z"></path></g></g><g><g><path d="M256,38.84c-49.012,0-88.886,39.874-88.886,88.887c0,33.245,18.349,62.28,45.447,77.524
															c12.853,7.23,27.671,11.362,43.439,11.362c15.768,0,30.586-4.132,43.439-11.362c27.099-15.244,45.447-44.28,45.447-77.524
															C344.886,78.715,305.012,38.84,256,38.84z"></path></g></g><g><g><path d="M99.918,121.689c-36.655,0-66.475,29.82-66.475,66.475c0,36.655,29.82,66.475,66.475,66.475
															c9.298,0,18.152-1.926,26.195-5.388c13.906-5.987,25.372-16.585,32.467-29.86c4.98-9.317,7.813-19.946,7.813-31.227
															C166.393,151.51,136.573,121.689,99.918,121.689z"></path></g></g><g><g><path d="M412.082,121.689c-36.655,0-66.475,29.82-66.475,66.475c0,11.282,2.833,21.911,7.813,31.227
															c7.095,13.276,18.561,23.874,32.467,29.86c8.043,3.462,16.897,5.388,26.195,5.388c36.655,0,66.475-29.82,66.475-66.475
															C478.557,151.509,448.737,121.689,412.082,121.689z"></path></g></g>
									</svg>
									<span class="page-jackpots-title casino <?php echo get_field('delete_bookmaker'); ?>">Bookmaker</span>
								</div>
								<div class="page-jackpots-img-ikon <?php echo get_field('delete_bookmaker'); ?>">
								</div>
							</div>
							<div class="page-jackpots-item brend">
								<div class="page-jackpots-image">
									<svg class="page-jackpots-ikon-casino <?php echo get_field('delete_lottery'); ?>" height="64" viewBox="0 0 512 512" width="64" xmlns="http://www.w3.org/2000/svg"><path d="m511.394531 194.089844c-.375-5.507813-5.144531-9.671875-10.65625-9.296875s-9.671875 5.144531-9.296875 10.65625c.371094 5.464843.558594 10.933593.558594 16.25 0 47.1875-13.875 92.726562-40.128906 131.695312-3.082032 
													4.582031-1.871094 10.792969 2.707031 13.878907 1.714844 1.15625 3.65625 1.707031 5.578125 1.707031 3.214844 0 6.371094-1.546875 8.304688-4.414063 28.484374-42.28125 43.539062-91.683594 43.539062-142.867187 
													0-5.765625-.203125-11.691407-.605469-17.609375zm0 0"></path><path d="m20 211.699219c0-52 16.59375-101.320313 47.980469-142.632813 3.34375-4.394531 2.484375-10.671875-1.910157-14.011718-4.398437-3.339844-10.671874-2.484376-14.011718 1.914062-34.058594 44.820312-52.058594 
													98.324219-52.058594 154.730469 0 36.144531 7.398438 71.109375 21.992188 103.917969 1.65625 3.726562 5.3125 5.9375 9.144531 5.9375 1.355469 0 2.734375-.277344 4.058593-.867188 5.042969-2.242188 7.316407-8.152344 
													5.070313-13.199219-13.449219-30.234375-20.265625-62.460937-20.265625-95.789062zm0 0"></path><path d="m181.019531 107.042969c1.609375 3.929687 5.742188 6.476562 9.972657 6.148437 4.347656-.339844 8.058593-3.519531 9.015624-7.78125 1.957032-8.703125-8.171874-15.523437-15.5-10.363281-3.765624 2.652344-5.265624 
													7.734375-3.488281 11.996094zm0 0"></path><path d="m323.230469 99.402344c-2.066407-5.035156-8.042969-7.503906-13.0625-5.410156-5.03125 2.101562-7.492188 8.003906-5.410157 13.050781 2.082032 5.035156 8.03125 7.503906 13.0625 5.410156 
													5.023438-2.089844 7.507813-8.015625 5.410157-13.050781zm0 0"></path><path d="m184.710938 328.683594c7.550781 5.03125 17.597656-2.261719 15.179687-10.976563-1.140625-4.109375-4.882813-7.113281-9.144531-7.324219-4.253906-.210937-8.289063 2.421876-9.816406 6.390626-1.648438 4.285156-.085938 
													9.378906 3.78125 11.910156zm0 0"></path><path d="m323.230469 316.542969c-1.640625-3.933594-5.714844-6.460938-9.972657-6.144531-4.351562.324218-8.046874 3.53125-9.015624 7.777343-1.992188 8.742188 8.183593 15.480469 15.507812 10.367188 3.804688-2.65625 5.230469-7.726563 
													3.480469-12zm0 0"></path><path d="m386.890625 207.691406c-2.097656-5.03125-8.019531-7.492187-13.0625-5.410156-5.03125 2.082031-7.5 8.03125-5.40625 13.0625 2.089844 5.03125 8.019531 7.496094 13.058594 5.410156 5.023437-2.082031 7.503906-8.035156 
													5.410156-13.0625zm0 0"></path><path d="m122.921875 219.832031c7.546875 5.03125 17.613281-2.265625 15.183594-10.984375-1.140625-4.101562-4.878907-7.105468-9.140625-7.316406-4.269532-.214844-8.273438 2.414062-9.8125 6.390625-1.660156 4.28125-.097656 9.378906 
													3.769531 11.910156zm0 0"></path><path d="m390.351562 374.890625c8.585938-7.066406 16.652344-14.835937 24.109376-23.265625 34.210937-38.667969 53.050781-88.425781 53.050781-140.109375 0-116.628906-94.882813-211.515625-211.511719-211.515625s-211.511719 
													94.886719-211.511719 211.511719c0 50.976562 18.386719 100.21875 51.773438 138.65625 7.378906 8.492187 15.382812 16.335937 23.910156 23.480469l-58.691406 123.15625c-1.476563 3.097656-1.261719 6.734374.570312 9.636718 1.832031 
													2.90625 5.023438 4.664063 8.457031 4.664063h41.90625c2.929688 0 5.707032-1.292969 7.609376-3.523438 1.898437-2.226562 2.722656-5.1875 2.261718-8.082031-.8125-5.09375-5.371094-8.65625-10.386718-8.394531h-25.550782l50.085938-105.09375c.351562.242187.710937.46875 
													1.066406.710937 17.472656 11.832032 36.726562 21.050782 56.921875 27.183594 5.898437 1.792969 11.878906 3.328125 17.914063 4.597656.371093.078125.738281.164063 1.109374.242188l-6.519531 24.585937h-23.234375c-5.523437 0-10 
													4.476563-10 10 0 5.523438 4.476563 10 10 10h140.152344c5.523438 0 10-4.476562 10-10 0-5.523437-4.476562-10-10-10h-22.921875l-6.207031-23.839843c.351562-.0625.699218-.140626 1.050781-.207032 21.464844-4.089844 42.265625-11.550781 
													61.449219-22.015625 5.386718-2.9375 10.640625-6.121093 15.753906-9.515625.332031-.222656.671875-.433594 1.003906-.65625l48.375 104.007813h-219.121094c-.164062-.007813-.328124-.011719-.496093-.011719-5.523438 0-10 4.488281-10 
													10.011719 0 5.523437 4.476562 10 10 10h235.296875c3.417968 0 6.597656-1.742188 8.433594-4.625 1.835937-2.878907 2.074218-6.496094.636718-9.59375zm-278.988281-37.839844c-30.230469-34.796875-46.875-79.378906-46.875-125.539062 
													0-105.597657 85.910157-191.511719 191.511719-191.511719s191.511719 85.914062 191.511719 191.511719c0 46.800781-17.058594 91.851562-48.03125 126.859375-8.550781 9.664062-17.988281 18.367187-28.136719 26.035156-17.949219 
													13.5625-38.292969 23.929688-59.828125 30.441406-6.082031 1.839844-12.253906 3.386719-18.488281 4.605469-1.121094.21875-2.246094.410156-3.367188.609375l-4.515625-17.351562c49.574219-8.992188 93.460938-39.65625 
													118.9375-83.691407.023438-.042969.046875-.09375.070313-.136719 15.105468-26.15625 23.089844-56.015624 23.089844-86.363281 0-30.40625-8.011719-60.320312-23.167969-86.511719 
													0-.003906-.003907-.007812-.007813-.011718-14.933594-25.804688-36.402344-47.449219-62.089844-62.589844-26.480468-15.609375-56.808593-23.859375-87.707031-23.859375-30.898437 0-61.226562 8.25-87.703125 23.859375-25.695312 
													15.140625-47.167968 36.789062-62.101562 62.597656 0 .003906-.003906.003906-.007813.007813-15.144531 26.191406-23.152343 56.105469-23.152343 86.507812 0 30.394531 8.007812 60.304688 23.152343 
													86.496094.007813.015625.019531.023437.023438.039063 25.410156 43.882812 69.140625 74.507812 118.539062 83.585937l-4.429687 16.714844c-.902344-.179688-1.800782-.347657-2.695313-.539063-20.265625-4.324218-39.863281-11.980468-57.65625-22.605468-5.066406-3.023438-10.003906-6.257813-14.777343-9.726563-1.40625-1.019531-2.792969-2.066406-4.167969-3.125-10.097657-7.765625-19.464844-16.5625-27.929688-26.308594zm116.257813 
													106.28125 26.5625-100.152343 26.074218 100.152343zm36.652344-140.796875v-29.625c14.585937-2.433594 27.882812-10.113281 37.296874-21.53125l79.902344 46.125c-23.328125 34.808594-60.207031 58.761719-101.378906 
													65.804688zm127.210937-22.34375-79.90625-46.128906c2.570313-6.851562 3.90625-14.15625 3.90625-21.542969s-1.335937-14.691406-3.90625-21.542969l79.90625-46.136718c10.332031 20.941406 15.757813 44.140625 15.757813 67.679687 0 
													23.53125-5.425782 46.726563-15.757813 67.671875zm-89.921875-106.53125c-9.410156-11.417968-22.710938-19.097656-37.292969-21.527344v-92.261718c23.839844 1.554687 47.007813 8.652344 67.550781 20.761718 19.851563 11.703126 36.855469 
													27.792969 49.648438 46.894532zm-11.589844 18.253906c4.914063 7.78125 6.417969 17.996094 5.019532 26.976563-1.355469 8.695313-5.53125 16.832031-11.8125 22.992187-11.652344 11.433594-29.40625 14.972657-44.519532 
													8.765626-16.296875-6.699219-26.773437-23.472657-25.503906-41.085938 1.238281-17.175781 13.429688-32.046875 29.984375-36.714844 15.796875-4.460937 33.175781 1.214844 43.398437 14.039063 1.269532 1.585937 2.414063 3.269531 
													3.433594 5.027343zm-45.703125-39.78125c-14.585937 2.433594-27.886719 10.109376-37.296875 21.53125l-79.902344-46.136718c12.789063-19.101563 29.796876-35.191406 49.652344-46.894532 20.542969-12.105468 43.710938-19.203124 
													67.546875-20.761718zm-127.210937-7.292968 79.902344 46.136718c-2.574219 6.851563-3.910157 14.15625-3.910157 21.542969 0 7.382813 1.335938 14.6875 3.910157 21.539063l-79.902344 
													46.128906c-10.332032-20.945312-15.753906-44.140625-15.753906-67.667969 0-23.535156 5.421874-46.734375 15.753906-67.679687zm89.917968 106.539062c9.410157 11.417969 22.710938 19.097656 37.296876 21.53125v29.578125l-16.113282 
													60.769531c-41.046875-7.105468-77.816406-31.039062-101.085937-65.753906zm0 0"></path><path d="m163.359375 492.792969c-3.554687-2.367188-8.328125-2.183594-11.699219.433593-3.300781 2.554688-4.640625 7.0625-3.335937 11.015626 2.929687 8.847656 15.738281 8.96875 18.894531.230468 
													1.527344-4.234375-.074219-9.207031-3.859375-11.679687zm0 0"></path>
									</svg>
									<span class="page-jackpots-title casino <?php echo get_field('delete_lottery'); ?>">Lottery</span>
								</div>
								<div class="page-jackpots-img-ikon <?php echo get_field('delete_lottery'); ?>">
								</div>
							</div>
							<div class="page-jackpots-item brend">
								<div class="page-jackpots-image">
									<svg class="page-jackpots-ikon-casino <?php echo get_field('delete_mobile'); ?>" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 503.604 503.604" width="64" height="64" style="enable-background:new 0 0 503.604 503.604;" xml:space="preserve"><g><g><path d="M337.324,0H167.192c-28.924,0-53.5,23.584-53.5,52.5v398.664c0,28.916,24.056,52.44,52.98,52.44l170.412-0.184
															c28.92,0,52.58-23.528,52.58-52.448l0.248-398.5C389.908,23.452,366.364,0,337.324,0z M227.68,31.476h49.36
															c4.336,0,7.868,3.52,7.868,7.868c0,4.348-3.532,7.868-7.868,7.868h-49.36c-4.348,0-7.868-3.52-7.868-7.868
															C219.812,34.996,223.332,31.476,227.68,31.476z M198.02,33.98c2.916-2.912,8.224-2.952,11.136,0c1.46,1.456,2.324,3.5,2.324,5.588
															c0,2.048-0.864,4.088-2.324,5.548c-1.452,1.46-3.504,2.32-5.548,2.32c-2.084,0-4.088-0.86-5.588-2.32
															c-1.452-1.456-2.28-3.5-2.28-5.548C195.736,37.48,196.568,35.436,198.02,33.98z M250.772,488.008
															c-12.984,0-23.544-10.568-23.544-23.548c0-12.984,10.56-23.548,23.544-23.548s23.544,10.564,23.544,23.548
															C274.316,477.44,263.752,488.008,250.772,488.008z M365.488,424.908H141.232V74.756h224.256V424.908z"></path></g></g>
									</svg>
									<span class="page-jackpots-title casino <?php echo get_field('delete_mobile'); ?>">Mobile</span>
								</div>
								<div class="page-jackpots-img-ikon <?php echo get_field('delete_mobile'); ?>">
								</div>
							</div>
						</div>
					</div>
					<div class="autor-block">
						<div class="author-image"><?php $author_email = get_the_author_email(); echo get_avatar($author_email,'75');?></div>
						<div class="author-info">
							<h3 class="author-title"><?php the_author(); ?></h3>
							<span class="author-text"><?php the_author_description();?></span>
							<span class="author-post-counter">Artikel: <?php the_author_posts(); ?></span>
						</div>
					</div>
				</div>
				<div class="page-right">
					<div class="vidjet-casinos-top">
						<div class="vidjet-casinos-top-title">
							<div class="vidjet-ikon" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/cup.svg);"></div>
							<h3 class="vidjet-top-h3">Top 10 Casinos</h3>
						</div>
						<div class="vidjet-casinos-top-content">
							<?php
								if ($items = get_posts(array('numberposts' => 10, 'post_type' => 'post', 'category' => 21))) {
									foreach($items as $item) {
										$rating_brend = get_field('rating_brend', $item->ID);
										echo '<a href="'.get_permalink($item->ID).'">';
											echo '<div class="top-item">';
												echo '<div class="top-image">';
													echo get_the_post_thumbnail($item->ID);
												echo '</div>';
												echo '<div class="top-title">';
													echo '<span>'.$item->post_title.'</span>';
												echo '</div>';
												echo '<div class="top-rating">';
													echo '<span>'.$rating_brend.'</span>';
												echo '</div>';	
											echo '</div>';
										echo '</a>';
									}
								}
							?>
						</div>
          </div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php
	$popup = get_field('popup');
?>
<?php
	if($popup[0] == 'Да') {
?>

	<div class="overlay-block"></div>

	<div class="over-block">
		<div id="cookie-block" class="modal-cookie">
			<div class="modal-wrapper">
				<div class="modal-wrapper-back"></div>
				<div class="modal-window">
					<div class="modal-window-content">
						<div class="modal-window-content-main">
							<div class="modal-window-head">
								<div class="head-block-modal" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/close.svg)"></div>
							</div>
							<div class="modal-window-head-text">
								<p>
									Sehr geehrte Damen und Herren, leider müssen wir Ihnen mitteilen, dass die Webseite von diesem Casino aufgrund der 
									Problemen mit der Lizenz in Deutschland nicht mehr verfügbar ist. 
								</p>
								<p>
									Wir schlagen Ihnen vor, andere Online Casino Webseiten zu besuchen. Unsere Empfehlungen sind folgende Casinos, die in der 
									Rangliste die ersten Positionen haben: 
								</p>
								<ol>
									<li><a href="https://casinosbewertung.de/link/vulkan-vegas/">Vulkan Vegas Casino</a>. Lernen Sie das Casino kennen, registrieren Sie sich und erhalten Sie großzügige Willkommensboni bis zu €1000 und 125 Freispiele!</li>
									<li><a href="https://casinosbewertung.de/link/mrbet/">Mr Bet Casino</a>. Diese Online Glückspielhalle schlägt sogar Boni ohne Einzahlungen vor!</li>
									<li><a href="https://casinosbewertung.de/link/n1-casino/">N1 Casino</a>. Das Online Casino mit Boni für die ersten vier Einzahlungen und 30 Freispiele ohne Einzahlung!</li>
								</ol>
								<p>
									Wie wünschen Ihnen viel Spaß beim Casino Spielen!
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php } ?>

<?php get_footer(); ?>


