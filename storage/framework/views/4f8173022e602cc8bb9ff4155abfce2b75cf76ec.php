


<?php $__env->startSection('changestatus'); ?>

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
				<!-- 
					All status of news : 
					- readytopublish (w + e)
					- published (w + e)
					- draft (w)
					- rejected (w)
					- needtobeupdated (w+e)
					- needdelete (w+e)
				-->
			
				<!-- Commands for writer only -->
				<?php if($command == 'approvenews'): ?>
					<?php if($statusnews == 'draft' or $statusnews == 'rejected' or $statusnews == 'rejectedforchangedata' and Auth::user()->jenisakun == "2"): ?>
						<form action="<?php echo e(route('approvenews')); ?>" method="post">
							<?php echo e(method_field('PUT')); ?>

							<?php echo e(csrf_field()); ?>

							<div class="card card-primary">
								<div class="card-header">
									<h3 class="card-title">Make permission to approve a News</h3>
								</div>
								<div class="card-body">
									<input type="hidden" id="id" name="id" value="<?php echo e($data->id); ?>">
									<input type="hidden" id="photo" name="status" value="<?php echo e($data->status); ?>">
									<input type="hidden" id="photo" name="photo" value="<?php echo e($data->foto); ?>">
									<input type="hidden" class="form-control" id="createddata" name="createddata" value="<?php echo e($data->created_at); ?>">
									<h4>Are you sure want to make permission to approve this news ?</h4>
									<h5><?php echo e($data->judul); ?></h5>
								</div>
								<div class="card-footer">
									<div class="row">
										<div class="col-6">
											<div class="text-left">
												<a href="<?php echo e(route('databerita')); ?>" class="btn btn-danger">Cancel</a>
											</div>
										</div>
										<div class="col-6">
											<div class="text-right">
											  <button type="submit" class="btn btn-success">Accept</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</form>
					<?php endif; ?>
				<?php elseif($command == 'deletenews'): ?>
					<?php if($statusnews == 'draft' or $statusnews == 'rejected' and Auth::user()->jenisakun == "2" and $command == "deletenews"): ?>
						<form action="<?php echo e(route('deletenews')); ?>" method="post">
							<?php echo e(method_field('DELETE')); ?>

							<?php echo e(csrf_field()); ?>

							<div class="card card-danger">
								<div class="card-header">
									<h3 class="card-title">Delete a News</h3>
								</div>
								<div class="card-body">
									<input type="hidden" id="id" name="id" value="<?php echo e($data->id); ?>">
									<input type="hidden" id="photo" name="photo" value="<?php echo e($data->foto); ?>">
									<input type="hidden" id="photo" name="status" value="<?php echo e($data->status); ?>">
									<input type="hidden" id="photo" name="changestatus" value="<?php echo e($command); ?>">
									<h4>Are you sure want to delete this news ?</h4>
									<h5><?php echo e($data->judul); ?></h5>
								</div>
								<div class="card-footer">
									<div class="row">
										<div class="col-6">
											<div class="text-left">
												<a href="<?php echo e(route('databerita')); ?>" class="btn btn-secondary">Cancel</a>
											</div>
										</div>
										<div class="col-6">
											<div class="text-right">
											  <button type="submit" class="btn btn-primary">Delete</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</form>
					<?php else: ?>
						<form action="<?php echo e(route('deletenews')); ?>" method="post">
							<?php echo e(method_field('DELETE')); ?>

							<?php echo e(csrf_field()); ?>

							<div class="card card-danger">
								<div class="card-header">
									<h3 class="card-title">Delete a News</h3>
								</div>
								<div class="card-body">
									<input type="hidden" id="id" name="id" value="<?php echo e($data->id); ?>">
									<input type="hidden" id="photo" name="photo" value="<?php echo e($data->foto); ?>">
									<input type="hidden" id="photo" name="status" value="<?php echo e($data->status); ?>">
									<input type="hidden" id="photo" name="changestatus" value="<?php echo e($command); ?>">
									<h4>Are you sure want to delete this news ?</h4>
									<h5><?php echo e($data->judul); ?></h5>
								</div>
								<div class="card-footer">
									<div class="row">
										<div class="col-6">
											<div class="text-left">
												<a href="<?php echo e(route('databerita')); ?>" class="btn btn-secondary">Cancel</a>
											</div>
										</div>
										<div class="col-6">
											<div class="text-right">
											  <button type="submit" class="btn btn-primary">Delete</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</form>
					<?php endif; ?>
				<?php endif; ?>
			</div>
			<div class="col-lg-2">
			</div>
		</div>
	  </div>
	</div>
					
<?php $__env->stopSection(); ?>
<?php echo $__env->make('accountpanel.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7.4\htdocs\laravels\portomediaberita\resources\views/accountpanel/berita/commands.blade.php ENDPATH**/ ?>