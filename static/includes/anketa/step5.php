<div class="anketa__step">
	<div class="clearfix">
		<div class="anketa__form">
			<div class="anketa__form-block">
				<div class="b-block__title h4 _dash anketa__form-block-title">Личная информация</div>
				<div class="b-form__row">
					<div class="b-form__block" data-form-field>
						<div class="b-form__field">
							<select data-chosen  data-required>
								<option value=""></option>
								<option value="Начальное">Начальное</option>
								<option value="Среднее">Среднее</option>
								<option value="Среднее специальное">Среднее специальное</option>
								<option value="Высшее">Высшее</option>
							</select>
							<div class="b-form__placeholder">Образование</div>
						</div>
						<div class="b-form__error">Были допущены ошибки или поле оставлено пустым.</div>
					</div>
				</div>
				<div class="b-form__row">
					<div class="b-form__block" data-form-field>
						<div class="b-form__field">
							<select data-chosen  data-required>
								<option value=""></option>
								<option value="Холост / Не замужем">Холост / Не замужем</option>
								<option value="Разведен(на)">Разведен(на)</option>
								<option value="Женат / Замужем">Женат / Замужем</option>
								<option value="Гражданский брак">Гражданский брак</option>
								<option value="Вдова / Вдовец">Вдова / Вдовец</option>
							</select>
							<div class="b-form__placeholder">Семейное положение</div>
						</div>
						<div class="b-form__error">Были допущены ошибки или поле оставлено пустым.</div>
					</div>
				</div>
				<div class="b-form__row">
					<div class="b-form__block" data-form-field>
						<div class="b-form__field">
							<select data-chosen  data-required>
								<option value=""></option>
								<option value="Нет">Нет</option>
								<option value="Один">Один</option>
								<option value="Двое">Двое</option>
								<option value="Трое">Трое</option>
								<option value="Больше трех">Больше трех</option>
							</select>
							<div class="b-form__placeholder">Количество детей</div>
						</div>
						<div class="b-form__error">Были допущены ошибки или поле оставлено пустым.</div>
					</div>
				</div>
				<div class="b-form__row">
					<div class="b-form__block" data-form-field>
						<div class="b-form__field">
							<select data-chosen  data-required>
								<option value=""></option>
								<option value="Нет">Нет</option>
								<option value="Один">Один</option>
								<option value="Двое">Двое</option>
								<option value="Трое">Трое</option>
								<option value="Больше трех">Больше трех</option>
							</select>
							<div class="b-form__placeholder">Количество иждивенцев</div>
						</div>
						<div class="b-form__error">Были допущены ошибки или поле оставлено пустым.</div>
					</div>
				</div>
			</div>
			<div class="anketa__form-block">
				<div class="b-block__title h4 _dash anketa__form-block-title">Доходы и расходы</div>
				<div class="b-form__row">
					<div class="b-form__block" data-form-field>
						<div class="b-form__field">
							<input type="text" data-form-field-inp data-money-mask data-required>
							<div class="b-form__placeholder">Ваш доход в месяц</div>
							<span class="rub credit-calc__option-rub"></span>
						</div>
						<div class="b-form__error">Были допущены ошибки или поле оставлено пустым.</div>
					</div>
				</div>
				<div class="b-form__row">
					<div class="b-form__block" data-form-field>
						<div class="b-form__field">
							<input type="text" data-form-field-inp data-money-mask data-required>
							<div class="b-form__placeholder">Доход семьи в месяц</div>
							<span class="rub credit-calc__option-rub"></span>
						</div>
						<div class="b-form__error">Были допущены ошибки или поле оставлено пустым.</div>
					</div>
				</div>
				<div class="b-form__row">
					<div class="b-form__block" data-form-field>
						<div class="b-form__field">
							<input type="text" data-form-field-inp data-money-mask data-required>
							<div class="b-form__placeholder">Расход семьи в месяц</div>
							<span class="rub credit-calc__option-rub"></span>
						</div>
						<div class="b-form__error">Были допущены ошибки или поле оставлено пустым.</div>
					</div>
				</div>
			</div>
			<div class="anketa__form-block">
				<div class="b-block__title h4 _dash anketa__form-block-title">Имущество в собственности</div>
				<div class="b-form__row _checks">
					<div class="b-form__check-list">
						<div class="b-form__check"><label><input type="checkbox" data-check-toggle="realty">Имею в собственности недвижимость</label></div>
						<div class="b-form__check"><label><input type="checkbox" data-check-toggle="car">Имею в собственности автомобиль</label></div>
					</div>
				</div>
				<div class="b-form__row hide" data-check-toggle-content="realty">
					<div class="b-form__block" data-form-field>
						<div class="b-form__field">
							<select data-chosen>
								<option value=""></option>
								<option value="Дача">Дача</option>
								<option value="Земельный участок">Земельный участок</option>
								<option value="Гараж">Гараж</option>
								<option value="Квартира">Квартира</option>
								<option value="Индивидуальный дом">Индивидуальный дом</option>
							</select>
							<div class="b-form__placeholder">Вид недвижимости</div>
						</div>
						<div class="b-form__error">Были допущены ошибки или поле оставлено пустым.</div>
					</div>
				</div>
				<div class="b-form__row hide" data-check-toggle-content="car">
					<div class="b-form__block" data-form-field>
						<div class="b-form__field" data-autocomplete>
							<input type="text" data-form-field-inp data-autocomplete-inp>
							<div class="b-form__placeholder">Марка автомобиля</div>
							<?include "autocomplate.php"?>
						</div>
						<div class="b-form__error">Были допущены ошибки или поле оставлено пустым.</div>
					</div>
				</div>
			</div>
			<div class="anketa__form-block">
				<div class="b-block__title h4 _dash anketa__form-block-title">Выберите контрольный вопрос</div>
				<div class="b-form__row">
					<div class="b-form__block" data-form-field>
						<div class="b-form__field">
							<select data-chosen  data-required>
								<option value=""></option>
								<option value="Девичья фамилия матери">Девичья фамилия матери</option>
								<option value="Кличка домашнего животного">Кличка домашнего животного</option>
								<option value="Любимое блюдо">Любимое блюдо</option>
								<option value="Другое">Другое</option>
							</select>
							<div class="b-form__placeholder">Контрольный вопрос</div>
						</div>
						<div class="b-form__error">Были допущены ошибки или поле оставлено пустым.</div>
					</div>
				</div>
				<div class="b-form__row">
					<div class="b-form__block" data-form-field>
						<div class="b-form__field">
							<input type="text" data-form-field-inp data-required>
							<div class="b-form__placeholder">Ответ на контрольный вопрос</div>
						</div>
						<div class="b-form__error">Были допущены ошибки или поле оставлено пустым.</div>
					</div>
				</div>
				<div class="b-form__row">
					<div class="b-form__block" data-form-field>
						<div class="b-form__field">
							<select data-chosen  data-required>
								<option value=""></option>
								<option value="Запланированная покупка (бытовая техника, электроника, транспортные средства">
									Запланированная покупка (бытовая техника, электроника, транспортные средства</option>
								<option value="Ремонт, покупка мебели">Ремонт, покупка мебели</option>
								<option value="Приобретение недвижимости">Приобретение недвижимости</option>
								<option value="Незапланированная покупка">Незапланированная покупка</option>
								<option value="Путешествие">Путешествие</option>
								<option value="Свадьба, день рождения, другое значимое событие">Свадьба, день рождения, другое значимое событие</option>
								<option value="Учеба">Учеба</option>
								<option value="Рефинансирование другого кредита">Рефинансирование другого кредита</option>
								<option value="Просто нужны деньги (до зарплаты, долг отдать)">Просто нужны деньги (до зарплаты, долг отдать)</option>
								<option value="Другое">Другое</option>
							</select>
							<div class="b-form__placeholder">Цель кредита</div>
						</div>
						<div class="b-form__error">Были допущены ошибки или поле оставлено пустым.</div>
					</div>
				</div>
			</div>
			<div class="anketa__form-block">
				<div class="b-block__title h4 _dash anketa__form-block-title">Адрес для корреспонденции</div>
				<div class="b-form__row">
					<div class="b-form__block" data-form-field>
						<div class="b-form__field">
							<select data-chosen  data-required>
								<option value=""></option>
								<option value="Адрес регистрации">Адрес регистрации</option>
								<option value="Адрес проживания">Адрес проживания</option>
							</select>
							<div class="b-form__placeholder">Адрес для корреспонденции</div>
						</div>
						<div class="b-form__error">Были допущены ошибки или поле оставлено пустым.</div>
					</div>
				</div>
			</div>
			<div class="anketa__form-block" data-anketa-office>
				<div class="b-block__title h4 _dash anketa__form-block-title">Отделение для получения кредита</div>
				<div class="b-form__row">
					<div class="b-form__block" data-form-field>
						<div class="b-form__field" data-autocomplete>
							<input type="text" data-form-field-inp data-anketa-office-inp data-required data-autocomplete-inp>
							<div class="b-form__placeholder">Населенный пункт</div>
							<div class="b-form__autocomplete">
								<ul>
									<li><a href="javascript:void(0);" data-autocomplete-link>Москва</a></li>
									<li><a href="javascript:void(0);" data-autocomplete-link>Смоленск</a></li>
									<li><a href="javascript:void(0);" data-autocomplete-link>Сочи</a></li>
								</ul>
							</div>
						</div>
						<div class="b-form__error">Были допущены ошибки или поле оставлено пустым.</div>
					</div>
				</div>
				<div class="b-form__row hide" data-anketa-office-block>
					<div class="anketa__offices">
						<div class="anketa__offices-counter h3">215 <span>отделений</span></div>
						<div class="anketa__offices-city">В городе Москва</div>
						<div class="anketa__offices-btn">
							<a href="javascript:void(0);" class="btn _w100" data-anketa-office-map-show>Указать отделение на карте</a>
						</div>
					</div>
				</div>
				<div class="b-form__row hide" data-anketa-office-item>
					<div class="anketa__office">
						<div class="anketa__office-title">Москва, бул. Волжский, д. 16, корп. 1</div>
						<div class="anketa__office-subtitle">В отделении «Почты России».</div>
						<div class="anketa__office-schedule">
							<div class="anketa__office-schedule-block">
								<div class="anketa__office-schedule-block-title">Пн</div>
								<div class="anketa__office-schedule-block-val">11:00 — 20:00</div>
							</div>
							<div class="anketa__office-schedule-block">
								<div class="anketa__office-schedule-block-title">Вт — Пт</div>
								<div class="anketa__office-schedule-block-val">11:00 — 20:00</div>
							</div>
							<div class="anketa__office-schedule-block">
								<div class="anketa__office-schedule-block-title">Сб</div>
								<div class="anketa__office-schedule-block-val">09:00 — 18:00</div>
							</div>
							<div class="anketa__office-schedule-block">
								<div class="anketa__office-schedule-block-title">Вс</div>
								<div class="anketa__office-schedule-block-val">Выходной</div>
							</div>
						</div>
						<div class="anketa__office-btn">
							<a href="javascript:void(0);" data-anketa-office-map-show class="btn _w100">Выбрать другое отделение</a>
						</div>
					</div>
				</div>
				<div class="hide">
					<div class="anketa__offices-map" data-anketa-office-map>
						<a href="javascript:void(0);" class="anketa__offices-map-marker" data-anketa-office-map-marker></a>
						<div class="anketa__offices-map-popup hide" data-anketa-office-map-marker-popup>
							<a href="javascript:void(0);" onclick="$.fancybox.close();"   class="anketa__offices-map-popup-close"></a>
							<div class="anketa__office">
								<div class="anketa__office-title">Москва, ул. Богданова, д. 6</div>
								<div class="anketa__office-subtitle">В отделении «Почты России».</div>
								<div class="anketa__office-schedule">
									<div class="anketa__office-schedule-block">
										<div class="anketa__office-schedule-block-title">Пн — Пт</div>
										<div class="anketa__office-schedule-block-val">09:00 — 18:00</div>
									</div>
									<div class="anketa__office-schedule-block">
										<div class="anketa__office-schedule-block-title">Сб — Вс</div>
										<div class="anketa__office-schedule-block-val">Выходные дни</div>
									</div>
								</div>
								<div class="anketa__office-btn">
									<a href="javascript:void(0);" data-anketa-office-set class="btn _w100 _transparent">Выбрать отделение</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="anketa__form-block anketa__form-bottom">
				<div class="anketa__form-bottom-in">
					<div class="anketa__form-bottom-step">
						<div class="anketa__form-bottom-step-num">Анализ анкеты</div>
						<div class="anketa__form-bottom-step-title">до 10 минут</div>
					</div>
					<div class="anketa__form-bottom-btns">
						<a href="javascript:void(0);" class="anketa__form-bottom-btn btn _transparent" data-anketa-goto-btn="4">Назад</a>
						<a href="javascript:void(0);" class="anketa__form-bottom-btn btn" data-anketa-goto-btn="6">Отправить заявку</a>
					</div>
				</div>
			</div>
		</div>
		<div class="anketa__aside">
			<?include "conditions.php"?>
			<div class="anketa__aside-img-wrap">
				<div class="anketa__aside-img"></div>
			</div>
		</div>
	</div>

</div>