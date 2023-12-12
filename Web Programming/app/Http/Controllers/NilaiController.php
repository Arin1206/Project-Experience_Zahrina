<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
        $paginate=10;
    	$pegawai = DB::table('nilaikuliah')->paginate($paginate);
    	// mengirim data pegawai ke view index
    	return view('a',['pegawai' => $pegawai]);
    }
    public function tambah()
    {
        return view('tambah');
    }
    public function store(Request $request)
    {
	// insert data ke table pegawai
	DB::table('nilaikuliah')->insert([
		'NRP' => $request->NRP,
		'NilaiAngka' => $request->NilaiAngka,
		'SKS' => $request->SKS
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/nilai');
    }
    public function view($id){
        $pegawai=DB::table('nilaikuliah')->where('id',$id)->get();
        return view('viewi',['pegawai'=>$pegawai]);
    }
}
