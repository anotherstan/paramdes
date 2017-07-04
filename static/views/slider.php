<div class="about-gall" data-about data-constructor-content="slider">
	<a href="javascript:void(0);" class="b-block__edit" data-block-edit-btn="slider">
		<span class="b-block__edit-ico"></span>
		<span class="b-block__edit-text">
			<span class="b-block__edit-text-in">Редактировать</span>
		</span>
	</a>
<?if ($parameters['substrate'] !='none'){?>
	<div class="about-gall__bg <?=$parameters['substrate'];?>" <?=$parameters['decor'] =='pattern' ? 'style="background-image: url(\'/static/theme/images/pattern-'.$parameters['substrate'].'.png\');"':'';?>></div>
<?}?>
	<div class="about-gall__inner">
<?for ($i=1;$i<=$parameters['slidesCounter'];$i++){?>
			<div class="about-gall__photo <?=$i==1 ? '':'hide'?>" data-slide-content="<?=$i?>" style="background-image: url('/static/theme/images/about.png');"></div>
<?}?>
		<div class="clearfix">
			<div class="about-gall__left">
<?if($parameters['decor'] == 'mark'){?>
<?for ($i=1;$i<=$parameters['slidesCounter'];$i++){?>
				<div class="about-gall__frame frame  <?=$i==1 ? '':'hide '?> <?=$parameters['substrate'];?>"  data-slide-content="<?=$i?>">
					<div class="frame__shadow"></div>
					<div class="frame__in">
						<div class="frame__img" style="background-image: url('/static/theme/images/icons/article/1_<?=$parameters['substrate']!='none' ? $parameters['substrate'] : 'red'?>.svg')"></div>
					</div>
				</div>
<?}?>
<?}?>
<?if($parameters['slidesCounter'] > 1 && $parameters['decor'] !='pattern'){?>
				<div class="about-gall__counter h3" data-about-counter><span data-about-counter-active>1</span> / <?=$parameters['slidesCounter']?></div>
<?}?>
			</div>
			<div class="about-gall__main">
				<div class="about-gall__title h3">
					Заголовок
				</div>
<?if($parameters['subtitle'] == 'text'){?>
				<div class="about-gall__subtitle">Подстрочник.</div>
<?}?>
<?if($parameters['subtitle'] == 'val'){?>
	<div class="card__options">
		<div class="card__option">
			<div class="card__option-val">1 000</div>
			<div class="card__option-title">Подстрочник</div>
		</div>
		<div class="card__option">
			<div class="card__option-val">1 000</div>
			<div class="card__option-title">Подстрочник</div>
		</div>
	</div>
<?}?>
<?if($parameters['subtitle'] == 'list'){?>
		<div class="about-gall__subtitle">
			<ul class="b-list about-gall__list">
				<li>Значение 1</li>
				<li>Значение 2</li>
				<li>Значение 3</li>
			</ul>
		</div>

<?}?>
				<?if ($parameters['video']){?>
				<?for ($i=1;$i<=$parameters['slidesCounter'];$i++){?>
						<div class="about-gall__video  <?=$i==1 ? '':'hide'?>" data-slide-content="<?=$i?>">
							<a href="https://www.youtube.com/embed/7k1xxPLrAFc?autoplay=1&showinfo=0&rel=0;"  data-fancybox-video class="video-btn _red fancybox.iframe">
								<div class="video-btn__ico"></div>
								<div class="video-btn__title">Посмотреть видео</div>
								<div class="video-btn__duration">1:23</div>
							</a>
						</div>
				<?}?>
				<?}?>
			</div>
		</div>
	</div>
	<?if($parameters['slidesCounter'] > 1){?>
		<div class="about-gall__steps-wrap <?=$parameters['slidesCounter']==2 ?' _2-steps' :($parameters['slidesCounter']==3 ?' _3-steps':'');?>">
			<div class="about-gall__steps-btn _prev" data-about-slider-prev></div>
			<div class="about-gall__steps-btn _next" data-about-slider-next></div>
			<div class="about-gall__steps swiper-container" data-about-pag>
				<div class="swiper-wrapper">
					<?for ($i=1;$i<=$parameters['slidesCounter'];$i++){?>
						<a href="javascript:void(0)" class="swiper-slide about-gall__step  <?=$i==1 ? '_active':''?>" data-asd="234" data-about-pag-item="<?=$i?>">
							<div class="about-gall__step-num"><?=$i?> <span>’’</span></div>
							<div class="about-gall__step-title">Текст для слайда в строку</div>
							<div class="about-gall__step-text">Подстрочник.</div>
						</a>
					<?}?>
				</div>
				<?/*
<?for ($i=1;$i<=$parameters['slidesCounter'];$i++){?><a href="javascript:void(0)" class="about-gall__step">
							<div class="about-gall__step-num"><?=$i?> <span>’’</span></div>
							<div class="about-gall__step-title">Текст для слайда в строку</div>
							<div class="about-gall__step-text">Подстрочник.</div>
							</a><?}?>
			*/?>
			</div>
		</div>
	<?}?>
</div>