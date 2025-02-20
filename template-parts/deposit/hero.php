<section class="deposit-hero">
	<div class="deposit-hero__container">
        <div class="deposit-hero__left-wrapper">
            <div class="deposit-hero__icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/deposit/Plus.png" alt="">
            </div>
            <?php $deposit_hero_title = get_sub_field('deposit_hero_title'); ?>
            <?php if ($deposit_hero_title) : ?>
            <h1 class="deposit-hero__title">
                <?php echo $deposit_hero_title; ?>
            </h1>
            <?php endif; ?>
            <?php if (have_rows('deposit_hero_list')) : ?>
            <ul class="deposit-hero__list">
                <?php while (have_rows('deposit_hero_list')) : the_row(); ?>
                <li class="deposit-hero__item">
                    <?php $deposit_hero_item = get_sub_field('deposit_hero_item'); ?>
                        <?php if ($deposit_hero_item) : ?>
                            <?php echo $deposit_hero_item; ?>
                        <?php endif; ?>
                </li>
                <?php endwhile; ?>
            </ul>
            <?php endif; ?>
	        <?php $download_link = get_field( 'download_link', 'option' ); ?>
	        <?php if ( $download_link ) : ?>
            <a href="<?php echo $download_link['url']; ?>" class="deposit-hero__link">
                <span class="deposit-hero__link-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                      <path d="M21.875 13.5V19.5C21.875 19.7984 21.7565 20.0845 21.5455 20.2955C21.3345 20.5065 21.0484 20.625 20.75 20.625H4.25C3.95163 20.625 3.66548 20.5065 3.4545 20.2955C3.24353 20.0845 3.125 19.7984 3.125 19.5V13.5C3.125 13.2016 3.24353 12.9155 3.4545 12.7045C3.66548 12.4935 3.95163 12.375 4.25 12.375C4.54837 12.375 4.83452 12.4935 5.0455 12.7045C5.25647 12.9155 5.375 13.2016 5.375 13.5V18.375H19.625V13.5C19.625 13.2016 19.7435 12.9155 19.9545 12.7045C20.1655 12.4935 20.4516 12.375 20.75 12.375C21.0484 12.375 21.3345 12.4935 21.5455 12.7045C21.7565 12.9155 21.875 13.2016 21.875 13.5ZM11.7041 14.2959C11.8086 14.4008 11.9328 14.484 12.0695 14.5408C12.2063 14.5976 12.3529 14.6268 12.5009 14.6268C12.649 14.6268 12.7956 14.5976 12.9324 14.5408C13.0691 14.484 13.1933 14.4008 13.2978 14.2959L17.0478 10.5459C17.2592 10.3346 17.3779 10.0479 17.3779 9.74906C17.3779 9.45018 17.2592 9.16353 17.0478 8.95219C16.8365 8.74084 16.5498 8.62211 16.2509 8.62211C15.9521 8.62211 15.6654 8.74084 15.4541 8.95219L13.625 10.7812V3C13.625 2.70163 13.5065 2.41548 13.2955 2.2045C13.0845 1.99353 12.7984 1.875 12.5 1.875C12.2016 1.875 11.9155 1.99353 11.7045 2.2045C11.4935 2.41548 11.375 2.70163 11.375 3V10.7812L9.54594 8.95406C9.44129 8.84942 9.31706 8.7664 9.18033 8.70977C9.0436 8.65314 8.89706 8.62399 8.74906 8.62399C8.45018 8.62399 8.16353 8.74272 7.95219 8.95406C7.84754 9.05871 7.76453 9.18294 7.7079 9.31967C7.65126 9.4564 7.62211 9.60294 7.62211 9.75094C7.62211 10.0498 7.74084 10.3365 7.95219 10.5478L11.7041 14.2959Z" fill="white"/>
                    </svg>
                </span>
                <span class="deposit-hero__link-text">
                    <?php echo $download_link['title']; ?>
                </span>
            </a>
            <?php endif; ?>
        </div>
        <div class="deposit-hero__right-wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/deposit/hero.png" alt="">
        </div>
	</div>
</section>