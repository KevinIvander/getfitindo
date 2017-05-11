function myMap() {
    var mapProp= {
      center:new google.maps.LatLng(-7.7751975,110.4157685),
      zoom:19,
    };
    var map=new google.maps.Map(document.getElementById("map"),mapProp);
}