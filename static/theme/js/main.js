app = {};


$(function () {
	app.dom = {
		$window		: $(window),
		$body	: $('body'),
		$document	: $(document),
		$grid:$('.grid'),
		$header:$('.header'),
		$footer:$('.footer')
	};
	app.init();

});
app.utils = {};
app.utils.okonchanie = function( number, one, two, five ) {

	var poslezpt = parseInt( number ) !== parseFloat( number );

	number += '';
	// 10 - 19 || 5 - 10
	if ( (number.length > 1 && +number.substr( number.length - 2, 1) == '1') || +number.substr( number.length - 1, 1 ) > 4  && +number.substr( number.length - 1, 1 ) < 10 && !poslezpt ){
		return five;
	}
	// 1
	else if ( number.substr( number.length - 1, 1) == '1' && !poslezpt )
	{
		return one;
	}
	// 2 - 4, 1.5
	else
	{
		return two;
	}
};

app.init = function () {
	$('input[type=checkbox], input[type=radio]').idealRadioCheck();
	app.getCard();
	app.initNav();
	app.questions();
	app.masks();
	app.benefits();
	app.pageMenu();
	app.calc();
	app.initTabs();
	app.constructor();
	app.initChosen();
	app.footer();
	app.about();
	app.creditCalc();
	app.anketa();
	app.popups();
	app.checkToggle();
	app.anketaAddress();

};
app.popups = function () {
	var $popups = $('[data-popup]'),
			$popupShowBtn = $('[data-popup-show]'),
			popupId = null,
			$content = null
		;
	$popupShowBtn.on('click', function () {
		var $self = $(this),
				data = $self.data('popupShow');

		$content = $popups.filter('[data-popup="' + data + '"]');

		$.fancybox({
			wrapCSS: 'fc-base _popups',
			content: $content,
			fitToView: false,
			autoWidth: true,
			autoResize: true,
			padding: 0,
			margin:[120,10,10,60]
		});
	});

};
app.anketaAddress=function () {
	var $anketa = $('[data-anketa]'),
			$check = $anketa.find('[data-anketa-address-check]'),
			$addressRegistration = $anketa.find('[data-anketa-address="registration"]'),
			$addressResidence = $anketa.find('[data-anketa-address="residence"]'),
			$addressRegistrationFields = $addressRegistration.find('[data-anketa-address-field]'),
			$addressResidenceFields = $addressResidence.find('[data-anketa-address-field]')
		;

	$check.on('change',function () {
		if($(this).is(':checked')){
			$addressRegistrationFields.each(function () {
				var $self = $(this),
						data = $self.data('anketaAddressField')
					;
				$self.val($addressResidenceFields.filter('[data-anketa-address-field="'+data+'"]').val());
				$self.closest('[data-form-field]').addClass('_disabled _focus');
				if($self.is('select')){
					$self.trigger('chosen:updated');
				}
			});
		}else{
			$addressRegistrationFields.each(function () {
				$(this).removeClass('_focus').val('').change().closest('[data-form-field]').removeClass('_disabled _focus');
				if($(this).is('select')){
					$(this).trigger('chosen:updated');
				}
			});
		}
	});
};
app.anketa=function () {
	var $anketa = $('[data-anketa]'),
		$nav = $anketa.find('[data-anketa-nav]'),
		$navStep = $anketa.find('[data-anketa-nav-step]'),
		$gotoBtn = $anketa.find('[ data-anketa-goto-btn]'),
		$steps = $anketa.find('[data-anketa-step]'),
		selectedStep = 1,
		$fields = $anketa.find('[data-form-field]'),
		$inputs = $anketa.find('[data-form-field-inp]'),
		$autocomplete = $anketa.find('[data-autocomplete]'),
		$autocompleteInp = $autocomplete.find('[data-autocomplete-inp]'),
		$autocompleteLink = $autocomplete.find('[data-autocomplete-link]'),
		$selects = $anketa.find('select'),
		errors = false
	;
	$autocompleteInp.on('keyup',function () {
		var $self = $(this);
		$self.closest($autocomplete).addClass('_autocomplete-show');
	});
	$autocompleteInp.on('blur',function () {
		var $self = $(this);
		setTimeout(function () {
			$self.closest($autocomplete).removeClass('_autocomplete-show');
		},300);

	});
	$autocompleteLink.on('click',function () {
		var $self = $(this),
				text = $self.text()
			;

		if($self.find('.autocomplete-title').length){
			text = $self.find('.autocomplete-title').text();
		}

		$self.closest($autocomplete).find($autocompleteInp).val(text).change();
	});

	$gotoBtn.on('click',function () {
		setStep($(this).data('anketaGotoBtn'));
	});
	app.setStep = function (n) {
		selectedStep = n;
		$steps.hide();
		$steps.filter('[data-anketa-step="'+n+'"]').show();
		$navStep.removeClass('_past _active')
			.filter('[data-anketa-nav-step="'+n+'"]')
			.addClass('_active')
			.prevAll()
			.addClass('_past')
		;
		$('html, body').stop(true, true).animate({'scrollTop': 0},300);
	};
	$navStep.on('click',function () {
		var n = $(this).data('anketaNavStep');
		if(n<selectedStep){
			setStep(n);
		}
	});
	$selects.change(function () {
		$(this).closest($fields).removeClass('_error').addClass('_focus');
	});
	$inputs.focus(function () {
		$(this).addClass('_focus').closest($fields).removeClass('_error');
	});

	$inputs.blur(function () {
		if($(this).val() == '') {
			$(this).removeClass('_focus');
		}
	});

	function validate($items) {
		errors = false;
		$items.each(function () {
			var $self = $(this);
			if($.trim($self.val()) == ''){
				$self.closest('[data-form-field]').addClass('_error');
				errors = true;
				console.log($self.val());
			}else{
				$self.closest('[data-form-field]').removeClass('_error');
			}
		});
		return errors;
	}


	function setStep(n) {
		if(selectedStep == n){
			return false;
		}
		var $activeStep = $steps.filter('[data-anketa-step="'+selectedStep+'"]');

		if(n>selectedStep){
			if(validate($activeStep.find($('[data-required]')))){
				$('html, body').stop(true, true).animate({'scrollTop': $activeStep.find('.b-form__block._error').first().offset().top},300);
				return false;
			}
		}
		selectedStep = n;
		$activeStep.hide();
		$steps.filter('[data-anketa-step="'+n+'"]').show();
		$navStep.removeClass('_past _active')
						.filter('[data-anketa-nav-step="'+n+'"]')
						.addClass('_active')
						.prevAll()
						.addClass('_past')
		;
		$('html, body').stop(true, true).animate({'scrollTop': 0},300);
	}
	

};
app.about=function () {
	var $about = $('[data-about]'),
			$counter = $about.find('[data-about-counter]'),
			$counterActive = $about.find('[data-about-counter-active]'),
			$pag = $about.find('[data-about-pag]'),
			$pagItem = $about.find('[data-about-pag-item]'),
			$content = $about.find('[data-slide-content]'),
			swiper = null
		;
	 swiper = new Swiper($pag, {
		slidesPerView: 4,
		simulateTouch: false,
		nextButton:$('[data-about-slider-next]'),
		prevButton:$('[data-about-slider-prev]')
	});
	$pagItem.hover(function () {
		setSlide($(this).data('aboutPagItem'));
	},function () {
		//setSlide(0);
	});
	/*$pag.hover(function () {
		$counter.fadeIn();
	},function () {
		$counter.fadeOut();
	});*/
	function setSlide(n) {
		$counterActive.text(n);
		$content.hide().filter('[data-slide-content="'+n+'"]').show();
		$pagItem.removeClass('_active').filter('[data-about-pag-item="'+n+'"]').addClass('_active');

	}

};
app.footer=function () {
	_helper();
	app.dom.$window.resize(_helper);
	function _helper() {
		//app.dom.$grid.css({ marginBottom : app.dom.$window.height()});
	}

};
app.masks = function () {
	$('[data-mask-phone]').mask("+7 (999) 999-99-99");
	$('[data-mask-snils]').mask("999-999-999 99");
	$('[data-date-mask]').mask("99.99.9999");
};
app.checkToggle = function () {
	var $check = $('[data-check-toggle]'),
			$content = $('[data-check-toggle-content]')
		;
	$check.on('change',function () {
		var $self = $(this),
				data = $self.data('checkToggle'),
				$block = $content.filter('[data-check-toggle-content="'+data+'"]')
			;
		if($self.is(':checked')){
			$block.slideDown();
		}else{
			$block.slideUp();
		}
	});
};

