<?
	require_once('root.php');
	require_once('class/HtmlCodeGenerator.php');

	/*

				$constParam = array(
					'title'=>'Pfujkjdjr',
					'op' => array(
						'h' => 'h'
					)
				);
	 */

	$defaultSlider = array('slidesCounter'=>7, 'subtitle'=>'text', 'video'=>true, 'substrate'=>'red', 'decor'=>'none');
	if (isset($_COOKIE['slider'])) {
		$cookiesSlider = json_decode($_COOKIE['slider'], true);
	} else {
		$cookiesSlider = $defaultSlider;
		setcookie('slider', json_encode($cookiesSlider),0,'/');
	}
	//$params = array_merge($cookies, $constParam);

	$defaultInstruction = array('stepsCounter'=>3, 'decor'=>'icons');
	if (isset($_COOKIE['instruction'])) {
		$cookiesInstruction = json_decode($_COOKIE['instruction'], true);
	} else {
		$cookiesInstruction = $defaultInstruction;
		setcookie('instruction', json_encode($cookiesInstruction),0,'/');
	}
	//$params = array_merge($cookies, $constParam);

	$defaultQuestions = array('questionsActiveCounter'=>4, 'questionsCounter'=>10);
	if (isset($_COOKIE['questions'])) {
		$cookiesQuestions = json_decode($_COOKIE['questions'], true);
	} else {
		$cookiesQuestions = $defaultQuestions;
		setcookie('questions', json_encode($cookiesQuestions),0,'/');
	}
	//$params = array_merge($cookiesQuestions, $constParam);

	$defaultRequest = array('type'=>'open', 'fieldsCounter'=>3, 'check'=>true, 'openDecor'=>'img', 'closeDecor'=>'img');
	if (isset($_COOKIE['request'])) {
		$cookiesRequest = json_decode($_COOKIE['request'], true);
	} else {
		$cookiesRequest = $defaultRequest;
		setcookie('request', json_encode($cookiesRequest),0,'/');
	}
	//$params = array_merge($cookies, $constParam);


