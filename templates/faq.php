<?php
/*
 * Template Name: FAQ
 */

get_header();

function get_posts_by_faq_group($terms, $taxonomy = 'faq_group', $post_type = 'faq')
{
    // Define the query arguments
    $args = array(
        'post_type'      => $post_type,
        'posts_per_page' => -1, // Retrieve all posts
        'tax_query'      => array(
            array(
                'taxonomy' => $taxonomy,
                'field'    => 'slug', // Use 'id', 'slug', or 'name' to specify terms
                'terms'    => $terms, // Array or single term slug
            ),
        ),
    );

    // Get posts
    $posts = get_posts($args);

    return $posts;
}
?>


<main class="main-content">
    <section class="faq-section">

        <div class="container">
            <div class="row">
                <div class="col theme-color text-jakarta">
                    <div class="faq-top-image-container">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/faq-top-icon.svg'; ?> " alt="">
                    </div>
                    <h1 class="faq-page-title">
                        FAQ
                    </h1>
                    <div class="faq-accordion-container">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <span>Getting Started</span>
                                        <span>
                                            <img class="icon-dark faq-accordion-close" src="<?php echo get_template_directory_uri() . '/assets/images/icons/faq-accordion-close-dark.png'; ?>" alt="">
                                            <img class="icon-light faq-accordion-close" src="<?php echo get_template_directory_uri() . '/assets/images/icons/faq-accordion-close.png'; ?>" alt="">


                                        </span>
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ul class="faq-list-container">
                                            <?php $faq_group_slug = 'get-started';

                                            // WP_Query arguments
                                            $faq_args = array(
                                                'post_type'      => 'faq', // Replace with your custom post type
                                                'posts_per_page' => -1,     // Retrieve all posts
                                                'tax_query'      => array(
                                                    array(
                                                        'taxonomy' => 'faq_group',
                                                        'field'    => 'slug', // Match by 'slug'. Use 'term_id' for IDs or 'name' for term names
                                                        'terms'    => $faq_group_slug, // Term value to filter posts
                                                    ),
                                                ),
                                            );

                                            // Execute the query
                                            $query = new WP_Query($faq_args);

                                            if ($query->have_posts()) :
                                                while ($query->have_posts()) : $query->the_post(); ?>

                                                    <li class="faq-list-item"><a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a></li>

                                            <?php


                                                endwhile;

                                                // Reset post data
                                                wp_reset_postdata();
                                            else :
                                                echo 'No posts found for the specified taxonomy value.';
                                            endif;
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                        <span>Multi-Owner-Account</span><span><img class="icon-dark" src="<?php echo get_template_directory_uri() . '/assets/images/icons/faq-accordion-close-dark.png'; ?>" alt="">
                                            <img class="icon-light" src="<?php echo get_template_directory_uri() . '/assets/images/icons/faq-accordion-close.png'; ?>" alt=""></span>
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ul class="faq-list-container">
                                            <?php $faq_group_slug = 'multi-owner-account';

                                            // WP_Query arguments
                                            $faq_args = array(
                                                'post_type'      => 'faq', // Replace with your custom post type
                                                'posts_per_page' => -1,     // Retrieve all posts
                                                'tax_query'      => array(
                                                    array(
                                                        'taxonomy' => 'faq_group',
                                                        'field'    => 'slug', // Match by 'slug'. Use 'term_id' for IDs or 'name' for term names
                                                        'terms'    => $faq_group_slug, // Term value to filter posts
                                                    ),
                                                ),
                                            );

                                            // Execute the query
                                            $query = new WP_Query($faq_args);

                                            if ($query->have_posts()) :
                                                while ($query->have_posts()) : $query->the_post(); ?>

                                                    <li class="faq-list-item"><a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a></li>

                                            <?php


                                                endwhile;

                                                // Reset post data
                                                wp_reset_postdata();
                                            else :
                                                echo 'No posts found for the specified taxonomy value.';
                                            endif;
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                        <span>Daily Spending Limit</span><span><img class="icon-dark" src="<?php echo get_template_directory_uri() . '/assets/images/icons/faq-accordion-close-dark.png'; ?>" alt="">
                                            <img class="icon-light" src="<?php echo get_template_directory_uri() . '/assets/images/icons/faq-accordion-close.png'; ?>" alt=""></span>
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ul class="faq-list-container">
                                            <?php $faq_group_slug = 'daily-spending-limit';   // WP_Query arguments
                                            $faq_args = array(
                                                'post_type'      => 'faq', // Replace with your custom post type
                                                'posts_per_page' => -1,     // Retrieve all posts
                                                'tax_query'      => array(
                                                    array(
                                                        'taxonomy' => 'faq_group',
                                                        'field'    => 'slug', // Match by 'slug'. Use 'term_id' for IDs or 'name' for term names
                                                        'terms'    => $faq_group_slug, // Term value to filter posts
                                                    ),
                                                ),
                                            );

                                            // Execute the query
                                            $query = new WP_Query($faq_args);

                                            if ($query->have_posts()) :
                                                while ($query->have_posts()) : $query->the_post(); ?>

                                                    <li class="faq-list-item"><a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a></li>

                                            <?php


                                                endwhile;

                                                // Reset post data
                                                wp_reset_postdata();
                                            else :
                                                echo 'No posts found for the specified taxonomy value.';
                                            endif;
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                        <span>Deposit and On-Ramping</span><span><img class="icon-dark" src="<?php echo get_template_directory_uri() . '/assets/images/icons/faq-accordion-close-dark.png'; ?>" alt="">
                                            <img class="icon-light" src="<?php echo get_template_directory_uri() . '/assets/images/icons/faq-accordion-close.png'; ?>" alt=""></span>
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ul class="faq-list-container">
                                            <?php $faq_group_slug = 'deposit-and-on-ramping';   // WP_Query arguments
                                            $faq_args = array(
                                                'post_type'      => 'faq', // Replace with your custom post type
                                                'posts_per_page' => -1,     // Retrieve all posts
                                                'tax_query'      => array(
                                                    array(
                                                        'taxonomy' => 'faq_group',
                                                        'field'    => 'slug', // Match by 'slug'. Use 'term_id' for IDs or 'name' for term names
                                                        'terms'    => $faq_group_slug, // Term value to filter posts
                                                    ),
                                                ),
                                            );

                                            // Execute the query
                                            $query = new WP_Query($faq_args);

                                            if ($query->have_posts()) :
                                                while ($query->have_posts()) : $query->the_post(); ?>

                                                    <li class="faq-list-item"><a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a></li>

                                            <?php


                                                endwhile;

                                                // Reset post data
                                                wp_reset_postdata();
                                            else :
                                                echo 'No posts found for the specified taxonomy value.';
                                            endif;
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                        <span>dApp gallery and Pro Score</span><span><img class="icon-dark" src="<?php echo get_template_directory_uri() . '/assets/images/icons/faq-accordion-close-dark.png'; ?>" alt="">
                                            <img class="icon-light" src="<?php echo get_template_directory_uri() . '/assets/images/icons/faq-accordion-close.png'; ?>" alt=""></span>
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ul class="faq-list-container">
                                            <?php $faq_group_slug = 'dapp-gallery-and-pro-score';   // WP_Query arguments
                                            $faq_args = array(
                                                'post_type'      => 'faq', // Replace with your custom post type
                                                'posts_per_page' => -1,     // Retrieve all posts
                                                'tax_query'      => array(
                                                    array(
                                                        'taxonomy' => 'faq_group',
                                                        'field'    => 'slug', // Match by 'slug'. Use 'term_id' for IDs or 'name' for term names
                                                        'terms'    => $faq_group_slug, // Term value to filter posts
                                                    ),
                                                ),
                                            );

                                            // Execute the query
                                            $query = new WP_Query($faq_args);

                                            if ($query->have_posts()) :
                                                while ($query->have_posts()) : $query->the_post(); ?>

                                                    <li class="faq-list-item"><a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a></li>

                                            <?php


                                                endwhile;

                                                // Reset post data
                                                wp_reset_postdata();
                                            else :
                                                echo 'No posts found for the specified taxonomy value.';
                                            endif;
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                                        <span>Hardware Signer</span><span><img class="icon-dark" src="<?php echo get_template_directory_uri() . '/assets/images/icons/faq-accordion-close-dark.png'; ?>" alt="">
                                            <img class="icon-light" src="<?php echo get_template_directory_uri() . '/assets/images/icons/faq-accordion-close.png'; ?>" alt=""></span>
                                    </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ul class="faq-list-container">
                                            <?php $faq_group_slug = 'hardware-signer';   // WP_Query arguments
                                            $faq_args = array(
                                                'post_type'      => 'faq', // Replace with your custom post type
                                                'posts_per_page' => -1,     // Retrieve all posts
                                                'tax_query'      => array(
                                                    array(
                                                        'taxonomy' => 'faq_group',
                                                        'field'    => 'slug', // Match by 'slug'. Use 'term_id' for IDs or 'name' for term names
                                                        'terms'    => $faq_group_slug, // Term value to filter posts
                                                    ),
                                                ),
                                            );

                                            // Execute the query
                                            $query = new WP_Query($faq_args);

                                            if ($query->have_posts()) :
                                                while ($query->have_posts()) : $query->the_post(); ?>

                                                    <li class="faq-list-item"><a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a></li>

                                            <?php


                                                endwhile;

                                                // Reset post data
                                                wp_reset_postdata();
                                            else :
                                                echo 'No posts found for the specified taxonomy value.';
                                            endif;
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="faq-nofound-section">
            <div class="container">
                <div class="row ">
                    <div class="col faq-nofound-container theme-color font-jakarta">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-md-2 col-4">
                                <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/'; ?>faq-nofind-icon.png" alt="">
                            </div>
                            <div class="col-md-10 col-8 ">
                                <h3 class="faq-nofound-title">
                                    Can’t find what you are looking for?
                                </h3>
                                <p class="faq-nofound-desc">Join your community-driven live support on Discord</p>
                                <div class="faq-nofound-btn-container hide-in-mobile">
                                    <a href="https://discord.com/channels/962985965889142844/964090590407053362" class="faq-nofound-btn">
                                        <span>
                                            <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/faq-frog-icon.png'; ?>" class="icon-light" alt="">
                                            <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/faq-frog-icon-light.png'; ?>" class="icon-dark" alt="">
                                        </span>
                                        <span>Channel</span>
                                    </a>
                                    <a href="https://discord.com/channels/962985965889142844/964090590407053362" class="faq-nofound-btn"><span><img src="<?php echo get_template_directory_uri() . '/assets/images/icons/faq-frog-icon.png'; ?>" class="icon-light" alt=""> <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/faq-frog-icon-light.png'; ?>" class="icon-dark" alt="">
                                        </span> <span>Detailed FAQ Channel</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row d-none show-in-mobile">
                            <div class="col">
                                <div class="faq-nofound-btn-container">
                                    <a href="https://discord.com/channels/962985965889142844/964090590407053362" class="faq-nofound-btn">
                                        <span>
                                            <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/faq-frog-icon.png'; ?>" class="icon-light" alt="">
                                            <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/faq-frog-icon-light.png'; ?>" class="icon-dark" alt="">
                                        </span>
                                        <span>Channel</span>
                                    </a>
                                    <a href="https://discord.com/channels/962985965889142844/964090590407053362" class="faq-nofound-btn"><span><img src="<?php echo get_template_directory_uri() . '/assets/images/icons/faq-frog-icon.png'; ?>" class="icon-light" alt=""> <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/faq-frog-icon-light.png'; ?>" class="icon-dark" alt="">
                                        </span> <span>Detailed FAQ Channel</span></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section>

</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


<?php get_footer(); ?>