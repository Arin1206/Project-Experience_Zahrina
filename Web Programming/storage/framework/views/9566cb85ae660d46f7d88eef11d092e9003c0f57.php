<?php $__env->startSection('atas'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('tengah'); ?>
<h3 style="text-align:center;color:aliceblue;"><span style="background-color:deeppink;padding-right:20px;padding-left:20px;border-radius:10px;"><b>Edit Pegawai</b></span></h3>

	<a href="/karyawan" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>

	<?php $__currentLoopData = $pp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<form action="/karyawan/update" method="post">
		<?php echo e(csrf_field()); ?>

            <div class="form-group ">
            <div class="row">
                <input type="hidden" name="NIP" value="<?php echo e($p->NIP); ?>">
                <label for="Nama" class="col-md-2" style="background-color:aquamarine" class="btn">Nama </label>
		        <input type="text" required="required" name="Nama" class="col-md-10" value="<?php echo e($p->Nama); ?>"  id="Nama"> <br/>
            </div>
            </div>
            <br>
            <div class="form-group ">
                <div class="row">
                    <label for="Pangkat" class="col-md-2" style="background-color:aquamarine" class="btn">Pangkat</label>
                    <input type="text" required="required" name="Pangkat" class="col-md-10" value="<?php echo e($p->Pangkat); ?>" id="Pangkat"> <br/>
                </div>
            </div>
            <br>
            <div class="form-group">
            <div class="row">
                    <label for="Gaji" class="col-md-2" style="background-color:aquamarine" class="btn">Gaji</label>
		            <input type="number" required="required" name="Gaji" value="<?php echo e($p->Gaji); ?>"  id="Gaji" class="col-md-10"> <br/>
            </div>
            <br>
            </div>
            <br>
		        <input type="submit" value="Simpan Data" class="btn btn-primary" style="margin-left:90%;">
	</form>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('arin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\coba2\resources\views/2.blade.php ENDPATH**/ ?>