<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link href="<?php bloginfo('template_directory'); ?>/img/favicon.ico" type="image/x-icon" rel="icon">
		<link href="<?php bloginfo('template_directory'); ?>/img/favicon.ico" type="image/x-icon" rel="shortcut icon">

		<?php wp_head(); ?>
	</head>

	<body>
		<div class="content">
			<div class="header">
				<div class="toggle-menu">
					<img id="toggle-menu" src="<?php bloginfo('template_directory'); ?>/img/menu.svg" alt="Toggle Menu" draggable="false">
				</div>

				<div class="logo">
					<p id="logo"><a href="<?php bloginfo('wpurl'); ?>"><?php echo bloginfo('name'); ?></a></p>
				</div>

				<div class="toggle-search">
					<img id="toggle-search" src="<?php bloginfo('template_directory'); ?>/img/search.svg" alt="Search" draggable="false">
				</div>
			</div>

			<div class="navigation">
				<ul>
					<li><a href="<?php bloginfo('wpurl'); ?>">Home</a></li>
					<li><a href="index.php/news">News</a></li>
					<li><a href="index.php/politics">Politics</a></li>
					<li><a href="index.php/entertainment">Entertainment</a></li>
					<li><a href="index.php/technology">Technology</a></li>
				</ul>
			</div>

			<div class="search">
				<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
					<label>
						<input type="search" 
							   class="search-field"
	    					   placeholder="<?php echo esc_attr_x( 'Search', 'placeholder' ) ?>"
	        				   value="<?php echo get_search_query() ?>" 
	        				   name="s"
	        				   title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>">
					</label>
				</form>
			</div>