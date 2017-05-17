<div class="b-block">
	<div class="b-block__title h3">Как получить карту?</div>
	<div class="b-steps _indent _arrs _<?=$parameters['stepsCounter'];?>-steps">
<? for ($i = 0; $i < $parameters['stepsCounter']; $i++) { ?>
		<div class="b-steps__item">
			<div class="b-steps__item-ico" style="background-image: url(<?=$parameters['stepIco'][$i]?>)"></div>
			<div class="b-steps__item-title"><?=$parameters['stepTitle'][$i]?></div>
			<div class="b-steps__item-text"><?=$parameters['stepText'][$i]?></div>
		</div>
<? } ?>
	</div>
</div>
