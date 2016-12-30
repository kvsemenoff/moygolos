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