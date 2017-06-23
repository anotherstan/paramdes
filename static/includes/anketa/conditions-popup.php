<div class="anketa__conditions-popup" data-anketa-conditions-popup>
	<div class="anketa__form-block">
		<div class="b-block__title h4 anketa__form-block-title">Условия кредитования</div>
		<div class="credit-calc__options anketa__calc" data-credit-calc>
			<div class="credit-calc__option" data-credit-calc-option>
				<div class="credit-calc__option-title">Сумма кредита</div>
				<div class="credit-calc__option-block">
					<div class="credit-calc__option-field">
						<span class="rub credit-calc__option-rub"></span>
						<input type="text" value="500 000" data-credit-calc-option-inp data-credit-calc-popup-sum>
					</div>
					<div class="calc__sum-slider" data-credit-calc-option-slider='{
								"min":0,
								"max":1000000,
								"step":500,
								"value":500000}'>

					</div>
				</div>
			</div>
			<div class="credit-calc__option" data-credit-calc-option="date">
				<div class="credit-calc__option-title">Срок кредита</div>
				<div class="credit-calc__option-block">
					<div class="credit-calc__option-field">
						<input type="text" value="24 месяца" data-credit-calc-option-inp data-credit-calc-popup-period>
					</div>
					<div class="calc__sum-slider" data-credit-calc-option-slider='{
								"min":1,
								"max":60,
								"step":1,
								"value":24}'>
					</div>
				</div>
			</div>
			<div class="credit-calc__option">
				<div class="credit-calc__option-title">Ежемесячный платеж</div>
				<div class="credit-calc__option-block">
					<div class="credit-calc__option-field">
						<span class="rub credit-calc__option-rub"></span>
						<input type="text" value="25 460">
					</div>
				</div>
			</div>
			<div class="b-form__check-list">
				<div class="b-form__check"><label><input type="checkbox">Гарантированная ставка</label></div>
				<div class="b-form__check"><label><input type="checkbox" data-check-toggle="insuranceProtection">Страховая защита</label></div>
			</div>
			<div class="b-form__row hide" data-check-toggle-content="insuranceProtection">
				<div class="b-form__radio">
					<label class="b-form__radio-btn _w50">
						<input type="radio" name="gender" checked>
						<span class="b-form__radio-text">
							Новый стандарт
							<span class="help">
								<a href="#" class="help__ico">?</a>
							</span>
						</span>
					</label>
					<label class="b-form__radio-btn _w50">
						<input type="radio" name="gender">
						<span class="b-form__radio-text">
							Новый максимум
							<span class="help">
								<a href="#" class="help__ico">?</a>
							</span>
						</span>
					</label>
				</div>
			</div>
		</div>
	</div>
	<div class="anketa__form-block anketa__form-bottom">
		<div class="anketa__form-bottom-in">
			<div class="clearfix">
				<a href="javascript:$.fancybox.close();" class="anketa__form-bottom-btn btn _transparent" >Отменить</a>
				<a href="javascript:void(0);" data-anketa-conditions-popup-save class="anketa__form-bottom-btn btn">Сохранить изменения</a>
			</div>
		</div>
	</div>
</div>