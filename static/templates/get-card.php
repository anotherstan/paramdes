<?include "../includes/header.php"?>
<div data-get-card>
	<div class="grid__inner">
		<h3>Настройки</h3>
		<form action="" data-get-card-form>
			<div class="h5">Кол-во пунктов</div>
			<div>
				<select data-chosen data-get-card-steps-counter>
					<option value="2">2</option>
					<option value="3" selected>3</option>
					<option value="4">4</option>
				</select>
			</div>
			<div data-get-card-step>
				<div class="h5">Пункт 1</div>
				<input type="text" data-get-card-step-ico placeholder="Путь к изображению" value="/static/theme/images/icons/get-card/1.svg">
				<input type="text" data-get-card-step-title placeholder="Заголовок" value="1. Подайте заявку">
				<input type="text" data-get-card-step-text placeholder="Текст" value="В клиентском центре, на стойке продаж или на сайте.">
			</div>
			<div data-get-card-step>
				<div class="h5">Пункт 2</div>
				<input type="text" data-get-card-step-ico placeholder="Путь к изображению" value="/static/theme/images/icons/get-card/2.svg">
				<input type="text" data-get-card-step-title placeholder="Заголовок" value="2. Узнайте решение">
				<input type="text" data-get-card-step-text placeholder="Текст" value="Ваша заявка будет рассмотрена в течение 5 минут.">
			</div>
			<div data-get-card-step>
				<div class="h5">Пункт 3</div>
				<input type="text" data-get-card-step-ico placeholder="Путь к изображению" value="/static/theme/images/icons/get-card/3.svg">
				<input type="text" data-get-card-step-title placeholder="Заголовок" value="3. Дождитесь выпуска">
				<input type="text" data-get-card-step-text placeholder="Текст" value="Получите карту в выбранном отделении Банка.">
			</div>
			<div class="hide" data-get-card-step>
				<div class="h5">Пункт 4</div>
				<input type="text" data-get-card-step-ico placeholder="Путь к изображению">
				<input type="text" data-get-card-step-title placeholder="Заголовок" value="4. Заголовок">
				<input type="text" data-get-card-step-text placeholder="Текст" value="Текст">
			</div>
			<p> </p>
			<button type="submit">Применить</button>
		</form>
	</div>
	<div class="grid__inner">
		<h3>Внешний вид</h3>
	</div>

	<div data-get-card-html>

	</div>
	<div class="grid__inner">
		<h3>HTML код</h3>
		<div data-get-card-text>

		</div>
	</div>

</div>
<?include "../includes/footer.php"?>

