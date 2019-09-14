<?php

// Support for TGM required plugins
require_once get_template_directory() . '/inc/TGM/class-tgm-plugin-activation.php';
add_action('tgmpa_register', 'TGM_register_required_plugins');

function TGM_register_required_plugins(){
	$plugins = array(
		array('name' => 'Classic Editor',
		      'slug' => 'classic-editor',
		      'required' => false)
	);

	$config = array(
		'id' => 'TGM',
		'default_path' => '',
		'menu' => 'tgmpa-install-plugins',
		'parent-slug' => 'themes.php',
		'capability' => 'edit_theme_options',
		'has_notices' => true,
		'dismissable' => true,
		'dismiss_msg' => '',
		'is_automatic' => false,
		'message' => ''
	);

	tgmpa($plugins, $config);
}

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

// Add dynamic hero images
$customHeader = array(
	'default-image' => get_template_directory_uri() . '/images/hero.jpg',
	'uploads' => true,
);
add_theme_support('custom-header', $customHeader);

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

// Register footer menu
register_nav_menus(
	array(
		'footer-menu' => __('Footer menu', 'theme'),
	)
);

// Add image sizes
add_image_size('post_image', 1100, 550, false);
add_image_size('woocommerce_gallery_thumbnail', 100, 100, true);
add_image_size('woocommerce_thumbnail', 600, 600, true);

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

// Count how many items account menu have to display
function wc_get_account_menu_items_length(){
	return count(wc_get_account_menu_items());
}
add_action('woocommerce_before_account_navigation', 'wc_get_account_menu_items_length');