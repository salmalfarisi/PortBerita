<h2>Anda Berhasil Login, <?php echo e(Auth::user()->nama); ?> </h2>

<p>
<?php if( Auth::user()->jenisakun == "0" ): ?>
	Anda Login Sebagai Pengunjung Biasa
<?php elseif( Auth::user()->jenisakun == "1" ): ?>
	Anda Login Sebagai User yang Terdaftar
<?php elseif( Auth::user()->jenisakun == "2" ): ?>
	Anda Login Sebagai Penulis
<?php elseif( Auth::user()->jenisakun == "3" ): ?>
	Anda Login Sebagai Editor
<?php else: ?>
	Error
<?php endif; ?>
</p>

<a href="<?php echo e(route('logoutuntukAdmin')); ?>"><button>Log Out</button></a><?php /**PATH C:\xampp7.4\htdocs\laravels\portomediaberita\resources\views/accountpanel/testing.blade.php ENDPATH**/ ?>