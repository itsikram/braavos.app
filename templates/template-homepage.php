<?php

/**
 * The template for displaying the Brokerage and Asset Management page.
 *
 *
 * Template name: Homepage
 *
 */
$theme_options = get_option( 'theme_option' );


$home_hero_image_alt = get_post_meta( $theme_options['home_hero_image']['id'], '_wp_attachment_image_alt', true );
$home_hero_image = $theme_options['home_hero_image']['url'];


$home_hero_grid_image_one = $theme_options['home_hero_grid_image_one']['url'];
$home_hero_grid_image_one_alt = get_post_meta( $theme_options['home_hero_grid_image_one']['id'], '_wp_attachment_image_alt', true );

$home_hero_grid_image_two = $theme_options['home_hero_grid_image_two']['url'];
$home_hero_grid_image_two_alt = get_post_meta( $theme_options['home_hero_grid_image_two']['id'], '_wp_attachment_image_alt', true );

$home_hero_grid_image_three = $theme_options['home_hero_grid_image_three']['url'];
$home_hero_grid_image_three_alt = get_post_meta( $theme_options['home_hero_grid_image_three']['id'], '_wp_attachment_image_alt', true );

$home_deposit_image =$theme_options['home_deposit_image']['url'];
$home_deposit_image_alt = get_post_meta( $theme_options['home_deposit_image']['id'], '_wp_attachment_image_alt', true );

$home_security_image =$theme_options['home_security_image']['url'];
$home_security_image_alt = get_post_meta( $theme_options['home_security_image']['id'], '_wp_attachment_image_alt', true );

$home_swap_image =$theme_options['home_swap_image']['url'];
$home_swap_image_alt = get_post_meta( $theme_options['home_swap_image']['id'], '_wp_attachment_image_alt', true );

$home_grow_image =$theme_options['home_grow_image']['url'];
$home_grow_image_alt = get_post_meta( $theme_options['home_grow_image']['id'], '_wp_attachment_image_alt', true );



get_header();



