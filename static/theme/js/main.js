app = {};

$(function () {
	app.init();
});

app.init = function () {
	$('input[type=checkbox], input[type=radio]').idealRadioCheck();
	app.getCard();
	app.initNav();
	app.questions();
	app.masks();
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
			$activeSteps = null,
			$stepIco = $block.find('[data-get-card-step-ico]'),
			$stepTitle = $block.find('[data-get-card-step-title]'),
			$stepText = $block.find('[data-get-card-step-text]'),
			$blockHtml = $block.find('[data-get-card-html]'),
			$blockText = $block.find('[data-get-card-text]'),
			steps = '',
			temp = '',
			counter = null
		;
	rendering();
	$form.on('submit',function () {
		rendering();
		return false;
	});
	function rendering() {
		counter = $counter.val();
		$activeSteps = $steps.slice(0,counter);
		$steps.hide();
		$activeSteps.show();
		steps='';

		$activeSteps.each(function () {
			var $self = $(this);

			steps = steps+'<div class="b-steps__item">' +
				'<div class="b-steps__item-ico" style="background-image: url('+$self.find($stepIco).val()+')"></div> ' +
				'<div class="b-steps__item-title">'+$self.find($stepTitle).val()+'</div> ' +
				'<div class="b-steps__item-text">'+$self.find($stepText).val()+'</div> ' +
				'</div> ';

		});
		
		temp = '<div class="b-block">' +

				'<div class="b-block__title h3">Как получить карту?</div> ' +
				'<div class="b-steps _indent _arrs _'+counter+'-steps">'+steps+'</div>' +
			'</div>';

		$blockHtml.html(temp);
		$blockText.text(temp);
	}
};