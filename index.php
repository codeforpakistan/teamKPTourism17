<?php
?>
<html>
<head>
<title>TCKP</title>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
<meta charset="utf-8">
<link rel="stylesheet" id="bootstrap-css" href="css/bootstrap.css" type="text/css" media="all">
<link rel="stylesheet" id="style-css" href="css/style.css" type="text/css" media="all">
<link rel="stylesheet" id="animate-css" href="css/animate.css" type="text/css" media="all">

</head>


<body class="pattern">
	<div class="container">	
		<!-- TOP DIV -->
		<!-- TOP LOGO AND MENU DIV -->
		<div class="col-sm-12">	
			<div class="row margins top_div">
				<!-- LOGO DIV -->
				<div class="col-sm-6 col-xs-12">
					<div class="col-sm-3 col-xs-4">
						<img class="img img-responsive logo" src="images/logo.png" alt="">
					</div>
					<div class="col-sm-9 col-xs-8">
						<h4 class="color-blue top_div_logo_heading text-left"> TCKP DISCOVER</h4>
						<h5 class="color-text text-left">Tourism Cooperation KP</h5>
					</div>
				</div>
				<!-- MENU DIV -->				
				<div class="col-sm-6 col-xs-12">
					<ul class="text-right">
						<li class="top-links color-black"><a href="#">Destination</a></li>
						<li class="top-links color-black"><a href="#">Tour</a></li>
						<li class="top-links color-black"><a href="#">Plan</a></li>
						<li class="top-links color-black"><a href="#">Sign In</a></li>
					</ul>
				</div>
			</div>
		</div>

		

		<!-- TOP LOGO DIV -->
		<div class="row">
			<div class="col-sm-12">	
				<div class="col-sm-3"></div>
					<div class="col-sm-6">
						<div class="text-center margins">
							<h3 class="color-blue heading_large">Choose your adventure</h3>
							<p class="color">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt, eiusmod tempor incididunt </p>
						</div>
					</div>
					<div class="col-sm-3"></div>
				</div>
		</div>	

		<!-- NAVIGATIONS -->
		<div class="row">
			<!-- DISCOVER -->
			<div class="col-sm-6">
				<div class="margins text-center right-separation animated SlideInLeft">
					<object type="image/svg+xml" data="images/home_page_illlustrations-02.svg" width="50%" height="auto">
					 	<param name="src" value="images/home_page_illlustrations-02.svg">
					</object>
					<h2 class="color-blue">Discover</h2>
					<p class="color-text intro-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
					<a href="discover.php"><button class="btn btn-default">GO</button></a>
				</div>
			</div>
			<!-- NAVIGATE -->
			<div class="col-sm-6">
				<div class="margins text-center animated SlideInRight">
					<object type="image/svg+xml" data="images/home_page_illlustrations-03.svg" width="50%" height="auto">
					 	<param name="src" value="images/home_page_illlustrations-03.svg">
					</object>
					<h2 class="color-blue">Navigation</h2>
					<p class="color-text intro-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
					<a href="#"><button class="btn btn-default">GO</button></a>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<div class="padding text-center">
					<a href="#"><button class="btn btn-default gotomain">GO TO MAIN SITE</button></a>
				</div>
			</div>
		</div>
	</div>

	<!-- FOOTER DIV -->
		<div class="footer landing_footer">
			<div class="col-sm-2"></div>
			<div class="col-sm-8">
				<ul class="text-center">
					<li class="footer-links"><a href="#">Home</a></li>
					<li class="footer-links"><a href="#">Terms</a></li>
					<li class="footer-links"><a href="#">Privacy Policy</a></li>
					<li class="footer-links"><a href="#">Site Map</a></li>
					<li class="footer-links"><a href="#">Discover Places</a></li>
					<li class="footer-links"><a href="#">Navigation</a></li>
				</ul>
			</div>
			<div class="col-sm-2"></div>
		</div>

</body>

<script type="text/javascript" src="js/jquery.min.js" ></script>
<script type="text/javascript" src="js/bootstrap.min.js" ></script>
<script type="text/javascript" src="js/devrama.slider.js" ></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.scroller').DrSlider(); 			
	});
</script>

</html>