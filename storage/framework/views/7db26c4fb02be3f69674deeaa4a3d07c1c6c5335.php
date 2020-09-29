

<?php $__env->startSection('databeritaperid'); ?>

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
	
	<div class="content">
      <div class="container-fluid">
		<div class="card">
              <div class="card-header">
                <h3 class="card-title">News Data on Process</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th><center>No</center></th>
                      <th><center>Title</center></th>
					  <th><center>Permission</center></th>
					  <th><center>Updated at</center></th>
                    </tr>
                  </thead>
                  <tbody>
				    <?php $no = 1; ?>
					<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
					  <td><center><?php echo $no++; ?></center></td>
                      <td><?php echo e($news->judul); ?></td>
					  <?php if(Auth::user()->jenisakun == "2"): ?>
						  <?php if($news->status == 'published'): ?>
							<td><center><span class="badge bg-success">PUBLISHED</center></td>
						  <?php elseif($news->status == 'needtobeupdated'): ?>
							<td><center><span class="badge bg-warning">NEED PERMISSION TO UPDATE</center></td>
						  <?php elseif($news->status == 'needdelete'): ?>
							<td><center><span class="badge bg-danger">NEED PERMISSION TO DELETE</center></td>
						  <?php elseif($news->status == 'rejected' or $news->status == 'rejectedforchangedata'): ?>
						    <td><center><span class="badge bg-danger">REJECTED</center></td>
						  <?php elseif($news->status == 'draft'): ?>
							<td><center><span class="badge bg-info">DRAFT</center></td>
						  <?php elseif($news->status == 'readytopublish'): ?>
							<td><center><span class="badge bg-primary">NEED PERMISSION TO PUBLISH</center></td>
					      <?php endif; ?>
					  <?php endif; ?>
					  <td><center><?php echo e($news->updateddata); ?></center></td>
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
<?php echo $__env->make('accountpanel.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7.4\htdocs\laravels\portomediaberita\resources\views/accountpanel/berita/databyid.blade.php ENDPATH**/ ?>