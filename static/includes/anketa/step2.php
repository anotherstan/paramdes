<div class="anketa__step">
	<div class="clearfix">
		<div class="anketa__form">
			<div class="anketa__form-block">
				<div class="b-block__title h4 _dash anketa__form-block-title">Личная информация</div>
				<div class="b-form__row">
					<div class="b-form__radio">
						<label class="b-form__radio-btn _w50"><input type="radio" name="gender" checked><span class="b-form__radio-text">Мужчина</span></label>
						<label class="b-form__radio-btn _w50"><input type="radio" name="gender"><span class="b-form__radio-text">Женщина</span></label>
					</div>
				</div>
				<div class="b-form__row">
					<div class="b-form__block" data-form-field>
						<div class="b-form__field">
							<select data-chosen  data-required>
								<option value=""></option>
								<option value="Служу / Работаю">Служу / Работаю</option>
								<option value="Студент">Студент</option>
								<option value="Пенсионер">Пенсионер</option>
								<option value="Домохозяйка">Домохозяйка</option>
								<option value="Не работаю">Не работаю</option>
							</select>
							<div class="b-form__placeholder">Социальный статус</div>
						</div>
						<div class="b-form__error">Были допущены ошибки или поле оставлено пустым.</div>
					</div>
				</div>
				<div class="b-form__check-list">
					<div class="b-form__check"><label><input type="checkbox" data-check-toggle="surnameChange">Я менял фамилию</label></div>
				</div>
				<div class="b-form__row hide" data-check-toggle-content="surnameChange">
					<div class="b-form__block" data-form-field>
						<div class="b-form__field" data-autocomplete>
							<input type="text" data-form-field-inp data-autocomplete-inp>
							<div class="b-form__placeholder">Старая фамилия</div>
							<?include "autocomplate.php"?>
						</div>
						<div class="b-form__error">Были допущены ошибки или поле оставлено пустым.</div>
					</div>
				</div>
			</div>
			<div class="anketa__form-block" data-anketa-address="residence">
				<div class="b-block__title h4 _dash anketa__form-block-title">Адрес проживания</div>
				<div class="b-form__row">
					<div class="b-form__block" data-form-field>
						<div class="b-form__field">
							<input type="text" data-form-field-inp data-num-mask data-anketa-address-field="index" data-required>
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
							<input type="text" data-form-field-inp data-mask-phone  data-required>
							<div class="b-form__placeholder">Телефон</div>
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
						<div class="b-form__error">Были допущены ошибки или поле оставлено пустым.</div>
					</div>
				</div>
				<div class="b-form__check-list">
					<div class="b-form__check"><label><input type="checkbox" checked>Я не являюсь ИПДЛ/РПДЛ<span class="help">
								<a href="#" class="help__ico">?</a>
							</span></label></div>
				</div>
			</div>
			<div class="anketa__form-block anketa__form-bottom">
				<div class="anketa__form-bottom-in">
					<div class="anketa__form-bottom-step">
						<div class="anketa__form-bottom-step-num">Шаг 3</div>
						<div class="anketa__form-bottom-step-title">Паспорт</div>
					</div>
					<div class="anketa__form-bottom-btns">
						<a href="javascript:void(0);" class="anketa__form-bottom-btn btn _transparent" data-anketa-goto-btn="1">Назад</a>
						<a href="javascript:void(0);" class="anketa__form-bottom-btn btn" data-anketa-goto-btn="3">Перейти далее</a>
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