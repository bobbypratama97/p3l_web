<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\faq;

class faqController extends Controller
{
    function index(){
        $data = faq::all(); 
        return view('showallfaq',['data' => $data]);
    }
}
