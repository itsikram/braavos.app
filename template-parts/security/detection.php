<section class="security-detection">
	<div class="security-detection__container">
		<div class="security-detection__left-wrapper" id="security-detection__left-wrapper">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/security/detection.png" alt="" class="security-detection__temp-image">
		</div>
		<div class="security-detection__right-wrapper">
            <?php $security_detection_title = get_sub_field('security_detection_title'); ?>
            <?php if ('security_detection_title') : ?>
			<h2 class="security-detection__title">
				<?php echo $security_detection_title; ?>
			</h2>
            <?php endif; ?>
            <?php if (have_rows('security_detection_list')) : ?>
			<ul class="security-detection__list">
                <?php while (have_rows('security_detection_list')) : the_row(); ?>
				<li class="security-detection__item">
                    <?php $security_detection_text = get_sub_field('security_detection_text'); ?>
                    <?php if ('security_detection_text') : ?>
					<p class="security-detection__text">
						<?php echo $security_detection_text; ?>
					</p>
                    <?php endif; ?>
				</li>
				<?php endwhile; ?>
			</ul>
            <?php endif; ?>
<!--			<a href="" class="security-detection__link">-->
<!--				<p>How it works</p>-->
<!--			</a>-->
		</div>
	</div>
</section>