<?php

/**
 * The template for displaying the Brokerage and Asset Management page.
 *
 *
 * Template name: Deposit page
 *
 */
$theme_options = get_option( 'theme_option' );

$deposit_hero_text = $theme_options['deposit_hero_text'];

$deposit_hero_image_alt = get_post_meta( $theme_options['deposit_hero_image']['id'], '_wp_attachment_image_alt', true );
$deposit_hero_image = $theme_options['deposit_hero_image']['url'];


$deposit_video_placehoder_image =$theme_options['deposit_video_placehoder_image']['url'];
$deposit_video_placehoder_image_alt = get_post_meta( $theme_options['deposit_video_placehoder_image']['id'], '_wp_attachment_image_alt', true );

get_header(); ?>
<main class="main-section">
	<section class="deposit-hero">
		<div class="deposit-hero__container">
			<div class="deposit-hero__left-wrapper">
				<div class="deposit-hero__icon">
					<img src="<?php echo site_url(); ?>/wp-content/themes/braavos/assets/images/deposit/Plus.svg" alt="">
				</div>
				<h1 class="deposit-hero__title">
					<?php echo $deposit_hero_text; ?> </h1>
				<ul class="deposit-hero__list">
					<li class="deposit-hero__item">
						Convert fiat to crypto using a credit card, bank transfer, Apple Pay, and Google Pay </li>
					<li class="deposit-hero__item">
						Transfer crypto from centralized exchanges </li>
					<li class="deposit-hero__item">
						Bridge crypto from other networks </li>
				</ul>
				<a href="<?php echo site_url(); ?>/download-braavos-wallet/" class="deposit-hero__link">
					<span class="deposit-hero__link-icon">
						<svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
							<path d="M21.875 13.5V19.5C21.875 19.7984 21.7565 20.0845 21.5455 20.2955C21.3345 20.5065 21.0484 20.625 20.75 20.625H4.25C3.95163 20.625 3.66548 20.5065 3.4545 20.2955C3.24353 20.0845 3.125 19.7984 3.125 19.5V13.5C3.125 13.2016 3.24353 12.9155 3.4545 12.7045C3.66548 12.4935 3.95163 12.375 4.25 12.375C4.54837 12.375 4.83452 12.4935 5.0455 12.7045C5.25647 12.9155 5.375 13.2016 5.375 13.5V18.375H19.625V13.5C19.625 13.2016 19.7435 12.9155 19.9545 12.7045C20.1655 12.4935 20.4516 12.375 20.75 12.375C21.0484 12.375 21.3345 12.4935 21.5455 12.7045C21.7565 12.9155 21.875 13.2016 21.875 13.5ZM11.7041 14.2959C11.8086 14.4008 11.9328 14.484 12.0695 14.5408C12.2063 14.5976 12.3529 14.6268 12.5009 14.6268C12.649 14.6268 12.7956 14.5976 12.9324 14.5408C13.0691 14.484 13.1933 14.4008 13.2978 14.2959L17.0478 10.5459C17.2592 10.3346 17.3779 10.0479 17.3779 9.74906C17.3779 9.45018 17.2592 9.16353 17.0478 8.95219C16.8365 8.74084 16.5498 8.62211 16.2509 8.62211C15.9521 8.62211 15.6654 8.74084 15.4541 8.95219L13.625 10.7812V3C13.625 2.70163 13.5065 2.41548 13.2955 2.2045C13.0845 1.99353 12.7984 1.875 12.5 1.875C12.2016 1.875 11.9155 1.99353 11.7045 2.2045C11.4935 2.41548 11.375 2.70163 11.375 3V10.7812L9.54594 8.95406C9.44129 8.84942 9.31706 8.7664 9.18033 8.70977C9.0436 8.65314 8.89706 8.62399 8.74906 8.62399C8.45018 8.62399 8.16353 8.74272 7.95219 8.95406C7.84754 9.05871 7.76453 9.18294 7.7079 9.31967C7.65126 9.4564 7.62211 9.60294 7.62211 9.75094C7.62211 10.0498 7.74084 10.3365 7.95219 10.5478L11.7041 14.2959Z" fill="white"></path>
						</svg>
					</span>
					<span class="deposit-hero__link-text">
						Download Braavos Wallet </span>
				</a>
			</div>
			<div class="deposit-hero__right-wrapper">
				<img src="<?php echo $deposit_hero_image; ?>" alt="<?php echo $deposit_hero_image_alt; ?>">
			</div>
		</div>
	</section>
	<section class="defi-video">
		<div class="defi-video__container">
			<div class="defi-video__thumbnail">
				<img src="<?php echo $deposit_video_placehoder_image; ?>" alt="<?php echo $deposit_video_placehoder_image; ?>">
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
				<!-- Изначально iframe скрыт, и только при нажатии он загружается -->
				
			</div>
		</div>
	</section>

	<script>
		document.getElementById('play-video').addEventListener('click', function() {
			document.querySelector('.defi-video__thumbnail').style.display = 'none';
			document.getElementById('video-container').style.display = 'block';


			document.getElementById('video-container').innerHTML = '<iframe id="youtube-video" src="https://www.youtube.com/embed/ukZzI2Qt5KQ?autoplay=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>';

			var youtubeVideo = document.getElementById('youtube-video');
			youtubeVideo.src = "https://www.youtube.com/embed/ukZzI2Qt5KQ?autoplay=1";

		});
	</script>
	<section class="deposit-description">
		<div class="deposit-description__container">
			<h2 class="deposit-description__title">
				Transfer and On-ramp Your Funds Wherever They Are </h2>
			<p class="deposit-description__subtitle">
				The Deposit screen on your Braavos wallet simplifies fund transfers by connecting you with reliable service providers. It organizes the transfer options into three categories: </p>
				<p class="d-none deposit-description__desc">
				Swap Tokens powered by AVNU enhances convenience and streamlines the process by merging the ‘Approve’ and ‘Swap’ functions into a single transaction within your wallet. This consolidation improves security by eliminating the need for unlimited access to your funds.
				</p>
			<ul class="deposit-description__items">
				<li class="deposit-description__item">
					<div class="deposit-description__item-image">
						<img src="<?php echo site_url(); ?>/wp-content/uploads/2024/11/Received.png" alt="">
					</div>
					<h3 class="deposit-description__item-title">
						Credit and Debit Cards, and Bank Transfers </h3>
					<p class="deposit-description__item-text">
						For buying crypto with fiat&nbsp; </p>
				</li>
				<li class="deposit-description__item">
					<div class="deposit-description__item-image">
						<img src="<?php echo site_url(); ?>/wp-content/uploads/2024/11/icon-2.png" alt="">
					</div>
					<h3 class="deposit-description__item-title">
						Centralized Exchanges </h3>
					<p class="deposit-description__item-text">
						Transfer using trusted bridging platforms&nbsp; </p>
				</li>
				<li class="deposit-description__item">
					<div class="deposit-description__item-image">
						<img src="<?php echo site_url(); ?>/wp-content/uploads/2024/11/Deposit.png" alt="">
					</div>
					<h3 class="deposit-description__item-title">
						Bridges </h3>
					<p class="deposit-description__item-text">
						Linking different blockchains for easy transfer </p>
				</li>
			</ul>
			<p class="deposit-description__text">
				Braavos integrated Orbiter and Layerswap that offer access to 16 centralized exchanges providing numerous choices for funding your wallet such as Binance, Coinbase, Kraken, Kucoin, Bybit, OKX and many others. <br><br>

				Braavos has also integrated several bridges like rhino.fi, owlto, orbiter and Starkgate to facilitate transfer of crypto assets from 21 blockchains, including Ethereum, Arbitrum, zkSync Era, Base, Linea, Polygon, Optimism, BSC, Solana. <br><br>

				Additionally, deposits can be made using Visa/Mastercard, Google Pay, Apple Pay, or a bank transfer via our onramp partners Banxa, Transak and Ramp.<br><br>

				Be aware that the availability of these options may vary depending on the platform and geographic location, and as we continuously update our services to incorporate new and emerging opportunities. </p>
		</div>
	</section>
	<section class="deposit-how-to">
		<div class="deposit-how-to__container">
			<h2 class="deposit-how-to__title">
				How to transfer or Onramp funds on Starknet </h2>


			<div class="swiper-container guide-container">
				<div class="swiper Swiper-guide swiper-initialized swiper-horizontal swiper-backface-hidden">
					<div class="swiper-wrapper" id="swiper-wrapper-ccefba7253857c73" aria-live="polite" style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms; transition-delay: 0ms;">
						<div class="swiper-slide guide-slide swiper-slide-active" role="group" aria-label="1 / 3" data-swiper-slide-index="0" style="margin-right: 24px;">
							<div class="guide-content">
								<div class="guide-header">
									<svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
										<path d="M27.556 20.5431C27.4134 20.4531 27.2504 20.4007 27.0821 20.3907C26.9138 20.3806 26.7457 20.4132 26.5935 20.4856C26.2124 20.6658 25.792 20.7467 25.3713 20.7209C24.9506 20.695 24.5432 20.5632 24.1871 20.3377C23.831 20.1122 23.5377 19.8003 23.3345 19.431C23.1312 19.0617 23.0246 18.6471 23.0246 18.2256C23.0246 17.8041 23.1312 17.3894 23.3345 17.0201C23.5377 16.6508 23.831 16.339 24.1871 16.1135C24.5432 15.8879 24.9506 15.7561 25.3713 15.7303C25.792 15.7044 26.2124 15.7854 26.5935 15.9656C26.7459 16.0379 26.9142 16.0705 27.0826 16.0603C27.2511 16.0501 27.4142 15.9975 27.5568 15.9073C27.6994 15.8171 27.8169 15.6922 27.8982 15.5444C27.9796 15.3966 28.0223 15.2306 28.0222 15.0618V9.72557C28.0222 9.19513 27.8115 8.68643 27.4364 8.31135C27.0614 7.93628 26.5527 7.72557 26.0222 7.72557H21.4947C21.5133 7.55955 21.5225 7.39262 21.5222 7.22557C21.5213 6.61097 21.3949 6.00304 21.1507 5.43903C20.9065 4.87502 20.5497 4.36682 20.1022 3.94557C19.4826 3.36358 18.7107 2.96903 17.8761 2.80759C17.0414 2.64616 16.1781 2.72445 15.3861 3.03339C14.5942 3.34234 13.9059 3.86931 13.401 4.55327C12.8962 5.23723 12.5954 6.05021 12.5335 6.89807C12.5143 7.17386 12.5201 7.45083 12.551 7.72557H8.02222C7.49178 7.72557 6.98308 7.93628 6.608 8.31135C6.23293 8.68643 6.02222 9.19513 6.02222 9.72557V13.7531C5.8562 13.7345 5.68927 13.7253 5.52222 13.7256C4.90763 13.7266 4.29972 13.853 3.73572 14.0972C3.17172 14.3414 2.66351 14.6981 2.24222 15.1456C1.8179 15.5938 1.49118 16.1251 1.28269 16.7061C1.0742 17.287 0.988491 17.9048 1.03097 18.5206C1.10263 19.6048 1.56331 20.6267 2.3283 21.3983C3.0933 22.17 4.11116 22.6395 5.19472 22.7206C5.4705 22.7404 5.74752 22.7345 6.02222 22.7031V26.7256C6.02222 27.256 6.23293 27.7647 6.608 28.1398C6.98308 28.5149 7.49178 28.7256 8.02222 28.7256H26.0222C26.5527 28.7256 27.0614 28.5149 27.4364 28.1398C27.8115 27.7647 28.0222 27.256 28.0222 26.7256V21.3893C28.0223 21.2204 27.9796 21.0541 27.8981 20.9061C27.8165 20.7582 27.6988 20.6332 27.556 20.5431ZM26.0222 26.7256H8.02222V21.3893C8.02227 21.2206 7.97962 21.0546 7.89825 20.9067C7.81687 20.7589 7.6994 20.6341 7.55679 20.5439C7.41418 20.4537 7.25107 20.401 7.08263 20.3908C6.91419 20.3806 6.74591 20.4132 6.59347 20.4856C6.21242 20.6658 5.792 20.7467 5.37129 20.7209C4.95057 20.695 4.54322 20.5632 4.18711 20.3377C3.831 20.1122 3.53769 19.8003 3.33445 19.431C3.13121 19.0617 3.02464 18.6471 3.02464 18.2256C3.02464 17.8041 3.13121 17.3894 3.33445 17.0201C3.53769 16.6508 3.831 16.339 4.18711 16.1135C4.54322 15.8879 4.95057 15.7561 5.37129 15.7303C5.792 15.7044 6.21242 15.7854 6.59347 15.9656C6.74591 16.0379 6.91419 16.0705 7.08263 16.0603C7.25107 16.0501 7.41418 15.9975 7.55679 15.9073C7.6994 15.8171 7.81687 15.6922 7.89825 15.5444C7.97962 15.3966 8.02227 15.2306 8.02222 15.0618V9.72557H13.8585C14.0272 9.72562 14.1932 9.68298 14.3411 9.6016C14.4889 9.52022 14.6137 9.40275 14.7039 9.26015C14.7941 9.11754 14.8468 8.95442 14.857 8.78598C14.8672 8.61754 14.8346 8.44927 14.7622 8.29682C14.582 7.91577 14.5011 7.49535 14.5269 7.07464C14.5528 6.65392 14.6846 6.24658 14.9101 5.89047C15.1356 5.53436 15.4475 5.24105 15.8168 5.0378C16.186 4.83456 16.6007 4.72799 17.0222 4.72799C17.4437 4.72799 17.8584 4.83456 18.2277 5.0378C18.5969 5.24105 18.9088 5.53436 19.1343 5.89047C19.3598 6.24658 19.4917 6.65392 19.5175 7.07464C19.5434 7.49535 19.4624 7.91577 19.2822 8.29682C19.2099 8.44927 19.1773 8.61754 19.1875 8.78598C19.1977 8.95442 19.2503 9.11754 19.3405 9.26015C19.4307 9.40275 19.5556 9.52022 19.7034 9.6016C19.8512 9.68298 20.0172 9.72562 20.186 9.72557H26.0222V13.7543C25.7475 13.7228 25.4705 13.717 25.1947 13.7368C24.0309 13.8192 22.9445 14.3505 22.1648 15.2185C21.3851 16.0865 20.9731 17.2234 21.0156 18.3894C21.058 19.5554 21.5517 20.6593 22.3925 21.4683C23.2333 22.2773 24.3554 22.7281 25.5222 22.7256C25.6893 22.7259 25.8562 22.7167 26.0222 22.6981V26.7256Z" fill="white"></path>
									</svg>
									<svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
										<path d="M22.0222 2.72559H10.0222C9.22657 2.72559 8.46351 3.04166 7.9009 3.60427C7.33829 4.16687 7.02222 4.92994 7.02222 5.72559V27.7256C7.02222 28.5212 7.33829 29.2843 7.9009 29.8469C8.46351 30.4095 9.22657 30.7256 10.0222 30.7256H22.0222C22.8179 30.7256 23.5809 30.4095 24.1435 29.8469C24.7061 29.2843 25.0222 28.5212 25.0222 27.7256V5.72559C25.0222 4.92994 24.7061 4.16687 24.1435 3.60427C23.5809 3.04166 22.8179 2.72559 22.0222 2.72559ZM23.0222 27.7256C23.0222 27.9908 22.9169 28.2452 22.7293 28.4327C22.5418 28.6202 22.2874 28.7256 22.0222 28.7256H10.0222C9.757 28.7256 9.50265 28.6202 9.31511 28.4327C9.12757 28.2452 9.02222 27.9908 9.02222 27.7256V5.72559C9.02222 5.46037 9.12757 5.20602 9.31511 5.01848C9.50265 4.83094 9.757 4.72559 10.0222 4.72559H22.0222C22.2874 4.72559 22.5418 4.83094 22.7293 5.01848C22.9169 5.20602 23.0222 5.46037 23.0222 5.72559V27.7256ZM17.5222 8.22559C17.5222 8.52226 17.4342 8.81227 17.2694 9.05894C17.1046 9.30561 16.8703 9.49787 16.5962 9.61141C16.3222 9.72494 16.0206 9.75464 15.7296 9.69676C15.4386 9.63889 15.1713 9.49603 14.9616 9.28625C14.7518 9.07647 14.6089 8.80919 14.551 8.51822C14.4932 8.22725 14.5229 7.92565 14.6364 7.65156C14.7499 7.37747 14.9422 7.1432 15.1889 6.97838C15.4355 6.81356 15.7255 6.72559 16.0222 6.72559C16.42 6.72559 16.8016 6.88362 17.0829 7.16493C17.3642 7.44623 17.5222 7.82776 17.5222 8.22559Z" fill="white"></path>
									</svg>
								</div>
								<img class="guide-img" src="https://braavos.app/wp-content/uploads/2024/11/how-to-1-1.png" alt="" loading="lazy">
								<span class="guide-text">Step 1</span>
							</div>
						</div>
						<div class="swiper-slide guide-slide swiper-slide-next" role="group" aria-label="2 / 3" data-swiper-slide-index="1" style="margin-right: 24px;">
							<div class="guide-content">
								<div class="guide-header">
									<svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
										<path d="M27.556 20.5431C27.4134 20.4531 27.2504 20.4007 27.0821 20.3907C26.9138 20.3806 26.7457 20.4132 26.5935 20.4856C26.2124 20.6658 25.792 20.7467 25.3713 20.7209C24.9506 20.695 24.5432 20.5632 24.1871 20.3377C23.831 20.1122 23.5377 19.8003 23.3345 19.431C23.1312 19.0617 23.0246 18.6471 23.0246 18.2256C23.0246 17.8041 23.1312 17.3894 23.3345 17.0201C23.5377 16.6508 23.831 16.339 24.1871 16.1135C24.5432 15.8879 24.9506 15.7561 25.3713 15.7303C25.792 15.7044 26.2124 15.7854 26.5935 15.9656C26.7459 16.0379 26.9142 16.0705 27.0826 16.0603C27.2511 16.0501 27.4142 15.9975 27.5568 15.9073C27.6994 15.8171 27.8169 15.6922 27.8982 15.5444C27.9796 15.3966 28.0223 15.2306 28.0222 15.0618V9.72557C28.0222 9.19513 27.8115 8.68643 27.4364 8.31135C27.0614 7.93628 26.5527 7.72557 26.0222 7.72557H21.4947C21.5133 7.55955 21.5225 7.39262 21.5222 7.22557C21.5213 6.61097 21.3949 6.00304 21.1507 5.43903C20.9065 4.87502 20.5497 4.36682 20.1022 3.94557C19.4826 3.36358 18.7107 2.96903 17.8761 2.80759C17.0414 2.64616 16.1781 2.72445 15.3861 3.03339C14.5942 3.34234 13.9059 3.86931 13.401 4.55327C12.8962 5.23723 12.5954 6.05021 12.5335 6.89807C12.5143 7.17386 12.5201 7.45083 12.551 7.72557H8.02222C7.49178 7.72557 6.98308 7.93628 6.608 8.31135C6.23293 8.68643 6.02222 9.19513 6.02222 9.72557V13.7531C5.8562 13.7345 5.68927 13.7253 5.52222 13.7256C4.90763 13.7266 4.29972 13.853 3.73572 14.0972C3.17172 14.3414 2.66351 14.6981 2.24222 15.1456C1.8179 15.5938 1.49118 16.1251 1.28269 16.7061C1.0742 17.287 0.988491 17.9048 1.03097 18.5206C1.10263 19.6048 1.56331 20.6267 2.3283 21.3983C3.0933 22.17 4.11116 22.6395 5.19472 22.7206C5.4705 22.7404 5.74752 22.7345 6.02222 22.7031V26.7256C6.02222 27.256 6.23293 27.7647 6.608 28.1398C6.98308 28.5149 7.49178 28.7256 8.02222 28.7256H26.0222C26.5527 28.7256 27.0614 28.5149 27.4364 28.1398C27.8115 27.7647 28.0222 27.256 28.0222 26.7256V21.3893C28.0223 21.2204 27.9796 21.0541 27.8981 20.9061C27.8165 20.7582 27.6988 20.6332 27.556 20.5431ZM26.0222 26.7256H8.02222V21.3893C8.02227 21.2206 7.97962 21.0546 7.89825 20.9067C7.81687 20.7589 7.6994 20.6341 7.55679 20.5439C7.41418 20.4537 7.25107 20.401 7.08263 20.3908C6.91419 20.3806 6.74591 20.4132 6.59347 20.4856C6.21242 20.6658 5.792 20.7467 5.37129 20.7209C4.95057 20.695 4.54322 20.5632 4.18711 20.3377C3.831 20.1122 3.53769 19.8003 3.33445 19.431C3.13121 19.0617 3.02464 18.6471 3.02464 18.2256C3.02464 17.8041 3.13121 17.3894 3.33445 17.0201C3.53769 16.6508 3.831 16.339 4.18711 16.1135C4.54322 15.8879 4.95057 15.7561 5.37129 15.7303C5.792 15.7044 6.21242 15.7854 6.59347 15.9656C6.74591 16.0379 6.91419 16.0705 7.08263 16.0603C7.25107 16.0501 7.41418 15.9975 7.55679 15.9073C7.6994 15.8171 7.81687 15.6922 7.89825 15.5444C7.97962 15.3966 8.02227 15.2306 8.02222 15.0618V9.72557H13.8585C14.0272 9.72562 14.1932 9.68298 14.3411 9.6016C14.4889 9.52022 14.6137 9.40275 14.7039 9.26015C14.7941 9.11754 14.8468 8.95442 14.857 8.78598C14.8672 8.61754 14.8346 8.44927 14.7622 8.29682C14.582 7.91577 14.5011 7.49535 14.5269 7.07464C14.5528 6.65392 14.6846 6.24658 14.9101 5.89047C15.1356 5.53436 15.4475 5.24105 15.8168 5.0378C16.186 4.83456 16.6007 4.72799 17.0222 4.72799C17.4437 4.72799 17.8584 4.83456 18.2277 5.0378C18.5969 5.24105 18.9088 5.53436 19.1343 5.89047C19.3598 6.24658 19.4917 6.65392 19.5175 7.07464C19.5434 7.49535 19.4624 7.91577 19.2822 8.29682C19.2099 8.44927 19.1773 8.61754 19.1875 8.78598C19.1977 8.95442 19.2503 9.11754 19.3405 9.26015C19.4307 9.40275 19.5556 9.52022 19.7034 9.6016C19.8512 9.68298 20.0172 9.72562 20.186 9.72557H26.0222V13.7543C25.7475 13.7228 25.4705 13.717 25.1947 13.7368C24.0309 13.8192 22.9445 14.3505 22.1648 15.2185C21.3851 16.0865 20.9731 17.2234 21.0156 18.3894C21.058 19.5554 21.5517 20.6593 22.3925 21.4683C23.2333 22.2773 24.3554 22.7281 25.5222 22.7256C25.6893 22.7259 25.8562 22.7167 26.0222 22.6981V26.7256Z" fill="white"></path>
									</svg>
									<svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
										<path d="M22.0222 2.72559H10.0222C9.22657 2.72559 8.46351 3.04166 7.9009 3.60427C7.33829 4.16687 7.02222 4.92994 7.02222 5.72559V27.7256C7.02222 28.5212 7.33829 29.2843 7.9009 29.8469C8.46351 30.4095 9.22657 30.7256 10.0222 30.7256H22.0222C22.8179 30.7256 23.5809 30.4095 24.1435 29.8469C24.7061 29.2843 25.0222 28.5212 25.0222 27.7256V5.72559C25.0222 4.92994 24.7061 4.16687 24.1435 3.60427C23.5809 3.04166 22.8179 2.72559 22.0222 2.72559ZM23.0222 27.7256C23.0222 27.9908 22.9169 28.2452 22.7293 28.4327C22.5418 28.6202 22.2874 28.7256 22.0222 28.7256H10.0222C9.757 28.7256 9.50265 28.6202 9.31511 28.4327C9.12757 28.2452 9.02222 27.9908 9.02222 27.7256V5.72559C9.02222 5.46037 9.12757 5.20602 9.31511 5.01848C9.50265 4.83094 9.757 4.72559 10.0222 4.72559H22.0222C22.2874 4.72559 22.5418 4.83094 22.7293 5.01848C22.9169 5.20602 23.0222 5.46037 23.0222 5.72559V27.7256ZM17.5222 8.22559C17.5222 8.52226 17.4342 8.81227 17.2694 9.05894C17.1046 9.30561 16.8703 9.49787 16.5962 9.61141C16.3222 9.72494 16.0206 9.75464 15.7296 9.69676C15.4386 9.63889 15.1713 9.49603 14.9616 9.28625C14.7518 9.07647 14.6089 8.80919 14.551 8.51822C14.4932 8.22725 14.5229 7.92565 14.6364 7.65156C14.7499 7.37747 14.9422 7.1432 15.1889 6.97838C15.4355 6.81356 15.7255 6.72559 16.0222 6.72559C16.42 6.72559 16.8016 6.88362 17.0829 7.16493C17.3642 7.44623 17.5222 7.82776 17.5222 8.22559Z" fill="white"></path>
									</svg>
								</div>
								<img class="guide-img" src="https://braavos.app/wp-content/uploads/2024/11/how-to-2-1.png" alt="" loading="lazy">
								<span class="guide-text">Step 2</span>
							</div>
						</div>
						<div class="swiper-slide guide-slide" role="group" aria-label="3 / 3" data-swiper-slide-index="2" style="margin-right: 24px;">
							<div class="guide-content">
								<div class="guide-header">
									<svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
										<path d="M27.556 20.5431C27.4134 20.4531 27.2504 20.4007 27.0821 20.3907C26.9138 20.3806 26.7457 20.4132 26.5935 20.4856C26.2124 20.6658 25.792 20.7467 25.3713 20.7209C24.9506 20.695 24.5432 20.5632 24.1871 20.3377C23.831 20.1122 23.5377 19.8003 23.3345 19.431C23.1312 19.0617 23.0246 18.6471 23.0246 18.2256C23.0246 17.8041 23.1312 17.3894 23.3345 17.0201C23.5377 16.6508 23.831 16.339 24.1871 16.1135C24.5432 15.8879 24.9506 15.7561 25.3713 15.7303C25.792 15.7044 26.2124 15.7854 26.5935 15.9656C26.7459 16.0379 26.9142 16.0705 27.0826 16.0603C27.2511 16.0501 27.4142 15.9975 27.5568 15.9073C27.6994 15.8171 27.8169 15.6922 27.8982 15.5444C27.9796 15.3966 28.0223 15.2306 28.0222 15.0618V9.72557C28.0222 9.19513 27.8115 8.68643 27.4364 8.31135C27.0614 7.93628 26.5527 7.72557 26.0222 7.72557H21.4947C21.5133 7.55955 21.5225 7.39262 21.5222 7.22557C21.5213 6.61097 21.3949 6.00304 21.1507 5.43903C20.9065 4.87502 20.5497 4.36682 20.1022 3.94557C19.4826 3.36358 18.7107 2.96903 17.8761 2.80759C17.0414 2.64616 16.1781 2.72445 15.3861 3.03339C14.5942 3.34234 13.9059 3.86931 13.401 4.55327C12.8962 5.23723 12.5954 6.05021 12.5335 6.89807C12.5143 7.17386 12.5201 7.45083 12.551 7.72557H8.02222C7.49178 7.72557 6.98308 7.93628 6.608 8.31135C6.23293 8.68643 6.02222 9.19513 6.02222 9.72557V13.7531C5.8562 13.7345 5.68927 13.7253 5.52222 13.7256C4.90763 13.7266 4.29972 13.853 3.73572 14.0972C3.17172 14.3414 2.66351 14.6981 2.24222 15.1456C1.8179 15.5938 1.49118 16.1251 1.28269 16.7061C1.0742 17.287 0.988491 17.9048 1.03097 18.5206C1.10263 19.6048 1.56331 20.6267 2.3283 21.3983C3.0933 22.17 4.11116 22.6395 5.19472 22.7206C5.4705 22.7404 5.74752 22.7345 6.02222 22.7031V26.7256C6.02222 27.256 6.23293 27.7647 6.608 28.1398C6.98308 28.5149 7.49178 28.7256 8.02222 28.7256H26.0222C26.5527 28.7256 27.0614 28.5149 27.4364 28.1398C27.8115 27.7647 28.0222 27.256 28.0222 26.7256V21.3893C28.0223 21.2204 27.9796 21.0541 27.8981 20.9061C27.8165 20.7582 27.6988 20.6332 27.556 20.5431ZM26.0222 26.7256H8.02222V21.3893C8.02227 21.2206 7.97962 21.0546 7.89825 20.9067C7.81687 20.7589 7.6994 20.6341 7.55679 20.5439C7.41418 20.4537 7.25107 20.401 7.08263 20.3908C6.91419 20.3806 6.74591 20.4132 6.59347 20.4856C6.21242 20.6658 5.792 20.7467 5.37129 20.7209C4.95057 20.695 4.54322 20.5632 4.18711 20.3377C3.831 20.1122 3.53769 19.8003 3.33445 19.431C3.13121 19.0617 3.02464 18.6471 3.02464 18.2256C3.02464 17.8041 3.13121 17.3894 3.33445 17.0201C3.53769 16.6508 3.831 16.339 4.18711 16.1135C4.54322 15.8879 4.95057 15.7561 5.37129 15.7303C5.792 15.7044 6.21242 15.7854 6.59347 15.9656C6.74591 16.0379 6.91419 16.0705 7.08263 16.0603C7.25107 16.0501 7.41418 15.9975 7.55679 15.9073C7.6994 15.8171 7.81687 15.6922 7.89825 15.5444C7.97962 15.3966 8.02227 15.2306 8.02222 15.0618V9.72557H13.8585C14.0272 9.72562 14.1932 9.68298 14.3411 9.6016C14.4889 9.52022 14.6137 9.40275 14.7039 9.26015C14.7941 9.11754 14.8468 8.95442 14.857 8.78598C14.8672 8.61754 14.8346 8.44927 14.7622 8.29682C14.582 7.91577 14.5011 7.49535 14.5269 7.07464C14.5528 6.65392 14.6846 6.24658 14.9101 5.89047C15.1356 5.53436 15.4475 5.24105 15.8168 5.0378C16.186 4.83456 16.6007 4.72799 17.0222 4.72799C17.4437 4.72799 17.8584 4.83456 18.2277 5.0378C18.5969 5.24105 18.9088 5.53436 19.1343 5.89047C19.3598 6.24658 19.4917 6.65392 19.5175 7.07464C19.5434 7.49535 19.4624 7.91577 19.2822 8.29682C19.2099 8.44927 19.1773 8.61754 19.1875 8.78598C19.1977 8.95442 19.2503 9.11754 19.3405 9.26015C19.4307 9.40275 19.5556 9.52022 19.7034 9.6016C19.8512 9.68298 20.0172 9.72562 20.186 9.72557H26.0222V13.7543C25.7475 13.7228 25.4705 13.717 25.1947 13.7368C24.0309 13.8192 22.9445 14.3505 22.1648 15.2185C21.3851 16.0865 20.9731 17.2234 21.0156 18.3894C21.058 19.5554 21.5517 20.6593 22.3925 21.4683C23.2333 22.2773 24.3554 22.7281 25.5222 22.7256C25.6893 22.7259 25.8562 22.7167 26.0222 22.6981V26.7256Z" fill="white"></path>
									</svg>
									<svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
										<path d="M22.0222 2.72559H10.0222C9.22657 2.72559 8.46351 3.04166 7.9009 3.60427C7.33829 4.16687 7.02222 4.92994 7.02222 5.72559V27.7256C7.02222 28.5212 7.33829 29.2843 7.9009 29.8469C8.46351 30.4095 9.22657 30.7256 10.0222 30.7256H22.0222C22.8179 30.7256 23.5809 30.4095 24.1435 29.8469C24.7061 29.2843 25.0222 28.5212 25.0222 27.7256V5.72559C25.0222 4.92994 24.7061 4.16687 24.1435 3.60427C23.5809 3.04166 22.8179 2.72559 22.0222 2.72559ZM23.0222 27.7256C23.0222 27.9908 22.9169 28.2452 22.7293 28.4327C22.5418 28.6202 22.2874 28.7256 22.0222 28.7256H10.0222C9.757 28.7256 9.50265 28.6202 9.31511 28.4327C9.12757 28.2452 9.02222 27.9908 9.02222 27.7256V5.72559C9.02222 5.46037 9.12757 5.20602 9.31511 5.01848C9.50265 4.83094 9.757 4.72559 10.0222 4.72559H22.0222C22.2874 4.72559 22.5418 4.83094 22.7293 5.01848C22.9169 5.20602 23.0222 5.46037 23.0222 5.72559V27.7256ZM17.5222 8.22559C17.5222 8.52226 17.4342 8.81227 17.2694 9.05894C17.1046 9.30561 16.8703 9.49787 16.5962 9.61141C16.3222 9.72494 16.0206 9.75464 15.7296 9.69676C15.4386 9.63889 15.1713 9.49603 14.9616 9.28625C14.7518 9.07647 14.6089 8.80919 14.551 8.51822C14.4932 8.22725 14.5229 7.92565 14.6364 7.65156C14.7499 7.37747 14.9422 7.1432 15.1889 6.97838C15.4355 6.81356 15.7255 6.72559 16.0222 6.72559C16.42 6.72559 16.8016 6.88362 17.0829 7.16493C17.3642 7.44623 17.5222 7.82776 17.5222 8.22559Z" fill="white"></path>
									</svg>
								</div>
								<img class="guide-img" src="https://braavos.app/wp-content/uploads/2024/11/how-to-3-1.png" alt="" loading="lazy">
								<span class="guide-text">Step 3</span>
							</div>
						</div>
					</div>
					<span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
					<span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
				</div>
				<div class="swiper-pagination swiper-pagination-guide swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal swiper-pagination-lock"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1" aria-current="true"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span></div>
			</div>
		</div>
	</section>

	<div class="container">
		<div class="row">
			<div class="col">
				<div class="single-related-articles mb-5">
					<h2 class="fs-1 theme-color font-jakarta text-center my-5">Learning and support</h2>
					<div class="related-articles-container">
						<ul class="items-box-container column-3">
							<?php
							$categories = wp_get_post_categories(11314);
							if ($categories) {
								$args = array(
									'category__in'   => $categories,
									'post__not_in'   => array(get_the_ID()),
									'posts_per_page' => 3, // Number of related posts
								);
								$related_posts = new WP_Query($args);

								if ($related_posts->have_posts()) {
									while ($related_posts->have_posts()) {
										$related_posts->the_post();
										$main_image = get_the_post_thumbnail_url();
										$hover_image = get_post_meta(get_the_ID(), '_blog_hover_image', true) ? get_post_meta(get_the_ID(), '_blog_hover_image', true) : get_template_directory_uri() . '/assets/images/blogs/blog-2.png';
										$blog_tags = get_post_meta(get_the_ID(), '_blog_tags', true);
										$blog_short_description = wp_trim_words(get_post_meta(get_the_ID(), '_blog_short_description', true), 20, '...');
										$blog_date = get_the_date('M j, Y');
										$blog_title = wp_trim_words(get_the_title(), 15, '...');
										$blog_permalink = get_the_permalink();
										$blog_categories = get_the_category();

										$category_names = array();

										if (strlen($blog_short_description) == 0) {
											$blog_short_description = wp_trim_words(get_the_content(), 20, '...');
										}


										if (count($blog_categories) > 0) {
											foreach ($blog_categories as $category_item) {

												$category_names[] = $category_item->name;
											}
										}
							?>

										<li class="item-box transparent-bg-control">
											<a href="<?php echo $blog_permalink; ?>" class="font-jakarta theme-color">
												<div class="item-top-image">
													<img src="<?php echo $main_image; ?>" class="main-image" alt="">
													<img src="<?php echo $hover_image; ?>" class="hover-image" alt="">
												</div>
												<div class="d-flex justify-content-between align-items-center my-3">
													<div class="tags-container">
														<?php
														if (strlen($blog_tags) == 0) {
															foreach ($category_names as $category_name) {
														?>
																<span class="tag theme-color transparent-bg-control">
																	<?php echo $category_name; ?>
																</span>
															<?php
															};
														} else {
															?>
															<span class="tag theme-color">
																<?php echo $blog_tags; ?>
															</span>
														<?php

														} ?>

													</div>


													<span><?php echo $blog_date; ?></span>
												</div>
												<div class="item-title mb-2 font-jakarta blog-heading-truncate">
													<?php echo $blog_title; ?>
												</div>
												<p class="item-desc-text font-jakarta blog-desc-truncate"><?php echo $blog_short_description; ?></p>
											</a>
										</li>
							<?php
									}
									echo '</ul>';
								}
								wp_reset_postdata();
							}
							?>


						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>


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
