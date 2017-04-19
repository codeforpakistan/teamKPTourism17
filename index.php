<?php
?>
<html>
<head>
<title>TCKP</title>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
<meta charset="utf-8">
<link rel="stylesheet" id="bootstrap-css" href="./css/bootstrap.css" type="text/css" media="all">
<link rel="stylesheet" id="style-css" href="./css/style.css" type="text/css" media="all">
<link rel="stylesheet" id="animate-css" href="./css/animate.css" type="text/css" media="all">

</head>


<body class="pattern">
	<div class="container">	
		<!-- TOP LOGO DIV -->
		<div class="col-sm-12">	
			<div class="row margins top_div animated ZoomIn">
				<div class="col-sm-4"></div>
				<div class="col-sm-4">
					<div class="text-center margins">
						<img src="images/logo.png" alt="">
						<h2 class="color-blue heading_large">TCKP</h2>
						<h4 class="color-blue">Choose your adventure</h4>
						<p class="color">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. </p>
						<a href="#"><button class="btn btn-default">GO BACK</button></a>
					</div>
				</div>
				<div class="col-sm-4"></div>
			</div>
		</div>	
		
		<!-- NAVIGATIONS -->
		<div class="row margins">
			<!-- DISCOVER -->
			<div class="col-sm-6 text-center right-separation animated SlideInLeft">
				<img src="images/discover-01.png" alt="" class="img img-responsive auto-margin">
				<h2 class="color-blue">Discover</h2>
				<p class="color-text intro-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
				<a href="discover.php"><button class="btn btn-default">GO</button></a>
			</div>
			<!-- NAVIGATE -->
			<div class="col-sm-6 text-center left-separation small-screen-margin animated SlideInRight">
				<img src="images/discover2-01.png" alt="" class="img img-responsive auto-margin">
				<h2 class="color-blue">Navigation</h2>
				<p class="color-text intro-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
				<a href="#"><button class="btn btn-default">GO</button></a>
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

<script type="text/javascript" src="./js/jquery.min.js" ></script>
<script type="text/javascript" src="./js/jquery.min.js" ></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.left-separation').addClass("animated slideInRight");
		$('.right-separation').addClass("animated slideInLeft");	
		$('.slidedown').addClass("animated slideInDown");
	});
</script>

</html>