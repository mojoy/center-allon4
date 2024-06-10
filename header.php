<?php
/**
 * Header Template
 * @subpackage centr-allon4
 */
?>
<!doctype html>
<html id="page-html" class="no-js" <?php language_attributes(); ?>>
<head>
   <link rel="preload" href="https://centr-allon4.ru/wp-content/themes/centr-allon4/fonts/icon-font/icon-font.woff?v11" as="font" type="font/woff2" crossorigin="anonymous">
   <link rel="preload" href="https://centr-allon4.ru/wp-content/themes/centr-allon4/fonts/smileicons.ttf?r6pot7" as="font" type="font/woff2" crossorigin="anonymous">
   <link rel="preload" href="https://fonts.gstatic.com/s/roboto/v18/KFOmCnqEu92Fr1Mu4mxKKTU1Kg.woff2" as="font" type="font/woff2" crossorigin="anonymous">
   <link rel="preload" href="https://fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmEU9fBBc4AMP6lQ.woff2" as="font" type="font/woff2" crossorigin="anonymous">
   <meta charset="<?php bloginfo('charset'); ?>"/>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="google-site-verification" content="3bo45A2XJZJEd5_JtC3nb4IHyL7nNCDjlUUMRbpeu3U" />
   <meta name="yandex-verification" content="b3a3da003726e2e5" />
   <link rel="icon" href="<?php bloginfo('template_url'); ?>/favicon/favicon.ico" type="image/vnd.microsoft.icon">
   <style>
      body {font-size: 21px;line-height: 1.5;}
      li {margin: 0 0 20px;}
      img {display: block;max-width: 100%;height: auto;}
      @media (max-width: 800px) { .main-content { padding-top: 115px; } }
      .swiper-container {overflow: hidden;}
   </style><?php if (strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome-Lighthouse') != true) { ?>
      <link rel="stylesheet" media="all" href="<?php bloginfo('template_url'); ?>/css/main.css?v=1" /><?php } ?>
   <?php wp_head(); ?>
