<?php
//Inludes

//Global
define('THE_URI', esc_url(get_stylesheet_directory_uri()));
add_filter('xmlrpc_enabled', '__return_false');

//Suport
add_theme_support('widgets');
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('html5');

//Scripts and styles
add_action('wp_enqueue_scripts', 'mk_scripts');

function mk_scripts()
{
    //Bootstrap JS
    wp_enqueue_script('boot', get_stylesheet_directory_uri() . '/bootstrap/dist/js/bootstrap.min.js', array('jquery'), '1.0.0', true);

    

    //Main JS
    wp_enqueue_script('main', get_stylesheet_directory_uri() . '/js/main.js', array('jquery'), '1.0.0', true);

    wp_localize_script( 'main', 'local', array('path' => site_url()));
}

add_action('wp_enqueue_scripts', 'mk_styles');

function mk_styles()
{
    //Bootstrap JS
    wp_enqueue_style('boot', get_stylesheet_directory_uri() . '/bootstrap/dist/css/bootstrap.min.css');

    //Main JS
    wp_enqueue_style('main', get_stylesheet_directory_uri() . '/css/main.css');
}


//Nav menus

function register_my_menus()
{
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
    )
  );
}
add_action('init','register_my_menus');

/**
 * ACF Options Page
 */

 if(function_exists('acf_add_options_page'))
 {

     acf_add_options_page(array(
		'page_title' 	=> 'Opcje motywu',
		'menu_title'	=> 'Opcje motywu',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	acf_add_options_page(array(
		'page_title' 	=> 'Footer',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	acf_add_options_page(array(
		'page_title' 	=> 'Header',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
}
