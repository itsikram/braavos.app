<section class="stake-description">
    <div class="stake-description__container">
		<?php $stake_description_title
			= get_sub_field( 'stake_description_title' ); ?>
		<?php if ( $stake_description_title ): ?>
            <h2 class="stake-description__title">
				<?php echo $stake_description_title; ?>
            </h2>
		<?php endif; ?>
		<?php $stake_description_first_text
			= get_sub_field( 'stake_description_first_text' ); ?>
		<?php if ( $stake_description_first_text ): ?>
            <p class="stake-description__first-text">
				<?php echo $stake_description_first_text; ?>
            </p>
		<?php endif; ?>
        <div class="stake-description__wrapper">
            <div class="stake-description__left-wrapper">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/stake/description-1.png"
                     alt="">
            </div>
            <div class="stake-description__right-wrapper">
				<?php $stake_description_wrapper_title
					= get_sub_field( 'stake_description_wrapper_title' ); ?>
				<?php if ( $stake_description_wrapper_title ): ?>
                    <h3 class="stake-description__wrapper-title">
						<?php echo $stake_description_wrapper_title; ?>
                    </h3>
				<?php endif; ?>
				<?php $stake_description_wrapper_text
					= get_sub_field( 'stake_description_wrapper_text' ); ?>
				<?php if ( $stake_description_wrapper_text ): ?>
                    <p class="stake-description__wrapper-text">
						<?php echo $stake_description_wrapper_text; ?>
                    </p>
				<?php endif; ?>
            </div>
        </div>
		<?php $stake_description_first_subtitle
			= get_sub_field( 'stake_description_first_subtitle' ); ?>
		<?php if ( $stake_description_first_subtitle ): ?>
            <h3 class="stake-description__subtitle">
				<?php echo $stake_description_first_subtitle; ?>
            </h3>
		<?php endif; ?>
		<?php $stake_description_second_text
			= get_sub_field( 'stake_description_second_text' ); ?>
		<?php if ( $stake_description_second_text ): ?>
            <p class="stake-description__second-text">
				<?php echo $stake_description_second_text; ?>
            </p>
		<?php endif; ?>
        <div class="stake-description__schema-wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/stake/description-2.png"
                 alt="" data-theme="dark">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/stake/stake-light.png"
                 alt="" data-theme="light">
        </div>
		<?php $stake_description_second_subtitle
			= get_sub_field( 'stake_description_second_subtitle' ); ?>
		<?php if ( $stake_description_second_subtitle ): ?>
            <h3 class="stake-description__subtitle">
				<?php echo $stake_description_second_subtitle; ?>
            </h3>
		<?php endif; ?>
		<?php $stake_description_third_text
			= get_sub_field( 'stake_description_third_text' ); ?>
		<?php if ( $stake_description_third_text ): ?>
            <p class="stake-description__third-text">
				<?php echo $stake_description_third_text; ?>
            </p>
		<?php endif; ?>
		<?php $stake_description_third_subtitle
			= get_sub_field( 'stake_description_third_subtitle' ); ?>
		<?php if ( $stake_description_third_subtitle ): ?>
            <h3 class="stake-description__subtitle">
				<?php echo $stake_description_third_subtitle; ?>
            </h3>
		<?php endif; ?>
		<?php $stake_description_fourth_text
			= get_sub_field( 'stake_description_fourth_text' ); ?>
		<?php if ( $stake_description_fourth_text ): ?>
            <p class="stake-description__fourth-text">
				<?php echo $stake_description_fourth_text; ?>
            </p>
		<?php endif; ?>
		<?php if ( have_rows( 'stake_description_items' ) ): ?>
            <ul class="stake-description__items">
				<?php while ( have_rows( 'stake_description_items' ) ) : the_row(); ?>
                    <li class="stake-description__item">
						<?php $stake_description_item
							= get_sub_field( 'stake_description_item' ); ?>
						<?php if ( $stake_description_item ): ?>
							<?php echo $stake_description_item; ?>
						<?php endif; ?>
                    </li>
				<?php endwhile; ?>
            </ul>
		<?php endif; ?>
    </div>
</section>