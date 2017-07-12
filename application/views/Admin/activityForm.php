<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <?php echo $title;?>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo base_url();?>Admin/"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Activity</li>
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
					  <label for="region" class="col-sm-3 control-label">Select Region : </label>
					  <div class="col-sm-6">
						<?php 
						$data = array(
									  'name'        => 'region',
									  'id'          => 'region',
									  'class'       => 'input-lg',
									  );
						
						if(!empty($activity_data->reg_id))
						{
							$selected = $activity_data->reg_id;	
						}
						else{
							$selected = $this->input->post('region');
							}
						
						if(!empty($regions_data))
						{
							$options = array();
							foreach($regions_data as $key=>$value)
							{
								$options[$value['reg_id']] = $value['name'];
							}
						}
						else{
							$options[''] = "No region Found";
							}
						
						echo form_dropdown($data,$options,$selected);
						echo form_error('region');
						?>
                      </div>
					</div>
                    
                    <div class="form-group">
					  <label for="name" class="col-sm-3 control-label">Name : </label>
					  <div class="col-sm-6">
						<?php 
						$data = array(
									  'name'        => 'name',
									  'id'          => 'name',
									  'value'       => set_value('name',@$activity_data->name),
									  'class'       => 'form-control input-lg',
									  );
						echo form_input($data);
						echo form_error('name');
						?>
                      </div>
					</div>
					<div class="form-group">
                    <label for="location" class="col-sm-3 control-label">Spots Detail : </label>
					  <div class="col-sm-6">
						<?php 
						$data = array(
									  'name'        => 'spots_detail',
									  'id'          => 'spots_detail',
									  'value'       => set_value('spots_detail',@$activity_data->spots_detail),
									  'class'       => 'form-control input-lg',
									  );
						echo form_input($data);
						echo form_error('spots_detail');
						?>
                      </div>
					</div>
					
                    
                  <div class="form-group">
					  <label for="icon" class="col-sm-3 control-label">Icon : </label>
					  <div class="col-sm-6">
						<?php 
						$data = array(
									  'name'        => 'icon',
									  'id'          => 'icon',
									  'value'       => set_value('icon',@$activty_data->icon),
									  'class'       => 'input-lg',
									  );
						echo form_upload($data);
						echo form_error('icon');
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
					  <label for="image" class="col-sm-3 control-label">Image : </label>
					  <div class="col-sm-6">
						<?php 
						$data = array(
									  'name'        => 'image',
									  'id'          => 'image',
									  'value'       => set_value('image',@$activity_data->image),
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
					  <label for="description" class="col-sm-3 control-label">Description : </label>
					  <div class="col-sm-6">
						<?php 
						$data = array(
									  'name'        => 'description',
									  'id'          => 'description',
									  'value'       => set_value('description'),
									  'class'       => 'textarea form-control input-lg',
									  'rows'        => '5',
									  );
						echo form_textarea($data);
						echo form_error('description');
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
						
						if(!empty($activity_data->status))
						{
							$selected = $activity_data->status;	
						}
						else{
							$selected = $this->input->post('status');
							}
						
						$options = array('0'=>'In-Active','1'=>'Active');
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
									  'class'       => 'btn btn-default btn-lg col-sm-5 col-xs-5',
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
<!-- /.content -->
<script src="js/admin/jquery-2.2.3.min.js"></script>
<script>
$(document).ready(function(e) {
	$('#activity').addClass('active');
	$('textarea').html('<?php if(!empty($activity_data->description)){echo $activity_data->description;}else{$data = trim($this->input->post('description'));$data = stripslashes($data);$data = htmlentities($data);echo $data;}?>');
    
});
</script>