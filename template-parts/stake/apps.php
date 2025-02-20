<section class="defi-apps">
    <div class="defi-apps__container">
        <?php $stake_apps_title = get_sub_field('stake_apps_title'); ?>
        <?php if ($stake_apps_title) : ?>
            <h2 class="defi-apps__title">
                <?php echo $stake_apps_title; ?>
            </h2>
        <?php endif; ?>
        <?php $stake_apps_description = get_sub_field('stake_apps_description'); ?>
        <?php if ($stake_apps_description) : ?>
            <p class="defi-apps__description">
                <?php echo $stake_apps_description; ?>
            </p>
        <?php endif; ?>
        <?php if (have_rows('stake_apps_list')) : ?>
            <ul class="defi-apps__list">
                <?php while (have_rows('stake_apps_list')) : the_row(); ?>
                    <li class="defi-apps__item">
                        <?php $stake_apps_item_link = get_sub_field('stake_apps_item_link'); ?>
                        <?php if ($stake_apps_item_link) : ?>
                            <a href="<?php echo $stake_apps_item_link['url']; ?>">
                                <?php $stake_apps_item_icon = get_sub_field('stake_apps_item_icon'); ?>
                                <?php if ($stake_apps_item_icon) : ?>
                                    <div class="defi-apps__item-icon">
                                        <img src="<?php echo $stake_apps_item_icon['url']; ?>" alt="">
                                    </div>
                                <?php endif; ?>
                                <h3 class="defi-apps__item-title">
                                    <?php echo $stake_apps_item_link['title']; ?>
                                </h3>
                            </a>
                        <?php endif; ?>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>
        <div class="home-apps__download">
            <a href="https://apps.apple.com/us/app/braavos-wallet/id1636013523">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/App-Store.png"
                     alt="">
            </a>

            <a href="https://play.google.com/store/apps/details?id=app.braavos.wallet">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/google-play.png"
                     alt="">
            </a>
        </div>
    </div>
</section>