<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <?php echo urldecode($title);?>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo base_url();?>Admin/Admin">Home</a></li>
   <!-- <li><a href="<?php //echo base_url();?>Admin/Regions">Regions</a></li>
    <li><a href="<?php //echo base_url();?>Admin/Regions/regionSlider/<?php  //echo $title;?>/<?php //echo $reg_id;?>"><?php //echo urldecode($title)." slider";?></a></li>
    <li>edit</li>-->
  </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="box box-danger">
        <div class="box-body">
        		<?php
				echo form_open_multipart($action,'class="form-horizontal col-sm-12 col-md-12 col-md-offset-0"'); ?>
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
                    <div class="form-group">
					  <label for="heading" class="col-sm-3 control-label">Heading : </label>
					  <div class="col-sm-6">
						<?php 
						$data = array(
									  'name'        => 'heading',
									  'id'          => 'heading',
									  'value'       => set_value('heading',@$slider_data->heading),
									  'class'       => 'form-control input-lg',
									  );
						echo form_input($data);
						echo form_error('heading');
						?>
                      </div>
					</div>
					
                    
                    <div class="form-group">
					  <label for="description" class="col-sm-3 control-label">Description : </label>
					  <div class="col-sm-6">
						<?php 
						$data = array(
									  'name'        => 'description',
									  'id'          => 'description',
									  'class'       => 'textarea form-control input-lg',
									  'rows'        => '5',
									  );
						echo form_textarea($data);
						echo form_error('description');
						?>
                      </div>
					</div>
					
                    <div class="form-group">
					  <label for="link" class="col-sm-3 control-label">Link : </label>
					  <div class="col-sm-6">
						<?php 
						$data = array(
									  'name'        => 'link',
									  'id'          => 'link',
									  'value'       => set_value('link',@$slider_data->link),
									  'class'       => 'form-control input-lg',
									  );
						echo form_input($data);
						echo form_error('link');
						?>
                      </div>
					</div>
                    
                    <div class="form-group">
					  <label for="image" class="col-sm-3 control-label">Image : </label>
					  <div class="col-sm-6">
						<?php 
						$data = array(
									  'name'        => 'image',
									  'id'          => 'image',
									  'value'       => set_value('image',@$slider_data->image),
									  'class'       => 'input-lg',
									  );
						echo form_upload($data);
						echo form_error('image');
						if(!empty($error))
						{ 
						?>
							<span style="color:red;"><?php echo $error['error'];?></span>
						<?php 
						}
						?>
                      </div>
					</div>
                    
                    <div class="form-group">
					  <label for="status" class="col-sm-3 control-label">Status : </label>
					  <div class="col-sm-6">
						<?php 
						$data = array(
									  'name'        => 'status',
									  'id'          => 'status',
									  'class'       => 'input-lg',
									  );
					    $options = array('0'=>'In-Active','1'=>'Active');
						if(!empty($slider_data->status))
						{
							$selected = $slider_data->status;	
						}
						else{
							$selected = $this->input->post('status');
							}
						echo form_dropdown($data,$options,$selected);
						echo form_error('status');
						?>
                      </div>
					</div>
                    
                    
                    <div class="form-group">
					  <label class="col-sm-3 control-label"></label>
					  <div class="col-sm-5">
						<?php 
						
						$data = array(
									  'name'        => 'submit',
									  'id'          => 'submit',
									  'value'       => $button,
									  'class'       => 'btn btn-default  btn-lg col-sm-5 col-xs-5',
									  );
						
						echo form_submit($data);
						?>
                       </div>
                      
                      
					</div>
                 </form>
		    </div>
				  <!-- /.box-body -->
        </div>
        <!-- /.box-body -->
    </div>  
</section>
<?php
if(!empty($slider_data->description))
	{
		echo $slider_data->description;
	}
?>
<!-- /.content -->
<script src="js/admin/jquery-2.2.3.min.js"></script>
<script>
$(document).ready(function(e) {
	$('#slider').addClass('active');
	$('.textarea').html('<?php if(!empty($slider_data->description)){echo $slider_data->description;}else{$data = trim($this->input->post('description'));$data = stripslashes($data);$data = htmlentities($data);echo $data;}?>');
    
});
</script>