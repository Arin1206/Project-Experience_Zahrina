@extends('arin')
@section('atas')
@endsection
@section('tengah')
<h3 style="text-align:center;color:aliceblue;"><span style="background-color:deeppink;padding-right:20px;padding-left:20px;border-radius:10px;"><b>Edit Pegawai</b></span></h3>

	<a href="/karyawan" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>

	@foreach($pp as $p)
	<form action="/karyawan/update" method="post">
		{{ csrf_field() }}
            <div class="form-group ">
            <div class="row">
                <input type="hidden" name="NIP" value="{{ $p->NIP }}">
                <label for="Nama" class="col-md-2" style="background-color:aquamarine" class="btn">Nama </label>
		        <input type="text" required="required" name="Nama" class="col-md-10" value="{{ $p->Nama }}"  id="Nama"> <br/>
            </div>
            </div>
            <br>
            <div class="form-group ">
                <div class="row">
                    <label for="Pangkat" class="col-md-2" style="background-color:aquamarine" class="btn">Pangkat</label>
                    <input type="text" required="required" name="Pangkat" class="col-md-10" value="{{ $p->Pangkat }}" id="Pangkat"> <br/>
                </div>
            </div>
            <br>
            <div class="form-group">
            <div class="row">
                    <label for="Gaji" class="col-md-2" style="background-color:aquamarine" class="btn">Gaji</label>
		            <input type="number" required="required" name="Gaji" value="{{ $p->Gaji }}"  id="Gaji" class="col-md-10"> <br/>
            </div>
            <br>
            </div>
            <br>
		        <input type="submit" value="Simpan Data" class="btn btn-primary" style="margin-left:90%;">
	</form>
	@endforeach
@endsection
