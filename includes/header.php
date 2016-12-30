<section class="dd-header-wrap">
	<div class="dd-menu-wrap ">
		<div class="dd-menu-container">
			<ul class="dd-nav hidden-xs hidden-sm">
				<li><a href="#">Главная</a></li>
				<li><a href="#">Направления</a></li>
				<li><a href="#">Преподаватели</a></li>
				<li><a href="#">Фото с занятий</a></li>
				<li><a href="#">Результаты</a></li>
				<li><a href="#">Расписание<br> и стоимость </a></li>
				<li><a href="#">Отзывы</a></li>
				<li><a href="#">Контакты</a></li>
			</ul>
		</div>
		<div class="anz-menu hidden-lg hidden-md">
			<div class="dd-logo"><img src="img/logo.png" alt=""></div>
			<div class="dd-logo-2">
				<img src="img/logo2.png" alt="">
			</div>
			<div class="dd-txt-pl">
				<span>Уроки вокала и речи в Екатеринбурге</span><br>
				<span>ул. Декабристов 20, офис 413</span>
			</div>
			<div class="dd-fhone2">
				<span>8 (912) 627-10-04</span><br>
				<a href="#">Заказать звонок</a>
			</div>
			<div class="clearfix"></div>
			<div class="dd-fhone"><span>8 (912) 627-10-04</span></div>
			<input type="checkbox" id="check_1" class=""/>
			<label class="anz-menu-ch " for="check_1"><i class="fa fa-bars" aria-hidden="true"></i><img src="img/anz.png"></label>
			<div class="anz-perspective">
				<div class="menu-list-pressed">
					<label class="anz-menu-ch1" for="check_1"><i class="fa fa-times" aria-hidden="true"></i><img src="img/kres.png"></label>
					<ul class="dd-mainmenu">
						<li><a href="#">Главная</a></li>
						<li><a href="#">Направления</a></li>
						<li><a href="#">Преподаватели</a></li>
						<li><a href="#">Фото с занятий</a></li>
						<li><a href="#">Результаты</a></li>
						<li><a href="#">Расписание и стоимость </a></li>
						<li><a href="#">Отзывы</a></li>
						<li><a href="#">Контакты</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="dd-header-content">
		<div class="dd-title">
			<span>Раскрой свой голос за <span>1 месяц</span></span>
		</div>
		<div class="dd-slogan">
			<span> С помощью авторской методики преподавания
				от вокалистки с 15-летним опытом в музыке</span>
			</div>
			<div class="dd-spisok">
				<ul>
				<li><span>Обучение в центре города</span></li>
				<li><span>Различные направления</span></li>
					<li><span>Групповые и индивидуальные
						занятия</span></li>
						<li><span>Дружеская атмосфера</span></li>
						<li><span>Возможность выступить на
							концерте</span></li>
						</ul>
						<a href="#">Получить приглашение</a>
					</div>
				</div>

			</section>


			<script>
				function navigation_scroll(){
					var offset = $('.anz-menu').height() || $(window).height() || 150;
					var scroll = $(document).scrollTop();
					if (scroll < 20) {
						$('.anz-menu')
						.toggleClass('header-no-fixed', false)
						.toggleClass('header-fixed', false);
					}     
					else if (scroll >= offset) {
						$('.anz-menu')
						.toggleClass('header-no-fixed', false)
						.toggleClass('header-fixed', true);

					}
					else if (scroll < offset - 50) {
						$('.anz-menu')
						.toggleClass('header-fixed', true)
						.toggleClass('header-no-fixed', false);
					}
				}
				$(document).scroll(function(){
					navigation_scroll();
				});
			</script>