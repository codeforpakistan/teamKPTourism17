<?php
?>
<html>
<head>
<title>Treks | TCKP</title>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" id="bootstrap-css" href="./css/bootstrap.css" type="text/css" media="all">
<link rel="stylesheet" id="style-css" href="./css/style.css" type="text/css" media="all">
<link rel="stylesheet" id="animate-css" href="./css/animate.css" type="text/css" media="all">

</head>


<body class="pattern animated fadeIn">
	<div class="content">
		<!-- TOP DIV -->
		<div class="container">	
			<!-- TOP LOGO AND MENU DIV -->
			<div class="row top_div">
				<div class="col-sm-12">	
					<!-- LOGO DIV -->
					<div class="col-lg-6 col-sm-5 col-xs-3">
						<div class="col-sm-2 col-xs-9">
							<a href="index.php"><img class="img logo" src="images/logo.png" alt=""></a>
						</div>
						<div class="col-sm-10 col-xs-3 text-left">
							<h4 class="color-blue top_div_logo_heading">TCKP DISCOVER</h4>
							<h5 class="heading-description">Tourism Cooperation KP</h5>
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
									<li class="top-links color-black"><a href="#">Sign In</a></li>
									<li class="top-links color-black"><a href="#">Plan</a></li>
									<li class="top-links color-black"><a href="#">Events</a></li>
									<li class="top-links color-black"><a href="#">Destinations</a></li>
								</ul>
							</div>
						</nav>
					</div>
				</div>
			</div>

			<!-- BREAD CRUMB AND WEATHER DIV -->
			<div class="row breadcrumbdiv">	
				<div class="col-sm-push-1 col-sm-10 col-sm-pull-1">
					<!-- BREADCRUMB DIV -->
					<div class="col-lg-6 col-xs-12">
						<ol class="breadcrumb">
						  <li><a href="http://localhost/tckp">Home</a></li>
						  <li><a href="http://localhost/tckp/discover.php">Discover</a></li>
						  <li><a class="region-selected" href="http://localhost/tckp/details.php"></a></li>					  						  
						  <li class="active"></li>
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
				<div class="trekkingMainPage-banner">
					<img class="img img-responsive" src="images/img_1.jpg" />
				</div>
			</div>
		</div>

		<!-- ABOUT DIV -->
		<div class="white_bg about-trek">
			<div class="container">
				<div class="col-sm-12 text-justify">
					<div class="col-lg-6 col-xs-12">
						<p class="color-black about-trek-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<p class="color-black about-trek-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
					</div>
					<div class="col-lg-6 col-xs-12">	
						<p class="color-black about-trek-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<p class="color-black about-trek-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
					</div>
				</div>
			</div>
		</div>
				
		<!-- TREKS DIV -->
		<div class="container">
			<!-- TREKS SELECTION DIV -->
			<div class="row margins text-center ">	
				<h3 class="color-text sort-heading">FAMOUS Trekking Paths</h3>
				<h5 class="color-blue sort-description">Choose a trail to explore</h5>
				<form class="margins" action="" method="">
					<select class="form-control input-group-lg" name="trek_selection_sort" id="trek_selection_sort">
						<option class="selectoptions">Popularity</option>
						<option class="selectoptions">Regions</option>
					   	<option class="selectoptions">Activities</option>
					</select>
				</form>
			</div>

			<div class="row margins">
				<div class="col-lg-12">
					<!-- 1st TREKKING PATH dIV -->
					<div class="col-lg-4 col-sm-6 col-xs-12 text-center ">
						<div class="translate">
							<div class="trek_page_div spacing shadow">
								<object type="image/svg+xml" data="images/trek_two-03.svg" class="trek_dimensions">
								 	<param name="src" value="images/trek_two-03.svg">
								</object>

								<div class="trek_page_normal_details has_bottom white_bg radius">
										<p class="ratings"><span class="filled_stars">&#9734;</span><span class="filled_stars">&#9734;</span><span class="filled_stars">&#9734;</span></p>
										<p class="recommendation">Recommended</p>
										<h4 class="">Trekking Lorem Ipsum</h4>
										<p class="">Resturants, Bicycling, Hiking, Sites</p>
								</div>
								<!-- HOVER DETAILS -->	
								<div class="trek_page_cover_div"></div>		
								<div class="trek_page_hover_details radius">	
									<div class="has_bottom">
										<div class="width_76">	
											<h3 class="text-black">Trekking Lorem Ipsum</h3>
											<p class="ratings"><span class="filled_stars">&#9734;</span><span class="filled_stars">&#9734;</span><span class="filled_stars">&#9734;</span></p>
											<p class="recommendation">Recommended</p>			
											<p class="text-black">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
										</div>
										<div class="white_bg radius trek_specs">
											<div class="col-lg-12"> 
												<div class="col-xs-4">
													<p class="text-black">Distance</p>
													<h3 id="trek_1_distance" class="color-blue">8.5</h3>
													<p class="text-black">Km</p>
												</div>
												<div class="col-xs-4">
													<p class="text-black">Time</p>
													<h3 id="trek_1_time" class="color-blue">1.5</h3>
													<p class="text-black">hrs</p>
												</div>
												<div class="col-xs-4">
													<p class="text-black">Speed</p>
													<h3 id="trek_1_speed" class="color-blue">3</h3>
													<p class="text-black">Km/hr</p>
												</div>
											</div>
											<a href="trek/"><button id="path_1" class="btn btn-primary trek_explore">EXPLORE</button></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- 2nd TREKKING PATH dIV -->
					<div class="col-lg-4 col-sm-6 col-xs-12 text-center ">
						<div class="translate">
							<div class="trek_page_div spacing shadow">
								<object type="image/svg+xml" data="images/trek_two-03.svg" class="trek_dimensions">
								 	<param name="src" value="images/trek_two-03.svg">
								</object>

								<div class="trek_page_normal_details has_bottom white_bg radius">
										<p class="ratings"><span class="filled_stars">&#9734;</span><span class="filled_stars">&#9734;</span><span class="filled_stars">&#9734;</span></p>
										<p class="recommendation">Recommended</p>
										<h4 class="">Trekking Lorem Ipsum</h4>
										<p class="">Resturants, Bicycling, Hiking, Sites</p>
								</div>
								<!-- HOVER DETAILS -->	
								<div class="trek_page_cover_div"></div>		
								<div class="trek_page_hover_details radius">	
									<div class="has_bottom">
										<div class="width_76">	
											<h3 class="text-black">Trekking Lorem Ipsum</h3>
											<p class="ratings"><span class="filled_stars">&#9734;</span><span class="filled_stars">&#9734;</span><span class="filled_stars">&#9734;</span></p>
											<p class="recommendation">Recommended</p>			
											<p class="text-black">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
										</div>
										<div class="white_bg radius trek_specs">
											<div class="col-lg-12"> 
												<div class="col-xs-4">
													<p class="text-black">Distance</p>
													<h3 id="trek_2_distance" class="color-blue">8.5</h3>
													<p class="text-black">Km</p>
												</div>
												<div class="col-xs-4">
													<p class="text-black">Time</p>
													<h3 id="trek_2_time" class="color-blue">1.5</h3>
													<p class="text-black">hrs</p>
												</div>
												<div class="col-xs-4">
													<p class="text-black">Speed</p>
													<h3 id="trek_2_speed" class="color-blue">3</h3>
													<p class="text-black">Km/hr</p>
												</div>
											</div>
											<a href="trek/"><button id="path_2" class="btn btn-primary trek_explore">EXPLORE</button></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- 3rd TREKKING PATH dIV -->
					<div class="col-lg-4 col-sm-6 col-xs-12 text-center ">
						<div class="translate">
							<div class="trek_page_div spacing shadow">
								<object type="image/svg+xml" data="images/trek_two-03.svg" class="trek_dimensions">
								 	<param name="src" value="images/trek_two-03.svg">
								</object>

								<div class="trek_page_normal_details has_bottom white_bg radius">
										<p class="ratings"><span class="filled_stars">&#9734;</span><span class="filled_stars">&#9734;</span><span class="filled_stars">&#9734;</span></p>
										<p class="recommendation">Recommended</p>
										<h4 class="">Trekking Lorem Ipsum</h4>
										<p class="">Resturants, Bicycling, Hiking, Sites</p>
								</div>
								<!-- HOVER DETAILS -->	
								<div class="trek_page_cover_div"></div>		
								<div class="trek_page_hover_details radius">	
									<div class="has_bottom">
										<div class="width_76">	
											<h3 class="text-black">Trekking Lorem Ipsum</h3>
											<p class="ratings"><span class="filled_stars">&#9734;</span><span class="filled_stars">&#9734;</span><span class="filled_stars">&#9734;</span></p>
											<p class="recommendation">Recommended</p>			
											<p class="text-black">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
										</div>
										<div class="white_bg radius trek_specs">
											<div class="col-lg-12"> 
												<div class="col-xs-4">
													<p class="text-black">Distance</p>
													<h3 id="trek_3_distance" class="color-blue">8.5</h3>
													<p class="text-black">Km</p>
												</div>
												<div class="col-xs-4">
													<p class="text-black">Time</p>
													<h3 id="trek_3_time" class="color-blue">1.5</h3>
													<p class="text-black">hrs</p>
												</div>
												<div class="col-xs-4">
													<p class="text-black">Speed</p>
													<h3 id="trek_3_speed" class="color-blue">3</h3>
													<p class="text-black">Km/hr</p>
												</div>
											</div>
											<a href="trek/"><button id="path_3" class="btn btn-primary trek_explore">EXPLORE</button></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- 4th TREKKING PATH dIV -->
					<div class="col-lg-4 col-sm-6 col-xs-12 text-center">
						<div class="translate">
							<div class="trek_page_div spacing shadow">
								<object type="image/svg+xml" data="images/trek_two-03.svg" class="trek_dimensions">
								 	<param name="src" value="images/trek_two-03.svg">
								</object>

								<div class="trek_page_normal_details has_bottom white_bg radius">
										<p class="ratings"><span class="filled_stars">&#9734;</span><span class="filled_stars">&#9734;</span><span class="filled_stars">&#9734;</span></p>
										<p class="recommendation">Recommended</p>
										<h4 class="">Trekking Lorem Ipsum</h4>
										<p class="">Resturants, Bicycling, Hiking, Sites</p>
								</div>
								<!-- HOVER DETAILS -->	
								<div class="trek_page_cover_div"></div>		
								<div class="trek_page_hover_details radius">	
									<div class="has_bottom">
										<div class="width_76">	
											<h3 class="text-black">Trekking Lorem Ipsum</h3>
											<p class="ratings"><span class="filled_stars">&#9734;</span><span class="filled_stars">&#9734;</span><span class="filled_stars">&#9734;</span></p>
											<p class="recommendation">Recommended</p>			
											<p class="text-black">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
										</div>
										<div class="white_bg radius trek_specs">
											<div class="col-lg-12"> 
												<div class="col-xs-4">
													<p class="text-black">Distance</p>
													<h3 id="trek_4_distance" class="color-blue">8.5</h3>
													<p class="text-black">Km</p>
												</div>
												<div class="col-xs-4">
													<p class="text-black">Time</p>
													<h3 id="trek_4_time" class="color-blue">1.5</h3>
													<p class="text-black">hrs</p>
												</div>
												<div class="col-xs-4">
													<p class="text-black">Speed</p>
													<h3 id="trek_4_speed" class="color-blue">3</h3>
													<p class="text-black">Km/hr</p>
												</div>
											</div>
											<a href="trek/"><button id="path_4" class="btn btn-primary trek_explore">EXPLORE</button></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- 5th TREKKING PATH dIV -->
					<div class="col-lg-4 col-sm-6 col-xs-12 text-center">
						<div class="translate">
							<div class="trek_page_div spacing shadow">
								<object type="image/svg+xml" data="images/trek_two-03.svg" class="trek_dimensions">
								 	<param name="src" value="images/trek_two-03.svg">
								</object>

								<div class="trek_page_normal_details has_bottom white_bg radius">
										<p class="ratings"><span class="filled_stars">&#9734;</span><span class="filled_stars">&#9734;</span><span class="filled_stars">&#9734;</span></p>
										<p class="recommendation">Recommended</p>
										<h4 class="">Trekking Lorem Ipsum</h4>
										<p class="">Resturants, Bicycling, Hiking, Sites</p>
								</div>
								<!-- HOVER DETAILS -->	
								<div class="trek_page_cover_div"></div>		
								<div class="trek_page_hover_details radius">	
									<div class="has_bottom">
										<div class="width_76">	
											<h3 class="text-black">Trekking Lorem Ipsum</h3>
											<p class="ratings"><span class="filled_stars">&#9734;</span><span class="filled_stars">&#9734;</span><span class="filled_stars">&#9734;</span></p>
											<p class="recommendation">Recommended</p>			
											<p class="text-black">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
										</div>
										<div class="white_bg radius trek_specs">
											<div class="col-lg-12"> 
												<div class="col-xs-4">
													<p class="text-black">Distance</p>
													<h3 id="trek_5_distance" class="color-blue">8.5</h3>
													<p class="text-black">Km</p>
												</div>
												<div class="col-xs-4">
													<p class="text-black">Time</p>
													<h3 id="trek_5_time" class="color-blue">1.5</h3>
													<p class="text-black">hrs</p>
												</div>
												<div class="col-xs-4">
													<p class="text-black">Speed</p>
													<h3 id="trek_5_speed" class="color-blue">3</h3>
													<p class="text-black">Km/hr</p>
												</div>
											</div>
											<a href="trek/"><button id="path_5" class="btn btn-primary trek_explore">EXPLORE</button></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- 6th TREKKING PATH dIV -->
					<div class="col-lg-4 col-sm-6 col-xs-12 text-center">
						<div class="translate">
							<div class="trek_page_div spacing shadow">
								<object type="image/svg+xml" data="images/trek_two-03.svg" class="trek_dimensions">
								 	<param name="src" value="images/trek_two-03.svg">
								</object>

								<div class="trek_page_normal_details has_bottom white_bg radius">
										<p class="ratings"><span class="filled_stars">&#9734;</span><span class="filled_stars">&#9734;</span><span class="filled_stars">&#9734;</span></p>
										<p class="recommendation">Recommended</p>
										<h4 class="">Trekking Lorem Ipsum</h4>
										<p class="">Resturants, Bicycling, Hiking, Sites</p>
								</div>
								<!-- HOVER DETAILS -->	
								<div class="trek_page_cover_div"></div>		
								<div class="trek_page_hover_details radius">	
									<div class="has_bottom">
										<div class="width_76">	
											<h3 class="text-black">Trekking Lorem Ipsum</h3>
											<p class="ratings"><span class="filled_stars">&#9734;</span><span class="filled_stars">&#9734;</span><span class="filled_stars">&#9734;</span></p>
											<p class="recommendation">Recommended</p>			
											<p class="text-black">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
										</div>
										<div class="white_bg radius trek_specs">
											<div class="col-lg-12"> 
												<div class="col-xs-4">
													<p class="text-black">Distance</p>
													<h3 id="trek_6_distance" class="color-blue">8.5</h3>
													<p class="text-black">Km</p>
												</div>
												<div class="col-xs-4">
													<p class="text-black">Time</p>
													<h3 id="trek_6_time" class="color-blue">1.5</h3>
													<p class="text-black">hrs</p>
												</div>
												<div class="col-xs-4">
													<p class="text-black">Speed</p>
													<h3 id="trek_6_speed" class="color-blue">3</h3>
													<p class="text-black">Km/hr</p>
												</div>
											</div>
											<a href="trek/"><button id="path_6" class="btn btn-primary trek_explore">EXPLORE</button></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>			
				</div>
			</div>
		</div>

		<!-- EXPLORE OTHER ACTIVITIES  DIV -->
		<div class="white_bg other-activities-to-search">
			<!-- CONTAINER DIV -->
			<div class="container">
				<div class="row">
					<h3 class="color-text sort-heading text-center">Other Activities</h3>
					<h5 class="color-blue sort-description text-center">Lorem ipsum dolor sit amet</h5>
				</div>
						
				<div class="row spacing">	
					<div id="other-activities" class="col-lg-12">
						<!-- FISHING dIV -->
						<div class="col-lg-4 col-sm-6 col-xs-12">
							<div class="translate">
								<div class="famous_events_div shadow">
									<img id="fishing_normal" class="image_normal events_image_normal" src="./images/fishing.png" />
									<img id="fishing_hover" class="image_hover events_image_hover" src="https://unsplash.it/400/320/?random" />	
									<div class="normal_details">
										<div class="has_wrapper">
											<h2 class="color-black">Fishing</h2>
											<p>In Naran</p>
											<img src="images/spots-pin.png" class="img auto-margin">
											<p>5 differnet spots for fishing and relaxing</p>
										</div>
									</div>				
									<div class="has_bottom hover_details">	
										<h2>Fishing</h2>
										<div class="white_bg radius">					
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
											<a href="#"><button id="fishing" class="btn btn-primary">EXPLORE</button></a>
										</div>
									</div>
								</div>
							</div>
						</div>			

						<!-- CULTURE dIV -->
						<div class="col-lg-4 col-sm-6 col-xs-12">
							<div class="translate">
								<div class="famous_events_div shadow">
									<img id="culture_normal" class="image_normal events_image_normal" src="./images/cult.png" />
									<img id="culture_hover" class="image_hover events_image_hover" src="https://unsplash.it/400/320/?random" />	
									<div class="normal_details">
										<div class="has_wrapper">
											<h2 class="color-black">Culture</h2>
											<p>In Naran</p>
											<img src="images/spots-pin.png" class="img auto-margin">
											<p>Explore the cultural values of naran</p>
										</div>
									</div>				
									<div class="has_bottom hover_details">	
										<h2>Culture</h2>
										<div class="white_bg radius">					
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
											<a href="#"><button id="culture" class="btn btn-primary">EXPLORE</button></a>
										</div>
									</div>
								</div>
							</div>
						</div>	

						<!-- PARAGLIDING dIV -->
						<div class="col-lg-4 col-sm-6 col-xs-12">
							<div class="translate">
								<div class="famous_events_div shadow">
									<img id="paragliding_normal" class="image_normal events_image_normal" src="./images/paragliding.png" />
									<img id="paragliding_hover" class="image_hover events_image_hover" src="https://unsplash.it/400/320/?random" />	
									<div class="normal_details">
										<div class="has_wrapper">
											<h2 class="color-black">Paragliding</h2>
											<p>In Naran</p>
											<img src="images/spots-pin.png" class="img auto-margin">
											<p>3 amazing paragliding experiences</p>
										</div>
									</div>				
									<div class="has_bottom hover_details">	
										<h2>Paragliding</h2>
										<div class="white_bg radius">					
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
											<a href="#"><button id="paragliding" class="btn btn-primary">EXPLORE</button></a>
										</div>
									</div>
								</div>
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
		//show selected area and activity in breadcrumb		
		$('.breadcrumb .region-selected').text(window.sessionStorage.getItem('region')); 
		$('.breadcrumb .active').html(window.sessionStorage.getItem('activity')); 

		// SET SELECTED ACTIVITY
		$('button').click(function() {
			window.sessionStorage.setItem('path', $(this).attr('id'));
			console.log(sessionStorage);
		});
	});
</script>


</html>

		
			