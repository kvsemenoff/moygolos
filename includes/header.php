<a name="main"></a>
<section class="dd-header-wrap">
	<div class="dd-menu-wrap ">
		<div class="dd-menu-container">
			<ul class="dd-nav hidden-xs hidden-sm">
				<li><a href="#main" class="dd-borders">Главная</a></li>
				<li><a href="#dericts" class="dd-borders">Направления</a></li>
				<li><a href="#teaher" class="dd-borders">Преподаватели</a></li>
				<li><a href="#foto" class="dd-borders">Фото с занятий</a></li>
				<li><a href="#results" class="dd-borders">Результаты</a></li>
				<li><a href="#schedule" class="dd-borders">Расписание<br> и стоимость </a></li>
				<li><a href="#testimonials" class="dd-borders">Отзывы</a></li>
				<li><a href="#contacts" class="dd-borders">Контакты</a></li>
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
				<a href="#log-in" name="modal">Заказать звонок</a>
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
	<div class="dd-header-bottom">
		<div class="dd-big-logo">
			<img src="img/big-logo.png" alt="">
		</div>
		<div class="dd-text">

			<span>Уроки вокала и речи в Екатеринбурге<br>
				ул. Декабристов 20, офис 413</span>
			</div>
			<div class="dd-big-phone">
				<span>8 (912) 627-10-04</span>
				<a href="#log-in" name="modal">Заказать звонок</a>
			</div>
		</div>
		
		<div class="clearfix"></div>
		<div class="dd-header-content">
			<div class="dd-title">
				<span>Раскрой свой голос за <span>1 месяц</span></span>
			</div>
			<div class="dd-slogan">
				<span> С помощью авторской методики преподавания<br>
					от вокалистки с 15-летним опытом в музыке</span>
				</div>
				<div class="dd-spisok">
					<ul>
						<li><span>Обучение в центре города</span></li>
						<li><span>Различные направления</span></li>
						<li><span>Групповые и индивидуальные занятия</span></li>
						<li><span>Дружеская атмосфера</span></li>
						<li><span>Возможность выступить на концерте</span></li>
					</ul>
					<a href="#log-in" name="modal">Получить приглашение</a>
				</div>
				<div class="dd-form">
					<form class="form2" action="#" method="post">
						<div class="dd-tit">
							<span>Заполните форму и получите</span>
						</div>
						<div class="dd-spans">
							<span class="dd-pb">Приглашение на <span>БЕСПЛАТНЫЙ</span> 
							пробный урок, на котором вы 
							получите индивидуальный<br>
							план развития:<span>
							<input class="dd-p" name="uname" type="text" placeholder="Как вас зовут">
							<input class="phone" name="phone" type="text" placeholder="Телефон">
							<input type="text" name="email" placeholder="Email">
							<input class="dd-sub" type="submit" value="Получить приглашение">
						</form>
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
			
			<script>
				$(document).ready(function(){
					$('.dd-nav li a').hover(function(){
						$(this).parent().next('li').find('a').toggleClass('dd-borders');
						//$(this).removeClass('dd-borders');
					});
				});
			</script>


			<div id="mask"></div>
			<div id="log-in" class="window">
				<div class="dd-form-wrap">
					<form class="form1" action="#" method="post">
						<div class="form-wrap-main">
							<div class="dd-close">x</div>
							<div class="dd-input-wrap dd-padding-bottom">
								<input class="my-input phone" type="text" placeholder="Введите телефон" name="phone">
								<input class="my-input" type="text" placeholder="Введите имя" name="uname">
							</div>
							<input class="sub" type="submit" class="form-button" name="submit" value="Заказать звонок">
						</div>
					</form>
				</div>
			</div>
			<div id="thanks" class="window">
				<div class="form-wrap-main">
					<div class="dd-close">x</div>
					<div class="form-title">
						Спасибо за заявку!
					</div>
					<div class="dd-form-txt">
						Наш менеджер свяжется с вами в ближайшее время!
					</div>
				</div>
			</div>
			<a href="#thanks" name="modal"></a>