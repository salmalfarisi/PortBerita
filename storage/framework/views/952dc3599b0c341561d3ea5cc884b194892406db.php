


<?php $__env->startSection('detailpublication'); ?>

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
		
		<?php if($total == '1'): ?>
			<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Detail Publication</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="#" class="form-horizontal">
			  <?php echo e(method_field('PUT')); ?>

			  <?php echo e(csrf_field()); ?>

                <div class="card-body">
				  <input type="hidden" class="form-control" id="id" value="<?php echo e($data->id); ?>">
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Author</label>
                    <div class="col-sm-10">
						<p><b><?php echo e(\App\User::where(['id' => $data->iduser])->pluck('nama')->first()); ?></b></p>
                    </div>
                  </div>
				  <div class="form-group row">
                    <label for="writer" class="col-sm-2 col-form-label">Permission</label>
                    <div class="col-sm-10"><p>
						<?php if($data->status == "readytopublish"): ?>
							Need Permission to Publish News
						<?php elseif($data->status == "needtobeupdated"): ?>
						    Need Permission to Change News Data
						<?php elseif($data->status == "needdelete"): ?>  
						    Need Permission to Delete News Data
						<?php endif; ?>
                    </p></div>
                  </div>
				  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Title</label>
					<div class="col-sm-10">
						<p><b><?php echo e($data->judul); ?></b></p>
					</div>
				  </div>
				  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Category</label>
					<div class="col-sm-10">
						<p><?php echo e($data->kategori); ?></p>
					</div>
				  </div>
				  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Summary</label>
					<div class="col-sm-10">
						<p><?php echo str_replace("\r","<br/>", $data->rangkuman); ?></p>
					</div>
				  </div>
				  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Article</label>
					<div class="col-sm-10">
						<p><?php echo str_replace("\r","<br/>", $data->isiberita); ?></p>
					</div>
				  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="button" class="btn btn-danger float-left" data-toggle="modal" data-target="#tolakpermintaan">
					Cancel
                  </button>
                  <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#terimapermintaan">
					Accept
                  </button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
		<?php elseif($total == '2'): ?>
			<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Identity of Author</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <div class="card-body">
                  <div class="form-group row">
                    <label for="writer" class="col-sm-2 col-form-label">Author</label>
                    <div class="col-sm-10">
						<?php echo e(\App\User::where(['id' => $data->iduser])->pluck('nama')->first()); ?>

                    </div>
                  </div>
				  <div class="form-group row">
                    <label for="writer" class="col-sm-2 col-form-label">Permission</label>
                    <div class="col-sm-10">
						<?php if($data->status == "readytopublish"): ?>
							Need Permission to Publish News
						<?php elseif($data->status == "needtobeupdated"): ?>
						    Need Permission to Change News Data
						<?php elseif($data->status == "needdelete"): ?>  
						    Need Permission to Delete News Data
						<?php endif; ?>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
            </div>
			<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Detail Publication for Old Data</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <div class="card-body">
                  <div class="form-group row">
                    <label for="writer" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
						<?php echo e($olddata->judul); ?>

                    </div>
                  </div>
				  <div class="form-group row">
                    <label for="writer" class="col-sm-2 col-form-label">Summary</label>
                    <div class="col-sm-10">
						<?php echo e($olddata->rangkuman); ?>

                    </div>
                  </div>
				  <div class="form-group row">
                    <label for="writer" class="col-sm-2 col-form-label">Category</label>
                    <div class="col-sm-10">
						<?php echo e($olddata->kategori); ?>

                    </div>
                  </div>
				  <div class="form-group row">
                    <label for="writer" class="col-sm-2 col-form-label">Article</label>
                    <div class="col-sm-10">
						<?php echo e($olddata->isiberita); ?>

                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
            </div>
			<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Detail Permission Publication for Change Data</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <div class="card-body">
				  <input type="hidden" class="form-control" id="id" value="<?php echo e($olddata->id); ?>">
				  <?php if($olddata->judul != $data->judul): ?>
                  <div class="form-group row">
                    <label for="writer" class="col-sm-2 col-form-label bg-warning">Title</label>
                    <div class="col-sm-10">
					 <?php echo e($data->judul); ?>

                    </div>
                  </div>
				  <?php endif; ?>
				  <?php if($olddata->rangkuman != $data->rangkuman): ?>
				  <div class="form-group row">
                    <label for="writer" class="col-sm-2 col-form-label bg-warning">Summary</label>
                    <div class="col-sm-10">
						<?php echo e($data->rangkuman); ?>

                    </div>
                  </div>
				  <?php endif; ?>
				  <?php if($olddata->kategori != $data->kategori): ?>
				  <div class="form-group row">
                    <label for="writer" class="col-sm-2 col-form-label bg-warning">Category</label>
                    <div class="col-sm-10">
						<?php echo e($data->kategori); ?>

                    </div>
                  </div>
				  <?php endif; ?>
				  <?php if($olddata->isiberita != $data->isiberita): ?>
				  <div class="form-group row">
                    <label for="writer" class="col-sm-2 col-form-label bg-warning">Article</label>
                    <div class="col-sm-10">
						<?php echo e($data->isiberita); ?>

                    </div>
                  </div>
				  <?php endif; ?>
                </div>
                <div class="card-footer">
				  <button type="button" class="btn btn-danger float-left" data-toggle="modal" data-target="#tolakperubahandata">
					Cancel
                  </button>
                  <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#terimaperubahandata">
					Accept
                  </button>
                </div>
                <!-- /.card-footer -->
            </div>
		<?php endif; ?>
		</div>
	</div>
	
	<?php if($permintaanuser == "deletedata" or $permintaanuser == "publishdata"): ?>
		<div class="modal fade" id="terimapermintaan">
			<div class="modal-dialog">
			  <div class="modal-content bg-primary">
				<div class="modal-header">
				  <h4 class="modal-title">Accept Permission</h4>
				  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
				</div>
				<form action="/webkhusus/publication/detail/{judul}/result" class="form-horizontal" method="post">
					<?php echo e(method_field('PUT')); ?>

					<?php echo e(csrf_field()); ?>

				<div class="modal-body">
				  <input type="hidden" name="id" value="<?php echo e($data->id); ?>">
				  <input type="hidden" name="status" value="<?php echo e($data->status); ?>">
				  <input type="hidden" name="permission" value="<?php echo e($permintaanuser); ?>">
				  <input type="hidden" name="result" value="accept">
				  <p><?php echo e($accept); ?></p>
				</div>
				<div class="modal-footer justify-content-between">
				  <button type="button" class="btn btn-outline-light btn-danger" data-dismiss="modal">Close</button>
				  <button type="submit" class="btn btn-outline-light btn-primary">Accept</button>
				</div>
				</form>
			  </div>
			  <!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
		<!-- /.modal -->
		
		<div class="modal fade" id="tolakpermintaan">
			<div class="modal-dialog">
			  <div class="modal-content bg-danger">
				<div class="modal-header">
				  <h4 class="modal-title">Cancel Permission</h4>
				  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
				</div>
				<form action="/webkhusus/publication/detail/{judul}/result" class="form-horizontal" method="post">
					<?php echo e(method_field('PUT')); ?>

					<?php echo e(csrf_field()); ?>

				<div class="modal-body">
				  <input type="hidden" name="id" value="<?php echo e($data->id); ?>">
				  <input type="hidden" name="status" value="<?php echo e($data->status); ?>">
				  <input type="hidden" name="permission" value="<?php echo e($permintaanuser); ?>">
				  <input type="hidden" name="result" value="cancel">
				  <p><?php echo e($cancel); ?></p>
				</div>
				<div class="modal-footer justify-content-between">
				  <button type="button" class="btn btn-outline-light btn-danger" data-dismiss="modal">Close</button>
				  <button type="submit" class="btn btn-outline-light btn-primary">Accept</button>
				</div>
				</form>
			  </div>
			  <!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
		<!-- /.modal -->
	<?php elseif($permintaanuser == 'changedata'): ?>
		<div class="modal fade" id="terimaperubahandata">
			<div class="modal-dialog">
			  <div class="modal-content bg-primary">
				<div class="modal-header">
				  <h4 class="modal-title">Accept Permission</h4>
				  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
				</div>
				<form action="/webkhusus/publication/detail/<?php echo e($olddata->judul); ?>/updatedata/result" class="form-horizontal" method="post">
					<?php echo e(method_field('PUT')); ?>

					<?php echo e(csrf_field()); ?>

				<div class="modal-body">
				  <input type="hidden" name="oldid" value="<?php echo e($olddata->id); ?>">
				  <input type="hidden" name="newid" value="<?php echo e($data->id); ?>">
				  <input type="hidden" name="permission" value="<?php echo e($permintaanuser); ?>">
				  <input type="hidden" name="result" value="accept">
				  <p>Are you sure want to agree this permission ?</p>
				</div>
				<div class="modal-footer justify-content-between">
				  <button type="button" class="btn btn-outline-light btn-danger" data-dismiss="modal">Close</button>
				  <button type="submit" class="btn btn-outline-light btn-primary">Accept</button>
				</div>
				</form>
			  </div>
			  <!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
		<!-- /.modal -->
		
		<div class="modal fade" id="tolakperubahandata">
			<div class="modal-dialog">
			  <div class="modal-content bg-danger">
				<div class="modal-header">
				  <h4 class="modal-title">Cancel Permission</h4>
				  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
				</div>
				<form action="/webkhusus/publication/detail/<?php echo e($olddata->judul); ?>/updatedata/result" class="form-horizontal" method="post">
					<?php echo e(method_field('PUT')); ?>

					<?php echo e(csrf_field()); ?>

				<div class="modal-body">
				  <input type="hidden" name="oldid" value="<?php echo e($olddata->id); ?>">
				  <input type="hidden" name="newid" value="<?php echo e($data->id); ?>">
				  <input type="hidden" name="permission" value="<?php echo e($permintaanuser); ?>">
				  <input type="hidden" name="result" value="cancel">
				  <p>Are you sure want to cancel this permission ?</p>
				</div>
				<div class="modal-footer justify-content-between">
				  <button type="button" class="btn btn-outline-light btn-danger" data-dismiss="modal">Close</button>
				  <button type="submit" class="btn btn-outline-light btn-primary">Accept</button>
				</div>
				</form>
			  </div>
			  <!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
		<!-- /.modal -->
	<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('accountpanel.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7.4\htdocs\laravels\portomediaberita\resources\views/accountpanel/publikasi/show.blade.php ENDPATH**/ ?>