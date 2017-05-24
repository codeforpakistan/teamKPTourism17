<?php
?>
<html>
<head>
<title>Discover | TCKP</title>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
<meta charset="utf-8">
<link rel="stylesheet" id="bootstrap-css" href="css/bootstrap.css" type="text/css" media="all">
<link rel="stylesheet" id="style-css" href="css/style.css" type="text/css" media="all">
<link rel="stylesheet" id="animate-css" href="css/animate.css" type="text/css" media="all">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

</head>


<body class="pattern animated fadeIn">
	<div class="content">
		<!-- TOP DIV -->
		<div class="container">	
			<!-- TOP LOGO AND MENU DIV -->
			<div class="col-sm-12">	
				<div class="row margins top_div">
					<!-- LOGO DIV -->
					<div class="col-lg-6 col-sm-5 col-xs-3">
						<div class="col-sm-3 col-xs-9">
							<img class="img img-responsive logo" src="images/logo.png" alt="">
						</div>
						<div class="col-sm-9 col-xs-3 text-left">
							<h4 class="color-blue top_div_logo_heading"> TCKP DISCOVER</h4>
							<h5 class="color-text heading-description">Tourism Cooperation KP</h5>
						</div>
					</div>
					<!-- MENU DIV -->				
					<div class="col-lg-6 col-sm-7 col-xs-9">
						<nav class="navbar">
							<div class="navbar-header">
						      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menuBar">
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>                        
						      </button>
						    </div>
						    <div class="collapse navbar-collapse" id="menuBar">
								<ul class="nav navbar-nav">
									<li class="top-links color-black"><a href="#">Destination</a></li>
									<li class="top-links color-black"><a href="#">Tour</a></li>
									<li class="top-links color-black"><a href="#">Plan</a></li>
									<li class="top-links color-black"><a href="#">Sign In</a></li>
								</ul>
							</div>
						</nav>
					</div>
				</div>
			</div>

			<!-- BREAD CRUMB AND WEATHER DIV -->
			<div class="col-sm-12">	
				<div class="row">
					<!-- BREADCRUMB DIV -->
					<div class="col-lg-6 col-xs-12">
						<ol class="breadcrumb">
						  <li><a href="http://localhost/tckp">Home</a></li>
						  <li class="active">Discover</li>
						</ol>
					</div>
					<!-- ELEVATION AND WEATHER DIV -->				
					<div class="col-sm-6 col-xs-12">
						<div class="col-sm-6 col-xs-12">
						</div>
						<div class="col-sm-6 col-xs-12">
							<p class="about_elevation">8202'<br/>Elevation</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- BANNER ROW -->
		<div class="container-fluid">
			<div class="row">
				<div class="banner-wrapper">
					<div id="top-slider" class="banner">
						<div id="slide1" class="slide">
							<img class="img img-responsive" src="images/img_1.jpg" />
							<div class="banner-text">
								<h3 class="color-white">EXPLORE HIKING TREKS IN NARAN!</h3>
							    <p class="color-white">Lorem ipsum dolor sit amet</p>
			                    <a href="#"><button class="btn btn-white">VISIT NOW</button></a> 							                    
							</div>
						</div>
						<div id="slide2" class="slide">
							<img class="img img-responsive" src="images/img_6.jpg" />
							<div class="banner-text">
								<h3 class="color-white">EXPLORE NATURAL BEAUTY OF NARAN!</h3>
							    <p class="color-white">Lorem ipsum dolor sit amet</p>
			                    <a href="#"><button class="btn btn-white">VISIT NOW</button></a> 							                    
							</div>
						</div>
						<div id="slide3" class="slide">
							<img class="img img-responsive" src="images/img_5.jpg" />
							<div class="banner-text">
								<h3 class="color-white">EXPLORE PLACES IN NARAN!</h3>
							    <p class="color-white">Lorem ipsum dolor sit amet</p>
			                    <a href="#"><button class="btn btn-white">VISIT NOW</button></a> 							                    
							</div>
						</div>
					</div>
					<!-- END WRAPPER FOR SLIDES -->
					<a class="left carousel-control" href="#top-slider" role="button" data-slide="prev">
						<i class="fa fa-angle-left"></i><span class="sr-only">Previous</span>
					</a>
					<a  class="right carousel-control" href="#top-slider" role="button" data-slide="next">
						<i class="fa fa-angle-right"></i><span class="sr-only">Next</span>
			        </a>

			        <!-- SEARCH FORM -->
			        <form class="form-inline search discover-search" action="search.php">
						    <span class="glyphicon glyphicon-remove"></span>
							<div class="form-group col-sm-2 col-xs-12">
							      	<select class="form-control search_select" id="sel1" name="sel1">
							          <option>Ketchup</option>
							          <option>Relish</option>
							          <option>Mustard</option>
							          <option>Tent</option>
							          <option>Flashlight</option>
							          <option>Toilet Paper</option>
							      	</select>
							</div>
							<div class="form-group col-sm-2 col-xs-12">
							      	<select class="form-control search_select" id="sel2" name="sel2">
							          <option>Mustard</option>
							          <option>Ketchup</option>
							          <option>Relish</option>
							          <option>Tent</option>
							          <option>Flashlight</option>
							          <option>Toilet Paper</option>
							      	</select>
						    </div>
						    <div class="form-group col-sm-2 col-xs-12">
							      	<select class="form-control search_select" id="sel3" name="sel3">
							          <option>Tent</option>
							          <option>Flashlight</option>
							          <option>Mustard</option>
							          <option>Ketchup</option>
							          <option>Relish</option>
							          <option>Toilet Paper</option>
							      	</select>
						    </div>	
						    <div class="form-group col-sm-4 col-xs-12">
							    <input type="text" class="form-control" id="search-text" name="search-text" placeholder="Or search places, regions, activities">
						    </div>							    
						    <div class="form-group col-xs-2 text-right">
							    <button type="submit" class="btn btn-info">Submit</button>
							</div>
					</form>
				</div>
			</div>
		</div>

		<!-- REGIONS SELECTION AND REGIONS SELECTION DIV -->
		<div class="regions-wrapper">
			<div class="container">	
				<!-- REGIONS SELECTION DIV -->
				<div class="row">	
					<div class="spacing">
						<div class="col-sm-push-4 col-sm-4 col-sm-pull-4">
							<div class="text-center margins">
								<h3 class="color-black">FAMOUS ACTIVITIES</h3>
								<h5 class="color-blue">Choose an activity to explore</h5>
								<form action="" method="">
									<select class="form-control input-group-lg" name="region_selection_sort" id="region_selection_sort">
										<optgroup class="selectoptions">
									    	<option>Regions</option>
									    	<option>Popularity</option>
									    	<option>Activities</option>
									    </optgroup>
									</select>
								</form>
							</div>
						</div>
					</div>
				</div>


				<!-- REGIONS DIV -->
				<div class="col-lg-12">
					<div class="row margins">
						<!-- SWAT dIV -->
						<div class="col-lg-4 col-sm-6 col-xs-12">
							<div class="zoom">
								<div class="text-center famous_regions_div">
									<img class="img img-responsive image_normal auto-margin" src="images/swat.png" data-pin-nopin="true">
									<img class="img img-responsive image_hover auto-margin" src="images/swat-hover.png">	
									<div class="has-feedback">
										<h2 class="color-blue">Swat</h2>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
										<a href="details.php"><button id="swat" class="btn btn-primary">EXPLORE</button></a>
									</div>
								</div>
							</div>
						</div>

						<!-- NARAN dIV -->
						<div class="col-lg-4 col-sm-6 col-xs-12">
							<div class="zoom">
								<div class="text-center famous_regions_div">
									<img width="60%" height="auto" class="img img-responsive image_normal auto-margin" src="images/naran.png" data-pin-nopin="true">
									<img width="60%" height="auto" class="img img-responsive image_hover auto-margin" src="images/naran-hover.png">	
									<div class="has-feedback">
										<h2 class="color-blue">Naran</h2>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
										<a href="details.php"><button id="naran" class="btn btn-primary">EXPLORE</button></a>
									</div>
								</div>
							</div>
						</div>		

						<!-- CHITRAL dIV -->
						<div class="col-lg-4 col-sm-6 col-xs-12">
							<div class="zoom">
								<div class="text-center famous_regions_div">
									<img class="img img-responsive image_normal auto-margin" src="images/chitral.png" data-pin-nopin="true">
									<img class="img img-responsive image_hover auto-margin" src="images/chitral-hover.png">	
									<div class="has-feedback">
										<h2 class="color-blue">Chitral</h2>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
										<a href="details.php"><button id="chitral" class="btn btn-primary">EXPLORE</button></a>
									</div>
								</div>
							</div>
						</div>

						<!-- ABBOTTABAD dIV -->
						<div class="col-lg-4 col-sm-6 col-xs-12">
							<div class="zoom">
								<div class="text-center famous_regions_div">
									<img class="img img-responsive image_normal auto-margin" src="images/abottabad.png" data-pin-nopin="true">
									<img class="img img-responsive image_hover auto-margin" src="images/abottabad-hover.png">	
									<div class="has-feedback">
										<h2 class="color-blue">Abbottabad</h2>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
										<a href="details.php"><button id="abbottabad" class="btn btn-primary">EXPLORE</button></a>
									</div>
								</div>
							</div>
						</div>

						<!-- KALAM dIV -->
						<div class="col-lg-4 col-sm-6 col-xs-12">
							<div class="zoom">
								<div class="text-center famous_regions_div">
									<img class="img img-responsive image_normal auto-margin" src="images/kalam.png" data-pin-nopin="true">
									<img class="img img-responsive image_hover auto-margin" src="images/kalam-hover.png">	
									<div class="has-feedback">
										<h2 class="color-blue">Kalam</h2>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
										<a href="details.php"><button id="kalam" class="btn btn-primary">EXPLORE</button></a>
									</div>
								</div>
							</div>
						</div>			

						<!-- PALCE dIV -->
						<div class="col-lg-4 col-sm-6 col-xs-12">
							<div class="zoom">
								<div class="text-center famous_regions_div">
									<img class="img img-responsive image_normal auto-margin" src="images/swat.png" data-pin-nopin="true">
									<img class="img img-responsive image_hover auto-margin" src="images/swat-hover.png">	
									<div class="has-feedback">
										<h2 class="color-blue">Peshawar</h2>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
										<a href="details.php"><button id="peshawar" class="btn btn-primary">EXPLORE</button></a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- SEE ALL EVENTS DIV -->
					<div class="col-sm-12">
						<p class="text-center"><a class="color-blue seeAllLink" href="#">SEE ALL</a></p>
					</div>
				</div>
			</div>
		</div>

		<!-- OTHER PLACES TO DISCOVER -->		
		<div class="white_bg padding">
			<!-- CONTAINER  DIV -->
			<div class="container-fluid">
				<div class="row">
					<!-- MAIN DIV -->
						<div class="col-lg-push-1 col-lg-10 col-lg-pull-1">
							<h2 class="text-center">OTHER PLACES TO DISCOVER</h2>
							<h4 class="text-center color-blue">Discover all other beautiful regions of KP</h4>
							<!-- SEARCH FORM -->	
							<form action="" method="">
								<input class="form-group input-group-lg searchbox"  type="text" name="search" placeholder="Search">
								<select class="form-control input-group-lg" name="region_selection_sort" id="region_selection_sort">
									<optgroup class="selectoptions">
								    	<option>Name</option>
								    	<option>Colder</option>
								    	<option>Districts</option>
								    	<option>Zones</option>
								    </optgroup>
								</select>
							</form>
							<!-- LEFT CONTAINER DIV -->
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
								<div class="other_activities_box">
									<a href="#">
										<!-- LEFT IMAGE DIV -->
										<div class="col-xs-6">
											<img class="img" src="images/sample_image _4.png" />
										</div>	
										<!-- LEFT TEXT DIV -->
										<div class="col-xs-6">
											<h4 class="color-black">Hunar Mela</h4>
											<p class="color-text">Lorem ipsum, KP</p>
										</div>
									</a>
								</div>	
							</div>

							<!-- CENTERAL CONTAINER DIV -->
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
								<div class="other_activities_box">
									<a href="#">
										<!-- LEFT IMAGE DIV -->
										<div class="col-xs-6">
											<img class="img" src="images/sample_image_2.png" />
										</div>	
										<!-- LEFT TEXT DIV -->
										<div class="col-xs-6">
											<h4 class="color-black">Hunar Mela</h4>
											<p class="color-text">Lorem ipsum, KP</p>
										</div>
									</a>
								</div>	
							</div>

							<!-- RIGHT CONTAINER DIV -->
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
								<div class="other_activities_box">
									<a href="#">
										<!-- LEFT IMAGE DIV -->
										<div class="col-xs-6">
											<img class="img" src="images/img_2.jpg" />
										</div>	
										<!-- LEFT TEXT DIV -->
										<div class="col-xs-6">
											<h4 class="color-black">Hunar Mela</h4>
											<p class="color-text">Lorem ipsum, KP</p>
										</div>
									</a>
								</div>	
							</div>
						
							<!-- LEFT CONTAINER DIV -->
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
								<div class="other_activities_box">
									<a href="#">
										<!-- LEFT IMAGE DIV -->
										<div class="col-xs-6">
											<img class="img" src="images/img_2.jpg" />
										</div>	
										<!-- LEFT TEXT DIV -->
										<div class="col-xs-6">
											<h4 class="color-black">Hunar Mela</h4>
											<p class="color-text">Lorem ipsum, KP</p>
										</div>
									</a>
								</div>	
							</div>

							<!-- CENTERAL CONTAINER DIV -->
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
								<div class="other_activities_box">
									<a href="#">
										<!-- LEFT IMAGE DIV -->
										<div class="col-xs-6">
											<img class="img" src="images/img_3.jpg" />
										</div>	
										<!-- LEFT TEXT DIV -->
										<div class="col-xs-6">
											<h4 class="color-black">Hunar Mela</h4>
											<p class="color-text">Lorem ipsum, KP</p>
										</div>
									</a>
								</div>	
							</div>

							<!-- RIGHT CONTAINER DIV -->
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
								<div class="other_activities_box">
									<a href="#">
										<!-- LEFT IMAGE DIV -->
										<div class="col-xs-6">
											<img class="img" src="images/img_4.jpg" />
										</div>	
										<!-- LEFT TEXT DIV -->
										<div class="col-xs-6">
											<h4 class="color-black">Hunar Mela</h4>
											<p class="color-text">Lorem ipsum, KP</p>
										</div>
									</a>
								</div>	
							</div>
						</div>	
					</div>
			</div>
		</div>
					
		<!-- START OF FOOTER -->
		<div class="footer">
			<div class="col-sm-12">
				<div class="col-sm-push-2 col-sm-8 col-sm-pull-2">
					<ul class="text-center">
						<li class="footer-links"><a href="#">Home</a></li>
						<li class="footer-links"><a href="#">Terms</a></li>
						<li class="footer-links"><a href="#">Privacy Policy</a></li>
						<li class="footer-links"><a href="#">Site Map</a></li>
						<li class="footer-links"><a href="#">Discover Places</a></li>
						<li class="footer-links"><a href="#">Navigation</a></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- END OF FOOTER -->
	</div>

