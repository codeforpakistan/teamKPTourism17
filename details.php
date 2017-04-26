<?php
?>
<html>
<head>
<title>Details | TCKP</title>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
<meta charset="utf-8">
<link rel="stylesheet" id="bootstrap-css" href="css/bootstrap.css" type="text/css" media="all">
<link rel="stylesheet" id="style-css" href="css/style.css" type="text/css" media="all">
<link rel="stylesheet" id="animate-css" href="css/animate.css" type="text/css" media="all">

</head>


<body class="pattern animated zoomIn">
	<!-- TOP DIV -->
	<div class="container">	
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

		<!-- BREAD CRUMB AND WEATHER DIV -->
		<div class="col-sm-12">	
			<div class="row">
				<!-- BREADCRUMB DIV -->
				<div class="col-sm-6 col-xs-12">
					<div class="col-sm-3 col-xs-4"></div>
					<div class="col-sm-9 col-xs-8">
						<ol class="breadcrumb">
						  <li><a href="http://localhost/tckp">Home</a></li>
						  <li><a href="http://localhost/tckp/discover.php">Discover</a></li>
						  <li class="active">Naran</li>
						</ol>
					</div>
				</div>
				<!-- MENU DIV -->				
				<div class="col-sm-6 col-xs-12">
					<div class="col-sm-10 col-xs-12">
						<h5 class="color-text text-right">Discover > Naran</h5>
					</div>
					<div class="col-sm-2 col-xs-12"></div>
				</div>
			</div>
		</div>
	</div>

	<!-- BANNER ROW -->
	<div class="row">
		<div class="col-lg-12">
			<div class="banner">
					<!-- TOP BANNER -->
				<div class="scroller">
		            <div data-lazy-background="images/img-1.jpg" data-effect="fadein">
			            <h1 data-pos="['20%', '8%']" data-duration="700" data-effect="fadein">TREKKING IN</h1>
			            <h1 data-pos="['27%', '8%']" data-duration="700" data-effect="fadein">NARAN</h1>
			            <p data-pos="['36%', '8%']" data-duration="700" data-effect="fadein">Lorem ipsum dolor sit amet</p>
			            <div data-pos="['40%', '3%']" data-duration="700" data-effect="fadein">
			                <a href="#"><button class="btn btn-white">VISIT NOW</button></a>
		                </div>
			        </div>
			        <div data-lazy-background="images/img-5.jpg" data-effect="fadein">
			            <h1 data-pos="['20%', '8%']" data-duration="700" data-effect="fadein">SKIING IN</h1>
			            <h1 data-pos="['27%', '8%']" data-duration="700" data-effect="fadein">KALAM</h1>
		                <p data-pos="['36%', '8%']" data-duration="700" data-effect="fadein">Lorem ipsum dolor sit amet</p>
		                <div data-pos="['40%', '3%']" data-duration="700" data-effect="fadein">
		                    <a href="#"><button class="btn btn-white">VISIT NOW</button></a>
			            </div>
			        </div>
					<div data-lazy-background="images/img-6.jpg" data-effect="fadein">
			            <h1 data-pos="['20%', '8%']" data-duration="700" data-effect="fadein">FISHING IN</h1>
		                <h1 data-pos="['27%', '8%']" data-duration="700" data-effect="fadein">CHITRAL</h1>
		                <p data-pos="['36%', '8%']" data-duration="700" data-effect="fadein">Lorem ipsum dolor sit amet</p>
		                <div data-pos="['40%', '3%']" data-duration="700" data-effect="fadein">
			                <a href="#"><button class="btn btn-white">VISIT NOW</button></a>
			            </div>
			        </div>
				</div>
			</div>
		</div>
	</div>

	<!-- REGIONS SELECTION AND EVENTS SELECTION DIV -->
	<div class="container">	
		<!-- REGIONS SELECTION DIV -->
		<div class="col-sm-12">	
			<div class="row margins padding">
				<div class="col-sm-4"></div>
				<div class="col-sm-4">
					<div class="text-center margins">
						<h3 class="color-black">FAMOUS ACTIVITIES</h3>
						<h5 class="color-blue">Choose an activity to explore</h5>
						<div class="dropdown">
						    <button class="btn btn-white dropdown-toggle" type="button" data-toggle="dropdown">Sort By
						    <span class="caret"></span></button>
						    <ul class="dropdown-menu sort_list">
						      <li>Region</li>
						      <li>Popularity</li>
						      <li>Activities</li>
						    </ul>
						</div>
					</div>
				</div>
				<div class="col-sm-4"></div>
			</div>
		</div>


		<!-- EVENTS DIV -->
		<div class="row margins">
			<div class="col-lg-12">
				<!-- TREKKING dIV -->
				<div class="col-lg-4 col-sm-6 col-xs-12">
					<div class="text-center zoom famous_events_div outer-wrapper margins padding">
						<img id="trekking_normal" class="image_normal events_image_normal" src="images/visas.png" />
						<img id="trekking_hover" class="image_hover" src="images/img-1.jpg" />	
						<div class="cover trekking_cover">
							<div class="has_wrapper">
								<h2 class="color-black">Trekking</h2>
								<p class="normal_details">In Naran</p>
								<p class="normal_details">8 differnet trekking paths</p>
							</div>
						</div>				
						<div class="has_bottom hover_details">	
							<h2>Trekking</h2>
							<div class="white_bg shadow radius">					
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
								<a href="treks.php"><button id="trekking" class="btn btn-primary">EXPLORE</button></a>
							</div>
						</div>
					</div>
				</div>

				<!-- TREKKING 2 dIV -->
				<div class="col-lg-4 col-sm-6 col-xs-12">
					<div class="text-center zoom famous_events_div outer-wrapper margins padding">
						<img id="trekking2_normal" class="image_normal events_image_normal" src="images/best-time.png" />
						<img id="trekking2_hover" class="image_hover" src="images/img-2.jpg" />	
						<div class="cover trekking2_cover">
							<div class="has_wrapper">
								<h2 class="color-black">Trekking</h2>
								<p class="normal_details">In Naran</p>
								<p class="normal_details">8 differnet trekking paths</p>
							</div>
						</div>				
						<div class="has_bottom hover_details">	
							<h2>Trekking</h2>
							<div class="white_bg shadow radius">					
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
								<a href="#"><button id="trekking2" class="btn btn-primary">EXPLORE</button></a>
							</div>
						</div>
					</div>
				</div>			

				<!-- SITE SEEING dIV -->
				<div class="col-lg-4 col-sm-6 col-xs-12">
					<div class="text-center zoom famous_events_div outer-wrapper margins padding">
						<img id="siteseeing_normal" class="image_normal events_image_normal" src="./images/money-and-costs.png" />
						<img id="siteseeing_hover" class="image_hover" src="./images/img-3.jpg" />	
						<div class="cover site_seeing_cover">
							<div class="has_wrapper">
								<h2 class="color-black">Site Seeing</h2>
								<p class="normal_details">In Naran</p>
								<p class="normal_details">15 differnet site seeing spots</p>
							</div>
						</div>				
						<div class="has_bottom hover_details">	
							<h2>Site Seeing</h2>
							<div class="white_bg shadow radius">					
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
								<a href="#"><button id="siteseeing" class="btn btn-primary">EXPLORE</button></a>
							</div>
						</div>
					</div>
				</div>

				<!-- PARAGLIDING dIV -->
				<div class="col-lg-4 col-sm-6 col-xs-12">
					<div class="text-center zoom famous_events_div outer-wrapper margins padding">
						<img id="paragliding_normal" class="image_normal events_image_normal" src="./images/money-and-costs.png" />
						<img id="paragliding_hover" class="image_hover" src="./images/img-4.jpg" />	
						<div class="cover paragliding_cover">
							<div class="has_wrapper">
								<h2 class="color-black">Paragliding</h2>
								<p class="normal_details">In Naran</p>
								<p class="normal_details">3 amazing paragliding experiences</p>
							</div>
						</div>				
						<div class="has_bottom hover_details">	
							<h2>Paragliding</h2>
							<div class="white_bg shadow radius">					
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
								<a href="#"><button id="paragliding" class="btn btn-primary">EXPLORE</button></a>
							</div>
						</div>
					</div>
				</div>

				<!-- FISHING dIV -->
				<div class="col-lg-4 col-sm-6 col-xs-12">
					<div class="text-center zoom famous_events_div outer-wrapper margins padding">
						<img id="fishing_normal" class="image_normal events_image_normal" src="./images/visas.png" />
						<img id="fishing_hover" class="image_hover" src="./images/img-5.jpg" />	
						<div class="cover fishing_cover">
							<div class="has_wrapper">
								<h2 class="color-black">Fishing</h2>
								<p class="normal_details">In Naran</p>
								<p class="normal_details">5 differnet spots for fishing and relaxing</p>
							</div>
						</div>				
						<div class="has_bottom hover_details">	
							<h2>Fishing</h2>
							<div class="white_bg shadow radius">					
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
								<a href="#"><button id="fishing" class="btn btn-primary">EXPLORE</button></a>
							</div>
						</div>
					</div>
				</div>			

				<!-- CULTURE dIV -->
				<div class="col-lg-4 col-sm-6 col-xs-12">
					<div class="text-center zoom famous_events_div outer-wrapper margins padding">
						<img id="culture_normal" class="image_normal events_image_normal" src="./images/money-and-costs.png" />
						<img id="culture_hover" class="image_hover" src="./images/img-6.jpg" />	
						<div class="cover culture_cover">
							<div class="has_wrapper">
								<h2 class="color-black">Culture</h2>
								<p class="normal_details">In Naran</p>
								<p class="normal_details">Explore the cultural values of naran</p>
							</div>
						</div>				
						<div class="has_bottom hover_details">	
							<h2>Culture</h2>
							<div class="white_bg shadow radius">					
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
								<a href="#"><button id="culture" class="btn btn-primary">EXPLORE</button></a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- SEE ALL EVENTS DIV -->
			<div class="col-sm-12"><p class="text-center"><a class="color-blue seeAllLink" href="#">SEE ALL</p></a></div>
		</div>
	</div>

	<!-- EXPLORE REGIONS' LINKS  DIV -->
	<div class="row">
		<div class="col-xs-12">
			<div class="white_bg other_regions">
				<div class="row padding">
					<h3 class="color-blue text-center">Other Activities</h3>
						<!-- NOTHERN AREAS LINKS -->
						<div class="col-sm-8">
							<div class="col-sm-2"></div>
							<div class="col-sm-10">
								<h4 class="color-blue north_heading_margin">Naran KP</h4>
								<div class="col-sm-6">
									<div class="small-screen-margin">
										<ul>
											<li class="other_regions_link"><a href="#">Scuba diving</a></li>
											<li class="other_regions_link"><a href="#">Skiing</a></li>
											<li class="other_regions_link"><a href="#">Bike Trails</a></li>
											<li class="other_regions_link"><a href="#">Hiking</a></li>
											<li class="other_regions_link"><a href="#">Camping</a></li>
											<li class="other_regions_link"><a href="#">Culture</a></li>
										</ul>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="small-screen-margin right-separation">
										<ul>
											<li class="other_regions_link"><a href="#">Scuba diving</a></li>
											<li class="other_regions_link"><a href="#">Skiing</a></li>
											<li class="other_regions_link"><a href="#">Bike Trails</a></li>
											<li class="other_regions_link"><a href="#">Hiking</a></li>
											<li class="other_regions_link"><a href="#">Camping</a></li>
											<li class="other_regions_link"><a href="#">Culture</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					<!-- SOUTHERN AREAS LINKS -->
					<div class="col-sm-1"></div>
					<div class="col-sm-3">
						<div class="col-sm-12">
							<div class=" small-screen-margin">
								<h4 class="color-blue">Essentials</h4>
								<ul>
									<li class="other_regions_link"><a href="#">Emergency Services</a></li>
									<li class="other_regions_link"><a href="#">ATMs</a></li>
									<li class="other_regions_link"><a href="#">Accomodation</a></li>
									<li class="other_regions_link"><a href="#">Utility Stores</a></li>
									<li class="other_regions_link"><a href="#">Discover Places</a></li>
									<li class="other_regions_link"><a href="#">Navigation</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- SURVIVAL GUIDE DIV -->
	<div class="row white_bg">
			<div class="col-lg-12">
				<div class="col-lg-1"></div>
				<div class="col-lg-10">
					<!-- VISAS dIV -->
					<div class="col-lg-3 col-sm-6 col-xs-12">
						<div class="text-center zoom margins">
							<img id="visa_guide" class="img img-responsive auto-margin" src="./images/visas.png" />	
							<div class="survival_text_wrapper">
								<h4 class="color-black">Visas</h4>
								<p class="color-text">Dull but essential passport paper-work and entry info</p>
							</div>				
						</div>
					</div>

					<!-- BEST TIME TO VISIT dIV -->
					<div class="col-lg-3 col-sm-6 col-xs-12">
						<div class="text-center zoom margins">
							<img id="time_guide" class="img img-responsive auto-margin" src="./images/best-time.png" />	
							<div class="survival_text_wrapper">
								<h4 class="color-black">Best time to visit</h4>
								<p class="color-text">Hit the ground at the right time</p>
							</div>				
						</div>
					</div>
					

					<!-- COSTS dIV -->
					<div class="col-lg-3 col-sm-6 col-xs-12">
						<div class="text-center zoom margins">
							<img id="cost_guide" class="img img-responsive auto-margin" src="./images/money-and-costs.png" />	
							<div class="survival_text_wrapper">
								<h4 class="color-black">Money and Costs</h4>
								<p class="color-text">Budgets and on-the-ground costs</p>
							</div>				
						</div>
					</div>


					<!-- HEALTH dIV -->
					<div class="col-lg-3 col-sm-6 col-xs-12">
						<div class="text-center zoom margins">
							<img id="health_guide" class="img img-responsive auto-margin" src="./images/health.png" />	
							<div class="survival_text_wrapper">
								<h4 class="color-black">Health</h4>
								<p class="color-text">Keep safe and well on the road/p>
							</div>				
						</div>
					</div>
				</div>
				<div class="col-lg-1"></div>

				<div class="col-sm-12"><h4 class="color-blue text-center margins"><a class="guide_link" href="#">See More ></a></h4></div>
			</div>
		</div>
	</div>

	<!-- CURRENT EVENTS AND TOURS DIV -->
	<div class="row grey_bg">
		<div class="col-lg-12">
			<div class="margins">
				<h2 class="text-center">Events/Tours</h2>
				<!-- Events/Tours' FIRST DIV -->
				<div class="col-lg-12">
					<div class="col-lg-1"></div>
					<!-- LEFT CONTAINER DIV -->
					<div class="col-lg-10">
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="margins">
								<!-- LEFT IMAGE DIV -->
								<div class="col-lg-5 col-md-5 col-sm-12">
									<div class="tours_image_div">
										<img id="visa_guide" class="img img-responsive" src="images/sample_image _4.png" />
										<p class="color-black"><span class="event_cost">Rs. 5000</span>SMALL GROUP TOUR</p>
									</div>
								</div>	
								<!-- LEFT TEXT DIV -->
								<div class="col-lg-7 col-md-7 col-sm-12">
									<h4 class="color-black">Private Tour 4-Day Naran Trip From Peshawar with awesome activities</h4>
									<p class="color-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
								</div>
							</div>	
						</div>

						<!-- RIGHT CONTAINER DIV -->
						<div class="col-lg-6 col-md-6 col-sm-12">
								<div class="margins">
								<!-- RIGHT IMAGE DIV -->
								<div class="col-lg-5 col-md-5 col-sm-12">
									<div class="tours_image_div">
										<img id="visa_guide" class="img img-responsive" src="images/sample_image_2.png" />
										<p class="color-black"><span class="event_cost">Rs. 5000</span>SMALL GROUP TOUR</p>
									</div>	
								</div>
								<!-- RIGHT TEXT DIV -->
								<div class="col-lg-7 col-md-7 col-sm-12">
									<h4 class="color-black">Private Tour 4-Day Naran Trip From Peshawar with awesome activities</h4>
									<p class="color-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
								</div>
							</div>
						</div>
						<div class="col-lg-1"></div>
					</div>	
				</div>

				<!-- Events/Tours' 2nd DIV -->
				<div class="col-lg-12">
					<div class="col-lg-1"></div>
					<!-- LEFT CONTAINER DIV -->
					<div class="col-lg-10">
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="margins">
							<!-- LEFT IMAGE DIV -->
								<div class="col-lg-5 col-md-5 col-sm-12">
									<div class="tours_image_div">
										<img id="visa_guide" class="img img-responsive" src="images/sample_image_2.png" />
										<p class="color-black"><span class="event_cost">Rs. 5000</span>SMALL GROUP TOUR</p>
									</div>	
								</div>
								<!-- LEFT TEXT DIV -->
								<div class="col-lg-7 col-md-7 col-sm-12">
									<h4 class="color-black">Private Tour 4-Day Naran Trip From Peshawar with awesome activities</h4>
									<p class="color-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
								</div>
							</div>	
						</div>

						<!-- RIGHT CONTAINER DIV -->
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="margins">
								<!-- RIGHT IMAGE DIV -->
								<div class="col-lg-5 col-md-5 col-sm-12">
									<div class="tours_image_div">
										<img id="visa_guide" class="img img-responsive" src="images/sample_image _4.png" />
										<p class="color-black"><span class="event_cost">Rs. 5000</span>SMALL GROUP TOUR</p>
									</div>
								</div>	
								<!-- RIGHT TEXT DIV -->
								<div class="col-lg-7 col-md-7 col-sm-12">
									<h4 class="color-black">Private Tour 4-Day Naran Trip From Peshawar with awesome activities</h4>
									<p class="color-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
								</div>
							</div>
						</div>

						<div class="col-lg-1"></div>
					</div>	
				</div>
			</div>
		</div>
	</div>

	<!-- FOOTER DIV -->
	<div class="row">
		<div class="col-sm-12">
			<div class="footer">
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
		</div>
	</div>

</body>

<script type="text/javascript" src="js/jquery.min.js" ></script>
<script type="text/javascript" src="js/bootstrap.min.js" ></script>
<script type="text/javascript" src="js/devrama.slider.js" ></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.scroller').DrSlider(); 

		// SET SELECTED ACTIVITY
		$('button').click(function() {
			window.sessionStorage.setItem('activity', $(this).attr('id'));
			//console.log(sessionStorage);
		});
			
	});
</script>


</html>

		
	
         
        
     
 
    		


