<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php wp_head(); ?>
	</head>
	<body>
		<div class="container">
			<div class="header">
				<p class="heading"><a href="<?php bloginfo('wpurl'); ?>"><?php echo get_bloginfo('name'); ?></a></h1>
				<p class="description"><?php echo get_bloginfo('description'); ?></p>

				<div class="navigation">
					<ul>
						<?php
							$pages = get_pages();

							foreach ($pages as $page):
						?>
							<li><a href="<?php echo get_page_link($page->ID); ?>"><?php echo $page->post_title; ?></a></li>
						<?php endforeach; ?>
					</ul>
				</div>
				<div class="search">
					<form role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>">
						<label>
							<input type="search"
										 class="search-field"
										 placeholder="<?php echo esc_attr_x('Search', 'placeholder'); ?>"
										 value="<?php echo get_search_query(); ?>"
										 name="s"
										 title="<?php echo esc_attr_x('Search for:', 'label'); ?>">
							<input type="submit" class="search-submit" value="Search">
						</label>
					</form>
				</div>
			</div>