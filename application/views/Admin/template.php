<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$admin_id = $this->session->userdata('admin_id');
if(empty($admin_id))
{
	return redirect('Admin/Admin/login');
}
?>
<!DOCTYPE html>
<html>

<?php $this->load->view("Admin/template/head"); ?>

<body class="hold-transition skin-red sidebar-mini">

<div class="wrapper">

  <!-- Main Header -->
  <?php $this->load->view("Admin/template/header"); ?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php 
        $this->load->view("Admin/template/left_sidebar");
  ?>


  <!-- Content Wrapper. Contains page content -->  
  
  <div class="content-wrapper">
  	<?php $this->load->view($page); ?>
  </div>
  
  
  <!-- /.content-wrapper -->



  <!-- Main Footer -->
  <?php 
  $this->load->view("Admin/template/footer");
  ?>
  
</div>
<!-- ./wrapper -->
<script src="js/admin/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="js/admin/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="plugins/admin/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/admin/datatables/dataTables.bootstrap.min.js"></script>
<script src="plugins/admin/tinymce/tinymce.min.js"></script>
<script src="js/admin/app.min.js"></script>
<script src="js/admin/default.js"></script>
</body>
</html>
