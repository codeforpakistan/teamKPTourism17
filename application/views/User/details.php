<body class="white_bg animated fadeIn">
	<link rel="stylesheet" id="datetimepicker-css" href="css/user/jquery-ui.css" type="text/css" media="all">
	<!-- details Modal -->
	<div class="modal fade" id="detailsModal" role="dialog">
	    <div class="modal-dialog">	    
	      <!-- Modal content-->
	      	<div class="modal-content">
	        	<div class="modal-header">
	          		<button type="button" class="close" data-dismiss="modal">&times;</button>
	          		<h3 class="modal-title color-black sort-heading">The Bliss of <span class="selected-area"></span></h3>
	        	</div>
	        	<div class="modal-body">
	          		<p><?php if(!empty($region_data)){echo html_entity_decode($region_data->description);} ?></p>
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
			<div class="col-sm-12">
					<div class="row top_div">	
						<!-- LOGO DIV -->
						<nav class="navbar">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="col-sm-5 col-xs-3">
							    <div class="navbar-header">							      	
							      	<a class="navbar-brand" href="<?php echo base_url();?>home">
								      	<div class="col-sm-3 col-xs-9">
											<img class="img logo" src="images/user/logo.png" alt="">
										</div>
										<div class="col-sm-9 col-xs-3 text-left">
											<h4 class="color-blue top_div_logo_heading">TCKP</h4>
											<h5 class="heading-description">Tourism Corporation KP</h5>
										</div>
									</a>
							    </div>
							</div>

							<!-- Collect the nav links for toggling -->
							<div class="col-sm-7 col-xs-9">
						    	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu" aria-expanded="false">
								    <span class="sr-only">Toggle navigation</span>
							        <span class="icon-bar"></span>
							        <span class="icon-bar"></span>
							        <span class="icon-bar"></span>
							    </button>
								<div class="collapse navbar-collapse" id="main-menu">
							      	<ul class="nav navbar-nav">
							        	<li class="top-links color-black"><a href="<?php echo base_url();?>home">Home</a></li>
										<li class="top-links color-black"><a href="<?php echo base_url();?>discover">Destintions</a></li>
										<li class="top-links color-black"><a href="#">Events</a></li>
										<li class="top-links color-black"><a href="#">Bookings</a></li>
										<li class="top-links color-black"><a href="#">Activities</a></li>
									</ul>						     
								</div><!-- /.navbar-collapse -->
							</div>
						</nav>
					</div>
			</div>

			<!-- BREAD CRUMB AND WEATHER DIV -->
			<div class="col-sm-push-1 col-sm-10 col-sm-pull-1">	
				<div class="row breadcrumbdiv">
				<!-- BREADCRUMB DIV -->
					<div class="col-lg-6 col-xs-12">
						<ol class="breadcrumb">
						  <li><a href="<?php echo base_url();?>home">Home</a></li>
						  <li><a href="<?php echo base_url();?>discover">Discover</a></li>						  						  
						  <li class="selected-area active"></li>
						</ol>
					</div>
					<!-- ELEVATION AND WEATHER DIV -->				
					<div class="col-sm-6 col-xs-12">
						<div class="col-sm-6 col-xs-12">
						</div>
						<div class="col-sm-6 col-xs-12">
							<p class="about_elevation">
								<?php 
								if(!empty($region_data))
								{ 
									echo $region_data->elevation."'";
								?>	<br/>Elevation
                                <?php 
								} 
								?>    
                            </p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- BANNER ROW -->
        <?php 
		if(!empty($slider))
		{
		?>
		<div class="container-fluid">
			<div class="row">
				<div class="banner-wrapper">
					<div id="top-slider" class="banner">
                    <?php 
						$a = 1;
						foreach($slider as $key=>$value)
						{
					?>
						<div id="slide<?php echo $a;?>" class="slide">
							<img class="img img-responsive" width="100%" src="images/admin/main_slider/<?php echo $value['image'];?>" />
							<div class="banner-text">
								<h3 class="color-white"><?php echo $value['heading'];?></h3>
							    <p class="color-white"><?php echo $value['description'];?></p>

			                    <a href="<?php echo $value['link'];?>"><button class="btn btn-white">VISIT NOW</button></a> 							                    
							</div>
						</div>
						
                    <?php
						$a++;
						}
					
					?>
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
        <?php 
		}
		/*else{
			echo "No slider found for this region";
			}*/
		?>
		<!-- END OF TOP MENU AND BANNER DIV -->

		<!-- STICKY MENU ROW -->
		<div class="container-fluid">
			<div class="row">
				<div class="sticky-menu">
					<nav class="navbar">
						<!-- Collect the menu links for toggling -->
							<div class="col-md-push-2 col-md-8 col-md-pull-2 col-sm-push-1 col-sm-10 col-sm-pull-1 col-xs-12">
						    	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sticky-menu" aria-expanded="false">
								    <span class="sr-only">Toggle navigation</span>
							        <span class="icon-bar"></span>
							        <span class="icon-bar"></span>
							        <span class="icon-bar"></span>
							    </button>
								<div class="collapse navbar-collapse" id="sticky-menu">
							      	<ul class="nav navbar-nav" style="float: none;">
							        	<li><a class="color-black" href="<?php echo $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];?>#about">About <span class="selected-area"></span></a></li>
										<li><a class="color-black" href="<?php echo $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];?>#activities">Activities</a></li>
										<li><a class="color-black" href="<?php echo $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];?>#sights">Top Sights</a></li>
										<li><a class="color-black" href="<?php echo $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];?>#resturants">Resturants</a></li>
										<li><a class="color-black" href="<?php echo $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];?>#guest-houses">Guest Houses</a></li>
										<li><a class="color-black" href="<?php echo $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];?>#survival-guide">Essential Information</a></li>
										<li><a class="color-black" href="<?php echo $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];?>#events-and-tours-div">Events & Tours</a></li>
									</ul>						     
								</div><!-- /.navbar-collapse -->
							</div>
						</nav>
				</div>
			</div>
		</div>

		<!-- ABOUT DIV -->
		<div id="about" class="white_bg about animated">
			<div class="container">
					<div class="col-sm-12">
                    <?php 
					if(!empty($region_data))
					{
					?>
                    	
						<h3 class="color-black sort-heading text-center"><?php echo $region_data->heading;?></h3>
						<h5 class="color-blue sort-description text-center"><?php echo $region_data->heading_desc;?></h5>
						<div class="col-lg-5 col-md-5 col-sm-12">
							<p class="color margins">
								<?php 
								if(strlen($region_data->description) > 600)
								{
									echo html_entity_decode(substr($region_data->description,0,600))." ...";
								?>
                                	<br>
                                	<a href="javascript:void(0);" class="color-blue seeAllLink" data-toggle="modal" data-target="#detailsModal">
                                        Read more
                                    </a>
                                <?php	
								}
								else{
									echo html_entity_decode($region_data->description);
									}
								?>
							</p>
						</div>
						<div class="col-lg-7 col-md-7 col-sm-12">
							<img class="img img-responsive pushedright" src="images/user/naran-desc-map.png" />	
						</div>
                    <?php 
					}
					?>
					</div>
				</div>
			</div>
		</div>
		<br><br><br><br><br>

		<!-- ACTIVITIES SELECTION AND EVENTS SELECTION DIV -->
        <?php 
		if(!empty($region_activities))
		{
		?>
		<div id="activities" class="pattern animated">
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
                        <?php 
						foreach($region_activities as $key=>$value)
						{
						?>
						<div class="col-lg-4 col-sm-6 col-xs-12 text-center ">
							<div class="translate">
								<div id="<?php echo $value['act_id'];?>" class="famous_events_div shadow">
									<img id="trekking_normal" class="image_normal events_image_normal" src="images/admin/activities/<?php echo $value['icon'];?>" />
									<img id="trekking_hover" class="image_hover events_image_hover" src="images/admin/activities/<?php echo $value['image'];?>" />	
									<div class="normal_details animated">
										<div class="has_wrapper">
											<h2 class="color-black"><?php echo $value['name'];?></h2>
											<p class="area-name">in <?php //echo $region_data->name;?></p>
											<img src="images/user/spots-pin.png" class="img auto-margin">
											<p><?php echo html_entity_decode($value['spots_detail']);?></p>
										</div>
									</div>				
									<div class="has_bottom hover_details animated">	
										<h2><?php echo $value['name'];?></h2>
										<div class="white_bg radius">					
											<p>
											<?php
												if(strlen($value['description']) > 150)
												{ 
													echo html_entity_decode(substr($value['description'],0,150))."...";
												}
												else{
													echo html_entity_decode($value['description']);
													}
											?>
                                            </p>
											<button class="btn btn-primary">EXPLORE</button>
										</div>
									</div>
								</div>
							</div>
						</div>
                        <?php
							}
						?>
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
        <?php 
		}
		/*else{
			echo "No activities found for this region";
			}*/
		?>

		<!-- TOP SIGHTS IN NARAN-->
        <?php 
		if(!empty($sights))
		{
		?>		
		<div id="sights" class="white_bg top-sights-to-visit animated">
			<!-- CONTAINER DIV -->
			<div class="container">
				<div class="row">
					<h3 class="color-text sort-heading text-center"></h3>
					<h5 class="color-blue sort-description text-center"></h5>
				</div>
				<!-- TOP SIGHTS DIV -->
				<div class="row spacing">	
					<div id="top-sights" class="col-lg-12">
						<!-- SIGHT1 CONTAINER DIV -->
                        <?php 
							$a=1;
							foreach($sights as $key=>$value)
							{
								
						?>
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="scale">
								<div class="top-sights-box">
									<div class="top-sights-box-cover"></div>
									<a href="<?php echo base_url();?>sight/<?php echo $value['sight_id'];?>">
										<img class="img img-responsive" src="images/admin/sights/<?php echo $value['header_image'];?>" />
										<h4 class="color-black site-count"><?php echo $a;?></h4>
										<div class="site-info-text text-center">
											<p class="color-white site-area"><?php echo $value['address'];?></p>
											<h4 class="color-white site-name"><?php echo $value['name'];?></h4>
											<p class="color-white site-description animated"><?php echo substr($value['description'],0,100);?></p>
										</div>
									</a>
								</div>
							</div>	
						</div>
						<?php 
							$a++;
							}
						?>
						
					</div>						
				</div>
				<!-- END OF TOP SIGHTS DIV -->
			</div>
		</div>
        <?php
		}
		/*else{
		  	echo "No sights found";
		}*/

		?>
		<!-- END OF TOP SIGHTS IN NARAN-->	

		<!-- FOOD AND DRINKS DIV-->
        <?php 
		if(!empty($restaurant))
		{
		?>		
		<div id="resturants" class="gray_bg food-and-drinks">
			<!-- CONTAINER DIV -->
			<div class="container-fluid">
				<div class="row">
					<h3 class="color-text sort-heading text-center">Food And Drinks</h3>
					<h5 class="color-blue sort-description text-center"></h5>
				</div>
				<!-- HOTELS DIV -->
				<div class="container">	
					<div class="row spacing">
                    	<div class="col-lg-6 col-xs-12">
						<?php
							$a=1;
							foreach($restaurant as $key => $value)
							{
							?>
							<div class="col-lg-6 col-xs-12">
                            	<a href="<?php echo base_url();?>restaurant/<?php echo $value['rest_id'];?>">
                                    <div class="food-box translatehorizontal">
                                        <h5 class="food-name"><?php echo $value['name'];?></h5>
                                        <p class="food-type"><?php echo $value['address'];?></p>
                                    </div>
                                </a>
                           </div>
                            <?php 
							$a++;
							}
						?>
                        </div>
                        <div class="col-lg-6 col-xs-12">
							<img class="img img-responsive food-img" src="images/user/food.png" />
						</div>
                    </div>
				</div>						
			</div>
		</div>
        <?php 
		}
		/*else{
			echo "No restaurants Found";
			}*/
		
		?>	
		<!-- END OF TOP SIGHTS IN NARAN	-->

		<!-- SEARCH HOTELS AND RESTURANTS DIV-->		
		<div id="guest-houses" class="hotels-container">
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
		<div id="survival-guide" class="white_bg survival-guide">
			<div class="container-fluid text-center">
				<div class="container">
					<h3 class="color-text sort-heading">Essential Information</h3>
						<div class="col-lg-12">
							<!-- VISAS dIV -->
							<div class="col-lg-3 col-sm-6 col-xs-12 text-center">
								<div class="translate guide_box">
									<a id="visas" href="<?php echo base_url();?>visas/0" class="survival_link">
										<img class="img img-responsive auto-margin" src="./images/user/visas.png" />	
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
									<a id="best-time-to-go" href="<?php echo base_url();?>besttime/0" class="survival_link">
										<img class="img img-responsive auto-margin" src="./images/user/best-time.png" />	
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
									<a id="money-and-cost" href="<?php echo base_url();?>cost/0" class="survival_link">
										<img class="img img-responsive auto-margin" src="./images/user/money-and-costs.png" />	
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
									<a id="health" href="<?php echo base_url();?>health/0" class="survival_link">
										<img class="img img-responsive auto-margin" src="./images/user/health.png" />	
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
        <?php
        if(!empty($events))
		{
		?>
       <div id="events-and-tours-div" class="grey_bg padding events-and-tours-div">
			<div class="container-fluid">	
				<div class="container">
					<h2 class="text-center">Events/Tours</h2>
					<!-- Events/Tours' FIRST DIV -->
						<div class="col-lg-12">
							 <?php 
								foreach($events as $key=>$value)
								{
							?>
                            <!-- LEFT CONTAINER DIV -->
							<div class="col-lg-6 col-md-6 col-xs-6">
									<div class="events_and_tours_box">
										<a href="<?php echo base_url()?>event/<?php echo $value['event_id'];?>">
											<div class="col-sm-12">
												<!-- LEFT IMAGE DIV -->
												<div class="col-lg-6 col-md-6 col-xs-12">
													<div class="tours_image_div">
														<img class="img img-responsive" src="images/admin/events/<?php echo $value['header_image'];?>" />
														</div>
												</div>	
												<!-- LEFT TEXT DIV -->
												<div class="col-lg-6 col-md-6 col-xs-12">
													<h4 class="color-black"><?php echo $value['title'];?></h4>
													<p class="color-text">This text remaining from DB ?</p>
												</div>
											</div>
											<div class="col-sm-12">
												<p class="color-black details-events-cost">
                                                	<span class="event_cost">Rs. <?php echo $value['cost'];?></span><?php echo $value['event_type'];?>
                                            	</p>											
											</div>
										</a>
									</div>	
								</div>

                            <?php
								}
							?>
						</div>
					</div>	
			</div>
			
		</div>
        <?php 
		}
		/*else{
			echo "No event Yet for this region";
			}
			*/
		?>

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
<script type="text/javascript" src="js/user/jquery.min.js" ></script>
<script type="text/javascript" src="js/user/bootstrap.min.js" ></script>
<script src="js/user/jquery.snippet.min.js"></script>
<script src="js/user/jquery.easyPaginate.js"></script>
<script src="js/user/scripts.js"></script>
<script type="text/javascript" src="js/user/jquery-ui.js" ></script>
<script type="text/javascript">
	$(document).ready(function(){
		//Show selected area in activities and sight seeing cards, food and drinks
		$('.area-name').text('in '+window.sessionStorage.getItem('region')); 
		$('.top-sights-to-visit .sort-heading').text('top sights in '+window.sessionStorage.getItem('region'));
		//showing selected area 
		$('.selected-area').text(window.sessionStorage.getItem('region'));

		// SET SELECTED ACTIVITY
		$('.famous_events_div').click(function() {
			var id = $(this).attr('id');
			window.sessionStorage.setItem('activity', 'activity');
			window.sessionStorage.setItem('category', 'activity');
			window.location.href = "<?php echo base_url();?>actvities/"+id;
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
			window.sessionStorage.setItem('activity', 'sight seeing');
			window.sessionStorage.setItem('category', 'sightseeing');
			console.log(sessionStorage);
		});

		$('.food-and-drinks .seeAllLink').click(function() {
			window.sessionStorage.setItem('category', 'hotel');
			console.log(sessionStorage);
		});

		$('#checkin_date, #checkout_date').datepicker({
		  autoSize: true,
		  dateFormat: "dd-mm-yy",
		  minDate: 0,
		  hideIfNoPrevNext: false,
		  showAnim: "slideDown",		  
		});
  		
		$('.survival_link').click(function() {
			var id = '#'+$(this).attr('id');
			window.sessionStorage.setItem('survival-section', id);
			console.log(sessionStorage);

		})
	
		// STICKY MENU
		$('.sticky-menu').addClass('original').clone().insertAfter('.sticky-menu').addClass('cloned').css('position','fixed').css('top','0').css('margin-top','0').css('z-index','500').removeClass('original').hide();

		scrollIntervalID = setInterval(stickIt, 10);


		function stickIt() {

		  var orgElementPos = $('.original').offset();
		  orgElementTop = orgElementPos.top;               

		  if ($(window).scrollTop() >= (orgElementTop)) {
		    // scrolled past the original position; now only show the cloned, sticky element.

		    // Cloned element should always have same left position and width as original element.     
		    orgElement = $('.original');
		    coordsOrgElement = orgElement.offset();
		    leftOrgElement = coordsOrgElement.left;  
		    widthOrgElement = orgElement.css('width');
		    $('.cloned').css('left',leftOrgElement+'px').css('top',0).css('width',widthOrgElement).show();
		    $('.original').css('visibility','hidden');
		  } else {
		    // not scrolled past the sticky-menu; only show the original sticky-menu.
		    $('.cloned').hide();
		    $('.original').css('visibility','visible');
		  }
		}

		$('.sticky-menu li, .sticky-menu a').click(function() { 
			$('.sticky-menu li, .sticky-menu a').removeClass('sticky-menu-active');
			$(this).addClass('sticky-menu-active');
		});
			
	});
</script>


</html>

