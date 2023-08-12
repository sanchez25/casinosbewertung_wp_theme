<?php
/*Template Name: Main*/
?>


<?php get_header()?>

<section class="head-block" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/main-banner.jpg)">
	<div class="head-row">
		<div class="head-title">
			<h1 class="title-page-h1 main"><?php the_title(); ?></h1>
		</div>
		<div class="head-search">
			<div class="head-search-block">
				<form method="get" class="search-form-main" action="<?php echo esc_url( home_url( '/' ) ); ?>">
					<input type="search" class="search-field-main" placeholder="Suchen Sie nach Casinos, Boni, Spielautomaten und Artikeln" value="<?php echo get_search_query() ?>" name="s" id="s">
					<button type="submit" class="search-submit-main">
						<div class="search-submit-main-icon" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/search.svg);"></div>
					</button>
				</form>
			</div>
		</div>
	</div>
</section>
<section class="main-content">
	<div class="head-row">
		<div class="first-text">
			<?php the_content(); ?>
		</div>
		<?php
		if ($items = get_posts(array('numberposts' => 50, 'post_type' => 'post'))) {
			echo '<div class="cards">';
				foreach($items as $item) {
					$rating_brend = get_field('rating_brend', $item->ID);
					$text_brend = get_field('text_brend', $item->ID);
					$advant_brend_one = get_field('advant_brend_one', $item->ID);
					$advant_brend_two = get_field('advant_brend_two', $item->ID);
					$advant_brend_three = get_field('advant_brend_three', $item->ID);
					$link_brend = get_field('link_brend', $item->ID);
					$hover_text = get_field('hover_text', $item->ID);

					echo '<div class="main-flex-block">';
						echo '<div class="back-img-card">';
							echo get_the_post_thumbnail($item->ID);
							echo '<div class="top-rating main">'.$rating_brend.'</div>';
						echo '</div>';
						echo '<div class="list-item">';
							echo '<div class="list-item-rating">';
								echo '<a class="rating-link-title" href="'.get_permalink($item->ID).'">';
									echo '<h3 class="rating-title">'.$item->post_title.'</h3>';
								echo '</a>';
								echo '<span class="star-top">';
									echo '<svg viewBox="0 0 200 200" class="ikon-rating" id="ico_rep_verygood">';
										echo '<g data-name="Layer 54">';
											echo '<path fill="none" d="M0 0h200v200H0z"></path>';
											echo '<path d="M73.716 63.684l19.192-38.735a8 8 0 0 1 14.347.022l19.072 38.794 42.77 6.282a8 8 0 0 1 4.413 13.652l-31.002 30.126 7.242 42.618a8 8 0 0 1-11.62 8.416l-38.233-20.175-38.294 20.057a8 8 0 0 
												1-11.594-8.451l7.373-42.596-30.909-30.221a8 8 0 0 1 4.455-13.639z">';
											echo '</path>';
										echo '</g>';
									echo '</svg>';
									echo '<svg viewBox="0 0 200 200" class="ikon-rating" id="ico_rep_verygood">';
										echo '<g data-name="Layer 54">';
											echo '<path fill="none" d="M0 0h200v200H0z"></path>';
											echo '<path d="M73.716 63.684l19.192-38.735a8 8 0 0 1 14.347.022l19.072 38.794 42.77 6.282a8 8 0 0 1 4.413 13.652l-31.002 30.126 7.242 42.618a8 8 0 0 1-11.62 8.416l-38.233-20.175-38.294 20.057a8 8 0 0 
												1-11.594-8.451l7.373-42.596-30.909-30.221a8 8 0 0 1 4.455-13.639z">';
											echo '</path>';
										echo '</g>';
									echo '</svg>';
									echo '<svg viewBox="0 0 200 200" class="ikon-rating" id="ico_rep_verygood">';
										echo '<g data-name="Layer 54">';
											echo '<path fill="none" d="M0 0h200v200H0z"></path>';
											echo '<path d="M73.716 63.684l19.192-38.735a8 8 0 0 1 14.347.022l19.072 38.794 42.77 6.282a8 8 0 0 1 4.413 13.652l-31.002 30.126 7.242 42.618a8 8 0 0 1-11.62 8.416l-38.233-20.175-38.294 20.057a8 8 0 0 
												1-11.594-8.451l7.373-42.596-30.909-30.221a8 8 0 0 1 4.455-13.639z">';
											echo '</path>';
										echo '</g>';
									echo '</svg>';
									echo '<svg viewBox="0 0 200 200" class="ikon-rating" id="ico_rep_verygood">';
										echo '<g data-name="Layer 54">';
											echo '<path fill="none" d="M0 0h200v200H0z"></path>';
											echo '<path d="M73.716 63.684l19.192-38.735a8 8 0 0 1 14.347.022l19.072 38.794 42.77 6.282a8 8 0 0 1 4.413 13.652l-31.002 30.126 7.242 42.618a8 8 0 0 1-11.62 8.416l-38.233-20.175-38.294 20.057a8 8 0 0 
												1-11.594-8.451l7.373-42.596-30.909-30.221a8 8 0 0 1 4.455-13.639z">';
											echo '</path>';
										echo '</g>';
									echo '</svg>';
									echo '<svg viewBox="0 0 200 200" class="ikon-rating" id="ico_rep_verygood">';
										echo '<g data-name="Layer 54">';
											echo '<path fill="none" d="M0 0h200v200H0z"></path>';
											echo '<path d="M73.716 63.684l19.192-38.735a8 8 0 0 1 14.347.022l19.072 38.794 42.77 6.282a8 8 0 0 1 4.413 13.652l-31.002 30.126 7.242 42.618a8 8 0 0 1-11.62 8.416l-38.233-20.175-38.294 20.057a8 8 0 0 
												1-11.594-8.451l7.373-42.596-30.909-30.221a8 8 0 0 1 4.455-13.639z">';
											echo '</path>';
										echo '</g>';
									echo '</svg>';
									echo '<svg viewBox="0 0 200 200" class="ikon-rating" id="ico_rep_verygood">';
										echo '<g data-name="Layer 54">';
											echo '<path fill="none" d="M0 0h200v200H0z"></path>';
											echo '<path d="M73.716 63.684l19.192-38.735a8 8 0 0 1 14.347.022l19.072 38.794 42.77 6.282a8 8 0 0 1 4.413 13.652l-31.002 30.126 7.242 42.618a8 8 0 0 1-11.62 8.416l-38.233-20.175-38.294 20.057a8 8 0 0 
												1-11.594-8.451l7.373-42.596-30.909-30.221a8 8 0 0 1 4.455-13.639z">';
											echo '</path>';
										echo '</g>';
									echo '</svg>';
									echo '<svg viewBox="0 0 200 200" class="ikon-rating" id="ico_rep_verygood">';
										echo '<g data-name="Layer 54">';
											echo '<path fill="none" d="M0 0h200v200H0z"></path>';
											echo '<path d="M73.716 63.684l19.192-38.735a8 8 0 0 1 14.347.022l19.072 38.794 42.77 6.282a8 8 0 0 1 4.413 13.652l-31.002 30.126 7.242 42.618a8 8 0 0 1-11.62 8.416l-38.233-20.175-38.294 20.057a8 8 0 0 
												1-11.594-8.451l7.373-42.596-30.909-30.221a8 8 0 0 1 4.455-13.639z">';
											echo '</path>';
										echo '</g>';
									echo '</svg>';
									echo '<svg viewBox="0 0 200 200" class="ikon-rating" id="ico_rep_verygood">';
										echo '<g data-name="Layer 54">';
											echo '<path fill="none" d="M0 0h200v200H0z"></path>';
											echo '<path d="M73.716 63.684l19.192-38.735a8 8 0 0 1 14.347.022l19.072 38.794 42.77 6.282a8 8 0 0 1 4.413 13.652l-31.002 30.126 7.242 42.618a8 8 0 0 1-11.62 8.416l-38.233-20.175-38.294 20.057a8 8 0 0 
												1-11.594-8.451l7.373-42.596-30.909-30.221a8 8 0 0 1 4.455-13.639z">';
											echo '</path>';
										echo '</g>';
									echo '</svg>';
									echo '<svg viewBox="0 0 200 200" class="ikon-rating" id="ico_rep_verygood">';
										echo '<g data-name="Layer 54">';
											echo '<path fill="none" d="M0 0h200v200H0z"></path>';
											echo '<path d="M73.716 63.684l19.192-38.735a8 8 0 0 1 14.347.022l19.072 38.794 42.77 6.282a8 8 0 0 1 4.413 13.652l-31.002 30.126 7.242 42.618a8 8 0 0 1-11.62 8.416l-38.233-20.175-38.294 20.057a8 8 0 0 
												1-11.594-8.451l7.373-42.596-30.909-30.221a8 8 0 0 1 4.455-13.639z">';
											echo '</path>';
										echo '</g>';
									echo '</svg>';
									echo '<svg viewBox="0 0 200 200" class="ikon-rating" id="ico_rep_verygood">';
										echo '<g data-name="Layer 54">';
											echo '<path fill="none" d="M0 0h200v200H0z"></path>';
											echo '<path d="M73.716 63.684l19.192-38.735a8 8 0 0 1 14.347.022l19.072 38.794 42.77 6.282a8 8 0 0 1 4.413 13.652l-31.002 30.126 7.242 42.618a8 8 0 0 1-11.62 8.416l-38.233-20.175-38.294 20.057a8 8 0 0 
												1-11.594-8.451l7.373-42.596-30.909-30.221a8 8 0 0 1 4.455-13.639z">';
											echo '</path>';
										echo '</g>';
									echo '</svg>';
									echo '<span class="star-icons-fill" style="width: '.$rating_brend.'%">';
										echo '<svg viewBox="0 0 200 200" class="ikon-rating" id="ico_rep_verygood">';
											echo '<g data-name="Layer 54">';
												echo '<path fill="none" d="M0 0h200v200H0z"></path>';
												echo '<path d="M73.716 63.684l19.192-38.735a8 8 0 0 1 14.347.022l19.072 38.794 42.77 6.282a8 8 0 0 1 4.413 13.652l-31.002 30.126 7.242 42.618a8 8 0 0 1-11.62 8.416l-38.233-20.175-38.294 20.057a8 8 0 0 
													1-11.594-8.451l7.373-42.596-30.909-30.221a8 8 0 0 1 4.455-13.639z">';
												echo '</path>';
											echo '</g>';
										echo '</svg>';
										echo '<svg viewBox="0 0 200 200" class="ikon-rating" id="ico_rep_verygood">';
											echo '<g data-name="Layer 54">';
												echo '<path fill="none" d="M0 0h200v200H0z"></path>';
												echo '<path d="M73.716 63.684l19.192-38.735a8 8 0 0 1 14.347.022l19.072 38.794 42.77 6.282a8 8 0 0 1 4.413 13.652l-31.002 30.126 7.242 42.618a8 8 0 0 1-11.62 8.416l-38.233-20.175-38.294 20.057a8 8 0 0 
													1-11.594-8.451l7.373-42.596-30.909-30.221a8 8 0 0 1 4.455-13.639z">';
												echo '</path>';
											echo '</g>';
										echo '</svg>';
										echo '<svg viewBox="0 0 200 200" class="ikon-rating" id="ico_rep_verygood">';
											echo '<g data-name="Layer 54">';
												echo '<path fill="none" d="M0 0h200v200H0z"></path>';
												echo '<path d="M73.716 63.684l19.192-38.735a8 8 0 0 1 14.347.022l19.072 38.794 42.77 6.282a8 8 0 0 1 4.413 13.652l-31.002 30.126 7.242 42.618a8 8 0 0 1-11.62 8.416l-38.233-20.175-38.294 20.057a8 8 0 0 
													1-11.594-8.451l7.373-42.596-30.909-30.221a8 8 0 0 1 4.455-13.639z">';
												echo '</path>';
											echo '</g>';
										echo '</svg>';
										echo '<svg viewBox="0 0 200 200" class="ikon-rating" id="ico_rep_verygood">';
											echo '<g data-name="Layer 54">';
												echo '<path fill="none" d="M0 0h200v200H0z"></path>';
												echo '<path d="M73.716 63.684l19.192-38.735a8 8 0 0 1 14.347.022l19.072 38.794 42.77 6.282a8 8 0 0 1 4.413 13.652l-31.002 30.126 7.242 42.618a8 8 0 0 1-11.62 8.416l-38.233-20.175-38.294 20.057a8 8 0 0 
													1-11.594-8.451l7.373-42.596-30.909-30.221a8 8 0 0 1 4.455-13.639z">';
												echo '</path>';
											echo '</g>';
										echo '</svg>';
										echo '<svg viewBox="0 0 200 200" class="ikon-rating" id="ico_rep_verygood">';
											echo '<g data-name="Layer 54">';
												echo '<path fill="none" d="M0 0h200v200H0z"></path>';
												echo '<path d="M73.716 63.684l19.192-38.735a8 8 0 0 1 14.347.022l19.072 38.794 42.77 6.282a8 8 0 0 1 4.413 13.652l-31.002 30.126 7.242 42.618a8 8 0 0 1-11.62 8.416l-38.233-20.175-38.294 20.057a8 8 0 0 
													1-11.594-8.451l7.373-42.596-30.909-30.221a8 8 0 0 1 4.455-13.639z">';
												echo '</path>';
											echo '</g>';
										echo '</svg>';
										echo '<svg viewBox="0 0 200 200" class="ikon-rating" id="ico_rep_verygood">';
											echo '<g data-name="Layer 54">';
												echo '<path fill="none" d="M0 0h200v200H0z"></path>';
												echo '<path d="M73.716 63.684l19.192-38.735a8 8 0 0 1 14.347.022l19.072 38.794 42.77 6.282a8 8 0 0 1 4.413 13.652l-31.002 30.126 7.242 42.618a8 8 0 0 1-11.62 8.416l-38.233-20.175-38.294 20.057a8 8 0 0 
													1-11.594-8.451l7.373-42.596-30.909-30.221a8 8 0 0 1 4.455-13.639z">';
												echo '</path>';
											echo '</g>';
										echo '</svg>';
										echo '<svg viewBox="0 0 200 200" class="ikon-rating" id="ico_rep_verygood">';
											echo '<g data-name="Layer 54">';
												echo '<path fill="none" d="M0 0h200v200H0z"></path>';
												echo '<path d="M73.716 63.684l19.192-38.735a8 8 0 0 1 14.347.022l19.072 38.794 42.77 6.282a8 8 0 0 1 4.413 13.652l-31.002 30.126 7.242 42.618a8 8 0 0 1-11.62 8.416l-38.233-20.175-38.294 20.057a8 8 0 0 
													1-11.594-8.451l7.373-42.596-30.909-30.221a8 8 0 0 1 4.455-13.639z">';
												echo '</path>';
											echo '</g>';
										echo '</svg>';
										echo '<svg viewBox="0 0 200 200" class="ikon-rating" id="ico_rep_verygood">';
											echo '<g data-name="Layer 54">';
												echo '<path fill="none" d="M0 0h200v200H0z"></path>';
												echo '<path d="M73.716 63.684l19.192-38.735a8 8 0 0 1 14.347.022l19.072 38.794 42.77 6.282a8 8 0 0 1 4.413 13.652l-31.002 30.126 7.242 42.618a8 8 0 0 1-11.62 8.416l-38.233-20.175-38.294 20.057a8 8 0 0 
													1-11.594-8.451l7.373-42.596-30.909-30.221a8 8 0 0 1 4.455-13.639z">';
												echo '</path>';
											echo '</g>';
										echo '</svg>';
										echo '<svg viewBox="0 0 200 200" class="ikon-rating" id="ico_rep_verygood">';
											echo '<g data-name="Layer 54">';
												echo '<path fill="none" d="M0 0h200v200H0z"></path>';
												echo '<path d="M73.716 63.684l19.192-38.735a8 8 0 0 1 14.347.022l19.072 38.794 42.77 6.282a8 8 0 0 1 4.413 13.652l-31.002 30.126 7.242 42.618a8 8 0 0 1-11.62 8.416l-38.233-20.175-38.294 20.057a8 8 0 0 
													1-11.594-8.451l7.373-42.596-30.909-30.221a8 8 0 0 1 4.455-13.639z">';
												echo '</path>';
											echo '</g>';
										echo '</svg>';
										echo '<svg viewBox="0 0 200 200" class="ikon-rating" id="ico_rep_verygood">';
											echo '<g data-name="Layer 54">';
												echo '<path fill="none" d="M0 0h200v200H0z"></path>';
												echo '<path d="M73.716 63.684l19.192-38.735a8 8 0 0 1 14.347.022l19.072 38.794 42.77 6.282a8 8 0 0 1 4.413 13.652l-31.002 30.126 7.242 42.618a8 8 0 0 1-11.62 8.416l-38.233-20.175-38.294 20.057a8 8 0 0 
													1-11.594-8.451l7.373-42.596-30.909-30.221a8 8 0 0 1 4.455-13.639z">';
												echo '</path>';
											echo '</g>';
										echo '</svg>';
									echo '</span>';
								echo '</span>';
							echo '</div>';
							echo '<div class="list-item-cont">';
								echo '<div class="item-cont-text">';
									echo '<span class="item-cont-text-span">'.$text_brend.'</span>';
								echo '</div>';
								echo '<div class="tc-apply">';
									echo '<div class="tc-apply-title">';
										echo '<div class="tc-apply-ikon" style="background-image: url('.get_template_directory_uri().'/img/question.svg);"></div>';
										echo '<span class="tc-apply-text">T&C’s Apply</span>';
									echo '</div>';
									echo '<div id="tcapply">'.$hover_text.'</div>';
								echo '</div>';
							echo '</div>';
							if ($advant_brend_one && $advant_brend_two && $advant_brend_three) {
								echo '<div class="list-item-advantage">';
									echo '<ul>';
										echo '<li>'.$advant_brend_one.'</li>';
										echo '<li>'.$advant_brend_two.'</li>';
										echo '<li>'.$advant_brend_three.'</li>';
									echo '</ul>';
								echo '</div>';
							} else {
								echo '<div class="no-page-list-item-advantage"></div>';
							}
						echo '</div>';
						echo '<div class="button-block-list">';
							echo '<div class="block-flex-btn">';
								echo '<a href="'.$link_brend.'" class="flex-btn">';
									echo '<div class="btn-ikon" style="background-image: url('.get_template_directory_uri().'/img/play.svg);"></div>';
									echo '<span>Jetzt spielen</span>';
								echo '</a>';
							echo '</div>';
							echo '<div class="block-overview">';
								echo '<a href="'.get_permalink($item->ID).'" class="link-overview">';
									echo '<img class="overview-ikon img-svg" src="'.get_template_directory_uri().'/img/bewertung.svg" alt="Bewertung">';
									echo '<span>Bewertung</span>';
								echo '</a>';
							echo '</div>';
						echo '</div>';
					echo '</div>';
				}
			echo '</div>';
			
			
		}
		?>
		<div class="after-cards-button">
			<a href="/online-casino-bewertungen/" class="flex-btn all">
				<span>Alle Casinos</span>
				<div class="btn-ikon all" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/all.svg);"></div>
			</a>
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
				<a href="/slots/" class="flex-btn slots">
					<span>Alle Slots</span>
					<div class="btn-ikon all" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/all-slots.svg);"></div>
				</a>
			</div>
		</div>
	</div>
