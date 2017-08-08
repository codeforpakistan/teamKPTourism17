<body class="white_bg animated fadeIn">
	<div class="content">	
		<!-- TOP DIV -->
		<div class="container">	
			<!-- TOP LOGO AND MENU DIV -->
			<div class="row top_div">
				<div class="col-sm-12">	
					<!-- LOGO DIV -->
					<div class="col-lg-6 col-sm-5 col-xs-3">
						<div class="col-sm-2 col-xs-9">
							<a href="index.php"><img class="img logo" src="images/user/logo.png" alt=""></a>
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
					<div class="searchPage_banner">
						<img class="img img-responsive" src="images/user/img_1.jpg" />
						<!------ search form ------>
						<div class="search-banner-form">
							<div class="col-sm-push-1 col-sm-10 col-sm-pull-1 col-xs-12">
		                        <form class="discover-search-form" action="<?php echo base_url();?>User/User/search" method="post">
									<div class="form-group col-sm-4 col-xs-12">
										<label class="discover-search-label" for="category">Show me</label>
										<select class="form-control search_select" id="category" name="category">
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
										<div class="form-group col-sm-4 col-xs-12">
											<label class="discover-search-label" for="category">of type</label>
										    <select class="form-control search_select" id="type" name="type">
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
										<div class="form-group col-sm-4 col-xs-12">
									    	<label class="discover-search-label" for="category">in</label>
									      	<select class="form-control search_select" id="form-region" name="form-region">
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
								</form>
							</div>
						</div>
						<!------ end of search form ------>
					</div>
				</div>
			</div>
		</div>

		<!-- RESULTS ROW -->
		<div class="container">
			<div class="row margins">
				<div class="col-sm-8 col-xs-12">
					<!-- RESULT 1-->
					<div class="row">
						<div class="search-result-box">
							<div class="col-sm-4 col-xs-12">
								<img class="img img-responsive result-img" src="images/user/stock-img1.jpg" />
							</div>

							<div class="col-sm-6  col-xs-12">
								<h4 class="result-title">Hotel Ipsum</h4>
								<p class="result-caption">Lorem ipsum dolor sit amet. </p>
								<p class="result-icons animated">
                                	<span><img src="images/user/noun_649646_cc.png" /></span>
                                    <span><img src="images/user/noun_728690_cc.png" /></span>
									<span><img src="images/user/noun_889343_cc.png" /></span>
                                    <span><img src="images/user/noun_1026748_cc.png" /></span></p>
								<p class="result-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
									Proin vel nibh vestibulum odio laoreet venenatis. Praesent efficitur vehicula gravida. </p>
							</div>

							<div class="col-sm-2  col-xs-12">
								<div class="stay-cost animated">
									<h3 class="color-blue result-caption">Rs.</h3>
									<h3 class="color-blue">1.2 K</h3>
									<p class="result-caption">per night</p>
								</div>
							</div>
						</div>
					</div>
					<!-- RESULT 2-->
					<div class="row">
						<div class="search-result-box">
							<div class="col-sm-4 col-xs-12">
								<img class="img img-responsive result-img" src="images/user/stock-img2.jpg" />
							</div>

							<div class="col-sm-6 col-xs-12">
								<h4 class="result-title">Hotel Ipsum</h4>
								<p class="result-caption">Lorem ipsum dolor sit amet. </p>
								<p class="result-icons animated">
                                	<span><img src="images/user/noun_649646_cc.png" /></span>
                                    <span><img src="images/user/noun_728690_cc.png" /></span>
									<span><img src="images/user/noun_889343_cc.png" /></span>
                                	<span><img src="images/user/noun_1026748_cc.png" /></span></p>
								<p class="result-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
									Proin vel nibh vestibulum odio laoreet venenatis. Praesent efficitur vehicula gravida. </p>
							</div>

							<div class="col-sm-2 col-xs-12">
								<div class="stay-cost animated">
									<h3 class="color-blue result-caption">Rs.</h3>
									<h3 class="color-blue">1.2 K</h3>
									<p class="result-caption">per night</p>
								</div>
							</div>
						</div>
					</div>
					<!-- RESULT 3-->
					<div class="row">
						<div class="search-result-box">
							<div class="col-sm-4 col-xs-12">
								<img class="img img-responsive result-img" src="images/user/stock-img4.jpg" />
							</div>

							<div class="col-sm-6 col-xs-12">
								<h4 class="result-title">Hotel Ipsum</h4>
								<p class="result-caption">Lorem ipsum dolor sit amet. </p>
								<p class="result-icons animated">
                                	<span><img src="images/user/noun_649646_cc.png" /></span>
                                    <span><img src="images/user/noun_728690_cc.png" /></span>
									<span><img src="images/user/noun_889343_cc.png" /></span>
                                    <span><img src="images/user/noun_1026748_cc.png" /></span>
                                </p>
								<p class="result-description">
                                	Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
									Proin vel nibh vestibulum odio laoreet venenatis. Praesent efficitur vehicula gravida. 
                                </p>
							</div>

							<div class="col-sm-2 col-xs-12">
								<div class="stay-cost animated">
									<h3 class="color-blue result-caption">Rs.</h3>
									<h3 class="color-blue">1.2 K</h3>
									<p class="result-caption">per night</p>
								</div>
							</div>
						</div>
					</div>
					<!-- RESULT 4-->
					<div class="row">
						<div class="search-result-box">
							<div class="col-sm-4 col-xs-12">
								<img class="img img-responsive result-img" src="images/user/stock-img4.jpg" />
							</div>

							<div class="col-sm-6 col-xs-12">
								<h4 class="result-title">Hotel Ipsum</h4>
								<p class="result-caption">Lorem ipsum dolor sit amet. </p>
								<p class="result-icons animated">
                                	<span><img src="images/user/noun_649646_cc.png" /></span>
                                    <span><img src="images/user/noun_728690_cc.png" /></span>
									<span><img src="images/user/noun_889343_cc.png" /></span>
                                    <span><img src="images/user/noun_1026748_cc.png" /></span>
                                </p>
								<p class="result-description">
                                	Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
									Proin vel nibh vestibulum odio laoreet venenatis. Praesent efficitur vehicula gravida. 
                                </p>
							</div>

							<div class="col-sm-2 col-xs-12">
								<div class="stay-cost animated">
									<h3 class="color-blue result-caption">Rs.</h3>
									<h3 class="color-blue">1.2 K</h3>
									<p class="result-caption">per night</p>
								</div>
							</div>
						</div>
					</div>
					<!-- RESULT 5-->
					<div class="row">
						<div class="search-result-box">
							<div class="col-sm-4 col-xs-12">
								<img class="img img-responsive result-img" src="images/user/stock-img4.jpg" />
							</div>

							<div class="col-sm-6 col-xs-12">
								<h4 class="result-title">Hotel Ipsum</h4>
								<p class="result-caption">Lorem ipsum dolor sit amet. </p>
								<p class="result-icons animated">
                                	<span><img src="images/user/noun_649646_cc.png" /></span>
                                    <span><img src="images/user/noun_728690_cc.png" /></span>
									<span><img src="images/user/noun_889343_cc.png" /></span>
                                    <span><img src="images/user/noun_1026748_cc.png" /></span>
                                </p>
								<p class="result-description">
                                	Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
									Proin vel nibh vestibulum odio laoreet venenatis. Praesent efficitur vehicula gravida. 
                                </p>
							</div>

							<div class="col-sm-2 col-xs-12">
								<div class="stay-cost animated">
									<h3 class="color-blue result-caption">Rs.</h3>
									<h3 class="color-blue">1.2 K</h3>
									<p class="result-caption">per night</p>
								</div>
							</div>
						</div>
					</div>
					<!-- END OF RESULTS -->
				</div>

				<div class="col-sm-4 col-xs-12">
					<form class="form-horizontal search-form" action="search.php">
							<div class="form-group checks">
								<p class="search-label">of type </p>
								<div class="checkbox-columns">
									<div class="col-sm-6 col-xs-12">
										<label class="control-label checkbox-label">
											<input class="types" type="checkbox" value="meuseum" name="meuseum" id="meuseum">Meuseum
										</label>
									</div>
									<div class="col-sm-6 col-xs-12">
										<label class="control-label checkbox-label">
											<input class="types" type="checkbox" value="gallery" name="gallery" id="gallery">Gallery
										</label>
									</div>
									<div class="col-sm-6 col-xs-12">
										<label class="control-label checkbox-label">
											<input class="types" type="checkbox" value="beach" name="beach" id="beach">Beach
										</label>
									</div>
									<div class="col-sm-6 col-xs-12">
										<label class="control-label checkbox-label">
											<input class="types" type="checkbox" value="rental" name="rental" id="rental">Rental
										</label>
									</div>
									<div class="col-sm-6 col-xs-12">
										<label class="control-label checkbox-label">
											<input class="types" type="checkbox" value="mosque" name="mosque" id="mosque">Mosque
										</label>
									</div>
									<div class="col-sm-6 col-xs-12">
										<label class="control-label checkbox-label">
											<input class="types" type="checkbox" value="nationalpark" name="nationalpark" id="nationalpark">National Park
										</label>
									</div>
									<div class="col-sm-6 col-xs-12">
										<label class="control-label checkbox-label">
											<input class="types" type="checkbox" value="historicsite" name="historicsite" id="historicsite">Historic Site
										</label>
									</div>
									<div class="col-sm-6 col-xs-12">
										<label class="control-label checkbox-label">
											<input class="types" type="checkbox" value="landmark" name="landmark" id="landmark">Land Mark
										</label>
									</div>
									<div class="col-sm-6 col-xs-12">
										<label class="control-label checkbox-label">
											<input class="types" type="checkbox" value="viewpoint" name="viewpoint" id="viewpoint">View Point
										</label>
									</div>
								</div>
							</div>

							<div class="form-group clearfix">
								<label class="control-label search-label">In Range</label>	
								<div class="col-lg-8 col-md-12">							
									<div data-role="rangeslider">
										<input type="range" name="minPrice" id="minPrice" value="500" min="0" max="50000" step="500"  oninput="rangeOutput.value = minPrice.value">
    									<output name="rangeOutput" id="rangeOutput">500</output>
	      							</div>
								</div>
							</div>
						</form>

					<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyCe0I76FCBsgJP2dh193EWuX2IPST4gn0k&sensor=false"></script>
					<script type="text/javascript">
                    	var latitude= ["34.001527", "33.992333", "33.987094", "34.035952", "34.059421"];
                    	var longitude= ["71.450434", "71.495198", "71.471981", "71.421389", "71.670641"];
                    	var map = null; 
                    	var markerArray = []; 

						function initialize() {
                            var myOptions = {

                                zoom: 12,
                                center: new google.maps.LatLng(latitude[0], longitude[0]),
                                mapTypeControl: true, 
                                mapTypeControlOptions: {
                                    style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
                                },
                                navigationControl: true,
                                mapTypeId: google.maps.MapTypeId.ROADMAP
                            }
                            map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

                            infowindow = new google.maps.InfoWindow({
                                size: new google.maps.Size(150, 50)
                            });

                            google.maps.event.addListener(map, 'click', function() {
                                infowindow.close();
                            });

                            for (var i = 0; i < longitude.length; i++) {                            
                                createMarker(new google.maps.LatLng(latitude[i],longitude[i]));
                            }
							//console.log(description);
                        }

                        var onMarkerClick = function() {
                          var marker = this;
                          var latLng = marker.getPosition();
                          infowindow.open(map, marker);
                        };


	                    function createMarker(latlng){
	                        var marker = new google.maps.Marker({
	                            position: latlng,
	                            icon: icon = "http://maps.google.com/mapfiles/ms/icons/blue.png",
	                            animation: google.maps.Animation.DROP,
	                            map: map
	                        });
	                        google.maps.event.addListener(marker, 'click', onMarkerClick);
	                        markerArray.push(marker);
	                    }

	                    window.onload = initialize;
	                </script>
	              	
	              	<div id="map_canvas"></div>
				</div>

				<!-- SEARCH DESCRIPTION TEXT -->
				<div class="row">
					<div class="col-xs-12 text-center">
						<h4 class="color-black spacing">Showing 3 of 3 results</h4>
					</div>
				</div>

				<!-- SHOW MORE RESULTS -->
				<div class="row">
					<div class="col-xs-12 text-center">
						<a href="#"><button class="btn btn-info">SHOW MORE</button></a>
					</div>
				</div>
			</div>
		</div>
		<!-- END OF RESULTS ROW -->

		<!-- START OF FOOTER -->
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

	<style type="text/css">
        #map_canvas {
            width: 100%;
            height: 600px;
        }
    </style>
	<script type="text/javascript" src="js/user/jquery.min.js" ></script>
	<script type="text/javascript" src="js/user/bootstrap.min.js" ></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.breadcrumb .active').text(window.sessionStorage.getItem('region'));
			$('#region').val(window.sessionStorage.getItem('region'));
			$('#category').val(window.sessionStorage.getItem('category'));
			$('#category-subtype').val(window.sessionStorage.getItem('category-subtype'));


			$('.glyphicon-remove').click(function(){
				$('.search')[0].reset();
			}); 

			// SET SELECTED ACTIVITY
			$('button').click(function() {
				window.sessionStorage.setItem('path', $(this).attr('id'));
				console.log(sessionStorage);
			});

			/*var search_form = document.querySelector('.search-banner-form')
			var menuPosition = search_form.getBoundingClientRect().top;		
			window.addEventListener('scroll', function() {
			    if (window.pageYOffset >= menuPosition) {
			        search_form.style.position = 'fixed';
			        search_form.style.top = '0px';
			    } else if (window.pageYOffset <= menuPosition){
			        search_form.style.position = 'absolute';
			        search_form.style.bottom = '0px';
			    }
			});
			*/
		});
	</script>

</body>
</html>

		
			