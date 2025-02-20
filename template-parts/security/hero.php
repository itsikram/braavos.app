<section class="security-hero">
	<div class="security-hero__container">
		<div class="security-hero__left-wrapper">
			<div class="security-hero__icon">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/security/hero-icon.svg" alt="">
			</div>
            <?php $security_hero_title = get_sub_field('security_hero_title'); ?>
            <?php if ($security_hero_title) : ?>
                <h1 class="security-hero__title">
                    <?php echo $security_hero_title; ?>
                </h1>
            <?php endif; ?>
			<?php $security_hero_description = get_sub_field('security_hero_description'); ?>
			<?php if ($security_hero_description) : ?>
                <p class="security-hero__description">
                    <?php echo $security_hero_description; ?>
                </p>
			<?php endif; ?>
			<?php $download_link = get_field( 'download_link', 'option' ); ?>
			<?php if ( $download_link ) : ?>
                <a href="<?php echo $download_link['url']; ?>" class="security-hero__link">
                    <span class="security-hero__link-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                          <path d="M21.375 14.0789V20.0789C21.375 20.3772 21.2565 20.6634 21.0455 20.8744C20.8345 21.0853 20.5484 21.2039 20.25 21.2039H3.75C3.45163 21.2039 3.16548 21.0853 2.9545 20.8744C2.74353 20.6634 2.625 20.3772 2.625 20.0789V14.0789C2.625 13.7805 2.74353 13.4943 2.9545 13.2834C3.16548 13.0724 3.45163 12.9539 3.75 12.9539C4.04837 12.9539 4.33452 13.0724 4.5455 13.2834C4.75647 13.4943 4.875 13.7805 4.875 14.0789V18.9539H19.125V14.0789C19.125 13.7805 19.2435 13.4943 19.4545 13.2834C19.6655 13.0724 19.9516 12.9539 20.25 12.9539C20.5484 12.9539 20.8345 13.0724 21.0455 13.2834C21.2565 13.4943 21.375 13.7805 21.375 14.0789ZM11.2041 14.8748C11.3086 14.9797 11.4328 15.0629 11.5695 15.1197C11.7063 15.1765 11.8529 15.2057 12.0009 15.2057C12.149 15.2057 12.2956 15.1765 12.4324 15.1197C12.5691 15.0629 12.6933 14.9797 12.7978 14.8748L16.5478 11.1248C16.7592 10.9135 16.8779 10.6268 16.8779 10.3279C16.8779 10.029 16.7592 9.74239 16.5478 9.53104C16.3365 9.3197 16.0498 9.20097 15.7509 9.20097C15.4521 9.20097 15.1654 9.3197 14.9541 9.53104L13.125 11.3601V3.57886C13.125 3.28049 13.0065 2.99434 12.7955 2.78336C12.5845 2.57238 12.2984 2.45386 12 2.45386C11.7016 2.45386 11.4155 2.57238 11.2045 2.78336C10.9935 2.99434 10.875 3.28049 10.875 3.57886V11.3601L9.04594 9.53292C8.94129 9.42827 8.81706 9.34526 8.68033 9.28863C8.5436 9.23199 8.39706 9.20284 8.24906 9.20284C7.95018 9.20284 7.66353 9.32158 7.45219 9.53292C7.34754 9.63757 7.26453 9.7618 7.2079 9.89853C7.15126 10.0353 7.12211 10.1818 7.12211 10.3298C7.12211 10.6287 7.24084 10.9153 7.45219 11.1267L11.2041 14.8748Z" fill="white"/>
                        </svg>
                    </span>
                    <span class="security-hero__link-text">
                        <?php echo $download_link['title']; ?>
                    </span>
                </a>
			<?php endif; ?>
		</div>
		<div class="security-hero__right-wrapper" id="security-hero__right-wrapper">
<!--			<img src="--><?php //echo get_template_directory_uri(); ?><!--/assets/images/security/hero-temp-image.png" alt="" class="security-hero__temp-image">-->
		</div>
	</div>
</section>