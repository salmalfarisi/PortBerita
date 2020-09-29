

<?php $__env->startSection('createnewauthor'); ?>

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
				<form action="<?php echo e(route('savenewauthor')); ?>" method="post">
					<?php echo e(method_field('POST')); ?>

					<?php echo e(csrf_field()); ?>

					<div class="card card-primary">
						<div class="card-header">
							<h3 class="card-title">Make permission to approve a News</h3>
						</div>
						<div class="card-body">
							<div class="form-group">
								<label for="name">Name</label>
								<input type="text" class="form-control" id="nama" name="nama">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Email address</label>
								<input type="email" class="form-control" id="email" name="email">
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
										<button type="submit" class="btn btn-success">Create Account</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="col-lg-2">
			</div>
		</div>
	  </div>
	</div>
					
<?php $__env->stopSection(); ?>
<?php echo $__env->make('accountpanel.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7.4\htdocs\laravels\portomediaberita\resources\views/accountpanel/author/create.blade.php ENDPATH**/ ?>