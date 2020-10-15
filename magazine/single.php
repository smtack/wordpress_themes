<?php get_header(); ?>

	<div class="article">
		<?php
			if (have_posts()) : while (have_posts()) : the_post();
				get_template_part('article', get_post_format());

				if (comments_open() || get_comments_number()) :
					comments_template();
				endif;
				
			endwhile; endif;
		?>
	</div>

<?php get_footer(); ?>