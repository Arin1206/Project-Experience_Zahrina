<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class ChatController extends Controller
{
    public function index(){
        $chat=DB::table('chat')->get();
        return view('chat',['pp' => $chat]);
    }
}
