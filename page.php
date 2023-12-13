<?php
/**
 * Pages Template
 * Template Name: text & img in top
 * @subpackage marine
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



			<?php edit_post_link('edit', '<p class="btn-edit">', '</p>'); ?>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="entry">



					<?php
					$selected_option = get_field('vybor_czveta_teksta_v_bloke');
					$bg_selected_option = get_field('vybor_osnovnoj_zalivki_bloka');
					?>



							<section class="layout-default <?php if ($bg_selected_option) {echo esc_html($bg_selected_option);} ?> <?php if ($selected_option) {echo esc_html($selected_option);} ?> hero paragraph paragraph--type--hero paragraph--view-mode--default" id="80882">

								<div class="hero-media">
									<div class="field--name-field-section-image field--type-entity-reference field--label-hidden">
										<div>
											<div class="field--name-field-media-image field--type-image field--label-hidden">
												<?php
												// Получение URL загруженного изображения
												$image_url = get_field('post_img');
												$image_alt = get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true );

												// Проверка, что изображение загружено
												if ($image_url) {
													echo '<picture>';
													echo '<source srcset="' . esc_url($image_url) . '" type="image/webp">';
													echo '<img loading="eager" src="' . esc_url($image_url) . '" alt="' . esc_attr($image_alt) . '" class="image" loading="lazy" decoding="async">';
													echo '</picture>';
												}
												?>

											</div>
										</div>
									</div>
								</div>
								<div class="inner">
									<div class="hero-content spacing-all">
										<div>
											<div class="wysiwyg">
												<h1><strong><?php the_title(); ?></strong></h1>
												<?php
													// Получение содержимого поля "Область текста"
													$text_content = get_field('tekst_na_kartinke'); // Замените на имя вашего поля

													// Проверка, что содержимое существует
													if ($text_content) {
														echo '<p>' . wp_kses_post($text_content) . '</p>';
													}
													?>
											</div>
										</div>
									</div>
								</div>
							</section>



					<?php the_content(); ?>
				</div>
			<?php endwhile; endif; ?>
			<?php edit_post_link(__('edit.', 'kubrick'), '<p>', '</p>'); ?>






						<?php
						$related_pages = get_field('vybor_straniczy_dlya_privyazki'); // Замените на имя вашего поля

						if ($related_pages) {
							?>

			<section class="layout-default grey-desert-storm-background black-font cards paragraph paragraph--type--card-collection paragraph--view-mode--default">
				<div class="spacing-all top-padding-default bottom-padding-default">

					<ul class="cards-list">

						<?php
							foreach ($related_pages as $page) {
								?>

								<li class="card">
									<div class="card-wrapper">

										<div class="card-img">
											<div class="field--name-field-section-card-image field--type-entity-reference field--label-hidden">
												<div>
													<div class="field--name-field-media-image field--type-image field--label-hidden">
														<?php
														$page_image = get_the_post_thumbnail($page, 'full');
														if ($page_image) {
															echo '<div class="page-image">' . $page_image . '</div>';
														}
														?>
													</div>
												</div>
											</div>
										</div>
										<div class="card-text">
											<h2 class="card-title h4 bold">
												<a href="<?php echo esc_url(get_permalink($page)); ?>" class="card-link">
													<div class="field--name-field-section-card-title field--type-string field--label-hidden"><?php echo get_the_title($page); ?></div>
												</a>
											</h2>
											<div class="card-description">
												<div class="field--name-field-section-card-content field--type-text-long field--label-hidden">
													<?php
													$sort_text = get_field('sort-text', $page);
													if ($sort_text) {
														echo '<p class="sort-text">' . esc_html($sort_text) . '</p>';
													}
													?>
												</div>
											</div>
										</div>
									</div>
								</li>

								<?php
							}
							?>
					</ul>
				</div>
			</section>
						<?php

						}
						?>









		</div>
	</div>
	</div>
</main>


<?php get_footer(); ?>
