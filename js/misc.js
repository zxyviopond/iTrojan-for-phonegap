// Photoswipe Call
$(document).ready(function(){

	var myPhotoSwipe = $("#gallery a").photoSwipe({ enableMouseWheel: false , enableKeyboard: false });

});


// Google Maps V3
function initialize() {
var mapDiv = document.getElementById('the_map');
var map = new google.maps.Map(mapDiv, {
  center: new google.maps.LatLng(37.4419, -122.1419),
  zoom: 13,
  mapTypeId: google.maps.MapTypeId.ROADMAP,
  disableDefaultUI: true
});
}


google.maps.event.addDomListener(window, 'load', initialize);


// Slider Call
$(document).ready(function() {
	$('.slider').cycle({
		fx: 'scrollVert', // choose your transition type, ex: fade, scrollUp, shuffle, etc...
		prev:   '#prev', 
		next:   '#next', 
	});
});


// Other Scripts
$(document).bind("mobileinit", function(){
  $.mobile.touchOverflowEnabled = true;
});
 
