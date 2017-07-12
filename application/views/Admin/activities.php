<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Activities in <?php echo $region_name['name'];?>
  </h1>
  <ol class="breadcrumb">
    <li><a href="Admin/Admin"> Home</a></li>
    <li class="active"><a href="Admin/Regions/"> Regions</a></li>
    <li class="active"> Activities</li>
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
			if($activities_data !== false)
			{
			?>	
            
			<table id="slider_table" class="table table-bordered table-striped">
                <thead>
                    <tr>
                      <th>Sr no</th>
                      <th>Name</th>
                      <th>Spots Detail</th>
                      <th>Icon</th>
                      <th>Image</th>
                      <th>Description</th>
                      <th>Status</th>
                      <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php
				$a = 1; 
				foreach($activities_data as $key => $value)
				{
				?>
                    <tr>
                      <td><?php echo $a;?></td>
                      <td><?php echo $value['name'];?></td>
                      <td><?php echo $value['spots_detail'];?></td>
                      <td><?php echo $value['icon'];?></td>
                      <td><?php echo $value['image'];?></td>
                      <td><?php echo (strlen($value['description']) > 50)?substr($value['description'],0,50)."...":$value['description'];?></td>
                      <td><?php echo ($value['status'] == 1) ? "Active" :"In-Active" ;?></td>
                      <td>
                      	<a href="<?php echo base_url();?>Admin/Activities/index/<?php echo $value['act_id'];?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="<?php echo base_url();?>Admin/Activities/deleteActivity/<?php echo $region_id."/";echo $value['act_id'];?>" onClick="return confirm('Are you sure to delete?')" class="btn btn-danger btn-sm">Delete</a>
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
                      <th>Spots Detail</th>
                      <th>Icon</th>
                      <th>Image</th>
                      <th>Description</th>
                      <th>Status</th>
                      <th>Actions</th>
                    </tr>
                </tfoot>
              </table>
              
          <?php	
			}
			else{
				echo "No Activity found";
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
/*$(document).ready(function(e) {
    $('#activity').addClass('active');
});*/
</script>
