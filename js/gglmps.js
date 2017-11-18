function initMap() {
  var want_loc = {lat: 49.285624 , lng: -123.124662 };
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 4,
    center: want_loc
  });
  var marker = new google.maps.Marker({
    position: want_loc,
    map: map
  });
}
