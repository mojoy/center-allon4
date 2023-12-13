<?php
/**
 * Pages Template
 * Template Name: text two col
 * @subpackage centr-allon4
 *
 *
 * @file           archive-works.php

 */

get_header(); ?>
<main class="main-content inner" id="main-content" role="main">
	<div class="main-content-inner">

		<?php
		if ( function_exists('yoast_breadcrumb') ) {
			yoast_breadcrumb( '<div class="breadcrumbs">','</div>' );
		}
		?>
		<?php
		$current_template = get_page_template_slug();

		if ($current_template) {
			echo "Текущий шаблон: " . $current_template;
		} else {
			echo "Используется шаблон по умолчанию";
		}
		?>
		<div class="back">
			<a href="/" class="back__btn action action__button action__with-arrow action__none back__btn" title="Главная">Главная</a>
		</div>

		<div class="page-wrapper wrapper">



			<?php if ( have_posts() ) : ?>


			<section class="layout-default cornflower-background white-font hero paragraph paragraph--type--hero paragraph--view-mode--default" id="72007">
				<div class="hero-media">
					<div class="field--name-field-section-image field--type-entity-reference field--label-hidden">
						<div>
							<div class="field--name-field-media-image field--type-image field--label-hidden">
								<picture>
									<source srcset="https://www.nobelbiocare.com/sites/default/files/styles/hero_desktop_x1_1440_x_650/public/website-hero%20copy%202%20%281%29.png.webp?itok=aUawDLL4 1x, /sites/default/files/styles/hero_desktop_x2_1440_x_650/public/website-hero%20copy%202%20%281%29.png.webp?itok=yD19HSoe 2x" media="all and (min-width: 1025px)" type="image/webp" width="1440" height="650">
									<source srcset="https://www.nobelbiocare.com/sites/default/files/styles/hero_table_x1_1024_x_550/public/website-hero%20copy%202%20%281%29.png.webp?itok=NUV7vvGC 1x, /sites/default/files/styles/hero_table_x2_1024_x_550/public/website-hero%20copy%202%20%281%29.png.webp?itok=J9Jb3DRx 2x" media="all and (min-width: 769px) and (max-width: 1024px)" type="image/webp" width="1024" height="550">
									<source srcset="https://www.nobelbiocare.com/sites/default/files/styles/hero_mobile_x1_768_x_375/public/website-hero%20copy%202%20%281%29.png.webp?itok=Pc0kSInq 1x, /sites/default/files/styles/hero_mobile_x2_768_x_375/public/website-hero%20copy%202%20%281%29.png.webp?itok=stiW_xzo 2x" media="all and (min-width: 481px) and (max-width: 768px)" type="image/webp" width="768" height="375">
									<source srcset="https://www.nobelbiocare.com/sites/default/files/styles/hero_mobile_x1_480_x_375/public/website-hero%20copy%202%20%281%29.png.webp?itok=awb2Sxn4 1x, /sites/default/files/styles/hero_mobile_x2_480_x_375/public/website-hero%20copy%202%20%281%29.png.webp?itok=6KZLxPQQ 2x" media="all and (min-width: 376px) and (max-width: 480px)" type="image/webp" width="480" height="375">
									<source srcset="https://www.nobelbiocare.com/sites/default/files/styles/hero_mobile_x1_375_x_375/public/website-hero%20copy%202%20%281%29.png.webp?itok=x-1nmrCw 1x, /sites/default/files/styles/hero_mobile_x2_375_x_375/public/website-hero%20copy%202%20%281%29.png.webp?itok=TuatqnO9 2x" media="all and (min-width: 361px) and (max-width: 375px)" type="image/webp" width="375" height="375">
									<source srcset="https://www.nobelbiocare.com/sites/default/files/styles/hero_mobile_x1_360_x_375/public/website-hero%20copy%202%20%281%29.png.webp?itok=BZWYsXr8 1x, /sites/default/files/styles/hero_mobile_x2_360_x_375/public/website-hero%20copy%202%20%281%29.png.webp?itok=D3PD_zTO 2x" media="all and (min-width: 321px) and (max-width: 360px)" type="image/webp" width="360" height="375">
									<source srcset="https://www.nobelbiocare.com/sites/default/files/styles/hero_mobile_x1_320_x_375/public/website-hero%20copy%202%20%281%29.png.webp?itok=m4pqQ2tw 1x, /sites/default/files/styles/hero_mobile_x2_320_x_375/public/website-hero%20copy%202%20%281%29.png.webp?itok=zSloRZKH 2x" type="image/webp" width="320" height="375">
									<img loading="eager" src="https://www.nobelbiocare.com/sites/default/files/styles/hero_mobile_x1_320_x_375/public/website-hero%20copy%202%20%281%29.png.webp?itok=m4pqQ2tw" width="320" height="375" alt="Clinical cases" class="image">
								</picture>
							</div>
						</div>
					</div>
				</div>
				<div class="inner">
					<div class="hero-content spacing-all">
						<div>
							<div class="wysiwyg">
								<h1>Клинические случаи</h1>
								<p>Обзор случаев применения концепции All-on-4® и других протоколов лечения врачами авторизованных центров. Решения, которые кардинально изменили жизнь пациентов.</p>
								<div class="actions"><a class="action action__button action__with-arrow action__none fancy-modal" style="text-decoration: none;" title="Получить консультацию" href="#modal-callback" rel="nofollow">Получить консультацию</a></div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="grey-desert-storm-background black-font paragraph paragraph--type--clinical-cases-overview paragraph--view-mode--default" style="width: 100%;">
				<div class="spacing-all top-padding-default bottom-padding-default">
					<div class="products-overview">

						<!--
						<div class="filters">
							<div class="filter-level-1">
								<nav>
									<h2 class="visually-hidden"></h2>
									<ul class="menu">
										<li class="js-nav-item menu-item " data-entity-type-id="taxonomy_term" data-entity-id="801" data-alias="indications" data-once="nobelProductsFilterBehavior">
											<a class="js-link-item menu-link center-align" href="">
												<span class="menu-link--text">Indications</span>
											</a>
										</li>
										<li class="js-nav-item menu-item " data-entity-type-id="taxonomy_term" data-entity-id="781" data-alias="products" data-once="nobelProductsFilterBehavior">
											<a class="js-link-item menu-link center-align" href="">
												<span class="menu-link--text">Products</span>
											</a>
										</li>
										<li class="js-nav-item menu-item " data-entity-type-id="taxonomy_term" data-entity-id="780" data-alias="clinicians" data-once="nobelProductsFilterBehavior">
											<a class="js-link-item menu-link center-align" href="">
												<span class="menu-link--text">Clinicians</span>
											</a>
										</li>
									</ul>
								</nav>

							</div>
							<div class="filter-level-2">

							</div>
							<div class="filter-tags--wrapper">
								<div class="amount-results">
									<p>
										Showing <span class="amount-results--filtered">39</span> of          <span class="amount-results--total">39</span>
									</p>
								</div>
								<div class="filter-level-3">

								</div>
								<div class="filter-reset" style="display: none;">
									<a href="/en-int/clinical-cases">Show all filters</a>
								</div>
							</div>
						</div>
						-->
						<div class="cards-wrapper">
							<div class="cards">
								<div class="cards-list">

									<?php

									$count = 0;
									while ( have_posts() ) :
										the_post();


										$count++;
										// Выведите содержимое каждой записи в соответствии с вашими потребностями
										?>


										<div class="card">
											<div class="product-detail">
												<div class="card-img">
													<div class="field--name-field-shared-teaser-image field--type-entity-reference field--label-hidden">
														<div>
															<div class="field--name-field-media-image field--type-image field--label-hidden">
																<?php
																$post_id = get_the_ID();
																$thumbnail_url = get_the_post_thumbnail_url( $post_id, 'full' );
																echo '<img src="' . $thumbnail_url . '" loading="lazy" decoding="async" width="440" height="280" alt="'. get_the_title() .'">';
																?>
															</div>
														</div>
													</div>
												</div>
												<div class="card-text">
													<h2 class="card-title h4 bold">
														<a class="card-link" href="<?php echo get_permalink(); ?>" title="<?php the_title() ?>">
															<span><?php the_title() ?></span>
														</a>
													</h2>
													<div class="card-description">
														<div class="field--name-field-shared-teaser-content field--type-text-long field--label-hidden">
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

										</div>

										<?php

										if ($count == 6) {
											$page_id = 323;
											$page_content = get_post($page_id);
											if ($page_content) {
												echo apply_filters('the_content', $page_content->post_content);
											}
										}

									endwhile;


									the_posts_pagination();

									else :

										// Если нет записей, удовлетворяющих вашим условиям

									endif;
									?>



								</div>
							</div>

						</div>

					</div>
				</div>
			</section>
		</div>
	</div>
</main>
<?php get_footer(); ?>
