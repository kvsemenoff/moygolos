
  <script src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
  <script src="icon_customImage.js" type="text/javascript"></script>
  <style>
        html, body, #map {
            width: 100%; height: 555px; padding: 0; margin: 0;
        }
  </style>


<div class="dc-schedule">
    <center>
        <h2 class="db-h-content">
            <b>ЖДЕМ ВАС В ГОСТИ :)</b>
        </h2>
    </center>
</div>

<span class="dc-address">
    <center>        
        <img src="img/marker.png">
        <b>ЕКАТЕРИНБУРГ, УЛ. ДЕКАБРИСТОВ 20, 4 ЭТАЖ, ОФИС 413</b>
    </center>
</span>

<div class="container">
    <div id="map"></div>
</div>
 
<script type="text/javascript">
 ymaps.ready(function () {
    var myMap = new ymaps.Map('map', {
            center: [56.824617, 60.621011],
            zoom: 17
        }, {
            searchControlProvider: 'yandex#search'
        }),
        myPlacemark = new ymaps.Placemark([56.824423, 60.618930], {
            hintContent: 'ЕКАТЕРИНБУРГ, УЛ. ДЕКАБРИСТОВ 20, 4 ЭТАЖ, ОФИС 413',
            balloonContent: 'ЖДЕМ ВАС В ГОСТИ'
        }, {
            // Опции.
            // Необходимо указать данный тип макета.
            iconLayout: 'default#image',
            // Своё изображение иконки метки.
            iconImageHref: 'img/marker.png',
            // Размеры метки.
            iconImageSize: [30, 42],
            // Смещение левого верхнего угла иконки относительно
            // её "ножки" (точки привязки).
            iconImageOffset: [-5, -38]
        });

    myMap.geoObjects.add(myPlacemark);
    myMap.behaviors.disable('scrollZoom');
}); 
  
</script>