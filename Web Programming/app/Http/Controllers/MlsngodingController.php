<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MalasngodingEmail;
use Illuminate\Support\Facades\Mail;
class MlsngodingController extends Controller
{
    public function index(){

		Mail::to("testing@malasngoding.com")->send(new MalasngodingEmail());

		return "Email telah dikirim";

	}
}
