<?include "includes/header.php"?>
	<div class="grid">
		<div class="b-blocks">
			<div class="grid__inner">
				<div class="b-block">
					<div class="b-block__title h3 _dash">Как получить карту?</div>
					<div class="b-steps _indent _arrs">
						<div class="b-steps__item">
							<div class="b-steps__item-ico" style="background-image: url('/static/theme/images/icons/get-card/1.svg')"></div>
							<div class="b-steps__item-title">1. Подайте заявку</div>
							<div class="b-steps__item-text">В клиентском центре, на стойке продаж или на сайте.</div>
						</div>
						<div class="b-steps__item">
							<div class="b-steps__item-ico" style="background-image: url('/static/theme/images/icons/get-card/2.svg')"></div>
							<div class="b-steps__item-title">2. Узнайте решение</div>
							<div class="b-steps__item-text">Ваша заявка будет рассмотрена в течение 5 минут.</div>
						</div>
						<div class="b-steps__item">
							<div class="b-steps__item-ico" style="background-image: url('/static/theme/images/icons/get-card/3.svg')"></div>
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
								"Могу ли я сразу внести несколько платежей?",
								"Шестой вопрос",
								"Седьмой вопрос",
								"Восьмой вопрос"
							];
							for ($i=0;$i<5;$i++){
								?>
								<div class="questions__item " data-questions-item>
									<a href="javascript:void(0);" class="questions__item-title" data-questions-item-title><?=$questions[$i]?></a>
									<div class="questions__item-answer" data-questions-item-answer>
										Ответ на вопрос <?=$questions[$i]?>
									</div>
								</div>
							<?}?>
						<div class="hide" data-nav-content>
							<?for ($i=5;$i<count($questions);$i++){?>
								<div class="questions__item " data-questions-item>
									<a href="javascript:void(0);" class="questions__item-title" data-questions-item-title><?=$questions[$i]?></a>
									<div class="questions__item-answer" data-questions-item-answer>
										Ответ на вопрос <?=$questions[$i]?>
									</div>
								</div>
							<?}?>
						</div>
						<div class="questions__all">
							<a href="javascript:void(0);" class="questions__all-btn" data-nav-btn>
								<span class="questions__all-counter">8</span><span class="questions__all-text">
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
					<div class="request-form">
						<div class="request-form__img"></div>
						<div class="request-form__block b-form">
							<form action="">
								<div class="b-form__row">
									<div class="b-form__block">
										<div class="b-form__block-field">
											<input type="text" placeholder="Имя и фамилия" >
										</div>
									</div>
								</div>
								<div class="b-form__row">
									<div class="b-form__block">
										<div class="b-form__block-field">
											<input type="email" placeholder="Электронная почта" >
										</div>
									</div>
								</div>
								<div class="b-form__row">
									<div class="b-form__block">
										<div class="b-form__block-field">
											<input type="text" data-mask-phone placeholder="Телефон" >
										</div>
									</div>
								</div>
								<div class="b-form__row">
									<div class="b-form__block">
										<div class="b-check b-form__check">
											<label><input type="checkbox" checked > Я cогласен на передачу и обработку
												<a href="#" target="_blank">персональных данных.</a></label>
										</div>
									</div>
								</div>
								<div class="b-form__btn-wrap">
									<button type="submit" class="btn">Оформить карту</button>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="b-block _transparent articles">
					<div class="b-block__title h3 _dash">Пользуйтесь банком выгодно</div>
					<div class="b-block__indent articles__list">
						<a href="#" class="article">
							<div class="article__inner">
								<div class="article__title h4">
									Как заработать на<br/>использовании карты
								</div>
								<div class="article__author">
									<div class="article__author-photo" style="background-image: url('/static/theme/images/icons/photo2.png');"></div>
									<div class="article__author-name">Никита Осипов</div>
									<div class="article__author-position">Журналист</div>
								</div>
								<div class="article__ico frame">
									<div class="frame__img" style="background-image: url('/static/theme/images/icons/article/1.svg')"></div>
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
									<div class="article__author-photo" style="background-image: url('/static/theme/images/icons/photo2.png');"></div>
									<div class="article__author-name">Дарья Ермолинa</div>
									<div class="article__author-position">покупатель со стажем</div>
								</div>
								<div class="article__ico frame">
									<div class="frame__img" style="background-image: url('/static/theme/images/icons/article/2.svg')"></div>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
<?include "includes/footer.php"?>

