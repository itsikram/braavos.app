<?php
/*
Template Name: Campaing-3
*/
get_header(); ?>

<main class="campaing_3_1 content">
	<section class="hero">
		<div class="heroWrapper">
			<div class="heroWrapperLeft">
				<?php if ($hero_img = get_field('hero_img')): ?>
					<?php echo wp_get_attachment_image(get_field('hero_img')['id'], 'full', "", array("class" => "fadeInLeft")); ?>
				<?php endif; ?>
			</div>
			<div class="heroWrapperRight">
				<?php if ($hero_title = get_field('hero_title')) { ?>
					<h1 class="title">
						<?php echo $hero_title; ?>
					</h1>
				<?php } ?>
				<?php if ($hero_afterTitle = get_field('hero_aftertitle')) { ?>
					<div class="afterTitle">
						<?php echo $hero_afterTitle; ?>
					</div>
				<?php } ?>
				<?php if ($hero_link = get_field('hero_link')): ?>
					<a id="heroDefiDownload" class="blueButton"
					   href="<?php echo $hero_link['url']; ?>"
					   target="<?php echo $hero_link['target'] ? $hero_link['target'] : '_self'; ?>">
						<?php echo $hero_link['title']; ?>
					</a>
				<?php endif; ?>
				<?php if ($hero_info = get_field('hero_info')) { ?>
					<div class="heroWrapperRightInfo">
						<?php echo $hero_info; ?>
					</div>
				<?php } ?>
			</div>
		</div>
	</section>

	<section class="needs">
		<div class="container">
			<div class="needsWrapper">
				<?php if ($needs_title = get_field('needs_title')) { ?>
					<h2 class="titleBorder">
						<?php echo $needs_title; ?>
					</h2>
				<?php } ?>

				<div class="needsWrapperBlocks"><?php
					[
						'btitle'     => $first_block_btitle,
						'title'      => $first_block_title,
						'aftertitle' => $first_block_aftertitle,
						'image'      => $first_block_image,
					] = get_field('needs_first_block'); ?>

					<div class="needsWrapperBlocksFirst">
						<div class="needsWrapperBlocksFirstLeft"><?php
                            if ( $first_block_btitle ) { ?>
                                <div class="br_but"><?php
                                    echo $first_block_btitle ?>
                                </div><?php
                            }

							if ($first_block_title) { ?>
								<h3 class="title">
									<?php echo $first_block_title ?>
								</h3><?php
                            }

							if ($first_block_aftertitle) { ?>
								<div class="afterTitle">
									<?php echo $first_block_aftertitle ?>
								</div><?php
                            } ?>
						</div>

						<div class="needsWrapperBlocksFirstRight"
							 data-aos="fade-left"
						><?php
                            if ($first_block_image){ ?>
								<?php echo wp_get_attachment_image($first_block_image['id'], 'full', "", array("class" => "fadeIn"));
                            } ?>
						</div>
					</div>

					<?php [
						'title'      => $second_block_title,
						'aftertitle' => $second_block_aftertitle,
						'main_image' => $second_block_image,
						'sub_image'  => $second_block_sub_image,
						'btitle'     => $second_block_btitle,
					] = get_field('needs_second_block'); ?>

					<div class="needsWrapperBlocksSecond">
						<div class="needsWrapperBlocksSecondLeft"
							 data-aos="fade-right"
						><?php
                            if ($second_block_sub_image){ ?>
								<?php echo wp_get_attachment_image($second_block_sub_image['id'], 'full', "", array("class" => "fadeInDown"));
                            } ?>
							<?php if ($second_block_image){ ?>
								<?php echo wp_get_attachment_image($second_block_image['id'], 'full', "", array("class" => "fadeInLeft"));
                            } ?>
						</div>
						<div class="needsWrapperBlocksSecondRight"><?php
                            if( $second_block_btitle ){ ?>
                                <div class="br_but"><?php
                                    echo $second_block_btitle ?>
                                </div><?php
							}

                            if ($second_block_title) { ?>
								<h3 class="title"><?php
                                    echo $second_block_title ?>
								</h3><?php
                            }

							if ($second_block_aftertitle) { ?>
								<div class="afterTitle"><?php
                                    echo $second_block_aftertitle ?>
								</div><?php
                            } ?>
						</div>
					</div>

					<?php [
						'title' => $third_block_title,
						'aftertitle' => $third_block_aftertitle,
						'main_image' => $third_block_main_image,
						'main_image_lightmode' => $third_block_main_image_lightmode,
						'left_top_subimage' => $third_block_left_top_subimage,
						'left_bottom_subimage' => $third_block_left_bottom_subimage,
						'right_center_subimage' => $third_block_right_center_subimage
					] = get_field('needs_third_block'); ?>

					<div class="needsWrapperBlocksThird">
						<div class="needsWrapperBlocksThirdLeft">
							<?php if ($third_block_title) { ?>
								<h3 class="title">
									<?php echo $third_block_title; ?>
								</h3>
							<?php } ?>
							<?php if ($third_block_aftertitle) { ?>
								<div class="afterTitle">
									<?php echo $third_block_aftertitle; ?>
								</div>
							<?php } ?>
						</div>
						<div class="needsWrapperBlocksThirdRight"
							 data-aos="fade-left"
							 id="partalax_featuredis_3"
						>
							<?php if ($third_block_main_image) { ?>
								<div class="mts_light_hidden">
									<?php echo wp_get_attachment_image($third_block_main_image['id'], 'full', "", array("class" => "rotateInDownRight")); ?>
								</div>
							<?php } ?>
							
							<?php if ($third_block_main_image_lightmode) { ?>
								<div class="mts_light_visible">
									<?php echo wp_get_attachment_image($third_block_main_image_lightmode['id'], 'full', "", array("class" => "rotateInDownRight")); ?>
								</div>
							<?php } ?>

							<?php if ($third_block_left_top_subimage): ?>
								<?php echo wp_get_attachment_image($third_block_left_top_subimage['id'], 'full', "", array( "id"=>"partalax_featuredis_3_img", "class" => "leftTop" ) ); ?>
							<?php endif; ?>
							<?php if ($third_block_left_bottom_subimage): ?>
								<?php echo wp_get_attachment_image($third_block_left_bottom_subimage['id'], 'full', "", array("class" => "leftBottom")); ?>
							<?php endif; ?>
							<?php if ($third_block_right_center_subimage): ?>
								<?php echo wp_get_attachment_image($third_block_right_center_subimage['id'], 'full', "", array("class" => "rightCenter")); ?>
							<?php endif; ?>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

	<section class="why">
		<div class="container">
			<div class="why__wrapper">
				<?php if ($why_title = get_field('why_title')) { ?>
					<h2 class="titleBorder">
						<?php echo $why_title; ?>
					</h2>
				<?php } ?>

				<div class="why__blocks"><?php
					$why_blocks = get_field('why_blocks');
					if ($why_blocks) {
						foreach ($why_blocks as $block): ?>
							<div class="why__blocksBlock"
								 data-aos="fade-zoom-in"
								 data-aos-easing="ease-in-back"
								 data-aos-delay="300"
								 data-aos-offset="0"
							>
								<?php if ($block['icon']): ?>
									<?php echo wp_get_attachment_image($block['icon']['id'], 'full'); ?>
								<?php endif; ?>
								<?php if ($block['title']) { ?>
									<div class="why__blocksBlockTitle afterTitle">
										<?php echo $block['title']; ?>
									</div>
								<?php } ?>
								<?php if ($block['title']) { ?>
									<div class="why__blocksBlockContent">
										<?php echo $block['content']; ?>
									</div>
								<?php } ?>
							</div>
						<?php endforeach;
					} ?>
				</div>

			</div>
		</div>
	</section>

	<section class="tryalert">
		<div class="container">
			<div class="tryalert__wrapper">
				<?php if ($try_title = get_field('trymy_title')) { ?>
					<h2 class="titleBorder">
						<?php echo $try_title; ?>
					</h2>
				<?php } ?>
				<?php if ($try_afterTitle = get_field('trymy_aftertitle')) { ?>
					<div class="afterTitle">
						<?php echo $try_afterTitle; ?>
					</div>
				<?php } ?>

				<div class="tryalert__wrapper__blocks"><?php
					if( have_rows ('trymy_list') ){
						while ( have_rows('trymy_list') ){
							the_row(); ?>
							<div class="tryalert__wrapper__blocks__item">
								<div class="tryalert__wrapper__blocks__item__img">
									
									<div class="mts_light_hidden">
										<?php
										$trymy_list_img_s = get_sub_field('trymy_list_img_s');
										echo wp_get_attachment_image( $trymy_list_img_s['id'], 'full', "", array( "class" => "fadeIn tryalert__wrapper__blocks__item__img__m" ));

										$trymy_list_img = get_sub_field('trymy_list_img');
										echo wp_get_attachment_image( $trymy_list_img['id'], 'full', "", array( "class" => "fadeIn tryalert__wrapper__blocks__item__img__b" ));
										?>
									</div>

									<div class="mts_light_visible">
										<?php
										$trymy_list_img_s = get_sub_field('trymy_list_img_s_lightmode');
										echo wp_get_attachment_image( $trymy_list_img_s['id'], 'full', "", array( "class" => "fadeIn tryalert__wrapper__blocks__item__img__m" ));

										$trymy_list_img = get_sub_field('trymy_list_img_lightmode');
										echo wp_get_attachment_image( $trymy_list_img['id'], 'full', "", array( "class" => "fadeIn tryalert__wrapper__blocks__item__img__b" ));
										?>
									</div>
									
								</div>
								<div class="tryalert__wrapper__blocks__item__content">
									<h4>
										<?php the_sub_field('trymy_list_title') ?>
									</h4>
									<p>
										<?php the_sub_field('trymy_list_contemt') ?>
									</p>
								</div>
							</div><?php
						}
					} ?>
				</div>
			</div>
		</div>
	</section>

	<section class="try">
		<div class="container">
			<div class="try__wrapper">
				<?php if ($try_title = get_field('try_title')) { ?>
					<h2 class="titleBorder">
						<?php echo $try_title; ?>
					</h2>
				<?php } ?>
				<?php if ($try_afterTitle = get_field('try_aftertitle')) { ?>
					<div class="afterTitle">
						<?php echo $try_afterTitle; ?>
					</div>
				<?php } ?>

				<?php get_template_part('template-parts/download-section'); ?>

			</div>
		</div>
	</section>

	<section class="notsure">
		<div class="container">
			<div class="notsureWrapper">
				<h2 class="title">
					<?php the_field('starknet_b5_title') ?>
				</h2>
				<div class="featuredisTitle afterTitle">
					<?php the_field('starknet_b5_content') ?>
				</div>

				<div class="notsureWrapperBlocks"><?php
					if( have_rows ('starknet_b5_list') ){
						while ( have_rows('starknet_b5_list') ){
							the_row(); ?>
							<div class="notsureWrapperBlocksItem"
								 data-aos="flip-down"
							>

								<?php if ($starknet_b5_list_img = get_sub_field('starknet_b5_list_img')) { ?>

								<div class="mts_light_hidden">
									<?php echo wp_get_attachment_image( $starknet_b5_list_img['id'], 'full', "", array( "class" => "fadeIn" )); ?>
								</div>

								<?php } ?>

								<?php if ($starknet_b5_list_img_lightmode = get_sub_field('starknet_b5_list_img_lightmode')) { ?>

								<div class="mts_light_visible">
									<?php echo wp_get_attachment_image( $starknet_b5_list_img_lightmode['id'], 'full', "", array( "class" => "fadeIn" )); ?>
								</div>

								<?php } ?>

								<h4>
									<?php the_sub_field('starknet_b5_list_title') ?>
								</h4><?php

								if( $starknet_b5_list_url = get_sub_field('starknet_b5_list_url') ){ ?>
									<a class="blueButton"
									   href="<?php echo $starknet_b5_list_url['url'] ?>"
									   target="<?php echo $starknet_b5_list_url['target'] ? $starknet_b5_list_url['target'] : '_self'; ?>"
									>
										<?php echo $starknet_b5_list_url['title'] ?>
										<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M12.8294 5.01676C13.2688 4.57742 13.9811 4.57742 14.4204 5.01676L20.7954 11.3918C21.2347 11.8311 21.2347 12.5434 20.7954 12.9827L14.4204 19.3577C13.9811 19.7971 13.2688 19.7971 12.8294 19.3577C12.3901 18.9184 12.3901 18.2062 12.8294 17.7668L17.2839 13.3123H6.12494C5.50362 13.3123 4.99994 12.8086 4.99994 12.1873C4.99994 11.5659 5.50362 11.0623 6.12494 11.0623H17.2839L12.8294 6.60775C12.3901 6.16841 12.3901 5.45609 12.8294 5.01676Z" fill="white"></path></svg>
									</a><?php
								} ?>
							</div><?php
						}
					} ?>
				</div>

			</div>
		</div>
	</section>

</main>

<?php get_footer(); ?>
