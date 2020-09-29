

<?php $__env->startSection('informasiumum'); ?>

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
  
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
	
	<!-- Main content -->
    <div class="content">
      <div class="container-fluid">
	    <div class="row">
          <div class="col-md-6 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-success"><i class="far fa-newspaper"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Popular News</span>
                <span class="info-box-number"><?php echo e($popular->judul); ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-6 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-primary"><i class="fas fa-tasks"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Permission on Process</span>
                <span class="info-box-number"><?php echo e($totalpermission); ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <div class="row">
		  <div class="col-lg-6">
		    <div class="card">
              <div class="card-header">
                <h3 class="card-title"><b>Top 5 Popular News</b></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th style="width: 10%"><center>No</center></th>
                      <th style="width: 40%"><center>Title</center></th>
                      <th style="width: 25%"><center>Total Views Today</center></th>
                      <th style="width: 25%"><center>Total Comment</center></th>
                    </tr>
                  </thead>
                  <tbody>
					<?php $no = 1; ?>
					<?php $__currentLoopData = $popularnews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $top5): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td><center><?php echo $no++; ?></center></td>
                      <td><center><?php echo e($top5->judul); ?></center></td>
                      <td><center><?php echo e($top5->viewers); ?></center></td>
                      <td><center><?php echo e($top5->totaldata); ?></center></td>
                    </tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
		  </div>
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header">
                <h5 class="m-0">Notification for Publication News data</h5>
              </div>
              <div class="card-body">
                <h3><b>You have : </b></h3>
				
                <p class="card-text"><h5><?php echo e($ready); ?> Task to publish news</h5></p>
				<p class="card-text"><h5><?php echo e($update); ?> Task to changed news from writer</h5></p>
				<p class="card-text"><h5><?php echo e($delete); ?> Task to delete news</h5></p>
                <a href="<?php echo e(route('publicationdata')); ?>" class="btn btn-primary float-right">Go to Publication News Data</a>
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('accountpanel.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7.4\htdocs\laravels\portomediaberita\resources\views/accountpanel/informasiumum.blade.php ENDPATH**/ ?>