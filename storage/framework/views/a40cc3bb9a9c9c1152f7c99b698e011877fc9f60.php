

<?php $__env->startSection('editnews'); ?>

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
		
		<div class="row">
			<div class="col-lg-2">
			</div>
			<div class="col-lg-8">
				<div class="card card-primary">
				  <div class="card-header">
					<h3 class="card-title">Edit News Data</h3>
				  </div>
				  <!-- /.card-header -->
				  <!-- form start -->
				  <form action="<?php echo e(route('updatenews')); ?>" method="post" enctype="multipart/form-data">
					<?php echo e(method_field('PUT')); ?>

					<?php echo e(csrf_field()); ?>

					<div class="card-body">
					  <input type="hidden" class="form-control" id="id" name="id" value="<?php echo e($data->id); ?>">
					  <input type="hidden" class="form-control" id="oldtitle" name="oldtitle" value="<?php echo e($data->judul); ?>">
					  <input type="hidden" class="form-control" id="oldphoto" name="oldphoto" value="<?php echo e($data->foto); ?>">
					  <input type="hidden" class="form-control" id="oldsummary" name="oldsummary" value="<?php echo e($data->rangkuman); ?>">
					  <input type="hidden" class="form-control" id="oldcategory" name="oldcategory" value="<?php echo e($data->kategori); ?>">
					  <input type="hidden" class="form-control" id="createddata" name="createddata" value="<?php echo e($data->created_at); ?>">
					  <input type="hidden" class="form-control" id="status" name="status" value="<?php echo e($data->status); ?>">
					  <div class="form-group">
						<label for="title">Title</label>
						<input type="text" class="form-control" id="title" name="title" value="<?php echo e($data->judul); ?>">
						<small>Max. Characters : 250 Characters</small>
					  </div>
					  <div class="form-group">
						<label for="summary">Summary</label>
						<textarea type="text" rows="4" class="form-control" name="summary"><?php echo e($data->rangkuman); ?></textarea>
						<small>Max. Characters : 250 Characters</small>
					  </div>
					  <div class="form-group">
                        <label>Category</label>
                        <select class="form-control" name="category">
						  <option value="">-- Choose Category --</option>
                          <option value="Trend">Trend</option>
                          <option value="Economy">Economy</option>
                          <option value="Sport">Sport</option>
                          <option value="Technology">Technology</option>
                          <option value="International">International</option>
						  <option value="Otomotive">Otomotive</option>
						  <option value="Health">Health</option>
						  <option value="Travel">Travel</option>
						  <option value="Entertainment">Entertainment</option>
                        </select>
                      </div>
					  <div class="form-group">
							<label for="article">Article</label>
							<textarea type="text" rows="10" class="form-control" id="article" name="article"><?php echo e($data->isiberita); ?></textarea>
							<small>Max. Characters : 2000 Characters</small>
					  </div>
					  <div class="form-group">
							<label for="exampleInputFile">Upload Photo</label>
							<div class="input-group">
							  <div class="custom-file">
								<input type="file" class="custom-file-input" id="exampleInputFile" name="foto" onchange="tampilkanPreview(this,'preview')">
								<label class="custom-file-label" for="exampleInputFile">Choose file</label>
							  </div>
							</div>
							<small>Type of File : jpeg or jpg or png. Min. Resolution : 640px x 480px</small>
					  </div>
					  <div class="form-group">
							<label class="col-sm-2 control-label"></label>
							<div class="col-sm-6 col-md-4 pull-left">
								<img id="preview" src="" alt="" width="100%" height="300px"/>
							</div>
					  </div>
					</div>
					<!-- /.card-body -->

					<div class="card-footer">
							<div class="row">
								<div class="col-6">
									<div class="text-left">
										<a href="<?php echo e(route('databerita')); ?>" class="btn btn-danger">Cancel</a>
									</div>
								</div>
								<div class="col-6">
									<div class="text-right">
									  <button type="submit" class="btn btn-primary">Update</button>
									</div>
								</div>
							</div>
						</div>
				  </form>
				</div>
			</div>
			<div class="col-lg-2">
			</div>
		</div>
	  </div>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('accountpanel.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7.4\htdocs\laravels\portomediaberita\resources\views/accountpanel/berita/editnews.blade.php ENDPATH**/ ?>