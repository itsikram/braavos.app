<?php
/*
Template Name: Starknet Journey
*/

get_header();
?>

<main class="starknetJourneyPage content">

    <section class="starknetJourneyPageHead">
        <div class="container">
            <div class="starknetJourneyPageHead__inner">

                <div class="starknetJourneyPageHead__info">

                    <h1 class="starknetJourneyPageHead__title">
                        <?= get_field('starknet_b1_title'); ?>
                    </h1>

                    <div class="starknetJourneyPageHead__desc h2">
                        <?= get_field('starknet_b1_content'); ?>
                    </div>

                </div>

                <?php if ($hero_link = get_field('starknet_b1_link')): ?>
                    <a id="heroStarknetDownload" class="blueButton"
                       href="<?php echo $hero_link['url']; ?>"
                       target="<?php echo $hero_link['target'] ? $hero_link['target'] : '_self'; ?>">
                        <?php echo $hero_link['title']; ?>
                    </a>
                <?php endif; ?>

                <div class="starknetJourneyPageHead__image">
                    <?php if ($hero_img = get_field('starknet_b1_img_desc')): ?>
                        <?php echo wp_get_attachment_image(get_field('starknet_b1_img_desc')['id'], 'full', "", array("class" => "fadeInLeft")); ?>
                    <?php endif; ?>
                </div>

            </div>

        </div>
    </section>


		<section class="featuredis">
			<div class="container">
				<div class="featuredisWrapper">
					<h2 class="title">
						<?php the_field('starknet_b2_title') ?>
					</h2>
					<div class="featuredisTitle afterTitle">
						<?php the_field('starknet_b2_content') ?>
					</div>
				</div>
			</div>

			<div class="container">
				<div class="featuredisWrapper">
					<div class="featuredisWrapperBlocks">

						<div class="featuredisWrapperBlocksFirst featuredisItem1">
							<div class="featuredisWrapperBlocksFirstLeft">
								<div class="featuredisWrapperBlocksFirstLeftInner">
									<h3 class="title">
										<?php the_field('starknet_b2_l1_title') ?>
									</h3>
									<div class="afterTitle">
										<?php the_field('starknet_b2_l1_content') ?>
									</div>
								</div>
							</div>
							<div class="featuredisWrapperBlocksFirstRight"
								id="partalax_featuredis_1"
							>

								<?php if ($starknet_b2_l1_img_lightmode = get_field('starknet_b2_l1_img_lightmode')) { ?>

									<div class="mts_light_hidden">
										<?php
										if ( $starknet_b2_l1_img = get_field('starknet_b2_l1_img') ) {
											echo wp_get_attachment_image($starknet_b2_l1_img['id'], 'full', "", array("id"=>"partalax_featuredis_1_img", "class" => ""));
										} ?>
									</div>
		
									<div class="mts_light_visible">
										<?php
										if ( $starknet_b2_l1_img_lightmode = get_field('starknet_b2_l1_img_lightmode') ) {
											echo wp_get_attachment_image($starknet_b2_l1_img_lightmode['id'], 'full', "", array("id"=>"partalax_featuredis_1_img_lightmode", "class" => ""));
										} ?>
									</div>

								<?php } else { ?>

									<?php
										if ( $starknet_b2_l1_img = get_field('starknet_b2_l1_img') ) {
											echo wp_get_attachment_image($starknet_b2_l1_img['id'], 'full', "", array("id"=>"partalax_featuredis_1_img", "class" => ""));
										} ?>
								
								<?php } ?>
							

							</div><!--data-aos="fade-left"-->
						</div>

						<div class="featuredisWrapperBlocksSecond featuredisItem2">
							<div class="featuredisWrapperBlocksSecondLeft "
								 data-aos="fade-right"
							>
								
								<div class="mts_light_hidden">
									<?php if ( $starknet_b2_l2_img = get_field('starknet_b2_l2_img') ){
										echo wp_get_attachment_image( $starknet_b2_l2_img['id'], 'full', "", array( "class" => "fadeIn" ));
									} ?>
								</div>
	
								<div class="mts_light_visible">
									<?php if ( $starknet_b2_l2_img_lightmode = get_field('starknet_b2_l2_img_lightmode') ){
										echo wp_get_attachment_image( $starknet_b2_l2_img_lightmode['id'], 'full', "", array( "class" => "fadeIn" ));
									} ?>
								</div>

							</div>
							<div class="featuredisWrapperBlocksSecondRight"><?php
								if( $starknet_b2_l2_title = get_field('starknet_b2_l2_title') ){ ?>
									<h3 class="title">
										<?php echo $starknet_b2_l2_title ?>
									</h3><?php
								}
								if( $starknet_b2_l2_content = get_field('starknet_b2_l2_content') ){ ?>
									<div class="afterTitle">
										<?php echo $starknet_b2_l2_content ?>
									</div><?php
								} ?>
							</div>
						</div>

						<div class="featuredisWrapperBlocksFirst featuredisItem3">
							<div class="featuredisWrapperBlocksFirstLeft">
								<h3 class="title">
									<?php the_field('starknet_b2_l3_title') ?>
								</h3>
								<div class="afterTitle">
									<?php the_field('starknet_b2_l3_content') ?>
								</div>
							</div>
							<div class="featuredisWrapperBlocksFirstRight"
								 data-aos="fade-left">
								
								<div class="mts_light_hidden">
									<?php
									if ( $starknet_b2_l3_img = get_field('starknet_b2_l3_img') ){
										echo wp_get_attachment_image($starknet_b2_l3_img['id'], 'full', "", array("class" => "fadeIn"));
									}
									?>
								</div>

								<div class="mts_light_visible">
									<?php
									if ( $starknet_b2_l3_img_lightmode = get_field('starknet_b2_l3_img_lightmode') ){
										echo wp_get_attachment_image($starknet_b2_l3_img_lightmode['id'], 'full', "", array("class" => "fadeIn"));
									}
									?>
								</div>

							</div>
						</div>

						<div class="featuredisWrapperBlocksSecond featuredisItem4">
							<div class="featuredisWrapperBlocksSecondLeft"
								 data-aos="fade-right"
							>

								<div class="mts_light_hidden">
									<?php
									if ( $starknet_b2_l4_img = get_field('starknet_b2_l4_img') ){ ?>
										<?php echo wp_get_attachment_image( $starknet_b2_l4_img['id'], 'full', "", array( "class" => "fadeIn" ));
									} ?>
								</div>
							
								<div class="mts_light_visible">
									<?php
									if ( $starknet_b2_l4_img_lightmode = get_field('starknet_b2_l4_img_lightmode') ){ ?>
										<?php echo wp_get_attachment_image( $starknet_b2_l4_img_lightmode['id'], 'full', "", array( "class" => "fadeIn" ));
									} ?>
								</div>

							</div>
							<div class="featuredisWrapperBlocksSecondRight"><?php
								if( $starknet_b2_l4_label = get_field('starknet_b2_l4_label') ){ ?>
									<span class="blueButton">
										<?php echo $starknet_b2_l4_label ?>
									</span><?php
								}
								if( $starknet_b2_l4_title = get_field('starknet_b2_l4_title') ){ ?>
									<h3 class="title">
										<?php echo $starknet_b2_l4_title ?>
									</h3><?php
								}
								if( $starknet_b2_l4_content = get_field('starknet_b2_l4_content') ){ ?>
									<div class="afterTitle">
										<?php echo $starknet_b2_l4_content ?>
									</div><?php
								} ?>
							</div>
						</div>

						<div class="featuredisWrapperBlocksFirst mini_buttom featuredisItem5">
							<div class="featuredisWrapperBlocksFirstLeft">
								<svg class="featuredisWrapperBlocksFirstLeftIcon" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 25" fill="none"><path d="M0 12.5C0 5.87258 5.37258 0.5 12 0.5C18.6274 0.5 24 5.87258 24 12.5C24 19.1274 18.6274 24.5 12 24.5C5.37258 24.5 0 19.1274 0 12.5Z" fill="#5865F2"></path><path d="M17.3863 7.63769C16.4064 7.1792 15.3586 6.84599 14.2631 6.65625C14.1286 6.89948 13.9714 7.22664 13.863 7.48689C12.6986 7.31176 11.5448 7.31176 10.4017 7.48689C10.2933 7.22664 10.1326 6.89948 9.99685 6.65625C8.90022 6.84599 7.85121 7.18042 6.87126 7.64012C4.89469 10.627 4.35888 13.5396 4.62679 16.4109C5.93775 17.3899 7.20823 17.9846 8.45727 18.3738C8.76566 17.9494 9.04071 17.4982 9.27765 17.0227C8.82638 16.8512 8.39416 16.6396 7.98576 16.3939C8.09411 16.3136 8.20009 16.2297 8.30248 16.1434C10.7934 17.3085 13.4999 17.3085 15.9611 16.1434C16.0647 16.2297 16.1706 16.3136 16.2778 16.3939C15.8682 16.6408 15.4348 16.8524 14.9835 17.0239C15.2205 17.4982 15.4943 17.9506 15.8039 18.375C17.0541 17.9858 18.3258 17.3912 19.6368 16.4109C19.9511 13.0824 19.0998 10.1964 17.3863 7.63769ZM9.61701 14.6451C8.86926 14.6451 8.25604 13.947 8.25604 13.0969C8.25604 12.2469 8.85616 11.5476 9.61701 11.5476C10.3779 11.5476 10.9911 12.2456 10.978 13.0969C10.9792 13.947 10.3779 14.6451 9.61701 14.6451ZM14.6465 14.6451C13.8988 14.6451 13.2856 13.947 13.2856 13.0969C13.2856 12.2469 13.8857 11.5476 14.6465 11.5476C15.4074 11.5476 16.0206 12.2456 16.0075 13.0969C16.0075 13.947 15.4074 14.6451 14.6465 14.6451Z" fill="white"></path></svg>
								<?php if( $starknet_b2_l5_title = get_field('starknet_b2_l5_title') ){ ?>
									<h3 class="title">
										<?php echo $starknet_b2_l5_title ?>
									</h3><?php
								}
								if( $starknet_b2_l5_content = get_field('starknet_b2_l5_content') ){ ?>
									<div class="afterTitle">
										<?php echo $starknet_b2_l5_content ?>
									</div><?php
								} ?>
							</div>
							<div class="featuredisWrapperBlocksFirstRight"
								 data-aos="fade-left"
							><?php
								if ( $starknet_b2_l5_img = get_field('starknet_b2_l5_img') ){
									echo wp_get_attachment_image( $starknet_b2_l5_img['id'], 'full', "", array( "class" => "fadeIn" ));
								} ?>
							</div>
						</div>

						<div class="featuredisWrapperBlocksSecond featuredisItem6">
							<div class="featuredisWrapperBlocksSecondLeft" id="partalax_featuredis_2_parent">
								<div class="featuredisWrapperBlocksSecondLeftImagep"
									 data-aos="fade-right"
									 id="partalax_featuredis_2"
								><?php
									if ( $starknet_b2_l6_img_b = get_field('starknet_b2_l6_img_b') ){
										echo wp_get_attachment_image( $starknet_b2_l6_img_b['id'], 'full', "", array( "class" => "fadeIn fadeScrollBG" ));
									}
									if ( $starknet_b2_l6_img_m = get_field('starknet_b2_l6_img_m') ){
										echo wp_get_attachment_image( $starknet_b2_l6_img_m['id'], 'full', "", array( "id"=>"partalax_featuredis_2_img", "class" => "fadeIn fadeScrollCS" )); //
									} ?>
								</div>
							</div>
							<div class="featuredisWrapperBlocksSecondRight"><?php
								if( $starknet_b2_l6_title = get_field('starknet_b2_l6_title') ){ ?>
									<h3 class="title">
										<?php echo $starknet_b2_l6_title ?>
									</h3><?php
								}
								if( $starknet_b2_l6_content = get_field('starknet_b2_l6_content') ){ ?>
									<div class="afterTitle">
										<?php echo $starknet_b2_l6_content ?>
									</div><?php
								} ?>
							</div>
						</div>

				</div>

			</div>
		</div>
	</section>


	<section class="braavos">
		<div class="container">
			<div class="braavosWrapper">
				<img src="<?php echo theme_slice_http_path ?>/img/star-footer.webp"
					 width="54"
					 height="49"
					 class="braavos_star"
					 alt="star"
				>

				<h2 class="title">
					<?php the_field('starknet_b3_title') ?>
				</h2><?php
				//if( $starknet_b3_content = get_field('starknet_b3_content') ){ ?>
					<div class="featuredisTitle afterTitle">
						<?php the_field('starknet_b3_content') ?>
					</div><?php
				//} ?>

				<div class="braavosWrapperBlocks">

						<div class="braavosWrapperBlocksFirst">
							<div class="braavosWrapperBlocksFirstLeft"><?php
								if( $starknet_b3_l1_title = get_field('starknet_b3_l1_title') ){ ?>
									<h3 class="title">
										<?php echo $starknet_b3_l1_title ?>
									</h3><?php
								}
								if( $starknet_b3_l1_content = get_field('starknet_b3_l1_content') ){ ?>
									<div class="afterTitle">
										<?php echo $starknet_b3_l1_content ?>
									</div><?php
								} ?>
							</div>
							<div class="braavosWrapperBlocksFirstRight"
								 data-aos="fade-left"
							><?php
								if ( $starknet_b3_l1_img = get_field('starknet_b3_l1_img') ){
									echo wp_get_attachment_image( $starknet_b3_l1_img['id'], 'full', "", array( "class" => "fadeIn" ));
								} ?>
							</div>
						</div>

						<div class="braavosWrapperBlocksSecond">
							<div class="braavosWrapperBlocksSecondLeft"
								 data-aos="fade-right"
							><?php
								if ( $starknet_b3_l2_img = get_field('starknet_b3_l2_img') ){ ?>
									<?php echo wp_get_attachment_image( $starknet_b3_l2_img['id'], 'full', "", array( "class" => "fadeIn" ));
								} ?>
							</div>
							<div class="braavosWrapperBlocksSecondRight">
								<?php the_field('starknet_b3_l2_title_b') ?>
								<?php if( $starknet_b3_l2_title = get_field('starknet_b3_l2_title') ){ ?>
									<h3 class="title">
										<?php echo $starknet_b3_l2_title ?>
									</h3><?php
								}
								if( $starknet_b3_l2_content = get_field('starknet_b3_l2_content') ){ ?>
									<div class="afterTitle">
										<?php echo $starknet_b3_l2_content ?>
									</div><?php
								} ?>
							</div>
						</div>

				</div>

			</div>
		</div>
	</section>


	<section class="download">
		<div class="container">
			<div class="downloadWrapper">
				<h2 class="title">
					<?php the_field('starknet_b4_title') ?>
				</h2>
				<div class="featuredisTitle afterTitle">
					<?php the_field('starknet_b4_content') ?>
				</div>

				<?php get_template_part('template-parts/download-section'); ?>

			</div>
		</div>
	</section>


	<section class="notsure">
		<div class="container">

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
	</section>

</main>

<?php get_footer(); ?>
