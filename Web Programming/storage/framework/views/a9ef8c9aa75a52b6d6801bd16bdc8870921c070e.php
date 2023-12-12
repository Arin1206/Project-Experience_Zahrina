<style>
</style>

<?php $__env->startSection('atas'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('tengah'); ?>
<table class="table table-bordered table-striped table-hover">
    <tr>
        <th style="width:15%;">Nama</th>
        <th style="width:3%;">Pangkat</th>
        <th style="width:5%;">Gaji</th>
        <th style="width:5%;">Opsi</th>
    </tr>
    <?php $__currentLoopData = $pp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
    <td><b><?php echo e($p->Nama); ?></b></td>
    <td><?php echo e($p->Pangkat); ?></td>
    <td style="text-align:center"><?php echo e(number_format(  $p->Gaji,2,",",".")); ?></td>
    <td style="text-align:center">
        <a href="/karyawan/view/<?php echo e($p->NIP); ?>" class="btn btn-success">View</a>
        <a href="/karyawan/edit/<?php echo e($p->NIP); ?>" class="btn btn-warning">Edit</a>
    </td>
</tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('arin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\coba2\resources\views/1.blade.php ENDPATH**/ ?>