<?php

include 'inc/aq_resizer.php';
include 'inc/forseo.php';
include 'inc/newtypepost.php';


if (function_exists('add_theme_support')) {
	add_theme_support('admin-bar', array('callback' => '__return_false'));
	add_theme_support('customize-selective-refresh-widgets');
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_theme_support('custom-background');
	add_theme_support('automatic-feed-links');
	add_theme_support(
		'html5',
		array(
			'comment-list',
			'comment-form',
			'search-form',
			'gallery',
			'caption',
		)
	);
	add_theme_support('admin-bar', array('callback' => '__return_false'));

	// add_theme_support('post-formats', array('standard','aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'  ) );
}

function register_my_menus()
{
	register_nav_menus(
		array(
			'main-nav1' => 'Наши преимущества',
			'main-nav2' => 'Клинические решения',
			'main-nav3' => 'Лабораторные решения',
			'footer-nav1' => 'footer nav1',
			'footer-nav2' => 'footer nav2',
		)
	);
}

add_action('init', 'register_my_menus');
add_shortcode('template_url', 'theme_template_url');
add_filter('widget_text_content', 'do_shortcode');

// All JS scripts are connected at the end of the page

function footer_enqueue_scripts()
{
	remove_action('wp_head', 'wp_print_scripts');
	remove_action('wp_head', 'wp_print_head_scripts', 9);
	remove_action('wp_head', 'wp_enqueue_scripts', 1);
	add_action('wp_footer', 'wp_print_scripts', 5);
	add_action('wp_footer', 'wp_enqueue_scripts', 5);
	add_action('wp_footer', 'wp_print_head_scripts', 5);
}

add_action('wp_loaded', 'footer_enqueue_scripts');

// Replace the active item with active
add_filter('nav_menu_css_class', 'special_nav_class', 10, 2);

function special_nav_class($classes, $item)
{
	if (in_array('current-menu-item', $classes)) {
		$classes[] = 'active ';
	}
	return $classes;
}

function theme_template_url()
{
	return get_template_directory_uri();
}

add_shortcode('template_url', 'theme_template_url');
remove_action('wp_head', 'wp_generator');
add_filter('the_generator', '__return_empty_string');
add_filter('xmlrpc_enabled', '__return_false');
function my_prefix_regenerate_thumbnail_quality()
{
	return 70;
}

add_filter('jpeg_quality', 'my_prefix_regenerate_thumbnail_quality');

remove_action('welcome_panel', 'wp_welcome_panel');
remove_action('welcome_panel', 'wpmudev_welcome_panel');



// начало добавление колонки с превью каринки
if ( !function_exists('fb_AddThumbColumn') && function_exists('add_theme_support') ) {
// for post and page
	add_theme_support('post-thumbnails', array( 'post', 'page' ) );
	function fb_AddThumbColumn($cols) {
		$cols['thumbnail'] = __('Thumbnail');
		return $cols;
	}

	function fb_AddThumbValue($column_name, $post_id) {
		$width = (int) 60;
		$height = (int) 60;
		if ( 'thumbnail' == $column_name ) {
			// thumbnail of WP 2.9
			$thumbnail_id = get_post_meta( $post_id, '_thumbnail_id', true );

			// image from gallery
			$attachments = get_children( array('post_parent' => $post_id, 'post_type' => 'attachment', 'post_mime_type' => 'image') );

			if ($thumbnail_id)
				$thumb = wp_get_attachment_image( $thumbnail_id, array($width, $height), true );
			elseif ($attachments) {
				foreach ( $attachments as $attachment_id => $attachment ) {
					$thumb = wp_get_attachment_image( $attachment_id, array($width, $height), true );
				}
			}
			if ( isset($thumb) && $thumb ) { echo $thumb; }
			else { echo __('None'); }
		}
	}

// for posts
	add_filter( 'manage_posts_columns', 'fb_AddThumbColumn' );
	add_action( 'manage_posts_custom_column', 'fb_AddThumbValue', 10, 2 );

// for pages
	add_filter( 'manage_pages_columns', 'fb_AddThumbColumn' );
	add_action( 'manage_pages_custom_column', 'fb_AddThumbValue', 10, 2 );
}
// конец добавление колонки с превью каринки


// Добавляем колонку с именем пациента в административном списке постов типа 'works'
function custom_columns_head($defaults) {
	$defaults['name_patient'] = 'Имя пациента';
	return $defaults;
}
add_filter('manage_works_posts_columns', 'custom_columns_head');

// Выводим значение поля 'name_patient' в колонке
function custom_columns_content($column_name, $post_id) {
	if ($column_name == 'name_patient') {
		$name_patient = get_field('name_patient', $post_id);
		echo $name_patient;
	}
}
add_action('manage_works_posts_custom_column', 'custom_columns_content', 10, 2);

// end

/*
function enqueue_styles_and_scripts() {
	// Подключаем main.css в head
	wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css', array(), '1.0', 'all');

	// Подключаем main-child.css в футер
	wp_enqueue_style('main-child', get_template_directory_uri() . '/css/main-child.css', array(), '1.0', 'all');

	// Подключаем jQuery в футер
	//wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), '3.4.1', false);

	// Подключаем assets-dist.js в футер
	//wp_enqueue_script('assets-dist', get_template_directory_uri() . '/js/assets-dist.js', array('jquery'), '1.0', false);

	// Подключаем main.js в футер
	//wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0', false);
}

add_action('wp_enqueue_scripts', 'enqueue_styles_and_scripts');
*/


function add_scripts() {
	//wp_deregister_script('jquery');
	//wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), '3.4.1', true);
	//wp_enqueue_script('jquery');

	// Подключаем assets-dist.js в футер
	//wp_enqueue_script('assets-dist', get_template_directory_uri() . '/js/assets-dist.js', array('jquery'), '2.0', true);

	// Подключаем main.js в футер
	//wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array('jquery'), '2.0', true);
}
add_action('wp_enqueue_scripts', 'add_scripts', 5);





function mythem_enqueue_style() {
	//wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css');
	wp_enqueue_style('main-child', get_template_directory_uri() . '/css/main-child.css');
}

add_action('wp_enqueue_scripts', 'mythem_enqueue_style', 5);



