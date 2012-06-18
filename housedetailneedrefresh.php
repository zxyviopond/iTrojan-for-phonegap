<?php 
$address=$_GET['address'];
?>

<!DOCTYPE PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
 <head>
 <title>Woody</title> 
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0" />
    <meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="description" content="Woody is a clean theme for mobile devices.">
    
	<!-- Stylesheets -->
    <link rel="stylesheet" href="css/default.min.css" />
    <link rel="stylesheet" href="css/woody.min.css" />
    <link rel="stylesheet" href="css/main.css" />
    <link href="css/photoswipe.css" type="text/css" rel="stylesheet" />    
    <link href='http://fonts.googleapis.com/css?family=Terminal+Dosis:400,700' rel='stylesheet' type='text/css'>
    <!--Boostrap style-->
    
    <!--for google map autocomplete-->
   <!--  <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>  -->

	<!-- JavaScripts -->
 	<script type="text/javascript" src="js/klass.min.js"></script>
	<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.js"></script>
	<script src="js/jquery.cycle.all.js"></script>
	<script type="text/javascript" src="js/code.photoswipe.jquery-3.0.4.min.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="js/misc.js"></script>
    <!--Added js -->
    
    <!--for google map --> 
    
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script> 
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js"></script> 
  <!--GMAP plugins -->
  <script type="text/javascript" src="js/jquery.ui.map.js"></script>
  <script type="text/javascript" src="js/jquery.ui.map.services.js"></script>
    <script type="text/javascript" src="js/jquery.ui.map.extensions.js"></script>
  
 </head>
 <body>
 <!-- HOMEPAGE -->
<div data-role="page" id="searchhouse" data-title="searchhouse">
<!-- HEADER -->
<div data-role="header" id="searchhouse_header">
<h2>House Detail</h2>
<a href="index.html" data-icon="back">Back</a>
<a href="#"><img src="images/about.png" width="14" style="top:3px;position:relative;">Profile</a>
</div>
<!-- Wrapper -->
<div class="wrapper">
<div data-role="button">
<p id="addressinfo" style="font-size:12px;"><?php echo $address;?></p></div>
<div class="map_container">
            <div id="map_canvas" style="height: 300px;"></div>
        </div><!--END OF: Map -->
</div><!--END OF: Wrapper -->
    
    <!-- Footer -->
    <!--
	<div data-role="footer" class="footer" data-position="fixed">
        <h4></h4>
	</div>
    -->
    <!-- END OF: Footer -->
    
</div><!-- END OF: Homepage -->
 </body>
</html>
<script type="text/javascript">

$( '#searchhouse' ).live( 'pageinit',function(event){
	var address= "<?= $address ?>";// GET the coming address

$('#map_canvas').gmap({'zoom':16,'callback':function() {
        var self = this;
        self.search({ 'address': address}, function(results, status) {
                if ( status === 'OK' ) {
                 $('#map_canvas').gmap('displayStreetView', 'map_canvas', { 'position': results[0].geometry.location}); 
				 
                }
        });
}});

});



</script>