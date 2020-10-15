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
		<div class="header">
			<p class="heading"><a href="<?php bloginfo('wpurl'); ?>"><?php echo get_bloginfo('name'); ?></a></h1>
			<p class="description"><?php echo get_bloginfo('description'); ?></p>
		</div>