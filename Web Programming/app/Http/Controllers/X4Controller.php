<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\LinesOfCode\Counter;

class X4Controller extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$shop = DB::table('shoppingchart')->get();
    	// mengirim data pegawai ke view index
    	return view('indexshop',['shop' => $shop]);

    }
    public function beli()
    {
        return view('belishopping');
    }

    public function store(Request $request)
    {
	// insert data ke table pegawai
	DB::table('shoppingchart')->insert([
		'KodeBarang' => $request->KodeBarang,
		'Jumlah' => $request->Jumlah ,
		'Harga' => $request->Harga
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/shopping');
    }
    public function batal($id){
        DB::table('shoppingchart')->where('id',$id)->delete();
        return redirect('/shopping');
    }
}
