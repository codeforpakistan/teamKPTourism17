<body class="white_bg">

	<div class="container">
		<!-- TOP LOGO AND MENU DIV -->
		<div class="row">
			<div class="col-sm-12">	
				<div class="row margins top_div">
					<!-- LOGO DIV -->
					<div class="col-lg-6 col-sm-5 col-xs-3">
						<div class="col-sm-3 col-xs-9">
							<img class="img img-responsive logo" src="images/user/logo.png" alt="">
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
						  <li><a href="#">Home</a></li>
						  <li><a href="#">Discover</a></li>
						  <li><a class="selected-region" href="#"></a></li>
						  <li class="active">Essential Information</li>
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
		</div>
	</div>
		
	<!-- CONTENT -->		
	<div class="survival_container">
		<div class="row" data-sticky_parent>
			<!-- SIDEBAR MENU -->
			<div id="sidebar" class="col-sm-4 col-xs-12" data-sticky_column>
				<div id="cssmenu">
					<ul>
					   <li><a class="survival-list-item" href='#money-and-cost'><span class="list-icon"><img src="images/user/money-and-costs.png"></span><span class="">Money and Costs</span></a></li>
					   <li><a class="survival-list-item" href='#best-time-to-go'><span class="list-icon"><img src="images/user/when_to_go.png"></span><span class="">When to go and Weather</span></a></li>
					   <li><a class="survival-list-item" href='#visas'><span class="list-icon"><img src="images/user/air-ntk.png"></span><span class="">Getting to </span><span class="region-selected"></span></a></li>
					   <!-- <li class='has-sub'><a href='#visas'><span class="list-icon"><img src="images/air-ntk.png"></span><span class="">Getting to </span><span class="region-selected"></span></a> 
					      <ul>
					         <li><a href='#air'><span>Air</span></a></li>
					         <li><a href='#boat'><span>Boat</span></a></li>
					         <li class='last'><a href='#land'><span>Land</span></a></li>
					      </ul>
					   </li> -->
					   <li><a class="survival-list-item" href='#getting-around'><span class="list-icon"><img src="images/user/car-ntk.png"></span><span class="">Getting around </span><span class="region-selected"></span></a></li>
					   <li><a class="survival-list-item" href='#health'><span class="list-icon"><img src="images/user/health.png"></span><span class="">Health & Safety</span></a></li>
					   <li class='last'><a class="survival-list-item" href='#advice'><span class="list-icon"><img src="images/user/disabilities-ntk.png"></span><span class="">Advice for Travellers</span></a></li>
					</ul>
				</div>			 
			</div>
			<!-- END OF SIDEBAR MENU -->	

			<!-- START OF RIGHT CONTENT DIV -->
			<div class="col-sm-8 col-xs-12" data-sticky_column>
				<div class="survival-content">
					<!-- START OF MONEY AND COSTS -->
					<div id="money-and-cost" class="survival-section white_bg">
						<!-- MONEY AND COSTS HEADIND DIV -->
						<div class="row">
							<div class="col-xs-12">
							<div class="col-lg-1 col-sm-12"></div>
								<div class="col-lg-10 col-sm-12">
									<div class="row padding horizontal_rule">
										<div class="col-xs-2">
											<img class="img survival-icon" src="images/user/money-and-costs-150x150.png" alt="">
										</div>
										<div class="col-xs-10">											
											<h4 class="survival-section-heading text-left">Money and costs</h4>
											<h5 class="survival-section-subheading text-left region-selected"></h5>
										</div>
									</div>
								</div>
								<div class="col-lg-1 col-sm-12"></div>
							</div>
						</div>						

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
												<div class="col-sm-4 col-xs-12">
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
												<div class="col-sm-4 col-xs-12">
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
												<div class="col-sm-4 col-xs-12">
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
						<div class="row margins">
							<div class="col-sm-12">
								<div class="col-sm-1"></div>
								<div class="col-sm-10">
									<p class="color-text">ATM's are not widely used, always carry cash</p>
								</div>
								<div class="col-sm-1"></div>
							</div>
						</div>

						<div class="row margins">
							<div class="col-sm-12">
								<div class="col-sm-1"></div>
								<div class="col-sm-10">
									<div class="row">
										<div class="col-lg-4 col-sm-4 col-xs-12">
											<script src="https://www.transfermate.com/en/exchange_rates_api.asp" type="text/javascript"></script>
											<noscript><br/>
												<span style="color: red;">Please enable your javascript.</span>
											</noscript>  
										</div>
										<div class="col-sm-8 col-xs-12">
											<h5 class="color-teal">Things To Remeber</h5>
											<ul class="costs_list">
												<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</li>
												<li>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
												<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</li>
												<li>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
												<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</li>
												<li>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-sm-1"></div>
							</div>
						</div>
					</div>
					<!-- END OF MONEY AND COSTS -->

					<!-- START OF BEST TIME -->
					<div id="best-time-to-go" class="survival-section white_bg">

						<!-- TOP IMAGE DIV -->
						<div class="row">
							<div class="col-sm-12">	
								<div class="guide_map_image">
									<img id="survival_map" class="img img-responsive " width="100%" src="images/user/best_time_map.png" />
								</div>
							</div>
						</div>
						<!-- END OF TOP IMAGE DIV -->

						<!-- BEST TIME GUIDE DIV -->
							<!--BEST TIME HEADING DIV -->
						<div class="row">
							<div class="col-xs-12">
							<div class="col-lg-1 col-sm-12"></div>
								<div class="col-lg-10 col-sm-12">
									<div class="row margins horizontal_rule">
										<div class="col-xs-2">
											<img class="img survival-icon" src="images/user/best-time.png" alt="">
										</div>
										<div class="col-xs-10">
											<h4 class="survival-section-heading text-left">Best time to go and weather</h4>
											<h5 class="survival-section-subheading text-left region-selected"></h5>
										</div>
									</div>
								</div>
								<div class="col-lg-1 col-sm-12"></div>
							</div>
						</div>

						<!-- CALENDAR DESCRPTION COLOR's DIV -->	
						<div class="row">			
							<div class="col-xs-12">
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

						<!-- CALENDAR BOXES DIV -->	
						<div class="row">			
							<div class="col-xs-12">
								<div class="calendar_div">
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
										<h4 class="color-text seasons-info">Height Season(JUN-SEP)</h4>
										<ul class="margins">
											<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</li>
											<li>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
											<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</li>
											<li>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
											<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</li>
											<li>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
										</ul>
										<h4 class="color-text seasons-info">Shoulder Season(DEC-FEB)</h4>
										<ul class="margins">
											<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</li>
											<li>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
											<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</li>
										</ul>
										<h4 class="color-text seasons-info">Height Season(MAR-MAY)</h4>
										<ul class="margins">
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

					<!-- START OF VISAS/GETTING TO DIV -->
					<div id="visas" class="survival-section white_bg">
						<!-- VISAS HEADIND DIV -->
						<div class="row">
							<div class="col-xs-12">
							<div class="col-lg-1 col-sm-12"></div>
								<div class="col-lg-10 col-sm-12">
									<div class="row margins horizontal_rule">
										<div class="col-xs-2">
											<img class="img survival-icon" src="images/user/air-ntk.png" alt="">
										</div>
										<div class="col-xs-10">
											<h4 class="survival-section-heading text-left">visas and gettting to <span class="region-selected"></span></h4>
											<h5 class="survival-section-subheading text-left region-selected"></h5>
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
									<div class="getting-to-details">
										<!-- VISAS -->
										<h4 class="survival-section-heading color-teal text-left">visas</h4><br>											
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
										Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
										Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
										</p><br>
										<h5 class="color-teal">customs and regulations</h5>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
										Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
										Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
										</p>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
										Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
										Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
										</p>
										<ul class="margins zeropadding">
											<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</li>
											<li>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
											<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</li>
											<li>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
											<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</li>
										</ul><br>
										<h5 class="color-teal">passports</h5>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
										Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
										Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
										</p><br>
										<h5 class="color-teal">visas</h5>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
										Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
										Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
										</p><br>
										<h5 class="color-text sub-details">ullamo laboris</h5>
										<ul class="margins">
											<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</li>
											<li>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
											<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</li>
											<li>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
											<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</li>
										</ul><br>
										<h5 class="color-text sub-details">qui officia</h5>
										<ul class="margins">
											<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</li>
											<li>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
											<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</li>
										</ul><br>

										<!-- GETTING TO -->
										<h4 class="survival-section-heading color-teal text-left">gettting to <span class="region-selected"></span></h4><br>																						
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
										Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
										Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
										</p><br>
										<h5 class="color-teal">Air</h5>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
										Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
										Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
										</p><br>
										<h5 class="color-teal">land</h5>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
										Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
										Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
										</p><br>
										<h5 class="color-teal">sea</h5>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
										Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
										Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
										</p>
									</div>						
								</div>
								<div class="col-lg-1 col-sm-12"></div>
							</div>
						</div>
					</div>
					<!-- END OF VISAS/GETTING TO DIV -->

					<!-- START OF GETTING AROUND -->
					<div id="getting-around" class="survival-section white_bg">
						<!-- GETTING AROUND HEADIND DIV -->
						<div class="row">
							<div class="col-xs-12">
							<div class="col-lg-1 col-sm-12"></div>
								<div class="col-lg-10 col-sm-12">
									<div class="row margins horizontal_rule">
										<div class="col-xs-2">
											<img class="img survival-icon" src="images/user/car-ntk.png" alt="">
										</div>
										<div class="col-xs-10">
											<h4 class="survival-section-heading text-left">gettting around <span class="region-selected"></span></h4>
											<h5 class="survival-section-subheading text-left region-selected"></h5>
										</div>
									</div>
								</div>
								<div class="col-lg-1 col-sm-12"></div>
							</div>
						</div>
						<!-- VIEW/HIDE GETTING AROUND DETAILS DIV 
						<div class="row">
							<div class="col-xs-12">
								<div class="col-lg-push-1 col-lg-10 col-lg-pull-2 col-sm-12">
									<div class="row margins horizontal_rule">
										<p view="view" details="health_details" class="color-text view_details">Hide Details<span class="caret"></span></p>
									</div>
								</div>
							</div>
						</div>			-->
						<!-- GETTING AROUND DETAILS DIV -->
						<div class="row">
							<div class="col-xs-12">
								<div class="col-lg-1 col-sm-12"></div>
								<div class="col-lg-10 col-sm-12">
									<div class="getting-around-details">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
										Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
										Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
										</p><br>
										<h5 class="color-teal">arrival</h5>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
										Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
										Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
										</p>
										<ul class="margins zeropadding">
											<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</li>
											<li>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
											<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</li>
											<li>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
											<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</li>
											<li>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
										</ul><br>
										<button id="car-rental" class="btn btn-white color-teal">car rental</button><br>
										<br>
										<h5 class="color-teal">car and motorcycles</h5>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
										Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
										Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
										</p><br>
										<h5 class="color-teal">local transport</h5>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
										Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
										Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
										</p><br>
										<h5 class="color-teal">taxi</h5>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
										Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
										Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
										</p>	
									</div>					
								</div>
								<div class="col-lg-1 col-sm-12"></div>
							</div>
						</div>
					</div>
					<!-- END OF GETTING AROUND  -->

					<!-- START OF HEALTH DIV-->
					<div id="health" class="survival-section white_bg">
						<!-- HEALTH HEADIND DIV -->
						<div class="row">
							<div class="col-xs-12">
							<div class="col-lg-1 col-sm-12"></div>
								<div class="col-lg-10 col-sm-12">
									<div class="row margins horizontal_rule">
										<div class="col-xs-2">
											<img class="img survival-icon" src="images/user/health.png" alt="">
										</div>
										<div class="col-xs-10">
											<h4 class="survival-section-heading text-left">health and safety</h4>
											<h5 class="survival-section-subheading text-left region-selected"></h5>
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
						<div class="row">
							<div class="col-xs-12">
								<div class="col-lg-1 col-sm-12"></div>
								<div class="col-lg-10 col-sm-12">
									<div id="health-details" class="health-details">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
										Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
										Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
										</p><br>

										<h5 class="color-teal">dangers and annoyances</h5>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
										Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
										Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
										</p>
										<ul class="margins zeropadding">
											<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</li>
											<li>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
											<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</li>
											<li>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
											<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</li>
										</ul><br>
										<h5 class="color-text sub-details">animal hazards</h5>
										<ul class="margins">
											<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</li>
											<li>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
											<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</li>
											<li>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
										</ul><br>
										<h5 class="color-text sub-details">theft hazards</h5>
										<ul class="margins">
											<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</li>
											<li>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
											<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</li>
											<li>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
											<li>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
										</ul><br>

										<h5 class="color-teal">Health</h5>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
										Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
										Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
										</p>	
										<ul class="margins zeropadding">
											<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</li>
											<li>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
											<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</li>
											<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</li>
											<li>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
										</ul><br>
										<h5 class="color-text sub-details">medical checklist</h5>
										<ul class="margins">
											<li>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
											<li>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
											<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</li>
											<li>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
										</ul><br>
										<h5 class="color-text sub-details">health advisory</h5>
										<ul class="margins">
											<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</li>
											<li>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
											<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</li>
											<li>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
											<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</li>
											<li>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
										</ul><br>
										<h5 class="color-text sub-details">medical services</h5>
										<ul class="margins">
											<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</li>
											<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</li>
											<li>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
											<li>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
										</ul><br>
										<h5 class="color-text sub-details">women health</h5>
										<ul class="margins">
											<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</li>
											<li>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
											<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</li>
											<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</li>
											<li>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
										</ul><br>
										<h5 class="color-text sub-details">emergency numbers</h5>
										<ul class="margins">
											<li>Lorem ipsum dolor sit amet, <span class="color-teal">(+92 91 1234567)</span></li>
											<li>sed do eiusmod tempor, <span class="color-teal"> (+92 91 1234567)</span></li>
											<li>Lorem ipsum dolor, <span class="color-teal">www.abc.com </span></li>
											<li>sed do eiusmod tempor, <span class="color-teal"> email@xyz.com</span></li>
										</ul><br>
									</div>					
								</div>
								<div class="col-lg-1 col-sm-12"></div>
							</div>
						</div>
					</div>
					<!-- END OF HEALTH -->

					<!-- START OF ADVICE DIV -->
					<div id="advice" class="survival-section white_bg">
						<!-- ADVICE HEADIND DIV -->
						<div class="row">
							<div class="col-xs-12">
							<div class="col-lg-1 col-sm-12"></div>
								<div class="col-lg-10 col-sm-12">
									<div class="row margins horizontal_rule">
										<div class="col-xs-2">
											<img class="img survival-icon" src="images/user/disabilities-ntk.png" alt="">
										</div>
										<div class="col-xs-10">
											<h4 class="survival-section-heading text-left">advice for travellers</h4>
											<h5 class="survival-section-subheading text-left region-selected"></h5>
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
						<!-- ADVICE DETAILS DIV -->
						<div class="row">
							<div class="col-xs-12">
								<div class="col-lg-1 col-sm-12"></div>
								<div class="col-lg-10 col-sm-12">
									<div id="advice-details" class="advice-details">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
										Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
										Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
										</p><br>

										<h5 class="color-teal">tarvelling with children</h5>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
										Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
										Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
										</p>
										<ul class="margins zeropadding">
											<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</li>
											<li>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
											<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</li>
										</ul><br>
										<h5 class="color-text sub-details">parks and theme</h5>
										<ul class="margins">
											<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</li>
											<li>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
											<li>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
											<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</li>
											<li>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
											<li>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
										</ul><br>
										<h5 class="color-text sub-details">animals and zoo</h5>
										<ul class="margins">
											<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</li>
											<li>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
											<li>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
										</ul><br>

										<h5 class="color-teal">women travellers</h5>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
										Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
										Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
										</p><br>

										<h5 class="color-teal">travellers with disabilities</h5>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
										Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
										Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
										Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
										Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
										</p><br>	

										<h5 class="color-teal">communication</h5>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
										Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
										Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
										</p>
										<ul class="margins zeropadding">
											<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</li>
											<li>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
											<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</li>
										</ul><br>
										<h5 class="color-text sub-details">telephone</h5>
										<ul class="margins">
											<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</li>
											<li>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
											<li>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
											<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</li>
											<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</li>
											<li>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
										</ul><br>
										<h5 class="color-text sub-details">internet access</h5>
										<ul class="margins">
											<li>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
											<li>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
											<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</li>
											<li>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
										</ul><br>
										<h5 class="color-text sub-details">post</h5>
										<ul class="margins">
											<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</li>
											<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</li>
											<li>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
											<li>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
										</ul><br>

										<h5 class="color-teal">good to know</h5>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
										Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
										Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
										</p><br>
										<ul class="margins zeropadding">
											<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</li>
											<li>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
											<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</li>
										</ul><br>
										<h5 class="color-text sub-details">etiquette</h5>
										<ul class="margins">
											<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</li>
											<li>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
											<li>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
											<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</li>
											<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</li>
											<li>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
										</ul><br>
										<h5 class="color-text sub-details">languge and common phrases</h5>
										<ul class="margins">
											<li>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
											<li>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
											<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
										</ul><br>
										<h5 class="color-text sub-details">electricity</h5>
										<ul class="margins">
											<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</li>
											<li>Lorem ipsum dolor sit amet, consectetur adipiscing</li>
										</ul><br>
										
										<h5 class="color-teal">before you go</h5>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
										Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
										Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
										</p><br>
										<ul class="margins zeropadding">
											<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</li>
											<li>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
											<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</li>
										</ul><br>
										<h5 class="color-text sub-details">checklist</h5>
										<ul class="margins">
											<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</li>
											<li>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
											<li>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
											<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</li>
											<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</li>
											<li>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
										</ul><br>
										<h5 class="color-text sub-details">what to wear</h5>
										<ul class="margins">
											<li>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
											<li>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
											<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
										</ul><br>
										<h5 class="color-text sub-details">what to take</h5>
										<ul class="margins">
											<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</li>
											<li>Lorem ipsum dolor sit amet, consectetur adipiscing</li>
										</ul><br>
									</div>					
								</div>
								<div class="col-lg-1 col-sm-12"></div>
							</div>
						</div>
					</div>
					<!-- END OF ADVICE DIV -->
				</div>
			</div>
			<!-- END OF RIGHT CONTENT DIV -->
		</div>
		<!-- END OF CONTENT -->
	</div>

	<!-- PRINT AND EMAIL ICONS -->
	<!--<div class="row">
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
	</div> -->
	<!-- END OF PRINT AND EMAIL ICONS -->

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

