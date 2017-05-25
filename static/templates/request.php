<?include "../includes/header-empty.php"?>
<div class="constructor" data-constructor>
	<div class="settings-form" data-tabs>
		<form action="generator.php" data-constructor-form>
			<input type="hidden" name="formName" value="request">
			<div class="settings-form__block">
				<div class="settings-form__block-title">1. Тип заявки</div>
				<div class="settings-form__radio-list">
					<label class="settings-form__radio" data-tabs-tab="1"><input type="radio" name="type" checked data-constructor-option value="open">Открытая</label>
					<label class="settings-form__radio" data-tabs-tab="2"><input type="radio" name="type" data-constructor-option value="close">Закрытая</label>
				</div>
			</div>
			<div data-tabs-content="1">
				<div class="settings-form__block">
					<div class="settings-form__block-title">2. Количество полей</div>
					<div class="settings-form__field">
						<select name="fieldsCounter" data-chosen data-constructor-option>
							<option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3" selected>3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
						</select>
					</div>
					<div class="settings-form__check-list">
						<label class="settings-form__check">
							<input type="checkbox" data-constructor-option checked name="check">Checkbox
						</label>
					</div>
				</div>
				<div class="settings-form__block">
					<div class="settings-form__block-title">3. Оформление</div>
					<div class="settings-form__radio-list">
						<label class="settings-form__radio"><input type="radio" name="openDecor" checked data-constructor-option value="none">Не использовать</label>
						<label class="settings-form__radio"><input type="radio" name="openDecor" data-constructor-option value="img">Изображение</label>
					</div>
				</div>
			</div>
			<div data-tabs-content="2" class="hide">
				<div class="settings-form__block">
					<div class="settings-form__block-title">2. Оформление</div>
					<div class="settings-form__radio-list">
						<label class="settings-form__radio"><input type="radio" name="closeDecor" checked data-constructor-option value="none">Не использовать</label>
						<label class="settings-form__radio"><input type="radio" name="closeDecor" data-constructor-option value="img">Изображение</label>
					</div>
				</div>
			</div>
		</form>
	</div>
	<div class="grid__inner">
		<div class="constructor__title h2">Заявка</div>
		<div class="constructor__content" data-constructor-content></div>
		<pre class="constructor__content" data-constructor-code></pre>
	</div>
</div>
<?include "../includes/footer-empty.php"?>

