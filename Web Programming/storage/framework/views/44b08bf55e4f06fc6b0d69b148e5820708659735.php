<style>
</style>

<?php $__env->startSection('atas'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('tengah'); ?>
<br>
<a href="/shopping/beli" class="btn btn-success">+ BELI</a>
<br>
<br>
<table class="table table-bordered table-striped table-hover">
    <thead class="table-dark">
    <tr style="text-align:center;">
        <th style="width:10%;">Kode Pembelian</th>
        <th style="width:10%;">Kode Barang</th>
        <th style="width:10%;">Jumlah Pembelian</th>
        <th style="width:10%;">Harga per item</th>
        <th style="width:10%;">Total</th>
        <th style="width:10%;">Action</th>
    </tr>
</thead>
    <?php $__currentLoopData = $shop; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr class="table-black" style="text-align:center;">
    <td><b><?php echo e($p->id); ?></b></td>
    <td><?php echo e($p->KodeBarang); ?></td>
    <td><b><?php echo e($p->Jumlah); ?></b></td>
    <td><?php echo e("Rp " .number_format(  $p->Harga,0,",",".")); ?></td>
    <td><b><?php echo e("Rp " .number_format($p->Jumlah*$p->Harga,0,",",".")); ?></b></td>
    <td style="text-align:center">
        <a href="/shopping/batal/<?php echo e($p->id); ?>" class="btn btn-warning">batal</a>
    </td>
</tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('arin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\coba2\resources\views/indexshop.blade.php ENDPATH**/ ?>