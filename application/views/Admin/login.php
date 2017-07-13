<!DOCTYPE html>
<html>
<head>
  <base href="<?php echo base_url(); ?>">   
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="css/admin/bootstrap.min.css">
  <!-- Font Awesome -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">-->
  <!-- Ionicons -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">-->
  <!-- Theme style -->
  <link rel="stylesheet" href="css/admin/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/admin/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <b>TCKP</b>Admin
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>
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
    <form action="<?php echo base_url(); echo $action;?>" method="post">
      <div class="form-group has-feedback">
        <input type="username" class="form-control" placeholder="Username" name="username" value="<?php echo set_value('username');?>">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        <?php echo form_error('username'); ?>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="password" name="password" value="<?php echo set_value('password');?>">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        <?php echo form_error('password'); ?>
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-6 col-xs-offset-3">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="plugins/admin/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="js/admin/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="plugins/admin/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
