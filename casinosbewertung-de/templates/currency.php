<?php
/*Template Name: Currency*/
?>


<?php get_header()?>

<section class="page-content">
	<div class="head-row">
		<div class="page-block-content">
			<div class="breadcrumps">
				<?php true_breadcrumbs(); ?>
			</div>
			<div class="page-title">
				<h1 class="title-page-h1"><?php the_title(); ?></h1>
			</div>
			<div class="page-providers-content">
				<div class="page-left">
					<div class="page-cards-slots providers">
						<?php
							$args = array(
								'parent' => 0,
								'hide_empty' => 0,
								'exclude' => '', 
								'number' => '200',
								'orderby' => 'count',
								'order' => 'DESC',
								'pad_counts' => true
							);
							$catlist = get_terms('currency',$args);
							foreach ($catlist as $cat) {
								echo '<div class="main-slots-item page">';
									echo '<div class="currency-page-card">';
										echo '<div class="currency-page-title">'.$cat->name.'</div>';
										echo '<a class="currency-page-button" href="'.get_term_link($cat->slug, 'currency').'">';
											echo '<div class="ikon-play-btn" style="background-image: url('.get_template_directory_uri().'/img/link.svg);"></div>';
											echo '<span>Bewertung</span>';
										echo '</a>';
									echo '</div>';
								echo '</div>';
							}
						?>
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
<section class="main-block-slots">
	<div class="head-row">
		<div class="main-slots-content">
			<div class="main-slots-title">
				<h2 class="first-text-h2 slots">Slots können Sie kostenlos spielen</h2>
			</div>
			<div class="main-slots-info">
				<?php if ($items = get_posts(array('numberposts' => 15, 'post_type' => 'Slots'))) {
					echo '<div id="owl-slider" class="owl-carousel owl-theme">';
						foreach($items as $item) {
							echo '<div class="main-slots-item">';
								echo '<a class="main-slots-item-link" href="'.get_permalink($item->ID).'">';
									echo '<div class="main-slots-block-image">';
										echo get_the_post_thumbnail($item->ID);
										echo '<div class="main-slots-block-back">';
											echo '<span class="play-btn">';
												echo '<div class="btn-ikon" style="background-image: url('.get_template_directory_uri().'/img/play.svg);"></div>';
											echo '</span>';
											echo '<div class="play-text">Kostenlos spielen</div>';
										echo '</div>';	
									echo '</div>';
									echo '<div class="main-slots-block-title">';
										echo '<span class="title-main-slots-span">'.$item->post_title.'</span>';
									echo '</div>';
								echo '</a>';
							echo '</div>';
						}
					echo '</div>';
				} ?>
			</div>
			<div class="after-cards-button">
				<a href="/online-casino-bewertungen/" class="flex-btn slots">
					<span>Alle Slots</span>
					<div class="btn-ikon all" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/all-slots.svg);"></div>
				</a>
			</div>
		</div>
	</div>
</section>
<section class="page-providers-text">
	<div class="head-row">
		<div class="page-block-content text providers">
			<div class="second-text">
				<?php the_content(); ?>
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
	</div>
</section>

<?php get_footer()?>