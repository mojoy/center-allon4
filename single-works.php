<?php
/**
 * Pages Template
 * @subpackage marine
 *
 *
 * @file           page.php

 */

get_header(); ?>
<main class="main-content inner" id="main-content" role="main">
	<div class="main-content-inner" id="mainpagecontent">
		<?php
		if ( function_exists('yoast_breadcrumb') ) {
			yoast_breadcrumb( '<div class="breadcrumbs">','</div>' );
		}
		?>
		<div class="back">
			<a href="/works/" class="back__btn action action__button action__with-arrow action__none back__btn" title="Все клинические ситуации">Все клинические ситуации</a>
		</div>
		<section class="layout-default grey-desert-storm-background black-font hero paragraph paragraph--type--hero paragraph--view-mode--default">
			<div class="hero-media">
				<div class="field--name-field-section-image field--type-entity-reference field--label-hidden">
					<div>
						<div class="field--name-field-media-image field--type-image field--label-hidden">
							<?php
							// Получение URL загруженного изображения
							$image_url = get_field('izobrazhenie_na_bannere');
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
							<h1><?php the_title(); ?></h1>
							<?php
							$text_content = get_field('name_doctor_work');
							if ($text_content) {
								echo wp_kses_post($text_content) ;
							}
							?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="white-background spacing-bottom-36 paragraph paragraph--type--spacing paragraph--view-mode--spacing-bottom-36"></section>
		<section class="layout-default paragraph--two-columns paragraph paragraph--type--two-columns-layout paragraph--view-mode--default">
			<div class="two-columns">
				<div class="two-columns--column two-columns--height">
					<section class="image-section spacing white-background " id="167311">
						<div class="field--name-field-section-image field--type-entity-reference field--label-hidden">
							<div>
								<div class="field--name-field-media-image field--type-image field--label-hidden">
									<?php
									// Получение URL загруженного изображения
									$image_url = get_field('foto_sluchaya_kolazh');
									$image_alt = get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true );

									// Проверка, что изображение загружено
									if ($image_url) {
										echo '<picture>';
										echo '<source srcset="' . esc_url($image_url) . '" type="image/webp">';
										echo '<img loading="eager" src="' . esc_url($image_url) . '" alt="' . get_the_title() . '" class="image" loading="lazy" decoding="async">';
										echo '</picture>';
									}
									?>
								</div>
							</div>
						</div>
					</section>
				</div>
				<div class="two-columns--column two-columns--height">
					<section class="layout-default horizontal-line horizontal-line--none default-font paragraph paragraph--type--text paragraph--view-mode--default" id="167316">
						<div class="spacing-all top-padding-none bottom-padding-none">
							<div class="wysiwyg">
								<?php while ( have_posts() ) : the_post(); ?>
									<?php the_content(); ?>
								<?php endwhile; ?>
							</div>
						</div>
					</section>
				</div>
			</div>
		</section>

		<?php
		$text_content = get_field('text_quote');
		if ($text_content) {
			echo wp_kses_post($text_content) ;
		}
		?>


		<?php
		$page_id = 328;
		$page_content = get_post($page_id);
		if ($page_content) {
			echo apply_filters('the_content', $page_content->post_content);
		}
		?>




	</div>
</main>


<?php get_footer(); ?>
