<div class="cf7-custom-form">
	<form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">
		<input type="hidden" name="action" value="cf7_custom_action">
		<div class="cf7-form-field">
			<label for="your-name">Ваше имя</label>
			[text* your-name id:your-name]
		</div>
		<div class="cf7-form-field">
			<label for="your-email">Ваш email</label>
			[email* your-email id:your-email]
		</div>
		<div class="cf7-form-field">
			<label for="your-message">Ваше сообщение</label>
			[textarea your-message id:your-message]
		</div>
		<div class="cf7-form-field">
			[submit "Отправить"]
		</div>
	</form>
</div>





<div class="sf-input-group step1" role="radiogroup" rel="step-1">
	<div class="h3 survey__title">Какая у вас ситуация?</div>
	<div class="row img-select__container">
		<div class="grid-4 grid-12_s">
			<input id="custom1" type="radio" class="img-select__radio" name="survey" checked="checked" value="Нет 1-2 зубов">
			<label for="custom1" class="img-select-box" name="select" title="Нет 1-2 зубов">
				<div class="img-select__images">
					<img class="img-select__img" src="https://smile-at-once.ru/data/teeth_new/img/survey/etap-1-1.webp"  loading="lazy" decoding="async" alt="Нет 1-2 зубов" width="653" height="450">
					<div class="img-select__indicator"></div>
				</div>
				<span class="img-select__label">Нет 1-2 зубов</span>
			</label>
		</div>
		<div class="grid-4 grid-12_s">
			<input id="custom2" type="radio" class="img-select__radio" name="survey" value="Нет части зубов">
			<label for="custom2" class="img-select-box" name="select" title="Нет части зубов">
				<div class="img-select__images">
					<img class="img-select__img" src="https://smile-at-once.ru/data/teeth_new/img/survey/etap-1-2.webp"  loading="lazy" decoding="async" alt="Нет больше 4 зубов" width="653" height="450">
					<div class="img-select__indicator"></div>
				</div>
				<span class="img-select__label">Нет части зубов</span>
			</label>
		</div>
		<div class="grid-4 grid-12_s">
			<input id="custom3" type="radio" class="img-select__radio" name="survey" value="Нет почти всех зубов">
			<label for="custom3" class="img-select-box" name="select" title="Нет почти всех зубов">
				<div class="img-select__images">
					<img class="img-select__img" src="https://smile-at-once.ru/data/teeth_new/img/survey/etap-1-3.webp"  loading="lazy" decoding="async" alt="Нет почти всех зубов" width="653" height="450">
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
					<img class="img-select__img" src="https://smile-at-once.ru/data/teeth_new/img/survey/etap2-verh.webp"  loading="lazy" decoding="async" alt="Острая атрофия кости" width="653" height="450">
					<div class="img-select__indicator"></div>
				</div>
				<span class="img-select__label">Острая атрофия кости</span>
			</label>
		</div>
		<div class="grid-4 grid-12_s">
			<input id="custom22" type="radio" class="img-select__radio" name="survey1" value="Сахарный диабет, пародонтит и др. заболевания">
			<label for="custom22" class="img-select-box" name="select" title="Сахарный диабет, пародонтит и др. заболевания">
				<div class="img-select__images">
					<img class="img-select__img" src="https://smile-at-once.ru/data/teeth_new/img/survey/etap2-niz.webp"  loading="lazy" decoding="async" alt="Сахарный диабет, пародонтит и др. заболевания" width="653" height="450">
					<div class="img-select__indicator"></div>
				</div>
				<span class="img-select__label">Сахарный диабет, пародонтит и др. заболевания</span>
			</label>
		</div>
		<div class="grid-4 grid-12_s">
			<input id="custom33" type="radio" class="img-select__radio" name="survey1" value="Отказали в имплантации зубов">
			<label for="custom33" class="img-select-box" name="select" title="Отказали в имплантации зубов">
				<div class="img-select__images">
					<img class="img-select__img" src="https://smile-at-once.ru/data/teeth_new/img/survey/etap2-verh+niz.webp"  loading="lazy" decoding="async" alt="Отказали в имплантации зубов" width="653" height="450">
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
					<img class="img-select__img" src="https://smile-at-once.ru/data/teeth_new/img/survey/etap3-1.webp"  loading="lazy" decoding="async" alt="Меньше 6 месяцев" width="653" height="450">
					<div class="img-select__indicator"></div>
				</div>
				<span class="img-select__label">Меньше 6 месяцев</span>
			</label>
		</div>
		<div class="grid-4 grid-12_s">
			<input id="custom222" type="radio" class="img-select__radio" name="survey2" value="Год и более">
			<label for="custom222" class="img-select-box" name="select" title="Год и более">
				<div class="img-select__images">
					<img class="img-select__img" src="https://smile-at-once.ru/data/teeth_new/img/survey/etap3-2.webp"  loading="lazy" decoding="async" alt="Год и более" width="653" height="450">
					<div class="img-select__indicator"></div>
				</div>
				<span class="img-select__label">Год и более</span>
			</label>
		</div>
		<div class="grid-4 grid-12_s">
			<input id="custom333" type="radio" class="img-select__radio" name="survey2" value="Очень давно">
			<label for="custom333" class="img-select-box" name="select" title="Очень давно">
				<div class="img-select__images">
					<img class="img-select__img" src="https://smile-at-once.ru/data/teeth_new/img/survey/etap3-3.webp"  loading="lazy" decoding="async" alt="Очень давно" width="653" height="450">
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
					<img src="https://smile-at-once.ru/data/teeth_new/img/survey/img1.webp"  loading="lazy" decoding="async" alt="Расчет стоимости и план лечения" width="600" height="475" class="st-list__img" >
				</div>
				<div class="st-list__item-text">Расчет стоимости и план лечения</div>
			</div>
		</div>
		<div class="grid-4 grid-6_s">
			<div class="st-list__item">
				<div class="row--success-img">
					<img src="https://smile-at-once.ru/data/teeth_new/img/survey/img2.webp"  loading="lazy" decoding="async" alt="КТ-снимок в подарок! Сэкономь" width="600" height="475" class="st-list__img" >
				</div>
				<div class="st-list__item-text">КТ-снимок в подарок! Сэкономь <span class="st-list__mark">5000р</span></div>
			</div>
		</div>
		<div class="grid-4 grid-12_s grid--success-book">
			<div class="row--success-img row--success-img-book">
				<img src="https://smile-at-once.ru/data/teeth_new/img/survey/img-book.webp"  loading="lazy" decoding="async" alt="Брошюра" width="600" height="600" class="st-list__img st-list__img-book" >
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