app.formatNumber = function (value) {
	return String(value).replace(/(?=\B(?:\d{3})+\b)/g, ' ');
};
app.initChosen = function () {
	$('[data-chosen]').chosen({
		disable_search_threshold: 1000,
		no_results_text:"Нет результатов для",
		width: "100%"
	});
};
app.questions = function () {
	var $questions = $('[data-questions]'),
			$question = $questions.find('[data-questions-item]'),
			$questionTitle = $question.find('[data-questions-item-title]'),
			$questionAnswer = $question.find('[data-questions-item-answer]')
		;

	/*$questionTitle.on('click',function () {
		var $self = $(this);
		if($self.hasClass('_active')){
			$self.closest($question).find($questionAnswer).slideUp(300);
		}else{
			$questionAnswer.slideUp(300);
			$questionTitle.removeClass('_active');
			$self.closest($question).find($questionAnswer).slideDown(300);
		}
		$self.toggleClass('_active');
	});*/

	$('html').on('click','[data-questions-item-title]',function () {
		var $self = $(this);
		if($self.hasClass('_active')){
			$self.closest('[data-questions-item]').find('[data-questions-item-answer]').slideUp(300);
		}else{
			$questionAnswer.slideUp(300);
			$questionTitle.removeClass('_active');
			$self.closest('[data-questions-item]').find('[data-questions-item-answer]').slideDown(300);
		}
		$self.toggleClass('_active');
	});

};
app.initTabs = function () {
	var self = this,
			$closest = null,
			$tabs = null,
			$content = null

		;
	$('html').on('click.tabs','[data-tabs-tab]',function(){
		var $self = $(this);
		if(!($self.hasClass('_active')|| $self.hasClass('_disabled'))){
			$closest = $self.closest('[data-tabs]');
			$tabs = $closest.find('[data-tabs-tab]');
			$content = $closest.find('[data-tabs-content]');

			$tabs.removeClass('_active');
			$self.addClass('_active');
			$content.hide().filter('[data-tabs-content="'+$self.data('tabsTab')+'"]').show();
		}
	});
};
app.initNav = function () {
	var self = this;

	//$('html').off('click.nav');
	$('html').on('click.nav','[data-nav-btn]',function(){
		var $self = $(this);
		if($self.data('navBtn') == 'fade'){
			$self.closest('[data-nav-block]').find('[data-nav-content]').fadeToggle(500);
		}else{
			$self.closest('[data-nav-block]').find('[data-nav-content]').slideToggle(500);
		}

		$self.closest('[data-nav-block]').find('[data-nav-btn]').toggleClass('_active');
		$self.closest('[data-nav-block]').find('[data-nav-text]').toggle();
	});
};

