<?php
// Template Name: Careers

get_header();
?>


<main class="main-section">
    <section class="career-section">
        <div class="container">
            <div class="row">
                <div class="col theme-color font-jakarta">
                    <div class="career-top-image-cotainer">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/career-top-image.png'; ?>" alt="">
                    </div>
                    <h1 class="career-page-title">Careers</h1>

                    <div class="careers-list-container">


                        <?php
                        // Define WP_Query arguments
                        $career_args = array(
                            'post_type'      => 'career',
                            'posts_per_page' => -1, // Retrieve all posts,
                            'order'          => 'DESC', // Order of posts (DESC for latest posts)
                            'orderby'        => 'date', // Sort by date
                        );

                        // Create WP_Query instance
                        $career_query = new WP_Query($career_args);

                        if ($career_query->have_posts()) :
                            while ($career_query->have_posts()) : $career_query->the_post();
                                $career_tags = get_the_terms(get_the_ID(), 'career_tags');

                        ?>

                                <a href="<?php echo get_permalink(); ?>" class="career-list-item theme-color">
                                    <div class="cli-left">
                                        <h4 class="cli-left-title"> <?php echo get_the_title(); ?>
                                        </h4>
                                        <div class="cli-left-tags-container">
                                            <div class="cli-left-tag transparent-bg-control">
                                                <?php

                                                if ($career_tags && !is_wp_error($career_tags)) :
                                                    foreach ($career_tags as $tag) :
                                                        echo '<span class="tag">' . esc_html($tag->name) . '</span>';
                                                    endforeach;
                                                else :
                                                endif;
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cli-right">
                                        <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/icon-arrow-right.png'; ?>" class="icon-light" alt="">
                                        <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/icon-arrow-right-dark.png'; ?>" class="icon-dark" alt="">
                                    </div>
                                </a>

                        <?php
                            endwhile;

                            // Reset post data
                            wp_reset_postdata();

                        else :
                            echo '<p>No careers found.</p>';
                        endif;

                        ?>



                    </div>
                </div>
            </div>
        </div>
    </section>

</main>


<?php get_footer(); ?>