?>
<?
include "includes/header.php"
?>
	<a href="#" class="next-page"></a>

	<div class="grid__inner">
		<div class="card">
			<div class="card__img"></div>
			<div class="card__info">
				<div class="breadcrumbs">
					<div class="breadcrumbs__item">
						<a href="#" class="breadcrumbs__link">Карты</a>
					</div>
					<div class="breadcrumbs__item">
						<a href="#" class="breadcrumbs__link">Кредитные карты</a>
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
				<div class="card__btn"><a href="" class="btn">Оформить карту</a></div>
			</div>
		</div>
	</div>
	<div class="page-menu__wrap" data-page-menu>
		<div class="page-menu__holder"></div>
		<div class="page-menu">
			<div class="grid__inner">
				<div class="page-menu__in">
					<div class="tabs page-menu__items">
						<a href="#" class="tabs__item _active">Обзор</a>
						<a href="#" class="tabs__item">Погашение кредита</a>
						<a href="#" class="tabs__item">Поддержка</a>
					</div>
					<a href="#" class="btn page-menu__btn">оформить карту</a>
				</div>
			</div>
		</div>
	</div>
	<div class="b-blocks">
		<div class="grid__inner">
			<?php
				$content = HtmlCodeGenerator::getHtmlCodeForSlider($cookiesSlider);
				echo $content;
			?>
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
									<option value="3" selected>марте</option>
									<option value="4">апреле</option>
									<option value="5">мае</option>
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
					<a href="javascript:void(0);" class="calc__top-add">
						<span class="calc__top-add-ico"></span>Добавить покупки
					</a>
				</div>
				<div class="calc__schedule">
					<div class="h4">Чтобы не платить проценты, вам нужно будет вернуть</div>
					<div class="calc__schedule-blocks">
						<div class="calc__schedule-block">
							<div class="calc__label" data-calc-schedule-month="0"></div>
							<div class="calc__schedule-block-sum h4"><span data-calc-min-payment></span> ₽</div>
							<div class="calc__schedule-block-text">Минимальный платеж <a href="javascript:void(0);" class="calc__help">?</a></div>
						</div>
						<div class="calc__schedule-block">
							<div class="calc__label" data-calc-schedule-month="1"></div>
							<div class="calc__schedule-block-sum h4"><span data-calc-min-payment></span> ₽</div>
							<div class="calc__schedule-block-text">Минимальный платеж <a href="javascript:void(0);" class="calc__help">?</a></div>
						</div>
						<div class="calc__schedule-block">
							<div class="calc__label" data-calc-schedule-month="2"></div>
							<div class="calc__schedule-block-sum h4"><span data-calc-rest-payment></span> ₽</div>
							<div class="calc__schedule-block-text">Последний платеж <a href="javascript:void(0);" class="calc__help">?</a></div>
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
								<div class="conditions__block-item-val">900 <span class="rub"></span></div>
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
						<a href="#" class="file">
							<div class="file__type">
								<div class="file__type-text">PDF</div>
								<div class="file__type-ico"></div>
							</div>
							<div class="file__inner">
								<div class="file__name">Тариф по кредитной карте «Элемент 120» (действует с 24.01.17)</div>
								<div class="file__size">254 Кб</div>
							</div>
						</a>
						<a href="#" class="file">
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
											<a href="javascript:void(0);" class="video-btn">
												<div class="video-btn__ico"></div>
												<div class="video-btn__title">Посмотреть видео</div>
												<div class="video-btn__duration">3:20</div>
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
											<a href="javascript:void(0);" class="video-btn">
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
											<a href="javascript:void(0);" class="video-btn">
												<div class="video-btn__ico"></div>
												<div class="video-btn__title">Посмотреть видео</div>
												<div class="video-btn__duration">3:20</div>
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
								<div class="benefits__guarantee-item-content">
									<div class="benefits__guarantee-item-title">Все покупки по карте застрахованы</div>
									<div class="benefits__guarantee-item-text">На случай утери, кражи или случайного повреждения.</div>
								</div>
							</div>
							<div class="benefits__guarantee-item">
								<div class="benefits__guarantee-item-period">
									<div class="val">24</div>
									<div class="benefits__guarantee-item-period-text">месяца</div>
								</div>
								<div class="benefits__guarantee-item-content">
									<div class="benefits__guarantee-item-title">Увеличение срока гарантии в два раза</div>
									<div class="benefits__guarantee-item-text">Срок гарантии на покупки увеличивается до 24 месяцев.</div>
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
			<?
				$content = HtmlCodeGenerator::getHtmlCodeForInstruction($cookiesInstruction);
				echo $content;
			?>
			<?
				$content = HtmlCodeGenerator::getHtmlCodeForQuestions($cookiesQuestions);
				echo $content;
			?>
			<?
				$content = HtmlCodeGenerator::getHtmlCodeForRequest($cookiesRequest);
				echo $content;
			?>
			<div class="b-block _transparent articles">
				<div class="b-block__title h3 _dash">Пользуйтесь банком выгодно</div>
				<div class="b-block__indent articles__list">
					<a href="#" class="article">
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
					<a href="#" class="article">
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
<div data-constructors-block>
	<div class="settings-form" data-constructor="instruction">
		<a href="javascript:void(0);" class="settings-form__close" data-constructor-close></a>
		<div class="settings-form__in">
			<form action="templates/generator.php" data-constructor-form>
				<input type="hidden" name="formName" value="instruction">
				<div class="settings-form__btns">
					<a href="javascript:void(0);" class="settings-form__btn btn" data-constructor-form-save>сохранить</a>
					<a href="javascript:void(0);" class="settings-form__btn btn _transparent"  data-constructor-form-cancel>отменить</a>
				</div>
				<div class="settings-form__block">
					<div class="settings-form__block-title">1. Количество шагов</div>
					<div class="settings-form__field">
						<select name="stepsCounter"  data-chosen data-constructor-option>
							<? for ($i=0;$i<=4;$i++){?>
								<option value="<?=$i?>" <?= ($i==$cookiesInstruction['stepsCounter']) ? ' selected' :''?>><?=$i?></option>
							<?}?>
						</select>
					</div>
				</div>
				<div class="settings-form__block">
					<div class="settings-form__block-title">2. Оформление</div>
					<div class="settings-form__radio-list">
						<label class="settings-form__radio"><input type="radio" name="decor" <?= $cookiesInstruction['decor'] == 'none' ? 'checked' : ''?> data-constructor-option value="none"><span class="settings-form__radio-in">Не использовать</span></label>
						<label class="settings-form__radio"><input type="radio" name="decor" <?= $cookiesInstruction['decor'] == 'icons' ? 'checked' : ''?> data-constructor-option value="icons"><span class="settings-form__radio-in">Иконки</span></label>
					</div>
				</div>
			</form>
		</div>
	</div>
	<div class="settings-form" data-constructor="questions">
		<a href="javascript:void(0);" class="settings-form__close" data-constructor-close></a>
		<div class="settings-form__in">
			<form action="templates/generator.php" data-constructor-form>
				<input type="hidden" name="formName" value="questions">
				<div class="settings-form__btns">
					<a href="javascript:void(0);" class="settings-form__btn btn" data-constructor-form-save>сохранить</a>
					<a href="javascript:void(0);" class="settings-form__btn btn _transparent"  data-constructor-form-cancel>отменить</a>
				</div>
				<div class="settings-form__block">
					<div class="settings-form__block-title">1. Количество вопросов</div>
					<div class="settings-form__field">
						<select name="questionsCounter" data-chosen data-constructor-option>

							<?
								for ($i=1;$i<=10;$i++){?>
									<option value="<?=$i?>" <?=$i==$cookiesQuestions['questionsCounter'] ? ' selected' :''?>><?=$i?></option>
								<?}?>
						</select>
					</div>
				</div>
				<div class="settings-form__block">
					<div class="settings-form__block-title">2. Выводить по-умолчанию</div>
					<div class="settings-form__field">
						<select name="questionsActiveCounter" data-chosen data-constructor-option>
							<option value="all" <?= 'all'==$cookiesQuestions['questionsActiveCounter'] ? ' selected' :''?>>Все вопросы</option>
							<?
								for ($i=1;$i<=10;$i++){?>
									<option value="<?=$i?>" <?=$i==$cookiesQuestions['questionsActiveCounter'] ? ' selected' :''?>><?=$i?></option>
								<?}?>
						</select>
					</div>
				</div>
			</form>
		</div>
	</div>
	<div class="settings-form" data-tabs data-constructor="request">
		<a href="javascript:void(0);" class="settings-form__close" data-constructor-close></a>
		<div class="settings-form__in">
			<div class="settings-form__btns">
				<a href="javascript:void(0);" class="settings-form__btn btn" data-constructor-form-save>сохранить</a>
				<a href="javascript:void(0);" class="settings-form__btn btn _transparent"  data-constructor-form-cancel>отменить</a>
			</div>
			<form action="templates/generator.php" data-constructor-form>
				<input type="hidden" name="formName" value="request">
				<div class="settings-form__block">
					<div class="settings-form__block-title">1. Тип заявки</div>
					<div class="settings-form__radio-list">
						<label class="settings-form__radio" data-tabs-tab="1"><input type="radio" name="type"  <?= $cookiesRequest['type'] == 'open' ? 'checked' : ''?> data-constructor-option value="open"><span class="settings-form__radio-in">Открытая</span></label>
						<label class="settings-form__radio" data-tabs-tab="2"><input type="radio" name="type"  <?= $cookiesRequest['type'] == 'close' ? 'checked' : ''?> data-constructor-option value="close"><span class="settings-form__radio-in">Закрытая</span></label>
					</div>
				</div>
				<div data-tabs-content="1">
					<div class="settings-form__block">
						<div class="settings-form__block-title">2. Количество полей</div>
						<div class="settings-form__field">
							<select name="fieldsCounter" data-chosen data-constructor-option>
								<?for ($i=0;$i<=6;$i++){?>
									<option value="<?=$i?>" <?=$i==$cookiesRequest['fieldsCounter'] ? ' selected' :''?>><?=$i?></option>
								<?}?>
							</select>
						</div>
						<div class="settings-form__check-list">
							<label class="settings-form__check">
								<input type="checkbox" data-constructor-option name="check" <?= $cookiesRequest['check'] == true ? 'checked' : ''?> >Checkbox
							</label>
						</div>
					</div>
					<div class="settings-form__block">
						<div class="settings-form__block-title">3. Оформление</div>
						<div class="settings-form__radio-list">
							<label class="settings-form__radio"><input type="radio" name="openDecor"  <?= $cookiesRequest['openDecor'] == 'img' ? 'checked' : ''?> data-constructor-option value="img"><span class="settings-form__radio-in">Изображение</span></label>
							<label class="settings-form__radio"><input type="radio" name="openDecor"  <?= $cookiesRequest['openDecor'] == 'none' ? 'checked' : ''?> data-constructor-option value="none"><span class="settings-form__radio-in">Не использовать</span></label>
						</div>
					</div>
				</div>
				<div data-tabs-content="2" class="hide">
					<div class="settings-form__block">
						<div class="settings-form__block-title">2. Оформление</div>
						<div class="settings-form__radio-list">
							<label class="settings-form__radio"><input type="radio" name="closeDecor" <?= $cookiesRequest['closeDecor'] == 'img' ? 'checked' : ''?> data-constructor-option value="img"><span class="settings-form__radio-in">Изображение</span></label>
							<label class="settings-form__radio"><input type="radio" name="closeDecor"  <?= $cookiesRequest['closeDecor'] == 'none' ? 'checked' : ''?> data-constructor-option value="none"><span class="settings-form__radio-in">Не использовать</span></label>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
	<div class="settings-form" data-constructor="slider">
		<a href="javascript:void(0);" class="settings-form__close" data-constructor-close></a>
		<div class="settings-form__in">
			<div class="settings-form__btns">
				<a href="javascript:void(0);" class="settings-form__btn btn" data-constructor-form-save>сохранить</a>
				<a href="javascript:void(0);" class="settings-form__btn btn _transparent"  data-constructor-form-cancel>отменить</a>
			</div>
			<form action="templates/generator.php" data-constructor-form>
				<input type="hidden" name="formName" value="slider">
				<div class="settings-form__block">
					<div class="settings-form__block-title">1. Количество слайдов</div>
					<div class="settings-form__field">
						<select name="slidesCounter"  data-chosen data-constructor-option>
							<?for ($i=1;$i<=8;$i++){?>
								<option value="<?=$i?>" <?=$i==$cookiesSlider['slidesCounter'] ? ' selected' :''?>><?=$i?></option>
							<?}?>
						</select>
					</div>
				</div>
				<div class="settings-form__block">
					<div class="settings-form__block-title">2. Подстрочник</div>
					<div class="settings-form__radio-list">
						<label class="settings-form__radio"><input type="radio" name="subtitle" <?= $cookiesSlider['subtitle'] == 'none' ? 'checked' : ''?> data-constructor-option value="none"><span class="settings-form__radio-in">Не использовать</span></label>
						<label class="settings-form__radio"><input type="radio" name="subtitle" <?= $cookiesSlider['subtitle'] == 'text' ? 'checked' : ''?> data-constructor-option value="text"><span class="settings-form__radio-in">Текст</span></label>
						<label class="settings-form__radio"><input type="radio" name="subtitle" <?= $cookiesSlider['subtitle'] == 'val' ? 'checked' : ''?> data-constructor-option value="val"><span class="settings-form__radio-in">Значения</span></label>
						<label class="settings-form__radio"><input type="radio" name="subtitle" <?= $cookiesSlider['subtitle'] == 'list' ? 'checked' : ''?> data-constructor-option value="list"><span class="settings-form__radio-in">Список</span></label>
					</div>
					<div class="settings-form__check-list">
						<label class="settings-form__check">
							<input type="checkbox" data-constructor-option <?= $cookiesSlider['video'] == true ? 'checked' : ''?> name="video">Видео
						</label>
					</div>
				</div>
				<div class="settings-form__block">
					<div class="settings-form__block-title">3. Подложка</div>
					<div class="settings-form__radio-list">
						<label class="settings-form__radio"><input type="radio" name="substrate" <?= $cookiesSlider['substrate'] == 'none' ? 'checked' : ''?> data-constructor-option value="none"><span class="settings-form__radio-in">Не использовать</span></label>
						<label class="settings-form__radio"><input type="radio" name="substrate" <?= $cookiesSlider['substrate'] == 'red' ? 'checked' : ''?> data-constructor-option value="red"><span class="settings-form__radio-in"><span class="settings-form__radio-color _red"></span>Алая</span></label>
						<label class="settings-form__radio"><input type="radio" name="substrate" <?= $cookiesSlider['substrate'] == 'blue' ? 'checked' : ''?> data-constructor-option value="blue"><span class="settings-form__radio-in"><span class="settings-form__radio-color _blue"></span>Синяя</span></label>
					</div>
				</div>
				<div class="settings-form__block">
					<div class="settings-form__block-title">4. Оформление</div>
					<div class="settings-form__radio-list">
						<label class="settings-form__radio"><input type="radio" name="decor" <?= $cookiesSlider['decor'] == 'none' ? 'checked' : ''?>  checked data-constructor-option value="none"><span class="settings-form__radio-in">Не использовать</span></label>
						<label class="settings-form__radio"><input type="radio" name="decor" <?= $cookiesSlider['decor'] == 'mark' ? 'checked' : ''?> data-constructor-option value="mark"><span class="settings-form__radio-in">Марка</span></label>
						<label class="settings-form__radio"><input type="radio" name="decor" <?= $cookiesSlider['decor'] == 'pattern' ? 'checked' : ''?> data-constructor-option value="pattern"><span class="settings-form__radio-in">Паттерн</span></label>
					</div>
				</div>
			</form>
		</div>
	</div>

