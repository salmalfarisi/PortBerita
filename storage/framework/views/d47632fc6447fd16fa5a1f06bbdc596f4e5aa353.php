

<?php $__env->startSection('commandsforauthor'); ?>

	<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-1">
          <div class="col-sm-6">
            <h1 class="m-1 text-dark"> <small> </small></h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
		<div class="row">
			<div class="col-lg-2">
			</div>
			<div class="col-lg-8">
			
				<!-- Commands for editor only -->
				<?php if($task == 'lock'): ?>
					<form action="<?php echo e(route('lockthisaccount')); ?>" method="post">
						<?php echo e(method_field('PUT')); ?>

						<?php echo e(csrf_field()); ?>

						<div class="card card-warning">
							<div class="card-header">
								<h3 class="card-title">Make permission to approve a News</h3>
							</div>
							<div class="card-body">
								<input type="hidden" id="id" name="id" value="<?php echo e($data->id); ?>">
									<h4>Are you sure want to lock this user account ?</h4>
								<h5><?php echo e($data->nama); ?></h5>
								<div class="form-group">
									<label for="exampleInputEmail1">Enter Author Email for Confirmation</label>
									<input type="email" class="form-control" id="name" name="email">
								</div>
							</div>
							<div class="card-footer">
								<div class="row">
									<div class="col-6">
										<div class="text-left">
											<a href="<?php echo e(route('authoddatabase')); ?>" class="btn btn-danger">Cancel</a>
										</div>
									</div>
									<div class="col-6">
										<div class="text-right">
											 <button type="submit" class="btn btn-primary">Lock This Account</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</form>
				<?php elseif($task == 'delete'): ?>
					<form action="<?php echo e(route('deletethisaccount')); ?>" method="post">
						<?php echo e(method_field('DELETE')); ?>

						<?php echo e(csrf_field()); ?>

						<div class="card card-danger">
							<div class="card-header">
								<h3 class="card-title">Delete a News</h3>
							</div>
							<div class="card-body">
								<input type="hidden" id="id" name="id" value="<?php echo e($data->id); ?>">
								<h4>Are you sure want to delete this user account ?</h4>
								<h5><?php echo e($data->nama); ?></h5>
							</div>
							<div class="card-footer">
								<div class="row">
									<div class="col-6">
										<div class="text-left">
											<a href="<?php echo e(route('authoddatabase')); ?>" class="btn btn-secondary">Cancel</a>
										</div>
									</div>
									<div class="col-6">
										<div class="text-right">
											 <button type="submit" class="btn btn-primary">Delete This Account</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</form>
				<?php endif; ?>
			</div>
			<div class="col-lg-2">
			</div>
		</div>
	  </div>
	</div>
					
<?php $__env->stopSection(); ?>
<?php echo $__env->make('accountpanel.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7.4\htdocs\laravels\portomediaberita\resources\views/accountpanel/author/commands.blade.php ENDPATH**/ ?>