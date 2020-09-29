

<?php $__env->startSection('showAllThreads'); ?>

	<!-- Main content -->
    <div class="content">
      <div class="container">
		
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
		
		<div class="card">
            <div class="card-header">
                <h3 class="card-title">Thread</h3>

                <div class="card-tools">
				  <form action="<?php echo e(route('findthread')); ?>" method="get">
					<?php echo e(method_field('GET')); ?>

					<?php echo e(csrf_field()); ?>

					  <div class="input-group input-group-sm" style="width: 150px;">
						<input type="text" name="searching" class="form-control float-right" placeholder="Search" value="<?php echo e(old('searching')); ?>">

						<div class="input-group-append">
						  <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
						</div>
					  </div>
				  </form>
                </div>
            </div>
              <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th><center>User</center></th>
                      <th><center>Title</center></th>
                      <th><center>Date</center></th>
                    </tr>
                  </thead>
                  <tbody>
				    <?php $__currentLoopData = $thread; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
						  <td><center><?php echo e(\App\User::where(['id' => $data->iduser])->pluck('nama')->first()); ?></center></td>
						  <td><center><?php echo e($data->judul); ?></center></td>
						  <td><center><?php echo e($data->created_at); ?></center></td>
						</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
                </table>
            </div>
            <!-- /.card-body -->
			<div class="card-footer">
				<?php echo e($thread->links()); ?>

			</div>
        </div>
		
	  </div>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('halamanutama.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7.4\htdocs\laravels\portomediaberita\resources\views/halamanutama/thread.blade.php ENDPATH**/ ?>