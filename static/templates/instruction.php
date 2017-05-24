<?include "../includes/header-empty.php"?>
<div class="constructor" data-constructor>
	<div class="settings-form">
		<form action="generator.php" data-constructor-form>
			<input type="hidden" name="formName" value="instruction">
			<div class="settings-form__block">
				<div class="settings-form__block-title">1. Количество шагов</div>
				<div class="settings-form__field">
					<select name="stepsCounter" data-constructor-option>
						<option value="0">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
					</select>
				</div>
			</div>
			<div class="settings-form__block">
				<div class="settings-form__block-title">2. Оформление</div>
				<div class="settings-form__radio-list">
					<label class="settings-form__radio"><input type="radio" name="decor" checked data-constructor-option value="none">Не использовать</label>
					<label class="settings-form__radio"><input type="radio" name="decor" data-constructor-option value="icons">Иконки</label>
				</div>
			</div>
		</form>
	</div>
	<div class="grid__inner">
		<div class="constructor__title h2">Инструкция</div>
		<div class="constructor__content" data-constructor-content></div>
		<pre class="constructor__content" data-constructor-code></pre>
	</div>
</div>
<?include "../includes/footer-empty.php"?>

