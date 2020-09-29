

<?php $__env->startSection('storenewpassword'); ?>

  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg"><?php echo e($messages); ?></p>

      <form action="#" method="post">
		<?php echo e(method_field('PUT')); ?>

		<?php echo e(csrf_field()); ?>

        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Confirm Password">
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
    </div>
    <!-- /.login-card-body -->
  </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('accountpanel.layoutspecial', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7.4\htdocs\laravels\portomediaberita\resources\views/accountpanel/resetpassword.blade.php ENDPATH**/ ?>