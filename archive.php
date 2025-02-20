<?php get_header() ?>

	<main class="blog_archive">
		<section class="sBlogPostGroup1">
			<div class="container"><?php
				get_template_part('template-parts/block_breadcrumb' );

				echo '<h1 class="blog_archive_title">' . get_the_archive_title() . '</h1>';
				echo '<div class="blog_archive_description">' . get_the_archive_description() . '</div>';

				if( have_posts() ){ ?>
					<div class="postGrid"><?php
						while (have_posts()) {
							the_post();
							get_template_part('template-parts/post-item', null, array( 'webp'=>1 )  );
						} ?>
					</div><?php
					get_template_part('template-parts/block_pagination' );
				}else{
					get_template_part('template-parts/not_found');
				} ?>
			</div>
		</section>

		<?php get_template_part('template-parts/subscription-form' ) ?>

	</main>

<?php get_footer() ?>
