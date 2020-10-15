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

	<div class="section politics">
		<h2><a href="index.php/politics">Politics</a></h2>

		<?php
			query_posts('category_name=politics&posts_per_page=3');

			if (have_posts()) : while (have_posts()) : the_post();
				get_template_part('content', get_post_format());
			endwhile; endif;
		?>
	</div>

	<div class="section entertainment">
		<h2><a href="index.php/entertainment">Entertainment</a></h2>

		<?php
			query_posts('category_name=entertainment&posts_per_page=3');
			
			if (have_posts()) : while (have_posts()) : the_post();
				get_template_part('content', get_post_format());
			endwhile; endif;
		?>
	</div>

	<div class="section technology">
		<h2><a href="index.php/technology">Technology</a></h2>

		<?php
			query_posts('category_name=technology&posts_per_page=3');
			
			if (have_posts()) : while (have_posts()) : the_post();
				get_template_part('content', get_post_format());
			endwhile; endif;
		?>
	</div>

<?php get_footer(); ?>