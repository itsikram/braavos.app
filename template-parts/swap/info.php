<section class="swap-info">
	<div class="swap-info__container">
		<div class="swap-info__left-wrapper">
            <?php $swap_info_image = get_sub_field('swap_info_image'); ?>
            <?php if ($swap_info_image) : ?>
                <img src="<?php echo $swap_info_image['url']; ?>" alt="">
            <?php endif; ?>
		</div>
		<div class="swap-info__right-wrapper">
			<?php $swap_info_text = get_sub_field('swap_info_text'); ?>
			<?php if ($swap_info_text) : ?>
                <p>
                    <?php echo $swap_info_text; ?>
                </p>
			<?php endif; ?>
		</div>
	</div>
</section>