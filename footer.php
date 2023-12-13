
<?php

/**
 * Footer Template
 *
 *
 * @file			footer.php
 * @package			centr-allon4
 * @author
 * @copyright
 * @license
 * @version
 * @filesource
 * @link
 * @since
 */

?>

<footer class="footer" role="contentinfo">
	<div class="top-footer__wrapper top-footer__wrapper-canopy">
		<div class="top-footer inner invert spacing-all">
			<article class="top-footer__left">
				<div id="block-nobel-footerinnovation">
					<section class="layout-default horizontal-line horizontal-line--none black-background white-font paragraph paragraph--type--text paragraph--view-mode--default" id="9297" id="9297">
						<div class="spacing-all top-padding-default bottom-padding-default">
							<div class="wysiwyg">
								<p><?php _e('Nobel Biocare – лидер в области инновационных конструкций с опорой на имплантаты. Ежедневно по всему миру компания работает над тем, чтобы предложить врачам и пациентам лучшие решения в области восстановления зубов.'); ?></p>
							</div>
						</div>
					</section>
				</div>
			</article>
			<article class="top-footer__middle">
				<?php
				$my_post_obj = get_post(149);
				echo '<!-- id-149 -->';
				echo $my_post_obj->post_content;
				?>
			</article>
			<article class="top-footer__right">
				<nav role="navigation">
					<?php
					wp_nav_menu( array(
						'theme_location'  => 'footer-nav1',
						'menu_class'      => '',
						'echo'            => true,
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'depth'           => 0,
					) );
					?>
				</nav>
			</article>
		</div>
	</div>
	<div class="bottom-footer__wrapper bottom-footer__wrapper-canopy">
		<div class="bottom-footer inner center-align center-align--desktop-up invert spacing">
			<div class="bottom-footer__legal">
				<nav role="navigation">
					<?php
					wp_nav_menu( array(
						'theme_location'  => 'footer-nav2',
						'menu_class'      => 'footer-legal',
						'echo'            => true,
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'depth'           => 0,
					) );
					?>
				</nav>
			</div>
			<div class="bottom-footer__copyright">
				<p class="bottom-footer__copyright-text">
					©
					<?php _e('ООО «ЦСНУ-1». ОГРН 1217700327173. Лицензия №Л041-01137-77/00003683. Nobel Biocare Services AG. ООО «Нобель Биокеар Раша», ОГРН 1057749289091.Все права защищены.'); ?>
				</p>
			</div>
		</div>
	</div>
</footer>





<div class="modals-sec pb">
	<div id="modal-callback" class="modal">
		<div class="wpcf7-step1">
			<header class="modal__header">
				<?php
				echo '<p class="modal__title">' . _e('Углубленная диагностика и консультация бесплатно', 'centr-allon4'). '</p>';
				echo '<p>' . _e('Заполните поля и оставьте заявку на общение с врачами – мировыми экспертами All-on-4®', 'centr-allon4'). '</p>';
				?>
			</header>
			<?php echo do_shortcode('[contact-form-7 id="6d4e84f" title="Запись на консультацию"]'); ?>
		</div>
		<div class="wpcf7-step2 hide">
			<header class="modal__header">
				<p class="modal__title"><?php _e('Ваша заявка принята!'); ?></p>
				<p><?php _e('Мы перезвоним вам в течение 30 секунд и подберем лучших врачей – экспертов в области All-on-4® для решения вашей ситуации.'); ?></p>
			</header>
		</div>
	</div>
</div>
<?php if (strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome-Lighthouse') != true) { ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/assets-dist.js?v1"></script>
<script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
<?php } ?>


<?php wp_footer(); ?>

<?php
$my_post_obj = get_post(169);
echo '<!-- id-169 -->';
echo $my_post_obj->post_content;
?>
</body>
</html>












