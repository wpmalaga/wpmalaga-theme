<?php 

// Cargar estilos 

function load_stylesheets(){

	wp_register_style('bootstrap', get_template_directory_uri(). '/css/bootstrap.min.css',
	array(),false, 'all');

	wp_enqueue_style('bootstrap');

	wp_register_style('style', get_template_directory_uri(). '/style.css',
	array(),false, 'all');

	wp_enqueue_style('style');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');

function themebs_enqueue_scripts() {
  wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array( 'jquery' ) );
}
add_action( 'wp_enqueue_scripts', 'themebs_enqueue_scripts');

// Cargar Jquery

function include_jquery(){

	wp_deregister_script('jquery');

	wp_enqueue_script('jquery', get_template_directory_uri(). '/js/jquery-3.3.1.min.js', '',1,true );

	add_action('wp_enqueue_scripts', 'jquery');
}

add_action('wp_enqueue_scripts', 'include_jquery');

// Cargar Js

function loadjs(){
	wp_register_script('customjs', get_template_directory_uri(). '/js/main.js', '',1,true);

	wp_enqueue_script('customjs');
}

add_action('wp_enqueue_scripts', 'loadjs');

// Hacer con que wordpress permita editar Menus y otros desde admin

add_theme_support('menus');
add_theme_support('post-thumbnails');

//Menu locations

register_nav_menus(
	array(
		'top-menu' => __('Top Menu', 'theme'),
		'footer-menu' => __('Footer Menu', 'theme'),
	)
);

// Agregar tamaños de imagen

add_image_size('smallest', 300, 300, true);
add_image_size('largest', 800, 800, true);

// Agregar Font Awesome

add_action( 'wp_enqueue_scripts', 'enqueue_load_fa' );
function enqueue_load_fa() {
wp_enqueue_style( 'load-fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
}