</head>
<body id="page-body" <?php body_class(); ?>>
<header class="header">
   <div class="header__top-header">
      <div class="top-header">
         <div class="top-header__inner inner center-align">
            <div class="menu-collection">
               <div class="menu-collection__menu">
                  <div class="top-menu">
                     <nav class="top-menu__navigation">
                        <ul class="top-menu__list2">
                           <li class="top-menu__item">
                              <a class="top-menu__link top-menu__link--v1" title="Найти врача" href="/eksperty-all-on-4/">
                                 <span class="icon icon--doctor medium"></span>
                                 <span class="top-menu__text">Найти врача</span>
                              </a>
                           </li>
                           <li class="top-menu__item">
                              <a class="top-menu__link top-menu__link--v2 fancy-modal" href="#modal-callback" rel="nofollow" title="Видео консультация с экспертом">
                                 <span class="icon icon--video medium"></span>
                                 <span class="top-menu__text">Видео консультация с экспертом</span>
                              </a>
                           </li>
                           <li class="top-menu__item">
                              <a class="top-menu__link top-menu__link--v3" title="Частые вопросы" href="/chastye-voprosy/">
                                 <span class="icon icon--faq medium"></span>
                                 <span class="top-menu__text">Частые вопросы</span>
                              </a>
                           </li>
                           <li class="top-menu__item">
                              <a href="tel:88007071416" title="Звоните" class="top-menu__link top-menu__link--v4">
                                 <span class="icon icon--phone medium"></span>
                                 <span class="top-menu__text">8 (800) 707-14-16</span>
                              </a>
                           </li>
                        </ul>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="header__bottom-header">
      <div class="bottom-header__wrapper">
         <div class="bottom-header inner center-align">
            <a href="https://smile-at-once.ru/" title="" target="_blank" class="logo__smile">
               <img src="https://smile-at-once.ru/data/teeth_new/img/logo.svg" alt="Новые зубы и улыбка сразу" title="Новые зубы и улыбка сразу" width="183" height="40" class="top-panel__logo-pc" itemprop="logo image" loading="auto">
            </a>
            <a class="bottom-header__logo spacing" href="/">
               <img class="logo logo-large bottom-header__logo--desktop image" src="<?php bloginfo('template_url'); ?>/img/logo.svg" alt="<?php bloginfo('name')?>" loading="auto" />
               <img class="logo logo-medium bottom-header__logo--mobile image" src="<?php bloginfo('template_url'); ?>/img/logo-mobile.svg" alt="<?php bloginfo('name')?>" loading="auto" />
               <div class="visually-hidden">
                  Nobel Biocare
               </div>
            </a>

            <!--
				<div class="bottom-header__content">

					<div class="search">
						<button type="button" title="Поиск" class="button button--font-icon default search-action " >
							<i class="icon font-icon font-icon--search"></i>
							<span class="button__title">Поиск</span>
							<span class="visually-hidden">Поиск</span>
						</button>
					</div>

					<nb-sidebar-menu type="header-menu">
						<div class="header-menu">

							<button type="button" title="Меню" class="button button--default default header-menu__action invert " >
								<i class="icon  mobile-white "></i>
								<span class="button__title">Меню</span>
								<span class="visually-hidden">Меню</span>
							</button>

							<div class="sidebar-menu__overlay header-menu"></div>

							<div class="sidebar-menu header-menu " role="dialog" aria-modal="true">
								<div class="sidebar-menu__introduction center-align">
									<img class="logo logo-small sidebar-menu__introduction--logo image" src="https://www.nobelbiocare.com/themes/custom/nobel/logo-small.svg" alt="" />

									<button type="button" title="Close menu" class="button button--font-icon default button--round sidebar-menu__close-menu header-menu small" >
										<i class="icon font-icon font-icon--close  small"></i>
										<span class="visually-hidden">Close menu</span>
									</button>

								</div>
								<div class="sidebar-menu__content--wrapper">
									<div class="sidebar-menu__content">
										<nav>
											<ul class="sidebar-menu__items navigation-list">
												<li class="sidebar-menu__item">
													<a href="/nashi-preimushhestva/" class="sidebar-menu__link">Наши преимущества</a>

													<button type="button" title="View more" class="sidebar-menu__more default header-menu">
														<span class="visually-hidden">View more</span>
														<span class="icon medium more"></span>
													</button>

													<div class="sidebar-menu sidebar-menu-sub наши-преимущества-58706590 " role="dialog" aria-modal="true">
														<div class="sidebar-menu__introduction center-align">
															<img class="logo logo-small sidebar-menu__introduction--logo image" src="https://www.nobelbiocare.com/themes/custom/nobel/logo-small.svg" alt="" />

															<button type="button" title="Go back to previous menu" class="button button--font-icon default button--round sidebar-menu__close-current header-menu small" >
																<i class="icon font-icon font-icon--breadcrumb  small"></i>
																<span class="visually-hidden">Go back to previous menu</span>
															</button>
														</div>
														<div class="sidebar-menu__content--wrapper">
															<div class="sidebar-menu__content">
																<nb-breadcrumbs>
																	<div class="sidebar-menu-breadcrumbs">
																		<ul class="sidebar-menu-breadcrumbs__list center-align">
																			<li class="sidebar-menu-breadcrumbs__item">
																				<button type="button" class="sidebar-menu-breadcrumbs__link default" data-id="header-menu">
																					Меню
																				</button>
																				<span class="sidebar-menu-breadcrumbs__raquo"></span>
																			</li>
																			<li class="sidebar-menu-breadcrumbs__item">
																				<p class="sidebar-menu-breadcrumbs__item-last">Наши преимущества</p>
																			</li>
																		</ul>
																	</div>
																</nb-breadcrumbs>

																<h2 class="sidebar-menu__title h4 bold">Наши преимущества</h2>

																<?php
            wp_nav_menu( array(
               'theme_location'  => 'main-nav1',
               'menu_class'      => 'sidebar-menu__items navigation-list',
               'echo'            => true,
               'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
               'depth'           => 0,
               //'walker'          => new Sidebar_Walker_Nav_Menu() // Добавьте свой класс Walker, если необходимо
            ) );
            ?>

															</div>

														</div>
													</div>
												</li>
												<li class="sidebar-menu__item">
													<a href="/opisanie/" class="sidebar-menu__link">Клинические решения</a>

													<button type="button" title="View more" class="sidebar-menu__more default header-menu">
														<span class="visually-hidden">View more</span>
														<span class="icon medium more"></span>
													</button>

													<div class="sidebar-menu sidebar-menu-sub клинические-решения-44586438 " role="dialog" aria-modal="true">
														<div class="sidebar-menu__introduction center-align">
															<img class="logo logo-small sidebar-menu__introduction--logo image" src="https://www.nobelbiocare.com/themes/custom/nobel/logo-small.svg" alt="" />

															<button type="button" title="Go back to previous menu" class="button button--font-icon default button--round sidebar-menu__close-current header-menu small" >
																<i class="icon font-icon font-icon--breadcrumb  small"></i>
																<span class="visually-hidden">Go back to previous menu</span>
															</button>
														</div>
														<div class="sidebar-menu__content--wrapper">
															<div class="sidebar-menu__content">
																<nb-breadcrumbs>
																	<div class="sidebar-menu-breadcrumbs">
																		<ul class="sidebar-menu-breadcrumbs__list center-align">
																			<li class="sidebar-menu-breadcrumbs__item">
																				<button type="button" class="sidebar-menu-breadcrumbs__link default" data-id="header-menu">
																					Меню
																				</button>
																				<span class="sidebar-menu-breadcrumbs__raquo"></span>
																			</li>
																			<li class="sidebar-menu-breadcrumbs__item">
																				<p class="sidebar-menu-breadcrumbs__item-last">Клинические решения</p>
																			</li>
																		</ul>
																	</div>
																</nb-breadcrumbs>

																<h2 class="sidebar-menu__title h4 bold">Клинические решения</h2>

																<?php
            wp_nav_menu( array(
               'theme_location'  => 'main-nav2',
               'menu_class'      => 'sidebar-menu__items navigation-list',
               'echo'            => true,
               'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
               'depth'           => 0,
               //'walker'          => new Sidebar_Walker_Nav_Menu() // Добавьте свой класс Walker, если необходимо
            ) );
            ?>

															</div>

														</div>
													</div>
												</li>
												<li class="sidebar-menu__item">
													<a href="/laboratornye-resheniya" class="sidebar-menu__link">Лабораторные решения</a>

													<button type="button" title="View more" class="sidebar-menu__more default header-menu">
														<span class="visually-hidden">View more</span>
														<span class="icon medium more"></span>
													</button>

													<div class="sidebar-menu sidebar-menu-sub лабораторные-решения-42902813 " role="dialog" aria-modal="true">
														<div class="sidebar-menu__introduction center-align">
															<img class="logo logo-small sidebar-menu__introduction--logo image" src="https://www.nobelbiocare.com/themes/custom/nobel/logo-small.svg" alt="" />

															<button type="button" title="Go back to previous menu" class="button button--font-icon default button--round sidebar-menu__close-current header-menu small" >
																<i class="icon font-icon font-icon--breadcrumb  small"></i>
																<span class="visually-hidden">Go back to previous menu</span>
															</button>
														</div>
														<div class="sidebar-menu__content--wrapper">
															<div class="sidebar-menu__content">
																<nb-breadcrumbs>
																	<div class="sidebar-menu-breadcrumbs">
																		<ul class="sidebar-menu-breadcrumbs__list center-align">
																			<li class="sidebar-menu-breadcrumbs__item">
																				<button type="button" class="sidebar-menu-breadcrumbs__link default" data-id="header-menu">
																					Меню
																				</button>
																				<span class="sidebar-menu-breadcrumbs__raquo"></span>
																			</li>
																			<li class="sidebar-menu-breadcrumbs__item">
																				<p class="sidebar-menu-breadcrumbs__item-last">Лабораторные решения</p>
																			</li>
																		</ul>
																	</div>
																</nb-breadcrumbs>

																<h2 class="sidebar-menu__title h4 bold">Лабораторные решения</h2>

																<?php
            wp_nav_menu( array(
               'theme_location'  => 'main-nav3',
               'menu_class'      => 'sidebar-menu__items navigation-list',
               'echo'            => true,
               'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
               'depth'           => 0,
               //'walker'          => new Sidebar_Walker_Nav_Menu() // Добавьте свой класс Walker, если необходимо
            ) );
            ?>

															</div>

														</div>
													</div>
												</li>

												<li class="sidebar-menu__item">
													<a href="/kursy"      class="sidebar-menu__link      "
													>
														Образование
													</a>

													<button type="button" title="View more" class="sidebar-menu__more default header-menu">
														<span class="visually-hidden">View more</span>
														<span class="icon medium more"></span>
													</button>





													<div class="sidebar-menu sidebar-menu-sub образование-20450799 " role="dialog" aria-modal="true">
														<div class="sidebar-menu__introduction center-align">
															<img class="logo logo-small sidebar-menu__introduction--logo image" src="https://www.nobelbiocare.com/themes/custom/nobel/logo-small.svg" alt="" />




															<button type="button" title="Go back to previous menu" class="button button--font-icon default button--round sidebar-menu__close-current header-menu small" >
																<i class="icon font-icon font-icon--breadcrumb  small"></i>
																<span class="visually-hidden">Go back to previous menu</span>
															</button>
														</div>
														<div class="sidebar-menu__content--wrapper">
															<div class="sidebar-menu__content">
																<nb-breadcrumbs>
																	<div class="sidebar-menu-breadcrumbs">
																		<ul class="sidebar-menu-breadcrumbs__list center-align">
																			<li class="sidebar-menu-breadcrumbs__item">
																				<button type="button" class="sidebar-menu-breadcrumbs__link default" data-id="header-menu">
																					Меню
																				</button>
																				<span class="sidebar-menu-breadcrumbs__raquo"></span>
																			</li>
																			<li class="sidebar-menu-breadcrumbs__item">
																				<p class="sidebar-menu-breadcrumbs__item-last">Образование</p>
																			</li>
																		</ul>
																	</div>
																</nb-breadcrumbs>

																<h2 class="sidebar-menu__title h4 bold">Образование</h2>


																<ul class="sidebar-menu__items navigation-list">
																	<li class="sidebar-menu__item">
																		<a href="/kursy"      class="sidebar-menu__link      "
																		>
																			Курсы
																		</a>

																	</li>
																	<li class="sidebar-menu__item">
																		<a href="/vebinary"      class="sidebar-menu__link      "
																		>
																			Вебинары
																		</a>

																	</li>
																	<li class="sidebar-menu__item">
																		<a href="/regionalnye-obrazovatelnye-centry"      class="sidebar-menu__link      "
																		>
																			Региональные образовательные центры
																		</a>

																	</li>
																</ul>


															</div>

														</div>
													</div>
												</li>

											</ul>

										</nav>

									</div>



									<div class="sidebar-menu__secondary">


										<div class="menu-collection">


											<div class="menu-collection__menu">
												<div class="top-menu">
													<nav class="top-menu__navigation">
														<ul class="top-menu__list">
															<li class="menu-button">
																<a class="top-menu__link" href="https://store.nobelbiocare.com/ru/ru/">
																	<span class="icon  medium"></span>
																	Купить
																</a>
															</li>
															<li class="">
																<a class="top-menu__link" href="https://store.nobelbiocare.com/ru/ru/customer/account/login">
																	<span class="icon user medium"></span>
																	Войти/зарегистрироваться
																</a>
															</li>
															<li class="">
																<a class="top-menu__link" href="/sluzhba-podderzhki-klientov">
																	<span class="icon contact medium"></span>
																	Связаться с нами
																</a>
															</li>
														</ul>
													</nav>
												</div>
											</div>
											<div class="menu-collection__country-selector">

												<nb-sidebar-menu type="country-selector">
													<div class="country-selector__wrapper">

														<button type="button" title="Выберите страну" class="button button--default default country-selector__action center-align medium-plus" >
															<i class="icon  russia medium-plus"></i>
															<span class="visually-hidden">Выберите страну</span>
														</button>





														<div class="sidebar-menu__overlay country-selector"></div>

														<div class="sidebar-menu country-selector sidebar-menu__is-popup" role="dialog" aria-modal="true">
															<div class="sidebar-menu__introduction center-align">
																<img class="logo logo-small sidebar-menu__introduction--logo image" src="https://www.nobelbiocare.com/themes/custom/nobel/logo-small.svg" alt="" />


																<div class="sidebar-menu__introduction--wrapper invert">
																	<div class="sidebar-menu__introduction--title">Добро пожаловать в Nobel Biocare!</div>
																	<p>Пожалуйста, выберите страну/регион или перейдите на
																		<a href="https://www.nobelbiocare.com/en-int" class="link-international-site" data-language-code="en-int">International site</a>
																	</p>
																</div>

																<button type="button" title="Close menu" class="button button--font-icon default button--round sidebar-menu__close-menu country-selector invert small" >
																	<i class="icon font-icon font-icon--close  small"></i>
																	<span class="visually-hidden">Close menu</span>
																</button>


																<button type="button" title="Go back to previous menu" class="button button--font-icon default button--round sidebar-menu__close-current country-selector small" >
																	<i class="icon font-icon font-icon--breadcrumb  small"></i>
																	<span class="visually-hidden">Go back to previous menu</span>
																</button>
															</div>
															<div class="sidebar-menu__content--wrapper">
																<div class="sidebar-menu__content">
																	<nb-breadcrumbs>
																		<div class="sidebar-menu-breadcrumbs">
																			<ul class="sidebar-menu-breadcrumbs__list center-align">
																				<li class="sidebar-menu-breadcrumbs__item">
																					<button type="button" class="sidebar-menu-breadcrumbs__link default" data-id="header-menu">
																						Меню
																					</button>
																					<span class="sidebar-menu-breadcrumbs__raquo"></span>
																				</li>
																				<li class="sidebar-menu-breadcrumbs__item">
																					<p class="sidebar-menu-breadcrumbs__item-last">Выберите страну</p>
																				</li>
																			</ul>
																		</div>
																	</nb-breadcrumbs>


																	<nav>

																		<ul class="sidebar-menu__items navigation-list">
																			<li class="sidebar-menu__item">
																				<button class="sidebar-menu__link title h5 sidebar-menu__more default country-selector">
																					International
																				</button>
																				<button type="button" title="View more" class="sidebar-menu__more default country-selector">
																					<span class="visually-hidden">View more</span>
																					<span class="icon medium right-arrow"></span>
																				</button>





																				<div class="sidebar-menu international-17277874 sidebar-menu__is-popup" role="dialog" aria-modal="true">
																					<div class="sidebar-menu__introduction center-align">
																						<img class="logo logo-small sidebar-menu__introduction--logo image" src="https://www.nobelbiocare.com/themes/custom/nobel/logo-small.svg" alt="" />




																						<button type="button" title="Go back to previous menu" class="button button--font-icon default button--round sidebar-menu__close-current country-selector small" >
																							<i class="icon font-icon font-icon--breadcrumb  small"></i>
																							<span class="visually-hidden">Go back to previous menu</span>
																						</button>
																					</div>
																					<div class="sidebar-menu__content--wrapper">
																						<div class="sidebar-menu__content">
																							<nb-breadcrumbs>
																								<div class="sidebar-menu-breadcrumbs">
																									<ul class="sidebar-menu-breadcrumbs__list center-align">
																										<li class="sidebar-menu-breadcrumbs__item">
																											<button type="button" class="sidebar-menu-breadcrumbs__link default" data-id="header-menu">
																												Меню
																											</button>
																											<span class="sidebar-menu-breadcrumbs__raquo"></span>
																										</li>
																										<li class="sidebar-menu-breadcrumbs__item">
																											<button type="button" class="sidebar-menu-breadcrumbs__link default" data-id="country-selector">
																												Выберите страну
																											</button>
																											<span class="sidebar-menu-breadcrumbs__raquo"></span>
																										</li>
																										<li class="sidebar-menu-breadcrumbs__item">
																											<p class="sidebar-menu-breadcrumbs__item-last">International</p>
																										</li>
																									</ul>
																								</div>
																							</nb-breadcrumbs>



																							<ul class="sidebar-menu__items navigation-list">
																								<li class="sidebar-menu__item">
																									<a href="https://www.nobelbiocare.com/en-int"      class="sidebar-menu__link      "
																									   data-language-code="en-int">
																										<div class="sidebar-menu__flag">
																											<span class="icon flag globe"></span>
																										</div>
																										International Site (EN)
																									</a>

																								</li>
																							</ul>


																						</div>

																					</div>
																				</div>
																			</li>
																			<li class="sidebar-menu__item">
																				<button class="sidebar-menu__link title h5 sidebar-menu__more default country-selector">
																					Americas
																				</button>
																				<button type="button" title="View more" class="sidebar-menu__more default country-selector">
																					<span class="visually-hidden">View more</span>
																					<span class="icon medium right-arrow"></span>
																				</button>





																				<div class="sidebar-menu americas-74545780 sidebar-menu__is-popup" role="dialog" aria-modal="true">
																					<div class="sidebar-menu__introduction center-align">
																						<img class="logo logo-small sidebar-menu__introduction--logo image" src="https://www.nobelbiocare.com/themes/custom/nobel/logo-small.svg" alt="" />




																						<button type="button" title="Go back to previous menu" class="button button--font-icon default button--round sidebar-menu__close-current country-selector small" >
																							<i class="icon font-icon font-icon--breadcrumb  small"></i>
																							<span class="visually-hidden">Go back to previous menu</span>
																						</button>
																					</div>
																					<div class="sidebar-menu__content--wrapper">
																						<div class="sidebar-menu__content">
																							<nb-breadcrumbs>
																								<div class="sidebar-menu-breadcrumbs">
																									<ul class="sidebar-menu-breadcrumbs__list center-align">
																										<li class="sidebar-menu-breadcrumbs__item">
																											<button type="button" class="sidebar-menu-breadcrumbs__link default" data-id="header-menu">
																												Меню
																											</button>
																											<span class="sidebar-menu-breadcrumbs__raquo"></span>
																										</li>
																										<li class="sidebar-menu-breadcrumbs__item">
																											<button type="button" class="sidebar-menu-breadcrumbs__link default" data-id="country-selector">
																												Выберите страну
																											</button>
																											<span class="sidebar-menu-breadcrumbs__raquo"></span>
																										</li>
																										<li class="sidebar-menu-breadcrumbs__item">
																											<p class="sidebar-menu-breadcrumbs__item-last">Americas</p>
																										</li>
																									</ul>
																								</div>
																							</nb-breadcrumbs>



																							<ul class="sidebar-menu__items navigation-list">
																								<li class="sidebar-menu__item">
																									<a href="https://www.nobelbiocare.com/en-ca"      class="sidebar-menu__link      "
																									   data-language-code="en-ca">
																										<div class="sidebar-menu__flag">
																											<span class="icon flag canada"></span>
																										</div>
																										Canada (EN)
																									</a>

																								</li>
																								<li class="sidebar-menu__item">
																									<a href="https://www.nobelbiocare.com/fr-ca"      class="sidebar-menu__link      "
																									   data-language-code="fr-ca">
																										<div class="sidebar-menu__flag">
																											<span class="icon flag canada"></span>
																										</div>
																										Canada (FR)
																									</a>

																								</li>
																								<li class="sidebar-menu__item">
																									<a href="https://www.nobelbiocare.com/es-mx"      class="sidebar-menu__link      "
																									   data-language-code="es-mx">
																										<div class="sidebar-menu__flag">
																											<span class="icon flag mexico"></span>
																										</div>
																										Mexico
																									</a>

																								</li>
																								<li class="sidebar-menu__item">
																									<a href="https://www.nobelbiocare.com/en-us"      class="sidebar-menu__link      "
																									   data-language-code="en-us">
																										<div class="sidebar-menu__flag">
																											<span class="icon flag united-states"></span>
																										</div>
																										United States
																									</a>

																								</li>
																							</ul>


																						</div>

																					</div>
																				</div>
																			</li>
																			<li class="sidebar-menu__item">
																				<button class="sidebar-menu__link title h5 sidebar-menu__more default country-selector">
																					Asia Pacific
																				</button>
																				<button type="button" title="View more" class="sidebar-menu__more default country-selector">
																					<span class="visually-hidden">View more</span>
																					<span class="icon medium right-arrow"></span>
																				</button>





																				<div class="sidebar-menu asia-pacific-11267704 sidebar-menu__is-popup" role="dialog" aria-modal="true">
																					<div class="sidebar-menu__introduction center-align">
																						<img class="logo logo-small sidebar-menu__introduction--logo image" src="https://www.nobelbiocare.com/themes/custom/nobel/logo-small.svg" alt="" />




																						<button type="button" title="Go back to previous menu" class="button button--font-icon default button--round sidebar-menu__close-current country-selector small" >
																							<i class="icon font-icon font-icon--breadcrumb  small"></i>
																							<span class="visually-hidden">Go back to previous menu</span>
																						</button>
																					</div>
																					<div class="sidebar-menu__content--wrapper">
																						<div class="sidebar-menu__content">
																							<nb-breadcrumbs>
																								<div class="sidebar-menu-breadcrumbs">
																									<ul class="sidebar-menu-breadcrumbs__list center-align">
																										<li class="sidebar-menu-breadcrumbs__item">
																											<button type="button" class="sidebar-menu-breadcrumbs__link default" data-id="header-menu">
																												Меню
																											</button>
																											<span class="sidebar-menu-breadcrumbs__raquo"></span>
																										</li>
																										<li class="sidebar-menu-breadcrumbs__item">
																											<button type="button" class="sidebar-menu-breadcrumbs__link default" data-id="country-selector">
																												Выберите страну
																											</button>
																											<span class="sidebar-menu-breadcrumbs__raquo"></span>
																										</li>
																										<li class="sidebar-menu-breadcrumbs__item">
																											<p class="sidebar-menu-breadcrumbs__item-last">Asia Pacific</p>
																										</li>
																									</ul>
																								</div>
																							</nb-breadcrumbs>



																							<ul class="sidebar-menu__items navigation-list">
																								<li class="sidebar-menu__item">
																									<a href="https://www.nobelbiocare.com/en-au"      class="sidebar-menu__link      "
																									   data-language-code="en-au">
																										<div class="sidebar-menu__flag">
																											<span class="icon flag australia"></span>
																										</div>
																										Australia
																									</a>

																								</li>
																								<li class="sidebar-menu__item">
																									<a href="https://www.nobelbiocare.com/en-hk"      class="sidebar-menu__link      "
																									   data-language-code="en-hk">
																										<div class="sidebar-menu__flag">
																											<span class="icon flag hong-kong"></span>
																										</div>
																										Hong Kong (SAR), China
																									</a>

																								</li>
																								<li class="sidebar-menu__item">
																									<a href="https://www.nobelbiocare.com/en-in"      class="sidebar-menu__link      "
																									   data-language-code="en-in">
																										<div class="sidebar-menu__flag">
																											<span class="icon flag india"></span>
																										</div>
																										India
																									</a>

																								</li>
																								<li class="sidebar-menu__item">
																									<a href="https://www.nobelbiocare.com/ja-jp"      class="sidebar-menu__link      "
																									   data-language-code="ja-jp">
																										<div class="sidebar-menu__flag">
																											<span class="icon flag japan"></span>
																										</div>
																										日本
																									</a>

																								</li>
																								<li class="sidebar-menu__item">
																									<a href="https://www.nobelbiocare.com/en-nz"      class="sidebar-menu__link      "
																									   data-language-code="en-nz">
																										<div class="sidebar-menu__flag">
																											<span class="icon flag new-zealand"></span>
																										</div>
																										New Zealand
																									</a>

																								</li>
																							</ul>


																						</div>

																					</div>
																				</div>
																			</li>
																			<li class="sidebar-menu__item">
																				<button class="sidebar-menu__link title h5 sidebar-menu__more default country-selector">
																					EMEA
																				</button>
																				<button type="button" title="View more" class="sidebar-menu__more default country-selector">
																					<span class="visually-hidden">View more</span>
																					<span class="icon medium right-arrow"></span>
																				</button>





																				<div class="sidebar-menu emea-44360827 sidebar-menu__is-popup" role="dialog" aria-modal="true">
																					<div class="sidebar-menu__introduction center-align">
																						<img class="logo logo-small sidebar-menu__introduction--logo image" src="https://www.nobelbiocare.com/themes/custom/nobel/logo-small.svg" alt="" />




																						<button type="button" title="Go back to previous menu" class="button button--font-icon default button--round sidebar-menu__close-current country-selector small" >
																							<i class="icon font-icon font-icon--breadcrumb  small"></i>
																							<span class="visually-hidden">Go back to previous menu</span>
																						</button>
																					</div>
																					<div class="sidebar-menu__content--wrapper">
																						<div class="sidebar-menu__content">
																							<nb-breadcrumbs>
																								<div class="sidebar-menu-breadcrumbs">
																									<ul class="sidebar-menu-breadcrumbs__list center-align">
																										<li class="sidebar-menu-breadcrumbs__item">
																											<button type="button" class="sidebar-menu-breadcrumbs__link default" data-id="header-menu">
																												Меню
																											</button>
																											<span class="sidebar-menu-breadcrumbs__raquo"></span>
																										</li>
																										<li class="sidebar-menu-breadcrumbs__item">
																											<button type="button" class="sidebar-menu-breadcrumbs__link default" data-id="country-selector">
																												Выберите страну
																											</button>
																											<span class="sidebar-menu-breadcrumbs__raquo"></span>
																										</li>
																										<li class="sidebar-menu-breadcrumbs__item">
																											<p class="sidebar-menu-breadcrumbs__item-last">EMEA</p>
																										</li>
																									</ul>
																								</div>
																							</nb-breadcrumbs>



																							<ul class="sidebar-menu__items navigation-list">
																								<li class="sidebar-menu__item">
																									<a href="https://www.nobelbiocare.com/de-at"      class="sidebar-menu__link      "
																									   data-language-code="de-at">
																										<div class="sidebar-menu__flag">
																											<span class="icon flag austria"></span>
																										</div>
																										Österreich
																									</a>

																								</li>
																								<li class="sidebar-menu__item">
																									<a href="https://www.nobelbiocare.com/fr-be"      class="sidebar-menu__link      "
																									   data-language-code="fr-be">
																										<div class="sidebar-menu__flag">
																											<span class="icon flag belgium"></span>
																										</div>
																										Belgique
																									</a>

																								</li>
																								<li class="sidebar-menu__item">
																									<a href="https://www.nobelbiocare.com/en-be"      class="sidebar-menu__link      "
																									   data-language-code="en-be">
																										<div class="sidebar-menu__flag">
																											<span class="icon flag belgium"></span>
																										</div>
																										Belgium
																									</a>

																								</li>
																								<li class="sidebar-menu__item">
																									<a href="https://www.nobelbiocare.com/en-dk"      class="sidebar-menu__link      "
																									   data-language-code="en-dk">
																										<div class="sidebar-menu__flag">
																											<span class="icon flag denmark"></span>
																										</div>
																										Denmark
																									</a>

																								</li>
																								<li class="sidebar-menu__item">
																									<a href="https://www.nobelbiocare.com/en-fi"      class="sidebar-menu__link      "
																									   data-language-code="en-fi">
																										<div class="sidebar-menu__flag">
																											<span class="icon flag finland"></span>
																										</div>
																										Finland
																									</a>

																								</li>
																								<li class="sidebar-menu__item">
																									<a href="https://www.nobelbiocare.com/fr-fr"      class="sidebar-menu__link      "
																									   data-language-code="fr-fr">
																										<div class="sidebar-menu__flag">
																											<span class="icon flag france"></span>
																										</div>
																										France
																									</a>

																								</li>
																								<li class="sidebar-menu__item">
																									<a href="https://www.nobelbiocare.com/de-de"      class="sidebar-menu__link      "
																									   data-language-code="de-de">
																										<div class="sidebar-menu__flag">
																											<span class="icon flag germany"></span>
																										</div>
																										Deutschland
																									</a>

																								</li>
																								<li class="sidebar-menu__item">
																									<a href="https://www.nobelbiocare.com/en-hu"      class="sidebar-menu__link      "
																									   data-language-code="en-hu">
																										<div class="sidebar-menu__flag">
																											<span class="icon flag hungary"></span>
																										</div>
																										Hungary
																									</a>

																								</li>
																								<li class="sidebar-menu__item">
																									<a href="https://www.nobelbiocare.com/en-ie"      class="sidebar-menu__link      "
																									   data-language-code="en-ie">
																										<div class="sidebar-menu__flag">
																											<span class="icon flag ireland"></span>
																										</div>
																										Ireland
																									</a>

																								</li>
																								<li class="sidebar-menu__item">
																									<a href="https://www.nobelbiocare.com/it-it"      class="sidebar-menu__link      "
																									   data-language-code="it-it">
																										<div class="sidebar-menu__flag">
																											<span class="icon flag italy"></span>
																										</div>
																										Italia
																									</a>

																								</li>
																								<li class="sidebar-menu__item">
																									<a href="https://www.nobelbiocare.com/en-nl"      class="sidebar-menu__link      "
																									   data-language-code="en-nl">
																										<div class="sidebar-menu__flag">
																											<span class="icon flag netherlands"></span>
																										</div>
																										Netherlands
																									</a>

																								</li>
																								<li class="sidebar-menu__item">
																									<a href="https://www.nobelbiocare.com/en-no"      class="sidebar-menu__link      "
																									   data-language-code="en-no">
																										<div class="sidebar-menu__flag">
																											<span class="icon flag norway"></span>
																										</div>
																										Norway
																									</a>

																								</li>
																								<li class="sidebar-menu__item">
																									<a href="https://www.nobelbiocare.com/en-pl"      class="sidebar-menu__link      "
																									   data-language-code="en-pl">
																										<div class="sidebar-menu__flag">
																											<span class="icon flag poland"></span>
																										</div>
																										Poland
																									</a>

																								</li>
																								<li class="sidebar-menu__item">
																									<a href="https://www.nobelbiocare.com/pt-pt"      class="sidebar-menu__link      "
																									   data-language-code="pt-pt">
																										<div class="sidebar-menu__flag">
																											<span class="icon flag portugal"></span>
																										</div>
																										Portugal
																									</a>

																								</li>
																								<li class="sidebar-menu__item">
																									<a href="https://www.nobelbiocare.com/ru-ru"      class="sidebar-menu__link      "
																									   data-language-code="ru-ru">
																										<div class="sidebar-menu__flag">
																											<span class="icon flag russia"></span>
																										</div>
																										Россия
																									</a>

																								</li>
																								<li class="sidebar-menu__item">
																									<a href="https://www.nobelbiocare.com/es-es"      class="sidebar-menu__link      "
																									   data-language-code="es-es">
																										<div class="sidebar-menu__flag">
																											<span class="icon flag spain"></span>
																										</div>
																										España
																									</a>

																								</li>
																								<li class="sidebar-menu__item">
																									<a href="https://www.nobelbiocare.com/en-se"      class="sidebar-menu__link      "
																									   data-language-code="en-se">
																										<div class="sidebar-menu__flag">
																											<span class="icon flag sweden"></span>
																										</div>
																										Sweden
																									</a>

																								</li>
																								<li class="sidebar-menu__item">
																									<a href="https://www.nobelbiocare.com/de-ch"      class="sidebar-menu__link      "
																									   data-language-code="de-ch">
																										<div class="sidebar-menu__flag">
																											<span class="icon flag switzerland"></span>
																										</div>
																										Schweiz
																									</a>

																								</li>
																								<li class="sidebar-menu__item">
																									<a href="https://www.nobelbiocare.com/fr-ch"      class="sidebar-menu__link      "
																									   data-language-code="fr-ch">
																										<div class="sidebar-menu__flag">
																											<span class="icon flag switzerland"></span>
																										</div>
																										Suisse
																									</a>

																								</li>
																								<li class="sidebar-menu__item">
																									<a href="https://www.nobelbiocare.com/it-ch"      class="sidebar-menu__link      "
																									   data-language-code="it-ch">
																										<div class="sidebar-menu__flag">
																											<span class="icon flag switzerland"></span>
																										</div>
																										Svizzera
																									</a>

																								</li>
																								<li class="sidebar-menu__item">
																									<a href="https://www.nobelbiocare.com/en-uk"      class="sidebar-menu__link      "
																									   data-language-code="en-uk">
																										<div class="sidebar-menu__flag">
																											<span class="icon flag united-kingdom"></span>
																										</div>
																										United Kingdom
																									</a>

																								</li>
																							</ul>


																						</div>

																					</div>
																				</div>
																			</li>
																		</ul>

																	</nav>


																</div>

															</div>
														</div>
													</div>
												</nb-sidebar-menu>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
					</nb-sidebar-menu>
				</div>
			-->
         </div>
      </div>
   </div>
</header>





















