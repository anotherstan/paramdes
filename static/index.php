<?$menuCards = true;?>
<?include "includes/header.php"?>
<a href="javascript:void(0);" class="next-page"></a>
<div class="grid__inner">
	<div class="card">
		<div class="card__img"></div>
		<div class="card__info">
			<div class="breadcrumbs">
				<div class="breadcrumbs__item">
					<a href="cards.php" class="breadcrumbs__link">Карты</a>
				</div>
				<div class="breadcrumbs__item">
					<a href="javascript:void(0);" class="breadcrumbs__link">Кредитные карты</a>
				</div>
			</div>
			<div class="card__title">Элемент 120</div>
			<?/*div class="card__type">для покупок</div*/?>
			<div class="card__options">
				<div class="card__option">
					<div class="card__option-val"><span>до</span> 500 000 ₽</div>
					<div class="card__option-title">
						Кредитный лимит на<br />
						покупки и оплату услуг
					</div>
				</div>
				<div class="card__option">
					<div class="card__option-val"><span>до</span> 120 дней</div>
					<div class="card__option-title">
						Возобновляемый<br />
						беспроцентный период
					</div>
				</div>
			</div>
			<div class="card__btn"><a href="anketa-card.php" class="btn">Оформить карту</a></div>
		</div>
	</div>
</div>
<div class="page-menu__wrap" data-page-menu>
	<div class="page-menu__holder"></div>
	<div class="page-menu">
		<div class="grid__inner">
			<div class="page-menu__in">
				<div class="tabs page-menu__items">
					<a href="javascript:void(0);" class="tabs__item _active" data-page-menu-tab="1">Обзор</a>
					<a href="javascript:void(0);" class="tabs__item" data-page-menu-tab="2">Погашение кредита</a>
					<a href="javascript:void(0);" class="tabs__item" data-page-menu-tab="3">Поддержка</a>
				</div>
				<a href="/static/anketa-card.php" class="btn page-menu__btn">оформить карту</a>
			</div>
		</div>
	</div>
</div>
<?
	$videoLinks = ["https://www.youtube.com/embed/7k1xxPLrAFc",
		"https://www.youtube.com/embed/sPkndPfCJeA",
		"https://www.youtube.com/embed/xToEmrKy7jI",
		"https://www.youtube.com/embed/WG7Qc41SvnE",
		"https://www.youtube.com/embed/rfrTCrW26dM"
	];
	$videoDuration = ["1:23","1:33","1:44","1:32","1:14"];
	$title = ["Покупайте сейчас,",
		"Пользуйтесь сейчас,",
		"Путешествуйте сейчас,",
		"Учитесь сейчас,",
		"Играйте сейчас,"
	];
