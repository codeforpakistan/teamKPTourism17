<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <?php echo $title;?>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo base_url();?>Admin/"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Activiy</li>
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
					  <label for="name" class="col-sm-3 control-label">Region name : </label>
					  <div class="col-sm-6">
						<?php 
						$data = array(
									  'name'        => 'name',
									  'id'          => 'name',
									  'value'       => set_value('name',@$region_data->name),
									  'class'       => 'form-control input-lg',
									  );
						echo form_input($data);
						echo form_error('name');
						?>
                      </div>
					</div>
					<div class="form-group">
                    <label for="location" class="col-sm-3 control-label">Location : </label>
					  <div class="col-sm-6">
						<?php 
						$data = array(
									  'name'        => 'location',
									  'id'          => 'location',
									  'value'       => set_value('location',@$region_data->location),
									  'class'       => 'form-control input-lg',
									  );
						echo form_input($data);
						echo form_error('location');
						?>
                      </div>
					</div>
                    
                    <div class="form-group">
                      <label for="elevation" class="col-sm-3 control-label">Elevation : </label>
					  <div class="col-sm-6">
                      	<div class="input-group">
                      	<?php 
						$data = array(
									  'name'        => 'elevation',
									  'id'          => 'elevation',
									  'value'       => set_value('elevation',@$region_data->elevation),
									  'class'       => 'form-control input-lg',
									  );
						echo form_input($data);
						?>
                        	<div class="input-group-addon">
                            	Meter
                        	</div>
                        	<br>
						<?php
						echo form_error('elevation');
						?>
                        </div>
                      </div>
					</div>
					
                    <div class="form-group">
                      <label for="heading" class="col-sm-3 control-label">Heading : </label>
					  <div class="col-sm-6">
						<?php 
						$data = array(
									  'name'        => 'heading',
									  'id'          => 'heading',
									  'value'       => set_value('heading',@$region_data->heading),
									  'class'       => 'form-control input-lg',
									  );
						echo form_input($data);
						echo form_error('heading');
						?>
                      </div>
					</div>
                    
                  <div class="form-group">
                      <label for="heading_desc" class="col-sm-3 control-label">Sub heading: </label>
					  <div class="col-sm-6">
						<?php 
						$data = array(
									  'name'        => 'heading_desc',
									  'id'          => 'heading_desc',
									  'value'       => set_value('heading_desc',@$region_data->heading_desc),
									  'class'       => 'form-control input-lg',
									  );
						echo form_input($data);
						echo form_error('heading_desc');
						?>
                      </div>
					</div>
                  <div class="form-group">
                    <label for="rating" class="col-sm-3 control-label">Rating: </label>
					  <div class="col-sm-6">
						<?php 
						$data = array(
									  'name'        => 'rating',
									  'id'          => 'rating',
									  'class'       => 'form-control input-lg',
									  );
						if(!empty($region_data->rating))
						{
							$selected = $region_data->rating;	
						}
						else{
							$selected = $this->input->post('rating');
							}
						
						$options = array(''=>'--- select one ---','1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5');
						echo form_dropdown($data,$options,$selected);
						echo form_error('heading_desc');
						?>
                      </div>
				  </div>
                    
                    
                     <div class="form-group">
                      <label for="weather" class="col-sm-3 control-label">Weather: </label>
					  <div class="col-sm-6">
						<?php 
						$data = array(
									  'name'        => 'weather',
									  'id'          => 'weather',
									  'class'       => 'form-control input-lg',
									  );
						
						if(!empty($region_data->weather))
						{
							$selected = $region_data->weather;	
						}
						else{
							$selected = $this->input->post('weather');
							}
						
						$options = array('warm'=>'Warm','moderate'=>'Moderate','cold'=>'Cold');
						echo form_dropdown($data,$options,$selected);
						echo form_error('weather');
						?>
                      </div>
					</div>
                    
                    <div class="form-group">
                      <label for="famous" class="col-sm-3 control-label">Famous:</label>
					  <div class="col-sm-6">
						<?php
						
						/*$data = array(
										'name'        => 'famous',
										'id'          => 'famous',
										'value'       => 1,
										'checked'     => (@$region_data->famous == 1)? true:false,
									);
						echo form_radio($data);
						echo form_label('Yes', 'famous');
						
						echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
						
						$data = array(
										'name'        => 'famous',
										'id'          => 'unfamous',
										'value'       => 0,
										'checked'     => (@$region_data->famous == 0)? true:false,
									);
						echo form_radio($data);
						echo form_label('No', 'famous');
						echo form_error('famous');
						*/
						echo @$region_data->famous;
						if(!empty($region_data->is_famous))
						{
							if($region_data->is_famous == 1)
							{
								$famous = "checked";
								$unfamous = "";
							}
							else{
								$unfamous = "checked";
								$famous = "";
								}
						}
						else
						{
							if($this->input->post('famous') == 1)
							{
								$famous = "checked";
								$unfamous = "";
							}
							else{
								$unfamous = "checked";
								$famous = "";
								}
						}
						
						?>
                        
                        
                        <input type="radio" name="famous" value="1" <?php echo $famous;?>/> Yes
						<input type="radio" name="famous" value="0" id="unfamous" <?php echo $unfamous;?>/> No
                      </div>
					</div>
                    
                  
                  <div class="form-group" id="thumb_image">
					  <label for="thumb_image" class="col-sm-3 control-label">Thumb Image : </label>
					  <div class="col-sm-6">
						<?php 
						$data = array(
									  'name'        => 'thumb_image',
									  'id'          => 'thumb_image',
									  'class'       => 'input-lg',
									  );
						echo form_upload($data);
						echo form_error('thumb_image');
						if(!empty($error))
						{ 
						?>
							<span style="color:red;"><?php echo $error['error'];?></span>
						<?php 
						}
						?>
                      </div>
				  </div>
                    
                  <div class="form-group" id="thumb_overlay">
					  <label for="thumb_overlay" class="col-sm-3 control-label">Thumb Overlay : </label>
					  <div class="col-sm-6">
						<?php 
						$data = array(
									  'name'        => 'thumb_overlay',
									  'id'          => 'thumb_overlay',
									  'class'       => 'input-lg',
									  );
						echo form_upload($data);
						echo form_error('thumb_overlay');
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
						
						if(!empty($region_data->status))
						{
							$selected = $region_data->status;	
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
	$('#regions').addClass('active');
	
	$("input[name$='famous']").click(function() {
        var value = $(this).val();
        if(value == 0)
		{
			$('#thumb_image').hide();
			$('#thumb_overlay').hide();
		}
		else
		{
			$('#thumb_image').show();
			$('#thumb_overlay').show();
		}
    });
	
	if($('#unfamous').is(':checked')) 
	{ 
		$('#thumb_image').hide();
		$('#thumb_overlay').hide();
	}
	else{
		$('#thumb_image').show();
		$('#thumb_overlay').show();
		}
	$('.textarea').html('<?php if(!empty($region_data->description)){echo $region_data->description;}else{$data = trim($this->input->post('description'));$data = addslashes($data);$data = htmlentities($data);echo $data;}?>');
});
</script>