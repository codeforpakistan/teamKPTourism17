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
	<div class="survival_container">
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
						  <li><a href="index.php">Home</a></li>
						  <li><a href="discover.php">Discover</a></li>
						  <li class="active"></li>
						</ol>
					</div>
					<!-- ELEVATION AND WEATHER DIV -->				
					<div class="col-sm-6 col-xs-12">
						<div class="col-sm-6 col-xs-12">
							<p class="current-temp"></p>
						</div>
						<div class="col-sm-6 col-xs-12">
							<p class="about_elevation">8202'<br/>Elevation</p>
						</div>
					</div>
				</div>
			</div>

		
		<!-- TOP IMAGE DIV -->
		<div class="row">
			<div class="col-sm-12">	
				<div class="guide_map_image">
					<img id="survival_map" class="img img-responsive " width="100%" src="images/best_time_map.png" />
				</div>
			</div>
		</div>
		<!-- END OF TOP IMAGE DIV -->			

		<!-- STICKY MENU -->
		<div class="row">
			<div class="col-sm-12">
				  <ul class="survival-menu" data-spy="affix" data-offset-top="450">
				    <li class="active"><a href="#best-time-to-go">Best Time to Go</a></li>
				    <li><a href="#visas">Visas</a></li>
				    <li><a href="#health">Health</a></li>
				    <li><a href="#money-and-cost">Money and Cost</a></li>
				  </ul>
			</div>
		</div>
		<!-- END OF STICKY MENU -->	

		<div id="best-time-to-go" class="white_bg horizontal_rule">
			<!-- BEST TIME GUIDE DIV -->
				<!--BEST TIME HEADING DIV -->
			<div class="row">
				<div class="col-xs-12">
				<div class="col-lg-1 col-sm-12"></div>
					<div class="col-lg-10 col-sm-12">
						<div class="row padding horizontal_rule">
							<div class="col-xs-2">
								<img class="img survival-icon" src="images/best-time.png" alt="">
							</div>
							<div class="col-xs-10">
								<h4 class="color-blue top_div_logo_heading text-left"> BEST TIME TO GO</h4>
								<h5 class="color-text text-left">NARAN, KAGHAN VALLEY</h5>
							</div>
						</div>
					</div>
					<div class="col-lg-1 col-sm-12"></div>
				</div>
			</div>

			<!-- CALENDAR DESCRPTION COLOR's DIV -->	
			<div class="row">			
				<div class="col-xs-12">
					<div class="margins">
						<div class="col-lg-1 col-sm-12"></div>
						<!-- COLOR BOXES-->
						<!-- COLOR BOX GRAY -->
						<div class="col-lg-10 col-sm-12">
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
								<div class="col-xs-1">
									<div class="small_box color_box_gray"></div>
								</div>
								<div class="col-xs-10">
									<h5 class="color-text text-left">Shoulder Season</h5>
								</div>
							</div>

							<!-- COLOR BOX BLUE -->
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
								<div class="col-xs-1">
									<div class="small_box color_box_blue"></div>
								</div>
								<div class="col-xs-10">
									<h5 class="color-text text-left">High Season</h5>
								</div>
							</div>

							<!-- COLOR BOX beige -->
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
								<div class="col-xs-1">
									<div class="small_box color_box_beige"></div>
								</div>
								<div class="col-xs-10">
									<h5 class="color-text text-left">Low Season</h5>
								</div>
							</div>
						</div>
						<div class="col-lg-1 col-sm-12"></div>
					</div>
				</div>
			</div>

			<!-- CALENDAR BOXES DIV -->	
			<div class="row">			
				<div class="col-xs-12">
					<div class="margins calendar_div">
						<div class="col-lg-1 col-sm-12"></div>
						<!-- COLOR BOXES-->
						<div class="col-lg-10 col-sm-12">
							<div class="col-lg-1 col-md-2 col-sm-3 col-xs-4">
								<div class="large_box color_box_gray"></div>
								<p class="color-text">Jan</p>
							</div>
							<div class="col-lg-1 col-md-2 col-sm-3 col-xs-4">
								<div class="large_box color_box_gray"></div>
								<p class="color-text">Feb</p>
							</div>
							<div class="col-lg-1 col-md-2 col-sm-3 col-xs-4">
								<div class="large_box color_box_beige"></div>
								<p class="color-text">Mar</p>
							</div>
							<div class="col-lg-1 col-md-2 col-sm-3 col-xs-4">
								<div class="large_box color_box_beige"></div>
								<p class="color-text">Apr</p>
							</div>
							<div class="col-lg-1 col-md-2 col-sm-3 col-xs-4">
								<div class="large_box color_box_beige"></div>
								<p class="color-text">May</p>
							</div>
							<div class="col-lg-1 col-md-2 col-sm-3 col-xs-4">
								<div class="large_box color_box_blue"></div>
								<p class="color-text">Jun</p>
							</div>
							<div class="col-lg-1 col-md-2 col-sm-3 col-xs-4">
								<div class="large_box color_box_blue"></div>
								<p class="color-text">Jul</p>
							</div>
							<div class="col-lg-1 col-md-2 col-sm-3 col-xs-4">
								<div class="large_box color_box_blue"></div>
								<p class="color-text">Aug</p>
							</div>
							<div class="col-lg-1 col-md-2 col-sm-3 col-xs-4">
								<div class="large_box color_box_blue"></div>
								<p class="color-text">Sep</p>
							</div>
							<div class="col-lg-1 col-md-2 col-sm-3 col-xs-4">
								<div class="large_box color_box_beige"></div>
								<p class="color-text">Oct</p>
							</div>
							<div class="col-lg-1 col-md-2 col-sm-3 col-xs-4">
								<div class="large_box color_box_beige"></div>
								<p class="color-text">Nov</p>
							</div>
							<div class="col-lg-1 col-md-2 col-sm-3 col-xs-4">
								<div class="large_box color_box_gray"></div>
								<p class="color-text">Dec</p>
							</div>
						</div>

						<div class="col-lg-1 col-sm-12"></div>
					</div>
				</div>
			</div>

			<!-- VIEW/HDIE BEST TIME DETAILS DIV -->
			<div class="row">
				<div class="col-xs-12">
					<div class="col-lg-1 col-sm-12"></div>
					<div class="col-lg-10 col-sm-12">
						<div class="row margins horizontal_rule">
							<p view="view" details="best_time_details" class="color-text view_details">Hide Details<span class="caret"></span></p>
						</div>
					</div>
					<div class="col-lg-1 col-sm-12"></div>
				</div>
			</div>

			<!-- BEST TIME DETAILS DIV -->
			<div id="best_time_details" class="row">
				<div class="col-xs-12">
					<div class="col-lg-1 col-sm-12"></div>
					<div class="col-lg-10 col-sm-12">
							<h4 class="color-text">Height Season(JUN-SEP)</h4>
							<ul class="margins zeropadding">
								<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</li>
								<li>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
								<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</li>
								<li>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
								<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</li>
								<li>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
							</ul>
							<h4 class="color-text">Shoulder Season(DEC-FEB)</h4>
							<ul class="margins zeropadding">
								<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</li>
								<li>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
								<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</li>
							</ul>
							<h4 class="color-text">Height Season(MAR-MAY)</h4>
							<ul class="margins zeropadding">
								<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</li>
								<li>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
								<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</li>
								<li>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
								<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</li>
							</ul>
					</div>
					<div class="col-lg-1 col-sm-12"></div>
				</div>
			</div>
		</div>

		<!-- END OF BEST TIME -->

		<!-- START OF VISAS -->
		<div id="visas" class="horizontal_rule">
			<!-- VISAS HEADIND DIV -->
			<div class="row">
				<div class="col-xs-12">
				<div class="col-lg-1 col-sm-12"></div>
					<div class="col-lg-10 col-sm-12">
						<div class="row padding">
							<div class="col-xs-2">
								<img class="img img-responsive survival-icon" src="images/visas.png" alt="">
							</div>
							<div class="col-xs-10">
								<h4 class="color-blue top_div_logo_heading text-left"> VISAS</h4>
								<h5 class="color-text text-left">HOW TO GET YOUR VISAS </h5>
							</div>
						</div>
					</div>
					<div class="col-lg-1 col-sm-12"></div>
				</div>
			</div>
			<!-- VIEW/HIDE VISAS DETAILS DIV 
			<div class="row">
				<div class="col-xs-12">
					<div class="col-lg-1 col-sm-12"></div>
					<div class="col-lg-10 col-sm-12">
						<div class="row margins horizontal_rule">
							<p view="view" details="visas_details" class="color-text view_details">Hide Details<span class="caret"></span></p>
						</div>
					</div>
					<div class="col-lg-1 col-sm-12"></div>
				</div>
			</div>						-->
			<!-- VISAS DETAILS DIV -->
			<div id="visas_details" class="row">
				<div class="col-xs-12">
					<div class="col-lg-1 col-sm-12"></div>
					<div class="col-lg-10 col-sm-12">
						<h4 class="color-text">Visa Details</h4>
						<ul class="margins zeropadding">
							<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</li>
							<li>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
							<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</li>
							<li>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
							<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</li>
							<li>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
						</ul>						
					</div>
					<div class="col-lg-1 col-sm-12"></div>
				</div>
			</div>
		</div>
		<!-- END OF VISAS -->

		<!-- START OF HEALTH -->
		<div id="health" class="gray_bg horizontal_rule">
			<!-- HEALTH HEADIND DIV -->
			<div class="row">
				<div class="col-xs-12">
				<div class="col-lg-1 col-sm-12"></div>
					<div class="col-lg-10 col-sm-12">
						<div class="row padding">
							<div class="col-xs-2">
								<img class="img img-responsive survival-icon" src="images/health.png" alt="">
							</div>
							<div class="col-xs-10">
								<h4 class="color-blue top_div_logo_heading text-left">HEALTH</h4>
								<h5 class="color-text text-left">GET LOCATIONS OF NEARBY HEALTH FACILITIES</h5>
							</div>
						</div>
					</div>
					<div class="col-lg-1 col-sm-12"></div>
				</div>
			</div>
			<!-- VIEW/HIDE HEALTH DETAILS DIV 
			<div class="row">
				<div class="col-xs-12">
					<div class="col-lg-push-1 col-lg-10 col-lg-pull-2 col-sm-12">
						<div class="row margins horizontal_rule">
							<p view="view" details="health_details" class="color-text view_details">Hide Details<span class="caret"></span></p>
						</div>
					</div>
				</div>
			</div>			-->
			<!-- HEALTH DETAILS DIV -->
			<div id="health_details" class="row">
				<div class="col-xs-12">
					<div class="col-lg-1 col-sm-12"></div>
					<div class="col-lg-10 col-sm-12">
						<h4 class="color-text">Emergency Services Details</h4>
						<ul class="margins zeropadding">
							<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</li>
							<li>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
							<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</li>
							<li>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
							<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</li>
							<li>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
						</ul>						
					</div>
					<div class="col-lg-1 col-sm-12"></div>
				</div>
			</div>
		</div>
		<!-- END OF HEALTH -->

		<!-- START OF MONEY AND COSTS -->
		<div id="money-and-cost" class="horizontal_rule white_bg">
			<!-- MONEY AND COSTS HEADIND DIV -->
			<div class="row">
				<div class="col-xs-12">
				<div class="col-lg-1 col-sm-12"></div>
					<div class="col-lg-10 col-sm-12">
						<div class="row padding">
							<div class="col-xs-2">
								<img class="img img-responsive survival-icon" src="images/money-and-costs.png" alt="">
							</div>
							<div class="col-xs-10">
								<h4 class="color-blue top_div_logo_heading text-left">MONEY AND COSTS</h4>
								<h5 class="color-text text-left">NARAN, KAGHAN VALLEY</h5>
							</div>
						</div>
					</div>
					<div class="col-lg-1 col-sm-12"></div>
				</div>
			</div>
			<!-- VIEW/HIDE MONEY AND COSTS DETAILS DIV
			<div class="row">
				<div class="col-xs-12">
					<div class="col-lg-1 col-sm-12"></div>
					<div class="col-lg-10 col-sm-12">
						<div class="margins horizontal_rule">
							<p view="view" details="costs_details" class="color-text view_details">Hide Details<span class="caret"></span></p>
						</div>
					</div>
					<div class="col-lg-1 col-sm-12"></div>
				</div>
			</div>     			 -->
			<!-- MONEY AND COSTS DETAILS DIV -->
			<div id="costs_details" class="row">
				<div class="col-xs-12">
					<div class="col-lg-1 col-sm-12"></div>
					<div class="col-lg-10 col-sm-12">
						<h5 class="color-teal">CURRENCY</h5>
						<h3 class="color-text">PAKISTANI RUPEE(PKR)</h3>
						<div class="col-lg-12">
							<div class="row">
								<div class="margins zeropadding vertical_rule">
									<!-- FIRST DIV -->
									<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
										<div class="row">
											<h5 class="color-teal capitalize">DAILY COST</h5>
											<h5 class="color-text capitalize">LOW END</h5>
											<h4 class="color-blue capitalize padding">1500 PKR</h4>
											<p>You'll get</p>
											<ul class="margins daily-cost-list">
												<li>Lorem ipsum dolor sit amet, consectetur</li>
												<li>sed do eiusmod tempor</li>
												<li>Lorem ipsum dolor sit amet,</li>
												<li>sed do eiusmod tempor</li>
												<li>Lorem ipsum dolor</li>
											</ul>
										</div>	
									</div>
									<!-- SECOND DIV -->
									<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
										<div class="row">
											<h5 class="color-green capitalize">DAILY COST</h5>
											<h5 class="color-text capitalize">MID RANGE</h5>
											<h4 class="color-blue capitalize padding">1800-3000 PKR</h4>
											<p>You'll get</p>
											<ul class="margins daily-cost-list">
												<li>Lorem ipsum dolor sit amet, consectetur</li>
												<li>sed do eiusmod tempor</li>
												<li>Lorem ipsum dolor sit amet,</li>
												<li>sed do eiusmod tempor</li>
												<li>Lorem ipsum dolor</li>
											</ul>
										</div>
									</div>
									<!-- THIRD DIV -->
									<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
										<div class="row">
											<h5 class="color-red capitalize">DAILY COST</h5>
											<h5 class="color-text capitalize">HIGH END(LUXURY)</h5>
											<h4 class="color-blue capitalize padding">3500-5000 PKR</h4>
											<p>You'll get</p>
											<ul class="margins daily-cost-list">
												<li>Lorem ipsum dolor sit amet, consectetur</li>
												<li>sed do eiusmod tempor</li>
												<li>Lorem ipsum dolor sit amet,</li>
												<li>sed do eiusmod tempor</li>
												<li>Lorem ipsum dolor</li>
											</ul>
										</div>	
									</div>				
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-1 col-sm-12"></div>
				</div>
			</div>
			<!-- EXTRA INFO DIVS -->
			<div class="row">
				<div class="margins">
					<div class="col-sm-12">
						<div class="col-sm-1"></div>
						<div class="col-sm-10">
							<p class="color-text">ATM's are not widely used, always carry cash</p>
						</div>
						<div class="col-sm-1"></div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="margins">
					<div class="col-sm-12">
						<div class="col-sm-1"></div>
						<div class="col-sm-10">
							<h5 class="color-teal capitalize">THINGS TO REMEMBER</h5>
							<ul class="costs_list">
								<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</li>
								<li>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
								<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</li>
								<li>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
								<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</li>
								<li>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
							</ul>
						</div>
						<div class="col-sm-1"></div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12">
					<div class="col-lg-8 col-sm-12"></div>
					<div class="col-lg-4 col-sm-12">
						<div class="margins">
							<div class="col-xs-6">
								<span class="caret"></span>
								<p class="color-text">Print</p>						
							</div>
							<div class="col-xs-6">
								<span class="caret"></span>
								<p class="color-text">Email</p>						
							</div>
						</div>
					</div>
				</div>
			</div>
		<!-- END OF MONEY AND COSTS -->

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

</body>

<script type="text/javascript" src="js/jquery.min.js" ></script>
<script type="text/javascript" src="js/bootstrap.min.js" ></script>
<script type="text/javascript">
	$(document).ready(function(){
		//show selected area in breadcrumb
		$('.breadcrumb .active').html(window.sessionStorage.getItem('region'));
		//current temperature 
		var temp = api.openweathermap.org/data/2.5/weather?lat=35&lon=139&APPID=eefd513f3a11f3652be8d3ff855f3293;
		//$('.current-temp').html(main[temp]);
		console.log(temp);
		//view/hide details 
		$('.view_details').click(function(){
			var view = $(this).attr('view');
			var details = $(this).attr('details');
			if(view=='view') {
				$(this).attr('view','hide');
				$(this).html('View details<span class="caret"></span>');
				$('#'+details).hide();
			}
			else if(view=='hide') {
				$(this).attr('view','view');
				$(this).html('Hide details<span class="caret"></span>');
				$('#'+details).show();
			}
		});			
	});
</script>

</html>