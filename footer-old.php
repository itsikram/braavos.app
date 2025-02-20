	<!-- <footer class="footer">
		<div class="container">
			<div class="footer__wrapper">
				<?php if ($columns = get_field('columns', 'option')) { ?>

					<?php foreach ($columns as $item) { ?>

						<div class="footer__column">

							<?php if ($item['title']) { ?>
								<h4 class="footer__columnTitle">
									<?php echo $item['title']; ?>
								</h4>
							<?php } ?>

							<?php if ($item['links']) { ?>

								<?php foreach ($item['links'] as $row) {
									$link = $row['link'];
									$link_url = $link['url'];
									$link_title = $link['title'];
									$link_target = $link['target'] ? $link['target'] : '_self';
                                    $link_follow = $row['follow'] ? '' : 'nofollow';
                                    $link_opener = $row['opener'] ? '' : 'noopener';?>

									<a href="<?= esc_url($link_url) ?>"
									   target="<?= esc_attr($link_target) ?>"
									   rel="<?= $link_follow ?> <?= $link_opener ?>"><?= $link_title ?></a>
								<?php } ?>

							<?php } ?>

						</div>

					<?php } ?>

				<?php } ?>

				<?php if ($social_column = get_field('social_column', 'option')) { ?>

					<?php
					[
						'title' => $title,
						'links' => $links
					] = get_field('social_column', 'option');
					?>

					<div class="footer__column social">

						<?php if ($title) { ?>
							<h4 class="footer__columnTitle">
								<?php echo $title; ?>
							</h4>
						<?php } ?>

						<?php if ($links) { ?>

							<?php foreach ($links as $link) {
								$link_url = $link['link'];
								$link_title = $link['title'];
								$link_icon = $link['icon'];
                                $link_follow = $link['follow'] ? '' : 'nofollow';
                                $link_opener = $link['opener'] ? '' : 'noopener';?>

								<a href="<?= esc_url($link_url) ?>" target="_blank" rel="<?= $link_follow ?> <?= $link_opener ?>">
                                    <img width="24" height="25" src="<?= $link_icon['url']; ?>" alt="Icon">
									<span><?= $link_title ?></span>
								</a>
							<?php } ?>

						<?php } ?>

					</div>

				<?php } ?>

			</div>
		</div>
	</footer> -->

	<?php wp_footer(); ?>

	<style>
		@font-face {
			font-family: 'OpenSans';
			font-style: normal;
			font-weight: 300;
			font-display: swap;
			src: url('<?php echo theme_slice_http_path ?>/fonts/OpenSans/OpenSans-Light.ttf') format('ttf');
		}
		@font-face {
			font-family: 'OpenSans';
			font-style: normal;
			font-weight: 400;
			font-display: swap;
			src: url('<?php echo theme_slice_http_path ?>/fonts/OpenSans/OpenSans-Regular.ttf') format('ttf');
		}
		@font-face {
			font-family: 'OpenSans';
			font-style: normal;
			font-weight: 500;
			font-display: swap;
			src: url('<?php echo theme_slice_http_path ?>/fonts/OpenSans/OpenSans-Medium.ttf') format('ttf');
		}
		@font-face {
			font-family: 'OpenSans';
			font-style: normal;
			font-weight: 600;
			font-display: swap;
			src: url('<?php echo theme_slice_http_path ?>/fonts/OpenSans/OpenSans-SemiBold.ttf') format('ttf');
		}
		@font-face {
			font-family: 'OpenSans';
			font-style: normal;
			font-weight: 700;
			font-display: swap;
			src: url('<?php echo theme_slice_http_path ?>/fonts/OpenSans/OpenSans-Bold.ttf') format('ttf');
		}
	</style>

</body>
</html>