<div class="post">
	<?php
		if (has_post_thumbnail()) {
			the_post_thumbnail();
		}
	?>

	<div class="post-info">
		<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

		<h4>
			<span class="author">By John Smith<!--<?php the_author(); ?>--></span>
		</h4>

		<p><?php the_excerpt(); ?></p>

		<a id="comments" href="<?php comments_link(); ?>">
			<?php
				printf(_nx('1 Comment', '%1$s Comments', get_comments_number(), 'comments title', 'textdomain'), number_format_i18n(get_comments_number())); 
			?>
		</a>
	</div>
</div>