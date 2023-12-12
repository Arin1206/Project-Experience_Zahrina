<style>
</style>

<?php $__env->startSection('atas'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('tengah'); ?>
<br>
	<h3 style=text-align:center;><b>Beli Barang</b></h3>

	<a href="/shopping" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>

	<form action="/shopping/store" method="POST">
		<?php echo e(csrf_field()); ?>


        <div class="col-md-12">
            <div class="row">
            <div class="col-md-6">
		    <span style="background-color:aquamarine" class="btn">Kode Barang</span> <input type="text" name="KodeBarang" class="form-control" required="required|num"> <br/>
            </div>
            <div class="col-md-6">
                <span style="background-color:aquamarine" class="btn"> Jumlah Pembelian</span><input type="text" name="Jumlah" class="form-control" required="required|num"> <br/>
            </div>
        </div>
        </div>
        <div class="col-md-12">
            <div class="row">
            <div class="col-md-10">
                <span style="background-color:aquamarine" class="btn">Harga per item </span><input type="text" name="Harga" class="form-control" required="required|num"> <br/>
            </div>
            </div>
        </div>
		<input type="submit" class="btn btn-primary" style="text-align:center;margin-left:88%" value="Simpan Data">
	</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('arin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\coba2\resources\views/belishopping.blade.php ENDPATH**/ ?>