</section>
<section class="main-block-bonuses">
	<div class="head-row">
		<div class="main-bonuses-content">
			<div class="main-bonuses-title">
				<h2 class="first-text-h2 bonuses">Boni für Spieler</h2>
			</div>
			<div class="main-bonuses-info">
				<div class="main-bonuses-column">
					<div class="main-bonuses-column-title">
						<div class="ikon-main-bonus" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/fire.svg);"></div>
						<h3>Die top empfohlenen Boni</h3>
					</div>
					<div class="main-bonuses-column-content">
						<?php if ($items = get_posts(array('numberposts' => 10, 'post_type' => 'Bonuses', 'category' => 236))) {
							foreach($items as $item) {
								$link_brend = get_field('link_brend', $item->ID);
								$hover_text = get_field('hover_text', $item->ID);
								echo '<div class="main-bonuses-item">';
									echo '<div class="main-bonuses-item-head">';
										echo '<a href="'.get_permalink($item->ID).'">';
											echo '<div class="main-bonuses-item-image">';
												echo get_the_post_thumbnail($item->ID);
											echo '</div>';
											echo '<div class="main-bonuses-item-text left">';
												echo '<span class="main-bonuses-item-title">'.$item->post_title.'</span>';
											echo '</div>';
										echo '</a>';
									echo '</div>';
									echo '<div class="main-bonuses-item-right">';
										echo '<div class="main-bonuses-item-buttons">';
											echo '<a href="'.$link_brend.'" class="flex-btn bonus">';
												echo '<span>Erhalten bonus</span>';
												echo '<div class="btn-ikon-bonus" style="background-image: url('.get_template_directory_uri().'/img/right-arrow.svg);"></div>';
											echo '</a>';
											echo '<div class="tc-apply">';
												echo '<div class="tc-apply-title">';
													echo '<div class="tc-apply-ikon" style="background-image: url('.get_template_directory_uri().'/img/question.svg);"></div>';
													echo '<span class="tc-apply-text">T&C’s Apply</span>';
												echo '</div>';
												echo '<div id="tcapply">'.$hover_text.'</div>';
											echo '</div>';
										echo '</div>';
									echo '</div>';
								echo '</div>';
							}
						} ?>
					</div>
					<div class="after-cards-button">
						<a href="/bonuces/" class="flex-btn all">
							<span>Alle Boni</span>
							<div class="btn-ikon all" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/all.svg);"></div>
						</a>
					</div>
				</div>
				<div class="main-bonuses-column">
					<div class="main-bonuses-column-title">
						<div class="ikon-main-bonus" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/star.svg);"></div>
						<h3>Die aktuellen Boni</h3>
					</div>
					<div class="main-bonuses-column-content">
						<?php if ($items = get_posts(array('numberposts' => 10, 'post_type' => 'Bonuses', 'category' => 235))) {
							foreach($items as $item) {
								$link_brend = get_field('link_brend', $item->ID);
								$hover_text = get_field('hover_text', $item->ID);
								echo '<div class="main-bonuses-item">';
									echo '<div class="main-bonuses-item-head">';
										echo '<a href="'.get_permalink($item->ID).'">';
											echo '<div class="main-bonuses-item-image">';
												echo get_the_post_thumbnail($item->ID);
											echo '</div>';
											echo '<div class="main-bonuses-item-text">';
												echo '<span class="main-bonuses-item-title">'.$item->post_title.'</span>';
											echo '</div>';
										echo '</a>';
									echo '</div>';
									echo '<div class="main-bonuses-item-right">';
										echo '<div class="bonuses-block-date">';
											echo '<span class="bonus-date-text">'.get_the_date('Y-m-d', $item->ID).'</span>';
											echo '<div class="tc-apply">';
												echo '<div class="tc-apply-title">';
													echo '<div class="tc-apply-ikon" style="background-image: url('.get_template_directory_uri().'/img/question.svg);"></div>';
													echo '<span class="tc-apply-text">T&C’s Apply</span>';
												echo '</div>';
												echo '<div id="tcapply">'.$hover_text.'</div>';
											echo '</div>';
								  		echo '</div>';
									echo '</div>';
								echo '</div>';
							}
						} ?>
					</div>
					<div class="after-cards-button">
						<a href="/bonuces/" class="flex-btn all">
							<span>Alle Boni</span>
							<div class="btn-ikon all" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/all.svg);"></div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="main-block-payment">
	<div class="head-row">
		<div class="main-payment-content">
			<div class="main-payment-title">
				<h2 class="first-text-h2 providers">Zahlungsmethoden und Anbieter für Spieler</h2>
			</div>
			<div class="main-pay-content">
				<div class="main-pay-content-title">
					<div class="ikon-main-bonus" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/payment.svg);"></div>
					<h3>Zahlungsarten</h3>
				</div>
				<div class="main-pay-content-slider">
					<div id="owl-slider-pay" class="owl-carousel owl-theme">
						<?php
							$args = array(
								'parent' => 0,
								'hide_empty' => 0,
								'exclude' => '', 
								'number' => '12',
								'orderby' => 'count',
								'order' => 'DESC',
								'pad_counts' => true
							);
							$catlist = get_terms('pay',$args);
							foreach ($catlist as $cat) {
								echo '<div class="main-slots-item">';
									echo '<a class="main-slots-item-link" href="'.get_term_link($cat->slug, 'pay').'">';
										echo '<div class="main-slots-block-image providers">';
											echo '<img src="'.z_taxonomy_image_url($cat->term_id, 'pay_cards').'" />';
											echo '<div class="main-slots-block-back">';
												echo '<span class="play-btn">';
													echo '<div class="ikon-play-btn" style="background-image: url('.get_template_directory_uri().'/img/link.svg);"></div>';
												echo '</span>';
												echo '<div class="play-text">Bewertung</div>';
											echo '</div>';	
										echo '</div>';
										echo '<div class="main-slots-block-title">';
											echo '<span class="title-main-slots-span">'.$cat->name.'</span>';
										echo '</div>';
									echo '</a>';
								echo '</div>';
							}
						?>
					</div>
				</div>
				<div class="after-cards-button">
					<a href="/pay/" class="flex-btn slots pay">
						<span>Alle Zahlungsmethoden</span>
						<div class="btn-ikon all" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/all-slots.svg);"></div>
					</a>
				</div>
			</div>
			<div class="main-pay-content providers">
				<div class="main-pay-content-title">
					<div class="ikon-main-bonus" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/providers.svg);"></div>
					<h3>Anbieterliste</h3>
				</div>
				<div class="main-pay-content-slider">
					<div id="owl-slider-providers" class="owl-carousel owl-theme">
						<?php
							$args = array(
								'parent' => 0,
								'hide_empty' => 0,
								'exclude' => '', 
								'number' => '12',
								'orderby' => 'count',
								'order' => 'DESC',
								'pad_counts' => true
							);
							$catlist = get_terms('providers',$args);
							foreach ($catlist as $cat) {
								echo '<div class="main-slots-item">';
									echo '<a class="main-slots-item-link" href="'.get_term_link($cat->slug, 'providers').'">';
										echo '<div class="main-slots-block-image providers">';
											echo '<img src="'.z_taxonomy_image_url($cat->term_id, 'pay_cards').'" />';
											echo '<div class="main-slots-block-back">';
												echo '<span class="play-btn">';
													echo '<div class="ikon-play-btn" style="background-image: url('.get_template_directory_uri().'/img/link.svg);"></div>';
												echo '</span>';
												echo '<div class="play-text">Bewertung</div>';
											echo '</div>';	
										echo '</div>';
										echo '<div class="main-slots-block-title">';
											echo '<span class="title-main-slots-span">'.$cat->name.'</span>';
										echo '</div>';
									echo '</a>';
								echo '</div>';
							}
						?>
					</div>
				</div>
				<div class="after-cards-button">
					<a href="/providers/" class="flex-btn slots providers">
						<span>Alle Anbieterliste</span>
						<div class="btn-ikon all" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/all-slots.svg);"></div>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="second-text-block">
	<div class="head-row">
		<div class="second-text">
			<?php 
				$text_after = get_field('text_after', '279');
				echo $text_after; 
			?>
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
</section>
<section class="faq-block">
	<div class="head-row">
		<div class="faq-block-title">
			<h2 class="first-text-h2 faq">FAQ über Online Casinos in Deutschland</h2>
		</div>
		<div class="faq-list">
			<div class="faq-section">
				<div class="faq-section-item">
					<div class="faq-title" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/faq-question.svg);">
						<span>Ist es legal, in Online Casinos zu spielen?</span>
					</div>
					<div class="faq-ikon" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/faq.svg)"></div>
				</div>
				<div class="faq-answer-item">
					<p class="faq-answer">
						Verschiedene Territorien haben unterschiedliche Vorschriften, wenn es um Casinos geht, und einige Casinos sind zum Beispiel in einigen Ländern verfügbar, in anderen nicht. 
						Wenden Sie sich an einen Rechtsexperten des Landes, wo Sie sich befinden, wenn Sie sich nicht sicher sind, ob es legal ist, in Online-Casinos Ihres Landes zu spielen.
					</p>
				</div>
			</div>
			<div class="faq-section">
				<div class="faq-section-item">
					<div class="faq-title" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/faq-question.svg);">
						<span>Was muss man bei der Wahl des Casinos beachten?</span>
					</div>
					<div class="faq-ikon" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/faq.svg)"></div>
				</div>
				<div class="faq-answer-item">
					<ol>
						<li>Sicherheit: Wenn Sie möchten, dass Ihr Geld und Ihre persönlichen Daten sicher sind.</li>
						<li>Lizenz: Stellen Sie sicher, dass die Casinos, in denen Sie spielen, von einem seriösen Unternehmen vollständig lizenziert sind.</li>
						<li>Bonus: Holen Sie sich den besten Willkommensbonus.</li>
						<li>Spiele: wie viele Spiele sowie die Vielfalt und Qualität der verfügbaren Spiele.</li>
						<li>Transaktionen: Auswahl der Zahlungsmethoden sowie einfache, sichere und schnelle Ein- und Auszahlungen.</li>
						<li>Kundenbetreuung: Guter Kundensupport, der leicht zu erreichen ist und schnell reagiert.</li>
					</ol>
				</div>
			</div>
			<div class="faq-section">
				<div class="faq-section-item">
					<div class="faq-title" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/faq-question.svg);">
						<span>Alle Casino-Webseiten betrügen Spieler?</span>
					</div>
					<div class="faq-ikon" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/faq.svg)"></div>
				</div>
				<div class="faq-answer-item">
					<p class="faq-answer">
						Es gibt einige sehr seltene Beispiele von Casinos, die in Bezug auf Themen wie Spielfairness und Auszahlungen nicht den Best Practices folgen, 
						aber diese werden von der überwiegenden Mehrheit der fairen und übertriebenen Casinos in den Schatten gestellt. Seien Sie sicher, dass wir Ihnen nur gute und vertrauenswürdige 
						Seiten empfehlen. Wenn sie also auf diesen Seiten eine gute Bewertung lesen, können Sie sicher sein, dass sie niemanden betrügen!
					</p>
				</div>
			</div>
			<div class="faq-section">
				<div class="faq-section-item">
					<div class="faq-title" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/faq-question.svg);">
						<span>Wie versteht man, das ein Online Casino vertrauenswürdig ist?</span>
					</div>
					<div class="faq-ikon" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/faq.svg)"></div>
				</div>
				<div class="faq-answer-item">
					<p class="faq-answer">
						Das erste, wonach Sie suchen müssen, wenn Sie sich eine Casino-Site ansehen, ist ihre Lizenz, die unten auf der Seite angezeigt wird. 
						Eine gute Lizenz – z. B. aus Großbritannien, Malta oder Gibraltar – garantiert, dass ein Casino vertrauenswürdig ist. Wir führen gründliche Überprüfungen aller Casinos und ihre Lizenzen durch, 
						die auf unseren Bewertungsseiten erscheinen. Das bedeutet, wenn wir sagen, dass ein Casino zuverlässig ist, können Sie dort mit vollem Vertrauen spielen.
					</p>
				</div>
			</div>
			<div class="faq-section">
				<div class="faq-section-item">
					<div class="faq-title" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/faq-question.svg);">
						<span>Wie zahle Ich in den Casinos ein?</span>
					</div>
					<div class="faq-ikon" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/faq.svg)"></div>
				</div>
				<div class="faq-answer-item">
					<p class="faq-answer">
						Die Einzahlung von Geld in ein Casino ist einfach und Sie können Ihre bevorzugte Methode wählen. Fast in allen Casinos können Sie mit Ihren Debit- und Kreditkarten, E-Wallats, 
						Gutscheinsystemen und Banküberweisungen einzahlen. Wählen Sie die passende Methode und zahlen Sie sofort ein.
					</p>
				</div>
			</div>
			<div class="faq-section">
				<div class="faq-section-item">
					<div class="faq-title" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/faq-question.svg);">
						<span>Können die Casino Spiele mit den Live Dealern gespielt werden?</span>
					</div>
					<div class="faq-ikon" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/faq.svg)"></div>
				</div>
				<div class="faq-answer-item">
					<p class="faq-answer">
						In den letzten Jahren sind Live-Dealer-Gaming-Webseiten exponentiell gewachsen. Jetzt können Sie fast in jedem Online-Casino Live-Casinospiele wie Blackjack, 
						Baccarat und Roulette spielen, während Sie einen Live-Stream des Dealers direkt auf Ihrem Computer oder Ihrem Smartphone sehen.
					</p>
				</div>
			</div>
			<div class="faq-section">
				<div class="faq-section-item">
					<div class="faq-title" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/faq-question.svg);">
						<span>Kann Ich auf meinem iPhone oder Tablet Glücksspiele spielen?</span>
					</div>
					<div class="faq-ikon" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/faq.svg)"></div>
				</div>
				<div class="faq-answer-item">
					<p class="faq-answer">
						Die Mehrheit der leidenschaftlichen Spieler verwendet mobile Geräte wie ein Smartphone oder Tablet, um online zu spielen. Moderne Casinospiele wurden für das mobile Spielen entwickelt, 
						sodass Sie die genauso genießen können, als würden Sie auf einem Computer spielen. Oder sogar besser!
					</p>
				</div>
			</div>
			<div class="faq-section">
				<div class="faq-section-item">
					<div class="faq-title" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/faq-question.svg);">
						<span>Ich wohne in Deutschland. Was sind die populärsten Online Casinos im Moment?</span>
					</div>
					<div class="faq-ikon" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/faq.svg)"></div>
				</div>
				<div class="faq-answer-item">
					<p class="faq-answer">
						Es gibt drei populärsten Online Casinos in Deutschland im Moment:
					</p>
					<ul>
						<li>Vulkan Vegas</li>
						<li>Mr Bet</li>
						<li>Wildz</li>
					</ul>
					<p class="faq-answer">
						In unserer breiten Liste der Casino Bewertungen können Sie für sich das die beste Glücksspielhalle mit aktuellen Boni finden.
					</p>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer()?>