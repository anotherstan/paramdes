<div class="b-block questions">
	<div class="b-block__title h3 _dash">Заголовок</div>
	<div class="questions__items" data-questions data-nav-block>
<?if ($parameters['questionsActiveCounter'] =='all' || $parameters['questionsActiveCounter']>=$parameters['questionsCounter']){
for ($i=1;$i<=$parameters['questionsCounter'];$i++){?>
		<div class="questions__item " data-questions-item>
			<a href="javascript:void(0);" class="questions__item-title" data-questions-item-title>Вопрос <?=$i?></a>
			<div class="questions__item-answer" data-questions-item-answer>Ответ на вопрос <?=$i?></div>
		</div>
<?}?>
<?}else{
for ($i=1;$i<=$parameters['questionsActiveCounter'];$i++){?>
		<div class="questions__item " data-questions-item>
			<a href="javascript:void(0);" class="questions__item-title" data-questions-item-title>Вопрос <?=$i?></a>
			<div class="questions__item-answer" data-questions-item-answer>Ответ на вопрос <?=$i?></div>
		</div>
<?}?>
			<div class="hide" data-nav-content>
<?for ($i=$parameters['questionsActiveCounter']+1;$i<=$parameters['questionsCounter'];$i++){?>
		<div class="questions__item " data-questions-item>
			<a href="javascript:void(0);" class="questions__item-title" data-questions-item-title>Вопрос <?=$i?></a>
			<div class="questions__item-answer" data-questions-item-answer>Ответ на вопрос <?=$i?></div>
		</div>
<?}?>
	</div>
	<div class="questions__all">
		<a href="javascript:void(0);" class="all-btn" data-nav-btn>
			<span class="all-btn__counter"><?=$parameters['questionsCounter']?></span><span class="all-btn__text">
						<span data-nav-text>Показать все вопросы</span>
						<span data-nav-text class="hide">Скрыть</span>
					</span>
		</a>
	</div>
<?}?>
	</div>
</div>