</body>

<script type="text/javascript" src="js/jquery.min.js" ></script>
<script type="text/javascript" src="js/bootstrap.min.js" ></script>
<script type="text/javascript">
	$(document).ready(function(){
		//Get Selected Area
		$('button').click(function() {
			window.sessionStorage.setItem('region', $(this).attr('id'));
			console.log(sessionStorage);
		});

		//Slider function
		var totalslides = $('.slide').length;
		var count=1;
		var bannerImgSlide;
		prenextslide();
		slider();
		
		function slider() {
			window.clearInterval(bannerImgSlide);
			bannerImgSlide = setInterval(function(){
				if(count>totalslides) {
					count =1;					
				}
				prenextslide();
				count++;
			},4000);
		}

		 function prenextslide() {
	    	$('.slide').hide();
			//console.log($('#slide'+count));
			$('#slide'+count).show();
			$('#slide'+count+' img').addClass('animated fadeIn');
			$('#slide'+count+' h3').addClass('animated fadeInDownBig');
			$('#slide'+count+' p').addClass('animated fadeInUpBig');
			$('#slide'+count+' button').addClass('animated slideInUp');
	    }

		$(".fa-angle-right").click(function(){
	    	count++;
	    	//check fo loop back functionality
	    	if(count>totalslides) {
					count =1;					
				}
	    	//console.log(count);
	    	window.clearInterval(bannerImgSlide);
	    	prenextslide();
	    	slider();
	    });

	    $(".fa-angle-left").click(function(){
	    	count--; 
	    	//check fo loop back functionality
	    	if(count<1) {
	    		count=totalslides;
	    	}
	    	//console.log(count);
	    	window.clearInterval(bannerImgSlide);
	    	prenextslide();
	    	slider();
	    });

	    //RESET FORM ACTION
	    $('.glyphicon-remove').click(function(){
			$('.search')[0].reset();
		});
			
		

	});
</script>


</html>

		
			