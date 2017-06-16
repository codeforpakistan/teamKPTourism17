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
			<div class="row top_div">
				<div class="col-sm-12">	
					<!-- LOGO DIV -->
					<div class="col-lg-6 col-sm-5 col-xs-3">
						<div class="col-sm-2 col-xs-9">
							<img class="img logo" src="images/logo.png" alt="">
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
					<a class="left slide-left carousel-control" href="#top-slider" role="button" data-slide="prev">
						<i class="fa fa-angle-left"></i>
					</a>
					<a  class="right slide-right carousel-control" href="#top-slider" role="button" data-slide="next">
						<i class="fa fa-angle-right"></i>
			        </a>
				</div>
			</div>
		</div>

		<!-- REGIONS SORT AND REGIONS DISPALY DIV -->
		<div class="regions-wrapper margins">
			<div class="container">	
				<!-- REGIONS SORT DIV -->
				<div class="row">
					<div class="col-sm-push-4 col-sm-4 col-sm-pull-4 text-center">
						<h3 class="color-text sort-heading">Best in KP</h3>
						<h5 class="color-blue sort-description">Choose an activity to explore</h5>
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
				<!-- END OF REGIONS SORT DIV -->

				<!-- REGIONS DISPLAY DIV -->
				<div class="row famous-regions">
					<!-- Regions -->
					<div class="col-lg-12">
						<div id="famous-regions">
						<!-- SWAT dIV -->
						<div class="col-lg-4 col-sm-6 col-xs-12 text-center">
							<div class="zoom">
								<div class="famous_regions_div region-1">
									<img class="img img-responsive image_normal auto-margin" src="images/swat.png" data-pin-nopin="true">
									<img class="img img-responsive image_hover auto-margin" src="images/swat-hover.png">	
									<div class="has-feedback">										
										<a id="swat" class="region-select" href="details.php">
											<h2 class="color-text">Swat</h2>
											<p class="region-description color-text">KHYBER PAKHTUNKHWA</p>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
											<button class="btn btn-primary auto-margin">EXPLORE</button>
										</a>
									</div>
								</div>
							</div>
						</div>

						<!-- NARAN dIV -->
						<div class="col-lg-4 col-sm-6 col-xs-12 text-center">
							<div class="zoom">
								<div class="famous_regions_div region-2">
									<img width="60%" height="auto" class="img img-responsive image_normal auto-margin" src="images/naran.png" data-pin-nopin="true">
									<img width="60%" height="auto" class="img img-responsive image_hover auto-margin" src="images/naran-hover.png">	
									<div class="has-feedback">
										<a id="naran" class="region-select" href="details.php">
											<h2 class="color-text">Naran</h2>
											<p class="region-description color-text">KHYBER PAKHTUNKHWA</p>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
											<button class="btn btn-primary auto-margin">EXPLORE</button>
										</a>
									</div>
								</div>
							</div>
						</div>		

						<!-- CHITRAL dIV -->
						<div class="col-lg-4 col-sm-6 col-xs-12 text-center">
							<div class="zoom">
								<div class="famous_regions_div region-3">
									<img class="img img-responsive image_normal auto-margin" src="images/chitral.png" data-pin-nopin="true">
									<img class="img img-responsive image_hover auto-margin" src="images/chitral-hover.png">	
									<div class="has-feedback">
										<a id="chitral" class="region-select" href="details.php">
											<h2 class="color-text">Chitral</h2>
											<p class="region-description color-text">KHYBER PAKHTUNKHWA</p>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
											<button class="btn btn-primary auto-margin">EXPLORE</button>
										</a>
									</div>
								</div>
							</div>
						</div>

						<!-- ABBOTTABAD dIV -->
						<div class="col-lg-4 col-sm-6 col-xs-12 text-center">
							<div class="zoom">
								<div class="famous_regions_div region-4">
									<img class="img img-responsive image_normal auto-margin" src="images/abottabad.png" data-pin-nopin="true">
									<img class="img img-responsive image_hover auto-margin" src="images/abottabad-hover.png">	
									<div class="has-feedback">
										<a id="abbottabad" class="region-select" href="details.php">
											<h2 class="color-text">Abbottabad</h2>
											<p class="region-description color-text">KHYBER PAKHTUNKHWA</p>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
											<button class="btn btn-primary auto-margin">EXPLORE</button>
										</a>
									</div>
								</div>
							</div>
						</div>

						<!-- KALAM dIV -->
						<div class="col-lg-4 col-sm-6 col-xs-12 text-center">
							<div class="zoom">
								<div class="famous_regions_div region-5">
									<img class="img img-responsive image_normal auto-margin" src="images/kalam.png" data-pin-nopin="true">
									<img class="img img-responsive image_hover auto-margin" src="images/kalam-hover.png">	
									<div class="has-feedback">
										<a id="kalam" class="region-select" href="details.php">
											<h2 class="color-text">Kalam</h2>
											<p class="region-description color-text">KHYBER PAKHTUNKHWA</p>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
											<button class="btn btn-primary auto-margin">EXPLORE</button>
										</a>
									</div>
								</div>
							</div>
						</div>			

						<!-- PALCE dIV -->
						<div class="col-lg-4 col-sm-6 col-xs-12 text-center">
							<div class="zoom">
								<div class="famous_regions_div region-6">
									<img class="img img-responsive image_normal auto-margin" src="images/swat.png" data-pin-nopin="true">
									<img class="img img-responsive image_hover auto-margin" src="images/swat-hover.png">	
									<div class="has-feedback">
										<a id="peshawar" class="region-select" href="details.php">
											<h2 class="color-text">Peshawar</h2>
											<p class="region-description color-text">KHYBER PAKHTUNKHWA</p>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
											<button class="btn btn-primary auto-margin">EXPLORE</button>
										</a>
									</div>
								</div>
							</div>
						</div>

						<!-- DI KHAN dIV -->
						<div class="col-lg-4 col-sm-6 col-xs-12 text-center">
							<div class="zoom">
								<div class="famous_regions_div region-7">
									<img class="img img-responsive image_normal auto-margin" src="images/abottabad.png" data-pin-nopin="true">
									<img class="img img-responsive image_hover auto-margin" src="images/abottabad-hover.png">	
									<div class="has-feedback">
										<a id="DIKhan" class="region-select" href="details.php">
											<h2 class="color-text">Dera Ismail Khan</h2>
											<p class="region-description color-text">KHYBER PAKHTUNKHWA</p>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
											<button class="btn btn-primary auto-margin">EXPLORE</button>
										</a>
									</div>
								</div>
							</div>
						</div>

						<!-- KOHISTAN dIV -->
						<div class="col-lg-4 col-sm-6 col-xs-12 text-center">
							<div class="zoom">
								<div class="famous_regions_div region-8">
									<img class="img img-responsive image_normal auto-margin" src="images/kalam.png" data-pin-nopin="true">
									<img class="img img-responsive image_hover auto-margin" src="images/kalam-hover.png">	
									<div class="has-feedback">
										<a id="kohistan" class="region-select" href="details.php">
											<h2 class="color-text">Kohistan</h2>
											<p class="region-description color-text">KHYBER PAKHTUNKHWA</p>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
											<button class="btn btn-primary auto-margin">EXPLORE</button>
										</a>
									</div>
								</div>
							</div>
						</div>	

						<div class="col-lg-4 col-sm-6 col-xs-12 text-center">
							<div class="zoom">
								<div class="famous_regions_div region-9">
									<img width="60%" height="auto" class="img img-responsive image_normal auto-margin" src="images/naran.png" data-pin-nopin="true">
									<img width="60%" height="auto" class="img img-responsive image_hover auto-margin" src="images/naran-hover.png">	
									<div class="has-feedback">
										<a id="naran" class="region-select" href="details.php">
											<h2 class="color-text">Naran</h2>
											<p class="region-description color-text">KHYBER PAKHTUNKHWA</p>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
											<button class="btn btn-primary auto-margin">EXPLORE</button>
										</a>
									</div>
								</div>
							</div>
						</div>		

						<!-- CHITRAL dIV -->
						<div class="col-lg-4 col-sm-6 col-xs-12 text-center">
							<div class="zoom">
								<div class="famous_regions_div region-10">
									<img class="img img-responsive image_normal auto-margin" src="images/chitral.png" data-pin-nopin="true">
									<img class="img img-responsive image_hover auto-margin" src="images/chitral-hover.png">	
									<div class="has-feedback">
										<a id="chitral" class="region-select" href="details.php">
											<h2 class="color-text">Chitral</h2>
											<p class="region-description color-text">KHYBER PAKHTUNKHWA</p>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
											<button class="btn btn-primary auto-margin">EXPLORE</button>
										</a>
									</div>
								</div>
							</div>
						</div>

						<!-- ABBOTTABAD dIV -->
						<div class="col-lg-4 col-sm-6 col-xs-12 text-center">
							<div class="zoom">
								<div class="famous_regions_div region-11">
									<img class="img img-responsive image_normal auto-margin" src="images/abottabad.png" data-pin-nopin="true">
									<img class="img img-responsive image_hover auto-margin" src="images/abottabad-hover.png">	
									<div class="has-feedback">
										<a id="abbottabad" class="region-select" href="details.php">
											<h2 class="color-text">Abbottabad</h2>
											<p class="region-description color-text">KHYBER PAKHTUNKHWA</p>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
											<button class="btn btn-primary auto-margin">EXPLORE</button>
										</a>
									</div>
								</div>
							</div>
						</div>

						<!-- KALAM dIV -->
						<div class="col-lg-4 col-sm-6 col-xs-12 text-center">
							<div class="zoom">
								<div class="famous_regions_div region-12">
									<img class="img img-responsive image_normal auto-margin" src="images/kalam.png" data-pin-nopin="true">
									<img class="img img-responsive image_hover auto-margin" src="images/kalam-hover.png">	
									<div class="has-feedback">
										<a id="kalam" class="region-select" href="details.php">
											<h2 class="color-text">Kalam</h2>
											<p class="region-description color-text">KHYBER PAKHTUNKHWA</p>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
											<button class="btn btn-primary auto-margin">EXPLORE</button>
										</a>
									</div>
								</div>
							</div>
						</div>			

						<!-- PALCE dIV -->
						<div class="col-lg-4 col-sm-6 col-xs-12 text-center">
							<div class="zoom">
								<div class="famous_regions_div region-13">
									<img class="img img-responsive image_normal auto-margin" src="images/swat.png" data-pin-nopin="true">
									<img class="img img-responsive image_hover auto-margin" src="images/swat-hover.png">	
									<div class="has-feedback">
										<a id="peshawar" class="region-select" href="details.php">
											<h2 class="color-text">Peshawar</h2>
											<p class="region-description color-text">KHYBER PAKHTUNKHWA</p>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
											<button class="btn btn-primary auto-margin">EXPLORE</button>
										</a>
									</div>
								</div>
							</div>
						</div>

						<!-- DI KHAN dIV -->
						<div class="col-lg-4 col-sm-6 col-xs-12 text-center">
							<div class="zoom">
								<div class="famous_regions_div region-14">
									<img class="img img-responsive image_normal auto-margin" src="images/abottabad.png" data-pin-nopin="true">
									<img class="img img-responsive image_hover auto-margin" src="images/abottabad-hover.png">	
									<div class="has-feedback">
										<a id="DIKhan" class="region-select" href="details.php">
											<h2 class="color-text">Dera Ismail Khan</h2>
											<p class="region-description color-text">KHYBER PAKHTUNKHWA</p>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
											<button class="btn btn-primary auto-margin">EXPLORE</button>
										</a>
									</div>
								</div>
							</div>
						</div>

						<!-- KOHISTAN dIV -->
						<div class="col-lg-4 col-sm-6 col-xs-12 text-center">
							<div class="zoom">
								<div class="famous_regions_div region-15">
									<img class="img img-responsive image_normal auto-margin" src="images/kalam.png" data-pin-nopin="true">
									<img class="img img-responsive image_hover auto-margin" src="images/kalam-hover.png">	
									<div class="has-feedback">
										<a id="kohistan" class="region-select" href="details.php">
											<h2 class="color-text">Kohistan</h2>
											<p class="region-description color-text">KHYBER PAKHTUNKHWA</p>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
											<button class="btn btn-primary auto-margin">EXPLORE</button>
										</a>
									</div>
								</div>
							</div>
						</div>	
					</div>
					</div>
					<!-- End of Regions -->
				</div>
				<!-- END OF REGIONS DISPLAY DIV -->
			</div>
		</div>
		<!-- END OF REGIONS SORT AND REGIONS DISPALY DIV -->

		<!-- SEARCH ROW -->
		<div class="container-fluid">
			<div class="row">
				<div class="discover-search">
					<div class="container">
						<!-- SEARCH FORM -->
						<div class="col-sm-4 col-xs-12">
							<div class="search-banner-text">				
								<h2 class="color-white">PLAN YOUR TRIP IN KP</h2>
							</div>
						</div>
						<div class="col-sm-4 col-xs-12"></div>
						<div class="col-sm-4 col-xs-12 text-right">
							<div class="search-banner-form">
						    	<form class="search" action="search.php">
										<div class="form-group col-xs-12">
										      	<select class="form-control search_select" id="sel1" name="sel1">
										          <option>Ketchup</option>
										          <option>Relish</option>
										          <option>Mustard</option>
										          <option>Tent</option>
										          <option>Flashlight</option>
										          <option>Toilet Paper</option>
										      	</select>
										</div>
										<div class="form-group col-xs-12">
										      	<select class="form-control search_select" id="sel2" name="sel2">
										          <option>Mustard</option>
										          <option>Ketchup</option>
										          <option>Relish</option>
										          <option>Tent</option>
										          <option>Flashlight</option>
										          <option>Toilet Paper</option>
										      	</select>
									    </div>
									    <div class="form-group col-xs-12">
										      	<select class="form-control search_select" id="sel3" name="sel3">
										          <option>Tent</option>
										          <option>Flashlight</option>
										          <option>Mustard</option>
										          <option>Ketchup</option>
										          <option>Relish</option>
										          <option>Toilet Paper</option>
										      	</select>
									    </div>								    
									    <div class="form-group col-xs-12 text-right">
										    <input type="submit" value="Submit" class="btn btn-info">
										</div>
								</form>
							</div>
						</div>
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
						<h2 class="text-center">Other Places To Discover</h2>
						<h4 class="text-center color-blue">Discover all other beautiful regions of KP</h4>
						<!-- SEARCH FORM -->	
						<form class="discover-events-form" action="" method="">
							<input class="form-group input-group-lg searchbox"  type="text" name="search" placeholder="Search">
							<select class="form-control input-group-lg" name="region_selection_sort" id="region_selection_sort">
							    <option class="selectoptions">By Name</option>	
							    <option class="selectoptions">Popularity</option>					    
								<optgroup label="Weather">	
									<option class="selectoptions">Colder First</option>
									<option class="selectoptions">Moderate First</option>
									<option class="selectoptions">Warmer First</option>
							    </optgroup>
							</select>
						</form>
							<!-- LEFT CONTAINER DIV -->
						<div id="activities-div" class="col-lg-12">
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
								<div id="activity-1" class="other_activities_box">
									<a href="details.php">
										<!-- LEFT IMAGE DIV -->
										<div class="col-xs-6">
											<img class="img" src="images/sample_image _4.png" />
										</div>	
										<!-- LEFT TEXT DIV -->
										<div class="col-xs-6">
											<h4 class="color-black">Tank</h4>
											<p class="color">DI Khan, KP</p>
										</div>
									</a>
								</div>	
							</div>

							<!-- CENTERAL CONTAINER DIV -->
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
								<div id="activity-2" class="other_activities_box">
									<a href="details.php">
										<!-- LEFT IMAGE DIV -->
										<div class="col-xs-6">
											<img class="img" src="images/sample_image_2.png" />
										</div>	
										<!-- LEFT TEXT DIV -->
										<div class="col-xs-6">
											<h4 class="color-black">Peshawar</h4>
											<p class="color">Peshawar, KP</p>
										</div>
									</a>
								</div>	
							</div>

							<!-- RIGHT CONTAINER DIV -->
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
								<div id="activity-3" class="other_activities_box">
									<a href="details.php">
										<!-- LEFT IMAGE DIV -->
										<div class="col-xs-6">
											<img class="img" src="images/img_2.jpg" />
										</div>	
										<!-- LEFT TEXT DIV -->
										<div class="col-xs-6">
											<h4 class="color-black">Swabi</h4>
											<p class="color">Swabi, KP</p>
										</div>
									</a>
								</div>	
							</div>
						
							<!-- LEFT CONTAINER DIV -->
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
								<div id="activity-4" class="other_activities_box">
									<a href="details.php">
										<!-- LEFT IMAGE DIV -->
										<div class="col-xs-6">
											<img class="img" src="images/img_2.jpg" />
										</div>	
										<!-- LEFT TEXT DIV -->
										<div class="col-xs-6">
											<h4 class="color-black">Mardan</h4>
											<p class="color">Mardan, KP</p>
										</div>
									</a>
								</div>	
							</div>

							<!-- CENTERAL CONTAINER DIV -->
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
								<div id="activity-5" class="other_activities_box">
									<a href="details.php">
										<!-- LEFT IMAGE DIV -->
										<div class="col-xs-6">
											<img class="img" src="images/img_3.jpg" />
										</div>	
										<!-- LEFT TEXT DIV -->
										<div class="col-xs-6">
											<h4 class="color-black">Nowshera</h4>
											<p class="color">Nowshera, KP</p>
										</div>
									</a>
								</div>	
							</div>

							<!-- RIGHT CONTAINER DIV -->
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
								<div id="activity-6" class="other_activities_box">
									<a href="details.php">
										<!-- LEFT IMAGE DIV -->
										<div class="col-xs-6">
											<img class="img" src="images/img_4.jpg" />
										</div>	
										<!-- LEFT TEXT DIV -->
										<div class="col-xs-6">
											<h4 class="color-black">Charsadda</h4>
											<p class="color">Charsadda, KP</p>
										</div>
									</a>
								</div>	
							</div>

							<!-- LEFT CONTAINER DIV -->
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
								<div id="activity-7" class="other_activities_box">
									<a href="details.php">
										<!-- LEFT IMAGE DIV -->
										<div class="col-xs-6">
											<img class="img" src="images/img_2.jpg" />
										</div>	
										<!-- LEFT TEXT DIV -->
										<div class="col-xs-6">
											<h4 class="color-black">Mansehra</h4>
											<p class="color">Mansehra, KP</p>
										</div>
									</a>
								</div>	
							</div>

							<!-- CENTERAL CONTAINER DIV -->
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
								<div id="activity-8" class="other_activities_box">
									<a href="details.php">
										<!-- LEFT IMAGE DIV -->
										<div class="col-xs-6">
											<img class="img" src="images/img_3.jpg" />
										</div>	
										<!-- LEFT TEXT DIV -->
										<div class="col-xs-6">
											<h4 class="color-black">Kaghan</h4>
											<p class="color">Mansehra, KP</p>
										</div>
									</a>
								</div>	
							</div>

							<!-- RIGHT CONTAINER DIV -->
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
								<div id="activity-9" class="other_activities_box">
									<a href="details.php">
										<!-- LEFT IMAGE DIV -->
										<div class="col-xs-6">
											<img class="img" src="images/img_4.jpg" />
										</div>	
										<!-- LEFT TEXT DIV -->
										<div class="col-xs-6">
											<h4 class="color-black">Naran</h4>
											<p class="color">Mansehra, KP</p>
										</div>
									</a>
								</div>	
							</div>

							<!-- LEFT CONTAINER DIV -->
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
								<div id="activity-10" class="other_activities_box">
									<a href="details.php">
										<!-- LEFT IMAGE DIV -->
										<div class="col-xs-6">
											<img class="img" src="images/img_2.jpg" />
										</div>	
										<!-- LEFT TEXT DIV -->
										<div class="col-xs-6">
											<h4 class="color-black">Dasu</h4>
											<p class="color">Upper Kohistan, KP</p>
										</div>
									</a>
								</div>	
							</div>

							<!-- CENTERAL CONTAINER DIV -->
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
								<div id="activity-11" class="other_activities_box">
									<a href="details.php">
										<!-- LEFT IMAGE DIV -->
										<div class="col-xs-6">
											<img class="img" src="images/img_3.jpg" />
										</div>	
										<!-- LEFT TEXT DIV -->
										<div class="col-xs-6">
											<h4 class="color-black">Batkhela</h4>
											<p class="color">Malakand, KP</p>
										</div>
									</a>
								</div>	
							</div>

							<!-- RIGHT CONTAINER DIV -->
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
								<div id="activity-12" class="other_activities_box">
									<a href="details.php">
										<!-- LEFT IMAGE DIV -->
										<div class="col-xs-6">
											<img class="img" src="images/img_4.jpg" />
										</div>	
										<!-- LEFT TEXT DIV -->
										<div class="col-xs-6">
											<h4 class="color-black">Saidu Sharif</h4>
											<p class="color">Swat, KP</p>
										</div>
									</a>
								</div>	
							</div>

							<!-- LEFT CONTAINER DIV -->
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
								<div id="activity-13" class="other_activities_box">
									<a href="details.php">
										<!-- LEFT IMAGE DIV -->
										<div class="col-xs-6">
											<img class="img" src="images/sample_image _4.png" />
										</div>	
										<!-- LEFT TEXT DIV -->
										<div class="col-xs-6">
											<h4 class="color-black">Pattan</h4>
											<p class="color">Lower Kohistan, KP</p>
										</div>
									</a>
								</div>	
							</div>

							<!-- CENTERAL CONTAINER DIV -->
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
								<div id="activity-14" class="other_activities_box">
									<a href="details.php">
										<!-- LEFT IMAGE DIV -->
										<div class="col-xs-6">
											<img class="img" src="images/sample_image_2.png" />
										</div>	
										<!-- LEFT TEXT DIV -->
										<div class="col-xs-6">
											<h4 class="color-black">Bannu</h4>
											<p class="color">Bannu, KP</p>
										</div>
									</a>
								</div>	
							</div>

							<!-- RIGHT CONTAINER DIV -->
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
								<div id="activity-15" class="other_activities_box">
									<a href="details.php">
										<!-- LEFT IMAGE DIV -->
										<div class="col-xs-6">
											<img class="img" src="images/img_2.jpg" />
										</div>	
										<!-- LEFT TEXT DIV -->
										<div class="col-xs-6">
											<h4 class="color-black">Battagram</h4>
											<p class="color">Battagram, KP</p>
										</div>
									</a>
								</div>	
							</div>

							<!-- LEFT CONTAINER DIV -->
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
								<div id="activity-16" class="other_activities_box">
									<a href="details.php">
										<!-- LEFT IMAGE DIV -->
										<div class="col-xs-6">
											<img class="img" src="images/img_2.jpg" />
										</div>	
										<!-- LEFT TEXT DIV -->
										<div class="col-xs-6">
											<h4 class="color-black">Haripur</h4>
											<p class="color">Haripur, KP</p>
										</div>
									</a>
								</div>	
							</div>

							<!-- CENTERAL CONTAINER DIV -->
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
								<div id="activity-17" class="other_activities_box">
									<a href="details.php">
										<!-- LEFT IMAGE DIV -->
										<div class="col-xs-6">
											<img class="img" src="images/img_3.jpg" />
										</div>	
										<!-- LEFT TEXT DIV -->
										<div class="col-xs-6">
											<h4 class="color-black">Kohat</h4>
											<p class="color">Kohat, KP</p>
										</div>
									</a>
								</div>	
							</div>

							<!-- RIGHT CONTAINER DIV -->
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
								<div id="activity-18" class="other_activities_box">
									<a href="details.php">
										<!-- LEFT IMAGE DIV -->
										<div class="col-xs-6">
											<img class="img" src="images/img_4.jpg" />
										</div>	
										<!-- LEFT TEXT DIV -->
										<div class="col-xs-6">
											<h4 class="color-black">Lakki Marwat</h4>
											<p class="color">Lakki Marwat, KP</p>
										</div>
									</a>
								</div>	
							</div>

							<!-- LEFT CONTAINER DIV -->
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
								<div id="activity-19" class="other_activities_box">
									<a href="details.php">
										<!-- LEFT IMAGE DIV -->
										<div class="col-xs-6">
											<img class="img" src="images/sample_image _4.png" />
										</div>	
										<!-- LEFT TEXT DIV -->
										<div class="col-xs-6">
											<h4 class="color-black">Timergara</h4>
											<p class="color">Lower Dir, KP</p>
										</div>
									</a>
								</div>	
							</div>

							<!-- CENTERAL CONTAINER DIV -->
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
								<div id="activity-20" class="other_activities_box">
									<a href="details.php">
										<!-- LEFT IMAGE DIV -->
										<div class="col-xs-6">
											<img class="img" src="images/sample_image_2.png" />
										</div>	
										<!-- LEFT TEXT DIV -->
										<div class="col-xs-6">
											<h4 class="color">Alpuri</h4>
											<p class="color">Shangla, KP</p>
										</div>
									</a>
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
<script src="js/jquery.snippet.min.js"></script>
<script src="js/jquery.easyPaginate.js"></script>
<script src="js/scripts.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
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

	    /*RESET FORM ACTION
	    $('.glyphicon-remove').click(function(){
			$('.search')[0].reset();
		});
*/

	    pagination();
		function pagination() {			
			//OTHER REGIONS PAGINATION 
			if ($(window).width() > 768){
				//OTHER REGIONS PAGINATION 
				$('#activities-div').easyPaginate({
				    paginateElement: 'div.col-lg-4.col-md-4.col-sm-6.col-xs-12',
				    elementsPerPage: 9,
				    effect: 'fade'
				});
				//FAMOUS REGIONS PAGINATION 
				$('#famous-regions').easyPaginate({
				    paginateElement: 'div.col-lg-4.col-sm-6.col-xs-12',
				    elementsPerPage: 6,
				    effect: 'fade'
				});
			}
			if ($(window).width() <= 768){
				//OTHER REGIONS PAGINATION 
				$('#activities-div').easyPaginate({
				    paginateElement: 'div.col-lg-4.col-md-4.col-sm-6.col-xs-12',
				    elementsPerPage: 3,
				    effect: 'climb'
				});
				//FAMOUS REGIONS PAGINATION 
				$('#famous-regions').easyPaginate({
				    paginateElement: 'div.col-lg-4.col-sm-6.col-xs-12',
				    elementsPerPage: 1,
				    effect: 'climb'
				});
			}

			$('.famous-regions .next').html('<i class="fa fa-angle-right"></i>');
			$('.famous-regions .prev').html('<i class="fa fa-angle-left"></i>');
		}

		//CHANGE PAGINATION STYLE ON CHANGE IN SCREEN SIZE
		$( window ).resize(function() {
			pagination();
		}); 

		$('.famous-regions .prev').hide();
		var lastID = $('.famous-regions .last').attr('href'); 
		var firstID = $('.famous-regions .first').attr('href');

		$('.famous-regions .prev').click(function() {
			$('.famous-regions .next').show();
			if(($(".famous-regions .page[href='"+firstID+"']").attr("class")) == 'page current') { 
				$('.famous-regions .prev').hide(); 
			}
			else {
				$('.famous-regions .prev').show();
			}
		});

		$('.famous-regions .next').click(function() {
			$('.famous-regions .prev').show();
			if(($(".famous-regions .page[href='"+lastID+"']").attr("class")) == 'page current') {
		    	$('.famous-regions .next').hide(); 
			}
			else {
				$('.famous-regions .next').show();
			}
		});

		//Get Selected Area
		$('.has-feedback a.region-select').click(function() {
			window.sessionStorage.setItem('region', $(this).attr('id'));
			console.log(sessionStorage);
		});
	});
</script>


</html>

		
			