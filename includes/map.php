<div id="map"></div>
<script>

    var map;

    var myLatLng = {lat: 59.940468, lng: 30.333598}
    var myLatLng1 = {lat: 59.941016, lng: 30.333416}

    function initMap() {
      map = new google.maps.Map(document.getElementById('map'), {
        center: myLatLng1,
        zoom: 16,
        scrollwheel:  false
      });

      var image = 'img/dc-marker.png';
      var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        icon: image
      });

    }

</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCgR50HZjEiNxWZy2_KxvELdCS6PXZfvlU&callback=initMap"
        async defer></script>
