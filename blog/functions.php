<?php
function blog_enqueue() {
	wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css');
}

add_action('wp_enqueue_scripts', 'blog_enqueue');
add_theme_support('title-tag');

function custom_settings_add_menu() {
	add_menu_page('Custom Settings', 'Custom Settings', 'manage_options', 'custom-settings', 'custom_settings_page', null, 99);
}

add_action('admin_menu', 'custom_settings_add_menu');

function custom_settings_page() {
?>
	<div class="wrap">
		<h1>Custom Settings</h1>

		<form method="post" action="options.php">
			<?php
				settings_fields('section');
				do_settings_sections('theme-options');
				submit_button();
			?>
		</form>
	</div>
<?php 
}

add_theme_support('post-thumbnails');