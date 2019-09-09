<?php

function load_stylesheets()
{
	wp_register_style('stylesheet', get_template_directory_uri() . '/style.css', '', 1, 'all');
	wp_enqueue_style('stylesheet');

	wp_register_style('custom', get_template_directory_uri() . '/app.css', '', 1, 'all');
	wp_enqueue_style('custom');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

function load_javascript()
{
	wp_register_script('custom', get_template_directory_uri() . '/app.js', 'jquery', 1, true);
	wp_enqueue_script('custom');
}
add_action('wp_enqueue_scripts', 'load_javascript');

// Add support
add_theme_support('menus');
add_theme_support('post-thumbnails');

// Add custom logo branding
add_theme_support( 'custom-logo', array(
	'height' => 100,
	'flex-width' => true
));

add_theme_support('custom-background');

// WooCommerce support
function mytheme_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

// Register menu
register_nav_menus(
	array(
		'top-menu' => __('Top Menu', 'theme'),
	)
);

// Add image sizes
add_image_size('post_image', 1100, 550, false);

// Add widget
register_sidebar(
	array(
		'name' => 'Page Sidebar',
		'id' => 'page-sidebar',
		'class' => '',
		'before_title' => '<h4>',
		'after_title' => '</h4>'
	)
);

register_sidebar(
	array(
		'name' => 'Blog Sidebar',
		'id' => 'blog-sidebar',
		'class' => '',
		'before_title' => '<h4>',
		'after_title' => '</h4>'
	)
);