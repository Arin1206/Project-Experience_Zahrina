<style>
</style>
<script>

</script>
@extends('arin')
@section('atas')

@endsection
@section('tengah')
<br>
<a href ="nilai/tambah"class="btn btn-primary">+ Tambah Siswa</a>
<br>
<br>
<table class="table table-bordered table-striped table-hover">
    <tr>
        <th style="width:15%;">ID</th>
        <th style="width:15%;">NRP</th>
        <th style="width:5%;">SKS</th>
        <th style="width:3%;">NilaiAngka</th>
        <th style="width:3%;">NilaiHuruf</th>
        <th style="width:5%;">Bobot</th>
    </tr>
    @foreach ($pegawai as $p)
    <tr>
    <td><b>{{ $p->ID}}</b></td>
    <td>{{ $p->NRP}}</td>
    <td>{{ $p->SKS}}</td>
    <td>{{ $p->NilaiAngka}}</td>
    <td>
        <?php $t = $p->NilaiAngka;
        if ($t <= 41) {
        echo ('D');
        }
        if (41 <= $t and $t<= 60) {
        echo ('C');
        }
        if (61 <= $t and $t<= 80) {
        echo ('B');
        }
        if ($t>= 81) {
        echo ('A');
        }

        ?>
    </td>
    <td>{{ $p->NilaiAngka*$p->SKS}}</td>
</tr>
    @endforeach
</table>
Halaman : {{ $pegawai->currentPage() }} <br/>
				Jumlah Data : {{ $pegawai->total() }} <br/>
				Data Per Halaman : {{ $pegawai->perPage() }} <br/>
			{{ $pegawai->links('pagination::default') }}
@endsection
