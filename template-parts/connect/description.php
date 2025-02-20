<section class="connect-description">
    <div class="connect-description__container">
        <?php $connect_description_title = get_sub_field('connect_description_title'); ?>
        <?php if ($connect_description_title): ?>
            <h2 class="connect-description__title">
                <?php echo $connect_description_title; ?>
            </h2>
        <?php endif; ?>
        <?php $connect_description_first_text = get_sub_field('connect_description_first_text'); ?>
        <?php if ($connect_description_first_text): ?>
            <p class="connect-description__first-text">
                <?php echo $connect_description_first_text; ?>
            </p>
        <?php endif; ?>
        <div class="connect-description__image" id="connect-description__image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/connect/description-1.png" alt="">
        </div>
        <div class="connect-description__wrapper">
            <div class="connect-description__left-wrapper">
                <?php $connect_description_wrapper_text = get_sub_field('connect_description_wrapper_text'); ?>
                <?php if ($connect_description_wrapper_text): ?>
                    <p class="connect-description__wrapper-text">
                        <?php echo $connect_description_wrapper_text; ?>
                    </p>
                <?php endif; ?>
            </div>
            <div class="connect-description__right-wrapper">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/connect/description-2.png" alt="">
            </div>
        </div>
        <?php $connect_description_second_text = get_sub_field('connect_description_second_text'); ?>
        <?php if ($connect_description_second_text): ?>
            <p class="connect-description__second-text">
                <?php echo $connect_description_second_text; ?>
            </p>
        <?php endif; ?>
    </div>
</section>