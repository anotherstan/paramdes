<?include "../includes/header.php"?>
<div data-get-card>
	<div class="b-blocks">
		<div class="grid__inner">
			<h3>Настройки</h3>
			<form action="generator.php" data-get-card-form>
				<input type="hidden" name="formName" value="cardSteps">
				<div class="h5">Кол-во пунктов</div>
				<div>
					<select name="stepsCounter" data-chosen data-get-card-steps-counter>
						<option value="2">2</option>
						<option value="3" selected>3</option>
						<option value="4">4</option>
					</select>
				</div>
				<div data-get-card-step>
					<div class="h5">Пункт 1</div>
					<input type="text" name="stepIco[]" placeholder="Путь к изображению" value="/static/theme/images/icons/get-card/1.svg">
					<input type="text" name="stepTitle[]" placeholder="Заголовок" value="1. Подайте заявку">
					<input type="text" name="stepText[]" placeholder="Текст" value="В клиентском центре, на стойке продаж или на сайте.">
				</div>
				<div data-get-card-step>
					<div class="h5">Пункт 2</div>
					<input type="text" name="stepIco[]" placeholder="Путь к изображению" value="/static/theme/images/icons/get-card/2.svg">
					<input type="text" name="stepTitle[]" placeholder="Заголовок" value="2. Узнайте решение">
					<input type="text" name="stepText[]" placeholder="Текст" value="Ваша заявка будет рассмотрена в течение 5 минут.">
				</div>
				<div data-get-card-step>
					<div class="h5">Пункт 3</div>
					<input type="text" name="stepIco[]"  placeholder="Путь к изображению" value="/static/theme/images/icons/get-card/3.svg">
					<input type="text" name="stepTitle[]"  placeholder="Заголовок" value="3. Дождитесь выпуска">
					<input type="text" name="stepText[]" placeholder="Текст" value="Получите карту в выбранном отделении Банка.">
				</div>
				<div class="hide" data-get-card-step>
					<div class="h5">Пункт 4</div>
					<input type="text" name="stepIco[]"  placeholder="Путь к изображению">
					<input type="text" name="stepTitle[]"  placeholder="Заголовок" value="4. Заголовок">
					<input type="text" name="stepText[]"  placeholder="Текст" value="Текст">
				</div>
				<p> </p>
				<button type="submit">Применить</button>
			</form>
			<h3>Внешний вид</h3>
			<div data-get-card-html></div>
			<h3>HTML код</h3>
			<pre data-get-card-text>
			</pre>
		</div>
	</div>

</div>
<?include "../includes/footer.php"?>

