
<div class="b-block" data-constructor-content="instruction">
	<a href="javascript:void(0);" class="b-block__edit" data-block-edit-btn="instruction"></a>
	<div class="b-block__title h3 _dash">Как получить карту?</div>
<?if ($parameters['stepsCounter']){?>
	<div class="b-steps _indent <?=$parameters['decor'] && $parameters['decor']!='none'?' _arrs':''?> _<?=$parameters['stepsCounter'];?>-steps">
<? for ($i = 0; $i < $parameters['stepsCounter']; $i++) { ?>
		<div class="b-steps__item">
<?if($parameters['decor'] && $parameters['decor']!='none'){?>
			<div class="b-steps__item-ico" style="background-image: url('/static/theme/images/icons/get-card/<?=$i%3+1?>.svg')"></div>
<?}?>
			<div class="b-steps__item-title"><?='1. Шаг'?></div>
			<div class="b-steps__item-text">Описание действий<br/>для шага в две строки.</div>
		</div>
<? } ?>
	</div>
<?}else{?>
	<div class="b-block__subtitle">Подстрочник.</div>
<?}?>
</div>
