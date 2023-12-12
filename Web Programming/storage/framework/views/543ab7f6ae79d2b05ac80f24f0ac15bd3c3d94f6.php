<?php $__env->startSection('atas'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('tengah'); ?>
<h3 style="text-align:center;color:aliceblue;"><span style="background-color:deeppink;padding-right:20px;padding-left:20px;border-radius:10px;"><b>Edit Pegawai</b></span></h3>

	<a href="/karyawan" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>

	<?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<form action="/karyawan/update" method="post">
                <label for="Nama" style="background-color:aquamarine" class="btn">Nama : <?php echo e($p->Nama); ?></label>
            <br>
                    <label for="Pangkat" style="background-color:aquamarine" class="btn">Pangkat : <?php echo e($p->Pangkat); ?></label>
            <br>
                    <label for="Gaji" style="background-color:aquamarine" class="btn">Gaji :<?php echo e($p->Gaji); ?> </label>


            <br>

	</form>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('arin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\coba2\resources\views/3.blade.php ENDPATH**/ ?>