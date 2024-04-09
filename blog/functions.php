<?php
function blog_enqueue() {
	wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css');
}

function add_google_fonts() {
	wp_enqueue_style('add_google_fonts', 'https://fonts.googleapis.com/css2?family=Castoro:ital@0;1&display=swap', false);
}

function change_excerpt() {
	return '...';
}

add_action('wp_enqueue_scripts', 'blog_enqueue');
add_action('wp_enqueue_scripts', 'add_google_fonts');

add_theme_support('title-tag');
add_theme_support('post-thumbnails');

add_filter('excerpt_more', 'change_excerpt');