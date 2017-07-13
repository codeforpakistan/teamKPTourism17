<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <?php echo urldecode($title);?>
    <small><?php echo $sub_title;?></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="Admin/Admin"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active"><a href="Admin/MainSlider/"><i class="fa fa-dashboard"></i> Main Slider</a></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="box box-danger">
        <div class="box-body">
        	<a href="Admin/MainSlider/sliderForm" class="btn btn-success btn-lg">Add new slide</a><br>
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
			if($slider_data !== false)
			{
			?>	
            
			<table id="slider_table" class="table table-bordered table-striped">
                <thead>
                    <tr>
                      <th>Sr no</th>
                      <th>Heading</th>
                      <th>Description</th>
                      <th>Link</th>
                      <th>image</th>
                      <th>Status</th>
                      <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php
				$a = 1; 
				foreach($slider_data as $key => $value)
				{
				?>
                    <tr>
                      <td><?php echo $a;?></td>
                      <td><?php echo $value['heading'];?></td>
                      <td><?php echo (strlen($value['description']) > 50)?substr($value['description'],0,50)."...":$value['description'];?></td>
                      <td><?php echo $value['link'];?></td>
                      <td><?php echo $value['image'];?></td>
                      <td><?php echo ($value['status'] == 1) ? "Active" :"In-Active" ;?></td>
                      <?php 
					  if(!empty($region) and $region == true)
					  {
					  ?>
                      <td>
                      	<a href="<?php echo base_url();?>Admin/regionSliderForm/<?php echo $title;?>/<?php echo $value['id'];?>/1" class="btn btn-warning btn-sm">Edit</a>
                        <a href="Admin/deleteSlide/<?php echo $value['id'];?>" onClick="return confirm('Are you sure to delete?')" class="btn btn-danger btn-sm">Delete</a>
                      </td>
                      <?php   
					  }
					  else
					  {
					  ?>
                      <td>
                      	<a href="Admin/MainSlider/sliderForm/<?php echo $value['id'];?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="Admin/MainSlider/deleteSlide/<?php echo $value['id'];?>" onClick="return confirm('Are you sure to delete?')" class="btn btn-danger btn-sm">Delete</a>
                      </td>
                      <?php  
					  }
					  ?>
                      
                    </tr>
                <?php
					$a++; 
				}
				?>
                </tbody>
                <tfoot>
                    <tr>
                      <th>Sr no</th>
                      <th>Heading</th>
                      <th>Description</th>
                      <th>Link</th>
                      <th>image</th>
                      <th>Status</th>
                      <th>Actions</th>
                    </tr>
                </tfoot>
              </table>
              
          <?php	
			}
			else{
				echo "No slide found";
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
    $('#slider').addClass('active');
});
</script>
