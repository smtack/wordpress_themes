<div class="post">
	<?php 
		if (has_post_thumbnail()) {
			the_post_thumbnail();
		}
	?>
	
	<div class="post-info">
		<h1 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

		<h2 class="info">
			<span class="author">By John Smith<!--<?php the_author(); ?>--></span>
		</h2>
		
		<p class="excerpt"><?php the_excerpt(); ?></p>
		
		<a class="comments" href="<?php comments_link(); ?>">
			<?php
				printf(_nx('1 Comment', '%1$s Commments', get_comments_number(), 'comments title', 'textdomain'), number_format_i18n(get_comments_number())); 
			?>
		</a>
	</div>
</div>