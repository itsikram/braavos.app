<?php
// template name: One Click Invest
$theme_options = get_option('theme_option');

$oci_hero_text = $theme_options['oci_hero_text'];

$oci_hero_image_alt = get_post_meta($theme_options['oci_hero_image']['id'], '_wp_attachment_image_alt', true);
$oci_hero_image = $theme_options['oci_hero_image']['url'];

$oci_hero_image_mobile_alt = get_post_meta($theme_options['oci_hero_image_mobile']['id'], '_wp_attachment_image_alt', true);
$oci_hero_image_mobile = $theme_options['oci_hero_image_mobile']['url'];


$oci_video_placehoder_image = $theme_options['oci_video_placehoder_image']['url'];
$oci_video_placehoder_image_alt = get_post_meta($theme_options['oci_video_placehoder_image']['id'], '_wp_attachment_image_alt', true);

$oci_description_image_one  = $theme_options['oci_description_image_one']['url'];
$oci_description_image_one_alt = get_post_meta($theme_options['oci_description_image_one']['id'], '_wp_attachment_image_alt', true);

$oci_description_image_two  = $theme_options['oci_description_image_two']['url'];
$oci_description_image_two_alt = get_post_meta($theme_options['oci_description_image_two']['id'], '_wp_attachment_image_alt', true);

$oci_description_image_three  = $theme_options['oci_description_image_three']['url'];
$oci_description_image_three_alt = get_post_meta($theme_options['oci_description_image_three']['id'], '_wp_attachment_image_alt', true);

$oci_description_image_four  = $theme_options['oci_description_image_four']['url'];
$oci_description_image_four_alt = get_post_meta($theme_options['oci_description_image_four']['id'], '_wp_attachment_image_alt', true);

$oci_description_image_four_mobile  = $theme_options['oci_description_image_four_mobile']['url'];
$oci_description_image_four_mobile_alt = get_post_meta($theme_options['oci_description_image_four_mobile']['id'], '_wp_attachment_image_alt', true);

$oci_description_image_five  = $theme_options['oci_description_image_five']['url'];
$oci_description_image_five_alt = get_post_meta($theme_options['oci_description_image_five']['id'], '_wp_attachment_image_alt', true);


get_header(); ?>