</div>
<footer class="footer">
	<div class="grid__inner">
		<div class="footer__inner">
			<div class="b-block__title h3">Вам могут подойти</div>
			<div class="b-steps _indent _white">
				<div class="b-steps__item">
					<div class="b-steps__item-ico" style="background-image: url('/static/theme/images/icons/footer/1.svg')"></div>
					<div class="b-steps__item-title">Кредит наличными</div>
					<div class="b-steps__item-text">На любые цели.</div>
				</div>
				<div class="b-steps__item">
					<div class="b-steps__item-ico" style="background-image: url('/static/theme/images/icons/footer/2.svg')"></div>
					<div class="b-steps__item-title">Покупки в кредит</div>
					<div class="b-steps__item-text">Оплата товаров и услуг.</div>
				</div>
				<div class="b-steps__item">
					<div class="b-steps__item-ico" style="background-image: url('/static/theme/images/icons/footer/3.svg')"></div>
					<div class="b-steps__item-title">Рефинансирование</div>
					<div class="b-steps__item-text">На выгодных условиях.</div>
				</div>
			</div>
			<div class="footer__menu">
				<div class="footer__menu-col">
					<div class="footer__menu-title"><a href="#">Продукты и услуги</a></div>
					<ul class="footer__menu-list">
						<li><a href="#">Кредит и ипотека</a></li>
						<li><a href="#">Карты</a></li>
						<li><a href="#">Платежи и переводы</a></li>
						<li><a href="#">Страхование</a></li>
						<li><a href="#">Вклады и инвестиции</a></li>
					</ul>
				</div>
				<div class="footer__menu-col">
					<div class="footer__menu-title"><a href="#">Помощь</a></div>
					<ul class="footer__menu-list">
						<li><a href="#">Как оформить кредит</a></li>
						<li><a href="#">Как оплатить кредит</a></li>
						<li><a href="#">Часто задаваемые вопросы</a></li>
						<li><a href="#">Задать вопрос</a></li>
						<li><a href="#">Поддержка сайта</a></li>
					</ul>
				</div>
				<div class="footer__menu-col">
					<div class="footer__menu-title"><a href="#">О банке</a></div>
					<ul class="footer__menu-list">
						<li><a href="#">Контакты</a></li>
						<li><a href="#">Новости</a></li>
						<li><a href="#">Работа у нас</a></li>
						<li><a href="#">Пресс-служба</a></li>
						<li><a href="#">Раскрытие информации</a></li>
					</ul>
				</div>
			</div>
			<div class="footer__bottom">
				<a href="#" class="footer__bottom-logo" target="_blank"></a>
				<div class="footer__social">
					<a href="#" class="footer__social-item _vk" target="_blank"></a>
					<a href="#" class="footer__social-item _fb" target="_blank"></a>
					<a href="#" class="footer__social-item _ok" target="_blank"></a>
					<a href="#" class="footer__social-item _tw" target="_blank"></a>
					<a href="#" class="footer__social-item _google" target="_blank"></a>
				</div>
				<div class="footer__bottom-text">
					ПАО «Почта Банк» является частью международной финансовой группы ВТБ и ФГУП «Почта России».<br/>
					Лицензия ЦБ РФ на осуществление банковских операций № 650 от 25.03.2016.
				</div>
			</div>
		</div>
	</div>
</footer>
</body>
</html>

