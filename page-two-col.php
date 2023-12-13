<?php
/**
 * Pages Template
 * Template Name: text two col
 * @subpackage marine
 *
 *
 * @file           page.php

 */

get_header(); ?>
<main class="main-content inner" id="main-content" role="main">
	<div class="main-content-inner">
		<?php
		if ( function_exists('yoast_breadcrumb') ) {
			yoast_breadcrumb( '<div class="breadcrumbs">','</div>' );
		}
		?>

		<div class="back">
			<a href="/" class="back__btn action action__button action__with-arrow action__none back__btn" title="Главная">Главная</a>
		</div>
		<div class="page-wrapper wrapper">

			<div class="sidebar">
				<div class="sidebar__inner">
					<nav class="page__toc spacing">
						<?php
						$text_content = get_field('navigacziya_po_yakoryam');
						if ($text_content) {
							echo wp_kses_post($text_content) ;
						}
						?>
					</nav>
				</div>
			</div>


			<div class="page-content content sections page__sidebar">
				<?php edit_post_link('edit', '<p class="btn-edit">', '</p>'); ?>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div class="entry">
						<?php the_content(); ?>
					</div>
				<?php endwhile; endif; ?>
				<?php edit_post_link(__('edit.', 'kubrick'), '<p>', '</p>'); ?>
			</div>
		</div>
	</div>
</main>


<?php get_footer(); ?>
