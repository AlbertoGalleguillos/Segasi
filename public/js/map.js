function initMap() {
    var office = {lat: -33.4292371, lng: -70.6186999};
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 15,
      center: office
    });
    var marker = new google.maps.Marker({
      position: office,
      map: map
    });
}