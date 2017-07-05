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
	if ((+number % 10==0) || (number.length > 1 && +number.substr( number.length - 2, 1) == '1') || +number.substr( number.length - 1, 1 ) > 4  && +number.substr( number.length - 1, 1 ) < 10 && !poslezpt ){
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
	app.about();
	app.creditCalc();
	app.anketa();
	app.popups();
	app.checkToggle();
	app.anketaAddress();
	app.anketaOffice();
	app.fancyClose();
	app.mobPhone();
	app.bannerGall();
	app.baseForm();
	app.filter();

	if(!$('[data-no-fixed-footer]').length){
		app.footer();
	}
	function onPlayerReady(event) {
		event.target.playVideo();
	}


};
function onYouTubePlayerAPIReady() {
	$(document).ready(function() {
		$("[data-fancybox-video]").fancybox({
			padding     : 0,
			margin      : 50,
			width: 736,
			height: 414,
			tpl:{
				closeBtn : '<a title="" class="fancybox-item fancybox-close" href="javascript:;"></a>'
			},
			beforeShow  : function() {

				var id = $.fancybox.inner.find('iframe').attr('id');

				var player = new YT.Player(id, {
					height: '736',
					width: '414',
					events: {
						'onReady': onPlayerReady
					}
				});
			}
		});
	});
}
function onPlayerReady(event) {
	event.target.playVideo();
}
app.fancyClose = function () {
	var flag = false;
	$('html').on('mousemove',function (e) {
		if(flag){
			$('.fancybox-close').addClass('_fixed').css({
				'top':e.clientY-24,
				'left':e.clientX-24
			});
		}else {
			$('.fancybox-close').addClass('_remove').css({

			});
		}
	});
	$('html').on('mouseover','.fancybox-wrap',function () {
		flag = false;
	});
	$('html').on('mouseleave','.fancybox-wrap',function (e) {
		flag = true;
	});
};
app.popups = function () {
	var $popups = $('[data-popup]'),
			$popupShowBtn = $('[data-popup-show]'),
			popupId = null,
			$content = null
		;
	$popupShowBtn.on('click', function () {
		var $self = $(this),
				data = $self.data('popupShow'),
				dopClass = $self.data('popupClass') || ' '
			;

		$content = $popups.filter('[data-popup="' + data + '"]');
		$.fancybox({
			wrapCSS: 'fc-base _popups '+dopClass,
			content: $content,
			fitToView: false,
			tpl:{
				closeBtn : '<a title="" class="fancybox-item fancybox-close" href="javascript:;"></a>'
			},
			autoWidth: true,
			autoResize: true,
			closeEffect:'none',
			closeOpacity:false,
			closeSpeed:0,
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
app.anketaOffice=function () {
	var $office = $('[data-anketa-office]'),
			$officeItem = $office.find('[data-anketa-office-item]'),
			$block = $office.find('[data-anketa-office-block]'),
			$inp = $office.find('[data-anketa-office-inp]'),
			$map = $office.find('[data-anketa-office-map]'),
			$marker = $office.find('[data-anketa-office-map-marker]'),
			$markerPopup = $office.find('[data-anketa-office-map-marker-popup]'),
			$markerPopupClose = $office.find('[data-anketa-office-map-marker-popup-close]'),
			$setBtn = $office.find('[data-anketa-office-set]'),
			$mapShow = $office.find('[data-anketa-office-map-show]')
		;

	$inp.on('change',function () {
		var $self = $(this);
		$officeItem.hide();
		if($self.val()){
			$block.show();
		}else{
			$block.hide();
		}
	});
	$mapShow.on('click',function () {
		$.fancybox({
			wrapCSS: 'fc-base _popups',
			content: $map,
			fitToView: false,
			autoWidth: true,
			autoResize: true,
			padding: 0,
			margin:[120,10,10,120]
		});
	});

	$marker.on('click',function () {
		$markerPopup.show();
	});
	$markerPopupClose.on('click',function () {
		$markerPopup.hide();
	});
	$setBtn.on('click',function () {
		$markerPopup.hide();
		$.fancybox.close();
		$block.hide();
		$officeItem.show();
	});
};
app.anketaCountdown =function(){

	var $timer = $('[data-anketa-timer]'),
			$timerMinutes = $timer.find('[data-anketa-timer-m]'),
			$timerSeconds = $timer.find('[data-anketa-timer-s]'),
			startTime = $timer.data('anketaTimer'),
			seconds = null,
			minutes = null,
			timeInt = null
		;
	startTime = +startTime;
	setTime();
	$timer.addClass('_active');
	function setTime() {
		if(!startTime){
			clearInterval(timeInt);
		}
		seconds	= startTime % 60;
		minutes	= Math.floor(startTime / 60);

		$timerMinutes.html(minutes);
		$timerSeconds.html(beatifyNum(seconds));

		--startTime;
	}
	function beatifyNum (i) {
		if ( i < 10 ) {
			i = '0' + i;
		}
		return i.toString();
	}
	timeInt = setInterval(setTime,1000);
};
app.baseForm = function () {
	var $form = $('[data-base-form]'),
		$fields = $form.find('[data-form-field]'),
		$inputs = $form.find('[data-form-field-inp]'),
		errors = false
	;

	$inputs.focus(function () {
		$(this).addClass('_focus').closest($fields).removeClass('_error');
	});

	$inputs.blur(function () {
		if($(this).val() == '') {
			$(this).removeClass('_focus');
		}
	});
	$form.on('submit',function () {
		validate($inputs);
		return false;
	});
	
	function validate($items) {
		errors = false;
		$items.each(function () {
			var $self = $(this);
			if($.trim($self.val()) == ''){
				$self.closest('[data-form-field]').addClass('_error');
				errors = true;
			}else{
				$self.closest('[data-form-field]').removeClass('_error');
			}
		});
		return errors;
	}
};
app.anketa=function () {
	var $anketa = $('[data-anketa]'),
		$finish = $anketa.find('[data-anketa-finish]'),
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
	/*$autocompleteInp.on('keyup',function () {
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
	});*/

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
		if(n == $steps.length){
			finish();
		}
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

		if(n == $steps.length){
			finish();
		}
	}

	function finish() {
		var type = $finish.data('anketaFinish');
		
		if(type =='credit'){
			app.anketaCountdown();
		}
		if(type =='card'){
			$finish.find('[data-anketa-card-finish]').addClass('_card-finish');
		}
		
		
	}

};
app.mobPhone = function () {
	var $inp = $('[data-mob-phone-inp]'),
			$btn = $('[data-mob-phone-btn]'),
			$popup = $('[data-mob-phone-popup]'),
			$success = $('[data-mob-phone-success]'),
			$codeTimerSeconds = $popup.find('[data-mob-phone-timer-s]'),
			$codeTimerText = $popup.find('[data-mob-phone-timer-text]'),
			$codeInp = $popup.find('[data-mob-phone-code-inp]'),
			$codeReturn = $popup.find('[data-mob-phone-code-return]'),
			$codeBtn = $popup.find('[data-mob-phone-code-btn]'),
			startTime = 15,
			timeInt = null,
			flag = true//не обновлять таймер
		;
	$inp.on('keyup',function () {
		var $self = $(this);
		if($self.val().length == 18 ){
			$btn.removeClass('_disabled');
			if(flag){
				timer();
				flag = false;
			}

		}else{
			$btn.show();
			$success.hide();
			$btn.addClass('_disabled');
			$popup.hide();
			$codeInp.val('').change().removeClass('_focus');
			flag = true;
		}
	});

	$btn.on('click',function () {
		var $self = $(this);
		if($self.hasClass('_disabled')){
			return false;
		}
		$popup.show();
		$codeInp.on('change keyup',function () {
			var $self = $(this);
			if($self.val()!=''){
				$codeBtn.removeClass('_disabled');
			}else{
				$codeBtn.addClass('_disabled');
			}
		});
	});
	$codeBtn.on('click',function () {
		var $self = $(this);
		if($self.hasClass('_disabled')){
			return false;
		}
		$popup.hide();
		$btn.hide();
		$success.show();
	});
	$codeReturn.on('click',function () {
		if(!$(this).hasClass('_disabled')){
			timer();
		}
	});
	function timer() {
		clearInterval(timeInt);
		startTime = 15;
		$codeReturn.addClass('_disabled');
		setTime();
		function setTime() {
			if(!startTime){
				clearInterval(timeInt);
				$codeReturn.removeClass('_disabled');
			}
			$codeTimerSeconds.text(startTime);
			$codeTimerText.text(app.utils.okonchanie(startTime,'секунду','секунды','секунд'));
			--startTime;
		}
		timeInt = setInterval(setTime,1000)
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
app.bannerGall=function () {
	var $gall = $('[data-banner-gall]'),
			$slide = $gall.find('[data-banner-gall-slide]'),
			$pagItem = $gall.find('[data-banner-gall-pag-link]'),
			$prev = $gall.find('[data-banner-gall-prev]'),
			$next = $gall.find('[data-banner-gall-next]'),
			timeOut = null,
			curSlide = 1
		;
	function autoplay() {
		timeOut = setTimeout(function () {
			setSlide(curSlide +1);
		},5000);
		$next.removeClass('_active');
		setTimeout(function () {
			$next.addClass('_active');
		},1000);

	}
	$prev.on('click',function () {
		setSlide(curSlide - 1);
	});
	$next.on('click',function () {
		setSlide(curSlide + 1);
	});
	autoplay();
	$pagItem.hover(function () {
		setSlide($(this).data('bannerGallPagLink'));
	},function () {
		//setSlide(0);
	});

	function setSlide(n) {
		var num = n > $slide.length ? 1 : n < 1 ? $slide.length:n;
		curSlide = num;
		$slide.hide().removeClass('_active').filter('[data-banner-gall-slide="'+num+'"]').show().addClass('_active');
		$pagItem.removeClass('_active').filter('[data-banner-gall-pag-link="'+num+'"]').addClass('_active');
		clearTimeout(timeOut);
		autoplay();
	}

};
app.footer=function () {
	_helper();
	app.dom.$window.resize(_helper);
	function _helper() {
		
		app.dom.$grid.css({ marginBottom : app.dom.$window.height()});
	}

};
app.masks = function () {
	//$('[data-mask-phone]').mask("+7 (999) 999-99-99");
	$('[data-mask-phone]').mask("+7 (000) 000-00-00",{clearIfNotMatch: true});
	$('[data-mask-snils]').mask("999-999-999 99",{clearIfNotMatch: true});
	$('[data-date-mask]').mask('00/00/0000',{clearIfNotMatch: true});
	$('[data-year-mask]').mask('0000',{clearIfNotMatch: true});
	$('[data-num-mask]').mask("#0", {reverse: true});
	$('[data-money-mask]').mask("# ##0", {reverse: true});
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
	var $menu = $('[data-page-menu]'),
			$menuTab = $menu.find('[data-page-menu-tab]'),
			$menuContent = $('[data-page-menu-content]'),
			$menuContentWrap = $('[data-page-content-wrap]')
		;

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

	$menuTab.on('click',function(){
		var $self = $(this);
		if(!($self.hasClass('_active')|| $self.hasClass('_disabled'))){
			$('html, body').stop(true, true).animate({'scrollTop': $menuContentWrap.offset().top - $menu.height()},300);
			$menuTab.removeClass('_active');
			$self.addClass('_active');
			$menuContent.hide().filter('[data-page-menu-content="'+$self.data('pageMenuTab')+'"]').show();
		}
	});
};
app.filter = function () {
	var $filterTab = $('[data-filter-tab]'),
			$filterContent = $('[data-filter-content]'),
			top = 0
		;
	$filterTab.on('click',function () {
		var  $self = $(this),
			data = $self.data('filterTab')
			;
		if($self.hasClass('_active')){
			return false;
		}
		$filterTab.removeClass('_active');
		$self.addClass('_active');
		if(data=='all'){
			$filterContent.show();
		}else{
			$filterContent.each(function () {
				var  $_self = $(this);
				if($_self.data('filterContent').indexOf(data)!=-1){
					$_self.show();
				}else{
					$_self.hide();
				}
			});
		}
		top = $filterContent.filter(':visible').first().offset().top ;
		if($(document).scrollTop() > top){
			$('html, body').stop(true, true).animate({'scrollTop': top-150},300);
		}



	});
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
			$sum2 = $calc.find('[data-calc-sum2]'),
			$sumSlider2 = $sum2.find('[data-calc-sum-slider2]'),
			$sumInp2 = $sum2.find('[data-calc-sum-inp2]'),
			$monthSelect2 = $calc.find('[data-calc-month-field2]'),
			$sheduleMonth = $calc.find('[data-calc-schedule-month]'),
			$minPayment = $calc.find('[data-calc-min-payment]'),
			$restPayment = $calc.find('[data-calc-rest-payment]'),
			$add = $calc.find('[data-calc-add]'),
			$del = $calc.find('[data-calc-del]'),
			calcData = $sumSlider.data('calcSumSlider'),
			calcData2 = $sumSlider2.data('calcSumSlider2'),
			months=["В январе","в Феврале","в Марте","в Апреле","в Мае","в Июне","в Июле"," в Августе","в Сентябре"," в Октябре","в Ноябре","в Декабре"],
			sum = null,
			sum2 = null,
			month = null,
			month2 = null,
			startSumValue = null,
			startSumValue2 = null,
			val = null,
			dop=false

		;
	if(!$calc.length){
		return false;
	}
	$add.on('click',function () {
		$calc.addClass('_2-lines');
		dop = true;
		calculate();
	});
	$del.on('click',function () {
		$calc.removeClass('_2-lines');
		dop = false;
		calculate();
	});
	month = calcData.month;
	$monthSelect.val(month);
	$monthSelect.on('change',function () {
		month = $(this).val();
		$monthSelect2.find('option:disabled').attr('disabled',false);
		$monthSelect2.find('option[value="'+month+'"]').attr('disabled',true);
		$monthSelect2.trigger('chosen:updated');
		month2=+month+1;
		if(month2>12){
			month2 = 1;
		}
		$monthSelect2.val(month2).trigger('chosen:updated');
		calculate();
	});
	month2 = calcData2.month;
	$monthSelect2.val(month2);
	$monthSelect2.on('change',function () {
		return false;
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

	$sumSlider2.slider({
		range: "min",
		min: calcData2.min,
		max: calcData2.max,
		step: calcData2.step,
		value: calcData2.value || calcData2.min,
		slide: function( event, ui ){
			calculate();
			$sumInp2.val(app.formatNumber(ui.value));
		},
		start: function( event, ui ){
			startSumValue2 = ui.value;
		},
		stop: function( event, ui ){
			if(ui.value != startSumValue2){
				calculate();
				$sumInp2.val(app.formatNumber(ui.value));
			}
		}
	});
	$sumInp2.focus(function () {
		val = parseInt($sumInp2.val().replace(new RegExp(" ",'g'),""),10);
		$sumInp2.val(val);
	}).keyup(function () {

	});
	$sumInp2.val(app.formatNumber(calcData2.value)).change();

	$sumInp2.on('change',function(){
		var val1 = parseInt($sumInp2.val().replace(new RegExp(" ",'g'),""),10) || calcData2.min;
		val = Math.min(Math.max(calcData2.min, val1),calcData2.max);
		$sumSlider2.slider("value",val);
		$sumInp2.val(app.formatNumber(val));
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
		if(dop){
			sum2 = parseInt($sumInp2.val().replace(new RegExp(" ",'g'),""),10);
			$calc.find('[data-calc-payment1]').text(app.formatNumber(sum*0.05));
			$calc.find('[data-calc-payment2]').text(app.formatNumber(sum*0.05+sum2*0.05));
			$calc.find('[data-calc-payment3]').text(app.formatNumber(sum*0.9+sum2*0.05));
			$calc.find('[data-calc-payment4]').text(app.formatNumber(sum2*0.9));
		}else{
			$minPayment.text(app.formatNumber(sum*0.05));
			$restPayment.text(app.formatNumber(sum*0.9));
		}

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
			$option = $calc.find('[data-credit-calc-option]'),
			$popup = $('[data-anketa-conditions-popup]'),
			$conditionsSum = $('[data-anketa-conditions-sum]'),
			$conditionsPeriod = $('[data-anketa-conditions-period]'),
			$sum = $calc.find('[data-credit-calc-sum]'),
			$period = $calc.find('[data-credit-calc-period]'),
			$payment = $calc.find('[data-credit-calc-payment]'),
			$overpay = $calc.find('[data-credit-calc-overpay]'),
			$totalSum = $calc.find('[data-credit-calc-total-sum]'),
			$return = $calc.find('[data-credit-calc-return]'),
			$returnSum = $calc.find('[data-credit-calc-return-sum]'),
			$rateTab = $calc.find('[data-credit-calc-rate-tab]'),
			$popupSum = $popup.find('[data-credit-calc-popup-sum]'),
			$popupPeriod = $popup.find('[data-credit-calc-popup-period]'),
			$popupPayment  = $popup.find('[data-credit-calc-popup-payment]'),

			sum = 0,
			period = 0,
			payment = 0,
			overpay = 0,
			rate = 0.149,
			monthRate = rate/12,
			totalSum = 0,
			returnSum = 0,
			rateFixed = false,

			
			$popupSave = $popup.find('[data-anketa-conditions-popup-save]'),
			$popupShow = $('[data-anketa-conditions-popup-show]')

		;
	if(!$calc.length){
		return false;
	}
	calculate();

	function calculate() {
		if(!$period.length){
			return false;
		}
		sum = parseInt($sum.val().replace(new RegExp(" ",'g'),""),10);
		period = parseInt($period.val().replace(new RegExp(" ",'g'),""),10);
		if($rateTab.length){
			rate = $rateTab.filter('._active').data('creditCalcRateTab');
			console.log(rate);
			monthRate = rate/12;
		}


		payment = (sum*(monthRate+monthRate/(Math.pow(1+monthRate,period)-1))).toFixed(0);
		totalSum = payment*period;
		overpay = (totalSum-sum).toFixed(0);
		returnSum = (totalSum*0.02).toFixed(0);

		if(rateFixed){
			returnSum =0;
		}

		$overpay.text(app.formatNumber(overpay));
		$payment.val(app.formatNumber(payment)).change();
		$returnSum.text(app.formatNumber(returnSum));
		$totalSum.text(app.formatNumber(totalSum));
	}

	function popupCalculate() {
		if(!$popupPeriod.length){
			return false;
		}
		sum = parseInt($popupSum.val().replace(new RegExp(" ",'g'),""),10);
		period = parseInt($popupPeriod.val().replace(new RegExp(" ",'g'),""),10);

		payment = (sum*(monthRate+monthRate/(Math.pow(1+monthRate,period)-1))).toFixed(0);
		$popupPayment.val(app.formatNumber(payment)).change();
	}
	$rateTab.on('click',function () {
		var $self = $(this);
		if(!$self.hasClass('_active')){
			setTimeout(function () {
				calculate();
			},100);
			if($self.hasClass('_fix')){
				$return.addClass('_disabled');
				rateFixed = true;
			}else{
				$return.removeClass('_disabled');
				rateFixed = false;
			}
		}
	});
	$sum.on('change',function () {
		$conditionsSum.text($(this).val());
		calculate();
	});
	$period.on('change',function () {
		$conditionsPeriod.text($(this).val());
		calculate();
	});
	$popupSum.on('change',function () {
		popupCalculate();
	});
	$popupPeriod.on('change',function () {
		popupCalculate();
	});

	$popupShow.on('click',function () {
		$.fancybox({
			wrapCSS: 'fc-base _popups _right-close',
			content: $popup,
			fitToView: false,
			autoWidth: true,
			autoResize: true,
			padding: 0,
			margin:[60,10,10,60],
			beforeShow:function () {
				$popupSum.val($sum.val()).change();
				$popupPeriod.val($period.val()).change();
				$popupPayment.val($payment.val()).change();
			}
		});
	});
	$popupSave.on('click',function () {
		$sum.val($popupSum.val()).change();
		$period.val($popupPeriod.val()).change();
		calculate();
		$.fancybox.close();
	});

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
				$inp.val(setVal(app.formatNumber(ui.value),type)).change();
			},
			start: function( event, ui ){
				//startSumValue = ui.value;
			},
			stop: function( event, ui ){
				$inp.val(setVal(app.formatNumber(ui.value),type)).change();
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

	$conditionsSum.text($sum.val());
	$conditionsPeriod.html(parseInt($period.val())+' '+'<span>'+app.utils.okonchanie(+parseInt($period.val()),"месяц","месяца","месяцев")+'</span>');
	$sum.on('change',function () {
		$conditionsSum.text($sum.val());
	});
	$period.on('change',function () {
		$conditionsPeriod.html(parseInt($period.val())+' '+'<span>'+app.utils.okonchanie(+parseInt($period.val()),"месяц","месяца","месяцев")+'</span>');
	});
};