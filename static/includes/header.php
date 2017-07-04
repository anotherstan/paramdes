<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta charset="utf-8">
	<title>Сайт</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
	<link rel="stylesheet" href="/static/theme/js/jquery-ui/jquery-ui.min.css">
	<link rel="stylesheet" href="/static/theme/js/swiper/dist/css/swiper.min.css">
	<link rel="stylesheet" href="/static/theme/js/fancybox/jquery.fancybox.css">
	<link rel="stylesheet" href="/static/theme/js/chosen/chosen.css">
	<link rel="stylesheet" href="/static/theme/css/styles.css">

	<script src="/static/theme/js/libs.js"></script>
	<script src="http://www.youtube.com/player_api"></script>
	<script src="/static/theme/js/main.js"></script>
</head>
<body >
<header class="header <?=$tabletVersoin ? ' _tablet-v':''?>">
	<div class="header__top">
		<div class="grid__inner">
			<div class="header__inner">
				<div class="top-menu">
					<div class="top-menu__item">
						<a href="javascript:void(0);" class="top-menu__link _arr">Частным лицам</a>
					</div>
					<div class="top-menu__item">
						<a href="javascript:void(0);" class="top-menu__link _arr">Москва</a>
					</div>
					<div class="top-menu__item">
						<a href="javascript:void(0);" class="top-menu__link">Офисы и банкоматы</a>
					</div>
					<div class="top-menu__item">
						<a href="javascript:void(0);" class="top-menu__link">Поддержка</a>
					</div>
					<div class="top-menu__item">
						<a href="javascript:void(0);" class="top-menu__link">Погасить кредит</a>
					</div>
					<div class="top-menu__item _login">
						<a href="javascript:void(0);" class="top-menu__link">Интернет-банк</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="header__main">
		<div class="grid__inner">
			<div class="header__inner">
				<a href="/static/home.php" class="header__logo"></a>
				<div class="header__menu">
					<div class="header__menu-item">
						<a href="/static/cards.php" class="header__menu-link <?=$menuCards == true ? '_active':''?> >">Карты</a>
					</div>
					<div class="header__menu-item">
						<a href="/static/not-found.php" class="header__menu-link">Вклады</a>
					</div>
					<div class="header__menu-item">
						<a href="/static/credits.php" class="header__menu-link  <?=$menuCredits == true ? '_active':''?>" >Кредиты</a>
					</div>
					<div class="header__menu-item">
						<a href="/static/not-found.php" class="header__menu-link">Сберегательный счет</a>
					</div>
					<div class="header__menu-item">
						<a href="/static/not-found.php" class="header__menu-link">Ипотека</a>
					</div>
					<div class="header__menu-item">
						<a href="/static/not-found.php" class="header__menu-link">Еще <span class="dots">...</span></a>
					</div>
				</div>
				<a href="javascript:void(0);"  data-popup-show="request-online" data-popup-class="_right-close" class="header__main-btn btn">Онлайн-заявка</a>
			</div>
		</div>
	</div>
	<div class="hide">
		<div class="request-popup" data-popup="request-online">
			<div class="h3">Онлайн-заявка</div>
			<div class="b-block__subtitle">Заполните заявку и получите решение онлайн.</div>
			<div class="request-popup__items">
				<a href="/static/anketa.php" class="request-popup__item">
					<div class="request-popup__item-ico" style="background-image: url('/static/theme/images/icons/request-popup/1.svg');"></div>
					<div class="request-popup__item-title">Кредит наличными</div>
					<div class="request-popup__item-text">На любые цели.</div>
				</a>
				<a href="/static/anketa-card.php" class="request-popup__item">
					<div class="request-popup__item-ico" style="background-image: url('/static/theme/images/icons/request-popup/2.png');"></div>
					<div class="request-popup__item-title">Кредитная карта</div>
					<div class="request-popup__item-text">120 дней без комиссии.</div>
				</a>
			</div>
		</div>
	</div>
</header>
<div class="grid">