?>
<main class="main-section">
    <section class="home-hero">
        <div class="home-hero__container">
            <div class="home-hero__top-wrapper align-items-center">
                <div class="home-hero__left-wrapper">
                    <h1 class="home-hero__title">
                        <?php echo $theme_options['home_hero_text']; ?></h1>
                    <p class="home-hero__description">
                        Your safe and intuitive gateway to Starknet on your phone and browser </p>
                    <div class="home-hero__links">
                        <a href="javascript:void(0)" class="home-hero__video-link">
                            <span class="home-hero__video-link-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                                    <path d="M22.7334 10.4128L9.22594 2.15063C8.94267 1.97794 8.61865 1.8835 8.28696 1.87695C7.95526 1.8704 7.62777 1.95198 7.33791 2.11336C7.04804 2.27473 6.80618 2.51013 6.63702 2.79551C6.46785 3.0809 6.37744 3.40607 6.375 3.73781V20.2622C6.37744 20.5939 6.46785 20.9191 6.63702 21.2045C6.80618 21.4899 7.04804 21.7253 7.33791 21.8866C7.62777 22.048 7.95526 22.1296 8.28696 22.1231C8.61865 22.1165 8.94267 22.0221 9.22594 21.8494L22.7334 13.5872C23.0058 13.4214 23.2309 13.1883 23.3871 12.9103C23.5434 12.6324 23.6254 12.3189 23.6254 12C23.6254 11.6811 23.5434 11.3676 23.3871 11.0897C23.2309 10.8117 23.0058 10.5786 22.7334 10.4128ZM8.625 19.5797V4.42031L21.015 12L8.625 19.5797Z" fill="url(#paint0_radial_5829_14995)"></path>
                                    <defs>
                                        <radialGradient id="paint0_radial_5829_14995" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(15.0002 12) rotate(90) scale(10.1234 8.6252)">
                                            <stop offset="0.47" stop-color="#587EFF"></stop>
                                            <stop offset="1" stop-color="#5478F4"></stop>
                                        </radialGradient>
                                    </defs>
                                </svg>
                            </span>
                            <span class="home-hero__video-link-text">
                                Watch Video </span>
                        </a>
                        <a href="<?php echo site_url(); ?>/download-braavos-wallet/" class="home-hero__download-link">
                            <span class="home-hero__download-link-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                                    <path d="M21.625 13.5V19.5C21.625 19.7984 21.5065 20.0845 21.2955 20.2955C21.0845 20.5065 20.7984 20.625 20.5 20.625H4C3.70163 20.625 3.41548 20.5065 3.2045 20.2955C2.99353 20.0845 2.875 19.7984 2.875 19.5V13.5C2.875 13.2016 2.99353 12.9155 3.2045 12.7045C3.41548 12.4935 3.70163 12.375 4 12.375C4.29837 12.375 4.58452 12.4935 4.7955 12.7045C5.00647 12.9155 5.125 13.2016 5.125 13.5V18.375H19.375V13.5C19.375 13.2016 19.4935 12.9155 19.7045 12.7045C19.9155 12.4935 20.2016 12.375 20.5 12.375C20.7984 12.375 21.0845 12.4935 21.2955 12.7045C21.5065 12.9155 21.625 13.2016 21.625 13.5ZM11.4541 14.2959C11.5586 14.4008 11.6828 14.484 11.8195 14.5408C11.9563 14.5976 12.1029 14.6268 12.2509 14.6268C12.399 14.6268 12.5456 14.5976 12.6824 14.5408C12.8191 14.484 12.9433 14.4008 13.0478 14.2959L16.7978 10.5459C17.0092 10.3346 17.1279 10.0479 17.1279 9.74906C17.1279 9.45018 17.0092 9.16353 16.7978 8.95219C16.5865 8.74084 16.2998 8.62211 16.0009 8.62211C15.7021 8.62211 15.4154 8.74084 15.2041 8.95219L13.375 10.7812V3C13.375 2.70163 13.2565 2.41548 13.0455 2.2045C12.8345 1.99353 12.5484 1.875 12.25 1.875C11.9516 1.875 11.6655 1.99353 11.4545 2.2045C11.2435 2.41548 11.125 2.70163 11.125 3V10.7812L9.29594 8.95406C9.19129 8.84942 9.06706 8.7664 8.93033 8.70977C8.7936 8.65314 8.64706 8.62399 8.49906 8.62399C8.20018 8.62399 7.91353 8.74272 7.70219 8.95406C7.59754 9.05871 7.51453 9.18294 7.4579 9.31967C7.40126 9.4564 7.37211 9.60294 7.37211 9.75094C7.37211 10.0498 7.49084 10.3365 7.70219 10.5478L11.4541 14.2959Z" fill="white"></path>
                                </svg>
                            </span>
                            <span class="home-hero__download-link-text">
                                Download </span>
                        </a>
                    </div>

                </div>
                <div class="home-hero__right-wrapper" id="home-hero__right-wrapper">
                    <img src="<?php echo $home_hero_image; ?>" alt="<?php echo $home_hero_image_alt; ?>" loading="auto">

                </div>
            </div>
            <div class="home-hero__bottom-wrapper">
                <ul class="home-hero__items">
                    <li class="home-hero__item">
                        <div class="home-hero__item-image-wrapper">
                            <img src="<?php echo $home_hero_grid_image_one; ?>" alt="<?php echo $home_hero_grid_image_one_alt; ?>">
                        </div>
                        <h2 class="home-hero__item-title">
                            Connect to any Starknet dApp in seconds </h2>
                    </li>
                    <li class="home-hero__item">
                        <div class="home-hero__item-image-wrapper">
                            <img src="<?php echo $home_hero_grid_image_two; ?>" alt="<?php echo $home_hero_grid_image_two_alt; ?>">
                        </div>
                        <h2 class="home-hero__item-title">
                            Protect your assets with best in crypto security </h2>
                    </li>
                    <li class="home-hero__item">
                        <div class="home-hero__item-image-wrapper">
                            <img src="<?php echo $home_hero_grid_image_three; ?>" alt="<?php echo $home_hero_grid_image_three_alt; ?>">
                        </div>
                        <h2 class="home-hero__item-title">
                            Buy, swap and invest your crypto with one click </h2>
                    </li>
                </ul>
            </div>

        </div>
        <div class="popup-overlay" id="popupOverlay" style="display: flex;">
            <div class="popup" id="popup"> </div>
        </div>
    </section>
    <section class="home-rating">
        <div class="home-rating__container">
            <h2 class="home-rating__title"> Loved &amp; Trusted<br> by <span>1,000,000+ </span>users</h2>
            <div class="home-rating__wrapper">
                <ul class="home-rating__stars">
                    <li class="home-rating__star"> <svg xmlns="http://www.w3.org/2000/svg" width="50" height="48" viewBox="0 0 50 48" fill="none">
                            <path d="M23.9026 1.85024C24.1685 1.31133 24.937 1.31133 25.203 1.85024L31.6627 14.9391C31.9796 15.5811 32.592 16.0261 33.3005 16.1291L47.745 18.228C48.3397 18.3144 48.5772 19.0452 48.1468 19.4647L37.6947 29.653C37.1821 30.1527 36.9481 30.8727 37.0691 31.5784L39.5365 45.9644C39.6381 46.5567 39.0164 47.0084 38.4845 46.7288L25.565 39.9366C24.9313 39.6034 24.1742 39.6034 23.5406 39.9366L10.621 46.7288C10.0891 47.0084 9.46741 46.5568 9.569 45.9644L12.0364 31.5783C12.1574 30.8727 11.9235 30.1527 11.4108 29.653L0.958723 19.4647C0.528383 19.0452 0.765846 18.3144 1.36057 18.228L15.805 16.1291C16.5135 16.0261 17.126 15.5811 17.4428 14.9391L23.9026 1.85024Z" fill="#FFD12E" stroke="#FFD12E" stroke-width="1.45015"></path>
                        </svg></li>
                    <li class="home-rating__star"> <svg xmlns="http://www.w3.org/2000/svg" width="50" height="48" viewBox="0 0 50 48" fill="none">
                            <path d="M23.9026 1.85024C24.1685 1.31133 24.937 1.31133 25.203 1.85024L31.6627 14.9391C31.9796 15.5811 32.592 16.0261 33.3005 16.1291L47.745 18.228C48.3397 18.3144 48.5772 19.0452 48.1468 19.4647L37.6947 29.653C37.1821 30.1527 36.9481 30.8727 37.0691 31.5784L39.5365 45.9644C39.6381 46.5567 39.0164 47.0084 38.4845 46.7288L25.565 39.9366C24.9313 39.6034 24.1742 39.6034 23.5406 39.9366L10.621 46.7288C10.0891 47.0084 9.46741 46.5568 9.569 45.9644L12.0364 31.5783C12.1574 30.8727 11.9235 30.1527 11.4108 29.653L0.958723 19.4647C0.528383 19.0452 0.765846 18.3144 1.36057 18.228L15.805 16.1291C16.5135 16.0261 17.126 15.5811 17.4428 14.9391L23.9026 1.85024Z" fill="#FFD12E" stroke="#FFD12E" stroke-width="1.45015"></path>
                        </svg></li>
                    <li class="home-rating__star"> <svg xmlns="http://www.w3.org/2000/svg" width="50" height="48" viewBox="0 0 50 48" fill="none">
                            <path d="M23.9026 1.85024C24.1685 1.31133 24.937 1.31133 25.203 1.85024L31.6627 14.9391C31.9796 15.5811 32.592 16.0261 33.3005 16.1291L47.745 18.228C48.3397 18.3144 48.5772 19.0452 48.1468 19.4647L37.6947 29.653C37.1821 30.1527 36.9481 30.8727 37.0691 31.5784L39.5365 45.9644C39.6381 46.5567 39.0164 47.0084 38.4845 46.7288L25.565 39.9366C24.9313 39.6034 24.1742 39.6034 23.5406 39.9366L10.621 46.7288C10.0891 47.0084 9.46741 46.5568 9.569 45.9644L12.0364 31.5783C12.1574 30.8727 11.9235 30.1527 11.4108 29.653L0.958723 19.4647C0.528383 19.0452 0.765846 18.3144 1.36057 18.228L15.805 16.1291C16.5135 16.0261 17.126 15.5811 17.4428 14.9391L23.9026 1.85024Z" fill="#FFD12E" stroke="#FFD12E" stroke-width="1.45015"></path>
                        </svg></li>
                    <li class="home-rating__star"> <svg xmlns="http://www.w3.org/2000/svg" width="50" height="48" viewBox="0 0 50 48" fill="none">
                            <path d="M23.9026 1.85024C24.1685 1.31133 24.937 1.31133 25.203 1.85024L31.6627 14.9391C31.9796 15.5811 32.592 16.0261 33.3005 16.1291L47.745 18.228C48.3397 18.3144 48.5772 19.0452 48.1468 19.4647L37.6947 29.653C37.1821 30.1527 36.9481 30.8727 37.0691 31.5784L39.5365 45.9644C39.6381 46.5567 39.0164 47.0084 38.4845 46.7288L25.565 39.9366C24.9313 39.6034 24.1742 39.6034 23.5406 39.9366L10.621 46.7288C10.0891 47.0084 9.46741 46.5568 9.569 45.9644L12.0364 31.5783C12.1574 30.8727 11.9235 30.1527 11.4108 29.653L0.958723 19.4647C0.528383 19.0452 0.765846 18.3144 1.36057 18.228L15.805 16.1291C16.5135 16.0261 17.126 15.5811 17.4428 14.9391L23.9026 1.85024Z" fill="#FFD12E" stroke="#FFD12E" stroke-width="1.45015"></path>
                        </svg></li>
                    <li class="home-rating__star--last"> <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 56 56" fill="none">
                            <path d="M36.1166 17.3253L29.3713 3.658C28.8394 2.58018 27.3025 2.58018 26.7705 3.65799L20.3108 16.7469C20.0996 17.1749 19.6913 17.4715 19.2189 17.5402L4.77448 19.6391C3.58504 19.8119 3.1101 21.2736 3.97079 22.1126L14.4229 32.3009C14.7647 32.634 14.9206 33.114 14.8399 33.5844L12.3725 47.9705C12.1694 49.1551 13.4128 50.0585 14.4766 49.4992L27.3961 42.707C27.8186 42.4849 28.3233 42.4849 28.7458 42.707L36.1384 46.5936C36.1584 46.6041 36.1796 46.6121 36.2015 46.6175C36.3776 46.6606 36.547 46.5259 36.5447 46.3446L36.1685 17.5479C36.1685 17.4707 36.1507 17.3945 36.1166 17.3253Z" fill="#FFD12E"></path>
                            <path d="M21.3676 17.367L27.6106 4.71725L33.8537 17.367C34.3113 18.2943 35.196 18.9371 36.2194 19.0858L50.1792 21.1143L40.0778 30.9607C39.3372 31.6825 38.9993 32.7225 39.1741 33.7418L41.5588 47.6452L29.0727 41.0809C28.1574 40.5997 27.0639 40.5997 26.1485 41.0809L13.6625 47.6452L16.0471 33.7418C16.2219 32.7225 15.884 31.6825 15.1435 30.9607L5.04208 21.1143L19.0019 19.0858C20.0253 18.9371 20.9099 18.2943 21.3676 17.367ZM41.6416 48.1279C41.6415 48.1277 41.6415 48.1276 41.6415 48.1274L41.6416 48.1279ZM41.9916 47.8728C41.9918 47.8729 41.992 47.873 41.9922 47.8731L41.9916 47.8728Z" stroke="#FFD12E" stroke-width="3.38367"></path>
                        </svg></li>
                </ul>
                <p class="home-rating__text"> rating: <span>4.9</span> out of 5</p>
                <p class="home-rating__text-reviews"> 7.4k reviews</p>
            </div>
        </div>
    </section>
    <section class="apps-slider">
        <div class="apps-slider__container">
            <h2 class="apps-slider__title"> Connect to your favorite Starknet applications with Braavos&nbsp;</h2>
            <div class="swiper-container apps-container">
                <div class="swiper Swiper-apps swiper-initialized swiper-horizontal swiper-backface-hidden">
                    <div class="swiper-wrapper" id="swiper-wrapper-9a447e08e3172059" aria-live="polite">
                        <div class="swiper-slide apps-slide swiper-slide-active" style="width: 353.6px; margin-right: 24px;" role="group" aria-label="1 / 6" data-swiper-slide-index="0">
                            <div class="swiper-content"> <img src="<?php echo site_url(); ?>/wp-content/uploads/2024/11/Ekubo.png" alt="">
                                <p> Ekubo</p>
                            </div>
                        </div>
                        <div class="swiper-slide apps-slide swiper-slide-next" style="width: 353.6px; margin-right: 24px;" role="group" aria-label="2 / 6" data-swiper-slide-index="1">
                            <div class="swiper-content"> <img src="<?php echo site_url(); ?>/wp-content/uploads/2024/11/ZKLend.png" alt="">
                                <p> ZKlend</p>
                            </div>
                        </div>
                        <div class="swiper-slide apps-slide" style="width: 353.6px; margin-right: 24px;" role="group" aria-label="3 / 6" data-swiper-slide-index="2">
                            <div class="swiper-content"> <img src="<?php echo site_url(); ?>/wp-content/uploads/2024/11/mySwap.png" alt="">
                                <p> MySwap</p>
                            </div>
                        </div>
                        <div class="swiper-slide apps-slide" style="width: 353.6px; margin-right: 24px;" role="group" aria-label="4 / 6" data-swiper-slide-index="3">
                            <div class="swiper-content"> <img src="<?php echo site_url(); ?>/wp-content/uploads/2024/11/Group-1000003074.png" alt="">
                                <p> Nimbora</p>
                            </div>
                        </div>
                        <div class="swiper-slide apps-slide" style="width: 353.6px; margin-right: 24px;" role="group" aria-label="5 / 6" data-swiper-slide-index="4">
                            <div class="swiper-content"> <img src="<?php echo site_url(); ?>/wp-content/uploads/2024/11/image_252.png" alt="">
                                <p> Avnu</p>
                            </div>
                        </div>
                        <div class="swiper-slide apps-slide" role="group" aria-label="6 / 6" data-swiper-slide-index="5" style="width: 353.6px; margin-right: 24px;">
                            <div class="swiper-content"> <img src="<?php echo site_url(); ?>/wp-content/uploads/2024/11/Frame_1686553381.png" alt="">
                                <p> Starknet.id</p>
                            </div>
                        </div>
                    </div><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                </div>
                <div class="swiper-button-next swiper-app-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-9a447e08e3172059"></div>
                <div class="swiper-button-prev swiper-app-button-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-9a447e08e3172059"></div>
            </div>
        </div>
    </section>
    <section class="home-deposit">
        <div class="home-deposit__container">
            <h2 class="home-deposit__title"> Buy, send, swap and earn crypto on Starknet. All in one self-custody wallet</h2>
            <div class="home-deposit__wrapper">
                <div class="home-deposit__left-wrapper blue-circle-shadow ">
                    <h3 class="home-deposit__list-title"> Deposit funds using multiple options:</h3>
                    <ul class="home-deposit__list">
                        <li class="home-deposit__item">
                            <p class="home-deposit__item-text"> Buy crypto with Apple Pay, Google Pay, credit card or bank transfer</p>
                        </li>
                        <li class="home-deposit__item">
                            <p class="home-deposit__item-text"> Transfer crypto from your favorite exchange</p>
                        </li>
                        <li class="home-deposit__item">
                            <p class="home-deposit__item-text"> Bridge crypto from other networks</p>
                        </li>
                    </ul>
                </div>
                <div class="home-deposit__right-wrapper" id="home-deposit__right-wrapper">
                    <img src="<?php echo $home_deposit_image; ?>" alt="<?php echo $home_deposit_image_alt; ?>">
                </div>
            </div>
        </div>
    </section>
    <section class="home-security">
        <div class="home-security__container">
            <div class="home-security__left-wrapper" id="home-security__left-wrapper">
            <img src="<?php echo $home_security_image; ?>" alt="<?php echo $home_security_image_alt; ?>" loading="auto">

            </div>
            <div class="home-security__right-wrapper blue-circle-shadow">
                <h2 class="home-security__title"> Keep your assets safe with industry leading security</h2>
                <p class="home-security__description"> The only wallet with biometric two and three factor protection for all your transactions</p>
                <div class="home-security__icon-wrapper"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/2-3FA.png" alt="" class="home-security__temp-image"></div>
            </div>
        </div>
    </section>
    <section class="home-swap">
        <div class="home-swap__container">
            <div class="home-swap__left-wrapper blue-circle-shadow">
                <h2 class="home-swap__title"> Swap tokens at the best rates</h2>
                <p class="home-swap__description"> Swap any token with one click from within your wallet</p>
            </div>
            <div class="home-swap__right-wrapper" id="home-swap__right-wrapper">
            <img src="<?php echo $home_swap_image; ?>" alt="<?php echo $home_swap_image_alt; ?>" loading="auto">

            </div>
        </div>
    </section>
    <section class="home-grow">
        <div class="home-grow__container">
            <div class="home-grow__left-wrapper " id="home-grow__left-wrapper">
            <img src="<?php echo $home_grow_image; ?>" alt="<?php echo $home_grow_image_alt; ?>" loading="auto">

            </div>
            <div class="home-grow__right-wrapper blue-circle-shadow">
                <h2 class="home-grow__title"> Grow your crypto: <br> DeFi made easy</h2>
                <ul class="home-grow__list">
                    <li class="home-grow__item">
                        <p class="home-grow__item-text"> Stake your ETH with one click</p>
                    </li>
                    <li class="home-grow__item">
                        <p class="home-grow__item-text"> Track all your positions across protocols using the DeFi dashboard</p>
                    </li>
                    <li class="home-grow__item">
                        <p class="home-grow__item-text"> Earn DeFi yield on ETH, STRK and stablecoins</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="home-reviews">
        <div class="home-reviews__container">
            <h2 class="home-reviews__title"> What real users are saying about Braavos?</h2>
            <div class="swiper-container testimonials-container">
                <div class="swiper Swiper-testimonials swiper-initialized swiper-horizontal swiper-backface-hidden">
                    <div class="swiper-wrapper" id="swiper-wrapper-34c910053ae274f74" aria-live="off" style="transition-duration: 0ms; transform: translate3d(-317.333px, 0px, 0px); transition-delay: 0ms;">
                        <div class="swiper-slide testimonial-slide swiper-slide-prev" style="width: 293.333px; margin-right: 24px;" role="group" aria-label="1 / 6" data-swiper-slide-index="0">
                            <div class="testimonial-content">
                                <div class="testimonial-header">
                                    <div class="testimonial-header-info"> <img src="<?php echo site_url(); ?>/wp-content/uploads/2024/11/image-220-1.png" alt="">
                                        <div class="testimonial-header-text">
                                            <p class="testimonial-name"> nils bundi</p>
                                            <p class="testimonial-nickname">@nilsbundi</p>
                                        </div>
                                    </div> <img src="<?php echo site_url(); ?>/wp-content/themes/braavos/assets/images/testimonials/vector.png" alt="">
                                </div>
                                <div class="testimonial-text"> Wallets offer the best DeFi UX for end users and I'm happy that <br> @myBraavos users are able to seamlessly earn on Vesu now <br> <br> Great wallet great earning with
                                    @myBraavos and @vesuxyz</div> <small>6:19 PM Jul 24, 2024</small>
                            </div>
                        </div>
                        <div class="swiper-slide testimonial-slide swiper-slide-active" style="width: 293.333px; margin-right: 24px;" role="group" aria-label="2 / 6" data-swiper-slide-index="1">
                            <div class="testimonial-content">
                                <div class="testimonial-header">
                                    <div class="testimonial-header-info"> <img src="<?php echo site_url(); ?>/wp-content/uploads/2024/11/image-220-2.png" alt="">
                                        <div class="testimonial-header-text">
                                            <p class="testimonial-name"> Hamd1st</p>
                                            <p class="testimonial-nickname">@Hamd1st</p>
                                        </div>
                                    </div> <img src="<?php echo site_url(); ?>/wp-content/themes/braavos/assets/images/testimonials/vector.png" alt="">
                                </div>
                                <div class="testimonial-text"> Hands down, @Braavos remains my top choice for a wallet, not just on Starknet, but across all of Crypto! The Hardware Signer (HWS) gives me complete peace of mind, and that's coming from someone who's lost a five-figure sum on MetaMask due to a hack. Learned my lesson.</div> <small>3:03 PM Jul 18, 2024</small>
                            </div>
                        </div>
                        <div class="swiper-slide testimonial-slide swiper-slide-next" style="width: 293.333px; margin-right: 24px;" role="group" aria-label="3 / 6" data-swiper-slide-index="2">
                            <div class="testimonial-content">
                                <div class="testimonial-header">
                                    <div class="testimonial-header-info"> <img src="<?php echo site_url(); ?>/wp-content/uploads/2024/11/image-220-3.png" alt="">
                                        <div class="testimonial-header-text">
                                            <p class="testimonial-name"> Мар'яна Іваськевич</p>
                                            <p class="testimonial-nickname">@Key_maryme</p>
                                        </div>
                                    </div> <img src="<?php echo site_url(); ?>/wp-content/themes/braavos/assets/images/testimonials/vector.png" alt="">
                                </div>
                                <div class="testimonial-text"> Elevate your DeFi experience with<br> @myBraavos V2! Redesigned interface, centralized DeFi dashboard, detailed position info, enhanced security, low gas fees, daily spending limits, easy ETH staking, and a Starknet dApp gallery - all in one powerful wallet! #Braavos</div> <small>4:51 PM Jul 16, 2024</small>
                            </div>
                        </div>
                        <div class="swiper-slide testimonial-slide" style="width: 293.333px; margin-right: 24px;" role="group" aria-label="4 / 6" data-swiper-slide-index="3">
                            <div class="testimonial-content">
                                <div class="testimonial-header">
                                    <div class="testimonial-header-info"> <img src="<?php echo site_url(); ?>/wp-content/uploads/2024/11/image-220.png" alt="">
                                        <div class="testimonial-header-text">
                                            <p class="testimonial-name"> WASHI.BASE</p>
                                            <p class="testimonial-nickname">@washi_nilo</p>
                                        </div>
                                    </div> <img src="<?php echo site_url(); ?>/wp-content/themes/braavos/assets/images/testimonials/vector.png" alt="">
                                </div>
                                <div class="testimonial-text"> The safest wallet is also one of the best looking UI wallet</div> <small>4:08 PM Jul 18, 2024</small>
                            </div>
                        </div>
                        <div class="swiper-slide testimonial-slide" style="width: 293.333px; margin-right: 24px;" role="group" aria-label="5 / 6" data-swiper-slide-index="4">
                            <div class="testimonial-content">
                                <div class="testimonial-header">
                                    <div class="testimonial-header-info"> <img src="<?php echo site_url(); ?>/wp-content/uploads/2024/11/image-221.png" alt="">
                                        <div class="testimonial-header-text">
                                            <p class="testimonial-name"> Dmitriy</p>
                                            <p class="testimonial-nickname">@dmitriq1205</p>
                                        </div>
                                    </div> <img src="<?php echo site_url(); ?>/wp-content/themes/braavos/assets/images/testimonials/vector.png" alt="">
                                </div>
                                <div class="testimonial-text"> Great wallet that I will use, user-friendly interface, everything is simple and clear. Cool development team and I will continue to move with such a team.</div> <small>3:03 PM Sep 9, 2022</small>
                            </div>
                        </div>
                        <div class="swiper-slide testimonial-slide" role="group" aria-label="6 / 6" data-swiper-slide-index="5" style="width: 293.333px; margin-right: 24px;">
                            <div class="testimonial-content">
                                <div class="testimonial-header">
                                    <div class="testimonial-header-info"> <img src="<?php echo site_url(); ?>/wp-content/uploads/2024/11/image-265.png" alt="">
                                        <div class="testimonial-header-text">
                                            <p class="testimonial-name"> Hryhorii</p>
                                            <p class="testimonial-nickname">@Hryhori59658740</p>
                                        </div>
                                    </div> <img src="<?php echo site_url(); ?>/wp-content/themes/braavos/assets/images/testimonials/vector.png" alt="">
                                </div>
                                <div class="testimonial-text"> Cool wallet and really enjoy using it In both testnet and mainet as well <img draggable="false" role="img" class="emoji" alt="🔥" src="https://s.w.org/images/core/emoji/15.0.3/svg/1f525.svg"><img draggable="false" role="img" class="emoji" alt="🔥" src="https://s.w.org/images/core/emoji/15.0.3/svg/1f525.svg"><img draggable="false" role="img" class="emoji" alt="🔥" src="https://s.w.org/images/core/emoji/15.0.3/svg/1f525.svg"></div> <small>6:19 PM Aug 22, 2022</small>
                            </div>
                        </div>
                    </div><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                </div>
                <div class="swiper-button-next swiper-testimonials-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-34c910053ae274f74"></div>
                <div class="swiper-button-prev swiper-testimonials-button-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-34c910053ae274f74"></div>
                <div class="swiper-pagination swiper-pagination-testimonials swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 2" aria-current="true"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 4"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 5"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 6"></span></div>
            </div>
        </div>
    </section>
    <section class="home-banner">
        <div class="home-banner__container">
            <h2 class="home-banner__title"> Secure. Smart. Self-Custodial.</h2>
            <div class="home-banner__wrapper">
                <div class="home-banner_background">
                <div class="home-banner__image"> <img src="<?php echo site_url(); ?>/wp-content/themes/braavos/assets/images/home-banner.png" alt=""></div>
                <div class="home-banner__content">
                    <p class="home-banner__text"> Intuitive and safe start for Starknet newcomers. Advanced features to help degens get ahead.</p>
                </div>
                </div>

            </div>
        </div>
    </section>
    <section class="home-table">
        <div class="home-table__container">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <h2 class="home-table__title"> The Braavos wallet difference</h2>

                    </div>
                    <div class="col-md-8">
                        <div class="home-table__scroll-container">
                            <div class="home-table__wrapper">
                                <div class="home-table__row">
                                    <div class="home-table__table-head-block"></div>
                                    <div class="home-table__table-head-block text-center">
                                        <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/home-table-logo.png' ?>" alt="">
                                        <p> Braavos</p>
                                    </div>
                                    <div class="home-table__table-head-block">
                                        <p> Other Starknet
                                            wallets</p>
                                    </div>
                                    <div class="home-table__table-head-block">
                                        <p> Hardware wallets</p>
                                    </div>
                                    <div class="home-table__table-head-block">
                                        <p> Centralized
                                            exchanges</p>
                                    </div>
                                </div>
                                <div class="home-table__row">
                                    <div class="home-table__row-title">
                                        <p> Self-custodial</p>
                                    </div>
                                    <div class="home-table__content"> <img src="<?php echo site_url(); ?>/wp-content/themes/braavos/assets/images/check_circle.svg" alt=""></div>
                                    <div class="home-table__content"> <img src="<?php echo site_url(); ?>/wp-content/themes/braavos/assets/images/check_circle.svg" alt=""></div>
                                    <div class="home-table__content"> <img src="<?php echo site_url(); ?>/wp-content/themes/braavos/assets/images/check_circle.svg" alt=""></div>
                                    <div class="home-table__content"> <img src="<?php echo site_url(); ?>/wp-content/themes/braavos/assets/images/cancel.svg" alt="Dark Cancel" data-theme="dark" style="display: block;"> <img src="<?php echo site_url(); ?>/wp-content/themes/braavos/assets/images/cancel-light.svg" alt="Light Cancel" data-theme="light" style="display: none;"></div>
                                </div>
                                <div class="home-table__row">
                                    <div class="home-table__row-title">
                                        <p> Biometric multifactor protection for all transactions</p>
                                    </div>
                                    <div class="home-table__content"> <img src="<?php echo site_url(); ?>/wp-content/themes/braavos/assets/images/check_circle.svg" alt=""></div>
                                    <div class="home-table__content"> <img src="<?php echo site_url(); ?>/wp-content/themes/braavos/assets/images/cancel.svg" alt="Dark Cancel" data-theme="dark" style="display: block;"> <img src="<?php echo site_url(); ?>/wp-content/themes/braavos/assets/images/cancel-light.svg" alt="Light Cancel" data-theme="light" style="display: none;"></div>
                                    <div class="home-table__content"> <img src="<?php echo site_url(); ?>/wp-content/themes/braavos/assets/images/cancel.svg" alt="Dark Cancel" data-theme="dark" style="display: block;"> <img src="<?php echo site_url(); ?>/wp-content/themes/braavos/assets/images/cancel-light.svg" alt="Light Cancel" data-theme="light" style="display: none;"></div>
                                    <div class="home-table__content"> <img src="<?php echo site_url(); ?>/wp-content/themes/braavos/assets/images/cancel.svg" alt="Dark Cancel" data-theme="dark" style="display: block;"> <img src="<?php echo site_url(); ?>/wp-content/themes/braavos/assets/images/cancel-light.svg" alt="Light Cancel" data-theme="light" style="display: none;"></div>
                                </div>
                                <div class="home-table__row">
                                    <div class="home-table__row-title">
                                        <p> Connects to Starknet applications</p>
                                    </div>
                                    <div class="home-table__content"> <img src="<?php echo site_url(); ?>/wp-content/themes/braavos/assets/images/check_circle.svg" alt=""></div>
                                    <div class="home-table__content"> <img src="<?php echo site_url(); ?>/wp-content/themes/braavos/assets/images/check_circle.svg" alt=""></div>
                                    <div class="home-table__content"> <img src="<?php echo site_url(); ?>/wp-content/themes/braavos/assets/images/cancel.svg" alt="Dark Cancel" data-theme="dark" style="display: block;"> <img src="<?php echo site_url(); ?>/wp-content/themes/braavos/assets/images/cancel-light.svg" alt="Light Cancel" data-theme="light" style="display: none;"></div>
                                    <div class="home-table__content"> <img src="<?php echo site_url(); ?>/wp-content/themes/braavos/assets/images/cancel.svg" alt="Dark Cancel" data-theme="dark" style="display: block;"> <img src="<?php echo site_url(); ?>/wp-content/themes/braavos/assets/images/cancel-light.svg" alt="Light Cancel" data-theme="light" style="display: none;"></div>
                                </div>
                                <div class="home-table__row">
                                    <div class="home-table__row-title">
                                        <p> Free of charge</p>
                                    </div>
                                    <div class="home-table__content"> <img src="<?php echo site_url(); ?>/wp-content/themes/braavos/assets/images/check_circle.svg" alt=""></div>
                                    <div class="home-table__content"> <img src="<?php echo site_url(); ?>/wp-content/themes/braavos/assets/images/check_circle.svg" alt=""></div>
                                    <div class="home-table__content"> <img src="<?php echo site_url(); ?>/wp-content/themes/braavos/assets/images/cancel.svg" alt="Dark Cancel" data-theme="dark" style="display: block;"> <img src="<?php echo site_url(); ?>/wp-content/themes/braavos/assets/images/cancel-light.svg" alt="Light Cancel" data-theme="light" style="display: none;"></div>
                                    <div class="home-table__content"> <img src="<?php echo site_url(); ?>/wp-content/themes/braavos/assets/images/check_circle.svg" alt=""></div>
                                </div>
                                <div class="home-table__row">
                                    <div class="home-table__row-title home-table__row-title--last">
                                        <p> DeFi dashboard to track all positions in your wallet</p>
                                    </div>
                                    <div class="home-table__content"> <img src="<?php echo site_url(); ?>/wp-content/themes/braavos/assets/images/check_circle.svg" alt=""></div>
                                    <div class="home-table__content"> <img src="<?php echo site_url(); ?>/wp-content/themes/braavos/assets/images/cancel.svg" alt="Dark Cancel" data-theme="dark" style="display: block;"> <img src="<?php echo site_url(); ?>/wp-content/themes/braavos/assets/images/cancel-light.svg" alt="Light Cancel" data-theme="light" style="display: none;"></div>
                                    <div class="home-table__content"> <img src="<?php echo site_url(); ?>/wp-content/themes/braavos/assets/images/cancel.svg" alt="Dark Cancel" data-theme="dark" style="display: block;"> <img src="<?php echo site_url(); ?>/wp-content/themes/braavos/assets/images/cancel-light.svg" alt="Light Cancel" data-theme="light" style="display: none;"></div>
                                    <div class="home-table__content home-table__content--last"> <img src="<?php echo site_url(); ?>/wp-content/themes/braavos/assets/images/cancel.svg" alt="Dark Cancel" data-theme="dark" style="display: block;"> <img src="<?php echo site_url(); ?>/wp-content/themes/braavos/assets/images/cancel-light.svg" alt="Light Cancel" data-theme="light" style="display: none;"></div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="home-table__arrows"> <span class="home-table__arrows-left"> <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M9.61797 0.395403C9.10859 -0.131801 8.28271 -0.131801 7.77333 0.395402L0.382044 8.04542C-0.12735 8.57262 -0.12735 9.42741 0.382043 9.95461L7.77333 17.6046C8.2827 18.1318 9.10859 18.1318 9.61796 17.6046C10.1273 17.0774 10.1273 16.2227 9.61796 15.6955L3.14894 9.00002L9.61797 2.3046C10.1273 1.77739 10.1273 0.922606 9.61797 0.395403Z" fill=""></path>
                                </svg> </span> <span class="home-table__arrows-right"> <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.382032 17.6046C0.891409 18.1318 1.71729 18.1318 2.22667 17.6046L9.61796 9.95458C10.1273 9.42737 10.1273 8.57259 9.61796 8.04539L2.22667 0.395417C1.71729 -0.131805 0.891412 -0.131805 0.382035 0.395416C-0.127341 0.922638 -0.127341 1.77728 0.382035 2.3045L6.85106 8.99998L0.382033 15.6954C-0.127344 16.2226 -0.127344 17.0774 0.382032 17.6046Z" fill=""></path>
                                </svg> </span></div> -->
                    </div>
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
