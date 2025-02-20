<section class="security-support">
	<div class="security-support__container">
		<div class="security-support__left-wrapper">
            <?php $security_support_title = get_sub_field('security_support_title'); ?>
            <?php if ('security_support_title') : ?>
            <h2 class="security-support__title">
                <?php echo $security_support_title; ?>
            </h2>
            <?php endif; ?>
            <?php $security_support_description = get_sub_field('security_support_description'); ?>
            <?php if ('security_support_description') : ?>
            <p class="security-support__description">
                <?php echo $security_support_description; ?>
            </p>
            <?php endif; ?>
            <a href="https://braavos.app/wallet-features/ledger-on-braavos/" class="security-support__link">
                <p>How it works</p>
            </a>

		</div>
		<div class="security-support__right-wrapper" id="security-support__right-wrapper">
<!--            <img src="--><?php //echo get_template_directory_uri(); ?><!--/assets/images/security/support.png" alt="" class="security-support__temp-image">-->
		</div>
	</div>
</section>