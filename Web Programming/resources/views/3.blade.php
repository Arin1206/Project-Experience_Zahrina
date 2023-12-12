@extends('arin')
@section('atas')
@endsection
@section('tengah')
<h3 style="text-align:center;color:aliceblue;"><span style="background-color:deeppink;padding-right:20px;padding-left:20px;border-radius:10px;"><b>Edit Pegawai</b></span></h3>

	<a href="/karyawan" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)
	<form action="/karyawan/update" method="post">
                <label for="Nama" style="background-color:aquamarine" class="btn">Nama : {{ $p->Nama }}</label>
            <br>
                    <label for="Pangkat" style="background-color:aquamarine" class="btn">Pangkat : {{ $p->Pangkat }}</label>
            <br>
                    <label for="Gaji" style="background-color:aquamarine" class="btn">Gaji :{{ $p->Gaji }} </label>


            <br>

	</form>
	@endforeach
@endsection