app.getCard = function () {
	var $block = $('[data-get-card]'),
			$form = $block.find('[data-get-card-form]'),
			$counter = $block.find('[data-get-card-steps-counter]'),
			$steps = $block.find('[data-get-card-step]'),
			$blockHtml = $block.find('[data-get-card-html]'),
			$blockText = $block.find('[data-get-card-text]')
		;
	$.post($form.attr('action'), $form.serialize(), function(data){
		$blockHtml.html(data.body);
		$blockText.text(data.body);
		$blockHtml.find('input[type=checkbox], input[type=radio]').idealRadioCheck();
	},'json');

	$form.on('submit',function () {
		$.post($form.attr('action'), $form.serialize(), function(data){
			$blockHtml.html(data.body);
			$blockText.text(data.body);
			$blockHtml.find('input[type=checkbox], input[type=radio]').idealRadioCheck();
		},'json');
		return false;
	});
	$counter.on('change',function () {
		$steps.hide().slice(0,$counter.val()).show();
		$form.trigger('submit');
	});
};

app.benefits = function () {
	var $block = $('[data-benefits]'),
			$tab = $block.find('[data-benefits-tab]'),
			$slide = $block.find('[data-benefits-slide]')
		;
	$tab.on('click',function () {
		if($(this).hasClass('_active')){
			return false;
		}
		setSlide($(this).data('benefitsTab'));
	});
	$tab.hover(function () {
		if($(this).hasClass('_active')){
			return false;
		}
		setSlide($(this).data('benefitsTab'));
	},function () {
		
	});
	function  setSlide(n) {
		$tab.removeClass('_active').filter('[data-benefits-tab="'+n+'"]').addClass('_active');
		$slide.hide().filter('[data-benefits-slide="'+n+'"]').show();
	}
};
app.pageMenu = function () {
	var $menu = $('[data-page-menu]');

	if(!$menu.length){
		return false;
	}
	var throttled = _.throttle(updateMenu, 10);
	app.dom.$window.on('scroll',throttled);
	updateMenu();

	function updateMenu() {
		if(app.dom.$window.scrollTop() >= $menu.offset().top && app.dom.$window.scrollTop() <= (app.dom.$body.height() - app.dom.$window.height())){
			$menu.addClass('_fixed');
		}else{
			$menu.removeClass('_fixed');
		}
	}
};
app.constructor = function () {
	var $constructorsBlocks = $('[data-constructors-block]');
	var $constructors = $constructorsBlocks.find('[data-constructor]');
	var $constructorsBlock = $('[data-constructor-block]');
	var $editBtn = $('[data-block-edit-btn]');
	if(!$constructors.length){
		return false;
	}
	$constructors.each(function () {
		var $constructor = $(this),
			  $form = $constructor.find('[data-constructor-form]'),
			  $saveBtn = $constructor.find('[data-constructor-form-save]'),
			  $cancelBtn = $constructor.find('[data-constructor-form-cancel]'),
			  $closeBtn = $constructor.find('[data-constructor-close]'),
				$content = $('[data-constructor-content="'+$constructor.find('input[name=formName]').val()+'"]'),
				$code = $constructor.find('[data-constructor-code]'),
				$option = $constructor.find('[data-constructor-option]'),
				options = ''
			;
		function helper(data) {
			$content.html($(data.body).html());
			$code.text(data.body);
			$content.find('input[type=checkbox], input[type=radio]').idealRadioCheck();
			$constructorsBlock.html(data.body);
			if($(data.body).find('[data-about-pag]').length){
				app.about();
			}
		}
		$.post($form.attr('action'), $form.serialize(), function(data){
			helper(data);
		},'json');

		$form.find('[data-chosen]').chosen({
			disable_search_threshold: 1000,
			no_results_text:"Нет результатов для",
			width: "100%"
		});

		$form.on('submit',function () {
			$.post($form.attr('action'), $form.serialize(), function(data){
				helper(data);
				options = JSON.stringify($form.serializeJSON());

			},'json');
			return false;

		});
		$saveBtn.on('click',function () {
			setCookie($form.find('input[name=formName]').val(),options, {path: '/'});
			$constructor.removeClass('_active');
			app.dom.$body.removeClass('_show-form');
		});
		$cancelBtn.on('click',function () {
			location.reload();
		});
		$option.on('change',function () {
			$form.trigger('submit');
		});
		$closeBtn.on('click',function () {
			$constructor.removeClass('_active');
			app.dom.$body.removeClass('_show-form');
		});
	});
	$('html').on('click','[data-block-edit-btn]',function () {
		var $self = $(this);
		app.dom.$body.addClass('_show-form');
		$constructors.removeClass('_active').filter('[data-constructor="'+$self.data('blockEditBtn')+'"]').addClass('_active');
	});

};
app.calc = function(){
	var self = this,
			$calc = $('[data-calc]'),
			$sum = $calc.find('[data-calc-sum]'),
			$sumSlider = $sum.find('[data-calc-sum-slider]'),
			$sumInp = $sum.find('[data-calc-sum-inp]'),
			$monthSelect = $calc.find('[data-calc-month-field]'),
			$sheduleMonth = $calc.find('[data-calc-schedule-month]'),
			$minPayment = $calc.find('[data-calc-min-payment]'),
			$restPayment = $calc.find('[data-calc-rest-payment]'),
			calcData = $sumSlider.data('calcSumSlider'),
			months=["В январе","в Феврале","в Марте","в Апреле","в Мае","в Июне","в Июле"," в Августе","в Сентябре"," в Октябре","в Ноябре","в Декабре"],
			sum = null,
			month = null,
			startSumValue = null,
			val = null

		;
	if(!$calc.length){
		return false;
	}
	month = calcData.month;
	$monthSelect.val(month);
	$monthSelect.on('change',function () {
		month = $(this).val();
		calculate();
	});
	$sumSlider.slider({
		range: "min",
		min: calcData.min,
		max: calcData.max,
		step: calcData.step,
		value: calcData.value || calcData.min,
		slide: function( event, ui ){
			calculate();
			$sumInp.val(app.formatNumber(ui.value));
		},
		start: function( event, ui ){
			startSumValue = ui.value;
		},
		stop: function( event, ui ){
			if(ui.value != startSumValue){
				calculate();
				$sumInp.val(app.formatNumber(ui.value));
			}
		}
	});
	$sumInp.focus(function () {
		val = parseInt($sumInp.val().replace(new RegExp(" ",'g'),""),10);
		$sumInp.val(val);
	}).keyup(function () {

	});
	$sumInp.val(app.formatNumber(calcData.value)).change();

	$sumInp.on('change',function(){
		var val1 = parseInt($sumInp.val().replace(new RegExp(" ",'g'),""),10) || calcData.min;
		val = Math.min(Math.max(calcData.min, val1),calcData.max);
		$sumSlider.slider("value",val);
		$sumInp.val(app.formatNumber(val));
		calculate();
	});
	calculate();

	function setMonth(n) {
		var num = n;
		if(num>=months.length){
			num=num-months.length;
		}
		return  months[num];
	}

	function calculate() {
		sum = parseInt($sumInp.val().replace(new RegExp(" ",'g'),""),10);
		$minPayment.text(app.formatNumber(sum*0.05));
		$restPayment.text(app.formatNumber(sum*0.9));

		$sheduleMonth.each(function (index) {
			var $self = $(this),
					data = +$self.data('calcScheduleMonth')
				;
			$self.text(setMonth(+month + data));
		});
	}
};
app.creditCalc = function(){
	var self = this,
			$calc = $('[data-credit-calc]'),
			$option = $calc.find('[data-credit-calc-option]')

		;
	if(!$calc.length){
		return false;
	}
	function setVal(val,type) {
		return type == 'date' ? val +' '+ app.utils.okonchanie(val,'месяц','месяца','месяцев'): val;
	}
	$option.each(function () {
		var $self = $(this),
			$inp = $self.find('[data-credit-calc-option-inp]'),
			$slider = $self.find('[data-credit-calc-option-slider]'),
			calcData = $slider.data('creditCalcOptionSlider'),
			val = null,
			type = 	$self.data('creditCalcOption')
		;
		$slider.slider({
			range: "min",
			min: calcData.min,
			max: calcData.max,
			step: calcData.step,
			value: calcData.value || calcData.min,
			slide: function( event, ui ){
				$inp.val(setVal(app.formatNumber(ui.value),type));
			},
			start: function( event, ui ){
				//startSumValue = ui.value;
			},
			stop: function( event, ui ){
				$inp.val(setVal(app.formatNumber(ui.value),type));
			}
		});
		$inp.focus(function () {
			val = parseInt($inp.val().replace(new RegExp(" ",'g'),""),10);
			$inp.val(val);
		}).keyup(function () {

		});
		//$inp.val(setVal(app.formatNumber(calcData.value)),type).change();

		$inp.on('change',function(){
			var val1 = parseInt($inp.val().replace(new RegExp(" ",'g'),""),10) || calcData.min;
			val = Math.min(Math.max(calcData.min, val1),calcData.max);
			$slider.slider("value",val);
			$inp.val(setVal(app.formatNumber(val),type));
		});
	});
};