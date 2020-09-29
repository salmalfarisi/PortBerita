<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PortBerita | <?php echo e($title); ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo e(asset('adminlte/plugins/fontawesome-free/css/all.min.css')); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo e(asset('adminlte/dist/css/adminlte.min.css')); ?>">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="<?php echo e(route('loginkhusus')); ?>"><b>PortBerita</b></a>
  </div>
  
  <section><!-- /.login-logo -->
	<?php if($perintah == "login"): ?>
		<section class="container-fluid">
			<?php echo $__env->yieldContent('login'); ?>
		</section>
	<?php elseif($perintah == "forgotpass"): ?>
		<section class="container-fluid">
			<?php echo $__env->yieldContent('forgotpass'); ?>
		</section>
	<?php elseif($perintah == "storenewpassword"): ?>
		<section class="container-fluid">
			<?php echo $__env->yieldContent('storenewpassword'); ?>
		</section>
	<?php endif; ?>
  </section>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo e(asset('adminlte/plugins/jquery/jquery.min.js')); ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo e(asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo e(asset('adminlte/dist/js/adminlte.min.js')); ?>"></script>

	<script>
		$.ajaxSetup({
			headers:{
				'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
			}
		});
	</script>

</body>
</html><?php /**PATH C:\xampp7.4\htdocs\laravels\portomediaberita\resources\views/accountpanel/layoutspecial.blade.php ENDPATH**/ ?>