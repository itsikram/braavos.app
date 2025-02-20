<section class="swap-interface">
	<div class="swap-interface__container">
		<div class="swap-interface__left-wrapper">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/swap/interface.png" alt="">
		</div>
		<div class="swap-interface__right-wrapper">
            <?php $swap_interface_title = get_sub_field('swap_interface_title'); ?>
            <?php if($swap_interface_title) : ?>
			<h2 class="swap-interface__title">
				<?php echo $swap_interface_title; ?>
			</h2>
            <?php endif; ?>
            <?php if(have_rows('swap_interface_list')) : ?>
			<ul class="swap-interface__list">
                <?php while(have_rows('swap_interface_list')) : the_row(); ?>
				<li class="swap-interface__item">
					<?php $swap_interface_item = get_sub_field('swap_interface_item'); ?>
                        <?php if($swap_interface_item) : ?>
                            <?php echo $swap_interface_item; ?>
                        <?php endif; ?>
				</li>
                <?php endwhile; ?>
			</ul>
            <?php endif; ?>
		</div>
	</div>
</section>