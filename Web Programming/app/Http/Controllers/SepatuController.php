<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sepatu;

class SepatuController extends Controller
{
    public function index(){
        $sepatu=Sepatu::all();
        return view('sepatu',['sepatu'=>$sepatu]);
    }
    public function tambah(){
        return view('penambahan');
    }
    public function simpan(Request $request)
    {
        $this->validate($request,[
    		'nama' => 'required|min:5',
    		'alamat' => 'required|min:10'
    	]);

        Sepatu::create([
    		'nama' => $request->nama,
    		'alamat' => $request->alamat
    	]);

    	return redirect('/sepatu');
    }
    public function edit($id)
    {
   $pegawai = Sepatu::find($id);
   return view('perbaikan', ['pegawai' => $pegawai]);
    }
    public function hasil($id,Request $request){
        $this->validate($request,[
            'nama' => 'required',
            'alamat' => 'required'
         ]);

         $pegawai = Sepatu::find($id);
         $pegawai->nama = $request->nama;
         $pegawai->alamat = $request->alamat;
         $pegawai->save();
         return redirect('/sepatu');
    }
    public function delete($id)
{
    $pegawai = Sepatu::find($id);
    $pegawai->delete();
    return redirect('/sepatu');
}
}
