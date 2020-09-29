

<?php $__env->startSection('lookanews'); ?>

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
				<div class="card card-info">
					<div class="card-header">
						<h3 class="card-title"><?php echo e($data->judul); ?></h3>
					</div>
					<!-- /.card-header -->
					<!-- form start -->
					<div class="card-body">
						<center>
							<picture>
								<source media="(max-width: 400px)" srcset="<?php echo e(url('/berita/xs/'.$data->foto)); ?>">
								<source media="(max-width: 800px)" srcset="<?php echo e(url('/berita/sm/'.$data->foto)); ?>">
								<source media="(min-width: 1200px)" srcset="<?php echo e(url('/berita/md/'.$data->foto)); ?>">
								<img style="width:100%;" src="<?php echo e(url('/berita/lg/'.$data->foto)); ?>">
							</picture>
						</center>
						<hr>
						<div class="row">
							<div class="col-6">
								<p><?php echo e(\App\User::where(['id' => $data->iduser])->pluck('nama')->first()); ?></p>
							</div>
							<div class="col-6 text-right">
								<p><?php echo e($data->kategori); ?> | <?php echo e($data->updated_at); ?></p>
							</div>
						</div>
						<p><?php echo str_replace("\r","<br/>", $data->isiberita); ?></p>
					</div>
						<!-- /.card-body -->

					<div class="card-footer text-right">
						<a href="<?php echo e(route('databerita')); ?>" class="btn btn-primary">Back to News Data</a>
					</div>
					</div>
					
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
					
					<?php if($data->status == 'published' or Auth::user()->jenisakun == "3"): ?>
					<div class="card card-widget">
					  <div class="card-header">
						<h3><center>What People Say About...</center></h3>
						<h5><center><?php echo e($data->judul); ?></center></h5>
					  </div>
					  <!-- /.card-header -->
					  <!-- /.card-body -->
					  <div class="card-body card-comments">
						<div class="card-comment">
						
						<?php $__currentLoopData = $comment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $commentator): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="row">
								<div class="col-4 col-sm-3 col-md-2 col-lg-2">
									<center>
										<img style="width:100%; height:100%;" class="img-circle img-fluid" src="<?php echo e(url('/profile/comment/'.\App\User::where(['id' => $commentator->iduser])->pluck('foto')->first())); ?>">
									</center>
								</div>
								<div class="col-8 col-sm-9 col-md-10 col-lg-10">
									<div class="row">
										<div class="col-12 col-sm-6 col-lg-8">
											<p><?php echo e($commentator->usernameyangcomment); ?></p>
										</div>
										<div class="col-12 col-sm-6 col-lg-4">
											<p>Post comment at <?php echo e($commentator->created_at); ?></p>
										</div>
									</div>
									<p><?php echo e($commentator->isikomentar); ?></p>
								</div>
							</div>
							<hr>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</div>
						<!-- /.card-comment -->
					  </div>
					  <?php if($data->iduser == Auth::user()->id): ?>
					  <!-- /.card-footer -->
					  <div class="card-footer">
						<form action="#" method="post">
							<?php echo e(csrf_field()); ?>

							<input type="hidden" name="title" value="<?php echo e($data->judul); ?>">
							<div class="row">
								<div class="col-12 col-sm-10">
									<textarea type="text" rows="4" class="form-control form-control-sm" id="comment" name="comment" placeholder="Your Comment"></textarea>
									<small>Max. Character 500 character</small>
								</div>
								<div class="col-12 col-sm-2">
									<button type="submit" class="btn btn-sm btn-block btn-primary">Comment</button>
								</div>
							</div>
						</form>
					  </div>
					  <!-- /.card-footer -->
					  <?php endif; ?>
					  <?php endif; ?>
					</div>
				</div>
				<div class="col-lg-2">
				</div>
			</div>
		</div>
	  </div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('accountpanel.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7.4\htdocs\laravels\portomediaberita\resources\views/accountpanel/berita/shownews.blade.php ENDPATH**/ ?>