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
		setSlide(0);
	});
	$pag.hover(function () {
		$counter.fadeIn();
	},function () {
		$counter.fadeOut();
	});
	function setSlide(n) {
		if(n>0){
			$counterActive.text(n);
		}
		$content.hide().filter('[data-slide-content="'+n+'"]').show();

	}

};
app.masks = function () {
	$('[data-mask-phone]').mask("+7 (999) 999-99-99");
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
		if(app.dom.$window.scrollTop() >= $menu.offset().top ){
			$menu.addClass('_fixed');
		}else{
			$menu.removeClass('_fixed');
		}
	}
};
app.constructor = function () {
	var $constructor = $('[data-constructor]');

	if(!$constructor.length){
		return false;
	}
	var $form = $constructor.find('[data-constructor-form]'),
			$content = $constructor.find('[data-constructor-content]'),
			$code = $constructor.find('[data-constructor-code]'),
			$option = $constructor.find('[data-constructor-option]')
		;

	function helper(data) {
		$content.html(data.body);
		$code.text(data.body);
		$content.find('input[type=checkbox], input[type=radio]').idealRadioCheck();
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
		},'json');
		return false;
	});

	$option.on('change',function () {
		$form.trigger('submit');
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
			months=["Январь","Февраль","Март","Апрель","Май","Июнь","Июль","Август","Сентябрь","Октябрь","Ноябрь","Декабрь"],
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
			$self.text(setMonth(+month + data -1));
		});
	}
};