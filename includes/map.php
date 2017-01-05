


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


<div id="dc-map"></div>

<script>

    var map;

    var myLatLng = {lat: 56.824423, lng: 60.618930}
    var myLatLng1 = {lat: 56.824617, lng: 60.621011}

    function initMap() {
      map = new google.maps.Map(document.getElementById('dc-map'), {
        center: myLatLng1,
        zoom: 17,
        scrollwheel:  false
      });
      
      var image = "img/marker.png";
      var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        icon: image
      });

    }

</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCgR50HZjEiNxWZy2_KxvELdCS6PXZfvlU&callback=initMap"
        async defer></script>
