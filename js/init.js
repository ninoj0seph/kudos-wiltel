
$(document).ready(function(){
    $('.button-collapse').sideNav();
    $('.parallax').parallax();
    $('.slider').slider({indicators : false});
    $('select').material_select();
    $('.scrollspy').scrollSpy();
});

function initMap() {
  var center = {lat: 6.95, lng: 124.88};
  console.log('firing');
    // Create a map object and specify the DOM element for display.
    var map = new google.maps.Map(document.getElementById('map'), {
        center : center,
        scrollwheel: false,
        zoom: 7
    });
    google.maps.event.addDomListener(window, 'resize', function() {
        map.setCenter(center);
    });
}

