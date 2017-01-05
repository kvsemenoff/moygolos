<script>
	$(document).ready(function(){
		$('.testimonials__slider').owlCarousel({
	        loop: true,
	        margin:30,
	        responsiveClass:true,
	        nav: true,
	        dots: true,
	        pagination: true,
	        navText:['<span class="testimonials-arr testimonials-left"><</span>','<span class="testimonials-arr testimonials-right">></span>'],
	        responsive:{
	            0:{
	                items:1
	            },
	            600:{
	                items:1
	            },
	            1000:{
	                items:1
	            }
	        }
	    });
		

	    $('.testimonials__slider .owl-dot').each(function(i,elem) {

			$(this).find('span').html('<span class="t-number">'+(i+1)+'</span>');
		});
		var countItems = ($(".testimonials__slider .owl-dots div").length*55)-20;
		var strpx = countItems+'px';
		$('.testimonials__slider .owl-controls').css('width',strpx);
		//alert(countItems);

	});
</script>
<section class="testimonials">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>отзывы наших учеников</h2>
				
				<div class="testimonials__slider">
					<div class="item">
						<div class="testimonials__left">
							<div class="testimonials__img-box">
								<img src="img/da-foto1.png" alt="">
							</div>	
							<span class="testimonials__left-title">Кристина Вебер, 25 лет</span>
							<a class="soc-link" href="vk.com/kristyveber">vk.com/kristyveber</a>
						</div>
						<div class="testimonials__right">
							<span class="testimonials__right-title">"...безумно жажду петь!...”</span> 
							<div class="testimonials__right-text">
								Что же я хочу сказать после мастер-класса "Фитнес для голоса"? А то что я хочу,нет..даже не хочу,а безумно жажду петь! Очень вдохновляющее занятие! Ксюша, спасибо за то что было легко и доступно даже новичку. Упражнения очень полезны и универсальны для тех кто поет, для тех кто выступает на публике и так же для тех кто хочет стать более уверенными в себе. Занятие очень плодотворное, атмосфера очень душевная. Спасибо!
							</div>
						</div>
						<div class="clear"></div>
					</div>	
					<div class="item">
						<div class="testimonials__left">
							<div class="testimonials__img-box">
								<img src="img/da-foto1.png" alt="">
							</div>	
							<span class="testimonials__left-title">Кристина Вебер, 25 лет</span>
							<a class="soc-link" href="vk.com/kristyveber">vk.com/kristyveber</a>
						</div>
						<div class="testimonials__right">
							<span class="testimonials__right-title">"...безумно жажду петь!...”</span> 
							<div class="testimonials__right-text">
								Что же я хочу сказать после мастер-класса "Фитнес для голоса"? А то что я хочу,нет..даже не хочу,а безумно жажду петь! Очень вдохновляющее занятие! Ксюша, спасибо за то что было легко и доступно даже новичку. Упражнения очень полезны и универсальны для тех кто поет, для тех кто выступает на публике и так же для тех кто хочет стать более уверенными в себе. Занятие очень плодотворное, атмосфера очень душевная. Спасибо!
							</div>
						</div>
						<div class="clear"></div>
					</div>
					<div class="item">
						<div class="testimonials__left">
							<div class="testimonials__img-box">
								<img src="img/da-foto1.png" alt="">
							</div>	
							<span class="testimonials__left-title">Кристина Вебер, 25 лет</span>
							<a class="soc-link" href="vk.com/kristyveber">vk.com/kristyveber</a>
						</div>
						<div class="testimonials__right">
							<span class="testimonials__right-title">"...безумно жажду петь!...”</span> 
							<div class="testimonials__right-text">
								Что же я хочу сказать после мастер-класса "Фитнес для голоса"? А то что я хочу,нет..даже не хочу,а безумно жажду петь! Очень вдохновляющее занятие! Ксюша, спасибо за то что было легко и доступно даже новичку. Упражнения очень полезны и универсальны для тех кто поет, для тех кто выступает на публике и так же для тех кто хочет стать более уверенными в себе. Занятие очень плодотворное, атмосфера очень душевная. Спасибо!
							</div>
						</div>
						<div class="clear"></div>
					</div>
					<div class="item">
						<div class="testimonials__left">
							<div class="testimonials__img-box">
								<img src="img/da-foto1.png" alt="">
							</div>	
							<span class="testimonials__left-title">Кристина Вебер, 25 лет</span>
							<a class="soc-link" href="vk.com/kristyveber">vk.com/kristyveber</a>
						</div>
						<div class="testimonials__right">
							<span class="testimonials__right-title">"...безумно жажду петь!...”</span> 
							<div class="testimonials__right-text">
								Что же я хочу сказать после мастер-класса "Фитнес для голоса"? А то что я хочу,нет..даже не хочу,а безумно жажду петь! Очень вдохновляющее занятие! Ксюша, спасибо за то что было легко и доступно даже новичку. Упражнения очень полезны и универсальны для тех кто поет, для тех кто выступает на публике и так же для тех кто хочет стать более уверенными в себе. Занятие очень плодотворное, атмосфера очень душевная. Спасибо!
							</div>
						</div>
						<div class="clear"></div>
					</div>
					<div class="item">
						<div class="testimonials__left">
							<div class="testimonials__img-box">
								<img src="img/da-foto1.png" alt="">
							</div>	
							<span class="testimonials__left-title">Кристина Вебер, 25 лет</span>
							<a class="soc-link" href="vk.com/kristyveber">vk.com/kristyveber</a>
						</div>
						<div class="testimonials__right">
							<span class="testimonials__right-title">"...безумно жажду петь!...”</span> 
							<div class="testimonials__right-text">
								Что же я хочу сказать после мастер-класса "Фитнес для голоса"? А то что я хочу,нет..даже не хочу,а безумно жажду петь! Очень вдохновляющее занятие! Ксюша, спасибо за то что было легко и доступно даже новичку. Упражнения очень полезны и универсальны для тех кто поет, для тех кто выступает на публике и так же для тех кто хочет стать более уверенными в себе. Занятие очень плодотворное, атмосфера очень душевная. Спасибо!
							</div>
						</div>
						<div class="clear"></div>
					</div>
					<div class="item">
						<div class="testimonials__left">
							<div class="testimonials__img-box">
								<img src="img/da-foto1.png" alt="">
							</div>	
							<span class="testimonials__left-title">Кристина Вебер, 25 лет</span>
							<a class="soc-link" href="vk.com/kristyveber">vk.com/kristyveber</a>
						</div>
						<div class="testimonials__right">
							<span class="testimonials__right-title">"...безумно жажду петь!...”</span> 
							<div class="testimonials__right-text">
								Что же я хочу сказать после мастер-класса "Фитнес для голоса"? А то что я хочу,нет..даже не хочу,а безумно жажду петь! Очень вдохновляющее занятие! Ксюша, спасибо за то что было легко и доступно даже новичку. Упражнения очень полезны и универсальны для тех кто поет, для тех кто выступает на публике и так же для тех кто хочет стать более уверенными в себе. Занятие очень плодотворное, атмосфера очень душевная. Спасибо!
							</div>
						</div>
						<div class="clear"></div>
					</div>
					<div class="item">
						<div class="testimonials__left">
							<div class="testimonials__img-box">
								<img src="img/da-foto1.png" alt="">
							</div>	
							<span class="testimonials__left-title">Кристина Вебер, 25 лет</span>
							<a class="soc-link" href="vk.com/kristyveber">vk.com/kristyveber</a>
						</div>
						<div class="testimonials__right">
							<span class="testimonials__right-title">"...безумно жажду петь!...”</span> 
							<div class="testimonials__right-text">
								Что же я хочу сказать после мастер-класса "Фитнес для голоса"? А то что я хочу,нет..даже не хочу,а безумно жажду петь! Очень вдохновляющее занятие! Ксюша, спасибо за то что было легко и доступно даже новичку. Упражнения очень полезны и универсальны для тех кто поет, для тех кто выступает на публике и так же для тех кто хочет стать более уверенными в себе. Занятие очень плодотворное, атмосфера очень душевная. Спасибо!
							</div>
						</div>
						<div class="clear"></div>
					</div>
				</div>				 
			</div>	
		</div>
	</div>
</section>