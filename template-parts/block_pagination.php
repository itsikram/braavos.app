<?php
$prev_posts_link = get_previous_posts_link();
$next_posts_link = get_next_posts_link();

if ($next_posts_link || $prev_posts_link) {
?>

	<div class="blog_paging">
		<div class="nav-next">
			<?= $prev_posts_link; ?>
		</div>
		<div class="nav-previous">
			<?= $next_posts_link; ?>
		</div>
	</div>

<?php } ?>