

<?php $__env->startSection('halamanutama'); ?>

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
		
        <div class="row">
			<div class="col-12 col-lg-9">
				<div class="card">
				  <!-- /.card-header -->
				  <div class="card-body">
					<div id="CarouselGambar" class="carousel slide" data-ride="carousel">
					  <ol class="carousel-indicators">
						<?php $__currentLoopData = $imageslide; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $carousel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<li data-target="#CarouselGambar" data-slide-to="<?php echo e($loop->index); ?>" class=" <?php echo e($loop->first ? 'active': ''); ?>"></li>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					  </ol>
					  <div class="carousel-inner">
					    <?php $__currentLoopData = $imageslide; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recentnews): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="carousel-item <?php echo e($loop->first ? 'active': ''); ?>">
						  <a href="#">
						  <picture>
							<source media="(max-width: 400px)" srcset="<?php echo e(url('/berita/xs/'.$recentnews->foto)); ?>">
							<source media="(max-width: 800px)" srcset="<?php echo e(url('/berita/md/'.$recentnews->foto)); ?>">
							<img style="width:100%" src="<?php echo e(url('/berita/lg/'.$recentnews->foto)); ?>" alt="IfItDoesntMatchAnyMedia">
						  </picture>
						  <div class="carousel-caption">
							<h6><b class="btn btn-sm bg-secondary"><?php echo e($recentnews->judul); ?></b></h6>
						  </div>
						  </a>
						</div>
					  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					  </div>
					  <a class="carousel-control-prev" href="#CarouselGambar" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					  </a>
					  <a class="carousel-control-next" href="#CarouselGambar" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					  </a>
					</div>
				  </div>
				  <!-- /.card-body -->
				</div>
				<div class="card">
				  <div class="card-header">
					<h3 class="card-title">
					  <i class="fas fa-newspaper"></i>
					  Recent News
					</h3>
				  </div>
				  <!-- /.card-header -->
				  <div class="card-body">
				  <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $newsdata): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<dl class="row">
						  <dt class="col-12 col-sm-4">
							<picture>
								<source media="(max-width: 400px)" srcset="<?php echo e(url('/berita/xs/'.$newsdata->foto)); ?>">
								<source media="(max-width: 800px)" srcset="<?php echo e(url('/berita/md/'.$newsdata->foto)); ?>">
								<img style="width:100%" src="<?php echo e(url('/berita/lg/'.$newsdata->foto)); ?>" width="240" height="180" alt="IfItDoesntMatchAnyMedia">
							</picture>
						  </dt>
						  <dd class="col-12 col-sm-8">
							<div class="row">
								<div class="col-12 col-sm-8">
									<a href="/home/news/<?php echo e($newsdata->judul); ?>" style="color:black;"><?php echo e($newsdata->judul); ?></a>
								</div>
								<div class="col-12 col-sm-4">
									<a href="/home/news/<?php echo e($newsdata->judul); ?>"  style="color:black;"><small><?php echo e($newsdata->created_at); ?></small></a> | 
									<a href="/home/news/<?php echo e($newsdata->judul); ?>"  style="color:black;"><small><?php echo e($newsdata->kategori); ?></small></a>
								</div>
							</div>
							<a href="/home/news/<?php echo e($newsdata->judul); ?>" style="color:black;"><?php echo e($newsdata->rangkuman); ?></a>
						  </dd>
					</dl>
				  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				  </div>
				  <!-- /.card-body -->
				</div>
			</div>
			
			<div class="col-12 col-lg-3">
				<div class="card">
				  <div class="card-header">
					<h3 class="card-title">
					  <i class="fas fa-user-edit"></i>
					  Recent Thread
					</h3>
				  </div>
				  <!-- /.card-header -->
				  <div class="card-body">
					<?php $__currentLoopData = $thread; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<dd><a href="home/thread/<?php echo e($article->judul); ?>"><?php echo e($article->judul); ?></a></dd>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				  </div>
				  <!-- /.card-body -->
				</div>
				<div class="card">
				  <div class="card-header">
					<h3 class="card-title">
					  <i class="fas fa-star"></i>
					  Popular News
					</h3>
				  </div>
				  <!-- /.card-header -->
				  <div class="card-body">
					<dl class="row">
						<?php $no = 1; ?>
						<?php $__currentLoopData = $popular; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trendnews): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						  <dt class="col-sm-3"><center><h2>#<?php echo $no++; ?></h2></center></dt>
						  <dd class="col-sm-9"><a href="/home/news/<?php echo e($trendnews->judul); ?>" style="color:black;"><?php echo e($trendnews->judul); ?></a></dd>
					    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</dl>
				  </div>
				  <!-- /.card-body -->
				</div>
			</div>
		</div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('halamanutama.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7.4\htdocs\laravels\portomediaberita\resources\views/halamanutama/halamanutama.blade.php ENDPATH**/ ?>