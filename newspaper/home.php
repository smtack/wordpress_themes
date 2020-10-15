<?php get_header(); ?>

	<div class="headline">
		<?php
			query_posts('category_name=headline&posts_per_page=1');

			if (have_posts()) : while (have_posts()) : the_post();
				get_template_part('content', get_post_format());
			endwhile; endif;
		?>
	</div>

	<div class="section news">
		<h2><a href="index.php/news">News</a></h2>

		<?php
			query_posts('category_name=news&posts_per_page=3');

			if (have_posts()) : while (have_posts()) : the_post();
				get_template_part('content', get_post_format());
			endwhile; endif;
		?>
	</div>

	<div class="section world">
		<h2><a href="index.php/world">World</a></h2>

		<?php
			query_posts('category_name=world&posts_per_page=3');
			
			if (have_posts()) : while (have_posts()) : the_post();
				get_template_part('content', get_post_format());
			endwhile; endif;
		?>
	</div>

	<div class="section politics">
		<h2><a href="index.php/politics">Politics</a></h2>

		<?php
			query_posts('category_name=politics&posts_per_page=3');

			if (have_posts()) : while (have_posts()) : the_post();
				get_template_part('content', get_post_format());
			endwhile; endif;
		?>
	</div>

	<div class="section arts">
		<h2><a href="index.php/arts">Arts</a></h2>
		<?php
			query_posts('category_name=arts&posts_per_page=3');

			if (have_posts()) : while (have_posts()) : the_post();
				get_template_part('content', get_post_format());
			endwhile; endif;
		?>
	</div>


<?php get_footer(); ?>