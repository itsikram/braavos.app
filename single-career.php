<?php get_header();

$career_tags = get_the_terms(get_the_ID(), 'career_tags');

?>

<main class="main-content">
    <section class="career-single-section section-bg-control py-5 px-0">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 theme-color font-jakarta">
                <a href="<?php echo site_url() . '/careers/'; ?>" class="career-backbtn-container d-flex my-5 align-items-center justify-content-start theme-color mt-3">
                        <span style="margin-right: 5px; line-height: 0;">
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/career-back-button.png'; ?>" class="icon-light" alt="">
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/career-back-button-dark.png'; ?>" class="icon-dark" alt="">
                        </span>
                        <span>Back to the Careers</span>
                    </a>
                    <h1 class="career-single-title mb-4"><?php echo get_the_title(); ?></h1>

                    <div class="tags-container mb-3">
                        <?php

                        if ($career_tags && !is_wp_error($career_tags)) :
                            foreach ($career_tags as $tag) :
                                echo '<span class="tags  transparent-bg-control">' . esc_html($tag->name) . '</span>';
                            endforeach;
                        else :
                        endif;
                        ?>
                    </div>
                    <div class="career-content-container">
                        <?php the_content() ?>

                    </div>


                    <a href="<?php echo site_url() . '/careers/'; ?>" class="career-backbtn-container d-flex align-items-center justify-content-start theme-color mt-3">
                        <span style="margin-right: 5px; line-height: 0;">
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/career-back-button.png'; ?>" class="icon-light" alt="">
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/career-back-button-dark.png'; ?>" class="icon-dark" alt="">
                        </span>
                        <span>Back to the Careers</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>


<?php get_footer();
