app = {};

$(function () {
	app.init();
});
app.dom = {
	$window		: $(window),
	$body	: $('body'),
	$document	: $(document),
	$grid:$('.grid'),
	$header:$('.header'),
	$footer:$('.footer')
};

app.init = function () {
	$('input[type=checkbox], input[type=radio]').idealRadioCheck();
	app.getCard();
	app.initNav();
	app.questions();
	app.masks();
	app.benefits();
	app.pageMenu();
};
app.masks = function () {
	$('[data-mask-phone]').mask("+7 (999) 999-99-99");
};
app.initChosen = function () {
	$('[data-chosen]').chosen({
		disable_search_threshold: 30,
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
	$questionTitle.on('click',function () {
		var $self = $(this);

		if($self.hasClass('_active')){
			$self.closest($question).find($questionAnswer).slideUp(300);
		}else{
			$questionAnswer.slideUp(300);
			$questionTitle.removeClass('_active');
			$self.closest($question).find($questionAnswer).slideDown(300);
		}
		$self.toggleClass('_active');
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
	},'json');

	$form.on('submit',function () {
		$.post($form.attr('action'), $form.serialize(), function(data){
			$blockHtml.html(data.body);
			$blockText.text(data.body);
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
		if(app.dom.$window.scrollTop() >= $menu.offset().top){
			$menu.addClass('_fixed');
		}else{
			$menu.removeClass('_fixed');
		}
	}
};