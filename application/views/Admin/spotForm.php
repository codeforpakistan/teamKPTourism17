<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <?php echo $title;?>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo base_url();?>Admin/"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Spot</li>
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
					  <label for="reg_id" class="col-sm-3 control-label">Select Region : </label>
					  <div class="col-sm-6">
						<?php 
						$data = array(
									  'name'        => 'reg_id',
									  'id'          => 'reg_id',
									  'class'       => 'input-lg',
									  );
						
						if(!empty($reg_id))
						{
							$selected = $reg_id;
						}
						else{
							$selected = $this->input->post('reg_id');
							}
						
						if(!empty($region_data))
						{
							$options = array();
							$options[''] = "--- Select one ---";
							foreach($region_data as $key=>$value)
							{
								$options[$value['reg_id']] = $value['name'];
							}
						}
						else{
							$options[''] = "No Region Found";
							}
						echo form_dropdown($data,$options,$selected);
						echo form_error('reg_id');
						?>
                      </div>
					</div>
                    
                    
                    <div class="form-group">
					  <label for="act_id" class="col-sm-3 control-label">Select Activity : </label>
					  <div class="col-sm-6">
						<?php 
						$data = array(
									  'name'        => 'act_id',
									  'id'          => 'act_id',
									  'class'       => 'input-lg',
									  );
						
						if(!empty($spot_data->act_id))
						{
							$selected = $spot_data->act_id;	
						}
						else{
							$selected = $this->input->post('act_id');
							}
						unset($options);
						if(!empty($activity_data))
						{
							$options = array();
							$options[''] = "--- Select one ---";
							foreach($activity_data as $key=>$value)
							{
								$options[$value['act_id']] = $value['name'];
							}
						}
						else{
							$options[''] = "No Activity Found";
							}
						echo form_dropdown($data,$options,$selected);
						echo form_error('act_id');
						?>
                      </div>
					</div>
                    
                    <div class="form-group">
					  <label for="name" class="col-sm-3 control-label">Spot Name : </label>
					  <div class="col-sm-6">
						<?php 
						$data = array(
									  'name'        => 'name',
									  'id'          => 'name',
									  'value'       => set_value('name',@$spot_data->name),
									  'class'       => 'form-control input-lg',
									  );
						echo form_input($data);
						echo form_error('name');
						?>
                      </div>
					</div>
                    
					<div class="form-group">
                    <label for="address" class="col-sm-3 control-label">Address : </label>
					  <div class="col-sm-6">
						<?php 
						$data = array(
									  'name'        => 'address',
									  'id'          => 'address',
									  'value'       => set_value('address',@$spot_data->address),
									  'class'       => 'form-control input-lg',
									  );
						echo form_input($data);
						echo form_error('address');
						?>
                      </div>
					</div>
					
                    <div class="form-group">
                      <label for="contact" class="col-sm-3 control-label">Contact : </label>
					  <div class="col-sm-6">
						<?php 
						$data = array(
									  'name'        => 'contact',
									  'id'          => 'contact',
									  'value'       => set_value('contact',@$spot_data->contact),
									  'class'       => 'form-control input-lg',
									  );
						echo form_input($data);
						echo form_error('contact');
						?>
                      </div>
					</div>
					
                    <div class="form-group">
                      <label for="email" class="col-sm-3 control-label">Email : </label>
					  <div class="col-sm-6">
						<?php 
						$data = array(
									  'name'        => 'email',
									  'id'          => 'email',
									  'value'       => set_value('email',@$spot_data->email),
									  'class'       => 'form-control input-lg',
									  );
						echo form_input($data);
						echo form_error('email');
						?>
                      </div>
					</div>
                    
                  <div class="form-group">
                      <label for="website" class="col-sm-3 control-label">Website : </label>
					  <div class="col-sm-6">
						<?php 
						$data = array(
									  'name'        => 'website',
									  'id'          => 'website',
									  'value'       => set_value('website',@$spot_data->website),
									  'class'       => 'form-control input-lg',
									  );
						echo form_input($data);
						echo form_error('website');
						?>
                      </div>
				  </div>
                  
                  <div class="form-group">
                      <label for="open_timing" class="col-sm-3 control-label">Open Timing : </label>
					  <div class="col-sm-6">
						<?php 
						$data = array(
									  'name'        => 'open_timing',
									  'id'          => 'open_timing',
									  'value'       => set_value('open_timing',@$spot_data->open_timing),
									  'class'       => 'form-control input-lg',
									  );
						echo form_input($data);
						echo form_error('open_timing');
						?>
                      </div>
				  </div>
                  
                  <div class="form-group">
                      <label for="close_timing" class="col-sm-3 control-label">Close Timing : </label>
					  <div class="col-sm-6">
						<?php 
						$data = array(
									  'name'        => 'close_timing',
									  'id'          => 'close_timing',
									  'value'       => set_value('close_timing',@$spot_data->close_timing),
									  'class'       => 'form-control input-lg',
									  );
						echo form_input($data);
						echo form_error('close_timing');
						?>
                      </div>
				  </div>
                  
                  
                   <div class="form-group">
                    <label for="rating" class="col-sm-3 control-label">Rating : </label>
					  <div class="col-sm-6">
						<?php 
						$data = array(
									  'name'        => 'rating',
									  'id'          => 'rating',
									  'class'       => 'form-control input-lg',
									  );
						if(!empty($spot_data->rating))
						{
							$selected = $spot_data->rating;	
						}
						else{
							$selected = $this->input->post('rating');
							}
						
						$options = array(''=>'--- select one ---','1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5');
						echo form_dropdown($data,$options,$selected);
						echo form_error('rating');
						?>
                      </div>
				  </div>
                  
                  <div class="form-group">
                      <label for="latitude" class="col-sm-3 control-label">Latitude : </label>
					  <div class="col-sm-6">
						<?php 
						$data = array(
									  'name'        => 'latitude',
									  'id'          => 'latitude',
									  'value'       => set_value('latitude',@$spot_data->latitude),
									  'class'       => 'form-control input-lg',
									  );
						echo form_input($data);
						echo form_error('latitude');
						?>
                      </div>
				  </div>
                  
                  <div class="form-group">
                      <label for="longitude" class="col-sm-3 control-label">Longitude : </label>
					  <div class="col-sm-6">
						<?php 
						$data = array(
									  'name'        => 'longitude',
									  'id'          => 'longitude',
									  'value'       => set_value('longitude',@$spot_data->longitude),
									  'class'       => 'form-control input-lg',
									  );
						echo form_input($data);
						echo form_error('longitude');
						?>
                      </div>
				  </div>
                  
                  
                  <div class="form-group">
					  <label for="header_image" class="col-sm-3 control-label">Header image : </label>
					  <div class="col-sm-6">
						<?php 
						$data = array(
									  'name'        => 'header_image',
									  'id'          => 'header_image',
									  'value'       => set_value('header_image',@$spot_data->header_image),
									  'class'       => 'input-lg',
									  );
						echo form_upload($data);
						echo form_error('header_image');
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
					  <label for="category" class="col-sm-3 control-label">Category : </label>
					  <div class="col-sm-6">
						<?php 
						$data = array(
									  'name'        => 'category',
									  'id'          => 'category',
									  'class'       => 'input-lg',
									  );
						
						if(!empty($spot_data->category))
						{
							$selected = $spot_data->category;	
						}
						else{
							$selected = $this->input->post('category');
							}
						
							
						if(!empty($spot_cat))
						{
							$selected = $spot_cat[0]['cat_id'];
							
						}

						unset($options);
						if(!empty($category_data))
						{
							$options = array();
							$options[''] = "--- Select one ---";
							foreach($category_data as $key=>$value)
							{
								$options[$value['cat_id']] = $value['name'];
							}
						}
						else{
							$options[''] = "No Category Found";
							}
						
						echo form_dropdown($data,$options,$selected);
						echo form_error('category');
						?>
                      </div>
					</div>
                    
                    <div class="form-group">
					  <label for="type" class="col-sm-3 control-label">Type : </label>
					  <div class="col-sm-6">
						<?php 
						$data = array(
									  'name'        => 'type',
									  'id'          => 'type',
									  'class'       => 'input-lg',
									  );
						
						if(!empty($spot_data->type))
						{
							$selected = $spot_data->type;	
						}
						else{
							$selected = $this->input->post('type');
							}
						
						unset($options);
						if(!empty($type_data))
						{
							$options = array();
							$options[''] = "--- Select one ---";
							foreach($type_data as $key=>$value)
							{
								$options[$value['type_id']] = $value['name'];
							}
						}
						else{
							$options[''] = "No Type Found";
							}
						
						echo form_dropdown($data,$options,$selected);
						echo form_error('type');
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
						unset($options);
						if(!empty($spot_data->status))
						{
							$selected = $spot_data->status;	
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
<?php 
?>
<!-- /.content -->
<script src="js/admin/jquery-2.2.3.min.js"></script>
<script>
$(document).ready(function(e) {
	$('#spots').addClass('active');
	$('textarea').html("<?php 
	if(!empty($spot_data->description))
	{
		echo $spot_data->description;
	}
	else
	{
		$data = trim($this->input->post('description'));
		$data = stripslashes($data);
		$data = htmlentities($data);
		echo $data;
	}

	?>");
	$("#reg_id").change(function(){
		$.ajax({
			url: "<?php echo base_url();?>Admin/Spots/getRegAct/",
			data: {reg_id:$(this).val()},
			type: "post",
			success: function(r)
			{
				$("#act_id").html(r);
			}
			});
	});
	
	$("#category").change(function(){
		$.ajax({
			url: "<?php echo base_url();?>Admin/Spots/getCatType/",
			data: {cat_id:$(this).val()},
			type: "post",
			success: function(r)
			{
				$("#type").html(r);
			}
			});
	});
});
</script>