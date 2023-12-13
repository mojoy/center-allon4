<?php
/**
 * Pages Template
 * Template Name: text
 * @subpackage centr-allon4
 *
 *
 * @file           page.php

 */

get_header(); ?>
<main class="main-content inner" id="main-content" role="main">
	<div class="main-content-inner">
		<div class="page-wrapper wrapper page-pdf">
		<div class="page-content content sections ">
			<?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<div class="breadcrumbs">','</div>' );
			}
			?>

			<div class="back">
				<a href="/" class="back__btn action action__button action__with-arrow action__none back__btn" title="Главная">Главная</a>
			</div>
			<div class="wysiwyg">
				<h1><?php the_title(); ?></h1>
				<?php edit_post_link('edit', '<p class="btn-edit">', '</p>'); ?>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div class="entry">
						<?php the_content(); ?>
					</div>
				<?php endwhile; endif; ?>
				<?php edit_post_link(__('edit.', 'kubrick'), '<p>', '</p>'); ?>
			</div>

			<?php
			// Получение данных из поля "Ссылка на страницу"
			$link = get_field('vybrat_straniczy_dlya'); // Замените на имя вашего поля

			// Проверка, что ссылка существует
			if ($link) {
				$linked_page = $link;
				$linked_page_title = get_the_title($linked_page); // Получение заголовка страницы
				$linked_page_image = get_the_post_thumbnail($linked_page, 'thumbnail'); // Получение миниатюры изображения

				if ($linked_page_image) {
					echo $linked_page_image;
				}

				echo '<h2>' . esc_html($linked_page_title) . '</h2>';
			}
			?>

		</div>
	</div>
	</div>
</main>
<?php get_footer(); ?>
