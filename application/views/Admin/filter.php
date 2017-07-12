<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <?php echo urldecode($title);?>
  </h1>
  <ol class="breadcrumb">
    <li><a href="Admin/Admin">Home</a></li>
    <li class="active">Filter</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="box box-danger">
        <div class="box-body">
        	<a href="Admin/Filters/categoryForm" class="btn btn-success btn-lg">Add Category</a>
            <br>
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
			if($category_data !== false)
			{
			?>	
            
			<table id="category_table" class="table table-bordered table-striped col-sm-6">
                <thead>
                    <tr>
                      <th>Sr no</th>
                      <th>Name</th>
                      <th>Status</th>
                      <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php
				$a = 1; 
				foreach($category_data as $key => $value)
				{
				?>
                    <tr>
                      <td><?php echo $a;?></td>
                      <td><?php echo $value['name'];?></td>
                      <td><?php echo ($value['status'] == 1) ? "Active" :"In-Active" ;?></td>
                      <td>
                      	<a href="<?php echo base_url();?>Admin/Filters/categoryForm/<?php echo $value['cat_id'];?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="<?php echo base_url();?>Admin/Filters/deleteCategory/<?php echo $value['cat_id'];?>" onClick="return confirm('Are you sure to delete?')" class="btn btn-danger btn-sm">Delete</a>
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
                      <th>Status</th>
                      <th>Actions</th>
                    </tr>
                </tfoot>
              </table>
              
          <?php	
			}
			else{
				echo "No Category found";
				}
			
			
			?>
        	<br>
            <a href="Admin/Filters/typeForm" class="btn btn-success btn-lg">Add Type</a><br>
            <?php 
			if($type_data !== false)
			{
			?>	
            
			<table id="type_table" class="table table-bordered table-striped col-sm-6">
                <thead>
                    <tr>
                      <th>Sr no</th>
                      <th>Type Name</th>
                      <th>Category</th>
                      <th>Status</th>
                      <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php
				$a = 1; 
				foreach($type_data as $key => $value)
				{
				?>
                    <tr>
                      <td><?php echo $a;?></td>
                      <td><?php echo $value['name'];?></td>
                      <td>
					  	<?php 
						foreach($category_data as $cKey => $cValue)
						{
							if($cValue['cat_id'] == $value['cat_id'])
							{
								echo $cValue['name'];
							}
						}
						?>
                      </td>
                      <td><?php echo ($value['status'] == 1) ? "Active" :"In-Active" ;?></td>
                      <td>
                      	<a href="<?php echo base_url();?>Admin/Filters/typeForm/<?php echo $value['type_id'];?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="<?php echo base_url();?>Admin/Filters/deleteType/<?php echo $value['type_id'];?>" onClick="return confirm('Are you sure to delete?')" class="btn btn-danger btn-sm">Delete</a>
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
                      <th>Type Name</th>
                      <th>Category</th>
                      <th>Status</th>
                      <th>Actions</th>
                    </tr>
                </tfoot>
              </table>
              
          <?php	
			}
			else{
				echo "No Type found";
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
    $('#filters').addClass('active');
});
</script>