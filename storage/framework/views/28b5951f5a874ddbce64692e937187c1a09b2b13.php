

<?php $__env->startSection('registration'); ?>
	
  <?php echo $__env->make('accountpanel.notifikasiflash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

		<?php if($message = Session::get('error')): ?>
			<div class="alert alert-danger alert-block">
				<button type="button" class="close" data-dismiss="alert"><span class="fa fa-close"></span></button>
				<strong><?php echo e($message); ?></strong>
			</div>
		<?php endif; ?>

		<?php if(count($errors) > 0): ?>
			<div class="alert alert-danger bg-red">
				<ul>
					<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<li><?php echo e($error); ?></li>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</ul>
			</div>
		<?php endif; ?>
	
  <!-- Main content -->
    <div class="content">
      <div class="container">
	  
		  <div class="row">
			<div class="col-md-3">
			</div>
			
			<div class="col-md-6">  
			  <div class="card">
				<div class="card-body register-card-body">
				  <p class="login-box-msg">Register a new member</p>

				  <form action="<?php echo e(route('submitregistration')); ?>" method="post">
					<?php echo e(method_field('POST')); ?>

					<?php echo e(csrf_field()); ?>

					<div class="input-group mb-3">
					  <input type="text" class="form-control" name="nama" placeholder="Full name">
					  <div class="input-group-append">
						<div class="input-group-text">
						  <span class="fas fa-user"></span>
						</div>
					  </div>
					</div>
					<div class="input-group mb-3">
					  <input type="email" class="form-control" name="email" placeholder="Email">
					  <div class="input-group-append">
						<div class="input-group-text">
						  <span class="fas fa-envelope"></span>
						</div>
					  </div>
					</div>
					<div class="text-right">
					  <button type="submit" class="btn btn-block btn-primary">Register</button>
					</div>
				  </form>
				  <p class="mt-3 mb-1">
					<a href="<?php echo e(route('home')); ?>">Kembali ke Halaman Utama</a>
				  </p>
				</div>
				<!-- /.form-box -->
			  </div>
			  
			  <div class="col-md-3">
			  </div>
			</div>
			
		</div>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('halamanutama.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7.4\htdocs\laravels\portomediaberita\resources\views/halamanutama/registration.blade.php ENDPATH**/ ?>