

<?php $__env->startSection('deletethread'); ?>

	<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
		
		<div class="row">
			<div class="col-lg-2">
			</div>
			<div class="col-lg-8">
				<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $thread): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<form action="/threads/deletethread/accept/<?php echo e($thread->judul); ?>" method="post">
					<?php echo e(method_field('DELETE')); ?>

					<?php echo e(csrf_field()); ?>

					<div class="card card-danger">
						<div class="card-header">
							<h3 class="card-title">Delete a Thread</h3>
						</div>
						<div class="card-body">
							<input type="hidden" id="id" name="id" value="<?php echo e($thread->id); ?>">
							<input type="hidden" id="photo" name="photo" value="<?php echo e($thread->foto); ?>">
							<h4>Are you sure want to delete this thread ?</h4>
							<h5><?php echo e($thread->judul); ?></h5>
						</div>
						<div class="card-footer">
							<div class="row">
								<div class="col-6">
									<div class="text-left">
										<a href="<?php echo e(route('threaddatas')); ?>" class="btn btn-secondary">Cancel</a>
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
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>
			<div class="col-lg-2">
			</div>
		</div>
	</div>
					
<?php $__env->stopSection(); ?>
<?php echo $__env->make('halamanutama.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7.4\htdocs\laravels\portomediaberita\resources\views/halamanutama/thread/delete.blade.php ENDPATH**/ ?>