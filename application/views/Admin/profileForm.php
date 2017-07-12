

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    KP Tourism
    <small>Control panel</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Regions</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="box box-danger">
        <div class="box-body">
        		<?php
				echo form_open_multipart($action,'class="form-horizontal col-sm-12 col-md-8 col-md-offset-2"'); ?>
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
					  <label for="name" class="col-sm-3 control-label">Name : </label>
					  <div class="col-sm-6">
						<?php 
						$data = array(
									  'name'        => 'name',
									  'id'          => 'name',
									  'value'       => set_value('name',@$adminInfo->name),
									  'class'       => 'form-control input-lg',
									  );
						echo form_input($data);
						echo form_error('name');
						?>
                      </div>
					</div>
					
                    
                    <div class="form-group">
					  <label for="username" class="col-sm-3 control-label">User name : </label>
					  <div class="col-sm-6">
						<?php 
						$data = array(
									  'name'        => 'username',
									  'id'          => 'username',
									  'value'       => set_value('username',@$adminInfo->username),
									  'class'       => 'form-control input-lg',
									  );
						echo form_input($data);
						echo form_error('username');
						?>
                      </div>
					</div>
					
                    <div class="form-group">
					  <label for="post_title" class="col-sm-3 control-label">Post Title : </label>
					  <div class="col-sm-6">
						<?php 
						$data = array(
									  'name'        => 'post_title',
									  'id'          => 'post_title',
									  'value'       => set_value('post_title',@$adminInfo->post_title),
									  'class'       => 'form-control input-lg',
									  );
						echo form_input($data);
						echo form_error('post_title');
						?>
                      </div>
					</div>
                    
                    <div class="form-group">
					  <label for="image" class="col-sm-3 control-label">Update Picture : </label>
					  <div class="col-sm-6">
						<?php 
						$data = array(
									  'name'        => 'image',
									  'id'          => 'image',
									  'value'       => set_value('image',@$adminInfo->image),
									  'class'       => 'input-lg',
									  );
						echo form_upload($data);
						echo form_error('image');
						?>
                      </div>
					</div>
                    
                    <div class="form-group">
					  <label for="password" class="col-sm-3 control-label">New Password : </label>
					  <div class="col-sm-6">
						<?php 
						$data = array(
									  'name'        => 'password',
									  'id'          => 'password',
									  'value'       => set_value('password'),
									  'class'       => 'form-control input-lg',
									  );
						echo form_password($data);
						echo form_error('password');
						?>
                      </div>
					</div>
                    
                    <div class="form-group">
					  <label for="c_password" class="col-sm-3 control-label">Confirm Password : </label>
					  <div class="col-sm-6">
						<?php 
						$data = array(
									  'name'        => 'c_password',
									  'id'          => 'c_password',
									  'value'       => set_value('c_password'),
									  'class'       => 'form-control input-lg',
									  );
						echo form_password($data);
						echo form_error('c_password');
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
									  'value'       => 'Update',
									  'class'       => 'btn btn-default  btn-lg col-sm-5 col-xs-5',
									  );
						
						echo form_submit($data);
						?>
                        <div class="col-sm-2 col-xs-2"></div>
                        <?php 
                        $data = array(
									  'name'        => 'reset',
									  'id'          => 'reset',
									  'value'       => 'Reset',
									  'class'       => 'btn btn-default  btn-lg col-sm-5 col-xs-5',
									  );
						
						echo form_reset($data);
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