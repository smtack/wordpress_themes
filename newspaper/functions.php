<?php
	function newspaper_enqueue() {
		wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css');
	}

	add_action('wp_enqueue_scripts', 'newspaper_enqueue');

	add_theme_support('title-tag');

	add_theme_support('post-thumbnails');
?>