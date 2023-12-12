<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\LinesOfCode\Counter;

class PegawaiController extends Controller
{
       public function index()
    {
    	// mengambil data dari table pegawai
         $paginate=10;
    	$pegawai = DB::table('karyawan')->paginate($paginate);
        DB::table('pagecounter')->increment('counter');
        $ppl = DB::table('pagecounter')->get();
    	// mengirim data pegawai ke view index
    	return view('index',['pegawai' => $pegawai,'pp'=>$ppl]);

    }
    public function tambah()
    {
        return view('tambah');
    }

    public function store(Request $request)
    {
	// insert data ke table pegawai
	DB::table('karyawan')->insert([
		'nama' => $request->nama,
		'jabatan' => $request->jabatan,
		'umur' => $request->umur,
		'alamat' => $request->alamat
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/plus');
    }

    public function edit($id){
        $pegawai=DB::table('karyawan')->where('id',$id)->get();
        return view('edit',['pegawai'=>$pegawai]);
    }

    public function update(Request $request){
        DB::table('karyawan')->where('id',$request->id)->update([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'umur' => $request->umur,
            'alamat' => $request->alamat
        ]);
        return redirect('/plus');
    }

    public function hapus($id){
        DB::table('karyawan')->where('id',$id)->delete();
        return redirect('/plus');
    }
    public function cari(Request $request){
        $cari=$request->cari;
        $pegawai =DB::table('karyawan')->where('nama','like',"%".$cari."%")->paginate();
        return view('index',['pegawai'=>$pegawai]);
    }
    public function view($id){
        $pegawai=DB::table('karyawan')->where('id',$id)->get();
        return view('viewi',['pegawai'=>$pegawai]);
    }

}
