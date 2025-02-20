<section class="swap-description">
	<div class="swap-description__container">
        <?php $swap_description_title = get_sub_field('swap_description_title'); ?>
        <?php if($swap_description_title): ?>
		<h2 class="swap-description__title">
			<?php echo $swap_description_title; ?>
		</h2>
        <?php endif; ?>
        <?php $swap_description_text = get_sub_field('swap_description_text'); ?>
        <?php if($swap_description_text): ?>
		<p class="swap-description__text">
		    <?php echo $swap_description_text; ?>
        </p>
        <?php endif; ?>
		<div class="swap-description__images">
			<img src="<?php echo get_template_directory_uri();?>/assets/images/swap/description-1.png" alt="">
			<img src="<?php echo get_template_directory_uri();?>/assets/images/swap/description-2.png" alt="">
		</div>
        <?php $swap_description_text = get_sub_field('swap_description_text'); ?>
        <?php if($swap_description_text): ?>
            <p class="swap-description__text">
                <?php echo $swap_description_text; ?>
            </p>
        <?php endif; ?>
	</div>
</section>