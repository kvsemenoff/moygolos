

$(document).ready(function(){

    
    $('.az-select').each(function(){
        var select = $(this);    
        var option = select.find('select option');
        var str = '<div class="az-options">';
        select.find('option').each(function(){
            str+= '<div data-val="' +$(this).val() + '">' + $(this).text() + '</div>'
        });
        str+= '</div>';
        select.html(select.html() + str);

        select.find('select').mousedown(function(){
            return false;
        });
        select.mouseup(function(){
            select.find('select').focus();
        });
        select.find('.az-options div[data-val]').click(function(){
            select.find('select').val($(this).attr('data-val'));
        });
        select.find('select').focusout(function(){
            if(!select.is(':hover')){
                select.find('.az-options').slideUp(0);
                select.removeClass('az-select-focus');
            }
        });
    });

    $(".az-select").click(function(){
        $(this).find('.az-options').slideToggle(0);
        $(this).toggleClass('az-select-focus');
    });


        $('.df-img').hover(function(){
            $('.df-link', this).stop().fadeIn(1100);
        },function(){
            $('.df-link', this).stop().fadeOut(0);
        });
        

        $('.df-img-little a').click(function(evt){
        evt.preventDefault();
        var imgPath = $(this).attr('href');
        var oldImg = $('.df-img2 img');
        var newImg = $('<img src=" '+ imgPath +' ">');
        newImg.hide();
        $('.df-img2').append(newImg);
        newImg.fadeIn(300);

        oldImg.slideDown(200, function(){
            $(this).remove();
        });
    });
    $('.df-img-little a:first').click();



       var owl = $("#df-owl-demo");

      owl.owlCarousel({

    loop:true,
    nav:true, 
    autoplay:false,
    smartSpeed:1000,
    margin:0,
    navText:['<span class="df-left"></span>','<span class="df-right"></span>'],
    responsive:{
       0:{
          items:1
        },       
        1000:{
          items:1
        },
         1248:{
          items:1
        }
    }
     
  });




 });


