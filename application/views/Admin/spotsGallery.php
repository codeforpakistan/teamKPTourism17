<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <?php echo $spot_name[0]['name'];?> Gallery
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
        	<a href="javascript:;" id="add_images" class="btn btn-success btn-lg">Add images</a><br>
            <?php 
			if($this->session->flashdata("danger") == true)
			{ 
				echo $this->session->flashdata("danger");
			}
			if($this->session->flashdata("success") == true)
			{ 
				echo $this->session->flashdata("success");
			}
			
			if(!empty($not_inserted))
			{
				echo "Images not inserted are :";
				foreach($not_inserted as $key=>$value)
				{
					echo $value."<br>";
				}
			}
			echo form_error('fileupload_check');
			echo form_open_multipart('Admin/Spots/addGallery/'.$spot_id,'class="form-horizontal col-sm-12 col-md-12 col-md-offset-0" id="gallery_form"'); 				            ?>
		        <div class="box-body">
                  <div class="form-group">
					  <label for="images" class="col-sm-3 control-label">Gallery Images : </label>
					  <div class="col-sm-6">
						<input type="file" name="images[]" id="images" class="input-lg" multiple>
					  </div>
					</div>
                    
                    <div class="form-group">
					  <label class="col-sm-3 control-label"></label>
					  <div class="col-sm-5">
						<?php 
						
						$data = array(
									  'name'        => 'submit',
									  'id'          => 'submit',
									  'value'       => 'Add',
									  'class'       => 'btn btn-default btn-lg col-sm-5 col-xs-5',
									  );
						
						echo form_submit($data);
						?>
                      </div>
                   </div>
                 </div>
                 </form>
        	
			<?php
			
			if($gallery_data !== false)
			{
			?>	
            
			<table id="spots_table" class="table table-bordered table-striped">
                <thead>
                    <tr>
                      <th>Sr no</th>
                      <th>Image name</th>
                      <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php
				$a = 1; 
				foreach($gallery_data as $key => $value)
				{
				?>
                    <tr>
                      <td><?php echo $a;?></td>
                      <td><?php echo $value['image'];?></td>
                      <td>
                        <a href="<?php echo base_url();?>Admin/Spots/deleteSpotImage/<?php echo $value['spot_id'];?>/<?php echo $value['id'];?>" onClick="return confirm('Are you sure to delete?')" class="btn btn-danger btn-sm">Delete</a>
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
                      <th>Image</th>
                      <th>Actions</th>
                    </tr>
                </tfoot>
              </table>
              
          <?php	
			}
			else{
				echo "No image found in gallery";
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
    $('#gallery_form').hide();
	$("#add_images").click(function(e) {
        $('#gallery_form').slideToggle(300);
    });
});



</script>