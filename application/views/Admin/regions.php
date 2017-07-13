<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <?php echo urldecode($title);?>
  </h1>
  <ol class="breadcrumb">
    <li><a href="Admin/Admin">Home</a></li>
    <li class="active">Regions</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="box box-danger">
        <div class="box-body">
        	<a href="Admin/Regions/regionForm" class="btn btn-success btn-lg">Add new Region</a><br>
        	<?php
				if($this->session->flashdata("danger") == true)
				{ 
					echo $this->session->flashdata("danger");
				}
				if($this->session->flashdata("success") == true)
				{ 
					echo $this->session->flashdata("success");
				}
			?>
			
			<?php 
			if($regions_data !== false)
			{
			?>	
            
			<table id="slider_table" class="table table-bordered table-striped">
                <thead>
                    <tr>
                      <th>Sr no</th>
                      <th>Name</th>
                      <th>Location</th>
                      <th>Weather</th>
                      <th>Status</th>
                      <th>Details</th>
                    </tr>
                </thead>
                <tbody>
                <?php
				$a = 1; 
				foreach($regions_data as $key => $value)
				{
				?>
                    <tr>
                      <td><?php echo $a;?></td>
                      <td><?php echo $value['name'];?></td>
                      <td><?php echo $value['location'];?></td>
                      <td><?php echo $value['weather'];?></td>
                      <td><?php echo ($value['status'] == 1) ? "Active" :"In-Active" ;?></td>
                      <td>
                      	<a href="<?php echo base_url();?>Admin/Restaurants/Restaurants/<?php echo $value['reg_id'];?>" class="btn btn-warning btn-sm">
                        	View Restaurants
                        </a>
                      	<a href="<?php echo base_url();?>Admin/EventsTours/Events/<?php echo $value['reg_id'];?>" class="btn btn-warning btn-sm">
                        	View Events/Tours
                        </a>
                      	<a href="<?php echo base_url();?>Admin/Sights/Sights/<?php echo $value['reg_id'];?>" class="btn btn-warning btn-sm">
                        	View Sights
                        </a>
                      	<a href="<?php echo base_url();?>Admin/Activities/Activities/<?php echo $value['reg_id'];?>" class="btn btn-warning btn-sm">
                        	View activities
                        </a>
                      	<a href="<?php echo base_url();?>Admin/Spots/Spots/<?php echo $value['reg_id'];?>" class="btn btn-warning btn-sm">
                        	View Spots
                        </a>
                      	<a href="<?php echo base_url();?>Admin/Regions/regionSlider/<?php echo $value['name'];?>/<?php echo $value['reg_id'];?>" class="btn btn-warning btn-sm">View Slider
                        </a>
                        <br><br>	
                      	<a href="<?php echo base_url();?>Admin/Regions/regionForm/<?php echo $value['reg_id'];?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="<?php echo base_url();?>Admin/Regions/deleteRegion/<?php echo $value['reg_id'];?>" onClick="return confirm('Are you sure to delete?')" class="btn btn-danger btn-sm">Delete</a>
                      </td>
                    </tr>
                <?php
					$a++; 
				}
				?>
                </tbody>
                <tfoot>
                    <tr>
                      <th>Sr no</th>
                      <th>Name</th>
                      <th>Location</th>
                      <th>Weather</th>
                      <th>Status</th>
					  <th>Details</th>                    
                     </tr>
                </tfoot>
              </table>
              
          <?php	
			}
			else{
				echo "No Region found";
				}
			
			
			?>
        	
		    	  <!-- /.box-body -->
        </div>
        <!-- /.box-body -->
    </div>  
</section>
<!-- /.content -->
<script src="js/admin/jquery-2.2.3.min.js"></script>
<script>
$(document).ready(function(e) {
    $('#regions').addClass('active');
});
</script>