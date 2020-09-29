

<?php $__env->startSection('profile'); ?>
		
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
		
		<div class="row">
			<div class="col-lg-2">
			</div>
			
			<div class="col-lg-8">
				<div class="info-box">
					<span class="info-box-icon"><img src="<?php echo e(url('/profile/comment/'.Auth::user()->foto)); ?>"></span>

					<div class="info-box-content">
						<span class="info-box-text"><?php echo e(Auth::user()->nama); ?></span>
						<span class="info-box-text"><?php echo e(Auth::user()->email); ?></span>
						<span class="info-box-text">Last Login : <?php echo e(Auth::user()->terakhirlogin); ?></span>
					</div>
					<!-- /.info-box-content -->
				</div>
				
				<div class="card card-primary collapsed-card">
				  <div class="card-header">
					<h3 class="card-title">Change Your Profile</h3>

					<div class="card-tools">
					  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
					  </button>
					</div>
					<!-- /.card-tools -->
				  </div>
				  <!-- /.card-header -->
				  <div class="card-body" style="display: none;">
					<form action="<?php echo e(route('changeprofileforuser')); ?>" method="post" enctype="multipart/form-data">
						<?php echo e(csrf_field()); ?>

						<input type="hidden" id="id" name="id" value="<?php echo e(Auth::user()->id); ?>">
						<div class="card-body">
						  <div class="form-group">
							<label for="exampleInputEmail1">Nama</label>
							<input type="text" class="form-control" id="name" name="nama" value="<?php echo e(Auth::user()->nama); ?>">
						  </div>
						  <div class="form-group">
							<label for="exampleInputEmail1">Email address</label>
							<input type="email" class="form-control" id="exampleInputEmail1" name="email" value="<?php echo e(Auth::user()->email); ?>">
						  </div>
						  <div class="form-group">
							<label for="exampleInputPassword1">Password</label>
							<input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Reset your password here">
						  </div>
						  <div class="form-group">
							<input type="password" class="form-control" id="exampleInputPassword2" name="repeatpassword" placeholder="Type your password again">
						  </div>
						  <div class="form-group">
							<label for="exampleInputFile">Change Photo</label>
							<div class="input-group">
							  <div class="custom-file">
							    <!--<input type="file" accept="image/*" id="foto" class="form-control" name="foto" onchange="tampilkanPreview(this,'preview')" placeholder="Choose File"/>-->
								<input type="file" class="custom-file-input" id="exampleInputFile" name="foto" onchange="tampilkanPreview(this,'preview')">
								<label class="custom-file-label" for="exampleInputFile">Choose file</label>
							  </div>
							</div>
							<small>Required = Type of File : jpeg or jpg or png</small>
						  </div>
						  <div class="form-group">
							<label class="col-sm-2 control-label"></label>
							<div class="col-sm-6 col-md-4 pull-left">
								<img id="preview" src="" alt="" width="100%" height="300px"/>
							</div>
						  </div>
						  <div class="form-group text-right">
							<button type="submit" class="btn btn-primary">Update Profile</button>
						  </div>
						</div>
						<!-- /.card-body -->
					</form>
				  </div>
				  <!-- /.card-body -->
				</div>
				
				<div class="card card-primary collapsed-card">
				  <div class="card-header">
					<h3 class="card-title">Recent Activities</h3>

					<div class="card-tools">
					  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
					  </button>
					</div>
					<!-- /.card-tools -->
				  </div>
				  <!-- /.card-header -->
				  <div class="card-body" style="display: none;">
					<!--
							  <ul class="pagination pagination-sm float-right">
								<li class="page-item"><a class="page-link" href="#">«</a></li>
								<li class="page-item"><a class="page-link" href="#">1</a></li>
								<li class="page-item"><a class="page-link" href="#">2</a></li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item"><a class="page-link" href="#">»</a></li>
					</ul>-->
					<table class="table">
						<thead>
							<tr>
								<th class="col-8">Description</th>
								<th class="col-4">Time</th>
							</tr>
					    </thead>
						<tbody>
							<?php $__currentLoopData = $history; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recentact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td><?php echo e($recentact->deskripsi); ?></td>
								<td><?php echo e($recentact->created_at); ?></td>
							</tr>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</tbody>
					</table>
				  </div>
				</div>
			</div>
			
			<div class="col-lg-2">
			</div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('halamanutama.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7.4\htdocs\laravels\portomediaberita\resources\views/halamanutama/profile.blade.php ENDPATH**/ ?>