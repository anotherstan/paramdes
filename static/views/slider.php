<div class="about" data-about>
<?if ($parameters['substrate'] !='none'){?>
	<div class="about__bg <?=$parameters['substrate'];?>" <?=$parameters['decor'] =='pattern' ? 'style="background-image: url(\'/static/theme/images/pattern.png\');"':'';?>></div>
<?}?>
	<div class="about__inner">
		<div class="about__photo" data-slide-content="0" style="background-image: url('/static/theme/images/about.png');"></div>
<?for ($i=1;$i<=$parameters['slidesCounter'];$i++){?>
			<div class="about__photo hide" data-slide-content="<?=$i?>" style="background-image: url('/static/theme/images/about.png');"></div>
<?}?>
		<div class="clearfix">
			<div class="about__left">
<?if($parameters['decor'] == 'mark'){?>
				<div class="about__frame frame"  data-slide-content="0">
					<div class="frame__img" style="background-image: url('/static/theme/images/icons/article/1_red.svg')"></div>
				</div>
<?for ($i=1;$i<=$parameters['slidesCounter'];$i++){?>
				<div class="about__frame frame hide"  data-slide-content="<?=$i?>">
					<div class="frame__img" style="background-image: url('/static/theme/images/icons/article/1_red.svg')"></div>
				</div>
<?}?>
<?}?>
<?if($parameters['slidesCounter'] > 1){?>
				<div class="about__counter h3 hide" data-about-counter><span data-about-counter-active>1</span> / <?=$parameters['slidesCounter']?></div>
<?}?>
			</div>
			<div class="about__main">
				<div class="about__title h3">
					Заголовок
				</div>
<?if($parameters['subtitle'] == 'text'){?>
				<div class="about__subtitle">Подстрочник.</div>
<?}?>
<?if($parameters['subtitle'] == 'val'){?>
	<div class="card__options">
		<div class="card__option">
			<div class="card__option-val">Значение</div>
			<div class="card__option-title">Подпись значения</div>
		</div>
		<div class="card__option">
			<div class="card__option-val">Значение</div>
			<div class="card__option-title">Подпись значения</div>
		</div>
	</div>
<?}?>
<?if($parameters['subtitle'] == 'list'){?>
				<div class="about__subtitle">позже будет список</div>
<?}?>
				<?if ($parameters['video']){?>
				<div class="about__video" data-slide-content="0">
					<a href="javascript:void(0);" class="video-btn _red">
						<div class="video-btn__ico"></div>
						<div class="video-btn__title">Посмотреть видео</div>
						<div class="video-btn__duration">1:24</div>
					</a>
				</div>
				<?for ($i=1;$i<=$parameters['slidesCounter'];$i++){?>
				<div class="about__video hide" data-slide-content="<?=$i?>">
					<a href="javascript:void(0);" class="video-btn _red">
						<div class="video-btn__ico"></div>
						<div class="video-btn__title">Посмотреть видео слайд <?=$i?></div>
						<div class="video-btn__duration">1:24</div>
					</a>
				</div>
				<?}?>
				<?}?>
			</div>
		</div>
	</div>
	<?if($parameters['slidesCounter'] > 1){?>
		<div class="about__steps-wrap <?=$parameters['slidesCounter']==2 ?' _2-steps' :($parameters['slidesCounter']==3 ?' _3-steps':'');?>">
			<div class="about__steps-btn _prev" data-about-slider-prev></div>
			<div class="about__steps-btn _next" data-about-slider-next></div>
			<div class="about__steps swiper-container" data-about-pag>
				<div class="swiper-wrapper">
					<?for ($i=1;$i<=$parameters['slidesCounter'];$i++){?>
						<a href="javascript:void(0)" class="swiper-slide about__step" data-asd="234" data-about-pag-item="<?=$i?>">
							<div class="about__step-num"><?=$i?> <span>’’</span></div>
							<div class="about__step-title">Текст для слайда в строку</div>
							<div class="about__step-text">Подстрочник.</div>
						</a>
					<?}?>
				</div>
				<?/*
<?for ($i=1;$i<=$parameters['slidesCounter'];$i++){?><a href="javascript:void(0)" class="about__step">
							<div class="about__step-num"><?=$i?> <span>’’</span></div>
							<div class="about__step-title">Текст для слайда в строку</div>
							<div class="about__step-text">Подстрочник.</div>
							</a><?}?>
			*/?>
			</div>
		</div>
	<?}?>
</div>