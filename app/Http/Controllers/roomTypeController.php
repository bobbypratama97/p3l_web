<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\roomtype;


class roomTypeController extends Controller
{
   /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    } 

    function index(){
        $data = roomtype::all(); 
        return view('showroomtype',['data' => $data]);
    }
    

}
