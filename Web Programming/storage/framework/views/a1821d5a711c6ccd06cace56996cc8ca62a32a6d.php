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
<body style="background:url('https://marketplace.canva.com/EAEraNedzGM/1/0/1600w/canva-it%27s-time-to-relax-desktop-wallpaper-ZOeDiB-u6ZQ.jpg')">
    <div class="container">
    <br>
	<h3 style=text-align:center;><b>Tambah Pegawai</b></h3>

	<a href="/plus" class="btn btn-warna"> Kembali</a>

	<br/>
	<br/>

	<form action="/plus/store" method="POST">
		<?php echo e(csrf_field()); ?>


        <div class="col-md-12">
            <div class="row">
            <div class="col-md-6">
		    <span style="background-color:aquamarine" class="btn">Nama</span> <input type="text" name="nama" class="form-control" required="required"> <br/>
            </div>
            <div class="col-md-6">
                <span style="background-color:aquamarine" class="btn">Jabatan </span><input type="text" name="jabatan" class="form-control" required="required"> <br/>
            </div>
        </div>
        </div>
        <div class="col-md-12">
            <div class="row">
            <div class="col-md-2">
                <span style="background-color:aquamarine" class="btn">Umur </span><input type="number" name="umur" class="form-control" required="required"> <br/>
            </div>
            <div class="col-md-10">
                <span style="background-color:aquamarine" class="btn">Alamat </span><textarea name="alamat" class="form-control" required="required"></textarea> <br/>
            </div>
            </div>
        </div>
		<input type="submit" class="btn btn-warna" style="text-align:center;margin-left:88%" value="Simpan Data">
	</form>
</div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\coba2\resources\views/tambah.blade.php ENDPATH**/ ?>