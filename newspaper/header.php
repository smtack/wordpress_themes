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
				<div class="top">
					<span class="search">
						<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
    						<label>
        						<input type="search" 
        							   class="search-field" 
            						   placeholder="<?php echo esc_attr_x( 'Search', 'placeholder' ) ?>"
            						   value="<?php echo get_search_query() ?>" name="s"
            						   title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>">
    						</label>

    						<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
						</form>
					</span>
				</div>

				<div class="head">
					<a href="<?php bloginfo('wpurl'); ?>"><p id="title"><?php echo get_bloginfo('name'); ?></p></a>
					<p><?php echo date('l, j F, Y'); ?></p>
				</div>
			</div>

			<div class="navigation">
				<ul>
					<li><a href="<?php bloginfo('wpurl'); ?>">Home</a></li>
					<li><a href="index.php/news">News</a></li>
					<li><a href="index.php/world">World</a></li>
					<li><a href="index.php/politics">Politics</a></li>
					<li><a href="index.php/arts">Arts</a></li>
				</ul>
			</div>