<style>
</style>
@extends('arin')
@section('atas')
@endsection
@section('tengah')
<table class="table table-bordered table-striped table-hover">
    <tr>
        <th style="width:15%;">Nama</th>
        <th style="width:3%;">Pangkat</th>
        <th style="width:5%;">Gaji</th>
        <th style="width:5%;">Opsi</th>
    </tr>
    @foreach ($pp as $p)
    <tr>
    <td><b>{{ $p->Nama}}</b></td>
    <td>{{ $p->Pangkat}}</td>
    <td style="text-align:center">{{number_format(  $p->Gaji,2,",",".")}}</td>
    <td style="text-align:center">
        <a href="/karyawan/view/{{ $p->NIP }}" class="btn btn-success">View</a>
        <a href="/karyawan/edit/{{ $p->NIP }}" class="btn btn-warning">Edit</a>
    </td>
</tr>
    @endforeach
</table>
@endsection
