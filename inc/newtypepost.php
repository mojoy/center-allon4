<?php

register_post_type('section',
	array(
		'labels' => array(
			'name' => _x('блоки', 'post type general name'),
			'singular_name' => _x('блоки', 'post type singular name'),
			'add_new' => _x('добавить блок', 'add'),
			'add_new_item' => __('добавить блок'),
			'edit_item' => __('edit блок'),
			'new_item' => __('new блок'),
			'view_item' => __('see блок'),
			'search_items' => __('search блок'),
			'not_found' =>  __('Nothing found '),
			'not_found_in_trash' => __('not found in the basket'),
		),
		'public' => false,
		'publicly_queryable' => false,
		'show_ui' => true,
		'_builtin'            => false,
		'_edit_link'          => 'post.php?post=%d',
		'query_var' => false, // Убираем возможность запросов по внешней ссылке
		'show_in_quick_edit' => false,
		'show_admin_column' => false,
		'capability_type' => 'post',
		'hierarchical' => true,
		'menu_position' => 7,
		'menu_icon' => 'dashicons-admin-home',
		//'taxonomies' => array('category','post_tag'),
		'supports' => array(
			'title',
			'editor',
			//'author',
			//'thumbnail',
			//'excerpt',
			//'trackbacks',
			//'custom-fields',
			//'comments',
			'revisions',
			//'page-attributes',
			//'post-formats',
		),
	)
);



// Регистрируем новый тип записи
function works_register_post_type() {
	$labels = array(
		'name'               => 'Клинические ситуации',
		'singular_name'      => 'Клиническая ситуация',
		'menu_name'          => 'Клинические ситуации',
		'add_new'            => 'Добавить новую запись',
		'add_new_item'       => 'Добавить новую запись',
		'edit_item'          => 'Редактировать запись',
		'new_item'           => 'Новая запись',
		'view_item'          => 'Посмотреть запись',
		'search_items'       => 'Искать записи',
		'not_found'          => 'Записи не найдены',
		'not_found_in_trash' => 'Записи не найдены в корзине',
	);

	$args = array(
		'labels'              => $labels,
		'public'              => true,
		'menu_position'       => 6, // Порядковый номер в меню
		'menu_icon'           => 'https://centr-allon4.ru/wp-content/themes/centr-allon4/img/icon/icon-photo-camera.svg',
		'supports'            => array( 'title', 'editor', 'thumbnail', 'excerpt', 'publicize', 'custom-fields' ), // Включаемые функции
		'publicly_queryable'  => true, // Сделать записи доступными по публичной ссылке
		'has_archive'         => true, // Создать архив записей
	);

	register_post_type( 'works', $args );
}
add_action( 'init', 'works_register_post_type' );


function custom_taxonomy() {
	$labels = array(
		'name'              => 'Случаи',
		'singular_name'     => 'Случаи',
		'search_items'      => 'Искать случай',
		'all_items'         => 'Все случаи',
		'parent_item'       => 'Родительская категория',
		'parent_item_colon' => 'Родительская категория:',
		'edit_item'         => 'Редактировать категорию',
		'update_item'       => 'Обновить категорию',
		'add_new_item'      => 'Добавить новую категорию',
		'new_item_name'     => 'Новое имя категории',
		'menu_name'         => 'Категории',
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'public'            => true,
		'show_ui'           => true,
		'show_in_nav_menus' => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'category' ),
	);

	register_taxonomy( 'works_category', 'works', $args );
}
add_action( 'init', 'custom_taxonomy' );





















/*

// Создаем новый тип поста "post-mail"
function create_post_mail_type() {
	register_post_type('post-mail',
		array(
			'labels' => array(
				'name' => __('Requests'),
				'singular_name' => __('Request')
			),
			'public' => true,
			'has_archive' => false,
			'supports' => array('title', 'editor'),
			'menu_icon' => 'dashicons-email-alt',
			'menu_position'       => 7,
		)
	);
}
add_action('init', 'create_post_mail_type');




// Добавляем страницу "Requests" в админ-панели
function add_requests_admin_page() {
	add_menu_page(
		'Requests',           // Заголовок страницы
		'Requests',           // Название в меню
		'manage_options',     // Роль пользователя, имеющего доступ к странице
		'requests',           // Уникальный идентификатор страницы
		'display_requests'    // Функция для вывода содержимого страницы
	);
}
add_action('admin_menu', 'add_requests_admin_page');

// Функция для вывода содержимого страницы "Requests"
function display_requests() {
	$args = array(
		'post_type' => 'post-mail',  // Тип постов
		'posts_per_page' => -1,      // Все посты типа "post-mail"
	);

	$query = new WP_Query($args);

	if ($query->have_posts()) {
		echo '<div class="wrap"><h1>Requests</h1><ul>';
		while ($query->have_posts()) {
			$query->the_post();
			echo '<li><a href="' . get_edit_post_link() . '">' . get_the_title() . '</a></li>';
		}
		echo '</ul></div>';
		wp_reset_postdata();
	} else {
		echo 'No requests found.';
	}
}



// Обрабатываем отправленные данные из Contact Form 7
function handle_contact_form7_submission($contact_form) {
	if ($contact_form->id() == '498ca47') { // Замените '498ca47' на ID вашей формы Contact Form 7
		$submission = WPCF7_Submission::get_instance();
		if ($submission) {
			$form_data = $submission->get_posted_data();

			// Получаем данные из полей формы
			$name = isset($form_data['your-name']) ? sanitize_text_field($form_data['your-name']) : 'No Name';
			$message = isset($form_data['your-message']) ? wp_kses_post($form_data['your-message']) : '';

			// Создаем новый пост типа "post-mail"
			$post_id = wp_insert_post(array(
				'post_title' => $name,
				'post_content' => $message,
				'post_type' => 'post-mail',
				'post_status' => 'publish',
			));

			if ($post_id) {
				// JavaScript для отображения div с текстом "Спасибо!"
				echo '<script>';
				echo 'jQuery(function($) {';
				echo '$(".wpcf7-form").hide();'; // Скрываем форму
				echo '$(".thank-you-message").show();'; // Показываем блок с сообщением "Спасибо!"
				echo '});';
				echo '</script>';
			}
		}
	}
}
add_action('wpcf7_mail_sent', 'handle_contact_form7_submission');





*/


