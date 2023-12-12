<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KrywnController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$pp = DB::table('karyawan1')->get();
    	// mengirim data pegawai ke view index
    	return view('indexkaryawan',['pp' => $pp]);

    }
    public function edit($NIP){
        $pp=DB::table('karyawan1')->where('NIP',$NIP)->get();
        return view('editkaryawan',['pp'=>$pp]);
    }

    public function update(Request $request){
        DB::table('karyawan1')->where('NIP',$request->NIP)->update([
            'Nama' => $request->Nama,
            'Pangkat' => $request->Pangkat,
            'Gaji' => $request->Gaji
        ]);
        return redirect('/karyawan');
    }
}
