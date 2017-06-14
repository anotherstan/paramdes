<?include "../includes/header-empty.php"?>
<div class="constructor" data-constructor>
	<div class="settings-form">
		<form action="generator.php" data-constructor-form>
			<input type="hidden" name="formName" value="questions">
			<div class="settings-form__block">
				<div class="settings-form__block-title">1. Количество вопросов</div>
				<div class="settings-form__field">
					<select name="questionsCounter" data-chosen data-constructor-option>
						<?for ($i=1;$i<=10;$i++){?>
						<option value="<?=$i?>" <?=$i==3 ? ' selected' :''?>><?=$i?></option>
						<?}?>
					</select>
				</div>
			</div>
			<div class="settings-form__block">
				<div class="settings-form__block-title">2. Выводить по-умолчанию</div>
				<div class="settings-form__field">
					<select name="questionsActiveCounter" data-chosen data-constructor-option>
						<option value="all">Все вопросы</option>
						<?for ($i=1;$i<=10;$i++){?>

							<option value="<?=$i?>"><?=$i?></option>
						<?}?>
					</select>
				</div>
			</div>
		</form>
	</div>
	<div class="grid__inner">
		<div class="constructor__title h2">Частые вопросы</div>
		<div class="constructor__content" data-constructor-content></div>
		<pre class="constructor__content" data-constructor-code></pre>
	</div>
</div>
<?include "../includes/footer-empty.php"?>

