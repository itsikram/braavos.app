<section class="home-rating download-rating">
    <div class="home-rating__container">
		<?php $home_rating_title = get_sub_field( 'home_rating_title' ); ?>
		<?php if ( $home_rating_title ) : ?>
            <h2 class="home-rating__title">
				<?php echo $home_rating_title; ?>
            </h2>
		<?php endif; ?>

        <div class="home-rating__wrapper">
            <ul class="home-rating__stars">
				<?php $home_rating_star
					= get_sub_field( 'home_rating_star' ); ?>
				<?php if ( $home_rating_star ) : ?>
					<?php for ( $i = 0; $i < 4; $i ++ ) : ?>
                        <li class="home-rating__star">
							<?php echo $home_rating_star; ?>
                        </li>
					<?php endfor; ?>
				<?php endif; ?>
				<?php $home_rating_star_last
					= get_sub_field( 'home_rating_star_last' ); ?>
				<?php if ( $home_rating_star_last ) : ?>
                    <li class="home-rating__star--last">
						<?php echo $home_rating_star_last; ?>
                    </li>
				<?php endif; ?>
            </ul>
			<?php $home_rating_text = get_sub_field( 'home_rating_text' ); ?>
			<?php if ( $home_rating_text ) : ?>
                <p class="home-rating__text">
					<?php echo $home_rating_text; ?>
                </p>
			<?php endif; ?>
			<?php $home_rating_reviews_text
				= get_sub_field( 'home_rating_reviews_text' ); ?>
			<?php if ( $home_rating_reviews_text ) : ?>
                <p class="home-rating__text-reviews">
					<?php echo $home_rating_reviews_text; ?>
                </p>
			<?php endif; ?>
        </div>

<!--        <div id="lottie-animation">-->
<!---->
<!--        </div>-->
    </div>
</section>