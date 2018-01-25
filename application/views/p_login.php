<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<title>SWTest | Login Page</title>
	<link rel="stylesheet" href="<?php echo base_url()."assets/bootstrap/css/bootstrap.css" ?>" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url()."assets/dist/css/AdminLTE.min.css"; ?>" type="text/css" >


</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="<?php echo base_url() ?>" <b>SW</b>Test</a>
  </div>
  <div class="register-box-body">
    <p class="login-box-msg">Login to your account</p>

    <form action="<?php echo base_url()."index.php/User/login" ?>" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Username" name="username">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
			<div class="form-group has-feedback">
				<input type="password" class="form-control" placeholder="Password" name="password">
				<span class="glyphicon glyphicon-lock form-control-feedback"></span>
			</div>
			<?php //echo "<alert>".$this->session->flashdata('pesan')."</alert>"; ?>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat" >Login</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url()."assets/plugins/jQuery/jquery-2.2.3.min.js" ?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url()."assets/bootstrap/js/bootstrap.min.js" ?>"></script>
<!-- iCheck -->
<script src="<?php echo base_url()."assets/plugins/iCheck/icheck.min.js" ?>"></script>
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
