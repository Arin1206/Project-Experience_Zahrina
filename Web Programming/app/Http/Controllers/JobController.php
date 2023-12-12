<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

use PDF;

class JobController extends Controller
{
    public function index()
    {
    	$job = Job::all();
    	return view('job',['job'=>$job]);
    }

    public function cetak_pdf()
    {
    	$job = Job::all();

    	$pdf = PDF::loadview('job_pdf',['job'=>$job]);
    	return $pdf->download('laporan-job-pdf');
    }
}
