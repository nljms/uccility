<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampleGradingController extends Controller
{
    public function index()
    {
    	return view('sample.grading-summary');
    }
}
