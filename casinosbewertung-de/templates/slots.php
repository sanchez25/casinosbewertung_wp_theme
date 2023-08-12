<?php
/*Template Name: Slots*/
?>


<?php get_header()?>

<section class="page-content slots">
	<div class="slots-top-page">
		<div class="head-row">
			<div class="page-block-content">
				<div class="breadcrumps slots-page">
					<?php true_breadcrumbs(); ?>
				</div>
				<div class="page-title">
					<h1 class="title-page-h1 slots"><?php the_title(); ?></h1>
				</div>
				<?php if ($items = get_posts(array('numberposts' => 60, 'post_type' => 'Slots'))) {
					echo '<div class="page-cards-slots">';
						foreach($items as $item) {
							echo '<div class="main-slots-item page">';
								echo '<a class="main-slots-item-link" href="'.get_permalink($item->ID).'">';
									echo '<div class="main-slots-block-image slots">';
										echo get_the_post_thumbnail($item->ID);
										echo '<div class="main-slots-block-back">';
											echo '<span class="play-btn">';
												echo '<div class="btn-ikon" style="background-image: url('.get_template_directory_uri().'/img/play.svg);"></div>';
											echo '</span>';
											echo '<div class="play-text">Kostenlos spielen</div>';
										echo '</div>';	
									echo '</div>';
									echo '<div class="main-slots-block-title">';
										echo '<h3 class="title-main-slots-span">'.$item->post_title.'</h3>';
									echo '</div>';
								echo '</a>';
							echo '</div>';
						}
					echo '</div>';
				} ?>
			</div>
		</div>
	</div>
	<div class="slots-bottom-page">
		<div class="head-row">
			<div class="page-block-content">
				<div class="page-bonus-text">
					<div class="second-text">
						<?php the_content(); ?>
					</div>
					<div class="more-details-block open-btn">
						<div class="detail-btn slots">
							<div class="more-detail-ikon" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/down.svg);"></div>
							<span>Mehr details</span>
						</div>
					</div>
					<div class="more-details-block close-btn">
						<div class="detail-btn slots">
							<div class="more-detail-ikon close" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/down.svg);"></div>
							<span>Ausblenden</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer()?>