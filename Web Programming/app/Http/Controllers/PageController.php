<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function page(){
        $paginate=10;
        $pegawai=DB::table('karyawan')->paginate($paginate);
        return view('page',['pegawai'=>$pegawai]);
    }

    public function cari(Request $request){
        $cari=$request->cari;
        $pegawai =DB::table('karyawan')->where('nama','like',"%".$cari."%")->paginate();
        return view('page',['pegawai'=>$pegawai]);
    }
}
