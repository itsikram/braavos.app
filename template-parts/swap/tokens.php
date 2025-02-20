<section class="swap-tokens">
	<div class="swap-tokens__container">
		<h2 class="swap-tokens__title">
			Support is extensive, covering all blue chips tokens of Starknet:
		</h2>

        <?php if (have_rows('swap_tokens_list')) : ?>
        <div class="swap-tokens__items">
            <?php while (have_rows('swap_tokens_list')) : the_row(); ?>
            <?php $row_index = get_row_index(); ?>
            <div class="swap-tokens__item swap-tokens__item--<?php echo $row_index; ?>">
                <?php $swap_tokens_item_icon = get_sub_field('swap_tokens_item_icon'); ?>
                <div>
	                <?php echo $swap_tokens_item_icon; ?>
                </div>
                <?php $swap_tokens_item_text = get_sub_field('swap_tokens_item_text'); ?>
                <?php if ($swap_tokens_item_text) : ?>
                    <span class="swap-tokens__item-text">
                        <?php echo $swap_tokens_item_text; ?>
                    </span>
                <?php endif; ?>
            </div>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>
	</div>
</section>