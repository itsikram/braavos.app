<?php

/**
 * The template for displaying the Brokerage and Asset Management page.
 *
 *
 * Template name: Security page
 *
 */
$theme_options = get_option( 'theme_option' );

$security_hero_text = $theme_options['security_hero_text'];

$security_hero_image_alt = get_post_meta( $theme_options['security_hero_image']['id'], '_wp_attachment_image_alt', true );
$security_hero_image = $theme_options['security_hero_image']['url'];


$security_biometric_image =$theme_options['security_biometric_image']['url'];
$security_biometric_image_alt = get_post_meta( $theme_options['security_biometric_image']['id'], '_wp_attachment_image_alt', true );

$security_three_factor_image =$theme_options['security_three_factor_image']['url'];
$security_three_factor_image_alt = get_post_meta( $theme_options['security_three_factor_image']['id'], '_wp_attachment_image_alt', true );

$security_support_image =$theme_options['security_support_image']['url'];
$security_support_image_alt = get_post_meta( $theme_options['security_support_image']['id'], '_wp_attachment_image_alt', true );

$security_detection_image =$theme_options['security_detection_image']['url'];
$security_detection_image_alt = get_post_meta( $theme_options['security_detection_image']['id'], '_wp_attachment_image_alt', true );

get_header(); ?>
<main class="main-section">
	<section class="security-hero">
		<div class="security-hero__container">
			<div class="security-hero__left-wrapper">
				<div class="security-hero__icon">
					<img src="<?php echo site_url(); ?>/wp-content/themes/braavos/assets/images/security/hero-icon.svg" alt="">
				</div>
				<h1 class="security-hero__title">
					<?php echo $security_hero_text; ?> </h1>
				<p class="security-hero__description">
					We have your back. Your funds are safe even if your seed phrase is stolen. </p>
				<a href="<?php echo site_url(); ?>/download-braavos-wallet/" class="security-hero__link">
					<span class="security-hero__link-icon">
						<svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
							<path d="M21.875 13.5V19.5C21.875 19.7984 21.7565 20.0845 21.5455 20.2955C21.3345 20.5065 21.0484 20.625 20.75 20.625H4.25C3.95163 20.625 3.66548 20.5065 3.4545 20.2955C3.24353 20.0845 3.125 19.7984 3.125 19.5V13.5C3.125 13.2016 3.24353 12.9155 3.4545 12.7045C3.66548 12.4935 3.95163 12.375 4.25 12.375C4.54837 12.375 4.83452 12.4935 5.0455 12.7045C5.25647 12.9155 5.375 13.2016 5.375 13.5V18.375H19.625V13.5C19.625 13.2016 19.7435 12.9155 19.9545 12.7045C20.1655 12.4935 20.4516 12.375 20.75 12.375C21.0484 12.375 21.3345 12.4935 21.5455 12.7045C21.7565 12.9155 21.875 13.2016 21.875 13.5ZM11.7041 14.2959C11.8086 14.4008 11.9328 14.484 12.0695 14.5408C12.2063 14.5976 12.3529 14.6268 12.5009 14.6268C12.649 14.6268 12.7956 14.5976 12.9324 14.5408C13.0691 14.484 13.1933 14.4008 13.2978 14.2959L17.0478 10.5459C17.2592 10.3346 17.3779 10.0479 17.3779 9.74906C17.3779 9.45018 17.2592 9.16353 17.0478 8.95219C16.8365 8.74084 16.5498 8.62211 16.2509 8.62211C15.9521 8.62211 15.6654 8.74084 15.4541 8.95219L13.625 10.7812V3C13.625 2.70163 13.5065 2.41548 13.2955 2.2045C13.0845 1.99353 12.7984 1.875 12.5 1.875C12.2016 1.875 11.9155 1.99353 11.7045 2.2045C11.4935 2.41548 11.375 2.70163 11.375 3V10.7812L9.54594 8.95406C9.44129 8.84942 9.31706 8.7664 9.18033 8.70977C9.0436 8.65314 8.89706 8.62399 8.74906 8.62399C8.45018 8.62399 8.16353 8.74272 7.95219 8.95406C7.84754 9.05871 7.76453 9.18294 7.7079 9.31967C7.65126 9.4564 7.62211 9.60294 7.62211 9.75094C7.62211 10.0498 7.74084 10.3365 7.95219 10.5478L11.7041 14.2959Z" fill="white"></path>
						</svg>
					</span>
					<span class="security-hero__link-text">
						Download Braavos Wallet </span>
				</a>
			</div>
			<div class="security-hero__right-wrapper" id="security-hero__right-wrapper">
				<img src="<?php echo $security_hero_image; ?>" alt="<?php echo $security_hero_image_alt; ?>">

			</div>
		</div>
	</section>
	<section class="security-how">
		<div class="security-how__container">
			<h2 class="security-how__title">
				How Braavos keeps your crypto secure </h2>
			<ul class="security-how__list">
				<li class="security-how__item">
					<div class="security-how__item-image">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/security/how-1.png" alt="">
					</div>
					<h3 class="security-how__item-title">
						Self-custodial </h3>
					<p class="security-how__item-text">
						Braavos is a self-custody wallet so only you control your funds. We don’t have access </p>
				</li>
				<li class="security-how__item">
					<div class="security-how__item-image">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/security/how-2.png" alt="">
					</div>
					<h3 class="security-how__item-title">
						Biometric multifactor authentication </h3>
					<p class="security-how__item-text">
						With Braavos you can set up biometric 2FA/3FA for all transactions </p>
				</li>
				<li class="security-how__item">
					<div class="security-how__item-image">
						<img src="<?php echo site_url(); ?>/wp-content/uploads/2024/11/how-3.png" alt="">
					</div>
					<h3 class="security-how__item-title">
						Support for Ledger </h3>
					<p class="security-how__item-text">
						Braavos is compatible with Ledger hardware wallets, providing the flexibility of cold storage for your assets </p>
				</li>
				<li class="security-how__item">
					<div class="security-how__item-image">
						<img src="<?php echo site_url(); ?>/wp-content/uploads/2024/11/how-4.png" alt="">
					</div>
					<h3 class="security-how__item-title">
						Advanced fraud detection&nbsp; </h3>
					<p class="security-how__item-text">
						Built in scam warnings instantly flag malicious dApp connections </p>
				</li>
			</ul>
		</div>
	</section>
	<section class="security-biometric">
		<div class="security-biometric__container">
			<div class="security-biometric__left-wrapper">
				<h2 class="security-biometric__title">
					Biometric Two Factor Authentication </h2>
				<ul class="security-biometric__list">
					<li class="security-biometric__item">
						<p class="security-biometric__text">
							Enjoy two-factor authentication (2FA) security for all your transactions </p>
					</li>
					<li class="security-biometric__item">
						<p class="security-biometric__text">
							Funds remain safe even if your seed phrase gets stolen </p>
					</li>
					<li class="security-biometric__item">
						<p class="security-biometric__text">
							Sign transactions with ease, similar to using Apple/Google Pay </p>
					</li>
					<li class="security-biometric__item">
						<p class="security-biometric__text">
							Sign transactions on Braavos with your fingerprint or face scan </p>
					</li>
				</ul>
				<a href="<?php echo site_url(); ?>/wallet-features/hardware-signer/" class="security-biometric__link">
					<p>
						How it works
					</p>

				</a>
			</div>
			<div class="security-biometric__right-wrapper" id="security-biometric__right-wrapper">
				<img src="<?php echo $security_biometric_image; ?>" alt="<?php echo $security_biometric_image_alt; ?>">

			</div>
		</div>
	</section>
	<section class="security-three-factor">
		<div class="security-three-factor__container">
			<div class="security-three-factor__left-wrapper" id="security-three-factor__left-wrapper">
				<img src="<?php echo $security_three_factor_image; ?>" alt="<?php echo $security_three_factor_image_alt; ?>">

			</div>
			<div class="security-three-factor__right-wrapper">
				<h2 class="security-three-factor__title">
					Multi-signer Three Factor Authentication (3FA) </h2>
				<ul class="security-three-factor__list">
					<li class="security-three-factor__item">
						<p class="security-three-factor__text">
							Highest security level in crypto </p>
					</li>
					<li class="security-three-factor__item">
						<p class="security-three-factor__text">
							Keep your wallet completely decentralized </p>
					</li>
					<li class="security-three-factor__item">
						<p class="security-three-factor__text">
							Transactions go on-chain only after dual signing on mobile and computer </p>
					</li>
				</ul>
				<a href="<?php echo site_url(); ?>/wallet-features/multi-signer/" class="security-three-factor__link">
					<p>How it works</p>
				</a>
			</div>
		</div>
	</section>
	<section class="security-support">
		<div class="security-support__container">
			<div class="security-support__left-wrapper">
				<h2 class="security-support__title">
					Support for Ledger </h2>
				<p class="security-support__description">
					The Ledger integration with the Braavos wallet combines the benefits of a smart wallet with the familiar use of your Ledger cold wallet </p>
				<a href="https://braavos.app/wallet-features/ledger-on-braavos/" class="security-support__link">
					<p>How it works</p>
				</a>

			</div>
			<div class="security-support__right-wrapper" id="security-support__right-wrapper">
				<img src="<?php echo $security_support_image; ?>" alt="<?php echo $security_support_image_alt; ?>">

			</div>
		</div>
	</section>
	<section class="security-detection">
		<div class="security-detection__container">
			<div class="security-detection__left-wrapper" id="security-detection__left-wrapper">
				<img src="<?php echo $security_detection_image; ?>" alt="<?php echo $security_detection_image_alt; ?>" class="security-detection__temp-image">
			</div>
			<div class="security-detection__right-wrapper">
				<h2 class="security-detection__title">
					Advanced Fraud Detection </h2>
				<ul class="security-detection__list">
					<li class="security-detection__item">
						<p class="security-detection__text">
							Our fraud detection feature instantly flags malicious dApps to protect you from scams </p>
					</li>
					<li class="security-detection__item">
						<p class="security-detection__text">
							If you attempt to connect to a site that has been identified as dangerous, Braavos will warn you before you proceed </p>
					</li>
				</ul>

							<!-- <a href="https://app.markup.io/markup/d155ad6c-5d82-4520-8399-c89298260163?view_mode=Desktop" class="security-detection__link security-support__link">
								<p>How it works</p>
							</a> -->
			</div>
		</div>
	</section>
    <section class="home-socials">
        <div class="home-socials__container">
            <h2 class="home-socials__title"> Want to get involved?</h2>
            <ul class="home-socials__list">
                <li class="home-socials__item"> <a target="_blank" href="https://x.com/myBraavos">
                        <div class="home-socials__image"> <img src="<?php echo site_url(); ?>/wp-content/themes/braavos/assets/images/x-svg-dark.svg" alt="" data-theme="dark" style="display: block;"> <img src="<?php echo site_url(); ?>/wp-content/themes/braavos/assets/images/x-svg-light.svg" alt="" data-theme="light" style="display: none;"></div>
                        <p class="home-socials__text"> X</p>
                    </a></li>
                <li class="home-socials__item"> <a target="_blank" href="https://discord.com/invite/9Ks7V5DN9z">
                        <div class="home-socials__image"> <img src="<?php echo site_url(); ?>/wp-content/uploads/2024/10/icon_clyde_blurple_RGB-1.png" alt=""></div>
                        <p class="home-socials__text"> Discord</p>
                    </a></li>
                <li class="home-socials__item"> <a target="_blank" href="https://t.me/mybraavos">
                        <div class="home-socials__image"> <img src="<?php echo site_url(); ?>/wp-content/uploads/2024/10/Logo-2.png" alt=""></div>
                        <p class="home-socials__text"> Telegram</p>
                    </a></li>
                <li class="home-socials__item"> <a target="_blank" href="https://www.linkedin.com/company/braavos-web3/">
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
