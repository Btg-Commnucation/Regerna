<?php
	add_theme_support('post-thumbnails' );
	add_theme_support('title-tag');

	function btg_register_assets() {
		wp_enqueue_style('btg-style', get_template_directory_uri() . '/css/style.css', 1.0);
	}

	add_action('wp_enqueue_scripts', 'btg_register_assets');