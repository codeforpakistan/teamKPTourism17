<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <?php echo $title;?>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo base_url();?>Admin/"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Category</li>
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
					  <label for="cat_id" class="col-sm-3 control-label">Select Category : </label>
					  <div class="col-sm-6">
						<?php 
						$data = array(
									  'name'        => 'cat_id',
									  'id'          => 'cat_id',
									  'class'       => 'input-lg',
									  );
						
						if(!empty($category_data->cat_id))
						{
							$selected = $category_data->cat_id;	
						}
						else{
							$selected = $this->input->post('cat_id');
							}
						
						if(!empty($category_data))
						{
							$options = array();
							foreach($category_data as $key=>$value)
							{
								$options[$value['cat_id']] = $value['name'];
							}
						}
						else{
							$options[''] = "No Category Found";
							}
						echo form_dropdown($data,$options,$selected);
						echo form_error('cat_id');
						?>
                      </div>
					</div>
                    
                    
                    
                    <div class="form-group">
					  <label for="name" class="col-sm-3 control-label">Type Name : </label>
					  <div class="col-sm-6">
						<?php 
						$data = array(
									  'name'        => 'name',
									  'id'          => 'name',
									  'value'       => set_value('name',@$type_data->name),
									  'class'       => 'form-control input-lg',
									  );
						echo form_input($data);
						echo form_error('name');
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
						
						if(!empty($type_data->status))
						{
							$selected = $type_data->status;	
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
    $('#filters').addClass('active');
});
</script>
