<?php get_header(); ?>

	<main class="404-page section-bg-control">
		<section class="section-404">
			<div class="container">
				<div class="row">
					<div class="col-md-6 offset-md-3 theme-color font-jakarta">
						<div class="top-image-container mb-3">
							<img src="<?php echo get_template_directory_uri().'/assets/images/icons/404-icon.png'; ?>" alt="" class="top-image">
						</div>
						<h1 class="title-404 mb-3">
							404
						</h1>
						<p class="desc-404">Sorry, we can't find that page</p>
						<a href="<?php echo home_url(); ?>" class="button-404">
							<span class="home-icon">
								<img src="<?php echo get_template_directory_uri().'/assets/images/icons/404-home-icon.png'; ?>" alt="">
							</span><span>Home Page</span>
						</a>
					</div>
				</div>
			</div>
		</section>
	</main>

<?php get_footer(); ?>