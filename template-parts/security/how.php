<section class="security-how">
	<div class="security-how__container">
        <?php $security_how_title = get_sub_field('security_how_title'); ?>
        <?php if ($security_how_title) : ?>
		<h2 class="security-how__title">
			<?php echo $security_how_title; ?>
		</h2>
        <?php endif; ?>
        <?php if(have_rows('security_how_list')) : ?>
		<ul class="security-how__list">
            <?php while(have_rows('security_how_list')) : the_row(); ?>
			<li class="security-how__item">
                <?php $security_how_item_image = get_sub_field('security_how_item_image'); ?>
                <?php if ($security_how_item_image) : ?>
				<div class="security-how__item-image">
					<img src="<?php echo $security_how_item_image['url'] ?>" alt="">
				</div>
                <?php endif; ?>
                <?php $security_how_item_title = get_sub_field('security_how_item_title'); ?>
                <?php if ($security_how_item_title) : ?>
				<h3 class="security-how__item-title">
					<?php echo $security_how_item_title; ?>
				</h3>
                <?php endif; ?>
                <?php $security_how_item_text = get_sub_field('security_how_item_text'); ?>
                <?php if ($security_how_item_text) : ?>
				<p class="security-how__item-text">
					<?php echo $security_how_item_text; ?>
				</p>
                <?php endif; ?>
			</li>
			<?php endwhile; ?>
		</ul>
        <?php endif; ?>
	</div>
</section>