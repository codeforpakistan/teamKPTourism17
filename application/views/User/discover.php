<body class="white_bg animated fadeIn">
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
							      	<div class="col-sm-2 col-xs-9">
										<img class="img logo" src="images/user/logo.png" alt="">
									</div>
									<div class="col-sm-10 col-xs-3 text-left">
										<h4 class="color-blue top_div_logo_heading">TCKP DISCOVER</h4>
										<h5 class="heading-description">Tourism Cooperation KP</h5>
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
						        	<li class="top-links color-black"><a href="home.php">Home</a></li>
									<li class="top-links color-black"><a href="discover.php">Destintions</a></li>
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
						  <li class="active">Discover</li>
						</ol>
					</div>
				</div>
			</div>
		</div>

		<!-- BANNER ROW -->
		<div class="container-fluid">
			<div class="row">
				<div class="banner-wrapper">
					<div id="top-slider" class="banner">
                    <?php
					if(!empty($slider))
					{
						$a = 1; 
						foreach($slider as $key=>$value)
						{
						?>
							<div id="slide<?php echo $a;?>" class="slide">
								<img class="img img-responsive" width="100%" src="images/admin/main_slider/<?php echo $value['image'];?>" />
								<div class="banner-text">
									<h3 class="color-white"><?php echo $value['heading'];?></h3>
									<p class="color-white"><?php echo $value['description'];?></p>
									<a href="<?php echo $value['link'];?>"><button class="btn btn-white">VISIT NOW</button></a> 																                            </div>
							</div>
						<?php 
						$a++;
						}
					}
					else{
						echo "No slides found";
						}
					?>
					</div>
					<!-- END WRAPPER FOR SLIDES -->
					<a class="left slide-left carousel-control" href="discover#top-slider" role="button" data-slide="prev">
						<i class="fa fa-angle-left"></i>
					</a>
					<a  class="right slide-right carousel-control" href="discover#top-slider" role="button" data-slide="next">
						<i class="fa fa-angle-right"></i>
			        </a>
				</div>
			</div>
		</div>

		<!-- REGIONS SORT AND REGIONS DISPALY DIV -->
		<div class="regions-wrapper padding pattern">
			<div class="container">	
				<!-- REGIONS SORT DIV -->
				<div class="row">
					<div class="col-sm-push-4 col-sm-4 col-sm-pull-4 text-center">
						<h3 class="color-text sort-heading">Best in KP</h3>
						<h5 class="color-blue sort-description">Choose an activity to explore</h5>
						<form action="" method="">
							<select class="form-control input-group-lg" name="region_selection_sort" id="region_selection_sort">
								<optgroup class="selectoptions">
							    	<option value="name" selected>Name</option>
							    	<option value="elevation">Elevation</option>
							    	<option value="rating">Popularity</option>
								</optgroup>
							</select>
						</form>
					</div>					
				</div>
				<!-- END OF REGIONS SORT DIV -->
                
                <!-- REGIONS DISPLAY DIV -->
				
				<?php 
				if(!empty($famous_regions))
				{
				?>
                <div class="row famous-regions">
					<!-- Regions -->
					<div class="col-lg-12">
						<div id="famous-regions">
						<!-- SWAT dIV -->
                        <?php 
						$a = 1;
						foreach($famous_regions as $key=>$value)
						{
						?>
                        
						<div class="col-lg-4 col-sm-6 col-xs-12 text-center">
							<div class="zoom">
								<div class="famous_regions_div region-<?php echo $a;?>">
									<img class="img img-responsive image_normal auto-margin" src="images/admin/regions/<?php echo $value['thumb_image'];?>" data-pin-nopin="true">
									<img class="img img-responsive image_hover auto-margin" src="images/admin/regions/<?php echo $value['thumb_overlay'];?>">	
									<div class="has-feedback">										
										<a id="<?php echo $value['name'];?>" class="region-select" href="detail/<?php echo $value['reg_id'];?>">
											<h2 class="color-text"><?php echo $value['name'];?></h2>
											<p class="region-description color-text"><?php echo $value['location'];?></p>
											<p>
												<?php 
												echo html_entity_decode(substr($value['description'],0,150));
												echo (strlen($value['description']) > 150)? " ..." : "";?> 
                                            </p>
											<button class="btn btn-primary auto-margin">EXPLORE</button>
										</a>
									</div>
								</div>
							</div>
						</div>
						<?php 
						}
						?>
					</div>
					</div>
					<!-- End of Regions -->
				</div>
				<?php 
				}
				/*else{
					echo "Sorry! No region found.";
					
					}*/
				?>
                
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
                            	<form class="search" action="<?php echo base_url();?>User/User/search" method="post">
										<div class="form-group col-xs-12">
										      	<select class="form-control search_select" id="sel1" name="sel1">
										          	<?php  
													if(!empty($categories))
													{
													?>
                                                    	<option value=""> -- Select Category -- </option>
                                                    <?php
														foreach($categories as $key => $value)
														{
														?>	
                                                        <option value="<?php echo $value['cat_id'];?>"><?php echo $value['name'];?></option>	
														<?php	
														}	
													}
													else{
														?>
                                                    	<option value=""> -- No category Found --</option>
                                                    	<?php	
														}
													?>
										      	</select>
										</div>
										<div class="form-group col-xs-12">
										      	<select class="form-control search_select" id="sel2" name="sel2">
										          	<?php  
													if(!empty($types))
													{
													?>
                                                    	<option> -- Select Type -- </option>
                                                    <?php
														foreach($types as $key => $value)
														{
														?>	
                                                        <option value="<?php $value['type_id'];?>"><?php echo $value['name'];?></option>	
														<?php	
														}	
													}
													else{
														?>
                                                    	<option value=""> -- No type Found --</option>
                                                    	<?php	
														}
													?>
										      	</select>
									    </div>
									    <div class="form-group col-xs-12">
										      	<select class="form-control search_select" id="sel3" name="sel3">
										          	<?php  
													if(!empty($regions))
													{
													?>
                                                    	<option> -- Select Region -- </option>
                                                    <?php
														foreach($regions as $key => $value)
														{
														?>	
                                                        <option value="<?php $value['reg_id'];?>"><?php echo $value['name'];?></option>	
														<?php	
														}	
													}
													else{
														?>
                                                    	<option value=""> -- No region Found --</option>
                                                    	<?php	
														}
													?>
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
        
        <?php 
		if(!empty($other_regions))
		{
		?>		
		<div class="white_bg padding">
			<!-- CONTAINER  DIV -->
			<div class="container-fluid">
				<div class="row">
					<!-- MAIN DIV -->
					<div class="col-lg-push-1 col-lg-10 col-lg-pull-1">
						<h2 class="text-center">Other Places To Discover</h2>
						<h4 class="text-center color-blue">Discover all other beautiful regions of KP</h4>
						
                        <!-- SEARCH FORM -->	
						<form class="discover-events-form" action="" method="post">
							<input class="form-group input-group-lg searchbox"  type="text" id="name_search" name="search" placeholder="Search">
							<select class="form-control input-group-lg" name="region_selection_sort_other" id="region_selection_sort_other">
							    <option value="name" selected>Name</option>
							    <option value="elevation">Elevation</option>
							    <option value="rating">Popularity</option>					    
							</select>
						</form>
                        <!-- LEFT CONTAINER DIV -->
                        <div id="activities-div" class="col-lg-12">
							<?php 
							$a = 1;
							foreach($other_regions as $key=>$value)
							{
							?>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
								<div id="activity-<?php echo $a;?>" class="other_activities_box">
									<a href="<?php echo base_url();?>detail/<?php echo $value['reg_id'];?>">
										<!-- LEFT IMAGE DIV -->
										<div class="col-xs-6">
											<img class="img" src="images/admin/regions/<?php echo $value['image']?>" />
										</div>	
										<!-- LEFT TEXT DIV -->
										<div class="col-xs-6">
											<h4 class="color-black"><?php echo $value['name']?></h4>
											<p class="color"><?php echo $value['location'];?></p>
										</div>
									</a>
								</div>	
							</div>
							<?php 
							$a++;
							}
							?>
							
						</div>	
                    </div>
				</div>
			</div>
		</div>
		<?php 
		}
		/*else{
			echo "Sorry! No other places found.";
			
			}*/
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
<script type="text/javascript">
	$(document).ready(function(){
		$("#sel1").change(function(){
		$.ajax({
			url: "<?php echo base_url();?>User/User/getCatType/",
			data: {cat_id:$(this).val()},
			type: "post",
			success: function(r)
			{
				$("#sel2").html(r);
			}
			});
		});
		
		$("#name_search").keyup(function(){
		$.ajax({
			url: "<?php echo base_url();?>User/User/nameSearch/",
			data: {keyword:$(this).val()},
			type: "post",
			success: function(r)
			{
				$("#activities-div").html(r);
			}
			});
		});
		
		
		$("#region_selection_sort").change(function(){
		$.ajax({
			url: "<?php echo base_url();?>User/User/regOrder/",
			data: {search_type:$(this).val()},
			type: "post",
			success: function(r)
			{
				$("#famous-regions").html(r);
			}
			});
		});
		
		$("#region_selection_sort_other").change(function(){
		$.ajax({
			url: "<?php echo base_url();?>User/User/regOrder/",
			data: {other:'other',search_type:$(this).val()},
			type: "post",
			success: function(r)
			{
				$("#activities-div").html(r);
			}
			});
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


		
			