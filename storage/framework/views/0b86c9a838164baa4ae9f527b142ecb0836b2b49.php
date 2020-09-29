

<?php $__env->startSection('authorindex'); ?>

	<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-1">
          <div class="col-sm-6">
            <h1 class="m-1 text-dark"> <small> </small></h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
		
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
                <h3 class="card-title">Author Account Database</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th style="width:10%;"><center>No</center></th>
                      <th style="width:30%;"><center>Author</center></th>
                      <th style="width:30%;"><center>Email</center></th>
                      <th style="width:20%;"><center>Last Login</center></th>
                      <th style="width:10%;"><center>Option</center></th>
                    </tr>
                  </thead>
                  <tbody>
				    <?php $no = 1; ?>
					<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td><center><?php echo $no++; ?></center></td>
                      <td><?php echo e($user->nama); ?></td>
                      <td><?php echo e($user->email); ?></td>
                      <td><center><?php echo e($user->terakhirlogin); ?></center></td>
                      <td>
						<center>
							<div class="btn-group">
								<a href="/webkhusus/author/lockaccount/<?php echo e($user->id); ?>" data-toggle="tooltip" title="Change author password" type="button" class="btn btn-xs bg-yellow">
									<span class="fa fa-lock"></span>
								</a>
							</div>
							<div class="btn-group">
								<a href="/webkhusus/author/delete/<?php echo e($user->id); ?>" data-toggle="tooltip" title="Delete this account" type="button" class="btn btn-xs bg-red">
									<span class="fa fa-trash"></span>
								</a>
							</div>
						</center>
					  </td>
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
<?php echo $__env->make('accountpanel.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7.4\htdocs\laravels\portomediaberita\resources\views/accountpanel/author/index.blade.php ENDPATH**/ ?>