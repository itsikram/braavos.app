<?php
/*
Template Name: FAQ_1
*/

get_header();
?>

<?php $post_id = get_queried_object_id() ?>

<main class="main-content">
    <section class="single-faq-section py-5 px-0 section-bg-control">
        <div class="container">
            <div class="row">
                <div class="theme-color col font-jakarta">
                <a href="<?php echo site_url() . '/faq/'; ?>" class="career-backbtn-container my-5 d-flex align-items-center justify-content-start theme-color mt-3">
                        <span style="margin-right: 5px; line-height: 0;">
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/career-back-button.png'; ?>" class="icon-light" alt="">
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/career-back-button-dark.png'; ?>" class="icon-dark" alt="">
                        </span>
                        <span>Back to the FAQs</span>
                    </a>
                    <h1 class="faq-single-title mb-4"><?php echo get_the_title(); ?></h1>
                    <div class="faq-single-content fs-5">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
