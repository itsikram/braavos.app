<section class="security-biometric">
	<div class="security-biometric__container">
		<div class="security-biometric__left-wrapper">
            <?php $security_biometric_title = get_sub_field('security_biometric_title'); ?>
            <?php if('security_biometric_title') : ?>
			<h2 class="security-biometric__title">
				<?php echo $security_biometric_title; ?>
			</h2>
            <?php endif; ?>
            <?php if (have_rows('security_biometric_list')) : ?>
			<ul class="security-biometric__list">
                <?php while (have_rows('security_biometric_list')) : the_row(); ?>
				<li class="security-biometric__item">
                    <?php $security_biometric_text = get_sub_field('security_biometric_text'); ?>
                    <?php if('security_biometric_text') : ?>
					<p class="security-biometric__text">
						<?php echo $security_biometric_text; ?>
					</p>
                    <?php endif; ?>
				</li>
				<?php endwhile; ?>
			</ul>
            <?php endif; ?>
			<a href="<?php echo site_url();?>wallet-features/hardware-signer/" class="security-biometric__link">
                <p>
                    How it works
                </p>

			</a>
		</div>
		<div class="security-biometric__right-wrapper" id="security-biometric__right-wrapper">
<!--			<img src="--><?php //echo get_template_directory_uri(); ?><!--/assets/images/security/biometric.png" alt="" class="security-biometric__temp-image">-->
		</div>
	</div>
</section>