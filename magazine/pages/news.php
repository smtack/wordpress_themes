<?php
	/*
	Template Name: News

	@package: WordPress
	@subpackage: magazine
	@since: 1.0.0
	*/
?>

<?php get_header(); ?>

	<div class="page-header">
		<h1>News</h1>
	</div>

	<div class="page-main">
		<?php
			query_posts('category_name=news');
			if (have_posts()) : while (have_posts()) : the_post();
				get_template_part('content', get_post_format());
			endwhile; endif;
		?>
	</div>

<?php get_footer(); ?>