<style>
</style>
<script>

</script>

<?php $__env->startSection('atas'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('tengah'); ?>
<br>
<a href ="nilai/tambah"class="btn btn-primary">+ Tambah Siswa</a>
<br>
<br>
<table class="table table-bordered table-striped table-hover">
    <tr>
        <th style="width:15%;">ID</th>
        <th style="width:15%;">NRP</th>
        <th style="width:5%;">SKS</th>
        <th style="width:3%;">NilaiAngka</th>
        <th style="width:3%;">NilaiHuruf</th>
        <th style="width:5%;">Bobot</th>
    </tr>
    <?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
    <td><b><?php echo e($p->ID); ?></b></td>
    <td><?php echo e($p->NRP); ?></td>
    <td><?php echo e($p->SKS); ?></td>
    <td><?php echo e($p->NilaiAngka); ?></td>
    <td>
        <?php $t = $p->NilaiAngka;
        if ($t <= 41) {
        echo ('D');
        }
        if (41 <= $t and $t<= 60) {
        echo ('C');
        }
        if (61 <= $t and $t<= 80) {
        echo ('B');
        }
        if ($t>= 81) {
        echo ('A');
        }

        ?>
    </td>
    <td><?php echo e($p->NilaiAngka*$p->SKS); ?></td>
</tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
Halaman : <?php echo e($pegawai->currentPage()); ?> <br/>
				Jumlah Data : <?php echo e($pegawai->total()); ?> <br/>
				Data Per Halaman : <?php echo e($pegawai->perPage()); ?> <br/>
			<?php echo e($pegawai->links('pagination::default')); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('arin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\coba2\resources\views/a.blade.php ENDPATH**/ ?>