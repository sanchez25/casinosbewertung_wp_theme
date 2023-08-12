<footer>
    <div class="footer-block">
        <div class="footer-lang">
            <a href="https://kasyno-onlines.pl" class="footer-lang-items">
                <img src="https://casinosbewertung.de/wp-content/uploads/2021/04/flagge-polen.png" width="23" height="15" alt="Polski">
                <span>Polski</span>
            </a>
            <a href="https://sporeglenceleriburda.com/" class="footer-lang-items">
                <img src="https://casinosbewertung.de/wp-content/uploads/2021/04/flag-turkiye-15x22-1.gif" width="23" height="15" alt="Türkçe">
                <span>Türkçe</span>
            </a>
            <a href="https://igamingtop.com" class="footer-lang-items">
                <img src="https://casinosbewertung.de/wp-content/uploads/2021/04/flag-russia-15x23-1.gif" width="23" height="15" alt="Русский">
                <span>Русский</span>
            </a>
            <a href="https://casinoonlines.jp" class="footer-lang-items">
                <img src="https://casinosbewertung.de/wp-content/uploads/2021/04/flag-japan-15x23-1.gif" width="23" height="15" alt="日本語">
                <span>日本語</span>
            </a>
        </div>
        <div class="columns-footer">
            <div class="column-item">
                <a href="//www.dmca.com/Protection/Status.aspx?ID=f39419ed-e2a4-45e4-88b9-aeba1695fc87" rel="nofollow noopener" target="_blank" aria-label="DMCA.com Protection Status">
                    <div class="dmca-badge"></div>
                </a>
                <a href="https://gamcare.org/" rel="nofollow noopener" target="_blank" aria-label="Gamcare">
                    <div class="gamcare"></div>
                </a>
                <a href="https://www.begambleaware.org/" rel="nofollow noopener" target="_blank" aria-label="Begambleaware">
                    <div class="begambleaware"></div>
                </a>
                <div class="eighteen"></div>
            </div>
            <div class="column-item last">
               <!-- <div class="email">
                    <span class="email-title">Mailen Sie uns für alle Ihre Fragen</span>
                    <span class="email-info">ad.apply.seo@gmail.com</span>
                </div> -->
                <div class="after-email">
                    <a href="https://casinosbewertung.de/">casinosbewertung.de</a> 
                    <span>© 2020-2021</span> 
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
<script>
    jQuery(document).ready(function ($) {
        $('.menu-mobile-button').on('click', function() {
  			$('.modal').toggleClass('active');
            return false;
		});

        $('.menu-mobile-button').on('click', function() {
  			$('.mobile-menu').toggleClass('active');
            return false;
		});

        $('.modal').on('click', function() {
  			$('.mobile-menu').removeClass('active');
            $('.menu-mobile-button').removeClass('active');
            $(this).removeClass('active');
		});

        $('.bottom-card-item-title-countries').on('click', function() {
			$(this).parent().children('.bottom-card-item-title-content').slideToggle(300, function() {
				if($(this).is(':hidden')) {
					$(this).siblings().children().removeClass('check');
				}
				else {
					$(this).siblings().children().addClass('check');
				}
			}); 
			return false;
		});

        $('.open-btn').click(function(){
            $(this).hide();
            $('.close-btn').show();
            $('.second-text').addClass('all-text');
        });

        $('.close-btn').click(function(){
            $(this).hide();
            $('.open-btn').show();
            $('.second-text').removeClass('all-text');
        });

        $('.landing-slots-header-demo-play').on('click', function() {
			$('.landing-slots-header-demo-back').removeClass('play');
			$('.landing-slots-header-demo-block').addClass('play');
			$('.landing-slots-header-demo-full').addClass('play');
		});

		document.querySelector('.full-screen-buton').addEventListener('click', function(){
			if(document.documentElement.webkitRequestFullscreen) {
				document.querySelector('.demo_iframe').webkitRequestFullscreen();
			}
			else{
				document.documentElement.mozRequestFullScreen();
			}
		});

    });
</script>
</body>
</html>
