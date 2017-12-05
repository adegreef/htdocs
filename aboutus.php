<html>
<head>
	<title>Home Page</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<style>
		#map{
			height: 400px;
			width: 90%;
		}
	</style>
</head>
<body style="background-color: LightSlateGray">

	<style type="text/css">
	div#map { margin: 0 auto 0 auto; }
	</style>

	<br>
	<br>
	<div align="center">
		<h2>About Us <h2>
	</div>
    <div id="map"></div>
    <script>
      function initMap() {
        var loco = {lat: 30.4412359, lng: -84.2876779};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: loco
        });
        var marker = new google.maps.Marker({
          position: loco,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAlKuwJyM9YBO3jMkY10vkeaUfv0D6dykk&callback=initMap">
    </script>

	<?php
		include "index2.php";
	?>
	<div align ="center">
			<div id="heading">
		<h1>Contact Us</h1>
	</div>
	<div class="row">
		</div>
		<div class="col-lg-12">
			<p id="contactP">
				Email Address: cop4710@hoteltransilvania.com
			</p>
			<p id="contactP">
				Phone Number: 850-352-8180
			</p>
			<p id="contactP">
				Address: 444 W. College Ave, Tallahassee, FL 32301
			</p>
		</div>
		</div>
	</div>
</body>
</html>
</html>