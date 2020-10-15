<div class="post">
	<h1><?php the_title(); ?></h1>

	<h4>
		<span class="author">John Smith<!--<?php the_author(); ?>--></span>
		<span class="bullet">&bullet;</span>
		<span class="date"><?php the_time('F j Y'); ?></span>
	</h4>

	<?php
		if (has_post_thumbnail()) {
			the_post_thumbnail();
		}
	?>

	<p class="text"><?php the_content(); ?></p>
</div>