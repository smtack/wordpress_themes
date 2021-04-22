<?php get_header(); ?>

	<div class="posts">
		<?php
			if (have_posts()) : while (have_posts()) : the_post();
				get_template_part('content', get_post_format());
			endwhile;
		?>

		<ul class="pagination">
			<li id="prev"><?php previous_posts_link('&#x2190; Newer Posts'); ?></li>
			<li id="next"><?php next_posts_link('Older Posts &#x2192;'); ?></li>
		</ul>

		<?php
			endif;
		?>
	</div>

	<?php get_sidebar(); ?>

<?php get_footer(); ?>