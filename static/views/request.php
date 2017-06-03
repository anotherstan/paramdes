<div class="b-block <?=$parameters['type'] == 'close' ? '  _transparent request-form__close':'' ?>"  data-constructor-content="request">
	<a href="javascript:void(0);" class="b-block__edit" data-block-edit-btn="request"></a>
	<div class="b-block__title h3 <?=$parameters['type'] == 'open' ? '  _dash':'' ?>">Заголовок</div>
	<div class="b-block__subtitle">Подстрочник.</div>
<?if($parameters['type'] == 'close' && $parameters['closeDecor'] && $parameters['closeDecor']!='none'){?>
		<div class="request-form__img"></div>
<?}?>
	<div class="request-form">
<?if($parameters['type'] == 'open' && $parameters['openDecor'] && $parameters['openDecor']!='none'){?>
		<div class="request-form__img"></div>
<?}?>
		<div class="request-form__block b-form">
			<form action="">
<?if($parameters['type'] == 'open'){for ($i = 0; $i < $parameters['fieldsCounter']; $i++) { ?>
				<div class="b-form__row">
					<div class="b-form__block">
						<div class="b-form__block-field">
							<input type="text" placeholder="Placeholder" >
						</div>
					</div>
				</div>
<?}if ($parameters['check']){?>
				<div class="b-form__row">
					<div class="b-form__block">
						<div class="b-check b-form__check">
							<label><input type="checkbox" checked > Checkbox</label>
						</div>
					</div>
				</div>
<?}}?>
				<div class="b-form__btn-wrap">
					<button type="submit" class="btn">Оформить карту</button>
					<a href="#" class="btn _transparent">Заказать звонок</a>
				</div>
			</form>
		</div>
	</div>
</div>

