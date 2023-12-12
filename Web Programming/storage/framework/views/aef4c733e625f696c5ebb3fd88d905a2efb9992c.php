<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .btn-warna{
        background-color:blueviolet;
        color:aliceblue;
    }
    .btn-warna:hover{
        background-color:deeppink;
        color:aliceblue;
        border:3px solid white;
    }
    </style>
</head>
<body style="background:url('https://wallpapercave.com/wp/wp4843132.jpg')">
    <div class="container">
        <br>
	<h3 style="text-align:center;color:aliceblue;"><span style="background-color:deeppink;padding-right:20px;padding-left:20px;border-radius:10px;"><b>Edit Pegawai</b></span></h3>

	<a href="/plus" class="btn btn-warna"> Kembali</a>

	<br/>
	<br/>

	<?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<form action="/plus/update" method="post">
		<?php echo csrf_field(); ?>
            <div class="form-group ">
            <div class="row">
                <input type="hidden" name="id" value="<?php echo e($p->id); ?>">
                <label for="nama" class="col-md-2" style="background-color:aquamarine" class="btn">Nama </label>
		        <input type="text" required="required" name="nama" class="col-md-10" value="<?php echo e($p->nama); ?>"  id="nama"> <br/>
            </div>
            <br>
            <div class="form-group ">
                <div class="row">
                    <label for="jabatan" class="col-md-2" style="background-color:aquamarine" class="btn">Jabatan</label>
                    <input type="text" required="required" name="jabatan" class="col-md-10" value="<?php echo e($p->jabatan); ?>" id="jabatan"> <br/>
                </div>
        </div>
        <br>
        <div class="form-group">
            <div class="row">
                    <label for="umur" class="col-md-2" style="background-color:aquamarine" class="btn">Umur</label>
		            <input type="number" required="required" name="umur" value="<?php echo e($p->umur); ?>"  id="umur" class="col-md-10"> <br/>
        </div>
        <br>
    </div>
    <div class="form-group">
        <div class="row">
            <label for="alamat" class="col-md-2" style="background-color:aquamarine" class="btn">Alamat</label>
		            <textarea required="required" name="alamat" class="col-md-10" id="alamat"><?php echo e($p->alamat); ?></textarea> <br/>
                </div>
            </div>
            <br>

		        <input type="submit" value="Simpan Data" class="btn btn-warna" style="margin-left:90%;">
	</form>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\coba2\resources\views/edit.blade.php ENDPATH**/ ?>