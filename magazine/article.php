<div class="post">
	<h1 class="title"><?php the_title(); ?></h1>

	<h2 class="info">
		<span class="author">By John Smith<!--<?php the_author(); ?>--></span>
		<span class="bullet">&bullet;</span>
		<span class="date"><?php the_time('F j Y'); ?></span>
	</h2>

	<?php 
		if (has_post_thumbnail()) {
			the_post_thumbnail();
		}
	?>
	
	<p><?php the_content(); ?></p>
</div>