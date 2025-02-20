<?php
get_header();
$page_number = isset($_GET['page_number']) ? intval($_GET['page_number']) : 1;
$posts_per_page = 18;

if ($page_number == 1) {
    $posts_per_page = 18;
}
?>

<main class="blogPage section-bg-control">
    <?php if ($page_number < 2): ?>

        <section class="blog-hero-section">
            <div class="container">
                <div class="theme-color align-items-start font-jakarta d-flex justify-content-arround blog-hero-wrapper">
                    <div id="blogHeroLeftContainer" data-href="<?php echo site_url() . '/starknet-defi-spring'; ?>"
                        class="hero-left-container col-bg-control order-md-1 transparent-bg-control">

                        <div class="hero-top-image">
                            <img src="<?php echo site_url() . '/wp-content/uploads/2024/02/Starknet-DeFi-Spring-1.png'; ?>"
                                alt="">
                        </div>
                        <div class="meta-container d-flex justify-content-between align-items-center py-3">
                            <span class="tag">
                                Starknet
                            </span>

                            <span class="date">Feb 29, 2024</span>
                        </div>
                        <h2 class="fs-4 hero-left-title">
                            Starknet DeFi Spring: The Master Guide To Earn STRK
                        </h2>
                        <p class="hero-left-desc fs-5">
                            Starknet DeFi Spring is an incentive program created by Starknet to reward DeFi users with STRK,
                            offering a fun and gamified experience.
                        </p>
                    </div>
                    <div class="hero-right-container col-bg-control order-md-2">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/text-icon.svg'; ?>"
                            class="hero-right-top-icon" alt="">
                        <h1 class="fs-1 hero-right-heading fw-bold">
                            Braavos Blog!
                        </h1>
                        <p class="hero-right-desc fs-5">
                            The blog is meant for learning about account abstraction and smart contract wallets. Stay up to
                            date with the Starknet ecosystem news and trends!
                        </p>
                        <div class="social-icon-container">

                            <p class="social-icon-label fs-6">
                                Want to get involved?
                            </p>
                            <ul class="social-icons icon-light">
                                <li>
                                    <a href="https://x.com/myBraavos">
                                        <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/blog-hero-1.png'; ?>"
                                            alt="">

                                    </a>
                                </li>
                                <li>
                                    <a href="https://discord.com/invite/9Ks7V5DN9z">
                                        <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/blog-hero-2.png'; ?>"
                                            alt="">

                                    </a>
                                </li>
                                <li>
                                    <a href="https://t.me/mybraavos">
                                        <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/blog-hero-3.png'; ?>"
                                            alt="">

                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/company/braavos-web3/">
                                        <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/blog-hero-4.png'; ?>"
                                            alt="">

                                    </a>
                                </li>
                            </ul>

                            <ul class="social-icons icon-dark">
                                <li>
                                    <a href="https://x.com/myBraavos">
                                        <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/blog-hero-1-dark.png'; ?>"
                                            alt="">

                                    </a>
                                </li>
                                <li>
                                    <a href="https://discord.com/invite/9Ks7V5DN9z">
                                        <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/blog-hero-2-dark.png'; ?>"
                                            alt="">

                                    </a>
                                </li>
                                <li>
                                    <a href="https://t.me/mybraavos">
                                        <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/blog-hero-3-dark.png'; ?>"
                                            alt="">

                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/company/braavos-web3/">
                                        <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/blog-hero-4-dark.png'; ?>"
                                            alt="">

                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>


                </div>
            </div>
        </section>
    <?php endif; ?>
    <section class="blog-grid-section">
        <div class="container px-0">
            <div class="row theme-color font-jakarta blog-top-row">
                <div class="col">
                    <div class="eco-filter-container">
                        <?php if ($page_number < 2): ?>
                            <h2 class="d-none show-in-mobile blog-filter-title">Explore the Ecosystem</h2>
                            <div class="filter-tabs-container">
                                <ul class="filter-tabs">
                                    <li class="filter-tab-item active" data-filter="all">All</li>
                                    <li class="filter-tab-item" data-filter="account-abstraction">Account Abstraction</li>
                                    <li class="filter-tab-item" data-filter="braavos-nation">Braavos Nation</li>
                                    <li class="filter-tab-item" data-filter="smart-contract-wallet">Smart Contract Wallet
                                    </li>
                                    <li class="filter-tab-item" data-filter="starknet">Starknet</li>
                                    <li class="filter-tab-item" data-filter="starknet-ecosystem">Starknet Ecosystem</li>

                                </ul>
                            </div>

                            <div class="row column-2-row">
                                <div class="col-md-8">
                                    <div class="filter-item-container mt-5">
                                        <ul class="items-box-container column-2">
                                            <?php
                                            // Define the category slug you want to query

                                            // Set up the WP_Query arguments
                                            $args = array(
                                                'post_type' => 'post', // Specify the post type
                                                'posts_per_page' => 3, // Number of posts to retrieve
                                                //'category_name' => $category_slug // Use the category slug
                                                'order' => 'DESC', // Order of posts (DESC for latest posts)
                                                'orderby' => 'date', // Sort by date
                                            );

                                            // Create a new WP_Query instance
                                            $query = new WP_Query($args);

                                            // Start the Loop
                                            if ($query->have_posts()) :
                                                while ($query->have_posts()) :
                                                    $query->the_post();
                                                    $main_image = get_the_post_thumbnail_url();
                                                    $hover_image = get_post_meta(get_the_ID(), '_blog_hover_image', true) ? get_post_meta(get_the_ID(), '_blog_hover_image', true) : get_template_directory_uri() . '/assets/images/blogs/blog-2.png';
                                                    $blog_tags = get_post_meta(get_the_ID(), '_blog_tags', true);
                                                    $blog_short_description = wp_trim_words(get_post_meta(get_the_ID(), '_blog_short_description', true), 25, '...');
                                                    $blog_date = get_the_date('M j, Y');
                                                    $blog_title = wp_trim_words(get_the_title(), 15, '...');
                                                    $blog_permalink = get_the_permalink();
                                                    $blog_categories = get_the_category();

                                                    $category_string = '';
                                                    $category_names = array();

                                                    if (strlen($blog_short_description) == 0) {
                                                        $blog_short_description = wp_trim_words(get_the_content(), 25, '...');
                                                    }

                                                    if (count($blog_categories) > 0) {
                                                        foreach ($blog_categories as $category_item) {

                                                            $category_string = $category_string . ' ' . sanitize_title($category_item->name);
                                                            $category_names[] = $category_item->name;
                                                        }
                                                    }
                                            ?>

                                                    <li class="item-box <?php echo $category_string; ?>" data-title="">
                                                        <a href="<?php echo $blog_permalink; ?>" class="font-jakarta theme-color">
                                                            <div class="item-top-image">
                                                                <img src="<?php echo $main_image; ?>" class="main-image" alt="">
                                                                <!-- <img src="<?php echo $hover_image; ?>" class="hover-image" alt=""> -->
                                                            </div>
                                                            <div class="d-flex justify-content-between align-items-center my-3">
                                                                <div class="tags-container">
                                                                    <?php
                                                                    foreach ($category_names as $category_name) {
                                                                        $category_name = wp_trim_words($category_name, 2, more: '...');

                                                                    ?>
                                                                        <span class="tag theme-color">
                                                                            <?php echo $category_name; ?>
                                                                        </span>
                                                                    <?php
                                                                    };
                                                                    ?>

                                                                </div>


                                                                <span><?php echo $blog_date; ?></span>
                                                            </div>
                                                            <div class="item-title mb-2 font-jakarta blog-heading-truncate">
                                                                <?php echo $blog_title; ?>
                                                            </div>
                                                            <p class="item-desc-text font-jakarta blog-desc-truncate">
                                                                <?php echo $blog_short_description; ?></p>
                                                        </a>
                                                    </li>
                                            <?php
                                                endwhile;

                                                // Reset Post Data
                                                wp_reset_postdata();
                                            else :
                                                echo '<p class="blog-not-found-text show">No blogs found</p>';
                                            endif;
                                            ?>



                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4 theme-color font-jakarta article-section-container">
                                    <h3 class="article-section-heading fs-3 fw-bold text-center">
                                        <span>
                                            <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/blog-article-heading.png'; ?>"
                                                alt="" class="light-img">
                                            <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/blog-article-heading-dark.png'; ?>"
                                                alt="" class="dark-img">
                                        </span>
                                        Braavos Best Articles
                                    </h3>
                                    <div class="best-articles-container">
                                        <?php
                                        $args = array(
                                            'post_type' => 'post',
                                            'posts_per_page' => 4, // Number of posts to show
                                            'tag' => 'best', // Replace with the actual tag slug,
                                            'order' => 'DESC',
                                            'order_by' => 'date',
                                        );

                                        $query = new WP_Query($args);

                                        if ($query->have_posts()) {
                                            while ($query->have_posts()) {
                                                $query->the_post();
                                        ?>
                                                <div class="best-articles-item theme-color font-jakarta">
                                                    <a href="/account-abstraction-10-benefits/" class="theme-color">
                                                        <div class="d-flex justify-content-between align-items-center mb-3">

                                                            <?php
                                                            foreach ($category_names as $category_name) {
                                                                $category_name = wp_trim_words($category_name, 2, more: '...');

                                                            ?>
    
                                                                <span class="tag"><?php echo $category_name; ?></span>

                                                            <?php
                                                            };
                                                            ?>
                                                            <span class="date"> <?php echo get_the_date('M j, Y'); ?>
                                                            </span>
                                                        </div>
                                                        <p class="article-desc blog-desc-truncate fs-4">
                                                           <?php echo get_the_title(); ?>
                                                        </p>
                                                    </a>

                                                </div>
                                        <?php
                                            }
                                            wp_reset_postdata();
                                        } else {
                                            echo 'No posts found';
                                        } ?>


                                        <!-- <div class="best-articles-item theme-color font-jakarta">
                                            <a href="/starknet-defi-master-guide/" class="theme-color">

                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <span class="tag">Starknet Ecosystem</span>
                                                    <span class="date">Jul 13, 2023</span>
                                                </div>
                                                <p class="article-desc fs-4">
                                                    DeFi on Starknet: The Master Guide For Beginners
                                                </p>
                                            </a>

                                        </div>
                                        <div class="best-articles-item theme-color font-jakarta">
                                            <a href="/starknet-defi-master-guide/" class="theme-color">
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <span class="tag">Starknet Ecosystem</span>
                                                    <span class="date">Jul 13, 2023</span>
                                                </div>
                                                <p class="article-desc fs-4">
                                                    DeFi on Starknet: The Master Guide For Beginners
                                                </p>
                                            </a>

                                        </div>
                                        <div class="best-articles-item theme-color font-jakarta">
                                            <a href="/starknet-defi-master-guide/" class="theme-color">
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <span class="tag">Starknet Ecosystem</span>
                                                    <span class="date">Jul 13, 2023</span>
                                                </div>
                                                <p class="article-desc fs-4">
                                                    DeFi on Starknet: The Master Guide For Beginners
                                                </p>
                                            </a>

                                        </div> -->
                                    </div>

                                </div>
                            </div>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
            <?php if ($page_number < 2): ?>

                <div class="row blog-middle-row subscribe-section theme-color font-jakarta align-items-center">
                    <div class="col-md-2 col-6 offset-3 offset-md-0">
                        <div class="subscribe-image-container">
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/blogs/subscribe-image.png'; ?>"
                                alt="">
                        </div>
                    </div>
                    <div class="col-md-10 col-12">
                        <h3 class="subscribe-heading fs-2">
                            Braavos Team
                        </h3>
                        <div class="social-icon-container">

                            <!-- <p class="social-icon-label fs-6">
 Want to get involved?
 </p> -->
                            <ul class="social-icons icon-light">
                                <li>
                                    <a href="https://x.com/myBraavos">
                                        <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/blog-hero-1.png'; ?>"
                                            alt="">

                                    </a>
                                </li>
                                <li>
                                    <a href="https://discord.com/invite/9Ks7V5DN9z">
                                        <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/blog-hero-2.png'; ?>"
                                            alt="">

                                    </a>
                                </li>
                                <li>
                                    <a href="https://t.me/mybraavos">
                                        <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/blog-hero-3.png'; ?>"
                                            alt="">

                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/company/braavos-web3/">
                                        <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/blog-hero-4.png'; ?>"
                                            alt="">

                                    </a>
                                </li>
                            </ul>

                            <ul class="social-icons icon-dark">
                                <li>
                                    <a href="https://x.com/myBraavos">
                                        <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/blog-hero-1-dark.png'; ?>"
                                            alt="">

                                    </a>
                                </li>
                                <li>
                                    <a href="https://discord.com/invite/9Ks7V5DN9z">
                                        <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/blog-hero-2-dark.png'; ?>"
                                            alt="">

                                    </a>
                                </li>
                                <li>
                                    <a href="https://t.me/mybraavos">
                                        <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/blog-hero-3-dark.png'; ?>"
                                            alt="">

                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/company/braavos-web3/">
                                        <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/blog-hero-4-dark.png'; ?>"
                                            alt="">

                                    </a>
                                </li>
                            </ul>
                        </div>


                    </div>
                </div>
            <?php endif; ?>
            <div class="row blog-bottom-row">
                <div class="col">
                    <div class="eco-filter-container mt-4">
                        <div class="row">
                            <div class="col">
                                <div class="filter-item-container">
                                    <ul class="items-box-container column-3">
                                        <?php
                                        // Define the category slug you want to query

                                        $show_no_blog_found = false;
                                        // Set up the WP_Query arguments
                                        $args = array(
                                            'post_type' => 'post', // Specify the post type
                                            'posts_per_page' => $posts_per_page, // Number of posts to retrieve
                                            //'category_name' => $category_slug // Use the category slug
                                            'order' => 'DESC', // Order of posts (DESC for latest posts)
                                            'orderby' => 'date', // Sort by date
                                            'paged' => $page_number,

                                        );

                                        // Create a new WP_Query instance
                                        $query = new WP_Query($args);

                                        // Start the Loop
                                        if ($query->have_posts()) :
                                            $show_no_blog_found = false;
                                            $blog_index = 1;
                                            while ($query->have_posts()) :
                                                $query->the_post();
                                                $main_image = get_the_post_thumbnail_url();
                                                $hover_image = get_post_meta(get_the_ID(), '_blog_hover_image', true) ? get_post_meta(get_the_ID(), '_blog_hover_image', true) : get_template_directory_uri() . '/assets/images/blogs/blog-2.png';
                                                $blog_tags = get_post_meta(get_the_ID(), '_blog_tags', true);
                                                $blog_short_description = wp_trim_words(get_post_meta(get_the_ID(), '_blog_short_description', true), 25, '...');
                                                $blog_date = get_the_date('M j, Y');
                                                $blog_title = wp_trim_words(get_the_title(), 12, '...');
                                                $blog_permalink = get_the_permalink();
                                                $blog_categories = get_the_category();

                                                $category_string = '';
                                                $category_names = array();
                                                $is_from_top_row = ($blog_index < 5 && $page_number == 1) ? true : false;
                                                if (strlen($blog_short_description) == 0) {
                                                    $blog_short_description = wp_trim_words(get_the_content(), 25, '...');
                                                }


                                                if (count($blog_categories) > 0) {
                                                    foreach ($blog_categories as $category_item) {

                                                        $category_string = $category_string . ' ' . sanitize_title($category_item->name);
                                                        $category_names[] = $category_item->name;
                                                    }
                                                }
                                        ?>

                                                <li class="<?php echo $is_from_top_row ? 'from-top-row' : ''; ?> item-box <?php echo $category_string; ?>"
                                                    data-title="">
                                                    <a href="<?php echo $blog_permalink; ?>" class="font-jakarta theme-color">
                                                        <div class="item-top-image">
                                                            <img src="<?php echo $main_image; ?>" class="main-image" alt="">
                                                            <!-- <img src="<?php echo $hover_image; ?>" class="hover-image" alt=""> -->
                                                        </div>
                                                        <div class="d-flex justify-content-between align-items-center my-3">
                                                            <div class="tags-container">
                                                                <?php
                                                                if (strlen($blog_tags) == 0) {
                                                                    foreach ($category_names as $category_name) {
                                                                ?>
                                                                        <span class="tag theme-color">
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
                                                        <p class="item-desc-text font-jakarta blog-desc-truncate">
                                                            <?php echo $blog_short_description; ?></p>
                                                    </a>
                                                </li>
                                        <?php
                                                $blog_index++;
                                            endwhile;

                                            // Reset Post Data
                                            wp_reset_postdata();

                                        else :
                                            $show_no_blog_found = true;
                                        endif;
                                        ?>





                                    </ul>
                                    <?php if ($show_no_blog_found) {
                                    ?>
                                        <p class="blog-not-found-text show">No blogs found</p>
                                    <?php
                                    } ?>
                                </div>
                                <div class="blog-pagination-container">

                                    <div class="page-numbers">
                                        <?php
                                        $total_pages = $query->max_num_pages;
                                        $range = 2;
                                        if ($total_pages > 1) {
                                            $base = get_pagenum_link(1); // Base URL for the pagination links
                                            $page_slug = get_query_var('pagename'); // Works for pages
                                            $page_url = site_url() . '/' . $page_slug;
                                            $page_url_with_query = $page_url . '?page_number=';
                                            // Generate Previous Link
                                            $prev_page_number = $page_number - 1;
                                            $prev_link = $prev_page_number < 1 ? '#' : $page_url_with_query . $prev_page_number;
                                            if ($page_number > 1) {

                                                echo '<a class="prev" href="' . esc_url($prev_link) . '"><span class="fa-solid fa-chevron-left"></span></a>';
                                            } else {
                                                echo '<a class="disabled prev" href="' . esc_url($prev_link) . '"><span class="fa-solid fa-chevron-left"></span></a>';
                                            }

                                            $has_dots = false;
                                            $page_numbers_to_show = array();

                                            for ($i = 1; $i <= $total_pages; $i++) {
                                                $page_numbers_to_show[] = $i;
                                            }




                                            foreach ($page_numbers_to_show as $number_to_show) {

                                                $is_active = ($number_to_show == $page_number) ? true : false;
                                                if ($number_to_show == 0) {
                                                    echo '<span class="dots">...</span>';
                                                    continue;
                                                }
                                                if ($is_active) {
                                                    echo '<span class="current">' . $number_to_show . '</span>';
                                                } else {
                                                    $page_link = $page_url_with_query . $number_to_show;

                                                    echo '<a href="' . esc_url($page_link) . '">' . $number_to_show . '</a>';
                                                }
                                            }

                                            // Generate Next Link

                                            $next_page_number = $page_number + 1;
                                            $next_link = $next_page_number > $total_pages ? '#' : $page_url_with_query . $next_page_number;
                                            if ($page_number < $total_pages) {

                                                echo '<a class="next" href="' . esc_url($next_link) . '"><span class="fa-solid fa-chevron-right"></span></a>';
                                            } else {
                                                echo '<a class="disabled next" href="' . esc_url($next_link) . '"><span class="fa-solid fa-chevron-right"></span></a>';
                                            }
                                        }

                                        ?>
                                    </div>


                                </div>

                            </div>
                        </div>

                    </div>


                </div>
            </div>
        </div>
        </div>
    </section>


</main>


<?php get_footer(); ?>