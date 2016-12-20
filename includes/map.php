<div id="map"></div>
<script>

    var map;

    var myLatLng = {lat: 56.824423, lng: 60.618930}
    var myLatLng1 = {lat: 56.824617, lng: 60.621011}

    function initMap() {
      map = new google.maps.Map(document.getElementById('map'), {
        center: myLatLng1,
        zoom: 16,
        scrollwheel:  false
      });
      
      var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
      });

    }

</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCgR50HZjEiNxWZy2_KxvELdCS6PXZfvlU&callback=initMap"
        async defer></script>
