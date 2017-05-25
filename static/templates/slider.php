<?include "../includes/header-empty.php"?>
<div class="constructor" data-constructor>
	<div class="settings-form">
		<form action="generator.php" data-constructor-form>
			<input type="hidden" name="formName" value="slider">
			<div class="settings-form__block">
				<div class="settings-form__block-title">1. Количество слайдов</div>
				<div class="settings-form__field">
					<select name="slidesCounter"  data-constructor-option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7" selected>7</option>
						<option value="8">8</option>
					</select>
				</div>
			</div>
			<div class="settings-form__block">
				<div class="settings-form__block-title">2. Подстрочник</div>
				<div class="settings-form__radio-list">
					<label class="settings-form__radio"><input type="radio" name="subtitle" checked data-constructor-option value="none">Не использовать</label>
					<label class="settings-form__radio"><input type="radio" name="subtitle" checked data-constructor-option value="text">Текст</label>
					<label class="settings-form__radio"><input type="radio" name="subtitle" data-constructor-option value="val">Значения</label>
					<label class="settings-form__radio"><input type="radio" name="subtitle" data-constructor-option value="list">Список</label>
				</div>
				<div class="settings-form__check-list">
					<label class="settings-form__check">
						<input type="checkbox" data-constructor-option checked name="video">Видео
					</label>
				</div>
			</div>
			<div class="settings-form__block">
				<div class="settings-form__block-title">3. Подложка</div>
				<div class="settings-form__radio-list">
					<label class="settings-form__radio"><input type="radio" name="substrate" data-constructor-option value="none">Не использовать</label>
					<label class="settings-form__radio"><input type="radio" name="substrate" checked data-constructor-option value="red">Алая</label>
					<label class="settings-form__radio"><input type="radio" name="substrate" data-constructor-option value="blue">Синяя</label>
				</div>
			</div>
			<div class="settings-form__block">
				<div class="settings-form__block-title">4. Оформление</div>
				<div class="settings-form__radio-list">
					<label class="settings-form__radio"><input type="radio" name="decor" checked data-constructor-option value="none">Не использовать</label>
					<label class="settings-form__radio"><input type="radio" name="decor" data-constructor-option value="mark">Марка</label>
					<label class="settings-form__radio"><input type="radio" name="decor" data-constructor-option value="pattern">Паттерн</label>
				</div>
			</div>
		</form>
	</div>
	<div class="grid__inner">
		<div class="constructor__title h2">Слайдер</div>
		<div class="constructor__content" data-constructor-content></div>
		<pre class="constructor__content" data-constructor-code></pre>
	</div>
</div>
<?include "../includes/footer-empty.php"?>

