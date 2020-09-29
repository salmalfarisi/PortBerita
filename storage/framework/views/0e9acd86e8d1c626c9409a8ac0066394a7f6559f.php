<?php if($message = Session::get('sukses')): ?>
<div class="alert alert-success alert-block">
		<button type="button" class="close" data-dismiss="alert">×</button> 
		<strong><?php echo e($message); ?></strong>
	</div>
<?php endif; ?>
 
<?php if($message = Session::get('gagal')): ?>
	<div class="alert alert-danger alert-block">
		<button type="button" class="close" data-dismiss="alert">×</button> 
		<strong><?php echo e($message); ?></strong>
	</div>
<?php endif; ?>
 
<?php if($message = Session::get('peringatan')): ?>
	<div class="alert alert-warning alert-block">
		<button type="button" class="close" data-dismiss="alert">×</button> 
		<strong><?php echo e($message); ?></strong>
	</div>
<?php endif; ?>

<?php if($message = Session::get('info')): ?>
	<div class="alert alert-info alert-block">
		<button type="button" class="close" data-dismiss="alert">×</button> 
		<strong><?php echo e($message); ?></strong>
	</div>
<?php endif; ?><?php /**PATH C:\xampp7.4\htdocs\laravels\portomediaberita\resources\views/accountpanel/notifikasiflash.blade.php ENDPATH**/ ?>