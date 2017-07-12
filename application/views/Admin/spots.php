<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Activity Spots in 
	<?php 
	echo $region_name['name'];
	//$this->session->set_userdata("username" , $username);
	?>
  </h1>
  <ol class="breadcrumb">
    <li><a href="Admin/Admin">Home</a></li>
    <li><a href="Admin/Regions">Regions</a></li>
    <li class="active">Spots</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="box box-danger">
        <div class="box-body">
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
			
			if($spots_data !== false)
			{
			?>	
            
			<table id="spots_table" class="table table-bordered table-striped">
                <thead>
                    <tr>
                      <th>Sr no</th>
                      <th>Spot Name</th>
                      <th>Activity</th>
                      <th>Address</th>
                      <th>Status</th>
                      <th>Gallery</th>
                      <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php
				$a = 1; 
				foreach($spots_data as $key => $value)
				{
				?>
                    <tr>
                      <td><?php echo $a;?></td>
                      <td><?php echo $value['spot_name'];?></td>
                      <td><?php echo $value['act_name'];?></td>
                      <td><?php echo $value['address'];?></td>
                      <td><?php echo ($value['status'] == 1) ? "Active" :"In-Active" ;?></td>
                      <td>
                      <a href="<?php echo base_url();?>Admin/Spots/spotsGallery/<?php echo $value['spot_id'];?>" class="btn btn-warning btn-sm">Gallery</a>
                      </td>
                      <td>
                      	<a href="<?php echo base_url();?>Admin/Spots/index/<?php echo $reg_id;?>/<?php echo $value['spot_id'];?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="<?php echo base_url();?>Admin/Spots/deleteSpot/<?php echo $reg_id;?>/<?php echo $value['spot_id'];?>" onClick="return confirm('Are you sure to delete?')" class="btn btn-danger btn-sm">Delete</a>
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
                      <th>Spot Name</th>
                      <th>Activity</th>
                      <th>Address</th>
                      <th>Status</th>
                      <th>Gallery</th>
                      <th>Actions</th>
                    </tr>
                </tfoot>
              </table>
              
          <?php	
			}
			else{
				echo "No Spots found";
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
    //$('#spots').addClass('active');
});
</script>