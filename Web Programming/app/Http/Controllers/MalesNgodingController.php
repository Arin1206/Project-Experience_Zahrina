<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MalesNgodingController extends Controller
{
    public function input(){
        return view('input');
    }

    public function prs(Request $request){
        $this->validate($request,[
            'nama' => 'required|min:5|max:20|',
            'pekerjaan' => 'required|alpha',
            'usia' => 'required|numeric'
        ]);
        return view('prs',['data' => $request]);
    }
}
