

<?php $__env->startSection('showPublicData'); ?>

	<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-1">
          <div class="col-sm-6">
            <h1 class="m-1 text-dark"> <small> </small></h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
	
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
	
	<div class="content">
		<div class="container-fluid">	
			<div class="card">
              <div class="card-header">
                <h3 class="card-title">Publication of News</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
				  <div class="row">
					  <thead>
						<tr>
						  <th><center>No</center></th>
						  <th><center>Author</center></th>
						  <th><center>Title</center></th>
						  <th><center>Permission</center></th>
						  <th><center>Option</center></th>
						</tr>
					  </div>
                  </thead>
                  <tbody>
					  <?php $no = 1; ?>
					  <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					  <tr>
						  <td><center><?php echo $no++; ?></center></td>
						  <td><center><?php echo e(\App\User::where(['id' => $list->iduser])->pluck('nama')->first()); ?></center></td>
						  <td><center><?php echo e($list->judul); ?></center></td>
						  <?php if($list->status == "readytopublish"): ?>
							<td><center><span class="badge bg-primary">Need Permission to Publish News</span></center></td>
						  <?php elseif($list->status == "needtobeupdated"): ?>
						    <td><center><span class="badge bg-warning">Need Permission to Change News Data</span></center></td>
						  <?php elseif($list->status == "needdelete"): ?>  
						    <td><center><span class="badge bg-danger">Need Permission to Delete News Data</span></center></td>
						  <?php endif; ?>
						  <td>
							<center>
								<a href="/webkhusus/publication/detail/<?php echo e($list->judul); ?>" data-toggle="tooltip" title="Detail News" type="button" class="btn btn-xs btn-primary">
									<span class="fas fa-eye"></span>
								</a>
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
<?php echo $__env->make('accountpanel.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7.4\htdocs\laravels\portomediaberita\resources\views/accountpanel/publikasi/index.blade.php ENDPATH**/ ?>