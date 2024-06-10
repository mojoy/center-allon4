<?php

/**
 * Template Name: home
 * @subpackage centr-allon4
 */

get_header(); ?>
<main class="main-content inner">
	<div class="main-content-inner">
		<?php
		$post_id = 27;
		$field_value = get_field('section1', $post_id);
		if ($field_value) {
			echo $field_value;
		} else {
			echo 'Значение section1 не найдено';
		}
		?>




		<!-- section smile -->
		<div class="pb">
			<div class="s-survey">
				<div class="s-survey-inner">
					<div class="survey__top">
						<div class="h3 survey__top-title">
							Решение сложных случаев отсутствия зубов.
							Пройдите простой опрос – найдем авторизованный центр Nobel Biocare в вашем городе.
						</div>
					</div>
					<div class="survey__content">
						<div class="row">
							<div class="grid-4 grid-12_l survey__content-left">
								<div class="st-box">
									<div class="st-box__title">
										Ответьте на
										<span class="st-box__title-text">3 вопроса</span>
										и получите СРАЗУ
									</div>
									<div class="st-list row">
										<div class="grid-12 grid-6_l grid-12_s">
											<div class="st-list__item">
												<img src="<?php bloginfo('template_url'); ?>/css/icons/icon-search.svg" width="612" height="612" alt="Расчет стоимости и план лечения" class="st-list__img"  loading="lazy" decoding="async">
												<div class="st-list__item-text">Подберем экспертов именно под ваш случай</div>
											</div>
										</div>
										<div class="grid-12 grid-6_l grid-12_s">
											<div class="st-list__item">
												<img src="<?php bloginfo('template_url'); ?>/img/NB_Logo_13mm+_02.webp" width="77" height="65" alt="КТ-снимок в подарок!" class="st-list__img st-list__img--1"  loading="lazy" decoding="async">
												<div class="st-list__item-text">Запишем на бесплатную консультацию к сертифицированным специалистам</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="grid-8 grid-12_l survey__content-right">
								<!--
								<form action="/otzivi_o_stomatologii/" method="post" class="survey-form">
									<fieldset>
										<div class="sf-input-group step1" role="radiogroup" rel="step-1">
											<div class="h3 survey__title">Какая у вас ситуация?</div>
											<div class="row img-select__container">
												<div class="grid-4 grid-12_s">
													<input id="custom1" type="radio" class="img-select__radio" name="survey" checked="checked" value="Нет 1-2 зубов">
													<label for="custom1" class="img-select-box" name="select" title="Нет 1-2 зубов">
														<div class="img-select__images">
															<img class="img-select__img" src="https://smile-at-once.ru/data/teeth_new/img/survey/etap-1-1.webp" loading="lazy" alt="Нет 1-2 зубов" width="653" height="450">
															<div class="img-select__indicator"></div>
														</div>
														<span class="img-select__label">Нет 1-2 зубов</span>
													</label>
												</div>
												<div class="grid-4 grid-12_s">
													<input id="custom2" type="radio" class="img-select__radio" name="survey" value="Нет части зубов">
													<label for="custom2" class="img-select-box" name="select" title="Нет части зубов">
														<div class="img-select__images">
															<img class="img-select__img" src="https://smile-at-once.ru/data/teeth_new/img/survey/etap-1-2.webp" loading="lazy" alt="Нет больше 4 зубов" width="653" height="450">
															<div class="img-select__indicator"></div>
														</div>
														<span class="img-select__label">Нет части зубов</span>
													</label>
												</div>
												<div class="grid-4 grid-12_s">
													<input id="custom3" type="radio" class="img-select__radio" name="survey" value="Нет почти всех зубов">
													<label for="custom3" class="img-select-box" name="select" title="Нет почти всех зубов">
														<div class="img-select__images">
															<img class="img-select__img" src="https://smile-at-once.ru/data/teeth_new/img/survey/etap-1-3.webp" loading="lazy" alt="Нет почти всех зубов" width="653" height="450">
															<div class="img-select__indicator"></div>
														</div>
														<span class="img-select__label">Нет почти всех зубов</span>
													</label>
												</div>
											</div>
										</div>
										<div class="sf-input-group step2" role="radiogroup" rel="step-2" style="display: none;">
											<div class="h3 survey__title">На какой челюсти у вас нет зубов?</div>
											<div class="row img-select__container">
												<div class="grid-4 grid-12_s">
													<input id="custom11" type="radio" class="img-select__radio" name="survey1" checked="checked" value="Острая атрофия кости">
													<label for="custom11" class="img-select-box" name="select" title="Острая атрофия кости">
														<div class="img-select__images">
															<img class="img-select__img" src="https://smile-at-once.ru/data/teeth_new/img/survey/etap2-verh.webp" loading="lazy" alt="Острая атрофия кости" width="653" height="450">
															<div class="img-select__indicator"></div>
														</div>
														<span class="img-select__label">Острая атрофия кости</span>
													</label>
												</div>
												<div class="grid-4 grid-12_s">
													<input id="custom22" type="radio" class="img-select__radio" name="survey1" value="Сахарный диабет, пародонтит и др. заболевания">
													<label for="custom22" class="img-select-box" name="select" title="Сахарный диабет, пародонтит и др. заболевания">
														<div class="img-select__images">
															<img class="img-select__img" src="https://smile-at-once.ru/data/teeth_new/img/survey/etap2-niz.webp" loading="lazy" alt="Сахарный диабет, пародонтит и др. заболевания" width="653" height="450">
															<div class="img-select__indicator"></div>
														</div>
														<span class="img-select__label">Сахарный диабет, пародонтит и др. заболевания</span>
													</label>
												</div>
												<div class="grid-4 grid-12_s">
													<input id="custom33" type="radio" class="img-select__radio" name="survey1" value="Отказали в имплантации зубов">
													<label for="custom33" class="img-select-box" name="select" title="Отказали в имплантации зубов">
														<div class="img-select__images">
															<img class="img-select__img" src="https://smile-at-once.ru/data/teeth_new/img/survey/etap2-verh+niz.webp" loading="lazy" alt="Отказали в имплантации зубов" width="653" height="450">
															<div class="img-select__indicator"></div>
														</div>
														<span class="img-select__label">Отказали в имплантации зубов</span>
													</label>
												</div>
											</div>
										</div>
										<div class="sf-input-group step3" role="radiogroup" rel="step-3" style="display: none;">
											<div class="h3 survey__title">Как давно отсутствуют зубы?</div>
											<div class="row img-select__container">
												<div class="grid-4 grid-12_s">
													<input id="custom111" type="radio" class="img-select__radio" name="survey2" checked="checked" value="Меньше 6 месяцев">
													<label for="custom111" class="img-select-box" name="select" title="Меньше 6 месяцев">
														<div class="img-select__images">
															<img class="img-select__img" src="https://smile-at-once.ru/data/teeth_new/img/survey/etap3-1.webp" loading="lazy" alt="Меньше 6 месяцев" width="653" height="450">
															<div class="img-select__indicator"></div>
														</div>
														<span class="img-select__label">Меньше 6 месяцев</span>
													</label>
												</div>
												<div class="grid-4 grid-12_s">
													<input id="custom222" type="radio" class="img-select__radio" name="survey2" value="Год и более">
													<label for="custom222" class="img-select-box" name="select" title="Год и более">
														<div class="img-select__images">
															<img class="img-select__img" src="https://smile-at-once.ru/data/teeth_new/img/survey/etap3-2.webp" loading="lazy" alt="Год и более" width="653" height="450">
															<div class="img-select__indicator"></div>
														</div>
														<span class="img-select__label">Год и более</span>
													</label>
												</div>
												<div class="grid-4 grid-12_s">
													<input id="custom333" type="radio" class="img-select__radio" name="survey2" value="Очень давно">
													<label for="custom333" class="img-select-box" name="select" title="Очень давно">
														<div class="img-select__images">
															<img class="img-select__img" src="https://smile-at-once.ru/data/teeth_new/img/survey/etap3-3.webp" loading="lazy" alt="Очень давно" width="653" height="450">
															<div class="img-select__indicator"></div>
														</div>
														<span class="img-select__label">Очень давно</span>
													</label>
												</div>
											</div>
										</div>
										<div class="sf-input-group step4" style="display: none;" rel="step-4">
											<div class="h3">Мы уже ищем экспертов для решения вашего случая.</div>
											<div style="margin-bottom:10px;">Оставьте номер телефона, чтобы получить расчет стоимости и узнать варианты лечения.</div>
											<div class="vertical-form form-all survey-form-inputs">
												<div class="row">
													<div class="grid-6 grid-12_s">
														<label for="user_name" style="display: none">Введите имя</label>
														<span><input type="text" id="user_name" name="user_name" placeholder="Введите имя*" class="input-text input-text-first_name"></span>
													</div>
													<div class="grid-6 grid-12_s">
														<label for="phone_callback" style="display: none">Введите телефон</label>
														<span><input type="tel" id="phone_callback" name="phone" placeholder="Введите телефон*" class="input-text input-text-phone" maxlength="17"></span>
													</div>
												</div>
												<button type="submit" class="action action__button" aria-label="Отправить форму" rel="callback">Отправить</button>
												<label class="style-check-ios style-check-ios--small">
													<input type="checkbox" name="user_policy" class="user_policy" value="yes" checked="">
													<span>Соглашаюсь на&nbsp;обработку персональных данных и&nbsp;с&nbsp;<a href="/soglashenie-na-obrabotku-personalnyh-dannyh.html">условиями политики конфиденциальности</a></span>
												</label>
											</div>
										</div>
										<div class="sf-input-group success" style="display: none;">
											<div class="h3 survey__title">Уже звоним вам!</div>
											<div class="h4 survey__sub-title">Получите ваши подарки и бонусы!</div>
											<div class="row row--success">
												<div class="grid-4 grid-6_s">
													<div class="st-list__item">
														<div class="row--success-img">
															<img src="https://smile-at-once.ru/data/teeth_new/img/survey/img1.webp" loading="lazy" alt="Расчет стоимости и план лечения" width="600" height="475" class="st-list__img" >
														</div>
														<div class="st-list__item-text">Расчет стоимости и план лечения</div>
													</div>
												</div>
												<div class="grid-4 grid-6_s">
													<div class="st-list__item">
														<div class="row--success-img">
															<img src="https://smile-at-once.ru/data/teeth_new/img/survey/img2.webp" loading="lazy" alt="КТ-снимок в подарок! Сэкономь" width="600" height="475" class="st-list__img" >
														</div>
														<div class="st-list__item-text">КТ-снимок в подарок! Сэкономь <span class="st-list__mark">5000р</span></div>
													</div>
												</div>
												<div class="grid-4 grid-12_s grid--success-book">
													<div class="row--success-img row--success-img-book">
														<img src="https://smile-at-once.ru/data/teeth_new/img/survey/img-book.webp" loading="lazy" alt="Брошюра" width="600" height="600" class="st-list__img st-list__img-book" >
													</div>
													<div class="st-list__item-text">Брошюра, что входит в бесплатную консультацию</div>
													<a href="https://smile-at-once.ru/pdf/pk.pdf" target="_blank" title="Скачать брошюру" class="button success--button">Скачать</a>
												</div>
											</div>
										</div>
										<div class="survey-buttons">
											<button type="button" class="action action__button action__with-arrow2 action__none survey-button--prev button--disabled" title="Назад">Назад</button>
											<button type="button" class="action action__button action__with-arrow action__none survey-button--next" title="Дальше">Дальше</button>
										</div>
									</fieldset>
								</form>
								-->

								<?php
								echo do_shortcode('[contact-form-7 id="cafc125" title="опрос"]');
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<section class="section-swiper-slider default-background paragraph paragraph--type--products-overview paragraph--view-mode--default">
				<div class="paragraph-header paragraph-header--center">
					<div class="wysiwyg">
						<h2>All-on-4 – решение для любых клинических ситуаций.</h2>
					</div>
				</div>
				<div class="swiper-slider__wrapper">
					<div class="photo-gallery swiper-container">
						<div class="swiper-wrapper">
							<?php
							$args = array(
								'orderby'          => 'post_date',
								'order'            => 'DESC',
								'post_type'        => 'works',
								'post_status'      => 'publish',
								'posts_per_page'	=> 6,
							);
							$pc_new = new WP_Query($args);
							if ( $pc_new->have_posts() ) :
								while ($pc_new->have_posts()) : $pc_new->the_post();
									$url = get_field('link_youtube');
							?>
							<div class="swiper-slide price-faq-slider-thumb">
								<a href="<?php echo $url ? esc_url($url) : get_permalink(); ?>" class="<?php echo $url ? 'lp-head-trigger fancy-video' : 'lp-head-trigger'; ?>">
									<?php
									$post_id = get_the_ID();
									$thumbnail_url = get_the_post_thumbnail_url( $post_id, 'thumbnail' );
									echo '<img src="' . $thumbnail_url . '" width="440" height="248" alt="'. get_the_title() .'" loading="lazy" decoding="async">';
									?>
									<div class="price-faq-slider__text">
										<div class="price-faq-slider__title">Клинический случай</div>
										<p><?php the_title() ?></p>
										<?php if ($url): ?>
											<button type="button" title="Подробный отзыв пациентки" class="price-faq-slider__btn link-arrow">Смотреть видеоотзыв <span class="i i-ar-right">&nbsp;</span></button>
										<?php else: ?>
											<button type="button" title="Смотреть больше" class="price-faq-slider__btn link-arrow">Смотреть больше <span class="i i-ar-right">&nbsp;</span></button>
										<?php endif; ?>
									</div>
									</a>
								</div>
							<?php endwhile;
							else: ?>
								<p style="color: #ED1C24;font-size: 25px;">Извините, нет записей, удовлетворяющих вашим условиям.</p>
							<?php endif; ?>
						</div>
					</div>
					<div class="slider-arrow slider-arrow--prev"><span class="i i-left">&nbsp;</span></div>
					<div class="slider-arrow slider-arrow--next"><span class="i i-right">&nbsp;</span></div>
				</div>
				<nav class="all-works" role="navigation" aria-labelledby="pagination-heading">
					<a class="all-works__btn" href="/works/" title="Посмотреть все случаи">Посмотреть все случаи</a>
				</nav>
			</section>
		</div>

		<!--// section smile -->

		<div>
			<div class="page-wrapper wrapper page-pdf">
				<div class="page-content content sections ">

					<section class="default-background paragraph paragraph--type--products-overview paragraph--view-mode--default">
						<div class="spacing-all top-padding-default bottom-padding-default">
							<div class="paragraph-header paragraph-header--center">
								<div class="wysiwyg">
									<h2>Найти нужное решение — просто.</h2>
									<p>Узнайте больше о возможностях использования продукции Nobel Biocare в зависимости от показаний, типа продукции или цифрового решения.</p>
								</div>
							</div>
							<div class="products-overview">
								<!--
								<div class="filters">
									<div class="filter-level-1">
										<nav>
											<h2 class="visually-hidden"></h2>
											<ul class="menu">
												<li class="js-nav-item menu-item ">
													<a class="js-link-item menu-link center-align" href="">
														<span class="menu-link--text">Показания</span>
													</a>
												</li>
												<li class="js-nav-item menu-item ">
													<a class="js-link-item menu-link center-align" href="">
														<span class="menu-link--text">Продукты</span>
													</a>
												</li>
												<li class="js-nav-item menu-item ">
													<a class="js-link-item menu-link center-align" href="">
														<span class="menu-link--text">Цифровые решения</span>
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
												Показано <span class="amount-results--filtered">18</span> из          <span class="amount-results--total">18</span>
											</p>
										</div>
										<div class="filter-level-3">

										</div>
										<div class="filter-reset" style="display: none;">
											<a href="#">Показать все фильтры</a>
										</div>
									</div>
								</div>
								-->
								<div class="cards-wrapper">
									<div class="cards">
										<ul class="cards-list">
											<li class="card">
												<div class="product-detail">
													<div class="card-img">
														<div class="field--name-field-shared-teaser-image field--type-entity-reference field--label-hidden">
															<div>
																<div class="field--name-field-media-image field--type-image field--label-hidden">
																	<img src="<?php bloginfo('template_url'); ?>/img/photo/all-on-4-method.webp" srcset="<?php bloginfo('template_url'); ?>/img/photo/all-on-4-method-640.webp" width="1400" height="800" alt="Концепция лечения All-on-4®"  loading="lazy" decoding="async" class="image">
																</div>
															</div>
														</div>
													</div>
													<div class="card-text">
														<h2 class="card-title h4 bold">
															<a class="card-link" href="#">
																<span>Концепция лечения All-on-4®</span>
															</a>
														</h2>
														<div class="card-description">
															<div class="field--name-field-shared-teaser-content field--type-text-long field--label-hidden">
																<p>Самый исследованный метод восстановления всех зубов с историей больше 25 лет.</p>
															</div>
														</div>
													</div>
												</div>
											</li>
											<li class="card">
												<div class="product-detail">
													<div class="card-img">
														<div class="field--name-field-shared-teaser-image field--type-entity-reference field--label-hidden">
															<div>
																<div class="field--name-field-media-image field--type-image field--label-hidden">
																	<img src="<?php bloginfo('template_url'); ?>/img/photo/all-on-4-ultra-method.webp" srcset="<?php bloginfo('template_url'); ?>/img/photo/all-on-4-ultra-method-640.webp" width="1400" height="800" alt="Концепция лечения All-on-4® ultra"  loading="lazy" decoding="async" class="image">
																</div>
															</div>
														</div>
													</div>
													<div class="card-text">
														<h2 class="card-title h4 bold">
															<a class="card-link" href="#">
																<span>Концепция лечения All-on-4® ultra</span>
															</a>
														</h2>
														<div class="card-description">
															<div class="field--name-field-shared-teaser-content field--type-text-long field--label-hidden">
																<p>Традиционный метод на имплантах с поверхностью Xeal™ и TiUltra™.</p>
															</div>
														</div>
													</div>
												</div>
											</li>
											<li class="card">
												<div class="product-detail">
													<div class="card-img">
														<div class="field--name-field-shared-teaser-image field--type-entity-reference field--label-hidden">
															<div>
																<div class="field--name-field-media-image field--type-image field--label-hidden">
																	<img src="<?php bloginfo('template_url'); ?>/img/photo/Nobel-methods.webp" srcset="<?php bloginfo('template_url'); ?>/img/photo/Nobel-methods-640.webp" width="1400" height="800" alt="Лечение, которое меняет жизнь"  loading="lazy" decoding="async" class="image">
																</div>
															</div>
														</div>
													</div>
													<div class="card-text">
														<h2 class="card-title h4 bold">
															<a class="card-link" href="#">
																<span>Лечение, которое меняет жизнь</span>
															</a>
														</h2>
														<div class="card-description">
															<div class="field--name-field-shared-teaser-content field--type-text-long field--label-hidden">
																<p>Новая улыбка за 1-3 дня. Международная гарантия на импланты и работу.</p>
															</div>
														</div>
													</div>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</section>

					<?php

					// banner @348@

					$page_id = 348;
					$page_content = get_post($page_id);
					if ($page_content) {
						echo apply_filters('the_content', $page_content->post_content);
					}



					?>




					<div class="spacing-all top-padding-default bottom-padding-default gallery-slider pb s-doctor-slider">
						<div class="paragraph-header paragraph-header--center">
							<div class="wysiwyg">
								<h2>Команда экспертов в области сложного восстановления зубов с использованием Nobel Biocare</h2>
							</div>
						</div>
						<div class="swiper-slider__wrapper">
							<div class="doctor-slider swiper-container">
								<div class="swiper-wrapper">
									<div class="swiper-slide">

										<div class="doctor-slider__item">
											<a href="https://smile-at-once.ru/doctors/zhilenko-evgenij-aleksandrovich.html" target="_blank" rel="noopener" class="doctor-slider__link">
												<img src="https://centr-allon4.ru/wp-content/uploads/2023/09/zhilenko-exp.webp" width="300" height="300" alt="Евгений Жиленко" class="doctor-slider__img" loading="lazy" decoding="async">
												<div class="doctor-slider__name">Евгений Жиленко</div>
												<div class="doctor-slider__job">челюстно-лицевой хирург, имплантолог</div>
											</a>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="doctor-slider__item">
											<a href="https://smile-at-once.ru/doctors/vasiliev-aleksandr-aleksandrovich.html" target="_blank" rel="noopener" class="doctor-slider__link">
												<img src="https://centr-allon4.ru/wp-content/uploads/2023/09/vasiliev-exp.webp" width="300" height="300" alt="Александр Васильев" class="doctor-slider__img" loading="lazy" decoding="async">
												<div class="doctor-slider__name">Александр Васильев</div>
												<div class="doctor-slider__job">хирург-имплантолог</div>
											</a>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="doctor-slider__item">

											<img src="https://centr-allon4.ru/wp-content/uploads/2023/09/kurochkin-exp.webp" width="300" height="300" alt="Максим Копылов" class="doctor-slider__img" loading="lazy" decoding="async">
											<div class="doctor-slider__name">Константин Курочкин</div>
											<div class="doctor-slider__job">Стоматолог-ортопед</div>

										</div>
									</div>
									<div class="swiper-slide">
										<div class="doctor-slider__item">
											<a href="https://smile-at-once.ru/doctors/chernov-andrej-rastislavovich.html" target="_blank" rel="noopener" class="doctor-slider__link">
												<img src="https://centr-allon4.ru/wp-content/uploads/2023/09/chernov-exp.webp" width="300" height="300" alt="Андрей Чернов" class="doctor-slider__img" loading="lazy" decoding="async">
												<div class="doctor-slider__name">Андрей Чернов</div>
												<div class="doctor-slider__job">стоматолог-ортопед</div>
											</a>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="doctor-slider__item">
											<a href="https://smile-at-once.ru/doctors/viktorenko-artem-yurievich.html" target="_blank" rel="noopener" class="doctor-slider__link">
												<img src="https://centr-allon4.ru/wp-content/uploads/2023/09/viktorenko-exp.webp" width="300" height="300" alt="Артем Викторенко" class="doctor-slider__img" loading="lazy" decoding="async">
												<div class="doctor-slider__name">Артем Викторенко</div>
												<div class="doctor-slider__job">хирург-имплантолог</div>
											</a>
										</div>

									</div>
								</div>
							</div>
							<div class="slider-arrow slider-arrow--prev"><span class="i i-left">&nbsp;</span></div>
							<div class="slider-arrow slider-arrow--next"><span class="i i-right">&nbsp;</span></div>
						</div>
						<nav class="all-works" role="navigation">
							<a class="all-works__btn" href="/eksperty-all-on-4/" title="Все врачи">Все врачи</a>
						</nav>
					</div>

					<?php
					// banner @search expert@

					$page_id = 328;
					$page_content = get_post($page_id);
					if ($page_content) {
						echo apply_filters('the_content', $page_content->post_content);
					}
					?>

					<div class="spacing-all top-padding-default bottom-padding-default gallery-slider pb">
						<div class="paragraph-header paragraph-header--center">
							<div class="wysiwyg">
								<h2>Все авторизованные эксперты Центров all-on-4® проходят регулярное обучение в Nobel Biocare</h2>
							</div>
						</div>
						<div class="swiper-slider__wrapper">
							<div class="photo-gallery swiper-container">
								<div class="swiper-wrapper">
                           <div class="swiper-slide">
                              <a href="<?php bloginfo('template_url'); ?>/img/photo-gallery-main/centr-dlya-allon4.webp" data-fancybox="photo-gallery-main" title="Обучение"><img src="<?php bloginfo('template_url'); ?>/img/photo-gallery-main/centr-dlya-allon4.webp" srcset="<?php bloginfo('template_url'); ?>/img/photo-gallery-main/centr-dlya-allon4.webp" width="800" height="460" alt="Обучение" class="gallery-slider__img" loading="lazy" decoding="async"></a>
                           </div>
									<div class="swiper-slide">
										<a href="<?php bloginfo('template_url'); ?>/img/photo-gallery-main/obuchenie-chernov-1.webp" data-fancybox="photo-gallery-main" title="Обучение"><img src="<?php bloginfo('template_url'); ?>/img/photo-gallery-main/obuchenie-chernov-1.webp" srcset="<?php bloginfo('template_url'); ?>/img/photo-gallery-main/obuchenie-chernov-1-640.webp" width="800" height="460" alt="Обучение" class="gallery-slider__img" loading="lazy" decoding="async"></a>
									</div>
									<div class="swiper-slide">
										<a href="<?php bloginfo('template_url'); ?>/img/photo-gallery-main/obuchenie-chernov-2.webp" data-fancybox="photo-gallery-main" title="Обучение"><img src="<?php bloginfo('template_url'); ?>/img/photo-gallery-main/obuchenie-chernov-2.webp" srcset="<?php bloginfo('template_url'); ?>/img/photo-gallery-main/obuchenie-chernov-2-640.webp" width="800" height="460" alt="Обучение" class="gallery-slider__img" loading="lazy" decoding="async"></a>
									</div>
									<div class="swiper-slide">
										<a href="<?php bloginfo('template_url'); ?>/img/photo-gallery-main/obuchenie-chernov-3.webp" data-fancybox="photo-gallery-main" title="Обучение"><img src="<?php bloginfo('template_url'); ?>/img/photo-gallery-main/obuchenie-chernov-3.webp" srcset="<?php bloginfo('template_url'); ?>/img/photo-gallery-main/obuchenie-chernov-3-640.webp" width="800" height="460" alt="Обучение" class="gallery-slider__img" loading="lazy" decoding="async"></a>
									</div>
									<div class="swiper-slide">
										<a href="<?php bloginfo('template_url'); ?>/img/photo-gallery-main/obuchenie-namdakov-2.webp" data-fancybox="photo-gallery-main" title="Обучение"><img src="<?php bloginfo('template_url'); ?>/img/photo-gallery-main/obuchenie-namdakov-2.webp" srcset="<?php bloginfo('template_url'); ?>/img/photo-gallery-main/obuchenie-namdakov-2-640.webp" width="800" height="460" alt="Обучение" class="gallery-slider__img" loading="lazy" decoding="async"></a>
									</div>
									<div class="swiper-slide">
										<a href="<?php bloginfo('template_url'); ?>/img/photo-gallery-main/obuchenie-namdakov-3.webp" data-fancybox="photo-gallery-main" title="Обучение"><img src="<?php bloginfo('template_url'); ?>/img/photo-gallery-main/obuchenie-namdakov-3.webp" srcset="<?php bloginfo('template_url'); ?>/img/photo-gallery-main/obuchenie-namdakov-3-640.webp" width="800" height="460" alt="Обучение" class="gallery-slider__img" loading="lazy" decoding="async"></a>
									</div>
									<div class="swiper-slide">
										<a href="<?php bloginfo('template_url'); ?>/img/photo-gallery-main/obuchenie-name-1.webp" data-fancybox="photo-gallery-main" title="Обучение"><img src="<?php bloginfo('template_url'); ?>/img/photo-gallery-main/obuchenie-name-1.webp" srcset="<?php bloginfo('template_url'); ?>/img/photo-gallery-main/obuchenie-name-1-640.webp" width="800" height="460" alt="Обучение" class="gallery-slider__img" loading="lazy" decoding="async"></a>
									</div>
									<div class="swiper-slide">
										<a href="<?php bloginfo('template_url'); ?>/img/photo-gallery-main/obuchenie-sambuev-1.webp" data-fancybox="photo-gallery-main" title="Обучение"><img src="<?php bloginfo('template_url'); ?>/img/photo-gallery-main/obuchenie-sambuev-1.webp" srcset="<?php bloginfo('template_url'); ?>/img/photo-gallery-main/obuchenie-sambuev-1-640.webp" width="800" height="460" alt="Обучение" class="gallery-slider__img" loading="lazy" decoding="async"></a>
									</div>
									<div class="swiper-slide">
										<a href="<?php bloginfo('template_url'); ?>/img/photo-gallery-main/obuchenie-vasiliev-2.webp" data-fancybox="photo-gallery-main" title="Обучение"><img src="<?php bloginfo('template_url'); ?>/img/photo-gallery-main/obuchenie-vasiliev-2.webp" srcset="<?php bloginfo('template_url'); ?>/img/photo-gallery-main/obuchenie-vasiliev-2-640.webp" width="800" height="460" alt="Обучение" class="gallery-slider__img" loading="lazy" decoding="async"></a>
									</div>
									<div class="swiper-slide">
										<a href="<?php bloginfo('template_url'); ?>/img/photo-gallery-main/obuchenie-vasiliev-3.webp" data-fancybox="photo-gallery-main" title="Обучение"><img src="<?php bloginfo('template_url'); ?>/img/photo-gallery-main/obuchenie-vasiliev-3.webp" srcset="<?php bloginfo('template_url'); ?>/img/photo-gallery-main/obuchenie-vasiliev-3-640.webp" width="800" height="460" alt="Обучение" class="gallery-slider__img" loading="lazy" decoding="async"></a>
									</div>
									<div class="swiper-slide">
										<a href="<?php bloginfo('template_url'); ?>/img/photo-gallery-main/obuchenie-vasiliev-4.webp" data-fancybox="photo-gallery-main" title="Обучение"><img src="<?php bloginfo('template_url'); ?>/img/photo-gallery-main/obuchenie-vasiliev-4.webp" srcset="<?php bloginfo('template_url'); ?>/img/photo-gallery-main/obuchenie-vasiliev-4-640.webp" width="800" height="460" alt="Обучение" class="gallery-slider__img" loading="lazy" decoding="async"></a>
									</div>
									<div class="swiper-slide">
										<a href="<?php bloginfo('template_url'); ?>/img/photo-gallery-main/obuchenie-yurkevich-1.webp" data-fancybox="photo-gallery-main" title="Обучение"><img src="<?php bloginfo('template_url'); ?>/img/photo-gallery-main/obuchenie-yurkevich-1.webp" srcset="<?php bloginfo('template_url'); ?>/img/photo-gallery-main/obuchenie-yurkevich-1-640.webp" width="800" height="460" alt="Обучение" class="gallery-slider__img" loading="lazy" decoding="async"></a>
									</div>
									<div class="swiper-slide">
										<a href="<?php bloginfo('template_url'); ?>/img/photo-gallery-main/obuchenie-zhilenko-1.webp" data-fancybox="photo-gallery-main" title="Обучение"><img src="<?php bloginfo('template_url'); ?>/img/photo-gallery-main/obuchenie-zhilenko-1.webp" srcset="<?php bloginfo('template_url'); ?>/img/photo-gallery-main/obuchenie-zhilenko-1-640.webp" width="800" height="460" alt="Обучение" class="gallery-slider__img" loading="lazy" decoding="async"></a>
									</div>
									<div class="swiper-slide">
										<a href="<?php bloginfo('template_url'); ?>/img/photo-gallery-main/obuchenie-zhilenko-2.webp" data-fancybox="photo-gallery-main" title="Обучение"><img src="<?php bloginfo('template_url'); ?>/img/photo-gallery-main/obuchenie-zhilenko-2.webp" srcset="<?php bloginfo('template_url'); ?>/img/photo-gallery-main/obuchenie-zhilenko-2-640.webp" width="800" height="460" alt="Обучение" class="gallery-slider__img" loading="lazy" decoding="async"></a>
									</div>
								</div>
							</div>
							<div class="slider-arrow slider-arrow--prev"><span class="i i-left">&nbsp;</span></div>
							<div class="slider-arrow slider-arrow--next"><span class="i i-right">&nbsp;</span></div>
						</div>
					</div>

					<section class="default-background paragraph paragraph--type--products-overview paragraph--view-mode--default">
						<div class="spacing-all top-padding-default bottom-padding-default">


							<div class="products-overview">
								<!--
								<div class="filters">
									<div class="filter-level-1">
										<nav>
											<h2 class="visually-hidden"></h2>
											<ul class="menu">
												<li class="js-nav-item menu-item " data-alias="pokazaniya" data-once="nobelProductsFilterBehavior">
													<a class="js-link-item menu-link center-align" href="">
														<span class="menu-link--text">Показания</span>
													</a>
												</li>
												<li class="js-nav-item menu-item " data-alias="produkty" data-once="nobelProductsFilterBehavior">
													<a class="js-link-item menu-link center-align" href="">
														<span class="menu-link--text">Продукты</span>
													</a>
												</li>
												<li class="js-nav-item menu-item " data-alias="cifrovye-resheniya" data-once="nobelProductsFilterBehavior">
													<a class="js-link-item menu-link center-align" href="">
														<span class="menu-link--text">Цифровые решения</span>
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
												Показано <span class="amount-results--filtered">18</span> из          <span class="amount-results--total">18</span>
											</p>
										</div>
										<div class="filter-level-3">

										</div>
										<div class="filter-reset" style="display: none;">
											<a href="#">Показать все фильтры</a>
										</div>
									</div>
								</div>
								-->
								<div class="cards-wrapper">
									<div class="cards">
										<ul class="cards-list">
											<li class="card">
												<div class="product-detail">
													<div class="card-img">
														<div class="field--name-field-shared-teaser-image field--type-entity-reference field--label-hidden">
															<div>
																<div class="field--name-field-media-image field--type-image field--label-hidden">
																	<img src="<?php bloginfo('template_url'); ?>/img/photo/zygoma-method.webp" srcset="<?php bloginfo('template_url'); ?>/img/photo/zygoma-method-640.webp" width="1400" height="800" alt="Скуловая имплантация NobelZygoma" loading="lazy" decoding="async" class="image">
																</div>
															</div>
														</div>
													</div>
													<div class="card-text">
														<h2 class="card-title h4 bold">
															<a class="card-link" href="#">
																<span>Скуловая имплантация NobelZygoma</span>
															</a>
														</h2>
														<div class="card-description">
															<div class="field--name-field-shared-teaser-content field--type-text-long field--label-hidden">
																<p>Концепция лечения для верхней челюсти без синус-лифтинга.</p>
															</div>
														</div>
													</div>
												</div>
											</li>
											<li class="card">
												<div class="product-detail">
													<div class="card-img">
														<div class="field--name-field-shared-teaser-image field--type-entity-reference field--label-hidden">
															<div>
																<div class="field--name-field-media-image field--type-image field--label-hidden">
																	<img src="<?php bloginfo('template_url'); ?>/img/photo/nobel-guide.webp" srcset="<?php bloginfo('template_url'); ?>/img/photo/nobel-guide-640.webp" width="808" height="458" alt="Концепция NobelGuide®" loading="lazy" decoding="async" class="image">
																</div>
															</div>
														</div>
													</div>
													<div class="card-text">
														<h2 class="card-title h4 bold">
															<a class="card-link" href="#">
																<span>Концепция NobelGuide®</span>
															</a>
														</h2>
														<div class="card-description">
															<div class="field--name-field-shared-teaser-content field--type-text-long field--label-hidden">
																<p>Навигационные системы для точной установки имплантов.</p>
															</div>
														</div>
													</div>
												</div>
											</li>
											<li class="card">
												<div class="product-detail">
													<div class="card-img">
														<div class="field--name-field-shared-teaser-image field--type-entity-reference field--label-hidden">
															<div>
																<div class="field--name-field-media-image field--type-image field--label-hidden">
																	<img src="<?php bloginfo('template_url'); ?>/img/photo/all-on-6-method.webp" srcset="<?php bloginfo('template_url'); ?>/img/photo/all-on-6-method-640.webp" width="1400" height="800" alt="Концепция лечения All-on-6" loading="lazy" decoding="async" class="image">
																</div>
															</div>
														</div>
													</div>
													<div class="card-text">
														<h2 class="card-title h4 bold">
															<a class="card-link" href="#">
																<span>Концепция лечения All-on-6</span>
															</a>
														</h2>
														<div class="card-description">
															<div class="field--name-field-shared-teaser-content field--type-text-long field--label-hidden">
																<p>6 имплантов для лучшей поддержки полного протеза в условиях атрофии.</p>
															</div>
														</div>
													</div>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</section>

					<!-- banner @search doctor@ -->
					<?php

					$page_id = 323;
					$page_content = get_post($page_id);
					if ($page_content) {
						echo apply_filters('the_content', $page_content->post_content);
					}

					?>






					<section class="default-background paragraph paragraph--type--products-overview paragraph--view-mode--default">
						<div class="spacing-all top-padding-default bottom-padding-default">
							<div class="products-overview">
								<!--
								<div class="filters">
									<div class="filter-level-1">
										<nav>
											<h2 class="visually-hidden"></h2>
											<ul class="menu">
												<li class="js-nav-item menu-item "   data-alias="pokazaniya" data-once="nobelProductsFilterBehavior">
													<a class="js-link-item menu-link center-align" href="">
														<span class="menu-link--text">Показания</span>
													</a>
												</li>
												<li class="js-nav-item menu-item "  data-alias="produkty" data-once="nobelProductsFilterBehavior">
													<a class="js-link-item menu-link center-align" href="">
														<span class="menu-link--text">Продукты</span>
													</a>
												</li>
												<li class="js-nav-item menu-item "  data-alias="cifrovye-resheniya" data-once="nobelProductsFilterBehavior">
													<a class="js-link-item menu-link center-align" href="">
														<span class="menu-link--text">Цифровые решения</span>
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
												Показано <span class="amount-results--filtered">18</span> из          <span class="amount-results--total">18</span>
											</p>
										</div>
										<div class="filter-level-3">

										</div>
										<div class="filter-reset" style="display: none;">
											<a href="#">Показать все фильтры</a>
										</div>
									</div>
								</div>
								-->
								<div class="cards-wrapper">
									<div class="cards">
										<ul class="cards-list">
											<li class="card">
												<div class="product-detail">
													<div class="card-img">
														<div class="field--name-field-shared-teaser-image field--type-entity-reference field--label-hidden">
															<div>
																<div class="field--name-field-media-image field--type-image field--label-hidden">
																	<img src="<?php bloginfo('template_url'); ?>/img/photo/v-ii-v-method.webp" srcset="<?php bloginfo('template_url'); ?>/img/photo/v-ii-v-method-640.webp" width="1400" height="800" alt="Имплантация V-II-V для верхней челюсти" loading="lazy" decoding="async" class="image">
																</div>
															</div>
														</div>
													</div>
													<div class="card-text">
														<h2 class="card-title h4 bold">
															<a href="#" class="card-link">Имплантация V-II-V для верхней челюсти</a>
														</h2>
														<div class="card-description">
															<div class="field--name-field-shared-teaser-content field--type-text-long field--label-hidden">
																<p>Решение для верхней челюсти в условиях атрофии кости в дистальных зонах.</p>
															</div>
														</div>
													</div>
												</div>
											</li>
											<li class="card">
												<div class="product-detail">
													<div class="card-img">
														<div class="field--name-field-shared-teaser-image field--type-entity-reference field--label-hidden">
															<div>
																<div class="field--name-field-media-image field--type-image field--label-hidden">
																	<img src="<?php bloginfo('template_url'); ?>/img/photo/transsinus-method.webp" srcset="<?php bloginfo('template_url'); ?>/img/photo/transsinus-method-640.webp" width="1400" height="800" alt="Трансинусальная установка имплантов" loading="lazy" class="image">
																</div>
															</div>
														</div>
													</div>
													<div class="card-text">
														<h2 class="card-title h4 bold">
															<a class="card-link" href="#">
																<span>Трансинусальная установка имплантов</span>
															</a>
														</h2>
														<div class="card-description">
															<div class="field--name-field-shared-teaser-content field--type-text-long field--label-hidden">
																<p>Решение для верхней челюсти в условиях атрофии кости и пневматизированных пазух.</p>
															</div>
														</div>
													</div>
												</div>
											</li>
											<li class="card">
												<div class="product-detail">
													<div class="card-img">
														<div class="field--name-field-shared-teaser-image field--type-entity-reference field--label-hidden">
															<div>
																<div class="field--name-field-media-image field--type-image field--label-hidden">
																	<img src="<?php bloginfo('template_url'); ?>/img/photo/all-on-6-method.webp" srcset="<?php bloginfo('template_url'); ?>/img/photo/all-on-6-method-640.webp" width="1400" height="800" alt="Трансназальная установка имплантов" loading="lazy" class="image">
																</div>
															</div>
														</div>
													</div>
													<div class="card-text">
														<h2 class="card-title h4 bold">
															<a class="card-link" href="#">
																<span>Трансназальная установка имплантов</span>
															</a>
														</h2>
														<div class="card-description">
															<div class="field--name-field-shared-teaser-content field--type-text-long field--label-hidden">
																<p>Решение для верхней челюсти в условиях недостатка кости в передней зоне.</p>
															</div>
														</div>
													</div>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</section>

				</div>
			</div>
		</div>
	</div>
</main>
<?php get_footer(); ?>
