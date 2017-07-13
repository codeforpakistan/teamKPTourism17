<body class="white_bg animated fadeIn">
	<div class="content">	
		<!-- TOP DIV -->	
		<div class="container">	
			<!-- TOP LOGO AND MENU DIV -->
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
						  <li><a href="<?php echo base_url();?>home">Home</a></li>
						  <li><a href="<?php echo base_url();?>discover">Discover</a></li>							  
						 <!-- <li><a href="<?php //echo base_url();?>">Area & Activities</a></li>	
						  <li class="active"></li>-->
						</ol>
					</div>
					<!-- ELEVATION AND WEATHER DIV -->				
					<div class="col-sm-6 col-xs-12">
						<div class="col-sm-6 col-xs-12">
						</div>
						<div class="col-sm-6 col-xs-12">
							<p class="about_elevation"></p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- BANNER ROW -->
		<div class="container-fluid">
			<div class="row">
				<div class="banner-wrapper">
					<div class="trekPages_banner">
						<img class="img img-responsive" width="100%" src="<?php echo base_url();?>images/Admin/activities/<?php echo $act_image->image;?>" />
					</div>
				</div>
			</div>
		</div>
        <!-- RESULTS ROW -->
		<div class="spacing">
        	<?php 
			if(!empty($activity_spots))
			{
			?>
			<div class="container">
				<div class="row">
                	<?php 
					
						foreach($activity_spots as $key => $value)
						{
					?>
                        <div class="col-lg-4 col-md-4 col-sm-12 text-center">
                            <div class="search-results">
                                <img src="<?php echo base_url();?>images/admin/spots/<?php echo $value['header_image'];?>" class="img img-responsive ">
                                <div class="search-section">
                                    <h3 class="color-black"><?php echo $value['name'];?></h3>
                                    <p class="color-text">This text is remaining</p>
                                </div>
                                <div class="search-section">
                                    <h4 class="color-black">Address</h4>
                                    <p class="color-text"><?php echo $value['name'];?></p>
                                </div>
                                <div class="search-section contact">
                                    <h4 class="color-black">Contact</h4>
                                    <p class="color-text"><?php echo $value['contact'];?></p>
                                    <p class="color-text"><?php echo $value['website'];?></p>
                                </div>
                                <a href="<?php echo base_url();?>activity/<?php echo $value['spot_id'];?>"><button id="site-1" class="btn btn-primary gotopage">EXPLORE</button></a>
                            </div>	
                        </div>
                    <?php 
						}
					?>
				</div>

				<!-- SHOW MORE RESULTS -->
				<div class="row">
					<div class="padding">
						<div class="col-xs-12 text-center">
							<a href="#"><button class="btn btn-info">SHOW MORE</button></a>
						</div>
					</div>
				</div>
			</div>
            <?php 
			}
			else{
				echo "No spots found for this Activity";
				
				}
			?>
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
		<!-- END OF FOOTER -->
	</div>

</body>

<script type="text/javascript" src="js/user/jquery.min.js" ></script>
<script type="text/javascript" src="js/user/bootstrap.min.js" ></script>
<script type="text/javascript">
	$(document).ready(function(){
		//show selected area in breadcrumb
		$('.breadcrumb .active').html(window.sessionStorage.getItem('activity'));  

		// SET SELECTED ACTIVITY
		$('button').click(function() {
			window.sessionStorage.setItem('activitydetail', $(this).attr('id'));
			console.log(sessionStorage);
		});
	});
</script>