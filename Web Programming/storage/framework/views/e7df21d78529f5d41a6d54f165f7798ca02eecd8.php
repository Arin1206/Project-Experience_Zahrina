<!DOCTYPE html>
<html>
<head>
	<title>5026211100-Zahrina</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
    table{
        background-color: rgb(255, 0, 255,0.2);
        border:2px solid white;
        color:white;
    }
    .table-bordered{
        border: 3px solid blueviolet;
    }
    tr:hover{
        background-color: rgb(245, 245, 220,0.6);
        color:black;
        border:2px solid magenta;
    }
    th{
        font-size:18px;
        text-align:center;
        background-color:rgb(0, 255, 255,0.7);
    }
    .btn-warna{
        background-color:blueviolet;
        color:aliceblue;
    }
    .btn-warna:hover{
        background-color:deeppink;
        color:aliceblue;
    }
    .btn-warn{
        background-color:yellow;
    }
    .btn-warn:hover{
        background-color:rgb(213, 213, 0);
    }
    body{
        background:url('https://wallup.net/wp-content/uploads/2016/04/06/327765-nature-sunlight-sky-clouds.jpg');
        background-repeat: no-repeat;
  background-attachment: fixed;
    }
    [data-title]:hover:after {
    opacity: 1;
    transition: all 0.1s ease 0.5s;
    visibility: visible;
}
[data-title]:after {
    content: attr(data-title);
    background-color: deeppink;
    border-radius:10px;
    color: #111;
    font-size: 100%;
    position: absolute;
    padding: 1px 5px 2px 5px;
    bottom: -0.1cm;
    white-space: nowrap;
    box-shadow: 1px 1px 3px white;
    opacity: 0;
    border: 1px solid blueviolet;
    z-index: 99999;
    visibility: hidden;
}
[data-title] {
    position: relative;
}
    </style>
</head>
<body>
<div class="container">
    <br>
	<h3 style="text-align: center;font-family:monospace;color:azure;text-shadow: 0 0 3px #FF0000;"><b>Data Pegawai</b> </h3>
    <h3 style="color:aliceblue">5026211100-Zahrina Candrakanti</h3>
	<a href="/plus/tambah" class="btn btn-warna"> + Tambah Pegawai Baru</a>

	<br/>
    <?php $__currentLoopData = $pp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <h3 style="background-color:aliceblue;color:black">Halaman ini sudah dilihat <?php echo e($p->counter); ?> kali</h3>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	<br/>
    <div class="table-responsive">
	<table class="table-bordered">
		<tr>
			<th style="width:22%;">Nama</th>
			<th style="width:15%;">Jabatan</th>
			<th style="width:5%;">Umur</th>
			<th style="width:15%;">Alamat</th>
			<th style="width:10%;">Opsi</th>
		</tr>
		<?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td data-title="Nama"><b><?php echo e($p->nama); ?></b></td>
			<td data-title="Jabatan"><?php echo e($p->jabatan); ?></td>
			<td style="text-align:center" data-title="Usia"><?php echo e($p->umur); ?></td>
			<td data-title="Alamat"><?php echo e($p->alamat); ?></td>
			<td style="text-align:center">
				<a href="/plus/edit/<?php echo e($p->id); ?>" class="btn btn-warn">Edit</a>
				<a href="/plus/hapus/<?php echo e($p->id); ?>" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</table>
<br>
				Halaman : <?php echo e($pegawai->currentPage()); ?> <br/>
				Jumlah Data : <?php echo e($pegawai->total()); ?> <br/>
				Data Per Halaman : <?php echo e($pegawai->perPage()); ?> <br/>

				<?php echo e($pegawai->links('pagination::bootstrap-5')); ?>

</div></div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\coba2\resources\views/index.blade.php ENDPATH**/ ?>