<body class="pattern animated fadeIn">
	
    <link rel='stylesheet' href='css/user/images-grid.css' type='text/css' />
	
    <!-- TOP DIV -->
	<div class="content">
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
						  <li><a class="selected-area" href="<?php echo base_url();?>detail/"></a></li>
						  <li><a class="activity" href="<?php echo base_url();?>actvities/"></a></li>
						  <li class="active"><?php echo ($folder == 'events')? $data->title :$data->name;?></li>
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
					<div class="trekkingMainPage-banner">
                    	<img class="img img-responsive" width="100%" src="<?php echo base_url();?>images/admin/<?php echo $folder;?>/<?php echo $data->header_image;?>" />
					</div>
				</div>
			</div>
		</div>
		<!-- END OF BANNER DIV -->
		
		<!-- ABOUT DIV -->
		<div class="white_bg about">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
                    <?php 
					if(!empty($data))
					{
					?>
						<h2 class="color-black heading_large text-center"><?php echo ($folder == 'events')? $data->title :$data->name;?></h2>
						<h4 class="color-blue text-center">what should be here?</h4>
						<div class="col-lg-7 col-md-7 col-sm-12">
							<div class="trek-text color-black paddi">
							<?php 
                            	echo html_entity_decode($data->description);
                            ?>
							</div>
						</div>	
						<div class="col-lg-5 col-md-5 col-sm-12">
							<div class="address_div">
								<h5>Address</h5>
								<p><?php echo $data->address;?></p>
								<h5>open</h5>
								<p><?php echo $data->open_timing;?></p>
								<h5>close</h5>
								<p><?php echo $data->close_timing;?></p>
								<h5>ratings</h5>
								<p class="ratings">
                                	<?php 
									for($a=0;$a<$data->rating;$a++)
									{
									?>
                                	<span class="filled_stars_white">&#9734;</span>
                                    <?php 
                                    }
									?>
                                </p>
								<h5>phone</h5>
								<p><?php echo $data->contact;?></p>
								<h5>email</h5>
								<p><?php echo $data->email;?></p>
								<h5>website</h5>
								<p><?php echo $data->website;?></p>
							</div>
							<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyCe0I76FCBsgJP2dh193EWuX2IPST4gn0k&sensor=false"></script>
							<script type="text/javascript">
		                    	var latitude= ["<?php echo $data->latitude;?>"];
		                    	var longitude= ["<?php echo $data->longitude;?>"];
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
					</div>
                    
                    <?php 
					}
					?>
				</div>
			</div>
		</div>

				
		<?php
		if(!empty($gallery))
		{
		?>
		<!-- GALLERY  DIV -->
		<div class="gray_bg about">
			<div class="container">
					<div class="col-xs-12">
						<h2 class="color-black heading_large text-center">A Glimpse</h2>
						<h4 class="color-blue text-center">Lorem ipsum dolor sit amet</h4>	
						<div id="gallery" class="spacing"></div>						
					</div>
			</div>
		</div>
		<!-- END OF GALLERY DIV -->
        <?php 
		}
		?>
		<!-- START OF ALSO VISIT -->
        <?php 
		if(!empty($random_spots))
		{
		?>
		<div class="gray_bg about">
			<div class="container">
				<div class="col-xs-12">
					<h2 class="color-black heading_large text-center">You may also like</h2>
					<h4 class="color-blue text-center">What should be here?</h4>	
					<?php 
					
						foreach($random_spots as $key=>$value)
						{
					?>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center">
                            <div class="also-visit-box margins">
                                <img class="img img-responsive" src="<?php echo base_url();?>images/admin/spots/<?php echo $value['header_image'];?>" />
                                <h4 class="color-black"><?php echo $value['name'];?></h4>
                                <p class="color-text"><?php echo $value['address'];?></p>
                                <a href="<?php echo base_url()?>User/User/activity/<?php echo $value['spot_id'];?>"><button class="btn btn-primary gotopage">MORE INFO</button></a>
                            </div>	
                        </div>
                    <?php
						}
					?>	
				</div>
			</div>
		</div>
        
       <?php 
		}
		/*else
		{
			echo "No liked spots";
		}*/
		?> 
        
		<!-- END OF ALSO VISIT -->

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
<script type="text/javascript" src="js/user/images-grid.js"></script> 
<script type="text/javascript">
	$(document).ready(function(){
		//show selected area in breadcrumb
		$('.selected-area').text(window.sessionStorage.getItem('region'));
		$('.activity').text(window.sessionStorage.getItem('activity')); 

		$('#gallery').imagesGrid({
                images: [
				<?php
				if(!empty($gallery))
				{ 
					foreach($gallery as $key=>$value)
					{
					?>
						{ src: '<?php echo base_url();?>images/admin/<?php echo $folder;?>/<?php echo $value['image'];?>' },
					<?php 
					}
				}
				?>
				],
                align: true
        });

		// SET SELECTED ACTIVITY
		$('button').click(function() {
			window.sessionStorage.setItem('path', $(this).attr('id'));
			console.log(sessionStorage);
		});
	});
</script>
<style type="text/css">
#map_canvas {
	width: 100%;
	height: 300px;
}
</style>
