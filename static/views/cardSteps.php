<div class="b-block">
	<div class="b-block__title h3">Как получить карту?</div>
	<div class="b-steps _indent _arrs _<?=$parameters['stepsCounter'];?>-steps">
<? for ($i = 0; $i < $parameters['stepsCounter']; $i++) { ?>
		<div class="b-steps__item">
			<div class="b-steps__item-ico" style="background-image: url(<?=$parameters['stepsIco'][$i]?>)"></div>
			<div class="b-steps__item-title"><?=$parameters['stepsTitle'][$i]?></div>
			<div class="b-steps__item-text"><?=$parameters['stepsText'][$i]?></div>
		</div>
<? } ?>
	</div>
</div>
