

<?php $__env->startSection('forgotpass'); ?>
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Forgot Password</p>

      <form action="<?php echo e(route('storeforgotpass')); ?>" method="post">
	  <?php echo e(method_field('PUT')); ?>

	  <?php echo e(csrf_field()); ?>

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
        <div class="input-group mb-3">
		  <input type="hidden" class="form-control" name="position" value="fromwebkhusus">
          <input type="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Request new password</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mt-3 mb-1">
        <a href="<?php echo e(route('loginkhusus')); ?>">Login</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('accountpanel.layoutspecial', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7.4\htdocs\laravels\portomediaberita\resources\views/accountpanel/forgotpassword.blade.php ENDPATH**/ ?>