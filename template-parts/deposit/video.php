<section class="defi-video">
	<div class="defi-video__container">
		<div class="defi-video__thumbnail">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/deposit/video.png" alt="Video thumbnail">
			<button class="defi-video__play-button" id="play-video">
				<svg width="125" height="125" viewBox="0 0 125 125" fill="none" xmlns="http://www.w3.org/2000/svg">
					<g id="Play buttin">
						<circle id="Ellipse 904" cx="62.1486" cy="62.1486" r="62.1486" fill="white" fill-opacity="0.2"/>
						<path id="Polygon 1" d="M90 60.2679C91.3333 61.0378 91.3333 62.9622 90 63.7321L49.5 87.1147C48.1667 87.8845 46.5 86.9223 46.5 85.3827L46.5 38.6173C46.5 37.0777 48.1667 36.1155 49.5 36.8853L90 60.2679Z" fill="white"/>
					</g>
				</svg>

			</button>
		</div>
		<div class="defi-video__video-container" id="video-container" style="display: none;">
			<!-- Изначально iframe скрыт, и только при нажатии он загружается -->
			<iframe id="youtube-video"  frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
		</div>
	</div>
</section>

<script>
    document.getElementById('play-video').addEventListener('click', function() {
        document.querySelector('.defi-video__thumbnail').style.display = 'none';
        document.getElementById('video-container').style.display = 'block';

        var youtubeVideo = document.getElementById('youtube-video');
        youtubeVideo.src = "https://www.youtube.com/embed/ukZzI2Qt5KQ?autoplay=1";

    });
</script>