<main class="main-section section-bg-control">
    <section class="oci-hero-section section-bg-control">
        <div class="container py-5">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-6 hero-left-container">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/mouse-pointer.svg'; ?>" alt="" class="hero-left-top-icon">
                    <h2 class="fs-1 hero-left-heading theme-color my-3 font-jakarta">
                        <?php echo $oci_hero_text; ?>
                        <!-- Maximize your yield <br> on your crypto with <br> one click -->
                    </h2>
                    <ul class="connect-options font-jakarta theme-color">
                        <li>Earn yield on your crypto through Nimbora within your Braavos wallet</li>
                        <li>Get 30% boost in Nimbora point</li>
                        <li>Pay gas fees as low as $0.01</li>
                        <li>Invest on Starknet while benefiting from Ethereum’s security</li>
                        <li>Cut out the hassle of DeFi by investing directly from your wallet with just one click</li>
                    </ul>
                    <div class="hero-left-btn-container my-3 font-jakarta">

                        <a href="<?php echo home_url() . '/download-braavos-wallet'; ?>" class="btn btn-primary download-braavos-btn">
                            <span class="explore-btn-icon">
                                <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/download-dApps-icon.png'; ?>" alt="">
                            </span>
                            Download Braavos Wallet
                        </a>
                    </div>
                </div>
                <div class="col-md-6 hero-right-container">
                    <div class="right-image-container">
                        <img src="<?php echo $oci_hero_image; ?>" alt="<?php echo $oci_hero_image_alt; ?>" class="d-hero-right-image">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="oci-video-section py-5 section-bg-control">
        <div class="container py-5">
            <div class="row">
                <div class="col video-container">
                    <img src="<?php echo $oci_video_placehoder_image; ?>" class="video-placeholder" alt="">
                    <div class="play-btn">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/icu-play-icon.png'; ?>" alt="">

                    </div>

                    <div class="youtube-short-container d-flex justify-content-center">
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="easily-earn-section py-5 theme-color font-jakarta">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="fs-1 easily-earn-heading">
                        Easily earn yield on your crypto with just <br> one click by investing through Braavos
                    </h2>

                    <p class="fs-6 easily-earn-desc">
                        One-Click Invest is perfect for crypto users who love DeFi but want it simple. No more wasting time researching the best yields, connecting to dApps, or worrying about phishing risks. Say goodbye to the hassle of a multi-click process. With One-Click Invest, you can access the top DeFi strategies with ease. Simply choose your preferred strategy, click "invest," and start earning yield!
                    </p>
                </div>
            </div>

            <div class="row my-4 row-eth">
                <div class="col">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h3 class="col-heading">
                                Are you investing <span>
                                    <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/eth-icon.png'; ?>" alt="">
                                </span>
                                ETH?
                            </h3>
                            <p class="col-desc">
                                When you invest ETH, Nimbora stakes and restakes it, then converts it into liquid restaking tokens (pufETH or weETH), depending on the strategy you choose. Liquid restaking on Ethereum allows staked ETH to be used for validating external systems like rollups or oracles, which strengthens the ecosystem's security.
                                <br>
                                <br>

                                Liquid Restaking Tokens (LRTs) offer protection against slashing events and provide higher yields compared to traditional staking. They also simplify participation, help manage risks, and save gas by batch-collecting rewards.

                            </p>
                        </div>
                        <div class="col-md-6">
                            <div class="right-image-container text-right">
                                <img src="<?php echo $oci_description_image_one; ?>" alt="<?php echo $oci_description_image_one_alt; ?>">

                            </div>

                        </div>
                    </div>

                </div>
            </div>
            <div class="row my-4 row-usdc">
                <div class="col">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="right-image-container">
                                <img src="<?php echo $oci_description_image_two; ?>" alt="<?php echo $oci_description_image_two_alt; ?>">

                            </div>

                        </div>
                        <div class="col-md-6 my-5">
                            <h3 class="col-heading">
                                Are you investing <span>
                                    <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/usdc-icon.png'; ?>" alt="">
                                </span>
                                USDC?
                            </h3>
                            <p class="col-desc">
                                When you invest USDC, Nimbora converts it into FUSDC or stUSD. 
                                <br>
                                <br>

                                Liquid Restaking Tokens (LRTs) offer protection against slashing events and provide higher yields compared to traditional staking. They also simplify participation, help manage risks, and save gas by batch-collecting rewards.
                                <br>

                                <br>
                                FUSDC is an interest-bearing token you receive when you deposit USDC into Flux Finance's lending pools. It represents your deposited USDC plus the interest earned. As your USDC earns interest, your FUSDC balance grows over time based on the lending pool's interest rate.
                                <br>
                                <br>
                                stUSD generates yields through real-world assets (RWAs) and DeFi assets in Angle Protocol’s reserves.

                            </p>
                        </div>

                    </div>

                </div>
            </div>

            <div class="row my-4 row-dai">
                <div class="col">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h3 class="col-heading">
                                Are you investing <span>
                                    <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/dai-icon.png'; ?>" alt="">
                                </span>
                                DAI?
                            </h3>
                            <p class="col-desc">
                                If you invest DAI, Nimbora deposits it into an sDai vault, a specialized financial tool. This puts your DAI to work, generating potential profits over time. The strategy combines DAI's stability as a stablecoin with the profit potential of DeFi strategies.

                            </p>
                        </div>
                        <div class="col-md-6">
                            <div class="right-image-container text-right">
                                <img src="<?php echo $oci_description_image_three; ?>" alt="<?php echo $oci_description_image_three_alt; ?>">


                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="row my-4">
                <div class="col">
                    <div class="row align-items-start mt-5">
                        <div class="col-md-6">
                            <h3 class="col-heading">
                                Where does the yield come from?
                            </h3>
                            <p class="currency-heading  transparent-bg-control">
                                <span class="currency-icon">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/eth-icon.png'; ?>" alt="">
                                </span>
                                <span>ETH</span>

                            </p>
                            <ul class="connect-options font-jakarta mt-3">
                                <li>Ethereum Execution and Consensus Layer Staking Rewards: Validators earn rewards by participating in block proposal and attestation duties</li>
                                <li>Loyalty Points: Additional incentives from the Puffer Protocol for consistent participation</li>
                                <li>EigenLayer Restaking Rewards: Extra rewards for validators involved in restaking activities on EigenLayer</li>
                                <li>STRK rewards from Starknet DeFi Spring</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <p class="currency-heading right-mt transparent-bg-control">
                                <span class="currency-icon">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/usdc-icon.png'; ?>" alt="">
                                </span>
                                <span>USDC</span>

                            </p>
                            <ul class="connect-options font-jakarta mt-3">
                                <li>Flux Finance's lending pools interets</li>
                                <li>RWAs and DeFi assets in Angle Protocol’s reserves</li>

                            </ul>
                            <p class="currency-heading transparent-bg-control">
                                <span class="currency-icon">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/dai-icon.png'; ?>" alt="">
                                </span>
                                <span>DAI</span>

                            </p>
                            <ul class="connect-options font-jakarta mt-3">
                                <li>Maker Protocol fees from DAI borrowing and treasury earnings.</li>

                            </ul>

                        </div>
                    </div>

                </div>
            </div>


            <div class="row my-4">
                <div class="col-md">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h3 class="col-heading">
                                How much does it cost?
                            </h3>
                            <p class="col-desc">
                                Based on current gas prices, investing through Nimbora via Braavos costs around $0.01, while doing so on Ethereum Layer 1 is 100 times more expensive.

                            </p>
                        </div>
                        <div class="col-md-6 my-5">
                            <div class="right-image-container text-right">
                                <img class="hide-in-mobile" src="<?php echo $oci_description_image_four; ?>" alt="<?php echo $oci_description_image_four_alt; ?>">
                                <img class="d-none show-in-mobile" src="<?php echo $oci_description_image_four_mobile; ?>" alt="<?php echo $oci_description_image_four_mobile_alt; ?>">


                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="row my-4 row-investment">
                <div class="col">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="right-image-container">
                                <img src="<?php echo $oci_description_image_five; ?>" alt="<?php echo $oci_description_image_five_alt; ?>">

                            </div>

                        </div>
                        <div class="col-md-6 my-5">
                            <h3 class="col-heading">
                                How can I see the details of my investment?
                            </h3>
                            <p class="col-desc">
                                In your Braavos wallet, the DeFi tab shows your investment details:

                            </p>
                            <ul class="connect-options font-jakarta mt-3">
                                <li>Vault – The Nimbora vaults you’ve invested in</li>
                                <li>Claimable Rewards – The STRK rewards you’ve earned but haven’t claimed yet</li>
                                <li>Manage Positions – A link to Nimbora for more detailed information</li>
                            </ul>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </section>

    <section class="how-to">
        <div class="how-to__container">
            <h2 class="how-to__title">
                How to invest with One-Click Invest</h2>

            <div class="swiper-container guide-container">
                <div class="swiper Swiper-guide swiper-initialized swiper-horizontal swiper-backface-hidden">
                    <div class="swiper-wrapper" id="swiper-wrapper-78b821067e19f3b8e" aria-live="polite" style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms; transition-delay: 0ms;">
                        <div class="swiper-slide guide-slide swiper-slide-active" role="group" aria-label="1 / 4" data-swiper-slide-index="0" style="margin-right: 24px;">
                            <div class="guide-content">
                                <div class="guide-header">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
                                        <path d="M27.556 20.5431C27.4134 20.4531 27.2504 20.4007 27.0821 20.3907C26.9138 20.3806 26.7457 20.4132 26.5935 20.4856C26.2124 20.6658 25.792 20.7467 25.3713 20.7209C24.9506 20.695 24.5432 20.5632 24.1871 20.3377C23.831 20.1122 23.5377 19.8003 23.3345 19.431C23.1312 19.0617 23.0246 18.6471 23.0246 18.2256C23.0246 17.8041 23.1312 17.3894 23.3345 17.0201C23.5377 16.6508 23.831 16.339 24.1871 16.1135C24.5432 15.8879 24.9506 15.7561 25.3713 15.7303C25.792 15.7044 26.2124 15.7854 26.5935 15.9656C26.7459 16.0379 26.9142 16.0705 27.0826 16.0603C27.2511 16.0501 27.4142 15.9975 27.5568 15.9073C27.6994 15.8171 27.8169 15.6922 27.8982 15.5444C27.9796 15.3966 28.0223 15.2306 28.0222 15.0618V9.72557C28.0222 9.19513 27.8115 8.68643 27.4364 8.31135C27.0614 7.93628 26.5527 7.72557 26.0222 7.72557H21.4947C21.5133 7.55955 21.5225 7.39262 21.5222 7.22557C21.5213 6.61097 21.3949 6.00304 21.1507 5.43903C20.9065 4.87502 20.5497 4.36682 20.1022 3.94557C19.4826 3.36358 18.7107 2.96903 17.8761 2.80759C17.0414 2.64616 16.1781 2.72445 15.3861 3.03339C14.5942 3.34234 13.9059 3.86931 13.401 4.55327C12.8962 5.23723 12.5954 6.05021 12.5335 6.89807C12.5143 7.17386 12.5201 7.45083 12.551 7.72557H8.02222C7.49178 7.72557 6.98308 7.93628 6.608 8.31135C6.23293 8.68643 6.02222 9.19513 6.02222 9.72557V13.7531C5.8562 13.7345 5.68927 13.7253 5.52222 13.7256C4.90763 13.7266 4.29972 13.853 3.73572 14.0972C3.17172 14.3414 2.66351 14.6981 2.24222 15.1456C1.8179 15.5938 1.49118 16.1251 1.28269 16.7061C1.0742 17.287 0.988491 17.9048 1.03097 18.5206C1.10263 19.6048 1.56331 20.6267 2.3283 21.3983C3.0933 22.17 4.11116 22.6395 5.19472 22.7206C5.4705 22.7404 5.74752 22.7345 6.02222 22.7031V26.7256C6.02222 27.256 6.23293 27.7647 6.608 28.1398C6.98308 28.5149 7.49178 28.7256 8.02222 28.7256H26.0222C26.5527 28.7256 27.0614 28.5149 27.4364 28.1398C27.8115 27.7647 28.0222 27.256 28.0222 26.7256V21.3893C28.0223 21.2204 27.9796 21.0541 27.8981 20.9061C27.8165 20.7582 27.6988 20.6332 27.556 20.5431ZM26.0222 26.7256H8.02222V21.3893C8.02227 21.2206 7.97962 21.0546 7.89825 20.9067C7.81687 20.7589 7.6994 20.6341 7.55679 20.5439C7.41418 20.4537 7.25107 20.401 7.08263 20.3908C6.91419 20.3806 6.74591 20.4132 6.59347 20.4856C6.21242 20.6658 5.792 20.7467 5.37129 20.7209C4.95057 20.695 4.54322 20.5632 4.18711 20.3377C3.831 20.1122 3.53769 19.8003 3.33445 19.431C3.13121 19.0617 3.02464 18.6471 3.02464 18.2256C3.02464 17.8041 3.13121 17.3894 3.33445 17.0201C3.53769 16.6508 3.831 16.339 4.18711 16.1135C4.54322 15.8879 4.95057 15.7561 5.37129 15.7303C5.792 15.7044 6.21242 15.7854 6.59347 15.9656C6.74591 16.0379 6.91419 16.0705 7.08263 16.0603C7.25107 16.0501 7.41418 15.9975 7.55679 15.9073C7.6994 15.8171 7.81687 15.6922 7.89825 15.5444C7.97962 15.3966 8.02227 15.2306 8.02222 15.0618V9.72557H13.8585C14.0272 9.72562 14.1932 9.68298 14.3411 9.6016C14.4889 9.52022 14.6137 9.40275 14.7039 9.26015C14.7941 9.11754 14.8468 8.95442 14.857 8.78598C14.8672 8.61754 14.8346 8.44927 14.7622 8.29682C14.582 7.91577 14.5011 7.49535 14.5269 7.07464C14.5528 6.65392 14.6846 6.24658 14.9101 5.89047C15.1356 5.53436 15.4475 5.24105 15.8168 5.0378C16.186 4.83456 16.6007 4.72799 17.0222 4.72799C17.4437 4.72799 17.8584 4.83456 18.2277 5.0378C18.5969 5.24105 18.9088 5.53436 19.1343 5.89047C19.3598 6.24658 19.4917 6.65392 19.5175 7.07464C19.5434 7.49535 19.4624 7.91577 19.2822 8.29682C19.2099 8.44927 19.1773 8.61754 19.1875 8.78598C19.1977 8.95442 19.2503 9.11754 19.3405 9.26015C19.4307 9.40275 19.5556 9.52022 19.7034 9.6016C19.8512 9.68298 20.0172 9.72562 20.186 9.72557H26.0222V13.7543C25.7475 13.7228 25.4705 13.717 25.1947 13.7368C24.0309 13.8192 22.9445 14.3505 22.1648 15.2185C21.3851 16.0865 20.9731 17.2234 21.0156 18.3894C21.058 19.5554 21.5517 20.6593 22.3925 21.4683C23.2333 22.2773 24.3554 22.7281 25.5222 22.7256C25.6893 22.7259 25.8562 22.7167 26.0222 22.6981V26.7256Z" fill="white"></path>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
                                        <path d="M22.0222 2.72559H10.0222C9.22657 2.72559 8.46351 3.04166 7.9009 3.60427C7.33829 4.16687 7.02222 4.92994 7.02222 5.72559V27.7256C7.02222 28.5212 7.33829 29.2843 7.9009 29.8469C8.46351 30.4095 9.22657 30.7256 10.0222 30.7256H22.0222C22.8179 30.7256 23.5809 30.4095 24.1435 29.8469C24.7061 29.2843 25.0222 28.5212 25.0222 27.7256V5.72559C25.0222 4.92994 24.7061 4.16687 24.1435 3.60427C23.5809 3.04166 22.8179 2.72559 22.0222 2.72559ZM23.0222 27.7256C23.0222 27.9908 22.9169 28.2452 22.7293 28.4327C22.5418 28.6202 22.2874 28.7256 22.0222 28.7256H10.0222C9.757 28.7256 9.50265 28.6202 9.31511 28.4327C9.12757 28.2452 9.02222 27.9908 9.02222 27.7256V5.72559C9.02222 5.46037 9.12757 5.20602 9.31511 5.01848C9.50265 4.83094 9.757 4.72559 10.0222 4.72559H22.0222C22.2874 4.72559 22.5418 4.83094 22.7293 5.01848C22.9169 5.20602 23.0222 5.46037 23.0222 5.72559V27.7256ZM17.5222 8.22559C17.5222 8.52226 17.4342 8.81227 17.2694 9.05894C17.1046 9.30561 16.8703 9.49787 16.5962 9.61141C16.3222 9.72494 16.0206 9.75464 15.7296 9.69676C15.4386 9.63889 15.1713 9.49603 14.9616 9.28625C14.7518 9.07647 14.6089 8.80919 14.551 8.51822C14.4932 8.22725 14.5229 7.92565 14.6364 7.65156C14.7499 7.37747 14.9422 7.1432 15.1889 6.97838C15.4355 6.81356 15.7255 6.72559 16.0222 6.72559C16.42 6.72559 16.8016 6.88362 17.0829 7.16493C17.3642 7.44623 17.5222 7.82776 17.5222 8.22559Z" fill="white"></path>
                                    </svg>
                                </div>
                                <img class="guide-img" src="<?php echo get_template_directory_uri() . '/assets/images/oci/step-1.png'; ?>" alt="" loading="lazy">
                                <span class="guide-text">Step 1</span>
                            </div>
                        </div>
                        <div class="swiper-slide guide-slide swiper-slide-next" role="group" aria-label="2 / 4" data-swiper-slide-index="1" style="margin-right: 24px;">
                            <div class="guide-content">
                                <div class="guide-header">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
                                        <path d="M27.556 20.5431C27.4134 20.4531 27.2504 20.4007 27.0821 20.3907C26.9138 20.3806 26.7457 20.4132 26.5935 20.4856C26.2124 20.6658 25.792 20.7467 25.3713 20.7209C24.9506 20.695 24.5432 20.5632 24.1871 20.3377C23.831 20.1122 23.5377 19.8003 23.3345 19.431C23.1312 19.0617 23.0246 18.6471 23.0246 18.2256C23.0246 17.8041 23.1312 17.3894 23.3345 17.0201C23.5377 16.6508 23.831 16.339 24.1871 16.1135C24.5432 15.8879 24.9506 15.7561 25.3713 15.7303C25.792 15.7044 26.2124 15.7854 26.5935 15.9656C26.7459 16.0379 26.9142 16.0705 27.0826 16.0603C27.2511 16.0501 27.4142 15.9975 27.5568 15.9073C27.6994 15.8171 27.8169 15.6922 27.8982 15.5444C27.9796 15.3966 28.0223 15.2306 28.0222 15.0618V9.72557C28.0222 9.19513 27.8115 8.68643 27.4364 8.31135C27.0614 7.93628 26.5527 7.72557 26.0222 7.72557H21.4947C21.5133 7.55955 21.5225 7.39262 21.5222 7.22557C21.5213 6.61097 21.3949 6.00304 21.1507 5.43903C20.9065 4.87502 20.5497 4.36682 20.1022 3.94557C19.4826 3.36358 18.7107 2.96903 17.8761 2.80759C17.0414 2.64616 16.1781 2.72445 15.3861 3.03339C14.5942 3.34234 13.9059 3.86931 13.401 4.55327C12.8962 5.23723 12.5954 6.05021 12.5335 6.89807C12.5143 7.17386 12.5201 7.45083 12.551 7.72557H8.02222C7.49178 7.72557 6.98308 7.93628 6.608 8.31135C6.23293 8.68643 6.02222 9.19513 6.02222 9.72557V13.7531C5.8562 13.7345 5.68927 13.7253 5.52222 13.7256C4.90763 13.7266 4.29972 13.853 3.73572 14.0972C3.17172 14.3414 2.66351 14.6981 2.24222 15.1456C1.8179 15.5938 1.49118 16.1251 1.28269 16.7061C1.0742 17.287 0.988491 17.9048 1.03097 18.5206C1.10263 19.6048 1.56331 20.6267 2.3283 21.3983C3.0933 22.17 4.11116 22.6395 5.19472 22.7206C5.4705 22.7404 5.74752 22.7345 6.02222 22.7031V26.7256C6.02222 27.256 6.23293 27.7647 6.608 28.1398C6.98308 28.5149 7.49178 28.7256 8.02222 28.7256H26.0222C26.5527 28.7256 27.0614 28.5149 27.4364 28.1398C27.8115 27.7647 28.0222 27.256 28.0222 26.7256V21.3893C28.0223 21.2204 27.9796 21.0541 27.8981 20.9061C27.8165 20.7582 27.6988 20.6332 27.556 20.5431ZM26.0222 26.7256H8.02222V21.3893C8.02227 21.2206 7.97962 21.0546 7.89825 20.9067C7.81687 20.7589 7.6994 20.6341 7.55679 20.5439C7.41418 20.4537 7.25107 20.401 7.08263 20.3908C6.91419 20.3806 6.74591 20.4132 6.59347 20.4856C6.21242 20.6658 5.792 20.7467 5.37129 20.7209C4.95057 20.695 4.54322 20.5632 4.18711 20.3377C3.831 20.1122 3.53769 19.8003 3.33445 19.431C3.13121 19.0617 3.02464 18.6471 3.02464 18.2256C3.02464 17.8041 3.13121 17.3894 3.33445 17.0201C3.53769 16.6508 3.831 16.339 4.18711 16.1135C4.54322 15.8879 4.95057 15.7561 5.37129 15.7303C5.792 15.7044 6.21242 15.7854 6.59347 15.9656C6.74591 16.0379 6.91419 16.0705 7.08263 16.0603C7.25107 16.0501 7.41418 15.9975 7.55679 15.9073C7.6994 15.8171 7.81687 15.6922 7.89825 15.5444C7.97962 15.3966 8.02227 15.2306 8.02222 15.0618V9.72557H13.8585C14.0272 9.72562 14.1932 9.68298 14.3411 9.6016C14.4889 9.52022 14.6137 9.40275 14.7039 9.26015C14.7941 9.11754 14.8468 8.95442 14.857 8.78598C14.8672 8.61754 14.8346 8.44927 14.7622 8.29682C14.582 7.91577 14.5011 7.49535 14.5269 7.07464C14.5528 6.65392 14.6846 6.24658 14.9101 5.89047C15.1356 5.53436 15.4475 5.24105 15.8168 5.0378C16.186 4.83456 16.6007 4.72799 17.0222 4.72799C17.4437 4.72799 17.8584 4.83456 18.2277 5.0378C18.5969 5.24105 18.9088 5.53436 19.1343 5.89047C19.3598 6.24658 19.4917 6.65392 19.5175 7.07464C19.5434 7.49535 19.4624 7.91577 19.2822 8.29682C19.2099 8.44927 19.1773 8.61754 19.1875 8.78598C19.1977 8.95442 19.2503 9.11754 19.3405 9.26015C19.4307 9.40275 19.5556 9.52022 19.7034 9.6016C19.8512 9.68298 20.0172 9.72562 20.186 9.72557H26.0222V13.7543C25.7475 13.7228 25.4705 13.717 25.1947 13.7368C24.0309 13.8192 22.9445 14.3505 22.1648 15.2185C21.3851 16.0865 20.9731 17.2234 21.0156 18.3894C21.058 19.5554 21.5517 20.6593 22.3925 21.4683C23.2333 22.2773 24.3554 22.7281 25.5222 22.7256C25.6893 22.7259 25.8562 22.7167 26.0222 22.6981V26.7256Z" fill="white"></path>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
                                        <path d="M22.0222 2.72559H10.0222C9.22657 2.72559 8.46351 3.04166 7.9009 3.60427C7.33829 4.16687 7.02222 4.92994 7.02222 5.72559V27.7256C7.02222 28.5212 7.33829 29.2843 7.9009 29.8469C8.46351 30.4095 9.22657 30.7256 10.0222 30.7256H22.0222C22.8179 30.7256 23.5809 30.4095 24.1435 29.8469C24.7061 29.2843 25.0222 28.5212 25.0222 27.7256V5.72559C25.0222 4.92994 24.7061 4.16687 24.1435 3.60427C23.5809 3.04166 22.8179 2.72559 22.0222 2.72559ZM23.0222 27.7256C23.0222 27.9908 22.9169 28.2452 22.7293 28.4327C22.5418 28.6202 22.2874 28.7256 22.0222 28.7256H10.0222C9.757 28.7256 9.50265 28.6202 9.31511 28.4327C9.12757 28.2452 9.02222 27.9908 9.02222 27.7256V5.72559C9.02222 5.46037 9.12757 5.20602 9.31511 5.01848C9.50265 4.83094 9.757 4.72559 10.0222 4.72559H22.0222C22.2874 4.72559 22.5418 4.83094 22.7293 5.01848C22.9169 5.20602 23.0222 5.46037 23.0222 5.72559V27.7256ZM17.5222 8.22559C17.5222 8.52226 17.4342 8.81227 17.2694 9.05894C17.1046 9.30561 16.8703 9.49787 16.5962 9.61141C16.3222 9.72494 16.0206 9.75464 15.7296 9.69676C15.4386 9.63889 15.1713 9.49603 14.9616 9.28625C14.7518 9.07647 14.6089 8.80919 14.551 8.51822C14.4932 8.22725 14.5229 7.92565 14.6364 7.65156C14.7499 7.37747 14.9422 7.1432 15.1889 6.97838C15.4355 6.81356 15.7255 6.72559 16.0222 6.72559C16.42 6.72559 16.8016 6.88362 17.0829 7.16493C17.3642 7.44623 17.5222 7.82776 17.5222 8.22559Z" fill="white"></path>
                                    </svg>
                                </div>
                                <img class="guide-img" src="<?php echo get_template_directory_uri() . '/assets/images/oci/step-2.png'; ?>" alt="" loading="lazy">
                                <span class="guide-text">Step 2</span>
                            </div>
                        </div>
                        <div class="swiper-slide guide-slide" role="group" aria-label="3 / 4" data-swiper-slide-index="2" style="margin-right: 24px;">
                            <div class="guide-content">
                                <div class="guide-header">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
                                        <path d="M27.556 20.5431C27.4134 20.4531 27.2504 20.4007 27.0821 20.3907C26.9138 20.3806 26.7457 20.4132 26.5935 20.4856C26.2124 20.6658 25.792 20.7467 25.3713 20.7209C24.9506 20.695 24.5432 20.5632 24.1871 20.3377C23.831 20.1122 23.5377 19.8003 23.3345 19.431C23.1312 19.0617 23.0246 18.6471 23.0246 18.2256C23.0246 17.8041 23.1312 17.3894 23.3345 17.0201C23.5377 16.6508 23.831 16.339 24.1871 16.1135C24.5432 15.8879 24.9506 15.7561 25.3713 15.7303C25.792 15.7044 26.2124 15.7854 26.5935 15.9656C26.7459 16.0379 26.9142 16.0705 27.0826 16.0603C27.2511 16.0501 27.4142 15.9975 27.5568 15.9073C27.6994 15.8171 27.8169 15.6922 27.8982 15.5444C27.9796 15.3966 28.0223 15.2306 28.0222 15.0618V9.72557C28.0222 9.19513 27.8115 8.68643 27.4364 8.31135C27.0614 7.93628 26.5527 7.72557 26.0222 7.72557H21.4947C21.5133 7.55955 21.5225 7.39262 21.5222 7.22557C21.5213 6.61097 21.3949 6.00304 21.1507 5.43903C20.9065 4.87502 20.5497 4.36682 20.1022 3.94557C19.4826 3.36358 18.7107 2.96903 17.8761 2.80759C17.0414 2.64616 16.1781 2.72445 15.3861 3.03339C14.5942 3.34234 13.9059 3.86931 13.401 4.55327C12.8962 5.23723 12.5954 6.05021 12.5335 6.89807C12.5143 7.17386 12.5201 7.45083 12.551 7.72557H8.02222C7.49178 7.72557 6.98308 7.93628 6.608 8.31135C6.23293 8.68643 6.02222 9.19513 6.02222 9.72557V13.7531C5.8562 13.7345 5.68927 13.7253 5.52222 13.7256C4.90763 13.7266 4.29972 13.853 3.73572 14.0972C3.17172 14.3414 2.66351 14.6981 2.24222 15.1456C1.8179 15.5938 1.49118 16.1251 1.28269 16.7061C1.0742 17.287 0.988491 17.9048 1.03097 18.5206C1.10263 19.6048 1.56331 20.6267 2.3283 21.3983C3.0933 22.17 4.11116 22.6395 5.19472 22.7206C5.4705 22.7404 5.74752 22.7345 6.02222 22.7031V26.7256C6.02222 27.256 6.23293 27.7647 6.608 28.1398C6.98308 28.5149 7.49178 28.7256 8.02222 28.7256H26.0222C26.5527 28.7256 27.0614 28.5149 27.4364 28.1398C27.8115 27.7647 28.0222 27.256 28.0222 26.7256V21.3893C28.0223 21.2204 27.9796 21.0541 27.8981 20.9061C27.8165 20.7582 27.6988 20.6332 27.556 20.5431ZM26.0222 26.7256H8.02222V21.3893C8.02227 21.2206 7.97962 21.0546 7.89825 20.9067C7.81687 20.7589 7.6994 20.6341 7.55679 20.5439C7.41418 20.4537 7.25107 20.401 7.08263 20.3908C6.91419 20.3806 6.74591 20.4132 6.59347 20.4856C6.21242 20.6658 5.792 20.7467 5.37129 20.7209C4.95057 20.695 4.54322 20.5632 4.18711 20.3377C3.831 20.1122 3.53769 19.8003 3.33445 19.431C3.13121 19.0617 3.02464 18.6471 3.02464 18.2256C3.02464 17.8041 3.13121 17.3894 3.33445 17.0201C3.53769 16.6508 3.831 16.339 4.18711 16.1135C4.54322 15.8879 4.95057 15.7561 5.37129 15.7303C5.792 15.7044 6.21242 15.7854 6.59347 15.9656C6.74591 16.0379 6.91419 16.0705 7.08263 16.0603C7.25107 16.0501 7.41418 15.9975 7.55679 15.9073C7.6994 15.8171 7.81687 15.6922 7.89825 15.5444C7.97962 15.3966 8.02227 15.2306 8.02222 15.0618V9.72557H13.8585C14.0272 9.72562 14.1932 9.68298 14.3411 9.6016C14.4889 9.52022 14.6137 9.40275 14.7039 9.26015C14.7941 9.11754 14.8468 8.95442 14.857 8.78598C14.8672 8.61754 14.8346 8.44927 14.7622 8.29682C14.582 7.91577 14.5011 7.49535 14.5269 7.07464C14.5528 6.65392 14.6846 6.24658 14.9101 5.89047C15.1356 5.53436 15.4475 5.24105 15.8168 5.0378C16.186 4.83456 16.6007 4.72799 17.0222 4.72799C17.4437 4.72799 17.8584 4.83456 18.2277 5.0378C18.5969 5.24105 18.9088 5.53436 19.1343 5.89047C19.3598 6.24658 19.4917 6.65392 19.5175 7.07464C19.5434 7.49535 19.4624 7.91577 19.2822 8.29682C19.2099 8.44927 19.1773 8.61754 19.1875 8.78598C19.1977 8.95442 19.2503 9.11754 19.3405 9.26015C19.4307 9.40275 19.5556 9.52022 19.7034 9.6016C19.8512 9.68298 20.0172 9.72562 20.186 9.72557H26.0222V13.7543C25.7475 13.7228 25.4705 13.717 25.1947 13.7368C24.0309 13.8192 22.9445 14.3505 22.1648 15.2185C21.3851 16.0865 20.9731 17.2234 21.0156 18.3894C21.058 19.5554 21.5517 20.6593 22.3925 21.4683C23.2333 22.2773 24.3554 22.7281 25.5222 22.7256C25.6893 22.7259 25.8562 22.7167 26.0222 22.6981V26.7256Z" fill="white"></path>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
                                        <path d="M22.0222 2.72559H10.0222C9.22657 2.72559 8.46351 3.04166 7.9009 3.60427C7.33829 4.16687 7.02222 4.92994 7.02222 5.72559V27.7256C7.02222 28.5212 7.33829 29.2843 7.9009 29.8469C8.46351 30.4095 9.22657 30.7256 10.0222 30.7256H22.0222C22.8179 30.7256 23.5809 30.4095 24.1435 29.8469C24.7061 29.2843 25.0222 28.5212 25.0222 27.7256V5.72559C25.0222 4.92994 24.7061 4.16687 24.1435 3.60427C23.5809 3.04166 22.8179 2.72559 22.0222 2.72559ZM23.0222 27.7256C23.0222 27.9908 22.9169 28.2452 22.7293 28.4327C22.5418 28.6202 22.2874 28.7256 22.0222 28.7256H10.0222C9.757 28.7256 9.50265 28.6202 9.31511 28.4327C9.12757 28.2452 9.02222 27.9908 9.02222 27.7256V5.72559C9.02222 5.46037 9.12757 5.20602 9.31511 5.01848C9.50265 4.83094 9.757 4.72559 10.0222 4.72559H22.0222C22.2874 4.72559 22.5418 4.83094 22.7293 5.01848C22.9169 5.20602 23.0222 5.46037 23.0222 5.72559V27.7256ZM17.5222 8.22559C17.5222 8.52226 17.4342 8.81227 17.2694 9.05894C17.1046 9.30561 16.8703 9.49787 16.5962 9.61141C16.3222 9.72494 16.0206 9.75464 15.7296 9.69676C15.4386 9.63889 15.1713 9.49603 14.9616 9.28625C14.7518 9.07647 14.6089 8.80919 14.551 8.51822C14.4932 8.22725 14.5229 7.92565 14.6364 7.65156C14.7499 7.37747 14.9422 7.1432 15.1889 6.97838C15.4355 6.81356 15.7255 6.72559 16.0222 6.72559C16.42 6.72559 16.8016 6.88362 17.0829 7.16493C17.3642 7.44623 17.5222 7.82776 17.5222 8.22559Z" fill="white"></path>
                                    </svg>
                                </div>
                                <img class="guide-img" src="<?php echo get_template_directory_uri() . '/assets/images/oci/step-3.png'; ?>" alt="" loading="lazy">
                                <span class="guide-text">Step 3</span>
                            </div>
                        </div>
                        <div class="swiper-slide guide-slide" role="group" aria-label="4 / 4" data-swiper-slide-index="3" style="margin-right: 24px;">
                            <div class="guide-content">
                                <div class="guide-header">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
                                        <path d="M27.556 20.5431C27.4134 20.4531 27.2504 20.4007 27.0821 20.3907C26.9138 20.3806 26.7457 20.4132 26.5935 20.4856C26.2124 20.6658 25.792 20.7467 25.3713 20.7209C24.9506 20.695 24.5432 20.5632 24.1871 20.3377C23.831 20.1122 23.5377 19.8003 23.3345 19.431C23.1312 19.0617 23.0246 18.6471 23.0246 18.2256C23.0246 17.8041 23.1312 17.3894 23.3345 17.0201C23.5377 16.6508 23.831 16.339 24.1871 16.1135C24.5432 15.8879 24.9506 15.7561 25.3713 15.7303C25.792 15.7044 26.2124 15.7854 26.5935 15.9656C26.7459 16.0379 26.9142 16.0705 27.0826 16.0603C27.2511 16.0501 27.4142 15.9975 27.5568 15.9073C27.6994 15.8171 27.8169 15.6922 27.8982 15.5444C27.9796 15.3966 28.0223 15.2306 28.0222 15.0618V9.72557C28.0222 9.19513 27.8115 8.68643 27.4364 8.31135C27.0614 7.93628 26.5527 7.72557 26.0222 7.72557H21.4947C21.5133 7.55955 21.5225 7.39262 21.5222 7.22557C21.5213 6.61097 21.3949 6.00304 21.1507 5.43903C20.9065 4.87502 20.5497 4.36682 20.1022 3.94557C19.4826 3.36358 18.7107 2.96903 17.8761 2.80759C17.0414 2.64616 16.1781 2.72445 15.3861 3.03339C14.5942 3.34234 13.9059 3.86931 13.401 4.55327C12.8962 5.23723 12.5954 6.05021 12.5335 6.89807C12.5143 7.17386 12.5201 7.45083 12.551 7.72557H8.02222C7.49178 7.72557 6.98308 7.93628 6.608 8.31135C6.23293 8.68643 6.02222 9.19513 6.02222 9.72557V13.7531C5.8562 13.7345 5.68927 13.7253 5.52222 13.7256C4.90763 13.7266 4.29972 13.853 3.73572 14.0972C3.17172 14.3414 2.66351 14.6981 2.24222 15.1456C1.8179 15.5938 1.49118 16.1251 1.28269 16.7061C1.0742 17.287 0.988491 17.9048 1.03097 18.5206C1.10263 19.6048 1.56331 20.6267 2.3283 21.3983C3.0933 22.17 4.11116 22.6395 5.19472 22.7206C5.4705 22.7404 5.74752 22.7345 6.02222 22.7031V26.7256C6.02222 27.256 6.23293 27.7647 6.608 28.1398C6.98308 28.5149 7.49178 28.7256 8.02222 28.7256H26.0222C26.5527 28.7256 27.0614 28.5149 27.4364 28.1398C27.8115 27.7647 28.0222 27.256 28.0222 26.7256V21.3893C28.0223 21.2204 27.9796 21.0541 27.8981 20.9061C27.8165 20.7582 27.6988 20.6332 27.556 20.5431ZM26.0222 26.7256H8.02222V21.3893C8.02227 21.2206 7.97962 21.0546 7.89825 20.9067C7.81687 20.7589 7.6994 20.6341 7.55679 20.5439C7.41418 20.4537 7.25107 20.401 7.08263 20.3908C6.91419 20.3806 6.74591 20.4132 6.59347 20.4856C6.21242 20.6658 5.792 20.7467 5.37129 20.7209C4.95057 20.695 4.54322 20.5632 4.18711 20.3377C3.831 20.1122 3.53769 19.8003 3.33445 19.431C3.13121 19.0617 3.02464 18.6471 3.02464 18.2256C3.02464 17.8041 3.13121 17.3894 3.33445 17.0201C3.53769 16.6508 3.831 16.339 4.18711 16.1135C4.54322 15.8879 4.95057 15.7561 5.37129 15.7303C5.792 15.7044 6.21242 15.7854 6.59347 15.9656C6.74591 16.0379 6.91419 16.0705 7.08263 16.0603C7.25107 16.0501 7.41418 15.9975 7.55679 15.9073C7.6994 15.8171 7.81687 15.6922 7.89825 15.5444C7.97962 15.3966 8.02227 15.2306 8.02222 15.0618V9.72557H13.8585C14.0272 9.72562 14.1932 9.68298 14.3411 9.6016C14.4889 9.52022 14.6137 9.40275 14.7039 9.26015C14.7941 9.11754 14.8468 8.95442 14.857 8.78598C14.8672 8.61754 14.8346 8.44927 14.7622 8.29682C14.582 7.91577 14.5011 7.49535 14.5269 7.07464C14.5528 6.65392 14.6846 6.24658 14.9101 5.89047C15.1356 5.53436 15.4475 5.24105 15.8168 5.0378C16.186 4.83456 16.6007 4.72799 17.0222 4.72799C17.4437 4.72799 17.8584 4.83456 18.2277 5.0378C18.5969 5.24105 18.9088 5.53436 19.1343 5.89047C19.3598 6.24658 19.4917 6.65392 19.5175 7.07464C19.5434 7.49535 19.4624 7.91577 19.2822 8.29682C19.2099 8.44927 19.1773 8.61754 19.1875 8.78598C19.1977 8.95442 19.2503 9.11754 19.3405 9.26015C19.4307 9.40275 19.5556 9.52022 19.7034 9.6016C19.8512 9.68298 20.0172 9.72562 20.186 9.72557H26.0222V13.7543C25.7475 13.7228 25.4705 13.717 25.1947 13.7368C24.0309 13.8192 22.9445 14.3505 22.1648 15.2185C21.3851 16.0865 20.9731 17.2234 21.0156 18.3894C21.058 19.5554 21.5517 20.6593 22.3925 21.4683C23.2333 22.2773 24.3554 22.7281 25.5222 22.7256C25.6893 22.7259 25.8562 22.7167 26.0222 22.6981V26.7256Z" fill="white"></path>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
                                        <path d="M22.0222 2.72559H10.0222C9.22657 2.72559 8.46351 3.04166 7.9009 3.60427C7.33829 4.16687 7.02222 4.92994 7.02222 5.72559V27.7256C7.02222 28.5212 7.33829 29.2843 7.9009 29.8469C8.46351 30.4095 9.22657 30.7256 10.0222 30.7256H22.0222C22.8179 30.7256 23.5809 30.4095 24.1435 29.8469C24.7061 29.2843 25.0222 28.5212 25.0222 27.7256V5.72559C25.0222 4.92994 24.7061 4.16687 24.1435 3.60427C23.5809 3.04166 22.8179 2.72559 22.0222 2.72559ZM23.0222 27.7256C23.0222 27.9908 22.9169 28.2452 22.7293 28.4327C22.5418 28.6202 22.2874 28.7256 22.0222 28.7256H10.0222C9.757 28.7256 9.50265 28.6202 9.31511 28.4327C9.12757 28.2452 9.02222 27.9908 9.02222 27.7256V5.72559C9.02222 5.46037 9.12757 5.20602 9.31511 5.01848C9.50265 4.83094 9.757 4.72559 10.0222 4.72559H22.0222C22.2874 4.72559 22.5418 4.83094 22.7293 5.01848C22.9169 5.20602 23.0222 5.46037 23.0222 5.72559V27.7256ZM17.5222 8.22559C17.5222 8.52226 17.4342 8.81227 17.2694 9.05894C17.1046 9.30561 16.8703 9.49787 16.5962 9.61141C16.3222 9.72494 16.0206 9.75464 15.7296 9.69676C15.4386 9.63889 15.1713 9.49603 14.9616 9.28625C14.7518 9.07647 14.6089 8.80919 14.551 8.51822C14.4932 8.22725 14.5229 7.92565 14.6364 7.65156C14.7499 7.37747 14.9422 7.1432 15.1889 6.97838C15.4355 6.81356 15.7255 6.72559 16.0222 6.72559C16.42 6.72559 16.8016 6.88362 17.0829 7.16493C17.3642 7.44623 17.5222 7.82776 17.5222 8.22559Z" fill="white"></path>
                                    </svg>
                                </div>
                                <img class="guide-img" src="<?php echo get_template_directory_uri() . '/assets/images/oci/step-4.png'; ?>" alt="" loading="lazy">
                                <span class="guide-text">Step 4</span>
                            </div>
                        </div>
                    </div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                </div>
                <div class="swiper-pagination swiper-pagination-guide swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal swiper-pagination-lock"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1" aria-current="true"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 4"></span></div>
            </div>
        </div>
    </section>

    <section class="home-socials py-5">
        <div class="home-socials__container">
            <h2 class="home-socials__title">
                Want to get involved? </h2>
            <ul class="home-socials__list">
                <li class="home-socials__item">
                    <a href="https://x.com/myBraavos">
                        <div class="home-socials__image">
                            <img src="<?php echo site_url(); ?>/wp-content/themes/braavos/assets/images/x-svg-dark.svg" alt="" data-theme="dark" style="display: block;">
                            <img src="<?php echo site_url(); ?>/wp-content/themes/braavos/assets/images/x-svg-light.svg" alt="" data-theme="light" style="display: none;">
                        </div>
                        <p class="home-socials__text">
                            X </p>
                    </a>
                </li>
                <li class="home-socials__item">
                    <a href="https://discord.com/invite/9Ks7V5DN9z">
                        <div class="home-socials__image">
                            <img src="<?php echo site_url(); ?>/wp-content/uploads/2024/10/icon_clyde_blurple_RGB-1.png" alt="">
                        </div>
                        <p class="home-socials__text">
                            Discord </p>
                    </a>
                </li>
                <li class="home-socials__item">
                    <a href="https://t.me/mybraavos">
                        <div class="home-socials__image">
                            <img src="<?php echo site_url(); ?>/wp-content/uploads/2024/10/Logo-2.png" alt="">
                        </div>
                        <p class="home-socials__text">
                            Telegram </p>
                    </a>
                </li>
                <li class="home-socials__item">
                    <a href="https://www.linkedin.com/company/braavos-web3/">
                        <div class="home-socials__image">
                            <img src="<?php echo site_url(); ?>/wp-content/uploads/2024/12/LinkedIn-2.png" alt="">
                        </div>
                        <p class="home-socials__text">
                            LinkedIn </p>
                    </a>
                </li>
            </ul>
        </div>
    </section>

    <section class="home-apps py-5">
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