?>
<div class="page-menu__content"  data-page-content-wrap>
	<div data-page-menu-content="1" class="hide1">
		<div class="b-blocks">
			<div class="grid__inner">
				<div class="about-gall" data-about>
					<div class="about-gall__bg"></div>
					<div class="about-gall__inner">
						<?for ($i=1;$i<=5;$i++){?>
							<div class="about-gall__photo <?=$i==1 ? '':'hide'?>" data-slide-content="<?=$i?>" style="background-image: url('/static/theme/images/about.png');"></div>
						<?}?>
						<div class="clearfix">
							<div class="about-gall__left">
								<?for ($i=1;$i<=5;$i++){?>
									<div class="about-gall__frame frame  <?=$i==1 ? '':'hide '?> red"  data-slide-content="<?=$i?>">
										<div class="frame__shadow"></div>
										<div class="frame__in">
											<div class="frame__img" style="background-image: url('/static/theme/images/icons/article/1_red.svg')"></div>
										</div>
									</div>
								<?}?>
								<div class="about-gall__counter h3" data-about-counter><span data-about-counter-active>1</span> / 5</div>
							</div>
							<div class="about-gall__main">
								<?for ($i=1;$i<=5;$i++){?>
									<div class="about-gall__title h3 <?=$i==1 ? '':'hide'?>" data-slide-content="<?=$i?>" >
										<?=$title[$i-1]?><br/>
										платите через 120 дней
									</div>
								<?}?>
								<div class="about-gall__subtitle">Без комиссий и переплат.</div>
								<?for ($i=1;$i<=5;$i++){?>
									<div class="about-gall__video  <?=$i==1 ? '':'hide'?>" data-slide-content="<?=$i?>">
										<a href="<?=$videoLinks[$i-1]?>?autoplay=1&showinfo=0&rel=0;"  data-fancybox-video class="video-btn _red fancybox.iframe">
											<div class="video-btn__ico"></div>
											<div class="video-btn__title">Посмотреть видео</div>
											<div class="video-btn__duration"><?=$videoDuration[$i-1]?></div>
										</a>
									</div>
								<?}?>
							</div>
						</div>
					</div>
					<div class="about-gall__steps-wrap">
						<div class="about-gall__steps-btn _prev" data-about-slider-prev></div>
						<div class="about-gall__steps-btn _next" data-about-slider-next></div>
						<div class="about-gall__steps swiper-container" data-about-pag>
							<div class="swiper-wrapper">
								<a href="javascript:void(0)" class="swiper-slide about-gall__step _active" data-about-pag-item="1">
									<div class="about-gall__step-num">1 <span>’’</span></div>
									<div class="about-gall__step-title">Как купить вещи  в магазинах</div>
									<div class="about-gall__step-text">И не прогадать.</div>
								</a>
								<a href="javascript:void(0)" class="swiper-slide about-gall__step" data-about-pag-item="2">
									<div class="about-gall__step-num">2 <span>’’</span></div>
									<div class="about-gall__step-title">Как купить<br/>себе мотоцикл</div>
									<div class="about-gall__step-text">По цене бензина.</div>
								</a>
								<a href="javascript:void(0)" class="swiper-slide about-gall__step" data-about-pag-item="3">
									<div class="about-gall__step-num">3 <span>’’</span></div>
									<div class="about-gall__step-title">Как путешествовать<br/>по всему миру</div>
									<div class="about-gall__step-text">Почти бесплатно.</div>
								</a>
								<a href="javascript:void(0)" class="swiper-slide about-gall__step" data-about-pag-item="4">
									<div class="about-gall__step-num">4 <span>’’</span></div>
									<div class="about-gall__step-title">Как получать<br/>доход от хобби</div>
									<div class="about-gall__step-text">Не уходя с работы.</div>
								</a>
								<a href="javascript:void(0)" class="swiper-slide about-gall__step" data-about-pag-item="5">
									<div class="about-gall__step-num">5 <span>’’</span></div>
									<div class="about-gall__step-title">Как покупать<br/>все новые игры</div>
									<div class="about-gall__step-text">И не разориться.</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div data-nav-block>
			<div class="grid__inner">
				<a href="javascript:void(0);" class="all-btn _toggle" data-nav-btn>
					<span class="all-btn__counter _plus"></span><span class="all-btn__text">
							<span data-nav-text>Как не платить проценты</span>
						</span>
				</a>
			</div>
			<div class="b-blocks _dark hide"  data-nav-content>
				<div class="grid__inner">
					<div class="b-block conditions__main calc" data-calc>
						<div class="h3">Все просто — платите через 4 месяца после покупок. </div>
						<div class="calc__top">
							<div class="calc__fields">
								<div class="calc__fields-title">Вы сделали покупки на сумму</div>
								<div class="calc__field _sum">
									<div class="calc__sum" data-calc-sum>
										<div class="calc__sum-field">
											<span class="rub calc__sum-rub"></span>
											<input type="text" data-calc-sum-inp value="">
										</div>
										<div class="calc__sum-slider" data-calc-sum-slider='{
											"min":0,
											"max":500000,
											"step":500,
											"value":10000,
											"month":5

										}'></div>
									</div>
								</div>
								<div class="calc__fields-title">в</div>
								<div class="calc__field _month">
									<div class="calc__month">
										<select  data-calc-month-field data-chosen>
											<option value="1">январе</option>
											<option value="2">феврале</option>
											<option value="3">марте</option>
											<option value="4">апреле</option>
											<option value="5" >мае</option>
											<option value="6">июне</option>
											<option value="7">июле</option>
											<option value="8">августе</option>
											<option value="9">сентябре</option>
											<option value="10">октябре</option>
											<option value="11">ноябре</option>
											<option value="12">декабре</option>
										</select>
									</div>
								</div>
							</div>
							<a href="javascript:void(0);" class="calc__top-add" data-calc-add>
								<span class="calc__top-add-ico"></span>Добавить покупки
							</a>
						</div>
						<div class="calc__top _2">
							<a href="javascript:void(0);" class="calc__top-close" data-calc-del></a>
							<div class="calc__fields">
								<div class="calc__fields-title">Вы сделали покупки на сумму</div>
								<div class="calc__field _sum">
									<div class="calc__sum" data-calc-sum2>
										<div class="calc__sum-field">
											<span class="rub calc__sum-rub"></span>
											<input type="text" data-calc-sum-inp2 value="">
										</div>
										<div class="calc__sum-slider" data-calc-sum-slider2='{
											"min":0,
											"max":500000,
											"step":500,
											"value":10000,
											"month":6

										}'></div>
									</div>
								</div>
								<div class="calc__fields-title">в</div>
								<div class="calc__field _month">
									<div class="calc__month">
										<select  data-calc-month-field2 data-chosen>
											<option value="1">январе</option>
											<option value="2">феврале</option>
											<option value="3">марте</option>
											<option value="4">апреле</option>
											<option value="5" disabled>мае</option>
											<option value="6">июне</option>
											<option value="7">июле</option>
											<option value="8">августе</option>
											<option value="9">сентябре</option>
											<option value="10">октябре</option>
											<option value="11">ноябре</option>
											<option value="12">декабре</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="calc__schedule">
							<div class="h4">Чтобы не платить проценты, вам нужно будет вернуть</div>
							<div class="calc__schedule-blocks">
								<div class="calc__schedule-block">
									<div class="calc__label" data-calc-schedule-month="0"></div>
									<div class="calc__schedule-block-sum h4"><span data-calc-min-payment></span> ₽</div>
									<div class="calc__schedule-block-text">Минимальный платеж
										<div class="help">
											<a href="javascript:void(0);" class="calc__help">?</a>
											<div class="help__content _top _blue">
												<div class="help__content-in">
													Каждый месяц необходимо вносить 5% от суммы задолженности.
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="calc__schedule-block">
									<div class="calc__label" data-calc-schedule-month="1"></div>
									<div class="calc__schedule-block-sum h4"><span data-calc-min-payment></span> ₽</div>
									<div class="calc__schedule-block-text">Минимальный платеж
										<div class="help">
											<a href="javascript:void(0);" class="calc__help">?</a>
											<div class="help__content _top _blue">
												<div class="help__content-in">
													Каждый месяц необходимо вносить 5% от суммы задолженности.
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="calc__schedule-block">
									<div class="calc__label" data-calc-schedule-month="2"></div>
									<div class="calc__schedule-block-sum h4"><span data-calc-rest-payment></span> ₽</div>
									<div class="calc__schedule-block-text">Последний платеж
										<div class="help">
											<a href="javascript:void(0);" class="calc__help">?</a>
											<div class="help__content _top _blue">
												<div class="help__content-in">
													Оплата всей задолженности для реализации беспроцентного периода.
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="calc__schedule-blocks _2">
								<div class="calc__schedule-block">
									<div class="calc__label" data-calc-schedule-month="0"></div>
									<div class="calc__schedule-block-sum h4"><span  data-calc-payment1></span> ₽</div>
									<div class="calc__schedule-block-text">Минимальный платеж
										<div class="help">
											<a href="javascript:void(0);" class="calc__help">?</a>
											<div class="help__content _top _blue">
												<div class="help__content-in">
													Каждый месяц необходимо вносить 5% от суммы задолженности.
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="calc__schedule-block">
									<div class="calc__label" data-calc-schedule-month="1"></div>
									<div class="calc__schedule-block-sum h4"><span  data-calc-payment2></span> ₽</div>
									<div class="calc__schedule-block-text">Минимальный платеж
										<div class="help">
											<a href="javascript:void(0);" class="calc__help">?</a>
											<div class="help__content _top _blue">
												<div class="help__content-in">
													Каждый месяц необходимо вносить 5% от суммы задолженности.
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="calc__schedule-block _hide">
									<div class="calc__label" data-calc-schedule-month="2"></div>
									<div class="calc__schedule-block-sum h4"><span data-calc-payment3></span> ₽</div>
									<div class="calc__schedule-block-text">Минимальный платеж
										<div class="help">
											<a href="javascript:void(0);" class="calc__help">?</a>
											<div class="help__content _top _blue">
												<div class="help__content-in">
													Каждый месяц необходимо вносить 5% от суммы задолженности.
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="calc__schedule-block">
									<div class="calc__label" data-calc-schedule-month="3"></div>
									<div class="calc__schedule-block-sum h4"><span data-calc-payment4></span> ₽</div>
									<div class="calc__schedule-block-text">Последний платеж
										<div class="help">
											<a href="javascript:void(0);" class="calc__help">?</a>
											<div class="help__content _top _blue">
												<div class="help__content-in">
													Оплата всей задолженности для реализации беспроцентного периода.
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="b-blocks">
			<div class="grid__inner">
				<div class="b-block">
					<div class="b-block__title h3 _dash">Тарифы</div>
					<div class="b-steps _indent">
						<div class="b-steps__item">
							<div class="b-steps__item-ico" style="background-image: url('/static/theme/images/tariffs/1.svg')"></div>
							<div class="b-steps__item-title _small">Фиксированная ставка</div>
							<div class="b-steps__item-value">27,9%</div>
						</div>
						<div class="b-steps__item">
							<div class="b-steps__item-ico" style="background-image: url('/static/theme/images/tariffs/2.svg')"></div>
							<div class="b-steps__item-title _small">Выпуск карты</div>
							<div class="b-steps__item-value"><span>от</span> 0 ₽</div>
						</div>
						<div class="b-steps__item">
							<div class="b-steps__item-ico" style="background-image: url('/static/theme/images/tariffs/3.svg')"></div>
							<div class="b-steps__item-title _small">Ежемесячный платеж</div>
							<div class="b-steps__item-value"><span>от</span> 5%</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div data-nav-block>
			<div class="grid__inner">
				<a href="javascript:void(0);" class="all-btn _toggle" data-nav-btn>
					<span class="all-btn__counter _plus"></span><span class="all-btn__text">
						<span data-nav-text>Показать условия обслуживания</span>
					</span>
				</a>
			</div>
			<div class="b-blocks _dark conditions hide"  data-nav-content>
				<div class="grid__inner">
					<div class="b-block conditions__main" data-tabs>
						<div class="h3">Условия обслуживания</div>
						<div class="conditions__tabs tabs _white">
							<a href="javascript:void(0);" class="tabs__item _active" data-tabs-tab="1">Новый клиент</a>
							<a href="javascript:void(0);" class="tabs__item" data-tabs-tab="2">Зарплатный клиент</a>
						</div>
						<div class="conditions__block">
							<div class="h4 conditions__block-title">Основная информация</div>
							<div class="conditions__block-items">
								<div class="conditions__block-item">
									<div class="conditions__block-item-title">Тип карты</div>
									<div class="conditions__block-item-val">Visa Platinum</div>
								</div>
								<div class="conditions__block-item">
									<div class="conditions__block-item-title">Комиссия за снятие наличных</div>
									<div class="conditions__block-item-val">5,9%</div>
								</div>
								<div class="conditions__block-item">
									<div class="conditions__block-item-title">Выпуск карты</div>
									<div  data-tabs-content="1">
										<div class="conditions__block-item-val">900 <span class="rub"></span></div>
									</div>
									<div class="hide" data-tabs-content="2">
										<div class="conditions__block-item-val">0 <span class="rub"></span></div>
									</div>
								</div>
							</div>
						</div>
						<div class="conditions__block">
							<div class="h4 conditions__block-title">Процентная ставка</div>
							<div class="conditions__block-items">
								<div class="conditions__block-item">
									<div class="conditions__block-item-title">Беспроцентный период</div>
									<div class="conditions__block-item-val">120 дней</div>
								</div>
								<div class="conditions__block-item">
									<div class="conditions__block-item-title">При выполнении условий </div>
									<div class="conditions__block-item-val">0%</div>
								</div>
								<div class="conditions__block-item">
									<div class="conditions__block-item-title">В остальных случаях</div>
									<div class="conditions__block-item-val">27,9%</div>
								</div>
							</div>
						</div>
						<div class="conditions__notice">
							Чтобы воспользоваться беспроцентным периодом, необходимо оплачивать минимальные платежи<br />
							и вовремя погашать задолженность.
						</div>
					</div>
					<div class="b-block _transparent conditions__all">
						<div class="h3">Полные условия</div>
						<div class="conditions__all-files files">
							<a href="https://www.pochtabank.ru/upload/contents/687/Tarif_po_kreditnoj_karte_EHlement_120_vstupaet_v_silu_24_01_17.pdf" target="_blank" class="file">
								<div class="file__type">
									<div class="file__type-text">PDF</div>
									<div class="file__type-ico"></div>
								</div>
								<div class="file__inner">
									<div class="file__name">Тариф по кредитной карте «Элемент 120» (действует с 24.01.17)</div>
									<div class="file__size">254 Кб</div>
								</div>
							</a>
							<a href="https://www.pochtabank.ru/upload/images/documents/120/Tarif_Element_120_predloznie_zp_klientam.pdf" target="_blank" class="file">
								<div class="file__type">
									<div class="file__type-text">PDF</div>
									<div class="file__type-ico"></div>
								</div>
								<div class="file__inner">
									<div class="file__name">Тариф по кредитной карте «Элемент 120» <nobr>(для зарплатных клиентов,	 действует с 10.03.17)</nobr></div>
									<div class="file__size">229 Кб</div>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="benefits__wrap">
			<div class="grid__inner">
				<div class="b-block _transparent benefits" data-benefits>
					<div class="benefits__inner">
						<div class="benefits__top">
							<div class="h2">Привилегии для держателей карты</div>
							<div class="b-block__subtitle _white">Только в Почта Банке.</div>
						</div>
						<div class="b-block__indent">
							<div class="benefits__gall">
								<div class="benefits__gall-block">
									<div class="b-block _transparent">
										<div class="h3">Пакет онлайн-покупателя</div>
										<div class="b-block__subtitle">Комфортные и безопасные покупки в интернете.</div>
										<div class="benefits__gall-price">
											<div class="benefits__gall-price-block">
												<span class="val">0</span>
												<div class="benefits__gall-price-period">
													Руб<hr/>Год
												</div>
											</div>
											<div class="benefits__gall-price-text">Автоматическая активация пакета<br/>при сумме покупок от 7500 Р.</div>
										</div>
										<div class="benefits__gall-tabs">
											<div class="h4">Ваш помощник в любой ситуации</div>
											<div class="benefits__gall-tabs-items">
												<a href="javascript:void(0);" data-benefits-tab="1" class="benefits__gall-tab _active"><span class="benefits__gall-tab-num">1</span>Бесплатный возврат товара</a>
												<a href="javascript:void(0);" data-benefits-tab="2" class="benefits__gall-tab"><span class="benefits__gall-tab-num">2</span>Бесплатный ремонт техники</a>
												<a href="javascript:void(0);" data-benefits-tab="3" class="benefits__gall-tab"><span class="benefits__gall-tab-num">3</span>Гарантия лучшей цены</a>
											</div>
										</div>
									</div>
								</div>
								<div class="benefits__gall-slides">
									<div class="benefits__gall-slide" data-benefits-slide="1">
										<div class="benefits__gall-slide-img" style="background-image: url('/static/theme/images/benefits/1.png');"></div>
										<div class="benefits__gall-slide-in">
											<div class="benefits__gall-slide-counter"><span>1</span> / 3</div>
											<div class="benefits__gall-slide-texts">
												<div class="benefits__gall-slide-title h4">Бесплатный возврат</div>
												<div class="benefits__gall-slide-text">
													Если товар не подошел или отличается<br /> от заказанного,
													то вам будет возмещена<br />стоимость обратной отправки его продавцу.
												</div>
											</div>
											<div class="benefits__gall-slide-video">
												<a href="https://www.youtube.com/embed/2fOM8u5x-Ww?autoplay=1&showinfo=0&rel=0;"  data-fancybox-video class="video-btn fancybox.iframe">
													<div class="video-btn__ico"></div>
													<div class="video-btn__title">Посмотреть видео</div>
													<div class="video-btn__duration">3:29</div>
												</a>
											</div>
										</div>
									</div>
									<div class="benefits__gall-slide hide" data-benefits-slide="2">
										<div class="benefits__gall-slide-img" style="background-image: url('/static/theme/images/benefits/2.png');"></div>
										<div class="benefits__gall-slide-in">
											<div class="benefits__gall-slide-counter"><span>2</span> / 3</div>
											<div class="benefits__gall-slide-texts">
												<div class="benefits__gall-slide-title">Бесплатный ремонт</div>
												<div class="benefits__gall-slide-text">
													Если техника оказалась сломанной,<br /> ее бесплатно отремонтируют<br />
													 или компенсируют вам  ее полную стоимость.
												</div>
											</div>
											<div class="benefits__gall-slide-video">
												<a href="https://www.youtube.com/embed/2fOM8u5x-Ww?autoplay=1&showinfo=0&rel=0;"  data-fancybox-video class="video-btn fancybox.iframe">
													<div class="video-btn__ico"></div>
													<div class="video-btn__title">Посмотреть видео</div>
													<div class="video-btn__duration">3:29</div>
												</a>
											</div>
										</div>
									</div>
									<div class="benefits__gall-slide hide" data-benefits-slide="3">
										<div class="benefits__gall-slide-img" style="background-image: url('/static/theme/images/benefits/3.png');"></div>
										<div class="benefits__gall-slide-in">
											<div class="benefits__gall-slide-counter"><span>3</span> / 3</div>
											<div class="benefits__gall-slide-texts">
												<div class="benefits__gall-slide-title">Гарантия лучшей цены</div>
												<div class="benefits__gall-slide-text">
													Если купленный товар стоит дешевле<br /> в любом другом магазине на территории РФ, вам вернется разница в цене.
												</div>
											</div>
											<div class="benefits__gall-slide-video">
												<a href="https://www.youtube.com/embed/2fOM8u5x-Ww?autoplay=1&showinfo=0&rel=0;"  data-fancybox-video class="video-btn fancybox.iframe">
													<div class="video-btn__ico"></div>
													<div class="video-btn__title">Посмотреть видео</div>
													<div class="video-btn__duration">3:29</div>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="benefits__guarantee">
								<div class="benefits__guarantee-item">
									<div class="benefits__guarantee-item-period">
										<div class="val">30</div>
										<div class="benefits__guarantee-item-period-text">Дней</div>
									</div>
									<div class="benefits__guarantee-item-content middle">
										<div class="middle__inner">
											<div class="benefits__guarantee-item-title">Все покупки по карте застрахованы</div>
											<div class="benefits__guarantee-item-text">На случай утери, кражи<br />или случайного повреждения.</div>
										</div>
									</div>
								</div>
								<div class="benefits__guarantee-item">
									<div class="benefits__guarantee-item-period">
										<div class="val">24</div>
										<div class="benefits__guarantee-item-period-text">месяца</div>
									</div>
									<div class="benefits__guarantee-item-content middle">
										<div class="middle__inner">
											<div class="benefits__guarantee-item-title">Увеличение срока гарантии в два раза</div>
											<div class="benefits__guarantee-item-text">Срок гарантии на покупки увеличивается до 24 месяцев.</div>
										</div>
									</div>
								</div>
							</div>
							<div class="benefits__blocks">
								<div class="benefits__block">
									<div class="h4">Привилегии Visa Premium</div>
									<div class="benefits__block-subtitle">Доступ к специальным предложениям  «Visa&nbsp;Premium» по всему миру.</div>
									<ul class="benefits__block-list">
										<li>Скидки, бонусы и подарки</li>
										<li>Повышение класса обслуживания</li>
										<li>Акции от 1 500 компаний России</li>
										<li>20 000 партнеров по всему миру</li>
									</ul>
									<div class="article__ico frame">
										<div class="frame__shadow"></div>
										<div class="frame__in">
											<div class="frame__img" style="background-image: url('/static/theme/images/icons/frame/1.svg')"></div>
										</div>
									</div>
								</div>
								<div class="benefits__block">
									<div class="h4">Помощь за рубежом</div>
									<div class="benefits__block-subtitle">Экстренная помощь в случае непредвиденных ситуаций.</div>
									<ul class="benefits__block-list">
										<li>Информационная поддержка</li>
										<li>Решение проблем со здоровьем</li>
										<li>Поиск юристов и переводчиков</li>
										<li>Организация возвращения домой</li>
									</ul>
									<div class="article__ico frame">
										<div class="frame__shadow"></div>
										<div class="frame__in">
											<div class="frame__img" style="background-image: url('/static/theme/images/icons/frame/2.svg')"></div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
		<div class="b-blocks">
			<div class="grid__inner">
				<div class="b-block" data-tabs>
					<div class="instruction__top">
						<div class="b-block__title h3 _dash">Как получить карту?</div>
						<div class="tabs instruction__tabs">
							<a href="javascript:void(0);" data-tabs-tab="1" class="tabs__item _active">Неименную</a>
							<a href="javascript:void(0);" data-tabs-tab="2" class="tabs__item">Именную</a>
						</div>
					</div>
					<div class="b-steps _indent _arrs" >
						<div class="b-steps__item">
							<div class="b-steps__item-ico" style="background-image: url('/static/theme/images/icons/instruction/1.svg')"></div>
							<div class="b-steps__item-title">1. Подайте заявку</div>
							<div class="b-steps__item-text">В клиентском центре, на стойке продаж или <a href="anketa-card.php">онлайн на сайте.</a></div>
						</div>
						<div class="b-steps__item">
							<div class="b-steps__item-ico" style="background-image: url('/static/theme/images/icons/instruction/2.svg')"></div>
							<div class="b-steps__item-title">2. Узнайте решение</div>
							<div class="b-steps__item-text">
								<span data-tabs-content="1">Ваша онлайн-заявка будет рассмотрена в течение минуты.</span>
								<span data-tabs-content="2" class="hide">Ваша заявка будет рассмотрена в течение 5 минут.</span>

							</div>
						</div>
						<div class="b-steps__item">
							<div class="b-steps__item-ico" style="background-image: url('/static/theme/images/icons/instruction/3.svg')"></div>
							<div class="b-steps__item-title">3. Дождитесь выпуска</div>
							<div class="b-steps__item-text">Получите карту в выбранном отделении Банка.</div>
						</div>
					</div>
				</div>
				<div class="b-block questions">
					<div class="b-block__title h3 _dash">У вас остались вопросы?</div>
					<div class="questions__items" data-questions data-nav-block>
						<?
							$questions = [
								"Как узнать сумму ежемесячного платежа?",
								"Может ли кто-то другой внести за меня ежемесячный платеж?",
								"Я внес сумму, превышающую ежемесячный платеж, что произойдет?",
								"Что такое частичное досрочное погашение кредита?",
								"Могу ли я сразу внести несколько платежей?"
							];
							$answers =[
								"Данная информация указана в графике платежей, который предоставлялся при оформлении кредита. Также размер платежа легко уточнить, позвонив по телефону 8 800 550-0770 и правильно назвав код доступа или обратившись в клиентский центр «Почта Банка».",
								"Да, оплатить кредит может любой человек, которому вы доверяете и можете оставить реквизиты для внесения средств и сумму платежа.",
								"Без подключения Заявления на досрочное погашение со счета спишется сумма равная ежемесячному платежу, остаток остается на счете. При подключении Заявления на досрочное погашение в дату платежа спишется вся сумма со счета, при этом последующие платежи уменьшатся, срок выплаты сохранится.",
								"Это возможность сэкономить на процентах по кредиту, погашая кредит суммами, превышающими очередной платеж. Поступив на счет, деньги уменьшат остаток основного долга в дату платежа по кредиту, на который начисляются проценты.",
								"Да, внести несколько платежей можно. В дату платежа сумма списывается равная ежемесячному платежу, а остаток остается на счете."
							];
							for ($i=0;$i<0;$i++){
								?>
								<div class="questions__item " data-questions-item>
									<a href="javascript:void(0);" class="questions__item-title" data-questions-item-title><?=$questions[$i]?></a>
									<div class="questions__item-answer" data-questions-item-answer>
										<?=$answers[$i]?>
									</div>
								</div>
							<?}?>
						<div class="hide" data-nav-content>
							<?for ($i=100;$i<count($questions);$i++){?>
								<div class="questions__item " data-questions-item>
									<a href="javascript:void(0);" class="questions__item-title" data-questions-item-title><?=$questions[$i]?></a>
									<div class="questions__item-answer" data-questions-item-answer>
										<?=$answers[$i]?>
									</div>
								</div>
							<?}?>
						</div>
						<div class="questions__item " data-questions-item>
							<a href="javascript:void(0);" class="questions__item-title" data-questions-item-title>
								Как узнать сумму ежемесячного платежа?
							</a>
							<div class="questions__item-answer" data-questions-item-answer>
								Данная информация указана в графике платежей, который предоставлялся при оформлении кредита.<br/>
								Также размер платежа легко уточнить, позвонив по телефону
								8 800 550-0770 и правильно назвав код доступа или обратившись в клиентский центр «Почта Банка».
							</div>
						</div>
						<div class="questions__item " data-questions-item>
							<a href="javascript:void(0);" class="questions__item-title" data-questions-item-title>
								Может ли кто-то другой внести за меня ежемесячный платеж?
							</a>
							<div class="questions__item-answer" data-questions-item-answer>
								Да, оплатить кредит может любой человек, которому вы доверяете и можете оставить реквизиты для внесения средств<br/>и сумму платежа.
							</div>
						</div>
						<div class="questions__item " data-questions-item>
							<a href="javascript:void(0);" class="questions__item-title" data-questions-item-title>
								Я внес сумму, превышающую ежемесячный платеж, что произойдет?
							</a>
							<div class="questions__item-answer" data-questions-item-answer>
								Без подключения Заявления на досрочное погашение со счета спишется сумма равная ежемесячному платежу, остаток остается на счете.
								При подключении Заявления на досрочное погашение в дату платежа спишется вся сумма со счета,
								при этом последующие платежи уменьшатся, срок выплаты сохранится.
							</div>
						</div>
						<div class="questions__item " data-questions-item>
							<a href="javascript:void(0);" class="questions__item-title" data-questions-item-title>
								Что такое частичное досрочное погашение кредита?
							</a>
							<div class="questions__item-answer" data-questions-item-answer>
								Это возможность сэкономить на процентах по кредиту, погашая кредит суммами, превышающими очередной платеж.<br/>
								Поступив на счет, деньги уменьшат остаток основного долга в дату платежа по кредиту, на который начисляются проценты.
							</div>
						</div>
						<div class="questions__item " data-questions-item>
							<a href="javascript:void(0);" class="questions__item-title" data-questions-item-title>
								Могу ли я сразу внести несколько платежей?
							</a>
							<div class="questions__item-answer" data-questions-item-answer>
								Да, внести несколько платежей можно. В дату платежа сумма списывается равная ежемесячному платежу,<br/>а остаток остается на счете.
							</div>
						</div>
						<div class="questions__all">
							<a href="javascript:void(0);" class="all-btn" data-nav-btn>
								<span class="all-btn__counter">8</span><span class="all-btn__text">
									<span data-nav-text>Показать все вопросы</span>
									<span data-nav-text class="hide">Скрыть</span>
								</span>
							</a>
						</div>
					</div>
				</div>
				<div class="b-block">
					<div class="b-block__title h3 _dash">Оформите заявку онлайн</div>
					<div class="b-block__subtitle">Узнайте решение в течение 5 минут.</div>
					<div class="request-form__img"></div>
					<div class="request-form">
						<div class="request-form__block b-form">
							<form action="" data-base-form>
								<div class="b-form__row">
									<div class="b-form__block" data-form-field>
										<div class="b-form__field">
											<input type="text" data-form-field-inp data-required>
											<div class="b-form__placeholder">Имя и фамилия</div>
										</div>
										<div class="b-form__error">Были допущены ошибки или поле оставлено пустым.</div>
									</div>
								</div>
								<div class="b-form__row">
									<div class="b-form__block" data-form-field>
										<div class="b-form__field">
											<input type="email" data-form-field-inp data-required>
											<div class="b-form__placeholder">Электронная почта</div>
										</div>
										<div class="b-form__error">Были допущены ошибки или поле оставлено пустым.</div>
									</div>
								</div>
								<div class="b-form__row">
									<div class="b-form__block" data-form-field>
										<div class="b-form__field">
											<input type="text" data-form-field-inp data-required data-mask-phone>
											<div class="b-form__placeholder">Телефон</div>
										</div>
										<div class="b-form__error">Были допущены ошибки или поле оставлено пустым.</div>
									</div>
								</div>
								<div class="b-form__row">
									<div class="b-form__block">
										<div class="b-check b-form__check">
											<label><input type="checkbox" checked > Я cогласен на передачу и обработку
												<a href="javascript:void(0);" target="_blank">персональных данных.</a></label>
										</div>
									</div>
								</div>
								<div class="b-form__btn-wrap">
									<button type="submit" class="btn">Перейти к оформлению</button>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="b-block _transparent articles">
					<div class="b-block__title h3 _dash">Пользуйтесь банком выгодно</div>
					<div class="b-block__indent articles__list">
						<a href="javascript:void(0);" class="article">
							<div class="article__inner">
								<div class="article__title h4">
									Как оплачивать товары<br />
									и услуги без комиссий
								</div>
								<div class="article__author">
									<div class="article__author-photo" style="background-image: url('/static/theme/images/icons/author1.png');"></div>
									<div class="article__author-name">Никита Осипов</div>
									<div class="article__author-position">Финансовый аналитик</div>
								</div>
								<div class="article__ico frame">
									<div class="frame__shadow"></div>
									<div class="frame__in">
										<div class="frame__img" style="background-image: url('/static/theme/images/icons/frame/3.svg')"></div>
									</div>
								</div>
							</div>
						</a>
						<a href="javascript:void(0);" class="article">
							<div class="article__inner">
								<div class="article__title h4">
									Как покупать в интернете<br />
									по самой выгодной цене
								</div>
								<div class="article__author">
									<div class="article__author-photo" style="background-image: url('/static/theme/images/icons/author2.png');"></div>
									<div class="article__author-name">Дарья Ермолинa</div>
									<div class="article__author-position">Покупатель со стажем</div>
								</div>
								<div class="article__ico frame">
									<div class="frame__shadow"></div>
									<div class="frame__in">
										<div class="frame__img" style="background-image: url('/static/theme/images/icons/frame/4.svg')"></div>
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div data-page-menu-content="2" class="hide">
		<div class="repayment">
			<div class="grid__inner">
				<div class="anketa__form">
					<form action="" data-base-form>
						<div class="anketa__form-block">
							<div class="b-block__title h4 _dash anketa__form-block-title">Онлайн-платеж</div>
							<div class="tabs b-form__tabs">
								<a href="javascript:void(0);" class="tabs__item _active">По номеру договора</a>
								<a href="javascript:void(0);" class="tabs__item">По номеру карты</a>
							</div>
							<div class="b-form__row">
								<div class="b-form__block" data-form-field>
									<div class="b-form__field">
										<input type="text" data-form-field-inp data-required>
										<div class="b-form__placeholder">Номер договора</div>
										<div class="help">
											<a href="javascript:void(0);" class="help__ico">?</a>
											<div class="help__content _top">
												<div class="help__content-in">
													<div>8 цифр, например, 12345678.</div>
												</div>
											</div>
										</div>
									</div>
									<div class="b-form__error">Были допущены ошибки или поле оставлено пустым.</div>
								</div>
							</div>
							<div class="b-form__row">
								<div class="b-form__block" data-form-field>
									<div class="b-form__field">
										<input type="text" data-money-mask data-form-field-inp data-required>
										<div class="b-form__placeholder">Сумма пополнения</div>
										<span class="rub credit-calc__option-rub"></span>
									</div>
									<div class="b-form__error">Были допущены ошибки или поле оставлено пустым.</div>
								</div>
							</div>
							<div class="b-form__row">
								<div class="b-form__radio">
									<label class="b-form__radio-btn _w50"><input type="radio" name="type" checked><span class="b-form__radio-text">Карта Visa</span></label>
									<label class="b-form__radio-btn _w50"><input type="radio" name="type"><span class="b-form__radio-text">Карта MasterCard</span></label>
								</div>
							</div>
						</div>
						<div class="anketa__form-block">
							<div class="b-block__title h4 _dash anketa__form-block-title">Личная информация</div>
							<div class="b-form__row">
								<div class="b-form__block" data-form-field>
									<div class="b-form__field">
										<input type="text" data-form-field-inp data-required>
										<div class="b-form__placeholder">ФИО, указанные в договоре</div>
									</div>
									<div class="b-form__error">Были допущены ошибки или поле оставлено пустым.</div>
								</div>
							</div>
							<div class="b-form__row">
								<div class="b-form__block" data-form-field>
									<div class="b-form__field">
										<input type="email" data-form-field-inp data-required>
										<div class="b-form__placeholder">E-mail</div>
									</div>
									<div class="b-form__error">Были допущены ошибки или поле оставлено пустым.</div>
								</div>
							</div>
							<div class="b-form__check-list">
								<div class="b-form__check">
									<label><input type="checkbox" checked>
										Я cогласен на передачу и обработку <a href="javascript:void(0);">персональных данных</a>
									</label>
								</div>
							</div>
						</div>
						<div class="anketa__form-block anketa__form-bottom">
							<div class="anketa__form-bottom-ico" style="background-image: url('/static/theme/images/payments/step.svg');"></div>
							<div class="anketa__form-bottom-in">
								<div class="anketa__form-bottom-step">
									<div class="anketa__form-bottom-step-ico"></div>
								</div>
								<div class="anketa__form-bottom-btns">
									<button type="submit" class="anketa__form-bottom-btn btn">Перейти к оплате</button>
								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="anketa__aside">
					<div class="anketa__conditions _repayment">
						<div class="anketa__conditions-logo header__logo"></div>
						<div class="anketa__conditions-block">
							<div class="anketa__conditions-block-title">Комиссия</div>
							<div class="anketa__conditions-block-val">2,50 %</div>
							<div class="anketa__conditions-block-text">Минимум 29,00 <span class="rub"></span></div>
						</div>
						<div class="anketa__conditions-block">
							<div class="anketa__conditions-block-title">Сумма платежа</div>
							<div class="anketa__conditions-block-val _small-indent">10 250 ₽</div>
						</div>
						<div class="anketa__conditions-block">
							<div class="anketa__conditions-block-title">Дата зачиcления</div>
							<div class="anketa__conditions-block-val _small-indent">12 <span>апреля</span></div>
						</div>
					</div>
					<div class="anketa__aside-img-wrap">
						<div class="anketa__aside-img"></div>
					</div>
				</div>
			</div>
			<div data-nav-block class="repayment__payments">
				<div class="grid__inner">
					<a href="javascript:void(0);" class="all-btn _toggle" data-nav-btn>
						<span class="all-btn__counter _plus"></span><span class="all-btn__text">
						<span data-nav-text>Все способы оплаты</span>
					</span>
					</a>
				</div>
				<div class="b-blocks _dark conditions hide"  data-nav-content>
					<div class="grid__inner">
						<div class="b-block conditions__main">
							<div class="h3">Все способы оплаты</div>
							<div class="payments repayment__payments-items">
								<div class="payments__item">
									<a href="javascript:void(0);" class="payments__item-ico">
										<div class="payments__item-ico-item _static" style="background-image: url('/static/theme/images/payments/1.svg');"></div>
										<div class="payments__item-ico-item _hover" style="background-image: url('/static/theme/images/payments/1.svg');"></div>
									</a>
									<div class="payments__item-texts">
										<div class="payments__item-title">
											<a href="javascript:void(0);">Банкоматы Почта Банка</a>
										</div>
										<div class="payments__item-text">
											Моментальное зачисление
										</div>
									</div>
									<div class="payments__item-commission">0,0%</div>
								</div>
								<div class="payments__item">
									<a href="javascript:void(0);" class="payments__item-ico">
										<div class="payments__item-ico-item _static" style="background-image: url('/static/theme/images/payments/2.svg');"></div>
										<div class="payments__item-ico-item _hover" style="background-image: url('/static/theme/images/payments/2.svg');"></div>
									</a>
									<div class="payments__item-texts">
										<div class="payments__item-title">
											<a href="javascript:void(0);">Банкоматы ВТБ24</a>
										</div>
										<div class="payments__item-text">
											На следующий день
										</div>
									</div>
									<div class="payments__item-commission">1,0%</div>
								</div>
								<div class="payments__item">
									<a href="javascript:void(0);" class="payments__item-ico">
										<div class="payments__item-ico-item _static" style="background-image: url('/static/theme/images/payments/3.png');"></div>
										<div class="payments__item-ico-item _hover" style="background-image: url('/static/theme/images/payments/3.png');"></div>
									</a>
									<div class="payments__item-texts">
										<div class="payments__item-title">
											<a href="javascript:void(0);">Платежи и переводы Visa</a>
										</div>
										<div class="payments__item-text">
											Зачисление до 4 дней
										</div>
									</div>
									<div class="payments__item-commission">
											<span class="help">
												<a href="javascript:void(0);" class="help__ico">?</a>
											</span>
									</div>
								</div>
								<div class="payments__item">
									<a href="javascript:void(0);" class="payments__item-ico">
										<div class="payments__item-ico-item _static" style="background-image: url('/static/theme/images/payments/4.svg');"></div>
										<div class="payments__item-ico-item _hover" style="background-image: url('/static/theme/images/payments/4.svg');"></div>
									</a>
									<div class="payments__item-texts">
										<div class="payments__item-title">
											<a href="javascript:void(0);">Cистема Qiwi</a>
										</div>
										<div class="payments__item-text">
											Моментальное зачисление
										</div>
									</div>
									<div class="payments__item-commission">1,6%</div>
								</div>
								<div class="payments__item">
									<a href="javascript:void(0);" class="payments__item-ico">
										<div class="payments__item-ico-item _static" style="background-image: url('/static/theme/images/payments/5.png');"></div>
										<div class="payments__item-ico-item _hover" style="background-image: url('/static/theme/images/payments/5.png');"></div>
									</a>
									<div class="payments__item-texts">
										<div class="payments__item-title">
											<a href="javascript:void(0);">Cалоны Евросеть</a>
										</div>
										<div class="payments__item-text">
											Моментальное зачисление
										</div>
									</div>
									<div class="payments__item-commission">1,0%</div>
								</div>
								<div class="payments__item">
									<a href="javascript:void(0);" class="payments__item-ico">
										<div class="payments__item-ico-item _static" style="background-image: url('/static/theme/images/payments/6.svg');"></div>
										<div class="payments__item-ico-item _hover" style="background-image: url('/static/theme/images/payments/6.svg');"></div>
									</a>
									<div class="payments__item-texts">
										<div class="payments__item-title">
											<a href="javascript:void(0);">Золотая Корона</a>
										</div>
										<div class="payments__item-text">
											Моментальное зачисление
										</div>
									</div>
									<div class="payments__item-commission">1,0%</div>
								</div>
								<div class="payments__item">
									<a href="javascript:void(0);" class="payments__item-ico">
										<div class="payments__item-ico-item _static" style="background-image: url('/static/theme/images/payments/7.png');"></div>
										<div class="payments__item-ico-item _hover" style="background-image: url('/static/theme/images/payments/7.png');"></div>
									</a>
									<div class="payments__item-texts">
										<div class="payments__item-title">
											<a href="javascript:void(0);">Cистема Рапида</a>
										</div>
										<div class="payments__item-text">
											Моментальное зачисление
										</div>
									</div>
									<div class="payments__item-commission">1,0%</div>
								</div>
								<div class="payments__item">
									<a href="javascript:void(0);" class="payments__item-ico">
										<div class="payments__item-ico-item _static" style="background-image: url('/static/theme/images/payments/8.svg');"></div>
										<div class="payments__item-ico-item _hover" style="background-image: url('/static/theme/images/payments/8.svg');"></div>
									</a>
									<div class="payments__item-texts">
										<div class="payments__item-title">
											<a href="javascript:void(0);">Терминалы Элекснет</a>
										</div>
										<div class="payments__item-text">
											Зачисление до 3 дней
										</div>
									</div>
									<div class="payments__item-commission">1,3%</div>
								</div>
								<div class="payments__item">
									<a href="javascript:void(0);" class="payments__item-ico">
										<div class="payments__item-ico-item _static" style="background-image: url('/static/theme/images/payments/9.svg');"></div>
										<div class="payments__item-ico-item _hover" style="background-image: url('/static/theme/images/payments/9.svg');"></div>
									</a>
									<div class="payments__item-texts">
										<div class="payments__item-title">
											<a href="javascript:void(0);">Cистема СyberPlat</a>
										</div>
										<div class="payments__item-text">
											На следующий день
										</div>
									</div>
									<div class="payments__item-commission">
											<span class="help">
												<a href="javascript:void(0);" class="help__ico">?</a>
											</span>
									</div>
								</div>
								<div class="payments__item">
									<a href="javascript:void(0);" class="payments__item-ico">
										<div class="payments__item-ico-item _static" style="background-image: url('/static/theme/images/payments/10.png');"></div>
										<div class="payments__item-ico-item _hover" style="background-image: url('/static/theme/images/payments/10.png');"></div>
									</a>
									<div class="payments__item-texts">
										<div class="payments__item-title">
											<a href="javascript:void(0);">Межбанковские платежи</a>
										</div>
										<div class="payments__item-text">
											Зачисление до 5 дней
										</div>
									</div>
									<div class="payments__item-commission">
											<span class="help">
												<a href="javascript:void(0);" class="help__ico">?</a>
											</span>
									</div>
								</div>
							</div>
						</div>
						<div class="b-block _transparent conditions__all">
							<div class="h3">Документы</div>
							<div class="conditions__all-files files">
								<a href="javascript:void(0);" class="file">
									<div class="file__type">
										<div class="file__type-text">PDF</div>
										<div class="file__type-ico"></div>
									</div>
									<div class="file__inner">
										<div class="file__name">Памятка по погашению кредита <br />и пополнению кредитной карты</div>
										<div class="file__size">249 Кб</div>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="benefits__wrap">
				<div class="grid__inner">
					<div class="b-block _transparent benefits _repayment">
						<div class="benefits__inner">
							<div class="benefits__top">
								<div class="h2">Полезные услуги<br/>для клиентов</div>
								<div class="b-block__subtitle _white">Только в Почта Банке.</div>
							</div>
							<div class="b-block__indent">
								<div class="benefits__gall">
									<div class="benefits__gall-block _credit">
										<div class="b-block _transparent">
											<div class="h3">Автопогашение кредита</div>
											<div class="b-block__subtitle">Погашение очередного платежа по кредиту с вашей карты.</div>
											<div class="benefits__steps _small-titles">
												<div class="benefits__step">
													<div class="benefits__step-num">1</div>
													<div class="benefits__step-title">Предоставьте карту</div>
													<div class="benefits__step-text">Выпущенную другим банком-эмитентом.</div>
												</div>
												<div class="benefits__step">
													<div class="benefits__step-num">2</div>
													<div class="benefits__step-title">Дождитесь проверки</div>
													<div class="benefits__step-text">На доступность проведении операции.</div>
												</div>
												<div class="benefits__step">
													<div class="benefits__step-num">3</div>
													<div class="benefits__step-title">Подпишите заявление</div>
													<div class="benefits__step-text">Чтобы активировать услугу.</div>
												</div>
											</div>
										</div>
									</div>
									<div class="benefits__gall-slides _credit ">
										<div class="benefits__gall-slide">
											<div class="repayment__benefits__gall-img"></div>
											<div class="benefits__gall-slide-in">
												<div class="benefits__gall-slide-counter"></div>
												<div class="benefits__gall-slide-texts">
													<div class="benefits__gall-slide-title h4">Как это работает?</div>
													<div class="benefits__gall-slide-text">
														В дату платежа нужная сумма будет автоматически списываться с вашей карты и погашать очередной платеж по кредиту.
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="benefits__blocks">
									<div class="benefits__block">
										<div class="h4">Изменение даты платежа</div>
										<div class="benefits__block-subtitle">Выберите дату удобную вам.</div>
										<ul class="benefits__block-list">
											<li>Бесплатная активация услуги</li>
											<li>До 15 дней от текущего платежа</li>
											<li>В диапазоне с 4 по 28 число</li>
										</ul>
										<div class="article__ico frame">
											<div class="frame__shadow"></div>
											<div class="frame__in">
												<div class="frame__img" style="background-image: url('/static/theme/images/icons/frame/1.svg')"></div>
											</div>
										</div>
									</div>
									<div class="benefits__block">
										<div class="h4">Уменьшение платежа</div>
										<div class="benefits__block-subtitle">
											Легкие условия для оставшихся платежей.
										</div>
										<ul class="benefits__block-list">
											<li>Бесплатная активация услуги</li>
											<li>Уменьшение со следующего платежа</li>
											<li>Увеличение срока кредита</li>
										</ul>
										<div class="article__ico frame">
											<div class="frame__shadow"></div>
											<div class="frame__in">
												<div class="frame__img" style="background-image: url('/static/theme/images/icons/frame/2.svg')"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div data-nav-block class="repayment__block-wrap">
				<div class="grid__inner">
					<a href="javascript:void(0);" class="all-btn _toggle" data-nav-btn>
						<span class="all-btn__counter _plus"></span><span class="all-btn__text">
							<span data-nav-text>Досрочное погашение</span>
						</span>
					</a>
				</div>
				<div class="b-blocks _dark hide repayment__block"  data-nav-content>
					<div class="grid__inner">
						<div class="repayment__block-left" data-tabs>
							<div class="h3">Досрочное погашение</div>
							<div class="b-block__subtitle _white">Без комиссии и заявлений.</div>
							<div class="conditions__tabs tabs _white">
								<a href="javascript:void(0);" class="tabs__item _active" data-tabs-tab="1">Частичное погашение</a>
								<a href="javascript:void(0);" class="tabs__item" data-tabs-tab="2">Полное погашение</a>
							</div>
							<div class="repayment__block-left-text">
								Чтобы произвести частичное досрочное погашение обратитесь  в клиентский центр,
								на стойку продаж или в клиентскую службу  не позднее, чем за 7 дней до текущей даты платежа по кредиту.<br/><br/>
								  Вся сумма свыше очередного платежа в дату платежа будет направлена на погашение основного долга по кредиту,
								при этом размер следующих платежей будет уменьшен, а срок кредита останется прежним.
							</div>
							<div class="repayment__block-notice conditions__notice">
								Денежные средства необходимо вносить  не позднее установленной даты платежа.
								Пожалуйста, учитывайте время зачисления денежных средств конкретного способа.
							</div>
						</div>
						<div class="repayment__block-right">
							<div class="repayment__block-help">
								<div class="repayment__block-help-ico"></div>
								<div>
									<a class="h3 repayment__block-help-phone" href="tel:88005500770">8 800 550 0770</a>
								</div>
								<div class="b-block__subtitle _white">Клиентская служба</div>
							</div>
							<div class="repayment__block-right-bottom">
								<div class="repayment__block-right-ico"></div>
								<div class="repayment__block-right-text">
									Если вы не активировали услугу <a href="#">«Пропускаю платеж»</a>, при пропуске платежа ежедневно будет
									начисляться неустойка в размере 20% годовых на сумму просроченного платежа.
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div data-page-menu-content="3" class="hide">
		<div class="support">
			<div class="grid__inner">
				<div class="b-block questions _links">
					<div class="b-block__title h3 _dash">Решение проблем</div>
					<div class="questions__items" data-questions data-nav-block>
						<?
							$questions = [
								"Карта украдена или утеряна",
								"Банкомат не вернул карту",
								"Банкомат не выдал деньги или выдал неправильную сумму",
								"Вы получили СМС об операции, которую не совершали",
								"Вы забыли ПИН-код"
							];
							for ($i=0;$i<5;$i++){
								?>
								<div class="questions__item">
									<a href="not-found.php" class="questions__item-title"><?=$questions[$i]?></a>
								</div>
							<?}?>
						<div class="hide" data-nav-content>
							<?for ($i=100;$i<count($questions);$i++){?>
								<div class="questions__item " data-questions-item>
									<a href="not-found.php" class="questions__item-title"><?=$questions[$i]?></a>
								</div>
							<?}?>
						</div>
						<div class="questions__all">
							<a href="javascript:void(0);" class="all-btn" data-nav-btn>
								<span class="all-btn__counter">9</span><span class="all-btn__text">
									<span data-nav-text>Показать все вопросы</span>
									<span data-nav-text class="hide">Скрыть</span>
								</span>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div data-nav-block class="support__docs">
				<div class="grid__inner">
					<a href="javascript:void(0);" class="all-btn _toggle" data-nav-btn>
						<span class="all-btn__counter _plus"></span><span class="all-btn__text">
						<span data-nav-text>Документы</span>
					</span>
					</a>
				</div>
				<div class="b-blocks _dark conditions hide"  data-nav-content>
					<div class="grid__inner">
						<div class="b-block conditions__main">
							<div class="h3">Документы</div>
							<div class="support__docs-block files">
								<a href="https://www.pochtabank.ru/upload/images/documents/120/Uslovija_predostavlenija_ispolzovanija_i_vozvrata_kredita_Jelement_120_dejstvujut_s_24_03_17.pdf" target="_blank" class="file">
									<div class="file__type">
										<div class="file__type-text">PDF</div>
										<div class="file__type-ico"></div>
									</div>
									<div class="file__inner">
										<div class="file__name">Условия предоставления, использования<br/> и возврата кредита (действуют с 24.03.17)</div>
										<div class="file__size">218 Кб</div>
									</div>
								</a>
								<a href="https://www.pochtabank.ru/upload/contents/687/Uslovija_predostavlenija_kreditnyh_kart_redakcija_3_8_dejstvujut_s_16.02.17.pdf" target="_blank" class="file">
									<div class="file__type">
										<div class="file__type-text">PDF</div>
										<div class="file__type-ico"></div>
									</div>
									<div class="file__inner">
										<div class="file__name">Условия предоставления кредитных карт<br/>(редакция 3.8, действуют с 16.02.17)</div>
										<div class="file__size">453 Кб</div>
									</div>
								</a>
								<a href="https://www.pochtabank.ru/upload/images/documents/120/Tarif_Element_120_predloznie_zp_klientam.pdf" target="_blank" class="file">
									<div class="file__type">
										<div class="file__type-text">PDF</div>
										<div class="file__type-ico"></div>
									</div>
									<div class="file__inner">
										<div class="file__name">Тариф по кредитной карте «Элемент 120» (для зарплатных клиентов; действует с 10.03.17)</div>
										<div class="file__size">229 Кб</div>
									</div>
								</a>
								<a href="https://www.pochtabank.ru/upload/images/15.03_credcards/trebovaniya_k_klientu_s_10_03_2017.pdf" target="_blank" class="file">
									<div class="file__type">
										<div class="file__type-text">PDF</div>
										<div class="file__type-ico"></div>
									</div>
									<div class="file__inner">
										<div class="file__name">Требования к клиенту<br/>(действуют с 10.03.17)</div>
										<div class="file__size">464 Кб</div>
									</div>
								</a>
								<a href="https://www.pochtabank.ru/upload/contents/687/pamyatka_credit.pdf" target="_blank" class="file">
									<div class="file__type">
										<div class="file__type-text">PDF</div>
										<div class="file__type-ico"></div>
									</div>
									<div class="file__inner">
										<div class="file__name">Памятка безопасного использования банковских карт</div>
										<div class="file__size">464 Кб</div>
									</div>
								</a>
								<a href="https://www.pochtabank.ru/upload/contents/687/Tarif_po_kreditnoj_karte_EHlement_120_vstupaet_v_silu_24_01_17.pdf" target="_blank" class="file">
									<div class="file__type">
										<div class="file__type-text">PDF</div>
										<div class="file__type-ico"></div>
									</div>
									<div class="file__inner">
										<div class="file__name">Тариф по кредитной карте «Элемент 120»<br/>(действует с 24.01.17)</div>
										<div class="file__size">229 Кб</div>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="grid__inner">
				<div class="support__block">
					<div class="b-block support__block-left">
						<div class="b-block__title h3 _dash">Клиентская служба</div>
						<div class="benefits__steps">
							<div class="benefits__step">
								<div class="benefits__step-num">0</div>
								<div class="benefits__step-title">Линия блокировки карты</div>
							</div>
							<div class="benefits__step">
								<div class="benefits__step-num">1</div>
								<div class="benefits__step-title">Автоматизированное меню</div>
							</div>
							<div class="benefits__step">
								<div class="benefits__step-num">2</div>
								<div class="benefits__step-title">Узнать информацию о продуктах и услугах</div>
							</div>
							<div class="benefits__step">
								<div class="benefits__step-num">*</div>
								<div class="benefits__step-title">Соединение с оператором</div>
							</div>
						</div>
					</div>
					<div class="support__block-phones">
						<div class="support__block-phones-ico"></div>
						<div class="support__block-phones-block">
							<a href="tel:88005500770" class="h3 val">8 800 550 0770</a>
							<div class="support__block-phones-block-text">Бесплатный звонок по России.</div>
						</div>
						<div class="support__block-phones-block">
							<a href="tel:+74955321300" class="h3 val">+7 495 532 13 00</a>
							<div class="support__block-phones-block-text">Для звонков из-за границы.</div>
						</div>
						<div class="support__block-phones-btn">
							<a href="javascript:void(0);" class="btn">Позвонить с сайта</a>
						</div>
					</div>
				</div>
			</div>
			<div data-nav-block class="support__form">
				<div class="grid__inner">
					<a href="javascript:void(0);" class="all-btn _toggle" data-nav-btn>
						<span class="all-btn__counter _plus"></span><span class="all-btn__text">
						<span data-nav-text>Задать вопрос специалисту</span>
					</span>
					</a>
				</div>
				<div class="b-blocks _dark hide support__form-in"  data-nav-content>
					<div class="grid__inner">
						<form action="" data-base-form>
						<div class="support__form-block b-block" >
							<div class="h3">Задайте вопрос специалисту</div>
							<div class="b-block__subtitle _white">Получите профессиональную консультацию.</div>
							<div class="b-form__fields">
								<div class="b-form__row">
									<div class="b-form__block" data-form-field>
										<div class="b-form__field">
											<input type="text" data-form-field-inp data-required>
											<div class="b-form__placeholder">ФИО</div>
										</div>
										<div class="b-form__error">Были допущены ошибки или поле оставлено пустым.</div>
									</div>
								</div>
								<div class="b-form__row">
									<div class="b-form__block" data-form-field>
										<div class="b-form__field">
											<input type="text" data-form-field-inp data-required data-mask-phone>
											<div class="b-form__placeholder">Телефон</div>
										</div>
										<div class="b-form__error">Были допущены ошибки или поле оставлено пустым.</div>
									</div>
								</div>
								<div class="b-form__row">
									<div class="b-form__block" data-form-field>
										<div class="b-form__field">
											<input type="email" data-form-field-inp data-required>
											<div class="b-form__placeholder">E-mail</div>
										</div>
										<div class="b-form__error">Были допущены ошибки или поле оставлено пустым.</div>
									</div>
								</div>
								<div class="b-form__row">
									<div class="b-form__block" data-form-field>
										<div class="b-form__field">
											<input type="text" data-form-field-inp data-required>
											<div class="b-form__placeholder">Фактический адрес</div>
										</div>
										<div class="b-form__error">Были допущены ошибки или поле оставлено пустым.</div>
									</div>
								</div>
								<div class="b-form__row">
									<div class="b-form__block" data-form-field>
										<div class="b-form__field _textarea">
											<textarea data-form-field-inp data-required></textarea>
											<div class="b-form__placeholder">Текст вопроса</div>
										</div>
										<div class="b-form__error">Были допущены ошибки или поле оставлено пустым.</div>
									</div>
								</div>
								<div class="b-form__btn">
									<button type="submit" class="btn">Отправить форму</button>
								</div>
							</div>
						</div>
						</form>
						<div class="anketa__aside">
							<div class="b-steps anketa__aside-steps _vertical _arrs">
								<div class="b-steps__item">
									<div class="b-steps__item-ico" style="background-image: url('/static/theme/images/icons/instruction/1_white.svg')"></div>
									<div class="b-steps__item-title">1. Заполните форму</div>
									<div class="b-steps__item-text">На заполнение уйдет<br />не больше 5 минут.</div>
								</div>
								<div class="b-steps__item">
									<div class="b-steps__item-ico" style="background-image: url('/static/theme/images/icons/instruction/2_white.svg')"></div>
									<div class="b-steps__item-title">2. Дождитесь ответа</div>
									<div class="b-steps__item-text">Вопрос будет рассмотрен<br />в течение 10 минут.</div>
								</div>
							</div>
							<div class="anketa__aside-img-wrap">
								<div class="anketa__aside-img"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="grid__inner">
				<div class="support__contacts">
					<div class="b-block support__contacts-main">
						<div class="support__contacts-main-ico"></div>
						<div class="support__contacts-main-block">
							<div class="b-block__title h3 _dash">Головной офис</div>
							<div class="support__contacts-main-text">Преображенская пл., д. 8, г. Москва, 107061</div>
							<div class="support__contacts-items">
								<div class="support__contacts-item">
									<div class="support__contacts-item-title">Телефон</div>
									<div class="support__contacts-item-val _big"><a href="tel:84956465814">8 (495) 646-5814</a></div>
								</div>
								<div class="support__contacts-item">
									<div class="support__contacts-item-title">E-mail</div>
									<div class="support__contacts-item-val _big"><a href="mailto:welcome@pochtabank.ru">welcome@pochtabank.ru</a></div>
								</div>
							</div>
						</div>
						<div class="support__contacts-main-block">
							<div class="h4">Пресс-служба</div>
							<div class="support__contacts-items">
								<div class="support__contacts-item">
									<div class="support__contacts-item-title">Телефон</div>
									<div class="support__contacts-item-val"><a href="tel:84956465814">8 (495) 646-5814</a></div>
								</div>
								<div class="support__contacts-item">
									<div class="support__contacts-item-title">E-mail</div>
									<div class="support__contacts-item-val"><a href="mailto:pr@pochtabank.ru">pr@pochtabank.ru</a></div>
								</div>
							</div>
						</div>
						<div class="support__contacts-main-block">
							<div class="h4">Служба подбора персонала</div>
							<div class="support__contacts-items">
								<div class="support__contacts-item">
									<div class="support__contacts-item-title">Телефон</div>
									<div class="support__contacts-item-val"><a href="tel:84952283888">8 (495) 228-3888</a></div>
								</div>
								<div class="support__contacts-item">
									<div class="support__contacts-item-title">E-mail</div>
									<div class="support__contacts-item-val"><a href="mailto:rabota@pochtabank.ru">rabota@pochtabank.ru</a></div>
								</div>
							</div>
						</div>


					</div>
					<div class="support__contacts-city">
						<div class="support__contacts-city-ico"></div>
						<div class="anketa__offices-counter h3">215 <span>отделений</span></div>
						<div class="anketa__offices-city">В городе Москва</div>
						<div class="anketa__offices-btn">
							<a href="javascript:void(0);" class="btn" data-popup-show="map">Показать на карте</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="hide">
	<div class="anketa__offices-map" data-popup="map">
		<a href="javascript:void(0);" class="anketa__offices-map-marker" data-fancy-close></a>
		<div class="anketa__offices-map-popup hide" data-anketa-office-map-marker-popup>
			<a href="javascript:void(0);"  data-anketa-office-map-marker-popup-close class="anketa__offices-map-popup-close"></a>
			<div class="anketa__office">
				<div class="anketa__office-title">Москва, ул. Богданова, д. 6</div>
				<div class="anketa__office-subtitle">В отделении «Почты России».</div>
				<div class="anketa__office-schedule">
					<div class="anketa__office-schedule-block">
						<div class="anketa__office-schedule-block-title">Пн — Пт</div>
						<div class="anketa__office-schedule-block-val">09:00 — 18:00</div>
					</div>
					<div class="anketa__office-schedule-block">
						<div class="anketa__office-schedule-block-title">Сб — Вс</div>
						<div class="anketa__office-schedule-block-val">Выходные дни</div>
					</div>
				</div>
				<div class="anketa__office-btn">
					<a href="javascript:void(0);" data-anketa-office-set class="btn _w100 _transparent">Выбрать отделение</a>
				</div>
			</div>
		</div>
	</div>
</div>


<?include "includes/footer.php"?>

