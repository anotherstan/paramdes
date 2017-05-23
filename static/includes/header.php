<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta charset="utf-8">
	<title>Сайт</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic" rel="stylesheet">
	<link rel="stylesheet" href="/static/theme/js/jquery-ui/jquery-ui.min.css">
	<link rel="stylesheet" href="/static/theme/css/styles.css">

	<script src="/static/theme/js/libs.js"></script>
	<script src="/static/theme/js/main.js"></script>
</head>
<body >
<header class="header <?=$tabletVersoin ? ' _tablet-v':''?>">
	<div class="header__top">
		<div class="grid__inner">
			<div class="header__inner">
				<div class="top-menu">
					<div class="top-menu__item">
						<a href="#" class="top-menu__link _arr">Частным лицам</a>
					</div>
					<div class="top-menu__item">
						<a href="#" class="top-menu__link _arr">Москва</a>
					</div>
					<div class="top-menu__item">
						<a href="#" class="top-menu__link">Офисы и банкоматы</a>
					</div>
					<div class="top-menu__item">
						<a href="#" class="top-menu__link">Контакты</a>
					</div>
					<div class="top-menu__item">
						<a href="#" class="top-menu__link">Поддержка</a>
					</div>
					<div class="top-menu__item _login">
						<a href="#" class="top-menu__link">Интернет-банк</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="header__main">
		<div class="grid__inner">
			<div class="header__inner">
				<a href="#" class="header__logo"></a>
				<div class="header__menu">
					<div class="header__menu-item">
						<a href="#" class="header__menu-link _active">Карты</a>
					</div>
					<div class="header__menu-item">
						<a href="#" class="header__menu-link">Вклады</a>
					</div>
					<div class="header__menu-item">
						<a href="#" class="header__menu-link">Кредиты</a>
					</div>
					<div class="header__menu-item">
						<a href="#" class="header__menu-link">Сберегательный счет</a>
					</div>
					<div class="header__menu-item">
						<a href="#" class="header__menu-link">Платежи</a>
					</div>
					<div class="header__menu-item">
						<a href="#" class="header__menu-link">Еще <span class="dots">...</span></a>
					</div>
				</div>
				<a href="#" class="header__main-btn btn">Онлайн-заявка</a>
			</div>
		</div>
	</div>
</header>
<div class="grid">