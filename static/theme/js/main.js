app = {};

$(function () {
	app.init();
});

app.init = function () {
	app.getCard();
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

			steps = steps+'<div class="get-card__step">' +
				'<div class="get-card__step-ico" style="background-image: url('+$self.find($stepIco).val()+')"></div> ' +
				'<div class="get-card__step-title">'+$self.find($stepTitle).val()+'</div> ' +
				'<div class="get-card__step-text">'+$self.find($stepText).val()+'</div> ' +
				'</div> ';

		});
		
		temp = '<div class="get-card">' +
			'<div class="grid__inner"> ' +
			'<div class="get-card__inner"> ' +
			'<div class="get-card__title h3">Как получить карту?</div> ' +
			'<div class="get-card__steps _'+counter+'-steps">'+steps+'</div>' +
			'</div>' +
			'</div>' +
			'</div>';

		$blockHtml.html(temp);
		$blockText.text(temp);
	}
};