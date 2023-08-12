<?php

/* Template Name: Post slots */
 /* Template Post Type: Slots */

get_header();?>

<section class="landing-slots-header" style="background-image: url(<?php echo get_template_directory_uri()?>/img/slots-image.jpg);">
	<div class="landing-slots-header-title">
		<h1 class="landing-slots-header-h1"><?php echo get_the_title(); ?></h1>
		<a href="<?php echo get_field('link_slots'); ?>">von <?php echo get_field('link_slot_pov');?></a>
	</div>
	<div class="landing-slots-header-demo">
		<div class="landing-slots-header-demo-back play">
			<div class="landing-slots-header-demo-cont">
				<div class="landing-slots-header-demo-image">
					<img src="<?php echo get_field('image_play');?>">
				</div>
			</div>
			<span class="landing-slots-header-demo-play">
				<span class="demo-play-ikon-btn">
					<div class="ikon-play-btn slot" style="background-image: url(<?php echo get_template_directory_uri()?>/img/play.svg);"></div>
				</span>
				<span class="demo-play-ikon-text">Abspielen</span>
			</span>
		</div>
		<div class="landing-slots-header-demo-block">
			<div class="landing-slots-header-demo-cont">
				<?php echo get_field('iframe_demo');?>
			</div>
		</div>
		<div class="landing-slots-header-demo-full">
			<div class="header-demo-full-content">
				<div class="full-screen-block">
					<span class="full-screen-buton">
						<div class="ikon_full" style="background-image: url(<?php echo get_template_directory_uri()?>/img/full-screen.svg);"></div>
						<span>Vollbildmodus</span>
					</span>
				</div>
			</div>
		</div>
		<div class="landing-slots-header-demo-button">
			<a href="<?php echo get_field('play_money');?>" class="landing-slots-header-demo-link">
				<div class="demo-play-ikon-button" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/money.svg);"></div>
				<span>Um Echtgeld spielen</span>
			</a>
		</div>
	</div>
</section>
<section class="page-content">
	<div class="head-row">
		<div class="breadcrumps slots">
			<?php true_breadcrumbs(); ?>
		</div>
		<div class="landing-brend-main">
			<div class="page-left">
				<div class="brend-card-slot">
					<div class="brend-card-title-slot">
						<h2 class="single-title-h2">Die Bewertungen zu «<?php echo get_the_title($item->ID);?>»</h2>
					</div>
					<div class="brend-card-content-slot">
						<div class="brend-card-slot-image">
							<?php echo get_the_post_thumbnail($item->ID); ?>
						</div>
						<div class="brend-card-slot-info">
							<?php
								$payout = get_field('payout');
								$gametech = get_field('game_technology');
								$gameprov = get_field('game_provider');
								$popularity = get_field('popularity');
								$paylines = get_field('paylines');
								$jackpot = get_field('jackpot');
								$possibility = get_field('possibility');
							?>
							<?php if ($payout) { ?>
								<div class="brend-card-slot-item">
									<div class="slot-item-left"> 
										<div class="single-slots-ikon" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/crown.svg);"></div>
										<span>Auszahlungsquote</span>
									</div>
									<span class="slot-item-right"><?php echo $payout; ?></span>
								</div>
							<?php } ?>
							<?php if ($gametech) { ?>
							<div class="brend-card-slot-item">
								<div class="slot-item-left"> 
									<div class="single-slots-ikon" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/crown.svg);"></div>
									<span>Spieltechnologie</span>
								</div>
								<span class="slot-item-right"><?php echo $gametech; ?></span>
							</div>
							<?php } ?>
							<?php if ($gameprov) { ?>
							<div class="brend-card-slot-item">
								<div class="slot-item-left"> 
									<div class="single-slots-ikon" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/crown.svg);"></div>
									<span>Spieleanbieter</span>
								</div>
								<span class="slot-item-right"><?php echo $gameprov; ?></span>
							</div>
							<?php } ?>
							<?php if ($popularity) { ?>
							<div class="brend-card-slot-item">
								<div class="slot-item-left"> 
									<div class="single-slots-ikon" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/crown.svg);"></div>
									<span>Beliebtheit</span>
								</div>
								<span class="slot-item-right"><?php echo $popularity; ?></span>
							</div>
							<?php } ?>
							<?php if ($paylines) { ?>
							<div class="brend-card-slot-item">
								<div class="slot-item-left"> 
									<div class="single-slots-ikon" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/crown.svg);"></div>
									<span>Einstellbare Gewinnlinien</span>
								</div>
								<span class="slot-item-right"><?php echo $paylines; ?></span>
							</div>
							<?php } ?>
							<?php if ($jackpot) { ?>
							<div class="brend-card-slot-item">
								<div class="slot-item-left"> 
									<div class="single-slots-ikon" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/crown.svg);"></div>
									<span>Progressiver Jackpot</span>
								</div>
								<span class="slot-item-right"><?php echo $jackpot; ?></span>
							</div>
							<?php } ?>
							<?php if ($possibility) { ?>
							<div class="brend-card-slot-item">
								<div class="slot-item-left"> 
									<div class="single-slots-ikon" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/crown.svg);"></div>
									<span>Verdoppelungsmöglichkeit</span>
								</div>
								<span class="slot-item-right"><?php echo $possibility; ?></span>
							</div>
							<?php } ?>
						</div>
					</div>
				</div>
				<div class="card-slot-rating">
					<div class="card-slot-rating-left">
						<div class="card-slot-rating-title">
							<h3>Ein schnelles Voraburteil</h3>
						</div>
						<div class="card-slot-rating-text">
							<?php echo get_field('slot_rating'); ?>
						</div>
					</div>
					<div class="card-slot-rating-right">
						<span class="card-slot-rating-number"><?php echo get_field('numb_rating'); ?></span>
						<span class="card-slot-rating-num-title">Die Guru Punktewertung</span>
					</div>
				</div>
				<div class="brend-card-slot-text">
					<?php echo the_content(); ?>
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
</section>

<?php get_footer('slots'); ?>
