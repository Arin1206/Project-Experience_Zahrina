<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$pp = DB::table('karyawan1')->get();
    	// mengirim data pegawai ke view index
    	return view('1',['pp' => $pp]);

    }
    public function edi($NIP){
        $pegawai=DB::table('karyawan1')->where('NIP',$NIP)->get();
        return view('2',['pp'=>$pegawai]);
    }
    public function upda(Request $request){
        DB::table('karyawan1')->where('NIP',$request->NIP)->update([
            'Nama' => $request->Nama,
            'Pangkat' => $request->Pangkat,
            'Gaji' => $request->Gaji
        ]);
        return redirect('/karyawan');
    }
    public function view($NIP){
        $pegawai=DB::table('karyawan1')->where('NIP',$NIP)->get();
        return view('3',['pegawai'=>$pegawai]);
    }
}
