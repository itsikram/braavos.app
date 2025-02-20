<section class="security-three-factor">
	<div class="security-three-factor__container">
		<div class="security-three-factor__left-wrapper" id="security-three-factor__left-wrapper">
<!--			<img src="--><?php //echo get_template_directory_uri(); ?><!--/assets/images/security/three-factor.png" alt="" class="security-three-factor__temp-image">-->
		</div>
		<div class="security-three-factor__right-wrapper">
            <?php $security_three_factor_title = get_sub_field('security_three_factor_title'); ?>
            <?php if ('security_three_factor_title') : ?>
			<h2 class="security-three-factor__title">
				<?php echo $security_three_factor_title; ?>
			</h2>
            <?php endif; ?>
            <?php if(have_rows('security_three_factor_list')) : ?>
			<ul class="security-three-factor__list">
                <?php while(have_rows('security_three_factor_list')) : the_row(); ?>
				<li class="security-three-factor__item">
                    <?php $security_three_factor_text = get_sub_field('security_three_factor_text'); ?>
                    <?php if ('security_three_factor_text') : ?>
					<p class="security-three-factor__text">
						<?php echo $security_three_factor_text; ?>
					</p>
                    <?php endif; ?>
				</li>
				<?php endwhile; ?>
			</ul>
            <?php endif; ?>
            <a href="<?php echo site_url();?>wallet-features/multi-signer/" class="security-three-factor__link">
                <p>How it works</p>
            </a>
		</div>
	</div>
</section>