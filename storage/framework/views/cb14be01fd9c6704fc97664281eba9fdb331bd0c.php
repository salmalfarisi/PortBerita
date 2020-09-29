

<?php $__env->startSection('resetpass'); ?>

  <div class="row">
	<div class="col-4">
	</div>
	<div class="col-4">
	  <div class="card">
		<div class="card-body login-card-body">
		  <p class="login-box-msg"><?php echo e($messages); ?></p>

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
		  <form action="<?php echo e(route('submitnewpassword')); ?>" method="post">
			<?php echo e(method_field('PUT')); ?>

			<?php echo e(csrf_field()); ?>

			<input type="hidden" class="form-control" name="id" value="<?php echo e($data->id); ?>">
			<input type="hidden" class="form-control" name="jenisakun" value="<?php echo e($data->jenisakun); ?>">
			<input type="hidden" class="form-control" name="nama" value="<?php echo e($data->nama); ?>">
			<div class="input-group mb-3">
			  <input type="password" class="form-control" name="password" placeholder="Password">
			  <div class="input-group-append">
				<div class="input-group-text">
				  <span class="fas fa-lock"></span>
				</div>
			  </div>
			</div>
			<div class="input-group mb-3">
			  <input type="password" class="form-control" name="repeatpassword" placeholder="Confirm Password">
			  <div class="input-group-append">
				<div class="input-group-text">
				  <span class="fas fa-lock"></span>
				</div>
			  </div>
			</div>
			<div class="row">
			  <div class="col-12">
				<button type="submit" class="btn btn-primary btn-block">Save New Password</button>
			  </div>
			  <!-- /.col -->
			</div>
		  </form>

		  <p class="mt-3 mb-1">
			<a href="login.html">Login</a>
		  </p>
		</div>
		<!-- /.login-card-body -->
	  </div>
	</div>
	<div class="col-4">
	</div>
  </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('halamanutama.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7.4\htdocs\laravels\portomediaberita\resources\views/halamanutama/resetpassword.blade.php ENDPATH**/ ?>