<script type="text/javascript" src="js/user/jquery.min.js" ></script>
<script type="text/javascript" src="js/user/bootstrap.min.js" ></script>
<script src="js/user/menu-script.js"></script>
<script src="js/user/sticky-kit.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		//show selected area in breadcrumb
		$('.breadcrumb .selected-region').text(window.sessionStorage.getItem('region'));
		$('.region-selected').text(window.sessionStorage.getItem('region'));
		//current temperature 
		//var temp = api.openweathermap.org/data/2.5/weather?lat=35&lon=139&APPID=eefd513f3a11f3652be8d3ff855f3293;
		//$('.current-temp').html(main[temp]);
		//console.log(temp);
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


		if ($(window).width() > 768) {
			$("#sidebar").stick_in_parent();
		}	

		$('#car-rental').click(function() {
			window.sessionStorage.setItem('category', 'transportion');
			window.sessionStorage.setItem('category-subtype', 'rental');
			console.log(sessionStorage);
		});

		var id = window.sessionStorage.getItem('survival-section');
		$('.survival-section').hide();
		$(id).show();

		$('.survival-list-item').click(function() {
			var id = $(this).attr('href');
			window.sessionStorage.setItem('survival-section', id);
			console.log(sessionStorage);
			$('.survival-section').hide();
			$(id).show();
		});
	});
</script>

</html>