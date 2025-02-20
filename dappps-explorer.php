<?php

// Template name: dApps Explorer 


$theme_options = get_option('theme_option');

$explore_hero_text = $theme_options['explore_hero_text'];

$explore_hero_image_alt = get_post_meta($theme_options['explore_hero_image']['id'], '_wp_attachment_image_alt', true);
$explore_hero_image = $theme_options['explore_hero_image']['url'];

$explore_description_image_alt = get_post_meta($theme_options['explore_description_image']['id'], '_wp_attachment_image_alt', true);
$explore_description_image = $theme_options['explore_description_image']['url'];

get_header(); ?>


<main class="main-section section-bg-control">
    <section class="d-explorer-hero-section">
        <div class="container px-0">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-6 hero-left-container">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/tabs-icon.svg'; ?>" alt="" class="hero-left-top-icon">
                    <h2 class="fs-1 hero-left-heading theme-color my-3 font-jakarta">
                        <?php echo $explore_hero_text; ?>
                    </h2>
                    <p class="hero-left-text theme-color fs-5 font-jakarta">
                        The Starknet dApp ecosystem <br> consists of decentralized <br> applications designed to operate <br> on Starknet, an Ethereum Layer 2 <br> solution. These dApps benefit from <br> Starknet's scalability and cost- <br>efficiency while staying connected <br> to the Ethereum network.
                    </p>
                    <div class="hero-left-btn-container my-3 font-jakarta">
                        <a href="#dExplorerEcosystem" class="btn btn-light text-primary dapps-explore-btn">
                            <span class="explore-btn-icon">
                                <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/tabs-dApps-icon.png'; ?>" alt="">
                            </span>
                            Explore dApps
                        </a>

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
                        <img src="<?php echo $explore_hero_image; ?>" alt="<?php echo $explore_hero_image_alt; ?>" class="d-hero-right-image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="dExplorerEcosystem" class="d-explorer-ecosystem-section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="fs-1 text-center fw-bold text-light mb-3 font-jakarta">
                        Explore the Ecosystem
                    </h2>

                    <div id="ecoFilterContainer" class="eco-filter-container my-4">
                        <div class="filter-tabs-container">
                            <ul class="filter-tabs">
                                <li class="filter-tab-item active" data-filter="all">All</li>
                                <?php
                                $dapps_tags = get_terms(array(
                                    'taxonomy'   => 'tags',
                                    'hide_empty' => false, // Set to true to hide terms with no posts
                                ));

                                foreach ($dapps_tags as $tag) { ?>
                                    <li class="filter-tab-item" data-filter="<?php echo $tag->slug; ?>"><?php echo $tag->name; ?></li>
                                <?php } ?>
                                <!-- <li class="filter-tab-item" data-filter="nft">NFT</li>
                                <li class="filter-tab-item" data-filter="defi">DeFi</li>
                                <li class="filter-tab-item" data-filter="gamefi">GameFi</li>
                                <li class="filter-tab-item" data-filter="digital-id">Digital Id</li>
                                <li class="filter-tab-item" data-filter="infrastructure">Infrastructure</li> -->
                                <li class="filter-tab-item filter-tab-item-search">
                                    <div class="filter-search-container">
                                        <span class="search-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                                <path fill="currentColor" d="M12.14 4.18a5.504 5.504 0 0 1 .72 6.89c.12.1.22.21.36.31c.2.16.47.36.81.59c.34.24.56.39.66.47c.42.31.73.57.94.78c.32.32.6.65.84 1c.25.35.44.69.59 1.04c.14.35.21.68.18 1q-.03.48-.36.81c-.33.33-.49.34-.81.36c-.31.02-.65-.04-.99-.19c-.35-.14-.7-.34-1.04-.59c-.35-.24-.68-.52-1-.84c-.21-.21-.47-.52-.77-.93c-.1-.13-.25-.35-.47-.66c-.22-.32-.4-.57-.56-.78c-.16-.2-.29-.35-.44-.5a5.5 5.5 0 0 1-6.44-.98c-2.14-2.15-2.14-5.64 0-7.78a5.5 5.5 0 0 1 7.78 0m-1.41 6.36a3.513 3.513 0 0 0 0-4.95a3.495 3.495 0 0 0-4.95 0a3.495 3.495 0 0 0 0 4.95a3.495 3.495 0 0 0 4.95 0" />
                                            </svg>
                                        </span>
                                        <input type="text" id="ecoFilterSearchInput" placeholder="Search Project">
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="filter-item-container mt-5">
                            <ul class="items-box-container font-jakarta row">
                                <?php
                                $args = [
                                    'post_type' => 'dapps', // Change to your custom post type if needed
                                    'posts_per_page' => 30,
                                    'order'          => 'DESC', // Order of posts (DESC for latest posts)
                                    'orderby'        => 'date', // Sort by date
                                ];

                                $query = new WP_Query($args);
                                $col_number = 1;
                                $row_number = 1;

                                if ($query->have_posts()) {
                                    while ($query->have_posts()) {
                                        $query->the_post();
                                        $terms = get_the_terms(get_the_ID(), 'tags'); // Replace 'category' with your taxonomy name
                                        $profile_picture = get_post_meta(get_the_ID(), '_profile_picture', true);
                                        $cover_photo = get_post_meta(get_the_ID(), '_cover_photo', true);
                                        $learn_more_link = get_post_meta(get_the_ID(), '_learn_more_link', true);
                                        $website_link = get_post_meta(get_the_ID(), '_website_link', true);
                                        $x_link = get_post_meta(get_the_ID(), '_x_link', true);
                                        $short_description = get_post_meta(get_the_ID(), '_short_description', true);
                                        $main_description = get_the_content();
                                        $title = get_the_title();

                                        $dapps_classes = '';
                                        if (!empty($terms) && !is_wp_error($terms)) {
                                            foreach ($terms as $term) {
                                                $dapps_classes .= ' ' . $term->slug;
                                            }
                                        }

                                ?>

                                        <li data-col="<?php echo $col_number; ?>" data-filter="true" data-row="<?php echo $row_number; ?>" class="item-box col-number-<?php echo $col_number; ?> row-number-<?php echo $row_number; ?> <?php echo $dapps_classes; ?>" data-title="<?php echo $title; ?>">
                                            <a href="<?php echo $learn_more_link; ?>">
                                                <div class="item-cover-image-container">
                                                    <img src="<?php echo $cover_photo; ?>" alt="">
                                                </div>

                                                <div class="item-box-details">

                                                    <div class="item-profile-container">
                                                        <img src="<?php echo $profile_picture; ?>" alt="">

                                                    </div>
                                                    <h3 class="item-title">
                                                        <?php echo $title; ?>
                                                    </h3>
                                                    <p class="item-desc">
                                                        <?php echo $main_description; ?>
                                                    </p>
                                                    <div class="item-tags-container">
                                                        <ul>
                                                            <?php
                                                            if (!empty($terms) && !is_wp_error($terms)) {
                                                                foreach ($terms as $term) {
                                                            ?>
                                                                    <li><?php echo $term->name; ?></li>

                                                            <?php
                                                                }
                                                            }
                                                            ?>
                                                        </ul>
                                                    </div>
                                                    <div class="item-buttons-container">
                                                        <a href="<?php echo $website_link; ?>" class="browser-link">
                                                            <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/browser-icon.svg'; ?>" alt="">

                                                        </a>
                                                        <a href="<?php echo $x_link; ?>" class="x-link">
                                                            <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/x-logo-icon.svg'; ?>" alt="">
                                                        </a>
                                                        <a href="<?php echo $learn_more_link; ?>" class="learn-more">Learn More</a>

                                                    </div>
                                                </div>
                                            </a>


                                        </li>

                                <?php
                                        if($col_number == 3) {
                                            $col_number = 0;
                                            $row_number++;
                                        }

                                        if($col_number < 3) {
                                            $col_number++;

                                        }


                                    }

                                    wp_reset_postdata();
                                } else {
                                    echo 'No posts found.';
                                }
                                ?>
                                
                            </ul>
                            <div class="dapps-not-found">
                                <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/dapps-not-found.png'; ?>" alt="">
                                <p class="font-jakarta">No dApps were found</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ways-to-connect">
        <div class="container pt-5 pb-2">
            <div class="row justify-content-center align-items-center ways-to-connect-row">
                <div class="col-md-6 theme-color">
                    <h3 class="fs-2 font-jakarta c-title">The safest way to connect to  Starknet dApps is through your Braavos dApp Gallery</h3>
                    <ul class="connect-options font-jakarta">
                        <li>Connect to all dApps, on browser and mobile</li>
                        <li>Constantly updated with new projects</li>
                        <li>Identify the dApps you have already visited</li>
                        <li>Connect only to official links</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <img src="<?php echo $explore_description_image; ?>" class="connect-right-image" alt="<?php echo $explore_description_image_alt; ?>">
                </div>
            </div>
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

    <section class="download-tabs d-explorer-browser-content">
        <div class="download-tabs__container">

            <h1 class="download-tabs__title mt-3">
                See how it works</h1>
            <p class="download-page-desc">Enjoy a next generation wallet designed for a safe and intuitive start with Starknet dApps</p>


            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="download-tabs-browser-content">
                            <ul class="download-tabs-browser-items p-0">
                                <li class="download-tabs-browser-item" style="float: left">

                                    <a href="https://chrome.google.com/webstore/detail/braavos-wallet/jnlgamecbpmbajjfhmmmlhejkemejdma">
                                        <div class="browser-item-logo">
                                            <img src="<?php echo site_url(); ?>/wp-content/uploads/2024/10/image-134.png" alt="">
                                        </div>



                                    </a>
                                </li>
                                <li class="download-tabs-browser-item" style="float: left">

                                    <a href="https://addons.mozilla.org/en-US/firefox/addon/braavos-wallet/">
                                        <div class="browser-item-logo">
                                            <img src="<?php echo site_url(); ?>/wp-content/uploads/2024/10/image-136.png" alt="">
                                        </div>



                                    </a>
                                </li>
                                <li class="download-tabs-browser-item" style="float: left">

                                    <a href="https://chrome.google.com/webstore/detail/braavos-wallet/jnlgamecbpmbajjfhmmmlhejkemejdma">
                                        <div class="browser-item-logo">
                                            <img src="<?php echo site_url(); ?>/wp-content/uploads/2024/10/image-135.png" alt="">
                                        </div>



                                    </a>
                                </li>
                                <li class="download-tabs-browser-item" style="float: left">

                                    <a href="https://microsoftedge.microsoft.com/addons/detail/braavos-wallet/hkkpjehhcnhgefhbdcgfkeegglpjchdc">
                                        <div class="browser-item-logo">
                                            <img src="<?php echo site_url(); ?>/wp-content/uploads/2024/10/image-137.png" alt="">
                                        </div>



                                    </a>
                                </li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-md-4 mt-3">
                        <div class="download-tabs-mobile-content">

                            <div class="download-tabs-mobile-links">
                                <a href="https://apps.apple.com/us/app/braavos-wallet/id1636013523">
                                    <img src="<?php echo site_url(); ?>/wp-content/themes/braavos/assets/images/App-Store.png" alt="">
                                </a>

                                <a href="https://play.google.com/store/apps/details?id=app.braavos.wallet">
                                    <img class="bottom-image" src="<?php echo site_url(); ?>/wp-content/themes/braavos/assets/images/google-play.png" alt="">
                                </a>
                            </div>

                        </div>

                    </div>

                </div>
            </div>



        </div>
    </section>
</main>

<?php get_footer(); ?>