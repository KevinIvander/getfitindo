
var marker;

function myMap() {
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 19,
    center: {lat: -7.775184, lng: 110.415779}
  });

  marker = new google.maps.Marker({
    map: map,
    draggable: false,
    animation: google.maps.Animation.DROP,
    position: {lat: -7.775184, lng: 110.415779}
  });
  marker.addListener('onload', toggleBounce);
}

function toggleBounce() {
  if (marker.getAnimation() !== null) {
    marker.setAnimation(null);
  } else {
    marker.setAnimation(google.maps.Animation.BOUNCE);
  }
}