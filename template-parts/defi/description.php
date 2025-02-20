<section class="defi-description">
	<div class="defi-description__container">
        <?php $defi_description_title = get_sub_field('defi_description_title'); ?>
        <?php if ($defi_description_title) : ?>
		<h2 class="defi-description__title">
			<?php echo $defi_description_title; ?>
		</h2>
        <?php endif; ?>
		<div class="defi-description__wrapper">
			<div class="defi-description__left-wrapper">
                <?php $defi_description_subtitle = get_sub_field('defi_description_subtitle'); ?>
                <?php if ($defi_description_subtitle) : ?>
				<h3 class="defi-description__subtitle">
					<?php echo $defi_description_subtitle; ?>
				</h3>
                <?php endif; ?>
                <?php $defi_description_text = get_sub_field('defi_description_text'); ?>
                <?php if ($defi_description_text) : ?>
				<p class="defi-description__text">
					<?php echo $defi_description_text; ?>
				</p>
                <?php endif; ?>
                <?php if (have_rows('defi_description_list')) : ?>
				<ul class="defi-description__list">
                    <?php while (have_rows('defi_description_list')) : the_row(); ?>
					<li class="defi-description__item">
                        <?php $defi_description_item = get_sub_field('defi_description_item'); ?>
                        <?php if ($defi_description_item) : ?>
                        <?php echo $defi_description_item; ?>
                        <?php endif; ?>
					</li>
					<?php endwhile; ?>
				</ul>
                <?php endif; ?>
			</div>
			<div class="defi-description__right-wrapper">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/defi/description.png" alt="">
			</div>
		</div>
	</div>
</section>