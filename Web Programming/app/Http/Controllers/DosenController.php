<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class DosenController extends Controller
{
    public function about(){
        $nama = "Zahrina Candrakanti";
        $matkul = ["Algoritma dan pemrograman","Logika Struktur Diskrit","Pemrograman Web"];
        return view('biodata',["nama"=>$nama,"matkul"=>$matkul]);
    }
}
