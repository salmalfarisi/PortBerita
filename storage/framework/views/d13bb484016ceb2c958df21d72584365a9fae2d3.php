

<?php $__env->startSection('thread'); ?>
	<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
		
		<?php echo $__env->make('accountpanel.notifikasiflash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	
		<?php if($message = Session::get('error')): ?>
			<div class="alert alert-danger">
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
                <h3 class="card-title">Thread Data</h3>

                <div class="card-tools">
					<div class="row">
						<div class="col-6">
						  <div class="input-group input-group-sm">
							<input type="text" name="table_search" class="form-control float-right" placeholder="Search">

							<div class="input-group-append">
							  <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
							</div>
						  </div>
						</div>
						<div class="col-6">
							<div class="input-group input-group-md">
								<a href="<?php echo e(route('createthread')); ?>" class="btn btn-sm btn-primary">Create new data</a>
							</div>
						</div>
					</div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Title</th>
                      <th>Updated at</th>
					  <th>Total Comment</th>
                      <th>Option</th>
                    </tr>
                  </thead>
                  <tbody>
				    <?php $no = 1; ?>
					<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $thread): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
					  <td><center><?php echo $no++; ?></center></td>
                      <td><?php echo e($thread->judul); ?></td>
					  <td><center><?php echo e($thread->updatedata); ?></center></td>
					  <td><center><?php echo e($thread->totaldata); ?></center></td>
                      <td>
					    <div class="btn-group">
							<a href="threads/lookathread/<?php echo e($thread->judul); ?>" data-toggle="tooltip" title="Lihat Isi Thread" type="button" class="btn btn-xs bg-info">
								<span class="fa fa-eye"></span>
							</a>
						</div>
						<div class="btn-group">
							<a href="threads/editthread/<?php echo e($thread->judul); ?>" data-toggle="tooltip" title="Ubah Data Thread" type="button" class="btn btn-xs bg-yellow">
								<span class="fa fa-pen"></span>
							</a>
						</div>
						<div class="btn-group">
							<a href="threads/deletethread/<?php echo e($thread->judul); ?>" data-toggle="tooltip" title="Hapus Data Thread" type="button" class="btn btn-xs bg-red">
								<span class="fa fa-trash"></span>
							</a>
						</div></td>
                    </tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
	  </div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('halamanutama.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7.4\htdocs\laravels\portomediaberita\resources\views/halamanutama/thread/data.blade.php ENDPATH**/ ?>