<section class="deposit-description">
	<div class="deposit-description__container">
        <?php $deposit_description_title = get_sub_field('deposit_description_title'); ?>
        <?php if($deposit_description_title): ?>
		<h2 class="deposit-description__title">
            <?php echo $deposit_description_title; ?>
        </h2>
        <?php endif; ?>
        <?php $deposit_description_subtitle = get_sub_field('deposit_description_subtitle'); ?>
        <?php if($deposit_description_subtitle): ?>
		<p class="deposit-description__subtitle">
            <?php echo $deposit_description_subtitle; ?>
		</p>
        <?php endif; ?>
        <?php if(have_rows('deposit_description_items')): ?>
		<ul class="deposit-description__items">
            <?php while(have_rows('deposit_description_items')): the_row(); ?>
			<li class="deposit-description__item">
                <?php $deposit_description_item_image = get_sub_field('deposit_description_item_image'); ?>
                <?php if($deposit_description_item_image): ?>
				<div class="deposit-description__item-image">
					<img src="<?php echo $deposit_description_item_image['url']; ?>" alt="">
				</div>
                <?php endif; ?>
                <?php $deposit_description_item_title = get_sub_field('deposit_description_item_title'); ?>
                <?php if($deposit_description_item_title): ?>
				<h3 class="deposit-description__item-title">
                    <?php echo $deposit_description_item_title; ?>
                </h3>
                <?php endif; ?>
                <?php $deposit_description_item_text = get_sub_field('deposit_description_item_text'); ?>
                <?php if($deposit_description_item_text): ?>
				<p class="deposit-description__item-text">
                    <?php echo $deposit_description_item_text; ?>
                </p>
                <?php endif; ?>
			</li>
           <?php endwhile; ?>
		</ul>
        <?php endif; ?>
        <?php $deposit_description_text = get_sub_field('deposit_description_text'); ?>
        <?php if($deposit_description_text): ?>
		<p class="deposit-description__text">
            <?php echo $deposit_description_text; ?>
		</p>
        <?php endif; ?>
	</div>
</section>