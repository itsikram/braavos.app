<?php

/**
 * The template for displaying the Brokerage and Asset Management page.
 *
 *
 * Template name: Defi page
 *
 */
$theme_options = get_option( 'theme_option' );

$defi_hero_text = $theme_options['defi_hero_text'];

$defi_hero_image_alt = get_post_meta( $theme_options['defi_hero_image']['id'], '_wp_attachment_image_alt', true );
$defi_hero_image = $theme_options['defi_hero_image']['url'];

$defi_hero_image_mobile_alt = get_post_meta( $theme_options['defi_hero_image_mobile']['id'], '_wp_attachment_image_alt', true );
$defi_hero_image_mobile = $theme_options['defi_hero_image_mobile']['url'];


$defi_video_placehoder_image = $theme_options['defi_video_placehoder_image']['url'];
$defi_video_placehoder_image_alt = get_post_meta( $theme_options['defi_video_placehoder_image']['id'], '_wp_attachment_image_alt', true );

$defi_description_image  =$theme_options['defi_description_image']['url'];
$defi_description_image_alt = get_post_meta( $theme_options['defi_description_image']['id'], '_wp_attachment_image_alt', true );
get_header(); ?>
<main class="main-section">
	<section class="defi-hero defi-hero--dark">
		<div class="defi-hero__container">
			<div class="defi-hero__left-wrapper">
				<div class="defi-hero__icon">
					<img src="<?php echo site_url(); ?>/wp-content/themes/braavos/assets/images/defi/Plus.svg" alt="">
				</div>
				<h1 class="defi-hero__title">
					<?php echo $defi_hero_text; ?>
					 </h1>
				<ul class="defi-hero__list">
					<li class="defi-hero__item">
						Experience DeFi simplified with Braavos DeFi dashboard </li>
					<li class="defi-hero__item">
						All your DeFi investments are visible on the wallet’s portfolio screen </li>
					<li class="defi-hero__item">
						Track the performance of your positions. Get notified when positions are out or range or require action </li>
				</ul>
				<a href="<?php echo site_url(); ?>/download-braavos-wallet/" class="defi-hero__link">
					<span class="defi-hero__link-icon">
						<svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
							<path d="M21.875 13.5V19.5C21.875 19.7984 21.7565 20.0845 21.5455 20.2955C21.3345 20.5065 21.0484 20.625 20.75 20.625H4.25C3.95163 20.625 3.66548 20.5065 3.4545 20.2955C3.24353 20.0845 3.125 19.7984 3.125 19.5V13.5C3.125 13.2016 3.24353 12.9155 3.4545 12.7045C3.66548 12.4935 3.95163 12.375 4.25 12.375C4.54837 12.375 4.83452 12.4935 5.0455 12.7045C5.25647 12.9155 5.375 13.2016 5.375 13.5V18.375H19.625V13.5C19.625 13.2016 19.7435 12.9155 19.9545 12.7045C20.1655 12.4935 20.4516 12.375 20.75 12.375C21.0484 12.375 21.3345 12.4935 21.5455 12.7045C21.7565 12.9155 21.875 13.2016 21.875 13.5ZM11.7041 14.2959C11.8086 14.4008 11.9328 14.484 12.0695 14.5408C12.2063 14.5976 12.3529 14.6268 12.5009 14.6268C12.649 14.6268 12.7956 14.5976 12.9324 14.5408C13.0691 14.484 13.1933 14.4008 13.2978 14.2959L17.0478 10.5459C17.2592 10.3346 17.3779 10.0479 17.3779 9.74906C17.3779 9.45018 17.2592 9.16353 17.0478 8.95219C16.8365 8.74084 16.5498 8.62211 16.2509 8.62211C15.9521 8.62211 15.6654 8.74084 15.4541 8.95219L13.625 10.7812V3C13.625 2.70163 13.5065 2.41548 13.2955 2.2045C13.0845 1.99353 12.7984 1.875 12.5 1.875C12.2016 1.875 11.9155 1.99353 11.7045 2.2045C11.4935 2.41548 11.375 2.70163 11.375 3V10.7812L9.54594 8.95406C9.44129 8.84942 9.31706 8.7664 9.18033 8.70977C9.0436 8.65314 8.89706 8.62399 8.74906 8.62399C8.45018 8.62399 8.16353 8.74272 7.95219 8.95406C7.84754 9.05871 7.76453 9.18294 7.7079 9.31967C7.65126 9.4564 7.62211 9.60294 7.62211 9.75094C7.62211 10.0498 7.74084 10.3365 7.95219 10.5478L11.7041 14.2959Z" fill="white"></path>
						</svg>
					</span>
					<span class="defi-hero__link-text">
						Download Braavos Wallet </span>
				</a>

			</div>
			<div class="defi-hero__right-wrapper">
				<img class="hide-in-mobile" src="<?php echo $defi_hero_image; ?>" alt="<?php echo $defi_hero_image; ?>">
				<img class="show-in-mobile d-none" src="<?php echo $defi_hero_image_mobile; ?>" alt=""<?php echo $defi_hero_image_mobile_alt; ?>>
			</div>
		</div>
	</section>
	<section class="defi-video">
		<div class="defi-video__container">
			<div class="defi-video__thumbnail">
				<img src="<?php echo $defi_video_placehoder_image; ?>" alt="Video thumbnail">
				<button class="defi-video__play-button" id="play-video">
					<svg width="125" height="125" viewBox="0 0 125 125" fill="none" xmlns="http://www.w3.org/2000/svg">
						<g id="Play buttin">
							<circle id="Ellipse 904" cx="62.1486" cy="62.1486" r="62.1486" fill="white" fill-opacity="0.2"></circle>
							<path id="Polygon 1" d="M90 60.2679C91.3333 61.0378 91.3333 62.9622 90 63.7321L49.5 87.1147C48.1667 87.8845 46.5 86.9223 46.5 85.3827L46.5 38.6173C46.5 37.0777 48.1667 36.1155 49.5 36.8853L90 60.2679Z" fill="white"></path>
						</g>
					</svg>

				</button>
			</div>
			<div class="defi-video__video-container" id="video-container" style="display: none;">
				
			</div>
		</div>
	</section>

	<script>
		document.getElementById('play-video').addEventListener('click', function() {
			document.querySelector('.defi-video__thumbnail').style.display = 'none';
			document.getElementById('video-container').style.display = 'block';
			document.getElementById('video-container').innerHTML = '<iframe id="youtube-video" src="https://www.youtube.com/embed/l9qpuI-7wsM?autoplay=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>';

			var youtubeVideo = document.getElementById('youtube-video');
			youtubeVideo.src = "https://www.youtube.com/embed/l9qpuI-7wsM?autoplay=1";

		});
	</script>
	<section class="defi-description">
		<div class="defi-description__container">
			<h2 class="defi-description__title">
				Experience DeFi simplified with Braavos DeFi dashboard </h2>
			<div class="defi-description__wrapper">
				<div class="defi-description__left-wrapper">
					<h3 class="defi-description__subtitle">
						The all-new Braavos wallet now offers a better DeFi experience&nbsp; </h3>
					<p class="defi-description__text">
						You can track all your DeFi positions - lending, borrowing and LP tokens - in one place right on the portfolio home screen of the wallet (with a beautiful pie chart as well!) </p>
					<ul class="defi-description__list">
						<li class="defi-description__item">
							Get a 360° view of all your investments directly in your wallet </li>
						<li class="defi-description__item">
							See if your positions are out of range or require action </li>
						<li class="defi-description__item">
							For mySwap, rebalance your investments with one-click </li>
					</ul>
				</div>
				<div class="defi-description__right-wrapper">
					<img src="<?php echo $defi_description_image; ?>" alt="<?php echo $defi_description_image_alt; ?>">
				</div>
			</div>
		</div>
	</section>
	<section class="home-socials">
		<div class="home-socials__container">
			<h2 class="home-socials__title"> Want to get involved?</h2>
			<ul class="home-socials__list">
				<li class="home-socials__item"> <a href="https://x.com/myBraavos">
						<div class="home-socials__image"> <img src="<?php echo site_url(); ?>/wp-content/themes/braavos/assets/images/x-svg-dark.svg" alt="" data-theme="dark" style="display: block;"> <img src="<?php echo site_url(); ?>/wp-content/themes/braavos/assets/images/x-svg-light.svg" alt="" data-theme="light" style="display: none;"></div>
						<p class="home-socials__text"> X</p>
					</a></li>
				<li class="home-socials__item"> <a href="https://discord.com/invite/9Ks7V5DN9z">
						<div class="home-socials__image"> <img src="<?php echo site_url(); ?>/wp-content/uploads/2024/10/icon_clyde_blurple_RGB-1.png" alt=""></div>
						<p class="home-socials__text"> Discord</p>
					</a></li>
				<li class="home-socials__item"> <a href="https://t.me/mybraavos">
						<div class="home-socials__image"> <img src="<?php echo site_url(); ?>/wp-content/uploads/2024/10/Logo-2.png" alt=""></div>
						<p class="home-socials__text"> Telegram</p>
					</a></li>
				<li class="home-socials__item"> <a href="https://www.linkedin.com/company/braavos-web3/">
						<div class="home-socials__image"> <img src="<?php echo site_url(); ?>/wp-content/uploads/2024/12/LinkedIn-2.png" alt=""></div>
						<p class="home-socials__text"> LinkedIn</p>
					</a></li>
			</ul>
		</div>
	</section>
    <section class="home-apps">
        <div class="home-apps__container">
            <h2 class="home-apps__title"> See how it works</h2>
            <p class="home-apps__text"> Enjoy a next generation wallet designed for a safe and intuitive start with Starknet dApps</p>
            <ul class="home-apps__list">
                <li class="home-apps__item"> <a href="https://chromewebstore.google.com/detail/braavos-starknet-wallet/jnlgamecbpmbajjfhmmmlhejkemejdma?utm_source=braavos-website">
                        <div class="home-apps__item-image"> <img src="<?php echo site_url(); ?>/wp-content/uploads/2024/10/image-134.png" alt=""></div>
                        <p class="home-apps__item-text"> Chrome</p>
                    </a></li>
                <li class="home-apps__item"> <a href="https://addons.mozilla.org/en-US/firefox/addon/braavos-wallet/?utm_source=braavos-website">
                        <div class="home-apps__item-image"> <img src="<?php echo site_url(); ?>/wp-content/uploads/2024/10/image-136.png" alt=""></div>
                        <p class="home-apps__item-text"> Firefox</p>
                    </a></li>
                <li class="home-apps__item"> <a href="https://chromewebstore.google.com/detail/braavos-starknet-wallet/jnlgamecbpmbajjfhmmmlhejkemejdma?utm_source=braavos-website">
                        <div class="home-apps__item-image"> <img src="<?php echo site_url(); ?>/wp-content/uploads/2024/10/image-135.png" alt=""></div>
                        <p class="home-apps__item-text"> Brave</p>
                    </a></li>
                <li class="home-apps__item"> <a href="https://microsoftedge.microsoft.com/addons/detail/braavos-starknet-wallet/hkkpjehhcnhgefhbdcgfkeegglpjchdc?utm_source=braavos-website">
                        <div class="home-apps__item-image"> <img src="<?php echo site_url(); ?>/wp-content/uploads/2024/10/image-137.png" alt=""></div>
                        <p class="home-apps__item-text"> Edge</p>
                    </a></li>
            </ul>
            <div class="home-apps__download"> <a href="https://apps.apple.com/app/apple-store/id1636013523?pt=125241168&ct=braavos-website&mt=8"> <img src="<?php echo site_url(); ?>/wp-content/themes/braavos/assets/images/App-Store.png" alt=""> </a> <a href="https://play.google.com/store/apps/details?id=app.braavos.wallet&referrer=utm_source%3Dbraavos-website"> <img src="<?php echo site_url(); ?>/wp-content/themes/braavos/assets/images/google-play.png" alt=""> </a></div>
        </div>
    </section>
</main>
<?php
get_footer();
