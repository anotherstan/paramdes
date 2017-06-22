<div class="anketa__step">
	<div class="clearfix">
		<div class="anketa__form">
			<div class="anketa__form-block">
				<div class="b-block__title h4 _dash anketa__form-block-title">Паспорт</div>
				<div class="b-form__row">
					<div class="b-form__block _w50" data-form-field>
						<div class="b-form__field">
							<input type="text" data-form-field-inp  data-required>
							<div class="b-form__placeholder">Серия</div>
						</div>
						<div class="b-form__error">Были допущены ошибки или поле оставлено пустым.</div>
					</div>
					<div class="b-form__block _w50" data-form-field>
						<div class="b-form__field">
							<input type="text" data-form-field-inp data-required>
							<div class="b-form__placeholder">Номер</div>
						</div>
						<div class="b-form__error">Были допущены ошибки или поле оставлено пустым.</div>
					</div>
				</div>
				<div class="b-form__row">
					<div class="b-form__block" data-form-field>
						<div class="b-form__field">
							<input type="text" data-form-field-inp data-required data-date-mask>
							<div class="b-form__placeholder">Дата выдачи</div>
						</div>
						<div class="b-form__error">Были допущены ошибки или поле оставлено пустым.</div>
					</div>
				</div>
				<div class="b-form__row">
					<div class="b-form__block" data-form-field>
						<div class="b-form__field">
							<input type="text" data-form-field-inp data-required>
							<div class="b-form__placeholder">Код подразделения</div>
						</div>
						<div class="b-form__error">Были допущены ошибки или поле оставлено пустым.</div>
					</div>
				</div>
				<div class="b-form__row">
					<div class="b-form__block" data-form-field>
						<div class="b-form__field">
							<input type="text" data-form-field-inp data-required>
							<div class="b-form__placeholder">Место рождения</div>
						</div>
						<div class="b-form__error">Были допущены ошибки или поле оставлено пустым.</div>
					</div>
				</div>
				<div class="b-form__row">
					<div class="b-form__block" data-form-field>
						<div class="b-form__field">
							<input type="text" data-form-field-inp data-required data-date-mask>
							<div class="b-form__placeholder">Дата рождения</div>
						</div>
						<div class="b-form__error">Были допущены ошибки или поле оставлено пустым.</div>
					</div>
				</div>
			</div>
			<div class="anketa__form-block" data-anketa-address="registration">
				<div class="b-block__title h4 _dash anketa__form-block-title">Адрес постоянной регистрации</div>
				<div class="b-form__row _checks">
					<div class="b-form__check-list">
						<div class="b-form__check"><label><input type="checkbox" data-anketa-address-check>Адрес регистрации совпадает с фактическим</label></div>
					</div>
				</div>
				<div class="b-form__row">
					<div class="b-form__block" data-form-field>
						<div class="b-form__field">
							<input type="text" data-form-field-inp data-anketa-address-field="index" data-required>
							<div class="b-form__placeholder">Индекс</div>
						</div>
						<div class="b-form__error">Были допущены ошибки или поле оставлено пустым.</div>
					</div>
				</div>
				<div class="b-form__row">
					<div class="b-form__block" data-form-field>
						<div class="b-form__field" data-autocomplete>
							<input type="text" data-form-field-inp data-anketa-address-field="city" data-required data-autocomplete-inp>
							<div class="b-form__placeholder">Населенный пункт</div>
							<?include "autocomplate.php"?>
						</div>
						<div class="b-form__error">Были допущены ошибки или поле оставлено пустым.</div>
					</div>
				</div>
				<div class="b-form__row">
					<div class="b-form__block" data-form-field>
						<div class="b-form__field" data-autocomplete>
							<input type="text" data-form-field-inp data-anketa-address-field="street"  data-required data-autocomplete-inp>
							<div class="b-form__placeholder">Улица</div>
							<?include "autocomplate.php"?>
						</div>
						<div class="b-form__error">Были допущены ошибки или поле оставлено пустым.</div>
					</div>
				</div>
				<div class="b-form__row">
					<div class="b-form__block _w50" data-form-field>
						<div class="b-form__field" data-autocomplete>
							<input type="text" data-form-field-inp data-anketa-address-field="home" data-required data-autocomplete-inp>
							<div class="b-form__placeholder">Дом</div>
							<?include "autocomplate.php"?>
						</div>
						<div class="b-form__error">Были допущены ошибки или поле оставлено пустым.</div>
					</div>
					<div class="b-form__block _w50" data-form-field>
						<div class="b-form__field">
							<input type="text" data-form-field-inp>
							<div class="b-form__placeholder" data-anketa-address-field="flat" >Квартира</div>
						</div>
						<div class="b-form__error">Были допущены ошибки или поле оставлено пустым.</div>
					</div>
				</div>
				<div class="b-form__row">
					<div class="b-form__block" data-form-field>
						<div class="b-form__field">
							<select data-chosen  data-required data-anketa-address-field="status">
								<option value=""></option>
								<option value="Дача">Дача</option>
								<option value="Собственное, в том числе приватизированное">Собственное, в том числе приватизированное</option>
								<option value="Съемное жилье">Съемное жилье</option>
								<option value="Проживаю у родственников (знакомых)">Проживаю у родственников (знакомых)</option>
								<option value="Муниципальное, служебное">Муниципальное, служебное</option>
							</select>
							<div class="b-form__placeholder">Статус места жительства</div>
						</div>
					</div>
				</div>
				<div class="b-form__row">
					<div class="b-form__block" data-form-field>
						<div class="b-form__field">
							<input type="text" data-form-field-inp  data-required data-date-mask>
							<div class="b-form__placeholder">Дата регистрации</div>
						</div>
						<div class="b-form__error">Были допущены ошибки или поле оставлено пустым.</div>
					</div>
				</div>
			</div>
			<div class="anketa__form-block anketa__form-bottom">
				<div class="anketa__form-bottom-in">
					<div class="anketa__form-bottom-step">
						<div class="anketa__form-bottom-step-num">Шаг 4</div>
						<div class="anketa__form-bottom-step-title">Работа</div>
					</div>
					<div class="anketa__form-bottom-btns">
						<a href="javascript:void(0);" class="anketa__form-bottom-btn btn _transparent" data-anketa-goto-btn="2">Назад</a>
						<a href="javascript:void(0);" class="anketa__form-bottom-btn btn" data-anketa-goto-btn="4">Перейти далее</a>
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