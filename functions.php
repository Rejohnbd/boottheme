<?php

// Load Stylesheet
function load_css()
{
	wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
	wp_enqueue_style('bootstrap');

	wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');
	wp_enqueue_style('main');

}

add_action('wp_enqueue_scripts', 'load_css');

// Load Script
function load_js()
{
	wp_enqueue_script('jquery');

	wp_register_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true);
	wp_enqueue_script('bootstrap-js');
}

add_action('wp_enqueue_scripts', 'load_js');

// Theme Options
add_theme_support('menus');				//Use for nav menu
add_theme_support('post-thumbnails');	//Use for feature image
add_theme_support('widgets');			//To Add widget

// Menus
register_nav_menus(
	array(
		'top-menu' => 'Top Menu Location',
		'mobile-menu' => 'Mobile Menu Location',
		'footer-menu' => 'Footer Menu Location'
	)
);

// Custom Image Size
add_image_size('blog-large', 600, 400, false);
add_image_size('blog-small', 300, 200, false);

// Register Sidebars
function my_sidebars()
{
	register_sidebar(
		array(
			'name' 	=> 'Page Sidebar',
			'id'	=> 'page-sidebar',
			'before_title'	=> '<h4 class="widget-title">',
			'after_title'	=> '</h4>'
		)
	);

	register_sidebar(
		array(
			'name' 	=> 'Blog Sidebar',
			'id'	=> 'blog-sidebar',
			'before_title'	=> '<h4 class="widget-title">',
			'after_title'	=> '</h4>'
		)
	);
}

add_action('widgets_init', 'my_sidebars');