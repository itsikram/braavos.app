<section class="defi-socials">
	<div class="defi-socials__container">
        <?php $security_socials_title = get_sub_field('security_socials_title'); ?>
        <?php if ('security_socials_title') : ?>
		<h2 class="defi-socials__title">
			<?php echo $security_socials_title; ?>
		</h2>
        <?php endif; ?>
        <?php if (have_rows('security_socials_items')) : ?>
		<ul class="defi-socials__items">
			<?php $card_index = 0; // Счётчик карточек ?>
            <?php while (have_rows('security_socials_items')) : the_row(); ?>
			<li class="defi-socials__item">
                <?php $socials_item_link = get_sub_field('socials_item_link'); ?>
                <?php if($socials_item_link) : ?>
                <a href="<?php echo $socials_item_link['url']; ?>">
                    <?php $socials_item_icon = get_sub_field('socials_item_icon'); ?>
                    <?php if ($socials_item_icon) : ?>
                        <div class="defi-socials__item-icon">
	                        <?php if ($card_index === 0) : // Первая карточка ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/x-svg-dark.svg" alt="" data-theme="dark">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/x-svg-light.svg" alt="" data-theme="light">
	                        <?php else : ?>
                                <img src="<?php echo $socials_item_icon['url']; ?>" alt="">
	                        <?php endif; ?>
                        </div>
                    <?php endif; ?>

                    <h3 class="defi-socials__item-title">
                        <?php echo $socials_item_link['title'] ; ?>
                    </h3>

                </a>
                <?php endif; ?>
				<?php $card_index++; // Увеличиваем счётчик карточек ?>
			</li>
			<?php endwhile; ?>
		</ul>
        <?php endif; ?>
	</div>
</section>