<style>
</style>

<?php $__env->startSection('atas'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('tengah'); ?>
<table class="table table-bordered table-striped table-hover">
    <thead class="table-dark">
    <tr style="text-align:center;">
        <th style="width:10%;">Kode Pegawai</th>
        <th style="width:10%;">Nama Lengkap</th>
        <th style="width:10%;">Divisi</th>
        <th style="width:10%;">Departemen</th>
        <th style="width:10%;">Action</th>
    </tr>
</thead>
    <?php $__currentLoopData = $karyawan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr class="table-black" style="text-align:center;">
    <td><b><?php echo e($p->kodepegawai); ?></b></td>
    <td><?php echo e(strtoupper($p->namalengkap)); ?></td>
    <td><b><?php echo e(strtolower($p->divisi)); ?></b></td>
    <td><b><?php echo e($p->departemen); ?></b></td>
    <td style="text-align:center">
        <a href="/X2/hapus/<?php echo e($p->kodepegawai); ?>" class="btn btn-warning">Hapus</a>
    </td>
</tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<br>
<br>
<a href="/X2/beli" class="btn btn-success">+ Tambah Data</a>
<br>
<br>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('arin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\coba2\resources\views/index2.blade.php ENDPATH**/ ?>