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
    
    <!--Customized Stylesheet-->
     <link rel="stylesheet" href="css/itrojan.css" />

	<!-- JavaScripts -->
 	<script type="text/javascript" src="js/klass.min.js"></script>
	<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.js"></script>
	<script src="js/jquery.cycle.all.js"></script>
	<script type="text/javascript" src="js/code.photoswipe.jquery-3.0.4.min.js"></script>
    <script type="text/javascript" src="js/misc.js"></script>
    <!--Added js -->
    
    <!--for google map --> 
    
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script> 
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js"></script> 
  <!--GMAP plugins -->
  <script type="text/javascript" src="js/jquery.ui.map.js"></script>
  <script type="text/javascript" src="js/jquery.ui.map.services.js"></script>
    <script type="text/javascript" src="js/jquery.ui.map.extensions.js"></script>
  
 </head>
<body>

<div data-role="page" id="basic_map">


    <style type="text/css">
      #basic_map { height: 100%; width:100%;}
    </style>
    <script type="text/javascript">
	 function loadmap(address){
	 $('#map_canvas1').gmap({'zoom':16,'callback':function() {
        var self = this;
        self.search({ 'address': address}, function(results, status) {
                if ( status === 'OK' ) {
				//self.get('map').panTo(results[0].geometry.location);
                 $('#map_canvas1').gmap('displayStreetView', 'map_canvas1', { 'position': results[0].geometry.location}); 
				 
                }
        });
}});
}


        $("div:jqmData(role='page'):last").bind('pageinit', function() {
            var address= "<?= $address ?>";
		    loadmap(address);
			
        });
		
		$('#basic_map').live('pageshow', function() {

				$('#map_canvas1').gmap('refresh'); 

			});

    </script>
<div data-role="header" id="searchhouse_header">
  <h2>House Detail</h2>
<a href="http://www.play.annenberginnovationlab.org/play2_server/testzxy/mobile/woody/html/index.html" data-icon="back">Back</a>
<a href="#"><img src="images/about.png" width="14" style="top:3px;position:relative;">Profile</a>
</div>

<div class="wrapper">
   <div data-role="button">
    <p id="addressinfo" style="font-size:12px;"><?php echo $address;?>   </p>
    </div>

    <div class="map_container" style="height:255px;">
       <div id="map_canvas1" style="width:100%;height:255px;"></div>
    </div>
</div><!--end of wrapper-->

<div data-role="footer">
  <div data-role="navbar">
     <ul>
		<li><a data-transition="fade" data-icon="home" class="ui-btn-active ui-state-persist">House</a></li>
		<li><a data-transition="fade" href="transportation.html" data-icon="trans">Trans</a></li>
        <li><a href="security.html"  data-icon="safety">Security</a></li>
        <li><a href="bookmark.html"  data-icon="star">Bookmark</a></li>
	</ul>
  </div>
</div>



</div>
</body>
</html>