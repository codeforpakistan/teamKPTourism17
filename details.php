<?php
?>
<html>
<head>
<title>Details | TCKP</title>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
<meta charset="utf-8">
<link rel="stylesheet" id="bootstrap-css" href="css/bootstrap.css" type="text/css" media="all">
<link rel="stylesheet" id="style-css" href="css/style.css" type="text/css" media="all">
<link rel="stylesheet" id="datetimepicker-css" href="css/jquery-ui.css" type="text/css" media="all">
<link rel="stylesheet" id="animate-css" href="css/animate.css" type="text/css" media="all">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

</head>


<body class="pattern animated fadeIn">
	 <!-- details Modal -->
	<div class="modal fade" id="detailsModal" role="dialog">
	    <div class="modal-dialog">	    
	      <!-- Modal content-->
	      	<div class="modal-content">
	        	<div class="modal-header">
	          		<button type="button" class="close" data-dismiss="modal">&times;</button>
	          		<h3 class="modal-title color-black sort-heading">The Bliss of <span class="selected-area"></h3>
	        	</div>
	        	<div class="modal-body">
	          		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel nibh vestibulum odio laoreet venenatis. Praesent efficitur vehicula gravida. Vivamus ut metus felis. Mauris feugiat diam nec odio ullamcorper gravida. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
						Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus id magna pharetra, imperdiet orci luctus, commodo urna. Aenean venenatis velit non turpis sollicitudin viverra. Ut mattis enim vel magna fermentum lacinia. Donec risus ligula, maximus et justo ut, semper ultrices sem. Phasellus vehicula nisi in mauris egestas ultricies.Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
						Proin vel nibh vestibulum odio laoreet venenatis. Praesent efficitur vehicula gravida. Vivamus ut metus felis. Mauris feugiat diam nec odio ullamcorper gravida. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
						Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus id magna pharetra, imperdiet orci luctus, commodo urna. Aenean venenatis velit non turpis sollicitudin viverra. Ut mattis enim vel magna fermentum lacinia. Donec risus ligula, maximus et justo ut, semper ultrices sem. Phasellus vehicula nisi in mauris egestas ultricies. 	
					</p>
	        	</div>
	        	<div class="modal-footer">
	          		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        	</div>
	      	</div>
	    </div>
	</div>

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
							<h4 class="color-blue top_div_logo_heading"> TCKP DISCOVER</h4>
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
						  <li><a href="index.php">Home</a></li>
						  <li><a href="discover.php">Discover</a></li>						  						  
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
				<div class="banner-wrapper">
					<div id="top-slider" class="banner">
						<div id="slide1" class="slide">
							<img class="img img-responsive" src="images/img_1.jpg" />
							<div class="banner-text">
								<h3 class="color-white">EXPLORE HIKING TREKS IN <span class="selected-area"></span></h3>
							    <p class="color-white">Lorem ipsum dolor sit amet</p>
			                    <a href="#"><button class="btn btn-white">VISIT NOW</button></a> 							                    
							</div>
						</div>
						<div id="slide2" class="slide">
							<img class="img img-responsive" src="images/img_6.jpg" />
							<div class="banner-text">
								<h3 class="color-white">EXPLORE NATURAL BEAUTY OF <span class="selected-area"></span></h3>
							    <p class="color-white">Lorem ipsum dolor sit amet</p>
			                    <a href="#"><button class="btn btn-white">VISIT NOW</button></a> 							                    
							</div>
						</div>
						<div id="slide3" class="slide">
							<img class="img img-responsive" src="images/img_5.jpg" />
							<div class="banner-text">
								<h3 class="color-white">EXPLORE PLACES IN <span class="selected-area"></span></h3>
							    <p class="color-white">Lorem ipsum dolor sit amet</p>
			                    <a href="#"><button class="btn btn-white">VISIT NOW</button></a> 							                    
							</div>
						</div>
					</div>
					<!-- END WRAPPER FOR SLIDES -->
					<a class="left slide-left carousel-control" href="#top-slider" role="button" data-slide="prev">
						<i class="fa fa-angle-left"></i>
					</a>
					<a  class="right slide-right carousel-control" href="#top-slider" role="button" data-slide="next">
						<i class="fa fa-angle-right"></i>
			        </a>
				</div>
			</div>
		</div>

		<!-- ABOUT DIV -->
		<div class="white_bg about">
			<div class="container">
				<div class="">
					<div class="col-sm-12">
						<h3 class="color-black sort-heading text-center">The Bliss of <span class="selected-area"></span></h3>
						<h5 class="color-blue sort-description text-center">Lorem ipsum dolor sit amet</h5>
						<div class="col-lg-5 col-md-5 col-sm-12">
							<p class="color margins">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel nibh vestibulum odio laoreet venenatis. Praesent efficitur vehicula gravida. Vivamus ut metus felis. Mauris feugiat diam nec odio ullamcorper gravida. Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br>
								Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus id magna pharetra, imperdiet orci luctus, commodo urna. Aenean venenatis velit non turpis sollicitudin viverra. Ut mattis enim vel magna fermentum lacinia. Donec risus ligula, maximus et justo ut, semper ultrices sem. Phasellus vehicula nisi in mauris egestas ultricies. <br/>
							</p>
							<p class="about_elevation"><span>8202'</span><br/><span>Elevation</span></p>
							<a href="#"><p class="color-blue seeAllLink" data-toggle="modal" data-target="#detailsModal">Read More</p></a>
						</div>
						<div class="col-lg-7 col-md-7 col-sm-12">
							<img class="img img-responsive pushedright" src="images/naran-desc-map.png" />	
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- REGIONS SELECTION AND EVENTS SELECTION DIV -->
		<div class="gray_bg padding">
			<div class="container">	
				<!-- EVENTS SELECTION DIV -->
				<div class="row margins text-center ">	
					<h3 class="color-text sort-heading">FAMOUS ACTIVITIES</h3>
					<h5 class="color-blue sort-description">Choose an activity to explore</h5>
					<form class="margins" action="" method="">
						<select class="form-control input-group-lg" name="region_selection_sort" id="region_selection_sort">
							<option class="selectoptions">Popularity</option>
							<option class="selectoptions">Regions</option>
						   	<option class="selectoptions">Activities</option>
						</select>
					</form>
				</div>


				<!-- EVENTS DIV -->
				<div class="row margins">
					<div class="col-lg-12">
						<!-- TREKKING dIV -->
						<div class="col-lg-4 col-sm-6 col-xs-12 text-center ">
							<div class="translate">
								<div id="trekking" class="famous_events_div shadow">
									<img id="trekking_normal" class="image_normal events_image_normal" src="images/trekking.png" />
									<img id="trekking_hover" class="image_hover events_image_hover" src="https://unsplash.it/400/320/?random" />	
									<div class="normal_details">
										<div class="has_wrapper">
											<h2 class="color-black">Trekking</h2>
											<p class="area-name"></p>
											<img src="images/spots-pin.png" class="img auto-margin">
											<p>8 differnet trekking paths</p>
										</div>
									</div>				
									<div class="has_bottom hover_details">	
										<h2>Trekking</h2>
										<div class="white_bg radius">					
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
											<button class="btn btn-primary">EXPLORE</button>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- TREKKING 2 dIV -->
						<div class="text-center col-lg-4 col-sm-6 col-xs-12">
							<div class="translate">
								<div id="trekking2" class="famous_events_div shadow">
									<img id="trekking2_normal" class="image_normal events_image_normal" src="images/trekking.png" />
									<img id="trekking2_hover" class="image_hover events_image_hover" src="https://unsplash.it/400/320/?random" />	
									<div class="normal_details">
										<div class="has_wrapper">
											<h2 class="color-black">Trekking</h2>
											<p class="area-name"></p>
											<img src="images/spots-pin.png" class="img auto-margin">
											<p>8 differnet trekking paths</p>
										</div>
									</div>				
									<div class="has_bottom hover_details">	
										<h2>Trekking</h2>
										<div class="white_bg radius">					
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
											<button class="btn btn-primary">EXPLORE</button>
										</div>
									</div>
								</div>
							</div>	
						</div>		

						<!-- sight SEEING dIV -->
						<div class="text-center col-lg-4 col-sm-6 col-xs-12">
							<div class="translate">
								<div id="sightseeing" class="famous_events_div shadow">
									<img id="sightseeing_normal" class="image_normal events_image_normal" src="./images/sightseeing.png" />
									<img id="sightseeing_hover" class="image_hover events_image_hover" src="https://unsplash.it/400/320/?random" />	
									<div class="normal_details">
										<div class="has_wrapper">
											<h2 class="color-black">sight Seeing</h2>
											<p class="area-name"></p>
											<img src="images/spots-pin.png" class="img auto-margin">
											<p>15 differnet sight seeing spots</p>
										</div>
									</div>				
									<div class="has_bottom hover_details">	
										<h2>sight Seeing</h2>
										<div class="white_bg radius">					
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
											<button class="btn btn-primary">EXPLORE</button>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- PARAGLIDING dIV -->
						<div class="text-center col-lg-4 col-sm-6 col-xs-12">
							<div class="translate">
								<div id="paragliding" class="famous_events_div shadow">
									<img id="paragliding_normal" class="image_normal events_image_normal" src="./images/paragliding.png" />
									<img id="paragliding_hover" class="image_hover events_image_hover" src="https://unsplash.it/400/320/?random" />	
									<div class="normal_details">
										<div class="has_wrapper">
											<h2 class="color-black">Paragliding</h2>
											<p class="area-name"></p>
											<img src="images/spots-pin.png" class="img auto-margin">
											<p>3 amazing paragliding experiences</p>
										</div>
									</div>				
									<div class="has_bottom hover_details">	
										<h2>Paragliding</h2>
										<div class="white_bg radius">					
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
											<button class="btn btn-primary">EXPLORE</button>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- FISHING dIV -->
						<div class="text-center col-lg-4 col-sm-6 col-xs-12">
							<div class="translate">
								<div id="fishing" class="famous_events_div shadow">
									<img id="fishing_normal" class="image_normal events_image_normal" src="./images/fishing.png" />
									<img id="fishing_hover" class="image_hover events_image_hover" src="https://unsplash.it/400/320/?random" />	
									<div class="normal_details">
										<div class="has_wrapper">
											<h2 class="color-black">Fishing</h2>
											<p class="area-name"></p>
											<img src="images/spots-pin.png" class="img auto-margin">
											<p>5 differnet spots for fishing and relaxing</p>
										</div>
									</div>				
									<div class="has_bottom hover_details">	
										<h2>Fishing</h2>
										<div class="white_bg radius">					
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
											<button class="btn btn-primary">EXPLORE</button>
										</div>
									</div>
								</div>
							</div>
						</div>			

						<!-- CULTURE dIV -->
						<div class="text-center col-lg-4 col-sm-6 col-xs-12">
							<div class="translate">
								<div id="culture" class="famous_events_div shadow">
									<img id="culture_normal" class="image_normal events_image_normal" src="./images/cult.png" />
									<img id="culture_hover" class="image_hover events_image_hover" src="https://unsplash.it/400/320/?random" />	
									<div class="normal_details">
										<div class="has_wrapper">
											<h2 class="color-black">Culture</h2>
											<p class="area-name"></p>
											<img src="images/spots-pin.png" class="img auto-margin">
											<p>Explore the cultural values of naran</p>
										</div>
									</div>				
									<div class="has_bottom hover_details">	
										<h2>Culture</h2>
										<div class="white_bg radius">					
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
											<button class="btn btn-primary">EXPLORE</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

					<!-- SEE ALL EVENTS DIV -->
				<div class="row">	
					<div class="col-sm-12 text-center">
						<p class=""><a class="color-blue seeAllLink" href="search.php">VIEW ALL</a></p>
					</div>
				</div>
			</div>
		</div>

		<!-- TOP SIGHTS IN NARAN-->		
		<div class="white_bg top-sights-to-visit">
			<!-- CONTAINER DIV -->
			<div class="container">
				<div class="row">
					<h3 class="color-text sort-heading text-center">Top Sights In <span class="selected-area"></span></h3>
					<h5 class="color-blue sort-description text-center">Explore top sights in <span class="selected-area"></span></h5>
				</div>
				<!-- TOP SIGHTS DIV -->
				<div class="row spacing">	
					<div id="top-sights" class="col-lg-12">
						<!-- SIGHT1 CONTAINER DIV -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="scale">
								<div class="top-sights-box">
									<a href="activity.php">
										<div class="top-sights-box-cover"></div>
										<img class="img img-responsive" src="images/stock-img3.jpg" />
										<h4 class="color-black site-count">1</h4>
										<div class="site-info-text text-center">
											<p class="color-white site-area">Kaghan Valley</p>
											<h4 class="color-white site-name">Malika Parbat</h4>
											<p class="color-white site-description animated">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel nibh vestibulum odio laoreet venenatis. Praesent efficitur vehicula gravida.</p>
										</div>
									</a>
								</div>
							</div>	
						</div>

						<!-- SIGHT2 CONTAINER DIV -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="scale">
								<div class="top-sights-box">
									<a href="activity.php">
										<div class="top-sights-box-cover"></div>
										<img class="img img-responsive" src="images/stock-img1.jpg" />
										<h4 class="color-black site-count">2</h4>
										<div class="site-info-text text-center">
											<p class="color-white site-area">Kaghan Valley</p>
											<h3 class="color-white site-name">lake saiful malook</h3>
											<p class="color-white site-description animated">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel nibh vestibulum odio laoreet venenatis. Praesent efficitur vehicula gravida.</p>
										</div>
									</a>
								</div>	
							</div>
						</div>

						<!-- SIGHT3 CONTAINER DIV -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="scale">
								<div class="top-sights-box">
									<a href="activity.php">
										<div class="top-sights-box-cover"></div>
										<img class="img img-responsive" src="images/stock-img4.jpg" />
										<h4 class="color-black site-count">3</h4>
										<div class="site-info-text text-center">
											<p class="color-white site-area">Kaghan Valley</p>
											<h3 class="color-white site-name">shinu</h3>
											<p class="color-white site-description animated">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel nibh vestibulum odio laoreet venenatis. Praesent efficitur vehicula gravida.</p>
										</div>
									</a>
								</div>	
							</div>
						</div>

						<!-- SIGHT4 CONTAINER DIV -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="scale">
								<div class="top-sights-box">
									<a href="activity.php">
										<div class="top-sights-box-cover"></div>
										<img class="img img-responsive" src="images/stock-img2.jpg" />
										<h4 class="color-black site-count">4</h4>
										<div class="site-info-text text-center">
											<p class="color-white site-area">Kaghan Valley</p>
											<h3 class="color-white site-name">paras</h3>
											<p class="color-white site-description animated">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel nibh vestibulum odio laoreet venenatis. Praesent efficitur vehicula gravida.</p>
										</div>
									</a>
								</div>	
							</div>
						</div>

						<!-- SIGHT5 CONTAINER DIV -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="scale">
								<div class="top-sights-box">
									<a href="activity.php">
										<div class="top-sights-box-cover"></div>
										<img class="img img-responsive" src="images/stock-img1.jpg" />
										<h4 class="color-black site-count">5</h4>
										<div class="site-info-text text-center">
											<p class="color-white site-area">Kaghan Valley</p>
											<h3 class="color-white site-name">Kiwai</h3>
												<p class="color-white site-description animated">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel nibh vestibulum odio laoreet venenatis. Praesent efficitur vehicula gravida.</p>
										</div>
									</a>
								</div>	
							</div>
						</div>

						<!-- SIGHT6 CONTAINER DIV -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="scale">
								<div class="top-sights-box">
									<a href="activity.php">
										<div class="top-sights-box-cover"></div>
										<img class="img img-responsive" src="images/stock-img2.jpg" />
										<h4 class="color-black site-count">6</h4>
										<div class="site-info-text text-center">
											<p class="color-white site-area">Kaghan Valley</p>
											<h3 class="color-white site-name">Shogran</h3>
												<p class="color-white site-description animated">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel nibh vestibulum odio laoreet venenatis. Praesent efficitur vehicula gravida.</p>
										</div>
									</a>
								</div>	
							</div>
						</div>
					</div>						
				</div>
				<!-- END OF TOP SIGHTS DIV -->
			</div>
		</div>
		<!-- END OF TOP SIGHTS IN NARAN-->	

		<!-- FOOD AND DRINKS DIV-->		
		<div class="white_bg food-and-drinks">
			<!-- CONTAINER DIV -->
			<div class="container-fluid">
				<div class="row">
					<h3 class="color-text sort-heading text-center">food and drinks</h3>
					<h5 class="color-blue sort-description text-center"></h5>
				</div>
				<!-- HOTELS DIV -->
				<div class="container">	
					<div class="row spacing">						
						<div class="col-lg-6 col-xs-12">
							<div class="col-lg-6 col-xs-12">
								<div class="food-box">
									<h5 class="food-name">Pellentesque egizzle</h3>
									<p class="food-type">type of resturant</p>
								</div>
							</div>	
							<div class="col-lg-6 col-xs-12">
								<div class="food-box">
									<h5 class="food-name">Pellentesque egizzle</h3>
									<p class="food-type">type of resturant</p>
								</div>
							</div>
							<div class="col-lg-6 col-xs-12">
								<div class="food-box">
									<h5 class="food-name">Pellentesque egizzle</h3>
									<p class="food-type">type of resturant</p>
								</div>
							</div>
							<div class="col-lg-6 col-xs-12">
								<div class="food-box">
									<h5 class="food-name">Pellentesque egizzle</h3>
									<p class="food-type">type of resturant</p>
								</div>
							</div>
							<div class="col-lg-6 col-xs-12">
								<div class="food-box">
									<h5 class="food-name">Pellentesque egizzle</h3>
									<p class="food-type">type of resturant</p>
								</div>
							</div>
							<div class="col-lg-6 col-xs-12">
								<div class="food-box">
									<h5 class="food-name">Pellentesque egizzle</h3>
									<p class="food-type">type of resturant</p>
								</div>
							</div>
							<div class="col-lg-6 col-xs-12">
								<div class="food-box">
									<h5 class="food-name">Pellentesque egizzle</h3>
									<p class="food-type">type of resturant</p>
								</div>
							</div>
							<div class="col-lg-6 col-xs-12">
								<div class="food-box">
									<h5 class="food-name">Pellentesque egizzle</h3>
									<p class="food-type">type of resturant</p>
								</div>
							</div>
							<div class="col-lg-6 col-xs-12">
								<div class="food-box">
									<h5 class="food-name">Pellentesque egizzle</h3>
									<p class="food-type">type of resturant</p>
								</div>
							</div>
							<div class="col-lg-6 col-xs-12">
								<div class="food-box">
									<h5 class="food-name">Pellentesque egizzle</h3>
									<p class="food-type">type of resturant</p>
								</div>
							</div>
						</div>	

						<div class="col-lg-6 col-xs-12">
							<img class="img img-responsive food-img" src="images/food.png" />
						</div>				
					</div>

					<div class="row margins">
						<a href="search.php"><p class="color-blue seeAllLink text-center">See All</p></a>
					</div>						
				</div>
			</div>
		</div>	
		<!-- END OF FOOD AND DRINKS	-->

		<!-- SEARCH HOTELS AND RESTURANTS DIV-->		
		<div class="hotels-container">
			<!-- CONTAINER DIV -->
			<div class="container-fluid">
				<div class="col-xs-pull-1 col-xs-10 col-xs-push-1 text-center">
					<div class="row">
						<h3 class="color-white sort-heading">hotels and resthouses</h3>
						<h5 class="color-white sort-description">View hotels and resturants based on their check-in and check-out times an number of guests consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h5>
					
						<!-- SEARCH FORM -->	
						<form class="form-inline hotel-search" action="search.php">
							<div class="form-group col-sm-3 col-xs-12">
							    <input type="text" class="form-control hotel_select" name="checkin_date" id="checkin_date" placeholder="Check In" value="">
							</div>
							<div class="form-group col-sm-3 col-xs-12">
						      	<input type="text" class="form-control hotel_select" name="checkout_date" id="checkout_date" placeholder="Check Out" value="">
						    </div>
						    <div class="form-group col-sm-3 col-xs-12">
							    <select class="form-control hotel_select" id="sel3" name="sel3">
							        <option>1 Guest</option>
							        <option>2 Guests</option>
							        <option>3 Guests</option>
							        <option>4 Guests</option>
							    </select>
						    </div>								    
						    <div class="form-group col-sm-3 col-xs-12">
							    <button type="submit" class="btn btn-info">Submit</button>
							</div>
						</form>			
					</div>

					<div class="row spacing">
						<a class="hotels-link" href="search.php"><p>or skip to see all hotels and resturants</p></a>
					</div>
				</div>
			</div>
		</div>	
		<!-- END OF SEARCH HOTELS AND RESTURANTS	-->	

		<!-- SURVIVAL GUIDE DIV -->
		<div class="white_bg survival-guide">
			<div class="container-fluid text-center">
				<div class="container">
					<h3 class="color-text sort-heading">Essential Information</h3>
						<div class="col-lg-12">
							<!-- VISAS dIV -->
							<div class="col-lg-3 col-sm-6 col-xs-12 text-center">
								<div class="translate guide_box">
									<a href="survivalguide.php" class="survival_link">
										<img id="visa_guide" class="img img-responsive auto-margin" src="./images/visas.png" />	
										<div class="survival_text_wrapper">
											<h4 class="color-text">Visas</h4>
											<p class="color-text">Essential passport work and entry info</p>
										</div>
									</a>
								</div>
							</div>

							<!-- BEST TIME TO VISIT dIV -->
							<div class="col-lg-3 col-sm-6 col-xs-12 text-center">
								<div class="translate guide_box">
									<a href="survivalguide.php" class="survival_link">
										<img id="time_guide" class="img img-responsive auto-margin" src="./images/best-time.png" />	
										<div class="survival_text_wrapper">
											<h4 class="color-text">Best time to visit</h4>
											<p class="color-text">Hit the ground at the right time</p>
										</div>	
									</a>
								</div>
							</div>
									

							<!-- COSTS dIV -->
							<div class="col-lg-3 col-sm-6 col-xs-12 text-center">
								<div class="translate guide_box">
									<a href="survivalguide.php" class="survival_link">
										<img id="cost_guide" class="img img-responsive auto-margin" src="./images/money-and-costs.png" />	
										<div class="survival_text_wrapper">
											<h4 class="color-text">Money and Costs</h4>
											<p class="color-text">Budgets and on-the-ground costs</p>
										</div>
									</a>
								</div>
							</div>


							<!-- HEALTH dIV -->
							<div class="col-lg-3 col-sm-6 col-xs-12 text-center">
								<div class="translate guide_box">
									<a href="survivalguide.php" class="survival_link">
										<img id="health_guide" class="img img-responsive auto-margin" src="./images/health.png" />	
										<div class="survival_text_wrapper">
											<h4 class="color-text">Health</h4>
											<p class="color-text">Keep safe and well on the road</p>
										</div>
									</a>
								</div>
							</div>
						</div>					
				</div>
			</div>
		</div>

		<!-- CURRENT EVENTS AND TOURS DIV -->
		<div class="grey_bg padding events-and-tours-div">
			<div class="container-fluid">	
				<div class="container">
					<h2 class="text-center">Events/Tours</h2>
					<!-- Events/Tours' FIRST DIV -->
						<div class="col-lg-12">
								<!-- LEFT CONTAINER DIV -->
								<div class="col-lg-6 col-md-6 col-xs-6">
									<div class="events_and_tours_box">
										<a href="eventsandtours.php">
											<div class="col-sm-12">
												<!-- LEFT IMAGE DIV -->
												<div class="col-lg-6 col-md-6 col-xs-12">
													<div class="tours_image_div">
														<img class="img img-responsive" src="images/sample_image _4.png" />
														</div>
												</div>	
												<!-- LEFT TEXT DIV -->
												<div class="col-lg-6 col-md-6 col-xs-12">
													<h4 class="color-black">Private Tour 4-Day Naran Trip From Peshawar with awesome activities</h4>
													<p class="color-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
												</div>
											</div>
											<div class="col-sm-12">
												<p class="color-black details-events-cost"><span class="event_cost">Rs. 5000</span>SMALL GROUP TOUR</p>											
											</div>
										</a>
									</div>	
								</div>

								<!-- RIGHT CONTAINER DIV -->
								<div class="col-lg-6 col-md-6 col-xs-6">
									<div class="events_and_tours_box">
										<a href="eventsandtours.php">
											<div class="col-sm-12">
												<!-- RIGHT IMAGE DIV -->
												<div class="col-lg-6 col-md-6 col-xs-12">
													<div class="tours_image_div">
														<img class="img img-responsive" src="images/sample_image_2.png" />
													</div>	
												</div>
												<!-- RIGHT TEXT DIV -->
												<div class="col-lg-6 col-md-6 col-xs-12">
													<h5 class="color-black">Private Tour 4-Day Naran Trip From Peshawar with awesome activities</h5>
													<p class="color-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
												</div>
											</div>
											<div class="col-sm-12">
												<p class="color-black details-events-cost"><span class="event_cost">Rs. 5000</span>SMALL GROUP TOUR</p>											
											</div>
										</a>
									</div>
								</div>
					
							<!-- LEFT CONTAINER DIV -->
							<div class="col-lg-6 col-md-6 col-xs-6">
								<div class="events_and_tours_box">
									<a href="eventsandtours.php">										
										<div class="col-sm-12">
										<!-- LEFT IMAGE DIV -->
											<div class="col-lg-6 col-md-6 col-xs-12">
												<div class="tours_image_div">
													<img class="img img-responsive" src="images/sample_image_2.png" />
												</div>	
											</div>
											<!-- LEFT TEXT DIV -->
											<div class="col-lg-6 col-md-6 col-xs-12">
												<h5 class="color-black">Private Tour 4-Day Naran Trip From Peshawar with awesome activities</h5>
												<p class="color-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
											</div>
										</div>
										<div class="col-sm-12">
											<p class="color-black details-events-cost"><span class="event_cost">Rs. 5000</span>SMALL GROUP TOUR</p>											
										</div>
									</a>
								</div>	
							</div>

							<!-- RIGHT CONTAINER DIV -->
							<div class="col-lg-6 col-md-6 col-xs-6">
								<div class="events_and_tours_box">
									<a href="eventsandtours.php">
										<div class="col-sm-12">
											<!-- RIGHT IMAGE DIV -->
											<div class="col-lg-6 col-md-6 col-xs-12">
												<div class="tours_image_div">
													<img class="img img-responsive" src="images/sample_image _4.png" />
												</div>
											</div>	
											<!-- RIGHT TEXT DIV -->
											<div class="col-lg-6 col-md-6 col-xs-12">
												<h5 class="color-black">Private Tour 4-Day Naran Trip From Peshawar with awesome activities</h5>
												<p class="color-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
											</div>
										</div>
										<div class="col-sm-12">
											<p class="color-black details-events-cost"><span class="event_cost">Rs. 5000</span>SMALL GROUP TOUR</p>											
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
<script src="js/jquery.snippet.min.js"></script>
<script src="js/jquery.easyPaginate.js"></script>
<script src="js/scripts.js"></script>
<script type="text/javascript" src="js/jquery-ui.js" ></script>
<script type="text/javascript">
	$(document).ready(function(){
		//show selected area in breadcrumb
		$('.breadcrumb .active').text(window.sessionStorage.getItem('region'));
		//Show selected area in activities and sight seeing cards, food and drinks
		$('.area-name').text('in '+window.sessionStorage.getItem('region')); 
		$('.top-sights-to-visit .sort-heading').text('top sights in '+window.sessionStorage.getItem('region'));
		$('.selected-area').text(window.sessionStorage.getItem('region'));

		// SET SELECTED ACTIVITY
		$('.famous_events_div').click(function() {
			var activity = $(this).attr('id'); 
			window.sessionStorage.setItem('activity', activity);
			console.log(sessionStorage);
			if(activity == 'trekking') {
				window.location.href = "treks.php";
			}
			else  {
				window.location.href = "activities.php";
			}
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
			$('#slide'+count+' img').addClass('animated fadeIn30');
			$('#slide'+count+' h3').addClass('animated fadeInDownBig');
			$('#slide'+count+' p').addClass('animated fadeInUpBig');
			$('#slide'+count+' button').addClass('animated slideInUp');
	    }

		$(".slide-right .fa-angle-right").click(function(){
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

	    $(".slide-left .fa-angle-left").click(function(){
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
	    //END OF SLIDER

	    //Top sights pagination
	    pagination();
		function pagination() {			
			//OTHER REGIONS PAGINATION 
			if ($(window).width() > 768){
				//OTHER REGIONS PAGINATION 
				$('#top-sights').easyPaginate({
				    paginateElement: 'div.col-lg-3.col-md-4.col-sm-6.col-xs-12',
				    elementsPerPage: 4,
				    effect: 'fade'
				});
			}
			if ($(window).width() <= 768){
				//OTHER REGIONS PAGINATION 
				$('#top-sights').easyPaginate({
				    paginateElement: 'div.col-lg-3.col-md-4.col-sm-6.col-xs-12',
				    elementsPerPage: 1,
				    effect: 'climb'
				});
			}

			$('.top-sights-to-visit .next').html('<i class="fa fa-angle-right"></i>');
			$('.top-sights-to-visit .prev').html('<i class="fa fa-angle-left"></i>');
		}

		//CHANGE PAGINATION STYLE ON CHANGE IN SCREEN SIZE
		$( window ).resize(function() {
			pagination();
		}); 

		$('.top-sights-to-visit .prev').hide();
		var lastID = $('.top-sights-to-visit .last').attr('href'); 
		var firstID = $('.top-sights-to-visit .first').attr('href');

		$('.top-sights-to-visit .prev').click(function() {
			$('.top-sights-to-visit .next').show();
			if(($(".top-sights-to-visit .page[href='"+firstID+"']").attr("class")) == 'page current') { 
				$('.top-sights-to-visit .prev').hide(); 
			}
			else {
				$('.top-sights-to-visit .prev').show();
			}
		});

		$('.top-sights-to-visit .next').click(function() {
			$('.top-sights-to-visit .prev').show();
			if(($(".top-sights-to-visit .page[href='"+lastID+"']").attr("class")) == 'page current') {
		    	$('.top-sights-to-visit .next').hide(); 
			}
			else {
				$('.top-sights-to-visit .next').show();
			}
		});

		$('.top-sights-box').click(function() {
			window.sessionStorage.setItem('activity', 'site seeing');
			console.log(sessionStorage);
		});

		$('.food-and-drinks .seeAllLink').click(function() {
			window.sessionStorage.setItem('activity', 'hotel');
			console.log(sessionStorage);
		});

		$('#checkin_date, #checkout_date').datepicker({
		  autoSize: true,
		  dateFormat: "dd-mm-yy",
		  minDate: 0,
		  hideIfNoPrevNext: false,
		  showAnim: "slideDown",		  
		});
  		

	
			
	});
</script>


</html>

		
	
         
        
     
 
    		


