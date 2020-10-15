<?php
	function magazine_enqueue() {
		wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css');
		wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array(), '1.0.0', true);
	}

	add_action('wp_enqueue_scripts', 'magazine_enqueue');

	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
?>